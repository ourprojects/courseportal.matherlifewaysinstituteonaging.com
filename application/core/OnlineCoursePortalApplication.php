<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
* Implements global registry and config
*/
class OnlineCoursePortalApplication extends CWebApplication {
	
    protected $config = array();
    protected $registry = array();

    /**
    * Initiates the application
    *
    * @access public
    * @param array $config
    * @return void
    */
    public function __construct($config = null) {
        parent::__construct($config);
    }
    
    protected function preinit() {
    	Yii::setPathOfAlias('modules', APPPATH . 'modules');
    	Yii::setPathOfAlias('helpers', APPPATH . 'helpers');
    	Yii::setPathOfAlias('filters', APPPATH . 'filters');
    	Yii::setPathOfAlias('uploads', APPPATH . 'uploads');
    	parent::preinit();
    }
    
    protected function init() {
    	// Check for most necessary requirements
    	// Now check for PHP & db version
    	// Do not localize/translate this!
    	
    	if (ini_get('max_execution_time') < 1200)
    		@set_time_limit(1200); // Maximum execution time - works only if safe_mode is off
    	
    	// Deal with server systems having not set a default time zone
    	if(function_exists('date_default_timezone_set') and function_exists('date_default_timezone_get'))
    		@date_default_timezone_set(@date_default_timezone_get());
    	
    	//SET LOCAL TIME
    	$timeadjust = $this->getConfig('timeadjust');
    	if (substr($timeadjust, 0, 1) != '-' && substr($timeadjust, 0, 1) != '+') {
    		$timeadjust = "+$timeadjust";
    	}
    	if (strpos($timeadjust, 'hours') === false && strpos($timeadjust, 'minutes') === false && strpos($timeadjust, 'days') === false) {
    		$this->setConfig('timeadjust', "$timeadjust hours");
    	}
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
			$language = Yii::app()->session['language'];
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

    	$this->name = Yii::t('onlinecourseportal', $this->name);
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
    
    public function createController($route, $owner=null) {
    	if($owner !== null) {
    		$routePart = $this->_shiftOffFirstKey($_GET);
    		if($routePart !== null)
    			$route .= "$routePart/";
    	}
    	return parent::createController($route, $owner);
    }
    
    private function _shiftOffFirstKey(&$values) {
    	$newValues = array();
    	reset($values);
    	$removedKey = null;
    	if(list($removedKey, $val) = each($values)) {
	    	$lastValue = $val;
	    	if($lastValue !== '') {
	    		if(list($key, $val) = each($values)) {
			    	do {
			    		$newValues[$lastValue] = $key;
			    		$lastValue = $val;
			    		if($lastValue === '')
			    			break;
			    	} while(list($key, $val) = each($values));
			    	if($lastValue !== '')
			    		$newValues[$lastValue] = '';
	    		} else {
	    			$newValues[$lastValue] = '';
	    		}
	    	}
    	}
    	$values = $newValues;
    	return $removedKey;
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
    * Sets a configuration variable into the registry
    *
    * @access public
    * @param string $name
    * @param mixed $value
    * @return void
    */
    public function setConfig($name, $value) {
        $this->config[$name] = $value;
    }

    /**
    * Loads a config from a file
    *
    * @access public
    * @param string $file
    * @return void
    */
    public function loadConfig($file) {
        $config = require_once(CONFIGPATH . $file . EXT);
        if(is_array($config)) {
            foreach ($config as $k => $v)
                $this->setConfig($k, $v);
        }
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

    /**
    * Sets a configuration variable into the registry
    *
    * @access public
    * @param string $name
    * @param mixed $value
    * @return void
    */
    public function setRegistry($name, $value) {
        $this->registry[$name] = $value;
    }

    /**
    * Returns a config variable from the registry
    *
    * @access public
    * @param string $name
    * @return mixed
    */
    public function getRegistry($name) {
        return isset($this->registry[$name]) ? $this->registry[$name] : false;
    }
}
