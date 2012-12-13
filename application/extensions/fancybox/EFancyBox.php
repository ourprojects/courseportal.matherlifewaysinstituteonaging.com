<?php
/**
 * A FancyBox widget for Yii
 * 
 * @author Louis DaPrato
 */
class EFancyBox extends CWidget {
	
	const ID = 'EFancyBox';
	
	const VIEW_NAME = 'FancyBox';
	
	public $viewName = self::VIEW_NAME;

	// @ string the taget element on DOM
	public $target;
	// @ array of config settings for fancybox
	public $config = array();
	
	// function to init the widget
	public function init() {
		// if not informed will generate Yii defaut generated id, since version 1.6
		if(!isset($this->id))
			$this->id = $this->getId();
		// publish the required assets
		$this->publishAssets();
	}
	
	// function to run the widget
    public function run() {
		$this->render($this->viewName, $this->config, false);
	}
	
	public function render($view, $data = array(), $return = false) {
		if(!is_string($data))
			$data = CJavaScript::encode($this->config);
		
		$js = parent::render($view, array('target' => $this->target, 'data' => $data), true);
		
		return $return ? $js : Yii::app()->getClientScript()->registerScript($this->getId(), $js, CClientScript::POS_READY);
	}
	
	// function to publish and register assets on page 
	public function publishAssets() {
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir)) {
			$assetsUrl = Yii::app()->assetManager->publish($assetsDir, false, 1, YII_DEBUG);
			Yii::app()->getClientScript()->registerCoreScript('jquery');
			Yii::app()->getClientScript()->registerScriptFile("$assetsUrl/jquery.fancybox.pack.js", CClientScript::POS_HEAD);
			Yii::app()->getClientScript()->registerCssFile("$assetsUrl/jquery.fancybox.css");
			
			// if mouse actions enbled register the js
			if (!isset($this->config['mouseWheel']) || $this->config['mouseWheel'] === true) 
				Yii::app()->getClientScript()->registerScriptFile("$assetsUrl/lib/jquery.mousewheel-3.0.6.pack.js", CClientScript::POS_HEAD);
			
			// include helpers required by the config
			// thumbs
			if(isset($this->config['helpers']['thumbs'])) {
				Yii::app()->getClientScript()->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-thumbs.js", CClientScript::POS_HEAD);
				Yii::app()->getClientScript()->registerCssFile("$assetsUrl/helpers/jquery.fancybox-thumbs.css");
			}
			// media
			if(isset($this->config['helpers']['media']))
				Yii::app()->getClientScript()->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-media.js", CClientScript::POS_HEAD);
			// buttons
			if(isset($this->config['helpers']['buttons'])) {
				Yii::app()->getClientScript()->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-buttons.js", CClientScript::POS_HEAD);
				Yii::app()->getClientScript()->registerCssFile("$assetsUrl/helpers/jquery.fancybox-buttons.css");
			}
			
		} else {
			throw new CException(Yii::t(
							self::ID, 
							self::ID.' - Error: Couldn\'t find assets to publish. Please make sure directory exists and is readable {dir_name}',
							array('{dir_name}' => $assetsDir))
					);
		}
	}
}