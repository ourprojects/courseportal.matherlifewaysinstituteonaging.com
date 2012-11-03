<?php defined('BASEPATH') or exit('No direct script access allowed');  

class ActiveRecord extends CActiveRecord {
	
	public function behaviors() {
		return array_merge(parent::behaviors(), array('toArray' => array('class' => 'behaviors.EArrayBehavior')));
	}
	
	public function getRequiredAttributes() {
		$requiredAttributeNames = array();
		foreach($this->getSafeAttributeNames() as $attrName) {
			if($this->isAttributeRequired($attrName))
				$requiredAttributeNames[] = $attrName;
		}
	}
	
	public function getOptionalAttributes() {
		$optionalAttributeNames = array();
		foreach($this->getSafeAttributeNames() as $attrName) {
			if($this->isAttributeRequired($attrName))
				$optionalAttributeNames[] = $attrName;
		}
		return $optionalAttributeNames;
	}
	
}

?>