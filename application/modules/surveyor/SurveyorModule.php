<?php defined('BASEPATH') or exit('No direct script access allowed');  

class SurveyorModule extends CWebModule {
	
	public static $componentId = 'surveyor';

	public function init(){
        $this->defaultController = 'Surveyor';
		$this->setImport(array(
            self::$componentId . '.models.db.*',
			self::$componentId . '.models.forms.*',
            self::$componentId . '.controllers.*',
            self::$componentId . '.components.*',
			self::$componentId . '.widgets.*',
        ));
        return parent::init();
	}
	
	public static function surveyor() {
		$component = Yii::app()->getComponent(self::$componentId);
		if($component === null)
			throw new CException(self::$componentId . ' component must be defined');
		return $component;
	}
	
	public static function __callStatic($method, $args) {
		return call_user_func_array(array(self::surveyor(), $method), $args);
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
	
	public function beforeControllerAction($controller, $action) {
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
	
}