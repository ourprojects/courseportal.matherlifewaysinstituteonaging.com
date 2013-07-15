<?php
class Message extends CActiveRecord 
{

    private $_isMissingTranslations;
    
	public static function model($className = __CLASS__) 
	{
		return parent::model($className);
	}
	
	public function tableName() 
	{
		return TranslateModule::translator()->getMessageSource()->translatedMessageTable;
	}
	
	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'translate.behaviors.ERememberFiltersBehavior',
				),
		);
	}

	public function rules() 
	{
		return array(
			array('id, language_id, translation', 'required', 'except' => 'search'),
			array('id, language_id', 'numerical', 'integerOnly' => true),
			array('last_modified', 'date', 'format' => 'yyyy-M-d H:m:s'),
			array('language_id', 'exist', 'attributeName' => 'id', 'className' => 'Language', 'except' => 'search'),
			array('id', 'exist', 'attributeName' => 'id', 'className' => 'MessageSource', 'except' => 'search'),
			
			array('id, language_id, category, translation', 'safe', 'on' => 'search'),
		);
	}

	public function relations() 
	{
		return array(
			'source' => array(self::BELONGS_TO, 'MessageSource', 'id'),
			'language' => array(self::BELONGS_TO, 'Language', 'language_id'),
			'acceptedLanguage' => array(self::BELONGS_TO, 'AcceptedLanguage', 'language_id'),
			'viewMessages' => array(self::HAS_MANY, 'ViewMessage', 'message_id'),
			'views' => array(self::HAS_MANY, 'View', array('view_id' => 'id'), 'through' => 'viewMessages', 'on' => $this->getTableAlias(false, false).'.language_id=views.language_id'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
				// Attributes
				'id' => TranslateModule::t('ID'),
				'language_id' => TranslateModule::t('Language ID'),
				'translation' => TranslateModule::t('Translation'),
				// Relations
				'source' => TranslateModule::t('Source Message'),
				'language' => TranslateModule::t('Language'),
				'acceptedLanguage' => TranslateModule::t('Accepted Language'),
		);
	}
	
	public function scopes() 
	{
		return array(
				'isAcceptedLanguage' => array('with' => array('acceptedLanguage' => array('joinType' => 'INNER JOIN'))),
				'isOtherLanguage' => array('with' => array('acceptedLanguage' => array('joinType' => 'LEFT JOIN')), 'condition' => 'acceptedLanguage.id IS NULL')
		);
	}

	public function isMissingTranslations($refresh = false) 
	{
		if($refresh || !isset($this->_isMissingTranslations))
			$this->_isMissingTranslations = $this->missingTranslations()->exists();
		return $this->_isMissingTranslations;
	}
	
	public function missingTranslations($sourceMessageId = null) 
	{
		if($sourceMessageId === null) {
			$this->getDbCriteria()->mergeWith(array(
					'select' => $this->getTableAlias(false, false).'.language',
					'condition' => $this->getTableAlias(false, false).'.id NOT IN ' .
						'(' .
								'SELECT tt.id FROM '.$this->tableName().' tt ' .
								'WHERE (tt.language = '.$this->getTableAlias(false, false).'.language) AND tt.id NOT IN ' .
								'(' .
										'SELECT m.id FROM '.MessageSource::model()->tableName().' m ' .
										'WHERE (m.id = tt.id)' .
								')' .
						')',
					'group' => $this->getTableAlias(false, false).'.language'
			));
		} else {
			$this->getDbCriteria()->mergeWith(array(
					'select' => $this->getTableAlias(false, false).'.language',
					'params' => array(':sourceMessageId' => $sourceMessageId),
					'condition' => $this->getTableAlias(false, false).'.language NOT IN ' .
						'(' .
							'SELECT m.language FROM '.MessageSource::model()->tableName().' sm ' . 
							'INNER JOIN '.$this->tableName().' m ON ((sm.id = m.id) AND (sm.id = :sourceMessageId))' .
						')',
					'group' => $this->getTableAlias(false, false).'.language'
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
			->compare($this->getTableAlias(false, false).'.language_id', $this->language_id, true)
			->compare($this->getTableAlias(false, false).'.translation', $this->translation, true);
		}
	
		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString() 
	{
		return isset($this->translation) ? strval($this->translation) : '';
	}

}