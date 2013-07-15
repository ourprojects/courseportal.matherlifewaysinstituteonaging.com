<?php $this->breadcrumbs = array(TranslateModule::t('Categorys') => $this->createUrl('index'), TranslateModule::t('Category Details')); ?>
<h1>
	<?php echo TranslateModule::t('Category').'&nbsp;-&nbsp;'.$category->category; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $category)); ?>
	</div>
	<div id="messageSources" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Messages'); ?>
		</h2>
		<?php $this->actionGrid($category->id, 'messageSource-grid'); ?>
	</div>
	<div id="messages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Messages'); ?>
		</h2>
		<?php $this->actionGrid($category->id, 'message-grid'); ?>
	</div>
	<div id="languages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Languages'); ?>
		</h2>
		<?php $this->actionGrid($category->id, 'language-grid'); ?>
	</div>
	<div id="routes" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Routes'); ?>
		</h2>
		<?php $this->actionGrid($category->id, 'route-grid'); ?>
	</div>
	<div id="sourceViews" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Views'); ?>
		</h2>
		<?php $this->actionGrid($category->id, 'viewSource-grid'); ?>
	</div>
	<div id="views" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Views'); ?>
		</h2>
		<?php $this->actionGrid($category->id, 'view-grid'); ?>
	</div>
</div>
