<h1><?php echo TranslateModule::t('Translation Sources')?></h1>
<?php
var_dump(MessageSource::model()->missingTranslation(50)->find());
//var_dump(Message::model()->find(MessageSource::model()->getMissingCriteria(MessageSource::model()->getSearchCriteria())));
//$this->widget('translate.widgets.MessageSourceGrid'); 
?>