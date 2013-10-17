<?php

class TDbMessageSource extends CDbMessageSource implements ITMessageSource
{
	
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
	public $messageCategory = TranslateModule::ID;
	
	/**
	 * @var boolean If true each call to the translate method will be profiled.
	 */
	public $enableProfiling = false;
	
	/**
	 * @var array Cached message translation in the format 'message' => 'translation'
	 */
	private $_messages = array();
	
	/**
	 * @var integer The database ID of the language of the source messages
	 */
	private $_languageId;
	
	/**
	 * @var boolean Flag marking whether the data in the cache is stale.
	 */
	private $_cacheInvalidated = true;
	
	public function setLanguage($language)
	{
		parent::setLanguage($language);
		$this->_languageId = null;
	}

	protected function getCache()
	{
		return $this->cachingDuration > 0 && $this->cacheID !== false ? Yii::app()->getComponent($this->cacheID) : null;
	}
	
	protected function getCacheKey($category, $language)
	{
		return TranslateModule::ID.'.'.$this->getLanguage().'.messages.'.$category.'.'.$language;
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
		$db = $this->getDbConnection();
		$cmd = $db->createCommand()
					->select(array('smt.message AS message', 'tmt.translation AS translation'))
					->from($this->sourceMessageTable.' smt')
					->join($this->categoryMessageTable.' cmt', $db->quoteColumnName('smt.id').'='.$db->quoteColumnName('cmt.message_id'))
					->join($this->categoryTable.' ct', array('and', $db->quoteColumnName('cmt.category_id').'='.$db->quoteColumnName('ct.id'), $db->quoteColumnName('ct.category').'=:category'), array(':category' => $category))
					->join($this->languageTable.' lt', $db->quoteColumnName('lt.code').'=:language', array(':language' => $language))
					->join($this->translatedMessageTable.' tmt', array('and', $db->quoteColumnName('smt.id').'='.$db->quoteColumnName('tmt.id'), $db->quoteColumnName('tmt.language_id').'='.$db->quoteColumnName('lt.id')))
					->where($db->quoteColumnName('smt.language_id').'=:source_language_id', array(':source_language_id' => $this->getSourceLanguageId()));

		$messages = array();
		foreach($cmd->queryAll() as $row)
		{
			$messages[$row['message']] = $row['translation'];
		}
	
		return $messages;
	}
	
	/**
	 * Adds a source message to the source message table
	 * 
	 * @param string $message The source message to add to the source message table
	 * @return array The ID of the source message that was inserted or null if the source message was not added
	 */
	public function addSourceMessage($message, $createLanguageIfNotExists = false)
	{
		if($languageId !== false && $this->getDbConnection()->createCommand()->insert($this->sourceMessageTable, array('message' => $message, 'language_id' => $this->getSourceLanguageId())) > 0)
		{
			return $this->getDbConnection()->getLastInsertID($this->sourceMessageTable);
		}
		return null;
	}
	
	/**
	 * Adds a category to the category table
	 *
	 * @param string $message The category to add to the category table
	 * @return string The ID of the category that was inserted or null if the category was not added
	 */
	public function addCategory($category)
	{
		if($this->getDbConnection()->createCommand()->insert($this->categoryTable, array('category' => $category)) > 0)
		{
			return $this->getDbConnection()->getLastInsertID($this->categoryTable);
		}
		return null;
	}
	
	/**
	 * Adds a language to the language table
	 *
	 * @param string $language The language to add to the language table
	 * @return string The ID of the language that was inserted or null if the language was not added
	 */
	public function addLanguage($language)
	{
		if($this->getDbConnection()->createCommand()->insert($this->languageTable, array('code' => $language)) > 0)
		{ 
			return $this->getDbConnection()->getLastInsertID($this->languageTable);
		}
		return null;
	}
	
	/**
	 * 
	 * @param integer $messageId
	 * @param string $category
	 * @param boolean $createCategoryIfNotExists
	 * @return string The ID of the category the message was added to otherwise null if the category could not be found or the message could not be added to the category.
	 */
	public function addMessageToCategory($messageId, $category, $createCategoryIfNotExists = false)
	{
		$categoryId = $this->getCategoryId($category, $createCategoryIfNotExists);
		if($categoryId !== false && $this->getDbConnection()->createCommand()->insert($this->categoryMessageTable, array('category_id' => $categoryId , 'message_id' => $messageId)) > 0)
		{
			return $categoryId;
		}
		return null; 
	}
	
	/**
	 * 
	 * @param integer $sourceMessageId
	 * @param string $language
	 * @param string $translation
	 * @param boolean $createLanguageIfNotExists
	 * @return string The ID of the language this translation was added to otherwise null if the language could not be found or the translation could not be associated with the language and source message
	 */
	public function addTranslation($sourceMessageId, $language, $translation, $createLanguageIfNotExists = false)
	{
		$languageId = $this->getLanguageId($language, $createLanguageIfNotExists);
		if($languageId !== false && $this->getDbConnection()->createCommand()->insert($this->translatedMessageTable, array('id' => $sourceMessageId, 'language_id' => $languageId, 'translation' => $translation)) > 0)
		{
			return $languageId;
		}
		return null;
	}
	
