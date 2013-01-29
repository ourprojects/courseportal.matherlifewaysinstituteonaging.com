<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UrlManager extends CUrlManager {
	
	private $_pathInfoSegments = array();

	public function createUrl($route, $params = array(), $ampersand = '&') {
        if(!isset($params['language']))
            $params['language'] = Yii::app()->language;
        if($params['language'] !== false)
       		$route = $params['language'] . '/' . ltrim($route, '/');
        unset($params['language']);
        return parent::createUrl($route, $params, $ampersand);
    }
    
    public function peekPathInfoSegment() {
    	return reset($this->_pathInfoSegments);
    }
    
    public function popPathInfoSegment() {
    	return array_shift($this->_pathInfoSegments);
    }
    
    public function pushPathInfoSegment($segment) {
    	return array_unshift($this->_pathInfoSegments, $segment);
    }
    
    public function hasPathInfoSegments() {
    	return !empty($this->_pathInfoSegments);
    }
    
    /**
     * Parses a path info into URL segments and saves them to $_GET and $_REQUEST.
     * @param string $pathInfo path info
     */
    public function parsePathInfo($pathInfo) {
    	if(empty($pathInfo))
    		return;
    	$this->_pathInfoSegments = explode('/', trim($pathInfo, '/'));
    }
    
    public function parsePathInfoSegments() {
    	if(empty($this->_pathInfoSegments))
    		return;
    	parent::parsePathInfo(implode('/', $this->_pathInfoSegments));
    }

}
?>