<?php $this->breadcrumbs = array(t('Register')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
  <h1 class="bottom"><?php echo t('Register'); ?></h1>
</div>
<div id="single-column">
  <p> <?php echo t('Lost your account activation email? Click'); ?> <?php echo CHtml::link(t('here'), $this->createUrl('resendActivation')); ?> </p>
  
  <!-- disclaimer text here --> 
  
  <?php echo t('Once logged on to the course portal, no refund is available.'); ?>
  </p>
  <?php echo $this->renderPartial('forms/register_form', array('models' => $models)); ?> </div>
