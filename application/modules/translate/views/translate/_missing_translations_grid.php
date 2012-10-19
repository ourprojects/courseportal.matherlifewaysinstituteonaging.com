<?php 
$source = MessageSource::model()->findAll();
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'missing-translations-grid',
	'dataProvider' => $MessageSource->searchMissing(),
	'filter' => $MessageSource,
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
            'name' => 'message',
            'filter' => CHtml::listData($source, 'message', 'message'),
        	'htmlOptions' => array('width' => '600'),
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{create}{delete}',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("missingDelete", array("id" => $data->id))',
            'buttons' => array(
                'create' => array(
                    'label' => TranslateModule::t('Create'),
                    'url' => 'Yii::app()->getController()->createUrl("create", array("id" => $data->id, "messageLanguage" => "'.$MessageSource->language.'"))'
                )
            ),
        )
	),
)); 
?>