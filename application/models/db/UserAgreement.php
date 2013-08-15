<?php

class UserAgreement extends CActiveRecord {

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
		return '{{user_agreement}}';
	}

	public function behaviors() {
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors'),
						'EActiveRecordAutoQuoteBehavior' => array(
								'class' => 'ext.EActiveRecordAutoQuoteBehavior.EActiveRecordAutoQuoteBehavior',
						)
				));
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('user_id, agreement_id', 'required'),
				array('user_id, agreement_id', 'numerical', 'integerOnly' => true),

				array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'CPUser', 'allowEmpty' => false),
				array('agreement_id', 'exist', 'attributeName' => 'id', 'className' => 'Agreement', 'allowEmpty' => false),

				array('agreement_id',
						'unique',
						'caseSensitive' => false,
						'criteria' => array(
							'condition' => 'user_id = :id',
							'params' => array(':id' => $this->user_id),
						),
						'message' => '{attribute} "{value}" has already been added to this user.',
				),

				array('agreed_on', 'date', 'format' => 'yyyy-M-d H:m:s'),

				array('user_id, agreement_id, agreed_on', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
				'user' => array(self::BELONGS_TO, 'CPUser', 'user_id'),
				'agreement' => array(self::BELONGS_TO, 'Agreement', 'agreement_id'),
		);
	}

	public function getFormattedAgreedOn($format = null)
	{
		if(!isset($format))
			$format = $this->agreement->date_format;
		return date($format, strtotime($this->agreed_on));
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'user_id' => t('User ID'),
				'agreement_id' => t('Agreement ID'),
				'agreed_on' => t('Agreed On'),
				'user' => t('User'),
				'agreement' => t('Agreement'),
		);
	}

	public function getSearchCriteria() {
		$criteria = new CDbCriteria;

		$criteria->compare('user_id', $this->user_id);
		$criteria->compare('agreement_id', $this->agreement_id);

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