<?php $this->breadcrumbs = array(TranslateModule::t('Views') => $this->createUrl('index'), TranslateModule::t('View Details')); ?>
<h1>
	<?php echo TranslateModule::t('View').'&nbsp;'.$view->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $view)); ?>
	</div>
	<div id="categories" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Message Categories'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($view->id, $view->language_id, 'category-grid'); ?>
	</div>
	<div id="messageSources" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Messages'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($view->id, $view->language_id, 'messageSource-grid'); ?>
	</div>
	<div id="messages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Messages'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($view->id, $view->language_id, 'message-grid'); ?>
	</div>
	<div id="routes" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Routes'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($view->id, $view->language_id, 'route-grid'); ?>
	</div>
</div>