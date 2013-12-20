<?php 
$id = $this->getId();
$options = CJavaScript::encode(array());
Yii::app()->getClientScript()->registerScript(__CLASS__.'#'.$id, "jQuery('#$id').yiiContactUs($options);");
echo CHtml::openTag('div', $htmlOptions);
	$activeForm = $this->beginWidget('CActiveForm',
			array_merge_recursive(
				$form['options'],
				array(
					'actionPrefix' => $this->actionPrefix,
					'action' => $this->getController()->createUrl($this->actionPrefix.'submit'),
					'enableAjaxValidation' => true,
					'enableClientValidation' => true,
					'clientOptions' => array(
						'validateOnSubmit' => true,
						'afterValidate' => 'js:'.
						'function(form, data, hasError){'.
							'if (!hasError)'.
							'{'.
								'form.yiiContactUs("submit");'.
								'return false;'.
							'}'.
						'}'
					),
				)
			)
	); 
	echo CHtml::tag('p', $messageHtmlOptions, $message);
	?>

	<p class="note">
		<span class="required">*</span><?php echo Yii::t(LDContactUsWidget::ID, 'Required'); ?>
	</p>

	<?php echo $activeForm->errorSummary(array($ContactUs, $Captcha->getModel())); ?>

	<div class="row">
		<?php 
		echo $activeForm->labelEx($ContactUs, 'name', $name['labelHtmlOptions']);
		echo $activeForm->textField($ContactUs, 'name', $name['inputHtmlOptions']);
		echo $activeForm->error($ContactUs, 'name', $name['errorHtmlOptions']); 
		?>
	</div>

	<div class="row">
		<?php 
		echo $activeForm->labelEx($ContactUs, 'email', $email['labelHtmlOptions']);
		echo $activeForm->emailField($ContactUs, 'email', $email['inputHtmlOptions'], array('size' => 45));
		echo $activeForm->error($ContactUs, 'email', $email['errorHtmlOptions']); 
		?>
	</div>

	<div class="row">
		<?php 
		echo $activeForm->labelEx($ContactUs, 'subject', $subject['labelHtmlOptions']);
		echo $activeForm->textField($ContactUs, 'subject', $subject['inputHtmlOptions']);
		echo $activeForm->error($ContactUs, 'subject', $subject['errorHtmlOptions']); 
		?>
	</div>

	<div class="row">
		<?php 
		echo $activeForm->labelEx($ContactUs, 'body', $body['labelHtmlOptions']);
		echo $activeForm->textArea($ContactUs, 'body', $body['inputHtmlOptions']);
		echo $activeForm->error($ContactUs, 'body', $body['errorHtmlOptions']); 
		?>
	</div>

	<?php if($Captcha->show): ?>
	<div class="row">
		<?php $Captcha->render($activeForm); ?>
	</div>
	<?php endif; ?>

	<div class="row submit">
		<?php echo CHtml::submitButton($submitButtonLabel, $submitButtonHtmlOptions); ?>
	</div>

	<?php $this->endWidget($activeForm->getId()); ?>
</div>
