<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'course-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
        array(
            'name' => 'id',
        	'htmlOptions' => array('width' => '40'),
        ),
		array(
			'name' => 'rank',
			'htmlOptions' => array('width' => '40'),
		),
		array(
			'name' => 'name',
			'htmlOptions' => array('width' => '100'),
		),
        array(
            'name' => 'title',
        	'htmlOptions' => array('width' => '100'),
        ),
		array(
			'name' => 'description',
			'htmlOptions' => array('width' => '400'),
		),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{delete}',
        	'viewButtonLabel' => '{t}View Course Details{/t}',
        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("view", array("id" => $data->id))',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("delete", array("id" => $data->id))',
        )
	),
)); 
?>