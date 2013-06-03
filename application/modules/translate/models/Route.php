<?php

/**
 * This is the model class for table "{{translate_route}}".
 *
 * The followings are the available columns in table '{{translate_route}}':
 * @property integer $id
 * @property string $route
 * 
 */
class Route extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Route the static model class
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
		return '{{translate_route}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('route', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('route', 'length', 'max' => 255),
			array('id, route', 'unique', 'except' => 'search'),

			array('id, route', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'routeViews' => array(self::HAS_MANY, 'RouteView', 'route_id'),
			'viewSources' => array(self::MANY_MANY, 'ViewSource', '{{translate_view_source}}(route_id, view_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => TranslateModule::t('ID'),
			'route' => TranslateModule::t('Route'),
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
		$criteria->compare('route', $this->route, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}