<?php $this->breadcrumbs = array('{t}Login{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-login.png'); ?>);">
	<h1 class="bottom">{t}Login{/t}</h1>
</div>
<div id="single-column">
	<p>{t}Please complete the form below to login.{/t}</p>
		<p>
			<?php echo $this->renderPartial('forms/login_form', array('Login' => $model)); ?>
		</p>
	<p>
		{t}Please click{/t} <strong><?php echo CHtml::link('{t}here{/t}', $this->createUrl('register')); ?> </strong> {t}if you still need to <strong>register</strong>, or click <strong>{/t}<?php echo CHtml::link('{t}here{/t}', $this->createUrl('forgotPassword')); ?>
		</strong> {t}if you <strong>forgot your password</strong>.{/t}
	</p>
</div>