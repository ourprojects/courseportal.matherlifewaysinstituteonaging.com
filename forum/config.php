<?php
@define('PHPBB_INSTALLED', true);
@define('DEBUG', true);
@define('DEBUG_EXTRA', true);

if(defined('DEBUG') && DEBUG)
{
	$dbms = 'mysqli';
	$dbhost = 'localhost';
	$dbport = '';
	$dbname = 'courseportal_development';
	$dbuser = 'c145190-h2227182';
	$dbpasswd = 'Mj93f6d42b!';
	$table_prefix = 'phpbb_';
	$acm_type = 'file';
	$load_extensions = '';
}
else
{
	$dbms = 'mysqli';
	$dbhost = 'localhost';
	$dbport = '';
	$dbname = 'courseportal';
	$dbuser = 'c145190-h222718';
	$dbpasswd = 'Mj93f6d42b!';
	$table_prefix = 'phpbb_';
	$acm_type = 'file';
	$load_extensions = '';
}
