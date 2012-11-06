<?php
/**
 * @author Louis DaPrato
 * Adapted from the following Yii widget extension.
 * 
 * EFancyBox widget class file.
 * @author Thiago Otaviani Vidal <thiagovidal@othys.com>
 * @link http://www.othys.com
 * Copyright (c) 2010 Thiago Otaviani Vidal
 * MADE IN BRAZIL
 * @version: 1.6
 */
class EFancyBox extends CWidget {
	
	const ID = 'EFancyBox';

	// @ string the taget element on DOM
	public $target;
	// @ boolean whether to enable mouse interaction
	public $mouseEnabled = true;
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
		$config = CJavaScript::encode($this->config);
		Yii::app()->clientScript->registerScript($this->getId(), "
			$('$this->target').fancybox($config);
		");
	}
	
	// function to publish and register assets on page 
	public function publishAssets() {
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir)) {
			$assetsUrl = Yii::app()->assetManager->publish($assetsDir);
			Yii::app()->clientScript->registerCoreScript('jquery');
			Yii::app()->clientScript->registerScriptFile("$assetsUrl/jquery.fancybox.pack.js", CClientScript::POS_HEAD);
			Yii::app()->clientScript->registerCssFile("$assetsUrl/jquery.fancybox.css");
			
			// if mouse actions enbled register the js
			if ($this->mouseEnabled) 
				Yii::app()->clientScript->registerScriptFile("$assetsUrl/lib/jquery.mousewheel-3.0.6.pack.js", CClientScript::POS_HEAD);
			
			// include helpers required by the config
			// thumbs
			if(isset($this->config['helpers']['thumbs'])) {
				Yii::app()->clientScript->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-thumbs.js", CClientScript::POS_HEAD);
				Yii::app()->clientScript->registerCssFile("$assetsUrl/helpers/jquery.fancybox-thumbs.css");
			}
			// media
			if(isset($this->config['helpers']['media']))
				Yii::app()->clientScript->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-media.js", CClientScript::POS_HEAD);
			// buttons
			if(isset($this->config['helpers']['buttons'])) {
				Yii::app()->clientScript->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-buttons.js", CClientScript::POS_HEAD);
				Yii::app()->clientScript->registerCssFile("$assetsUrl/helpers/jquery.fancybox-buttons.css");
			}
			
		} else {
			throw new Exception(Yii::t(
							self::ID, 
							self::ID.' - Error: Couldn\'t find assets to publish. Please make sure directory exists and is readable {dir_name}',
							array('{dir_name}' => $assetsDir))
					);
		}
	}
}