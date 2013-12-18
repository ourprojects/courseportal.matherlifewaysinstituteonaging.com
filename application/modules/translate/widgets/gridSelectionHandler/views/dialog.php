<?php
$clientScript = Yii::app()->getClientScript();
$clientScript->registerScriptFile($assetsUrl.'/scripts/jquery.selectionHandler.js');

if(!isset($progressBarOptions['id']))
{
	$progressBarOptions['id'] = 'progress_'.$id;
}
$progressBarOptions['value'] = 100;

$selectionHandlerOptions['confirmButtons'] = array(
	TranslateModule::t('Cancel') => 'js:function() {'.
		'$(this).dialog("close");'.
	'}',
	$buttonText => 'js:function() {'.
		'jQuery("#'.$id.'").tSelectionHandler("handleSelection");'.
	'}'
);
$selectionHandlerOptions['completeButtons'] = array(
	TranslateModule::t('Close') => 'js:function() {'.
		'$(this).dialog("close");'.
		'jQuery("#'.$id.'").tSelectionHandler("status");'.
	'}'
);
$selectionHandlerOptions['progressBarSelector'] = 'div#'.$progressBarOptions['id'];
$clientScript->registerScript(__CLASS__.$id, "jQuery('#$id').tSelectionHandler(".CJavaScript::encode($selectionHandlerOptions).");");

$buttonHtmlOptions['onClick'] = 'jQuery("#'.$id.'").tSelectionHandler("open");';
echo CHtml::button($buttonText, $buttonHtmlOptions);

$dialogWidget = $this->beginWidget(
	'zii.widgets.jui.CJuiDialog',
	array(
		'id' => $id,
		'options' => $dialogOptions,
	)
);
	echo '<p class="'.(isset($selectionHandlerOptions['statusClass']) ? $selectionHandlerOptions['statusClass'] : 'status').'"></p>';
	$this->widget(
		'zii.widgets.jui.CJuiProgressBar', 
		$progressBarOptions
	);
$this->endWidget('zii.widgets.jui.CJuiDialog');

$clientScript->registerCssFile($assetsUrl.'/styles/selectionHandler.css');
?>