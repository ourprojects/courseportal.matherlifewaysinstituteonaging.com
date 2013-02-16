<?php defined('BASEPATH') or exit('No direct script access allowed');  

class Course extends ActiveRecord {
	/**
	 * This is the model class for table "course".
	 *
	 * The followings are the available columns in table 'course':
	 * @property integer $id
	 * @property string $name
	 * @property string $title
	 * @property string $description
	 *
	 * The followings are the available model relations:
	 * @property User[] $users
	 * @property UserCourse[] $userCourses
	 * @property CourseObjective[] $objectives
	 */
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return '{{course}}';
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('name, title', 'required'),
				array('name', 'length', 'max' => 255),
				array('name', 'unique', 'allowEmpty' => false),
				array('title', 'length', 'max' => 255),
				array('description', 'length', 'max' => 65535),
	
				array('id, name, title', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
				'objectives' => array(self::HAS_MANY, 'CourseObjective', 'course_id'),
				'userCourses' => array(self::HAS_MANY, 'UserCourse', 'course_id'),
				'users' => array(self::HAS_MANY, 'User', array('user_id' => 'id'), 'through' => 'userCourses'),
		);
	}
	
	public function hasUser($user) {
		if(is_int($user)) {
			$this->getDbCriteria()->mergeWith(array(
					'with' => 'userCourses',
					'condition' => 'userCourses.user_id=:user_id',
					'params' => array(':user_id' => $user)
			));
		} else if($user instanceof User) {
			return $this->hasUser($user->id);
		}
		return $this;
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'id' => t('ID'),
				'name' => t('Unique Name'),
				'title' => t('Title'),
				'description' => t('Description'),
				'userCourses' => t('User Courses'),
				'users' => t('Users'),
		);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
	
		$criteria = new CDbCriteria;
	
		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('description', $this->description, true);
	
		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}