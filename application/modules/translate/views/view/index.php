<?php $this->breadcrumbs = array(TranslateModule::t('Views')); ?>
<h1><?php echo TranslateModule::t('Views'); ?></h1>
<div id="single-column">
	<div id="views" class="box-white">
		<?php $this->renderPartial('_detailed_grid', array('model' => new ViewSource('search'))); ?>
	</div>
</div>