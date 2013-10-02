<?php

class SurveyController extends SController 
{
	
	public function actions()
	{
		return array_merge(parent::actions(), array('survey.' => 'surveyor.widgets.Survey'));
	}
	
	public function actionStat($name) 
	{
		$survey = SurveyorModule::surveyor()->$name;
		$stats = array();
		foreach($survey->questions as $question) 
		{
			$stats[] = $question->getStatistics();
		}
		echo CJSON::encode($stats);
	}
	
	public function actionStatQuestion($name, $num) 
	{
		$survey = SurveyorModule::surveyor()->$name;
		if($num < 0 || $num >= count($survey->questions))
		{
			$num = 0;
		}
		echo CJSON::encode($survey->questions[$num]->getStatistics());
	}
	
	public function actionChart($name, $qNum = 0) 
	{
		$survey = SurveyorModule::surveyor()->$name;
		if($qNum < 0 || $qNum >= count($survey->questions))
		{
			$qNum = 0;
		}
		$this->render('chart', array('survey' => $survey, 'qNum' => $qNum));
	}
	
	public function actionChartQuestion($name, $num) 
	{
		$survey = SurveyorModule::surveyor()->$name;
		if($num < 0 || $num >= count($survey->questions))
		{
			$num = 0;
		}
		$this->render('chart', array('survey' => $survey, 'qNum' => $num));
	}
	
	public function actionTest()
	{
		$this->render('test');
	}
	
}