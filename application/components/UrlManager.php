<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UrlManager extends CUrlManager {
	
	public $pathInfoSegments = array();

	public function createUrl($route, $params = array(), $ampersand = '&') {
        if (!isset($params['language']))
            $params['language'] = Yii::app()->language;
       	$route = $params['language'] . '/' . ltrim($route, '/');
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
    	$this->pathInfoSegments = explode('/', trim($pathInfo, '/'));
    }
    
    public function parsePathInfoSegments() {
    	if(empty($this->pathInfoSegments))
    		return;
    	parent::parsePathInfo(implode('/', $this->pathInfoSegments));
    }

}
?>