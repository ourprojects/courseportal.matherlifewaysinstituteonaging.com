<?php

/**
 * This is the model class for table "{{spencer_powell_recommended_activity_dimension}}".
 *
 * The followings are the available columns in table '{{spencer_powell_recommended_activity_dimension}}':
 * @property integer $activity_id
 * @property integer $dimension_id
 */
class RecommendedActivityDimension extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RecommendedActivityDimension the static model class
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
		return '{{spencer_powell_recommended_activity_dimension}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('activity_id, dimension_id', 'required'),
			array('activity_id, dimension_id', 'numerical', 'integerOnly' => true),
			array('activity_id', 'exist', 'attributeName' => 'id', 'className' => 'Activity', 'except' => 'search'),
			array('dimension_id', 'exist', 'attributeName' => 'id', 'className' => 'Dimension', 'except' => 'search'),

			array('activity_id, dimension_id', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
				'dimension' => array(self::BELONGS_TO, 'Dimension', 'dimension_id'),
				'activity' => array(self::BELONGS_TO, 'Activity', 'activity_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'activity_id' => t('Activity ID'),
			'dimension_id' => t('Dimension ID'),
			'activity' => t('Activity'),
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

		$criteria->compare('activity_id', $this->activity_id);
		$criteria->compare('dimension_id', $this->dimension_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}