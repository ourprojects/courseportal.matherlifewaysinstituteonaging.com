<?php

class TViewSource extends CApplicationComponent
{
	
	const ID = 'modules.translate.TViewRenderer';
	
	public $routeTable = '{{translate_route}}';
	
	public $routeViewTable = '{{translate_route_view}}';
	
	public $viewSourceTable = '{{translate_view_source}}';
	
	public $viewTable = '{{translate_view}}';
	
	public $viewMessageTable = '{{translate_view_message}}';
	
	/**
	 * @var string the ID of the database connection application component. Defaults to 'db'.
	 */
	public $connectionID = 'db';
	
	public $cachingDuration = 0;
	
	public $enableProfiling = false;
	
	private $_messageSource;
	
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
	
	/**
	 * Returns the command builder used by this AR.
	 * @return CDbCommandBuilder the command builder used by this AR
	 */
	public function getCommandBuilder()
	{
		return $this->getDbConnection()->getSchema()->getCommandBuilder();
	}
	
	/**
	 * Returns the component used for message source.
	 * @return TMessageSource the message source component.
	 */
	public function getMessageSource()
	{
		if($this->_messageSource === null)
		{
			$this->_messageSource = Yii::app()->getMessages();
			if(!$this->_messageSource instanceof TMessageSource)
				throw new CException('The application configured message source component is invalid. TViewSource is only compatible with message source components of type TMessageSource. Please check your configuration for the messages component.');
		}
		return $this->_messageSource;
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
		$cmd = $this->getCommandBuilder()->createSqlCommand(
				"SELECT vst.path source_path, vt.path view_path " .
				"FROM $this->routeTable rt " .
				"JOIN $this->routeViewTable rvt ON (rt.id=rvt.route_id) " .
				"JOIN $this->viewSourceTable vst ON (rvt.view_id=vst.id) " .
				"JOIN $this->viewTable vt ON (vst.id=vt.id) " .
				"LEFT JOIN $this->viewMessageTable vmt ON (vst.id=vmt.view_id) " .
				"LEFT JOIN {$this->getMessageSource()->translatedMessageTable} tmt ON (vmt.message_id=tmt.id AND tmt.language=vt.language) " .
				"WHERE (rt.route=:route AND vt.language=:language AND (tmt.last_modified IS NULL OR tmt.last_modified < vt.created)) " .
				"GROUP BY vst.id", 
				array(':route' => $route, ':language' => $language));

		$views = array();
		foreach($cmd->queryAll() as $row)
		{
			if($row['source_path'] !== null)
				$views[$row['source_path']] = $row['view_path'];
		}

		return $views;
	}

	public function getViewMessages($viewId)
	{
		return $this->getCommandBuilder()->createSqlCommand(
				"SELECT smt.id id, smt.message message " .
				"FROM {$this->getMessageSource()->sourceMessageTable} smt " .
				"JOIN $this->viewMessageTable vmt ON (vmt.message_id=smt.id) " .
				"WHERE (vmt.view_id=:view_id)", 
				array(':view_id' => $viewId))
			->queryAll();
	}
	
	public function getView($route, $sourcePath, $language)
	{
		return $this->getCommandBuilder()->createSqlCommand(
				"SELECT MIN(rt.id) route_id, vst.id view_id, vt.path path, vmt.message_id, MAX(COALESCE(tmt.last_modified, '9999-99-99 99:99:99')) last_modified " .
				"FROM $this->viewSourceTable vst " .
				"LEFT JOIN $this->routeViewTable rvt ON (vst.id=rvt.view_id) " .
				"LEFT JOIN $this->routeTable rt ON (rvt.route_id=rt.id AND rt.route=:route) " .
				"LEFT JOIN $this->viewTable vt ON (vst.id=vt.id AND vt.language=:language) " .
				"LEFT JOIN $this->viewMessageTable vmt ON (vst.id=vmt.view_id) " .
				"LEFT JOIN {$this->getMessageSource()->translatedMessageTable} tmt ON (vmt.message_id=tmt.id AND tmt.language=vt.language) " .
				"WHERE (vst.path=:source_path)",
				array(':route' => $route, ':source_path' => $sourcePath, ':language' => $language))
			->queryRow();
	}
	
	public function getViewId($sourcePath, $viewPath)
	{
		return $this->getCommandBuilder()->createSqlCommand(
				"SELECT t1.id id " .
				"FROM $this->viewSourceTable t1 " .
				"JOIN $this->viewTable t2 ON (t1.id=t2.id) " .
				"WHERE (t1.path=:source_path AND t2.path=:compiled_path)",
				array(':source_path' => $sourcePath, ':compiled_path' => $viewPath))
			->queryScalar();
	}
	
	public function getRouteId($route)
	{
		return $this->getCommandBuilder()->createSqlCommand(
					"SELECT rt.id id " .
					"FROM $this->routeTable rt " .
					"WHERE (rt.route=:route)",
					array(':route' => $route))
				->queryScalar();
	}

	public function addView($id, $path, $language)
	{
		$args = array('id' => $id, 'path' => $path, 'language' => $language);
		if($this->getCommandBuilder()->createInsertCommand($this->viewTable, $args)->execute() > 0)
			return $args;
		return null;
	}

	public function addViewSource($path)
	{
		$builder = $this->getCommandBuilder();
		if($builder->createInsertCommand($this->viewSourceTable, array('path' => $path))->execute())
			return $builder->getLastInsertID($this->viewSourceTable);
		return null;
	}
	
	public function addRoute($route)
	{
		$builder = $this->getCommandBuilder();
		if($builder->createInsertCommand($this->routeTable, array('route' => $route))->execute())
			return $builder->getLastInsertID($this->routeTable);
		return null;
	}
	
	public function addViewRoute($routeId, $viewId)
	{
		$args = array('route_id' => $routeId, 'view_id' => $viewId);
		if($this->getCommandBuilder()->createInsertCommand($this->routeViewTable, $args)->execute() > 0)
			return $args;
		return null;
	}

	public function addViewMessage($viewId, $messageId)
	{
		$args = array('view_id' => $viewId, 'message_id' => $messageId);
		if($this->getCommandBuilder()->createInsertCommand($this->viewMessageTable, $args)->execute() > 0)
			return $args;
		return null;
	}
	
	public function deleteViewMessages($viewId, $messageIds)
	{
		if(empty($messageIds))
			return 0;
		$builder = $this->getCommandBuilder();
		return $builder->createDeleteCommand($this->viewMessageTable, $builder->createColumnCriteria($this->viewMessageTable, array('view_id' => $viewId))->addInCondition('message_id', $messageIds))->execute();
	}
	
	public function updateViewCompleted($viewId, $language, $completed = 1)
	{
		$builder = $this->getCommandBuilder();
		return $builder->createUpdateCommand($this->viewTable, array('completed' => $completed), $builder->createCriteria()->addColumnCondition(array('id' => $viewId, 'language' => $language)))->execute();
	}

	public function updateViewCreated($viewId, $language, $created = null, $completed = 1)
	{
		if($created === null)
			$created = date('Y-m-d H:i:s');
		$builder = $this->getCommandBuilder();
		return $builder->createUpdateCommand($this->viewTable, array('created' => $created, 'completed' => $completed), $builder->createCriteria()->addColumnCondition(array('id' => $viewId, 'language' => $language)))->execute();
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