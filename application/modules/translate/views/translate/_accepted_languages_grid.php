<?php 
$source = AcceptedLanguages::model()->findAll();
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'accepted-languages-grid',
	'dataProvider' => $AcceptedLanguages->search(),
	'filter' => $AcceptedLanguages,
	'columns' => array(
        array(
            'name' => 'id',
            'filter' => CHtml::listData($source, 'id', 'id'),
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{delete}',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("acceptedLanguageDelete", array("id" => $data->id))',
        )
	),
)); 
?>