<?php 
$source = MessageSource::model()->findAll();
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'translations-grid',
	'dataProvider' => $Message->search(),
	'filter' => $Message,
	'columns' => array(
		array(
            'name' => 'id',
            'filter' => CHtml::listData($source, 'id', 'id'),
        ),
		array(
			'name' => 'category',
			'filter' => CHtml::listData($source, 'category', 'category'),
		),
		array(
			'name' => 'language',
			'filter' => CHtml::listData($Message->findAll(new CDbCriteria(array('group' => 'language'))), 'language', 'language')
		),
        array(
            'name' => 'message',
            'filter' => CHtml::listData($source, 'message', 'message'),
        	'htmlOptions' => array('width' => '320'),
        ),
        array(
            'name' => 'translation',
            'htmlOptions' => array('width' => '320'),
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
            'updateButtonUrl'=>'Yii::app()->getController()->createUrl("update",array("id" => $data->id, "messageLanguage" => $data->language))',
            'deleteButtonUrl'=>'Yii::app()->getController()->createUrl("delete",array("id" => $data->id, "messageLanguage" => $data->language))',
        )
	),
)); ?>