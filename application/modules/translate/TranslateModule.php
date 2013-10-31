<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class TranslateModule extends CWebModule
{

	/**
	 * A unique key to be used in many situations.
	 * Be certain your application does not contain any components with this exact name.
	 *
	 * @name TranslateModule::ID
	 * @type string
	 * @const string
	 */
	const ID = 'TranslateModule';

	/**
	 * The language of all source messages in this module.
	 *
	 * @name TranslateModule::ID
	 * @type string
	 * @const string
	 */
	const LANGUAGE = 'en';
	
	const SUCCESS = 0;
	const OVERWRITE = 1;
	const ERROR = 2;

	/**
	 * @var string The name of the translate component. Change this to what ever component name you used in your configuration.
	 */
	public static $translatorComponentName = 'translate';

	/**
	 * @var string The name of the view renderer component. Change this to what ever component name you used in your configuration.
	 */
	public static $viewRendererComponentName = 'viewRenderer';

	private static $_translator;

	private static $_viewRenderer;

	/**
	 * Initializes the TranslateModule.
	 *
	 * @see CWebModule::init()
	 */
	public function init() {
		$this->defaultController = 'Translate';
		$dirname = basename(dirname(__FILE__));
		$this->setImport(array(
			$dirname . '.models.*',
			$dirname . '.controllers.*',
			$dirname . '.components.*',
			$dirname . '.widgets.*',
		));
		return parent::init();
	}

	/**
	 * get the translate component
	 *
	 * @throws CException If the translate component named by {@see TranslateModule::$translateComponentName} cannot be found {@link TTranslator}
	 * @return TTranslator The translate component named by {@see TranslateModule::$translateComponentName}
	 */
	public static function translator()
	{
		if(!isset(self::$_translator))
		{
			self::$_translator = Yii::app()->getComponent(self::$translatorComponentName);
			if(!self::$_translator instanceof TTranslator)
			{
				throw new CException(self::$translatorComponentName.' component must be defined');
			}
		}
		return self::$_translator;
	}

	/**
	 * get the view renderer component
	 *
	 * @throws CException If the view renderer component named by {@see TranslateModule::$viewRendererComponentName} is not set or is not an instance of {@link TViewRenderer}.
	 * @return TViewRenderer The view renderer component named by {@see TranslateModule::$viewRendererComponentName}
	 */
	public static function viewRenderer()
	{
		if(!isset(self::$_viewRenderer))
		{
			self::$_viewRenderer = Yii::app()->getComponent(self::$viewRendererComponentName);
			if(!self::$_viewRenderer instanceof TViewRenderer)
			{
				throw new CException(self::$viewRendererComponentName.' component must be defined and an instance of TViewRenderer');
			}
		}
		return self::$_viewRenderer;
	}

	/**
	 * Convenience method for calling {@link TTranslator::missingTranslation()}
	 *
	 * @see TTranslator::missingTranslation()
	 * @param CMissingTranslationEvent $event
	 * @return CMissingTranslationEvent
	 */
	public static function missingTranslation($event)
	{
		return self::translator()->missingTranslation($event);
	}

	/**
	 * Convenience method for calling {@link TTranslator::missingViewTranslation()}
	 *
	 * @see TTranslator::missingViewTranslation()
	 * @param TMissingViewTranslationEvent $event
	 * @return TMissingViewTranslationEvent
	 */
	public static function missingViewTranslation($event)
	{
		return self::viewRenderer()->missingViewTranslation($event);
	}

	/**
	 * Translate some message using the translate module's configuration.
	 * This method is generally should only used within the translate module.
	 *
	 * @param string $message
	 * @param array $params
	 * @return string translated message
	 */
	public static function t($message, $params = array())
	{
		$messageSource = self::translator()->getMessageSourceComponent();
		$oldLanguage = $messageSource->getLanguage();
		$messageSource->setLanguage(self::LANGUAGE);
		return Yii::t(self::ID, $message, $params, self::translator()->messageSource);
		$messageSource->setLanguage($oldLanguage);
	}
	
	/**
	 * Checks if srbac is installed by checking if Auth items table exists.
	 * @return boolean Whether srbac is installed or not
	 */
	public static function isInstalled()
	{
		$translator = self::translator();
		return $translator->getMessageSourceComponent()->isInstalled() && $translator->getViewSourceComponent()->isInstalled();
	}
	
	/**
	 * Performs the installation and returns the status
	 * @param int reinstall If true and the tables are already installed they will be dropped and recreated.
	 * @return array statuses of installing message source and view source in the format array(componentName => (0:Success, 1:Ovewrite, 2: Error))
	 */
	public static function install($reinstall = false)
	{
		$translator = self::translator();
		return array(
			$translator->messageSource => $translator->getMessageSourceComponent()->install($reinstall), 
			$translator->viewSource => $translator->getViewSourceComponent()->install($reinstall)
		);
	}
	
	public static function checkSettings($setting)
	{
		return self::translator()->checkSettings($setting);
	}

}
