<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "employer_domain".
 *
 * The followings are the available columns in table 'employer_domain':
 * @property integer $id
 * @property string $domain
 */
class EmployerDomain extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class regex.
	 * @return EmployerDomain the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table regex
	 */
	public function tableName()
	{
		return '{{employer_domain}}';
	}
	
	public function behaviors() 
	{
		return array_merge(parent::behaviors(),
				array(
						'toArray' => array('class' => 'behaviors.EArrayBehavior'),
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors')
				));
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('regex', 'required'),
			array('regex', 'length', 'max' => 255),
			
			array('id', 'numerical', 'integerOnly' => true),
			array('id, regex', 'safe', 'on' => 'search'),
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

	/**
	 * @return array customized attribute labels (regex=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => t('ID'),
			'regex' => t('Regular expression'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('regex', $this->regex, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}