<?php $this->breadcrumbs = array('{t}Register{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
	<h1 class="bottom">{t}Register{/t}</h1>
</div>

<div id="single-column">
    <ol>
        <li>{t}Complete the fields below.{/t}</li>
        <li>{t}Check your email. You will be sent a verification email to authenticate your email address.{/t}</li>
        <li>{t}That's all! You're done.{/t}</li>
    </ol>

		<?php echo $this->renderPartial('forms/register_form', $models); ?>

	<p>
		{t} Please click{/t} <strong><?php echo CHtml::link('{t}here{/t}', $this->createUrl('resendActivation')); ?> </strong> {t} to request your activation email again. {/t}
	</p>
</div>