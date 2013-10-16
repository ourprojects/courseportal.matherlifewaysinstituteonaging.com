<?php 

return array(
		// API routes
		array('<controller>/create', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'POST'),
		array('<controller>/read', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'GET'),
		array('<controller>/update', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'PUT'),
		array('<controller>/delete', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'DELETE'),
		array('<controller>/options', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'OPTIONS'),
			
		// User activation and password reset routes
		'<language:\w+>/user/<action:(activate|passwordChange)>/<id:\d+>/<sessionKey:[\w\-,_]+>' => 'user/<action>',
			
		// Everything else...
		'<language:\w+>' => '',
		'<language:\w+>/<controller:\w+>' => '<controller>',
		'<language:\w+>/<controller:\w+>/<id:\d+>' => '<controller>/view',
		'<language:\w+>/<path:.*>' => '<path>',
);

?>