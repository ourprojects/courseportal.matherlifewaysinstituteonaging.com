<div id="<?php echo $id; ?>-activityLogForm" class="form">
 	<h2 id="Activity_name">
		<?php echo $Activity->name; ?>
	</h2>
	<p id="Activity_description">
		<?php echo $Activity->description; ?>
	</p>
	<?php $form = $this->beginWidget(
				'CActiveForm',
				array(
					'id' => $id.'-userActivityForm',
					'actionPrefix' => $actionPrefix,
					'action' => $actionPrefix.'logActivity',
					'enableAjaxValidation' => true,
					'enableClientValidation' => true,
					'clientOptions' => array(
						'validateOnSubmit' => true,
						'afterValidate' => 'js:'.
							'function(form, data, hasError){'.
								'if (!hasError) {'.
									CHtml::ajax(array(
										'type' => 'POST',
										'url' => $this->createUrl($actionPrefix.'logActivity'),
										'cache' => false,
										'data' => 'js:$("form#'.$id.'-userActivityForm").serialize()',
										'beforeSend' => 'function(){$("#'.$id.'-userActivityForm").spUserActivityForm("loading", true);}',
										'success' => 'function(data){'.
											'var $data = $.parseJSON(data);'.
											'$.each($("form#'.$id.'-userActivityForm").spUserActivityForm("dimensions"), function(value){'.
												'var $grid = $("div#'.$id.'-"+value+"-userActivityGrid");'.
												'if($grid.length > 0){'.
													'$grid.yiiGridView("update");'.
												'}'.
											'});'.
											'var $form = $("div#'.$id.'-activityLogForm");'.
											'$.each($.parseJSON(data), function(attribute, value){'.
												'$form.spUserActivityForm(attribute, value);'.
											'});'.
										'}',
										'error' => 'function(data){'.
											'$("form#'.$id.'-userActivityForm").yiiactiveform("updateSummary", data);'.
										'}',
										'complete' => 'function(){'.
											'$("#'.$id.'-userActivityForm").spUserActivityForm("loading", false);'.
										'}',
									)).
									'return false;'.
								'}'.
							'}'
					)
				)
			);
	?>
	<p class="message hide" style="background:#E6EFC2; color:#264409; border-color:#C6D880;"></p>
	<p class="note">
		<span class="required">*</span>{t}Required{/t}.
	</p>
	<?php echo $form->errorSummary($UserActivity); ?>
	
	<div class="row">
		<?php echo $form->labelEx($UserActivity, 'dimensions'); ?>
		<?php echo $form->listBox($UserActivity, 'dimensions', CHtml::listData($Activity->recommendedDimensions, 'id', 'name'), array('multiple' => 'multiple')); ?>
		<?php echo $form->error($UserActivity, 'dimensions'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($UserActivity, 'dateCompleted'); ?>
	<?php 
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'model' => $UserActivity,
		'attribute' => 'dateCompleted',
		'language' => Yii::app()->getLanguage()
	));
	?>
	<?php echo $form->error($UserActivity, 'dateCompleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($UserActivity, 'comment'); ?>
		<?php echo $form->textArea($UserActivity, 'comment', array('rows' => 3, 'cols' => 5)); ?>
		<?php echo $form->error($UserActivity, 'comment'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->hiddenField($UserActivity, 'activity_id'); ?>
		<?php echo $form->error($UserActivity, 'activity_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->hiddenField($UserActivity, 'id'); ?>
		<?php echo $form->error($UserActivity, 'id'); ?>
	</div>
	
	<?php echo CHtml::hiddenField('_method', 'POST'); ?>
				
	<div class="row submit">
		<?php echo CHtml::submitButton('{t}Create{/t}'); ?>
	</div>

	<?php $this->endWidget($id.'-userActivityForm'); ?>
</div>
