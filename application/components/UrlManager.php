<?php   

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
		if($translator = Yii::app()->getComponent($this->translateComponentId))
		{
	        if(empty($params[$translator->languageRequestVarName]))
	        {
	        	$params[$translator->languageRequestVarName] = Yii::app()->getLanguage();
	        }
	       	$route = $params[$translator->languageRequestVarName] . '/' . ltrim($route, '/');
	        unset($params[$translator->languageRequestVarName]);
		}
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