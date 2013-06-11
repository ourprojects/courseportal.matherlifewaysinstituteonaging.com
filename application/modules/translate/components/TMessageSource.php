<?php

class TMessageSource extends CDbMessageSource
{
	
	const ID = 'modules.translate.TMessageSource';
	
	public $acceptedLanguageTable = '{{translate_accepted_language}}';
	
	public $categoryTable = '{{translate_category}}';
	
	public $categoryMessageTable = '{{translate_category_message}}';
	
	/**
	 * @var string $messageCategory
	 * The default category used to identify messages.
	 */
	public $messageCategory = self::ID;
	
	public $enableProfiling = false;
	
	private $_messages = array();
	
	private $_cacheInvalidated = true;
	
	/**
	 * Returns the command builder used by this AR.
	 * @return CDbCommandBuilder the command builder used by this AR
	 */
	public function getCommandBuilder()
	{
		return $this->getDbConnection()->getSchema()->getCommandBuilder();
	}

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
	 * @since 1.1.5
	 */
	protected function loadMessagesFromDb($category, $language)
	{
		$cmd = $this->getCommandBuilder()->createSqlCommand(
					"SELECT smt.message message, tmt.translation translation " .
					"FROM $this->sourceMessageTable smt " .
					"JOIN $this->categoryMessageTable cmt ON (smt.id=cmt.message_id)" .
					"JOIN $this->categoryTable ct ON (cmt.category_id=ct.id AND ct.category=:category)" .
					"JOIN $this->translatedMessageTable tmt ON (smt.id=tmt.id AND tmt.language=:language) ", 
				array(':category' => $category, ':language' => $language));
		
		$messages = array();
		foreach($cmd->queryAll() as $row)
			$messages[$row['message']] = $row['translation'];
	
		return $messages;
	}
	
	public function getAcceptedLanguages()
	{
		return $this->getCommandBuilder()->createSqlCommand("SELECT * FROM $this->acceptedLanguageTable")->queryAll();
	}
	
	public function addMessageToCategory($category, $messageId)
	{
		$categoryId = $this->getCategoryId($category);
			
		if($categoryId === false)
		{
			$categoryId = $this->addCategory($category);
	
			if($categoryId === null)
			{
				throw new CDbException("The category '$category' was not found and could not be added to the database.");
			}
		}
			
		if($this->addMessageCategory($categoryId, $messageId) === null)
		{
			throw new CDbException("The message with id '$messageId' could not be associated with category id '$categoryId'.");
		}
	
		return $categoryId;
	}
	
	public function addSourceMessage($message)
	{
		$builder = $this->getCommandBuilder();
		if($builder->createInsertCommand($this->sourceMessageTable, array('message' => $message))->execute())
			return $builder->getLastInsertID($this->sourceMessageTable);
		return null;
	}
	
	public function addCategory($category)
	{
		$builder = $this->getCommandBuilder();
		if($builder->createInsertCommand($this->categoryTable, array('category' => $category))->execute())
			return $builder->getLastInsertID($this->categoryTable);
		return null;
	}
	
	public function addMessageCategory($categoryId, $messageId)
	{
		$args = array('category_id' => $categoryId, 'message_id' => $messageId);
		if($this->getCommandBuilder()->createInsertCommand($this->categoryMessageTable, $args)->execute() > 0)
			return $args;
		return null;
	}
	
	public function addTranslation($sourceMessageId, $language, $translation)
	{
		$args = array('id' => $sourceMessageId, 'language' => $language, 'translation' => $translation);
		if($this->getCommandBuilder()->createInsertCommand($this->translatedMessageTable, $args)->execute() > 0)
			return $args;
		return null;
	}
	
	public function getMessageId($category, $message)
	{
		return $this->getCommandBuilder()->createSqlCommand(
						"SELECT smt.id " .
						"FROM $this->sourceMessageTable smt " .
						"JOIN $this->categoryMessageTable cmt ON (smt.id=cmt.message_id) " .
						"JOIN $this->categoryTable ct ON (cmt.category_id=ct.id AND ct.category=:category) " .
						"WHERE (smt.message=:message)",
					array(':category' => $category, ':message' => $message))
				->queryScalar();
	}
	
	public function getCategoryAndMessageId($category, $message)
	{
		return $this->getCommandBuilder()->createSqlCommand(
						"SELECT MIN(ct.id) category_id, MIN(smt.id) message_id " .
						"FROM $this->sourceMessageTable smt " .
						"LEFT JOIN $this->categoryMessageTable cmt ON (smt.id=cmt.message_id) " .
						"LEFT JOIN $this->categoryTable ct ON (cmt.category_id=ct.id AND ct.category=:category) " .
						"WHERE (smt.message=:message)",
					array(':category' => $category, ':message' => $message))
				->queryRow();
	}
	
	public function getCategoryId($category)
	{
		return $this->getCommandBuilder()->createSqlCommand(
						"SELECT id " .
						"FROM $this->categoryTable " .
						"WHERE (category=:category)",
					array(':category' => $category))
				->queryScalar();
	}
	
	public function getTranslationFromDb($category, $message, $language)
	{
		return $this->getCommandBuilder()->createSqlCommand(
					"SELECT MIN(ct.id) category_id, MIN(smt.id) id, tmt.translation translation " .
					"FROM $this->sourceMessageTable smt " .
					"LEFT JOIN $this->categoryMessageTable cmt ON (smt.id=cmt.message_id) " .
					"LEFT JOIN $this->categoryTable ct ON (cmt.category_id=ct.id AND ct.category=:category) " .
					"LEFT JOIN $this->translatedMessageTable tmt ON (smt.id=tmt.id AND tmt.language=:language) " .
					"WHERE (smt.message=:message)",
				array(':category' => $category, ':message' => $message, ':language' => $language))
			->queryRow();
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
	 * @param string $category the category that the message belongs to
	 * @param string $message the message to be translated
	 * @param string $language the target language
	 * @return string the translated message
	 */
	protected function translateMessage($category, $message, $language)
	{
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