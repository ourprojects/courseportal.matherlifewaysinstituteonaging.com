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
        $dirname = trim(dirname(__FILE__), '/');
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
    static function translator() {
    	if(self::$_translator === null) {
        	self::$_translator = Yii::app()->getComponent(self::$componentId);
	        if(self::$_translator === null)
	            throw new CException('Translate component must be defined');
    	}
        return self::$_translator;
    }
    
    static function __callStatic($method, $args) {
        return call_user_func_array(array(self::translator(), $method), $args);
    }
    
    static function missingTranslation($event) {
        return self::translator()->missingTranslation($event);
    }
    
    static function cDbCriteriaInstance($data = array()) {
    	return new CDbCriteria($data);
    }
    /**
     * translate some message using the module configuration
     * 
     * @param string $message
     * @param array $params
     * @return string translated message
     */
    static function t($message, $params = array()) {
        return Yii::t(self::$componentId, $message, $params);
    }
}