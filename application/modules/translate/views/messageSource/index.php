<?php $this->breadcrumbs = array(TranslateModule::t('Messages')); ?>
<?php
$widget = $this->widget('translate.widgets.messageSource.SourceGrid', 
		array('id' => 'source-grid', 'sources' => $sources)
); 

if(TranslateModule::translator()->canUseGoogleTranslate() &&
		$widget->hasSourceMessageWithMissingTranslations()) {
	echo CHtml::ajaxButton(
			TranslateModule::t('Google Translate Missing'),
			$this->createUrl('messageSource/translateMissing'),
			array(
					'beforeSend' => 'js:function(jqXHR, settings){$("#missingTranslations").addClass("loading");}',
					'complete' => 'js:function(jqXHR, textStatus){$("#missingTranslations").removeClass("loading");}',
					'success' => 'js:function(data){alert(data);$.fn.yiiGridView.update("source-grid");}',
					'error' => 'js:function(xhr){alert(xhr.responseText);}'
			),
			array('id' => 'missingTranslations')
	);
}
?>