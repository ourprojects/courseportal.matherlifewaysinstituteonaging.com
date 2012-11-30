<?php $this->breadcrumbs = array(t('Admin')); ?>
<h1><?php echo t('Administration'); ?></h1>
<div id="single-column">
	<h2><?php echo CHtml::link(t('API Keys'), $this->createUrl('apiKeys')); ?></h2><br />
	<h2><?php echo CHtml::link(t('Courses'), $this->createUrl('course')); ?></h2><br />
	<h2><?php echo CHtml::link(t('Translations And Languages'), $this->createUrl('/translate/translate')); ?></h2><br />
	<h2><?php echo CHtml::link('phpBB', Yii::app()->request->baseUrl . '/phpBB'); ?></h2>
</div>