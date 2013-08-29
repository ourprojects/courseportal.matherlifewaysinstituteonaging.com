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
 * @property RecommendedActivityDimension[] $activityRecommendations
 * @property Activity[] $recommendedActivities
 * @property UserActivityDimension[] $userActivityDimensions
 * @property UserActivity[] $userActivities
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
			'recommendedActivities' => array(self::MANY_MANY, 'Activity', RecommendedActivityDimension::model()->tableName().'(dimension_id, activity_id)'),
			'userActivityDimensions' => array(self::HAS_MANY, 'UserActivityDimension', 'dimension_id'),
			'userActivities' => array(self::MANY_MANY, 'UserActivity', UserActivityDimension::model()->tableName().'(dimension_id, user_activity_id)'),

			'activityRecommendationCount' => array(self::STAT, 'RecommendedActivityDimension', 'dimension_id'),
			'recommendedActivityCount' => array(self::STAT, 'Activity', RecommendedActivityDimension::model()->tableName().'(dimension_id, activity_id)'),
			'userActivityDimensionCount' => array(self::STAT, 'UserActivityDimension', 'dimension_id'),
			'userActivityCount' => array(self::STAT, 'UserActivity', UserActivityDimension::model()->tableName().'(dimension_id, user_activity_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// column attributes
			'id' => t('ID'),
			'name' => t('Name'),
			'description' => t('Description'),
				
			// relation attributes
			'activityRecommendations' => t('Activity Recommendations'),
			'recommendedActivites' => t('Recommended Activities'),
			'userActivities' => t('User Activities'),
			'userActivityDimensions' => t('User Activity Dimensions'),
			'activityRecommendationCount' => t('Activity Recommendation Count'),
			'recommendedActivityCount' => t('Recommended Activity Count'),
			'userActivityDimensionCount' => t('User Activity Dimension Count'),
			'userActivityCount' => t('User Activity Count'),
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
		$criteria->compare($db->quoteColumnName($tableAlias.'.name'), $this->name, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.description'), $this->description, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
	
}
