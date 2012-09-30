<?php

class DbCriteria extends CDbCriteria {
	
	public static function instance($data = array()) {
		return new CDbCriteria($data);
	}
	
}