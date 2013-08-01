<?php $this->breadcrumbs = array('{t}Forgot your password?{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-forgotpassword.png'); ?>);">
	<h1 class="bottom">{t}Forgot your password?{/t}</h1>
</div>
<div id="sidebar">
	<div class="box-sidebar one">
		<h3>Mather LifeWays Institute on Aging</h3>
		<p class="text-center bold">
			<a href="http://www.matherlifewaysinstituteonaging.com/products/" target="_blank">{t}Online Store {/t}</a>
		</p>
		<p>{t}Mather LifeWays Institute on Aging provides tools and online courses to support caregivers through education, advice, and valuable insights. Preparation and self-care can lighten the load and elevate the experience of caring for a loved one, increasing the quality of life for all parties involved.{/t}</p>
		<p class="text-center bold">
			<a href="http://www.matherlifewaysinstituteonaging.com/aspire/" target="_blank">{t}ASPIRE: Customer Rewards Program{/t}</a>
		</p>
		<img class="block center" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;" src="<?php echo $this->getImagesUrl('170469223sidebar1.png'); ?>" alt="EAP Assocation Logo">
	</div>
</div>
<div class="column-wide">
	<h2 class="flowers">{t}Forgot Your Password{/t}</h2>
	<p>{t}Complete the form below and instructions will be sent to the email provided describing how to reset your password.{/t}</p>
	<div class="box-white">
		<?php echo $this->renderPartial('forms/username_form', $models); ?>
	</div>
	<p>
		{t}Please click{/t} <strong><?php echo CHtml::link('{t}here{/t}', $this->createUrl('register')); ?></strong> {t}if you still need to register.{/t}
	</p>
</div>
