<?php

/**
 * This is the model class for table "{{spencer_powell_activity}}".
 *
 * The followings are the available columns in table '{{spencer_powell_activity}}':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $dose
 * @property integer $cr
 *
 * The followings are the available model relations:
 * @property Dimension[] $courseportalSpencerPowellDimensions
 * @property UserActivity[] $userActivities
 */
class Activity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Activity the static model class
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
		return '{{spencer_powell_activity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name, description, dose, cr', 'required'),
			array('cr', 'numerical', 'integerOnly' => true),
			array('name, dose', 'length', 'max' => 255),
			array('name', 'unique', 'except' => 'search'),

			array('id, name, description, dose, cr', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'dimensionRecommendations' => array(self::HAS_MANY, 'RecommendedActivityDimension', 'activity_id'),
			'recommendedDimensions' => array(self::MANY_MANY, 'Dimension', RecommendedActivityDimension::model()->tableName().'(activity_id, dimension_id)'),
			'userActivities' => array(self::HAS_MANY, 'UserActivity', 'activity_id'),
			'userLogEntries' => array(self::HAS_MANY, 'UserLogEntry', array('id' => 'user_activity_id'), 'through' => 'userActivities'),
			'userLogEntryDimensions' => array(self::HAS_MANY, 'UserLogEntryDimension', array('id' => 'user_log_entry_id'), 'through' => 'userLogEntries'),
			'users' => array(self::MANY_MANY, 'CPUser', UserActivity::model()->tableName().'(activity_id, user_id)'),

			'dimensionRecommendationCount' => array(self::STAT, 'RecommendedActivityDimension', 'activity_id'),
			'recommendedDimensionCount' => array(self::STAT, 'Dimension', RecommendedActivityDimension::model()->tableName().'(activity_id, dimension_id)'),
			'userActivityCount' => array(self::STAT, 'UserActivity', 'activity_id'),
			'userCount' => array(self::STAT, 'CPUser', UserActivity::model()->tableName().'(activity_id, user_id)'),
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
			'dose' => t('Dose'),
			'cr' => t('Contribution'),
			'dimensionRecommendations' => t('Dimension Recommendations'),
			'recommendedDimensions' => t('Recommended Dimensions'),
			'userActivites' => t('User Activities'),
			'userLogEntries' => t('User Log Entries'),
			'userLogEntryDimensions' => t('User Log Entry Dimensions'),
			'users' => t('Users'),
			'dimensionRecommendationCount' => t('Dimension Recommendation Count'),
			'recommendedDimensionCount' => t('Recommended Dimension Count'),
			'userActivityCount' => t('User Activity Count'),
			'userCount' => t('User Count'),
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
		$criteria->compare($db->quoteColumnName($tableAlias.'.dose'), $this->dose, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.cr'), $this->cr);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}