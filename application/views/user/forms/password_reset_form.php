<div class="form">
	<?php $form = $this->beginWidget(
			'CActiveForm',
			array(
					'id' => 'password-reset-form',
					'enableAjaxValidation' => true,
					'htmlOptions' => array('enctype' => 'multipart/form-data'),
			));
	?>
	<p class="note">
		<span class="required">*</span><?php echo t('Required'); ?>.
	</p>
	<?php echo $form->errorSummary($user); ?>
	
	<div class="row">
		<?php echo $form->labelEx($user, 'email'); ?>
		<?php echo $form->emailField($user, 'email', array('class' => 'wide_200px', 'disabled' => 'disabled')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user, 'password_no_hash'); ?>
		<?php echo $form->passwordField($user, 'password_no_hash', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($user, 'password_no_hash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user, 'password_no_hash_repeat'); ?>
		<?php echo $form->passwordField($user, 'password_no_hash_repeat', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($user, 'password_no_hash_repeat'); ?>
	</div>
				
	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget();?>
</div>
<!-- form -->
