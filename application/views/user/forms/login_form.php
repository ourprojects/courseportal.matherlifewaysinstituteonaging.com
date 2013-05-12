<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'login-form',
			'enableAjaxValidation' => true,
			'enableClientValidation' => true,
)); ?>

	<p class="note">
		<span class="required">*</span>{t}Required{/t}.
	</p>
	<?php echo $form->errorSummary($Login); ?>
	<div class="row">
		<?php echo $form->labelEx($Login,'username_email'); ?>
		<?php echo $form->textField($Login,'username_email'); ?>
		<?php echo $form->error($Login,'username_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Login,'password'); ?>
		<?php echo $form->passwordField($Login,'password'); ?>
		<?php echo $form->error($Login,'password'); ?>
	</div>

	<div class="row remember_me">
		<?php echo $form->labelEx($Login,'remember_me'); ?>
		<?php echo $form->checkbox($Login,'remember_me'); ?>
		<?php echo $form->error($Login,'remember_me'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Login')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>
<!-- form -->
