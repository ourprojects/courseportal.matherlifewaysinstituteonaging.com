<?php

/**
 * This is a very alpha build. More features and comments to come.
 * 
 * @author Louis DaPrato
 *
 */

class Jplayer extends CWidget {
	
	public static $defaultSkin = 'blue.monday';
	public static $componentId = 'Jplayer';

	private $_config = array(
	'type' => 'video',
	'config' => array(
				'ready' => null,
				'swfPath' => null,
				'solution' => null,
				'supplied' => null,
				'size' => null,
				'sizeFull' => null,
				'fullScreen' => null,
				'autohide' => null,
				'preload' => null,
				'volume' => null,
				'muted' => null,
				'verticalVolume' => null,
				'backgroundColor' => null,
				'cssSelectorAncestor' => null,
				'cssSelector' => array(
								  'videoPlay' => '.jp-video-play',
								  'play' => '.jp-play',
								  'pause' => '.jp-pause',
								  'stop' => '.jp-stop',
								  'seekBar' => '.jp-seek-bar',
								  'playBar' => '.jp-play-bar',
								  'mute' => '.jp-mute',
								  'unmute' => '.jp-unmute',
								  'volumeBar' => '.jp-volume-bar',
								  'volumeBarValue' => '.jp-volume-bar-value',
								  'volumeMax' => '.jp-volume-max',
								  'currentTime' => '.jp-current-time',
								  'duration' => '.jp-duration',
								  'fullScreen' => '.jp-full-screen',
								  'restoreScreen' => '.jp-restore-screen',
								  'repeat' => '.jp-repeat',
								  'repeatOff' => '.jp-repeat-off',
								  'gui' => '.jp-gui',
								  'noSolution' => '.jp-no-solution'
								),
				'noConflict' => null,
				'wmode' => null,
				'loop' => null,
				'repeat' => null,
				'emulateHtml' => null,
				'nativeVideoControls' => null,
				'noFullScreen' => null,
				'noVolume' => null,
				'idPrefix' => null,
				'errorAlerts' => null,
				'warningAlerts' => null,
				'eventType' => null,
		)
	);
	
	public $inspectorEnabled = false;
	public $renderContent = true;
	public $target;
	private $_script = 'player';
	private $_files = array();
	
	private $_assetsUrl;
	
	public function init() {
		$this->skin = self::$defaultSkin;
		$this->publishAssets();
	}
	
	public function run() {
		if(!isset($this->_config['config']['cssSelectorAncestor']))
			$this->_config['config']['cssSelectorAncestor'] = "#jp_container_{$this->getId()}";
		
		if(!isset($this->_config['config']['swfPath']))
			$this->_config['config']['swfPath'] = "$this->_assetsUrl/flash";
		
		if(!isset($this->target))
			$this->target = "#jquery_jplayer_{$this->getId()}";
		
		if(!is_dir(self::getAssetPathFromAlias("skins/$this->skin")))
			$this->skin = self::$defaultSkin;
		
		if($this->_script === 'playlist')
			Yii::app()->clientScript->registerScriptFile("$this->_assetsUrl/scripts/add-on/jplayer.playlist.min.js", CClientScript::POS_HEAD);
		
		Yii::app()->clientScript->registerCssFile("$this->_assetsUrl/skins/$this->skin/jplayer.$this->skin.css");

		Yii::app()->clientScript->registerScript(
				$this->getId(),
				$this->render(
						'scripts'.DIRECTORY_SEPARATOR.$this->_script, 
						array(
								'files' => $this->_files, 
								'target' => $this->target,
								'config' => $this->_config['config'],
							), 
						true
					)
		);

		if($this->renderContent)
			$this->render(
					$this->_config['type'], 
					array_merge(array('target' => $this->target), $this->_config['config'])
				);
		
		if($this->inspectorEnabled) {
			Yii::app()->clientScript->registerScriptFile("$this->_assetsUrl/scripts/add-on/jquery.jplayer.inspector.js", CClientScript::POS_HEAD);
			Yii::app()->clientScript->registerScript(
					"{$this->getId()}.inspector",
					"$('#jplayer_inspector_{$this->getId()}').jPlayerInspector({jPlayer:$('#jquery_jplayer_{$this->getId()}')});"
				);
			if($this->renderContent)
				echo "<div id='jplayer_inspector_{$this->getId()}'></div>";
		}
	}

	public function publishAssets() {
		$assetsDir = self::getAssetPathFromAlias();
		if(is_dir($assetsDir)) {
			$this->_assetsUrl = Yii::app()->assetManager->publish($assetsDir);
			Yii::app()->clientScript->registerCoreScript('jquery');
			Yii::app()->clientScript->registerScriptFile("$this->_assetsUrl/scripts/jquery.jplayer.min.js", CClientScript::POS_HEAD);
		} else {
			throw new Exception(
					Yii::t(self::$componentId,
							'Jplayer - Error: Couldn\'t find assets directory. Please make sure directory exists and is readable "{dir_name}"',
							array('dir_name' => $assetsDir))
			);
		}
	}
	
	public function setType($type) {
		if(!file_exists(self::getViewPathFromAlias($type)))
			throw new Exception(
					Yii::t(self::$componentId,
							'Jplayer - Error: Unknown player type. Please make sure file exists and is readable "{file_name}"',
							array('file_name' => self::getViewPathFromAlias($type)))
			);
		$this->_config['type'] = $type;
	}
	
	public function setFiles($files) {
		if(is_array($files) && count(array_filter(array_keys($files), 'is_string')) == count($files)) {
			$this->_script = 'player';
			$this->_config['config']['supplied'] = array_keys($files);
		} else {
			$this->_script = 'playlist';
			$this->_config['config']['supplied'] = array();
			foreach($files as $moreFiles)
				$this->_config['config']['supplied'] = array_merge($this->_config['config']['supplied'], $moreFiles);
		}
		$this->_config['config']['supplied'] = array_flip($this->_config['config']['supplied']);
		unset($this->_config['config']['supplied']['poster']);
		$this->_config['config']['supplied'] = implode(',', array_flip($this->_config['config']['supplied']));
		$this->_files = $files;
	}
	
	public function getFiles() {
		return $this->_files;
	}
	
	public function __get($name) {
		if(isset($this->_config[$name]))
			return $this->_config[$name];
		return parent::__get($name);
	}
	
	public function __set($name, $value) {
		if(array_key_exists($name, $this->_config['config']))
			$this->_config['config'][$name] = $value;
		else
			parent::__set($name, $value);
	}
	
	public static function getAssetPathFromAlias($assetAlias = '') {
		$assetPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		$assetAlias = explode('/', $assetAlias);
		foreach($assetAlias as $part)
			$assetPath .= DIRECTORY_SEPARATOR . $part;
		return $assetPath;
	}
	
	public static function getViewPathFromAlias($viewAlias = '') {
		$viewPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'views';
		$viewAlias = explode('/', $viewAlias);
		foreach($viewAlias as $part)
			$viewPath .= DIRECTORY_SEPARATOR . $part;
		return $viewPath;
	}
	
}