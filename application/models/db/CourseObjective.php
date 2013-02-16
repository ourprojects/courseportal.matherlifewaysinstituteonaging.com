<?php defined('BASEPATH') or exit('No direct script access allowed');  

class CourseObjective extends ActiveRecord {
	/**
	 * This is the model class for table "course".
	 *
	 * The followings are the available columns in table 'course':
	 * @property integer $id
	 * @property integer $course_id
	 * @property integer $rank
	 * @property string $text
	 *
	 * The followings are the available model relations:
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
		return '{{course_objective}}';
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('rank, text', 'required'),
				array('course_id', 'exist', 'attributeName' => 'id', 'className' => 'Course', 'allowEmpty' => false),
				array('rank', 'numerical', 'integerOnly' => true),
				array('rank',
						'unique',
						'caseSensitive' => false,
						'criteria' => array(
								'condition' => 'course_id = :course_id',
								'params' => array(':course_id' => $this->course_id),
						),
						'message' => 'An objective with {attribute} "{value}" already exists for this course.',
				),
				array('text', 'length', 'max' => 65535),
	
				array('id, course_id, text', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
				'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'id' => t('ID'),
				'course_id' => t('Course ID'),
				'rank' => t('Rank'),
				'text' => t('Text'),
				'course' => t('Course'),
		);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
	
		$criteria = new CDbCriteria;
	
		$criteria->order = 'rank';
		$criteria->compare('id', $this->id);
		$criteria->compare('course_id', $this->course_id);
		$criteria->compare('rank', $this->rank);
		$criteria->compare('text', $this->text, true);
	
		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}