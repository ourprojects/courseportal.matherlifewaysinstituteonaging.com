<?php $this->breadcrumbs = array(TranslateModule::t('Routes') => $this->createUrl('index'), TranslateModule::t('Route Details')); ?>
<h1>
	<?php echo TranslateModule::t('Route').'&nbsp;'.$route->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $route)); ?>
	</div>
	<div id="categories" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Message Categories'); ?>
		</h2>
		<?php $this->actionGrid($route->id, 'category-grid'); ?>
	</div>
	<div id="messageSources" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Messages'); ?>
		</h2>
		<?php $this->actionGrid($route->id, 'messageSource-grid'); ?>
	</div>
	<div id="messages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Messages'); ?>
		</h2>
		<?php $this->actionGrid($route->id, 'message-grid'); ?>
	</div>
	<div id="languages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Languages'); ?>
		</h2>
		<?php $this->actionGrid($route->id, 'language-grid'); ?>
	</div>
	<div id="sourceViews" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Views'); ?>
		</h2>
		<?php $this->actionGrid($route->id, 'viewSource-grid'); ?>
	</div>
	<div id="views" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Views'); ?>
		</h2>
		<?php $this->actionGrid($route->id, 'view-grid'); ?>
	</div>
</div>
