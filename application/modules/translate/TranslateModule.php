<?php

class TranslateModule extends CWebModule {
    /**
     * the name of the translate component
     * change this in case you dont use the default name
     * */
    public static $componentId = 'translate';
    
    private static $_translator = null;
    
	/**
	 * TranslateModule::init()
	 * 
	 * @return
	 */
	public function init() {
        $this->defaultController = 'Translate';
        $dirname = basename(dirname(__FILE__));
		$this->setImport(array(
            $dirname . '.models.*',
            $dirname . '.controllers.*',
            $dirname . '.components.*',
			$dirname . '.widgets.*',
        ));
        return parent::init();
	}
    /**
     * get the translate component
     * 
     * @return MPTranslate
     */
    public static function translator() 
    {
    	if(self::$_translator === null) 
    	{
        	self::$_translator = Yii::app()->getComponent(self::$componentId);
	        if(self::$_translator === null)
	            throw new CException('Translate component must be defined');
    	}
        return self::$_translator;
    }
    
    public static function missingTranslation($event) 
    {
        return self::translator()->missingTranslation($event);
    }

    /**
     * translate some message using the module configuration
     * 
     * @param string $message
     * @param array $params
     * @return string translated message
     */
    public static function t($message, $params = array()) 
    {
        return Yii::t(self::$componentId, $message, $params);
    }
}