<?php

abstract class CoursePortalUserIdentity extends CBaseUserIdentity
{
	const SESSION_KEY_INDEX = 'session_key';

	const ERROR_NOT_ACTIVATED = 3;

	protected $_model;

	public function __construct($model)
	{
		$this->_model = $model;
	}

	public function getId()
	{
		return $this->getModel() === null ? parent::getId() : $this->getModel()->id;
	}

	public function getName()
	{
		return $this->getModel() === null ? parent::getName() : $this->getModel()->name;
	}

	public function getModel()
	{
		return $this->_model;
	}

	public function authenticate()
	{
		if($this->getModel() !== null)
		{
			$this->setState(self::SESSION_KEY_INDEX, $this->getModel()->session_key);
			$this->setState('language', $this->getModel()->language);
		}
		$userHostAddress = Yii::app()->getRequest() === null ? 'unknown' : Yii::app()->getRequest()->getUserHostAddress();
		switch($this->errorCode)
		{
			case self::ERROR_USERNAME_INVALID:
				$this->errorMessage = 'Failed login attempt. reason:[username invalid] ip:['.$userHostAddress.']';
				break;
			case self::ERROR_PASSWORD_INVALID:
				$this->errorMessage = 'Failed login attempt. reason:[password invalid] ip:['.$userHostAddress .']';
				break;
			case self::ERROR_NOT_ACTIVATED:
				$this->errorMessage = 'Failed login attempt. reason:[not activated] ip:['.$userHostAddress.']';
				break;
			case self::ERROR_UNKNOWN_IDENTITY:
				$this->errorMessage = 'Failed login attempt. reason:[unknown identity] ip:['.$userHostAddress.']';
				break;
			case self::ERROR_NONE:
				$this->errorMessage = 'Successful login. ip:['.$userHostAddress.']';
				Yii::log($this->errorMessage, 'info', 'application.auth');
				return true;

		}
		Yii::log($this->errorMessage, 'warning', 'application.auth');
		return false;
	}

}