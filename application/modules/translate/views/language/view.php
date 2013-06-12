<?php $this->breadcrumbs = array(TranslateModule::t('Languages') => $this->createUrl('index'), TranslateModule::t('Language Details')); ?>
<h1>
<?php echo TranslateModule::t('Language:')." $source->id - ".TranslateModule::translator()->getLanguageDisplayName($source->id); ?>
</h1>
<div id="languageDetails">
	<div id="translations">
		<h2><?php echo TranslateModule::t('Translations: '); ?></h2>
		<?php
		$this->widget('translate.widgets.PersistentGridView', 
				array(
					'id' => 'language-view-messages-grid', 
					'filter' => $translations,
					'dataProvider' => new CActiveDataProvider($translations, array('criteria' => $translations->search()->getDbCriteria())),
					'columns' => array(
									'language',
									array(
											'name' => 'translation',
											'htmlOptions' => array('width' => '700'),
									),
									array(
											'class' => 'CButtonColumn',
											'template' => '{update}{delete}',
											'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/update", array("id" => $data->id, "languageId" => $data->language))',
											'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("message/delete", array("id" => $data->id, "languageId" => $data->language))',
									)
								),
				)
		);
		?>
	</div>
	<div id="missingTranslations">
		<h2><?php echo TranslateModule::t('Missing Translations:'); ?></h2>
		<?php
		$model = MessageSource::model();
		$widget = $this->widget('translate.widgets.PersistentGridView',
				array(
					'id' => 'language-view-missing-grid',
					'filter' => $model,
					'dataProvider' => new CActiveDataProvider('MessageSource', array('criteria' => $model->missingTranslations($source->id)->getDbCriteria())),
					'columns' => array(
						'id',
						'category',
						array(
								'name' => 'message',
								'htmlOptions' => array('width' => '600'),
						),
						array(
								'class' => 'CButtonColumn',
								'template' => '{update}',
								'updateButtonLabel' => TranslateModule::t('Create Translation'),
								'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => $data->id, "languageId" => "'.$source->id.'"))',
						)
					)
				)
		);
		
    	if(TranslateModule::translator()->canUseGoogleTranslate() && $widget->dataProvider->getItemCount() > 0) {
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