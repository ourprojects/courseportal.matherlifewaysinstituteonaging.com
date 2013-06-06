<?php

class TViewRenderer extends CViewRenderer
{
	
	const ID = 'modules.translate.TViewRenderer';
	
	public $viewSource = 'views';
	
	public $messageSource = 'messages';
	
	public $viewCompileCommand = 'tviewcompile';
	
	public $waitCursorViewPathAlias = 'application.modules.translate.views.viewRenderer.waitCursor';
	
	public $compileInBackground = true;
	
	public $addRedirectOnMissingView = true;
	
	private $_messages;
	
	private $_viewSource;
	
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
	 * @param string $sourcePath the source view file path
	 * @param string $compiledPath the resulting view file path
	 * @param integer $id The database id of the view to generated. 
	 * If not set the id will be determined automatically using the sourcePath and compiledPath.
	 * An exception will be thrown if the view is not found in the database.
	 * @param string $language The language that this view is being translated to. 
	 * If not set the applications current language setting will be used.
	 * @param $background boolean If true the view will be generated in the background.
	 */
	protected function generateViewFile($sourcePath, $compiledPath, $id = null, $language = null, $background = true)
	{
		if($id === null)
		{
			$id = $this->getViewSource()->getViewId($sourcePath, $compiledPath);
			
			if($id === false)
				throw new CException(Yii::t(self::ID, 'Database entry for view with source path "{source_path}" and compiled path "{compiled_path}" does not exist.', array('{source_path}' => $sourcePath, '{compiled_path}' => $compiledPath)));
		}
		
		if($language === null)
			$language = Yii::app()->getLanguage();
		
		if($background)
		{
			Yii::import('application.extensions.EConsoleRunner.EConsoleRunner');
			$this->getViewSource()->updateViewCompleted($id, $language, 0);
			
			$runner = new EConsoleRunner();
			$runner->run("tviewcompile stripTags --sourcePath=$sourcePath --compiledPath=$compiledPath --filePermission=$this->filePermission", false);
			if($this->addRedirectOnMissingView)
				Yii::app()->getClientScript()->registerScript(str_replace('.', '_', self::ID.'.redirect'), 'window.location.replace("'.Yii::app()->createUrl('/translate/translate/viewRendererProgress?requestUri='.urlencode(Yii::app()->getRequest()->getRequestUri())).'")');
			
			$runner->run("tviewcompile compileView --sourcePath=$sourcePath --compiledPath=$compiledPath --id=$id --language=$language --filePermission=$this->filePermission --useTransaction=$background");
		}
		else
		{
			$runner = new CConsoleCommandRunner();
			$runner->addCommands(Yii::getPathOfAlias('application.commands'));
			$runner->run(array('yiic', 'tviewcompile', 'compileView', "--sourcePath=$sourcePath", "--compiledPath=$compiledPath", "--id=$id", "--language=$language", "--filePermission=$this->filePermission", "--useTransaction=$background"));
		}
		
	}
	
	public function renderFile($context, $sourceFile, $data, $return)
	{
		return $context->renderInternal($this->getViewSource()->translate($context, $sourceFile), $data, $return);
	}
	
	/**
	 * Generates the resulting view file path.
	 * @param string $file source view file path.
	 * @param string $language the language of the view we are looking for. 
	 * If not set the application's current language setting will be used.
	 * @return string resulting view file path.
	 */
	protected function getViewFile($file, $language = null)
	{
		if($language === null)
			$language = Yii::app()->getLanguage();

		if($this->useRuntimePath)
			return Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.sprintf('%x', crc32(__CLASS__.Yii::getVersion().dirname($file))).DIRECTORY_SEPARATOR.$language.DIRECTORY_SEPARATOR.basename($file); 
		return $file.'c.'.$language;
	}
	
	/**
	 * This method handles on missing view translation events
	 *
	 * @param TMissingViewTranslationEvent $event
	 * @throws CException An exception will be thrown if the event passed to this method is null.
	 */
	public function missingViewTranslation($event)
	{	
		if($event === null)
		{
			throw new CException(Yii::t(self::ID, "The missing view translation event cannot be null."));
		}
		$event->path = $this->translate($event->route, $event->path, $event->language, $this->compileInBackground);
	}
	
	/**
	 * This method translates a view for a given route, path, language.
	 * 
	 * @param string $route The route that this view is being translated for.
	 * @param string $path The path to the source view to be translated.
	 * @param string $language The language to translated the source view into.
	 * @param boolean $background Whether to generate the translated view in the background. Default is true meaning generate the view in the background.
	 * @throws CException An exception will be thrown if any required database insertions fail.
	 * @return string the path to the translated view.
	 */
	public function translate($route, $path, $language, $background = true)
	{
		$viewSource = $this->getViewSource();
		if($viewSource->getDbConnection()->getCurrentTransaction() === null)
			$transaction = $viewSource->getDbConnection()->beginTransaction();
		try
		{
			$view = $viewSource->getView($route, $path, $language);
			
			// If the view source does not exist add it
			if($view['view_id'] === null)
			{
				$view['view_id'] = $viewSource->addViewSource($path);
		
				if($view['view_id'] === null)
				{
					throw new CException(Yii::t(self::ID, "The source file '{file}' was not found in the database and could not be added to it.", array('{file}' => $path)));
				}
			}
			
			// If the route does not exist or has not been associated with the source view add it and/or associate it with the source view.
			if($view['route_id'] === null)
			{
				$view['route_id'] = $viewSource->getRouteId($route);
		
				if($view['route_id'] === false)
				{
					$view['route_id'] = $viewSource->addRoute($route);
						
					if($view['route_id'] === null)
					{
						throw new CException(Yii::t(self::ID, "The route '{route}' was not found and could not be added to the database.", array('{file}' => $path, '{route}' => $route)));
					}
				}
		
				if($viewSource->addViewRoute($view['route_id'], $view['view_id']) === null)
				{
					throw new CException(Yii::t(self::ID, "The source file '{file}' and the route '{route}' both exist, but they could not be associated with eachother.", array('{file}' => $path, '{route}' => $route)));
				}
			}
		
			// If the transalted view file path does not exist generate it and add it.
			if($view['path'] === null)
			{
				$view['path'] = $this->getViewFile($path);
		
				if($viewSource->addView($view['view_id'], $view['path'], $language) === null)
				{
					Yii::log("The source file '$path' compiled to '{$view['path']}' could not be added to the database. The view will be recompiled for each request until this problem is fixed.", CLogger::LEVEL_ERROR, self::ID);
				}
			}
			
			// If there is not a last modified time either because a translated view path had not previously existed or 
			// the translated view has not yet been associated with any translations then set the last modified to the current time.
			// Otherwise convert the database timestamp to a unix time in milliseconds.
			$view['last_modified'] = $view['last_modified'] === null ? time() : strtotime($view['last_modified']);

			// Generate the translated view file if any of the following are true: 
			// it does not exist (note: @filemtime will return false if the file does not exist.).
			// it is older than the maximum last modified time of the translations used by this view.
			// it is older than the source view file.
			if(@filemtime($view['path']) < $view['last_modified'] || @filemtime($view['path']) < @filemtime($path))
			{
				$this->generateViewFile($path, $view['path'], $view['view_id'], $language, $background);
			}
			
			$path = $view['path'];
			if(isset($transaction) && $transaction->getActive())
				$transaction->commit();
		}
		catch(Exception $e)
		{
			if(isset($transaction) && $transaction->getActive())
				$transaction->rollback();
			throw $e;
		}
		
		return $path;
	}
	
}