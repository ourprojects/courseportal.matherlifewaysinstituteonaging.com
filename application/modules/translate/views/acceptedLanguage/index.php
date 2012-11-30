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