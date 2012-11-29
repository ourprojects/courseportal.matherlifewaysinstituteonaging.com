<?php $this->breadcrumbs = array(TranslateModule::t('Messages')); ?>
<?php
$this->widget('translate.widgets.messageSource.SourceGrid', 
		array('id' => 'source-grid', 'sources' => $sources)
); 
?>