<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'user-maintenance-form',
			'enableAjaxValidation' => true,
)); ?>
	
	<?php echo $form->errorSummary($models); ?>
	<div class="row">
		<?php echo $form->labelEx($models['UserMaintenance'],'email'); ?>
		<?php echo $form->textField($models['UserMaintenance'],'email'); ?>
		<?php echo $form->error($models['UserMaintenance'],'email'); ?>
	</div>
	
	<div class="row">
		<?php 
		echo $form->labelEx($models['Captcha'], 'captcha');
		$this->widget('ext.recaptcha.EReCaptcha',
				array('model' => $models['Captcha'], 
						'attribute' => 'captcha',
						'language' => Yii::app()->getLanguage())
				);
		echo $form->error($models['Captcha'], 'captcha');
		?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>