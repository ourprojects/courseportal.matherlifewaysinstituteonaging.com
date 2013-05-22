<?php

class TViewRenderer extends CViewRenderer
{
	
	const ID = 'module.translate.TViewRenderer';
	
	public $viewSourceTable = '{{translate_view_source}}';
	
	public $viewTable = '{{translate_view}}';
	
	public $viewMessageTable = '{{translate_view_message}}';
	
	private $_messages;

	private $_translator;
	
	private $_viewCompiler;
	
	private $_dal;
	
	public function getMessages()
	{
		if(!isset($this->_messages))
		{
			$this->_messages = Yii::app()->getMessages();
			if(!$this->_messages instanceof TMessageSource)
				throw new CException(Yii::t(self::ID, __CLASS__.' is only compatible with message source of type TMessageSource.'));
		}
		return $this->_messages;
	}
	
	public function getViewCompiler()
	{
		if(!isset($this->_viewCompiler))
			$this->_viewCompiler = new ViewCompiler($this->getMessages()->messageCategory, $this->getDal());
		return $this->_viewCompiler;
	}
	
	public function getTranslator()
	{
		if(!isset($this->_translator))
			$this->_translator = TranslateModule::translator();
		return $this->_translator;
	}
	
	public function getDal()
	{
		if(!isset($this->_dal))
		{
			$this->_dal = new ViewRendererDAL($this);
		}
		return $this->_dal;
	}

	/**
	 * Parses the source view file and saves the results as another file.
	 * This method is required by the parent class.
	 * @param string $sourceFile the source view file path
	 * @param string $viewFile the resulting view file path
	 */
	protected function generateViewFile($sourceFile, $viewFile)
	{
		$viewId = $this->getDal()->selectViewId($sourceFile, $viewFile);
		
		if($viewId === false)
			throw new CException(Yii::t(self::ID, 'Database entry for view with source path "{source_file}" and compiled path "{compiled_file}" does not exist.', array('{source_file}' => $sourceFile, '{compiled_file}' => $viewFile)));
		
		$this->_generateViewFile($sourceFile, $viewFile, $viewId, $this->getMessages()->useLocaleSpecificTranslations ? Yii::app()->getLanguage() : $this->getTranslator()->getLanguageID());
	}
	
	protected function _generateViewFile($sourcePath, $compiledPath, $id, $language)
	{
		$this->getViewCompiler()->compileView($sourcePath, $compiledPath, $id, $language);
		
		@chmod($compiledPath, $this->filePermission);
	}
	
	public function renderFile($context, $sourceFile, $data, $return)
	{
		if(!is_file($sourceFile) || ($file = realpath($sourceFile)) === false)
			throw new CException(Yii::t(self::ID, 'View file "{file}" does not exist.', array('{file}' => $sourceFile)));

		$language = $this->getMessages()->useLocaleSpecificTranslations ? Yii::app()->getLanguage() : $this->getTranslator()->getLanguageID();
		$dal = $this->getDal();
		
		$transaction = $this->getMessages()->getDbConnection()->beginTransaction();
		try
		{
			$viewFile = $dal->selectViewWithLastModified($sourceFile, $language);
			
			if($viewFile['id'] === null)
			{
				$viewFile['id'] = $dal->insertViewSource($sourceFile);
				
				if($viewFile['id'] === null)
				{
					throw new CException(Yii::t(self::ID, "The source file '{file}' was not found in the database and could not be added to it.", array('{file}' => $sourceFile)));
				}
			}
			
			if($viewFile['path'] === null)
			{
				$viewFile['path'] = $this->getViewFile($file);

				if($dal->insertView($viewFile['id'], $viewFile['path'], $language) === null)
				{
					Yii::log("The source file '$sourceFile' compiled to '{$viewFile['path']}' could not be added to the database. The view will be recompiled for each request until this problem is fixed.", CLogger::LEVEL_ERROR, self::ID);
				}
			}
			
			$viewFile['created'] = $viewFile['created'] === null ? time() : strtotime($viewFile['created']);
			$viewFile['last_modified'] = $viewFile['last_modified'] === null ? time() : strtotime($viewFile['last_modified']);
			
			if(!is_file($viewFile['path']))
			{
				@mkdir(dirname($viewFile['path']), $this->filePermission, true);
				$this->_generateViewFile($sourceFile, $viewFile['path'], $viewFile['id'], $language);
			}
			elseif($viewFile['last_modified'] >= $viewFile['created'] || @filemtime($sourceFile) >= $viewFile['created'])
			{
				$this->_generateViewFile($sourceFile, $viewFile['path'], $viewFile['id'], $language);
			}
			
			$transaction->commit();
		}
		catch(Exception $e)
		{
			$transaction->rollback();
			throw $e;
		}

		return $context->renderInternal($viewFile['path'], $data, $return);
	}
	
