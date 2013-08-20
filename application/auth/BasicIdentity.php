<?php

class BasicIdentity extends CoursePortalUserIdentity
{
	protected $name_email;
	protected $password;

	public function __construct($name_email, $password)
	{
		$this->name_email = $name_email;
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function authenticate()
	{
		$this->_model = CPUser::model()->autoQuoteFind(array('or', CPUser::model()->getTableAlias().'.email' => $this->name_email, CPUser::model()->getTableAlias().'.name' => $this->name_email));
		if($this->_model === null)
		{
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		else if(!$this->_model->verify($this->password))
		{
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}
		else if(!$this->_model->getIsActivated())
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