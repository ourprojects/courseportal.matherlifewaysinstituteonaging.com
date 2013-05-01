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
		switch($this->errorCode)
		{
			case self::ERROR_USERNAME_INVALID:
				Yii::log('Failed login attempt. reason:[invalid username] ip:[' . (($request = Yii::app()->getRequest()) ? $request->getUserHostAddress() : 'unknown') . ']', 'warning', 'application.auth');
				break;
			case self::ERROR_PASSWORD_INVALID:
				Yii::log('Failed login attempt. reason:[invalid password] ip:[' . (($request = Yii::app()->getRequest()) ? $request->getUserHostAddress() : 'unknown') . ']', 'warning', 'application.auth');
				break;
			case self::ERROR_NOT_ACTIVATED:
				Yii::log('Failed login attempt. reason:[user not activated] ip:[' . (($request = Yii::app()->getRequest()) ? $request->getUserHostAddress() : 'unknown') . ']', 'warning', 'application.auth');
				break;
			case self::ERROR_NONE:
				Yii::log('Successful login. ip:[' . (($request = Yii::app()->getRequest()) ? $request->getUserHostAddress() : 'unknown') . ']', 'info', 'application.auth');
				return true;
			
		}
		return false;
	}
	
}