<?php $this->breadcrumbs = array('{t}Forgot your password?{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-login.png'); ?>);">
	<h1 class="bottom">{t}Forgot your password?{/t}</h1>
</div>
<div id="single-column">
	<h2 class="flowers">{t}Forgot Your Password{/t}</h2>
	<hr />
	<p>
		{t}Please enter your user name or the email you used to register with us. Once you have submitted your request, instructions will be sent to the email provided describing how to reset your password.{/t}
	</p>
	<p>
		<?php echo CHtml::link('{t}Not registered?{/t}', $this->createUrl('register')); ?>
	</p>
	<?php echo $this->renderPartial('forms/username_form', $models); ?>
</div>
