<?php 
	echo CHtml::tag('div', $survey['options'], false);
	
	if($title['show'])
		echo CHtml::tag('div', $title['options'], t($survey['model']->title));
	if($description['show'])
		echo CHtml::tag('div', $description['options'], '<p>'.t($survey['model']->description).'</p>');

	if($form['show'])
		$this->beginWidget('CActiveForm', $form['options']);

	foreach($survey['model']->questions as $q) {
		$question['options']['id'] .= "_{$q->id}";
		echo CHtml::tag('div', $question['options'], '', false);
		echo CHtml::activeLabelEx($survey['model'], "question{$q->id}", array('for' => "{$survey['model']->name}Survey[question{$q->id}]"));
		switch($q->type->name) {
			case 'select':
				echo CHtml::activeDropDownList(
										$survey['model'], 
										"question{$q->id}", 
										CHtml::listData($q->options, 'id', 'text'), 
										array('name' => "{$survey['model']->name}Survey[question{$q->id}]")
					);
				break;
			case 'checkbox':
				echo CHtml::activeCheckBoxList(
										$survey['model'], 
										"question{$q->id}", 
										CHtml::listData($q->options, 'id', 'text'), 
										array('name' => "{$survey['model']->name}Survey[question{$q->id}]")
					);
				break;
			case 'radio':
				echo CHtml::activeRadioButtonList(
										$survey['model'],
										"question{$q->id}",
										CHtml::listData($q->options, 'id', 'text'),
										array('name' => "{$survey['model']->name}Survey[question{$q->id}]")
					);
				break;
			case 'textfield':
				echo CHtml::activeTextField(
										$survey['model'], 
										"question{$q->id}",
										array('name' => "{$survey['model']->name}Survey[question{$q->id}]")
					);
				break;
			case 'textarea':
				echo CHtml::activeTextArea(
						$survey['model'],
						"question{$q->id}",
						array('name' => "{$survey['model']->name}Survey[question{$q->id}]")
						);
				break;
		}
		echo CHtml::error($survey['model'], "question{$q->id}");
		echo '</div>';
	}
	if($form['show']) {
		echo CHtml::tag('div', $submitButton['options'], CHtml::submitButton(t('Submit')));
		$this->endWidget();
	}
	echo '</div>';
?>