<?php $this->breadcrumbs = array(TranslateModule::t('Languages')); ?>
<h1><?php echo TranslateModule::t('Languages'); ?></h1>
<div id="single-column">
	<div id="acceptedLanguages" class="box-white">
		<h2><?php echo TranslateModule::t('Accepted Languages'); ?></h2>
		<?php
		$model = new AcceptedLanguage('search');
		// @ TODO this is very inefficient. Need to find a better way.
		$dataProvider = $model->search();
		$this->renderPartial('_accepted_grid', array('model' => $model));
		
		if(TranslateModule::translator()->canUseGoogleTranslate()) {
			foreach($dataProvider->getData() as $item)
			{
				if($item->isMissingTranslations())
				{
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
					break;
				}
			}
		}
		
		?>
		<h2><?php echo TranslateModule::t('Create New'); ?></h2>
		<div class="form">
			<?php $form = $this->beginWidget('CActiveForm', array(
					'id' => 'accepted-language-create-form',
					'enableAjaxValidation' => true,
					'enableClientValidation' => true
		)); ?>
			
			<?php echo $form->errorSummary($acceptedLanguage); ?>
			<div class="row">
				<?php echo $form->labelEx($acceptedLanguage, 'id'); ?>
				<?php echo $form->textField($acceptedLanguage, 'id'); ?>
				<?php echo $form->error($acceptedLanguage, 'id'); ?>
			</div>
		
			<div class="row submit">
				<?php echo CHtml::submitButton(TranslateModule::t('Add Language')); ?>
			</div>
		
			<?php $this->endWidget(); ?>
		</div>
	</div>
	<div id="otherLanguages" class="box-white">
		<h2><?php echo TranslateModule::t('Other Languages'); ?></h2>
		<?php
		// @ TODO This needs to be other languages not accepted languages.
		$this->renderPartial('_other_grid', array('model' => new AcceptedLanguage('search'))); 
		?>
	</div>
</div>