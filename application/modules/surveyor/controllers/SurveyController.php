<?php defined('BASEPATH') or exit('No direct script access allowed');

class SurveyController extends OnlineCoursePortalController {
	
	public function actionSubmit() {
		if(isset($_POST['Survey'])) {
			$result = array();
			$surveys = array();
			foreach($_POST['Survey'] as $surveyName => $surveyAttributes) {
				$surveys[$surveyName] = SurveyorModule::surveyor()->$surveyName->form;
				$surveys[$surveyName]->attributes = $surveyAttributes;
				$surveys[$surveyName]->validate();
				foreach($surveys[$surveyName]->getErrors() as $attribute => $errors)
					$result[CHtml::activeId($surveys[$surveyName], "[$i]$attribute")] = $errors;
			}
			if(empty($result)) {
				foreach($surveys as $survey) {
					$survey->save();
					foreach($survey->getErrors() as $attribute => $errors)
						$result[CHtml::activeId($survey, "[$i]$attribute")] = $errors;
				}
			}
			echo CJSON::encode($result);
		}
	}
	
}