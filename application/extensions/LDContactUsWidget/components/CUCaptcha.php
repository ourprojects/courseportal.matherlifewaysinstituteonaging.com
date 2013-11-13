<?php

abstract class CUCaptcha extends CComponent
{
	public $show = true;
	
	public $labelHtmlOptions = array();
	
	public $errorHtmlOptions = array();

	public $config = array();
	
	abstract public function getModel();
	
	abstract public function loadAttributes($actionParams);
	
	abstract public function render($activeForm);
	
}