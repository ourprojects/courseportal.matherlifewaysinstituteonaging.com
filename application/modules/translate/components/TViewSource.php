<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
abstract class TViewSource extends CApplicationComponent
{
	
	/**
	 * @var boolean If true each call to the translate method will be profiled.
	 */
	public $enableProfiling = false;
	
	private $_views = array();
	

	/**
	 * Loads and returns the views for a particular route and language.
	 * 
	 * @param string $route The requested route
	 * @param string $language The requested language
	 * @return array A list of known views for the specified route and language in the form array(source_path => view_path)
	 */
	abstract protected function loadViews($route, $language);

	/**
	 * Adds a source view to this view source and returns the source view's unique identifier.
	 * 
	 * @param string $path The path to the source view
	 * @return string|null The unique identifier for the source view or null if the source view could not be added.
	 */
	abstract public function addSourceView($path);
	
	/**
	 * Adds a route to this view source and returns the route's unique identifier.
	 *
	 * @param string $route The name of the route
	 * @return string|null The unique identifier for the route or null if the route could not be added.
	 */
	abstract public function addRoute($route);
	
	/**
	 * Adds a view to a a route.
	 * 
	 * @param string $viewId The unique identifier of the view.
	 * @param string $route The name of the route.
	 * @param boolean $createRouteIfNotExists Defaults to False. If True and the route does not already exists then the route will be created.
	 * @return string|null The unique identifier the view was added to or null if the view could not be added to the route. 
	 */
	abstract public function addViewToRoute($viewId, $route, $createRouteIfNotExists = false);

	/**
	 * Adds a source message to a view.
	 * 
	 * @param string $viewId The unique identifier of the view.
	 * @param string $message The message to add to the view.
	 * @param boolean $createMessageIfNotExists Defaults to False. If True and the message does not already exists then the message will be created.
	 * @return string
	 */
	abstract public function addSourceMessageToView($viewId, $message, $createMessageIfNotExists = false);
	
	/**
	 * Adds a translated view.
	 * 
	 * @param string $sourceViewId The unique identifier of the source view.
	 * @param string $path The path to the translated view.
	 * @param string $languageId The unique identifier of the language the source view has been translated to.
	 * @return string|null The unqiue Identifier of the translated view or null if the translated view could not be added.
	 */
	abstract public function addView($sourceViewId, $path, $languageId);
	
	/**
	 * Gets the unique identifier of a route.
	 * 
	 * @param string $route The route name.
	 * @param boolean $createIfNotExists Defaults to False. If True and the route does not already exists then the route will be added.
	 * @return string|null The unqiue identifier of the route or null if the route is not found.
	 */
	abstract public function getRouteId($route, $createIfNotExists = false);
	
	/**
	 * Gets all messages associated with a particular view.
	 * 
	 * @param string $viewId The unique identifier of the view.
	 * @return array An array of the messages associated with the view.
	 */
	abstract public function getViewMessages($viewId);
	
	/**
	 * Gets a translated view for a particular route, source view, and language.
	 * 
	 * @param string $route The name of the route.
	 * @param string $sourcePath The path to the source view.
	 * @param string $language The language of the translated view.
	 * @param boolean $createSourceViewIfNotExists Defaults to False. If True and the source view does not already exists then the source view will be added.
	 * @return array The translated view's meta data as an associative array in the following format array('route_id' => 'route_id', 'source_view_id' => 'source_view_id', 'language_id' => 'language_id', 'translated_view_path' => 'translated_view_path')
	 */
	abstract public function getView($route, $sourcePath, $language, $createSourceViewIfNotExists = false);
	
	/**
	 * Disassociates several messages from a view.
	 * 
	 * @param string $viewId The unqiue identifier of the view.
	 * @param array $messageIds The unique identifiers of the messages.
	 * @return integer The number of messages that were disassociated from the view.
	 */
	abstract public function deleteViewMessages($viewId, $messageIds);

	/**
	 * Update the meta data for a translated view.
	 * 
	 * @param string $viewId The unique identifier of the view.
	 * @param string $languageId The unique identifier of the language
	 * @param string $created The time at which the view was created.
	 * @param string $path The path to the view.
	 * @return integer The number of views updated.
	 */
	abstract public function updateView($viewId, $languageId, $created, $path);

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
		{
			Yii::beginProfile(TranslateModule::ID.'.'.get_class($this).'.translate()', TranslateModule::ID);
		}
		
		if(!is_file($path) || ($realPath = realpath($path)) === false)
		{
			throw new CException(TranslateModule::t('Source view file "{file}" does not exist.', array('{file}' => $path)));
		}
		
		if($language === null)
		{
			$language = Yii::app()->getLanguage();
		}

		$translatedPath = $this->translateView($context instanceof CController ?  $context->getRoute() : $context->getController()->getRoute(), $realPath, $language);

		if($this->enableProfiling)
		{
			Yii::endProfile(TranslateModule::ID.'.'.get_class($this).'.translate()', TranslateModule::ID);
		}
		
		return $translatedPath;
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
 * @package translate
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