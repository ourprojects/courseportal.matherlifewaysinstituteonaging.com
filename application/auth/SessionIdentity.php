<?php defined('BASEPATH') or exit('No direct script access allowed');  

class SessionIdentity extends CoursePortalUserIdentity 
{
	protected $_userId;
	protected $_checkActivated;
	
	public function __construct($userId, $session_key = null, $checkActivated = true) 
	{
		$this->_userId = $userId;
		$this->_checkActivated = $checkActivated;
		
		if(isset($session_key))
			$this->setState(CoursePortalUserIdentity::SESSION_KEY_INDEX, $session_key);
	}
	
	public function authenticate() 
	{	
		$this->_model = CPUser::model()->findByPk($this->_userId);
		
		if($this->_model === null) 
		{
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		} 
		else if($this->getState(CoursePortalUserIdentity::SESSION_KEY_INDEX) !== $this->_model->session_key) 
		{
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		} 
		else if($this->_checkActivated && !$this->_model->getIsActivated())
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