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
		return TranslateModule::translator()->getViewSource()->routeTable;
	}
	
	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
				)
		);
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
			'viewSources' => array(self::MANY_MANY, 'ViewSource', RouteView::model()->tableName().'(route_id, view_id)'),
			'viewSourceCount' => array(self::STAT, 'ViewSource', RouteView::model()->tableName().'(route_id, view_id)'),
			'views' => array(self::MANY_MANY, 'View', RouteView::model()->tableName().'(route_id, view_id)'),
			'viewCount' => array(self::STAT, 'View', RouteView::model()->tableName().'(route_id, view_id)'),
			'viewMessages' => array(self::MANY_MANY, 'ViewMessage', RouteView::model()->tableName().'(route_id, view_id)'),
			'viewMessageCount' => array(self::STAT, 'ViewMessage', RouteView::model()->tableName().'(route_id, view_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// Attributes
			'id' => TranslateModule::t('ID'),
			'route' => TranslateModule::t('Route'),
			// Relations
			'routeViews' => TranslateModule::t('Route Views'),
			'viewSources' => TranslateModule::t('Source Views'),
			'viewSourceCount' => TranslateModule::t('Source View Count'),
			'views' => TranslateModule::t('Views'),
			'viewCount' => TranslateModule::t('View Count'),
			'viewMessages' => TranslateModule::t('View Messages'),
			'viewMessageCount' => TranslateModule::t('View Message Count'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($dataProviderConfig = array()) 
	{
		if(!isset($dataProviderConfig['criteria']))
		{
			$dataProviderConfig['criteria'] = new CDbCriteria;

			$dataProviderConfig['criteria']
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.route', $this->route, true);
		}


		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString()
	{
		return strval($this->route);
	}
	
}