<?php
/**
 * EUserHttpSession class file
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * This is the model class for the yii session table.
 *
 * The followings are the available columns in the user session table:
 * @property integer $id
 * @property mixed $user_id Type is defined by configuration
 * @property integer $expire
 * @property string $data
 *
 * The followings are the available model relations:
 * @property mixed $user Type is defined by configuration
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class EUserHttpSession extends CActiveRecord
{
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserActivated the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see CActiveRecord::init()
	 */
	public function init()
	{
		if(!class_exists('EUserDbHttpSession', false) || !Yii::app()->getSession() instanceof EUserDbHttpSession)
		{
			throw new CException(
					Yii::t(
						'ext.EUserDbHttpSession', 
						'"{thisClass}" is not compatible with a session manager of type "{sessionClass}". Please check your application\'s session manager configuration.', 
						array('{thisClass}' => getClass($this), '{sessionClass}' => getClass(Yii::app()->getClass()))));
		}
		parent::init();
	}

	/**
	 * (non-PHPdoc)
	 * @see CActiveRecord::tableName()
	 */
	public function tableName()
	{
		return Yii::app()->getSession()->sessionTableName;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see CActiveRecord::getDbConnection()
	 */
	public function getDbConnection()
	{
		return Yii::app()->getSession()->getDbConnection();
	}

	/**
	 * (non-PHPdoc)
	 * @see CModel::behaviors()
	 */
	public function behaviors()
	{
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors'),
						'EActiveRecordAutoQuoteBehavior' => array(
								'class' => 'ext.EActiveRecordAutoQuoteBehavior.EActiveRecordAutoQuoteBehavior',
						)
				));
	}

	/**
	 * (non-PHPdoc)
	 * @see CModel::rules()
	 */
	public function rules()
	{
		return array(
				array('id', 'unsafe', 'except' => 'search'),
				array('expire, data', 'required'),
				array('expire', 'numerical', 'integerOnly' => true),
				array('user_id', 'exists', 'allowEmpty' => true, 'attributeName' => Yii::app()->getSession()->userIdColumnName, 'className' => Yii::app()->getSession()->userModelClassName),
		);
	}

	/**
	 * (non-PHPdoc)
	 * @see CActiveRecord::relations()
	 */
	public function relations()
	{
		return array(
				'user' => array(self::BELONGS_TO, Yii::app()->getSession()->userModelClassName, array(Yii::app()->getSession()->userIdColumnName => 'user_id')),
		);
	}
	
	/**
	 * Scope for expired or not expired sessions. Defaults to expired.
	 * 
	 * @param boolean $expired Defaults to true meaning expired sessions. Set false to invert match and get not expired sessions.
	 * @return EUserHttpSession this model instance for convenient method chaining
	 */
	public function expired($expired = true)
	{
		$this->getDbCriteria()->addCondition($expired ? 'expire<:expire' : 'expire>:expire')->params[':expire'] = time();
		return $this;
	}
	
	/**
	 * Scope for guest or not guest sessions. Defaults to guests.
	 * 
	 * @param boolean $guest Defaults to true meaning guest sessions. Set false to invert match and get non-guest sessions.
	 * @return EUserHttpSession this model instance for convenient method chaining
	 */
	public function guest($guest = true)
	{
		$this->getDbCriteria()->addCondition($guest ? 'user_id IS NULL' : 'user_id IS NOT NULL');
		return $this;
	}

	/**
	 * (non-PHPdoc)
	 * @see CModel::attributeLabels()
	 */
	public function attributeLabels()
	{
		return array(
				// column attributes
				'id' => Yii::t('ext.EUserDbHttpSession', 'ID'),
				'user_id' => Yii::t('ext.EUserDbHttpSession', 'User ID'),
				'expire' => Yii::t('ext.EUserDbHttpSession', 'Expire'),
				'data' => Yii::t('ext.EUserDbHttpSession', 'Data'),
				
				// relational attributes
				'user' => Yii::t('ext.EUserDbHttpSession', 'User'),
				
				// virtual attributes
				'isGuest' => Yii::t('ext.EUserDbHttpSession', 'Is Guest'),
				'isExpired' => Yii::t('ext.EUserDbHttpSession', 'Is Expired'),
				'dateExpire' => Yii::t('ext.EUserDbHttpSession', 'Date Expire'),
				'created' => Yii::t('ext.EUserDbHttpSession', 'Created'),
				'dateCreated' => Yii::t('ext.EUserDbHttpSession', 'Date Created'),
		);
	}
	
	/**
	 * Returns whether this session is a guest or not by checking whether the session's user_id has been set.
	 * 
	 * @return boolean True if this session is a guest, false otherwise.
	 */
	public function getIsGuest()
	{
		return !isset($this->user_id);
	}
	
	/**
	 * Returns whether this session has expired.
	 * 
	 * @return boolean True if this session has expired. False otherwise.
	 */
	public function getIsExpired()
	{
		return $this->expire < time();
	}
	
	/**
	 * Returns the expire time for this session as a formatted date string.
	 * 
	 * @param string $dateFormat The PHP date format the expire time should be returned in. 
	 * @return NULL|string The formatted date string or null if the expire time is not set.
	 */
	public function getDateExpire($dateFormat = 'Y-m-d H:i:s')
	{
		if(!strcasecmp($this->getScenario(), 'search') && !isset($this->expire))
		{
			return null;
		}
		return self::convertDateToDisplayformat($this->expire, $dateFormat);
	}
	
	/**
	 * Sets the expire time for this session using a formatted date string.
	 * 
	 * @param mixed $date time in milliseconds or PHP formatted time string
	 */
	public function setDateExpire($date)
	{
		$this->expire = self::convertDateToDBformat($date);
	}
	
	/**
	 * Returns the time when this session was created.
	 * 
	 * @return NULL|integer the time when this session was created, or null if the expire time is not set.
	 */
	public function getCreated()
	{
		if(!isset($this->expire))
		{
			return null;
		}
		return $this->expire - Yii::app()->getSession()->getTimeout();
	}
	
	/**
	 * Returns the fomatted string representation of the time when this session was created.
	 * 
	 * @param string $dateFormat The PHP date format the string should be returned as.
	 * @return NULL|string The formatted time string or null if {@link EUserDbHttpSession::getCreated()} returns null.
	 */
	public function getDateCreated($dateFormat = 'Y-m-d H:i:s')
	{
		if(!strcasecmp($this->getScenario(), 'search') && $this->getCreated() === null)
		{
			return null;
		}
		return self::convertDateToDisplayformat($this->getCreated(), $dateFormat);
	}
	
	/**
	 * Set the date that this session was created.
	 * 
	 * @param mixed $date The date as time in milliseconds or a formatted string.
	 */
	public function setDateCreated($date)
	{
		$this->expire = self::convertDateToDBformat($date) + Yii::app()->getSession()->getTimeout();
	}
	
	/**
	 * Converts a date or time to the DB's format
	 * 
	 * @param mixed $date The time to convert to DB format
	 * @return ninteger
	 */
	public static function convertDateToDBformat($date)
	{
		if(is_numeric($date))
		{
			return intval($date);
		}
		elseif(is_string($date))
		{
			return strtotime($date);
		}
		else
		{
			return time();
		}
	}
	
	/**
	 * Converts a date to a PHP string formatted date
	 * 
	 * @param mixed $date The date to format
	 * @param string $dateFormat The PHP format the date should be returned as
	 * @return string The formatted string representation of the date
	 */
	public static function convertDateToDisplayformat($date, $dateFormat = 'Y-m-d H:i:s')
	{
		return date($dateFormat, self::convertDateToDBformat($date));
	}

}