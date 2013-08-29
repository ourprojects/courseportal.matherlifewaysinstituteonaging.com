<?php

/**
 * This is the model class for the application's users.
 *
 * The followings are the available columns in the user table:
 * @property integer $id
 * @property string $name
 *
 * The followings are the available model relations:
 * @property Course[] $courses
 * @property UserCourse[] $userCourses
 * @property UserActivity[] $userActivities
 * @property Activity[] $activities
 * @property ActivityLogEntry[] $activityLogEntries
 * @property ActivityLogEntryDimension[] $activityLogEntryDimensions
 */
class CourseUser extends CActiveRecord 
{
	
	const COURSE_MODULE_NAME = 'course';

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__) 
	{
		return parent::model($className);
	}
	
	public function init()
	{
		if(Yii::app()->getModule(self::COURSE_MODULE_NAME) === null)
		{
			throw new CException(t('Course module has not been configured or is disabled.'));
		}
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() 
	{
		return Yii::app()->getModule(self::COURSE_MODULE_NAME)->getStaticUserModel()->tableName();
	}

	public function behaviors() 
	{
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors'),
						'ERememberFiltersBehavior' => array(
								'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
						),
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
		return array();
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'userCourses' => array(self::HAS_MANY, 'UserCourse', 'user_id'),
			'courses' => array(self::MANY_MANY, 'Course', UserCourse::model()->tableName().'(user_id, course_id)'),
			'userActivities' => array(self::HAS_MANY, 'UserActivity', 'user_id'),
			'activities' => array(self::MANY_MANY, 'Activity', UserActivity::model()->tableName().'(user_id, activity_id)'),
		);
	}

	public function hasCourse($course) 
	{
		if($course instanceof Course)
		{
			return $this->hasUser($course->id);
		}
		$this->getDbCriteria()->mergeWith(array(
				'with' => 'userCourses',
				'condition' => $this->getDbConnection()->quoteColumnName('userCourses.course_id').'=:course_id',
				'params' => array(':course_id' => $course)
		));
		return $this;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// column attributes
			Yii::app()->getModule(self::COURSE_MODULE_NAME)->userId   => t('ID'),
			Yii::app()->getModule(self::COURSE_MODULE_NAME)->userName => t('Username'),
				
			// relation attributes
			'userCourses' 	 			 => t('User Courses'),
			'courses' 		 			 => t('Courses'),
			'userActivities' 			 => t('User Activities'),
			'activities' 				 => t('Activities'),
			'activityLogEntries' 		 => t('Activity Log Entries'),
			'activityLogEntryDimensions' => t('Activity Log Entry Dimensions'),
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
		$criteria->compare($db->quoteColumnName($tableAlias.'.'.Yii::app()->getModule(self::COURSE_MODULE_NAME)->userId), $this->{Yii::app()->getModule(self::COURSE_MODULE_NAME)->userId});
		$criteria->compare($db->quoteColumnName($tableAlias.'.'.Yii::app()->getModule(self::COURSE_MODULE_NAME)->userName), $this->{Yii::app()->getModule(self::COURSE_MODULE_NAME)->userName}, true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}
