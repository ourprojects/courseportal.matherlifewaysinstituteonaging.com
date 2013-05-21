<?php

class TViewRenderer extends CViewRenderer
{
	public $viewSourceTable = '{{translate_view_source}}';
	
	public $viewTable = '{{translate_view}}';
	
	public $viewMessageTable = '{{translate_view_message}}';
	
	private $_db;
	
	private $_sourceMessageTable;
	
	private $_translatedMessageTable;
	
	private $_selectViewWithLastModifiedCommand;
	
	private $_selectViewIdCommand;
	
	private $_insertViewCommand;
	
	private $_insertViewSourceCommand;

	private $_translator;
	
	private $_viewCompiler;
	
	public function init()
	{
		Yii::import('translate.components.ViewCompiler');
	}
	
	public function setSourceMessageTable($sourceMessageTable)
	{
		$this->_sourceMessageTable = $sourceMessageTable;
	}
	
	public function getSourceMessageTable()
	{
		if(!isset($this->_sourceMessageTable))
			$this->_sourceMessageTable = Yii::app()->getMessages()->sourceMessageTable;
		return $this->_sourceMessageTable;
	}
	
	public function setTranslatedMessageTable($translatedMessageTable)
	{
		$this->_translatedMessageTable = $translatedMessageTable;
	}
	
	public function getTranslatedMessageTable()
	{
		if(!isset($this->_translatedMessageTable))
			$this->_translatedMessageTable = Yii::app()->getMessages()->translatedMessageTable;
		return $this->_translatedMessageTable;
	}
	
	public function getViewCompiler()
	{
		if(!isset($this->_viewCompiler))
			$this->_viewCompiler = new ViewCompiler($this->getDbConnection(), $this->getSourceMessageTable(), $this->viewTable, $this->viewMessageTable);
		return $this->_viewCompiler;
	}
	
	public function getTranslator()
	{
		if(!isset($this->_translator))
			$this->_translator = TranslateModule::translator();
		return $this->_translator;
	}

	public function getDbConnection()
	{
		if(!isset($this->_db))
			$this->_db = Yii::app()->getMessages()->getDbConnection();
		return $this->_db;
	}
	
	public function getSelectViewWithLastModifiedCommand()
	{
		if(!isset($this->_selectViewWithLastModifiedCommand))
		{
			$this->_selectViewWithLastModifiedCommand = $this->getDbConnection()->createCommand(
				"SELECT $this->viewSourceTable.id AS id, $this->viewTable.path AS path, $this->viewTable.created AS created, COALESCE(MAX({$this->getTranslatedMessageTable()}.last_modified),'0') AS last_modified " . 
				"FROM $this->viewSourceTable " . 
				"LEFT JOIN $this->viewTable ON $this->viewSourceTable.id=$this->viewTable.id AND $this->viewTable.language=:language " . 
				"JOIN $this->viewMessageTable ON $this->viewSourceTable.id=$this->viewMessageTable.view_id " . 
				"JOIN {$this->getTranslatedMessageTable()} ON $this->viewMessageTable.message_id={$this->getTranslatedMessageTable()}.id AND {$this->getTranslatedMessageTable()}.language=:language " . 
				"WHERE $this->viewSourceTable.path=:source_path");
		}
		return $this->_selectViewWithLastModifiedCommand; 
	}
	
	public function getSelectViewIdCommand()
	{
		if(!isset($this->_selectViewWithIdCommand))
		{
			$this->_selectViewWithIdCommand = $this->getDbConnection()->createCommand(
				"SELECT $this->viewSourceTable.id AS id " .
				"FROM $this->viewSourceTable " .
				"JOIN $this->viewTable ON $this->viewSourceTable.id=$this->viewTable.id " .
				"WHERE $this->viewSourceTable.path=:source_path AND $this->viewTable.path=:compiled_path");
		}
		return $this->_selectViewWithIdCommand;
	}
	
	public function getInsertViewCommand()
	{
		if(!isset($this->_insertViewCommand))
		{
			$this->_insertViewCommand = $this->getDbConnection()->createCommand("INSERT INTO $this->viewTable (id, path, language) VALUES (:id, :path, :language)");
		}
		return $this->_insertViewCommand;
	}
	
