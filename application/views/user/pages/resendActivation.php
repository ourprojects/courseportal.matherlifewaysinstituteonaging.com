<?php $this->breadcrumbs = array('{t}Account Activation Email?{/t}'); ?>
<div class="small-masthead"
     style="background-image: url(<?php echo $this->getImagesUrl('header-resendactivation.png'); ?>);">
    <h1 class="bottom">{t} Account Activation Email?{/t}</h1>
</div>
<div id="single-column">
    <p>{t}Please enter your username or email address below to have your activation email sent to you again. You must already be registered to receive this email.{/t}</p>
        <?php echo $this->renderPartial('forms/username_form', $models); ?>
    <p>
{t}Please click <?php echo CHtml::link('here', $this->createUrl('register')); ?> if you still need to register.{/t}
    </p>
</div>
