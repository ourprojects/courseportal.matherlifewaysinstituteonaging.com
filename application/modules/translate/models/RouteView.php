<?php

/**
 * This is the model class for table "{{translate_route_view}}".
 *
 * The followings are the available columns in table '{{translate_route_view}}':
 * @property integer $route_id
 * @property integer $view_id
 * 
 */
class RouteView extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RouteView the static model class
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
		return '{{translate_route_view}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('route_id, view_id', 'required', 'except' => 'search'),
			array('route_id, view_id', 'numerical', 'integerOnly' => true),
			array('route_id', 'exist', 'attributeName' => 'id', 'className' => 'Route', 'except' => 'search'),
			array('view_id', 'exist', 'attributeName' => 'id', 'className' => 'ViewSource', 'except' => 'search'),
				
			array('route_id, view_id', 'safe', 'on' => 'search')
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'route' => array(self::BELONGS_TO, 'Route', 'route_id'),
			'viewSource' => array(self::BELONGS_TO, 'ViewSource', 'view_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'route_id' => TranslateModule::t('Route ID'),
			'view_id' => TranslateModule::t('View ID'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$criteria->compare('route_id', $this->route_id);
		$criteria->compare('view_id', $this->view_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}