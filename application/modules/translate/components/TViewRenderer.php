<?php

class TViewRenderer extends CViewRenderer
{
	
	public $compiledViewTable = '{{translate_compiled_view}}';
	
	public $compiledViewMessageTable = '{{translate_compiled_view_message}}';
	
	private $_db;
	
	private $_sourceMessageTable;
	
	private $_translatedMessageTable;
	
	private $_selectCompiledViewWithLastModifiedCommand;
	
	private $_selectCompiledViewIdCommand;
	
	private $_insertCompiledViewCommand;

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
			$this->_viewCompiler = new ViewCompiler($this->getDbConnection(), $this->getSourceMessageTable(), $this->compiledViewTable, $this->compiledViewMessageTable);
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
	
	public function getSelectCompiledViewWithLastModifiedCommand()
	{
		if(!isset($this->_selectCompiledViewWithLastModifiedCommand))
		{
			$this->_selectCompiledViewWithLastModifiedCommand = $this->getDbConnection()->createCommand(
				"SELECT $this->compiledViewTable.id AS id, $this->compiledViewTable.compiled_path AS compiled_path, $this->compiledViewTable.created AS created, MAX({$this->getTranslatedMessageTable()}.last_modified) AS last_modified " .
				"FROM $this->compiledViewTable " .
				"INNER JOIN $this->compiledViewMessageTable ON ($this->compiledViewTable.id=$this->compiledViewMessageTable.compiled_view_id) " .
				"INNER JOIN {$this->getTranslatedMessageTable()} ON ($this->compiledViewMessageTable.message_source_id={$this->getTranslatedMessageTable()}.id AND $this->compiledViewTable.language={$this->getTranslatedMessageTable()}.language) " .
				"WHERE ($this->compiledViewTable.source_path=:source_path AND $this->compiledViewTable.language=:language)");
		}
		return $this->_selectCompiledViewWithLastModifiedCommand; 
	}
	
	public function getSelectCompiledViewIdCommand()
	{
		if(!isset($this->_selectCompiledViewWithIdCommand))
		{
			$this->_selectCompiledViewWithIdCommand = $this->getDbConnection()->createCommand(
				"SELECT $this->compiledViewTable.id AS id " .
				"FROM $this->compiledViewTable " .
				"WHERE ($this->compiledViewTable.source_path=:source_path AND $this->compiledViewTable.compiled_path=:compiled_path)");
		}
		return $this->_selectCompiledViewWithIdCommand;
	}
	
	public function getInsertCompiledViewCommand()
	{
		if(!isset($this->_insertCompiledViewCommand))
		{
			$this->_insertCompiledViewCommand = $this->getDbConnection()->createCommand(
					"INSERT INTO $this->compiledViewTable (source_path, compiled_path, language) VALUES (:source_path, :compiled_path, :language)");
		}
		return $this->_insertCompiledViewCommand;
	}

	/**
	 * Parses the source view file and saves the results as another file.
	 * This method is required by the parent class.
	 * @param string $sourceFile the source view file path
	 * @param string $viewFile the resulting view file path
	 */
	protected function generateViewFile($sourceFile, $viewFile)
	{
		$viewId = $this->getSelectCompiledViewIdCommand()->queryScalar(array(':source_path' => $sourceFile, ':compiled_path' => $viewFile));
		
		if($viewId === false)
			throw new CException(Yii::t(MPTranslate::ID.'.'.get_class($this), 'Database entry for view with source path "{source_file}" and compiled path "{compiled_file}" does not exist.', array('{source_file}' => $sourceFile, '{compiled_file}' => $viewFile)));
		
		$this->_generateViewFile($sourceFile, $viewFile, $viewId);
	}
	
	protected function _generateViewFile($sourcePath, $compiledPath, $id)
	{
		$ignore_user_abort = ini_get('ignore_user_abort');
		if(!$ignore_user_abort)
			ignore_user_abort(true);
		
		$this->getViewCompiler()->compileView($sourcePath, $compiledPath, $id);
		
		@chmod($compiledPath, $this->filePermission);
		
		if(!$ignore_user_abort)
			ignore_user_abort($ignore_user_abort);
	}
	
	public function renderFile($context, $sourceFile, $data, $return)
	{
		if(!is_file($sourceFile) || ($file = realpath($sourceFile)) === false)
			throw new CException(Yii::t(MPTranslate::ID.'.'.get_class($this), 'View file "{file}" does not exist.', array('{file}' => $sourceFile)));

		$transaction = $this->getDbConnection()->beginTransaction();
		try
		{
			$viewFile = $this->getSelectCompiledViewWithLastModifiedCommand()->bindValues(array(':source_path' => $sourceFile, ':language' => $this->getTranslator()->getLanguageID()))->queryRow();
			
			if(empty($viewFile) || $viewFile['id'] === null)
			{
				$viewFile['compiled_path'] = $this->getViewFile($sourceFile);
				$viewFile['created'] = $viewFile['last_modified'] = time();
				$rowsAffected = $this->getInsertCompiledViewCommand()->bindValues(array(':source_path' => $sourceFile, ':compiled_path' => $this->getViewFile($sourceFile), ':language' => $this->getTranslator()->getLanguageID()))->execute();
				
				if($rowsAffected === 0)
				{
					Yii::log("A compiled view for source file '$sourceFile' using language '{$this->getTranslator()->getLanguageID()}' could not be added to the database. A temporary view will be generated instead.", CLogger::LEVEL_ERROR, MPTranslate::ID.'.'.__CLASS__);
				}
				else
				{
					$viewFile['id'] = $this->getDbConnection()->getLastInsertID();
				}
			}
			else
			{
				$viewFile['last_modified'] = strtotime($viewFile['last_modified']);
				$viewFile['created'] = strtotime($viewFile['created']);
			}
			
			if(!is_file($viewFile['compiled_path']))
			{
				@mkdir(dirname($viewFile['compiled_path']), $this->filePermission, true);
				$this->_generateViewFile($sourceFile, $viewFile['compiled_path'], $viewFile['id']);
			}
			elseif($viewFile['last_modified'] >= $viewFile['created'] || @filemtime($sourceFile) >= $viewFile['created'])
			{
				$this->_generateViewFile($sourceFile, $viewFile['compiled_path'], $viewFile['id']);
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
			Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.sprintf('%x', crc32(get_class($this).Yii::getVersion().dirname($file))).DIRECTORY_SEPARATOR.$this->getTranslator()->getLanguageID().DIRECTORY_SEPARATOR.basename($file) : 
			$file.'c.'.$this->getTranslator()->getLanguageID();
	}
	
}