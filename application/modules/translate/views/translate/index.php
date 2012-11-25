<h1><?php echo TranslateModule::t('Translations and Languages Management')?></h1>
<h2><?php echo TranslateModule::t('Translations')?></h2>
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
)); 
?>
<h2>
<?php 
echo TranslateModule::t('Missing Translations ');
echo CHtml::activeDropDownList(
		$MessageSource, 
		'language', 
		TranslateModule::translator()->getLanguageDisplayNames(),
		array('onchange' => '$.fn.yiiGridView.update("missing-translations-grid");')
); 

if(!empty(TranslateModule::translator()->googleApiKey)) {
	echo CHtml::ajaxButton(
			TranslateModule::t('Try Google Translate'), 
			$this->createUrl('googleTranslateMissing'),
			array(
					'beforeSend' => 'function(id, options) { options.url = options.url + "&MessageSource[language]=" + $("#MessageSource_language").val(); }',
					'success' => 'function(data) {  
						if(data["success"])
							alert("All messsages translated.");
						else
							alert("Not all messages were translated successfully.");
						$.fn.yiiGridView.update("missing-translations-grid"); 
						$.fn.yiiGridView.update("translations-grid"); 
					}',
					'error' => 'function(XHR) { alert("A server error ocurred."); }'
				)
		);
}
?>
</h2>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'missing-translations-grid',
	'beforeAjaxUpdate' => 'function(id, options) { options.url = options.url + "&MessageSource[language]=" + $("#MessageSource_language").val(); }',
	'dataProvider' => $MessageSource->search(),
	'filter' => $MessageSource,
	'columns' => array(
		array(
            'name' => 'id',
            'filter' => CHtml::listData(MessageSource::model()->findAll(
											TranslateModule::cDbCriteriaInstance(array('select' => 'm.id', 'with' => 'messageTranslation', 'params' => array(':lang' => $MessageSource->language)))
            								->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
            								->compare('m.category', $MessageSource->category, true)
											->compare('m.message', $MessageSource->message, true)
										), 'id', 'id'),
        ),
		array(
			'name' => 'category',
			'filter' => CHtml::listData(MessageSource::model()->findAll(
											TranslateModule::cDbCriteriaInstance(array('select' => 'm.category', 'group' => 'category', 'with' => 'messageTranslation', 'params' => array(':lang' => $MessageSource->language)))
            								->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
											->compare('id', $MessageSource->id)
											->compare('message', $MessageSource->message, true)
										), 'category', 'category'),
		),
        array(
            'name' => 'message',
            'filter' => CHtml::listData(MessageSource::model()->findAll(
											TranslateModule::cDbCriteriaInstance(array('select' => 'm.message', 'with' => 'messageTranslation', 'params' => array(':lang' => $MessageSource->language)))
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
)); 
?>
<h2><?php echo t('User Selectable Languages'); ?></h2>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'accepted-languages-grid',
	'dataProvider' => $AcceptedLanguage->search(),
	'filter' => $AcceptedLanguage,
	'columns' => array(
        'id',
		'name',
        array(
            'class' => 'CButtonColumn',
            'template' => '{delete}',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("acceptedDelete", array("model" => "AcceptedLanguage", "id" => $data->id))',
        )
	),
)); 
?>
<h2><?php echo t('Create New'); ?></h2>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'accepted-languages-create-form',
			'enableAjaxValidation' => true,
)); ?>
	
	<?php echo $form->errorSummary($AcceptedLanguage); ?>
	<div class="row">
		<?php echo $form->labelEx($AcceptedLanguage, 'id'); ?>
		<?php echo $form->textField($AcceptedLanguage, 'id'); ?>
		<?php echo $form->error($AcceptedLanguage, 'id'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Add Language')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>