<?php

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'CUMail.php');

class CUSimpleYiiMail extends CUMail
{
	
	public $body;
	
	public $subject;
	
	public $from;
	
	public $config = array();
	
	private $_yiiMailer;
	
	public function setYiiMailer($yiiMailer)
	{
		$this->_yiiMailer = $yiiMailer;
	}
	
	public function getYiiMailer()
	{
		if(!isset($this->_yiiMailer))
		{
			$this->_yiiMailer = Yii::createComponent($this->config);
		}
		return $this->_yiiMailer;
	}

	public function setBody($body)
	{
		$this->body = $body;
	}
	
	public function setSubject($subject)
	{
		$this->subject = $subject;
	}
	
	public function setFrom($from)
	{
		$this->from = $from;
	}
	
	public function send()
	{
		return $this->getYiiMailer()->sendSimple($this->from, $this->to, $this->subject, $this->body);
	}

}