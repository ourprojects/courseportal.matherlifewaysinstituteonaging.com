<?php

/**
 * component to work with phpBB forum users
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 * @version 0.1
 *
 * This component can:
 * login
 * logout
 * user_add
 * user_delete
 * change_password
 * user_update
 * loggedin
 *
 * In config in section components:
 *		...
 *		'phpBB'=>array(
 * 			'class'=>'ext.phpBB.phpBB',
 * 			'path'=>'webroot.forum',
 * 			'php'=>'php', //default
 * 		),
 *		...
 *
 * Using:
 * Yii::app()->phpBB->login($user->phpBBLogin,$this->password);
 * ...
 *
 */

class phpBB extends CApplicationComponent
{

	const ID = 'phpBB';

	const USER_NORMAL = 0;
	const USER_INACTIVE = 1;
	const USER_IGNORE = 2;
	const USER_FOUNDER = 3;

	/**
	 * Path to forum
	 * @var string
	 */
	public $path;

	/**
	 * Web path to forum
	 * @var string
	 */
	public $webPath = '';

	/**
	 * PHP file extentions
	 * @var string
	 */
	public $phpExtension = 'php';

	protected $table_fields = array();

	private $_prepared = false;

	public function init()
	{
		if(!$this->path)
		{
			throw new CException('Must set path to phpBB forum.');
		}

		global $phpbb_root_path, $phpEx;

		define('IN_PHPBB', true);
		$phpbb_root_path = Yii::getPathOfAlias($this->path) . DIRECTORY_SEPARATOR;
		$phpEx = $this->phpExtension;

		require_once($phpbb_root_path.'includes'.DIRECTORY_SEPARATOR.'utf'.DIRECTORY_SEPARATOR.'utf_normalizer.'.$phpEx);
	}

	public function prepare($loggingIn = false)
	{
		if($loggingIn && !defined('IN_LOGIN'))
		{
			define('IN_LOGIN', true);
		}
		else if($this->_prepared)
		{
			return;
		}

		global $phpbb_root_path, $phpEx, $db, $config, $user, $auth, $cache, $template;

		require_once($phpbb_root_path.'common.'.$phpEx);

		if($loggingIn && (!isset($config['auth_method']) || $config['auth_method'] !== 'yii'))
		{
			set_config('auth_method', 'yii');
		}

		$user->session_begin();
		$auth->acl($user->data);

		$this->_prepared = true;
	}

	public function getForumUrl()
	{
		return Yii::app()->getBaseUrl(true) . '/' . $this->webPath;
	}

	public function getACPurl($params = false, $is_amp = true)
	{
		global $phpbb_root_path, $phpEx, $user;

		$this->prepare();

		require_once($phpbb_root_path.'includes'.DIRECTORY_SEPARATOR.'functions.'.$phpEx);

		return append_sid($this->getForumUrl() . '/adm/index.' . $phpEx, $params, $is_amp, $user->session_id);
	}

	/**
	 * Login in phpBB
	 * @param mixed $username unique username string or Yii IUserIdentity instance
	 * @param string $password
	 * @return boolean false on failure or true on success
	 */
	public function login($user, $password = '', $autologin = false, $viewonline = 1, $admin = 0)
	{
		global $auth, $_SID;

		$this->prepare(true);

		$login = $auth->login($user, $password, $autologin, $viewonline, $admin);

		$_SESSION['sid'] = $_SID;

		return $login['status'] == LOGIN_SUCCESS;
	}

	/**
	 * Logout in phpBB
	 * @return boolean false on failure or true on success
	 */
	public function logout()
	{
		global $user, $auth;

		$this->prepare(true);

		if($user->data['user_id'] != ANONYMOUS)
		{
			$user->session_kill();
			$user->session_begin();
			return true;
		}

		return false;
	}

	/**
	 * Add user to phpBB
	 * @param string $username
	 * @param string $password
	 * @param string $email
	 * @param int $group_id
	 * @param int $user_type
	 * @return boolean false on failure or true on success
	 */
	public function userAdd($username, $password, $email, $groupId, $userType, $additional_attributes = array())
	{
		if(is_numeric($groupId))
		{
			$group = PhpBBGroup::model()->findByPk($groupId);
		}
		elseif($groupId instanceof PhpBBGroup)
		{
			$group = $groupId;
		}
		else
		{
			$group = PhpBBGroup::model()->findByName(strval($groupId));
		}

		if($group === null)
		{
			throw new CException(Yii::t(self::ID, 'Unable to add user, an invalid group was specified.'));
		}

		global $phpbb_root_path, $phpEx;

		$this->prepare();

		require_once($phpbb_root_path.'includes'.DIRECTORY_SEPARATOR.'functions_user.'.$phpEx);

		$user_row = array(
				'username' 		=> $username,
				'user_password' => phpbb_hash($password),
				'user_email' 	=> $email,
				'group_id' 		=> $group->group_id,
				'user_type' 	=> $userType,
		);

		if($additional_attributes['user_id'] = user_add($user_row))
		{
			$this->userUpdate($additional_attributes);
			return true;
		}

		return false;
	}

