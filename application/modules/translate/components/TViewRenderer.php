<?php

class TViewRenderer extends CViewRenderer
{

	private $_viewCompiler;

	/**
	 * Gets an instance of {@link TViewCompileCommand}
	 * @return TViewCompileCommand
	 */
	public function getViewCompiler()
	{
		if(!isset($this->_viewCompiler))
		{
			Yii::import('translate.commands.TViewCompileCommand');
			$this->_viewCompiler = new TViewCompileCommand(TranslateModule::ID.'.TViewCompileCommand', new CConsoleCommandRunner());
		}

		return $this->_viewCompiler;
	}

	/**
	 * Parses the source view file and saves the results as another file.
	 * This method is required by the parent class.
	 * @param string $sourcePath the source view file path
	 * @param string $compiledPath the resulting view file path
	 * @param string $route The route that requested this view.
	 * If not set the route name 'default' will be used.
	 * @param string $source The name of the translated messsage source component to use.
	 * If not set the message source component name at {@link TTranslator::messageSource} will be used.
	 * @param string $language The language that this view is being translated to.
	 * If not set the application's current language will be used.
	 * @param $background boolean If true the view will be generated in the background.
	 */
	protected function generateViewFile($sourcePath, $compiledPath, $route = 'default', $source = null, $language = null, $useTransaction = true)
	{
		if(!isset($source))
		{
			$source = TranslateModule::translator()->messageSource;
		}

		if(!isset($language))
		{
			$language = Yii::app()->getLanguage();
		}

		$this->getViewCompiler()->actionCompileView($sourcePath, $compiledPath, $route, $source, $language, $this->filePermission, $useTransaction);
	}

	/**
	 * (non-PHPdoc)
	 * @see CViewRenderer::renderFile()
	 */
	public function renderFile($context, $sourceFile, $data, $return)
	{
		return $context->renderInternal(TranslateModule::translator()->getViewSourceComponent()->translate($context, $sourceFile), $data, $return);
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
		{
			$language = Yii::app()->getLanguage();
		}

		if($this->useRuntimePath)
		{
			return Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.TranslateModule::ID.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.sprintf('%x', crc32(__CLASS__.Yii::getVersion().dirname($file))).DIRECTORY_SEPARATOR.$language.DIRECTORY_SEPARATOR.basename($file);
		}
		return $file.'c.'.$language;
	}

	/**
	 * This method handles on missing view translation events
	 *
	 * @param TMissingViewTranslationEvent $event
	 */
	public function missingViewTranslation($event)
	{
		$compiledPath = $this->getViewFile($event->path, $event->language);
		$this->generateViewFile($event->path, $compiledPath, $event->route, null, $event->language);
		$event->path = $compiledPath;
	}

}