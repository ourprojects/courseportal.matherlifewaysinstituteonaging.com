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

	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
				)
		);
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

	public function orderBy($order)
	{
		$this->getDbCriteria()->mergeWith(array('order' => $order));
		return $this;
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {

		$criteria = new CDbCriteria;

		$criteria->compare('parent_id', $this->parent_id);
		$criteria->compare('child_id', $this->child_id);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}
