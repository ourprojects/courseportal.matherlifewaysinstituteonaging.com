<?php

/**
 * This is the model class for table "{{spencer_powell_dimension}}".
 *
 * The followings are the available columns in table '{{spencer_powell_dimension}}':
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Activity[] $courseportalSpencerPowellActivities
 * @property UserLogEntry[] $courseportalSpencerPowellUserLogEntries
 */
class Dimension extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dimension the static model class
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
		return '{{spencer_powell_dimension}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name, description', 'required'),
			array('name', 'length', 'max' => 255),
			array('name', 'unique', 'except' => 'search'),
				
			array('id, name, description', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'activityRecommendations' => array(self::HAS_MANY, 'RecommendedActivityDimension', 'dimension_id'),
			'recommendedActivities' => array(self::MANY_MANY, 'Activity', '{{spencer_powell_recommended_activity_dimension}}(dimension_id, activity_id)'),
			'userLogEntryDimensions' => array(self::HAS_MANY, 'UserLogEntryDimension', 'dimension_id'),
			'userLogEntries' => array(self::MANY_MANY, 'UserLogEntry', '{{spencer_powell_user_log_entry_dimension}}(dimension_id, user_log_entry_id)'),
				
			'activityRecommendationCount' => array(self::STAT, 'RecommendedActivityDimension', 'dimension_id'),
			'recommendedActivityCount' => array(self::STAT, 'Activity', '{{spencer_powell_recommended_activity_dimension}}(dimension_id, activity_id)'),
			'userLogEntryDimensionCount' => array(self::STAT, 'UserLogEntryDimension', 'dimension_id'),
			'userLogEntryCount' => array(self::STAT, 'UserLogEntry', '{{spencer_powell_user_log_entry_dimension}}(dimension_id, user_log_entry_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => t('ID'),
			'name' => t('Name'),
			'description' => t('Description'),
			'activityRecommendations' => t('Activity Recommendations'),
			'recommendedActivites' => t('Recommended Activities'),
			'userLogEntries' => t('User Log Entries'),
			'userLogEntryDimensions' => t('User Log Entry Dimensions'),
			'activityRecommendationCount' => t('Activity Recommendation Count'),
			'recommendedActivityCount' => t('Recommended Activity Count'),
			'userLogEntryDimensionCount' => t('User Log Entry Dimension Count'),
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

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}