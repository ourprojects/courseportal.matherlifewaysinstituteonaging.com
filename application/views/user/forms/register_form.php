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
		<?php echo t('<span class="required">*</span>Required.'); ?>
	</p>
	<?php echo $form->errorSummary($models); ?>
	
	<div class="row">
		<?php echo $form->labelEx($models['user'], 'email'); ?>
		<?php echo $form->emailField($models['user'], 'email', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user'], 'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['user'], 'password_no_hash'); ?>
		<?php echo $form->passwordField($models['user'], 'password_no_hash', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user'], 'password_no_hash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['user'], 'password_no_hash_repeat'); ?>
		<?php echo $form->passwordField($models['user'], 'password_no_hash_repeat', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user'], 'password_no_hash_repeat'); ?>
	</div>

	<div class="row">
		<label for="UserProfile_firstname" class="required">First Name <span class="required">*</span></label>
		<?php echo $form->textField($models['user_profile'], 'firstname', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user_profile'], 'firstname'); ?>
	</div>
	
	<div class="row">
		<label for="UserProfile_lastname" class="required">Last Name <span class="required">*</span></label>
		<?php echo $form->textField($models['user_profile'], 'lastname', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user_profile'], 'lastname'); ?>
	</div>
	
	<div class="row">
		<?php 
		echo $form->labelEx($models['captcha'], 'captcha');
		$this->widget('ext.recaptcha.EReCaptcha',
				array('model' => $models['captcha'], 
						'attribute' => 'captcha',
						'language' => Yii::app()->getLanguage())
				);
		echo $form->error($models['captcha'], 'captcha');
		?>
	</div>
				
	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget();?>
</div>
<!-- form -->
