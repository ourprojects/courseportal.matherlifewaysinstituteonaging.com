<?php $this->breadcrumbs = array('{t}Login{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-login.png'); ?>);">
	<h1 class="bottom">{t}Login{/t}</h1>
</div>
<div id="sidebar">
	<div class="box-sidebar two">
		<h3>Mather LifeWays Institute on Aging</h3>
		<p class="text-center bold">
			<a href="http://www.matherlifewaysinstituteonaging.com/family-caregivers/" target="_blank">{t}Family Caregivers{/t}</a>
		</p>
		<p>{t}More than 40 million Americans provide care for relatives or friends with a chronic illness such as dementia, stroke, or Parkinson&rsquo;s disease. This takes an enormous physical and emotional toll on caregivers.{/t}</p>
		<p>{t}Mather LifeWays Institute on Aging provides tools and online courses to support caregivers through education, advice, and valuable insights. Preparation and self-care can lighten the load and elevate the experience of caring for a loved one, increasing the quality of life for all parties involved.{/t}</p>
		<img style="margin: 0px; padding: 0px; -webkit-border-bottom-right-radius: 5px; -webkit-border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px;" src="<?php echo $this->getImagesUrl('148950191.png'); ?>" alt="Image">
	</div>
</div>
<div class="column-wide">
	<h2 class="flowers">Login</h2>
	<p>{t}Please complete the form below to login.{/t}</p>
	<div class="box-white">
		<p>
			<?php echo $this->renderPartial('forms/login_form', array('Login' => $model)); ?>
		</p>
	</div>
	<p>
		{t}Please click{/t} <strong><?php echo CHtml::link('{t}here{/t}', $this->createUrl('register')); ?> </strong> {t}if you still need to <strong>register</strong>, or click <strong>{/t}<?php echo CHtml::link('{t}here{/t}', $this->createUrl('forgotPassword')); ?>
		</strong> {t}if you <strong>forgot your password</strong>.{/t}
	</p>
</div>
