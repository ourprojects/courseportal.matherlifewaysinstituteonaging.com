<?php $this->breadcrumbs = array(TranslateModule::t('Messages') => $this->createUrl('index'), TranslateModule::t('Message Details')); ?>
<h1><?php echo TranslateModule::t('Message Details'); ?></h1>
<div id="sourceMessage">
	<div id="id">
		<h2><?php echo $source->getAttributeLabel('id'); ?></h2>
		<p>
			<?php echo $source->id; ?>
		</p>
	</div>
	<div id="category">
		<h2><?php echo $source->getAttributeLabel('categories'); ?></h2>
		<p>
			<ul>
			<?php 
				foreach($source->categories as $category)
					echo "<li>$category</li>";
			?>
			</ul>
		</p>
	</div>
	<div id="message">
		<h2><?php echo $source->getAttributeLabel('message'); ?></h2>
		<p>
			<?php echo $source->message; ?>
		</p>
	</div>
	<div id="translations">
		<h2><?php echo TranslateModule::t('Translations:'); ?></h2>
		<?php
		$this->widget('translate.widgets.PersistentGridView', 
				array(
					'id' => 'messageSource-view-messages-grid', 
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
	<div id="missing">
		<h2><?php echo TranslateModule::t('Languages missing a translation for message') . " $source->id:"; ?></h2>
		<div id="acceptedLanguageTranslations">
			<h2><?php echo TranslateModule::t('Accepted Languages:'); ?></h2>
			<?php 
			$model = AcceptedLanguage::model();
			$widget = $this->widget('translate.widgets.PersistentGridView', 
					array(
						'id' => 'messageSource-view-missing-accepted-language-grid', 
						'filter' => $model,
						'dataProvider' => new CActiveDataProvider('AcceptedLanguage', array('criteria' => $model->missingTranslations($source->id)->getDbCriteria())),
						'columns' => array(
										array(
											'name' => 'id',
											'header' => TranslateModule::t('Language')
										),
										array(
											'class' => 'CButtonColumn',
											'template' => '{update}',
											'updateButtonLabel' => TranslateModule::t('Create Translation'),
											'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => '.$source->id.', "languageId" => $data->id))',
										)
									)
					)
			); 
			
			if(TranslateModule::translator()->canUseGoogleTranslate() && $widget->dataProvider->getItemCount() > 0) {
				echo CHtml::ajaxButton(
						TranslateModule::t('Google Translate All'),
						$this->createUrl('acceptedLanguage/translateMissing'),
						array(
								'data' => array(
										'id' => $source->id
								),
								'beforeSend' => 'js:function(jqXHR, settings){$("#missingAcceptedLanguageTranslations").addClass("loading");}',
								'complete' => 'js:function(jqXHR, textStatus){$("#missingAcceptedLanguageTranslations").removeClass("loading");}',
								'success' => 'js:function(data){$.fn.yiiGridView.update("missing-grid");$.fn.yiiGridView.update("missing-accepted-language-grid");$.fn.yiiGridView.update("translation-grid");}',
								'error' => 'js:function(xhr){alert(xhr.responseText);}'
						),
						array('id' => 'missingAcceptedLanguageTranslations')
				);
			}
			?>
		</div>
		<div id="translations">
			<h2><?php echo TranslateModule::t('Requested Languages:'); ?></h2>
			<?php
			$model = Message::model();
			$widget = $this->widget('translate.widgets.PersistentGridView', 
					array(
						'id' => 'messageSource-view-missing-translation-grid', 
						'filter' => $model,
						'dataProvider' => new CActiveDataProvider('Message', array('criteria' => $model->missingTranslations($source->id)->getDbCriteria())),
						'columns' => array(
										'language',
										array(
											'class' => 'CButtonColumn',
											'template' => '{update}',
											'updateButtonLabel' => TranslateModule::t('Create Translation'),
											'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => '.$source->id.', "languageId" => $data->language))',
										)
									),
					)
			); 
			if(TranslateModule::translator()->canUseGoogleTranslate() && $widget->dataProvider->getItemCount() > 0) {
				echo CHtml::ajaxButton(
						TranslateModule::t('Google Translate All'),
						$this->createUrl('message/translateMissing'),
						array(
								'data' => array(
										'id' => $source->id
								),
								'beforeSend' => 'js:function(jqXHR, settings){$("#missingTranslations").addClass("loading");}',
								'complete' => 'js:function(jqXHR, textStatus){$("#missingTranslations").removeClass("loading");}',
								'success' => 'js:function(data){$.fn.yiiGridView.update("missing-grid");$.fn.yiiGridView.update("missing-accepted-language-grid");$.fn.yiiGridView.update("translation-grid");}',
								'error' => 'js:function(xhr){alert(xhr.responseText);}'
						),
						array('id' => 'missingTranslations')
				);
			}
			?>
		</div>
	</div>
</div>