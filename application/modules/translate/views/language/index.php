<?php $this->breadcrumbs = array(TranslateModule::t('Languages')); ?>
<h1><?php echo TranslateModule::t('Requested Languages'); ?></h1>
<?php $this->renderPartial('_requested_grid', array('requestedLanguages' => $acceptedLanguages)); ?>
<h1><?php echo TranslateModule::t('Accepted Languages'); ?></h1>
<?php
$dataProvider = new CActiveDataProvider($requestedLanguages, array('criteria' => $requestedLanguages->search()->getDbCriteria()));
$this->renderPartial('_accepted_grid', array('filter' => $acceptedLanguages, 'dataProvider' => $dataProvider));

if(TranslateModule::translator()->canUseGoogleTranslate()) {
	foreach($dataProvider->getData() as $item)
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