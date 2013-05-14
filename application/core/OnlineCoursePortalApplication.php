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
    	if(is_array($config))
    		$this->config = $config;
    	else if(isset($config))
    		$this->config = require strval($config);
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
    
    protected function init()
    {
    	$this->onEndRequest = array($this, 'saveUserState');
    }
    
    public function saveUserState()
    {
        if(($user = $this->getUser()) && 
        		$user->canGetProperty('model') && 
        		($user = $user->getModel()) && !$user->getIsNewRecord())
    	{
    		$updated = array();
    		if($request = Yii::app()->getRequest())
    		{
	    		$var = $request->getUserHostAddress();
	    		if($var != $user->last_ip)
	    		{
	    			$updated[] = 'last_ip';
	    			$user->last_ip = $var;
	    		}
	    				
	    		$var = $request->getUserAgent();
	    		$var = strlen($var) > 255 ? substr($var, 0, 255) : $var;
	    		if($var != $user->last_agent)
	    		{
	    			$updated[] = 'last_agent';
	    			$user->last_agent = $var;
	    		}
    		}
    		$var = $this->getLanguage();
    		if($user->language != $var)
    		{
    			$updated[] = 'language';
    			$user->language = $var;
    		}
    		if(!empty($updated))
    		{
    			$user->save(true, $updated);
    		}
    	}
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
