<?php
/**
 * PhpBBUserBehavior
 *
 * Automatically add/remove/update forum user
 *
 * <pre>
 * return array(
 *
 *     'modules'=>array(
 *          // ...
 *          'phpbb',
 *     }
 *
 *     'components'=>array(
 *         // ...
 *
 *         'db'=>array(
 *             'connectionString' => '...',
 *         ),

 *         'forumDb'=>array(
 *             'class'=>'CDbConnection',
 *             'connectionString' => '...',
 *             'tablePrefix' => 'phpbb_',
 *             'charset' => 'utf8',
 *         ),
 *
 *         'phpBB'=>array(
 *             'class'=>'phpbb.extensions.phpBB.phpBB',
 *             'path'=>'webroot.forum',
 *         ),
 *
 *         'image'=>array(
 *             'class'=>'ext.image.CImageHandler',
 *         ),
 *
 *         'file'=>array(
 *             'class'=>'ext.file.CFile',
 *         ),
 *     ),
 * );
 * </pre>
 *
 * <pre>
 * class User extends CActiveRecord
 * {
 *     public function behaviors()
 *     {
 *         return array(
 *             'PhpBBUserBehavior'=>array(
 *                 'class'=>'phpbb.components.PhpBBUserBehavior',
 *                 'usernameAttribute'=>'username',
 *                 'newPasswordAttribute'=>'new_password',
 *                 'emailAttribute'=>'email',
 *                 'avatarAttribute'=>'avatar',
 *                 'avatarPath'=>'webroot.upload.images.avatars',
 *                 'syncAttributes'=>array(
 *                     'site'=>'user_website',
 *                     'icq'=>'user_icq',
 *                     'from'=>'user_from',
 *                     'occ'=>'user_occ',
 *                     'interests'=>'user_interests',
 *                 )
 *             ),
 *         );
 *     }
 * }
 * </pre>
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * @version 1.0
 */

class PhpBBUserBehavior extends CActiveRecordBehavior
{

	/**
	 * @var string User attribute which contains a plain text password
	 */
	public $newPasswordAttribute = 'new_password';

	public $userTypeAttribute = null;

	public $groupAttribute = null;
	/**
	 * @var string User attribute which contains filename with extension
	 */
	public $avatarAttribute = null;
	/**
	 * @var string path like 'webroot.upload.avatars'
	 */
	public $avatarPath = null;
	/**
	 * @var array attributes to sync with forum record in the form of "model attribute => forum attribute"
	 */
	private $_yiiToPhpBBAttributes = array();

	private $_phpBBToYiiAttributes = array();

	private $_attributeAudit = array();

	private $_avatarAudit = null;

	private $_groupAudit = null;

	private $_userTypeAudit = null;

	public function __construct()
	{
		$this->setSyncAttributes(array('username' => 'username', 'email' => 'user_email'));
	}

	public function setSyncAttributes($attributes)
	{
		foreach($attributes as $yiiAttr => $phpBBAttr)
		{
			if(isset($this->_yiiToPhpBBAttributes[$yiiAttr]))
				unset($this->_phpBBToYiiAttributes[$this->_yiiToPhpBBAttributes[$yiiAttr]]);
			if(isset($this->_phpBBToYiiAttributes[$phpBBAttr]))
				unset($this->_yiiToPhpBBAttributes[$this->_phpBBToYiiAttributes[$phpBBAttr]]);

			$this->_phpBBToYiiAttributes[$phpBBAttr] = $yiiAttr;
			$this->_yiiToPhpBBAttributes[$yiiAttr] = $phpBBAttr;
		}
	}

	public function yiiToPhpBBAttribute($yiiAttribute)
	{
		return $this->_yiiToPhpBBAttributes[$yiiAttribute];
	}

	public function phpBBToYiiAttribute($phpBBattribute)
	{
		return $this->_phpBBToYiiAttributes[$phpBBattribute];
	}

	public function beforeFind($event)
	{
		$user = $this->getOwner();

		if(isset($this->avatarAttribute) && isset($this->avatarPath) && array_key_exists($this->avatarAttribute, $user->relations()))
		{
			$user->with($this->avatarAttribute);
		}

		if(isset($this->groupAttribute) && array_key_exists($this->groupAttribute, $user->relations()))
		{
			$user->with($this->groupAttribute);
		}

		if(isset($this->userTypeAttribute) && array_key_exists($this->userTypeAttribute, $user->relations()))
		{
			$user->with($this->userTypeAttribute);
		}

		foreach($this->_phpBBToYiiAttributes as $yiiAttribute)
		{
			if(array_key_exists($yiiAttribute, $user->relations()))
			{
				$user->with($yiiAttribute);
			}
		}
	}

