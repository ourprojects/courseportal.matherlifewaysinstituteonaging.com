<?php
/**
 * 
 * This filter is meant to allow one action to be forwarded to a different action 
 * within the same controller based on some request conditions.
 * 
 * You may apply this filter to an action as you would any filter.
 * 
 * There is only one property that should be set for this filter to have any effect, it is called $map. 
 * Possible settings are as follows.
 * 
 * ------ $map as a string ------
 * 
 * If $map is a string then any actions that this filter is applied to will be forwarded to the action
 * named by the string value of the property $map.
 * Example 1:
 * This will forward all requests for the action named 'index' to the action named 'view'.
 * 
 * public function filters()
 * {
 * 		return array('translate.filters.TForwardActionFilter + index', 'actionMap' => 'view');
 * }
 * 
 * The $map string may also contain request conditions to check for before forwarding the action. 
 * 
 * Example 2:
 * This will forward all requests for the action named 'index' to the action named 'view' ONLY if the request IS an 
 * AJAX or POST request.
 * 
 * public function filters()
 * {
 * 		return array('translate.filters.TForwardActionFilter + index', 'actionMap' => 'view + ajax, post');
 * }
 * 
 * Example 3:
 * This will forward all requests for the action named 'index' to the action named 'view' ONLY if the request IS NOT an 
 * AJAX or POST request.
 * 
 * public function filters()
 * {
 * 		return array('translate.filters.TForwardActionFilter + index', 'actionMap' => 'view - ajax, post');
 * }
 * 
 * ------ $map as an array ------
 * 
 * The $map property may also be an array where the value of each array element
 * contains the action mapping and request conditions in the same format as when $map is a string.
 * If an array element has a string for its key value then that key value will be compared with the id of the current action
 * being filtered. If they do not match then the array element's value (the action mapping) will not be considered.
 * 
 * Example 4:
 * This will forward all requests for the action named 'index' to the action named 'view' ONLY if the request is NOT an 
 * AJAX or POST request. Or if the request is a put request then all requests for the action named 'index' will be forwarded
 * to the action named 'update'.
 * 
 * public function filters()
 * {
 * 		return array(
 * 					'translate.filters.TForwardActionFilter + index', 
 * 					'actionMap' => array(
 * 									'view - ajax, post', 
 * 									'update + put'
 * 					)
 * 		);
 * }
 * 
 * Example 5:
 * This will forward all requests for the action named 'index' to the action named 'view' ONLY if the request is NOT an 
 * AJAX or POST request. Or if the request is a put request and the action is named 'view' then all requests for the action named 'view' 
 * will be forwarded to the action named 'update'. Or if the current action is 'index' or 'view' and the request is an OPTIONS request
 * then the requested action will be forwarded to the 'help' action.
 * 
 * public function filters()
 * {
 * 		return array(
 * 					'translate.filters.TForwardActionFilter + index, view', 
 * 					'actionMap' => array(
 * 									'index' => 'view - ajax, post', 
 * 									'view' => 'update + put',
 * 									'help + options'
 * 					)
 * 		);
 * }
 * 
 * ------ $map is an array of arrays ------
 * 
 * Finally $map may be an array of arrays. In this case the key of each array value is the action that will be mapped if each 
 * request condition has been satisfied in the in the array of conditions of the key's value.
 * 
 * Example 6:
 * This will forward any requests for action 'index' or 'view' to the action 'help' if the request is an OPTIONS request or a HEAD request.
 * 
 * public function filters()
 * {
 * 		return array(
 * 					'translate.filters.TForwardActionFilter + index, view', 
 * 					'actionMap' => array(
 * 									'help' => array('options', 'head')
 * 					)
 * 		);
 * }
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
 * Note that the order of mappings is important. The first mapping that can be applied to an action will be,
 * no further mappings will be considered once one is matched.
 * 
 * @author Louis DaPrato
 * @property $map string|array mappings and request conditions for forwarding actions that this filter has been applied to
 */
class TForwardActionFilter extends CFilter
{
	
	/**
	 * @var string|array mappings and request conditions for forwarding actions that this filter has been applied to
	 */
	public $map = array();
	
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
	
	protected function preFilter($filterChain)
	{
		if(is_string($this->map))
		{
			$filterChain->controller->run($this->map);
			return false;
		}
		else if(is_array($this->map))
		{
			foreach($this->map as $action => $requestConditions)
			{
				if(is_string($requestConditions))
				{
					if(is_string($action) && $action !== $filterChain->controller->getAction()->getId())
					{
						continue;
					}
					else if(($pos = strpos($requestConditions, '+')) !== false || ($pos = strpos($requestConditions, '-')) !== false)
					{
						$action = trim(substr($requestConditions, 0, $pos));
						preg_match_all($this->getRequestMatchRegex(), substr($requestConditions, $pos + 1), $matches);
						
						if($requestConditions[$pos] !== '-')
							unset($pos);
						
						$requestConditions = $matches[0];
					}
					else
					{
						unset($pos);
						$requestConditions = array();
					}
				}

				if(is_array($requestConditions) && (array_reduce($requestConditions, array($this, '_reduceHelper'), false) != isset($pos)))
				{
					$filterChain->controller->run($action);
					return false;
				}
			}
		}
		return true;
	}
	
	/**
	 * A helper method for reducing an array of the match method names to a single boolean value
	 * of true if all match methods returned true, false otherwise.
	 * 
	 * @param bool $value Current or starting boolean value.
	 * @param string $condition The match method name to call.
	 * @return boolean true if either the first parameter was true or the second parameter method name returned true.
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