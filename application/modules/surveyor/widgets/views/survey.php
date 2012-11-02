<?php 
	echo CHtml::tag('div', $survey['htmlOptions'], false);
	
	if($title['show'])
		echo CHtml::tag('div', $title['htmlOptions'], $survey['model']->title);
	if($description['show'])
		echo CHtml::tag('div', $description['htmlOptions'], "<p>{$survey['model']->description}</p>");

	if($form['show']) {
		$this->beginWidget('CActiveForm', $form['options']);
		echo CHtml::errorSummary($survey['model']);
	}
	
	foreach($survey['model']->questions as $q) {
		$question['htmlOptions']['id'] .= "_{$q->id}";
		echo CHtml::tag('div', $question['htmlOptions'], '', false);
		echo CHtml::activeLabelEx($survey['model'], "question{$q->id}", array('for' => "Survey[{$survey['model']->name}][question{$q->id}]"));
		switch($q->type->name) {
			case 'select':
				echo CHtml::activeDropDownList(
										$survey['model'], 
										"question{$q->id}", 
										CHtml::listData($q->options, 'id', 'text'), 
										array('name' => "Survey[{$survey['model']->name}][question{$q->id}]")
					);
				break;
			case 'checkbox':
				echo CHtml::activeCheckBoxList(
										$survey['model'], 
										"question{$q->id}", 
										CHtml::listData($q->options, 'id', 'text'), 
										array('name' => "Survey[{$survey['model']->name}][question{$q->id}]")
					);
				break;
			case 'radio':
				echo CHtml::activeRadioButtonList(
										$survey['model'],
										"question{$q->id}",
										CHtml::listData($q->options, 'id', 'text'),
										array('name' => "Survey[{$survey['model']->name}][question{$q->id}]")
					);
				break;
			case 'textfield':
				echo CHtml::activeTextField(
										$survey['model'], 
										"question{$q->id}",
										array('name' => "Survey[{$survey['model']->name}][question{$q->id}]")
					);
				break;
			case 'textarea':
				echo CHtml::activeTextArea(
							$survey['model'],
							"question{$q->id}",
							array('name' => "Survey[{$survey['model']->name}][question{$q->id}]")
						);
				break;
		}
		echo CHtml::error(
				 		  $survey['model'], 
						  "question{$q->id}",
						  array('name' => "Survey[{$survey['model']->name}][question{$q->id}]")
						);
		echo '</div>';
	}
	if($form['show']) {
		if($submitButton['ajax']) {
			if(!isset($submitButton['ajaxOptions']['success']))
				$submitButton['ajaxOptions']['success'] = 
				'function(data) {' . 
					"data = $.parseJSON(data);" .
					"if(!$.isEmptyObject(data) && data.hasOwnProperty('{$survey['model']->name}')) {" .
						"if($.isEmptyObject(data.{$survey['model']->name})) {" .
							"alert('Your response has been submitted successfully!');" .
						'} else {' . 
							"var alertText = 'Please correct the following errors and try again.';" .
							"$.each(data.{$survey['model']->name}, function(error, message) {" .
								'alertText += "\r\n" + error + "\r\n\t" + message;' .
							'});' .
							'alert(alertText);' .
						'}' .
						
					'}' .
				'}';
			if(!isset($submitButton['ajaxOptions']['error']))
				$submitButton['ajaxOptions']['error'] = 'function(data) { alert("A server error ocurred. Please try again later."); }';
			echo CHtml::tag('div', array(), CHtml::ajaxSubmitButton(Surveyor::t($submitButton['label']), $form['options']['action'], $submitButton['ajaxOptions'], $submitButton['htmlOptions']));
		} else {
			echo CHtml::tag('div', array(), CHtml::submitButton(Surveyor::t($submitButton['label']), $submitButton['htmlOptions']));
		}
		$this->endWidget();
	}
	echo '</div>';
?>