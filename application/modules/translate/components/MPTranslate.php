<?php

class MPTranslate extends CApplicationComponent {
	
	/**
	 * @const string ID an unique key to be used in many situations
	 * */
	const ID = 'modules.translate';
	
	const GOOGLE_QUERY_TIME_LIMIT = 30;
	
	const GOOGLE_TRANSLATE_MAX_CHARS = 5000;
	
	const GOOGLE_TRANSLATE_URL = 'https://www.googleapis.com/language/translate/v2';
    
    /**
     * @var $dialogOptions options of the dialog
     * */
    public $dialogOptions = array(
        'autoOpen' => false,
        'modal' => true,
        'width' => 'auto',
        'height' => 'auto',
    );
    
    /**
     * @var string $googleTranslateApiKey your google translate api key
     * set this if you wish to use googles translate service to translate the messages
     * if empty it will not use the service 
     * */
    public $googleApiKey = null;

    /**
     * @var boolean wheter to auto translate the missing messages found on the page
     * needs google api key to set
     * */
    public $autoTranslate = false;
    
    public $managementAccessRules = array();
    
    public $managementActionFilters = array();
    
    public $cookieExpire = 63072000; // 2 Years in seconds.
    
    public $defineGlobalTranslateFunction = true;
    
    public $useTransaction = true;
    
    public $languageRequestVarName = 'language';
    
    public $genericLocale = true;
    
    private $_source;
    
    /**
     * @var array $_messages contains the untranslated messages found during the current request
     * */
    private $_messages = array();
    
    /**
     * @var array $_cache will contain cached variables
     * */
    private $_cache = array();
    
