<?php $this->breadcrumbs = array(TranslateModule::t('Accepted Languages')); ?>
<h1><?php echo TranslateModule::t('Accepted Languages'); ?></h1>
<?php
$this->widget('translate.widgets.acceptedLanguage.AcceptedLanguageGrid', 
		array('id' => 'acceptedLanguage-grid', 'acceptedLanguagesModel' => $acceptedLanguages)); 
?>