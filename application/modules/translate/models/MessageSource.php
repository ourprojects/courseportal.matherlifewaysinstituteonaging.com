<?php
class MessageSource extends CActiveRecord {
	
	private $_isMissingTranslations;

	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	public function tableName() {
		return TranslateModule::translator()->getMessageSource()->sourceMessageTable;
	}
	
	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'translate.behaviors.ERememberFiltersBehavior',
				)
		);
	}

	public function rules() {
		return array(
            array('message', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('id', 'unique', 'except' => 'search'),
			
			array('id, message', 'safe', 'on' => 'search'),
		);
	}

	public function relations() {
		return array(
			'viewMessages' => array(self::HAS_MANY, 'ViewMessage', 'message_id'),
			'views' => array(self::MANY_MANY, 'View', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'viewCount' => array(self::STAT, 'View', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'viewSources' => array(self::MANY_MANY, 'ViewSource', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'viewSourceCount' => array(self::STAT, 'ViewSource', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'translations' => array(self::HAS_MANY, 'Message', 'id'),
			'translationCount' => array(self::STAT, 'Message', 'id'),
			'languages' => array(self::MANY_MANY, 'Language', Message::model()->tableName().'(id, language_id)'),
			'languageCount' => array(self::STAT, 'Language', Message::model()->tableName().'(id, language_id)'),
			'acceptedLanguages' => array(self::MANY_MANY, 'AcceptedLanguage', Message::model()->tableName().'(id, language_id)'),
			'acceptedLanguageCount' => array(self::STAT, 'AcceptedLanguage', Message::model()->tableName().'(id, language_id)'),
			'messageCategories' => array(self::HAS_MANY, 'CategoryMessage', 'message_id'),
			'categories' => array(self::MANY_MANY, 'Category', CategoryMessage::model()->tableName().'(message_id, category_id)'),
			'categoryCount' => array(self::STAT, 'Category', CategoryMessage::model()->tableName().'(message_id, category_id)'),
		);
	}

	public function attributeLabels() {
		return array(
				// Attributes
				'id' => TranslateModule::t('ID'),
				'message' => TranslateModule::t('Message'),
				// Relations
				'viewMessages' => TranslateModule::t('View Messages'),
				'views' => TranslateModule::t('Views'),
				'viewCount' => TranslateModule::t('View Count'),
				'viewSources' => TranslateModule::t('View Sources'),
				'viewSourceCount' => TranslateModule::t('View Source Count'),
				'translations' => TranslateModule::t('Translations'),
				'translationCount' => TranslateModule::t('Translation Count'),
				'languages' => TranslateModule::t('Languages'),
				'languageCount' => TranslateModule::t('Language Count'),
				'acceptedLanguages' => TranslateModule::t('Accepted Languages'),
				'acceptedLanguageCount' => TranslateModule::t('Accepted Language Count'),
				'messageCategories' => TranslateModule::t('Message Categories'),
				'categories' => TranslateModule::t('Categories'),
				'categoryCount' => TranslateModule::t('Category Count'),
		);
	}

	public function scopes() {
		return array(
				'translated' => array('with' => array('translations' => array('joinType' => 'INNER JOIN'))),
				'havingAcceptedLanguages' => array('with' => array('acceptedLanguages' => array('joinType' => 'INNER JOIN'))),
				'havingOtherLanguages' => array('with' => array('acceptedLanguages' => array('joinType' => 'LEFT JOIN')), 'condition' => 'acceptedLanguages.id IS NULL'),
				'missingAcceptedLanguageTranslations' => array(
						'condition' => $this->getTableAlias(false, false).'.id <> ANY ' .
							'(' .
								'SELECT al.* FROM '.AcceptedLanguage::model()->tableName().' al ' .
								'WHERE al.id NOT IN '.
								'(' .
									'SELECT m.language_id FROM '.Message::model()->tableName().' m ' .
									'WHERE (m.id = '.$this->getTableAlias(false, false).'.id)' .
								')' .
							')'
				)
		);
	}
	
	public function isMissingTranslations($refresh = false) {
		if($refresh || !isset($this->_isMissingTranslations))
			$this->_isMissingTranslations = $this->missingTranslations()->exists();
		return $this->_isMissingTranslations;
	}
	
	public function missingTranslations($languageId = null) {
		if($languageId === null) {
			$this->getDbCriteria()->mergeWith(array(
					'condition' => $this->getTableAlias(false, false).'.id <> ANY ' .
						'(' .
							'SELECT m.id FROM '.Message::model()->tableName().' m ' .
							'WHERE m.language_id NOT IN ' .
							'(' .
								'SELECT mm.language_id FROM '.Message::model()->tableName().' mm ' .
								'WHERE (mm.id = '.$this->getTableAlias(false, false).'.id) ' .
							')' .
						')'
			));
		} else {
			$this->getDbCriteria()->mergeWith(array(
					'params' => array(':languageId' => $languageId),
					'condition' => $this->getTableAlias(false, false).'.id NOT IN ' .
						'(' .
							'SELECT id FROM '.Message::model()->tableName().' m ' . 
							'WHERE (m.language_id = :languageId) AND (m.id = '.$this->getTableAlias(false, false).'.id)' .
						')'
			));
		}
		return $this;
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($dataProviderConfig = array()) 
	{
		if(!isset($dataProviderConfig['criteria']))
		{
			$dataProviderConfig['criteria'] = $this->getDbCriteria();
		
			$dataProviderConfig['criteria']
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.message', $this->message, true);
		}

		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString() 
	{
		return strval($this->message);
	}
	
}