	/**
	 * Generates the resulting view file path.
	 * @param string $file source view file path
	 * @return string resulting view file path
	 */
	protected function getViewFile($file)
	{
		if($this->useRuntimePath)
			return Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.sprintf('%x', crc32(__CLASS__.Yii::getVersion().dirname($file))).DIRECTORY_SEPARATOR.$this->getTranslator()->getLanguageID().DIRECTORY_SEPARATOR.basename($file); 
		return $file.'c.'.$this->getTranslator()->getLanguageID();
	}
	
}

class ViewCompiler extends CComponent
{

	const ID = 'module.translate.ViewCompiler';

	public static $regularExpression = '/\{t(?:\s+category\s*=\s*(\w+?))?\}\s*(.+?)\s*\{\/t\}/s';

	/**
	 * @var integer the time in seconds that the messages can remain valid in cache.
	 * Defaults to 0, meaning the caching is disabled.
	 */
	public $cachingDuration = 0;
	/**
	 * @var string the ID of the cache application component that is used to cache the messages.
	 * Defaults to 'cache' which refers to the primary cache application component.
	 * Set this property to false if you want to disable caching the messages.
	 */
	public $cacheID = 'cache';

	public $dal;
	
	public $messageCategory;

	private $_messages = array();

	private $_cacheInvalidated = false;

	private $_currentViewId;

	public function __construct($messageCategory, $dal)
	{
		$this->messageCategory = $messageCategory;
		$this->dal = $dal;
	}

	protected function getCache()
	{
		return $this->cachingDuration > 0 && $this->cacheID !== false ? Yii::app()->getComponent($this->cacheID) : null;
	}

	protected function getCacheKey($viewId)
	{
		return self::ID.'.viewMessages.'.$viewId;
	}

	protected function loadViewMessages($viewId)
	{
		if(($cache = $this->getCache()) !== null)
		{
			$key = $this->getCacheKey($viewId);
			$messages = $cache->get($key);
			if($messages === false)
			{
				$messages = $this->loadViewMessagesFromDb($viewId);
				$cache->set($key, $messages, $this->cachingDuration);
			}
		}
		else
		{
			$messages = $this->loadViewMessagesFromDb($viewId);
		}

		return $messages;
	}

	protected function loadViewMessagesFromDb($viewId)
	{
		$messages = array();
		foreach($this->dal->selectViewMessages($viewId) as $row)
			$messages[$row['message']] = $row['id'];
		return $messages;
	}

	public function compileView($sourcePath, $compiledPath, $id, $language)
	{
		if(!isset($this->_messages[$id]))
			$this->_messages[$id] = $this->loadViewMessages($id);

		$this->_currentViewId = $id;
		$this->_cacheInvalidated = false;

		file_put_contents(
			$compiledPath,
			preg_replace_callback(
				self::$regularExpression,
				array(&$this, 'pregReplaceCallback'),
				file_get_contents($sourcePath)
			)
		);

		if($this->_cacheInvalidated && ($cache = $this->getCache()) !== null)
		{
			$cache->delete($this->getCacheKey($id));
		}

		$this->dal->updateViewCreated($id, $language, date('Y-m-d H:i:s'));
	}

	protected function pregReplaceCallback($matches)
	{
		$category = $matches[1] === '' ? $this->messageCategory : $matches[1];
		$message = $matches[2];
		$translation = Yii::t($category, $message, array(), null, null);

		if(!isset($this->_messages[$this->_currentViewId][$message]))
		{
			$messageId = $this->dal->selectMessageId($category, $message);

			if($messageId === false)
			{
				$messageId = $this->dal->insertMessage($category, $message);
			}
			
			if($messageId === null)
			{
				Yii::log("The source message '$message' could not be found in or added to the database table '{$this->dal->messageSourceTableSchema->name}'.", CLogger::LEVEL_ERROR, self::ID);
			}
			elseif($this->dal->insertViewMessage($this->_currentViewId, $messageId) === null)
			{
				Yii::log("The view with ID '$this->_currentViewId' could not be associated with the source message with ID '$messageId'.", CLogger::LEVEL_ERROR, self::ID);
			}
			else
			{
				$this->_messages[$this->_currentViewId][$message] = $messageId;
				$this->_cacheInvalidated = true;
			}
		}

		return $translation;
	}

}

