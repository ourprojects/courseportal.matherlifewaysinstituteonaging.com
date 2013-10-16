<?php

class GroupAuthItem extends CActiveRecord {

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
		return '{{group_auth_item}}';
	}

	public function behaviors() {
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'application.behaviors.EModelBehaviors'),
						'ERememberFiltersBehavior' => array(
								'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
						),
						'EActiveRecordAutoQuoteBehavior' => array(
								'class' => 'ext.EActiveRecordAutoQuoteBehavior.EActiveRecordAutoQuoteBehavior',
						)
				));
	}

	public function rules()
	{
		return array(
				array('group_id, auth_item_id', 'required'),
				array('group_id, auth_item_id', 'numerical', 'integerOnly' => true),
				array('group_id', 'exist', 'attributeName' => 'id', 'className' => 'Group'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'group_id' => t('Group ID'),
				'auth_item_id' => t('Authorization Item ID'),
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
		$criteria->compare($db->quoteColumnName($tableAlias.'.group_id'), $this->group_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.auth_item_id'), $this->auth_item_id);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}