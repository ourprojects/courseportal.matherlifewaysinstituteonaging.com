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
	<?php echo $form->errorSummary(array($Register, $Captcha)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($Register, 'email'); ?>
		<?php echo $form->emailField($Register, 'email'); ?>
		<?php echo $form->error($Register, 'email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($Register, 'name'); ?>
		<?php echo $form->textField($Register, 'name'); ?>
		<?php echo $form->error($Register, 'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Register, 'new_password'); ?>
		<?php echo $form->passwordField($Register, 'new_password'); ?>
		<?php echo $form->error($Register, 'new_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Register, 'new_password_repeat'); ?>
		<?php echo $form->passwordField($Register, 'new_password_repeat'); ?>
		<?php echo $form->error($Register, 'new_password_repeat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Register, 'firstname'); ?>
		<?php echo $form->textField($Register, 'firstname'); ?>
		<?php echo $form->error($Register, 'firstname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($Register, 'lastname'); ?>
		<?php echo $form->textField($Register, 'lastname'); ?>
		<?php echo $form->error($Register, 'lastname'); ?>
	</div>
	
	<?php if(isset($Register->agreement_id)): ?>
	<div class="row">
		<?php echo $form->labelEx($Register, 'agree'); ?>
		<?php echo $form->checkBox($Register, 'agree'); ?>
		<?php echo $form->error($Register, 'agree'); ?>
		<?php echo CHtml::link(t('View details'), $this->createUrl('/agreement/' . $Register->agreement_id), array('target' => '_blank')); ?>
	</div>
	<?php endif; ?>
	
	<div class="row">
		<?php 
		echo $form->labelEx($Captcha, 'captcha');
		$this->widget('ext.recaptcha.EReCaptcha',
				array('model' => $Captcha, 
						'attribute' => 'captcha',
						'language' => Yii::app()->getLanguage())
				);
		echo $form->error($Captcha, 'captcha');
		?>
	</div>
				
	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget();?>
</div>
<!-- form -->
