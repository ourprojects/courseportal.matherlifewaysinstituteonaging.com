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
	
	// @ array of config settings for fancybox
	public $config = array();
	
	// function to run the widget
    public function run() {
    	$this->render($this->viewName, $this->config, false);
	}
	
	public function render($view, $data = array(), $return = false) {
		if(!is_array($data) && is_string($data) && !$data = CJSON::decode($data))
			throw new CException(Yii::t(self::ID, 'The options parameter is not an array or a valid JSON string.'));
		
		$id = $this->getId();
		$js = parent::render($view, array('id' => $id, 'config' => $data), true);
		
		return $return ? $js : $this->registerScripts(__CLASS__ . $id, $js, CClientScript::POS_READY);
	}
	
	protected function registerScripts($id, $embeddedScript) {
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir)) {
			$assetsUrl = Yii::app()->assetManager->publish($assetsDir, false, 1, YII_DEBUG);
			
			$cs = Yii::app()->getClientScript();
			$cs->registerCoreScript('jquery');
			$cs->registerScriptFile("$assetsUrl/jquery.fancybox.pack.js", CClientScript::POS_HEAD);
			$cs->registerCssFile("$assetsUrl/jquery.fancybox.css");
			
			// if mouse actions enbled register the js
			if (!isset($this->config['mouseWheel']) || $this->config['mouseWheel'] === true) 
				$cs->registerScriptFile("$assetsUrl/lib/jquery.mousewheel-3.0.6.pack.js", CClientScript::POS_HEAD);
			
			// include helpers required by the config
			// thumbs
			if(isset($this->config['helpers']['thumbs'])) {
				$cs->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-thumbs.js", CClientScript::POS_HEAD);
				$cs->registerCssFile("$assetsUrl/helpers/jquery.fancybox-thumbs.css");
			}
			// media
			if(isset($this->config['helpers']['media']))
				$cs->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-media.js", CClientScript::POS_HEAD);
			// buttons
			if(isset($this->config['helpers']['buttons'])) {
				$cs->registerScriptFile("$assetsUrl/helpers/jquery.fancybox-buttons.js", CClientScript::POS_HEAD);
				$cs->registerCssFile("$assetsUrl/helpers/jquery.fancybox-buttons.css");
			}
			$cs->registerScript($id, $embeddedScript, CClientScript::POS_READY);
		} else {
			throw new CException(Yii::t(
							self::ID, 
							self::ID.' - Error: Couldn\'t find assets to publish. Please make sure directory exists and is readable {dir_name}',
							array('{dir_name}' => $assetsDir))
					);
		}
	}
}