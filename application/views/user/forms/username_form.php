<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'user-maintenance-form',
			'enableAjaxValidation' => true,
)); ?>

	<?php echo $form->errorSummary(array($UserNameEmail, $reCaptchaWidget->model)); ?>
	<div class="row">
		<?php echo $form->labelEx($UserNameEmail, 'name_email'); ?>
		<?php echo $form->textField($UserNameEmail, 'name_email', array('size' =>45)); ?>
		<?php echo $form->error($UserNameEmail, 'name_email'); ?>
	</div>

	<div class="row">
		<?php 
		echo $form->labelEx($reCaptchaWidget->model, 'captcha');
		$reCaptchaWidget->run();
		echo $form->error($reCaptchaWidget->model, 'captcha');
		?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>