	public function getInsertViewSourceCommand()
	{
		if(!isset($this->_insertViewSourceCommand))
		{
			$this->_insertViewSourceCommand = $this->getDbConnection()->createCommand("INSERT INTO $this->viewSourceTable (path) VALUES (:path)");
		}
		return $this->_insertViewSourceCommand;
	}

	/**
	 * Parses the source view file and saves the results as another file.
	 * This method is required by the parent class.
	 * @param string $sourceFile the source view file path
	 * @param string $viewFile the resulting view file path
	 */
	protected function generateViewFile($sourceFile, $viewFile)
	{
		$viewId = $this->getSelectViewIdCommand()->queryScalar(array(':source_path' => $sourceFile, ':compiled_path' => $viewFile));
		
		if($viewId === false)
			throw new CException(Yii::t(MPTranslate::ID.'.'.__CLASS__, 'Database entry for view with source path "{source_file}" and compiled path "{compiled_file}" does not exist.', array('{source_file}' => $sourceFile, '{compiled_file}' => $viewFile)));
		
		$this->_generateViewFile($sourceFile, $viewFile, $viewId);
	}
	
	protected function _generateViewFile($sourcePath, $compiledPath, $id)
	{
		$this->getViewCompiler()->compileView($sourcePath, $compiledPath, $id);
		
		@chmod($compiledPath, $this->filePermission);
	}
	
	public function renderFile($context, $sourceFile, $data, $return)
	{
		if(!is_file($sourceFile) || ($file = realpath($sourceFile)) === false)
			throw new CException(Yii::t(MPTranslate::ID.'.'.get_class($this), 'View file "{file}" does not exist.', array('{file}' => $sourceFile)));

		$language = Yii::app()->getMessages()->useLocaleSpecificTranslations ? Yii::app()->getLanguage() : $this->getTranslator()->getLanguageID();
		
		$transaction = $this->getDbConnection()->beginTransaction();
		try
		{
			$viewFile = $this->getSelectViewWithLastModifiedCommand()->bindValues(array(':source_path' => $sourceFile, ':language' => $language))->queryRow();
			
			if($viewFile['id'] === null)
			{
				$rowsAffected = $this->getInsertViewSourceCommand()->bindValues(array(':path' => $sourceFile))->execute();
				
				if($rowsAffected === 0)
				{
					throw new CException(Yii::t(MPTranslate::ID.'.'.__CLASS__, "The source file '{file}' was not found in the database and could not be added to it.", array('{file}' => $sourceFile)));
				}
				else
				{
					$viewFile['id'] = $this->getDbConnection()->getLastInsertID();
				}
			}
			
			if($viewFile['path'] === null)
			{
				$viewFile['path'] = $this->getViewFile($file);
				
				$rowsAffected = $this->getInsertViewCommand()->bindValues(array(':id' => $viewFile['id'], ':path' => $viewFile['path'], ':language' => $language))->execute();
				
				if($rowsAffected === 0)
				{
					Yii::log("The source file '$sourceFile' compiled to '{$viewFile['path']}' could not be added to the database. The view will be recompiled for each request until this problem is fixed.", CLogger::LEVEL_ERROR, MPTranslate::ID.'.'.__CLASS__);
				}
			}
			
			$viewFile['created'] = $viewFile['created'] === null ? time() : strtotime($viewFile['created']);
			$viewFile['last_modified'] = $viewFile['last_modified'] === null ? time() : strtotime($viewFile['last_modified']);
			
			if(!is_file($viewFile['path']))
			{
				@mkdir(dirname($viewFile['path']), $this->filePermission, true);
				$this->_generateViewFile($sourceFile, $viewFile['path'], $viewFile['id']);
			}
			elseif($viewFile['last_modified'] >= $viewFile['created'] || @filemtime($sourceFile) >= $viewFile['created'])
			{
				$this->_generateViewFile($sourceFile, $viewFile['path'], $viewFile['id']);
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
		return $this->useRuntimePath ? 
			Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.sprintf('%x', crc32(get_class($this).Yii::getVersion().dirname($file))).DIRECTORY_SEPARATOR.$this->getTranslator()->getLanguageID().DIRECTORY_SEPARATOR.basename($file) : 
			$file.'c.'.$this->getTranslator()->getLanguageID();
	}
	
}