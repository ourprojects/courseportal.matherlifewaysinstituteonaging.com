<?php
/**
 * LDForwardActionFilter class file
 * 
 * This class has one extension dependency called LDConditionChainFilter which can be found on github at:
 * @link https://github.com/louis89/yii-ext-LDConditionChainFilter
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

Yii::import('ext.LDConditionChainFilter.LDConditionChainFilter');

/**
 * LDForwardActionFilter allows one controller action to be forwarded, or mapped, to a different controller action
 * based on whether some condition(s) are met. This filter builds on the {@see LDConditionChainFilter} filter.
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
 * // Filter configuration inside {@link CController} containing the action(s) to be filtered.
 * 
 * 		public function filters()
 * 		{
 * 			return array(
 * 				array(
 * 					'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + foo'
 * 					'map' => $map // See various configurations for this property below
 * 				)
 * 			);
 * 		}
 * 
 * // In each of the following action 'foo' will be forwarded to the action 'bar' if the request IS an 'ajax' or 'get' request.
 * // In other words the following are all the same, just different syntax.
 * // Note the plus sign is not necessary in any of these cases since it assumed when a sign is not provided.
 * 
 * 		$map = 'bar + ajax, get';
 * 		$map = array('bar + ajax, get');
 * 		$map = array(
 * 			'bar' => '+ ajax, get'
 * 		);
 * 		$map = array(
 * 			array('bar', '+', 'ajax', 'get')
 * 		);
 * 		$map = array(
 * 			'bar' => array('+', 'ajax', 'get')
 * 		);
 * 
 * // In each of the following action 'foo' will be forwarded to the action 'bar' if the request IS an 'put' or 'secure' request.
 * // Otherwise 'foo' will be forwarded to the action 'fooBar' if the request IS NOT a 'get' request.
 * // Note the plus sign is not used in the initial rule. It is assumed when not provided.
 * 
 * 		$map = array(
 * 			'bar put, secure', 
 * 			'fooBar - get'
 * 		);
 * 		$map = array(
 * 			'bar' => 'put, secure', 
 * 			'fooBar' => '- get'
 * 		);
 * 		$map = array(
 * 			array('bar', 'put', 'secure'), 
 * 			array('fooBar', '-', 'get')
 * 		);
 * 		$map = array(
 * 			'bar' => array('put', 'secure'), 
 * 			'fooBar' => array('-', 'get')
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
 * 		$map = 'bar + testFooGlobal';
 * 		$map = array('bar + testFooGlobal');
 * 		$map = array(
 * 			'bar' => '+ testFooGlobal', 
 * 			'bar' => array('+', array($obj, 'testFooInstance'))
 * 		);
 * 		$map = array(
 * 			array('bar', '+', 'testFooGlobal', array($obj, 'testFooInstance'))
 * 		);
 * 		$map = array(
 * 			'bar' => array('+', 'testFooGlabal', array($obj, 'testFooInstance'))
 * 		);
 * 
 * // It is also possible to group conditions together. 
 * // In each of the following action 'foo' will be forwarded to the action 'bar' if a call to 'testFooGlobal' AND to 'testFooInstance' both result in true.
 * // Note that any onMatchCallback will only be called once here if both conditions return true.
 * 
 * 		$conditions = array('bar' => array('+', array('testFooGlobal', array($obj, 'testFooInstance'))));
 * 
 * </pre>
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class LDForwardActionFilter extends LDConditionChainFilter
{
	
	private $_oldOnMatchCallback;
	
	private $_forwardToAction;

	/**
	 * (non-PHPdoc)
	 * @see CFilter::preFilter()
	 */
	protected function preFilter($filterChain)
	{
		$this->_forwardToAction = null;
		$this->_oldOnMatchCallback = $this->onMatchCallback;
		$this->onMatchCallback = array($this, 'conditionMatched');
		$result = parent::preFilter($filterChain);
		$this->onMatchCallback = $this->_oldOnMatchCallback;
		
		if(isset($this->_forwardToAction))
		{
			$filterChain->controller->run($this->_forwardToAction);
			return false;
		}

		return $result || !isset($this->onNoMatchCallback);
	}
	
	/**
	 * Called when a condition has been matched.
	 *
	 * @param mixed $data The data associated with the matched condition.
	 * @param CFilterChain $filterChain The filter chain this filter belongs to
	 * @return boolean Whether condition matching should continue. Note condition matching stops after first successful match.
	 * If True then this condition match is considered a success and no further conditions will be matched.
	 * Beware that if False is returned for all conditions then the condition matching for this request will be considered unsuccessful.
	 * In other words False will be the argument for the parameter $success of {@see LDConditionChainFilter::conditionsMatched()}
	 */
	protected function conditionMatched($data, $filterChain)
	{
		if(!isset($this->_oldOnMatchCallback) || call_user_func($this->_oldOnMatchCallback, $data, $filterChain))
		{
			$this->_forwardToAction = $data;
			return true;
		}
		return false;
	}

}