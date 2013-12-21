<?php

/**
 * This is the model class for table "{{translate_route}}".
 *
 * The followings are the available columns in table '{{translate_route}}':
 * @property integer $id
 * @property string $route
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
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
		return TranslateModule::translator()->getViewSourceComponent()->routeTable;
	}

	public function behaviors()
	{
		return array(
			'ERememberFiltersBehavior' => array(
				'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
			),
			'LDFilterRawModelDataBehavior' => array(
					'class' => 'ext.LDFilterRawModelDataBehavior.LDFilterRawModelDataBehavior',
			),
			'LDActiveRecordConditionBehavior' => array(
				'class' => 'ext.LDActiveRecordConditionBehavior.LDActiveRecordConditionBehavior'
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
	
	/************ BEGIN SCOPES **********/
	
	public function viewSource($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'viewSources' => ViewSource::model()->createCondition('id', $id, 'viewSources')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function view($id, $language_id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'views' => View::model()->createCondition(array('id', 'language_id'), array('id' => $id, 'language_id' => $language_id), 'views', true, true)
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function messageSource($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'viewSources.messageSources' => MessageSource::model()->createCondition('id', $id, 'messageSources')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function message($id, $language_id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'views.messages' => Message::model()->createCondition(array('id', 'language_id'), array('id' => $id, 'language_id' => $language_id), 'messages', true, true)
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function language($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'views.language' => Language::model()->createCondition('id', $id, 'language')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function category($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'viewSources.messageSources.categories' => Category::model()->createCondition('id', $id, 'categories')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function missingTranslations($languageId = null)
	{
		$db = $this->getDbConnection();
		$condition = $languageId === null ? array('condition' => '1=1', 'params' => array()) : Language::model()->createCondition('id', $languageId, 'languages');
	
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'views' => array(
					'joinType' => 'LEFT JOIN', 
					'on' => $db->quoteColumnName('views.language_id').'='.$db->quoteColumnName('languages.id')
				)
			),
			'condition' => $db->quoteColumnName('views.id').' IS NULL',
			'join' => 'JOIN '.$db->quoteTableName(Language::model()->tableName()).' '.$db->quoteTableName('languages').' ON '.$condition['condition'],
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
			'params' => $condition['params'],
			'together' => true
		));
		return $this;
	}
	
	/************ END SCOPES **********/
	
	public function getSearchCriteria($mergeCriteria = array(), $operator = 'AND')
	{
		$criteria = new CDbCriteria;
		$criteria->mergeWith($mergeCriteria, $operator);
		return $criteria
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.route', $this->route, true);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($dataProviderConfig = array(), $mergeCriteria = array(), $operator = 'AND')
	{
		$dataProviderConfig['criteria'] = $this->getSearchCriteria($mergeCriteria, $operator);
		return new CActiveDataProvider($this, $dataProviderConfig);
	}

	public function __toString()
	{
		return strval($this->route);
	}

}