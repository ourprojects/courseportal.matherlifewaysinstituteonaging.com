<?php

class EActiveRecordAutoQuoteBehavior extends CActiveRecordBehavior
{

	public function autoQuoteFind($conditions, $params = array())
	{
		return $this->getOwner()->find($this->processConditions($conditions), $params);
	}

	public function autoQuoteFindAll($conditions, $params = array())
	{
		return $this->getOwner()->findAll($this->processConditions($conditions), $params);
	}

	public function autoQuoteFindAllByAttributes($attributes, $conditions, $params = array())
	{
		return $this->getOwner()->findAllByAttributes($attributes, $this->processConditions($conditions), $params);
	}

	public function autoQuoteFindAllByPk($pk, $conditions, $params = array())
	{
		return $this->getOwner()->findAllByPk($pk, $this->processConditions($conditions), $params);
	}

	/**
	 * Copied from CDbCommand
	 * Generates the condition string that will be put in the WHERE part
	 * @param mixed $conditions the conditions that will be put in the WHERE part.
	 * @throws CDbException if unknown operator is used
	 * @return string the condition string to put in the WHERE part
	 */
	public function processConditions($conditions)
	{
		if(!is_array($conditions))
		{
			return $conditions;
		}
		elseif($conditions === array())
		{
			return '';
		}
		$operator = strtoupper($conditions[0]);
		if($operator === 'OR' || $operator === 'AND')
		{
			$parts = array();
			for($i = 1, $n = count($conditions); $i < $n; ++$i)
			{
				$condition = $this->processConditions($conditions[$i]);
				if($condition !== '')
				{
					$parts[] = '('.$condition.')';
				}
			}
			return $parts === array() ? '' : implode(' '.$operator.' ', $parts);
		}

		if(!isset($conditions[1], $conditions[2]))
		{
			return '';
		}

		$column = $conditions[1];
		if(strpos($column, '(') === false)
		{
			$column = $this->getOwner()->getDbConnection()->quoteColumnName($column);
		}

		$values = $conditions[2];
		if(!is_array($values))
		{
			$values = array($values);
		}

		if($operator === 'IN' || $operator === 'NOT IN')
		{
			if($values === array())
			{
				return $operator === 'IN' ? '0=1' : '';
			}
			foreach($values as $i => $value)
			{
				if(is_string($value))
				{
					$values[$i] = $this->getOwner()->getDbConnection()->quoteValue($value);
				}
				else
				{
					$values[$i] = (string)$value;
				}
			}
			return $column.' '.$operator.' ('.implode(', ', $values).')';
		}

		if($operator === 'LIKE' || $operator === 'NOT LIKE' || $operator === 'OR LIKE' || $operator === 'OR NOT LIKE')
		{
			if($values === array())
			{
				return $operator === 'LIKE' || $operator === 'OR LIKE' ? '0=1' : '';
			}

			if($operator === 'LIKE' || $operator === 'NOT LIKE')
			{
				$andor = ' AND ';
			}
			else
			{
				$andor = ' OR ';
				$operator = $operator === 'OR LIKE' ? 'LIKE' : 'NOT LIKE';
			}
			$expressions = array();
			foreach($values as $value)
			{
				$expressions[] = $column.' '.$operator.' '.$this->getOwner()->getDbConnection()->quoteValue($value);
			}
			return implode($andor, $expressions);
		}

		throw new CDbException(Yii::t('yii', 'Unknown operator "{operator}".', array('{operator}' => $operator)));
	}

}
?>