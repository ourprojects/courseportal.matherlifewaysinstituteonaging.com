<h1><?php echo t('Admin'); ?></h1>
<div id="single-column">
<?php
$this->pageTitle = Yii::app()->name . ' - '.t('Admin');
$this->breadcrumbs = array(
		t('Admin'),
);
?>

<?php echo Yii::app()->translate->editLink(); ?>
<br />
<?php echo Yii::app()->translate->missingLink(); ?>
<br />
<?php echo CHtml::link('phpBB', Yii::app()->request->baseUrl . '/phpBB'); ?>

</div>