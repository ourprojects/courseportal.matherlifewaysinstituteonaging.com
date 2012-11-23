<?php

$dbConf = array();

$dbConf['connectionString'] = 'mysql:host=localhost;dbname=courseportal';
$dbConf['emulatePrepare'] = true;
$dbConf['username'] = 'c145190-h222718';
$dbConf['password'] = 'Mj93f6d42b!';
$dbConf['charset'] = 'utf8';
$dbConf['tablePrefix'] = 'onlinecourseportal_';

// DB profiling and logging
$dbConf['enableProfiling'] = true;
$dbConf['enableParamLogging'] = true;

return $dbConf;

?>