<div id="<?php echo $this->getId(); ?>-activityLogForm" class="form">
	<h2>
		<?php echo $activity->name; ?>
	</h2>
	<p>
		<?php echo $activity->description; ?>
	</p>
	<?php $form = $this->beginWidget(
			'CActiveForm',
			array(
					'id' => $this->getId().'-userActivityForm',
					'enableAjaxValidation' => true,
					'enableClientValidation' => true,
					'htmlOptions' => array('enctype' => 'multipart/form-data'),
			));
	?>
	<p class="note">
		<span class="required">*</span>{t}Required{/t}.
	</p>
	<?php echo $form->errorSummary($UserActivity); ?>
	
	<div class="row">
		<?php echo $form->labelEx($UserActivity, 'dimensions'); ?>
		<?php echo $form->listBox($UserActivity, 'dimensions', CHtml::listData($activity->recommendedDimensions, 'id', 'name'), array('multiple' => 'multiple')); ?>
		<?php echo $form->error($UserActivity, 'dimensions'); ?>
	</div>

	<div class="row">
	<?php 
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'model' => $UserActivity,
		'attribute' => 'dateCompleted',
	));
	?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($UserActivity, 'comment'); ?>
		<?php echo $form->textArea($UserActivity, 'comment', array('rows' => 3, 'cols' => 5)); ?>
		<?php echo $form->error($UserActivity, 'comment'); ?>
	</div>
	
	<?php echo $form->hiddenField($UserActivity, 'activity_id'); ?>
	
	<?php echo $form->hiddenField($UserActivity, 'id'); ?>
				
	<div class="row submit">
		<?php echo CHtml::submitButton('{t}Submit{/t}'); ?>
	</div>

	<?php $this->endWidget('CActiveForm'); ?>
</div>