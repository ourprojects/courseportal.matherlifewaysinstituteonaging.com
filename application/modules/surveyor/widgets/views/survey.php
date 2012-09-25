<div id="survey_<?php echo $survey->id; ?>">
	<h3><?php echo $survey->name; ?></h3>
	<div id="survey_description">
	<?php echo $survey->description; ?>
	</div>
		<?php $form = $this->beginWidget(
			'CActiveForm',
			array(
					'id' => $survey->name,
					'enableAjaxValidation' => true,
					'htmlOptions' => array('enctype' => 'multipart/form-data'),
			));
	?>
	<?php 
	foreach($survey->questions as $question) {
		echo '<div class="row">';
		echo CHtml::activeLabelEx($survey, "answer{$question->id}");
		switch($question->type->name) {
			case 'select':
				echo CHtml::activeDropDownList($survey, "answer{$question->id}", CHtml::listData($question->options, 'id', 'text'));
				break;
			case 'checkbox':
				echo CHtml::activeCheckBoxList($survey, "answer{$question->id}", CHtml::listData($question->options, 'id', 'text'));
				break;
		}
		echo CHtml::error($survey, "answer{$question->id}");
		echo '</div>';
	}
	?>
	
	<div class="row submit">
		<?php echo CHtml::submitButton(Yii::t('onlinecourseportal', 'Submit')); ?>
	</div>

	<?php $this->endWidget();?>
</div>