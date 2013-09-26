<?php

/**
 * This is the model class for the yii session table.
 *
 * The followings are the available columns in table 'user_activated':
 * @property integer $id
 * @property mixed $user_id Type is defined by configuration
 * @property integer $expire
 * @property string $data
 *
 * The followings are the available model relations:
 * @property mixed $user Type is defined by configuration
 */
class EHttpSession extends CActiveRecord
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
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return Yii::app()->getSession()->sessionTableName;
	}
	
	public function getDbConnection()
	{
		return Yii::app()->getSession()->getDbConnection();
	}

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
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
				array('id', 'unsafe', 'except' => 'search'),
				array('user_id, expire, data', 'required'),
				array('expire', 'numerical', 'integerOnly' => true),
				array('user_id', 'exists', 'attributeName' => Yii::app()->getSession()->userIdColumnName, 'className' => Yii::app()->getSession()->userModelClassName),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
				'user' => array(self::BELONGS_TO, Yii::app()->getSession()->userModelClassName, 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
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
				'isExpired' => Yii::t('ext.EUserDbHttpSession', 'Is Expired'),
				'dateExpire' => Yii::t('ext.EUserDbHttpSession', 'Date Expire'),
				'created' => Yii::t('ext.EUserDbHttpSession', 'Created'),
				'dateCreated' => Yii::t('ext.EUserDbHttpSession', 'Date Created'),
		);
	}
	
	public function getIsExpired()
	{
		return $this->expire < time();
	}
	
	public function getDateExpire($dateFormat = 'Y-m-d H:i:s')
	{
		if(!strcasecmp($this->getScenario(), 'search') && !isset($this->expire))
		{
			return null;
		}
		return self::convertDateToDisplayformat($this->expire, $dateFormat);
	}
	
	public function setDateExpire($date, $dateFormat = 'Y-m-d H:i:s')
	{
		$this->expire = self::convertDateToDBformat($date, $dateFormat);
	}
	
	public function getCreated()
	{
		if(!isset($this->expire))
		{
			return null;
		}
		return $this->expire - Yii::app()->getSession()->getTimeout();
	}
	
	public function getDateCreated($dateFormat = 'Y-m-d H:i:s')
	{
		if(!strcasecmp($this->getScenario(), 'search') && $this->getCreated() === null)
		{
			return null;
		}
		return self::convertDateToDisplayformat($this->getCreated(), $dateFormat);
	}
	
	public function setDateCreated($date, $dateFormat = 'Y-m-d H:i:s')
	{
		$this->expire = self::convertDateToDBformat($date, $dateFormat);
	}
	
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
	
	public static function convertDateToDisplayformat($date, $dateFormat = 'Y-m-d H:i:s')
	{
		return date($dateFormat, self::convertDateToDBformat($date));
	}

}