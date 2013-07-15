<div class="row">
	<?php echo CHtml::activeLabelEx($data, 'id'); ?>
	<?php echo CHtml::activeTextField($data, 'id', array('disabled' => 'disabled')); ?>
	<?php echo CHtml::error($data,'id'); ?>
</div>
<div class="row">
	<?php echo CHtml::label(TranslateModule::t('Category'), 'category_'.$data->id); ?>
	<?php echo CHtml::textField('category_'.$data->id, $missing[$data->id]['category'], array('disabled' => 'disabled')); ?>
</div>
<div class="row">
	<?php echo CHtml::label(TranslateModule::t('Message'), 'message_'.$data->id); ?>
	<?php echo CHtml::textArea('message_'.$data->id, $missing[$data->id]['message'], array('disabled' => 'disabled', 'rows' => 2, 'cols' => 90)); ?>
</div>
<div class="row">
	<?php echo CHtml::activeLabelEx($data, 'translation'); ?>
	<?php echo CHtml::activeTextArea($data, 'translation', array('rows' => 3, 'cols' => 90)); ?>
	<?php echo CHtml::error($data, 'translation'); ?>
</div>
