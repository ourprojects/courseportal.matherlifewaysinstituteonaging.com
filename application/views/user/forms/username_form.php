<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'user-maintenance-form',
			'enableAjaxValidation' => true,
)); ?>
	
	<?php echo $form->errorSummary(array($UserNameEmail, $Captcha)); ?>
	<div class="row">
		<?php echo $form->labelEx($UserNameEmail,'name_email'); ?>
		<?php echo $form->textField($UserNameEmail,'name_email'); ?>
		<?php echo $form->error($UserNameEmail,'name_email'); ?>
	</div>
	
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

	<?php $this->endWidget(); ?>
</div>