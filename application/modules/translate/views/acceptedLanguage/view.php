<?php $this->breadcrumbs = array(TranslateModule::t('Accepted Languages') => $this->createUrl('index'), TranslateModule::t('Accepted Language Details')); ?>
<h1>
<?php echo TranslateModule::t('Accepted Language:')." $source->id - ".TranslateModule::translator()->getLanguageDisplayName($source->id); ?>
</h1>
<div id="acceptedLanguage">
	<div id="translations">
		<h2><?php echo TranslateModule::t('Translations: '); ?></h2>
		<?php
		$this->widget('translate.widgets.messageSource.TranslationGrid', 
				array('id' => 'translation-grid', 'translations' => $translations)); 
		?>
	</div>
	<div id="missingTranslations">
		<h2><?php echo TranslateModule::t('Missing Translations:'); ?></h2>
		<?php
    	if(TranslateModule::translator()->canUseGoogleTranslate()) {
			echo CHtml::ajaxButton(
					TranslateModule::t('Google Translate Missing'),
					$this->createUrl('translateMissing'),
					array(
						'data' => array(
							'id' => $source->id
						),
						'beforeSend' => 'js:function(jqXHR, settings){$("#missingAcceptedLanguageTranslations").addClass("loading");}',
						'complete' => 'js:function(jqXHR, textStatus){$("#missingAcceptedLanguageTranslations").removeClass("loading");}',
						'success' => 'js:function(data){$.fn.yiiGridView.update("missing-grid");}',
						'error' => 'js:function(xhr){alert(xhr.responseText);}'
					),
					array('id' => 'missingAcceptedLanguageTranslations')
			);
    	}
		
		$this->widget('translate.widgets.acceptedLanguage.MissingTranslationGrid', 
				array('id' => 'missing-grid', 'sourceLanguage' => $source)); 
		?>
	</div>
</div>