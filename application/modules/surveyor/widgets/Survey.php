<?php

class Survey extends CWidget {
	
	private $_data = 
		array(
			'showStats' => false,
			'survey' => array('model' => null, 'htmlOptions' => array()), 
			'title' => array('show' => true, 'htmlOptions' => array()),
			'description' => array('show' => true, 'htmlOptions' => array()),
			'form' => array('show' => true, 'options' => array()),
			'question' => array('htmlOptions' => array()),
			'submitButton' => array('ajax' => true, 
									'label' => 'Submit', 
									'ajaxOptions' => array(),
									'htmlOptions' => array()
								)
	   );
	
	public function init() {
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir)) {
			$assetsUrl = Yii::app()->assetManager->publish($assetsDir);
			Yii::app()->getClientScript()->registerCssFile("$assetsUrl/survey/styles/survey.css");
		}
	}
	
	public function run() {
		if($this->_data['survey']['model'] !== null) {
			if($this->_data['survey']['model'] instanceof SurveyForm) {
				if(!isset($this->_data['form']['options']['action']))
					$this->_data['form']['options']['action'] = $this->getController()->createUrl('surveyor/survey/submit');
				$this->render('survey', $this->_data);
				return;
			} else if($this->_data['survey']['model'] instanceof SurveyAR) {
				$this->render('surveyStats', $this->_data);
				return;
			}
		}
		throw new CHttpException(500, Surveyor::t('survey model must be set and an instance of SurveyForm or SurveyAR.'));
	}
	
	public function setModel($surveyModel) {
		$this->_data['survey']['model'] = $surveyModel;
		if(!isset($This->_data['form']['options']['id']))
			$This->_data['form']['options']['id'] = "form_{$this->_data['survey']['model']->name}";
		foreach($this->_data as $key => $val) {
			if(isset($this->_data[$key]['htmlOptions']) && !isset($this->_data[$key]['htmlOptions']['id']))
				$this->_data[$key]['htmlOptions']['id'] = "{$key}_{$this->_data['survey']['model']->name}";
		}
	}
	
	public function __set($name, $value) {
		if(isset($this->_data[$name])) {
			if(is_array($this->_data[$name])) {
				if(!is_array($value))
					$value = array($value);
				$this->_data[$name] = CMap::mergeArray($this->_data[$name], $value);
			} else {
				$this->_data[$name] = $value;
			}
		} else {
			parent::__set($name, $value);
		}
	}
	
}