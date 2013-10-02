<?php

class SubmitAction extends CAction
{

	public function run($survey, array $SurveyForm = array(), $ajax = null)
	{
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
		foreach($surveyFormModel->getErrors() as $attribute => $errors)
		{
			$result[CHtml::activeId($surveyFormModel, $attribute)] = $errors;
		}
		echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
	}

}

?>
