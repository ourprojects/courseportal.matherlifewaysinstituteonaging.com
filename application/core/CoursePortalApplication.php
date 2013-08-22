<?php

class CoursePortalApplication extends CWebApplication {

	protected function init()
	{
		$this->onEndRequest = array($this, 'saveUserState');
	}

	public function saveUserState()
	{
		if(($user = $this->getUser()) && isset($user) && !$user->getIsGuest())
		{
			$user = $user->getModel();
			if(isset($user) && !$user->getIsNewRecord())
			{
				$updated = array('last_login');
				$user->last_login = date('Y-m-d H:i:s');
				if($request = Yii::app()->getRequest())
				{
					$var = $request->getUserHostAddress();
					if($var != $user->last_ip)
					{
						$updated[] = 'last_ip';
						$user->last_ip = $var;
					}

					$var = $request->getUserAgent();
					$var = strlen($var) > 255 ? substr($var, 0, 255) : $var;
					if($var != $user->last_agent)
					{
						$updated[] = 'last_agent';
						$user->last_agent = $var;
					}
				}
				$var = $this->getLanguage();
				if($user->language != $var)
				{
					$updated[] = 'language';
					$user->language = $var;
				}
				$user->save(true, $updated);
			}
		}
	}

}
