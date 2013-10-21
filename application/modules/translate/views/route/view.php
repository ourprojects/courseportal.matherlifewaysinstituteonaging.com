<?php $this->breadcrumbs = array(TranslateModule::t('Routes') => $this->createUrl('index'), TranslateModule::t('Route Details')); ?>
<h1>
	<?php echo TranslateModule::t('Route').'&nbsp;'.$route->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $route)); ?>
	</div>
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
					TranslateModule::t('Categories') => $this->internalActionGrid($route->id, 'category-grid', true),
					TranslateModule::t('Source Messages') => $this->internalActionGrid($route->id, 'messageSource-grid', true),
					TranslateModule::t('Translated Messages') => $this->internalActionGrid($route->id, 'message-grid', true),
					TranslateModule::t('Languages') => $this->internalActionGrid($route->id, 'language-grid', true),
					TranslateModule::t('Source Views') => $this->internalActionGrid($route->id, 'viewSource-grid', true),
					TranslateModule::t('Translated Views') => $this->internalActionGrid($route->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
