<?php $this->breadcrumbs = array(TranslateModule::t('Languages')); ?>
<h1>
	<?php echo TranslateModule::t('Languages'); ?>
</h1>
<div id="single-column">
	<div id="languages" class="box-white">
		<?php $this->actionGrid(null, 'language-grid'); ?>
	</div>
</div>
