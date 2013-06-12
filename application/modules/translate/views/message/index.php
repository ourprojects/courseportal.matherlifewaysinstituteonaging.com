<?php $this->breadcrumbs = array(TranslateModule::t('Translations')); ?>
<h1><?php echo TranslateModule::t('Translations')?></h1>
<?php
$this->widget('translate.widgets.PersistentGridView', 
		array(
			'id' => 'message-index-messages-grid', 
			'filter' => $messages,
			'dataProvider' => new CActiveDataProvider($messages, array('criteria' => $messages->with('source')->search()->getDbCriteria())),
			'columns' => array(
							array(
					            'name' => 'id',
								'htmlOptions' => array('width' => '50'),
					        ),
							'source.category',
							array(
								'name' => 'language',
								'htmlOptions' => array('width' => '50'),
							),
					        array(
					            'name' => 'source.message',
					        	'htmlOptions' => array('width' => '300'),
					        ),
							array(
								'name' => 'translation',
								'htmlOptions' => array('width' => '300'),
							),
					        array(
					            'class' => 'CButtonColumn',
					            'template' => '{view}{delete}',
					        	'viewButtonLabel' => TranslateModule::t('View Translations'),
					        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("message/view", array("id" => $data->id, "languageId" => $data->language))',
					            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("message/delete", array("id" => $data->id, "languageId" => $data->language))',
					        )
					),
		)
); 
?>