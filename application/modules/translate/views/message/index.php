<?php $this->breadcrumbs = array(TranslateModule::t('Translations')); ?>
<h1><?php echo TranslateModule::t('Translations'); ?></h1>
<?php 
$this->renderPartial(
		'_detailed_grid', 
		array(
				'filter' => $messages, 
				'dataProvider' => new CActiveDataProvider($messages, array('criteria' => $messages->with('source')->search()->getDbCriteria()))
		)
); 
?>