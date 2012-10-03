<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UrlManager extends CUrlManager {
	
	public $additionalPathInfo = array();

	public function createUrl($route, $params = array(), $ampersand = '&') {
        if (!isset($params['language']))
            $params['language'] = Yii::app()->language;
       	$route = "{$params['language']}/$route";
        unset($params['language']);
        return parent::createUrl($route, $params, $ampersand);
    }
    
    /**
     * Parses a path info into URL segments and saves them to $_GET and $_REQUEST.
     * @param string $pathInfo path info
     */
    public function parsePathInfo($pathInfo) {
    	if($pathInfo === '')
    		return;
    	if(is_array($pathInfo))
    		parent::parsePathInfo(implode('/', $pathInfo));
    	else
    		$this->additionalPathInfo = explode('/', trim($pathInfo, '/'));
    }

}
?>