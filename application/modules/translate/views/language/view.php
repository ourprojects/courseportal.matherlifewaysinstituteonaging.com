<?php $this->breadcrumbs = array(TranslateModule::t('Languages') => $this->createUrl('index'), TranslateModule::t('Language Details')); ?>
<h1>
<?php echo TranslateModule::t('Language:')." $language->id - ".TranslateModule::translator()->getLanguageDisplayName($language->id); ?>
</h1>
<div id="single-column">
	<div id="translations" class="box-white">
		<h2><?php echo TranslateModule::translator()->getLanguageDisplayName($language->id) . '&nbsp;' . TranslateModule::t('Translations: '); ?></h2>
		<?php
		$model = new Message('search');
		$model->setAttribute('language', $language->id);
		$this->renderPartial('../message/_grid', array('model' => $model)); 
		?>
	</div>
	<div id="missingTranslations" class="box-white">
		<h2>
		<?php 
		echo TranslateModule::t('Messages not yet translated to') . '&nbsp;' . TranslateModule::translator()->getLanguageDisplayName($language->id) . ':'; 
		?>
		</h2>
		<?php
		$model = MessageSource::model();
		// @ TODO this is very inefficient. Need to find a better way.
		$dataProvider = $model->missingTranslations($language->id)->search();
		$this->renderPartial('_missing_translations_grid', array('languageId' => $language->id, 'model' => $model->missingTranslations($language->id)));
		
    	if(TranslateModule::translator()->canUseGoogleTranslate() && $dataProvider->getItemCount() > 0) {
			echo CHtml::ajaxButton(
					TranslateModule::t('Google Translate Missing'),
					$this->createUrl('messageSource/translateMissing'),
					array(
						'data' => array(
							'id' => $language->id
						),
						'beforeSend' => 'js:function(jqXHR, settings){$("#missingAcceptedLanguageTranslations").addClass("loading");}',
						'complete' => 'js:function(jqXHR, textStatus){$("#missingAcceptedLanguageTranslations").removeClass("loading");}',
						'success' => 'js:function(data){$.fn.yiiGridView.update("missing-grid");$.fn.yiiGridView.update("translation-grid");}',
						'error' => 'js:function(xhr){alert(xhr.responseText);}'
					),
					array('id' => 'missingAcceptedLanguageTranslations')
			);
    	}
		?>
	</div>
</div>