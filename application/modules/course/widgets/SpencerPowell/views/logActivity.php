<?php 
$this->render('logActivityGrid', array('activitySearchModel' => $activitySearchModel));
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id' => $this->getId().'-activityDialog',
		'options' => array(
				'title' => '{t}Log Activity{/t}',
				'autoOpen' => false,
				'modal' => true,
				'width' => 700,
				'height' => 600
		),
));
?>
<div id="<?php echo $this->getId(); ?>-activityLogForm" class="form">
 	<h2 id="Activity_name">
		<?php echo $Activity->name; ?>
	</h2>
	<p id="Activity_description">
		<?php echo $Activity->description; ?>
	</p>
	<?php $form = $this->beginWidget(
				'CActiveForm',
				array(
					'id' => $this->getId().'-userActivityForm',
					'actionPrefix' => $this->actionPrefix,
					'action' => $this->actionPrefix.'logActivity',
					'enableAjaxValidation' => true,
					'enableClientValidation' => true,
					'clientOptions' => array(
							'validateOnSubmit' => true,
							'afterValidate' => 'js:'.
									'function(form, data, hasError){'.
										'if (!hasError) {'.
											CHtml::ajax(array(
												'type' => 'POST',
												'url' => $this->getController()->createUrl($this->actionPrefix.'logActivity'),
												'cache' => false,
												'data' => 'js:$("form#'.$this->getId().'-userActivityForm").serialize()',
												'beforeSend' => 'function(){$("#'.$this->getId().'-userActivityForm").addClass("loading");}',
												'success' => 'function(data){'.
																'var $data = $.parseJSON(data);'.
																'if($data.hasOwnProperty("success")){'.
																	'$("form#'.$this->getId().'-userActivityForm select#UserActivity_dimensions").children(":selected").each(function(){'.
																		'var $grid = $("div#'.$this->getId().'-"+$(this).val()+"-userActivityGrid");'.
																		'if($grid.length > 0){'.
																			'$grid.yiiGridView("update");'.
																		'}'.
																	'});'.
																	'alert($data.success);'.
																'}'.
															'}',
												'error' => 'function(data){alert(data);}',
												'complete' => 'function(){'.
													'$("#'.$this->getId().'-activityDialog").dialog("close");'.
													'$("#'.$this->getId().'-userActivityForm").removeClass("loading");'.
												'}',
											)).
											'return false;'.
										'}'.
									'}'
						)
				)
			);
	?>
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
	
	<?php echo $form->hiddenField($UserActivity, 'activity_id'); ?>
	
	<?php echo $form->hiddenField($UserActivity, 'id'); ?>
				
	<div class="row submit">
		<?php echo CHtml::submitButton('{t}Submit{/t}'); ?>
	</div>

	<?php $this->endWidget('CActiveForm'); ?>
</div>
<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>
