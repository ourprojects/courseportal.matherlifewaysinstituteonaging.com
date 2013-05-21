<?php

class TMessageSource extends CDbMessageSource
{
	
	private static $_ID;
	
	public $acceptedLanguageTable;

	public $useLocaleSpecificTranslations;
	
	private $_translator;

	private $_language;
	
	private $_messages = array();
	
	private $_cacheInvalidated = true;
	
	public static function getID()
	{
		if(!isset(self::$_ID))
			self::$_ID = MPTranslate::ID . '.' . __CLASS__;
		return self::$_ID;
	}
	
	public function getTranslator()
	{
		if(!isset($this->_translator))
			$this->_translator = TranslateModule::translator();
		return $this->_translator;
	}
	
	public function getLanguage()
	{
		return $this->useLocaleSpecificTranslations ? parent::getLanguage() : $this->getTranslator()->getLanguageID(parent::getLanguage());
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
	
	protected function getCache()
	{
		return $this->cachingDuration > 0 && $this->cacheID !== false ? Yii::app()->getComponent($this->cacheID) : null;
	}
	
	protected function getCacheKey($category, $language)
	{
		return self::getID().'.messages.'.$category.'.'.$language;
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
		if($language === null)
			$language = $this->useLocaleSpecificTranslations ? Yii::app()->getLanguage() : $this->getTranslator()->getLanguageID(Yii::app()->getLanguage());
		
		if($this->forceTranslation || $language !== $this->getLanguage())
			return $this->translateMessage($category, $message, $language);
		else
			return $message;
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
		$key = $language.'.'.$category;
		
		if(!isset($this->_messages[$key]))
			$this->_messages[$key] = $this->loadMessages($category, $language);
		
		if(isset($this->_messages[$key][$message]))
		{
			return $this->_messages[$key][$message];
		}
		elseif($this->hasEventHandler('onMissingTranslation'))
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