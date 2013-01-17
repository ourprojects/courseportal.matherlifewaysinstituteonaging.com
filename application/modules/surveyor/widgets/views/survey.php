<?php 

	echo CHtml::tag('div', $surveyHtmlOptions, false);
	
	if($titleShown)
		echo CHtml::tag('div', $titleHtmlOptions, $model->getAttributeLabel('title'));
	if($descriptionShown)
		echo CHtml::tag('div', $descriptionHtmlOptions, "<p>{$model->getAttributeLabel('description')}</p>");

	if($formShown) {
		$this->beginWidget('CActiveForm', $formOptions);
		echo CHtml::errorSummary($model);
	}
	$baseId = $questionHtmlOptions['id'];
	foreach($model->questions as $q) {
		$questionHtmlOptions['id'] = "{$baseId}_{$q->id}";
		echo CHtml::tag('div', $questionHtmlOptions, '', false);
		echo CHtml::activeLabelEx($model, "question{$q->id}", array('for' => CHtml::getIdByName("Survey[{$model->name}][question{$q->id}]")));
		if($statsShown) {
			$this->widget('ext.highcharts.EHighcharts', array(
					'id' => 'chart_'.$questionHtmlOptions['id'],
					'htmlOptions' => array('style' => 'display:none;'),
					'options' => array(
							'chart' => array(
									'backgroundColor' => 'rgba(255, 255, 255, 0.0)',
									'plotBackgroundColor' => null,
									'plotBorderWidth' => null,
									'plotShadow' => false,
							),
							'exporting' => array('enabled' => false),
							'title' => array('text' => null),
							'credits' => array('enabled' => false),
							'tooltip' => array(
									'pointFormat' => '{series.name}: <b>{point.percentage}%</b>',
									'percentageDecimals' => 2
							),
							'plotOptions' => array(
									'pie' => array(
											'allowPointSelect' => true,
											'cursor' => 'pointer',
											'size' => '45%',
											'dataLabels' => array(
													'enabled' => true,
													'color' => '#000000',
													'connectorColor' => '#000000',
													'style' => array('width' => '150px'),
													'formatter' => 'js:function() {
									   						return "<b>"+ this.point.name + "</b>: " + Highcharts.numberFormat(this.percentage, 2) + " %";
														}'
											)
									)
							),
							'series' => array(
									array(
											'type' => 'pie',
											'name' => 'Share',
									)
							)
					)
				)
			);
		}
		echo CHtml::tag('div', array('id' => 'options_'.$questionHtmlOptions['id']), '', false);
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
		echo '</div>';
		echo CHtml::error(
				 		  $model, 
						  "question{$q->id}",
						  array('name' => "Survey[{$model->name}][question{$q->id}]")
						);
		echo '</div>';
	}
	if($formShown) {
		if($useAjax) {
			if(!isset($ajaxOptions['success']))
				$ajaxOptions['success'] = 
				'function(data) {' . 
					"data = $.parseJSON(data);" .
					"if(!$.isEmptyObject(data) && data.hasOwnProperty('{$model->name}')) {" .
						"if($.isEmptyObject(data.{$model->name})) {" .
							"alert('Your response has been submitted successfully!');" .
						'} else {' . 
							"var alertText = 'Please correct the following errors and try again.';" .
							"$.each(data.{$model->name}, function(error, message) {" .
								'alertText += "\r\n" + error + "\r\n\t" + message;' .
							'});' .
							'alert(alertText);' .
						'}' .
						
					'}' .
				'}';
			if(!isset($ajaxOptions['error']))
				$ajaxOptions['error'] = 'function(data) { alert("A server error ocurred. Please try again later."); }';
			echo CHtml::tag('div', array(), CHtml::ajaxSubmitButton(Surveyor::t($submitButtonLabel), $formOptions['action'], $ajaxOptions, $submitButtonHtmlOptions));
		} else {
			echo CHtml::tag('div', array(), CHtml::submitButton(Surveyor::t($submitButtonLabel), $submitButtonHtmlOptions));
		}
		$this->endWidget();
	}
	echo '</div>';
?>