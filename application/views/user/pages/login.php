<div class="small-masthead" style="background-image: url(<?php echo Yii::app()->theme->getImagesUrl(); ?>/header-login.png);">
	<h1 class="bottom"><?php echo t('Login'); ?></h1>
</div>
<div id="single-column">
	<?php
	$this->pageTitle = Yii::app()->name . ' - '.t('Login');
	$this->breadcrumbs = array( t('Login') );
	?>


	<p><?php echo t('Please fill out the following form with your login credentials:'); ?></p>
	<p>
		<?php echo t('If you have not yet registered with us please click'); ?>
		<?php echo CHtml::link(t('here'), $this->createUrl('register')); ?>
	</p>

	<?php echo $this->renderPartial('forms/login_form', array('model' => $model)); ?>
</div>