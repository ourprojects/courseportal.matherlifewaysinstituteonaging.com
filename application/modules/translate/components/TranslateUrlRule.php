<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class TranslateUrlRule extends CBaseUrlRule
{
	
	/**
	 * (non-PHPdoc)
	 * @see CBaseUrlRule::$hasHostInfo
	 */
	public $hasHostInfo = true;
	
	/**
	 * @var string The name of the {@link TTranslator} component.
	 */
	public $translateComponentId = 'translate';
	

	/**
	 * @var boolean Whether to check if the URL contains the language to use for this request.  
	 * If true and $_REQUEST variable containing the language is not set or does not match the current language then 
	 * the client will be redirected to the same page URL, but containing the language part. If false the URL will not be considered
	 * when determining the requested language.
	 */
	public $checkIfLanguageIsPartOfRoute = true;
	
	private $_recursion = false;

	public function createUrl($manager, $route, $params, $ampersand)
	{
		if($this->_recursion)
			return false;
		$this->_recursion = true;
		
		$languageVarName = Yii::app()->getComponent($this->translateComponentId)->languageVarName;
		if(!isset($params[$languageVarName]))
		{
			$params[$languageVarName] = Yii::app()->getLanguage();
		}
		$url = $manager->createUrl($route, $params, $ampersand);
		
		$this->_recursion = false;
		return $url;
	}
	
	public function parseUrl($manager, $request, $pathInfo, $rawPathInfo)
	{
		if($this->_recursion)
			return false;
		$this->_recursion = true;
		
		$route = $manager->parseUrl($request);
		$translator = Yii::app()->getComponent($this->translateComponentId);
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
			unset($_GET[$translator->languageVarName]);
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
		
		if(!isset($_REQUEST[$translator->languageVarName]) || $_REQUEST[$translator->languageVarName] !== $language)
		{
			if($this->checkIfLanguageIsPartOfRoute &&
					isset($_REQUEST[$translator->languageVarName]) &&
					$this->isPartOfRoute($_REQUEST[$translator->languageVarName]))
			{
				$route = $this->patchRoute($route, $_REQUEST[$translator->languageVarName]);
			}
			$request->redirect(
					Yii::app()->createUrl($route, array_merge($_GET, array($translator->languageVarName => $language))), 
					true, 
					($request->getIsPostRequest() && isset($_SERVER['SERVER_PROTOCOL']) && $_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1') ? 303 : 302
			);
		}
		
		unset($_REQUEST[$translator->languageVarName]);
		$this->_recursion = false;
		return $route;
	}
	
	public function isPartOfRoute($id)
	{
		return is_file(Yii::app()->getControllerPath().DIRECTORY_SEPARATOR.ucfirst($id).'Controller.php') || isset(Yii::app()->modules[$id]);
	}
	
	public function patchRoute($route, $routePart)
	{
		return "$routePart/$route";
	}
	
}