<div class="form">
	<?php $form = $this->beginWidget(
			'CActiveForm',
			array(
					'id' => 'register-form',
					'enableAjaxValidation' => true,
					'enableClientValidation' => true,
					'htmlOptions' => array('enctype' => 'multipart/form-data'),
			));
	?>
	<p class="note">
		<span class="required">*</span>{t}Required{/t}.
	</p>
	<?php echo $form->errorSummary(array($CPUser, $reCaptchaWidget->model)); ?>

	<div class="row">
		<?php echo $form->labelEx($CPUser, 'email'); ?>
		<?php echo $form->emailField($CPUser, 'email', array('size' =>45)); ?>
		<?php echo $form->error($CPUser, 'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($CPUser, 'name'); ?>
		<?php echo $form->textField($CPUser, 'name', array('size' =>45)); ?>
		<?php echo $form->error($CPUser, 'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($CPUser, 'new_password'); ?>
		<?php echo $form->passwordField($CPUser, 'new_password', array('size' =>45)); ?>
		<?php echo $form->error($CPUser, 'new_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($CPUser, 'new_password_repeat'); ?>
		<?php echo $form->passwordField($CPUser, 'new_password_repeat', array('size' =>45)); ?>
		<?php echo $form->error($CPUser, 'new_password_repeat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($CPUser, 'firstname'); ?>
		<?php echo $form->textField($CPUser, 'firstname', array('size' =>45)); ?>
		<?php echo $form->error($CPUser, 'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($CPUser, 'lastname'); ?>
		<?php echo $form->textField($CPUser, 'lastname', array('size' =>45)); ?>
		<?php echo $form->error($CPUser, 'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($UserAgreement, 'agree'); ?>
		<?php echo $form->checkBox($UserAgreement, 'agree'); ?>
		<?php echo $form->error($UserAgreement, 'agree'); ?>
		<?php echo CHtml::link(t('View details'), $this->createUrl('/agreement/' . $UserAgreement->agreement_id), array('target' => '_blank')); ?>
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

	<?php $this->endWidget();?>
</div>
<!-- form -->
