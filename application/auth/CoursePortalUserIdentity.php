<?php defined('BASEPATH') or exit('No direct script access allowed');  

abstract class CoursePortalUserIdentity extends CBaseUserIdentity 
{
	const SESSION_KEY_INDEX = 'session_key';
	
	const ERROR_NOT_ACTIVATED = 3;

	protected $_model;
	
	public function getId() 
	{
		return $this->_model === null ? parent::getId() : $this->_model->id;
	}
	
	public function getName() 
	{
		return $this->_model === null ? parent::getName() : $this->_model->name;
	}
	
	public function getModel() 
	{
		return $this->_model;
	}
	
	public function authenticate()
	{
		if($this->_model !== null)
		{
			$this->setState(self::SESSION_KEY_INDEX, $this->_model->session_key);
			$this->setState('language', $this->_model->language);
		}
		return $this->errorCode === self::ERROR_NONE;
	}
	
}