<div class="form">
	<?php $form = $this->beginWidget(
			'CActiveForm',
			array(
					'id' => 'register-form',
					'enableAjaxValidation' => true,
					'htmlOptions' => array('enctype' => 'multipart/form-data'),
			));
	?>
	<p class="note">
		<span class="required">*</span><?php echo t('Required'); ?>.
	</p>
	<?php echo $form->errorSummary(array($user, $user_profile, $captcha)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($user, 'email'); ?>
		<?php echo $form->textField($user, 'email'); ?>
		<?php echo $form->error($user, 'email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($user, 'name'); ?>
		<?php echo $form->emailField($user, 'name'); ?>
		<?php echo $form->error($user, 'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user, 'password_no_hash'); ?>
		<?php echo $form->passwordField($user, 'password_no_hash'); ?>
		<?php echo $form->error($user, 'password_no_hash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user, 'password_no_hash_repeat'); ?>
		<?php echo $form->passwordField($user, 'password_no_hash_repeat'); ?>
		<?php echo $form->error($user, 'password_no_hash_repeat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_profile, 'firstname'); ?>
		<?php echo $form->textField($user_profile, 'firstname'); ?>
		<?php echo $form->error($user_profile, 'firstname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($user_profile, 'lastname'); ?>
		<?php echo $form->textField($user_profile, 'lastname'); ?>
		<?php echo $form->error($user_profile, 'lastname'); ?>
	</div>
	
	<div class="row">
		<?php 
		echo $form->labelEx($captcha, 'captcha');
		$this->widget('ext.recaptcha.EReCaptcha',
				array('model' => $captcha, 
						'attribute' => 'captcha',
						'language' => Yii::app()->getLanguage())
				);
		echo $form->error($captcha, 'captcha');
		?>
	</div>
				
	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget();?>
</div>
<!-- form -->
