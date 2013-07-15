<?php $this->breadcrumbs = array(TranslateModule::t('Source Views')); ?>
<h1>
	<?php echo TranslateModule::t('Source Views'); ?>
</h1>
<div id="single-column">
	<div id="viewSources" class="box-white">
		<?php $this->actionGrid(null, 'viewSource-grid'); ?>
	</div>
</div>
