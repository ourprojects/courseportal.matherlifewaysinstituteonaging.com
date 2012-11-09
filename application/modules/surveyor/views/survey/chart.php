<div class="small-masthead">

</div>
<?php
$stats = array();
$question = $survey->questions[$qNum];
foreach($question->options as $option) {
	$stats[] = array($option->text, ($question->answersCount <= 0 ? 0 : $option->answersCount / $question->answersCount));
}
if($qNum > 0)
	echo CHtml::link('Previous Question', $this->createUrl("survey/chart/name/{$survey->name}/qNum/" . ($qNum - 1)), array('style' => 'float: left;')); 
if($qNum + 1 < count($survey->questions))
	echo CHtml::link('Next Question', $this->createUrl("survey/chart/name/{$survey->name}/qNum/" . ($qNum + 1)), array('style' => 'float: right;'));
$this->widget('ext.highcharts.EHighcharts', array(
	   'options' => array(
	   		'chart' => array(
	   			'plotBackgroundColor' => null,
	   			'plotBorderWidth' => null,
	   			'plotShadow' => false
	   		),
	   		'credits' => array('enabled' => false),
	   		'title' => array(
	   			'text' => "$survey->title: $question->text"
	   		),
	   		'tooltip' => array(
	   			'pointFormat' => '{series.name}: <b>{point.percentage}%</b>',
	   			'percentageDecimals' => 2
	   		),
	   		'plotOptions' => array(
	   			'pie' => array(
	   				'allowPointSelect' => true,
	   				'cursor' => 'pointer',
	   				'dataLabels' => array(
	   					'enabled' => true,
	   					'color' => '#000000',
	   					'connectorColor' => '#000000',
	   					'formatter' => 'js:function() { 
	   						return "<b>"+ this.point.name + "</b>: " + Highcharts.numberFormat(this.percentage, 2) + " %"; 
						}'
	   				)
	   			)
	   		),
	   		'series' => array(
	   			array(
		   			'type' => 'pie',
		   			'name' => 'Response Share',
		   			'data' => $stats
	   			)
	   		)
	   )
	)
);
?>