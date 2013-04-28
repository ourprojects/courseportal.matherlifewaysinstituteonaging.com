<?php
class EModelBehaviors extends CBehavior {
	
	public function loadAttributes($inputName = null, $safeOnly = true)
	{
		if(empty($inputName))
			$inputName = get_class($this->getOwner());
		if(isset($_POST[$inputName])) {
			$this->getOwner()->setAttributes($_POST[$inputName], $safeOnly);
			return true;
		}
		return false;
	}
	
	public function getErrorsAsJSON()
	{
		$result = array();
		foreach($this->getOwner()->getErrors() as $attribute => $errors)
			$result[CHtml::activeId($this->getOwner(), $attribute)] = $errors;
		return function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
	}
	
	public function getRequiredAttributes($safeOnly = true) {
		return array_values(array_filter($safeOnly ? $this->getOwner()->getSafeAttributeNames() : $this->getOwner()->attributeNames(), 
				array($this->getOwner(), 'isAttributeRequired')));
	}
	
	public function isAttributeOptional($attrName) {
		return !$this->getOwner()->isAttributeRequired($attrName);
	}
	
	public function getOptionalAttributes($safeOnly = true) {
		return array_values(array_filter($safeOnly ? $this->getOwner()->getSafeAttributeNames() : $this->getOwner()->attributeNames(), 
				array($this, 'isAttributeOptional')));
	}
	
}
?>