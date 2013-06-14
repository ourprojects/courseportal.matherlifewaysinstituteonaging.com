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
		$this->renderPartial(
				'../message/_grid', 
				array(
						'filter' => $translations, 
						'dataProvider' => new CActiveDataProvider($translations, array('criteria' => $translations->search()->getDbCriteria()))
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
			$dataProvider = new CActiveDataProvider('AcceptedLanguage', array('criteria' => $model->missingTranslations($source->id)->getDbCriteria()));  
			
			$this->renderPartial('_missing_accepted_translation_grid', array('filter' => $model, 'dataProvider' => $dataProvider, 'sourceId' => $source->id));
			
			if(TranslateModule::translator()->canUseGoogleTranslate() && $dataProvider->getItemCount() > 0) {
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
			<h2><?php echo TranslateModule::t('Other Languages:'); ?></h2>
			<?php
			$model = Message::model();
			$dataProvider = new CActiveDataProvider('Message', array('criteria' => $model->missingTranslations($source->id)->getDbCriteria()));

			$this->renderPartial('_missing_other_translation_grid', array('filter' => $model, 'dataProvider' => $dataProvider, 'sourceId' => $source->id));
			
			if(TranslateModule::translator()->canUseGoogleTranslate() && $dataProvider->getItemCount() > 0) {
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