<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class TTranslator extends CApplicationComponent
{

	/**
	 * The maximum time in seconds to wait for a Google translate API query to complete
	 *
	 * @name TTranslator::GOOGLE_QUERY_TIME_LIMIT
	 * @type integer
	 * @const integer
	 */
	const GOOGLE_QUERY_TIME_LIMIT = 30;

	/**
	 * The maximum number of characters to use for a Google translate API query.
	 *
	 * @name TTranslator::GOOGLE_TRANSLATE_MAX_CHARS
	 * @type integer
	 * @const integer
	 */
	const GOOGLE_TRANSLATE_MAX_CHARS = 5000;

	/**
	 * The URL to use for querying the Google translate API.
	 *
	 * @name TTranslator::GOOGLE_TRANSLATE_URL
	 * @type string
	 * @const string
	 */
	const GOOGLE_TRANSLATE_URL = 'https://www.googleapis.com/language/translate/v2';

	/**
	 * @var array $dialogOptions options of the dialog
	 */
	public $dialogOptions = array(
		'autoOpen' => false,
		'modal' => true,
		'width' => 'auto',
		'height' => 'auto',
	);

	/**
	 * @var string $googleApiKey your google translate api key
	 * set this if you wish to use Google's translate service to translate the messages
	 * if empty it will not use the Google's translate API service
	*/
	public $googleApiKey = null;

	/**
	 * @var boolean wheter to auto translate the missing messages found on the page
	 * needs google api key to be set
	 */
	public $autoTranslate = false;

	public $managementAccessRules = array();

	public $managementActionFilters = array();

	/**
	 * @var string The name of the variable to use for saving and retrieving language settings for a client.
	*/
	public $languageVarName = 'language';

	/**
	 * @var integer time in seconds to store language setting in cookie. Defaults to 63072000 seconds (2 Years).
	 */
	public $cookieExpire = 63072000;

	/**
	 * @var bool Whether to define a global translate function called 't' to simplify translating messages.
	 */
	public $defineGlobalTranslateFunction = true;

	/**
	 * @var bool Whether to use database transactions when updating the database.
	 */
	public $useTransaction = true;

	/**
	 * @var bool Use generic locales. Current language and source language will be stripped to the language portion of their respective IDs.
	 */
	public $genericLocale = true;

	/**
	 * @var bool require the language of a request to be one of the accepted languages configured for the translate component.
	 */
	public $forceAcceptedLanguage = true;

	/**
	 * @var integer The number of seconds in which cached values will expire. 0 means never expire. {@see CCache::set()}
	 */
	public $cacheDuration = 0;

	/**
	 * @var string The name of the view source component to use
	 */
	public $viewSource = 'views';

	/**
	 * @var string The name of the message source component to use
	 */
	public $messageSource = 'messages';

	/**
	 * @var TDbViewSource The view source component being used.
	 */
	private $_viewSource;

	/**
	 * @var TDbMessageSource The message source component being used.
	 */
	private $_messageSource;

	/**
	 * @var array $_messages contains the untranslated messages found during the current request
	 * */
	private $_messages = array();

	/**
	 * @var array $_cache will contain cached variables
	* */
	private $_cache = array();

	/**
	 * Initialize the translate component.
	 *
	 * If {@see TTranslator::genericLocale} is set to true the source language setting will be stripped to just the language portion of its value.
	 *
	 * If {@see TTranslator::defineGlobalTranslateFunction} is set to true a global function called 't' will be defined to simplify message translations
	 * over the built in {@see Yii::t()} function.
	 *
	 * @see CApplicationComponent::init()
	*/
	public function init()
	{
		if($this->genericLocale)
		{
			Yii::app()->sourceLanguage = Yii::app()->getLocale()->getLanguageID(Yii::app()->sourceLanguage);
		}
		if($this->defineGlobalTranslateFunction)
		{
			function t($message, $params = array(), $category = null)
			{
				return Yii::t($category, $message, $params);
			}
		}
		return parent::init();
	}
	
	/**
	 * Checks whether a setting's value is OK.
	 *
	 * @param string $setting The name of the setting to be checked.
	 * @return mixed True if the setting is OK. Otherwise an error message string stating why the setting is not OK should be returned.
	 */
	public function checkSetting($setting)
	{
		try
		{
			switch(strtolower($setting))
			{
				case 'googleapikey':
					return is_string($this->googleApiKey) && !empty($this->googleApiKey) ? true : 'Must be a non-empty string containing a valid Google Translate API key.';
				case 'autotranslate':
					return is_bool($this->autoTranslate) ? true : 'Must be a boolean value, true or false.';
				case 'languagevarname':
					return is_string($this->languageVarName) && $this->languageVarName !== '' ? true : 'Must be a non-empty string.';
				case 'cookieexpire':
					return is_int($this->cookieExpire) && $this->cookieExpire > -1 ? true : 'Must be a positive integer.';
				case 'defineglobaltranslatefunction':
					return is_bool($this->defineGlobalTranslateFunction) ? true : 'Must be a boolean value, true or false.';
				case 'usetransaction':
					return is_bool($this->useTransaction) ? true : 'Must be a boolean value, true or false.';
				case 'genericlocale':
					return is_bool($this->genericLocale) ? true : 'Must be a boolean value, true or false.';
				case 'forceacceptedlanguage':
					return is_bool($this->forceAcceptedLanguage) ? true : 'Must be a boolean value, true or false.';
				case 'cacheduration':
					return is_int($this->cacheDuration) ? true : 'Must be an integer.';
				case 'viewsource':
					return $this->getViewSourceComponent() !== null ? true : 'Component not found.';
				case 'messagesource':
					return $this->getMessageSourceComponent() !== null ? true : 'Component not found.';
				default:
					return "Unknown setting '$setting'";
			}
		}
		catch(Exception $e)
		{
			return $e->getMessage();
		}
	}

	/**
	 * Performs the following actions with the langauge parameter:
	 * Sets the application's current language.
	 * Sets php's current language.
	 * Creates a session variable containing the current language's value.
	 * Creates a cookie containing the current language value.
	 *
	 * @param string $language The language ID
	 */
	public function setLanguage($language)
	{
		Yii::app()->setLanguage($language);
		setLocale(LC_ALL, $language.'.'.Yii::app()->charset);
		Yii::app()->getUser()->setState($this->languageVarName, $language);
		Yii::app()->getRequest()->getCookies()->add($this->languageVarName, new CHttpCookie($this->languageVarName, $language, array('expire' => time() + $this->cookieExpire)));
	}

	/**
	 * Get whether there are missing translations for the current request.
	 *
	 * @return boolean true if missing translations exist for the current request. False otherwise.
	 */
	public function hasMissingTranslations()
	{
		return !empty($this->_messages);
	}

	/**
	 * Whether Google translate can be used (whether a google translate API key has been set and is not empty)
	 *
	 * @see TTranslator::$googleApiKey
	 * @return boolean true if Google translate can be used (google translate API key is set and not empty). False otherwise.
	 */
	public function canUseGoogleTranslate()
	{
		return !empty($this->googleApiKey);
	}

	/**
	 * Get the list of Yii accepted locales. Alias for {@link CLocale::getLocaleIds()}.
	 *
	 * @see CLocale::getLocaleIds()
	 * @return array list of Yii accepted locales.
	 */
	public function getYiiAcceptedLocales()
	{
		return CLocale::getLocaleIds();
	}

	/**
	 * Get a list of all languages accepted by Google translate.

	 * @return array An array of the languages accepted by Google translate in the form of 'ID' => 'display name or ID if display name could not be determined'.
	 */
	public function getGoogleAcceptedLanguages()
	{
		$cacheKey = TranslateModule::ID . '-cache-google-accepted-languages';
		if(!isset($this->_cache[$cacheKey]))
		{
			if(($cache = Yii::app()->getCache()) === null || ($languages = $cache->get($cacheKey)) === false)
			{
				$queryLanguages = $this->queryGoogle(array(), 'languages');
				if($queryLanguages === false)
				{
					Yii::log('Failed to query Google\'s accepted languages.', CLogger::LEVEL_ERROR, TranslateModule::ID);
					return false;
				}
				foreach($queryLanguages->languages as $language)
				{
					$languages[$language->language] = isset($language->name) ? $language->name : $language->language;
				}
				asort($languages, SORT_LOCALE_STRING);
				if($cache !== null)
				{
					$cache->set($cacheKey, $languages, $this->cacheDuration);
				}
			}
			$this->_cache[$cacheKey] = $languages;
		}
		return $this->_cache[$cacheKey];
	}

	/**
	 * Get the list of 'accepted' languages.
	 *
	 * @return array An array of the accepted languages in the form of 'ID' => 'display name or ID if display name could not be determined'.
	 */
	public function getAcceptedLanguages()
	{
		$cacheKey = TranslateModule::ID . '-cache-accepted-languages-' . Yii::app()->getLanguage();
		if(!isset($this->_cache[$cacheKey]))
		{
			if(($cache = Yii::app()->getCache()) === null || ($languages = $cache->get($cacheKey)) === false)
			{
				$languageDisplayNames = $this->getLanguageDisplayNames();
				$languages[Yii::app()->sourceLanguage] = isset($languageDisplayNames[Yii::app()->sourceLanguage]) ? $languageDisplayNames[Yii::app()->sourceLanguage] : Yii::app()->sourceLanguage;
				foreach($this->getMessageSourceComponent()->getAcceptedLanguages() as $lang)
				{
					$languages[$lang['code']] = $languageDisplayNames[$lang['code']];
				}
				asort($languages, SORT_LOCALE_STRING);
				if($cache !== null)
				{
					$cache->set($cacheKey, $languages, $this->cacheDuration);
				}
			}
			$this->_cache[$cacheKey] = $languages;
		}
		return $this->_cache[$cacheKey];
	}

	/**
	 * Get whether a language ID is accepted by Yii i18n locale database.
	 *
	 * @param string $languageId The language ID
	 * @return boolean true if the language ID is accepted by Yii i18n locale database, false otherwise.
	 */
	public function isYiiAcceptedLocale($id)
	{
		return in_array($id, $this->getYiiAcceptedLocales());
	}

	/**
	 * Get whether a language ID is accepted by Google Translate.
	 *
	 * @param string $languageId The language ID
	 * @return boolean true if the language ID is accepted by Google Translate, false otherwise.
	 */
	public function isGoogleAcceptedLanguage($id)
	{
		return array_key_exists($id, $this->getGoogleAcceptedLanguages());
	}

	/**
	 * Get whether a language ID is an 'accepted' language ID.
	 *
	 * @param string $languageId The language ID
	 * @return boolean true if the language ID is an accepted language ID false otherwise.
	 */
	public function isAcceptedLanguage($languageId)
	{
		return array_key_exists($languageId, $this->getAcceptedLanguages());
	}

	/**
	 * Get the language ID portion of a locale ID.
	 *
	 * @param string $localeId The locale ID. Defaults to null meaning use the aplication's current language as the locale ID.
	 * @return string the language ID portion of a locale ID
	 */
	public function getLanguageID($localeId = null)
	{
		if($localeId === null)
		{
			$localeId = Yii::app()->getLanguage();
		}
		return Yii::app()->getLocale()->getLanguageID($localeId);
	}

	/**
	 * Get the script ID portion of a locale ID.
	 *
	 * @param string $localeId The locale ID. Defaults to null meaning use the aplication's current language as the locale ID.
	 * @return string the script ID portion of a locale ID
	 */
	public function getScriptID($localeId = null)
	{
		if($localeId === null)
		{
			$localeId = Yii::app()->getLanguage();
		}
		return Yii::app()->getLocale()->getScriptID($localeId);
	}

	/**
	 * Get the territory ID portion of a locale ID.
	 *
	 * @param string $localeId The locale ID. Defaults to null meaning use the aplication's current language as the locale ID.
	 * @return string the territory ID portion of a locale ID
	 */
	public function getTerritoryID($localeId = null)
	{
		if($localeId === null)
		{
			$localeId = Yii::app()->getLanguage();
		}
		return Yii::app()->getLocale()->getTerritoryID($localeId);
	}

	/**
	 * Get the localized display name of a language for a language using the Yii i18n database.
	 *
	 * @see TTranslator::getLocaleDisplayName()
	 * @param string $id The locale ID.
	 * @param string $language The language to localize the language display name for. Defaults to null meaning the application's current language.
	 * @return string|false Returns the localized language display name, or false on error.
	 */
	public function getLanguageDisplayName($id = null, $language = null)
	{
		return $this->getLocaleDisplayName($id, $language);
	}

	/**
	 * Get the localized display names of all languages for a language using the Yii i18n database.
	 *
	 * @see TTranslator::getLocaleDisplayNames()
	 * @param string $language The language to localize the territory display names for. Defaults to null meaning the application's current language.
	 * @return array|false Returns an array of the localized territory display names in the form 'locale ID' => 'territory display name', or false on error.
	 */
	public function getLanguageDisplayNames($language = null)
	{
		return $this->getLocaleDisplayNames($language);
	}

	/**
	 * Get the localized display name of a script for a language using the Yii i18n database.
	 *
	 * @see TTranslator::getLocaleDisplayName()
	 * @param string $id The locale ID.
	 * @param string $language The language to localize the script display name for. Defaults to null meaning the application's current language.
	 * @return string|false Returns the localized script display name, or false on error.
	 */
	public function getScriptDisplayName($id = null, $language = null)
	{
		return $this->getLocaleDisplayName($id, $language, 'script');
	}

	/**
	 * Get the localized display names of all scritps for a language using the Yii i18n database.
	 *
	 * @see TTranslator::getLocaleDisplayNames()
	 * @param string $language The language to localize the territory display names for. Defaults to null meaning the application's current language.
	 * @return array|false Returns an array of the localized territory display names in the form 'locale ID' => 'territory display name', or false on error.
	 */
	public function getScriptDisplayNames($language = null)
	{
		return $this->getLocaleDisplayNames($language, 'script');
	}

	/**
	 * Get the localized display name of a territory for a language using the Yii i18n database.
	 *
	 * @see TTranslator::getLocaleDisplayName()
	 * @param string $id The locale ID.
	 * @param string $language The language to localize the territory display name for. Defaults to null meaning the application's current language.
	 * @return string|false Returns the localized territory display name, or false on error.
	 */
	public function getTerritoryDisplayName($id = null, $language = null)
	{
		return $this->getLocaleDisplayName($id, $language, 'territory');
	}

	/**
	 * Get the localized display names of all territories for a language using the Yii i18n database.
	 *
	 * @see TTranslator::getLocaleDisplayNames()
	 * @param string $language The language to localize the territory display names for. Defaults to null meaning the application's current language.
	 * @return array|false Returns an array of the localized territory display names in the form 'locale ID' => 'territory display name', or false on error.
	 */
	public function getTerritoryDisplayNames($language = null)
	{
		return $this->getLocaleDisplayNames($language, 'territory');
	}

	/**
	 * Get the localized display name of a language, script, or territory for a language using the Yii i18n database.
	 *
	 * @param string $id The locale ID.
	 * @param string $language The language to localize the display name for. Defaults to null meaning the application's current language.
	 * @param string $category The type of display name to get for the ID 'language', 'script', or 'territory'. Defaults to 'language'.
	 * @return string|false Returns the localized display name, or false on error.
	 */
	public function getLocaleDisplayName($id = null, $language = null, $category = 'language')
	{
		$idMethod = 'get' . ucfirst(strtolower($category)) . 'ID';
		if(!method_exists($this, $idMethod))
		{
			Yii::log("Failed to query Yii locale DB. Category '$category' is invalid.", CLogger::LEVEL_ERROR, TranslateModule::ID);
			return false;
		}
		if(!isset($id))
		{
			$id = $this->$idMethod();
		}
		$localeDisplayNames = $this->getLocaleDisplayNames($language, $category);
		if($localeDisplayNames !== false && array_key_exists($id, $localeDisplayNames))
		{
			return $localeDisplayNames[$id];
		}
		return false;
	}

	/**
	 * Get the localized display names of all languages, scripts, or territories for a language using the Yii i18n database.
	 *
	 * @param string $language The language to localize the display names for. Defaults to null meaning the application's current language.
	 * @param string $category The type of display names either 'language', 'script', or 'territory'. Defaults to 'language'.
	 * @return array|false Returns an array of the localized display names in the form 'locale ID' => 'display name', or false on error.
	 */
	public function getLocaleDisplayNames($language = null, $category = 'language')
	{
		if($language === null)
			$language = Yii::app()->getLanguage();
		$category = strtolower($category);
		$cacheKey = TranslateModule::ID . "-cache-i18n-$category-$language";

		if(!isset($this->_cache[$cacheKey]))
		{
			if(($cache = Yii::app()->getCache()) === null || ($languages = $cache->get($cacheKey)) === false)
			{
				$method = 'get' . ucfirst($category);
				$idMethod = $method . 'ID';
				$locale = Yii::app()->getLocale();
				if(!method_exists($locale, $method) || !method_exists($locale, $idMethod))
				{
					Yii::log("Failed to query Yii locale DB. Category '$category' is invalid.", CLogger::LEVEL_ERROR, TranslateModule::ID);
					return false;
				}
				foreach(CLocale::getLocaleIds() as $id)
				{
					$item = $locale->$method($id);
					$id = $locale->$idMethod($id) or $locale->getCanonicalID($id) or $id;
					$languages[$id] = $item === null ? $id : $item;
				}
				asort($languages, SORT_LOCALE_STRING);
				if($cache !== null)
				{
					$cache->set($cacheKey, $languages, $this->cacheDuration);
				}
			}
			$this->_cache[$cacheKey] = $languages;
		}
		return $this->_cache[$cacheKey];
	}

	/**
	 * Gets the application's {@link ITMessageSource} component
	 *
	 * @throws CException If the message source component was either not found or does not implement ITMessageSource.
	 * @return ITMessageSource the message source component currently in use.
	 */
	public function getMessageSourceComponent()
	{
		if(!isset($this->_messageSource))
		{
			$this->_messageSource = Yii::app()->getComponent($this->messageSource);
			if(!$this->_messageSource instanceof TDbMessageSource)
			{
				$this->_messageSource = null;
				throw new CException("The component '$this->messageSource' must be defined and implement type ITMessageSource.");
			}
		}
		return $this->_messageSource;
	}

	/**
	 * gets the {@link TViewSource} component
	 *
	 * @throws CException If the view source component was either not found or was not a subclass of TViewSource.
	 * @return TViewSource the view source component currently in use.
	 */
	public function getViewSourceComponent()
	{
		if(!isset($this->_viewSource))
		{
			$this->_viewSource = Yii::app()->getComponent($this->viewSource);
			if(!$this->_viewSource instanceof TViewSource)
			{
				$this->_viewSource = null;
				throw new CException("The component '$this->viewSource' must be defined and of type TViewSource.");
			}
		}
		return $this->_viewSource;
	}

	/**
	 * method that handles {@link CMissingTranslationEvent}s
	 *
	 * @param CMissingTranslationEvent $event
	 */
	public function missingTranslation($event)
	{
		$event->message = $this->translate($event->category, $event->message, $event->language, $event->sender, $this->useTransaction);
	}
	
	/**
	 * Attempts to translate a message.
	 *
	 * @param string $category The category the message should be associated with
	 * @param string $message The message to be translated
	 * @param string $language The language the message should be translate to
	 * @param ITMessageSource $source The message source to use.
	 * @param bool $useTransaction If true a transaction will be used when updating the database entries for this category, message, language, translation.
	 * @throws CException If the source message, source message category, language, or translation could not be added to the message source.
	 * @return string The translation for the message or the message it self if either the translation failed or the target language was the same as source language.
	 */
	public function translate($category, $message, $language, $source, $useTransaction = true)
	{
		if(trim($message) !== '')
		{
			$sourceLanguage = $source->getLanguage();

			if($source->forceTranslation || $language !== $sourceLanguage)
			{
				if($useTransaction && $source->getDbConnection()->getCurrentTransaction() === null)
				{
					$transaction = $source->getDbConnection()->beginTransaction();
				}
					
				try
				{
					$translation = $source->getTranslation($category, $message, $language, true);

					if($translation['id'] === null)
					{
						throw new CException("Source message '$message' could not be found or added to the message source.");
					}

					if($translation['category_id'] === null)
					{
						throw new CException("The category '$category' was not found or could not be associated with the source message '$message'.");
					}

					if($translation['language_id'] === null)
					{
						throw new CException("The language '$language' could not be found or added to the message source.");
					}

					// If the translation of the source message does not exist use google translate, if autotranslate is enabled, and add the translation.
					// Otherwise if autotranslate is disabled or google translate was not successful add the source message to the missing messages.
					if($translation['translation'] === null)
					{
						if($this->autoTranslate)
						{
							try 
							{
								$translation['translation'] = $this->googleTranslate($message, $language, $sourceLanguage);
								
								if($translation['translation'] !== false)
								{
									$message = trim($translation['translation']);
									if($source->addTranslation($translation['id'], $language, $message, true) === null)
									{
										throw new CException("Translation '$message' could not be added to the message source");
									}
								}
								else
								{
									Yii::log("Message '$message' could not be translated to '$language' by Google translate.", CLogger::LEVEL_ERROR, TranslateModule::ID);
									$this->addMissingTranslation($translation['id'], $category, $message, $language);
								}
							}
							catch(CharacterLimitExceededException $clee)
							{
								Yii::log($clee->getMessage(), CLogger::LEVEL_ERROR, TranslateModule::ID);
								$this->addMissingTranslation($translation['id'], $category, $message, $language);
							}
						}
						else
						{
							Yii::log("A translation for message '$message' to '$language' could not be found and automatic translations are disabled.", CLogger::LEVEL_WARNING, TranslateModule::ID);
							$this->addMissingTranslation($translation['id'], $category, $message, $language);
						}
					}
					else
					{
						$message = $translation['translation'];
					}
					if(isset($transaction))
					{
						$transaction->commit();
					}
				}
				catch(Exception $e)
				{
					if(isset($transaction))
					{
						$transaction->rollback();
					}
					throw $e;
				}
			}
		}
			
		return $message;
	}

	/**
	 * Adds a message to the list of translations missing for this request
	 *
	 * @param integer $messageId The database ID of the source message that is missing a translation
	 * @param string $category The category associate with the message
	 * @param string $message The message
	 * @param string $language The language the message is missing a translation for
	 */
	protected function addMissingTranslation($messageId, $category, $message, $language)
	{
		$this->_messages[$messageId] = array('category' => $category, 'message' => $message, 'language' => $language);
	}

	/**
	 * translate some message from $sourceLanguage to $targetLanguage using google translate api
	 * googleApiKey must be defined to use this service
	 * @param string $message to be translated
	 * @param mixed $targetLanguage language to translate the message to,
	 * if null it will use the current language in use,
	 * if an array then the message will be translated into each language and an associative array of translations in the form of language=>translation will be returned.
	 * @param mixed $sourceLanguage language that the message is written in,
	 * if null it will use the application source language
	 * @return string translated message
	 */
	public function googleTranslate(&$message, $targetLanguage = null, $sourceLanguage = null)
	{
		if($targetLanguage === null)
		{
			$targetLanguage = Yii::app()->getLanguage();
		}
		
		if($sourceLanguage === null)
		{
			$sourceLanguage = Yii::app()->sourceLanguage;
		}

		if(empty($sourceLanguage))
		{
			throw new CException(TranslateModule::t('Source language must be defined'));
		}

		if($targetLanguage === $sourceLanguage)
		{
			return strval($message);
		}

		$msg = strval($message);
		if(strlen($msg) > self::GOOGLE_TRANSLATE_MAX_CHARS)
		{
			throw new CharacterLimitExceededException(strlen($msg), self::GOOGLE_TRANSLATE_MAX_CHARS);
		}

		preg_match_all('/\{(?:.*?)\}/s', $msg, $yiiParams);
		$yiiParams = $yiiParams[0];
		$escapedYiiParams = array();
		foreach($yiiParams as $key => &$match)
		{
			$escapedYiiParams[$key] = "<span class='notranslate'>:mpt$key</span>";
		}
		
		$msg = str_replace($yiiParams, $escapedYiiParams, $msg);

		$query = $this->queryGoogle(array('q' => $msg, 'source' => $sourceLanguage, 'target' => $targetLanguage));

		if($query === false)
		{
			return false;
		}
		
		if(isset($query['translatedText']))
		{
			$msg = $query['translatedText'];
		}
		else if(isset($query['translations']))
		{
			$msg = $query['translations'][0]['translatedText'];
		}
		else 
		{
			return false;
		}

		return str_replace($escapedYiiParams, $yiiParams, $msg);
	}

	/**
	 * query google translate api
	 *
	 * @param array $args
	 * @return array the google response object
	 */
	protected function queryGoogle($args = array())
	{
		if(!isset($args['key']))
		{
			if(empty($this->googleApiKey))
			{
				throw new CException(TranslateModule::t('You must provide your google api key in option googleApiKey'));
			}
			$args['key'] = $this->googleApiKey;
		}

		if(!isset($args['format']))
		{
			$args['format'] = 'html';
		}

		$trans = false;

		if(in_array('curl', get_loaded_extensions()))
		{
			if($curl = curl_init(self::GOOGLE_TRANSLATE_URL))
			{
				if(curl_setopt_array(
						$curl,
						array(
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_POSTFIELDS => preg_replace('/%5B\d+%5D/', '', http_build_query($args)),
							CURLOPT_HTTPHEADER => array('X-HTTP-Method-Override: GET'),
							CURLOPT_TIMEOUT => self::GOOGLE_QUERY_TIME_LIMIT,
						)))
				{
					if(!$trans = curl_exec($curl))
					{
						$trans = '{ "error": { "errors": [ { "domain": "cURL", "reason": "Failed to execute cURL request", "message": "'.curl_error($curl).'" } ], "code": '.curl_errno($curl).', "message": "'.curl_error($curl).'" } }';
					}
				}
				else
				{
					Yii::log('Failed to set cURL options.', CLogger::LEVEL_ERROR, TranslateModule::ID);
				}
				curl_close($curl);
			}
			else
			{
				Yii::log('Failed to initialize cURL.', CLogger::LEVEL_ERROR, TranslateModule::ID);
			}
		}
		else
		{
			Yii::log('cURL extension not found. Falling back to file_get_contents() to read Google translation query response.', CLogger::LEVEL_INFO, TranslateModule::ID);
			$trans = file_get_contents($url);
		}

		if(!$trans)
		{
			Yii::log('Failed to query Google for message translation. Args: ' . print_r($args, true), CLogger::LEVEL_WARNING, TranslateModule::ID);
			return false;
		}

		$trans = CJSON::decode($trans);

		if(isset($trans['error']))
		{
			Yii::log('Google translate error: '.$trans['error']['code'].'. '.$trans['error']['message'], CLogger::LEVEL_ERROR, TranslateModule::ID);
			return false;
		}
		elseif(!isset($trans['data']))
		{
			Yii::log('Google translate error: '.print_r($trans, true), CLogger::LEVEL_ERROR, TranslateModule::ID);
			return false;
		}
		else
		{
			return $trans['data'];
		}
	}

	/**
	 * generates a link or button to the page where you translate the missing translations found in this page
	 *
	 * @param string $label label of the link
	 * @param string $type accepted types are : link and button
	 * @return string
	 */
	public function translateLink($label = 'Translate', $type = 'link')
	{
		$form = CHtml::form(Yii::app()->getController()->createUrl('/translate/translate/missingOnPage'));
		foreach($this->_messages as $index => $message)
		{
			foreach($message as $name => $value)
			{
				$form .= CHtml::hiddenField(TranslateModule::ID."-missing[$index][$name]", $value);
			}
		}
		if($type === 'button')
			$form .= CHtml::submitButton(TranslateModule::t($label));
		else
			$form .= CHtml::linkButton(TranslateModule::t($label));
		$form .= CHtml::endForm();
		return $form;
	}

	/**
	 * generates a link or button that generates a dialog to the page where you translate the missing translations found in this page
	 *
	 * @param string $label label of the link
	 * @param mixed $title title of the popup
	 * @param string $type accepted types are : link and button
	 * @return string
	 */
	public function translateDialogLink($label = 'Translate', $title = null, $type = 'link')
	{
		return $this->_ajaxDialog(TranslateModule::t($label), 'translate/translate/missingOnPage', $title, $type, array('data' => array(TranslateModule::ID.'-missing' => $this->_messages)));
	}

	private function _ajaxDialog($label, $url, $title = null, $type = 'link', $ajaxOptions = array())
	{
		$id = TranslateModule::ID.'-dialog';

		$ajaxOptions = array_merge(array(
			'update' => "#$id",
			'type' => 'post',
			'complete' => "function(){ $('#{$id}').dialog('option', 'position', 'center').dialog('open');}",
		), $ajaxOptions);

		$url = Yii::app()->getController()->createUrl($url);

		if($type === 'button')
			$content = CHtml::ajaxButton($label, $url, $ajaxOptions);
		else
			$content = CHtml::ajaxLink($label, $url, $ajaxOptions);

		$content.=Yii::app()->getController()->widget('zii.widgets.jui.CJuiDialog', array(
			'options' => array_merge($this->dialogOptions,array('title' => $title)),
			'id' => $id
		), true);
		return $content;
	}

	public function getFormatByType($format_type, $format_id, $datetime_format=false) {
		$res = false;
		$locale = Yii::app()->getLocale();
		$datetime_format = (!empty($datetime_format) ? $datetime_format : $locale->getDateTimeFormat());

		switch ($format_type) {
			case 'date': {
				$res =$locale->getDateFormat($format_id);
			} break;
			case 'time': {
				$res =$locale->getTimeFormat($format_id);
			} break;
			case 'datetime': {
				$res =strtr(
						$datetime_format,
						array(
							"{0}" => $locale->getTimeFormat($format_id),
							"{1}" => $locale->getDateFormat($format_id),
						)
				);
			} break;
		}

		return $res;
	}


	public function getDbFormat($format_type) {
		$dt_format =Yii::app()->params['database_format']['dateTimeFormat'];
		return $this->getFormatByType($format_type, 'database', $dt_format);
	}


	/**
	 * Convert a date, time or datetime to local/given format to local format
	 * @param <mixed>   $dt date  time, datetime or timestamp
	 * @param <string>  $format_type  'date' | 'time' | 'datetime' used as output
	 * @param <string>  $to_format_id  id/width of the format (short, medium, ..)
	 * @param <string>  $from_format  manually specified locale format string
	 * @param <bool>    $is_timestamp if true, dt will be considered a timestamp
	 * @return <mixed>  formatted string or false if fail
	 */
	public function toLocal($dt, $format_type=false, $to_format_id=false, $from_format=false, $is_timestamp=false) {
		$res =false;

		// kind of data we are convering; datetime is default:
		$format_type =(!empty($format_type) ? $format_type : 'datetime');

		// format id ("width") of data we are convering to; small is default:
		$to_format_id =(!empty($to_format_id) ? $to_format_id : 'short');

		if (!$is_timestamp) {
			// default storage format:
			$from_format =(!empty($from_format) ? $from_format : $this->getDbFormat($format_type));

			$res =Yii::app()->dateFormatter->format(
					$this->getFormatByType($format_type, $to_format_id),
					CDateTimeParser::parse($dt, $from_format)
			);
		}
		else {
			$res =Yii::app()->dateFormatter->format(
					$this->getFormatByType($format_type, $to_format_id),
					$dt // timestamp
			);
		}

		return $res;
	}


	/**
	 * Convert a date, time or datetime to local/given format to database format
	 * @param <mixed>   $dt date  time, datetime or timestamp
	 * @param <string>  $to_format_type  'date' | 'time' | 'datetime' used as output
	 * @param <string>  $from_format_id  id/width of the format (short, medium, ..)
	 * @param <string>  $from_format_type  'date' | 'time' | 'datetime' used as input
	 * @param <string>  $from_format  manually specified locale format string
	 * @param <bool>    $is_timestamp if true, dt will be considered a timestamp
	 * @return <mixed>  formatted string or false if fail
	 */
	public function toDatabase($dt, $to_format_type=false, $from_format_id=false,
			$from_format_type=false, $from_format=false, $is_timestamp=false) {
		$res =false;

		// kind of data we are convering to; datetime is default:
		$to_format_type =(!empty($to_format_type) ? $to_format_type : 'datetime');

		// kind of data we are convering from; by default it is the
		// same as to_format_type, that it is a common situation:
		$from_format_type =(!empty($from_format_type) ? $from_format_type : $to_format_type);

		// format id ("width") of data we are convering from; small is default:
		$from_format_id =(!empty($from_format_id) ? $from_format_id : 'short');

		if (!$is_timestamp) {
			$from_format =(!empty($from_format) ?
					$from_format : $this->getFormatByType($from_format_type, $from_format_id));

			$res =Yii::app()->dateFormatter->format(
					$this->getFormatByType($to_format_type, 'database'),
					CDateTimeParser::parse($dt, $from_format)
			);
		}
		else {
			$res =Yii::app()->dateFormatter->format(
					$this->getFormatByType($to_format_type, 'database'),
					$dt // timestamp
			);
		}

		return $res;
	}


	/**
	 *
	 * @param <type> $dt
	 * @param <type> $format_type
	 * @param <type> $format_id
	 * @param <type> $is_timestamp
	 * @return <type>
	 */
	public function splitDatetime($dt, $format_type=false, $format_id=false, $is_timestamp=false) {
		$res =false;
		$timestamp =0;

		if (!$is_timestamp) {
			// kind of data we are convering to; datetime is default:
			$format_type =(!empty($format_type) ? $format_type : 'datetime');
			// format id ("width") of data we are convering from; small is default:
			$format_id =(!empty($format_id) ? $format_id : 'short');
			$from_format =$this->getFormatByType($format_type, $format_id);
			$timestamp =CDateTimeParser::parse($dt, $from_format);
		}
		else {
			$timestamp =$dt;
		}

		if ($timestamp > 0) {
			// not using getdate() as we want to have 2 digits values

			$my_format ='yyyy-MM-dd HH:mm:ss';
			$my_date_string =Yii::app()->dateFormatter->format($my_format, $timestamp);

			$res =array(
				'date'=>substr($my_date_string, 0, 10),
				'time'=>substr($my_date_string, 11),
				'datetime'=>$my_date_string,
				'year'=>substr($my_date_string, 0, 4),
				'yy'=>substr($my_date_string, 2, 2),
				'month'=>substr($my_date_string, 5, 2),
				'day'=>substr($my_date_string, 8, 2),
				'hour'=>substr($my_date_string, 11, 2),
				'min'=>substr($my_date_string, 14, 2),
				'sec'=>substr($my_date_string, 17, 2),
			);
		}

		return $res;
	}


	/**
	 *
	 * @param <type> $dt_arr
	 * @param <type> $to_format_type
	 * @param <type> $format_id
	 * @param <type> $from_format_id
	 * @return <type>
	 */
	public function mergeDatetime($dt_arr, $to_format_type=false, $format_id=false, $from_format_id=false) {
		// kind of data we are convering to; datetime is default:
		$to_format_type =(!empty($to_format_type) ? $to_format_type : 'datetime');
		// format id ("width") of data we are convering from; small is default:
		$format_id =(!empty($format_id) ? $format_id : 'short');
		$from_format_id =(!empty($from_format_id) ? $from_format_id : $format_id);

		if (isset($dt_arr['date'])) {
			$from_format =$this->getFormatByType('date', $from_format_id);
			$timestamp =CDateTimeParser::parse($dt_arr['date'], $from_format);
			$dt_info =getdate($timestamp);
			$dt_arr['day']=$dt_info['mday'];
			$dt_arr['month']=$dt_info['mon'];
			$dt_arr['year']=$dt_info['year'];
		}

		if (isset($dt_arr['time'])) {
			$from_format =$this->getFormatByType('time', $from_format_id);
			$timestamp =CDateTimeParser::parse($dt_arr['time'], $from_format);
			$dt_info =getdate($timestamp);
			$dt_arr['hour']=$dt_info['hours'];
			$dt_arr['min']=$dt_info['minutes'];
			$dt_arr['sec']=$dt_info['seconds'];
		}

		$timestamp =mktime(
				(isset($dt_arr['hour']) ? $dt_arr['hour'] : null),
				(isset($dt_arr['min']) ? $dt_arr['min'] : null),
				(isset($dt_arr['sec']) ? $dt_arr['sec'] : null),
				(isset($dt_arr['month']) ? $dt_arr['month'] : null),
				(isset($dt_arr['day']) ? $dt_arr['day'] : null),
				(isset($dt_arr['year']) ? $dt_arr['year'] : null)
		);

		$my_format ='yyyy-MM-dd HH:mm:ss';
		$to_format =$this->getFormatByType($to_format_type, $format_id);
		$res =Yii::app()->dateFormatter->format($my_format, $timestamp);

		return $res;
	}
	
	public function checkSettings($setting)
	{
		
	}

}

class CharacterLimitExceededException extends CException
{
	
	public function __construct($charCount, $maxAllowed)
	{
		parent::__construct(
			TranslateModule::t(
				'The message requested to be translated is {messageLength} characters long. A maximum of {characters} characters is allowed.',
				array('{characters}' => $maxAllowed, '{messageLength}' => $charCount)
			)
		);
	}
	
}