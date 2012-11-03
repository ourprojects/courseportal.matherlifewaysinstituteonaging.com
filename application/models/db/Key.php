<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "key".
 *
 * The followings are the available columns in table 'key':
 * @property integer $id
 * @property string $value
 * @property string $salt
 */
class Key extends ActiveRecord {
	
	private $_pbkdf2Hasher = null;
	public $key = null;
	
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Key the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function init() {
    	if($this->isNewRecord) {
    		$this->salt = $this->getHasher()->getIV();
    	}
    }
    
    public function getHasher() {
    	if($this->_pbkdf2Hasher === null)
    		$this->_pbkdf2Hasher = Yii::createComponent('ext.pbkdf2.PBKDF2');
    	return $this->_pbkdf2Hasher;
    }

    public function generateKey() {
    	return $this->getHasher()->getHash($this->getHasher()->generateIV());
    }
    
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{key}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
        	array('key', 'safe'),
        	array('key', 'hash'),
            array('value, salt', 'required'),
        	array('value', 'ext.pbkdf2.PBKDF2validator'),
        		
        	array('id', 'safe', 'on' => 'search'),
        );
    }
    
    public function hash($attribute = 'key', $params = array()) {
    	if($this->$attribute !== null)
    		$this->value = $this->getHasher()->getHash($this->$attribute);
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => t('ID'),
            'value' => t('Value'),
            'salt' => t('Salt'),
        	'key' => t('Key'),
        );
    }
    
    public function search() {
    	$criteria = new CDbCriteria;
    	
    	$criteria->compare('id', $this->id);
    	$criteria->compare('value', $this->value, true);
    	
    	return new CActiveDataProvider($this, array(
    			'criteria' => $criteria,
    	));
    }

}