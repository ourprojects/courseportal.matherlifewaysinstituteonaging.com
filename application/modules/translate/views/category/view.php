<?php $this->breadcrumbs = array(TranslateModule::t('Categories') => $this->createUrl('index'), TranslateModule::t('Category Details')); ?>
<h1>
	<?php echo TranslateModule::t('Category').'&nbsp;-&nbsp;'.$category->category; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $category)); ?>
	</div>
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
					TranslateModule::t('Source Messages') => $this->internalActionGrid($category->id, 'messageSource-grid', true),
					TranslateModule::t('Source Message Languages') => $this->internalActionGrid($category->id, 'sourceMessageLanguage-grid', true),
					TranslateModule::t('Translated Messages') => $this->internalActionGrid($category->id, 'message-grid', true),
					TranslateModule::t('Translated Message Languages') => $this->internalActionGrid($category->id, 'translatedMessageLanguage-grid', true),
					TranslateModule::t('Routes') => $this->internalActionGrid($category->id, 'route-grid', true),
					TranslateModule::t('Source Views') => $this->internalActionGrid($category->id, 'viewSource-grid', true),
					TranslateModule::t('Translated Views') => $this->internalActionGrid($category->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
