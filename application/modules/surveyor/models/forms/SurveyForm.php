<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * SurveyResponse class.
 * SurveyResponse handles a response to a survey. 
 */
class SurveyForm extends CFormModel {

	private $_survey;
	private $_answers;
	
	public function __construct($survey, $userId = null, $scenario = 'create') {
		if($survey instanceof SurveyAR)
			$this->_survey = $survey;
		else if(is_string($survey))
			$this->_survey = SurveyAR::model()->find('name = :name', array(':name' => $survey));
		else if(is_numeric($survey))
			$this->_survey = SurveyAR::model()->findByPk($survey);
		
		if($userId !== null) {
			$criteria = new CDbCriteria();
			$this->_answers = $this->_survey->answers(array('answers.user_id' => $userId));
		}
		if(empty($this->_answers)) {
			$this->_answers = array();
			foreach($this->_survey->questions as $question)
				$this->_answers[$question->id] = new SurveyAnswer;
			$scenario = 'create';
		} else {
			$scenario = 'update';
		}
		parent::__construct($scenario);
	}

	/**
	 * Declares the validation rules.
	 */
	public function rules() {
		return array(
				array('user_id', 'required'),
				array('user_id', 'unsafe'),
				array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'User', 'allowEmpty' => false),
				//array('questions', 'checkAnswers'),
		);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		$labels = array(
				'userId' => Yii::t('onlinecourseportal', 'User ID'),
				'name' => Yii::t('onlinecourseportal', $this->_survey->name),
				'description' => Yii::t('onlinecourseportal', $this->_survey->description),
		);
		foreach($this->_survey->questions as $question) {
			$labels["answer{$question->id}"] = Yii::t('onlinecourseportal', $question->text);
		}
		return $labels;
	}
	
	public function getQuestions() {
		return $this->_survey->questions;
	}
	
	public function __get($name) {
		if($this->_survey->hasAttribute($name))
			return $this->_survey->$name;
		if(preg_match('/^answer(?P<qId>\d+)$/', $name, $matches))
			return $this->_answers[$matches['qId']]->options;
		return parent::__get($name);
	}
	
	public function __set($name, $value) {
		if(preg_match('/^answer(?P<qId>\d+)$/', $name, $matches)) {
			$this->_answers[$matches['qId']]->addOptions($value);
		} else {
			parent::__set($name, $value);
		}
	}
	
	public function checkAnswers($attribute, $params) {
		foreach($this->$attribute as $answer) {
			if(is_array($answer)) {
				foreach($answer as $multianswer) {
					if($multianswer->isNewRecord)
						$multianswer->user_id = $this->user_id;
								if(!$multianswer->validate()) {
					var_dump($multianswer->getErrors());
					die;
			 	}
					foreach($multianswer->getErrors() as $error)
						$this->addError('questions['.$multianswer->question_id.']', $error);
				}
			} else {
				if($answer->isNewRecord)
					$answer->user_id = $this->user_id;
				if(!$answer->validate()) {
					var_dump($answer->getErrors());
					die;
			 	}
				foreach($answer->getErrors() as $error)
					$this->addError('questions['.$answer->question_id.']', $error);
			}
		}
	}
	
	public function save($validate = true) {
		if($validate)
			if(!$this->validate())
				return false;
		foreach($this->answers as $question_id => $answer) {
			if(is_array($answer)) {
				$criteria = new CDbCriteria;
				$criteria->addCondition("question_id = $question_id", 'AND');
				foreach($answer as $multianswer) {
					$criteria->addCondition("option_id != {$multianswer->option_id}", 'AND');
					if(!$multianswer->save())
						return false;
				}
				QuestionAnswer::model()->deleteAll($criteria);
			} else {
				if(!$answer->save())
					return false;	
			}
		}
		return true;
	}

}