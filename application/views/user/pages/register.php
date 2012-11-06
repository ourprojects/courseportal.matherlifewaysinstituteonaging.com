<?php $this->breadcrumbs = array(t('Register')); ?>
<div class="small-masthead" style="background-image: url(<?php echo Yii::app()->theme->getImagesUrl('header-register.png'); ?>);">
	<h1 class="bottom"><?php echo t('Register'); ?></h1>
</div>
<div id="single-column">
<?php echo $this->renderPartial('forms/register_form', array('models' => $models)); ?>
</div>