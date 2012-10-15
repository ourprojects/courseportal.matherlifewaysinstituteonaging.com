<?php defined('BASEPATH') or exit('No direct script access allowed');  

function flattenAndImplode($array, $glue = '', $prefix = '', $recursive = true) {
	foreach($array as $key => $value) {
		$key = trim($key);
		$value = trim($value);
		if(!empty($key) && $key !== '..')
			$prefix .= $glue . $key;
		if(!empty($value) && $value !== '..')
			if(is_array($value) && $recursive)
				$prefix = flattenAndImplode($value, $glue, $prefix, $recursive);
			else
				$prefix .= $glue . $value;
	}
	return ltrim($prefix, $glue);
}