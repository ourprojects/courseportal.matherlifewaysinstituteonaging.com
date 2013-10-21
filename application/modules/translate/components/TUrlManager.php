<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class TUrlManager extends CUrlManager
{

	/**
	 * @var string The name of the {@link TTranslator} component.
	 */
	public $translatorComponentId = 'translate';

	private $_translator;

	/**
	 * Gets the translator component used by this URL manager.
	 *
	 * @return TTranslator the translator component used by this URL manager.
	 */
	public function getTranslator()
	{
		if(!isset($this->_translator))
		{
			$this->_translator = Yii::app()->getComponent($this->translatorComponentId);
		}
		return $this->_translator;
	}

	/**
	 * (non-PHPdoc)
	 * @see CUrlManager::createUrl()
	 */
	public function createUrl($route, $params = array(), $ampersand = '&')
	{
		$languageVarName = $this->getTranslator()->languageVarName;
		if(!isset($params[$languageVarName]))
		{
			$params[$languageVarName] = Yii::app()->getLanguage();
		}
		return parent::createUrl($route, $params, $ampersand);
	}

	/**
	 * (non-PHPdoc)
	 * @see CUrlManager::parseUrl()
	 */
	public function parseUrl($request)
	{
		$route = parent::parseUrl($request);
		$translator = $this->getTranslator();

		// Determine request's preferred language by:

		// Post parameter
		if(isset($_POST[$translator->languageVarName]))
		{
			$language = $_POST[$translator->languageVarName];
			unset($_POST[$translator->languageVarName]);
		}
		// Get parameter
		else if(isset($_GET[$translator->languageVarName]))
		{
			$language = $_GET[$translator->languageVarName];
		}
		// Session
		else if(Yii::app()->getUser()->hasState($translator->languageVarName))
		{
			$language = Yii::app()->getUser()->getState($translator->languageVarName);
		}
		// Cookie
		else if($request->getCookies()->contains($translator->languageVarName))
		{
			$language = $request->getCookies()->itemAt($translator->languageVarName)->value;
		}
		// Client's preferred language setting
		else if($request->getPreferredLanguage() !== false)
		{
			$language = $request->getPreferredLanguage();
		}
		// Application's default language
		else
		{
			$language = Yii::app()->getLanguage();
		}

		// Process language:

		// Canonicalize the language if we don't care about the locale portion
		if($translator->genericLocale)
		{
			$language = Yii::app()->getLocale()->getLanguageID($language);
		}

		// If we should enforce accepted languages only and the language is not acceptable set it to the application's default language.
		if($translator->forceAcceptedLanguage && !$translator->isAcceptedLanguage($language))
		{
			$language = $translator->genericLocale ? Yii::app()->getLocale()->getLanguageID(Yii::app()->getLanguage()) : Yii::app()->getLanguage();
		}

		// Set application's current language to derived language.
		$translator->setLanguage($language);

		// Check that the URL contained the correct language GET parameter. If not redirect to the same URL with language GET parameter inserted.
		if(!isset($_GET[$translator->languageVarName]) || $_GET[$translator->languageVarName] !== $language)
		{
			$request->redirect(
					Yii::app()->createUrl($route, array_merge($_GET, array($translator->languageVarName => $language))),
					true,
					($request->getIsPostRequest() && isset($_SERVER['SERVER_PROTOCOL']) && $_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1') ? 303 : 302
			);
		}
		else
		{
			unset($_GET[$translator->languageVarName]);
		}

		return $route;
	}

}