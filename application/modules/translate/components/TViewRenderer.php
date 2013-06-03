<?php

class TViewRenderer extends CViewRenderer
{
	
	const ID = 'modules.translate.TViewRenderer';
	
	public $viewSource = 'views';
	
	public $messageSource = 'messages';
	
	public $viewCompileCommand = 'tviewcompile';
	
	private $_messages;
	
	private $_viewSource;
	
	public function init()
	{
		Yii::import('ext.EConsoleRunner.EConsoleRunner');
	}
	
	public function getMessageSource()
	{
		if(!isset($this->_messages))
		{
			$this->_messages = Yii::app()->getComponent($this->messageSource);
			if(!$this->_messages === null)
				throw new CException(Yii::t(self::ID, 'A message source must be defined.'));
		}
		return $this->_messages;
	}
	
	public function getViewSource()
	{
		if(!isset($this->_viewSource))
		{
			$this->_viewSource = Yii::app()->getComponent($this->viewSource);
			if($this->_viewSource === null)
				throw new CException(Yii::t(self::ID, 'A view source component must be defined.'));
		}
		return $this->_viewSource;
	}

	/**
	 * Parses the source view file and saves the results as another file.
	 * This method is required by the parent class.
	 * @param string $sourceFile the source view file path
	 * @param string $viewFile the resulting view file path
	 */
	protected function generateViewFile($sourceFile, $viewFile)
	{
		$viewId = $this->getViewSource()->getViewId($sourceFile, $viewFile);
		
		if($viewId === false)
			throw new CException(Yii::t(self::ID, 'Database entry for view with source path "{source_file}" and compiled path "{compiled_file}" does not exist.', array('{source_file}' => $sourceFile, '{compiled_file}' => $viewFile)));
		
		$this->_generateViewFile($sourceFile, $viewFile, $viewId, $this->getMessageSource()->useLocaleSpecificTranslations ? Yii::app()->getLanguage() : TranslateModule::translator()->getLanguageID());
	}
	
	protected function _generateViewFile($sourcePath, $compiledPath, $id, $language)
	{
		$runner = new EConsoleRunner();
		$runner->run("tviewcompile compileView --sourcePath=$sourcePath --compiledPath=$compiledPath --id=$id --language=$language --filePermission=$this->filePermission", false);
	}
	
	public function renderFile($context, $sourceFile, $data, $return)
	{
		return $context->renderInternal($this->getViewSource()->translate($context, $sourceFile), $data, $return);
	}
	
	/**
	 * Generates the resulting view file path.
	 * @param string $file source view file path
	 * @param string $language the language of the view we are looking for
	 * @return string resulting view file path
	 */
	protected function getViewFile($file, $language = null)
	{
		if($language === null)
			$language = Yii::app()->getLanguage();
		
		if(!$this->getMessageSource()->useLocaleSpecificTranslations)
			$language = TranslateModule::translator()->getLanguageID($language);

		if($this->useRuntimePath)
			return Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.sprintf('%x', crc32(__CLASS__.Yii::getVersion().dirname($file))).DIRECTORY_SEPARATOR.$language.DIRECTORY_SEPARATOR.basename($file); 
		return $file.'c.'.$language;
	}
	
	/**
	 * method that handles the on missing view translation event
	 *
	 * @param TMissingViewTranslationEvent $event
	 * @return boolean true if view was successfully translated, false otherwise.
	 */
	public function missingViewTranslation($event)
	{	
		if($event === null)
		{
			Yii::log("The missing view translation event cannot be null.", CLogger::LEVEL_ERROR, self::ID);
			return false;
		}
		
		$viewSource = $this->getViewSource();
		$transaction = $viewSource->getDbConnection()->beginTransaction();
		try
		{
			$view = $viewSource->getView($event->route, $event->path, $event->language);

			if($view['view_id'] === null)
			{
				$view['view_id'] = $viewSource->addViewSource($event->path);

				if($view['view_id'] === null)
				{
					throw new CException(Yii::t(self::ID, "The source file '{file}' was not found in the database and could not be added to it.", array('{file}' => $event->path)));
				}
			}
			
			if($view['route_id'] === null)
			{
				$view['route_id'] = $viewSource->getRouteId($event->route);
				
				if($view['route_id'] === false)
				{
					$view['route_id'] = $viewSource->addRoute($event->route);
					
					if($view['route_id'] === null)
					{
						throw new CException(Yii::t(self::ID, "The route '{route}' was not found and could not be added to the database.", array('{file}' => $event->path, '{route}' => $event->route)));
					}
				}

				if($viewSource->addViewRoute($view['route_id'], $view['view_id']) === null)
				{
					throw new CException(Yii::t(self::ID, "The source file '{file}' and the route '{route}' both exist, but they could not be associated with eachother.", array('{file}' => $event->path, '{route}' => $event->route)));
				}
			}
				
			if($view['path'] === null)
			{
				$view['path'] = $this->getViewFile($event->path);
		
				if($viewSource->addView($view['view_id'], $view['path'], $event->language) === null)
				{
					Yii::log("The source file '$event->path' compiled to '{$view['path']}' could not be added to the database. The view will be recompiled for each request until this problem is fixed.", CLogger::LEVEL_ERROR, self::ID);
				}
			}
			
			$view['last_modified'] = $view['last_modified'] === null ? time() : strtotime($view['last_modified']);
			
			if(@filemtime($view['path']) < $view['last_modified'] || @filemtime($view['path']) < @filemtime($event->path))
			{
				$this->_generateViewFile($event->path, $view['path'], $view['view_id'], $event->language);
			}
			
			$event->path = $view['path'];
			
			$transaction->commit();
			return true;
		}
		catch(Exception $e)
		{
			$transaction->rollback();
			throw $e;
		}
		
		return false;
	}
	
}