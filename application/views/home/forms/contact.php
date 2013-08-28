<p>{t}Please complete this form to contact us.{/t}</p>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm',
			array('id' => 'contact-form',
			'enableAjaxValidation' => true,
			'enableClientValidation' => true)); ?>

	<p class="note">
		<span class="required">*</span>{t}Required{/t}.
	</p>

	<?php echo $form->errorSummary(array($ContactUs, $EReCaptchaForm)); ?>

	<div class="row">
		<?php echo $form->labelEx($ContactUs,'name'); ?>
		<?php echo $form->textField($ContactUs,'name'); ?>
		<?php echo $form->error($ContactUs, 'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ContactUs,'email'); ?>
		<?php echo $form->textField($ContactUs,'email'); ?>
		<?php echo $form->error($ContactUs, 'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ContactUs,'subject'); ?>
		<?php echo $form->textField($ContactUs,'subject',array('size'=>60)); ?>
		<?php echo $form->error($ContactUs, 'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ContactUs,'body'); ?>
		<?php echo $form->textArea($ContactUs,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($ContactUs, 'body'); ?>
	</div>

	<div class="row">
		<?php 
		echo $form->labelEx($EReCaptchaForm, 'captcha');
		$this->widget('ext.recaptcha.EReCaptcha',
				array(
						'publicKey' => Yii::app()->params['reCaptcha']['publicKey'],
						'model' => $EReCaptchaForm,
						'attribute' => 'captcha',
						'language' => Yii::app()->getLanguage()
				)
		);
		echo $form->error($EReCaptchaForm, 'captcha');
		?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget(); ?>

</div>
<!-- form -->