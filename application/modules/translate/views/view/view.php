<?php $this->breadcrumbs = array(TranslateModule::t('Translated Views') => $this->createUrl('index'), TranslateModule::t('Translated View Details')); ?>
<h1>
<?php echo TranslateModule::t('View:').' '.$source->id; ?>
</h1>
<div id="translatedView">
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