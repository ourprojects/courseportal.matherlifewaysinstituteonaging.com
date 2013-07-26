<?php $this->breadcrumbs = array('{t}Registration Confirmed{/t}'); ?>
<div id="single-column">
	<h2 class="flowers">{t}Thank you for registering!{/t}</h2>
	<p class="header">{t}Thank you for registering with us! You are now
		one-step closer to gaining access to the Online Course Portal. A
		confirmation email has been sent to the email address you provided on
		the previous page. Please click the link in that email to complete
		your account registration.{/t}</p>
	<p class="header">
		{t}Please{/t}
		<?php echo CHtml::link(t('email'), $this->createUrl('home/contact')); ?>
		{t}us if you need assistance completing the registration process.{/t}
	</p>
</div>
