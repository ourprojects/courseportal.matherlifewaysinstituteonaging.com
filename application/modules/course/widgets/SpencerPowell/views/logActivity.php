<?php 
$this->render('logActivityGrid', array('activitySearchModel' => $activitySearchModel, 'id' => $id, 'actionPrefix' => $actionPrefix));
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id' => $id.'-activityDialog',
		'options' => array(
				'title' => '{t}Log Activity{/t}',
				'autoOpen' => false,
				'modal' => true,
				'width' => 700,
				'height' => 600
		),
));
$this->render('logActivityForm', array('Activity' => $Activity, 'UserActivity' => $UserActivity, 'id' => $id, 'actionPrefix' => $actionPrefix));
$this->endWidget('zii.widgets.jui.CJuiDialog'); 
?>

