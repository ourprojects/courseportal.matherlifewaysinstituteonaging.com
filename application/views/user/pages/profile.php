<?php $this->breadcrumbs = array(t('Profile')); ?>
<div class="small-masthead" style="background-image: url(<?php echo Yii::app()->theme->getImagesUrl(); ?>/header-register.png);">
	<h1 class="bottom"><?php echo t('Profile'); ?></h1>
</div>
<div id="single-column">
<?php echo $this->renderPartial('forms/profile_form', array('models' => $models)); ?>
</div>