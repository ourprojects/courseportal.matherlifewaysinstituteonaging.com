<?php $this->breadcrumbs = array(TranslateModule::t('Translations')); ?>
<h1><?php echo TranslateModule::t('Translations'); ?></h1>
<div id="single-column">
	<div id="messages" class="box-white">
	<?php $this->renderPartial('_detailed_grid', array('model' => new Message('search'))); ?>
	</div>
</div>