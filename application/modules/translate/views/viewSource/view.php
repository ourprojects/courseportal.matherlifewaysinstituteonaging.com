<?php $this->breadcrumbs = array(TranslateModule::t('Source Views') => $this->createUrl('index'), TranslateModule::t('Source View Details')); ?>
<h1>
	<?php echo TranslateModule::t('Source View').'&nbsp;'.$viewSource->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $viewSource)); ?>
	</div>
	<div id="categories" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Message Categories'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($viewSource->id, 'category-grid'); ?>
	</div>
	<div id="messageSources" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Messages'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($viewSource->id, 'messageSource-grid'); ?>
	</div>
	<div id="messages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Messages'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($viewSource->id, 'message-grid'); ?>
	</div>
	<div id="languages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Languages'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($viewSource->id, 'language-grid'); ?>
	</div>
	<div id="routes" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Routes'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($viewSource->id, 'route-grid'); ?>
	</div>
	<div id="views" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Views'); ?>
		</h2>
		<hr />
		<?php $this->actionGrid($viewSource->id, 'view-grid'); ?>
	</div>
</div>