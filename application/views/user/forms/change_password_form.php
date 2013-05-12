<div class="form">
	<?php $form = $this->beginWidget(
			'CActiveForm',
			array(
					'id' => 'change-password-form',
					'enableAjaxValidation' => true,
					'enableClientValidation' => true,
					'htmlOptions' => array('enctype' => 'multipart/form-data'),
			));
	?>
	<p class="note">
		<span class="required">*</span>{t}Required{/t}.
	</p>
	<?php echo $form->errorSummary($ChangePassword); ?>
	
	<div class="row">
		<?php echo $form->labelEx($ChangePassword, 'username_email'); ?>
		<?php echo $form->textField(
				$ChangePassword, 
				'username_email', 
				$ChangePassword->getScenario() === 'change' && Yii::app()->getUser()->getIsGuest() ? array() : array('disabled' => 'disabled')); ?>
		<?php echo $form->error($ChangePassword, 'username_email'); ?>
	</div>
	
	<?php if($ChangePassword->getScenario() === 'change'): ?>
		<div class="row">
			<?php echo $form->labelEx($ChangePassword, 'current_password'); ?>
			<?php echo $form->passwordField($ChangePassword, 'current_password'); ?>
			<?php echo $form->error($ChangePassword, 'current_password'); ?>
		</div>
	<?php endif; ?>
	<div class="row">
		<?php echo $form->labelEx($ChangePassword, 'new_password'); ?>
		<?php echo $form->passwordField($ChangePassword, 'new_password'); ?>
		<?php echo $form->error($ChangePassword, 'new_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ChangePassword, 'new_password_repeat'); ?>
		<?php echo $form->passwordField($ChangePassword, 'new_password_repeat'); ?>
		<?php echo $form->error($ChangePassword, 'new_password_repeat'); ?>
	</div>
				
	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget();?>
</div>
<!-- form -->
