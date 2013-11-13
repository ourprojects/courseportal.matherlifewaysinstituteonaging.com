<?php
echo CHtml::activeHiddenField($model, $attribute);

if($useAjax)
{
	echo '<div id="'.get_class($this).'"></div>';
}
else
{
	echo recaptcha_get_html($publicKey, $error, $useSsl, $language);
}

?>