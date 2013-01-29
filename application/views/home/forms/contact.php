<p><?php echo t('Please complete this form to contact us.'); ?></p>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm'); ?>

	<p class="note">
		<span class="required">*</span><?php echo t('Required'); ?>.
	</p>

	<?php echo $form->errorSummary($models); ?>

	<div class="row">
		<?php echo $form->labelEx($models['ContactUs'],'name'); ?>
		<?php echo $form->textField($models['ContactUs'],'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['ContactUs'],'email'); ?>
		<?php echo $form->textField($models['ContactUs'],'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['ContactUs'],'subject'); ?>
		<?php echo $form->textField($models['ContactUs'],'subject',array('size'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['ContactUs'],'body'); ?>
		<?php echo $form->textArea($models['ContactUs'],'body',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php 
		echo $form->labelEx($models['Captcha'], 'captcha');
		$this->widget('ext.recaptcha.EReCaptcha',
				array('model' => $models['Captcha'], 
						'attribute' => 'captcha',
						'language' => Yii::app()->language));
		echo $form->error($models['Captcha'], 'captcha');
		?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Submit')); ?>
	</div>

	<?php $this->endWidget(); ?>

</div>
<!-- form -->