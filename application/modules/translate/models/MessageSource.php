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
	
	public function attributeLabels() {
		return array(
				'id' => TranslateModule::t('ID'),
				'message' => TranslateModule::t('Message'),
				'categories' => TranslateModule::t('Categories'),
				'translations' => TranslateModule::t('Translations'),
				'acceptedLanguages' => TranslateModule::t('Accepted Languages'),
		);
	}
    
	public function relations() {
		return array(
			'viewMessages' => array(self::HAS_MANY, 'CompiledViewMessage', 'message_id'),
			'views' => array(self::MANY_MANY, 'View', ViewMessage::model()->tableName().'(message_id, view_id)'),
			'viewSources' => array(self::MANY_MANY, 'ViewSource', ViewMessage::model()->tableName().'(message_id, view_id)'),
            'translations' => array(self::HAS_MANY, 'Message', 'id', 'joinType' => 'INNER JOIN'),
			'acceptedLanguages' => array(self::MANY_MANY, 'AcceptedLanguage', Message::model()->tableName().'(id, language)'),
			'messageCategories' => array(self::HAS_MANY, 'CategoryMessage', 'message_id'),
			'categories' => array(self::MANY_MANY, 'Category', CategoryMessage::model()->tableName().'(message_id, category_id)'),
		);
	}
	
	public function scopes() {
		return array(
				'acceptedLanguageTranslation' => array('with' => 'acceptedLanguage'),
				'missingAcceptedLanguageTranslations' => array(
						'condition' => $this->getTableAlias(false, false).'.id <> ANY ' .
							'(' .
								'SELECT al.* FROM '.AcceptedLanguage::model()->tableName().' al ' .
								'WHERE al.id NOT IN '.
								'(' .
									'SELECT m.language FROM '.Message::model()->tableName().' m ' .
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
							'WHERE m.language NOT IN ' .
							'(' .
								'SELECT mm.language FROM '.Message::model()->tableName().' mm ' .
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
							'WHERE (m.language = :languageId) AND (m.id = '.$this->getTableAlias(false, false).'.id)' .
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
		
			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.id', $this->id);
			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.message', $this->message, true);
		}

		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString() 
	{
		return strval($this->message);
	}
	
}