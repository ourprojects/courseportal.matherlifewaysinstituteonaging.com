<?php

class CoursePortalApplication extends CWebApplication 
{

	private $_recursing = false;
	
	public function createController($route, $owner = null)
	{
		if($this->_recursing)
		{
			return parent::createController($route, $owner);
		}
		$this->_recursing = true;
		$ca = parent::createController($route, $owner);
		$this->_recursing = false;
		if($ca === null)
		{
			return $ca;
		}
		list($controller, $actionId) = $ca;
		$user = $this->getUser();
		if($user !== null && !$user->getIsGuest())
		{
			$user = $user->getModel();
			if($user !== null && !$user->getIsNewRecord())
			{
				$updated = array('last_seen');
				$user->setAttribute('last_seen', date('Y-m-d H:i:s'));
				$request = Yii::app()->getRequest();
				if($request !== null)
				{
					$var = $request->getUserHostAddress();
					if($var != $user->getAttribute('last_ip'))
					{
						$updated[] = 'last_ip';
						$user->setAttribute('last_ip', $var);
					}

					$var = $request->getUserAgent();
					$var = strlen($var) > 255 ? substr($var, 0, 255) : $var;
					if($var != $user->getAttribute('last_agent'))
					{
						$updated[] = 'last_agent';
						$user->setAttribute('last_agent', $var);
					}
				}
				
				$rt = $controller->getId().'/'.($actionId === '' ? $controller->defaultAction : $actonId);
				for($module = $controller->getModule(); $module !== null; $module = $module->getParentModule())
				{
					$rt = $module->getId().'/'.$rt;
				}
				$rt = strlen($rt) > 255 ? substr($rt, 0, 255) : $rt;
				if($rt != $user->getAttribute('last_route'))
				{
					$updated[] = 'last_route';
					$user->setAttribute('last_route', $rt);
				}
				
				$var = $this->getLanguage();
				if($var != $user->getAttribute('language'))
				{
					$updated[] = 'language';
					$user->setAttribute('language', $var);
				}
				$user->save(true, $updated);
			}
		}
		return array($controller, $actionId);
	}

}
