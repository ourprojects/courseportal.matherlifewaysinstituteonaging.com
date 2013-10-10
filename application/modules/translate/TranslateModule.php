<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class TranslateModule extends CWebModule {

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
	        if(self::$_translator === null)
	            throw new CException(self::$translatorComponentName.' component must be defined');
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
    			throw new CException(self::$viewRendererComponentName.' component must be defined and an instance of TViewRenderer');
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
     * This method is mainly only used by the translate module. 
     * 
     * @param string $message
     * @param array $params
     * @return string translated message
     */
    public static function t($message, $params = array()) 
    {
        return Yii::t(TTranslator::ID, $message, $params);
    }
}