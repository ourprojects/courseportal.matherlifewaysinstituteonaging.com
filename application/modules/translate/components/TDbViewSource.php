<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class TDbViewSource extends TViewSource
{

	/**
	 * @var string The name of the routes database table.
	 */
	public $routeTable = '{{translate_route}}';

	/**
	 * @var string The name of the route views database table.
	 */
	public $routeViewTable = '{{translate_route_view}}';

	/**
	 * @var string The name of the view sources database table.
	 */
	public $viewSourceTable = '{{translate_view_source}}';

	/**
	 * @var string The name of the views database table.
	 */
	public $viewTable = '{{translate_view}}';

	/**
	 * @var string The name of the view messages database table.
	 */
	public $viewMessageTable = '{{translate_view_message}}';

	/**
	 * @var string The format of timestamp dates in the database used by this view source.
	 */
	public $databaseTimestampFormat = 'Y-m-d H:i:s';

	/**
	 * @var string the ID of the database connection application component. Defaults to 'db'.
	 */
	public $connectionID = 'db';

	/**
	 * @var integer the time in seconds that the messages can remain valid in cache.
	 * Defaults to 0, meaning the caching is disabled.
	 */
	public $cachingDuration = 0;

	/**
	 * @var string the ID of the cache application component that is used to cache the messages.
	 * Defaults to 'cache' which refers to the primary cache application component.
	 * Set this property to false if you want to disable caching the messages.
	 */
	public $cacheID = 'cache';

	private $_views = array();

	private $_cacheInvalidated = true;

	private $_db;
	
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
				case 'routetable':
					return $this->getDbConnection()->getSchema()->getTable($this->routeTable) !== null ? true : 'The table could not be found.';
				case 'routeviewtable':
					return $this->getDbConnection()->getSchema()->getTable($this->routeViewTable) !== null ? true : 'The table could not be found.';
				case 'viewsourcetable':
					return $this->getDbConnection()->getSchema()->getTable($this->viewMessageTable) !== null ? true : 'The table could not be found.';
				case 'viewtable':
					return $this->getDbConnection()->getSchema()->getTable($this->viewSourceTable) !== null ? true : 'The table could not be found.';
				case 'viewmessagetable':
					return $this->getDbConnection()->getSchema()->getTable($this->viewTable) !== null ? true : 'The table could not be found.';
				case 'databasetimestampformat':
					return is_string($this->databaseTimestampFormat) && @date($this->databaseTimestampFormat) !== false ? true : 'This must be a valid PHP date format string.';
				case 'connectionid':
					return Yii::app()->getComponent($this->connectionID) !== null ? true : 'Component not found.';
				case 'cachingduration':
					return is_int($this->cachingDuration) ? true : 'Must be an integer';
				case 'cacheid':
					return $this->cacheID === false || $this->getCache() !== null ? true : 'Component not found.';
				default:
					return parent::checkSetting($setting);
			}
		}
		catch(Exception $e)
		{
			return $e->getMessage();
		}
	}
	
	/**
	 * (non-PHPdoc)
	 * @see TViewSource::getIsInstalled()
	 */
	public function getIsInstalled()
	{
		$schema = $this->getDbConnection()->getSchema();
		return $schema->getTable($this->routeTable) !== null &&
			$schema->getTable($this->routeViewTable) !== null &&
			$schema->getTable($this->viewMessageTable) !== null &&
			$schema->getTable($this->viewSourceTable) !== null &&
			$schema->getTable($this->viewTable) !== null;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see TViewSource::install()
	 */
	public function install($reinstall = false)
	{
		if(!$reinstall && $this->isInstalled())
		{
			return TranslateModule::OVERWRITE; // Already installed
		}
		
		$tableNames = array(
			$this->routeTable => $this->routeTable, 
			$this->routeViewTable => $this->routeViewTable, 
			$this->viewMessageTable => $this->viewMessageTable, 
			$this->viewSourceTable => $this->viewSourceTable, 
			$this->viewTable => $this->viewTable);
		
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
				$tableNames[$this->routeTable],
				array(
					'id' => 'pk',
					'route' => 'varchar(255) NOT NULL',
					'UNIQUE KEY '.$schema->quoteColumnName('route').' ('.$schema->quoteColumnName('route').')'
				)
			).';';
		
			$sql .= $schema->createTable(
				$tableNames[$this->routeViewTable],
				array(
					'route_id' => 'integer NOT NULL',
					'view_id' => 'integer NOT NULL',
					'PRIMARY KEY ('.$schema->quoteColumnName('route_id').','.$schema->quoteColumnName('view_id').'),'.
					'KEY '.$schema->quoteColumnName('view_id').' ('.$schema->quoteColumnName('view_id').')'
				)
			).';';
		
			$sql .= $schema->createTable(
				$tableNames[$this->viewMessageTable],
				array(
					'view_id' => 'integer NOT NULL',
					'message_id' => 'integer NOT NULL',
					'PRIMARY KEY ('.$schema->quoteColumnName('view_id').','.$schema->quoteColumnName('message_id').'),'.
					'KEY '.$schema->quoteColumnName('message_id').' ('.$schema->quoteColumnName('message_id').')'
				)
			).';';
			
			$sql .= $schema->createTable(
				$tableNames[$this->viewSourceTable],
				array(
					'id' => 'pk',
					'path' => 'varchar(255) NOT NULL',
					'UNIQUE KEY '.$schema->quoteColumnName('path').' ('.$schema->quoteColumnName('path').')'
				)
			).';';
			
			$sql .= $schema->createTable(
				$tableNames[$this->viewTable],
				array(
					'id' => 'integer NOT NULL',
					'language_id' => 'integer NOT NULL',
					'path' => 'varchar(255) NOT NULL',
					'created' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
					'PRIMARY KEY ('.$schema->quoteColumnName('id').','.$schema->quoteColumnName('language_id').'),'.
					'UNIQUE KEY '.$schema->quoteColumnName('path').' ('.$schema->quoteColumnName('path').'),'.
					'KEY '.$schema->quoteColumnName('created').' ('.$schema->quoteColumnName('created').'),'.
					'KEY '.$schema->quoteColumnName('language_id').' ('.$schema->quoteColumnName('language_id').')'
				)
			).';';
		
			// Add foreign key constraints
			$sql .= $schema->addForeignKey(
				$tableNames[$this->routeViewTable].'_fk_1',
				$tableNames[$this->routeViewTable],
				'view_id',
				$tableNames[$this->viewSourceTable],
				'id',
				'CASCADE',
				'CASCADE').';';
			
			$sql .= $schema->addForeignKey(
				$tableNames[$this->routeViewTable].'_fk_2',
				$tableNames[$this->routeViewTable],
				'route_id',
				$tableNames[$this->routeTable],
				'id',
				'CASCADE',
				'CASCADE').';';
		
			$sql .= $schema->addForeignKey(
				$tableNames[$this->viewMessageTable].'_fk_1',
				$tableNames[$this->viewMessageTable],
				'view_id',
				$tableNames[$this->viewSourceTable],
				'id',
				'CASCADE',
				'CASCADE').';';
			
			$sql .= $schema->addForeignKey(
				$tableNames[$this->viewMessageTable].'_fk_2',
				$tableNames[$this->viewMessageTable],
				'message_id',
				TranslateModule::translator()->getMessageSourceComponent()->sourceMessageTable,
				'id',
				'CASCADE',
				'CASCADE').';';
			
			$sql .= $schema->addForeignKey(
				$tableNames[$this->viewTable].'_fk_1',
				$tableNames[$this->viewTable],
				'id',
				$tableNames[$this->viewSourceTable],
				'id',
				'CASCADE',
				'CASCADE').';';
			
			$sql .= $schema->addForeignKey(
				$tableNames[$this->viewTable].'_fk_2',
				$tableNames[$this->viewTable],
				'language_id',
				TranslateModule::translator()->getMessageSourceComponent()->languageTable,
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

	/**
	 * Returns the DB connection used for the view source.
	 * @return CDbConnection the DB connection used for the view source.
	 */
	public function getDbConnection()
	{
		if($this->_db === null)
		{
			$this->_db = Yii::app()->getComponent($this->connectionID);
			if(!$this->_db instanceof CDbConnection)
			{
				throw new CException(TranslateModule::t('TDbViewSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.',
						array('{id}' => $this->connectionID)));
			}
		}
		return $this->_db;
	}

	/**
	 * Returns the cache component used by this view source.
	 *
	 * @return CCache The caching component used by this view source or null if caching is disabled.
	 */
	protected function getCache()
	{
		return $this->cachingDuration > 0 && $this->cacheID !== false ? Yii::app()->getComponent($this->cacheID) : null;
	}

	/**
	 * Given a route and a language this method determines the cache key to be used for caching an item.
	 *
	 * @param string $route
	 * @param string $language
	 * @return string The cache key
	 */
	protected function getCacheKey($route, $language)
	{
		return TranslateModule::ID.'.views.'.$route.'.'.$language;
	}

	/**
	 * Loads and returns the views for a particular route and language.
	 *
	 * @param string $route The requested route
	 * @param string $language The requested language
	 * @return array A list of known views for the specified route and language in the form array(source_path => view_path)
	 */
	protected function loadViews($route, $language)
	{
		if(($cache = $this->getCache()) !== null)
		{
			$key = $this->getCacheKey($route, $language);
			$views = $cache->get($key);
			if($views === false)
			{
				$views = $this->loadViewsFromDb($route, $language);
				$cache->set($key, $views, $this->cachingDuration);
			}
		}
		else
		{
			$views = $this->loadViewsFromDb($route, $language);
		}

		return $views;
	}

	/**
	 * Loads and returns the views for a particular route and language from the database.
	 *
	 * @param string $route The requested route
	 * @param string $language The requested language
	 * @return array A list of known views for the specified route and language in the form array(source_path => view_path)
	 */
	protected function loadViewsFromDb($route, $language)
	{
		$messageSource = TranslateModule::translator()->getMessageSourceComponent();
		$db = $this->getDbConnection();
		$cmd = $db->createCommand()
			->select(array('vst.path AS source_path', 'vt.path AS view_path'))
			->from($this->routeTable.' rt')
			->join($this->routeViewTable.' rvt', $db->quoteColumnName('rt.id').'='.$db->quoteColumnName('rvt.route_id'))
			->join($this->viewSourceTable.' vst', $db->quoteColumnName('rvt.view_id').'='.$db->quoteColumnName('vst.id'))
			->join($messageSource->languageTable.' lt', $db->quoteColumnName('lt.code').'=:language', array(':language' => $language))
			->join($this->viewTable.' vt', array('and', $db->quoteColumnName('vst.id').'='.$db->quoteColumnName('vt.id'), $db->quoteColumnName('vt.language_id').'='.$db->quoteColumnName('lt.id')))
			->leftJoin($this->viewMessageTable.' vmt', $db->quoteColumnName('vst.id').'='.$db->quoteColumnName('vmt.view_id'))
			->leftJoin($messageSource->translatedMessageTable.' tmt', array('and', $db->quoteColumnName('vmt.message_id').'='.$db->quoteColumnName('tmt.id'), $db->quoteColumnName('tmt.language_id').'='.$db->quoteColumnName('vt.language_id')))
			->where(array('and', $db->quoteColumnName('rt.route').'=:route', array('or', $db->quoteColumnName('tmt.last_modified').' IS NULL', $db->quoteColumnName('tmt.last_modified').'<'.$db->quoteColumnName('vt.created'))), array(':route' => $route))
			->group('vst.id');

		$views = array();
		foreach($cmd->queryAll() as $row)
		{
			if($row['source_path'] !== null)
			{
				$views[$row['source_path']] = $row['view_path'];
			}
		}

		return $views;
	}

	/**
	 * Adds a source view to this view source and returns the source view's unique identifier.
	 *
	 * @param string $path The path to the source view
	 * @return string|null The unique identifier for the source view or null if the source view could not be added.
	 */
	public function addSourceView($path)
	{
		if($this->getDbConnection()->createCommand()->insert($this->viewSourceTable, array('path' => $path)) > 0)
		{
			return $this->getDbConnection()->getLastInsertID($this->viewSourceTable);
		}
		return null;
	}

	/**
	 * Adds a route to this view source and returns the route's unique identifier.
	 *
	 * @param string $route The name of the route
	 * @return string|null The unique identifier for the route or null if the route could not be added.
	 */
	public function addRoute($route)
	{
		if($this->getDbConnection()->createCommand()->insert($this->routeTable, array('route' => $route)) > 0)
		{
			return $this->getDbConnection()->getLastInsertID($this->routeTable);
		}
		return null;
	}

	/**
	 * Adds a view to a a route.
	 *
	 * @param string $viewId The unique identifier of the view.
	 * @param string $route The name of the route.
	 * @param boolean $createRouteIfNotExists Defaults to False. If True and the route does not already exists then the route will be created.
	 * @return string|null The unique identifier the view was added to or null if the view could not be added to the route.
	 */
	public function addViewToRoute($viewId, $route, $createRouteIfNotExists = false)
	{
		$routeId = $this->getRouteId($route, $createRouteIfNotExists);
		if($routeId !== false && $this->getDbConnection()->createCommand()->insert($this->routeViewTable, array('route_id' => $routeId , 'view_id' => $viewId)) > 0)
		{
			return $routeId;
		}
		return null;
	}

	/**
	 * Adds a source message to a view.
	 *
	 * @param string $viewId The unique identifier of the view.
	 * @param string $message The message to add to the view.
	 * @param boolean $createMessageIfNotExists Defaults to False. If True and the message does not already exists then the message will be created.
	 * @return string
	 */
	public function addSourceMessageToView($viewId, $message, $createMessageIfNotExists = false)
	{
		$messageId = TranslateModule::translator()->getMessageSourceComponent()->getSourceMessageId($message, $createMessageIfNotExists);
		if($messageId !== false && $this->getDbConnection()->createCommand()->insert($this->viewMessageTable, array('view_id' => $viewId, 'message_id' => $messageId)) > 0)
		{
			return $messageId;
		}
		return null;
	}

	/**
	 * Adds a translated view.
	 *
	 * @param string $sourceViewId The unique identifier of the source view.
	 * @param string $path The path to the translated view.
	 * @param string $languageId The unique identifier of the language the source view has been translated to.
	 * @return string|null The unqiue Identifier of the translated view or null if the translated view could not be added.
	 */
	public function addView($sourceViewId, $path, $languageId)
	{
		$args = array('id' => $sourceViewId, 'language_id' => $languageId, 'path' => $path);
		if($this->getDbConnection()->createCommand()->insert($this->viewTable, $args) > 0)
		{
			return $args;
		}
		return null;
	}

	/**
	 * Gets the unique identifier of a route.
	 *
	 * @param string $route The route name.
	 * @param boolean $createIfNotExists Defaults to False. If True and the route does not already exists then the route will be added.
	 * @return string|null The unqiue identifier of the route or null if the route is not found.
	 */
	public function getRouteId($route, $createIfNotExists = false)
	{
		$db = $this->getDbConnection();
		$routeId = $db->createCommand()
		->select('rt.id')
		->from($this->routeTable.' rt')
		->where($db->quoteColumnName('rt.route').'=:route', array(':route' => $route))
		->queryScalar();

		return ($routeId === false && $createIfNotExists && ($routeId = $this->addRoute($route)) === null) ? false : $routeId;
	}

	/**
	 * Gets all messages associated with a particular view.
	 *
	 * @param string $viewId The unique identifier of the view.
	 * @return array An array of the messages associated with the view.
	 */
	public function getViewMessages($viewId)
	{
		$db = $this->getDbConnection();
		return $db->createCommand()
		->select(array('smt.id AS id', 'smt.message AS message'))
		->from(TranslateModule::translator()->getMessageSourceComponent()->sourceMessageTable.' smt')
		->join($this->viewMessageTable.' vmt', $db->quoteColumnName('vmt.message_id').'='.$db->quoteColumnName('smt.id'))
		->where($db->quoteColumnName('vmt.view_id').'=:view_id', array(':view_id' => $viewId))
		->queryAll();
	}

	/**
	 * Gets a translated view for a particular route, source view, and language.
	 *
	 * @param string $route The name of the route.
	 * @param string $sourcePath The path to the source view.
	 * @param string $language The language of the translated view.
	 * @param boolean $createSourceViewIfNotExists Defaults to False. If True and the source view does not already exists then the source view will be added.
	 * @return array The translated view's meta data as an associative array in the following format array('route_id' => 'route_id', 'source_view_id' => 'source_view_id', 'language_id' => 'language_id', 'translated_view_path' => 'translated_view_path')
	 */
	public function getView($route, $sourcePath, $language, $createSourceViewIfNotExists = false)
	{
		$messageSource = TranslateModule::translator()->getMessageSourceComponent();
		$db = $this->getDbConnection();
		$view = $db->createCommand()
		->select(array('MIN('.$db->quoteColumnName('rt.id').') AS '.$db->quoteColumnName('route_id'), 'vst.id AS id', 'lt.id AS language_id', 'vt.path AS path'))
		->from($this->viewSourceTable.' vst')
		->leftJoin($this->routeViewTable.' rvt', $db->quoteColumnName('vst.id').'='.$db->quoteColumnName('rvt.view_id'))
		->leftJoin($this->routeTable.' rt', array('and', $db->quoteColumnName('rvt.route_id').'='.$db->quoteColumnName('rt.id'), $db->quoteColumnName('rt.route').'=:route'), array(':route' => $route))
		->leftJoin($messageSource->languageTable.' lt', $db->quoteColumnName('lt.code').'=:code', array(':code' => $language))
		->leftJoin($this->viewTable.' vt', array('and', $db->quoteColumnName('vst.id').'='.$db->quoteColumnName('vt.id'), $db->quoteColumnName('vt.language_id').'='.$db->quoteColumnName('lt.id')))
		->where($db->quoteColumnName('vst.path').'=:source_path', array(':source_path' => $sourcePath))
		->queryRow();

		if($createSourceViewIfNotExists)
		{
			if($view['id'] === null)
			{
				if(($view['id'] = $this->addSourceView($sourcePath)) !== null)
				{
					$view['route_id'] = $this->addViewToRoute($view['id'], $route, true);
					$view['language_id'] = $messageSource->getLanguageId($language, true);
				}
			}
			else
			{
				if($view['route_id'] === null)
				{
					$view['route_id'] = $this->addViewToRoute($view['id'], $route, true);
				}

				if($view['language_id'] === null)
				{
					$view['language_id'] = $messageSource->addLanguage($language);
				}
			}
		}

		return $view;
	}

	/**
	 * Disassociates several messages from a view.
	 *
	 * @param string $viewId The unqiue identifier of the view.
	 * @param array $messageIds The unique identifiers of the messages.
	 * @return integer The number of messages that were disassociated from the view.
	 */
	public function deleteViewMessages($viewId, $messageIds)
	{
		$db = $this->getDbConnection();
		return empty($messageIds) ? 0 : $db->createCommand()->delete($this->viewMessageTable, array('and', $db->quoteColumnName('view_id').'=:view_id', array('in', 'message_id', $messageIds)), array(':view_id' => $viewId));
	}

	/**
	 * Update the meta data for a translated view.
	 *
	 * @param string $viewId The unique identifier of the view.
	 * @param string $languageId The unique identifier of the language
	 * @param string $created The time at which the view was created.
	 * @param string $path The path to the view.
	 * @return integer The number of views updated.
	 */
	public function updateView($viewId, $languageId, $created, $path)
	{
		$db = $this->getDbConnection();
		return $db->createCommand()->update($this->viewTable, array('created' => $created, 'path' => $path), array('and', $db->quoteColumnName('id').'=:id', $db->quoteColumnName('language_id').'=:language_id'), array(':id' => $viewId, ':language_id' => $languageId));
	}

	/**
	 * Translates the specified view.
	 * If the translated view is not found, an {@link onMissingViewTranslation}
	 * event will be raised.
	 *
	 * @param string $route the requested route that caused this view to need to be translated.
	 * @param string $path the path to the source file to be translated
	 * @param string $language the target language
	 * @return string the path to the translated view
	 */
	protected function translateView($route, $path, $language)
	{
		$key = $route.'.'.$language;

		if(!isset($this->_views[$key]))
		{
			$this->_views[$key] = $this->loadViews($route, $language);
		}

		if(isset($this->_views[$key][$path]) && @filemtime($path) < @filemtime($this->_views[$key][$path]))
		{
			return $this->_views[$key][$path];
		}

		if($this->hasEventHandler('onMissingViewTranslation'))
		{
			$event = new TMissingViewTranslationEvent($this, $path, $route, $language);
			$this->onMissingViewTranslation($event);
			if(!$this->_cacheInvalidated && ($cache = $this->getCache()) !== null)
			{
				$cache->delete($this->getCacheKey($route, $language));
				$this->_cacheInvalidated = true;
			}
			return $this->_views[$key][$path] = $event->path;
		}

		return $path;
	}

}
