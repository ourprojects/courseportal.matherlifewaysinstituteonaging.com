<?php 

	echo CHtml::openTag('div', $htmlOptions);
	
	if($title['show'])
		echo CHtml::tag('p', $title['htmlOptions'], $model->getAttributeLabel('title'));
	if($description['show'])
		echo CHtml::tag('p', $description['htmlOptions'], $model->getAttributeLabel('description'));

	if($form['show']) {
		$this->beginWidget('CActiveForm', $form['options']);
		echo CHtml::errorSummary($model);
	}
	
	$baseQuestionId = $questions['htmlOptions']['id'];
	foreach($model->questions as $q) {
		$questions['htmlOptions']['id'] = "{$baseQuestionId}_{$q->id}";
		echo CHtml::openTag('div', $questions['htmlOptions']);
		echo CHtml::activeLabelEx($model, "question{$q->id}", array('for' => CHtml::getIdByName("Survey[{$model->name}][question{$q->id}]")));

		switch($q->type->name) {
			case 'select':
				echo CHtml::activeDropDownList(
										$model, 
										"question{$q->id}", 
										array_map(array('Surveyor', 't'), CHtml::listData($q->options, 'id', 'text')), 
										array('name' => "Survey[{$model->name}][question{$q->id}]")
					);
				break;
			case 'checkbox':
				echo CHtml::activeCheckBoxList(
										$model, 
										"question{$q->id}", 
										array_map(array('Surveyor', 't'), CHtml::listData($q->options, 'id', 'text')), 
										array('name' => "Survey[{$model->name}][question{$q->id}]")
					);
				break;
			case 'radio':
				echo CHtml::activeRadioButtonList(
										$model,
										"question{$q->id}",
										array_map(array('Surveyor', 't'), CHtml::listData($q->options, 'id', 'text')),
										array('name' => "Survey[{$model->name}][question{$q->id}]")
					);
				break;
			case 'textfield':
				echo CHtml::activeTextField(
										$model, 
										"question{$q->id}",
										array('name' => "Survey[{$model->name}][question{$q->id}]")
					);
				break;
			case 'textarea':
				echo CHtml::activeTextArea(
							$model,
							"question{$q->id}",
							array('name' => "Survey[{$model->name}][question{$q->id}]")
						);
				break;
		}
		echo CHtml::error(
				 		  $model, 
						  "question{$q->id}",
						  array('name' => "Survey[{$model->name}][question{$q->id}]")
						);
		if($highcharts['show']) {
			$this->widget('ext.highcharts.EHighcharts', array(
					'id' => "chart_Survey_{$model->name}_question$q->id",
					'group' => $highcharts['group'],
					'htmlOptions' => array('style' => 'display:none;'),
					'options' => $highcharts['options']
			)
			);
		}
		echo CHtml::closeTag('div');
	}
	$questions['htmlOptions']['id'] = $baseQuestionId;
	if($form['show']) {
		if($useAjax) {
			if(!isset($submitButton['ajaxOptions']['success'])) {
				$submitButton['ajaxOptions']['success'] = 'js:function(data, textStatus, jqXHR){';
				if($highcharts['show']) {
					$submitButton['ajaxOptions']['success'] .= 
						'data = $.parseJSON(data);' .
						'for(question in data) {' .
							$highcharts['group'] . '_highcharts_instances["chart_" + question].series[0].setData(data[question], true);' .
							'$("#" + question).css("display", "none");' .
							'$("#'.$submitButton['htmlOptions']['id'].'").css("display", "none");' .
							'$("#chart_" + question).css("display", "block");' .
						'}';
				} else {
					$submitButton['ajaxOptions']['success'] .= 
						'data = $.parseJSON(data);' .
						"if($.isEmptyObject(data)) {" .
							'$("#'.$submitButton['htmlOptions']['id'].'").css("display", "none");' .
							'alert("Your response has been submitted successfully!");' .
						'} else {' .
							'var alertText = "Please correct the following errors and try again.";' .
							"$.each(data, function(error, message) {" .
								'alertText += "\r\n" + error + "\r\n\t" + message;' .
							'});' .
							'alert(alertText);' .
						'}';
				}
				$submitButton['ajaxOptions']['success'] .= '}';
			}
			if(!isset($submitButton['ajaxOptions']['error']))
				$submitButton['ajaxOptions']['error'] = 'function(data) { alert("A server error ocurred. Please try again later."); }';
			echo CHtml::ajaxSubmitButton(Surveyor::t($submitButton['label']), $form['options']['action'], $submitButton['ajaxOptions'], $submitButton['htmlOptions']);
		} else {
			echo CHtml::submitButton(Surveyor::t($submitButton['label']), $submitButton['htmlOptions']);
		}
		$this->endWidget();
	}
	echo CHtml::closeTag('div');
?>