<?php

class Agreement extends CActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return States the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{agreement}}';
    }

    public function behaviors() {
    	return array_merge(parent::behaviors(),
    			array(
    					'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors'),
    					'ERememberFiltersBehavior' => array(
    							'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
    					),
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
            array('name, created_by, text', 'required'),
        	array('id, created_by', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 511),
        	array('date_format', 'length', 'max' => 63),
        	array('created_on', 'date', 'format' => 'yyyy-M-d H:m:s'),
        	array('created_by', 'exist', 'attributeName' => 'id', 'className' => 'CPUser'),
            array('id, name, created_by, created_on, text, date_format', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
				'userAgreements' => array(self::HAS_MANY, 'UserAgreement', 'agreement_id'),
				'users' => array(self::MANY_MANY, 'CPUser', '{{user_agreement}}(agreement_id, user_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => t('ID'),
            'name' => t('Name'),
            'created_by' => t('Created By'),
        	'created_on' => t('Created On'),
        	'text' => t('Text'),
        	'date_format' => t('Date Format'),
        	'userAgreements' => t('User Agreements'),
        	'users' => t('Agreed Users')
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('created_by', $this->created_by, true);
        $criteria->compare('created_on', $this->created_on, true);
        $criteria->compare('text', $this->text, true);
        $criteria->compare('date_format', $this->date_format, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function __toString() {
    	return $this->text;
    }
}
?>