<?php

class ViewCompiler extends CComponent
{

	private static $_ID;

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

	public $defaultMessageCategory;
	
	private $_db;

	private $_sourceMessageTable;
	
	private $_compiledViewTable;
	
	private $_compiledViewMessageTable;
	
	private $_selectMessageIdCommand;
	
	private $_insertMessageCommand;

	private $_insertCompiledViewMessageCommand;

	private $_messages = array();

	private $_cacheInvalidated = false;

	private $_currentViewId;

	public static function getID()
	{
		if(!isset(self::$_ID))
			self::$_ID = MPTranslate::ID . '.' . __CLASS__;
		return self::$_ID;
	}

	public function __construct(
			$db,
			$sourceMessageTable,
			$compiledViewTable,
			$compiledViewMessageTable)
	{
		$this->defaultMessageCategory = TranslateModule::translator()->messageCategory;
		
		$this->_db = $db;
		
		$this->_sourceMessageTable = $sourceMessageTable;
		$this->_compiledViewTable = $compiledViewTable;
		$this->_compiledViewMessageTable = $compiledViewMessageTable;
		
		$this->_selectMessageIdCommand = $this->_db->createCommand("SELECT id FROM $sourceMessageTable WHERE (category=:category AND message=:message)");
		$this->_insertMessageCommand = $this->_db->createCommand("INSERT INTO $sourceMessageTable (category, message) VALUES (:category, :message)");
		$this->_insertCompiledViewMessageCommand = $this->_db->createCommand("INSERT INTO $compiledViewMessageTable (message_source_id, compiled_view_id) VALUES (:message_source_id, :compiled_view_id)");
	}

	protected function getCache()
	{
		return $this->cachingDuration > 0 && $this->cacheID !== false ? Yii::app()->getComponent($this->cacheID) : null;
	}

	protected function getCacheKey($viewId)
	{
		return self::getID().'.viewMessages.'.$viewId;
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
		$command = $this->_db->createCommand(
				"SELECT $this->_sourceMessageTable.id AS id, $this->_sourceMessageTable.message AS message " .
				"FROM $this->_sourceMessageTable " .
				"INNER JOIN $this->_compiledViewMessageTable ON $this->_compiledViewMessageTable.message_source_id=$this->_sourceMessageTable.id " .
				"WHERE $this->_compiledViewMessageTable.compiled_view_id=:compiled_view_id")
				->bindValue(':compiled_view_id', $viewId);

		foreach($command->queryAll() as $row)
			$messages[$row['message']] = $row['id'];

		return $messages;
	}

	public function compileView($sourcePath, $compiledPath, $id)
	{
		$this->_insertCompiledViewMessageCommand->bindValue(':compiled_view_id', $id);

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

		$this->_db->createCommand()->update($this->_compiledViewTable, array('created' => date('Y-m-d H:i:s')), 'id=:id', array(':id' => $id));
	}

	protected function pregReplaceCallback($matches)
	{
		$category = $matches[1] === '' ? $this->defaultMessageCategory : $matches[1];
		$message = $matches[2];
		$translation = Yii::t($category, $message, array(), null, null);

		if(!isset($this->_messages[$this->_currentViewId][$message]))
		{
			$messageId = $this->_selectMessageIdCommand->bindValues(array(':category' => $category, ':message' => $message))->queryScalar();
			
			if($messageId === false)
			{
				if($this->_insertMessageCommand->bindValues(array(':category' => $category, ':message' => $message))->execute() === 0)
				{
					Yii::log("The source message '$message' could not be added to the database.", CLogger::LEVEL_ERROR, self::getID());
					return $translation;
				}
				$messageId = $this->_db->getLastInsertID();	
			}

			if($this->_insertCompiledViewMessageCommand->bindValue(':message_source_id', $messageId)->execute() === 0)
			{
				Yii::log("The view with ID '$this->_currentViewId' could nto be associated with source message with ID '$messageId'.", CLogger::LEVEL_ERROR, self::getID());
				return $translation;
			}

			$this->_messages[$this->_currentViewId][$message] = $messageId;
			$this->_cacheInvalidated = true;
		}

		return $translation;
	}

}