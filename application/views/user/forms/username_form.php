<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'user-maintenance-form',
			'enableAjaxValidation' => true,
)); ?>
	
	<?php echo $form->errorSummary(array($UserNameEmail, $EReCaptchaForm)); ?>
	<div class="row">
		<?php echo $form->labelEx($UserNameEmail,'name_email'); ?>
		<?php echo $form->textField($UserNameEmail,'name_email'); ?>
		<?php echo $form->error($UserNameEmail,'name_email'); ?>
	</div>
	
	<div class="row">
		<?php 
		echo $form->labelEx($EReCaptchaForm, 'captcha');
		$this->widget('ext.recaptcha.EReCaptcha',
					array(
							'publicKey' => Yii::app()->params['reCaptcha']['publicKey'],
							'model' => $EReCaptchaForm,
							'attribute' => 'captcha',
							'language' => Yii::app()->getLanguage()
					)
		);
		echo $form->error($EReCaptchaForm, 'captcha');
		?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>