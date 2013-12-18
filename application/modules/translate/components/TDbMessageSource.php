<?php

class TDbMessageSource extends CDbMessageSource
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
	 * @var boolean If true a file lock will be used to ensure only 1 missing translation event per request is fired at a time.
	 */
	public $synchronizeEvents = true;
	
	/**
	 * @var integer The permissions to set for the translate synchronization locking file.
	 */
	public $eventSyncLockFilePermissions = 0700;
	
	/**
	 * @var string the translation synchronization locking file
	 */
	private $_eventSyncLockFile;

	/**
	 * @var array Cached message translation in the format 'message' => 'translation'
	 */
	private $_messages = array();

	/**
	 * @var integer The database ID of the language of the source messages
	*/
	private $_languageId;
	
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
				case 'sourcemessagetable':
					return $this->getDbConnection()->getSchema()->getTable($this->sourceMessageTable) !== null ? true : 'The table could not be found.';
				case 'translatedmessagetable':
					return $this->getDbConnection()->getSchema()->getTable($this->translatedMessageTable) !== null ? true : 'The table could not be found.';
				case 'languagetable':
					return $this->getDbConnection()->getSchema()->getTable($this->languageTable) !== null ? true : 'The table could not be found.';
				case 'acceptedlanguagetable':
					return $this->getDbConnection()->getSchema()->getTable($this->acceptedLanguageTable) !== null ? true : 'The table could not be found.';
				case 'categorytable':
					return $this->getDbConnection()->getSchema()->getTable($this->categoryTable) !== null ? true : 'The table could not be found.';
				case 'categorymessagetable':
					return $this->getDbConnection()->getSchema()->getTable($this->categoryMessageTable) !== null ? true : 'The table could not be found.';
				case 'messagecategory':
					return is_string($this->messageCategory) ? true : 'Must be a string.';
				case 'enableprofiling':
					return is_bool($this->enableProfiling) ? true : 'Must be a boolean value, true or false.';
				case 'synchronizeevents':
					return is_bool($this->synchronizeEvents) ? true : 'Must be a boolean value, true or false.';
				case 'eventsynclockfilepermissions':
					return is_int($this->eventSyncLockFilePermissions) ? true : 'Must be a valid integer representation of an octal file permission.';
				case 'eventsynclockfile':
					return file_exists($this->getEventSyncLockFile()) ? true : 'File not found.';
				case 'connectionid':
					return Yii::app()->getComponent($this->connectionID) !== null ? true : 'Component not found.';
				case 'cachingduration':
					return is_int($this->cachingDuration) ? true : 'Must be an integer';
				case 'cacheid':
					return $this->cacheID === false || $this->getCache() !== null ? true : 'Component not found.';
				case 'forcetranslation':
					return is_bool($this->forceTranslation) ? true : 'Must be a boolean value, true or false.';
				case 'language':
					return is_string($this->getLanguage()) ? true : 'Must be a valid language code string value.';
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
	 *
	 * @param string $path The path to the lock file to use for translation synchronization.
	 * @throws CException Thrown if any errors occur setting up the translation synchronization locking file.
	 */
	public function setEventSyncLockFile($path)
	{
		if(is_dir($pathDir = dirname($path)) === false)
		{
			if(file_exists($pathDir))
			{
				throw new CException(TranslateModule::t("The translation syncronization locking directory '{dir}' exists, but is not a directory. Your translation syncronization locking path may be corrupted.", array('{dir}' => $pathDir)));
			}
			else if(mkdir($pathDir, $this->eventSyncLockFilePermissions, true) === false)
			{
				throw new CException(TranslateModule::t("The translation syncronization locking directory '{dir}' does not exist and could not be created.", array('{dir}' => $pathDir)));
			}
		}
		$fh = fopen($path, 'c');
		if($fh === false)
		{
			throw new CException(TranslateModule::t("The translation syncronization lock file '{path}' could not be opened.", array('{path}' => $this->getEventSyncLockFile())));
		}
		fclose($fh);
		@chmod($path, $this->eventSyncLockFilePermissions);
		$this->_eventSyncLockFile = $path;
	}
	
	/**
	 *
	 * @return string The path of the translation synchronization locking file.
	 */
	public function getEventSyncLockFile()
	{
		if(!isset($this->_eventSyncLockFile))
		{
			$this->setEventSyncLockFile(TranslateModule::getRuntimePath().DIRECTORY_SEPARATOR.'locks'.DIRECTORY_SEPARATOR.'translate.lock');
		}
		return $this->_eventSyncLockFile;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see ITMessageSource::getIsInstalled()
	 */
	public function getIsInstalled()
	{
		$schema = $this->getDbConnection()->getSchema();
		return $schema->getTable($this->languageTable) !== null &&
			$schema->getTable($this->acceptedLanguageTable) !== null &&
			$schema->getTable($this->categoryTable) !== null &&
			$schema->getTable($this->categoryMessageTable) !== null &&
			$schema->getTable($this->sourceMessageTable) !== null &&
			$schema->getTable($this->translatedMessageTable) !== null;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see ITMessageSource::install()
	 */
	public function install($reinstall = false)
	{
		if(!$reinstall && $this->isInstalled())
		{
			return TranslateModule::OVERWRITE; // Already installed
		}
		
		$tableNames = array(
			$this->languageTable => $this->languageTable,
			$this->acceptedLanguageTable => $this->acceptedLanguageTable,
			$this->categoryTable => $this->categoryTable,
			$this->categoryMessageTable => $this->categoryMessageTable,
			$this->sourceMessageTable => $this->sourceMessageTable,
			$this->translatedMessageTable => $this->translatedMessageTable);
		
		$db = $this->getDbConnection();
		if($db->tablePrefix !== null)
		{
			foreach($tableNames as &$name)
			{
				if(strpos($name, '{{') !== false)
				{
					$name = preg_replace('/\{\{(.*?)\}\}/', $db->tablePrefix.'$1', $name);
				}
			}
		}
		
		$transaction = $db->beginTransaction();
		$schema = $db->getSchema();
		try
		{
			$schema->checkIntegrity(false);
			$sql = '';
			// Drop the tables if they exist
			foreach($tableNames as $table)
			{
				if(($table = $schema->getTable($table)) !== null)
				{
					$sql .= $schema->dropTable($table->name).';';
				}
			}
		
			// Create tables
			$sql .= $schema->createTable(
				$tableNames[$this->languageTable],
				array(
					'id' => 'pk',
					'code' => 'varchar(16) NOT NULL',
					'UNIQUE KEY '.$schema->quoteColumnName('code').' ('.$schema->quoteColumnName('code').')'
				)
			).';';
			
			$sql .= $schema->createTable(
				$tableNames[$this->acceptedLanguageTable],
				array(
					'id' => 'pk',
				)
			).';';
		
			$sql .= $schema->createTable(
				$tableNames[$this->categoryTable],
				array(
					'id' => 'pk',
					'category' => 'varchar(255) NOT NULL',
					'UNIQUE KEY '.$schema->quoteColumnName('category').' ('.$schema->quoteColumnName('category').')'
				)
			).';';
		
			$sql .= $schema->createTable(
				$tableNames[$this->categoryMessageTable],
				array(
					'category_id' => 'integer NOT NULL',
					'message_id' => 'integer NOT NULL',
					'PRIMARY KEY ('.$schema->quoteColumnName('category_id').','.$schema->quoteColumnName('message_id').'),'.
					'KEY '.$schema->quoteColumnName('message_id').' ('.$schema->quoteColumnName('message_id').')'
				)
			).';';
				
			$sql .= $schema->createTable(
				$tableNames[$this->sourceMessageTable],
				array(
					'id' => 'pk',
					'language_id' => 'integer NOT NULL',
					'message' => 'text',
					'KEY '.$schema->quoteColumnName('language_id').' ('.$schema->quoteColumnName('language_id').')'
				)
			).';';
				
			$sql .= $schema->createTable(
				$tableNames[$this->translatedMessageTable],
				array(
					'id' => 'integer NOT NULL',
					'language_id' => 'integer NOT NULL',
					'translation' => 'text',
					'last_modified' => 'integer NOT NULL',
					'PRIMARY KEY ('.$schema->quoteColumnName('id').','.$schema->quoteColumnName('language_id').'),'.
					'KEY '.$schema->quoteColumnName('last_modified').' ('.$schema->quoteColumnName('last_modified').'),'.
					'KEY '.$schema->quoteColumnName('language_id').' ('.$schema->quoteColumnName('language_id').')'
				)
			).';';
		
			// Add foreign key constraints
			$sql .= $schema->addForeignKey(
				$tableNames[$this->acceptedLanguageTable].'_fk_1',
				$tableNames[$this->acceptedLanguageTable],
				'id',
				$tableNames[$this->languageTable],
				'id',
				'CASCADE',
				'CASCADE').';';
				
			$sql .= $schema->addForeignKey(
				$tableNames[$this->categoryMessageTable].'_fk_1',
				$tableNames[$this->categoryMessageTable],
				'message_id',
				$tableNames[$this->sourceMessageTable],
				'id',
				'CASCADE',
				'CASCADE').';';
		
			$sql .= $schema->addForeignKey(
				$tableNames[$this->categoryMessageTable].'_fk_2',
				$tableNames[$this->categoryMessageTable],
				'category_id',
				$tableNames[$this->categoryTable],
				'id',
				'CASCADE',
				'CASCADE').';';
				
			$sql .= $schema->addForeignKey(
				$tableNames[$this->translatedMessageTable].'_fk_1',
				$tableNames[$this->translatedMessageTable],
				'id',
				$tableNames[$this->sourceMessageTable],
				'id',
				'CASCADE',
				'CASCADE').';';
				
			$sql .= $schema->addForeignKey(
				$tableNames[$this->translatedMessageTable].'_fk_2',
				$tableNames[$this->translatedMessageTable],
				'language_id',
				$tableNames[$this->languageTable],
				'id',
				'CASCADE',
				'CASCADE').';';
			
			$sql .= $schema->addForeignKey(
				$tableNames[$this->sourceMessageTable].'_fk_2',
				$tableNames[$this->sourceMessageTable],
				'language_id',
				$tableNames[$this->languageTable],
				'id',
				'CASCADE',
				'CASCADE').';';
		
			$db->createCommand($sql)->execute();
		
			$schema->checkIntegrity(true);
				
			$transaction->commit();
		}
		catch(Exception $ex)
		{
			$transaction->rollback();
			return TranslateModule::ERROR;
		}
		
		return TranslateModule::SUCCESS;
	}

	public function setLanguage($language)
	{
		parent::setLanguage($language);
		$this->_languageId = null;
	}
	
	/**
	 * Gets whether caching is enabled for this message source.
	 *
	 * @return boolean True if caching is enabled false otherwise.
	 */
	public function getIsCachingEnabled()
	{
		return $this->getCache() !== null;
	}
	
	/**
	 * Flushes the cache component used by this message source if it is configured.
	 */
	public function flushCache()
	{
		if(($cache = $this->getCache()) !== null)
		{
			$cache->flush();
		}
	}

	/**
	 * Returns the cache component used by this message source or null if no cache has been configured.
	 * 
	 * @return ICache The cache component used by this message source or null if no cache has been configured.
	 */
	protected function getCache()
	{
		return $this->cachingDuration > 0 && $this->cacheID !== false ? Yii::app()->getComponent($this->cacheID) : null;
	}

	/**
	 * Returns the string ID of the message source component used by this message source.
	 * 
	 * @param string $category
	 * @param string $language
	 * @return string The ID of the cache to use for this message source.
	 */
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
		$languageId = $this->getSourceLanguageId();
		if($languageId !== false && $this->getDbConnection()->createCommand()->insert($this->sourceMessageTable, array('message' => $message, 'language_id' => $languageId)) > 0)
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
		if($languageId !== false && $this->getDbConnection()->createCommand()->insert($this->translatedMessageTable, array('id' => $sourceMessageId, 'language_id' => $languageId, 'translation' => $translation, 'last_modified' => time())) > 0)
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

		if($this->synchronizeEvents)
		{
			$fh = fopen($this->getEventSyncLockFile(), 'c');
			if($fh === false)
			{
				throw new CException(TranslateModule::t("The translation syncronization lock file '{path}' could not be opened.", array('{path}' => $this->getEventSyncLockFile())));
			}
			if(flock($fh, LOCK_EX) === false)
			{
				throw new CException(TranslateModule::t("Failed to acquire a lock on the translation syncronization lock file '{path}'.", array('{path}' => $this->getEventSyncLockFile())));
			}
			$translation = parent::translate($category, $message, $language);
			flock($fh, LOCK_UN);
			fclose($fh);
		}
		else
		{
			$translation = parent::translate($category, $message, $language);
		}

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
			$this->invalidateCache($category, $language);
			return $this->_messages[$key][$message] = $event->message;
		}

		return $message;
	}
	
	/**
	 * Invalidates the current cache. This must be called if a translation changes while caching is enabled.
	 * 
	 * @param string $category the category of the message that has invalidated the cache.
	 * @param unknown $language the language of the message that has invalidated the cache.
	 */
	public function invalidateCache($category, $language)
	{
		if(($cache = $this->getCache()) !== null)
		{
			$cache->delete($this->getCacheKey($category, $language));
		}
	}

}