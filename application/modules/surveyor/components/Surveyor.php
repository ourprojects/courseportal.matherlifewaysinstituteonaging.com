<?php

class Surveyor extends CApplicationComponent 
{
	
	public static $id = 'surveyor';
	
	private $_surveyCriteria;
	
	public function init() 
	{
		parent::init();
		Yii::import('surveyor.models.db.*');
		Yii::import('surveyor.models.forms.*');
		Yii::import('surveyor.controllers.*');
		Yii::import('surveyor.components.*');
		Yii::import('surveyor.widgets.*');
	}
	
	public function __get($name) 
	{
		return $this->getSurvey($name) or parent::__get($name);
	}
	
	public function getSurvey($name, $with = array()) 
	{
		if(is_numeric($name))
			return SurveyAR::model()->with($with)->findByPk($name);
		if(is_string($name))
			return SurveyAR::model()->with($with)->find(SurveyAR::model()->tableName().'.name=:name', array(':name' => $name));
		if($name instanceof CDbCriteria)
			return SurveyAR::model()->with($with)->find($name);
		return null;
	}
	
	public function statistics($survey) 
	{
		$survey = $this->getSurvey($survey, array('questions' => array('with' => 'options')));
		if($survey !== null) 
		{
			$stats = array();
			foreach($survey->questions as $question) 
			{
				$stats[] = $question->getStatistics();
			}
		}
		return $stats;
	}
	
	public function getSurveyForm($survey) 
	{
		return new SurveyForm($survey);
	}
	
	public static function t($message, $params = array()) 
	{
		return Yii::t(self::$id, $message, $params);
	}
	
	public static function __callStatic($method, $args)
	{
		return call_user_func_array(array(SurveyorModule::surveyor(), $method), $args);
	}
	
}