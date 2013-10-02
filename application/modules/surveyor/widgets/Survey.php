<?php

class Survey extends CWidget 
{

	public $model;
	
	public $options = array();
	
	public static function actions()
	{
		return array(
				'submit' => array(
						'class' => 'surveyor.widgets.actions.SubmitAction',
				),
		);
	}
	
	public function getDefaultOptions()
	{
		$id = $this->getId();
		return array(
				'autoProcess' => false,
				'htmlOptions' => array('id' => "survey_$id"),
				'useAjax' => true,
				'title' => array(
						'show' => true,
						'htmlOptions' => array('id' => "title_$id")
				),
				'description' => array(
						'show' => true,
						'htmlOptions' => array('id' => "description_$id")
				),
				'form' => array(
						'show' => true,
						'options' => array(
								'id' => "form_{$this->model->name}",
								'actionPrefix' => $this->actionPrefix,
								'action' => $this->actionPrefix.'logActivity',
								'enableAjaxValidation' => true,
								'enableClientValidation' => true,
								)
						),
						'submitButton' => array(
								'label' => Surveyor::t('Submit'),
								'htmlOptions' => array('id' => "submitButton_$id")
						),
						'questions' => array(
								'htmlOptions' => array('id' => "question_$id")
						),
						'highcharts' => array(
								'show' => true,
								'group' => 'survey',
								'options' => array(
										'chart' => array(
												'backgroundColor' => 'rgba(255, 255, 255, 0.0)',
												'plotBackgroundColor' => null,
												'plotBorderWidth' => null,
												'plotShadow' => false,
										),
										'exporting' => array('enabled' => false),
										'title' => array('text' => null),
										'credits' => array('enabled' => false),
										'tooltip' => array(
												'pointFormat' => '<b>{point.percentage}%</b>',
												'percentageDecimals' => 2
										),
										'plotOptions' => array(
												'pie' => array(
														'allowPointSelect' => true,
														'cursor' => 'pointer',
														'size' => '45%',
														'dataLabels' => array(
																'enabled' => true,
																'color' => '#000000',
																'connectorColor' => '#000000',
																'style' => array('width' => '150px'),
																'formatter' => 'js:function() {' .
																	'return "<b>"+ this.point.name + "</b>: " + Highcharts.numberFormat(this.percentage, 2) + " %";' .
																'}'
														)
												)
										),
										'series' => array(
												array(
														'type' => 'pie',
												)
										)
								)),
				);
	}
	
	public function init()
	{
		Yii::import('surveyor.models.db.*');
		Yii::import('surveyor.models.forms.*');
		Yii::import('surveyor.controllers.*');
		Yii::import('surveyor.components.*');
		Yii::import('surveyor.widgets.*');
		Yii::import('surveyor.*');
		
		if(!isset($this->actionPrefix))
		{
			$this->actionPrefix = 'survey.';
		}
		
		$id = $this->getId(false);
		if(!isset($this->model)) 
		{
			if(!isset($id))
			{
				throw new CException(Surveyor::t('The survey model or survey name must be specified in survey widget.'));
			}
			$this->model = SurveyorModule::surveyor()->getSurveyForm($id);
			if(!isset($this->model))
			{
				throw new CException(Surveyor::t('Survey with name {name} was not found.', array('{name}' => $id)));
			}
		} 
		else if(!isset($id)) 
		{
			$id = $this->model->name;
			$this->setId($id);
		}
		
		// check if options parameter is an array or a json string
		if(!is_array($this->options) && is_string($this->options) && !$this->options = CJSON::decode($this->options))
		{
			throw new CException(Surveyor::t('The options parameter is not an array or a valid JSON string.'));
		}
		
		// merge options with default values
		$this->options = CMap::mergeArray($this->getDefaultOptions(), $this->options);
		
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir))
		{
			$assetsUrl = Yii::app()->getAssetManager()->publish($assetsDir);
			$cs = Yii::app()->getClientScript();
			$cs->registerCssFile("$assetsUrl/survey/styles/survey.css");
			$cs->registerScriptFile("$assetsUrl/survey/scripts/jquery.loadJSON.js");
			$cs->registerScriptFile("$assetsUrl/survey/scripts/jquery.survey.js");
		}
	}
	
	public function run() 
	{
		if($this->model->isComplete() && $this->options['highcharts']['show']) 
		{
			if(Yii::app()->getRequest()->getIsAjaxRequest()) 
			{
				$data = array();
				foreach($this->model->questions as $question) 
				{
					$qData = array();
					foreach($question->options as $option) 
					{
						$qData[] = array($option->text, $option->getPercentAnswered());
					}
					$data["Survey_{$this->model->name}_question$question->id"] = $qData;
				}
				echo CJSON::encode($data);
			} 
			else 
			{
				//@TODO Render stat chart in a page here.
			}
		} 
		else 
		{
			if(Yii::app()->getRequest()->getIsAjaxRequest()) 
			{
				echo CJSON::encode($this->model->getErrors());
			} 
			else 
			{
				return $this->render('survey', array_merge(array('model' => $this->model), $this->options));
			}
		}
	}
	
}