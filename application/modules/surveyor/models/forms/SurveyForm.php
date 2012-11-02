<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * SurveyResponse class.
 * SurveyResponse handles a response to a survey. 
 */
class SurveyForm extends CFormModel {

	private $_requiredQuestions;
	private $_safeAttributeNames;
	private $_attributeNames;
	private $_attributeLabels;
	
	private $_user_id;
	private $_survey;
	private $_questionAnswers = array();
	
	public function __construct($survey) {
		if($survey instanceof SurveyAR)
			$this->_survey = $survey;
		else if(is_string($survey))
			$this->_survey = SurveyAR::model()->find('name = :name', array(':name' => $survey));
		else if(is_numeric($survey))
			$this->_survey = SurveyAR::model()->findByPk($survey);
		foreach($this->_survey->questions as $question)
			$this->_questionAnswers[$question->id] = null;
		parent::__construct();
	}

	/**
	 * Declares the validation rules.
	 */
	public function rules() {
		return array(
				// @ TODO We could just set the allowEmpty based on the anonymous state of the survey.
				array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'User', 'allowEmpty' => true),
				array('user_id', 'checkAnonymous'),
				array('_questionAnswers', 'validateAnswers'),
		);
	}
	
	public function isAttributeRequired($attribute) {
		if(preg_match('/^question(?P<qId>\d+)$/', $attribute, $matches)) {
			if(!isset($this->_requiredQuestions))
				foreach($this->_survey->questions as $question)
					$this->_requiredQuestions[$question->id] = $question->required;

			if(array_key_exists($matches['qId'], $this->_requiredQuestions))
				return $this->_requiredQuestions[$matches['qId']];
		}
		return parent::isAttributeRequired($attribute);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		if(!isset($this->_attributeLabels)) {
			$this->_attributeLabels = array(
					'user_id' => Surveyor::t('User ID'),
					'name' => $this->_survey->name,
					'description' => $this->_survey->description,
				);
			foreach($this->_survey->questions as $question)
				$this->_attributeLabels["question{$question->id}"] = $question->text;
		}
		return $this->_attributeLabels;
	}
	
	public function attributeNames() {
		if(!isset($this->_attributeNames))
			$this->_attributeNames = array_merge(parent::attributeNames(), $this->_survey->attributeNames());
		return $this->_attributeNames;
	}
	
	public function getSafeAttributeNames() {
		if(!isset($this->_safeAttributeNames)) {
			$this->_safeAttributeNames = parent::getSafeAttributeNames();
			foreach($this->_survey->questions as $question)
				$this->_safeAttributeNames[] = "question{$question->id}";
		}
		return $this->_safeAttributeNames;
	}

	public function getUser_id() {
		return $this->_user_id;
	}
	
	public function setUser_id($user_id, $loadAnswers = true) {
		$this->_user_id = $user_id;
		if($loadAnswers) {
			foreach($this->_survey->answers(DbCriteria::instance()->addColumnCondition(array('answers.user_id' => $user_id))) as $answer) {
				if($answer->question->type->name == 'textarea' || $answer->question->type->name == 'textfield') {
					$this->_questionAnswers[$answer->question->id] = $answer->answerText->text;
				} else if($answer->question->allow_many_options) {
					$this->_questionAnswers[$answer->question->id] = array();
					foreach($answer->options as $option)
						$this->_questionAnswers[$answer->question->id][] = $option->id;
				} else {
					$this->_questionAnswers[$answer->question->id] = $answer->options[0]->id;
				}
			}
		}
	}
	
	public function __get($name) {
		if($this->_survey->hasAttribute($name) || $name == 'questions')
			return $this->_survey->$name;
		if(preg_match('/^question(?P<qId>\d+)$/', $name, $matches) && array_key_exists($matches['qId'], $this->_questionAnswers))
			return $this->_questionAnswers[$matches['qId']];
		return parent::__get($name);
	}
	
	public function __set($name, $value) {
		if(preg_match('/^question(?P<qId>\d+)$/', $name, $matches) && array_key_exists($matches['qId'], $this->_questionAnswers)) {
			$this->_questionAnswers[$matches['qId']] = $value;
		} else {
			parent::__set($name, $value);
		}
	}
	
	public function checkAnonymous($attribute, $params) {
		if(isset($this->_user_id) || $this->_survey->anonymous)
			return;
		$this->addError($attribute, Surveyor::t('This survey is not anonymous and a user was not specified.'));
	}
	
	public function validateAnswers($attribute, $params) {
		$answers = $this->$attribute;
		foreach($this->_survey->questions as $question) {
			if(isset($answers[$question->id]) && $answers[$question->id] !== '') {
				if($question->type->name != 'textarea' && 
					$question->type->name != 'textfield') {
					if(is_array($answers[$question->id])) {
						if($question->allow_many_options) {
							if(count(array_intersect($question->optionIds, $answers[$question->id])) != count($answers[$question->id]))
								$this->addError("question{$question->id}", Surveyor::t('Invalid option selected.'));
						} else {
							$this->addError("question{$question->id}", Surveyor::t('Only one answer is allowed.'));
						}
					} else {
						if(!in_array($answers[$question->id], $question->optionIds))
							$this->addError("question{$question->id}", Surveyor::t('Invalid option selected.'));
					}
				}
			} else if($question->required) {
				$this->addError("question{$question->id}", Surveyor::t('This question is required.'));
			}
		}
	}
	
	public function save($validate = true, $useTransaction = true) {
		if(!$validate || $this->validate()) {
			if($useTransaction)
				$transaction = Yii::app()->db->beginTransaction();
			try {
				if($this->_save()) {
					if($useTransaction)
						$transaction->commit();
					return true;
				}
			} catch(Exception $e) {
				if($useTransaction)
					$transaction->rollback();
				throw $e;
			}
			if($useTransaction)
				$transaction->rollback();
		}
		return false;
	}
	
	private function _save() {
		$newAnswers = $this->_questionAnswers;
		if(!$this->_survey->anonymous) {
			foreach($this->_survey->answers(DbCriteria::instance()->addColumnCondition(array('answers.user_id' => $this->_user_id))) as $answer) {
				if(empty($newAnswers[$answer->question_id]) && $newAnswers[$answer->question_id] !== 0) {
					SurveyAnswerOption::model()->deleteAll('answer_id = ?', array($answer->id));
					SurveyAnswerText::model()->deleteAll('answer_id = ?', array($answer->id));
					if(!$answer->delete()) {
						$this->addErrors(array("question{$answer->question_id}" => $answer->getErrors()));
						return false;
					}
					unset($newAnswers[$answer->question_id]);
				} else if($answer->question->type->name == 'textfield' ||
						$answer->question->type->name == 'textarea') {
					if($answer->answerText->text != $newAnswers[$answer->question_id]) {
						$answer->answerText->text = $newAnswers[$answer->question_id];
						if(!$answer->answerText->save()) {
							$this->addErrors(array("question{$answer->question_id}" => $answer->answerText->getErrors()));
							return false;
						}
					}
					unset($newAnswers[$answer->question_id]);
				} else if(is_array($newAnswers[$answer->question_id])) {
					foreach($answer->answerOptions as $option) {
						if(($key = array_search($option->option_id, $newAnswers[$answer->question_id])) === true) {
							unset($newAnswers[$answer->question_id][$key]);
						} else {
							if(!$option->delete()) {
								$this->addErrors(array("question{$answer->question_id}" => $option->getErrors()));
								return false;
							}
						}
					}
					foreach($newAnswers[$answer->question_id] as $newAnswer) {
						$surveyAnswerOption = new SurveyAnswerOption;
						$surveyAnswerOption->answer_id = $answer->id;
						$surveyAnswerOption->option_id = $newAnswer;
						if(!$surveyAnswerOption->save()) {
							$this->addErrors(array("question{$answer->question_id}" => $surveyAnswerOption->getErrors()));
							return false;
						}
					}
					unset($newAnswers[$answer->question_id]);
				} else {
					$option = $answer->answerOptions[0];
					if($option->option_id != $newAnswers[$answer->question_id]) {
						$option->option_id = $newAnswers[$answer->question_id];
						if(!$option->save()) {
							$this->addErrors(array("question{$answer->question_id}" => $option->getErrors()));
							return false;
						}
					}
					unset($newAnswers[$answer->question_id]);
				}
			}
		}
		foreach($newAnswers as $questionId => $questionAnswer) {
			if(!empty($questionAnswer) || $questionAnswer === 0) {
				$surveyAnswer = new SurveyAnswer;
				$surveyAnswer->user_id = $this->_user_id;
				$surveyAnswer->question_id = $questionId;
				if(!$surveyAnswer->save()) {
					$this->addErrors(array("question$questionId" => $surveyAnswer->getErrors()));
					return false;
				}
				if(is_array($questionAnswer)) {
					foreach($questionAnswer as $answer) {
						$surveyAnswerOption = new SurveyAnswerOption;
						$surveyAnswerOption->answer_id = $surveyAnswer->id;
						$surveyAnswerOption->option_id = $answer;
						if(!$surveyAnswerOption->save()) {
							$this->addErrors(array("question$questionId" => $surveyAnswerOption->getErrors()));
							return false;
						}
					}
				} else {
					$surveyAnswerOption = new SurveyAnswerOption;
					$surveyAnswerOption->answer_id = $surveyAnswer->id;
					$surveyAnswerOption->option_id = $questionAnswer;
					if(!$surveyAnswerOption->save()) {
						$this->addErrors(array("question$questionId" => $surveyAnswerOption->getErrors()));
						return false;
					}
				}
			}
		}
		return true;
	}

}