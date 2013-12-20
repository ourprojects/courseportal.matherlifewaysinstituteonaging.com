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
		if($this->getScenario() !== 'search')
		{
			$this->created = time();
		}
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
			array('path', 'filter', 'filter' => 'realpath'),
			array('id, language, path', 'required', 'except' => 'search'),
			array('path', 'length', 'max' => 255),
			array('language', 'length', 'max' => 3),
			array('created', 'default', 'value' => time(), 'except' => 'search'),
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

			array('id, language, language_id, path, created, createdDate, isReadable', 'safe', 'on' => 'search'),
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

	/************ BEGIN SCOPES **********/
	
	public function scopes()
	{
		return array(
			'isAcceptedLanguage' => array('with' => array('acceptedLanguage' => array('joinType' => 'INNER JOIN'))),
			'isOtherLanguage' => array('with' => array('acceptedLanguage' => array('joinType' => 'LEFT JOIN')), 'condition' => 'acceptedLanguage.id IS NULL')
		);
	}
	
	public function viewSource($id)
	{
		$this->setAttribute('id', $id);
		return $this;
	}
	
	public function route($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('sourceView.routes' => Route::model()->createCondition('id', $id, 'routes')))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id').', '.$dbConnection->quoteColumnName($this->getTableAlias().'.language_id');
		return $this;
	}
	
	public function messageSource($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('sourceView.messageSources' => MessageSource::model()->createCondition('id', $id, 'messageSources')))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id').', '.$dbConnection->quoteColumnName($this->getTableAlias().'.language_id');
		return $this;
	}
	
	public function message($id, $language_id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('messages' => Message::model()->createCondition(array('id', 'language_id'), array('id' => $id, 'language_id' => $language_id), 'messages', true, true)))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id').', '.$dbConnection->quoteColumnName($this->getTableAlias().'.language_id');
		return $this;
	}
	
	public function language($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('language' => Language::model()->createCondition('id', $id, 'language')))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id').', '.$dbConnection->quoteColumnName($this->getTableAlias().'.language_id');
		return $this;
	}
	
	public function category($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('sourceView.messageSources.categories' => Category::model()->createCondition('id', $id, 'categories')))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id').', '.$dbConnection->quoteColumnName($this->getTableAlias().'.language_id');
		return $this;
	}
	
	/************ END SCOPES **********/
	
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
		$this->_isReadable = $readable === '' ? null : $readable;
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
		return isset($this->created) ? date('Y-m-d H:i:s', $this->created) : null;
	}
	
	public function setCreatedDate($date)
	{
		$created = empty($date) ? null : strtotime($date);
		$this->created = $created === false || $created === -1 ? null : $created;
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
	public function getSearchCriteria($mergeCriteria = array(), $operator = 'AND')
	{
		$criteria = new CDbCriteria;
		$criteria->mergeWith($mergeCriteria, $operator);
		return $criteria
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.path', $this->path, true)
			->compare($this->getTableAlias(false, false).'.language_id', $this->language_id)
			->compare($this->getTableAlias(false, false).'.created', $this->created);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($dataProviderConfig = array(), $mergeCriteria = array(), $operator = 'AND')
	{
		$records = $this->filter($this->findAll($this->getSearchCriteria($mergeCriteria, $operator)));
		
		$dataProviderConfig['keyField'] = array('id', 'language_id');
		if(!isset($dataProviderConfig['sort']))
		{
			$dataProviderConfig['sort'] = array('attributes' => array('id', 'path', 'language', 'createdDate', 'isReadable'));
		}
		
		return new TArrayDataProvider($records, $dataProviderConfig);
	}

	public function __toString()
	{
		return strval($this->path);
	}

}