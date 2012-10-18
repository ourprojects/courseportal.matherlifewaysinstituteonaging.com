<?php
Yii::app()->loadHelper('HttpStatusCodes');
header("HTTP/1.1 $statusCode " . getHttpMessage($statusCode));

if(is_array($additionalHeaders))
	foreach($additionalHeaders as $header)
		header($header);

header('Content-Type: application/json');
$data = CJSON::encode(array('success' => isHttpNormal($statusCode), 'data' => $data));

header('Content-MD5: ' . md5($data));
header('Content-Length: ' . strlen($data));

if(strcasecmp(Yii::app()->getRequest()->getRequestType(), 'HEAD') === 0)
	exit;

echo $data;
?>