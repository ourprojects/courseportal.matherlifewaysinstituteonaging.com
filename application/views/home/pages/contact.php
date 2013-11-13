<?php $this->breadcrumbs = array('{t}Contact Us{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-contact.png'); ?>);">
	<h1 class="bottom">{t}Contact Us{/t}</h1>
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
	<div class="box-sidebar two">
		<h3>{t}Aging in Action{/t}</h3>
		<p>{t}Aging in Action is Mather LifeWays Institute on Aging's monthly e-newsletter and blog containing the latest research news in the field of aging.{/t}</p>
		<a href="http://twitter.com/aginginaction" target="_blank"> <img class="block center" src="<?php echo $this->getImagesUrl('twitter-bird.png'); ?>" alt="Twitter" /></a>
	</div>
</div>
<div class="column-wide">
	<div class="box-white">
		<?php 
		$this->widget(
			'ext.LDContactUsWidget.LDContactUsWidget',
			array(
				'captcha' => array(
					'class' => 'ext.LDContactUsWidget.components.CUReCaptcha',
					'config' => array(
						'reCaptcha' => Yii::app()->getComponent('reCaptcha'),
						'useAjax' => true
					)
				),
				'options' => array(
					'htmlOptions' => array('class' => 'form')
				)
			)
		);
		?>
	</div>
</div>
