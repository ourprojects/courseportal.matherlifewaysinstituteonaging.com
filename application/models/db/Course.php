<?php defined('BASEPATH') or exit('No direct script access allowed');  

class Course extends ActiveRecord {
	/**
	 * This is the model class for table "course".
	 *
	 * The followings are the available columns in table 'course':
	 * @property integer $id
	 * @property string $title
	 *
	 * The followings are the available model relations:
	 * @property User[] $users
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
				array('title', 'required'),
				array('title', 'length', 'max' => 255),
	
				array('id, title', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
				'userCourses' => array(self::HAS_MANY, 'UserCourse', 'course_id'),
				'users' => array(self::HAS_MANY, 'User', array('user_id' => 'id'), 'through' => 'userCourses'),
		);
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'id' => t('ID'),
				'title' => t('Title'),
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
		$criteria->compare('title', $this->title, true);
	
		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}