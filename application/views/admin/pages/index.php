<?php $this->breadcrumbs = array(t('Admin')); ?>
<div class="small-masthead">
	<h1 class="bottom"><?php echo t('Admin'); ?></h1>
</div>
<div id="single-column">
<?php echo CHtml::link(t('Courses'), Yii::app()->createUrl('admin/course')); ?>
<br />
<?php echo CHtml::link(t('Translations And Languages'), Yii::app()->createUrl('translate/translate')); ?>
<br />
<?php echo CHtml::link('phpBB', Yii::app()->request->baseUrl . '/phpBB'); ?>
</div>