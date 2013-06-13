<?php   

/**
 * This is the model class for table "employer_domain".
 *
 * The followings are the available columns in table 'employer_domain':
 * @property integer $id
 * @property string $regex
 * @property integer $group_id
 */
class GroupRegularExpression extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class regex.
	 * @return GroupRegularExpression the static model class
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
		return '{{group_regular_expression}}';
	}
	
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
			array('regex, group_id', 'required'),
			array('regex', 'length', 'max' => 255),
			array('id, group_id', 'numerical', 'integerOnly' => true),
			array('group_id', 'exist', 'attributeName' => 'id', 'className' => 'Group'),
				
			array('id, regex', 'safe', 'on' => 'search'),
		);
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
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
			'group_id' => t('Group'),
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
		$criteria->compare('group_id', $this->group_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}