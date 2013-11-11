<?php


interface IEmail
{
	
	public function setBody($body);
	
	public function setSubject($subject);
	
	public function setTo($to);
	
	public function setFrom($from);
	
	public function send();
	
}

?>