<?php
class AcceptedLanguage extends CActiveRecord 
{

	private $_isMissingTranslations;
    
	public static function model($className = __CLASS__) 
	{
		return parent::model($className);
	}
	
	public function tableName() 
	{
		return TranslateModule::translator()->getMessageSource()->acceptedLanguageTable;
	}
	
	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
				)
		);
	}

	public function rules() 
	{
		return array(
			array('id', 'required', 'except' => 'search'),
			array('id', 'unique', 'except' => 'search'),
			array('id', 'length', 'max' => 12),
			array('id', 'exist', 'attributeName' => 'id', 'className' => 'Language', 'except' => 'search'),
				
			array('id', 'safe', 'on' => 'search')
		);
	}
	
	public function relations() 
	{
		return array(
			'messages' => array(self::HAS_MANY, 'Message', 'language', 'joinType' => 'INNER JOIN'),
			'messageCount' => array(self::STAT, 'Message', 'language'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', Message::model()->tableName().'(language_id, id)'),
			'messageSourceCount' => array(self::STAT, 'MessageSource', Message::model()->tableName().'(language_id, id)'),
			'views' => array(self::HAS_MANY, 'View', 'language_id'),
			'viewCount' => array(self::STAT, 'View', 'language_id'),
			'viewSources' => array(self::MANY_MANY, 'ViewSource', View::model()->tableName().'(language_id, id)'),
			'viewSourceCount' => array(self::STAT, 'ViewSource', View::model()->tableName().'(language_id, id)'),
			'language' => array(self::BELONGS_TO, 'Language', 'id'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
				// Attributes
				'id' => TranslateModule::t('ID'),
				// Relations
				'messages' => TranslateModule::t('Messages'),
				'messageCount' => TranslateModule::t('Message Count'),
				'messageSources' => TranslateModule::t('Message Sources'),
				'messageSourceCount' => TranslateModule::t('Message Source Count'),
				'views' => TranslateModule::t('Views'),
				'viewCount' => TranslateModule::t('View Count'),
				'viewSources' => TranslateModule::t('View Sources'),
				'viewSourceCount' => TranslateModule::t('View Source Count'),
				'language' => TranslateModule::t('Language'),
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
			$dataProviderConfig['criteria'] = $this->getDbCriteria();
		
			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.id', $this->id, true);
		}

		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString() 
	{
		return $this->getRelated('language')->getName();
	}

}