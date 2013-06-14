<?php $this->breadcrumbs = array(TranslateModule::t('Message Categories') => $this->createUrl('index'), TranslateModule::t('Category Details')); ?>
<h1>
<?php echo TranslateModule::t('Category #').$category->id.' - '.$category->category; ?>
</h1>
<div id="category">
	<div id="messages">
		<h2><?php echo TranslateModule::t('Messages:'); ?></h2>
	</div>
	<div id="translations">
		<h2><?php echo TranslateModule::t('Translations:'); ?></h2>
	</div>
	<div id="missingTranslations">
		<h2><?php echo TranslateModule::t('Missing Translations:'); ?></h2>
	</div>
</div>