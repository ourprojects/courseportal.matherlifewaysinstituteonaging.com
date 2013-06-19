<?php

/**
 * This is the model class for table "{{translate_view_source}}".
 *
 * The followings are the available columns in table '{{translate_view_source}}':
 * @property integer $id
 * @property string $path
 * 
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
		return TranslateModule::translator()->getViewSource()->viewSourceTable;
	}
	
	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'translate.behaviors.ERememberFiltersBehavior',
				)
		);
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

			array('id, path', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'viewMessageSources' => array(self::HAS_MANY, 'ViewMessage', 'view_id'),
			'messages' => array(self::MANY_MANY, 'MessageSource', ViewMessage::model()->tableName().'(view_id, message_id)'),
			'messageCount' => array(self::STAT, 'MessageSource', ViewMessage::model()->tableName().'(view_id, message_id)'),
			'translations' => array(self::MANY_MANY, 'Message', ViewMessage::model()->tableName().'(view_id, message_id)'),
			'translationCount' => array(
					self::STAT, 
					'MessageSource', 
					ViewMessage::model()->tableName().'(view_id, message_id)', 
					'join' => 
					'INNER JOIN '.View::model()->tableName().' v ON (v.id='.ViewMessage::model()->tableName().'.view_id)'.
					'INNER JOIN '.Message::model()->tableName().' m ON ('.$this->getTableAlias(false, false).'.id=m.id AND v.language=m.language)'),
			'views' => array(self::HAS_MANY, 'View', 'id'),
			'viewCount' => array(self::STAT, 'View', 'id'),
			'viewRoutes' => array(self::HAS_MANY, 'ViewRoute', 'route_id'),
			'routes' => array(self::MANY_MANY, 'Route', RouteView::model()->tableName().'(view_id, route_id)'),
			'routeCount' => array(self::STAT, 'Route', RouteView::model()->tableName().'(view_id, route_id)'),
		);
	}
	
	public function getRelativePath()
	{
		if (substr($this->getAttribute('path'), 0, strlen(Yii::app()->getBasePath())) == Yii::app()->getBasePath()) 
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
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => TranslateModule::t('ID'),
			'path' => TranslateModule::t('Path'),
			'relativePath' => TranslateModule::t('Path (relative to app base path)'),
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
	
			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.id', $this->id);
			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.path', $this->path, true);
		}

		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString()
	{
		return strval($this->path);
	}
	
}