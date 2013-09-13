<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'course-objective-form',
			'enableAjaxValidation' => true,
			'enableClientValidation' => true,
	));
	echo $form->errorSummary($CourseObjective); ?>
	<div class="row">
		<?php
		echo $form->labelEx($CourseObjective, 'rank');
		echo $form->numberField($CourseObjective, 'rank');
		echo $form->error($CourseObjective, 'rank');
		?>
	</div>
	<div class="row">
		<?php
		echo $form->labelEx($CourseObjective, 'text');
		echo $form->textField($CourseObjective, 'text');
		echo $form->error($CourseObjective, 'text');
		?>
	</div>
	<div class="row submit">
		<?php echo CHtml::submitButton($CourseObjective->getIsNewRecord() ? '{t}Create{/t}' : '{t}Update{/t}'); ?>
	</div>
	<?php $this->endWidget(); ?>
</div>
