<?php $this->breadcrumbs = array('{t}Register{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
	<h1 class="bottom">{t}Register{/t}</h1>
</div>
<div id="sidebar">
	<div class="box-sidebar one">
		<h3>Mather LifeWays Institute on Aging</h3>
		<p class="text-center bold">
			<a href="http://www.matherlifewaysinstituteonaging.com/products/" target="_blank">{t}Online Store {/t}</a>
		</p>
		<p>{t}Mather LifeWays Institute on Aging provides tools and online courses to support caregivers through education, advice, and valuable insights. Preparation and self-care can lighten the load and elevate the experience of caring for a loved one, increasing the quality of life for all parties involved.{/t}</p>
		<p class="text-center bold">
			<a href="http://www.matherlifewaysinstituteonaging.com/aspire/" target="_blank">ASPIRE: Customer Rewards Program</a>
		</p>
		<img class="block center" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;" src="<?php echo $this->getImagesUrl('170469223sidebar1.png'); ?>" alt="EAP Assocation Logo">
	</div>
	<div class="box-sidebar one">
		<h3 class="text-center">{t}Did you know?{/t}</h3>
		<h5 class="text-center">
			<a href="http://www.aarp.org/" target="_blank">AARP</a>
		</h5>
		<p>
			<a href="http://www.eapassn.org/files/public/EACCroster2012.pdf" target="_blank">{t}The AARP website provides a list of tips for those providing care at a distance.{/t}</a>
		</p>
		<p>
			<a href="http://www.eapassn.org/" target="_blank">
				<img class="block center" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;" src="<?php echo $this->getImagesUrl('162496418sidebar1.png'); ?>" alt="EAP Assocation Logo">
			</a>
		</p>
		<p>{t} Caregiving from afar is no easy task. Here are some helpful tips to keep in mind while contemplating caring for your parent from a distance..{/t}</p>
		<p class="text-center bold">
			<a href="http://www.aarp.org/relationships/caregiving-resource-center/info-09-2010/pc_tips_for_long_distance_caregiver.html" target="_blank">{t}Tips for the Long-Distance Caregiver{/t}</a>
		</p>
		<p>
			<a href="http://www.eapassn.org/" target="_blank"></a>
		</p>
	</div>
</div>
<div class="column-wide">
	<h2 class="flowers">{t} Register {/t}</h2>
	<p>{t}Complete the fields below to register. You will be sent a verification email to authenticate your email address.{/t}
	<p class="bold">{t}Employees of IBM, Exxon Mobil, Merck and Mather LifeWays must register with their work email.{/t}</p>
	<div class="box-white">
		<?php echo $this->renderPartial('forms/register_form', $models); ?>
	</div>
	<p>
		{t} Please click{/t} <strong><?php echo CHtml::link('{t}here{/t}', $this->createUrl('resendActivation')); ?></strong> {t} to request you activation email again. {/t}
	</p>
</div>
