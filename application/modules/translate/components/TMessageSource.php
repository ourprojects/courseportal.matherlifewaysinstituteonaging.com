<?php

class TMessageSource extends CDbMessageSource
{
	
	const ID = 'modules.translate.TMessageSource';
	
	/**
	 * @var string the name of the language table. Defaults to 'translate_language'.
	 */
	public $languageTable = '{{translate_language}}';
	
	/**
	 * @var string the name of the accepted language table. Defaults to 'translate_accepted_language'.
	 */
	public $acceptedLanguageTable = '{{translate_accepted_language}}';
	
	/**
	 * @var string the name of the category table. Defaults to 'translate_category'.
	 */
	public $categoryTable = '{{translate_category}}';
	
	/**
	 * @var string the name of the message category table. Defaults to 'translate_category_message'.
	 */
	public $categoryMessageTable = '{{translate_category_message}}';
	
	/**
	 * @var string The default category to assign messages when the category supplied via the translate functions is an empty string.
	 */
	public $messageCategory = self::ID;
	
	/**
	 * @var boolean If true each call to the translate method will be profiled.
	 */
	public $enableProfiling = false;
	
	/**
	 * @var array Cached message translation in the format 'message' => 'translation'
	 */
	private $_messages = array();
	
	/**
	 * @var boolean Flag marking whether the data in the cache is stale.
	 */
	private $_cacheInvalidated = true;

	protected function getCache()
	{
		return $this->cachingDuration > 0 && $this->cacheID !== false ? Yii::app()->getComponent($this->cacheID) : null;
	}
	
	protected function getCacheKey($category, $language)
	{
		return self::ID.'.messages.'.$category.'.'.$language;
	}
	
	/**
	 * Loads the message translation for the specified language and category.
	 * @param string $category the message category
	 * @param string $language the target language
	 * @return array the loaded messages
	 */
	protected function loadMessages($category, $language)
	{
		if(($cache = $this->getCache()) !== null)
		{
			$key = $this->getCacheKey($category, $language);
			$messages = $cache->get($key);
			if($messages === false)
			{
				$messages = $this->loadMessagesFromDb($category, $language);
				$cache->set($key, $messages, $this->cachingDuration);
			}
			$this->_cacheInvalidated = false;
		}
		else
		{
			$messages = $this->loadMessagesFromDb($category, $language);
		}

		return $messages;
	}
	
	/**
	 * Loads the messages from database.
	 * You may override this method to customize the message storage in the database.
	 * @param string $category the message category
	 * @param string $language the target language
	 * @return array the messages loaded from database
	 */
	protected function loadMessagesFromDb($category, $language)
	{
		$cmd = $this->getDbConnection()->createCommand()
					->select(array('smt.message AS message', 'tmt.translation AS translation'))
					->from($this->sourceMessageTable.' smt')
					->join($this->categoryMessageTable.' cmt', 'smt.id=cmt.message_id')
					->join($this->categoryTable.' ct', array('and', 'cmt.category_id=ct.id', 'ct.category=:category'), array(':category' => $category))
					->join($this->languageTable.' lt', 'lt.code=:language', array(':language' => $language))
					->join($this->translatedMessageTable.' tmt', array('and', 'smt.id=tmt.id', 'tmt.language_id=lt.id'));

		$messages = array();
		foreach($cmd->queryAll() as $row)
			$messages[$row['message']] = $row['translation'];
	
		return $messages;
	}
	
	public function addSourceMessage($message)
	{
		return $this->getDbConnection()->createCommand()->insert($this->sourceMessageTable, array('message' => $message)) > 0
				? $this->getDbConnection()->getLastInsertID($this->sourceMessageTable)
				: null;
	}
	
	public function addCategory($category)
	{
		return $this->getDbConnection()->createCommand()->insert($this->categoryTable, array('category' => $category)) > 0
				? $this->getDbConnection()->getLastInsertID($this->categoryTable)
				: null;
	}
	
	public function addLanguage($language)
	{
		return $this->getDbConnection()->createCommand()->insert($this->languageTable, array('code' => $language)) > 0 
				? $this->getDbConnection()->getLastInsertID($this->languageTable)
				: null;
	}
	
	public function addMessageToCategory($messageId, $category, $createCategoryIfNotExists = false)
	{
		return (($categoryId = $this->getCategoryId($category, $createCategoryIfNotExists)) !== false 
					&& $this->getDbConnection()->createCommand()->insert($this->categoryMessageTable, array('category_id' => $categoryId , 'message_id' => $messageId)) > 0)
				? $categoryId
				: null; 
	}
	
	public function addTranslation($sourceMessageId, $language, $translation, $createLanguageIfNotExists = false)
	{
		return (($languageId = $this->getLanguageId($language, $createLanguageIfNotExists)) !== false
					&& $this->getDbConnection()->createCommand()->insert($this->translatedMessageTable, array('id' => $sourceMessageId, 'language_id' => $languageId, 'translation' => $translation)) > 0)
				? $languageId
				: null;
	}
	
	public function getAcceptedLanguages()
	{
		return $this->getDbConnection()->createCommand()
					->select('lt.code')
					->from($this->languageTable.' lt')
					->join($this->acceptedLanguageTable.' alt', 'lt.id=alt.id')
				->queryAll();
	}
	
