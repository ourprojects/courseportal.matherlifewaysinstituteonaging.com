<?php

/**
 * This is the model class for table "{{spencer_powell_user_activity}}".
 *
 * The followings are the available columns in table '{{spencer_powell_user_activity}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $activity_id
 *
 * The followings are the available model relations:
 * @property Activity $activity
 * @property CourseportalUser $user
 */
class UserActivity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserActivity the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{spencer_powell_user_activity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('user_id, activity_id', 'required'),
			array('user_id, activity_id', 'numerical', 'integerOnly' => true),
			array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'CPUser', 'except' => 'search'),
			array('activity_id', 'exist', 'attributeName' => 'id', 'className' => 'Activity', 'except' => 'search'),

			array('id, user_id, activity_id', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'activity' => array(self::BELONGS_TO, 'Activity', 'activity_id'),
			'user' => array(self::BELONGS_TO, 'CPUser', 'user_id'),
			'userLogEntries' => array(self::HAS_MANY, 'UserLogEntry', 'user_activity_id'),
			'userLogEntryDimensions' => array(self::HAS_MANY, 'UserLogEntryDimension', array('id' => 'user_log_entry_id'), 'through' => 'userLogEntries'),

			'userLogEntryCount' => array(self::STAT, 'UserLogEntry', 'user_activity_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => t('ID'),
			'user_id' => t('User ID'),
			'activity_id' => t('Activity ID'),
			'activity' => t('Activity'),
			'user' => t('User'),
			'userLogEntries' => t('User Log Entries'),
			'userLogEntryDimensions' => t('User Log Entry Dimensions'),
			'userLogEntryCount' => t('User Log Entry Count'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$tableAlias = $this->getTableAlias();
		$db = $this->getDbConnection();
		$criteria->compare($db->quoteColumnName($tableAlias.'.id'), $this->id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.user_id'), $this->user_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.activity_id'), $this->activity_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}