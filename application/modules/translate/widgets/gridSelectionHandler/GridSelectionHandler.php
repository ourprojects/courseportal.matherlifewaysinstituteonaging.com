<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class GridSelectionHandler extends CWidget
{
	
	public $gridId;
	
	public $url;
	
	public $activeRecordClass;
	
	public $scope = null;
	
	public $scopeParameters = null;
	
	public $buttonText;
	
	public $loadingText;
	
	public $buttonHtmlOptions = array();
	
	public $dialogTitle;
	
	public $dialogOptions = array(
			'autoOpen' => false,
			'modal' => true,
			'width' => 'auto',
			'height' => 'auto'
	);
	
	public $selectionHandlerOptions = array();
	
	public $progressBarOptions = array();
	
	private $_assetsUrl;
	
	public function init()
	{
		// publish assets
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir))
		{
			$this->_assetsUrl = Yii::app()->assetManager->publish($assetsDir);
		}
		else
		{
			throw new CException(TranslateModule::t(
					'{class_name} - Error: Couldn\'t find assets to publish. Please make sure the directory "{dir_name}" exists and is readable.',
					array('{class_name}' => get_class($this), '{dir_name}' => $assetsDir))
			);
		}
	}

	public function run()
	{
		$selectionHandlerOptions = $this->selectionHandlerOptions;
		$selectionHandlerOptions['gridId'] = $this->gridId;
		$selectionHandlerOptions['url'] = $this->url;
		$selectionHandlerOptions['activeRecordClass'] = $this->activeRecordClass;
		$selectionHandlerOptions['loadingText'] = $this->loadingText;
		$selectionHandlerOptions['scope'] = $this->scope;
		$selectionHandlerOptions['scopeParameters'] = $this->scopeParameters;
		
		$dialogOptions = $this->dialogOptions;
		$dialogOptions['title'] = $this->dialogTitle;
		
		$this->render('dialog',
			array(
				'id' => $this->getId(),
				'buttonText' => $this->buttonText,
				'selectionHandlerOptions' => $selectionHandlerOptions,
				'dialogOptions' => $dialogOptions,
				'butttonHtmlOptions' => $this->buttonHtmlOptions,
				'progressBarOptions' => $this->progressBarOptions,
				'assetsUrl' => $this->getAssetsUrl()
			)
		);
	}
	
	public function getAssetsUrl()
	{
		return $this->_assetsUrl;
	}

}
?>