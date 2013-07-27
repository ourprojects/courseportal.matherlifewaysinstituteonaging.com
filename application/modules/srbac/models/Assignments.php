<?php
/**
 * Assignments class file.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * Assignments model is the authManager model that defines which operations /
 * tasks / roles are assigned to which user.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.models
 * @since 1.0.0
 */

class Assignments extends CActiveRecord {
	/**
	 * The followings are the available columns in table 'authassignment':
	 * @var string $item_id
	 * @var string $userid
	 * @var string $bizrule
	 * @var string $data
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getDbConnection() {
		return Yii::app()->getAuthManager()->db;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return Yii::app()->getAuthManager()->assignmentTable;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('item_id', 'numerical', 'integerOnly' => true),
				array('user_id', 'numerical', 'integerOnly' => true),
				array('item_id, user_id', 'required'),
				array('user_id,item_id,bizrule,data','safe'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
				'authItem' => array(self::BELONGS_TO, 'AuthItem', 'item_id'),
				'user' => array(self::BELONGS_TO, Helper::findModule('srbac')->userclass, 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
				'item_id' => Yii::t('srbac','Item id'),
				'user_id' => Yii::t('srbac','User id'),
				'bizrule' => Yii::t('srbac','Bizrule'),
				'data' => Yii::t('srbac','Data'),
		);
	}
}