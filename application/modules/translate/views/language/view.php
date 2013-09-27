<?php $this->breadcrumbs = array(TranslateModule::t('Languages') => $this->createUrl('index'), TranslateModule::t('Language Details')); ?>
<h1>
	<?php echo TranslateModule::t('Language').'&nbsp;-&nbsp;'.$language->getName(); ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $language)); ?>
	</div>
	<div id="missingMessageSources" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Messages Missing a Translation For Language'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'missingMessageSource-grid'); ?>
	</div>
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
						TranslateModule::t('Categories') => $this->internalActionGrid($language->id, 'category-grid', true),
						TranslateModule::t('Source Messages') => $this->internalActionGrid($language->id, 'messageSource-grid', true),
						TranslateModule::t('Translated Messages') => $this->internalActionGrid($language->id, 'message-grid', true),
						TranslateModule::t('Routes') => $this->internalActionGrid($language->id, 'route-grid', true),
						TranslateModule::t('Source Views') => $this->internalActionGrid($language->id, 'viewSource-grid', true),
						TranslateModule::t('Translated Views') => $this->internalActionGrid($language->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
