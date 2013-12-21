<?php

/**
 * This is the model class for table "{{translate_view_source}}".
 *
 * The followings are the available columns in table '{{translate_view_source}}':
 * @property integer $id
 * @property string $path
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class ViewSource extends CActiveRecord
{
	
	private $_isReadable;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewSource the static model class
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
		return TranslateModule::translator()->getViewSourceComponent()->viewSourceTable;
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

	public function getRelativePath()
	{
		if(substr($this->getAttribute('path'), 0, strlen(Yii::app()->getBasePath())) == Yii::app()->getBasePath())
		{
			return substr($this->getAttribute('path'), strlen(Yii::app()->getBasePath()));
		}
		return $this->getAttribute('path');
	}

	public function setRelativePath($path)
	{
		return $this->setAttribute('path', Yii::app()->getBasePath().DIRECTORY_SEPARATOR.$path);
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('path', 'filter', 'filter' => 'realpath'),
			array('path', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('path', 'length', 'max' => 255),
			array('id, path', 'unique', 'except' => 'search'),

			array('id, path, isReadable', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'viewMessages' => array(self::HAS_MANY, 'ViewMessage', 'view_id'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', ViewMessage::model()->tableName().'(view_id, message_id)'),
			'messageSourceCount' => array(self::STAT, 'MessageSource', ViewMessage::model()->tableName().'(view_id, message_id)'),
			'viewRoutes' => array(self::HAS_MANY, 'RouteView', 'route_id'),
			'routes' => array(self::MANY_MANY, 'Route', RouteView::model()->tableName().'(view_id, route_id)'),
			'routeCount' => array(self::STAT, 'Route', RouteView::model()->tableName().'(view_id, route_id)'),
			'views' => array(self::HAS_MANY, 'View', 'id'),
			'viewCount' => array(self::STAT, 'View', 'id'),
			'languages' => array(self::MANY_MANY, 'Language', View::model()->tableName().'(id, language_id)'),
			'languageCount' => array(self::STAT, 'Language', View::model()->tableName().'(id, language_id)'),
			'acceptedLanguages' => array(self::MANY_MANY, 'AcceptedLanguage', View::model()->tableName().'(id, language_id)'),
			'acceptedLanguageCount' => array(self::STAT, 'AcceptedLanguage', View::model()->tableName().'(id, language_id)'),

			'messages' => array(self::HAS_MANY, 'Message', array('message_id' => 'id'),
				'through' => 'viewMessages',
				'join' => 'INNER JOIN '.View::model()->tableName().' t ON t.language_id=messages.language_id',
				'condition' => 't.id=viewMessages.view_id'),
		);
	}
	
	/************ BEGIN SCOPES **********/

	public function scopes()
	{
		return array(
			'havingAcceptedLanguages' => array('with' => array('acceptedLanguages' => array('joinType' => 'INNER JOIN'))),
			'havingOtherLanguages' => array('with' => array('acceptedLanguages' => array('joinType' => 'LEFT JOIN', 'condition' => 'acceptedLanguages.id IS NULL'))),
		);
	}
	
	public function route($id)
	{
		$db = $this->getDbConnection();
		$this->with(array('routes' => Route::model()->createCondition('id', $id, 'routes')))->together()->getDbCriteria()->group = $db->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function messageSource($id)
	{
		$db = $this->getDbConnection();
		$this->with(array('messageSources' => MessageSource::model()->createCondition('id', $id, 'messageSources')))->together()->getDbCriteria()->group = $db->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function message($id, $language_id)
	{
		$db = $this->getDbConnection();
		$this->with(array('messages' => Message::model()->createCondition(array('id', 'language_id'), array('id' => $id, 'language_id' => $language_id), 'messages', true, true)))->together()->getDbCriteria()->group = $db->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function language($id)
	{
		$db = $this->getDbConnection();
		$this->with(array('languages' => Language::model()->createCondition('id', $id, 'languages')))->together()->getDbCriteria()->group = $db->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}

	public function category($id)
	{
		$db = $this->getDbConnection();
		$this->with(array('messageSources.categories' => Category::model()->createCondition('id', $id, 'categories')))->together()->getDbCriteria()->group = $db->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function missingTranslations($id = null)
	{
		$db = $this->getDbConnection();
		$condition = $id === null ? array('condition' => '1=1', 'params' => array()) : Language::model()->createCondition('id', $id, 'languages');

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
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// Attributes
			'id' => TranslateModule::t('ID'),
			'path' => TranslateModule::t('Source Path'),
			// Relations
			'viewMessages' => TranslateModule::t('View Messages'),
			'messageSources' => TranslateModule::t('Messages'),
			'messageSourceCount' => TranslateModule::t('Message Count'),
			'viewRoutes' => TranslateModule::t('View Routes'),
			'routes' => TranslateModule::t('Routes'),
			'routeCount' => TranslateModule::t('Route Count'),
			'views' => TranslateModule::t('Views'),
			'viewCount' => TranslateModule::t('View Count'),
			'languages' => TranslateModule::t('Languages'),
			'languageCount' => TranslateModule::t('Language Count'),
			'acceptedLanguages' => TranslateModule::t('Accepted Languages'),
			'acceptedLanguageCount' => TranslateModule::t('Accepted Language Count'),
			'messages' => TranslateModule::t('Translations'),
			// Virtual Attributes
			'relativePath' => TranslateModule::t('Relative Path'),
			'isReadable' => TranslateModule::t('Readable'),
		);
	}
	
	/**
	 * Returns whether this view source's path exists and is readable.
	 * 
	 * @return boolean True if this view source's path exists and is readable, false otherwise
	 */
	public function getIsReadable($refresh = false)
	{
		if($refresh || !isset($this->_isReadable))
		{
			$this->_isReadable = $this->getScenario() === 'search' ? null : is_readable($this->path);
		}
		return $this->_isReadable;
	}
	
	public function setIsReadable($readable)
	{
		$this->_isReadable = $readable;
	}
	
	public function getSearchCriteria($mergeCriteria = array(), $operator = 'AND')
	{
		$criteria = new CDbCriteria;
		$criteria->mergeWith($mergeCriteria, $operator);
		return $criteria
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.path', $this->path, true);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CArrayDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($dataProviderConfig = array(), $mergeCriteria = array(), $operator = 'AND')
	{
		$records = $this->filter($this->findAll($this->getSearchCriteria($mergeCriteria, $operator)));

		if(!isset($dataProviderConfig['sort']))
		{
			$dataProviderConfig['sort'] = array('attributes' => array('id', 'path', 'isReadable'));
		}
		
		return new CArrayDataProvider($records, $dataProviderConfig);
	}

	public function __toString()
	{
		return strval($this->path);
	}

}