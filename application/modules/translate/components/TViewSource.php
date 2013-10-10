<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class TViewSource extends CApplicationComponent
{
	
	const ID = 'modules.translate.TViewSource';
	
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
	
	/**
	 * @var boolean If true each call to the translate method will be profiled.
	 */
	public $enableProfiling = false;
	
	private $_views = array();
	
	private $_cacheInvalidated = true;
	
	private $_db;
	
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
				throw new CException(Yii::t(self::ID, 'TViewSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.',
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
		return self::ID.'.views.'.$route.'.'.$language;
	}

	/**
	 * Loads and returns the views for a particular route and language from the database.
	 * If caching is enabled and a cache hit occurs the cached views will be returned.
	 * Otehrwise the views are loaded from the database. 
	 * After the views are loaded they will be cached if caching is enabled.
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
				$views[$row['source_path']] = $row['view_path'];
		}

		return $views;
	}

	/**
	 * Adds a source view to the database and returns its database ID.
	 * 
	 * @param string $path The path to the source view
	 * @return string The database ID of the source view or null if the source view could not be added to the database
	 */
	public function addSourceView($path)
	{
		return $this->getDbConnection()->createCommand()->insert($this->viewSourceTable, array('path' => $path)) > 0
				? $this->getDbConnection()->getLastInsertID($this->viewSourceTable)
				: null;
	}
	
	/**
	 * Adds a route to the database and returns its database ID
	 *
	 * @param string $route The name of the route
	 * @return string The database ID of the route or null if the route could not be added to the database
	 */
	public function addRoute($route)
	{
		return $this->getDbConnection()->createCommand()->insert($this->routeTable, array('route' => $route)) > 0
				? $this->getDbConnection()->getLastInsertID($this->routeTable)
				: null;
	}
	
	/**
	 * 
	 * @param integer $viewId
	 * @param string $route
	 * @param boolean $createRouteIfNotExists
	 * @return string
	 */
	public function addViewToRoute($viewId, $route, $createRouteIfNotExists = false)
	{
		return (($routeId = $this->getRouteId($route, $createRouteIfNotExists)) !== false
					&& $this->getDbConnection()->createCommand()->insert($this->routeViewTable, array('route_id' => $routeId , 'view_id' => $viewId)) > 0)
				? $routeId
				: null;
	}

	/**
	 * 
	 * @param integer $viewId
	 * @param string $message
	 * @param boolean $createMessageIfNotExists
	 * @return string
	 */
	public function addSourceMessageToView($viewId, $message, $createMessageIfNotExists = false)
	{
		return (($messageId = TranslateModule::translator()->getMessageSourceComponent()->getSourceMessageId($message, $createMessageIfNotExists)) !== false
					&& $this->getDbConnection()->createCommand()->insert($this->viewMessageTable, array('view_id' => $viewId, 'message_id' => $messageId)) > 0)
				? $messageId
				: null;
	}
	
	/**
	 * 
	 * @param integer $sourceViewId
	 * @param string $path
	 * @param integer $languageId
	 * @return string
	 */
	public function addView($sourceViewId, $path, $languageId)
	{
		$args = array('id' => $sourceViewId, 'language_id' => $languageId, 'path' => $path);
		return ($this->getDbConnection()->createCommand()->insert($this->viewTable, $args) > 0)
				? $args
				: null;
	}
	
	/**
	 * 
	 * @param string $route
	 * @param boolean $createIfNotExists
	 * @return string
	 */
	public function getRouteId($route, $createIfNotExists = false)
	{
		$db = $this->getDbConnection();
		$routeId = $db->createCommand()
							->select('rt.id AS id')
							->from($this->routeTable.' rt')
							->where($db->quoteColumnName('rt.route').'=:route', array(':route' => $route))
					->queryScalar();
		
		return $routeId === false && $createIfNotExists && ($routeId = $this->addRoute($route)) === null ? false : $routeId;
	}
	
	/**
	 * 
	 * @param integer $viewId
	 * @return array
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
	 * 
	 * @param string $route
	 * @param string $sourcePath
	 * @param string $language
	 * @param boolean $createSourceViewIfNotExists
	 * @return array
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
	 * 
	 * @param integer $viewId
	 * @param integer $messageIds
	 * @return integer
	 */
	public function deleteViewMessages($viewId, $messageIds)
	{
		$db = $this->getDbConnection();
		return empty($messageIds) ? 0 : $db->createCommand()->delete($this->viewMessageTable, array('and', $db->quoteColumnName('view_id').'=:view_id', array('in', 'message_id', $messageIds)), array(':view_id' => $viewId));
	}

	/**
	 * 
	 * @param integer $viewId
	 * @param integer $languageId
	 * @param string $created
	 * @param string $path
	 * @return integer
	 */
	public function updateView($viewId, $languageId, $created, $path)
	{
		$db = $this->getDbConnection();
		return $db->createCommand()->update($this->viewTable, array('created' => $created, 'path' => $path), array('and', $db->quoteColumnName('id').'=:id', $db->quoteColumnName('language_id').'=:language_id'), array(':id' => $viewId, ':language_id' => $languageId));
	}

	/**
	 * Translates a view to the specified language.
	 *
	 * If the view is not found in the translated views, an {@link onMissingViewTranslation}
	 * event will be raised. Handlers can mark this message or do some
	 * default handling. The {@link TMissingViewTranslationEvent::path}
	 * property of the event parameter will be returned.
	 *
	 * @param CBaseController $context the controller or widget who is rendering the view file.
	 * @param string $path the path to the source file to be translated
	 * @param string $language the target language. If null (default), the {@link CApplication::getLanguage application language} will be used.
	 * @return string the path to the translated view
	 */
	public function translate($context, $path, $language = null)
	{
		if($this->enableProfiling)
			Yii::beginProfile(self::ID.'.translate()', self::ID);
		
		if(!is_file($path) || ($realPath = realpath($path)) === false)
			throw new CException(Yii::t(self::ID, 'Source view file "{file}" does not exist.', array('{file}' => $path)));
		
		if($language === null)
			$language = Yii::app()->getLanguage();

		$translatedPath = $this->translateView($context instanceof CController ?  $context->getRoute() : $context->getController()->getRoute(), $realPath, $language);

		if($this->enableProfiling)
			Yii::endProfile(self::ID.'.translate()', self::ID);
		
		return $translatedPath;
	}

	/**
	 * Translates the specified view.
	 * If the translated view is not found, an {@link onMissingViewTranslation}
	 * event will be raised.
	 * @param string $route the requested route that caused this view to need to be translated.
	 * @param string $path the path to the source file to be translated
	 * @param string $language the target language
	 * @return string the path to the translated view
	 */
	protected function translateView($route, $path, $language)
	{
		$key = $route.'.'.$language;
		
		if(!isset($this->_views[$key]))
			$this->_views[$key] = $this->loadViews($route, $language);
		
		if(isset($this->_views[$key][$path]) && @filemtime($path) < @filemtime($this->_views[$key][$path]))
			return $this->_views[$key][$path];

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
	
	/**
	 * Raised when a view cannot be translated.
	 * Handlers may log this view or do some default handling.
	 * The {@link TMissingViewTranslationEvent::path} property
	 * will be returned by {@link translateView}.
	 * @param TMissingViewTranslationEvent $event the event parameter
	 */
	public function onMissingViewTranslation($event)
	{
		$this->raiseEvent('onMissingViewTranslation', $event);
	}
	
}
	
/**
 * TMissingViewTranslationEvent represents the parameter for the {@link TViewSource::onMissingViewTranslation onMissingViewTranslation} event.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * @package modules.translate
 */
class TMissingViewTranslationEvent extends CEvent
{
	
	/**
	 * @var string the path of the source file to be translated
	 */
	public $path;
	/**
	 * @var string the route requesting this view
	 */
	public $route;
	/**
	 * @var string the ID of the language that the source file is to be translated to
	 */
	public $language;

	/**
	 * Constructor.
	 * @param mixed $sender sender of this event
	 * @param string $path the path of the source file to be translated
	 * @param string $route the route requesting this view
	 * @param string $language the ID of the language that the source file is to be translated to
	 */
	public function __construct($sender, $path, $route, $language)
	{
		parent::__construct($sender);
		$this->path = $path;
		$this->route = $route;
		$this->language = $language;
	}
	
}