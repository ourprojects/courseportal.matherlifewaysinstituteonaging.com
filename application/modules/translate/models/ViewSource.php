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

			array('id, path, messageCount, translationCount, acceptedLanguageCount, routeCount, viewCount', 'safe', 'on' => 'search'),
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
	
	public function scopes()
	{
		return array(
				'havingAcceptedLanguages' => array('with' => array('acceptedLanguages' => array('joinType' => 'INNER JOIN'))),
				'havingOtherLanguages' => array('with' => array('acceptedLanguages' => array('joinType' => 'LEFT JOIN', 'condition' => 'acceptedLanguages.id IS NULL')))
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
			->compare($this->getTableAlias(false, false).'.path', $this->path, true);
		}
	
		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString()
	{
		return strval($this->path);
	}
	
}