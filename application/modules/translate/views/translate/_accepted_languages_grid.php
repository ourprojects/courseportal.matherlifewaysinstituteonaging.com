<?php 
$source = AcceptedLanguages::model()->findAll();
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'accepted-languages-grid',
	'dataProvider' => $AcceptedLanguages->search(),
	'filter' => $AcceptedLanguages,
	'columns' => array(
        'id',
		'name',
        array(
            'class' => 'CButtonColumn',
            'template' => '{delete}',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("acceptedDelete", array("model" => "AcceptedLanguages", "id" => $data->id))',
        )
	),
)); 
?>