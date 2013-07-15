<?php

class TViewSource extends CApplicationComponent
{
	
	const ID = 'modules.translate.TViewSource';
	
	public $routeTable = '{{translate_route}}';
	
	public $routeViewTable = '{{translate_route_view}}';
	
	public $viewSourceTable = '{{translate_view_source}}';
	
	public $viewTable = '{{translate_view}}';
	
	public $viewMessageTable = '{{translate_view_message}}';
	
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
				throw new CException(Yii::t(self::ID, 'TViewSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.',
						array('{id}' => $this->connectionID)));
		}
		return $this->_db;
	}

	protected function getCache()
	{
		return $this->cachingDuration > 0 && $this->cacheID !== false ? Yii::app()->getComponent($this->cacheID) : null;
	}

	protected function getCacheKey($route, $language)
	{
		return self::ID.'.views.'.$route.'.'.$language;
	}

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
	
	protected function loadViewsFromDb($route, $language)
	{
		$messageSource = TranslateModule::translator()->getMessageSource();
		$cmd = $this->getDbConnection()->createCommand()
				->select(array('vst.path AS source_path', 'vt.path AS view_path'))
				->from($this->routeTable.' rt')
				->join($this->routeViewTable.' rvt', 'rt.id=rvt.route_id')
				->join($this->viewSourceTable.' vst', 'rvt.view_id=vst.id')
				->join($this->viewTable.' vt', 'vst.id=vt.id')
				->join($messageSource->languageTable.' lt', array('and', 'vt.language_id=lt.id', 'lt.code=:language'), array(':language' => $language))
				->leftJoin($this->viewMessageTable.' vmt', 'vst.id=vmt.view_id')
				->leftJoin($messageSource->translatedMessageTable.' tmt', array('and', 'vmt.message_id=tmt.id', 'tmt.language_id=vt.language_id'))
				->where(array('and', 'rt.route=:route', array('or', 'tmt.last_modified IS NULL', 'tmt.last_modified < vt.created')), array(':route' => $route))
				->group('vst.id');

		$views = array();
		foreach($cmd->queryAll() as $row)
		{
			if($row['source_path'] !== null)
				$views[$row['source_path']] = $row['view_path'];
		}

		return $views;
	}

	public function addSourceView($path)
	{
		return $this->getDbConnection()->createCommand()->insert($this->viewSourceTable, array('path' => $path)) > 0
				? $this->getDbConnection()->getLastInsertID($this->viewSourceTable)
				: null;
	}
	
	public function addRoute($route)
	{
		return $this->getDbConnection()->createCommand()->insert($this->routeTable, array('route' => $route)) > 0
				? $this->getDbConnection()->getLastInsertID($this->routeTable)
				: null;
	}
	
	public function addViewToRoute($viewId, $route, $createRouteIfNotExists = false)
	{
		return (($routeId = $this->getRouteId($route, $createRouteIfNotExists)) !== false
					&& $this->getDbConnection()->createCommand()->insert($this->routeViewTable, array('route_id' => $routeId , 'view_id' => $viewId)) > 0)
				? $routeId
				: null;
	}

	public function addSourceMessageToView($viewId, $message, $createMessageIfNotExists = false)
	{
		return (($messageId = TranslateModule::translator()->getMessageSource()->getSourceMessageId($message, $createMessageIfNotExists)) !== false
					&& $this->getDbConnection()->createCommand()->insert($this->viewMessageTable, array('view_id' => $viewId, 'message_id' => $messageId)) > 0)
				? $messageId
				: null;
	}
	
	public function addView($sourceViewId, $path, $languageId)
	{
		$args = array('id' => $sourceViewId, 'language_id' => $languageId, 'path' => $path);
		return ($this->getDbConnection()->createCommand()->insert($this->viewTable, $args) > 0)
				? $args
				: null;
	}
	
	public function getRouteId($route, $createIfNotExists = false)
	{
		$routeId = $this->getDbConnection()->createCommand()
							->select('rt.id AS id')
							->from($this->routeTable.' rt')
							->where('rt.route=:route', array(':route' => $route))
					->queryScalar();
		
		return $routeId === false && $createIfNotExists && ($routeId = $this->addRoute($route)) === null ? false : $routeId;
	}
	
	public function getViewMessages($viewId)
	{
		return $this->getDbConnection()->createCommand()
						->select(array('smt.id AS id', 'smt.message AS message'))
						->from(TranslateModule::translator()->getMessageSource()->sourceMessageTable.' smt')
						->join($this->viewMessageTable.' vmt', 'vmt.message_id=smt.id')
						->where('vmt.view_id=:view_id', array(':view_id' => $viewId))
					->queryAll();
	}
	
	public function getView($route, $sourcePath, $language, $createSourceViewIfNotExists = false)
	{
		$messageSource = TranslateModule::translator()->getMessageSource();
		$view = $this->getDbConnection()->createCommand()
						->select(array('rt.id AS route_id', 'vst.id AS id', 'lt.id AS language_id', 'vt.path AS path', 'MAX(COALESCE(tmt.last_modified, \'9999-99-99 99:99:99\')) AS last_modified'))
						->from($this->viewSourceTable.' vst')
						->leftJoin($this->routeViewTable.' rvt', 'vst.id=rvt.view_id')
						->leftJoin($this->routeTable.' rt', array('and', 'rvt.route_id=rt.id', 'rt.route=:route'), array(':route' => $route))
						->leftJoin($messageSource->languageTable.' lt', 'lt.code=:code', array(':code' => $language))
						->leftJoin($this->viewTable.' vt', array('and', 'vst.id=vt.id', 'vt.language_id=lt.id'))
						->leftJoin($this->viewMessageTable.' vmt', 'vst.id=vmt.view_id')
						->leftJoin($messageSource->translatedMessageTable.' tmt', array('and', 'vmt.message_id=tmt.id', 'tmt.language_id=vt.language_id'))
						->where('vst.path=:source_path', array(':source_path' => $sourcePath))
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
	
	public function deleteViewMessages($viewId, $messageIds)
	{
		return empty($messageIds) ? 0 : $this->getDbConnection()->createCommand()->delete($this->viewMessageTable, array('and', 'view_id=:view_id', array('in', 'message_id', $messageIds)), array(':view_id' => $viewId));
	}

	public function updateViewCreated($viewId, $languageId, $created = null)
	{
		return $this->getDbConnection()->createCommand()->update($this->viewTable, array('created' => $created === null ? date('Y-m-d H:i:s') : $created), array('and', 'id=:id', 'language_id=:language_id'), array(':id' => $viewId, ':language_id' => $languageId));
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
		
		if($context instanceof CWidget)
			$context = $context->getController();

		$translatedPath = $this->translateView($context->getRoute(), $realPath, $language);

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