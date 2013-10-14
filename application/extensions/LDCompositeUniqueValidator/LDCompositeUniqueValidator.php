<?php
/**
 * LDCompositeUniqueValidator class file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * LDCompositeUniqueValidator validates that the attribute(s) value(s) is/are unique in the corresponding database table.
 *
 * When using the {@link message} property to define a custom error message, the message
 * may contain additional placeholders that will be replaced with the actual content. In addition
 * to the "{attribute}" placeholder, recognized by all validators (see {@link CValidator}),
 * CUniqueValidator allows for the following placeholders to be specified:
 * <ul>
 * <li>{value}: replaced with current value of the attribute.</li>
 * </ul>
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class LDCompositeUniqueValidator extends CValidator
{
	
	/**
	 * @var boolean whether the comparison is case sensitive. Defaults to true.
	 * Note, by setting it to false, you are assuming the attribute type is string.
	 */
	public $caseSensitive = true;
	
	/**
	 * @var boolean whether the attribute value can be null or empty. Defaults to true,
	 * meaning that if the attribute is empty, it is considered valid.
	 */
	public $allowEmpty = true;
	
	/**
	 * @var string the ActiveRecord class name that should be used to
	 * look for the attribute value being validated. Defaults to null, meaning using
	 * the class of the object currently being validated.
	 * You may use path alias to reference a class name here.
	 * @see attributeName
	 */
	public $className;
	
	/**
	 * @var string the ActiveRecord class attribute name that should be
	 * used to look for the attribute value being validated. Defaults to null,
	 * meaning using the name of the attribute being validated.
	 * @see className
	 */
	public $attributeName;
	
	/**
	 * @var mixed additional query criteria. Either an array or CDbCriteria.
	 * This will be combined with the condition that checks if the attribute
	 * value exists in the corresponding table column.
	 * This array will be used to instantiate a {@link CDbCriteria} object.
	 */
	public $criteria = array();
	
	/**
	 * @var string the user-defined error message. The placeholders "{attribute}" and "{value}"
	 * are recognized, which will be replaced with the actual attribute name and value, respectively.
	 */
	public $message;
	
	/**
	 * @var boolean whether this validation rule should be skipped if when there is already a validation
	 * error for the current attribute. Defaults to true.
	 */
	public $skipOnError = true;
	
	/**
	 * Validates the attribute of the object.
	 * If there is any error, the error message is added to the object.
	 * @param CModel $object the object being validated
	 * @param string $attribute the attribute being validated
	 */
	protected function validateAttribute($object, $attribute)
	{
		$attributes = array_flip(preg_split('/[\s+]+/', trim($attribute), -1, PREG_SPLIT_NO_EMPTY));
		$attributeCount = count($attributes);
		foreach($attributes as $attributeName => &$config)
		{
			$config = array('value' => $object->$attributeName);
			if(is_array($config['value']))
			{
				// https://github.com/yiisoft/yii/issues/1955
				$this->addError($object, $attributeName, Yii::t('yii', '{attribute} is invalid.'));
				return;
			}
			$allowEmpty = is_array($this->allowEmpty) ? (isset($this->allowEmpty[$attributeName]) ? $this->allowEmpty[$attributeName] : true) : $this->allowEmpty;
			if($allowEmpty && $this->isEmpty($config['value']))
			{
				unset($attributes[$attributeName]);
			}
			else
			{
				$config['attributeName'] = is_array($this->attributeName) && isset($this->attributeName[$attributeName]) ? $this->attributeName[$attributeName] : $attributeName;
				$config['caseSensitive'] = is_array($this->caseSensitive) ? (isset($this->caseSensitive[$attributeName]) ? $this->caseSensitive[$attributeName] : true) : $this->caseSensitive;
			}
		}
		
		if(empty($attributes))
		{
			return;
		}
		
		if($attributeCount === 1 && isset($this->attributeName) && !is_array($this->attributeName))
		{
			$config = reset($attributes);
			$attributeName = key($attributes);
			$config['attributeName'] = $this->attributeName;
			$attributes[$attributeName] = $config;
		}

		$className = $this->className === null ? get_class($object) : Yii::import($this->className);
		
		$finder = $this->getModel($className);
		$table = $finder->getTableSchema();
		
		$criteria = new CDbCriteria();
		$criteria->mergeWith($this->criteria);
		
		$tableAlias = empty($criteria->alias) ? $finder->getTableAlias(true) : $criteria->alias;
		
		$columns = array();
		$primaryKeyColumn = null;
		$dbConnection = $finder->getDbConnection();
		foreach($attributes as $attributeName => &$config)
		{
			$columnName = $config['attributeName'];
			$column = $table->getColumn($columnName);
			if($column === null)
			{
				throw new CException(Yii::t('yii', 'Table "{table}" does not have a column named "{column}".',
						array('{column}' => $columnName,'{table}' => $table->name)));
			}
			if($column->isPrimaryKey)
			{
				$primaryKeyColumn = $column;
			}
			$valueParamName = CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount++;
			$criteria->addCondition($config['caseSensitive'] ? "{$tableAlias}.{$column->rawName}={$valueParamName}" : "LOWER({$tableAlias}.{$column->rawName})=LOWER({$valueParamName})");
			$criteria->params[$valueParamName] = $config['value'];
		}
		
		if(!$object instanceof CActiveRecord || $object->getIsNewRecord() || $object->tableName() !== $finder->tableName())
		{
			$exists = $finder->exists($criteria);
		}
		else
		{
			$criteria->limit = 2;
			$objects = $finder->findAll($criteria);
			$n = count($objects);
			if($n === 1)
			{
				if(isset($primaryKeyColumn)) // check if primary key is modified and not unique
				{ 
					$exists = $object->getOldPrimaryKey() != $object->getPrimaryKey();
				}
				else // non-primary key, need to exclude the current record based on PK
				{
					$exists = array_shift($objects)->getPrimaryKey() != $object->getOldPrimaryKey();
				}
			}
			else
			{
				$exists = $n > 1;
			}
		}

		if($exists)
		{
			$attrs = implode(', ', array_intersect_key($object->attributeLabels(), $attributes));
			if(isset($this->message))
			{
				$message = $this->message;
			}
			else
			{
				$message = Yii::t('yii', '{attribute} "{value}" has already been taken.');
				if(count($attributes) > 1)
				{
					$message .= Yii::t('yii', ' The combination of ({attributes}) should be unique in the current context.');
				}
			}
			foreach($attributes as $attributeName => &$config)
			{
				$this->addError($object, $attributeName, $message, array('{value}' => CHtml::encode($config['value']), '{attributes}' => $attrs));
			}
		}
	}
	
	/**
	 * Given an active record class name returns new model instance.
	 *
	 * @param string $className active record class name.
	 * @return CActiveRecord active record model instance.
	 */
	protected function getModel($className)
	{
		return CActiveRecord::model($className);
	}
	
}
