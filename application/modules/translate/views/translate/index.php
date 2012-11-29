<h1><?php echo TranslateModule::t('Translation Management')?></h1><br/>
<h2><?php echo CHtml::link(TranslateModule::t('Accepted Languages'), $this->createUrl('acceptedLanguage/')); ?></h2><br/>
<h2><?php echo CHtml::link(TranslateModule::t('Translations'), $this->createUrl('message/')); ?></h2><br/>
<h2><?php echo CHtml::link(TranslateModule::t('Translation Sources'), $this->createUrl('messageSource/')); ?></h2><br/>
