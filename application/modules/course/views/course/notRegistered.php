<?php $this->breadcrumbs = array('{t}Not Registered{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('126922518.png'); ?>);">
    <h1 class="bottom">{t}Online Course Access{/t}</h1>
</div>

<div class="single-column">
<h2>{t}You are not registered.{/t}</h2>

    <p>{t}You have not registered for "<?php echo t($course->title); ?>" yet. Please use the form below to contact support. You will receive a response within 24 hours of submitting your request.{/t}</p>

    <div>
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