	public function afterFind($event)
	{
		$user = $this->getOwner();

		if(isset($this->avatarAttribute) && isset($this->avatarPath))
		{
			$this->_avatarAudit = $user->{$this->avatarAttribute};
		}

		if(isset($this->groupAttribute))
		{
			$this->_groupAudit = $user->{$this->groupAttribute};
		}

		if(isset($this->userTypeAttribute))
		{
			$this->_userTypeAudit = $user->{$this->userTypeAttribute};
		}

		foreach($this->_phpBBToYiiAttributes as $yiiAttribute)
		{
			$this->_attributeAudit[$yiiAttribute] = $user->$yiiAttribute;
		}
	}

	public function beforeValidate($event)
	{
		$user = $this->getOwner();

		if($user->getIsNewRecord() && PhpbbModule::getInstance()->getUserIdFromName($user->{$this->_phpBBToYiiAttributes['username']}) !== false)
		{
			$user->addError($this->_phpBBToYiiAttributes['username'], Yii::t(PhpbbModule::ID, 'The username {username} has already been taken.', array('{username}' => $user->{$this->_phpBBToYiiAttributes['username']})));
		}
	}

	public function afterSave($event)
	{
		$user = $this->getOwner();

		if($user->getIsNewRecord())
		{
			$this->phpBBAddUser();
		}
		else
		{
			if(isset($this->_attributeAudit[$this->_phpBBToYiiAttributes['username']]))
			{
				$username = $this->_attributeAudit[$this->_phpBBToYiiAttributes['username']];
			}
			else
			{
				$username = (array_key_exists($this->_phpBBToYiiAttributes['username'], $user->relations()) ? $user->getRelated($this->_phpBBToYiiAttributes['username'], true) : $user->{$this->_phpBBToYiiAttributes['username']});
			}
			if(PhpbbModule::getInstance()->getUserIdFromName($username) === false)
			{
				$this->phpBBAddUser();
			}
			else
			{
				$this->phpBBUpdateAttributes();
			}
		}

		if(isset($this->_avatarAudit) &&
			$this->_avatarAudit !== (array_key_exists($this->avatarAttribute, $user->relations()) ? $user->getRelated($this->avatarAttribute, true) : $user->{$this->avatarAttribute}))
		{
			$this->phpBBUpdateAvatar();
		}
	}

	public function afterDelete($event)
	{
		$phpBB = PhpbbModule::getInstance();
		$user_id = $phpBB->getUserIdFromName($this->getOwner()->{$this->_phpBBToYiiAttributes['username']});
		if($user_id !== false)
		{
			$phpBB->userDelete($user_id);
		}
	}

	public function phpBBAddUser($plainTextPassword = '')
	{
		$user = $this->getOwner();

		if(empty($plainTextPassword))
			$plainTextPassword = $user->{$this->newPasswordAttribute};

		if(!empty($plainTextPassword))
		{
			$additional_attributes = array();

			foreach($this->_yiiToPhpBBAttributes as $yiiAttribute => $phpBBAttribute)
			{
				$additional_attributes[$phpBBAttribute] = array_key_exists($yiiAttribute, $user->relations()) ? $user->getRelated($yiiAttribute, true) : $user->$yiiAttribute;
			}

			return PhpbbModule::getInstance()->userAdd(
				$user->{$this->_phpBBToYiiAttributes['username']},
				$plainTextPassword,
				$user->{$this->_phpBBToYiiAttributes['email']},
				isset($this->groupAttribute) ? $user->{$this->groupAttribute} : 'REGISTERED',
				isset($this->userTypeAttribute) ? $user->{$this->userTypeAttribute} : phpBB::USER_NORMAL,
				$additional_attributes
			);
		}

		return false;
	}

