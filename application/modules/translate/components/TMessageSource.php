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
		$cmd = $this->getDbConnection()->createCommand()
					->select(array('smt.message AS message', 'tmt.translation AS translation'))
					->from($this->sourceMessageTable.' smt')
					->join($this->categoryMessageTable.' cmt', 'smt.id=cmt.message_id')
					->join($this->categoryTable.' ct', array('and', 'cmt.category_id=ct.id', 'ct.category=:category'), array(':category' => $category))
					->join($this->translatedMessageTable.' tmt', array('and', 'smt.id=tmt.id', 'tmt.language=:language', array(':language' => $language)));
		
		$messages = array();
		foreach($cmd->queryAll() as $row)
			$messages[$row['message']] = $row['translation'];
	
		return $messages;
	}
	
	public function getAcceptedLanguages()
	{
		return $this->getDbConnection()->createCommand()->select('*')->from($this->acceptedLanguageTable)->queryAll();
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
		if($this->getDbConnection()->createCommand()->insert($this->sourceMessageTable, array('message' => $message)) > 0)
			return $this->getDbConnection()->getLastInsertID($this->sourceMessageTable);
		return null;
	}
	
	public function addCategory($category)
	{
		if($this->getDbConnection()->createCommand()->insert($this->categoryTable, array('category' => $category)) > 0)
			return $this->getDbConnection()->getLastInsertID($this->categoryTable);
		return null;
	}
	
	public function addMessageCategory($categoryId, $messageId)
	{
		$args = array('category_id' => $categoryId, 'message_id' => $messageId);
		if($this->getDbConnection()->createCommand()->insert($this->categoryMessageTable, $args) > 0)
			return $args;
		return null;
	}
	
	public function addTranslation($sourceMessageId, $language, $translation)
	{
		$args = array('id' => $sourceMessageId, 'language' => $language, 'translation' => $translation);
		if($this->getDbConnection()->createCommand()->insert($this->translatedMessageTable, $args) > 0)
			return $args;
		return null;
	}
	
	public function getMessageId($category, $message)
	{
		return $this->getDbConnection()->createCommand()
						->select('smt.id AS id')
						->from($this->sourceMessageTable.' smt')
						->join($this->categoryMessageTable.' cmt', 'smt.id=cmt.message_id')
						->join($this->categoryTable.' ct', array('and', 'cmt.category_id=ct.id', 'ct.category=:category'), array(':category' => $category))
						->where('smt.message=:message', array(':message' => $message))
				->queryScalar();
	}
	
	public function getCategoryAndMessageId($category, $message)
	{
		return $this->getDbConnection()->createCommand()
						->select(array('MIN(ct.id) AS category_id', 'MIN(smt.id) AS message_id'))
						->from($this->sourceMessageTable.' smt')
						->leftJoin($this->categoryMessageTable.' cmt', 'smt.id=cmt.message_id')
						->leftJoin($this->categoryTable.' ct', array('and', 'cmt.category_id=ct.id', 'ct.category=:category', array(':category' => $category)))
						->where('smt.message=:message', array(':message' => $message))
				->queryRow();
	}
	
	public function getCategoryId($category)
	{
		return $this->getDbConnection()->createCommand()
						->select('id AS id')
						->from($this->categoryTable)
						->where('category=:category', array(':category' => $category))
				->queryScalar();
	}
	
	public function getTranslationFromDb($category, $message, $language)
	{
		return $this->getDbConnection()->createCommand()
					->select(array('MIN(ct.id) AS category_id', 'MIN(smt.id) AS id', 'tmt.translation AS translation'))
					->from($this->sourceMessageTable.' smt')
					->leftJoin($this->categoryMessageTable.' cmt', 'smt.id=cmt.message_id')
					->leftJoin($this->categoryTable.' ct', array('and', 'cmt.category_id=ct.id', 'ct.category=:category'), array(':category' => $category))
					->leftJoin($this->translatedMessageTable.' tmt', array('and', 'smt.id=tmt.id', 'tmt.language=:language'), array(':language' => $language))
					->where('smt.message=:message', array(':message' => $message))
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