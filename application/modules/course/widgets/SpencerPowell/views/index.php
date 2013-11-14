<?php
$this->widget(
	'zii.widgets.jui.CJuiTabs', 
	array(
		'tabs' => array(
			'{t}Logged Activities{/t}' => $this->render('dimensionTabs', array('dimensions' => $dimensions, 'id' => $id, 'actionPrefix' => $actionPrefix), true),
			'{t}Log New Activity{/t}' => $this->render('logActivity', array('Activity' => $Activity, 'UserActivity' => $UserActivity, 'activitySearchModel' => $activitySearchModel, 'id' => $id, 'actionPrefix' => $actionPrefix), true)
		), 
		'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'
	)
);
?>