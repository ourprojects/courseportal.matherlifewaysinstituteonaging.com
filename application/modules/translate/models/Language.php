<?php
class Language extends CActiveRecord 
{

	private $_name;
    
	public static function model($className = __CLASS__) 
	{
		return parent::model($className);
	}
	
	public function tableName() 
	{
		return TranslateModule::translator()->getMessageSource()->languageTable;
	}
	
	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'translate.behaviors.ERememberFiltersBehavior',
				)
		);
	}

	public function rules() 
	{
		return array(
			array('id, code', 'required', 'except' => 'search'),
			array('id, code', 'unique', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('code', 'length', 'max' => 16),
				
			array('id, code', 'safe', 'on' => 'search')
		);
	}
	
	public function relations() 
	{
		return array(
			'messages' => array(self::HAS_MANY, 'Message', 'language_id', 'joinType' => 'INNER JOIN'),
			'messageCount' => array(self::STAT, 'Message', 'language_id'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', Message::model()->tableName().'(language_id, id)'),
			'messageSourceCount' => array(self::STAT, 'MessageSource', Message::model()->tableName().'(language_id, id)'),
			'views' => array(self::HAS_MANY, 'View', 'language_id'),
			'viewCount' => array(self::STAT, 'View', 'language_id'),
			'viewSources' => array(self::MANY_MANY, 'ViewSource', View::model()->tableName().'(language_id, id)'),
			'viewSourceCount' => array(self::STAT, 'ViewSource', View::model()->tableName().'(language_id, id)'),
			'acceptedLanguage' => array(self::HAS_ONE, 'AcceptedLanguage', 'id')
		);
	}
	
	public function attributeLabels()
	{
		return array(
				// Attributes
				'id' => TranslateModule::t('ID'),
				'code' => TranslateModule::t('Code'),
				// Relations
				'messages' => TranslateModule::t('Messages'),
				'messageCount' => TranslateModule::t('Message Count'),
				'messageSources' => TranslateModule::t('Message Sources'),
				'messageSourceCount' => TranslateModule::t('Message Source Count'),
				'views' => TranslateModule::t('Views'),
				'viewCount' => TranslateModule::t('View Count'),
				'viewSources' => TranslateModule::t('View Sources'),
				'viewSourceCount' => TranslateModule::t('View Source Count'),
				'acceptedLanguage' => TranslateModule::t('Accepted Language'),
				// Virtual Attributes
				'name' => TranslateModule::t('Name'),
				'isAccepted' => TranslateModule::t('Accepted?'),
				'isMissingTranslations' => TranslateModule::t('Missing Translations?'),
		);
	}
	
	public function scopes() 
	{
		return array(
				'accepted' => array('with' => array('acceptedLanguage' => array('joinType' => 'INNER JOIN'))),
				'notAccepted' => array('with' => array('acceptedLanguage' => array('joinType' => 'LEFT JOIN')), 'condition' => 'acceptedLanguage.id IS NULL')
		);
	}
	
	public function missingTranslations($messageId = null)
	{
		$criteria = array(
				'with' => array('messages' => array('joinType' => 'LEFT JOIN', 'on' => 'messageSources.id=messages.id')),
				'condition' => 'messages.id IS NULL',
				'together' => true
		);
		if($messageId === null)
		{
			$criteria['join'] = 'CROSS JOIN '.MessageSource::model()->tableName().' messageSources';
		}
		else
		{
			$criteria['params'] = array(':message_id' => $messageId);
			$criteria['join'] = 'JOIN '.MessageSource::model()->tableName().' messageSources ON messageSources.id=:message_id';
		}
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}
	
	public function getName() 
	{
		if(!isset($this->_name) && isset($this->code))
		{
			$this->_name = TranslateModule::translator()->getLanguageDisplayName($this->code);
			if($this->_name === false)
				$this->_name = strval($this->code);
		}
		return $this->_name;
	}
	
	public function getIsMissingTranslations($messageId = null)
	{
		return $this->missingTranslations($messageId)->exists();
	}
	
	public function getIsAccepted()
	{
		return $this->getRelated('acceptedLanguage') !== null;
	}
	
	public function setIsAccepted($accepted)
	{
		$acceptedLanguage = $this->getRelated('acceptedLanguage');
		if($accepted)
		{
			if($acceptedLanguage === null)
			{
				$acceptedLanguage = new AcceptedLanguage();
				$acceptedLanguage->setAttribute('id', $this->id);
				if(!$this->getIsNewRecord())
				{
					$acceptedLanguage->save();
				}
				$this->acceptedLanguage = $acceptedLanguage;
			}
		}
		else if($acceptedLanguage !== null)
		{
			$acceptedLanguage->delete();
			unset($this->acceptedLanguage);
		}
	}
	
	protected function afterSave()
	{
		parent::afterSave();
		$acceptedLanguage = $this->getRelated('acceptedLanguage');
		if($acceptedLanguage !== null && $acceptedLanguage->getIsNewRecord())
		{
			$acceptedLanguage->save();
		}
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
			->compare($this->getTableAlias(false, false).'.id', $this->id, true)
			->compare($this->getTableAlias(false, false).'.code', $this->code, true);
		}

		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString() 
	{
		return $this->getName();
	}

}