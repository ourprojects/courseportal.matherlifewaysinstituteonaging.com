<?php   

class Theme extends CTheme {
	
	public function getStylesUrl($file = '') {
		return "{$this->getBaseUrl()}/styles/$file";
	}
	
	public function getScriptsUrl($file = '') {
		return "{$this->getBaseUrl()}/scripts/$file";
	}
	
	public function getImagesUrl($file = '') {
		return "{$this->getBaseUrl()}/images/$file";
	}
	
}
