<?php
$stats = array();

foreach($survey->questions as $question) {
	foreach($question->options as $option) {
		$stats[] = array($option->text, $option->answersCount / $question->answersCount);
	}
}

$this->widget('ext.highcharts.EHighcharts', array(
	   'options' => array(
	   		'chart' => array(
	   			'plotBackgroundColor' => null,
	   			'plotBorderWidth' => null,
	   			'plotShadow' => false
	   		),
	   		'title' => array(
	   			'text' => $survey->title
	   		),
	   		'tooltip' => array(
	   			'pointFormat' => '{series.name}: <b>{point.percentage}%</b>',
	   			'percentageDecimals' => 1
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
	   						return "<b>"+ this.point.name + "</b>: " + Highcharts.numberFormat(this.percentage, 2, ".") + " %"; 
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