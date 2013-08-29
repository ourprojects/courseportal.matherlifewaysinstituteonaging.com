<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'user-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		Yii::app()->getModule(CourseUser::COURSE_MODULE_NAME)->userId,
		Yii::app()->getModule(CourseUser::COURSE_MODULE_NAME)->userName,
		array(
				'class' => 'CButtonColumn',
				'template' => '{view}{delete}',
				'viewButtonLabel' => '{t}View User Details{/t}',
				'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/admin/user/view", array("id" => $data->id))',
				'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("/admin/user/delete", array("id" => $data->id))',
				'deleteConfirmation' => "{t}Are you sure you would like to delete this user? All of this user's data will be lost forever.{/t}"
		)
	),
));
?>