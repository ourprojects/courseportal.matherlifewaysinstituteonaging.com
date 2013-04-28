<?php
class EArrayBehavior extends CBehavior {
	
	public function toArray($attributeNames = true, $relations = array()) {
		if(is_subclass_of($this->getOwner(),'CActiveRecord')) {
			return array(
					get_class($this->getOwner()) => array_merge(
								$this->getOwner()->getAttributes($attributeNames), 
								$this->getRelated($this->getOwner(), $attributeNames, $relations)
							)
					);
		}

		return false;
	}
	
	private function getRelated($activeRecord, $attributeNames, $relations) {	
		$related = array();
		
		foreach($relations as $name => $relation) {
			if(is_string($name)) {
				$ans = true;
				$rls = array();
				if(is_array($relation)) {
					if(isset($relation['relations'])) {
						$rls = $relation['relations'];
						unset($relation['relations']);
					} else {
						$rls = array();
					}
					$ans = isset($relation['attributeNames']) ? $relation['attributeNames'] : $relation;
				} else {
					$ans = array($relation);
				}
				
 				$related = array_merge($related, $activeRecord->getRelated($name)->toArray($ans, $rls));
			} else if(is_string($relation)) {
				$related = array_merge($related, $activeRecord->getRelated($relation)->toArray());
			}
		}
	    
	    return $related;
	}
	
}
?>