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
    	parent::preinit();
    }
    
    /**
     * Creates the controller and performs the specified action.
     * @param string $route the route of the current request. See {@link createController} for more details.
     * @throws CHttpException if the controller could not be created.
     */
    public function runController($route)
    {
    	// Configure language settings
    	
    	// If there is a post-request, redirect the application to the provided url of the selected language
    	if(isset($_POST['language'])) {
    		Yii::app()->getRequest()->redirect($this->createUrl($route, array('language' => $_POST['language'])));
    	}
		
    	// Set the application language if provided by GET, session or cookie
		if(isset($_GET['language'])) {
			$language = (string)$_GET['language'];
			unset($_GET['language']);
		} elseif (isset(Yii::app()->session['language'])) {
			$language = (string)Yii::app()->session['language'];
		} elseif (Yii::app()->user->hasState('language')) {
    		$language = (string)Yii::app()->user->getState('language');
    	} elseif(isset(Yii::app()->request->cookies['language'])) {
    		$language = (string)Yii::app()->request->cookies['language'];
    	} elseif(Yii::app()->getRequest()->getPreferredLanguage() !== false) {
    		$language = (string)Yii::app()->getRequest()->getPreferredLanguage();
    	} else {
    		$language = (string)Yii::app()->language;
    	}
    	
    	//If the language is not recognized maybe the user didn't add the language part of the address.
    	//Try and add the source language to the url and redirect to the new url.
    	if(!Yii::app()->localeManager->isAcceptedLanguage($language)) {
    		Yii::app()->getRequest()->redirect($this->createUrl("$language/$route", array('language' => Yii::app()->sourceLanguage)));
    	}
		
    	Yii::app()->translate->acceptedLanguages = Yii::app()->localeManager->getLanguages();
    	Yii::app()->language = $language;

    	$this->name = t($this->name);
		parent::runController($route);
    }
    
    public function setComponents($components, $merge = true) {
    	parent::setComponents($components, $merge);
    	foreach($components as $id => $component) {
    		if(!($component instanceof IApplicationComponent)) {
    			$this->setComponent($id, null);
    		}
    	}
    }
    
    public function setLanguage($language) {
    	parent::setLanguage($language);
    	setLocale(LC_ALL, $language.'.'.Yii::app()->charset);
    	Yii::app()->session['language'] = $language;
    	Yii::app()->user->setState('language', $language);
    	Yii::app()->request->cookies['language'] = new CHttpCookie('language', $language);
    	Yii::app()->request->cookies['language']->expire = time() + (60 * 60 * 24 * 365 * 2); // (2 year)
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
