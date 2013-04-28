<?php

/**
 * component to work with phpBB forum users
 *
 * @author Veaceslav Rudnev <slava.rudnev@gmail.com>
 * @modified ElisDN <mail@elisdn.ru>
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

Yii::import('phpbb.extensions.phpBB.phpbbClass');

class phpBB extends CApplicationComponent
{
	/**
	 * Path to forum
	 * @var string
	 */
	public $path;

	/**
	 * PHP file extentions
	 * @var string
	 */
	public $php = 'php';

	protected $_phpbb;

	public function init()
	{
		if(!$this->path)
			throw new CException('Must set path to phpBB forum.');

        Yii::import($this->path . '.includes.utf.utf_normalizer');

		$this->_phpbb = new phpbbClass(Yii::getPathOfAlias($this->path) . DIRECTORY_SEPARATOR, $this->php);
	}

	/**
	 * Login in phpBB
	 * @param mixed $username unique username string or Yii IUserIdentity instance
	 * @param string $password
	 * @return boolean false on failure or true on success
	 */
	public function login($username = '', $password = '')
	{
		return $this->_phpbb->user_login(array(
			"username" => $username,
			"password" => $password,
		));
	}

	/**
	 * Logout in phpBB
	 * @return boolean false on failure or true on success
	 */
	public function logout()
	{
		return $this->_phpbb->user_logout();
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
	public function userAdd($username, $password, $email, $group_id, $additional_attributes = array())
	{
		if(is_string($group_id)) {
			$group_id = PhpBBGroup::model()->findByName($group_id);
		} elseif(is_numeric($group_id)) {
			$group_id = PhpBBGroup::model()->findByPk($group_id);
		}
		
		if($group_id === null)
		{
			throw new CException('Unable to add user, an invalid group was specified.');
		}

		return $this->_phpbb->user_add(array_merge(array(
			'username' 		=> $username,
			'user_password' => $password,
			'user_email' 	=> $email,
			'group_id' 		=> $group_id->group_id
			),
			$additional_attributes));
	}

	/**
	 * Delete phpBB user
	 * @param mixed $user integer userid or string username
	 * @return boolean false on failure or true on success
	 */
	public function userDelete($user)
	{
		$phpbb_vars = is_int($user)
			? array("user_id" => $user)
			: array("username" => $user);

		return $this->_phpbb->user_delete($phpbb_vars);
	}

	/**
	 * Change user password
	 * @param mixed $user integer userid or string username
	 * @param string $password new password
	 * @return boolean false on failure or true on success
	 */
	public function changePassword($user, $password)
	{
		$phpbb_vars = is_int($user)
			? array("user_id" => $user)
			: array("username" => $user);

		$phpbb_vars['password'] = $password;

		return $this->_phpbb->user_change_password($phpbb_vars);
	}

	/**
	 * Test if user is logged in phpBB
	 * @return boolean false on failure or true on success
	 */
	public function loggedin()
	{
		return $this->_phpbb->user_loggedin();
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
		return $this->_phpbb->user_update($phpbb_vars);
	}
	
	public function getUserIdFromName($username) 
	{
		return $this->_phpbb->get_user_id_from_name($username, true);
	}
}
