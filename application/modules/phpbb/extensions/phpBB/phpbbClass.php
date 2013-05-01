<?php

class phpbbClass
{

	//various table fields
	var $table_fields = array();

	//constructor
	public function __construct($path, $php_extension = 'php')
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;
		
		define('IN_PHPBB', true);
		$phpbb_root_path = $path;
		$phpEx = $php_extension;
	}

	//initialize phpbb
	function init($prepare_for_login = false)
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;
		
		if($prepare_for_login && !defined('IN_LOGIN'))
		{
			define('IN_LOGIN', true);
		}
		
		require_once("{$phpbb_root_path}common.{$phpEx}");
		
		if($prepare_for_login && (!isset($config['auth_method']) || $config['auth_method'] != 'yii'))
			set_config('auth_method', 'yii');

		$user->session_begin();
		$auth->acl($user->data);
	}

	//user_login
	public function user_login($phpbb_vars)
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template, $_SID;

		//general info
		$this->init(true);

		//authenticate
		$login = $auth->login(
				$phpbb_vars['username'], 
				$phpbb_vars['password'], 
				isset($phpbb_vars['autologin']) ? $phpbb_vars['autologin'] : false, 
				isset($phpbb_vars['viewonline']) ? $phpbb_vars['viewonline'] : 1, 
				isset($phpbb_vars['admin']) ? $phpbb_vars['admin'] : 0
		);
		
		$_SESSION['sid'] = $_SID;

		return $login['status'] == LOGIN_SUCCESS;
	}

	//user_logout
	public function user_logout()
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;

		//general info
		$this->init(true);

		//session management
		$user->session_begin();
		$auth->acl($user->data);

		//destroy session if needed
		if($user->data['user_id'] != ANONYMOUS)
		{
			$user->session_kill();
			$user->session_begin();
			return true;
		}

		return false;
	}

	//user_loggedin
	function user_loggedin()
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;
		
		//general info
		$this->init();

		//session management
		$user->session_begin();
		
		// anonymous fix by John Issac (thanks)
		return is_array($user->data) && isset($user->data['user_id']) && $user->data['user_id'] != ANONYMOUS && $user->data['user_id'] > 0;
	}

	//user_add
	public function user_add($phpbb_vars)
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;

		//if the mandatory parameters are not given fail
		if(empty($phpbb_vars['username']) || 
				!isset($phpbb_vars['user_password']) ||
				!isset($phpbb_vars['group_id']) || 
				!isset($phpbb_vars['user_email']))
		{
			return false;
		}

		//general info
		$this->init();

		//user functions
		require_once("{$phpbb_root_path}includes/functions_user.{$phpEx}");

		//default user info
		$user_row = array(
			'username' 		=> $phpbb_vars['username'],
			'user_password' => phpbb_hash($phpbb_vars['user_password']),
			'user_email' 	=> $phpbb_vars['user_email'],
			'group_id' 		=> $phpbb_vars['group_id'],
			'user_type' 	=> isset($phpbb_vars['user_type']) ? $phpbb_vars['user_type'] : '0',
		);

		//register user
		if($phpbb_user_id = user_add($user_row)) {
			//update the rest of the fields
			$this->user_update($phpbb_vars);
			return true;
		}

		return false;
	}

	//user_delete
	public function user_delete($phpbb_vars)
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;

		//general info
		$this->init();

		//user functions
		require_once("{$phpbb_root_path}includes/functions_user.{$phpEx}");

		//get user_id if possible
		if(isset($phpbb_vars['user_id']) || $phpbb_vars['user_id'] = $this->get_user_id_from_name($phpbb_vars['username']))
		{
			//delete user (always returns false)
			user_delete('remove', $phpbb_vars['user_id']);
			return true;
		}
		
		return false;
	}

	//user_update
	public function user_update($phpbb_vars)
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;

		//general info
		$this->init();

		//user functions
		require_once("{$phpbb_root_path}includes/functions_user.{$phpEx}");

		//get user_id if possible
		if(!isset($phpbb_vars['user_id']))
		{
			if(isset($phpbb_vars['username']))
				$phpbb_vars['user_id'] = $this->get_user_id_from_name($phpbb_vars['username']);
			if(!isset($phpbb_vars['user_id']))
				return false;	
		}

		$this->get_table_fields(USERS_TABLE);

		if(isset($phpbb_vars['username']))
			$phpbb_vars['username_clean'] = utf8_clean_string($phpbb_vars['username']);
		if(isset($phpbb_vars['user_password']))
			$phpbb_vars['user_password'] = phpbb_hash($phpbb_vars['user_password']);
		if(isset($phpbb_vars['user_newpasswd']))
			$phpbb_vars['user_newpasswd'] = phpbb_hash($phpbb_vars['user_newpasswd']);
		$sql = '';
		//generate sql
		for($i = 0; $i < count($this->table_fields[USERS_TABLE]); $i++)
		{
			if(isset($phpbb_vars[$this->table_fields[USERS_TABLE][$i]]) && $this->table_fields[USERS_TABLE][$i] != 'user_id')
			{
				$sql .= ", " . $this->table_fields[USERS_TABLE][$i] . " = '" . $db->sql_escape($phpbb_vars[$this->table_fields[USERS_TABLE][$i]]) . "'";
			}
		}

		if(strlen($sql) > 0)
		{
			$db->sql_query("UPDATE " . USERS_TABLE . " SET " . substr($sql, 2) . " WHERE user_id = '" . $phpbb_vars['user_id'] . "'");
			return true;
		}

		return false;
	}

	//user_change_password
	public function user_change_password($phpbb_vars)
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;

		//general info
		$this->init();

		//user functions
		require_once("{$phpbb_root_path}includes/functions_user.{$phpEx}");

		//get user_id if possible
		if(isset($phpbb_vars['user_id']) || $phpbb_vars['user_id'] = $this->get_user_id_from_name($phpbb_vars['username'])) 
		{
			$db->sql_query("UPDATE " . USERS_TABLE . " SET user_password = '" . phpbb_hash($phpbb_vars['password']) . "' WHERE user_id = '" . $phpbb_vars['user_id'] . "'");
			return true;
		}
		
		return false;
	}

	private function get_table_fields($table)
	{
		//if already got table fields once
		if(isset($this->table_fields[$table]))
		{
			return true;
		}

		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;

		//general info
		$this->init();

		if($result = $db->sql_query("SHOW FIELDS FROM $table"))
		{
			//get table fields
			$this->table_fields[$table] = array();
			while($row = $db->sql_fetchrow($result))
				$this->table_fields[$table][] = $row['Field'];
			$db->sql_freeresult($result);
	
			return true;
		}
		
		return false;
	}

	//get user id if we know username
	public function get_user_id_from_name($username, $init = false)
	{
		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;

		if($init)
		{
			$this->init();
		}
		
		//user functions
		require_once("{$phpbb_root_path}includes/functions_user.{$phpEx}");

		if(isset($username))
		{
			$user_id = false;
			user_get_id_name($user_id, $username);
			if(isset($user_id[0]))
				return $user_id[0];
		}
		
		return false;
	}

}

?>
