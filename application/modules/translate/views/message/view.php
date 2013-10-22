<?php
Yii::app()->getClientScript()->registerScriptFile($this->getScriptsUrl('jquery.messageForm.js'));
$action = $Message->getIsNewRecord() ? 'Create' : 'Update';
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
	'id' => 'message-form-dialog',
	'options' => array(
		'title' => TranslateModule::t($action.' Message Translation'),
		'autoOpen' => false,
		'modal' => true,
		'width' => 'auto',
		'height' => 'auto'
	),
));
?>
	<div id="messageForm" class="form">
		<?php 
		$form = $this->beginWidget('CActiveForm',
				array(
					'id' => 'message-form',
					'enableAjaxValidation' => true,
					'enableClientValidation' => true,
					'clientOptions' => array(
						'validateOnSubmit' => true,
						'afterValidate' => 'js:'.
							'function(form, data, hasError){'.
								'if (!hasError)'.
								'{'.
									'form.tMessageForm("submit");'.
									'return false;'.
								'}'.
							'}'
					),
				)
		);
		?>
		<p class="status hide"></p>
		<?php 
		echo $form->errorSummary(array($Message, $MessageSource));
		?>
		<p class="note">
			<?php echo TranslateModule::t('Fields with {span} are required.', array('{span}' => '<span class="required">*</span>')); ?>
		</p>
		<div class="row">
			<?php 
			echo $form->labelEx($Message, 'id');
			echo $form->textField($Message, 'id', array('disabled' => 'disabled'));
			echo $form->error($Message, 'id'); 
			?>
		</div>
		<div class="row">
			<?php 
			echo $form->labelEx($Message, 'language');
			echo $form->textField($Message, 'language', array('disabled' => 'disabled'));
			echo $form->error($Message, 'language'); 
			?>
		</div>
		<div class="row">
			<?php 
			echo $form->labelEx($MessageSource, 'categories');
			echo $form->dropDownList($MessageSource, 'categories', CHtml::listData(Category::model()->findAll(), 'id', 'category'), array('disabled' => 'disabled', 'multiple' => 'multiple')); 
			echo $form->error($MessageSource, 'categories');
			?>
		</div>
		<div class="row">
			<?php 
			echo $form->label($MessageSource, 'message');
			echo $form->textArea($MessageSource, 'message', array('disabled' => 'disabled', 'rows' => 3, 'cols' => 90));
			echo $form->error($MessageSource, 'message');
			?>
		</div>
		<div class="row">
			<?php 
			echo $form->labelEx($Message, 'translation');
			echo $form->textArea($Message, 'translation', array('rows' => 3, 'cols' => 90));
			echo $form->error($Message, 'translation'); 
			?>
		</div>
		<div class="row buttons">
			<?php 
			echo CHtml::submitButton(TranslateModule::t($action));

			$this->widget('translate.widgets.message.GoogleTranslateAjaxButton',
					array(
						'message' => $MessageSource->message,
						'targetLanguage' => $Message->language_id,
						'target' => '#message-form #Message_translation',
						'ajaxOptions' => array(
							'success' => 'js:function(data){$("#message-form #Message_translation").val(data);}'
						)
					)
			);
			?>
		</div>
		<?php $this->endWidget($form->getId()); ?>
	</div>
<?php 
$this->endWidget($form->getId()); 
$options = CJavaScript::encode(
	array(
		'scenario' => $Message->getScenario(),
		'loading' => true,
		'createText' => TranslateModule::t('Create'),
		'saveText' => TranslateModule::t('Save'),
		'loadingClass' => 'loading'
	)
);
Yii::app()->getClientScript()->registerScript(__CLASS__.'-div#messageForm', "jQuery('div#messageForm').tMessageForm($options);");
?>

