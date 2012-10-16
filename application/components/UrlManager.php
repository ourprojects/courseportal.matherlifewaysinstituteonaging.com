<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UrlManager extends CUrlManager {
	
	private $_pathInfoSegments = array();

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
    	$this->_pathInfoSegments = explode('/', trim($pathInfo, '/'));
    }
    
    public function getPathInfoSegments() {
    	 return $this->_pathInfoSegments;
    }
    
    public function prependPathInfoSegment($segment) {
    	array_unshift($this->_pathInfoSegments, $segment);
    }
    
    public function parsePathInfoSegments() {
    	if(empty($this->_pathInfoSegments))
    		return;
    	parent::parsePathInfo(implode('/', $this->_pathInfoSegments));
    }

}
?>