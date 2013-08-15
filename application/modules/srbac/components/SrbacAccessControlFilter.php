<?php

require_once('SrbacUtilities.php');

class SrbacAccessControlFilter extends CAccessControlFilter
{

	/**
	 * Performs the pre-action filtering.
	 * @param CFilterChain $filterChain the filter chain that the filter is on.
	 * @return boolean whether the filtering process should continue and the action
	 * should be executed.
	 */
	protected function preFilter($filterChain)
	{
		if(!parent::preFilter($filterChain))
		{
			$access = array(preg_replace('/^(.+)Controller$/i', '$1', get_class($filterChain->controller)), $filterChain->action->getId());

			for($module = $filterChain->controller->getModule(); $module !== null && $module !== Yii::app(); $module = $module->getParentModule())
			{
				array_unshift($access, $module->getId());
			}

			foreach($access as &$a)
			{
				$a = preg_replace('/(?<!^)([A-Z])/', ' \\1', ucfirst($a));
			}

			$access = implode('.', $access);

			return Yii::app()->getUser()->checkAccess($access) || Yii::app()->getUser()->checkAccess(SrbacUtilities::getSrbacModule()->superUser);
		}
		return true;
	}

}
