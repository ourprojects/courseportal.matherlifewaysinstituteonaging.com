<?php $this->breadcrumbs = array(TranslateModule::t('Languages') => $this->createUrl('index'), TranslateModule::t('Language Details')); ?>
<h1>
<?php echo TranslateModule::t('Language:')." $source->id - ".TranslateModule::translator()->getLanguageDisplayName($source->id); ?>
</h1>
<div id="languageDetails">
	<div id="translations">
		<h2><?php echo TranslateModule::t('Translations: '); ?></h2>
		<?php
		$this->renderPartial(
				'../message/_grid', 
				array(
						'filter' => $translations, 
						'dataProvider' => new CActiveDataProvider($translations, array('criteria' => $translations->search()->getDbCriteria()))
				)
		);
		?>
	</div>
	<div id="missingTranslations">
		<h2><?php echo TranslateModule::t('Missing Translations:'); ?></h2>
		<?php
		$model = MessageSource::model();
		$dataProvider = new CActiveDataProvider('MessageSource', array('criteria' => $model->missingTranslations($source->id)->getDbCriteria()));
		$this->renderPartial('_missing_translations_grid', array('filter' => $model, 'dataProvider' => $dataProvider));
		
    	if(TranslateModule::translator()->canUseGoogleTranslate() && $dataProvider->getItemCount() > 0) {
			echo CHtml::ajaxButton(
					TranslateModule::t('Google Translate Missing'),
					$this->createUrl('messageSource/translateMissing'),
					array(
						'data' => array(
							'id' => $source->id
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