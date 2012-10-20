<h1><?php echo TranslateModule::t('Translations and Languages Management')?></h1>
<h2><?php echo TranslateModule::t('Translations')?></h2>
<?php $this->renderPartial('_translations_grid', array('Message' => $Message)); ?>
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
<?php $this->renderPartial(
		'_missing_translations_grid', 
		array(
				'MessageSource' => $MessageSource, 
				'params' => array(
						'beforeAjaxUpdate' => 'function(id, options) { options.url = options.url + "&MessageSource[language]=" + $("#MessageSource_language").val(); }'
					)
			)
	); ?>
<h2><?php echo t('User Selectable Languages'); ?></h2>
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