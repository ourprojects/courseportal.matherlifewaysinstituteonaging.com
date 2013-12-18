<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class Category extends CActiveRecord 
{

	private $_isMissingTranslations;

	public static function model($className = __CLASS__) 
	{
		return parent::model($className);
	}

	public function tableName() 
	{
		return TranslateModule::translator()->getMessageSourceComponent()->categoryTable;
	}

	public function behaviors()
	{
		return array(
			'ERememberFiltersBehavior' => array(
				'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
			),
			'LDFilterRawModelDataBehavior' => array(
					'class' => 'ext.LDFilterRawModelDataBehavior.LDFilterRawModelDataBehavior',
			)
		);
	}

	public function rules() 
	{
		return array(
			array('category', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('id, category', 'unique', 'except' => 'search'),
			array('category', 'length', 'max' => 32),

			array('id, category', 'safe', 'on' => 'search'),
		);
	}

	public function relations() 
	{
		return array(
			'categoryMessages' => array(self::HAS_MANY, 'CategoryMessage', 'category_id'),
			'categoryMessageCount' => array(self::STAT, 'CategoryMessage', 'category_id'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', CategoryMessage::model()->tableName().'(category_id, message_id)'),
			'messageSourceCount' => array(self::STAT, 'MessageSource', CategoryMessage::model()->tableName().'(category_id, message_id)'),
			'messages' => array(self::MANY_MANY, 'Message', CategoryMessage::model()->tableName().'(category_id, message_id)'),
			'messageCount' => array(self::STAT, 'MessageSource', CategoryMessage::model()->tableName().'(category_id, message_id)'),
		);
	}

	public function attributeLabels() 
	{
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
	
	/************ BEGIN SCOPES **********/
	
	public function viewSource($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('messageSources.viewSources' => array('condition' => $dbConnection->quoteColumnName('viewSources.id').'=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function view($id, $language_id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('messageSources.views' => array('condition' => $dbConnection->quoteColumnName('views.id').'=:id AND '.$dbConnection->quoteColumnName('views.language_id').'=:language_id', 'params' => array(':id' => $id, ':language_id' => $language_id))))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function route($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('messageSources.viewSources.routes' => array('condition' => $dbConnection->quoteColumnName('routes.id').'=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function messageSource($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('messageSources' => array('condition' => $dbConnection->quoteColumnName('messageSources.id').'=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function message($id, $language_id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('messages' => array('condition' => $dbConnection->quoteColumnName('messages.id').'=:id AND '.$dbConnection->quoteColumnName('messages.language_id').'=:language_id', 'params' => array(':id' => $id, ':language_id' => $language_id))))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function languageMessage($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('messages.language' => array('condition' => $dbConnection->quoteColumnName('language.id').'=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	public function languageMessageSource($id)
	{
		$dbConnection = $this->getDbConnection();
		$this->with(array('messageSources.sourceLanguage' => array('condition' => $dbConnection->quoteColumnName('sourceLanguage.id').'=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = $dbConnection->quoteColumnName($this->getTableAlias().'.id');
		return $this;
	}
	
	/************ END SCOPES **********/

	protected function beforeSave()
	{
		$this->setAttribute('category', trim($this->getAttribute('category')));
		return parent::beforeSave();
	}
	
	public function getSearchCriteria($mergeCriteria = array(), $operator = 'AND')
	{
		$criteria = new CDbCriteria;
		$criteria->mergeWith($mergeCriteria, $operator);
		return $criteria
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.category', $this->category, true);
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
		return strval($this->category);
	}

}