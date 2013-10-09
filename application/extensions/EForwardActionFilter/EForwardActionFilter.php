<?php
/**
 *
 * This filter is meant to allow one action to be forwarded to a different action
 * within the same controller based on some request conditions.
 *
 * You may apply this filter to an action as you would any filter.
 *
 * There is only one property that should be set for this filter to have any effect, it is called $map.
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
 * The conditions listed above may be extended by extending this class and defining new methods prefixed with the word 'match'.
 * If a mapping with a request condition having the same name as the suffix of the match method then that method will be called
 * to determine if the condition is valid and the mapping should be applied. This is very similar to defining action methods in a controller,
 * except that the match method must not have any required parameters and must return a value that can be evaluated to a boolean.
 * Finally, any match methods defined must be defined as either protected or public. private methods will have no effect.
 *
 * Note that the order of mappings is important. The first mapping that can be applied to an action will be applied,
 * no further action mappings will be considered once one mapping is found.
 *
 * @author Louis DaPrato
 * @property $map string|array mappings and request conditions for forwarding actions that this filter has been applied to
 */
class EForwardActionFilter extends CFilter
{

	/**
	 * @var string|array mappings and request conditions for forwarding actions that this filter has been applied to
	 */
	public $map = array();

	/**
	 * @var string the regular expression used for matching request conditions.
	 */
	private $_requestMatchRegex;

	private $_currentActionId;

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

	protected function preFilter($filterChain)
	{
		if(($action = $this->processConditions($filterChain->controller->getAction()->getId(), $this->map)) !== null)
		{
			$filterChain->controller->run($action);
			return false;
		}

		return true;
	}

	protected function processConditions($actionId, $conditions, $sign = '+')
	{
		if(!is_array($conditions))
		{
			$conditions = array($conditions);
		}

		foreach($conditions as $action => $mapping)
		{
			if(is_string($action) && !preg_match('/\b'.$actionId.'\b/i', $action))
			{
				continue;
			}
			if(is_array($mapping))
			{
				if(($action = $this->processConditions($actionId, $mapping, $sign)) !== null)
				{
					return $action;
				}
			}
			else if(is_string($mapping) && (($pos = strpos($mapping, '+')) !== false || ($pos = strpos($mapping, '-')) !== false))
			{
				preg_match_all($this->getRequestMatchRegex(), substr($mapping, $pos + 1), $matches);
				if($this->processConditions($actionId, $matches[0], $mapping[$pos]) !== null)
				{
					return trim(substr($mapping, 0, $pos));
				}
			}
			else if(call_user_func(array($this, 'match'.$mapping)) && $sign === '+')
			{
				return $actionId;
			}
		}
		return null;
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