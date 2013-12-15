<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class Message extends CActiveRecord
{

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
	
	public function init()
	{
		if($this->getScenario() !== 'search')
		{
			$this->last_modified = time();
		}
	}

	public function tableName()
	{
		return TranslateModule::translator()->getMessageSourceComponent()->translatedMessageTable;
	}

	public function behaviors()
	{
		return array(
			'ERememberFiltersBehavior' => array(
				'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
			),
		);
	}

	public function rules()
	{
		return array(
			array('id, language_id, translation', 'required', 'except' => 'search'),
			array('last_modified', 'default', 'value' => time(), 'except' => 'search'),
			array('id, language_id, last_modified', 'numerical', 'integerOnly' => true),
			array('language_id', 'exist', 'attributeName' => 'id', 'className' => 'Language', 'except' => 'search'),
			array('id', 'exist', 'attributeName' => 'id', 'className' => 'MessageSource', 'except' => 'search'),

			array('id, language_id, translation, last_modified', 'safe', 'on' => 'search'),
		);
	}

	public function relations()
	{
		return array(
			'source' => array(self::BELONGS_TO, 'MessageSource', 'id'),
			'language' => array(self::BELONGS_TO, 'Language', 'language_id'),
			'acceptedLanguage' => array(self::BELONGS_TO, 'AcceptedLanguage', 'language_id'),
			'viewMessages' => array(self::HAS_MANY, 'ViewMessage', 'message_id'),
			'viewSources' => array(self::HAS_MANY, 'ViewSource', array('view_id' => 'id'), 'through' => 'source.viewMessages'),
			'messageCategories' => array(self::HAS_MANY, 'CategoryMessage', 'message_id'),
			'categories' => array(self::HAS_MANY, 'Category', array('category_id' => 'id'), 'through' => 'messageCategories')
		);
	}
	
	public function getLastModifiedDate()
	{
		return isset($this->last_modified) ? date('Y-m-d H:i:s', $this->last_modified) : null;
	}
	
	public function setLastModifiedDate($date)
	{
		$last_modified = strtotime($date);
		$this->last_modified = ($last_modified === false || $last_modified === -1 ? null : $last_modified);
	}

	public function attributeLabels()
	{
		return array(
			// Attributes
			'id' => TranslateModule::t('ID'),
			'language_id' => TranslateModule::t('Language'),
			'translation' => TranslateModule::t('Translation'),
			'last_modified' => TranslateModule::t('Last Modified'),
			// Relations
			'source' => TranslateModule::t('Source Message'),
			'language' => TranslateModule::t('Language'),
			'acceptedLanguage' => TranslateModule::t('Accepted Language'),
			'categories' => TranslateModule::t('Categories'),
			// Virtual Attributes
			'lastModifiedDate' => TranslateModule::t('Date Last Modified')
		);
	}

	public function scopes()
	{
		return array(
			'isAcceptedLanguage' => array('with' => array('acceptedLanguage' => array('joinType' => 'INNER JOIN'))),
			'isOtherLanguage' => array('with' => array('acceptedLanguage' => array('joinType' => 'LEFT JOIN')), 'condition' => 'acceptedLanguage.id IS NULL')
		);
	}
	
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if(!$this->getIsNewRecord())
			{
				$languageCode = $this->language->code;
				$translator = TranslateModule::translator();
				$messageSource = $translator->getMessageSourceComponent();
				if($messageSource->getIsCachingEnabled())
				{
					foreach($this->categories as $category)
					{
						$messageSource->invalidateCache($category, $languageCode);
					}
				}
				$viewSource = $translator->getViewSourceComponent();
				if($viewSource->getIsCachingEnabled())
				{
					$criteria = new CDbCriteria();
					$criteria->addInCondition('view_id', CHtml::listData(View::model()->with('messages')->findAll('messages.language_id=:language_id AND messages.id=:message_id', array(':language_id' => $this->language_id, ':message_id' => $this->id)), 'id', 'id'));
					foreach(Route::model()->with(array('routeViews' => $criteria))->findAll() as $route)
					{
						$viewSource->invalidateCache($route->route, $languageCode);
					}
				}
			}
			$this->last_modified = time();
			return true;
		}
		return false;
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