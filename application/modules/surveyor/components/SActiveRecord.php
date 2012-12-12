<?php defined('BASEPATH') or exit('No direct script access allowed');  

class SActiveRecord extends CActiveRecord {
	
	public function behaviors() {
		return array_merge(parent::behaviors(), array('toArray' => array('class' => 'behaviors.EArrayBehavior')));
	}
	
	public function getRequiredAttributes($safeOnly = true) {
		return array_values(array_filter($safeOnly ? $this->getSafeAttributeNames() : $this->attributeNames(), array($this, 'isAttributeRequired')));
	}
	
	public function isAttributeOptional($attrName) {
		return !$this->isAttributeRequired($attrName);
	}
	
	public function getOptionalAttributes($safeOnly = true) {
		return array_values(array_filter($safeOnly ? $this->getSafeAttributeNames() : $this->attributeNames(), array($this, 'isAttributeOptional')));
	}
	
}

?>