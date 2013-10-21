<?php $this->breadcrumbs = array(TranslateModule::t('Views') => $this->createUrl('index'), TranslateModule::t('View Details')); ?>
<h1>
	<?php echo TranslateModule::t('View').'&nbsp;'.$view->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $view)); ?>
	</div>
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
					TranslateModule::t('Categories') => $this->internalActionGrid($view->id, $view->language_id, 'category-grid', true),
					TranslateModule::t('Source Messages') => $this->internalActionGrid($view->id, $view->language_id, 'messageSource-grid', true),
					TranslateModule::t('Translated Messages') => $this->internalActionGrid($view->id, $view->language_id, 'message-grid', true),
					TranslateModule::t('Routes') => $this->internalActionGrid($view->id, $view->language_id, 'route-grid', true),
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
