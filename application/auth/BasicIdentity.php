<?php

class BasicIdentity extends CoursePortalUserIdentity
{

	private $password;

	public function __construct($name_email, $password)
	{
		parent::__construct(CPUser::model()->autoQuoteFind(array('or', CPUser::model()->getTableAlias().'.email' => $name_email, CPUser::model()->getTableAlias().'.name' => $name_email)));
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function authenticate()
	{
		if($this->getModel() === null)
		{
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		else if(!$this->getModel()->verify($this->getPassword()))
		{
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}
		else if(!$this->getModel()->getIsActivated())
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