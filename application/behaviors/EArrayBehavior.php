<?php
/**
 * 
 * This behavior simplifies using ActiveRecords as arrays of attributes.
 * 
 * @author Louis DaPrato
 *
 */
class EArrayBehavior extends CBehavior 
{
	
	public function toArray($attributes = true, $prefixWithClassName = false) 
	{
		return $this->_toArray($this->getOwner(), $attributes, $prefixWithClassName);
	}
	
	protected function _toArray($activeRecord, &$attributes, &$prefixWithClassName)
	{
		if(is_array($attributes))
		{
			$values = array();
			foreach($attributes as $key => &$value)
			{
				if(is_string($key))
				{
					$values[$key] = $this->_toArray($activeRecord->getRelated($key), $value, $prefixWithClassName);
				}
				else
				{
					$values[$value] = $activeRecord->getAttribute($value);
				}
			}
		}
		else if(is_string($attributes))
		{
			$values = array($attributes => $activeRecord->getAttribute($attributes));
		}
		else
		{
			$values = $activeRecord->getAttributes($attributes);
		}
			
		return $prefixWithClassName ? array(get_class($activeRecord) => $values) : $values;
	}
	
}
?>