	/**
	 * handles the initialization parameters of the components
	 */
	public function init() {
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
	
	public function processRequest($route) 
	{
		// Determine request's preferred language by:
		
		// Post parameter
		if(isset($_POST[$this->languageRequestVarName]))
		{
			$language = $_POST[$this->languageRequestVarName];
		} 
		// Get parameter
		else if(isset($_GET[$this->languageRequestVarName])) 
		{
			$language = $_GET[$this->languageRequestVarName];
			unset($_GET[$this->languageRequestVarName]);
			unset($_REQUEST[$this->languageRequestVarName]);
		}
		// Session
		else if(Yii::app()->getUser()->hasState($this->languageRequestVarName)) 
		{
			$language = Yii::app()->getUser()->getState($this->languageRequestVarName);
		}
		// Cookie
		else if(Yii::app()->getRequest()->getCookies()->contains($this->languageRequestVarName)) 
		{
			$language = Yii::app()->getRequest()->getCookies()->itemAt($this->languageRequestVarName)->value;
		}
		// Client's preferred language setting
		else if(Yii::app()->getRequest()->getPreferredLanguage() !== false) 
		{
			$language = Yii::app()->getRequest()->getPreferredLanguage();
		} 
		// Application's default language
		else
		{
			$language = Yii::app()->getLanguage();
		}
		
		// Process language:
		
		// Canonicalize the language if we don't care about the locale portion
		if($this->genericLocale)
		{
			$language = Yii::app()->getLocale()->getLanguageID($language);
		}

		// If the language is not acceptable set it to the application's default language. 
		if(!$this->isAcceptedLanguage($language)) 
		{
			$language = $this->genericLocale ? Yii::app()->getLocale()->getLanguageID(Yii::app()->getLanguage()) : Yii::app()->getLanguage();
		}
		
		// If the language part of the requested url is missing redirect to the same url with the language part inserted.
		if(preg_match('/^\w+/', Yii::app()->getRequest()->getPathinfo(), $matches) !== 1 || $matches[0] !== $language)
		{
			Yii::app()->getRequest()->redirect(Yii::app()->createUrl($route, array($this->languageRequestVarName => $language)));
		}
		
		// Set application's current language to derived language.
		$this->setLanguage($language);
	}
	
	public function setLanguage($language) 
	{
		Yii::app()->setLanguage($language);
		setLocale(LC_ALL, $language.'.'.Yii::app()->charset);
		Yii::app()->getUser()->setState($this->languageRequestVarName, $language);
		Yii::app()->getRequest()->getCookies()->add($this->languageRequestVarName, new CHttpCookie($this->languageRequestVarName, $language, array('expire' => time() + $this->cookieExpire)));
	}
	
	public function hasMissingTranslations()
	{
		return !empty($this->_messages);
	}
	
	public function canUseGoogleTranslate() 
	{
		return !empty($this->googleApiKey);
	}
	
	public function getYiiAcceptedLocales() 
	{
		return CLocale::getLocaleIds();
	}
	
	/**
	 * returns an array containing all languages accepted by google translate
	 *
	 * @param string $targetLanguage
	 * @return array
	 */
	public function getGoogleAcceptedLanguages() 
	{
		$cacheKey = self::ID . '-cache-google-accepted-languages';
		if(!isset($this->_cache[$cacheKey])) 
		{
			if(($cache = Yii::app()->getCache()) === null || ($languages = $cache->get($cacheKey)) === false) 
			{
				$queryLanguages = $this->queryGoogle(array(), 'languages');
				if($queryLanguages === false) 
				{
					Yii::log('Failed to query Google\'s accepted languages.', CLogger::LEVEL_ERROR, self::ID);
					return false;
				}
				foreach($queryLanguages->languages as $language) 
				{
					$languages[$language->language] = isset($language->name) ? $language->name : $language->language;
				}
				asort($languages, SORT_LOCALE_STRING);
				if($cache !== null)
					$cache->set($cacheKey, $languages);
			}
			$this->_cache[$cacheKey] = $languages;
		}
		return $this->_cache[$cacheKey];
	}
	
	public function getAcceptedLanguages() 
	{
		$cacheKey = self::ID . '-cache-admin-accepted-languages-' . Yii::app()->getLanguage();
		if(!isset($this->_cache[$cacheKey])) 
		{
			if(($cache = Yii::app()->getCache()) === null || ($languages = $cache->get($cacheKey)) === false) 
			{
				$languageDisplayNames = $this->getLanguageDisplayNames();
				$languages[Yii::app()->sourceLanguage] = isset($languageDisplayNames[Yii::app()->sourceLanguage]) ? $languageDisplayNames[Yii::app()->sourceLanguage] : Yii::app()->sourceLanguage;
				foreach($this->getMessageSource()->getAcceptedLanguages() as $lang)
					$languages[$lang['id']] = $languageDisplayNames[$lang['id']];
				asort($languages, SORT_LOCALE_STRING);
				if($cache !== null)
					$cache->set($cacheKey, $languages);
			}
			$this->_cache[$cacheKey] = $languages;
		}
		return $this->_cache[$cacheKey];
	}
	
	public function isYiiAcceptedLocale($id) 
	{
		return in_array($id, $this->getYiiAcceptedLocales());
	}
	
	public function isGoogleAcceptedLanguage($id) 
	{
		return array_key_exists($id, $this->getGoogleAcceptedLanguages());
	}
	
	public function isAcceptedLanguage($id) 
	{
		return array_key_exists($id, $this->getAcceptedLanguages());
	}
	
	public function getLanguageID($language = null) 
	{
		if($language === null)
			$language = Yii::app()->getLanguage();
		return Yii::app()->getLocale()->getLanguageID($language);
	}
	
	public function getScriptID($language = null) 
	{
		if($language === null)
			$language = Yii::app()->getLanguage();
		$id = Yii::app()->getLocale()->getScriptID($language);
		if($id === null && $language !== Yii::app()->getLanguage())
			return $this->getScriptID(Yii::app()->getLanguage());
		return $id;
	}
	
	public function getTerritoryID($language = null) 
	{
		if($language === null)
			$language = Yii::app()->getLanguage();
		$id = Yii::app()->getLocale()->getTerritoryID($language);
		if($id === null && $language !== Yii::app()->getLanguage())
			return $this->getTerritoryID(Yii::app()->getLanguage());
		return $id;
	}
	
	public function getLanguageDisplayName($id = null, $language = null) 
	{
		return $this->getLocaleDisplayName($id, $language);
	}
	
	public function getLanguageDisplayNames($language = null) 
	{
		return $this->getLocaleDisplayNames($language);
	}
	
	public function getScriptDisplayName($id = null, $language = null) 
	{
		return $this->getLocaleDisplayName($id, $language, 'script');
	}
	
	public function getScriptDisplayNames($language = null) 
	{
		return $this->getLocaleDisplayNames($language, 'script');
	}
	
	public function getTerritoryDisplayName($id = null, $language = null) 
	{
		return $this->getLocaleDisplayName($id, $language, 'territory');
	}
	
	public function getTerritoryDisplayNames($language = null) 
	{
		return $this->getLocaleDisplayNames($language, 'territory');
	}
	
	public function getLocaleDisplayName($id = null, $language = null, $category = 'language') 
	{
		$idMethod = 'get' . ucfirst(strtolower($category)) . 'ID';
		if(!method_exists($this, $idMethod)) 
		{
			Yii::log("Failed to query Yii locale DB. Category '$category' is invalid.", CLogger::LEVEL_ERROR, self::ID);
			return false;
		}
		if(!isset($id))
		{
			$id = $this->$idMethod();
		}
		$localeDisplayNames = $this->getLocaleDisplayNames($language, $category);
		if($localeDisplayNames !== false && array_key_exists($id, $localeDisplayNames))
			return $localeDisplayNames[$id];
		return false;
	}
	
	public function getLocaleDisplayNames($language = null, $category = 'language') 
	{
		if($language === null)
			$language = Yii::app()->getLanguage();
		$category = strtolower($category);
		$cacheKey = self::ID . ".cache-i18n-$category-$language";
	
		if(!isset($this->_cache[$cacheKey])) 
		{
			if(($cache = Yii::app()->getCache()) === null || ($languages = $cache->get($cacheKey)) === false) 
			{
				$method = 'get' . ucfirst($category);
				$idMethod = $method . 'ID';
				$locale = Yii::app()->getLocale();
				if(!method_exists($locale, $method) || !method_exists($locale, $idMethod)) 
				{
					Yii::log("Failed to query Yii locale DB. Category '$category' is invalid.", CLogger::LEVEL_ERROR, self::ID);
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
					$cache->set($cacheKey, $languages);
			}
			$this->_cache[$cacheKey] = $languages;
		}
		return $this->_cache[$cacheKey];
	}
	
	public function getMessageSource()
	{
		if(!isset($this->_source))
		{
			$this->_source = Yii::app()->getMessages();
			if(!$this->_source instanceof TMessageSource)
				throw new CException(self::ID.' is only compatible with message source of type TMessageSource.');
		}
		return $this->_source;
	}

    /**
     * method that handles the on missing translation event
     * 
     * @param CMissingTranslationEvent $event
     * @return boolean true if message was successfully translated, false otherwise.
     */
    public function missingTranslation($event) 
    {
        $event->message = trim($event->message);
        
        if(empty($event->message))
        	return true;
        
        $event->category = trim($event->category);
        $event->language = trim($event->language);
        
        $source = $this->getMessageSource();

        $sourceLanguage = $event->category === TranslateModule::$componentId ? 'en' : $source->getLanguage();

        if(!$source->forceTranslation && $event->language === $sourceLanguage)
        	return false;

		if($source->getDbConnection()->getCurrentTransaction() === null)
			$transaction = $source->getDbConnection()->beginTransaction();
		
		try
		{ 	
	        $message = $source->getTranslationFromDb($event->category, $event->message, $event->language);
	        
	        // If the source message does not exists add it.
	        if($message['id'] === null) 
	        {
				$message['id'] = $source->addSourceMessage($event->category, $event->message);
				
				if($message['id'] === null)
				{
					throw new CDbException("Message '$event->message' in category '$event->category' could not be inserted into the database table '{$this->getMessageSource()->sourceMessageTable}'");
				}
	        }
	        
	        // If the category does not exist or has not been associated with the source message add it and/or associate it with the source message.
	    	if($message['category_id'] === null)
			{
				$message['category_id'] = $source->getCategoryId($category);
			
				if($message['category_id'] === false)
				{
					$message['category_id'] = $source->addCategory($category);
							
					if($message['category_id'] === null)
					{
						throw new CDbException("The category '$event->category' was not found and could not be added to the database.");
					}
				}
			
				if($source->addCategoryMessage($message['category_id'], $message['message_id']) === null)
				{
					throw new CDbException("The message with id '{$message['id']}' could not be associated with category id '{$message['category_id']}'.");
				}
			}
	        
			// If the translation of the source message does not exist use google translate, if autotranslate is enabled, and add the translation.
			// Otherwise if autotranslate is disabled or google translate was not successful add the source message to the missing messages.
	        if($message['translation'] === null) 
	        {
	        	if($this->autoTranslate)
	        	{
	        		$message['translation'] = $event->message;
	
	        		preg_match_all('/\{(?:.*?)\}/s', $message['translation'], $matches);
	        		$matches = $matches[0];
	        		foreach($matches as $key => $match)
	        			$message['translation'] = str_replace($match, "_{$key}_", $message['translation']);
	        		 
	        		$message['translation'] = $this->googleTranslate(
	        				$message['translation'],
	        				$event->language,
	        				$sourceLanguage
	        		);
	        		 
	        		if($message['translation'] !== false) 
	        		{
	        			$message['translation'] = trim($message['translation'][0]);
	        			foreach($matches as $key => $match)
	        				$message['translation'] = str_replace("_{$key}_", $match, $message['translation']);
	
	        			if($source->addTranslation($message['id'], $event->language, $message['translation']) !== null) 
	        			{
	        				$event->message = &$message['translation'];
	        			}
	        			else 
	        			{
	        				throw new CDbException('Translation "'.$message['translation'].'" could not be added to message table', CLogger::LEVEL_ERROR, self::ID);
	        			}
	        		}
	        		else 
	        		{
	        			Yii::log('Message "'.$event->message.'" could not be translated to "'.$event->language.'" by Google translate.', CLogger::LEVEL_ERROR, self::ID);
	        		}
	        	} 
	        	else 
	        	{
	        		Yii::log('A translation for message "'.$event->message.'" to "'.$event->language.'" could not be found and automatic translations are disabled.', CLogger::LEVEL_WARNING, self::ID);
	        	}
	        }
	        else 
	        {
	        	$event->message = &$message['translation'];
	        }
	        if(isset($transaction))
	        	$transaction->commit();
		}
		catch(Exception $e)
		{
			if(isset($transaction))
				$transaction->rollback();
			throw $e;
		}

		if($event->message === $message['translation'])
			return true;
		
        $this->_messages[$message['id']] = array('language' => $event->language, 'message' => $event->message, 'category' => $event->category);
        return false;
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
    public function googleTranslate(&$message, &$targetLanguage = null, &$sourceLanguage = null) 
    {
        if($targetLanguage === null)
            $targetLanguage = Yii::app()->getLanguage();
        
        if($sourceLanguage === null)
            $sourceLanguage = Yii::app()->sourceLanguage;
        
        if(empty($sourceLanguage))
            throw new CException(TranslateModule::t('Source language must be defined'));
        
        if($targetLanguage === $sourceLanguage)
            throw new CException(TranslateModule::t('targetLanguage must be different than sourceLanguage'));
        
        if(is_array($message)) 
        {	
        	$translated = array();
        	$messageChunk = array();
        	$messageLength = 0;
        	foreach($message as $m) 
        	{
        		$m = strval($m);
        		$messageLength += strlen($m);
        		if($messageLength > self::GOOGLE_TRANSLATE_MAX_CHARS) 
        		{
        			if(empty($messageChunk))
						$this->_throwCharLimitException($messageLength, self::GOOGLE_TRANSLATE_MAX_CHARS);
        			
        			$query = $this->_googleTranslate($messageChunk, $targetLanguage, $sourceLanguage);
        			if($query === false)
        				return false;
        			$translated = CMap::mergeArray($translated, $query);
        			
        			$messageLength = 0;
        			$messageChunk = array();
        		} 
        		else 
        		{
        			$messageChunk[] = $m;
        		}
        	}

        	if(!empty($messageChunk)) 
        	{
        		$query = $this->_googleTranslate($messageChunk, $targetLanguage, $sourceLanguage);
        		if($query === false)
        			return false;
        		
        		$translated = CMap::mergeArray($translated, $query);
        	}
        	
        } 
        else 
        {
        	$msg = strval($message);
			if(strlen($msg) > self::GOOGLE_TRANSLATE_MAX_CHARS)
				$this->_throwCharLimitException(strlen($msg), self::GOOGLE_TRANSLATE_MAX_CHARS);
			
			$translated = $this->_googleTranslate($msg, $targetLanguage, $sourceLanguage);
        }
        
        return $translated;
    }
    
    protected function _throwCharLimitException($charsInRequest, $maxChars) 
    {
    	throw new CException(TranslateModule::t(
    			'The message requested to be translated is {messageLength} characters long. A maximum of {characters} characters is allowed.',
    			array('{characters}' => $maxChars, '{messageLength}' => $charsInRequest)));
    }
    
    protected function _googleTranslate(&$messages, &$targetLanguage = null, &$sourceLanguage = null) 
    {
    	if(is_array($targetLanguage)) 
    	{
    		$translated = array();
    		foreach($targetLanguage as $language) 
    		{
    			$language = strval($language);
    			$query = $this->queryGoogle(array('q' => $messages, 'source' => $sourceLanguage, 'target' => $language));
    	
    			if($query === false) 
    			{
    				$translated[$language] = false;
    			} 
    			else 
    			{
    				foreach($query['translations'] as $translation)
    					$translated[$language][] = $translation['translatedText'];
    			}
    		}
    	} 
    	else 
    	{
    		$query = $this->queryGoogle(array('q' => $messages, 'source' => $sourceLanguage, 'target' => $targetLanguage));
    	
    		if($query === false) 
    		{
    			$translated = false;
    		} 
    		else 
    		{
    			$translated = array();
    			foreach($query['translations'] as $translation)
    				$translated[] = $translation['translatedText'];
    		}
    	}

    	return $translated;
    }

    /**
     * query google translate api 
     * 
     * @param array $args
     * @param string $method the method to use, use null to translate
     * accepted values are null(translate), "languages" and "detect"
     * @return stdClass the google response object
     */
    protected function queryGoogle($args = array()) 
    {
        if(!isset($args['key']))
        {
        	if(empty($this->googleApiKey))
            	throw new CException(TranslateModule::t('You must provide your google api key in option googleApiKey'));
        	$args['key'] = $this->googleApiKey;
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
	            	Yii::log('Failed to set cURL options.', CLogger::LEVEL_ERROR, self::ID);
	            }
	            curl_close($curl);
            }
            else
            {
            	Yii::log('Failed to initialize cURL.', CLogger::LEVEL_ERROR, self::ID);
            }
        } 
        else 
        {
        	Yii::log('cURL extension not found. Falling back to file_get_contents() to read Google translation query response.', CLogger::LEVEL_INFO, self::ID);
            $trans = file_get_contents($url);
        }

        if(!$trans)
        {
        	Yii::log('Failed to query Google for message translation. Args: ' . print_r($args, true), CLogger::LEVEL_WARNING, self::ID);
            return false;
        }
        
        $trans = CJSON::decode($trans);
        
        if(isset($trans['error'])) 
        {
            Yii::log('Google translate error: '.$trans['error']['code'].'. '.$trans['error']['message'], CLogger::LEVEL_ERROR, self::ID);
            return false;
        } 
        elseif(!isset($trans['data'])) 
        {
            Yii::log('Google translate error: '.print_r($trans, true), CLogger::LEVEL_ERROR, self::ID);
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
    			$form .= CHtml::hiddenField(self::ID."-missing[$index][$name]", $value);
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
    	return $this->_ajaxDialog(TranslateModule::t($label), 'translate/translate/missingOnPage', $title, $type, array('data' => array(self::ID.'-missing' => $this->_messages)));
    }
    
    private function _ajaxDialog($label, $url, $title = null, $type = 'link', $ajaxOptions = array())
    {
    	$id = self::ID.'-dialog';
    
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
    
    /**
     * helper so you can use MPTransalate::someMethod($args) 
     * 
     * php 5.3 only
     * 
     * @param mixed $method
     * @param mixed $args
     * @return mixed
     */
    static function __callStatic($method, $args){
        return call_user_func_array(array(TranslateModule::translator(), $method), $args);
    }
    
}