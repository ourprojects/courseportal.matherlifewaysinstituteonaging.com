<?php
class CPregMatch {

	private $pattern;

	public function __construct($pattern) {
		$this->pattern = $pattern;
	}

	public function match($string) {
		return is_string($string) && preg_match($this->pattern, $string);
	}

}
?>