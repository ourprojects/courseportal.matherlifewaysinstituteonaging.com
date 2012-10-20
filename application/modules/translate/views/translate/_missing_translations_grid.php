<?php 
if(!isset($params))
	$params = array();
$this->widget('zii.widgets.grid.CGridView', array_merge($params, array(
	'id' => 'missing-translations-grid',
	'dataProvider' => $MessageSource->searchMissing(),
	'filter' => $MessageSource,
	'columns' => array(
		array(
            'name' => 'id',
            'filter' => CHtml::listData(MessageSource::model()->findAll(
											TranslateModule::cDbCriteriaInstance(array('select' => 'm.id', 'with' => 'mt', 'params' => array(':lang' => $MessageSource->language)))
            								->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
            								->compare('m.category', $MessageSource->category, true)
											->compare('m.message', $MessageSource->message, true)
										), 'id', 'id'),
        ),
		array(
			'name' => 'category',
			'filter' => CHtml::listData(MessageSource::model()->findAll(
											TranslateModule::cDbCriteriaInstance(array('select' => 'm.category', 'group' => 'category', 'with' => 'mt', 'params' => array(':lang' => $MessageSource->language)))
            								->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
											->compare('id', $MessageSource->id)
											->compare('message', $MessageSource->message, true)
										), 'category', 'category'),
		),
        array(
            'name' => 'message',
            'filter' => CHtml::listData(MessageSource::model()->findAll(
											TranslateModule::cDbCriteriaInstance(array('select' => 'm.message', 'with' => 'mt', 'params' => array(':lang' => $MessageSource->language)))
            								->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
											->compare('id', $MessageSource->id)
											->compare('category', $MessageSource->category, true)
										), 'message', 'message'),
        	'htmlOptions' => array('width' => '600'),
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{create}{delete}',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("missingDelete", array("model" => "MessageSource", "id" => $data->id))',
            'buttons' => array(
                'create' => array(
                    'label' => TranslateModule::t('Create'),
                    'url' => 'Yii::app()->getController()->createUrl("create", array("id" => $data->id, "messageLanguage" => "'.$MessageSource->language.'"))'
                )
            ),
        )
	),
))); 
?>