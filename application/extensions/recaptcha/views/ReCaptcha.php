<?php
echo CHtml::activeHiddenField($model, $attribute).recaptcha_get_html($publicKey, $error, $useSsl, $language);
?>