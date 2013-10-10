<?php
/**
 * ERequestMethodFilter class file
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * ERequestMethodFilter allows request to be matched with some expected condition(s).
 * If the condition(s) fail a HTTP 400 error may occur. This class essentially expands significantly
 * on the {@link CController::filterAjaxOnly()} and {@link CController::filterPostOnly()} methods that are
 * integrated into {@link CController}.
 * 
 * The folowing, case insensitive, request conditions are available by default:
 *
 * secure (test if this is an https connection)
 * ajax
 * flash
 * options
 * get
 * head
 * post
 * put
 * putViaPost
 * delete
 * deleteViaPost
 * trace
 * connect
 * patch
 * 
 * 
 * @property $config string|array matchings and request methods.
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class ERequestMethodFilter extends CFilter
{

	/**
	 * @var string|array matchpings and request conditions for forwarding actions that this filter has been applied to
	 */
	private $_config = array();

	/**
	 * @var string the regular expression used for matching request conditions.
	 */
	private $_requestMatchRegex;

	/**
	 * Finds all visible methods of this object prefixed with the word 'match'. The suffix following the word 'match'
	 * will be compiled into a regular expression that will match any of those suffixes separated by a word boundary case insensitive.
	 * The resulting regular expression is returned.
	 *
	 * @return string the regular expression to match the parts of a request condition string.
	 */
	public function getRequestMatchRegex()
	{
		if(!isset($this->_requestMatchRegex))
		{
			$this->_requestMatchRegex = '/\b(?:' .
										implode('|',
												preg_replace(
													'/^match(.+)$/i',
													'$1',
													array_filter(
															get_class_methods($this),
															create_function('$method', 'return preg_match("/^match.+$/i", $method);')
													)
												)
										) .
										')\b/i';
		}
		return $this->_requestMatchRegex;
	}

	/**
	 * (non-PHPdoc)
	 * @see CFilter::preFilter()
	 */
	protected function preFilter($filterChain)
	{
		$result = true;
		foreach($this->getConfig() as $requestMethods => $actions)
		{
			if(is_string($requestMethods))
			{
				if((is_array($actions) && !in_array($filterChain->controller->getAction()->getId(), $actions))
						|| (is_string($actions) && !preg_match('/\b'.$filterChain->controller->getAction()->getId().'\b/i', $actions)))
				{
					continue;
				}
			}
			else if(!is_string($actions) || (($pos = strpos($actions, '+')) === false && ($pos = strpos($actions, '-')) === false))
			{
				continue;
			}
			else
			{
				if(!preg_match('/\b'.$filterChain->controller->getAction()->getId().'\b/i', trim(substr($actions, $pos + 1)))
						&& $actions[$pos] === '+')
				{
					continue;
				}
				$requestMethods = trim(substr($actions, 0, $pos));
			}

			preg_match_all($this->getRequestMatchRegex(), $requestMethods, $matches);
			$result = false;
			foreach($matches[0] as $requestMethod)
			{
				if(call_user_func(array($this, "match$requestMethod")))
				{
					$result = $this->requestMethodMatched($filterChain, $requestMethod);
					break;
				}
			}

			if(!$result && !($result = $this->requestMethodNotMatched($filterChain)))
			{
				break;
			}
		}
		return $result;
	}

	/**
	 * Sets this object's configuration parameter
	 * 
	 * @param array|string $config The configuration for this object
	 * @throws CException Thrown if the $config parameter is not a string or an array
	 */
	public function setConfig($config)
	{
		if(is_array($config))
		{
			$this->_config = $config;
		}
		else if(is_string($config))
		{
			$this->_config = array($config);
		}
		else
		{
			throw new CException(Yii::t('ERequestMethodFilter', 'Invalid match pattern. The match pattern must either be an array or a string.'));
		}
	}

	/**
	 * Returns this object's configuration
	 * 
	 * @return array This object's configuration
	 */
	public function getConfig()
	{
		return $this->_config;
	}

	/**
	 * Called when a request method has been matched. Triggers 'onRequestMethodMatched' event.
	 * 
	 * @param CFilterChain $filterChain The filter chain this filter belongs to
	 * @param string $method The method the request has been matched to
	 * @return boolean Whether the matched request method is OK
	 */
	public function requestMethodMatched($filterChain, $method)
	{
		if($this->hasEventHandler('onRequestMethodMatched'))
		{
			$event = new ERequestMethodMatchEvent($this, $filterChain, $method, true);
			$this->onRequestMethodMatched($event);
			return $event->getAcceptMatch();
		}
		return true;
	}

	/**
	 * Called when a request method was not matched. Triggers 'onRequestMethodNotMatched' event.
	 *
	 * @param CFilterChain $filterChain The filter chain this filter belongs to
	 * @return boolean True only if the 'onRequestMethodNotMatched' event handler decided to accept the request anyways.
	 * @throws CHttpException thrown if there is no 'onRequestMethodNotMatched' event handler or the event handler did not choose to accept the request.
	 */
	public function requestMethodNotMatched($filterChain)
	{
		if($this->hasEventHandler('onRequestMethodNotMatched'))
		{
			$event = new ERequestMethodMatchEvent($this, $filterChain);
			$this->onRequestMethodNotMatched($event);
			if($event->getAcceptMatch())
			{
				return true;
			}
		}
		throw new CHttpException(400, Yii::t('ERequestMethodFilter', 'Your request is invalid.'));
	}

	/**
	 * Raises 'onRequestMethodMatched' event.
	 * 
	 * @param ERequestMethodMatchEvent $event
	 */
	public function onRequestMethodMatched($event)
	{
		$this->raiseEvent('onRequestMethodMatched', $event);
	}

	/**
	 * Raises 'onRequestMethodNotMatched' event.
	 * 
	 * @param ERequestMethodMatchEvent $event
	 */
	public function onRequestMethodNotMatched($event)
	{
		$this->raiseEvent('onRequestMethodNotMatched', $event);
	}

	/**
	 * A helper method for reducing an array of match method names to a single boolean value.
	 * True if ANY match method returns true, false otherwise.
	 *
	 * @param bool $value Current or starting boolean value.
	 * @param string $condition The match method name to call.
	 * @return boolean true if either the first parameter was true or the match method (condition) returned true.
	 */
	private function _reduceHelper($value, $condition)
	{
		return $value || call_user_func(array($this, "match$condition"));
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsSecureConnection()}.
	 *
	 * @return bool true if the current connection is secure, false otherwise.
	 */
	public function matchSecure()
	{
		return Yii::app()->getRequest()->getIsSecureConnection();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsAjaxRequest()}.
	 *
	 * @return bool true if the current request is an AJAX request, false otherwise.
	 */
	public function matchAjax()
	{
		return Yii::app()->getRequest()->getIsAjaxRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsFlashRequest()}.
	 *
	 * @return bool true if the current request is a flash request, false otherwise.
	 */
	public function matchFlash()
	{
		return Yii::app()->getRequest()->getIsFlashRequest();
	}

	/**
	 * Returns true if the current request is an OPTIONS request, false otherwise.
	 *
	 * @return bool true if the current request is an OPTIONS request, false otherwise.
	 */
	public function matchOptions()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'OPTIONS'));
	}

	/**
	 * Returns true if the current request is a GET request, false otherwise.
	 *
	 * @return bool true if the current request is a GET request, false otherwise.
	 */
	public function matchGet()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'GET'));
	}

	/**
	 * Returns true if the current request is a HEAD request, false otherwise.
	 *
	 * @return bool true if the current request is a HEAD request, false otherwise.
	 */
	public function matchHead()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'HEAD'));
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsPostRequest()}.
	 *
	 * @return bool true if the current request is a post request, false otherwise.
	 */
	public function matchPost()
	{
		return Yii::app()->getRequest()->getIsPostRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsPutRequest()}.
	 *
	 * @return bool true if the current request is a put request, false otherwise.
	 */
	public function matchPut()
	{
		return Yii::app()->getRequest()->getIsPutRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsPutViaPostRequest()}.
	 *
	 * @return bool true if the current request is a put via a post request, false otherwise.
	 */
	public function matchPutViaPost()
	{
		return Yii::app()->getRequest()->getIsPutViaPostRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsDeleteRequest()}.
	 *
	 * @return bool true if the current request is a delete request, false otherwise.
	 */
	public function matchDelete()
	{
		return Yii::app()->getRequest()->getIsDeleteRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsDeleteViaPostRequest()}.
	 *
	 * @return bool true if the current request is a delete via a post request, false otherwise.
	 */
	public function matchDeleteViaPost()
	{
		return Yii::app()->getRequest()->getIsDeleteViaPostRequest();
	}

	/**
	 * Returns true if the current request is a TRACE request, false otherwise.
	 *
	 * @return bool true if the current request is a TRACE request, false otherwise.
	 */
	public function matchTrace()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'TRACE'));
	}

	/**
	 * Returns true if the current request is a CONNECT request, false otherwise.
	 *
	 * @return bool true if the current request is a CONNECT request, false otherwise.
	 */
	public function matchConnect()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'CONNECT'));
	}

	/**
	 * Returns true if the current request is a PATCH request, false otherwise.
	 *
	 * @return bool true if the current request is a PATCH request, false otherwise.
	 */
	public function matchPatch()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'PATCH'));
	}

}

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class ERequestMethodMatchEvent extends CEvent
{

	/**
	 * Constructor.
	 * @param mixed $sender sender of this event
	 * @param CFilterChain $filterChain the filter chain that the filter that triggered this event belongs to.
	 * @param string $method the method the request was matched to. Or null if a method could not be matched.
	 * @param bool $acceptMatch whether the matched request method is OK.
	 */
	public function __construct($sender, $filterChain, $method = null, $acceptMatch = false)
	{
		parent::__construct($sender, array('filterChain' => $filterChain, 'method' => $method, 'acceptMatch' => $acceptMatch));
	}

	/**
	 * Gets the filter chain that the filter that triggered this event belongs to.
	 * 
	 * @return CFilterChain the filter chain that the filter that triggered this event belongs to.
	 */
	public function getFilterChain()
	{
		return $this->params['filterChain'];
	}

	/**
	 * Gets the method the request was matched to. Or null if a method could not be matched.
	 * 
	 * @return string|null the method the request was matched to. Or null if a method could not be matched. 
	 */
	public function getMethod()
	{
		return $this->params['method'];
	}

	/**
	 * Gets whether or not the match/request will be accepted
	 * 
	 * @return boolean whether or not the match/request will be accepted
	 */
	public function getAcceptMatch()
	{
		return $this->params['acceptMatch'];
	}

	/**
	 * Set whether to accept the match/request or not. 
	 * Allows a listener of this event to override whether or not to accept a request. 
	 * 
	 * @param boolean $acceptMatch whether to accept the match/request or not
	 */
	public function setAcceptMatch($acceptMatch)
	{
		$this->params['acceptMatch'] = $acceptMatch;
	}

}