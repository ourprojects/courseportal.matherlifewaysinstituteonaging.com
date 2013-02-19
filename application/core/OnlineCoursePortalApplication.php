<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
* Implements global registry and config
*/
class OnlineCoursePortalApplication extends CWebApplication {
	
    protected $config = array();

    /**
    * Initiates the application
    *
    * @access public
    * @param array $config
    * @return void
    */
    public function __construct($config = null) {
    	if(is_string($config))
    		$this->config = require $config;
    	else
    		$this->config = $config;
        parent::__construct($this->config);
    }
    
    protected function preinit() {
    	Yii::setPathOfAlias('modules', APPPATH . 'modules');
    	Yii::setPathOfAlias('helpers', APPPATH . 'helpers');
    	Yii::setPathOfAlias('filters', APPPATH . 'filters');
    	Yii::setPathOfAlias('uploads', APPPATH . 'uploads');
    	Yii::setPathOfAlias('behaviors', APPPATH . 'behaviors');
    	parent::preinit();
    }
    
    /**
     * Creates the controller and performs the specified action.
     * @param string $route the route of the current request. See {@link createController} for more details.
     * @throws CHttpException if the controller could not be created.
     */
    public function createController($route, $owner = NULL) {
    	// Process the request through the translation system
    	Yii::app()->translate->processRequest($route);
    	
    	$this->name = t($this->name);
		$controller = parent::createController($route, $owner);
		if(!is_subclass_of($controller, 'OnlineCoursePortalController') &&
				Yii::app()->getUrlManager()->hasPathInfoSegments()) {
			$route .= Yii::app()->getUrlManager()->popPathInfoSegment();
			Yii::app()->getUrlManager()->parsePathInfoSegments();
			return parent::createController($route, $owner);
		}
		return $controller;
    }
    
    public function setComponents($components, $merge = true) {
    	parent::setComponents($components, $merge);
    	foreach($components as $id => $component) {
    		if(!($component instanceof IApplicationComponent)) {
    			$this->setComponent($id, null);
    		}
    	}
    }

    /**
    * Loads a helper
    *
    * @access public
    * @param string $helper
    * @return void
    */
    public function loadHelper($helper) {
        Yii::import("helpers.$helper", true);
    }

    /**
    * Loads an extension
    *
    * @access public
    * @param string $extension
    * @param string $className
    * @return void
    */
    public function loadExtension($extension, $className = '*') {
        Yii::import("ext.$extension.$className", true);
    }

    /**
    * Returns a config variable from the registry
    *
    * @access public
    * @param string $name
    * @return mixed
    */
    public function getConfig($name) {
        return isset($this->config[$name]) ? $this->config[$name] : false;
    }
    
}
