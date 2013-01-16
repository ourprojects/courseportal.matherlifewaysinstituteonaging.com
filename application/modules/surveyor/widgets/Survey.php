<?php

class Survey extends CWidget {

	public $model;
	
	public $autoProcessRequest = false;
	
	public $statsShown = true;
	
	public $titleShown = true;
	
	public $descriptionShown = true;
	
	public $formShown = true;
	
	public $useAjax = true;
	
	public $ajaxOptions = array();
	
	public $surveyHtmlOptions = array();
	
	public $titleHtmlOptions = array();
	
	public $descriptionHtmlOptions = array();
	
	public $formOptions = array();
	
	public $questionHtmlOptions = array();
	
	public $submitButtonLabel = 'Submit';
	
	public $submitButtonHtmlOptions = array();
	
	public function init() {
		Yii::import('surveyor.models.db.*');
		Yii::import('surveyor.models.forms.*');
		Yii::import('surveyor.controllers.*');
		Yii::import('surveyor.components.*');
		Yii::import('surveyor.widgets.*');
		Yii::import('surveyor.*');
		
		$id = $this->getId(false);
		if(!isset($this->model)) {
			if(!isset($id))
				throw new CHttpException(500, Surveyor::t('The survey model or survey name id must be specified for the survey widget.'));
			$this->model = SurveyorModule::surveyor()->getSurveyForm($id);
			if(!isset($this->model))
				throw new CHttpException(404, Surveyor::t('Survey with name id {name} was not found.', array('{name}' => $id)));
		} elseif(!isset($id)) {
			$id = $this->model->name;
			$this->setId($id);
		}
		
		$this->loadDefaultViewParams();
		
		if($this->autoProcessRequest)
			$this->processRequest();
	}
	
	public function loadDefaultViewParams() {
		$id = $this->getId();
		if(!isset($this->formOptions['id']))
			$this->formOptions['id'] = "form_{$this->model->name}";
		
		if(!isset($this->questionHtmlOptions['id']))
			$this->questionHtmlOptions['id'] = "question_$id";
		
		if(!isset($this->surveyHtmlOptions['id']))
			$this->surveyHtmlOptions['id'] = "survey_$id";
		
		if(!isset($this->descriptionHtmlOptions['id']))
			$this->descriptionHtmlOptions['id'] = "description_$id";
		
		if(!isset($this->titleHtmlOptions['id']))
			$this->titleHtmlOptions['id'] = "title_$id";
		
		if(!isset($this->submitButtonHtmlOptions['id']))
			$this->submitButtonHtmlOptions['id'] = "submitButton_$id";
		
		if(!isset($this->formOptions['action']))
			$this->formOptions['action'] = $this->getController()->createUrl('');
		
		if(!isset($this->ajaxOptions['success']))
			$this->ajaxOptions['success'] = 'js:function(data, textStatus, jqXHR){
					data = $.parseJSON(data);
					for(question in data) {
						highcharts["chart_" + question].series[0].setData(data[question], true);
						$("#options_" + question).css("display", "none");
						$("#'.$this->submitButtonHtmlOptions['id'].'").css("display", "none");
						$("#chart_" + question).css("display", "block");
					}
				}';
	}
	
	public function processRequest() {
		$id = $this->getId();

		if(Yii::app()->getRequest()->isPostRequest && isset($_POST['Survey'][$id])) {
			$this->model->setAttributes($_POST['Survey'][$id]);
			$this->model->save();
		}
		
		if(Yii::app()->getRequest()->isAjaxRequest) {
			if(isset($_POST['ajax']) && $_POST['ajax'] === $id) {
				$this->model->validate();
			} else if(!isset($_POST['Survey'][$id])) {
				return;
			}
			if($this->model->hasErrors())
				echo CJSON::encode($this->model->getErrors());
			else
				$this->run();
			Yii::app()->end();
		} else {
			$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
			if(is_dir($assetsDir)) {
				$assetsUrl = Yii::app()->assetManager->publish($assetsDir);
				Yii::app()->getClientScript()->registerCssFile("$assetsUrl/survey/styles/survey.css");
			}
		}
	}
	
	public function run() {
		if($this->model->isComplete() && $this->statsShown) {
			if(Yii::app()->getRequest()->isAjaxRequest) {
				$data = array();
				foreach($this->model->questions as $question) {
					$qData = array();
					foreach($question->options as $option) {
						$qData[] = array($option->text, $option->getPercentAnswered());
					}
					$data["{$this->questionHtmlOptions['id']}_{$question->id}"] = $qData;
				}
				echo CJSON::encode($data);
			}
		} else {
			return $this->render('survey', get_object_vars($this));
		}
	}
	
}