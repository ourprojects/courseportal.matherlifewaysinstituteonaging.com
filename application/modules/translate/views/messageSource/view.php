<?php $this->breadcrumbs = array(TranslateModule::t('Messages') => $this->createUrl('index'), TranslateModule::t('Message Details')); ?>
<h1><?php echo TranslateModule::t('Message Details'); ?></h1>
<div id="sourceMessage">
	<div id="id">
		<h2><?php echo TranslateModule::t('ID:'); ?></h2>
		<p>
			<?php echo $source->id; ?>
		</p>
	</div>
	<div id="category">
		<h2><?php echo TranslateModule::t('Category:'); ?></h2>
		<p>
			<?php echo $source->category; ?>
		</p>
	</div>
	<div id="message">
		<h2><?php echo TranslateModule::t('Message:'); ?></h2>
		<p>
			<?php echo $source->message; ?>
		</p>
	</div>
	<div id="translations">
		<h2><?php echo TranslateModule::t('Translations:'); ?></h2>
		<?php
		$this->widget('translate.widgets.messageSource.TranslationGrid', 
				array('id' => 'translation-grid', 'translations' => $translations)); 
		?>
	</div>
	<div id="missing">
		<h2><?php echo TranslateModule::t('Languages without a translation for message') . " $source->id:"; ?></h2>
		<div id="acceptedLanguageTranslations">
			<h2><?php echo TranslateModule::t('Accepted languages:'); ?></h2>
			<?php 
			$widget = $this->widget('translate.widgets.messageSource.MissingAcceptedLanguageGrid', 
					array('id' => 'missing-accepted-language-grid', 'sourceMessage' => $source)); 
			
			if(TranslateModule::translator()->canUseGoogleTranslate() &&
					$widget->dataProvider->getItemCount() > 0) {
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
			<h2><?php echo TranslateModule::t('Translated languages:'); ?></h2>
			<?php
			$widget = $this->widget('translate.widgets.messageSource.MissingTranslationGrid', 
					array('id' => 'missing-grid', 'sourceMessage' => $source)); 
			if(TranslateModule::translator()->canUseGoogleTranslate() && 
					$widget->dataProvider->getItemCount() > 0) {
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