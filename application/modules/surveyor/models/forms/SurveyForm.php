<?php

/**
 * SurveyResponse class.
 * SurveyResponse handles a response to a survey.
*/
class SurveyForm extends CFormModel
{

	const SCENARIO_NOT_COMPLETE = 'incomplete';
	const SCENARIO_COMPLETE = 'complete';

	private $_isComplete;

	private $_requiredQuestions;
	private $_attributeLabels;

	private $_user_id;
	private $_survey;
	private $_attributes;

	public function __construct($survey)
	{
		Yii::import('surveyor.models.db.*');
		if($survey instanceof SurveyAR)
		{
			$this->_survey = $survey;
		}
		else if(is_numeric($survey))
		{
			$this->_survey = SurveyAR::model()->with(array('questions' => array('with' => array('options', 'type'))))->findByPk($survey);
		}
		else if(is_string($survey))
		{
			$this->_survey = SurveyAR::model()->with(array('questions' => array('with' => array('options', 'type'))))->find(SurveyAR::model()->getTableAlias().'.name = :name', array(':name' => $survey));
		}

		if(!isset($this->_survey))
		{
			throw new CException(Yii::app()->getModule('surveyor')->t('Invalid survey parameter when constructing SurveyForm. A valid Survey name, id, or ActiveRecord object is required.'));
		}

		$this->_attributes = array();
		foreach($this->_survey->questions as $question)
		{
			$this->_attributes[$question->id] = null;
		}

		parent::__construct(self::SCENARIO_NOT_COMPLETE);
	}

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// @ TODO We should just set the allowEmpty based on the anonymous state of the survey.
			array('user_id', 'exist', 'attributeName' => 'id', 'className' => Yii::app()->getModule('surveyor')->userClass, 'allowEmpty' => true),
			array('user_id', 'checkAnonymous'),
			array('_attributes', 'validateAnswers'),
		);
	}

	public function getRequiredQuestions()
	{
		if(!isset($this->_requiredQuestions))
		{
			foreach($this->_survey->questions as $question)
			{
				$this->_requiredQuestions[$question->id] = $question->required;
			}
		}
		return $this->_requiredQuestions;
	}

	public function isAttributeRequired($attribute)
	{
		$requiredQuestions = $this->getRequiredQuestions();
		if(array_key_exists($attribute, $requiredQuestions))
		{
			return $requiredQuestions[$attribute];
		}
		return parent::isAttributeRequired($attribute);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		if(!isset($this->_attributeLabels))
		{
			$this->_attributeLabels = array_merge(
				parent::attributeLabels(),
				$this->_survey->attributeLabels(),
				array(
					'user_id' => Yii::app()->getModule('surveyor')->t('User ID'),
					'name' => Yii::app()->getModule('surveyor')->t('Name'),
					'title' => Yii::app()->getModule('surveyor')->t('Title'),
					'description' => Yii::app()->getModule('surveyor')->t('Description'),
				));
			foreach($this->_survey->questions as $question)
			{
				$this->_attributeLabels[$question->id] = Yii::app()->getModule('surveyor')->t($question->text);
			}
		}
		return $this->_attributeLabels;
	}

	public function attributeNames()
	{
		return array_merge(parent::attributeNames(), array_keys($this->_attributes), $this->_survey->attributeNames());
	}

	public function getSafeAttributeNames()
	{
		return array_merge(parent::getSafeAttributeNames(), array_keys($this->_attributes));
	}

	public function getUser_id()
	{
		return $this->_user_id;
	}

	public function setUser_id($user_id, $loadAnswers = true)
	{
		$this->_user_id = $user_id;
		if($loadAnswers)
		{
			$criteria = new CDbCriteria();
			$criteria->addColumnCondition(array('answers.user_id' => $user_id));
			foreach($this->_survey->answers($criteria) as $answer)
			{
				if($answer->question->type->textual)
				{
					$this->_attributes[$answer->question->id] = $answer->answerText->text;
				}
				else if($answer->question->type->multiple)
				{
					$this->_attributes[$answer->question->id] = array();
					foreach($answer->options as $option)
					{
						$this->_attributes[$answer->question->id][] = $option->id;
					}
				}
				else
				{
					$this->_attributes[$answer->question->id] = $answer->options[0]->id;
				}
			}
		}
	}

	public function getQuestions()
	{
		return $this->_survey->questions;
	}

	public function __get($name)
	{
		if($this->_survey->hasAttribute($name))
		{
			return $this->_survey->$name;
		}
		if(array_key_exists($name, $this->_attributes))
		{
			return $this->_attributes[$name];
		}
		return parent::__get($name);
	}

	public function __set($name, $value)
	{
		if(array_key_exists($name, $this->_attributes))
		{
			$this->_attributes[$name] = $value;
		}
		else
		{
			parent::__set($name, $value);
		}
	}

	public function checkAnonymous($attribute, $params)
	{
		if(!$this->_survey->anonymous && !isset($this->_user_id))
		{
			$this->addError($attribute, Yii::app()->getModule('surveyor')->t('This survey is not anonymous and a user was not specified.'));
		}
	}

	public function isComplete()
	{
		return $this->_isComplete;
	}

	public function setScenario($scenario)
	{
		$this->_isComplete = $scenario === self::SCENARIO_COMPLETE;
		parent::setScenario($scenario);
	}

	public function validateAnswers($attribute, $params)
	{
		$answers = $this->$attribute;
		foreach($this->_survey->questions as $question)
		{
			if(isset($answers[$question->id]) && $answers[$question->id] !== '')
			{
				if(!$question->type->textual)
				{
					$questionOptions = array();
					foreach($question->options as $option)
					{
						$questionOptions[$option->id] = $option->id;
					}
					if(is_array($answers[$question->id]))
					{
						if($question->type->multiple)
						{
							foreach($answers[$question->id] as $answer)
							{
								if(!isset($questionOptions[$answer]))
								{
									$this->addError('['.$this->_survey->name.']'.$question->id, Yii::app()->getModule('surveyor')->t('Invalid option selected.'));
									break;
								}
							}
						}
						else
						{
							$this->addError('['.$this->_survey->name.']'.$question->id, Yii::app()->getModule('surveyor')->t('Only one answer is allowed.'));
						}
					}
					else
					{
						if(!isset($questionOptions[$answers[$question->id]]))
						{
							$this->addError('['.$this->_survey->name.']'.$question->id, Yii::app()->getModule('surveyor')->t('Invalid option selected.'));
						}
					}
				}
			}
			else if($question->required)
			{
				$this->addError('['.$this->_survey->name.']'.$question->id, Yii::app()->getModule('surveyor')->t('This question is required.'));
			}
		}
	}

	public function save($validate = true, $useTransaction = true)
	{
		if(!$validate || $this->validate())
		{
			if($useTransaction)
			{
				$transaction = Yii::app()->db->beginTransaction();
			}
			try
			{
				if($this->_save())
				{
					if(isset($transaction))
					{
						$transaction->commit();
					}
					$this->setScenario(self::SCENARIO_COMPLETE);
					return true;
				}
			}
			catch(Exception $e)
			{
				if(isset($transaction))
				{
					$transaction->rollback();
				}
				throw $e;
			}
			if(isset($transaction))
			{
				$transaction->rollback();
			}
		}
		$this->setScenario(self::SCENARIO_NOT_COMPLETE);
		return false;
	}

	private function _save()
	{
		$newAnswers = $this->_attributes;
		if(!$this->_survey->anonymous)
		{
			$criteria = new CDbCriteria();
			$criteria->addColumnCondition(array('answers.user_id' => $this->_user_id));
			foreach($this->_survey->answers($criteria) as $answer)
			{
				if(empty($newAnswers[$answer->question_id]) && $newAnswers[$answer->question_id] !== 0)
				{
					SurveyAnswerOption::model()->deleteAll('answer_id = ?', array($answer->id));
					SurveyAnswerText::model()->deleteAll('answer_id = ?', array($answer->id));
					if(!$answer->delete())
					{
						$this->addErrors(array('['.$this->_survey->name.']'.$answer->question_id => $answer->getErrors()));
						return false;
					}
					unset($newAnswers[$answer->question_id]);
				}
				else if($answer->question->type->textual)
				{
					if(isset($answer->answerText) && $answer->answerText->text !== $newAnswers[$answer->question_id])
					{
						$answer->answerText->text = $newAnswers[$answer->question_id];
						if(!$answer->answerText->save())
						{
							$this->addErrors(array('['.$this->_survey->name.']'.$answer->question_id => $answer->answerText->getErrors()));
							return false;
						}
					}
					unset($newAnswers[$answer->question_id]);
				}
				else if(is_array($newAnswers[$answer->question_id]))
				{
					foreach($answer->answerOptions as $option)
					{
						if(($key = array_search($option->option_id, $newAnswers[$answer->question_id])) === true)
						{
							unset($newAnswers[$answer->question_id][$key]);
						}
						else
						{
							if(!$option->delete())
							{
								$this->addErrors(array('['.$this->_survey->name.']'.$answer->question_id => $option->getErrors()));
								return false;
							}
						}
					}
					foreach($newAnswers[$answer->question_id] as $newAnswer)
					{
						$surveyAnswerOption = new SurveyAnswerOption;
						$surveyAnswerOption->answer_id = $answer->id;
						$surveyAnswerOption->option_id = $newAnswer;
						if(!$surveyAnswerOption->save())
						{
							$this->addErrors(array('['.$this->_survey->name.']'.$answer->question_id => $surveyAnswerOption->getErrors()));
							return false;
						}
					}
					unset($newAnswers[$answer->question_id]);
				}
				else
				{
					$option = $answer->answerOptions[0];
					if($option->option_id !== $newAnswers[$answer->question_id])
					{
						$option->option_id = $newAnswers[$answer->question_id];
						if(!$option->save())
						{
							$this->addErrors(array('['.$this->_survey->name.']'.$answer->question_id => $option->getErrors()));
							return false;
						}
					}
					unset($newAnswers[$answer->question_id]);
				}
			}
		}
		$textualQuestions = array();
		foreach($this->_survey->questions as $question)
		{
			$textualQuestions[$question->id] = $question->type->textual;
		}
		foreach($newAnswers as $questionId => $questionAnswer)
		{
			if(!empty($questionAnswer) || $questionAnswer === 0)
			{
				$surveyAnswer = new SurveyAnswer;
				$surveyAnswer->user_id = $this->_user_id;
				$surveyAnswer->question_id = $questionId;
				if(!$surveyAnswer->save())
				{
					$this->addErrors(array('['.$this->_survey->name.']'.$questionId => $surveyAnswer->getErrors()));
					return false;
				}
				if($textualQuestions[$questionId])
				{
					$surveyAnswerText = new SurveyAnswerText;
					$surveyAnswerText->answer_id = $surveyAnswer->id;
					$surveyAnswerText->text = $answer;
					if(!$surveyAnswerText->save())
					{
						$this->addErrors(array('['.$this->_survey->name.']'.$questionId => $surveyAnswerText->getErrors()));
						return false;
					}
				}
				else
				{
					$questionAnswer = is_array($questionAnswer) ? $questionAnswer : array($questionAnswer);
					foreach($questionAnswer as $answer)
					{
						$surveyAnswerOption = new SurveyAnswerOption;
						$surveyAnswerOption->answer_id = $surveyAnswer->id;
						$surveyAnswerOption->option_id = $answer;
						if(!$surveyAnswerOption->save())
						{
							$this->addErrors(array('['.$this->_survey->name.']'.$questionId => $surveyAnswerOption->getErrors()));
							return false;
						}
					}
				}
			}
		}
		return true;
	}

}