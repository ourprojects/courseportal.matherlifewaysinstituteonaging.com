<?php defined('BASEPATH') or exit('No direct script access allowed');  

class Theme extends CTheme {
	
	public function getStylesUrl() {
		return $this->getBaseUrl() . '/styles';
	}
	
	public function getScriptsUrl() {
		return $this->getBaseUrl() . '/scripts';
	}
	
	public function getImagesUrl() {
		return $this->getBaseUrl() . '/images';
	}
	
	public function getFlashUrl() {
		return $this->getBaseUrl() . '/flash';
	}
	
}
