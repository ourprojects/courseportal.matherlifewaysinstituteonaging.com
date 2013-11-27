<?php

class SubmitAction extends CAction
{

	public function run($survey, array $SurveyForm = array(), $ajax = null)
	{
		Yii::import('surveyor.models.forms.SurveyForm');
		$surveyFormModel = new SurveyForm($survey);
		if(isset($SurveyForm[$surveyFormModel->name]))
		{
			$surveyFormModel->setAttributes($SurveyForm[$surveyFormModel->name]);
		}
		else if(isset($SurveyForm[$surveyFormModel->id]))
		{
			$surveyFormModel->setAttributes($SurveyForm[$surveyFormModel->id]);
		}
		else
		{
			throw new CHttpException(400);
		}

		if($surveyFormModel->validate() && !isset($ajax) && Yii::app()->getRequest()->getIsPostRequest())
		{
			$surveyFormModel->save();
		}

		$result = array();
		if($surveyFormModel->hasErrors())
		{
			foreach($surveyFormModel->getErrors() as $attribute => $errors)
			{
				$result[CHtml::activeId($surveyFormModel, $attribute)] = $errors;
			}
		}
		else
		{
			foreach($surveyFormModel->getQuestions() as $question)
			{
				$qData = array('textual' => $question->type->textual);
				if($question->type->textual)
				{
					$qData['data'] = $question->answerCount;
				}
				else
				{
					foreach($question->options as $option)
					{
						$qData['data'][] = array($option->text, $option->getPercentAnswered());
					}
				}
				$result[get_class($surveyFormModel).'_'.$surveyFormModel->name.'_'.$question->id] = $qData;
			}
			$result = array('success' => $result, 'message' => $surveyFormModel->after_submit_message);
		}
		echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
	}

}

?>
