<?php $this->breadcrumbs = array('{t}Contact Us{/t}'); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-contact.png'); ?>);">
	<h1 class="bottom">{t}Contact Us{/t}</h1>
</div>
<div id="single-column">
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