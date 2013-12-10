<?php $this->breadcrumbs = array('{t}Not Registered{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('126922518.png'); ?>);">
    <h1 class="bottom">{t}Online Course Access{/t}</h1>
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
    <p style="color: #000; font-size: 24px;">
        <?php echo t($course->title); ?>
    </p>

    <p>{t}You have not registered for this course yet. Please use the form below to contact support. You will receive a
        response within 24 hours of submitting your request.{/t}</p>

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
