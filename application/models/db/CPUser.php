<?php
/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string  $password
 * @property string  $salt
 * @property string  $email
 * @property string  $name
 * @property string  $session_key
 * @property string  $created
 * @property string  $last_ip
 * @property string  $last_agent
 * @property string  $last_login
 * @property string  $language
 * @property string  $firstname
 * @property string  $lastname
 * @property string  $location
 * @property string  $country_iso
 *
 * The followings are the available model relations:
 * @property Avatar $avatar
 * @property Referral[] $referrals
 * @property Referral[] $referees
 * @property UploadedFile[] $uploadedFiles
 * @property Group $group
 * @property UserActivated $activated
 * @property UserProfile $userProfile
 */

class CPUser extends CActiveRecord
{

	public $new_password = null;

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table username
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
				array('password, salt, session_key, group_id, last_ip, last_login, language, isActivated', 'unsafe', 'except' => 'admin'),
				array('session_key', 'filter', 'filter' => array($this, 'generateSessionKey'), 'except' => 'search'),
				array('email, name, session_key, firstname, lastname', 'required', 'except' => 'search'),
				array('new_password', 'required', 'on' => 'insert'),
				array('password', 'ext.pbkdf2.PBKDF2validator', 'allowEmpty' => true),
				array('salt, session_key', 'ext.pbkdf2.PBKDF2validator', 'except' => 'search'),

				array('firstname, lastname, location, last_agent', 'length', 'max' => 255),
				array('created', 'date', 'format' => 'yyyy-M-d H:m:s'),
				array('last_login', 'date', 'format' => 'yyyy-M-d H:m:s'),
				array('last_ip', 'length', 'max' => 40),
				array('language', 'default', 'setOnEmpty' => true, 'value' => Yii::app()->getLanguage(), 'except' => 'search'),
				array('language', 'length', 'max' => 16),
				array('country_iso', 'length', 'max' => 3),

				array('email, name', 'length', 'max' => 127),
				array('email', 'email'),
				array('email, name', 'unique', 'caseSensitive' => false, 'except' => 'search'),

				array('group_id', 'setDefaultGroupID', 'setOnEmpty' => true, 'except' => 'search'),
				array('group_id', 'exist', 'attributeName' => 'id', 'className' => 'Group'),

