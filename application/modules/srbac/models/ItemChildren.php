<?php
/**
 * Assignments class file.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * Assignments model is the authManager model that controls which the assignments
 * between useers/roles/tasks and operations
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.models
 * @since 1.0.0
 */

class ItemChildren extends CActiveRecord {
	/**
	 * The followings are the available columns in table 'itemchildren':
	 * @var integer $parent_id
	 * @var integer $child_id
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
		return Yii::app()->getAuthManager()->itemChildTable;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('parent_id,child_id', 'numerical', 'integerOnly' => true),
				array('parent_id,child_id', 'required'),
				array('parent_id,child_id', 'safe')
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
		);
	}
}