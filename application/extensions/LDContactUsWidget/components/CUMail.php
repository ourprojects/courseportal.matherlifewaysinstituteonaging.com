<?php


abstract class CUMail extends CComponent
{
	
	public $to;
	
	abstract public function setBody($body);
	
	abstract public function setSubject($subject);
	
	abstract public function setFrom($from);
	
	abstract public function send();
	
}

?>