				array('name, new_password, email, firstname, lastname, location, country_iso', 'safe'),
				array('id, group_id, created, last_ip, last_login, last_agent, language', 'safe', 'on' => 'search')
		);
	}

	public function behaviors()
	{
		return array_merge(parent::behaviors(), array(
				'PhpBBUserBehavior' => array(
						'class' => 'phpbb.components.PhpBBUserBehavior',
						'newPasswordAttribute' => 'new_password',
						'groupAttribute' => 'group',
						'userTypeAttribute' => 'phpbbUserType',
						'avatarAttribute' => 'avatar',
						'avatarPath' => Yii::getPathOfAlias(Avatar::AVATARS_PATH_ALIAS),
						'forumDbConnection' => 'forumDb',
						'syncAttributes' => array(
								'name' => 'username',
								'email' => 'email',
								'fullLocation' => 'user_from',
								'language' => 'user_lang',
								'createdUnixTime' => 'user_regdate',
						)
				),
				'SrbacBehavior' => array(
						'class' => 'srbac.components.SrbacBehavior'
				),
				'CourseBehavior' => array(
						'class' => 'course.components.CourseBehavior'
				),
				'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors'),
				'PBKDF2Behavior' => array(
						'class' => 'ext.pbkdf2.PBKDF2Behavior',
						'saltAttribute' => 'salt',
						'hashAttribute' => 'password',
						'newValueAttribute' => 'new_password',
						'generateSaltOnNewRecord' => true,
						'clearNewValueAfterSave' => false
				),
				'ERememberFiltersBehavior' => array(
						'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
				),
				'EActiveRecordAutoQuoteBehavior' => array(
						'class' => 'ext.EActiveRecordAutoQuoteBehavior.EActiveRecordAutoQuoteBehavior',
				)
		));
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'avatar' => array(self::HAS_ONE, 'Avatar', 'user_id'),
			'referees' => array(self::HAS_MANY, 'Referral', 'referee'),
			'referrals' => array(self::HAS_MANY, 'Referral', 'referrer'),
			'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
			'uploadedFiles' => array(self::HAS_MANY, 'UploadedFile', 'user_id'),
			'activated' => array(self::HAS_ONE, 'UserActivated', 'user_id'),
			'phpBbUser' => array(self::HAS_ONE, 'PhpBBUser', array('username' => 'username')),
			'userAgreements' => array(self::HAS_MANY, 'UserAgreement', 'user_id'),
			'agreements' => array(self::MANY_MANY, 'Agreement', UserAgreement::model()->tableName().'(user_id, agreement_id)'),
		);
	}

	public function generateSessionKey($sessionKey = null)
	{
		if(!isset($sessionKey))
		{
			$sessionKey = $this->generateIV();
		}
		return $sessionKey;
	}

	public function getPhpbbUserType()
	{
		if($this->getIsActivated())
		{
			return Yii::app()->getAuthManager()->isSuperUser($this->getAttribute('id')) ? phpBB::USER_FOUNDER : phpBB::USER_NORMAL;
		}
		return phpBB::USER_INACTIVE;
	}

	public function getCountry()
	{
		return isset($this->country_iso) ? Yii::app()->translate->getTerritoryDisplayName($this->country_iso) : '';
	}

	public function getFullLocation()
	{
		if(isset($this->location))
		{
			if(isset($this->country_iso))
				return $this->location . ', ' . Yii::app()->translate->getTerritoryDisplayName($this->country_iso);
			return $this->location;
		}
		if(isset($this->country_iso))
		{
			return Yii::app()->translate->getTerritoryDisplayName($this->country_iso);
		}
		return '';
	}

	public function getCreatedUnixTime()
	{
		if(preg_match('/^(?P<year>\d+)-(?P<month>\d+)-(?P<day>\d+) (?P<hour>\d+):(?P<minute>\d+):(?P<second>\d+)$/',
				$this->created,
				$matches))
		{
			return mktime(
					$matches['hour'],
					$matches['minute'],
					$matches['second'],
					$matches['month'],
					$matches['day'],
					$matches['year']);
		}
		return time();
	}

	public function getIsActivated()
	{
		return $this->activated instanceof UserActivated && !$this->activated->getIsNewRecord();
	}

	public function setIsActivated($isActivated)
	{
		$model = $this->getRelated('activated');
		if($isActivated)
		{
			if(!$model instanceof UserActivated)
			{
				$model = new UserActivated();
				$model->setAttribute('date', date('Y-m-d H:i:s'));
			}
		}
		else if($model instanceof UserActivated)
		{
			if(!$model->getIsNewRecord())
			{
				$model->delete();
			}
			$model = null;
		}
		$this->activated = $model;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' 			 => t('ID'),
			'new_password' 	 => t('New Password'),
			'password' 		 => t('Password'),
			'salt' 			 => t('Salt'),
			'group_id' 		 => t('Group'),
			'email' 		 => t('Email'),
			'name' 			 => t('Username'),
			'session_key' 	 => t('Session Key'),
			'created' 		 => t('Created'),
			'referees' 		 => t('Referees'),
			'referrals' 	 => t('Referrals'),
			'uploadedFiles'  => t('Uploaded Files'),
			'activated'  	 => t('Activated'),
			'group' 		 => t('Group'),
			'firstname' 	 => t('First Name'),
			'lastname' 		 => t('Last Name'),
			'location' 		 => t('Location'),
			'fullLocation' 	 => t('Full Location'),
			'country_iso' 	 => t('Country'),
			'last_login' 	 => t('Last Login'),
			'last_ip' 		 => t('Last IP Address'),
			'last_agent'	 => t('Last Agent'),
			'language' 		 => t('Preferred Language'),
			'userAgreements' => t('User Agreements'),
			'agreements' 	 => t('Agreements')
		);
	}

	public function getSearchCriteria()
	{
		$criteria = new CDbCriteria;

		$tableAlias = $this->getTableAlias();
		$db = $this->getDbConnection();
		$criteria->compare($db->quoteColumnName($tableAlias.'.id'), $this->id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.group_id'),$this->group_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.email'), $this->email, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.name'), $this->name, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.created'), $this->created, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.firstname'), $this->firstname, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.lastname'), $this->lastname, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.location'), $this->location, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.country_iso'), $this->country_iso, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.last_login'), $this->last_login, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.last_ip'), $this->last_ip, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.last_agent'), $this->last_agent, true);

		return $criteria;
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		return new CActiveDataProvider($this, array(
				'criteria' => $this->getSearchCriteria(),
		));
	}

	public static function getUniqueName($name)
	{
		if(!isset($name))
		{
			do
			{
				$name = uniqid('temp_username_');
			}
			while(self::model()->autoQuoteExists(array('and', 'name' => $name)));
		}
		return $name;
	}

	/**
	 * Regenerates the session key for this user and saves to database.
	 * @return boolean whether the session key was successfully updated for this user.
	 */
	public function regenerateSessionKey($saveImmediately = true)
	{
		$this->session_key = $this->generateIV();
		return !$saveImmediately || $this->save(true, array('session_key'));
	}

	public function encodeUrl($url)
	{
		if(stripos($url, '/') !== strlen($url) - 1)
			$url .= '/';
		return Yii::app()->createAbsoluteUrl($url . 'id/' . urlencode($this->id) . '/session_key/' . CBase64::urlEncode($this->session_key));
	}

	public function setDefaultGroupID($attribute, $params)
	{
		if($this->getIsNewRecord() || !$params['setOnEmpty'] || empty($this->$attribute))
		{
			if($emailGroup = GroupRegularExpression::model()->find(':email REGEXP '.$this->getDbConnection()->quoteColumnName($this->getTableAlias().'.name'), array(':email' => $this->email)))
			{
				$this->$attribute = $emailGroup->group_id;
			}
			else
			{
				$this->$attribute = Group::model()->autoQuoteFind(array('and', 'name' => Group::DEFAULT_GROUP))->id;
			}
		}
	}

	private $_groupIdAudit;

	protected function beforeFind()
	{
		parent::beforeFind();
		$this->with('group');
	}

	protected function afterFind()
	{
		parent::afterFind();
		$this->_groupIdAudit = $this->group->id;
	}

	protected function afterSave()
	{
		$activated = $this->getRelated('activated');
		if($activated instanceof UserActivated && $activated->getIsNewRecord())
		{
			$activated->setAttribute('user_id', $this->getAttribute('id'));
			$activated->save();
			$this->addErrors($activated->getErrors());
		}

		if($this->getIsNewRecord() || $this->_groupIdAudit !== $this->getRelated('group', true)->id)
		{
			$db = $this->getDbConnection();
			$assignments = $db->createCommand()
				->select(array('it.id'))
				->from(Yii::app()->getAuthManager()->assignmentTable.' at')
				->join(Yii::app()->getAuthManager()->itemTable.' it', $db->quoteColumnName('at.item_id').'='.$db->quoteColumnName('it.id'))
				->where(array('and', $db->quoteColumnName('it.name').'!=:superUser', $db->quoteColumnName('at.user_id').'=:user_id'),
						array(':user_id' => $this->id, ':superUser' => SrbacUtilities::getSrbacModule()->superUser))
			->queryColumn();
			$assignments = array_flip($assignments);
			foreach($this->group->authItems as $authItem)
			{
				if(isset($assignments[$authItem->auth_item_id]))
				{
					unset($assignments[$authItem->auth_item_id]);
				}
				else
				{
					$this->assign($authItem->auth_item_id);
				}
			}

			foreach($assignments as $index => $value)
			{
				$this->revoke($index);
			}
		}

		parent::afterSave();
	}

}