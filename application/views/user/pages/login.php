<?php $this->breadcrumbs = array(t('Login')); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-login.png'); ?>);">
	<h1 class="bottom"><?php echo t('Login'); ?></h1>
</div>
<div id="single-column">
	<p>
		<?php echo t('Not registered? Click'); ?>
		<?php echo CHtml::link(t('here'), $this->createUrl('register')); ?>
	</p>
	<?php echo $this->renderPartial('forms/login_form', array('model' => $model)); ?>
</div>