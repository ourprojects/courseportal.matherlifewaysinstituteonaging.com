<?php defined('BASEPATH') or exit('No direct script access allowed');  

class Group extends CActiveRecord {
	/**
	 * This is the model class for table "group".
	 *
	 * The followings are the available columns in table 'group':
	 * @property integer $id
	 * @property string $name
	 *
	 * The followings are the available model relations:
	 * @property CPUser[] $users
	 */

	const ADMIN = 'ADMINISTRATORS';
	const GUEST = 'GUESTS';
	const REGISTERED = 'REGISTERED';
	const EMPLOYEE = 'Employees';
	const DEFAULT_GROUP = self::REGISTERED;
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
		return '{{group}}';
	}
	
	public function behaviors() {
		return array_merge(parent::behaviors(),
				array(
						'toArray' => array('class' => 'behaviors.EArrayBehavior'),
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors')
				));
	}
	
	public function getIsAdmin() {
		return $this->name === self::ADMIN;
	}
	
	public function getIsGuest() {
		return $this->name === self::GUEST;
	}
	
	public function getIsRegistered() {
		return $this->name === self::REGISTERED;
	}
	
	public function getIsEmployee() {
		return $this->name === self::EMPLOYEE;
	}
	
	public function rules()
	{
		return array(
				array('name', 'required'),
				
				array('id', 'unsafe', 'except' => 'search'),
				array('id', 'numerical', 'integerOnly' => true),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'users' => array(self::HAS_MANY, 'CPUser', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'id' => t('ID'),
				'name' => t('Name'),
				'users' => t('Users'),
		);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
	
		$criteria = new CDbCriteria;
	
		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
	
		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}
	
	public function __toString() {
		return $this->name;
	}

}