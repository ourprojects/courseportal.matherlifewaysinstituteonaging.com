<?php

class EFilterRawModelDataBehavior extends CModelBehavior
{

	public function filter(array $data)
	{
		$attributes = $this->getOwner()->getAttributes($this->getOwner()->getSafeAttributeNames());

		if(!empty($attributes))
		{
			foreach($data as $rowIndex => $row)
			{
				foreach($attributes as $name => $value)
				{
					if(!empty($value)
							&& array_key_exists($name, $row)
							&& stripos(strval($row[$name]), strval($value)) === false)
					{
						unset($data[$rowIndex]);
					}
				}
			}
		}
		return $data;
	}

}
?>