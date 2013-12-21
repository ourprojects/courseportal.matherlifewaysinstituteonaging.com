<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class GridSelectionHandler extends CWidget
{
	
	private $_gridId;
	
	public $url = '';
	
	public $activeRecordClass = '';
	
	public $scopes = array();
	
	public $keys = array('id');
	
	public $buttonText = 'Handle Selection';
	
	public $loadingText = 'Loading...';
	
	public $buttonHtmlOptions = array();
	
	public $dialogTitle = 'Selection Handler Dialog';
	
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
		if(!isset($this->_gridId))
		{
			throw new CException(TranslateModule::t('A grid ID has not been sepcifed for GridSelectionHandler.'));
		}
	
		$selectionHandlerOptions = $this->selectionHandlerOptions;
		$selectionHandlerOptions['gridId'] = $this->getGridId();
		$selectionHandlerOptions['url'] = $this->url;
		$selectionHandlerOptions['activeRecordClass'] = $this->activeRecordClass;
		$selectionHandlerOptions['keys'] = $this->keys;
		$selectionHandlerOptions['loadingText'] = $this->loadingText;
		$selectionHandlerOptions['scopes'] = $this->scopes;
		
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
	
	public function getGridId()
	{
		return $this->_gridId;
	}
	
	public function setGridId($gridId)
	{
		$this->setId('selectionHandler_'.$gridId);
		$this->_gridId = $gridId;
	}

}
?>