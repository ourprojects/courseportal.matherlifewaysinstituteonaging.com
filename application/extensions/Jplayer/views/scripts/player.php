<?php 
$data = "$('$target').jPlayer({";
if(isset($config['ready'])) {
	$data .= "'ready': {$config['ready']}},";
	unset($config['ready']);
} else {
	$data .= "'ready': function(){ $(this).jPlayer('setMedia', " . CJavaScript::encode($files) . "); },";
}
if(isset($config['eventType'])) {
	$data .= "{$config['eventType']},";
	unset($config['eventType']);
}
foreach($config as $setting => $value)
	if($value !== null)
		$data .= "'$setting': " . CJavaScript::encode($value) . ",";
echo rtrim($data, ',') . '});';

?>