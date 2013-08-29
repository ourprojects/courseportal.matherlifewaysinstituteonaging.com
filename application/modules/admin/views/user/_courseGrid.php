<?php
$this->widget('zii.widgets.grid.CGridView', array(
		'id' => 'course-grid',
		'dataProvider' => $model->search(),
		'filter' => $model,
		'columns' => array(
				'id',
				'rank',
				'name',
				'title',
				'description',
				array(
						'name' => 'userCount',
						'sortable' => false,
						'filter' => '',
				),
				array(
						'class' => 'CButtonColumn',
						'template' => '{view}{delete}',
						'viewButtonLabel' => '{t}View Course Details{/t}',
						'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/course/admin/view", array("id" => $data->id))',
						'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("/course/admin/delete", array("id" => $data->id))',
				)
		),
));
?>