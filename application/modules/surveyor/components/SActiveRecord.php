<?php defined('BASEPATH') or exit('No direct script access allowed');  

class SActiveRecord extends CActiveRecord {
	
	public $translateAttributes = false;
	
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
	
	public function __get($name) {
		$value = parent::__get($name);
		if($this->translateAttributes) {
			if(is_string($value))
				$value = Surveyor::t($value);
			else if($value instanceof SActiveRecord)
				$value->translateAttributes = true;
			else if(is_array($value))
				array_walk_recursive($value, array($this, '_translateItem'));
		}
		return $value;
	}
	
	private function _translateItem(&$item, &$key) {
		if(is_string($item))
			$item = Surveyor::t($item);
		else if($item instanceof SActiveRecord)
			$item->translateAttributes = true;
	}
	
}

?>