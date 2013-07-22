<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'user-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id', 
		'group', 
		'email', 
		'name', 
		'firstname', 
		'lastname', 
		'location', 
		'country', 
		'created', 
		'last_login', 
		'last_ip',
		array(
				'name' => 'activated',
				'value' => '$data->activated === null ? "{t}Never{/t}" : $data->activated->date'
		),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{delete}',
        	'viewButtonLabel' => '{t}View User Details{/t}',
        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("view", array("id" => $data->id))',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("delete", array("id" => $data->id))',
        	'deleteConfirmation' => "{t}Are you sure you would like to delete this user? All of this user's data will be lost forever.{/t}"
        )
	),
));
?>