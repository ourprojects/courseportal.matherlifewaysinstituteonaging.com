<?php $this->breadcrumbs = array(TranslateModule::t('Routes')); ?>
<h1>
	<?php echo TranslateModule::t('Routes'); ?>
</h1>
<div id="single-column">
	<div id="routes" class="box-white">
		<?php $this->actionGrid(null, 'route-grid'); ?>
	</div>
</div>
