<?php $this->breadcrumbs = array(t('Forgot your password?')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-login.png'); ?>);">
  <h1 class="bottom"><?php echo t('Forgot your password?'); ?></h1>
</div>
<div id="single-column">
  <h2 class="flowers"><?php echo t('Forgot Your Password'); ?></h2>
  <hr />
  <p> <?php echo t('Please enter the email you used to register with us. Once you have submitted your request, instructions will be sent to the email provided describing how to reset your password.'); ?> </p>
  <p> <?php echo CHtml::link(t('Not registered?'), $this->createUrl('register')); ?> </p>
  <?php echo $this->renderPartial('forms/user_maintenance_form', array('models' => $models)); ?> </div>
