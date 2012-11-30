<?php $this->breadcrumbs = array(TranslateModule::t('Accepted Languages')); ?>
<h1><?php echo TranslateModule::t('Accepted Languages'); ?></h1>
<?php
$widget = $this->widget('translate.widgets.acceptedLanguage.AcceptedLanguageGrid', 
		array('id' => 'acceptedLanguage-grid', 'acceptedLanguagesModel' => $acceptedLanguages)); 

if(TranslateModule::translator()->canUseGoogleTranslate() &&
		$widget->hasAcceptedLanguageWithMissingTranslations()) {
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
}

?>
<h2><?php echo TranslateModule::t('Create New'); ?></h2>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'accepted-language-create-form',
			'enableAjaxValidation' => true,
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