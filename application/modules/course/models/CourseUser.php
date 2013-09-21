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
			throw new CException(t('Course module could not be found. It may not be configured or is disabled.'));
		}
		parent::init();
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
				
			'courseCount' => array(self::STAT, 'Course', UserCourse::model()->tableName().'(user_id, course_id)'),
		);
	}

	public function hasCourse($courseId, $hasCourse = true) 
	{
		$criteria = array('params' => array(':course_id' => $courseId), 'together' => true);
		$userCourses = $this->getDbConnection()->quoteColumnName('userCourses.course_id');
		if($hasCourse)
		{
			$criteria['with'] = 'userCourses';
			$criteria['condition'] = $userCourses.'=:course_id';
		}
		else
		{
			$criteria['with'] = array('userCourses' => array('on' => $userCourses.'=:course_id'));
			$criteria['condition'] = $userCourses.' IS NULL';
		}
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}
	
	public function getId()
	{
		return $this->{$this->getIdColumnName()};
	}
	
	public function setId($id)
	{
		return $this->{$this->getIdColumnName()} = $id;
	}
	
	public function getName()
	{
		return $this->{$this->getNameColumnName()};
	}
	
	public function setName($name)
	{
		return $this->{$this->getNameColumnName()} = $name;
	}
	
	public function getIdColumnName()
	{
		return Yii::app()->getModule(self::COURSE_MODULE_NAME)->userId;
	}
	
	public function getNameColumnName()
	{
		return Yii::app()->getModule(self::COURSE_MODULE_NAME)->userName;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// column attributes
			$this->getIdColumnName()   => t('ID'),
			$this->getNameColumnName() => t('Username'),
				
			// relation attributes
			'userCourses' 	 			 => t('User Courses'),
			'courses' 		 			 => t('Courses'),
			'userActivities' 			 => t('User Activities'),
			'activities' 				 => t('Activities'),
			'activityLogEntries' 		 => t('Activity Log Entries'),
			'activityLogEntryDimensions' => t('Activity Log Entry Dimensions'),
			'courseCount'				 => t('Courses')
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
		$criteria->compare($db->quoteColumnName($tableAlias.'.'.$this->getIdColumnName()), $this->getId());
		$criteria->compare($db->quoteColumnName($tableAlias.'.'.$this->getNameColumnName()), $this->getName(), true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}