	public function getSourceMessageId($message, $createIfNotExists = false)
	{
		$messageId = $this->getDbConnection()->createCommand()
						->select('smt.id AS id')
						->from($this->sourceMessageTable.' smt')
						->where('smt.message=:message', array(':message' => $message))
				->queryScalar();
		
		return $messageId === false && $createIfNotExists && ($messageId = $this->addSourceMessage($message)) === null ? false : $messageId;
	}
	
	public function getCategoryId($category, $createIfNotExists = false)
	{
		$categoryId = $this->getDbConnection()->createCommand()
						->select('id AS id')
						->from($this->categoryTable)
						->where('category=:category', array(':category' => $category))
				->queryScalar();

		return $categoryId === false && $createIfNotExists && ($categoryId = $this->addCategory($category)) === null ? false : $categoryId;
	}
	
	public function getLanguageId($language, $createIfNotExists = false)
	{
		$languageId = $this->getDbConnection()->createCommand()
						->select('lt.id AS id')
						->from($this->languageTable.' lt')
						->where('lt.code=:language', array(':language' => $language))
				->queryScalar();
		
		return $languageId === false && $createIfNotExists && ($languageId = $this->addLanguage($language)) === null ? false : $languageId;
	}
	
	public function getTranslation($category, $message, $language, $createSourceMessageIfNotExists = false)
	{
		$translation = $this->getDbConnection()->createCommand()
					->select(array('MIN(ct.id) AS category_id', 'MIN(smt.id) AS id', 'lt.id AS language_id', 'tmt.translation AS translation'))
					->from($this->sourceMessageTable.' smt')
					->leftJoin($this->categoryMessageTable.' cmt', 'smt.id=cmt.message_id')
					->leftJoin($this->categoryTable.' ct', array('and', 'cmt.category_id=ct.id', 'ct.category=:category'), array(':category' => $category))
					->leftJoin($this->languageTable.' lt', 'lt.code=:language', array(':language' => $language))
					->leftJoin($this->translatedMessageTable.' tmt', array('and', 'smt.id=tmt.id', 'tmt.language_id=lt.id'))
					->where('smt.message=:message', array(':message' => $message))
			->queryRow();
		
		if($createSourceMessageIfNotExists)
		{
			if($translation['id'] === null)
			{
				if(($translation['id'] = $this->addSourceMessage($message)) !== null)
				{
					$translation['category_id'] = $this->addMessageToCategory($translation['id'], $category, true);
					$translation['language_id'] = $this->getLanguageId($language, true);
				}
			}
			else 
			{
				if($translation['category_id'] === null)
				{
					$translation['category_id'] = $this->addMessageToCategory($translation['id'], $category, true);
				}
				
				if($translation['language_id'] === null)
				{
					$translation['language_id'] = $this->addLanguage($language);
				}
			}
		}
		
		return $translation;
	}

	/**
	 * Translates a message to the specified language.
	 *
	 * Note, if the specified language is the same as
	 * the {@link getLanguage source message language}, messages will NOT be translated.
	 *
	 * If the message is not found in the translations, an {@link onMissingTranslation}
	 * event will be raised. Handlers can mark this message or do some
	 * default handling. The {@link CMissingTranslationEvent::message}
	 * property of the event parameter will be returned.
	 *
	 * @param string $category the message category
	 * @param string $message the message to be translated
	 * @param string $language the target language. If null (default), the {@link CApplication::getLanguage application language} will be used.
	 * @return string the translated message (or the original message if translation is not needed)
	 */
	public function translate($category, $message, $language = null)
	{
		if($this->enableProfiling)
			Yii::beginProfile(self::ID.'.translate()', self::ID);
		
		if($category === null)
			$category = $this->messageCategory;
		
		$translation = parent::translate($category, $message, $language);
		
		if($this->enableProfiling)
			Yii::endProfile(self::ID.'.translate()', self::ID);
		
		return $translation;
	}

	/**
	 * Translates the specified message.
	 * If the message is not found, an {@link onMissingTranslation}
	 * event will be raised.
	 * Please note that the category, message, and language parameters will be trimmed using {@link trim()}.
	 * @param string $category the category that the message belongs to
	 * @param string $message the message to be translated
	 * @param string $language the target language
	 * @return string the translated message
	 */
	protected function translateMessage($category, $message, $language)
	{
		$category = trim($category);
		$language = trim($language);
		$message = trim($message);
		
		$key = $category.'.'.$language;
		
		if(!isset($this->_messages[$key]))
			$this->_messages[$key] = $this->loadMessages($category, $language);
		
		if(isset($this->_messages[$key][$message]))
			return $this->_messages[$key][$message];
		
		if($this->hasEventHandler('onMissingTranslation'))
		{
			$event = new CMissingTranslationEvent($this, $category, $message, $language);
			$this->onMissingTranslation($event);
			if(!$this->_cacheInvalidated && ($cache = $this->getCache()) !== null)
			{
				$cache->delete($this->getCacheKey($category, $language));
				$this->_cacheInvalidated = true;
			}
			return $this->_messages[$key][$message] = $event->message;
		}
		
		return $message;
	}

}