<?php

class CourseModule extends CWebModule 
{
	
	public $userClass = 'User';
	
	public $userId = 'id';
	
	public $userName = 'name';
	
	/**
	 * Initializes the CourseModule.
	 * 
	 * @see CWebModule::init()
	 */
	public function init() 
	{
        $this->defaultController = 'Course';
        $dirname = basename(dirname(__FILE__));
		$this->setImport(array(
            $dirname . '.models.*',
            //$dirname . '.controllers.*',
            $dirname . '.components.*',
			//$dirname . '.widgets.*',
        ));
        return parent::init();
	}
	
	public function getStaticUserModel()
	{
		return call_user_func(array($this->userClass, 'model'));
	}
	
	/**
	 * Instantiate the user's class
	 * @return userclass
	 */
	public function getNewUserModel()
	{
		$args = func_get_args();
		$klass = new ReflectionClass($this->userClass);
		return $klass->newInstanceArgs($args);
	}

}