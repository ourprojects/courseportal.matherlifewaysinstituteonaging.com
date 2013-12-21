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
			),
			'LDActiveRecordConditionBehavior' => array(
				'class' => 'ext.LDActiveRecordConditionBehavior.LDActiveRecordConditionBehavior'
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
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messageSources.viewSources' => ViewSource::model()->createCondition('id', $id, 'viewSources')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id')
		));
		return $this;
	}
	
	public function view($id, $language_id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messageSources.views' => View::model()->createCondition(array('id', 'language_id'), array('id' => $id, 'language_id' => $language_id), 'views', true, true)
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id')
		));
		return $this;
	}
	
	public function route($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messageSources.viewSources.routes' => Route::model()->createCondition('id', $id, 'routes')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id')
		));
		return $this;
	}
	
	public function messageSource($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messageSources' => MessageSource::model()->createCondition('id', $id, 'messageSources')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id')
		));
		return $this;
	}
	
	public function message($id, $language_id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messages' => Message::model()->createCondition(array('id', 'language_id'), array('id' => $id, 'language_id' => $language_id), 'messages', true, true)
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id')
		));
		return $this;
	}
	
	public function languageMessage($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messages.language' => Language::model()->createCondition('id', $id, 'language')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function languageMessageSource($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messageSources.sourceLanguage' => Language::model()->createCondition('id', $id, 'sourceLanguage')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function missingTranslations($languageId = null)
	{
		$db = $this->getDbConnection();
		$condition = $languageId === null ? array('condition' => '1=1', 'params' => array()) : Language::model()->createCondition('id', $languageId, 'languages');
	
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messages' => array(
					'joinType' => 'LEFT JOIN', 
					'on' => $db->quoteColumnName('languages.id').'='.$db->quoteColumnName('messages.language_id')
				)
			),
			'condition' => $db->quoteColumnName('messages.id').' IS NULL',
			'join' => 'JOIN '.$db->quoteTableName(Language::model()->tableName()).' '.$db->quoteTableName('languages').' ON '.$condition['condition'],
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
			'params' => $condition['params'],
			'together' => true
		));
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