<?php
/**
 * EForwardActionFilter class file
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * EForwardActionFilter allows one controller action to be forwarded, or mapped, to a different controller action
 * based on whether some condition(s) are met.
 *
 * This filter has one configuration property called {@see EForwardActionFilter::$map}.
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
 * It is also possible to use a callable in place of a condition string. In this case the result of the callable will determine if the mapping 
 * should be applied. The {@link CFilterChain} object that triggered this call will be passed to the callable. If any call results in something 
 * that evaluates to True then the mapping will be applied and no further conditions will be considered for that particular mapping.
 * 
 * A + or - sign at the start of the condition(s) indicates the condition is inclusive or exclusive. Inclusive meaning the condition must be matched
 * for the mapping to be applied. Exlusive meaning the condition must not be matched for the mapping to be applied.
 * If a sign is not provided + is assumed.
 *
 * Note that the order of mappings is important. The first mapping that can be applied will be applied,
 * no further action mappings will be considered once one mapping has been applied.
 * 
 * Once an action is mapped to a new action, that new action will have all its filters executed. 
 * This means it is possible to chain action forwardings which can be very useful, but potentially dangerous...
 * 
 * BEWARE of action forwarding cycles.
 * This class does not check for cycles in its mapping configuration. It is possible your application could entire an infinite loop
 * if the configuration is not carefully considered when chaining action forwarding.
 * 
 * 
 * Mapping configuration examples:
 * <pre>
 * // Any action this filter is applied to will be forwarded to the action named 'action1' if the request IS an 'ajax' or 'get' request.
 * 
 * 		$map = 'action1 + ajax, get';
 * 
 * // Any action this filter is applied to will be forwarded to the action named 'action1' if the request IS NOT an 'ajax' or 'get' request.
 * 
 * 		$map = 'action1 - ajax, get';
 * 
 * // In each of the following action 'foo' will be forwarded to the action 'bar' if the request IS an 'ajax' or 'get' request.
 * // In other words the following are all the same, just different syntax.
 * // Note the plus sign is not necessary in any of these cases since it assumed when a sign is not provided.
 * 
 * 		$map = array(
 * 			'foo' => 'bar + ajax, get'
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar + ajax, get')
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar' => '+ ajax, get')
 * 		);
 * 		$map = array(
 * 			'foo' => array(array('bar', '+', 'ajax', 'get'))
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar' => array('+', 'ajax', 'get'))
 * 		);
 * 
 * // In each of the following action 'foo' will be forwarded to the action 'bar' if the request IS an 'put' or 'secure' request.
 * // Otherwise 'foo' will be forwarded to the action 'fooBar' if the request IS NOT a 'get' request.
 * // Note the plus sign is not used in the initial rule. It is assumed when not provided.
 * 
 * 		$map = array(
 * 			'foo' => 'bar put, secure', 
 * 			'foo' => 'fooBar - get'
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar put, secure', 'fooBar - get')
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar' => 'put, secure', 'fooBar' => '- get')
 * 		);
 * 		$map = array(
 * 			'foo' => array(array('bar', 'put', 'secure'), array('fooBar', '-', 'get'))
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar' => array('put', 'secure'), 'fooBar' => array('-', 'get'))
 * 		);
 * 
 * // If you want to test a custom condition consider the following global condition function and class with condition function
 * 
 * 		function testFooGlobal()
 * 		{
 * 			return true; // This condition is always matched. Return false and this condition is never matched.
 * 		}
 * 
 * 		class SomeClass
 * 		{
 * 			public function testFooInstance()
 * 			{
 * 				return true; // This condition is always matched. Return false and this condition is never matched.
 * 			}
 * 		}
 * 
 * // In each of the following action 'foo' will be forwarded to the action 'bar' if a call to 'testFooGlobal' or 'testFooInstance' results in true.
 * // Note array syntax is necessary when using an instance method callable.
 * 
 * 		$obj = new SomeClass();
 * 		$map = array(
 * 			'foo' => 'bar + testFooGlobal'
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar + testFooGlobal')
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar' => '+ testFooGlobal', 'bar' => array('+', array($obj, 'testFooInstance')))
 * 		);
 * 		$map = array(
 * 			'foo' => array(array('bar', '+', 'testFooGlobal', array($obj, 'testFooInstance')))
 * 		);
 * 		$map = array(
 * 			'foo' => array('bar' => array('+', 'testFooGlabal', array($obj, 'testFooInstance')))
 * 		);
 * </pre>
 * 
 *
 * @property $map string|array mappings and request conditions for forwarding actions that this filter has been applied to
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
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

	/**
	 * Finds all visible methods of this object prefixed with the word 'isRequest'. The suffix following the word 'isRequest'
	 * will be compiled into a regular expression that will match any of those suffixes separated by a word boundary case insensitive.
	 * The resulting regular expression is returned.
	 *
	 * @return string the regular expression to match the parts of a request condition string.
	 */
	public function getRequestMatchRegex()
	{
		if(!isset($this->_requestMatchRegex))
		{
			$this->_requestMatchRegex = '/(?:' .
										implode('|',
												preg_replace(
													'/^isRequest(\\w+)$/i',
													'$1',
													array_filter(
															get_class_methods($this),
															create_function('$method', 'return preg_match("/^isRequest\\\\w+$/i", $method);')
													)
												)
										) .
										')/i';
		}
		return $this->_requestMatchRegex;
	}

	/**
	 * (non-PHPdoc)
	 * @see CFilter::preFilter()
	 */
	protected function preFilter($filterChain)
	{
		$actionId = $filterChain->controller->getAction()->getId();
		$map = $this->map;
		if(!is_array($map))
		{
			$map = array($actionId => $map);
		}
		
		foreach($map as $action => $mapping)
		{
			if(!is_string($action))
			{
				return $mapping;
			}
			if(preg_match('/\b'.$actionId.'\b/i', $action))
			{
				if(!is_array($mapping))
				{
					$mapping = array($mapping);
				}
				foreach($mapping as $forwardToAction => $conditions)
				{
					if(is_array($conditions))
					{
						if(is_int($forwardToAction))
						{
							$forwardToAction = array_shift($conditions);
						}
						if(count($conditions) > 1 && ($conditions[0] === '+' || $conditions[0] === '-'))
						{
							$sign = array_shift($conditions);
						}
						else
						{
							$sign = '+';
						}
					}
					else if(is_string($conditions))
					{
						if(($pos = strpos($conditions, '+')) !== false || ($pos = strpos($conditions, '-')) !== false)
						{
							$sign = $conditions[$pos];
							if(is_int($forwardToAction))
							{
								$forwardToAction = trim(substr($conditions, 0, $pos));
							}
							$conditions = preg_split('/\\\\b+/', substr($conditions, $pos + 1), -1, PREG_SPLIT_NO_EMPTY);
						}
						else if(is_int($forwardToAction))
						{
							$forwardToAction = $conditions;
							$conditions = array();
						}
					}
					else
					{
						$sign = '+';
						$conditions = array($conditions);
					}
				}
				if($conditions === array() || ($this->checkConditions($conditions, $filterChain) === ($sign === '+')))
				{
					$filterChain->controller->run($forwardToAction);
					return false;
				}
			}
		}
		return true;
	}
	
	/**
	 * Takes a list of conditions to evaluate. If any one evaluates to true then this function will return true.
	 * If a condition is a string it will be checked to see if it matches one of the isRequest function of this object, if so
	 * the function is called and its result evaluated. If the evaluated result is false or the function was not a valid
	 * isRequest function of this object then the condition will be test to see if it is callable. If it is callable it will be
	 * called using {@link call_user_func}. The filter chain will be passed to this function.
	 * 
	 * @param array $conditions The list of conditions to evaluate.
	 * @param CFilterChain $filterChain The filter chain that will be passed to any callable conditions.
	 * @return boolean True if any evaluated condition results in True. False otherwise.
	 */
	protected function checkConditions($conditions, $filterChain)
	{
		$requestMatchRegex = $this->getRequestMatchRegex();
		foreach($conditions as $condition)
		{
			if(is_string($condition) && preg_match($requestMatchRegex, $condition, $matches))
			{
				if(call_user_func(array($this, 'isRequest'.$matches[0])))
				{
					return true;
				}
			}

			if(is_callable($condition) && call_user_func($condition, $filterChain))
			{
				return true;
			}
		}
		return false;
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsSecureConnection()}.
	 *
	 * @return bool true if the current connection is secure, false otherwise.
	 */
	public function isRequestSecure()
	{
		return Yii::app()->getRequest()->getIsSecureConnection();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsAjaxRequest()}.
	 *
	 * @return bool true if the current request is an AJAX request, false otherwise.
	 */
	public function isRequestAjax()
	{
		return Yii::app()->getRequest()->getIsAjaxRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsFlashRequest()}.
	 *
	 * @return bool true if the current request is a flash request, false otherwise.
	 */
	public function isRequestFlash()
	{
		return Yii::app()->getRequest()->getIsFlashRequest();
	}

	/**
	 * Returns true if the current request is an OPTIONS request, false otherwise.
	 *
	 * @return bool true if the current request is an OPTIONS request, false otherwise.
	 */
	public function isRequestOptions()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'OPTIONS'));
	}

	/**
	 * Returns true if the current request is a GET request, false otherwise.
	 *
	 * @return bool true if the current request is a GET request, false otherwise.
	 */
	public function isRequestGet()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'GET'));
	}

	/**
	 * Returns true if the current request is a HEAD request, false otherwise.
	 *
	 * @return bool true if the current request is a HEAD request, false otherwise.
	 */
	public function isRequestHead()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'HEAD'));
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsPostRequest()}.
	 *
	 * @return bool true if the current request is a post request, false otherwise.
	 */
	public function isRequestPost()
	{
		return Yii::app()->getRequest()->getIsPostRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsPutRequest()}.
	 *
	 * @return bool true if the current request is a put request, false otherwise.
	 */
	public function isRequestPut()
	{
		return Yii::app()->getRequest()->getIsPutRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsPutViaPostRequest()}.
	 *
	 * @return bool true if the current request is a put via a post request, false otherwise.
	 */
	public function isRequestPutViaPost()
	{
		return Yii::app()->getRequest()->getIsPutViaPostRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsDeleteRequest()}.
	 *
	 * @return bool true if the current request is a delete request, false otherwise.
	 */
	public function isRequestDelete()
	{
		return Yii::app()->getRequest()->getIsDeleteRequest();
	}

	/**
	 * Returns the result of calling {@link CHttpRequest::getIsDeleteViaPostRequest()}.
	 *
	 * @return bool true if the current request is a delete via a post request, false otherwise.
	 */
	public function isRequestDeleteViaPost()
	{
		return Yii::app()->getRequest()->getIsDeleteViaPostRequest();
	}

	/**
	 * Returns true if the current request is a TRACE request, false otherwise.
	 *
	 * @return bool true if the current request is a TRACE request, false otherwise.
	 */
	public function isRequestTrace()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'TRACE'));
	}

	/**
	 * Returns true if the current request is a CONNECT request, false otherwise.
	 *
	 * @return bool true if the current request is a CONNECT request, false otherwise.
	 */
	public function isRequestConnect()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'CONNECT'));
	}

	/**
	 * Returns true if the current request is a PATCH request, false otherwise.
	 *
	 * @return bool true if the current request is a PATCH request, false otherwise.
	 */
	public function isRequestPatch()
	{
		return (isset($_SERVER['REQUEST_METHOD']) && !strcasecmp($_SERVER['REQUEST_METHOD'], 'PATCH'));
	}

}