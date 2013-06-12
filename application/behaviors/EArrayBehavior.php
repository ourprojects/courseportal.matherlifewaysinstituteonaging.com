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
					if($prefixWithClassName)
					{
						$arr = $this->_toArray($activeRecord->getRelated($key), $value, $prefixWithClassName);
						if(isset($values[key($arr)]))
						{
							if(!isset($values[key($arr)][0]))
								$values[key($arr)] = array($values[key($arr)]);
							$values[key($arr)][] = $arr[key($arr)];
						}
						else
						{
							$values = array_merge($values, $arr);
						}
					}
					else
					{
						$values[$key] = $this->_toArray($activeRecord->getRelated($key), $value, $prefixWithClassName);
					}
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