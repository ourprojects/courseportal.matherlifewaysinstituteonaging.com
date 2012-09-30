<?php

class Survey extends CWidget {
	
	public $surveyForm;
	public $showName = true;
	public $showDescription = true;
	public $encloseInForm = true;
	
	public function run() {
		$this->render('survey', 
				array('survey' => $this->surveyForm, 
					  'showName' => $this->showName,
					  'showDescription' => $this->showDescription,
					  'encloseInForm' => $this->encloseInForm));
	}
	
}