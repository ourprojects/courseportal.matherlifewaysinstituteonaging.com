<?php $this->breadcrumbs = array(TranslateModule::t('Source Views') => $this->createUrl('index'), TranslateModule::t('Source View Details')); ?>
<h1>
	<?php echo TranslateModule::t('Source View').'&nbsp;'.$viewSource->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $viewSource)); ?>
	</div>
	<div id="missingLanguages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Languages Missing A Translation For This Source View'); ?>
		</h2>
		<?php $this->actionGrid($viewSource->id, 'missingLanguage-grid'); ?>
	</div>
	<?php
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
					TranslateModule::t('Categories') => $this->internalActionGrid($viewSource->id, 'category-grid', true),
					TranslateModule::t('Source Messages') => $this->internalActionGrid($viewSource->id, 'messageSource-grid', true),
					TranslateModule::t('Translated Messages') => $this->internalActionGrid($viewSource->id, 'message-grid', true),
					TranslateModule::t('Languages') => $this->internalActionGrid($viewSource->id, 'language-grid', true),
					TranslateModule::t('Routes') => $this->internalActionGrid($viewSource->id, 'route-grid', true),
					TranslateModule::t('Translated Views') => $this->internalActionGrid($viewSource->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
