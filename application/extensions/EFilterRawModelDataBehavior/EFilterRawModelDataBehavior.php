<?php
/**
 * EFilterRawModelDataBehavior class file
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * EFilterRawModelDataBehavior is designed to simplify filtering arrays of data that are associated with a model.
 * This is especially useful for {@link CArrayDataProvider} since that class only supports pagination and sorting, not filtering.
 * 
 * To use EFilterRawModelDataBehavior attach this behavior to the model your raw data is associated with as follows.
 * 
 * <pre>
 * public function behaviors()
 * {
 * 		return array(
 * 			'EFilterRawModelDataBehavior' => array(
 * 				'class' => 'ext.EFilterRawModelDataBehavior.EFilterRawModelDataBehavior', // or wherever this class is located in your app
 * 				'callbacks' => array() // optionally specify this attribute if you always need custom comparisons done on certain attributes in your data 
 * 			)
 * 		);
 * }
 * </pre>
 * 
 * When you need to filter an array of data set the attribute values of your model as you would normally when filtering data using {@link CActiveDataProvider}.
 * Then call the {@see EFilterRawModelDataBehavior::filter()} method this behavior has added to your model. Pass the method your raw data and
 * the filtered form of that data will be returned. 
 * 
 * By default this behavior will only filter, or unset, a data row by checking if the function empty() returns true on the value 
 * of the attribute of the model this behavior is attached to, or if there is a partial match between the string value of the 
 * raw data item and the model attribute value.
 * If you need to specify a different comparison for your data you may optionally specify custom callbacks for comparing data attributes 
 * by setting the {@see EFilterRawModelDataBehavior::$callbacks} property. This property can be set in the behavior's declaration or 
 * can be passed on the fly to the {@see EFilterRawModelDataBehavior::filter()} method.
 * Also by default the {@see EFilterRawModelDataBehavior::filter()} method will only compare safe attribute values. This can be disabled
 * by passing false as the safeOnly parameter of the {@see EFilterRawModelDataBehavior::filter()} method.
 * 
 * @property $callbacks array a list of comparison callbacks in the form array('attribute name' => 'callable')
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class EFilterRawModelDataBehavior extends CModelBehavior
{
	
	/**
	 * Set this if you require custom comparisons to be done for certain attributes.
	 * The default comparison checks if the value is empty or if there is a partial match of the string value of the attribute and the data.
	 * If either is true the data row will not be filtered.
	 * 
	 * The comparison callback should explicitly return false if the data row should be filtered.
	 * 
	 * @var array a list of comparison callbacks in the form array('attribute name' => 'callable')
	 */
	public $callbacks = array();

	/**
	 * Filters an array of data using the attribute values of the model that owns this behavior.
	 * Each index/row of the data array is expected to be in the format array('attribute name' => 'attribute value', ...)
	 * 
	 * @param array $data The data to be filtered
	 * @param boolean $safeOnly Whether only safe attributes should be considered when filtering the data. Defaults to true.
	 * @param boolean $callbacks A list of comparison callbacks in the form array('attribute name' => 'callable') {@see EFilterRawModelDataBehavior::$callbacks}
	 * @return array The filtered data
	 */
	public function filter(array $data, $safeOnly = true, $callbacks = null)
	{
		if(!isset($callbacks))
		{
			$callbacks = $this->callbacks;
		}
		
		$owner = $this->getOwner();
		$attributes = $owner->getAttributes($safeOnly ? $owner->getSafeAttributeNames() : null);

		foreach($data as $rowIndex => $row)
		{
			foreach($attributes as $name => $value)
			{
				if(array_key_exists($name, $row))
				{
					if(isset($callbacks[$name]))
					{
						if(call_user_func($callbacks[$name], $name, $value, $row) !== false)
						{
							continue;
						}
					}
					else if(empty($value) || stripos(strval($row[$name]), strval($value)) !== false)
					{
						continue;
					}
					unset($data[$rowIndex]);
					break;
				}
			}
		}
		
		return $data;
	}

}
?>