class ViewRendererDAL
{

	public $translateDal;

	public $viewSourceTableSchema;

	public $viewTableSchema;

	public $viewMessageTableSchema;

	private $_selectViewWithLastModifiedCmd;

	private $_selectViewIdCmd;

	private $_selectViewMessagesCmd;

	private $_selectMessageIdCommand;

	private $_insertViewCmd;

	private $_insertViewSourceCmd;

	private $_insertViewMessageCommand;

	private $_updateViewCreatedCmd;

	public function __construct($viewRenderer)
	{
		if(!$viewRenderer instanceof TViewRenderer)
			throw new CException(__CLASS__.' is only compatible with view renderers of type TViewRenderer.');

		$this->translateDal = $viewRenderer->getTranslator()->getDal();

		$sourceDbSchema = $this->translateDal->dbConn->getSchema();
		$this->viewSourceTableSchema = $sourceDbSchema->getTable($viewRenderer->viewSourceTable);

		if($this->viewSourceTableSchema === null)
			throw new CDbException("The table '$viewRenderer->viewSourceTable' cannot be found in the database.");

		$this->viewTableSchema = $sourceDbSchema->getTable($viewRenderer->viewTable);

		if($this->viewTableSchema === null)
			throw new CDbException("The table '$viewRenderer->viewTable' cannot be found in the database.");

		$this->viewMessageTableSchema = $sourceDbSchema->getTable($viewRenderer->viewMessageTable);

		if($this->viewMessageTableSchema === null)
			throw new CDbException("The table '$viewRenderer->viewMessageTable' cannot be found in the database.");
	}

	public function selectViewWithLastModified($sourcePath, $language)
	{
		if(!isset($this->_selectViewWithLastModifiedCmd))
			$this->_selectViewWithLastModifiedCmd = $this->generateSelectViewWithLastModifiedCmd();

		return $this->_selectViewWithLastModifiedCmd->bindValues(array(':source_path' => $sourcePath, ':language' => $language))->queryRow();
	}

	public function selectViewId($sourcePath, $viewPath)
	{
		if(!isset($this->_selectViewIdCmd))
			$this->_selectViewIdCmd = $this->generateSelectViewIdCmd();

		return $this->_selectViewIdCmd->bindValues(array(':source_path' => $sourcePath, ':compiled_path' => $viewPath))->queryScalar();
	}

	public function selectViewMessages($viewId)
	{
		if(!isset($this->_selectViewMessagesCmd))
			$this->_selectViewMessagesCmd = $this->generateSelectViewMessagesCmd();

		return $this->_selectViewMessagesCmd->bindValue(':view_id', $viewId)->queryAll();
	}

	public function selectMessageId($category, $message)
	{
		if(!isset($this->_selectMessageIdCmd))
			$this->_selectMessageIdCmd = $this->generateSelectMessageIdCmd();

		return $this->_selectMessageIdCmd->bindValues(array(':category' => $category, ':message' => $message))->queryScalar();
	}

	public function insertView($id, $path, $language)
	{
		if(!isset($this->_insertViewCmd))
			$this->_insertViewCmd = $this->generateInsertViewCmd();

		if($this->_insertViewCmd->bindValues(array(':id' => $id, ':path' => $path, ':language' => $language))->execute() === 0)
			return null;

		return array('id' => $id, 'language' => $language);
	}

	public function insertViewSource($path)
	{
		if(!isset($this->_insertViewSourceCmd))
			$this->_insertViewSourceCmd = $this->generateInsertViewSourceCmd();

		if($this->_insertViewSourceCmd->bindValue(':path', $path)->execute() === 0)
			return null;

		return $this->viewSourceTableSchema->sequenceName === null ? null : $this->translateDal->dbConn->getLastInsertID($this->viewSourceTableSchema->sequenceName);
	}

