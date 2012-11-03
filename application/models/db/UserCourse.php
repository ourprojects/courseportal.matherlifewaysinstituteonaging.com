<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UserCourse extends ActiveRecord {
	/**
	 * This is the model class for table "user_course".
	 *
	 * The followings are the available columns in table 'user_course':
	 * @property integer $course_id
	 * @property integer $user_id
	 *
	 * The followings are the available model relations:
	 * @property User $user
	 * @property Course $course
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
		return '{{user_course}}';
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('user_id, course_id', 'required'),

				array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'User', 'allowEmpty' => false),
				array('course_id', 'exist', 'attributeName' => 'id', 'className' => 'Course', 'allowEmpty' => false),
				
				array('course_id', 
						'unique', 
						'caseSensitive' => false, 
						'criteria' => array(
							'condition' => 'user_id = :id',
							'params' => array(':id' => $this->user_id),
						),
						'message' => '{attribute} "{value}" has already been added to this user.',
				),
				
				array('user_id, course_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
				'user' => array(self::BELONGS_TO, 'User', 'user_id'),
				'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'user_id' => t('User ID'),
				'course_id' => t('Course ID'),
				'user' => t('User'),
				'course' => t('Course'),
		);
	}
	
	public function getSearchCriteria() {
		$criteria = new CDbCriteria;
		
		$criteria->compare('user_id', $this->user_id);
		$criteria->compare('course_id', $this->course_id);
		
		return $criteria;
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		return new CActiveDataProvider($this, array(
				'criteria' => $this->getSearchCriteria(),
		));
	}

}