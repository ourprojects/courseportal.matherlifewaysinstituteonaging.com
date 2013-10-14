<?php

/**
 * This is the model class for table "{{spencer_powell_user_activity_dimension}}".
 *
 * The followings are the available columns in table '{{spencer_powell_user_activity_dimension}}':
 * @property integer $user_activity_id
 * @property integer $dimension_id
 * 
 * The followings are the available model relations:
 * @property UserActivity $userActivity
 * @property Dimension $dimension
 */
class UserActivityDimension extends CActiveRecord
{
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserActivityDimension the static model class
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
		return '{{spencer_powell_user_activity_dimension}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('user_activity_id, dimension_id', 'required'),
			array('user_activity_id, dimension_id', 'numerical', 'integerOnly' => true),
			array('user_activity_id', 'exist', 'attributeName' => 'id', 'className' => 'UserActivity', 'except' => 'search'),
			array('dimension_id', 'exist', 'attributeName' => 'id', 'className' => 'Dimension', 'except' => 'search'),
			array('+user_activity_id+dimension_id',
					'ext.LDCompositeUniqueValidator.LDCompositeUniqueValidator',
					'message' => t('The dimension with ID "{value}" has already been added to this user activity.'),
			),
			array('user_activity_id, dimension_id, primary', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
				'userActivity' => array(self::BELONGS_TO, 'UserActivity', 'user_activity_id'),
				'dimension' => array(self::BELONGS_TO, 'Dimension', 'dimension_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// column attributes
			'user_activity_id' => t('User Activity ID'),
			'dimension_id' => t('Dimension ID'),

			// relation attributes
			'userActivity' => t('User Activity'),
			'dimension' => t('Dimension'),
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
		$criteria->compare($db->quoteColumnName($tableAlias.'.user_activity_id'), $this->user_activity_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.dimension_id'), $this->dimension_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
	
}
