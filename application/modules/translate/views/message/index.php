<?php $this->breadcrumbs = array(TranslateModule::t('Translations')); ?>
<h1><?php echo TranslateModule::t('Translations')?></h1>
<?php
$this->widget('translate.widgets.message.TranslationGrid', 
		array('id' => 'messages-grid', 'messagesModel' => $messages)); 
?>