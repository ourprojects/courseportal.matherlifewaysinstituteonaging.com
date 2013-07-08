<?php $this->breadcrumbs = array(t('Lost your account activation Email?')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-login.png'); ?>);">
  <h1 class="bottom">{t}Lost your account activation Email?{/t}</h1>
</div>
<div id="single-column">
  <p> <?php echo CHtml::link(t('Not registered?'), $this->createUrl('register')); ?> </p>
  <?php echo $this->renderPartial('forms/username_form', $models); ?> </div>
