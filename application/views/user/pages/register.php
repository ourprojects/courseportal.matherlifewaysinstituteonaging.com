<?php $this->breadcrumbs = array(t('Register')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
  <h1 class="bottom">{t}Register{/t}</h1>
</div>
<div id="single-column">
  <h2 class="flowers">{t}Register{/t}</h2>
  <hr />
  <p>{t}Please register here to access this site. After completing the fields below, you will be sent a verification email to authenticate your email address. If you are a EMPLOYEE at one of the following COMPANIES, YOU MUST use your EMPLOYEE EMAIL address TO REGISTER:{/t}</p>
  <ul>
    <li>IBM</li>
    <li>ExxonMobil</li>
    <li>Merck</li>
    <li>Mather LifeWays</li>
  </ul>
  <div class="box-white"> <?php echo $this->renderPartial('forms/register_form', $models); ?></div>
  <p> <?php echo CHtml::link(t('Resend Activation Email'), $this->createUrl('resendActivation')); ?> </p>
</div>
