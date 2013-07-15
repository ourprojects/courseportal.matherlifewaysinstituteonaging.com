<?php

class TranslateUrlRule extends CBaseUrlRule
{
	
	public $hasHostInfo = true;
	
	/**
	 * @var string The name of the translator component.
	 */
	public $translateComponentId = 'translate';
	
	public $checkIfLanguageIsPartOfRoute = true;
	
	private $_recursionDepth = 0;

	public function createUrl($manager, $route, $params, $ampersand)
	{
		if($this->_recursionDepth > 0)
			return false;
		$this->_recursionDepth++;
		
		$languageVarName = Yii::app()->getComponent($this->translateComponentId)->languageVarName;
		if(!isset($params[$languageVarName]))
		{
			$params[$languageVarName] = Yii::app()->getLanguage();
		}
		$url = $manager->createUrl($route, $params, $ampersand);
		
		$this->_recursionDepth--;
		return $url;
	}
	
	public function parseUrl($manager, $request, $pathInfo, $rawPathInfo)
	{
		if($this->_recursionDepth > 0)
			return false;
		$this->_recursionDepth++;
		
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
			$request->redirect(Yii::app()->createUrl($route, array($translator->languageVarName => $language)), true, $_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1' ? 303 : 302);
		}
		
		unset($_REQUEST[$translator->languageVarName]);
		$this->_recursionDepth--;
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