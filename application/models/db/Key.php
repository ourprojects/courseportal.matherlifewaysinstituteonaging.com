<?php

/**
 * This is the model class for table "key".
 *
 * The followings are the available columns in table 'key':
 * @property integer $id
 * @property string $value
 * @property string $salt
 */
class Key extends CActiveRecord 
{

	public $key;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Key the static model class
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
        return '{{key}}';
    }

    public function behaviors() 
    {
    	return array_merge(parent::behaviors(),
    			array(
    					'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors'),
						'PBKDF2Behavior' => array(
								'class' => 'ext.pbkdf2.PBKDF2Behavior',
								'saltAttribute' => 'salt',
								'hashAttribute' => 'value',
								'newValueAttribute' => 'key',
								'clearNewValueAfterSave' => true
						),
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
    public function rules() 
    {
        return array(
            array('key, value, salt', 'required'),
        	array('value, salt', 'ext.pbkdf2.PBKDF2validator'),

        	array('id', 'numerical', 'integerOnly' => true),

        	array('key', 'safe'),
        	array('id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() 
    {
        return array(
            'id' => t('ID'),
            'value' => t('Value'),
            'salt' => t('Salt'),
        	'key' => t('Key'),
        );
    }

    public function search() 
    {
    	$criteria = new CDbCriteria;

    	$tableAlias = $this->getTableAlias();
    	$db = $this->getDbConnection();
    	$criteria->compare($db->quoteColumnName($tableAlias.'.id'), $this->id);
    	$criteria->compare($db->quoteColumnName($tableAlias.'.value'), $this->value, true);

    	return new CActiveDataProvider($this, array(
    			'criteria' => $criteria,
    	));
    }

}