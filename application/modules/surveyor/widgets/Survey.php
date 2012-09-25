<?php

class Survey extends CWidget {
	
	public $surveyForm;
	
	public function run() {
		$this->render('survey', array('survey' => $this->surveyForm));
	}
	
}