	public function insertViewMessage($viewId, $messageId)
	{
		if(!isset($this->_insertViewMessageCmd))
			$this->_insertViewMessageCmd = $this->generateInsertViewMessageCmd();

		if($this->_insertViewMessageCmd->bindValues(array(':view_id' => $viewId, ':message_id' => $messageId))->execute() === 0)
			return null;

		return array('view_id' => $viewId, 'message_id' => $messageId);
	}

	public function updateViewCreated($viewId, $language, $created)
	{
		if(!isset($this->_updateViewCreatedCmd))
			$this->_updateViewCreatedCmd = $this->generateUpdateViewCreatedCmd();

		return $this->_updateViewCreatedCmd->bindValues(array(':id' => $viewId, ':language' => $language, ':created' => $created))->execute();
	}

	protected function generateSelectViewWithLastModifiedCmd()
	{
		return $this->translateDal->dbConn->createCommand(
				"SELECT {$this->viewSourceTableSchema->name}.id AS id, {$this->viewTableSchema->name}.path AS path, {$this->viewTableSchema->name}.created AS created, COALESCE(MAX({$this->translateDal->messageTableSchema->name}.last_modified),'0') AS last_modified " .
				"FROM {$this->viewSourceTableSchema->name} " .
				"LEFT JOIN {$this->viewTableSchema->name} ON {$this->viewSourceTableSchema->name}.id={$this->viewTableSchema->name}.id AND {$this->viewTableSchema->name}.language=:language " .
				"JOIN {$this->viewMessageTableSchema->name} ON {$this->viewSourceTableSchema->name}.id={$this->viewMessageTableSchema->name}.view_id " .
				"JOIN {$this->translateDal->messageTableSchema->name} ON {$this->viewMessageTableSchema->name}.message_id={$this->translateDal->messageTableSchema->name}.id AND {$this->translateDal->messageTableSchema->name}.language=:language " .
				"WHERE {$this->viewSourceTableSchema->name}.path=:source_path"
		);
	}

		protected function generateSelectViewIdCmd()
		{
		return $this->translateDal->dbConn->createCommand(
				"SELECT {$this->viewSourceTableSchema->name}.id AS id " .
				"FROM {$this->viewSourceTableSchema->name} " .
				"JOIN {$this->viewTableSchema->name} ON {$this->viewSourceTableSchema->name}.id={$this->viewTableSchema->name}.id " .
				"WHERE {$this->viewSourceTableSchema->name}.path=:source_path AND {$this->viewTableSchema->name}.path=:compiled_path"
				);
		}

		protected function generateSelectViewMessagesCmd()
		{
		return $this->translateDal->dbConn->createCommand(
				"SELECT {$this->translateDal->sourceMessageTableSchema->name}.id AS id, {$this->translateDal->sourceMessageTableSchema->name}.message AS message " .
				"FROM {$this->translateDal->sourceMessageTableSchema->name} " .
				"JOIN {$this->viewMessageTableSchema->name} ON {$this->viewMessageTableSchema->name}.message_id={$this->translateDal->sourceMessageTableSchema->name}.id " .
				"WHERE {$this->viewMessageTableSchema->name}.view_id=:view_id"
				);
		}

		protected function generateSelectMessageIdCmd()
		{
		return $this->translateDal->dbConn->createCommand("SELECT id FROM {$this->translateDal->sourceMessageTableSchema->name} WHERE (category=:category AND message=:message)");
		}

		protected function generateInsertViewCmd()
		{
		return $this->translateDal->dbConn->createCommand("INSERT INTO {$this->viewTableSchema->name} (id, path, language) VALUES (:id, :path, :language)");
		}

		protected function generateInsertViewSourceCmd()
		{
		return $this->translateDal->dbConn->createCommand("INSERT INTO {$this->viewSourceTableSchema->name} (path) VALUES (:path)");
		}

		protected function generateInsertViewMessageCmd()
		{
			return $this->translateDal->dbConn->createCommand("INSERT INTO {$this->viewMessageTableSchema->name} (view_id, message_id) VALUES (:view_id, :message_id)");
		}

		protected function generateUpdateViewCreatedCmd()
		{
			return $this->translateDal->dbConn->createCommand("UPDATE {$this->viewTableSchema->name} SET created=:created WHERE id=:id AND language=:language");
		}

}