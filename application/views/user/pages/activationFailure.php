<?php $this->breadcrumbs = array('{t}Activation Failed{/t}'); ?>
<p class="header">{t}Oops! An error occurred while trying to activate your account.{/t}</p>
<p class="header">
	{t}Please contact us by clicking{/t}&nbsp;
	<?php echo CHtml::link('{t}here{/t}', $this->createUrl('home/contact')); ?>
	&nbsp;{t}if you need assistance completing the registration process.{/t}
</p>
