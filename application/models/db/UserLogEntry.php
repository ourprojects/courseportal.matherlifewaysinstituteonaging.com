<?php

/**
 * This is the model class for table "{{spencer_powell_user_log_entry}}".
 *
 * The followings are the available columns in table '{{spencer_powell_user_log_entry}}':
 * @property integer $id
 * @property integer $user_activity_id
 * @property string $datetime
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Dimension[] $courseportalSpencerPowellDimensions
 */
class UserLogEntry extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserLogEntry the static model class
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
		return '{{spencer_powell_user_log_entry}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('user_activity_id, datetime, comment', 'required'),
			array('user_activity_id', 'numerical', 'integerOnly' => true),
			array('comment', 'length', 'max' => 65535),
			array('datetime', 'date', 'format' => 'yyyy-M-d H:m:s'),
			array('user_activity_id', 'exist', 'attributeName' => 'id', 'className' => 'UserActivity', 'except' => 'search'),
				
			array('id, user_activity_id, datetime, comment', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'userActivity' => array(self::BELONGS_TO, 'UserActivity', 'user_activity_id'),
			'logEntryDimensions' => array(self::HAS_MANY, 'UserLogEntryDimension', 'user_log_entry_id'),
			'dimensions' => array(self::MANY_MANY, 'Dimension', '{{spencer_powell_user_log_entry_dimension}}(user_log_entry_id, dimension_id)'),
				
			'logEntryDimensionCount' => array(self::STAT, 'UserLogEntryDimension', 'user_log_entry_id'),
			'dimensionCount' => array(self::STAT, 'Dimension', '{{spencer_powell_user_log_entry_dimension}}(user_log_entry_id, dimension_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => t('ID'),
			'user_activity_id' => t('User Activity ID'),
			'datetime' => t('Date'),
			'comment' => t('Comment'),
			'userActivity' => t('User Activity'),
			'logEntryDimensions' => t('Log Entry Dimensions'),
			'dimensions' => t('Dimensions'),
			'logEntryDimensionCount' => t('Log Entry Dimension Count'),
			'dimensionCount' => t('Dimension Count'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('user_activity_id', $this->user_activity_id);
		$criteria->compare('datetime', $this->datetime, true);
		$criteria->compare('comment', $this->comment, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}