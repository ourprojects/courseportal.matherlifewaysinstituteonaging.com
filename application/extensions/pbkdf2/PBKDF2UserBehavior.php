<?php

require_once('PBKDF2.php');

class PBKDF2UserBehavior extends CActiveRecordBehavior
{
	
	public $hashAlgorithm = PBKDF2::DEFAULT_HASH_ALGORITHM;
	
	public $iterations = PBKDF2::DEFAULT_ITERATIONS;
	
	public $saltBytes = PBKDF2::DEFAULT_SALT_BYTES;
	
	public $hashBytes = PBKDF2::DEFAULT_HASH_BYTES;
	
	public $staticSalt = PBKDF2::DEFAULT_STATIC_SALT;

	public $saltAttribute = 'salt';
	
	public $passwordAttribute = 'password';

    public $newPasswordAttribute = 'new_password';
    
    public $clearNewPasswordAfterSave = true;
    
    private $_pbkdf2 = null;
    
    protected function _getPBKDF2()
    {
    	if(!isset($this->_pbkdf2))
    		$this->_pbkdf2 = $this->_pbkdf2 = new PBKDF2($this->hashAlgorithm, $this->iterations, $this->saltBytes, $this->hashBytes, $this->staticSalt);
    	return $this->_pbkdf2;
    }
    
    public function afterConstruct($event)
    {
    	$user = $this->getOwner();
		if($user->getIsNewRecord())
			$user->{$this->saltAttribute} = $this->_getPBKDF2()->generateIV();
    }
    
    public function beforeSave($event)
    {
		$this->_hashNewPassword();
    }
    
    public function afterSave($event)
    {
    	if($this->clearNewPasswordAfterSave)
    		$user->{$this->newPasswordAttribute} = null;
    }
    
    public function verifyPassword($password = null)
    {
    	$user = $this->getOwner();
    	if(!isset($password))
    		$password = $user->{$this->newPasswordAttribute};
    	return $user->{$this->passwordAttribute} === $this->_getPBKDF2()->hash($password, $user->{$this->saltAttribute});
    }
    
    public function generateIV()
    {
    	return $this->_getPBKDF2()->generateIV();
    }
    
    protected function _hashNewPassword()
    {
    	$user = $this->getOwner();
    	if(isset($user->{$this->newPasswordAttribute}))
    	{
    		$user->{$this->passwordAttribute} = $this->_getPBKDF2()->hash($user->{$this->newPasswordAttribute}, $user->{$this->saltAttribute});
    	}
    }

}