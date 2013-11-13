<?php
echo CHtml::activeHiddenField($model, $attribute);

if($useAjax)
{
	Yii::app()->getClientScript()->registerScriptFile(($useSsl ? 'https://' : 'http://') . 'www.google.com/recaptcha/api/js/recaptcha_ajax.js');
	Yii::app()->getClientScript()->registerScript(
		get_class($this).'_ajaxCreate',
		'function showRecaptcha(element){'.
			'Recaptcha.create("'.$reCaptcha->getPublicKey().'",element,'.$recaptchaOptions.');'.
		'}',
		CClientScript::POS_HEAD
	);
	echo '<div id="'.get_class($this).'"></div>';
}
else
{
	Yii::app()->getClientScript()->registerScript(
		get_class($this).'_options',
		'var RecaptchaOptions = '.$recaptchaOptions,
		CClientScript::POS_HEAD
	);
	echo $reCaptcha->get_html($error, $useSsl, $language);
}

?>