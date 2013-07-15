<?php
$action = $message->getIsNewRecord() ? 'Create' : 'Update';

$this->breadcrumbs = array(TranslateModule::t('Translations') => $this->createUrl('index'), TranslateModule::t($action . ' Translation'));
?>
<h1>
	<?php echo TranslateModule::t($action . ' Message Translation')." #$message->id - ".$message->language; ?>
</h1>
<div id="single-column">
	<div id="messageForm" class="form box-white">
		<?php 
		$form = $this->beginWidget('CActiveForm',
				array(
					'id' => 'message-form',
					'enableAjaxValidation' => false,
				)
		);
		?>
		<p class="note">
			<?php echo TranslateModule::t('Fields with {span} are required.', array('{span}' => '<span class="required">*</span>')); ?>
		</p>
		<div class="row">
			<?php echo $form->labelEx($message, 'id'); ?>
			<?php echo $form->textField($message, 'id', array('disabled' => 'disabled')); ?>
			<?php echo $form->error($message,'id'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($message, 'language'); ?>
			<?php echo $form->textField($message, 'language', array('disabled' => 'disabled')); ?>
			<?php echo $form->error($message,'language'); ?>
		</div>
		<div class="row">
			<?php echo CHtml::label($message->source->getAttributeLabel('categories'), 'categories'); ?>
			<?php echo CHtml::checkBoxList('categories', $message->source->categories, CHtml::listData(Category::model()->findAll(), 'category', 'category'), array('disabled' => 'disabled')); ?>
		</div>
		<div class="row">
			<?php echo $form->label($message->source, 'message'); ?>
			<?php echo $form->textArea($message->source, 'message', array('disabled' => 'disabled', 'rows' => 3, 'cols' => 90)); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($message, 'translation'); ?>
			<?php echo $form->textArea($message, 'translation', array('rows' => 3, 'cols' => 90)); ?>
			<?php echo $form->error($message, 'translation'); ?>
		</div>
		<div class="row buttons">
			<?php 
			echo CHtml::submitButton(TranslateModule::t($action));

			$this->widget('translate.widgets.message.GoogleTranslateAjaxButton',
					array(
						'message' => $message->source->message,
						'targetLanguage' => $message->language_id,
						'target' => '#message-form #Message_translation',
						'ajaxOptions' => array(
							'success' => 'js:function(data){$("#message-form #Message_translation").val(data);}'
						)
					)
			);
			?>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>
