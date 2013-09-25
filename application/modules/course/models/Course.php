<?php
/**
 * This is the model class for table "course".
 *
 * The followings are the available columns in table 'course':
 * @property integer $id
 * @property string $name
 * @property integer $rank
 * @property string $title
 * @property string $description
 *
 * The followings are the available model relations:
 * @property CourseUser[] $users
 * @property UserCourse[] $userCourses
 * @property CourseObjective[] $objectives
 */
class Course extends CActiveRecord 
{

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
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
		return '{{course}}';
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
		return array(
				array('id', 'unsafe'),
				array('rank, name, title', 'required'),
				array('name', 'length', 'max' => 255),
				array('id, rank', 'numerical', 'integerOnly' => true),
				array('name, rank', 'unique'),
				array('title', 'length', 'max' => 255),
				array('description', 'length', 'max' => 65535),

				array('id, name, rank, title, description', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() 
	{
		return array(
				'objectives' => array(self::HAS_MANY, 'CourseObjective', 'course_id'),
				'userCourses' => array(self::HAS_MANY, 'UserCourse', 'course_id'),
				'users' => array(self::MANY_MANY, Yii::app()->getModule(CourseUser::COURSE_MODULE_NAME)->userClass, UserCourse::model()->tableName().'(course_id, user_id)'),
				
				'userCount' => array(self::STAT, Yii::app()->getModule(CourseUser::COURSE_MODULE_NAME)->userClass, UserCourse::model()->tableName().'(course_id, user_id)'),
		);
	}

	public function hasUser($userId, $hasUser = false) 
	{
		$criteria = array('params' => array(':user_id' => $userId), 'together' => true);
		$userCourses = $this->getDbConnection()->quoteColumnName('userCourses.user_id');
		if($hasUser)
		{
			$criteria['with'] = 'userCourses';
			$criteria['condition'] = $userCourses.'=:user_id';
		}
		else
		{
			$criteria['with'] = array('userCourses' => array('on' => $userCourses.'=:user_id'));
			$criteria['condition'] = $userCourses.' IS NULL';
		}
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() 
	{
		return array(
				// Column attributes
				'id' => t('ID'),
				'name' => t('Unique Name'),
				'rank' => t('Rank'),
				'title' => t('Title'),
				'description' => t('Description'),
				
				// Relation attributes
				'userCourses' => t('User Courses'),
				'users' => t('Users'),
				'userCount' => t('Users')
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
		$criteria->order = $db->quoteColumnName($tableAlias.'.rank');
		$criteria->compare($db->quoteColumnName($tableAlias.'.id'), $this->id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.name'), $this->name, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.rank'), $this->rank, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.title'), $this->title, true);
		$criteria->compare($db->quoteColumnName($tableAlias.'.description'), $this->description, true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}
