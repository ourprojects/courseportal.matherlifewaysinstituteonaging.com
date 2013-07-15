<?php
class Category extends CActiveRecord {
	
	private $_isMissingTranslations;

	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	public function tableName() {
		return TranslateModule::translator()->getMessageSource()->categoryTable;
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
            array('category', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('id', 'unique', 'except' => 'search'),
			array('category', 'length', 'max' => 32),
			
			array('id, category', 'safe', 'on' => 'search'),
		);
	}

	public function relations() {
		return array(
			'categoryMessages' => array(self::HAS_MANY, 'CategoryMessage', 'category_id'),
			'categoryMessageCount' => array(self::STAT, 'CategoryMessage', 'category_id'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', CategoryMessage::model()->tableName().'(category_id, message_id)'),
			'messageSourceCount' => array(self::STAT, 'MessageSource', CategoryMessage::model()->tableName().'(category_id, message_id)'),
			'messages' => array(self::MANY_MANY, 'Message', CategoryMessage::model()->tableName().'(category_id, message_id)'),
			'messageCount' => array(self::STAT, 'MessageSource', CategoryMessage::model()->tableName().'(category_id, message_id)'),
		);
	}
	
	public function attributeLabels() {
		return array(
				// Attributes
				'id' => TranslateModule::t('ID'),
				'category' => TranslateModule::t('Category'),
				// Relations
				'categoryMessages' => TranslateModule::t('Category Messages'),
				'categoryMessageCount' => TranslateModule::t('Category Message Count'),
				'messageSources' => TranslateModule::t('Message Sources'),
				'messageSourceCount' => TranslateModule::t('Message Source Count'),
				'messages' => TranslateModule::t('Messages'),
				'messageCount' => TranslateModule::t('Message Count'),
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
			
			$dataProviderConfig['criteria']
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.category', $this->category, true);
		}
		
		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString() 
	{
		return strval($this->category);
	}
	
}