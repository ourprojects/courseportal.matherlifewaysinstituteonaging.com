<?php 
$id = $this->getId();
$options = CJavaScript::encode(array('questionPrefix' => CHtml::getIdByName(get_class($model)."[{$model->name}][question]")));
Yii::app()->getClientScript()->registerScript(__CLASS__.'#'.$id, "jQuery('#$id').yiiSurvey($options);");

echo CHtml::openTag('div', $htmlOptions);

if($title['show'])
{
	echo CHtml::tag('p', $title['htmlOptions'], $model->title);
}

if($description['show'])
{
	echo CHtml::tag('p', $description['htmlOptions'], $model->description);
}

$activeForm = $this->beginWidget(
	'CActiveForm', 
	array(
		'actionPrefix' => $this->actionPrefix,
		'action' => $this->getController()->createUrl($this->actionPrefix.'submit', array('survey' => $model->id)),
		'enableAjaxValidation' => true,
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
			'afterValidate' => 'js:'.
				'function(form, data, hasError){'.
					'if (!hasError)'.
					'{'.
						'form.yiiSurvey("submit");'.
						'return false;'.
					'}'.
					'return false;'.
				'}'
		)
	)
);
/*if($highcharts['show'])
{
	$submitButton['ajaxOptions']['success'] .=
	'data = $.parseJSON(data);' .
	'for(question in data) {' .
	$highcharts['group'] . '_highcharts_instances["chart_" + question].series[0].setData(data[question], true);' .
	'$("#" + question).css("display", "none");' .
	'$("#'.$submitButton['htmlOptions']['id'].'").css("display", "none");' .
	'$("#chart_" + question).css("display", "block");' .
	'}';
}
else
{
	$submitButton['ajaxOptions']['success'] .=
	'data = $.parseJSON(data);' .
	"if($.isEmptyObject(data)) {" .
	'$("#'.$submitButton['htmlOptions']['id'].'").css("display", "none");' .
	'alert("'.Surveyor::t('Your response has been submitted successfully!').'");' .
	'} else {' .
	'var alertText = "'.Surveyor::t('Please correct the following errors and try again.').'";' .
	"$.each(data, function(error, message) {" .
	'alertText += "\r\n" + error + "\r\n\t" + message;' .
	'});' .
	'alert(alertText);' .
	'}';
}*/
echo '<p class="message"></p>';
echo $activeForm->errorSummary($model);
foreach($model->questions as $q)
{
	$questionName = get_class($model)."[{$model->name}][question{$q->id}]";
	$questionId = CHtml::getIdByName($questionName);
	$questions['htmlOptions']['id'] = $questionId.'_row_';
	echo CHtml::openTag('div', $questions['htmlOptions']);
	echo CHtml::openTag('div', array('id' => $questionId.'_question_'));
	echo $activeForm->labelEx($model, "question{$q->id}", array('for' => $questionId));

	switch($q->type->name)
	{
		case 'select':
			echo $activeForm->dropDownList(
									$model, 
									"question{$q->id}", 
									array_map(array('Surveyor', 't'), CHtml::listData($q->options, 'id', 'text')), 
									array('name' => $questionName)
				);
			break;
		case 'checkbox':
			echo $activeForm->checkBoxList(
									$model, 
									"question{$q->id}", 
									array_map(array('Surveyor', 't'), CHtml::listData($q->options, 'id', 'text')), 
									array('name' => $questionName)
				);
			break;
		case 'radio':
			echo $activeForm->radioButtonList(
									$model,
									"question{$q->id}",
									array_map(array('Surveyor', 't'), CHtml::listData($q->options, 'id', 'text')),
									array('name' => $questionName)
				);
			break;
		case 'textfield':
			echo $activeForm->textField(
									$model, 
									"question{$q->id}",
									array('name' => $questionName)
				);
			break;
		case 'textarea':
			echo $activeForm->textArea(
						$model,
						"question{$q->id}",
						array('name' => $questionName)
					);
			break;
	}
	echo $activeForm->error($model, "question{$q->id}", array('inputID' => $questionId));
	echo CHtml::closeTag('div');
	if($highcharts['show']) 
	{
		$this->widget(
				'ext.highcharts.HighchartsWidget', 
				array(
					'id' => $questionId.'_highchart_',
					'htmlOptions' => array('style' => 'display:none;'),
					'options' => $highcharts['options']
				)
		);
	}
	echo CHtml::closeTag('div');
}

echo CHtml::submitButton($submitButton['label'], $submitButton['htmlOptions']);
$this->endWidget($activeForm->getId());
echo CHtml::closeTag('div');
?>