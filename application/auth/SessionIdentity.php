<?php

class SessionIdentity extends CoursePortalUserIdentity
{

	protected $_checkActivated;

	public function __construct($userId, $session_key = null, $checkActivated = true)
	{
		parent::__construct(CPUser::model()->findByPk($userId));
		$this->_checkActivated = $checkActivated;

		if(isset($session_key))
		{
			$this->setState(CoursePortalUserIdentity::SESSION_KEY_INDEX, $session_key);
		}
	}

	public function authenticate()
	{
		if($this->getModel() === null)
		{
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		else if($this->getState(CoursePortalUserIdentity::SESSION_KEY_INDEX) !== $this->getModel()->session_key)
		{
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}
		else if($this->_checkActivated && !$this->getModel()->getIsActivated())
		{
			$this->errorCode = self::ERROR_NOT_ACTIVATED;
		}
		else
		{
			$this->errorCode = self::ERROR_NONE;
		}

		return parent::authenticate();
	}

}