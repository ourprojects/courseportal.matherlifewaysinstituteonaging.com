<?php $this->breadcrumbs = array(TranslateModule::t('Source Messages')); ?>
<h1>
	<?php echo TranslateModule::t('Source Messages'); ?>
</h1>
<div id="single-column">
	<div id="messageSources" class="box-white">
		<?php $this->actionGrid(null, 'messageSource-grid'); ?>
	</div>
</div>
