<?php $this->breadcrumbs = array(TranslateModule::t('Languages')); ?>
<h1><?php echo TranslateModule::t('Requested Languages'); ?></h1>
<?php
$this->widget('translate.widgets.PersistentGridView', 
		array(
			'id' => 'language-index-requested-grid', 
			'dataProvider' => new CActiveDataProvider($acceptedLanguages, array('criteria' => $acceptedLanguages->search()->getDbCriteria())),
			'filter' => $acceptedLanguages,
			'columns' => array(
	        	'id',
				array(
					'header' => TranslateModule::t('Missing Translations?'),
					'type' => 'boolean',
					'value' => '$data->isMissingTranslations()',
				),
		        array(
		            'class' => 'CButtonColumn',
		            'template' => '{view}{delete}',
		        	'viewButtonLabel' => TranslateModule::t('View Translations'),
		        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
		            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("id" => $data->id))',
		        )
			)
		)
);
?>
<h1><?php echo TranslateModule::t('Accepted Languages'); ?></h1>
<?php
$widget = $this->widget('translate.widgets.PersistentGridView', 
		array(
			'id' => 'language-index-accepted-grid', 
			'dataProvider' => new CActiveDataProvider($acceptedLanguages, array('criteria' => $acceptedLanguages->search()->getDbCriteria())),
			'filter' => $acceptedLanguages,
			'columns' => array(
	        	'id',
				array(
					'header' => TranslateModule::t('Missing Translations?'),
					'type' => 'boolean',
					'value' => '$data->isMissingTranslations()',
				),
		        array(
		            'class' => 'CButtonColumn',
		            'template' => '{view}{delete}',
		        	'viewButtonLabel' => TranslateModule::t('View Translations'),
		        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
		            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("id" => $data->id))',
		        )
			)
		)
);

if(TranslateModule::translator()->canUseGoogleTranslate()) {
	foreach($widget->dataProvider->getData() as $item)
	{
		if($item->isMissingTranslations())
		{
			echo CHtml::ajaxButton(
					TranslateModule::t('Google Translate Missing'),
					$this->createUrl('messageSource/translateMissing'),
					array(
							'data' => array('class' => 'AcceptedLanguage')
					),
					array(
							'beforeSend' => 'js:function(jqXHR, settings){$("#missingAcceptedLanguageTranslations").addClass("loading");}',
							'complete' => 'js:function(jqXHR, textStatus){$("#missingAcceptedLanguageTranslations").removeClass("loading");}',
							'success' => 'js:function(data){$.fn.yiiGridView.update("acceptedLanguage-grid");}',
							'error' => 'js:function(xhr){alert(xhr.responseText);}'
					),
					array('id' => 'missingAcceptedLanguageTranslations')
			);
			break;
		}
	}
}

?>
<h2><?php echo TranslateModule::t('Create New'); ?></h2>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'accepted-language-create-form',
			'enableAjaxValidation' => true,
			'enableClientValidation' => true
)); ?>
	
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
		<?php echo $form->error($model, 'id'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(TranslateModule::t('Add Language')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>