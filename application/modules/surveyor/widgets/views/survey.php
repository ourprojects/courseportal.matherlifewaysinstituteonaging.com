<?php 

$options = CJavaScript::encode(array('submitButtonId' => $submitButtonHtmlOptions['id']));
Yii::app()->getClientScript()->registerScript(__CLASS__.'#'.$htmlOptions['id'], "jQuery('#{$htmlOptions['id']}').yiiSurvey($options);");

echo CHtml::openTag('div', $htmlOptions);
echo CHtml::openTag('div', array('class' => 'form'));

if($title['show'])
{
	echo CHtml::tag('h2', $title['htmlOptions'], SurveyorModule::t($model->title));
}

if($description['show'])
{
	echo CHtml::tag('div', $description['htmlOptions'], SurveyorModule::t($model->description));
}

if($form['show'])
{
	$activeForm = $this->beginWidget(
		'CActiveForm',
		array_merge_recursive(
			$form['options'],
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
							"jQuery('#{$htmlOptions['id']}').yiiSurvey('submit');".
							'return false;'.
						'}'.
					'}'
				),
			)
		)
	);
	if($messageShow)
	{
		echo CHtml::tag('p', array_merge_recursive($messageHtmlOptions, array('style' => 'display: '.($message === '' ? 'none' : 'block').';')), $message);
	}
	echo $activeForm->errorSummary($model);
	foreach($model->questions as $q)
	{
		$attributeName = '['.$model->name.']'.$q->id;
		$attributeId = CHtml::activeId($model, $attributeName);
		echo CHtml::openTag('div', array_merge_recursive($rowsHtmlOptions, array('id' => $attributeId.'_row_', 'class' => 'row')));
		echo CHtml::openTag('div',array_merge_recursive($questionsHtmlOptions, array('id' => $attributeId.'_question_')));
		echo $activeForm->labelEx($model, $attributeName);

		switch($q->type->name)
		{
			case 'select':
				echo $activeForm->dropDownList($model, $attributeName, array_map(array(Yii::app()->getModule('surveyor'), 't'), CHtml::listData($q->options, 'id', 'text')));
				break;
			case 'select-multiple':
				echo $activeForm->dropDownList($model, $attributeName, array_map(array(Yii::app()->getModule('surveyor'), 't'), CHtml::listData($q->options, 'id', 'text')), array('multiple' => 'multiple'));
				break;
			case 'checkbox':
				echo $activeForm->checkBoxList($model, $attributeName, array_map(array(Yii::app()->getModule('surveyor'), 't'), CHtml::listData($q->options, 'id', 'text')));
				break;
			case 'radio':
				echo $activeForm->radioButtonList($model, $attributeName, array_map(array(Yii::app()->getModule('surveyor'), 't'), CHtml::listData($q->options, 'id', 'text')));
				break;
			case 'textfield':
				echo $activeForm->textField($model, $attributeName);
				break;
			case 'textarea':
				echo $activeForm->textArea($model, $attributeName);
				break;
			case 'date':
				echo $activeForm->dateField($model, $attributeName);
				break;
			case 'email':
				echo $activeForm->emailField($model, $attributeName);
				break;
			case 'number':
				echo $activeForm->numberField($model, $attributeName);
				break;
			case 'telephone':
				echo $activeForm->telField($model, $attributeName);
				break;
			case 'time':
				echo $activeForm->timeField($model, $attributeName);
				break;
			case 'url':
				echo $activeForm->urlField($model, $attributeName);
				break;
			case 'search':
				echo $activeForm->searchField($model, $attributeName);
				break;
		}
		echo $activeForm->error($model, $attributeName);
		echo CHtml::closeTag('div');
		if(!$q->type->textual && $highcharts['show'])
		{
			$this->widget(
				'ext.highcharts.HighchartsWidget',
				array_merge_recursive(
					$highcharts['options'],
					array(
						'id' => $attributeId.'_highchart_',
						'htmlOptions' => array('style' => 'display:none;'),
					)
				)
			);
		}
		echo CHtml::closeTag('div');
	}

	echo CHtml::submitButton($submitButtonLabel, $submitButtonHtmlOptions);
	$this->endWidget($activeForm->getId());
}
echo CHtml::closeTag('div');
echo CHtml::closeTag('div');
?>