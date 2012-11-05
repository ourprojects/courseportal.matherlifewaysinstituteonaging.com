<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "user_profile".
 *
 * The followings are the available columns in table 'user_profile':
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $city
 * @property string $zip_code
 * @property integer $state_id
 * @property string $country_iso
 *
 * The followings are the available model relations:
 * @property User $user
 * @property States $state
 * @property QuestionAnswer[] $questionAnswers
 * 
 */
class UserProfile extends ActiveRecord {
	
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return UserProfile the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{user_profile}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
            array('user_id, 
            		firstname, 
            		lastname, 
            		country_iso',
            		'required', 'except' => 'search'),
        	
            array('firstname, lastname, city', 'length', 'max' => 255),
        		
			array('zip_code', 'filter', 'filter' => array($this, 'cleanNonNumeric')),
			array('zip_code', 'numerical', 'integerOnly' => true),
            array('zip_code', 'length', 'max' => 10),
        		
        	array('state_id', 'exist', 'attributeName' => 'id', 'className' => 'States', 'allowEmpty' => true),
        	array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'User', 'allowEmpty' => false),
        		
        	array('user_id, firstname, lastname, city, zip_code, state_id, country_iso', 'safe', 'on' => 'search')
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        	'state' => array(self::BELONGS_TO, 'State', 'state_id'),
        	'questionAnswers' => array(self::HAS_MANY, 'QuestionAnswer', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_id' => t('User ID'),
            'firstname' => t('First Name'),
            'lastname' => t('Last Name'),
            'city' => t('City'),
            'zip_code' => t('Zip Code'),
            'state_id' => t('State'),
            'country_iso' => t('Country'),
        	'state' => t('State')
        );
    }
    
    public function getSearchCriteria() {
    	$criteria = new CDbCriteria;
    	
    	$criteria->compare('user_id', $this->user_id);
    	$criteria->compare('firstname', $this->firstname,true);
    	$criteria->compare('lastname', $this->lastname,true);
    	$criteria->compare('city', $this->city,true);
    	$criteria->compare('zip_code', $this->zip_code,true);
    	$criteria->compare('state_id', $this->state_id,true);
    	$criteria->compare('country_iso', $this->country_iso,true);
    	
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
    
    public function cleanNonNumeric($value) {
    	return preg_replace('/\D/', '', trim($value));
    }
    
}

?>