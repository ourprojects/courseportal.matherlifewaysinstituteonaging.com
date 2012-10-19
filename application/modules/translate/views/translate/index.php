<h1><?php echo TranslateModule::t('Translations and Languages Management')?></h1>
<h2><?php echo TranslateModule::t('Translations')?></h2>
<?php $this->renderPartial('_translations_grid', array('Message' => $Message)); ?>
<h2>
<?php 
echo TranslateModule::t('Missing Translations ');
$htmlOptions = array('onchange' => '$.fn.yiiGridView.update("missing-translations-grid", { data : { "MessageSource[language]" : $("#MessageSource_language").val()');
if(Yii::app()->GetRequest()->enableCsrfValidation)
	$htmlOptions['onchange'] .= ',"YII_CSRF_TOKEN" : "'.Yii::app()->getRequest()->getCsrfToken().'"';
$htmlOptions['onchange'] .= '}});';
echo CHtml::activeDropDownList(
		$MessageSource, 
		'language', 
		TranslateModule::translator()->getAdminAcceptedLanguages(),
		$htmlOptions
); 
?>
</h2>
<?php $this->renderPartial('_missing_translations_grid', array('MessageSource' => $MessageSource)); ?>
<h2><?php echo t('Languages'); ?></h2>
<?php $this->renderPartial('_accepted_languages_grid', array('AcceptedLanguages' => $AcceptedLanguages)); ?>
<h2><?php echo t('Create New'); ?></h2>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'accepted-languages-create-form',
			'enableAjaxValidation' => true,
)); ?>
	
	<?php echo $form->errorSummary($AcceptedLanguages); ?>
	<div class="row">
		<?php echo $form->labelEx($AcceptedLanguages, 'id'); ?>
		<?php echo $form->textField($AcceptedLanguages, 'id'); ?>
		<?php echo $form->error($AcceptedLanguages, 'id'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Add Language')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>