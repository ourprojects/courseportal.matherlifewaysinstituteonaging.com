<?php

/**
 * This is the model class for table "{{translate_view}}".
 *
 * The followings are the available columns in table '{{translate_view}}':
 * @property integer $id
 * @property string $language
 * @property string $path
 * @property integer $created
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class View extends CActiveRecord
{
	
	private $_isReadable;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return View the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
	
	public function init()
	{
		$this->created = time();
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TranslateModule::translator()->getViewSourceComponent()->viewTable;
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
			array('path', 'filter', 'filter' => 'realpath'),
			array('id, language, path', 'required', 'except' => 'search'),
			array('path', 'length', 'max' => 255),
			array('language', 'length', 'max' => 3),
			array('created', 'default', 'value' => time()),
			array('id, created', 'numerical', 'integerOnly' => true),
			array('id', 'exist', 'attributeName' => 'id', 'className' => 'ViewSource', 'except' => 'search'),
			array('id',
				'unique',
				'caseSensitive' => false,
				'criteria' => array(
					'condition' => 'language = :language',
					'params' => array(':language' => $this->language),
				),
				'message' => 'Source view {attribute} "{value}" has already been translated to "'.$this->language.'" ("'.TranslateModule::translator()->getLanguageDisplayName($this->language).'").',
				'except' => 'search'
			),

			array('id, language, path, created, isReadable', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'sourceView' => array(self::BELONGS_TO, 'ViewSource', 'id'),
			'language' => array(self::BELONGS_TO, 'Language', 'language_id'),
			'acceptedLanguage' => array(self::BELONGS_TO, 'AcceptedLanguage', 'language_id'),
			'viewMessages' => array(self::HAS_MANY, 'ViewMessage', 'view_id'),
			'messages' => array(self::HAS_MANY, 'Message', array('message_id' => 'id'), 'through' => 'viewMessages', 'on' => $this->getTableAlias(false, false).'.language_id=messages.language_id'),
			'viewRoutes' => array(self::HAS_MANY, 'RouteView', array('id' => 'view_id'), 'through' => 'sourceView'),
		);
	}

	public function scopes()
	{
		return array(
			'isAcceptedLanguage' => array('with' => array('acceptedLanguage' => array('joinType' => 'INNER JOIN'))),
			'isOtherLanguage' => array('with' => array('acceptedLanguage' => array('joinType' => 'LEFT JOIN')), 'condition' => 'acceptedLanguage.id IS NULL')
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
	
	public function getCreatedDate()
	{
		return date('Y-m-d H:i:s', $this->created);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// Attributes
			'id' => TranslateModule::t('ID'),
			'path' => TranslateModule::t('Compiled Path'),
			'created' => TranslateModule::t('Created'),
			// Relations
			'sourceView' => TranslateModule::t('Source'),
			'language' => TranslateModule::t('Language'),
			'acceptedLanguage' => TranslateModule::t('Accepted Language'),
			'viewMessages' => TranslateModule::t('View Messages'),
			'messageSources' => TranslateModule::t('Messages'),
			'messageSourceCount' => TranslateModule::t('Message Count'),
			'messages' => TranslateModule::t('Translations'),
			// Virtual Attributes
			'relativePath' => TranslateModule::t('Relative Path'),
			'createdDate' => TranslateModule::t('Date Created'),
			'isReadable' => TranslateModule::t('Readable'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function getSearchCriteria($dataProviderConfig = array())
	{
			$criteria = new CDbCriteria;

			$criteria
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.path', $this->path, true)
			->compare($this->getTableAlias(false, false).'.language_id', $this->language_id, true)
			->compare($this->getTableAlias(false, false).'.created', $this->created, true);

		return $criteria;
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($dataProviderConfig = array())
	{
		if(!isset($dataProviderConfig['criteria']))
		{
			$dataProviderConfig['criteria'] = $this->getSearchCriteria();
		}
	
		return new CActiveDataProvider($this, $dataProviderConfig);
	}

	public function __toString()
	{
		return strval($this->path);
	}

}