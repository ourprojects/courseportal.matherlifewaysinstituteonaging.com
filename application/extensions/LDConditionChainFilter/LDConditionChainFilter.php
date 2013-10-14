<?php
/**
 * LDConditionChainFilter class file
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * LDConditionChainFilter This class executes a series of condition callbacks. The first condition to match will break the condition chain 
 * and the action will be executed. If no condition can be matched the action will not be executed.
 *
 * A separate callback from the condition callback can be specified when a condition is matched by setting the 
 * {@see LDConditionChainFilter::$onMatchCallback} property. 
 * This will be passed the condition's data and the current filter chain.
 * If the callback returns True no further conditions will be considered and the action will be executed. Otherwise if False
 * is returned then the action will not be executed.
 * 
 * A callback may also be specified for when no conditions could be matched by setting the {@see LDConditionChainFilter::$onNoMatchCallback} property.
 * This callback will be passsed just the current filter chain. If true is returned the action will be executed otherwise it will not.
 *
 * Configure how conditions are checked with the {@see LDConditionChainFilter::$conditions} property.
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
 * It is also possible to use a callable in place of a condition string. In this case the result of the callable will determine if the condition is a match. 
 * The conditions data and the current filter chain will be passed to any condition callable.
 * 
 * A + or - sign at the start of the condition(s) indicates whether the condition is inclusive or exclusive. 
 * Inclusive meaning the condition must be true.
 * Exlusive meaning the condition must not be true.
 * If a sign is not provided + is assumed in most cases.
 *
 * Note that the order of conditions is important. The first condition matched will cause the action to be executed.
 * 
 * Condition configuration examples:
 * <pre>
 * // Filter configuration inside {@link CController} containing the action(s) to be filtered.
 * 
 * 		public function filters()
 * 		{
 * 			return array(
 * 				array(
 * 					'ext.LDConditionChainFilter.LDConditionChainFilter + foo',
 * 					'condition' => $conditions, // See various configurations for this property below.
 * 					'onMatchCallback' => ... // Set this if you would like a function called each time a condition is matched.
 * 					'onNoMatchCallback' => ... // Set this if you would like a function called when no condition could be matched.
 * 				)
 * 			);
 * 		}
 * 
 * // In each of the following action 'foo' will only be executed if the request IS an 'ajax' or 'get' request.
 * // The following are all the same, just different syntax.
 * // Note the plus sign is not necessary in any of these cases since it assumed when a sign is not provided.
 * 
 * 		$conditions = '+ ajax, get';
 * 		$conditions = array('+ ajax, get');
 * 		$conditions = array(array('+', 'ajax', 'get'));
 * 
 * // In each of the following action 'foo' will only be executed if the request IS a 'put' or 'secure' request or IS NOT a 'get' request.
 * // Note the plus sign is not used in the initial rule. It is assumed when not provided.
 * 
 * 		$conditions = array(
 * 			'put, secure', 
 * 			'- get'
 * 		);
 * 		$conditions = array(
 * 			array('put', 'secure'), 
 * 			array('-', 'get')
 * 		);
 * 
 * // If you want to test a custom condition consider the following global condition function and a class with condition function
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
 * // In each of the following action 'foo' will be executed if a call to 'testFooGlobal' or 'testFooInstance' results in true.
 * // Note array syntax is necessary when using an instance method callable.
 * 
 * 		$obj = new SomeClass();
 * 		$conditions = '+ testFooGlobal';
 * 		$conditions = array('+ testFooGlobal');
 * 		$conditions = array(
 * 			'+ testFooGlobal', 
 * 			array('+', array($obj, 'testFooInstance'))
 * 		);
 * 		$conditions = array(
 * 			array('+', 'testFooGlobal', array($obj, 'testFooInstance'))
 * 		);
 * 
 * // It is also possible to group conditions together. 
 * // In the following 'foo' will only be executed if a call to 'testFooGlobal' AND to 'testFooInstance' both result in true.
 * // Note that any onMatchCallback will only be called once here if both conditions return true.
 * 
 * 		$conditions = array('+', array('testFooGlobal', array($obj, 'testFooInstance')));
 * 
 * </pre>
 * 
 * @property $onMatchCallback callback A callback that is called whenever a condition is matched.
 * @property $onNoMatchCallback callback A callback that is called whenever no conditions could be matched.
 * @property $conditions string|array mappings and request conditions for forwarding actions that this filter has been applied to.
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class LDConditionChainFilter extends CFilter
{
	
	/**
	 * @var callable A callback that will be called each time a condition or condition gorup match is made.
	 */
	public $onMatchCallback;

	/**
	 * @var callable A callback that will be called if no condition or condition group could be matched.
	 */
	public $onNoMatchCallback;
	
	/**
	 * @var array The conditions to be tested.
	 */
	private $_conditions = array();

	/**
	 * @var string the regular expression used for extracting built request conditions from condition configurations.
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
	 * Gets the conditions configuration.
	 * 
	 * @return array The conditions configuration
	 */
	public function getConditions()
	{
		return $this->_conditions;
	}
	
	/**
	 * Compiles a sets the conditions configuration
	 * 
	 * @param array|string $conditions An array or a string of condition configurations
	 */
	public function setConditions($conditions)
	{
		$this->_conditions = array();
		$requestMatchRegex = $this->getRequestMatchRegex();
		$conditions = is_array($conditions) ? $conditions : array($conditions);
		
		foreach($conditions as $data => $conditions)
		{
			if(is_array($conditions))
			{
				if(is_int($data))
				{
					$data = array_shift($conditions);
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
					if(is_int($data) && $pos > 0)
					{
						$data = trim(substr($conditions, 0, $pos));
					}
					$conditions = preg_split('/\\\\b+/', substr($conditions, $pos + 1), -1, PREG_SPLIT_NO_EMPTY);
				}
				else if(is_int($data))
				{
					$data = $conditions;
					$conditions = array();
				}
			}
			else
			{
				$sign = '+';
				$conditions = array($conditions);
			}
			
			foreach($conditions as $condition)
			{
				if(is_string($condition) && preg_match_all($requestMatchRegex, $condition, $matches))
				{
					foreach($matches[0] as &$match)
					{
						$match = array($this, 'isRequest'.$match);
					}
					$this->_conditions[] = new LDCondition($sign === '-', $matches[0], $data);
				}
				else if(is_callable($condition))
				{
					$this->_conditions[] = new LDCondition($sign === '-', array($condition), $data);
				}
				else
				{
					$this->_conditions[] = new LDCondition($sign === '-', $condition, $data);
				}
			}
		}
	}

	/**
	 * (non-PHPdoc)
	 * @see CFilter::preFilter()
	 */
	protected function preFilter($filterChain)
	{
		if(empty($this->_conditions))
		{
			return true;
		}
		
		foreach($this->_conditions as $condition)
		{
			if($condition->run($filterChain) &&
					(!isset($this->onMatchCallback) || call_user_func($this->onMatchCallback, $condition->data, $filterChain)))
			{
				return true;
			}
		}

		return isset($this->onNoMatchCallback) && call_user_func($this->onNoMatchCallback, $filterChain);
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

/**
 * LDCondition a compiled condition.
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class LDCondition
{
	
	/**
	 * @var boolean Whether to negate the result of the condition test.
	 */
	public $negateResult;

	/**
	 * @var array The group of conditions to be tested.
	 */
	public $callbacks;
	
	/**
	 * @var mixed The data to be passed to each tested condition.
	 */
	public $data;
	
	/**
	 * 
	 * @param boolean $negateResult Whether to negate the result of the condition test.
	 * @param array $callbacks The group of conditions to be tested.
	 * @param mixed $data The data to be passed to each tested condition.
	 */
	public function __construct($negateResult, $callbacks, $data)
	{
		$this->negateResult = $negateResult;
		$this->callbacks = $callbacks;
		$this->data = $data;
	}
	
	/**
	 * Tests the conditions.
	 * 
	 * @param CFilterChain $filterChain THe filter chain the conditions are being tested on.
	 * @return boolean True if all conditions in the condition group were True. False otherwise.
	 */
	public function run($filterChain)
	{
		foreach($this->callbacks as $callback)
		{
			if(call_user_func($callback, $this->data, $filterChain) !== ($this->negateResult === false))
			{
				return false;
			}
		}
		return true;
	}
	
}
