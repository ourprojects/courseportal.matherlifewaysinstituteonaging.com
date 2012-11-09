<?php defined('BASEPATH') or exit('No direct script access allowed');

class SurveyController extends OnlineCoursePortalController {
	
	public function actionSubmit() {
		if(isset($_POST['Survey'])) {
			$errors = array();
			foreach($_POST['Survey'] as $surveyName => $surveyAttributes) {
				$survey = SurveyorModule::surveyor()->$surveyName->form;
				$survey->attributes = $surveyAttributes;
				$survey->save();
				$errors[$surveyName] = $survey->getErrors();
			}
			echo CJSON::encode($errors);
		}
	}
	
	public function actionChart() {
		$this->renderPartial('chart');
	}
	
}