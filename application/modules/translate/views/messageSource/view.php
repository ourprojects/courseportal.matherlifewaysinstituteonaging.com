<?php $this->breadcrumbs = array(TranslateModule::t('Source Messages') => $this->createUrl('index'), TranslateModule::t('Source Message Details')); ?>
<h1>
	<?php echo TranslateModule::t('Source Message').'&nbsp;'.$messageSource->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $messageSource)); ?>
	</div>
	<div id="missingLanguages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Languages Missing A Translation For This Source Message'); ?>
		</h2>
		<?php $this->actionGrid($messageSource->id, 'missingLanguage-grid'); ?>
	</div>
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
					TranslateModule::t('Categories') => $this->internalActionGrid($messageSource->id, 'category-grid', true),
					TranslateModule::t('Translated Messages') => $this->internalActionGrid($messageSource->id, 'message-grid', true),
					TranslateModule::t('Languages') => $this->internalActionGrid($messageSource->id, 'language-grid', true),
					TranslateModule::t('Routes') => $this->internalActionGrid($messageSource->id, 'route-grid', true),
					TranslateModule::t('Source Views') => $this->internalActionGrid($messageSource->id, 'viewSource-grid', true),
					TranslateModule::t('Translated Views') => $this->internalActionGrid($messageSource->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
