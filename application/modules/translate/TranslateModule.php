<?php

class TranslateModule extends CWebModule {
    /**
     * the name of the translate component
     * change this in case you dont use the default name
     * */
    const translateComponentId = 'translate';
    
    private static $_translator = null;
    
	/**
	 * TranslateModule::init()
	 * 
	 * @return
	 */
	public function init() {
        $this->defaultController = 'Translate';
		$this->setImport(array(
            'translate.models.*',
            'translate.controllers.*',
            'translate.components.*',
			'translate.widgets.*',
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
        	self::$_translator = Yii::app()->getComponent(self::translateComponentId);
	        if(self::$_translator === null)
	            throw new CException('Translate component must be defined');
    	}
        return self::$_translator;
    }
    
    static function __callStatic($method, $args) {
        return call_user_func_array(array(self::getTranslateComponent(), $method), $args);
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
        return Yii::t(self::translateComponentId, $message, $params);
    }
}