<?php

class TViewRenderer extends CViewRenderer
{

	public $connectionID = 'db';
	
	public $compiledViewTable = '{{translate_compiled_view}}';
	
	public $compiledViewMessageTable = '{{translate_compiled_view_message}}';

	private $_translator;
	
	private $_db;
	
	private $_selectMessageIdCommand;
	
	private $_insertCompiledViewMessageCommand;
	
	private $_insertedViewMessages;
	
	public function init()
	{
		$this->_translator = TranslateModule::translator();
	}
	
	
	
	/**
	 * Returns the DB connection used for the message source.
	 * @return CDbConnection the DB connection used for the message source.
	 */
	public function getDbConnection()
	{
		if($this->_db === null)
		{
			$this->_db = Yii::app()->getComponent($this->connectionID);
			if(!$this->_db instanceof CDbConnection)
				throw new CException(Yii::t('yii','TViewRenderer.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.',
						array('{id}' => $this->connectionID)));
		}
		return $this->_db;
	}

	/**
	 * Parses the source view file and saves the results as another file.
	 * This method is required by the parent class.
	 * @param string $sourceFile the source view file path
	 * @param string $viewFile the resulting view file path
	 */
	protected function generateViewFile($sourceFile, $viewFile)
	{
		$messageSource = Yii::app()->getComponent($this->_translator->source);
		
		$this->_selectMessageIdCommand = $this->getDbConnection()->createCommand()
				->select('id')
				->from($messageSource->sourceMessageTable)
				->where(array('and', 'category=:category', 'message=:message'));
		
		$this->_insertCompiledViewMessageCommand = $this->getDbConnection()->createCommand(
				"INSERT INTO {$this->compiledViewMessageTable} (message_source_id, compiled_view_id) VALUES (:message_source_id, :compiled_view_id)")
				->bindValue(':compiled_view_id', $viewFile['id']);
		
		$this->_insertedViewMessages = array();
		
		file_put_contents(
			$viewFile['compiled_path'], 
			preg_replace_callback(
				'/\{t(?:\s+category\s*=\s*(\w+?))?\}(.+?)\{\/t\}/s', 
				array(&$this, 'pregReplaceCallback'), 
				file_get_contents($sourceFile)
			)
		);
		
		$this->_insertedViewMessages = null;
	}

	private function pregReplaceCallback($matches)
	{
		$category = $matches[1] === '' ? $this->_translator->messageCategory : $matches[1];
		$message = $matches[2];
		$translation = Yii::t($category, $message, array(), null, null);
		$message_id = $this->_selectMessageIdCommand->queryScalar(array(':category' => $category, ':message' => $message));
		if(!isset($this->_insertedViewMessages[$message_id]))
		{
			$this->_insertCompiledViewMessageCommand->bindValue(':message_source_id', $message_id)->execute();
			$this->_insertedViewMessages[$message_id] = true;
		}
		return $translation;
	}
	
	public function renderFile($context, $sourceFile, $data, $return)
	{
		if(!is_file($sourceFile) || ($file = realpath($sourceFile)) === false)
			throw new CException(Yii::t('yii', 'View file "{file}" does not exist.', array('{file}' => $sourceFile)));
		
		$messageSource = Yii::app()->getComponent($this->_translator->source);
		
		$command = $this->getDbConnection()->createCommand()
			->select(array($this->compiledViewTable.'.id AS id', $this->compiledViewTable.'.compiled_path AS compiled_path', $this->compiledViewTable.'.created AS created', 'MAX('.$messageSource->translatedMessageTable.'.last_modified) AS last_modified'))
			->from($this->compiledViewTable)
			->join($this->compiledViewMessageTable, $this->compiledViewTable.'.id='.$this->compiledViewMessageTable.'.compiled_view_id')
			->join($messageSource->translatedMessageTable, array('and', $this->compiledViewMessageTable.'.message_source_id='.$messageSource->translatedMessageTable.'.id', $this->compiledViewTable.'.language='.$messageSource->translatedMessageTable.'.language'))
			->where(array('and', $this->compiledViewTable.'.source_path=:source_path', $this->compiledViewTable.'.language=:language'), array(':source_path' => $sourceFile, ':language' => $this->_translator->getLanguageID()));

		$transaction = $this->getDbConnection()->beginTransaction();
		try
		{
			$viewFile = $command->queryRow();
			
			if($viewFile === false || $viewFile['id'] === null)
			{
				$viewFile = array('compiled_path' => $this->getViewFile($sourceFile));
				$this->getDbConnection()->createCommand()->insert($this->compiledViewTable, array('source_path' => $sourceFile, 'compiled_path' => $viewFile['compiled_path'], 'language' => $this->_translator->getLanguageID()));
				$viewFile['id'] = $this->getDbConnection()->lastInsertID;
				$viewFile['created'] = $viewFile['last_modified'] = time();
			}
			else
			{
				$viewFile['last_modified'] = strtotime($viewFile['last_modified']);
				$viewFile['created'] = strtotime($viewFile['created']);
			}
			
			if(!is_file($viewFile['compiled_path']))
			{
				@mkdir(dirname($viewFile['compiled_path']), $this->filePermission, true);
				$viewFile['last_modified'] = time();
			}
			
			if($viewFile['last_modified'] >= $viewFile['created'] || @filemtime($sourceFile) >= $viewFile['created'])
			{
				$this->generateViewFile($sourceFile, $viewFile);
				@chmod($viewFile, $this->filePermission);
			}
			$transaction->commit();
		}
		catch(Exception $e)
		{
			$transaction->rollback();
			throw $e;
		}

		return $context->renderInternal($viewFile['compiled_path'], $data, $return);
	}
	
	/**
	 * Generates the resulting view file path.
	 * @param string $file source view file path
	 * @return string resulting view file path
	 */
	protected function getViewFile($file)
	{
		return $this->useRuntimePath ? 
			Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.sprintf('%x', crc32(get_class($this).Yii::getVersion().dirname($file))).DIRECTORY_SEPARATOR.$this->_translator->getLanguageID().DIRECTORY_SEPARATOR.basename($file) : 
			$file.'c.'.$this->_translator->getLanguageID();
	}
	
}