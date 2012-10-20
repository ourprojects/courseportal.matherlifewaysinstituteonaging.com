<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'translations-grid',
	'dataProvider' => $Message->search(),
	'filter' => $Message,
	'columns' => array(
		array(
            'name' => 'id',
            'filter' => CHtml::listData(Message::model()->findAll(
							TranslateModule::cDbCriteriaInstance(array('select' => 't.id', 'with' => 'source'))
							->compare('source.category', $Message->category, true)
							->compare('t.language', $Message->language, true)
							->compare('t.translation', $Message->translation, true)
							->compare('source.message', $Message->message, true)
						), 'id', 'id'),
			'htmlOptions' => array('width' => '50'),
        ),
		array(
			'name' => 'category',
			'filter' => CHtml::listData(Message::model()->findAll(
							TranslateModule::cDbCriteriaInstance(array('select' => 'source.category as category', 'group' => 'source.category', 'with' => 'source'))
							->compare('t.id', $Message->id)
							->compare('t.language', $Message->language, true)
							->compare('t.translation', $Message->translation, true)
							->compare('source.message', $Message->message, true)
						), 'category', 'category'),
		),
		array(
			'name' => 'language',
			'filter' => CHtml::listData(Message::model()->findAll(
							TranslateModule::cDbCriteriaInstance(array('select' => 't.language', 'group' => 't.language', 'with' => 'source'))
							->compare('t.id', $Message->id)
							->compare('t.translation', $Message->translation, true)
							->compare('source.category', $Message->category, true)
							->compare('source.message', $Message->message, true)
						), 'language', 'language')
		),
        array(
            'name' => 'message',
            'filter' => CHtml::listData(Message::model()->findAll(
							TranslateModule::cDbCriteriaInstance(array('select' => 'source.message as message', 'group' => 'source.message', 'with' => 'source'))
							->compare('t.id', $Message->id)
							->compare('t.language', $Message->language, true)
							->compare('t.translation', $Message->translation, true)
							->compare('source.category', $Message->category, true)
						), 'message', 'message'),
        	'htmlOptions' => array('width' => '320'),
        ),
        array(
            'name' => 'translation',
        	'filter' => CHtml::listData(Message::model()->findAll(
        					TranslateModule::cDbCriteriaInstance(array('select' => 't.translation', 'group' => 't.translation', 'with' => 'source'))
        					->compare('t.id', $Message->id)
        					->compare('t.language', $Message->language, true)
        					->compare('source.message', $Message->message, true)
        					->compare('source.category', $Message->category, true)
        				), 'translation', 'translation'),
            'htmlOptions' => array('width' => '320'),
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
            'updateButtonUrl'=>'Yii::app()->getController()->createUrl("update",array("id" => $data->id, "messageLanguage" => $data->language))',
            'deleteButtonUrl'=>'Yii::app()->getController()->createUrl("delete",array("model" => "Message", "id" => $data->id, "messageLanguage" => $data->language))',
        )
	),
)); ?>