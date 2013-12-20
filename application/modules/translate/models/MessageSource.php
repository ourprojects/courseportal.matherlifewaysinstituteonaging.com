<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class MessageSource extends CActiveRecord
{

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return TranslateModule::translator()->getMessageSourceComponent()->sourceMessageTable;
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

	public function rules()
	{
		return array(
			array('message', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('language_id', 'exist', 'attributeName' => 'id', 'className' => 'Language', 'except' => 'search'),
			array('id', 'unique', 'except' => 'search'),

			array('id, message', 'safe', 'on' => 'search'),
		);
	}

	public function relations()
	{
		return array(
			'viewMessages' => array(self::HAS_MANY, 'ViewMessage', 'message_id'),
			'views' => array(self::MANY_MANY, 'View', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'viewCount' => array(self::STAT, 'View', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'viewSources' => array(self::MANY_MANY, 'ViewSource', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'viewSourceCount' => array(self::STAT, 'ViewSource', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'translations' => array(self::HAS_MANY, 'Message', 'id'),
			'translationCount' => array(self::STAT, 'Message', 'id'),
			'sourceLanguage' => array(self::BELONGS_TO, 'Language', 'language_id'),
			'languages' => array(self::MANY_MANY, 'Language', Message::model()->tableName().'(id, language_id)'),
			'languageCount' => array(self::STAT, 'Language', Message::model()->tableName().'(id, language_id)'),
			'acceptedLanguages' => array(self::MANY_MANY, 'AcceptedLanguage', Message::model()->tableName().'(id, language_id)'),
			'acceptedLanguageCount' => array(self::STAT, 'AcceptedLanguage', Message::model()->tableName().'(id, language_id)'),
			'messageCategories' => array(self::HAS_MANY, 'CategoryMessage', 'message_id'),
			'categories' => array(self::MANY_MANY, 'Category', CategoryMessage::model()->tableName().'(message_id, category_id)'),
			'categoryCount' => array(self::STAT, 'Category', CategoryMessage::model()->tableName().'(message_id, category_id)'),
		);
	}

	public function attributeLabels()
	{
		return array(
			// Attributes
			'id' => TranslateModule::t('ID'),
			'language_id' => TranslateModule::t('Language ID'),
			'message' => TranslateModule::t('Message'),
			// Relations
			'viewMessages' => TranslateModule::t('View Messages'),
			'views' => TranslateModule::t('Views'),
			'viewCount' => TranslateModule::t('View Count'),
			'viewSources' => TranslateModule::t('View Sources'),
			'viewSourceCount' => TranslateModule::t('View Source Count'),
			'translations' => TranslateModule::t('Translations'),
			'translationCount' => TranslateModule::t('Translation Count'),
			'sourceLanguage' => TranslateModule::t('Source Language'),
			'languages' => TranslateModule::t('Languages'),
			'languageCount' => TranslateModule::t('Language Count'),
			'acceptedLanguages' => TranslateModule::t('Accepted Languages'),
			'acceptedLanguageCount' => TranslateModule::t('Accepted Language Count'),
			'messageCategories' => TranslateModule::t('Message Categories'),
			'categories' => TranslateModule::t('Categories'),
			'categoryCount' => TranslateModule::t('Category Count'),
			// Virtual Attributes
			'isMissingTranslations' => TranslateModule::t('Missing Translations?'),
		);
	}

	/************ BEGIN SCOPES **********/
	
	public function scopes()
	{
		$db = $this->getDbConnection();
		return array(
			'translated' => array('with' => array('translations' => array('joinType' => 'INNER JOIN'))),
			'havingAcceptedLanguages' => array('with' => array('acceptedLanguages' => array('joinType' => 'INNER JOIN'))),
			'havingOtherLanguages' => array('with' => array('acceptedLanguages' => array('joinType' => 'LEFT JOIN')), 'condition' => $db->quoteColumnName('acceptedLanguages.id').' IS NULL'),
			'missingAcceptedLanguageTranslations' => array(
				'join' => 'CROSS JOIN '.$db->quoteTableName(AcceptedLanguage::model()->tableName()).' '.$db->quoteTableName('acceptedLanguages'),
				'with' => array('translations' => array('joinType' => 'LEFT JOIN', 'on' => $db->quoteColumnName('acceptedLanguages.id').'='.$db->quoteColumnName('translations.language_id'))),
				'condition' => $db->quoteColumnName('translations.id').' IS NULL'
			),
		);
	}

	public function missingTranslations($languageId = null)
	{
		$db = $this->getDbConnection();
		$criteria = array(
			'with' => array('translations' => array('joinType' => 'LEFT JOIN', 'on' => $db->quoteColumnName('languages.id').'='.$db->quoteColumnName('translations.language_id'))),
			'condition' => $db->quoteColumnName($this->getTableAlias().'.language_id').'!='.$db->quoteColumnName('languages.id').' AND '.$db->quoteColumnName('translations.id').' IS NULL',
			'together' => true
		);
		if(isset($this->id))
		{
			$criteria['condition'] .= ' AND '.$db->quoteColumnName($this->getTableAlias().'.id').'=:id';
			$criteria['params'][':id'] = $this->id;
		}
		if($languageId === null)
		{
			$criteria['join'] = 'CROSS JOIN '.$db->quoteTableName(Language::model()->tableName()).' '.$db->quoteTableName('languages');
		}
		else
		{
			$criteria['params'][':language_id'] = $languageId;
			$criteria['join'] = 'JOIN '.$db->quoteTableName(Language::model()->tableName()).' '.$db->quoteTableName('languages').' ON '.$db->quoteColumnName('languages.id').'=:language_id';
		}
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}
	
	public function viewSource($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('viewSources' => ViewSource::model()->createCondition('id', $id, 'viewSources')))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function view($id, $language_id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('views' => View::model()->createCondition(array('id', 'language_id'), array('id' => $id, 'language_id' => $language_id), 'views', true, true)))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function route($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('viewSources.routes' => Route::model()->createCondition('id', $id, 'routes')))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function language($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('sourceLanguage' => Language::model()->createCondition('id', $id, 'sourceLanguage')))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function category($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('categories' => Category::model()->createCondition('id', $id, 'categories')))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	/************ END SCOPES **********/

	public function getIsMissingTranslations($languageId = null)
	{
		return $this->missingTranslations($languageId)->exists();
	}

	protected function beforeSave()
	{
		$this->setAttribute('message', trim($this->getAttribute('message')));
		return parent::beforeSave();
	}
	
	public function getSearchCriteria($mergeCriteria = array(), $operator = 'AND')
	{
		$criteria = new CDbCriteria;
		$criteria->mergeWith($mergeCriteria, $operator);
		return $criteria
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.language_id', $this->language_id)
			->compare($this->getTableAlias(false, false).'.message', $this->message, true);
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
		return strval($this->message);
	}

}