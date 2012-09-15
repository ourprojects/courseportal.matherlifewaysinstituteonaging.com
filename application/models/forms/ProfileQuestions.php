<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ProfileQuestions class.
 * ProfileQuestions is the data structure for keeping profile questions data. 
 */
class ProfileQuestions extends CFormModel {

	public $user_id;
	public $questions;
	public $answers;
	
	public function __construct($user_id = null) {
		$this->user_id = $user_id;
		parent::__construct();
	}
	
	public function init() {
		$this->answers = array();
		$this->questions = array();
		if(isset($this->user_id) && ($userProfile = UserProfile::model()->findByPk($this->user_id)) !== null) {
			foreach($userProfile->questionAnswers as $answer) {
				if($answer->question->isMultipleAnswersAllowed()) {
					$this->answers[$answer->question_id][] = $answer;
				} else {
					$this->answers[$answer->question_id] = $answer;
				}
			}
		}
		for($i = 1; $i <= 5; $i++) {
			$this->questions[$i] = Question::model()->findByPk($i);
		}
	}

	/**
	 * Declares the validation rules.
	 */
	public function rules() {
		return array(
				array('user_id', 'required'),
				array('user_id', 'unsafe'),
				array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'User', 'allowEmpty' => false),
				array('answers', 'checkAnswers'),
		);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		$labels = array(
				'user_id' => Yii::t('onlinecourseportal','User ID'),
				'answers' => Yii::t('onlinecourseportal','Answers'),
		);
		foreach($this->questions as $question) {
			$labels['questions['.$question->id.']'] = $question->text;
		}
		return $labels;
	}
	
	public function __get($name) {
		if(preg_match('/^options(?P<q_id>\d+)$/', $name, $matches)) {
			$options;
			if(!isset($this->answers[$matches['q_id']])) {
				return '';
			} elseif(is_array($this->answers[$matches['q_id']])) {
				$options = array();
				foreach($this->answers[$matches['q_id']] as $answer)
					$options[] = $answer->option_id;
			} else {
				$options = $this->answers[$matches['q_id']]->option_id;
			}
			return $options;
		}
		return parent::__get($name);
	}
	
	public function __set($name, $value) {
		if(preg_match('/^options(?P<q_id>\d+)$/', $name, $matches)) {
			if(!isset($this->answers[$matches['q_id']])) {
				if($this->questions[$matches['q_id']]->isMultipleAnswersAllowed()) {
					$this->answers[$matches['q_id']] = array();
				} else {
					$this->answers[$matches['q_id']] = new QuestionAnswer();
					$this->answers[$matches['q_id']]->question_id = $matches['q_id'];
				}
			}
			if(is_array($this->answers[$matches['q_id']]) && (is_array($value) || empty($value))) {
				if(empty($value)) {
					$this->answers[$matches['q_id']] = array();
					return;
				}
				$index = 0;
				foreach($value as $val) {
					if(!isset($this->answers[$matches['q_id']][$index])) {
						$this->answers[$matches['q_id']][$index] = new QuestionAnswer();
						$this->answers[$matches['q_id']][$index]->question_id = $matches['q_id'];
					}
					$this->answers[$matches['q_id']][$index]->option_id = $val;
					$index++;
				}
				while($index < count($this->answers[$matches['q_id']]))
					unset($this->answers[$matches['q_id']][$index]);
			} else {
				$options = $this->answers[$matches['q_id']]->option_id = $value;
			}
		} else {
			parent::__set($name, $value);
		}
	}

	public function __isset($name) {
		if(preg_match('/^options(?P<q_id>\d+)$/', $name, $matches)) {
			return $this->answers[$matches['q_id']];
		}
		return parent::__isset($name);
	}

	public function __unset($name) {
		if(preg_match('/^options(?P<q_id>\d+)$/', $name, $matches)) {
			unset($this->answers[$matches['q_id']]);
		} else {
			parent::__unset($name);	
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