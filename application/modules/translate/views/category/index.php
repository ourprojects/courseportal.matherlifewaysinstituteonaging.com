<?php $this->breadcrumbs = array(TranslateModule::t('Message Categories')); ?>
<h1>
	<?php echo TranslateModule::t('Message Categories'); ?>
</h1>
<div id="single-column">
	<div id="categories" class="box-white">
		<?php $this->actionGrid(null, 'category-grid'); ?>
	</div>
</div>
