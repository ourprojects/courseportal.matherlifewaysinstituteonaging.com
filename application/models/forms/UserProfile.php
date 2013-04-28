<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * 
 * @property string $name
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $location
 * @property string $country_iso
 * 
 */
class UserProfile extends CFormModel 
{
	public $name;
	public $email;
	public $firstname;
	public $lastname;
	public $location;
	public $country_iso;
    
    public function behaviors() 
    {
    	return array_merge(parent::behaviors(),
    			array(
    					'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors')
    			));
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() 
    {
        return array(
        	array('name, email, firstname, lastname', 'required'),
        	array('name, email', 'length', 'max' => 127),
        	array('email', 'email'),
        	
            array('firstname, lastname, location', 'length', 'max' => 255),

        	array('country_iso', 'length', 'max' => 3)
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() 
    {
        return array(
        		'name' => t('Username'),
        		'email' => t('Email'),
	            'firstname' => t('First Name'),
	            'lastname' => t('Last Name'),
	            'location' => t('Location'),
	            'country_iso' => t('Country'),
        );
    }
    
}
?>