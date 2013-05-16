<?php

class TViewRenderer extends CViewRenderer
{
	
	const CACHE_DURATION_INFINITY = -1;
	
	const CACHE_DURATION_NEVER = 0;
	
	public $cacheDuration = self::CACHE_DURATION_NEVER;

	private $_translator;
	
	public function init()
	{
		$this->_translator = TranslateModule::translator();
	}

	/**
	 * Parses the source view file and saves the results as another file.
	 * This method is required by the parent class.
	 * @param string $sourceFile the source view file path
	 * @param string $viewFile the resulting view file path
	 */
	protected function generateViewFile($sourceFile, $viewFile)
	{
		file_put_contents(
			$viewFile, 
			preg_replace_callback(
				'/\{t(?:\s+category\s*=\s*(\w+?))?\}(.+?)\{\/t\}/s', 
				array(&$this, 'pregReplaceCallback'), 
				file_get_contents($sourceFile)
			)
		);
	}

	private function pregReplaceCallback($matches)
	{
		return Yii::t($matches[1] === '' ? $this->_translator->messageCategory : $matches[1], $matches[2], array(), null, null);
	}
	
	public function renderFile($context, $sourceFile, $data, $return)
	{
		if(!is_file($sourceFile) || ($file = realpath($sourceFile)) === false)
			throw new CException(Yii::t('yii','View file "{file}" does not exist.', array('{file}' => $sourceFile)));
		$viewFile = $this->getViewFile($sourceFile);
		if($this->cacheDuration === self::CACHE_DURATION_NEVER || 
				@filemtime($sourceFile) > ($viewFileModifiedTime = @filemtime($viewFile)) || 
				($this->cacheDuration !== self::CACHE_DURATION_INFINITY && ($viewFileModifiedTime + $this->cacheDuration) < time()))
		{
			$this->generateViewFile($sourceFile, $viewFile);
			@chmod($viewFile, $this->filePermission);
		}
		return $context->renderInternal($viewFile, $data, $return);
	}
	
	/**
	 * Generates the resulting view file path.
	 * @param string $file source view file path
	 * @return string resulting view file path
	 */
	protected function getViewFile($file)
	{
		if($this->useRuntimePath)
		{
			$crc = sprintf('%x', crc32(get_class($this).Yii::getVersion().dirname($file)));
			$viewFile = Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$crc.DIRECTORY_SEPARATOR.$this->_translator->getLanguageID().DIRECTORY_SEPARATOR.basename($file);
			if(!is_file($viewFile))
				@mkdir(dirname($viewFile), $this->filePermission, true);
			return $viewFile;
		}
		else
			return $file.'c.'.$this->_translator->getLanguageID();
	}
	
}