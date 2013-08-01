<?php $this->breadcrumbs = array('{t}Contact Us{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-contact.png'); ?>);">
	<h1 class="bottom">{t}Contact Us{/t}</h1>
</div>
<div id="sidebar">
	<div class="box-sidebar one">
		<h3>{t}Aging in Action{/t}</h3>
		<p>{t}Aging in Action is Mather LifeWays Institute on Aging's monthly e-newsletter and blog containing the latest research news in the field of aging.{/t}</p>
		<a href="http://twitter.com/aginginaction" target="_blank">
			<img class="block center" src="<?php echo $this->getImagesUrl('twitter-bird.png'); ?>" alt="Twitter" />
		</a>
	</div>
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
	<h2 class="flowers">{t}Contact Us{/t}</h2>
	<div class="box-white">
		<?php echo $this->renderPartial('forms/contact', $models); ?>
	</div>
</div>
