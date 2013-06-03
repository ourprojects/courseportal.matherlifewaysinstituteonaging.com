<?php

class TMessageSource extends CDbMessageSource
{
	
	const ID = 'modules.translate.TMessageSource';
	
	public $acceptedLanguageTable = '{{translate_accepted_language}}';

	public $useLocaleSpecificTranslations = false;
	
	/**
	 * @var string $messageCategory
	 * The default category used to identify messages.
	 */
	public $messageCategory = self::ID;
	
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
	
	public function getLanguage()
	{
		return $this->useLocaleSpecificTranslations ? parent::getLanguage() : TranslateModule::translator()->getLanguageID(parent::getLanguage());
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
				"SELECT t1.message message, t2.translation translation " .
				"FROM $this->sourceMessageTable t1 " .
				"JOIN $this->translatedMessageTable t2 ON (t1.id=t2.id AND t2.language=:language) ".
				"WHERE (t1.category=:category)", 
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
	
	public function addSourceMessage($category, $message)
	{
		$builder = $this->getCommandBuilder();
		if($builder->createInsertCommand($this->sourceMessageTable, array('category' => $category, 'message' => $message))->execute())
			return $builder->getLastInsertID($this->sourceMessageTable);
		return null;
	}
	
	public function addTranslation($sourceMessageId, $language, $translation)
	{
		return $this->getCommandBuilder()->createInsertCommand($this->messageTable, array('id' => $sourceMessageId, 'language' => $language, 'translation' => $translation))->execute();
	}
	
	public function getMessageId($category, $message)
	{
		if($category === null)
			$category = $this->messageCategory;
		
		return $this->getCommandBuilder()->createSqlCommand(
				"SELECT id FROM $this->sourceMessageTable WHERE (category=:category AND message=:message)", 
				array(':category' => $category, ':message' => $message))
			->queryScalar();
	}
	
	public function getTranslationFromDb($category, $message, $language = null)
	{
		if($category === null)
			$category = $this->messageCategory;
		
		if($language === null)
			$language = Yii::app()->getLanguage();
		
		if($this->useLocaleSpecificTranslations)
			$language = TranslateModule::translator()->getLanguageID($language);
		
		return $this->getCommandBuilder()->createSqlCommand(
				"SELECT MIN(t1.id) id, t2.translation translation " .
				"FROM $this->sourceMessageTable t1 " .
				"LEFT JOIN $this->translatedMessageTable t2 ON (t1.id=t2.id AND t2.language=:language) " .
				"WHERE (t1.category=:category AND t1.message=:message)",
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
		Yii::beginProfile(self::ID.'.translate');
		if($category === null)
			$category = $this->messageCategory;
		
		if($language === null)
			$language = Yii::app()->getLanguage();
		
		if($this->useLocaleSpecificTranslations)
			$language = TranslateModule::translator()->getLanguageID($language);
		
		if($this->forceTranslation || $language !== $this->getLanguage())
			$translation = $this->translateMessage($category, $message, $language);
		else
			$translation = $message;
		Yii::endProfile(self::ID.'.translate');
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