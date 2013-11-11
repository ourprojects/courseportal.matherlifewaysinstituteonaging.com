<?php $this->breadcrumbs = array('{t}Forgot your password?{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-forgotpassword.png'); ?>);">
	<h1 class="bottom">{t}Forgot your password?{/t}</h1>
</div>
<div id="sidebar">
    <div class="box-sidebar one">
        <h3>Mather LifeWays Institute on Aging</h3>
        <p class="text-center bold">
            <a href="http://www.matherlifewaysinstituteonaging.com/family-caregivers/" target="_blank">{t}Family Caregivers{/t}</a>
        </p>
        <p>{t}More than 40 million Americans provide care for relatives or friends with a chronic illness such as dementia, stroke, or Parkinson&rsquo;s disease. This takes an enormous physical and emotional toll on caregivers.{/t}</p>
        <p>{t}Mather LifeWays Institute on Aging provides tools and online courses to support caregivers through education, advice, and valuable insights.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('148950191.png'); ?>" alt="Image">
    </div>
</div>
<div class="column-wide">
	<p>{t}Complete the form below and instructions will be sent to the email provided describing how to reset your password.{/t}</p>
	<div class="box-white">
		<?php echo $this->renderPartial('forms/username_form', $models); ?>
	</div>
	<p>
		{t}Please click{/t} <strong><?php echo CHtml::link('{t}here{/t}', $this->createUrl('register')); ?> </strong> {t}if you still need to register.{/t}
	</p>
</div>
