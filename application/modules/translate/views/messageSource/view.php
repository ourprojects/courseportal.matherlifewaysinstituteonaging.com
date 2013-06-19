<?php $this->breadcrumbs = array(TranslateModule::t('Messages') => $this->createUrl('index'), TranslateModule::t('Message Details')); ?>
<h1><?php echo TranslateModule::t('Message Details'); ?></h1>
<div id="single-column">
	<div id="messageDetails" class="box-white">
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
	</div>
	<div id="translations" class="box-white">
		<h2><?php echo TranslateModule::t('Translations:'); ?></h2>
		<?php 
		$model = new Message('search');
		$model->setattribute('id', $source->id);
		$this->renderPartial('../message/_grid', array('model' => $model)); 
		?>
	</div>
	<div id="missingAcceptedTranslations" class="box-white">
		<h2><?php echo TranslateModule::t("Accepted languages without a translation for this message"); ?></h2>
		<?php 
		$model = new AcceptedLanguage('search');
		// @ TODO this is very inefficient. Need to find a better way.
		$dataProvider = $model->missingTranslations($source->id)->search();  
		$this->renderPartial('_missing_accepted_translation_grid', array('sourceId' => $source->id, 'model' => $model->missingTranslations($source->id)));
		
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
	<div id="missingOtherTranslations" class="box-white">
		<h2><?php echo TranslateModule::t("Other languages without a translation for this message"); ?></h2>
		<?php
		$model = new Message('search');
		$dataProvider = $model->missingTranslations($source->id)->search();

		$this->renderPartial('_missing_other_translation_grid', array('sourceId' => $source->id, 'model' => $model->missingTranslations($source->id)));
		
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