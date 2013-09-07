<?php
$this->widget(
		'zii.widgets.jui.CJuiTabs', 
		array(
				'tabs' => array(
						'{t}Logged Activities{/t}' => $this->render('dimensionTabs', array('dimensions' => $dimensions), true),
						'{t}Log New Activity{/t}' => $this->render('logActivity', array('Activity' => $Activity, 'UserActivity' => $UserActivity, 'activitySearchModel' => $activitySearchModel), true)
				), 
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'
		)
);
?>