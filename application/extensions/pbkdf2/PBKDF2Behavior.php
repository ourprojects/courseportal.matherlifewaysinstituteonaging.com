<?php

require_once('PBKDF2.php');

class PBKDF2Behavior extends CActiveRecordBehavior
{
	
	public $hashAlgorithm = PBKDF2::DEFAULT_HASH_ALGORITHM;
	
	public $iterations = PBKDF2::DEFAULT_ITERATIONS;
	
	public $saltBytes = PBKDF2::DEFAULT_SALT_BYTES;
	
	public $hashBytes = PBKDF2::DEFAULT_HASH_BYTES;
	
	public $staticSalt = PBKDF2::DEFAULT_STATIC_SALT;

	public $saltAttribute = 'salt';
	
	public $hashAttribute = 'hash';

    public $newValueAttribute = 'new_value';
    
    public $clearNewValueAfterSave = true;
    
    protected $_saltAudit;
    
    protected $_newValueAudit;
    
    private $_pbkdf2 = null;
    
    protected function _getPBKDF2()
    {
    	if(!isset($this->_pbkdf2))
    		$this->_pbkdf2 = $this->_pbkdf2 = new PBKDF2($this->hashAlgorithm, $this->iterations, $this->saltBytes, $this->hashBytes, $this->staticSalt);
    	return $this->_pbkdf2;
    }
    
    protected function _attemptHashing()
    {
    	$model = $this->getOwner();
    	if(!empty($model->{$this->newValueAttribute}) && 
    		(empty($this->_saltAudit) || 
    			empty($this->_newValueAudit) ||
	    		$this->_saltAudit !== $model->{$this->saltAttribute} ||
	    		$this->_newValueAudit !== $model->{$this->newValueAttribute}))
    	{
	    	$this->_saltAudit = $model->{$this->saltAttribute};
	    	$this->_newValueAudit = $model->{$this->newValueAttribute};
	    	$model->{$this->hashAttribute} = $this->hash($this->_saltAudit, $this->_newValueAudit);
    	}
    }
    
    public function afterConstruct($event)
    {
    	$model = $this->getOwner();
    	if($model->getIsNewRecord())
    		$model->{$this->saltAttribute} = $this->generateIV();
    }
    
    public function beforeValidate($event)
    {
		$this->_attemptHashing();
    }
    
    public function beforeSave($event)
    {
    	$this->_attemptHashing();
    }
    
    public function afterSave($event)
    {
    	if($this->clearNewValueAfterSave)
    		$model->{$this->newValueAttribute} = null;
    	$this->_saltAudit = null;
    	$this->_newValueAudit = null;
    }
    
    public function verify($value = null)
    {
    	$model = $this->getOwner();
    	return $model->{$this->hashAttribute} === $this->hash(isset($value) ? $value : $model->{$this->newValueAttribute}, $model->{$this->saltAttribute});
    }
    
    public function generateIV()
    {
    	return $this->_getPBKDF2()->generateIV();
    }
    
    public function hash($value, $iv = '')
    {
    	return $this->_getPBKDF2()->hash($value, $iv);
    }

}