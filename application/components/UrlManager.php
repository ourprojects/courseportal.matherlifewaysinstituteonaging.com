<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UrlManager extends CUrlManager {
	
	public $translateComponentId = 'translate';
	
	public function parseUrl($request)
	{
		$route = parent::parseUrl($request);
		if($translator = Yii::app()->getComponent($this->translateComponentId))
			$translator->processRequest($route);
		return $route;
	}

	public function createUrl($route, $params = array(), $ampersand = '&') {
        if(!isset($params['language']))
        {
        	if($translator = Yii::app()->getComponent($this->translateComponentId))
        		$params['language'] = $translator->getLanguageID();
        	else
        		$params['language'] = Yii::app()->language;
        }
        if($params['language'] !== false)
       		$route = $params['language'] . '/' . ltrim($route, '/');
        unset($params['language']);
        return parent::createUrl($route, $params, $ampersand);
    }
    
    public function parsePathInfo($pathInfo) {
    	$pathInfo = trim($pathInfo, '/');
    	if($pathInfo === '')
    		return;
    	if(!isset($_REQUEST['id']) && strpos($pathInfo, '/') === false)
    	{
    		$_GET['id'] = $_REQUEST['id'] = $pathInfo;
    	}
    	else
    	{
    		parent::parsePathInfo($pathInfo);
    	}
    }

}
?>