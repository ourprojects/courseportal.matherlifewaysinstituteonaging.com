<?php $this->breadcrumbs = array(TranslateModule::t('Languages') => $this->createUrl('index'), TranslateModule::t('Language Details')); ?>
<h1>
	<?php echo TranslateModule::t('Language').'&nbsp;-&nbsp;'.$language->getName(); ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $language)); ?>
	</div>
	<div id="categories" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Message Categories'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'category-grid'); ?>
	</div>
	<div id="messageSources" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Messages'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'messageSource-grid'); ?>
	</div>
	<div id="messages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Messages'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'message-grid'); ?>
	</div>
	<div id="missingMessageSources" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Messages Missing a Translation For Language'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'missingMessageSource-grid'); ?>
	</div>
	<div id="routes" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Routes'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'route-grid'); ?>
	</div>
	<div id="sourceViews" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Views'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'viewSource-grid'); ?>
	</div>
	<div id="views" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Views'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'view-grid'); ?>
	</div>
</div>
