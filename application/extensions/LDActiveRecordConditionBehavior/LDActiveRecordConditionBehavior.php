<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class LDActiveRecordConditionBehavior extends CActiveRecordBehavior
{
	
	/**
	 * Generates an SQL expression for selecting rows of specified key values from the table
	 * of the CActiveRecord object this behavior is been attached to. A custom table name may be specified
	 * using the prefix parameter, but the table schema of this behavior's CActiveRecord owner will still
	 * be used to verify column names and cast column values. Quoting keys is not necessary as this will be done
	 * automaticallu. Escaping values is also not necessary as all values will be bound to the expression using 
	 * unqiue parameter names. 
	 * The method will return a two part array:
	 * 	The first part of the return value of this method is the SQL condition indexed in the returned array as 'condition'.
	 * 	The second part of the return value is a mapping of unique parameter names to values indexed in the returned array as 'params'.
	 * 
	 * @param mixed $columnName
	 *        	the column name(s). It can be either a string indicating a single column
	 *        	or an array of column names. If the latter, it stands for a composite key.
	 * @param mixed $values
	 *        	list of key values to be selected within
	 * @param string $prefix
	 *        	column prefix (WITHOUT dot ending!). If null, it will be the 
	 *        	table name alias of the active record this behavior is attached to.
	 * @param boolean $quoteTableName
	 * 			whether to quote the table alias or prefix name
	 * @param boolean $useAlternateCompositeKeyValueSyntax
	 * 			whether to use an alternate syntax for the array of key values.
	 * 			This parameter will only have an effect when columnName is an array (composite keys).
	 * @throws CDbException if specified column is not found in given table
	 * @return array In the form array('condition' => 'the expression for selection', 'params' => array('parameter name' => 'value to bind to parameter'))
	 */
	public function createCondition($columnName, $values, $prefix = null, $quoteTableName = true, $useAlternateCompositeKeyValueSyntax = false) 
	{
		if(!is_array($values))
		{
			$values = array($values);
			$n = 1;
		}
		else if(($n = count($values)) < 1)
		{
			return '0=1';
		}
		
		$owner = $this->getOwner();
		$table = $owner->getTableSchema();
		
		if($prefix === null)
		{
			$prefix = $owner->getTableAlias();
		}
		
		if($quoteTableName)
		{
			$prefix = $owner->getDbConnection()->quoteTableName($prefix);
		}
		
		$prefix .= '.';
		
		if(is_array($columnName) && count($columnName) === 1)
		{
			$columnName = reset($columnName);
		}
		
		if(is_string($columnName)) 		// simple key
		{
			if(!isset($table->columns[$columnName]))
			{
				throw new CDbException(Yii::t('yii', 'Table "{table}" does not have a column named "{column}".', array(
					'{table}' => $table->name,
					'{column}' => $columnName 
				)));
			}
			
			$column = $table->columns[$columnName];

			foreach($values as &$value)
			{
			    $value = $column->typecast($value);
			}
			
			if($n === 1) 
			{
				return $values[0] === null ? array('condition' => $prefix . $column->rawName . ' IS NULL', 'params' => array()) : array('condition' => $prefix . $column->rawName . '=' . CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount, 'params' => array(CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount++ => $values[0]));
			} 
			else 
			{
			    $params = array();
			    foreach($values as &$val)
			    {
			        $params[CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount++] = $val;
			    }
				return array('condition' => $prefix . $column->rawName . ' IN (' . implode(', ', array_keys($params)) . ')', 'params' => $params);
			}
		} 
		else if(is_array($columnName))	// composite key
		{
			if($useAlternateCompositeKeyValueSyntax) // compiste key format: array('key1' => array('v1', 'v2', 'v3', ...), 'key2' => array('v1', 'v2', 'v3', ...), ...)
			{
				// Make sure the value pointed to by each key is an array
				$values = array_map(create_function('$value', 'return is_array($value) ? $value : array($value);'), $values);
				// Make sure the arrays pointed to by each key is of the same length and return that length otherwise false if they are not the same length.
				if(($n = array_reduce($values, create_function('$count, $arr', 'return $count = ($count === -1 ? count($arr) : ($count === false || $count !== count($arr) ? false : $count));'), -1)) === false)
				{
					throw new CException(TranslateModule::t('Key value arrays are not of equal length.'));
				}
				// Check column names, cast values, and convert to more managable 'normal' array syntax for simpler generation of condition expressions.
				$vs = array();
				foreach($columnName as $name) 
				{
					if (!isset($table->columns[$name]))
					{
						throw new CDbException (Yii::t('yii', 'Table "{table}" does not have a column named "{column}".', array(
							'{table}' => $table->name,
							'{column}' => $name 
						)));
					}
					
					for($i = 0; $i < $n; ++$i) 
					{
						if(isset($values[$name][$i])) 
						{
							$vs[$i][$name] = $table->columns[$name]->typecast($values[$name][$i]);
						} 
						else
						{
							throw new CDbException (Yii::t('yii', 'The value for the column "{column}" is not supplied when querying the table "{table}".', array(
								'{table}' => $table->name,
								'{column}' => $name 
							)));
						}
					}
				}
				$values = $vs;
			}
			else // composite key format: array(array('key1' => 'value1', 'key2' => 'value2', ...), array(...))
			{
				foreach($columnName as $name) 
				{
					if (!isset($table->columns[$name]))
					{
						throw new CDbException (Yii::t('yii', 'Table "{table}" does not have a column named "{column}".', array(
							'{table}' => $table->name,
							'{column}' => $name 
						)));
					}
	
					for($i = 0; $i < $n; ++$i) 
					{
						if(isset($values[$i][$name])) 
						{
							$values[$i][$name] = $table->columns[$name]->typecast($values[$i][$name]);
						} 
						else
						{
							throw new CDbException (Yii::t('yii', 'The value for the column "{column}" is not supplied when querying the table "{table}".', array(
								'{table}' => $table->name,
								'{column}' => $name 
							)));
						}
					}
				}
			}
			
			if(count($values) === 1) 
			{
				$entries = array();
				$params = array();
				foreach($values[0] as $name => $value)
				{
				    if($value === null)
				    {
					   $entries[] = $prefix . $table->columns[$name]->rawName . ' IS NULL';
				    }
				    else
				    {
			           $entries[] = $prefix . $table->columns[$name]->rawName . '=' . CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount;
			           $params[CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount++] = $value;
				    }
				}
				return array('condition' => implode(' AND ', $entries), 'params' => $params);
			}
			
			$keyNames = array();
			foreach(array_keys($values[0]) as $name)
			{
			    $keyNames[] = $prefix.$table->columns[$name]->rawName;
			}
			$params = array();
			$vs = array();
			foreach($values as &$value)
			{
				$ps = array();
				foreach($value as &$v)
				{
					$ps[CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount] = $params[CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount++] = $v;
				}
			    $vs[] = '('.implode(', ', array_keys($ps)).')';
			}
			return array('condition' => '('.implode(', ',$keyNames).') IN ('.implode(', ', $vs).')', 'params' => $params);
		} 
		else
		{
			throw new CDbException(Yii::t('yii', 'Column name must be either a string or an array.'));
		}
	}
	
	/**
	 * A utility function for converting array formats for use with the condition generator function of this behavior.
	 * 
	 * In format:
	 * array('key1' => array('v1', 'v2', 'v3', ...), 'key2' => array('v1', 'v2', 'v3', ...), ...)
	 * 
	 * Out format:
	 * array(array('key1' => 'v1', 'key2' => 'v1', ...), array('key1' => 'v2', 'key2' => 'v2', ...), array('key1' => 'v3', 'key2' => 'v3', ...), ...)
	 * 
	 * @param array $values The array values to be converted in the form: array('key1' => array('v1', 'v2', 'v3', ...), 'key2' => array('v1', 'v2', 'v3', ...), ...)
	 * @throws CException thrown if input arrays are not of equal length
	 * @return array A 'combined' array in the form: array(array('key1' => 'v1', 'key2' => 'v1', ...), array('key1' => 'v2', 'key2' => 'v2', ...), array('key1' => 'v3', 'key2' => 'v3', ...), ...)
	 */
	public function combineValues($values)
	{
		if(empty($values))
		{
			return $values;
		}
		$values = array_map(create_function('$value', 'return is_array($value) ? $value : array($value);'), $values);
		if(($n = array_reduce($values, create_function('$count, $arr', 'return $count = ($count === -1 ? count($arr) : ($count === false || $count !== count($arr) ? false : $count));'), -1)) === false)
		{
			throw new CException(TranslateModule::t('Key value arrays are not of equal length.'));
		}
		$combinedValues = array();
		foreach(array_keys($values) as $key)
		{
			for($i = 0; $i < $n; $i++)
			{
				$combinedValues[$i][$key] = $values[$key][$i]; 
			}
		}
		return $combinedValues;
	}
	
}