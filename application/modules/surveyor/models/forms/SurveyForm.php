<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * SurveyResponse class.
 * SurveyResponse handles a response to a survey. 
 */
class SurveyForm extends CFormModel {

	private $_attributeNames = null;
	private $_questionLabels = null;
	
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
			foreach($this->_survey->questions as $question) {
				$answer = new SurveyAnswer;
				$answer->question_id = $question->id;
				$answer->user_id = $userId;
				$this->_answers[$question->id] = $answer;
			}
			$scenario = 'create';
		} else {
			$scenario = 'update';
		}
		$this->_attributeNames = array();
		foreach($this->_survey->questions as $question) {
			$this->_attributeNames[] = "answer{$question->id}";
		}
		parent::__construct($scenario);
	}

	/**
	 * Declares the validation rules.
	 */
	public function rules() {
		return array(
				array('_answers', 'validateAnswers'),
		);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		if($this->_questionLabels === null) {
			$this->_questionLabels = array();
			foreach($this->_survey->questions as $question) {
				$this->_questionLabels["answer{$question->id}"] = $question->text;
			}
		}
		return array_merge(
				$this->_questionLabels, 
				array(
					'userId' => Yii::t('onlinecourseportal', 'User ID'),
					'name' => $this->_survey->name,
					'description' => $this->_survey->description,
				)
		);
	}
	
	public function attributeNames() {
		return array_merge(parent::attributeNames(), $this->_attributeNames);
	}
	
	public function getSafeAttributeNames() {
		return array_merge(parent::getSafeAttributeNames(), $this->_attributeNames);
	}
	
	public function setUserId($userId) {
		$criteria = new CDbCriteria();
		$answers = $this->_survey->answers($criteria->addColumnCondition(array('user_id' => $userId)));
		if(!empty($answers)) {
			foreach($answers as $answer)
				$this->_answers[$answer->question_id] = $answer;
		} else {
			foreach($this->_answers as $answer) {
				$answer->user_id = $userId;
			}
		}
	}
	
	public function getQuestions() {
		return $this->_survey->questions;
	}
	
	public function __get($name) {
		if($this->_survey->hasAttribute($name))
			return $this->_survey->$name;
		if(preg_match('/^answer(?P<qId>\d+)$/', $name, $matches))
			return $this->_answers[$matches['qId']]->getOptionIds();
		return parent::__get($name);
	}
	
	public function __set($name, $value) {
		if(preg_match('/^answer(?P<qId>\d+)$/', $name, $matches)) {
			$this->_answers[$matches['qId']]->addOptionIds($value);
		} else {
			parent::__set($name, $value);
		}
	}
	
	public function validateAnswers($attribute, $params) {
		foreach($this->$attribute as $answer) {
			$answer->validate();
			$this->addErrors($answer->getErrors());
		}
	}
	
	public function save($validate = true) {
		if(!$validate || $this->validate()) {
			foreach($this->_answers as $answer)
				if(!$answer->save())
					return false;
			return true;
		}
		return false;
	}

}