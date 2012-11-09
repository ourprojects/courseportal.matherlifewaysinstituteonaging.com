<?php defined('BASEPATH') or exit('No direct script access allowed');  

class HttpRequest extends CHttpRequest {
	
	public $noCsrfValidationRoutes = array();
	
	public $matchCase = false;

	public function validateCsrfToken($event) {
		$route = Yii::app()->getUrlManager()->parseUrl(Yii::app()->getRequest());
		foreach($this->noCsrfValidationRoutes as $noValidationRoute) {
			if(preg_match('/'.str_replace('/', '\/', $noValidationRoute).'/'.($this->matchCase ? '' : 'i'), $route)) {
				return true;
			}
		}

		return parent::validateCsrfToken($event);
	}
	
	public function getRestParams() {
		return parent::getRestParams();
	}
	
}