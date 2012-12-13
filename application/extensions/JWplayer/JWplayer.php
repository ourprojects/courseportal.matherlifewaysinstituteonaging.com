<?php

/**
 * JWplayer widget
 * @author Louis DaPrato
 *
 */

class JWplayer extends CWidget {

	const ID = 'Jplayer';
	const DEFAULT_TYPE = 'player';

	public $type = self::DEFAULT_TYPE;
	public $target;
	public $config = array();
	private $_assetsUrl;
	
	public function init() {
		$this->publishAssets();
	}
	
	public function run() {
		if(!isset($this->target))
			$this->target = $this->getId();
		switch($this->type) {
			case 'player':
				Yii::app()->getClientScript()->registerScript(
					$this->getId(), 
					'jwplayer("'.$this->target.'").setup('.CJavaScript::encode($this->config).');'
				);
				break;
			case 'imagerotator':
				// @ TODO weird config to automate. Not needed at the moment.
				break;
			case 'silverlight':
				Yii::app()->getClientScript()->registerScript(
					$this->getId(), 
					'new jeroenwijering.Player(document.getElementById("'.$this->target.'"),"'.$this->_assetsUrl.'/silverlight/wmvplayer.xaml",'.CJavaScript::encode($this->config).');'
				);
				break;
		}
	}

	public function publishAssets() {
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir)) {
			$this->_assetsUrl = Yii::app()->assetManager->publish($assetsDir, false, 1, YII_DEBUG);
			switch($this->type) {
				case 'player':
					Yii::app()->getClientScript()->registerScriptFile("$this->_assetsUrl/player/jwplayer.js", CClientScript::POS_HEAD);
					Yii::app()->getClientScript()->registerScript($this->getId(), 'jwplayer.key="9kexJkklndg+FRZpAoCLNc7YxWP3J0HN32gVgg=="', CClientScript::POS_HEAD);
					if(!isset($this->config['flashplayer']))
						$this->config['flashplayer'] = "$this->_assetsUrl/player/jwplayer.flash.swf";
					break;
				case 'imagerotator':
					// @ TODO weird config to automate. Not needed at the moment.
					break;
				case 'silverlight':
					Yii::app()->getClientScript()->registerScriptFile("$this->_assetsUrl/silverlight/silverlight.js", CClientScript::POS_HEAD);
					Yii::app()->getClientScript()->registerScriptFile("$this->_assetsUrl/silverlight/wmvplayer.js", CClientScript::POS_HEAD);
					break;
			}
		} else {
			throw new Exception(
					Yii::t(self::ID,
							self::ID.' - Error: Couldn\'t find assets directory. Please make sure directory exists and is readable "{dir_name}"',
							array('{dir_name}' => $assetsDir))
			);
		}
	}
	
}