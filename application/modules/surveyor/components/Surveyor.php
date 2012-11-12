<?php
class Surveyor extends CApplicationComponent {
	
	public static $id = 'surveyor';
	
	public function init() {
		parent::init();
		Yii::import('surveyor.models.db.*');
		Yii::import('surveyor.models.forms.*');
		Yii::import('surveyor.controllers.*');
		Yii::import('surveyor.components.*');
		Yii::import('surveyor.widgets.*');
	}
	
	public function __get($name) {
		if(is_numeric($name))
			$survey = SurveyAR::model()->findByPk($name);
		else if(is_string($name))
			$survey = SurveyAR::model()->find('name = :name', array(':name' => $name));
		if($survey === null)
			return parent::__get($name);
		return $survey;
	}
	
	public function getSurveyForm($survey) {
		if(!$survey instanceof SurveyAR)
			$survey = $this->$survey;
		return $survey->form;
	}
	
	static function t($message, $params = array()) {
		return Yii::t(self::$id, $message, $params);
	}
	
	public static function __callStatic($method, $args){
		return call_user_func_array(array(SurveyorModule::surveyor(), $method), $args);
	}
	
}