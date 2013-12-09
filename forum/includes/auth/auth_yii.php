<?php

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

function login_yii($user, $password, $ip = '', $browser = '', $forwarded_for = '')
{
	if(!$user)
	{
		return array(
				'status'	=> LOGIN_ERROR_USERNAME,
				'error_msg'	=> 'LOGIN_ERROR_USERNAME',
				'user_row'	=> array('user_id' => ANONYMOUS),
		);
	}

	if(class_exists('Yii', false))
	{
		if(($user instanceof IUserIdentity && ($user->getIsAuthenticated() || $user->authenticate())) ||
				$user instanceof CWebUser && !$user->getIsGuest())
		{
			global $db, $config;

			$username = $user->getName();
			$username_clean = utf8_clean_string($username);

			$sql = 'SELECT user_id, username, user_password, user_passchg, user_email, user_type, user_login_attempts'.
					' FROM ' . USERS_TABLE .
					" WHERE username_clean = '" . $db->sql_escape($username_clean) . "'";
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			if (($ip && !$config['ip_login_limit_use_forwarded']) ||
				($forwarded_for && $config['ip_login_limit_use_forwarded']))
			{
				$sql = 'SELECT COUNT(*) AS attempts
					FROM ' . LOGIN_ATTEMPT_TABLE . '
					WHERE attempt_time > ' . (time() - (int) $config['ip_login_limit_time']);
				if ($config['ip_login_limit_use_forwarded'])
				{
					$sql .= " AND attempt_forwarded_for = '" . $db->sql_escape($forwarded_for) . "'";
				}
				else
				{
					$sql .= " AND attempt_ip = '" . $db->sql_escape($ip) . "' ";
				}

				$result = $db->sql_query($sql);
				$attempts = (int) $db->sql_fetchfield('attempts');
				$db->sql_freeresult($result);

				$attempt_data = array(
					'attempt_ip'			=> $ip,
					'attempt_browser'		=> trim(substr($browser, 0, 149)),
					'attempt_forwarded_for'	=> $forwarded_for,
					'attempt_time'			=> time(),
					'user_id'				=> ($row) ? (int) $row['user_id'] : 0,
					'username'				=> $username,
					'username_clean'		=> $username_clean,
				);
				$sql = 'INSERT INTO ' . LOGIN_ATTEMPT_TABLE . $db->sql_build_array('INSERT', $attempt_data);
				$result = $db->sql_query($sql);
			}
			else
			{
				$attempts = 0;
			}

			if (!$row)
			{
				if ($config['ip_login_limit_max'] && $attempts >= $config['ip_login_limit_max'])
				{
					return array(
						'status'	=> LOGIN_ERROR_ATTEMPTS,
						'error_msg'	=> 'LOGIN_ERROR_ATTEMPTS',
						'user_row'	=> array('user_id' => ANONYMOUS),
					);
				}

				return array(
					'status'	=> LOGIN_ERROR_USERNAME,
					'error_msg'	=> 'LOGIN_ERROR_USERNAME',
					'user_row'	=> array('user_id' => ANONYMOUS),
				);
			}

			return array(
					'status'	=> LOGIN_SUCCESS,
					'error_msg'	=> false,
					'user_row'	=> $row,
			);
		}
		else
		{
			return array(
				'status'	=> LOGIN_ERROR_PASSWORD,
				'error_msg'	=> 'LOGIN_ERROR_PASSWORD',
				'user_row'	=> array('user_id' => ANONYMOUS),
			);
		}
	}

	global $db, $config, $phpbb_root_path, $phpEx;

	$method = 'db';

	include_once($phpbb_root_path . 'includes'.DIRECTORY_SEPARATOR.'auth'.DIRECTORY_SEPARATOR.'auth_' . $method . '.' . $phpEx);

	$method = 'login_' . $method;
	if (function_exists($method))
	{
		return $method($user, $password, $ip, $browser, $forwarded_for);
	}

	trigger_error('Authentication method not found', E_USER_ERROR);
}

function autologin_yii()
{
	if(class_exists('Yii', false))
	{
		$webUser = Yii::app()->getUser();
		if(isset($webUser) && $webUser->allowAutoLogin && !$webUser->getIsGuest())
		{
			global $db;

			$sql = 'SELECT *'.
					' FROM ' . USERS_TABLE .
					" WHERE username_clean = '" . $db->sql_escape(utf8_clean_string($webUser->getName())) . "'";
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			return $row;
		}
	}

	return array();
}

?>