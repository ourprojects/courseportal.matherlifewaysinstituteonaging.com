<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "user_activated".
 *
 * The followings are the available columns in table 'user_activated':
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property CPUser $user
 */
class UserActivated extends ActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return UserActivated the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{user_activated}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
            array('user_id', 'required'),
            array('user_id', 'numerical', 'integerOnly'=>true),
        		
        	array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'CPUser'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'CPUser', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_id' => t('User ID'),
        );
    }

}