	/**
	 * 
	 * @return array An array of accepted language codes
	 */
	public function getAcceptedLanguages()
	{
		$db = $this->getDbConnection();
		return $db->createCommand()
					->select('lt.code')
					->from($this->languageTable.' lt')
					->join($this->acceptedLanguageTable.' alt', $db->quoteColumnName('lt.id').'='.$db->quoteColumnName('alt.id'))
				->queryAll();
	}
	
	/**
	 * 
	 * @param string $message
	 * @param boolean $createIfNotExists
	 * @return array The ID of the source message followed by the ID of the source message language
	 */
	public function getSourceMessageId($message, $createIfNotExists = false)
	{
		$db = $this->getDbConnection();
		$row = $db->createCommand()
						->select('smt.id')
						->from($this->sourceMessageTable.' smt')
						->where(array('and', $db->quoteColumnName('smt.message').'=:message', $db->quoteColumnName('smt.language_id').'=:language_id'), array(':message' => $message, ':language_id' => $this->getSourceLanguageId()))
				->queryScalar();

		return $row === false && $createIfNotExists && ($row = $this->addSourceMessage($message)) === null ? false : $row;
	}
	
	/**
	 * 
	 * @param string $category
	 * @param boolean $createIfNotExists
	 * @return integer The ID of the category if it is found or if createIfNotExists is set true and the category is successfully added otherwise null.
	 */
	public function getCategoryId($category, $createIfNotExists = false)
	{
		$db = $this->getDbConnection();
		$categoryId = $db->createCommand()
						->select('id')
						->from($this->categoryTable)
						->where($db->quoteColumnName('category').'=:category', array(':category' => $category))
				->queryScalar();

		return $categoryId === false && $createIfNotExists && ($categoryId = $this->addCategory($category)) === null ? false : $categoryId;
	}
	
	/**
	 * 
	 * @param string $language
	 * @param boolean $createIfNotExists
	 * @return integer The ID of the language if it is found otherwise null.
	 */
	public function getLanguageId($language, $createIfNotExists = false)
	{
		$db = $this->getDbConnection();
		$languageId = $db->createCommand()
						->select('lt.id')
						->from($this->languageTable.' lt')
						->where($db->quoteColumnName('lt.code').'=:language', array(':language' => $language))
				->queryScalar();
		
		return $languageId === false && $createIfNotExists && ($languageId = $this->addLanguage($language)) === null ? false : $languageId;
	}
	
	/**
	 * 
	 * @param boolean $createIfNotExists
	 * @return integer The ID of the source language for this source if it is found otherwise null.
	 */
	public function getSourceLanguageId($createIfNotExists = true)
	{
		if(!isset($this->_languageId))
		{
			$languageId = $this->getLanguageId($this->getLanguage(), $createIfNotExists);
		}
		return $languageId;
	}
	
	/**
	 * 
	 * @param string $category
	 * @param string $message
	 * @param string $language
	 * @param boolean $createSourceMessageIfNotExists
	 * @return string The translation of the message or null if it does not exist.
	 */
	public function getTranslation($category, $message, $language, $createSourceMessageIfNotExists = false)
	{
		$db = $this->getDbConnection();
		$translation = $db->createCommand()
					->select(array('MIN('.$db->quoteColumnName('ct.id').') AS '.$db->quoteColumnName('category_id'), 'MIN('.$db->quoteColumnName('smt.id').') AS '.$db->quoteColumnName('id'), 'lt.id AS language_id', 'tmt.translation AS translation'))
					->from($this->sourceMessageTable.' smt')
					->leftJoin($this->categoryMessageTable.' cmt', $db->quoteColumnName('smt.id').'='.$db->quoteColumnName('cmt.message_id'))
					->leftJoin($this->categoryTable.' ct', array('and', $db->quoteColumnName('cmt.category_id').'='.$db->quoteColumnName('ct.id'), $db->quoteColumnName('ct.category').'=:category'), array(':category' => $category))
					->leftJoin($this->languageTable.' lt', $db->quoteColumnName('lt.code').'=:language', array(':language' => $language))
					->leftJoin($this->translatedMessageTable.' tmt', array('and', $db->quoteColumnName('smt.id').'='.$db->quoteColumnName('tmt.id'), $db->quoteColumnName('tmt.language_id').'='.$db->quoteColumnName('lt.id')))
					->where(array('and', $db->quoteColumnName('smt.message').'=:message', $db->quoteColumnName('smt.language_id').'=:language_id'), array(':message' => $message, ':language_id' => $this->getSourceLanguageId()))
			->queryRow();
		
		if($createSourceMessageIfNotExists)
		{
			if($translation['id'] === null)
			{
				if(($translation['id'] = $this->addSourceMessage($message, true)) !== null)
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
		{
			Yii::beginProfile(TranslateModule::ID.'.'.get_class($this).'.translate()', TranslateModule::ID);
		}
		
		if($category === null)
		{
			$category = $this->messageCategory;
		}

		$translation = parent::translate($category, $message, $language);
		
		if($this->enableProfiling)
		{
			Yii::endProfile(TranslateModule::ID.'.'.get_class($this).'.translate()', TranslateModule::ID);
		}
		
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
		
		$key = $this->getLanguage().'.'.$category.'.'.$language;
		
		if(!isset($this->_messages[$key]))
		{
			$this->_messages[$key] = $this->loadMessages($category, $language);
		}

		if(isset($this->_messages[$key][$message]))
		{
			return $this->_messages[$key][$message];
		}
		
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