	/**
	 * Delete phpBB user
	 * @param integer $user_id integer user's id
	 * @param string $mode
	 * @param mixed $post_username
	 */
	public function userDelete($user_id, $mode = 'remove', $post_username = false)
	{
		global $phpbb_root_path, $phpEx;

		$this->prepare();

		require_once($phpbb_root_path.'includes'.DIRECTORY_SEPARATOR.'functions_user.'.$phpEx);

		user_delete($mode, $user_id, $post_username);
	}

	/**
	 * Change user password
	 * @param integer $user_id integer user's id
	 * @param string $password new password
	 * @return boolean false on failure or true on success
	 */
	public function changePassword($user_id, $password)
	{
		global $phpbb_root_path, $phpEx, $db;

		$this->prepare();

		require_once($phpbb_root_path.'includes'.DIRECTORY_SEPARATOR.'functions_user.'.$phpEx);

		$db->sql_query("UPDATE " . USERS_TABLE . " SET user_password = '" . phpbb_hash($password) . "' WHERE user_id = '" . $user_id . "'");
	}

	/**
	 * Test if user is logged in phpBB
	 * @return boolean false on failure or true on success
	 */
	public function loggedIn()
	{
		global $user;

		$this->prepare();

		return is_array($user->data) && isset($user->data['user_id']) && $user->data['user_id'] != ANONYMOUS && $user->data['user_id'] > 0;
	}

	/**
	 * Update user information
     * array(
     *     'username'=>'...',
     *     'user_password'=>'...',
     * 	   'user_email'=>'...',
     *      // ...
     * );
	 * @param array $phpbb_vars
	 * @return boolean false on failure or true on success
	 */
	public function userUpdate($phpbb_vars)
	{
		global $phpbb_root_path, $phpEx, $db;

		$this->prepare();

		require_once($phpbb_root_path.'includes'.DIRECTORY_SEPARATOR.'functions_user.'.$phpEx);

		if(!isset($phpbb_vars['user_id']))
		{
			if(isset($phpbb_vars['username']))
				$phpbb_vars['user_id'] = $this->getUserIdFromName($phpbb_vars['username']);
			if(!isset($phpbb_vars['user_id']))
				return false;
		}

		if($this->getTableFields(USERS_TABLE))
		{
			if(isset($phpbb_vars['username']))
				$phpbb_vars['username_clean'] = utf8_clean_string($phpbb_vars['username']);
			if(isset($phpbb_vars['user_password']))
				$phpbb_vars['user_password'] = phpbb_hash($phpbb_vars['user_password']);
			if(isset($phpbb_vars['user_newpasswd']))
				$phpbb_vars['user_newpasswd'] = phpbb_hash($phpbb_vars['user_newpasswd']);

			if(isset($phpbb_vars['group_id']))
			{
				group_set_user_default($phpbb_vars['group_id'], array($phpbb_vars['user_id']));
				unset($phpbb_vars['group_id']);
			}

			$sql = '';
			for($i = 0; $i < count($this->table_fields[USERS_TABLE]); $i++)
			{
				if(isset($phpbb_vars[$this->table_fields[USERS_TABLE][$i]]) && $this->table_fields[USERS_TABLE][$i] != 'user_id')
				{
					$sql .= ", " . $this->table_fields[USERS_TABLE][$i] . " = '" . $db->sql_escape($phpbb_vars[$this->table_fields[USERS_TABLE][$i]]) . "'";
				}
			}

			if(strlen($sql) > 0)
			{
				$db->sql_query('UPDATE ' . USERS_TABLE . ' SET ' . substr($sql, 2) . " WHERE user_id = '" . $phpbb_vars['user_id'] . "'");
				return true;
			}
		}

		return false;
	}

	public function userUpdateName($old_name, $new_name)
	{

	}

	public function userActiveFlip($mode, $user_ids, $reason)
	{

	}

	public function validateUsername($username)
	{

	}

	public function validatePassword($password)
	{

	}

	public function validateEmail($email)
	{

	}

	public function validateJabber($jid)
	{

	}

	private function getTableFields($table)
	{
		if(isset($this->table_fields[$table]))
		{
			return true;
		}

		global $db;

		$this->prepare();

		if($result = $db->sql_query('SHOW FIELDS FROM '.$table))
		{
			$this->table_fields[$table] = array();
			while($row = $db->sql_fetchrow($result))
			{
				$this->table_fields[$table][] = $row['Field'];
			}
			$db->sql_freeresult($result);

			return true;
		}

		return false;
	}

	public function getGroupIdFromName($groupname)
	{
		global $db;

		$this->prepare();

		$sql = 'SELECT group_id FROM ' . GROUPS_TABLE . " WHERE group_name = '" . $groupname . "'";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		return $row ? $row['group_id'] : false;
	}

	public function getUserIdFromName($username)
	{
		global $phpbb_root_path, $phpEx;

		$this->prepare();

		require_once($phpbb_root_path.'includes'.DIRECTORY_SEPARATOR.'functions_user.'.$phpEx);

		if(isset($username))
		{
			$user_id = false;
			user_get_id_name($user_id, $username);
			if(isset($user_id[0]))
			{
				return $user_id[0];
			}
		}

		return false;
	}

}
