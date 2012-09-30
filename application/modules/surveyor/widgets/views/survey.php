<div id="survey_<?php echo $survey->id; ?>">
	<?php if($showName): ?>
	<h3><?php echo $survey->name; ?></h3>
	<?php endif; ?>
	<?php if($showDescription): ?>
	<div id="survey_description">
	<?php echo $survey->description; ?>
	</div>
	<?php endif; ?>
	<?php if($encloseInForm): ?>
	<?php 
	$this->beginWidget(
		'CActiveForm',
		array(
				'id' => $survey->name,
				'enableAjaxValidation' => true,
				'htmlOptions' => array('enctype' => 'multipart/form-data'),
		));
	?>
	<?php endif; ?>
	<?php 
	foreach($survey->questions as $question) {
		echo '<div class="row">';
		echo CHtml::activeLabelEx($survey, "question{$question->id}", array('for' => "{$survey->name}Survey[question{$question->id}]"));
		switch($question->type->name) {
			case 'select':
				echo CHtml::activeDropDownList(
										$survey, 
										"question{$question->id}", 
										CHtml::listData($question->options, 'id', 'text'), 
										array('name' => "{$survey->name}Survey[question{$question->id}]")
					);
				break;
			case 'checkbox':
				echo CHtml::activeCheckBoxList(
										$survey, 
										"question{$question->id}", 
										CHtml::listData($question->options, 'id', 'text'), 
										array('name' => "{$survey->name}Survey[question{$question->id}]")
					);
				break;
			case 'radio':
				echo CHtml::activeRadioButtonList(
										$survey,
										"question{$question->id}",
										CHtml::listData($question->options, 'id', 'text'),
										array('name' => "{$survey->name}Survey[question{$question->id}]")
					);
				break;
			case 'textfield':
				echo CHtml::activeTextField(
										$survey, 
										"question{$question->id}",
										array('name' => "{$survey->name}Survey[question{$question->id}]")
					);
				break;
			case 'textarea':
				echo CHtml::activeTextArea(
						$survey,
						"question{$question->id}",
						array('name' => "{$survey->name}Survey[question{$question->id}]")
						);
				break;
		}
		echo CHtml::error($survey, "question{$question->id}");
		echo '</div>';
	}
	?>
	<?php if($encloseInForm): ?>
	<div class="row submit">
		<?php echo CHtml::submitButton(Yii::t('onlinecourseportal', 'Submit')); ?>
	</div>

	<?php $this->endWidget();?>
	<?php endif; ?>
</div>