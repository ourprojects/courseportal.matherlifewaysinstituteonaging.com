<?php 
$this->render('logActivityGrid', array('activitySearchModel' => $activitySearchModel));
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id' => $this->getId().'-activityDialog',
		'options' => array(
				'title' => '{t}Log Activity{/t}',
				'autoOpen' => false,
				'modal' => true,
				'width' => 700,
				'height' => 600
		),
));
$this->render('logActivityForm', array('Activity' => $Activity, 'UserActivity' => $UserActivity));
$this->endWidget('zii.widgets.jui.CJuiDialog'); 
?>

