<?php $this->breadcrumbs = array(TranslateModule::t('Message Categories')); ?>
<h1><?php echo TranslateModule::t('Message Categories'); ?></h1>
<?php 
$this->renderPartial(
		'_detailed_grid', 
		array(
				'filter' => $categories, 
				'dataProvider' => new CActiveDataProvider($categories, array('criteria' => $categories->with('messageCount')->search()->getDbCriteria()))
		)
); 
?>