<?php $this->breadcrumbs = array(TranslateModule::t('Message Categories')); ?>
<h1><?php echo TranslateModule::t('Message Categories'); ?></h1>
<div id="single-column">
	<div id="categories" class="box-white">
		<?php $this->renderPartial('_detailed_grid', array('model' => new Category('search'))); ?>
	</div>
</div>