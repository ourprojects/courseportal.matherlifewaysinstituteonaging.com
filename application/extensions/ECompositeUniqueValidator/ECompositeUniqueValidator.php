<?php
/**
 * ECompositeUniqueValidator class file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class ECompositeUniqueValidator extends CUniqueValidator
{

	/**
	 * Validates the attribute of the object.
	 * If there is any error, the error message is added to the object.
	 * @param CModel $object the object being validated
	 * @param string $attribute the attribute being validated
	 */
	protected function validateAttribute($object, $attribute)
	{
		$value = $object->$attribute;
		if($this->allowEmpty && $this->isEmpty($value))
		{
			return;
		}
		
		if($this->attributeName === null || $this->attributeName === array())
		{
			$attributeNames = array($attribute);
		}
		else
		{
			$attributeNames = is_array($this->attributeName) ? $this->attributeName : array($this->attributeName);
		}

		$className = $this->className === null ? get_class($object) : Yii::import($this->className);
		
		$finder = CActiveRecord::model($className);
		$table = $finder->getTableSchema();
		
		$criteria = new CDbCriteria();
		if($this->criteria !== array())
		{
			$criteria->mergeWith($this->criteria);
		}
		$tableAlias = empty($criteria->alias) ? $finder->getTableAlias(true) : $criteria->alias;
		
		$columns = array();
		$primaryKeyColumn = null;
		foreach($attributeNames as $attributeName)
		{
			$column = $table->getColumn($attributeName);
			if($column === null)
			{
				throw new CException(Yii::t('yii','Table "{table}" does not have a column named "{column}".',
						array('{column}' => $attributeName,'{table}' => $table->name)));
			}
			if($column->isPrimaryKey)
			{
				$primaryKeyColumn = $column;
			}
			$valueParamName = CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount++;
			$criteria->addCondition($this->caseSensitive ? "{$tableAlias}.{$column->rawName} = {$valueParamName}" : "LOWER({$tableAlias}.{$column->rawName}) = LOWER({$valueParamName})");
			$criteria->params[$valueParamName] = $object->$attributeName;
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
			$message = $this->message !== null ? $this->message : Yii::t('yii', '{attribute} "{value}" has already been taken.');
			$this->addError($object, $attribute, $message, array('{value}' => CHtml::encode($value)));
		}
	}
	
}

