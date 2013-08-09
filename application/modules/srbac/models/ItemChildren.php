<?php
/**
 * Assignments class file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * Assignments model is the authManager model that controls which the assignments
 * between useers/roles/tasks and operations
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * @package srbac.models
 */

class ItemChildren extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'itemchildren':
	 * @var integer $parent_id
	 * @var integer $child_id
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function getDbConnection()
	{
		return Yii::app()->getAuthManager()->db;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
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
	public function rules()
	{
		return array(
				array('parent_id, child_id', 'unsafe'),
				array('parent_id, child_id', 'numerical', 'integerOnly' => true),
				array('parent_id, child_id', 'required'),

				array('parent_id, child_id', 'exist', 'attributeName' => 'id', 'className' => 'AuthItem', 'allowEmpty' => false),

				array('parent_id',
						'unique',
						'caseSensitive' => false,
						'criteria' => array(
								'condition' => 'child_id = :id',
								'params' => array(':id' => $this->getAttribute('child_id')),
						),
				),

				array('parent_id, child_id', 'safe', 'on' => 'search')
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		);
	}

	public function orderBy($order)
	{
		$this->getDbCriteria()->mergeWith(array('order' => $order));
		return $this;
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels()
	{
		return array(
				'parent_id' => Yii::t('srbac', 'Parent ID'),
				'child_id' => Yii::t('srbac', 'Child ID'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$criteria->compare('parent_id', $this->getAttribute('parent_id'));
		$criteria->compare('child_id', $this->getAttribute('child_id'));

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}
