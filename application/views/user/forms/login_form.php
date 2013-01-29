<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'login-form',
			'enableAjaxValidation' => true,
)); ?>

	<p class="note">
		<span class="required">*</span><?php echo t('Required'); ?>.
	</p>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_no_hash'); ?>
		<?php echo $form->passwordField($model,'password_no_hash'); ?>
		<?php echo $form->error($model,'password_no_hash'); ?>
	</div>

	<div class="row remember_me">
		<?php echo CHtml::checkBox('remember_me'); ?>
		<?php echo CHtml::label(t('Remember me next time.'),'remember_me'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Login')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>
<!-- form -->
