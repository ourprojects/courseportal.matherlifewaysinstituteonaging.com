<?php $this->breadcrumbs = array(TranslateModule::t('Source Messages') => $this->createUrl('index'), TranslateModule::t('Source Message Details')); ?>
<h1>
	<?php echo TranslateModule::t('Source Message').'&nbsp;'.$messageSource->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $messageSource)); ?>
	</div>
	<div id="categories" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Message Categories'); ?>
		</h2>
		<?php $this->actionGrid($messageSource->id, 'category-grid'); ?>
	</div>
	<div id="messages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Messages'); ?>
		</h2>
		<?php $this->actionGrid($messageSource->id, 'message-grid'); ?>
	</div>
	<div id="languages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Languages'); ?>
		</h2>
		<?php $this->actionGrid($messageSource->id, 'language-grid'); ?>
	</div>
	<div id="missingLanguages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Languages Missing A Translation For This Source Message'); ?>
		</h2>
		<?php $this->actionGrid($messageSource->id, 'missingLanguage-grid'); ?>
	</div>
	<div id="routes" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Routes'); ?>
		</h2>
		<?php $this->actionGrid($messageSource->id, 'route-grid'); ?>
	</div>
	<div id="sourceViews" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Source Views'); ?>
		</h2>
		<?php $this->actionGrid($messageSource->id, 'viewSource-grid'); ?>
	</div>
	<div id="views" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Translated Views'); ?>
		</h2>
		<?php $this->actionGrid($messageSource->id, 'view-grid'); ?>
	</div>
</div>