	public function phpBBUpdateAttributes()
	{
		$user = $this->getOwner();
		$phpBB = PhpbbModule::getInstance();
		
		$attrs = array();

		foreach($this->_attributeAudit as $attribute => $oldValue)
		{
			if($oldValue !== (array_key_exists($attribute, $user->relations()) ? $user->getRelated($attribute, true) : $user->$attribute))
			{
				$attrs[$this->_yiiToPhpBBAttributes[$attribute]] = $user->$attribute;
			}
		}

		if(isset($this->groupAttribute) &&
			$this->_groupAudit !== (array_key_exists($this->groupAttribute, $user->relations()) ? $user->getRelated($this->groupAttribute, true) : $user->{$this->groupAttribute}))
		{
			$group = $user->{$this->groupAttribute};
			$attrs['group_id'] = is_numeric($group) ? $group : $phpBB->getGroupIdFromName(strval($group));
		}

		if(isset($this->userTypeAttribute) &&
			$this->_userTypeAudit !== (array_key_exists($this->userTypeAttribute, $user->relations()) ? $user->getRelated($this->userTypeAttribute, true) : $user->{$this->userTypeAttribute}))
		{
			$attrs['user_type'] = $user->{$this->userTypeAttribute};
		}

		if(!empty($user->{$this->newPasswordAttribute}))
		{
			$attrs['user_password'] = $user->{$this->newPasswordAttribute};
		}

		if(!empty($attrs))
		{
			$attrs['user_id'] = $phpBB->getUserIdFromName(isset($attrs['username']) ? $this->_attributeAudit[$this->_phpBBToYiiAttributes['username']] : $user->{$this->_phpBBToYiiAttributes['username']});
			if($attrs['user_id'] === false)
			{
				return false;
			}
		}
		else
		{
			return true;
		}

		return $phpBB->userUpdate($attrs);
	}

	public function phpBBUpdateAvatar()
	{
		if(!isset($this->avatarAttribute) || !isset($this->avatarPath))
			return;

		$yiiUser = $this->getOwner();

		$user = $this->phpBBGetUserModel($yiiUser->{$this->_phpBBToYiiAttributes['username']});
		if (!$user)
		{
			return;
		}

		$this->_deleteAvatar($user);
		if(isset($yiiUser->{$this->avatarAttribute}))
		{
			$originalFile = $this->avatarPath . DIRECTORY_SEPARATOR . $yiiUser->{$this->avatarAttribute};
			if(file_exists($originalFile))
			{
				$orig = Yii::app()->image->load($originalFile); /* @var $orig CImageHandler */

				$forumFileName = $this->getForumConfigValue('avatar_salt') . '_' . $user->getPrimaryKey() . '.' . $orig->ext;
				$forumFile = $this->getForumAvatarPath() . DIRECTORY_SEPARATOR . $forumFileName;

				$thumb = $orig->resize($this->getForumConfigValue('avatar_max_width'), $this->getForumConfigValue('avatar_max_height'));
				if($thumb->save($forumFile))
				{
					$user->user_avatar = $user->getPrimaryKey() . '_' . time()  . '.' . $orig->ext;
					$user->user_avatar_type = 1;
					$user->user_avatar_width = $thumb->width;
					$user->user_avatar_height = $thumb->height;
				}
			}
		}
		$user->save();
	}

	public function phpBBGetUserModel($username)
	{
		return PhpBBUser::model()->findByName($username);
	}

	protected function _deleteAvatar(&$user)
	{
		if($user->user_avatar)
		{
			$oldForumFile = $this->getForumAvatarPath() . DIRECTORY_SEPARATOR . $this->getForumConfigValue('avatar_salt') . '_' . $user->user_avatar;
			@unlink($oldForumFile);
		}

		$user->user_avatar_type = 0;
		$user->user_avatar_width = 0;
		$user->user_avatar_height = 0;
	}

	protected $_avatarPath;

	protected function getForumAvatarPath()
	{
		if ($this->_avatarPath === null)
		{
			$this->_avatarPath = Yii::getPathOfAlias(PhpbbModule::getInstance()->path) . DIRECTORY_SEPARATOR . $this->getForumConfigValue('avatar_path');
		}
		return $this->_avatarPath;
	}

	protected $_configData = array();

	protected function getForumConfigValue($param)
	{
		if (!isset($this->_configData[$param]))
		{
			$this->_configData[$param] = PhpbbModule::getInstance()->getDbConnection()->createCommand()->select('config_value')->from('{{config}}')->where('config_name=:param')->queryScalar(array(':param' => $param));
		}

		return $this->_configData[$param];
	}
}