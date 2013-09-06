<?php if(Yii::app()->getUser()->hasFlash($this->getId().'-success')): ?>
<p>
	<?php echo Yii::app()->getUser()->getFlash($this->getId().'-success', null, true); ?>
</p>
<?php 
endif; 
echo CHtml::link(t('View Logged Activities'), $this->getController()->createUrl($this->actionPrefix.'dimension'), array('class' => 'button'));
$activitySearchModel = new Activity('search');
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => $this->getId().'-activityGrid',
				'filter' => $activitySearchModel,
				'dataProvider' => $activitySearchModel->search(),
				'columns' => array(
						'name',
						'description',
						'dose',
						'cr',
						array(
							'class' => 'CButtonColumn',
							'template' => '{view}',
							'buttons' => array(
									'view' => array(
											'label' => t('Select'),
											'url' => '$this->grid->getOwner()->getController()->createUrl($this->grid->getOwner()->actionPrefix."logActivity", array("UserActivity" => array("activity_id" => $data->id)));',
											'imageUrl' => '',
											'click' => 'function(){'.CHtml::ajax(
													array(
															'type' => 'GET',
															'url' => 'js:$(this).attr("href")',
															'beforeSend' => 'function(){$("#'.$this->getId().'-activityLogForm").addClass("loading");$("#'.$this->getId().'-activityDialog").dialog("open");}',
															'success' => 'function(data){'.
																			'var $form = $("div#'.$this->getId().'-activityLogForm");'.
																			'var $obj = $.parseJSON(data);'.
																			'$form.find("h2#Activity_name").text($obj.name);'.
																			'$form.find("p#Activity_description").text($obj.description);'.
																			'var $dropdown = $form.find("select#UserActivity_dimensions");'.
																			'$dropdown.empty();'.
																			'$($obj.dimensions).each(function () {'.
																				'$("<option />", {'.
																					'val: this.value,'.
																					'text: this.text'.
																				'}).appendTo($dropdown);'.
																			'});'.
																			'$form.find("input#UserActivity_dateCompleted").val($obj.dateCompleted);'.
																			'$form.find("input#UserActivity_comment").val($obj.comment);'.
																			'$form.find("input#UserActivity_activity_id").val($obj.activity_id);'.
																			'$form.find("input#UserActivity_id").val($obj.id);'.
																		 '}',
															'error' => 'function(data){alert(data);}',
															'complete' => 'function(){$("#'.$this->getId().'-activityLogForm").removeClass("loading");}',
													)
											).'return false;}',
									),
							)
						)
				),
				'selectableRows' => 0,
		)
);
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
		<?php echo $activity->name; ?>
	</h2>
	<p id="Activity_description">
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
	<?php echo $form->labelEx($UserActivity, 'dateCompleted'); ?>
	<?php 
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'model' => $UserActivity,
		'attribute' => 'dateCompleted',
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
