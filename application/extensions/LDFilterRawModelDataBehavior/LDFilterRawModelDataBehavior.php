<?php
/**
 * LDFilterRawModelDataBehavior class file
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * LDFilterRawModelDataBehavior is designed to simplify filtering arrays of data that are associated with a model, but not derived from a database source.
 * This is especially useful when it is necessary to use {@link CArrayDataProvider} since that class only supports pagination and sorting, not filtering.
 * 
 * To use LDFilterRawModelDataBehavior attach this behavior to the model that your raw data array is associated with either inline 
 * using {@link CComponent::attachBehavior()} or {@link CComponent::attachBehaviors()} or statically as follows.
 * 
 * In associated model:
 * <pre>
 * public function behaviors()
 * {
 * 		return array(
 * 			'LDFilterRawModelDataBehavior' => array(
 * 				'class' => 'ext.LDFilterRawModelDataBehavior.LDFilterRawModelDataBehavior', // or wherever this class is located in your app
 * 				'callbacks' => array() // optionally specify this attribute if you always need custom comparisons done on certain attributes in your data 
 * 			)
 * 		);
 * }
 * </pre>
 * 
 * When you want to filter an array of data set the attribute values of your model as you would normally when filtering data using {@link CActiveDataProvider}.
 * Then call the {@see LDFilterRawModelDataBehavior::filter()} method that this behavior has added to your model. Pass the method your raw data and
 * the filtered form of that data will be returned to you. 
 * 
 * A basic example using a {@link CArrayDataProvider} with a {@link CGridView}:
 * 
 * Controller action:
 * <pre>
 * public function actionFoo()
 * {
 * 		$fooModel = new FooModel();
 * 		if(isset($_POST['FooModel']))
 * 		{
 * 			$fooModel->setAttributes($_POST['FooModel']);
 * 		}
 * 		$rawFooData = $this->generateRawFooData();
 * 		$filteredRawFooData = $fooModel->filter($rawFooData);
 * 		$dataProvider = new CArrayDataProvider($filteredRawFooData);
 * 		$this->render('foo', array('model' => $fooModel, 'dataProvider' => $dataProvider));
 * }
 * </pre>
 * 
 * View 'foo':
 * <pre>
 * $this->widget('zii.widgets.grid.CGridView',
 *		array(
 *			'filter' => $model,
 *			'dataProvider' => $dataProvider,
 *			'columns' => array(
 *				...
 *			)
 *		)
 *	);
 * </pre>
 * 
 * By default this behavior will only filter, or unset, a data row if BOTH of the following conditions are TRUE. 
 * 	1. The function empty() returns true on the associated model attribute's value.
 * 	2. There is a partial match between the string value of the associated model attribute's value and the raw data value.
 * 
 * If you need to specify different comparisons for your data you may optionally specify custom callbacks for comparing attributes 
 * by setting the {@see LDFilterRawModelDataBehavior::$callbacks} property. This property can be set in the behavior's configuration or 
 * can be passed on the fly to the {@see LDFilterRawModelDataBehavior::filter()} method.
 * If a callback is set for a particular attribute the return value of your defined callback will be used to determine whether the 
 * row should be filtered or not.
 * Your callback must strictly return false for the data row to be filtered. Any oher value will not cause the data row to be filtered.
 * Your callback should accept 3 parameters as follows:
 * 	1. The name of the attribute
 * 	2. The model's attribute's value
 * 	3. The associated raw data row's attribute's value
 * 
 * Also by default the {@see LDFilterRawModelDataBehavior::filter()} method will only compare safe attribute values. This can be disabled
 * by passing false as the argument to the safeOnly parameter of the {@see LDFilterRawModelDataBehavior::filter()} method.
 * 
 * @property $callbacks array a list of comparison callbacks in the form array('attribute name' => 'callable')
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class LDFilterRawModelDataBehavior extends CModelBehavior
{
	
	/**
	 * Set this if you require custom comparisons to be done for certain attributes.
	 * The default comparison checks if the value is empty or if there is a partial match of the string value of the attribute and the data.
	 * If either is true the data row will NOT be filtered.
	 * 
	 * The comparison callback should explicitly return false if the data row should be filtered.
	 * Any other return value will NOT cause the row to be filtered.
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
	 * @param boolean $callbacks A list of comparison callbacks in the form array('attribute name' => 'callable') {@see LDFilterRawModelDataBehavior::$callbacks}
	 * @return array The filtered data
	 */
	public function filter(array $data, $safeOnly = true, $callbacks = null)
	{
		if(!isset($callbacks))
		{
			$callbacks = $this->callbacks;
		}
		
		$owner = $this->getOwner();
		$attributes = array();
		foreach(($safeOnly ? $owner->getSafeAttributeNames() : $owner->attributeNames()) as $attributeName)
		{
			$attributes[$attributeName] = $owner->$attributeName;
		}

		foreach($data as $rowIndex => $row)
		{
			foreach($attributes as $name => $value)
			{
				if(isset($callbacks[$name]))
				{
					if(call_user_func($callbacks[$name], $name, $value, $row) !== false)
					{
						continue;
					}
				}
				else if($value === null)
				{
					continue;
				}
				
				if(is_array($row))
				{
					if(array_key_exists($name, $row))
					{
						$rowValue = $row[$name];
					}
					else
					{
						continue;
					}
				}
				else if($row instanceof CComponent)
				{
					if($row->canGetProperty($name))
					{
						$rowValue = $row->$name;
					}
					else
					{
						continue;
					}
				}
				else
				{
					$rowValue = $row;
				}

				if(is_string($rowValue))
				{
					if(stripos($rowValue, strval($value)) !== false)
					{
						continue;
					}
				}
				else if($rowValue == $value)
				{
					continue;
				}
				unset($data[$rowIndex]);
				break;
			}
		}
		
		return $data;
	}

}
?>