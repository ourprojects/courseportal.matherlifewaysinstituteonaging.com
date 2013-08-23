<?php

require_once('SrbacUtilities.php');

class SrbacAccessControlFilter extends CAccessControlFilter
{

	private $_rule = null;

	public function getRules()
	{
		$rules = parent::getRules();
		if($this->_rule !== null)
		{
			array_unshift($rules, $this->_rule);
		}
		return $rules;
	}

	/**
	 * Performs the pre-action filtering.
	 * @param CFilterChain $filterChain the filter chain that the filter is on.
	 * @return boolean whether the filtering process should continue and the action
	 * should be executed.
	 */
	protected function preFilter($filterChain)
	{
		$role = array(preg_replace('/^(.+)Controller$/i', '$1', get_class($filterChain->controller)), $filterChain->action->getId());

		for($module = $filterChain->controller->getModule(); $module !== null && $module !== Yii::app(); $module = $module->getParentModule())
		{
			array_unshift($role, $module->getId());
		}

		foreach($role as &$a)
		{
			$a = preg_replace('/(?<!^)([A-Z])/', ' \\1', ucfirst($a));
		}

		$this->_rule = new CAccessRule();
		$this->_rule->allow = true;
		$this->_rule->roles = array(implode('.', $role) => array('controller' => $filterChain->controller, 'action' => $filterChain->action));
		$result = parent::preFilter($filterChain);
		$this->_rule = null;
		return $result;
	}

}
