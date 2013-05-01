<?php defined('BASEPATH') or exit('No direct script access allowed');  
/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string  $password
 * @property string  $salt
 * @property integer $group_id
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
 * @property Course[] $courses
 * @property UserCourse[] $userCourses
 * @property Group $group
 * @property UserActivated $userActivated
 * @property UserProfile $userProfile
 */

class CPUser extends CActiveRecord {
	
	public $new_password = null;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table username
	 */
	public function tableName() {
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
			array('password, salt, session_key, group_id, last_ip, last_login, language', 'unsafe'),
			array('session_key', 'default', 'value' => $this->generateIV(), 'setOnEmpty' => true),
			array('email, name, session_key, firstname, lastname', 'required', 'except' => 'search'),
			array('new_password', 'required', 'on' => 'new'),
			array('password', 'ext.pbkdf2.PBKDF2validator', 'allowEmpty' => true),
			array('salt, session_key', 'ext.pbkdf2.PBKDF2validator', 'except' => 'search'),
				
			array('firstname, lastname, location, last_agent', 'length', 'max' => 255),
			array('created', 'date', 'format' => 'yyyy-M-d H:m:s'),
			array('last_login', 'date', 'format' => 'yyyy-M-d H:m:s'),
			array('last_ip', 'length', 'max' => 40),
			array('language', 'length', 'max' => 12),
			array('country_iso', 'length', 'max' => 3),
				
			array('email, name', 'length', 'max' => 127),
			array('email', 'email'),
			array('email, name', 'unique', 'except' => 'search'),

			array('group_id', 'setDefaultGroupID', 'setOnEmpty' => true),
			array('group_id', 'exist', 'attributeName' => 'id', 'className' => 'Group'),
			
			array('name, new_password, email, firstname, lastname, location, country_iso', 'safe'),
			array('id, group_id, created, last_ip, last_login, last_agent, language', 'safe', 'on' => 'search')
        );
	}

	public function behaviors() {
		return array_merge(parent::behaviors(), array(
				'PhpBBUserBehavior' => array(
						'class' => 'phpbb.components.PhpBBUserBehavior',
						'newPasswordAttribute' => 'new_password',
						'groupAttribute' => 'group',
						'avatarAttribute' => 'avatar',
						'avatarPath' => Yii::getPathOfAlias(Avatar::AVATARS_PATH_ALIAS),
						'forumDbConnection' => 'forumDb',
						'syncAttributes' => array(
								'name' => 'username',
								'email' => 'email',
								'fullLocation' => 'user_from',
								'language' => 'user_lang',
								'createdUnixTime' => 'user_regdate'
						)
				),
				'toArray' => array('class' => 'behaviors.EArrayBehavior'),
				'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors'),
				'PBKDF2Behavior' => array(
						'class' => 'ext.pbkdf2.PBKDF2Behavior',
						'saltAttribute' => 'salt',
						'hashAttribute' => 'password',
						'newValueAttribute' => 'new_password',
						'generateSaltOnNewRecord' => true,
						'clearNewValueAfterSave' => false
				)
		));
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		Yii::import('phpbb.models.*');
		return array(
			'avatar' => array(self::HAS_ONE, 'Avatar', 'user_id'),
            'referees' => array(self::HAS_MANY, 'Referral', 'referee'),
            'referrals' => array(self::HAS_MANY, 'Referral', 'referrer'),
            'uploadedFiles' => array(self::HAS_MANY, 'UploadedFile', 'user_id'),
            'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
			'userActivated' => array(self::HAS_ONE, 'UserActivated', 'user_id'),
			'userCourses' => array(self::HAS_MANY, 'UserCourse', 'user_id'),
			'courses' => array(self::HAS_MANY, 'Course', array('course_id' => 'id'), 'through' => 'userCourses'),
			'phpBbUser' => array(self::HAS_ONE, 'PhpBBUser', array('username' => 'username')),
			'userAgreements' => array(self::HAS_MANY, 'UserAgreement', 'user_id'),
			'agreements' => array(self::HAS_MANY, 'Agreement', array('agreement_id' => 'id'), 'through' => 'userAgreements'),
		);
	}
	
	public function getCountry()
	{
		return isset($this->country_iso) ? Yii::app()->translate->getTerritoryDisplayName($this->country_iso) : '';
	}
	
	public function getFullLocation() {
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
	
	public function getCreatedUnixTime() {
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
	
	public function getIsGuest() {
		return $this->group instanceof Group && $this->group->getIsGuest();
	}
	
	public function getIsAdmin() {
		return $this->group instanceof Group && $this->group->getIsAdmin();
	}
	
	public function getIsEmployee() {
		return $this->group instanceof Group && $this->group->getIsEmployee();
	}
	
	public function getIsActivated() 
	{
		return $this->userActivated instanceof UserActivated && !$this->userActivated->getIsNewRecord();
	}
	
	public function hasCourse($course) {
		if(is_int($course)) {
			$this->getDbCriteria()->mergeWith(array(
					'with' => 'userCourses', 
					'condition' => 'userCourses.course_id=:course_id',
					'params' => array(':course_id' => $course)
				));
		} else if(is_string($course)) {
			$this->getDbCriteria()->mergeWith(array(
					'with' => 'courses', 
					'condition' => 'course.name=:name',
					'params' => array(':name' => $course)
				));
		} else if($course instanceof Course) {
			return $this->hasCourse($course->id);
		}
		return $this;
	}
	
	public function setDefaultGroupID($attribute, $params)
	{
		if(!$params['setOnEmpty'] || empty($this->$attribute))
		{
			if($emailGroup = GroupRegularExpression::model()->find(':email RLIKE regex', array(':email' => $this->email)))
			{
				$this->$attribute = $emailGroup->group_id;
			}
			else
			{
				$this->$attribute = Group::model()->find('name=:name', array(':name' => Group::DEFAULT_GROUP))->id;
			}
		}
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
            'id' 			 => t('ID'),
			'new_password' 	 => t('New Password'),
            'password' 		 => t('Password'),
            'salt' 			 => t('Salt'),
            'group_id' 		 => t('Group ID'),
            'email' 		 => t('Email'),
			'name' 			 => t('Username'),
            'session_key' 	 => t('Session Key'),
            'created' 		 => t('Created'),
			'referees' 		 => t('Referees'),
			'referrals' 	 => t('Referrals'),
			'uploadedFiles'  => t('Uploaded Files'),
			'userActivated'  => t('User Activated'),
			'group' 		 => t('Group'),
			'userCourses' 	 => t('User Courses'),
			'courses' 		 => t('Courses'),
			'firstname' 	 => t('First Name'),
			'lastname' 		 => t('Last Name'),
			'location' 		 => t('Location'),
			'fullLocation' 	 => t('Full Location'),
			'country_iso' 	 => t('Country'),
			'last_login' 	 => t('Last Login'),
			'last_ip' 		 => t('Last IP Address'),
			'last_agent'	 => t('Last Agent'),
			'language' 		 => t('Language'),
			'userAgreements' => t('User Agreements'),
			'agreements' 	 => t('Agreements')
		);
	}
	
	public function getSearchCriteria() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('created', $this->created, true);
		$criteria->compare('firstname', $this->firstname, true);
		$criteria->compare('lastname', $this->lastname, true);
		$criteria->compare('location', $this->location, true);
		$criteria->compare('country_iso', $this->country_iso, true);
		$criteria->compare('last_login', $this->last_login, true);
		$criteria->compare('last_ip', $this->last_ip, true);
		$criteria->compare('last_agent', $this->last_agent, true);
		
		return $criteria;
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		return new CActiveDataProvider($this, array(
				'criteria' => $this->getSearchCriteria(),
		));
	}
	
	public static function getUniqueName($name) {
		if(!isset($name)) {
			do {
				$name = uniqid('temp_username_');
			} while(self::model()->exists('name = :name', array(':name' => $name)));
		}
		return $name;
	}
	
	/**
	 * Regenerates the session key for this user and saves to database.
	 * @return boolean whether the session key was successfully updated for this user.
	 */
	public function regenerateSessionKey($saveImmediately = true) {
		$this->session_key = $this->generateIV();
		return !$saveImmediately || $this->save(true, array('session_key'));
	}
	
	public function encodeUrl($url) {
		if(stripos($url, '/') !== strlen($url) - 1)
			$url .= '/';
		return Yii::app()->createAbsoluteUrl($url . 'id/' . urlencode($this->id) . '/session_key/' . CBase64::urlEncode($this->session_key));
	}
	
}