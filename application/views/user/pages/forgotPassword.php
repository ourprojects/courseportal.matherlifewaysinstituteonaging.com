<?php $this->breadcrumbs = array('{t}Forgot your password?{/t}'); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-forgotpassword.png'); ?>);">
	<h1 class="bottom">{t}Forgot your password?{/t}</h1>
</div>
<div id="single-column">
	<p>{t}Enter your username or email below and instructions will be sent to the email provided describing how to reset your password.{/t}</p>
		<?php echo $this->renderPartial('forms/username_form', $models); ?>
	<p>
		{t}Please click <?php echo CHtml::link('here', $this->createUrl('register')); ?> if you still need to register.{/t}
	</p>
</div>