<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class Language extends CActiveRecord
{

	private $_name;

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return TranslateModule::translator()->getMessageSourceComponent()->languageTable;
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
			'sourceMessages' => array(self::HAS_MANY, 'MessageSource', 'language_id'),
			'sourceMessageCount' => array(self::STAT, 'MessageSource', 'language_id'),
			'views' => array(self::HAS_MANY, 'View', 'language_id', 'joinType' => 'INNER JOIN'),
			'viewCount' => array(self::STAT, 'View', 'language_id'),
			'viewSources' => array(self::MANY_MANY, 'ViewSource', View::model()->tableName().'(language_id, id)'),
			'viewSourceCount' => array(self::STAT, 'ViewSource', View::model()->tableName().'(language_id, id)'),
			'acceptedLanguage' => array(self::HAS_ONE, 'AcceptedLanguage', 'id'),
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
	
	/************ BEGIN SCOPES **********/

	public function scopes()
	{
		return array(
			'accepted' => array('with' => array('acceptedLanguage' => array('joinType' => 'INNER JOIN'))),
			'notAccepted' => array('with' => array('acceptedLanguage' => array('joinType' => 'LEFT JOIN')), 'condition' => $this->getDbConnection()->quoteColumnName('acceptedLanguage.id').' IS NULL')
		);
	}
	
	public function missingTranslationsCategory($categoryId = null)
	{
		$db = $this->getDbConnection();
		$condition = $categoryId === null ? array('condition' => '1=1', 'params' => array()) : CategoryMessage::model()->createCondition('category_id', $categoryId, 'categories_categories');

		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messages' => array(
					'joinType' => 'LEFT JOIN', 
					'on' => $db->quoteColumnName('messageSources.id').'='.$db->quoteColumnName('messages.id'),
				)
			),
			'condition' => $db->quoteColumnName($this->getTableAlias().'.id').'!='.$db->quoteColumnName('messageSources.language_id').' AND '.$db->quoteColumnName('messages.id').' IS NULL',
			'join' => 
				'CROSS JOIN '.$db->quoteTableName(MessageSource::model()->tableName()).' '.$db->quoteTableName('messageSources').
				'INNER JOIN '.$db->quoteTableName(CategoryMessage::model()->tableName()).' '.$db->quoteTableName('categories_categories').' ON ('.$db->quoteColumnName('messageSources.id').'='.$db->quoteColumnName('categories_categories.message_id').') AND ('.$condition['condition'].')'
			,
			'params' => $condition['params'],
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
			'together' => true
		));
		return $this;
	}
	
	public function missingTranslationsRoute($routeId = null)
	{
		$db = $this->getDbConnection();
		$condition = $routeId === null ? array('condition' => '1=1', 'params' => array()) : RouteView::model()->createCondition('route_id', $routeId, 'routes_routes');

		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'views' => array(
					'joinType' => 'LEFT JOIN', 
					'on' => $db->quoteColumnName('sourceViews.id').'='.$db->quoteColumnName('views.id'),
				)
			),
			'condition' => $db->quoteColumnName('views.id').' IS NULL',
			'join' => 
				'CROSS JOIN '.$db->quoteTableName(ViewSource::model()->tableName()).' '.$db->quoteTableName('sourceViews').
				'INNER JOIN '.$db->quoteTableName(RouteView::model()->tableName()).' '.$db->quoteTableName('routes_routes').' ON ('.$db->quoteColumnName('sourceViews.id').'='.$db->quoteColumnName('routes_routes.view_id').') AND ('.$condition['condition'].')'
			,
			'params' => $condition['params'],
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
			'together' => true
		));
		return $this;
	}

	public function missingTranslationsMessageSource($messageId = null)
	{
		$db = $this->getDbConnection();
		$condition = $messageId === null ? array('condition' => '1=1', 'params' => array()) : MessageSource::model()->createCondition('id', $messageId, 'messageSources');
		
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messages' => array(
					'joinType' => 'LEFT JOIN', 
					'on' => $db->quoteColumnName('messageSources.id').'='.$db->quoteColumnName('messages.id')
				)
			),
			'condition' => $db->quoteColumnName($this->getTableAlias().'.id').'!='.$db->quoteColumnName('messageSources.language_id').' AND '.$db->quoteColumnName('messages.id').' IS NULL',
			'join' => 'JOIN '.$db->quoteTableName(MessageSource::model()->tableName()).' '.$db->quoteTableName('messageSources').' ON '.$condition['condition'],
			'params' => $condition['params'],
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
			'together' => true
		));
		return $this;
	}

	public function missingTranslationsViewSource($viewId = null)
	{
		$db = $this->getDbConnection();
		$condition = $viewId === null ? array('condition' => '1=1', 'params' => array()) : ViewSource::model()->createCondition('id', $viewId, 'viewSources');

		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'views' => array(
					'joinType' => 'LEFT JOIN', 
					'on' => $db->quoteColumnName('viewSources.id').'='.$db->quoteColumnName('views.id')
				)
			),
			'condition' => $db->quoteColumnName('views.id').' IS NULL',
			'join' => 'JOIN '.$db->quoteTableName(ViewSource::model()->tableName()).' '.$db->quoteTableName('viewSources').' ON '.$condition['condition'],
			'params' => $condition['params'],
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
			'together' => true
		));
		return $this;
	}
	
	public function viewSource($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'viewSources' => ViewSource::model()->createCondition('id', $id, 'viewSources')
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
				'views.sourceView.routes' => Route::model()->createCondition('id', $id, 'routes')
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
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function categoryMessage($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'messages.categories' => Category::model()->createCondition('id', $id, 'categories'),
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	public function categoryMessageSource($id)
	{
		$db = $this->getDbConnection();
		$this->getDbCriteria()->mergeWith(array(
			'with' => array(
				'sourceMessages.categories' => Category::model()->createCondition('id', $id, 'categories')
			),
			'together' => true,
			'group' => $db->quoteColumnName($this->getTableAlias().'.id'),
		));
		return $this;
	}
	
	/************ END SCOPES **********/
	
	public function getName()
	{
		if(!isset($this->_name))
		{
			if(isset($this->code))
			{
				$this->_name = TranslateModule::translator()->getLanguageDisplayName($this->code);
				if($this->_name === false)
				{
					$this->_name = strval($this->code);
				}
			}
			else
			{
				return '';
			}
		}
		return $this->_name;
	}

	public function getIsMissingTranslations($messageId = null)
	{
		return $this->missingTranslationsMessageSource($messageId)->exists();
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

	protected function beforeSave()
	{
		$this->setAttribute('code', trim($this->getAttribute('code')));
		return parent::beforeSave();
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
	
	public function getSearchCriteria($mergeCriteria = array(), $operator = 'AND')
	{
		$criteria = new CDbCriteria;
		$criteria->mergeWith($mergeCriteria, $operator);
		return $criteria
			->compare($this->getTableAlias(false, false).'.id', $this->id)
			->compare($this->getTableAlias(false, false).'.code', $this->code, true);
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
		return $this->getName();
	}

}