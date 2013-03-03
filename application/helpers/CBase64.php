<?php

class CBase64 {

	public static function urlEncode($base64) {
		return strtr($base64, '+/=', '-_,');
	}
	
	public static function urlDecode($base64) {
		return strtr($base64, '-_,', '+/=');
	}

}

?>