<?php

/**
 * This is the model class for table "{{spencer_powell_user_activity}}".
 *
 * The followings are the available columns in table '{{spencer_powell_user_activity}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $activity_id
 * @property string $datetime
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Activity $activity
 * @property CourseUser $user
 * @property UserActivityDimension[] $userActivityDimensions User Activity Dimensions
 * @property Dimension[] $dimensions Activity Dimensions
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
			array('user_id, activity_id, datetime, comment', 'required'),
			array('user_id, activity_id', 'numerical', 'integerOnly' => true),
			array('user_id', 'exist', 'attributeName' => Yii::app()->getModule(CourseUser::COURSE_MODULE_NAME)->userId, 'className' => 'CourseUser', 'except' => 'search'),
			array('activity_id', 'exist', 'attributeName' => 'id', 'className' => 'Activity', 'except' => 'search'),
			array('comment', 'length', 'max' => 65535),
			array('datetime', 'date', 'format' => 'yyyy-M-d H:m:s'),
				
			array('id, user_id, activity_id, datetime, comment', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'activity' => array(self::BELONGS_TO, 'Activity', 'activity_id'),
			'user' => array(self::BELONGS_TO, 'CourseUser', 'user_id'),
			'userActivityDimensions' => array(self::HAS_MANY, 'UserActivityDimension', 'user_activity_id'),
			'dimensions' => array(self::MANY_MANY, UserActivityDimension::model()->tableName().'(user_activity_id, dimension_id)'),
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
			'user_id' => t('User ID'),
			'activity_id' => t('Activity ID'),
			'datetime' => t('Date'),
			'comment' => t('Comment'),
				
			// relation attributes 
			'activity' => t('Activity'),
			'user' => t('User'),
			'userActivityDimensions' => t('User Activity Dimensions'),
			'dimensions' => t('Dimensions'),
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
		$criteria->compare($db->quoteColumnName($tableAlias.'.datetime'), $this->datetime, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.comment'), $this->comment, true);
		
		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
	
}
