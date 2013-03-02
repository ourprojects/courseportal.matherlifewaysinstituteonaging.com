<?php $this->breadcrumbs = array(t('Login')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-login.png'); ?>);">
  <h1 class="bottom"><?php echo t('Login'); ?></h1>
</div>
<div id="single-column">
  <p> <?php echo CHtml::link(t('Not registered?'), $this->createUrl('register')); ?> <?php echo t('  - OR -  '); ?> <?php echo CHtml::link(t('Forgot Password?'), $this->createUrl('forgotPassword')); ?> </p>
  <?php echo $this->renderPartial('forms/login_form', array('model' => $model)); ?> </div>
