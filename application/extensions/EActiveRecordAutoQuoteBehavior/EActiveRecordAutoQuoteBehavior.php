<?php

class EActiveRecordAutoQuoteBehavior extends CActiveRecordBehavior
{

	const PARAM_PREFIX = ':aqp';

	/**
	 * @var integer the global counter for anonymous binding parameters.
	 * This counter is used for generating the name for the anonymous parameters.
	 */
	public static $paramCount = 0;

	public function autoQuoteExists($conditions, $params = array())
	{
		return $this->getOwner()->exists($this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteFind($conditions, $params = array())
	{
		return $this->getOwner()->find($this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteFindAll($conditions, $params = array())
	{
		return $this->getOwner()->findAll($this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteFindAllByAttributes($attributes, $conditions, $params = array())
	{
		return $this->getOwner()->findAllByAttributes($attributes, $this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteFindByPk($pk, $conditions, $params = array())
	{
		return $this->getOwner()->findByPk($pk, $this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteCount($conditions, $params = array())
	{
		return $this->getOwner()->count($this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteCountByAttributes($attributes, $conditions, $params = array())
	{
		return $this->getOwner()->countByAttributes($attributes, $this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteDeleteAll($conditions, $params = array())
	{
		return $this->getOwner()->deleteAll($this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteDeleteAllByAttributes($attributes, $conditions, $params = array())
	{
		return $this->getOwner()->deleteAllByAttributes($attributes, $this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteDeleteByPk($pk, $conditions, $params = array())
	{
		return $this->getOwner()->deleteByPk($pk, $this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteUpdateAll($attributes, $conditions, $params = array())
	{
		return $this->getOwner()->updateAll($attributes, $this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteUpdateByPk($attributes, $conditions, $params = array())
	{
		return $this->getOwner()->updateByPk($attributes, $this->processConditions($conditions, $params), $params);
	}

	public function autoQuoteUpdateCounters($counters, $conditions, $params = array())
	{
		return $this->getOwner()->updateCounters($counters, $this->processConditions($conditions, $params), $params);
	}

	public function processConditions($conditions, &$params)
	{
		if(!is_array($conditions))
		{
			return $conditions;
		}
		elseif($conditions === array())
		{
			return '';
		}

		$conds = array_merge(array(), $conditions);
		$operator = strtoupper(array_shift($conds));
		if($operator === 'OR' || $operator === 'AND')
		{
			$dbConnection = $this->getOwner()->getDbConnection();
			$parts = array();
			foreach($conds as $column => $value)
			{
				if(!is_array($value) && is_string($column))
				{
					if(strpos($column, '(') === false)
					{
						if(strpos($column, '.') !== false && $dbConnection->tablePrefix !== null && strpos($column, '{{') !== false)
						{
							$column = preg_replace('/\{\{(.*?)\}\}/', $dbConnection->tablePrefix.'$1', $column);
						}
						$column = $dbConnection->quoteColumnName($column);
					}
					if($value === null)
					{
						$parts[] = $column.' IS NULL';
					}
					else
					{
						if(is_string($value) && preg_match('/^(?:\s*(<>|<=|>=|<|>|=|\!=))(.*)$/', $value, $matches))
						{
							$value = $matches[2];
							$op = $matches[1];
						}
						else
						{
							$op = '=';
						}
						$parts[] = '('.$column.$op.self::PARAM_PREFIX.self::$paramCount.')';
						$params[self::PARAM_PREFIX.self::$paramCount++] = $value;
					}
				}
				else
				{
					$value = $this->processConditions($value, $params);
					if($value !== '')
					{
						$parts[] = '('.$value.')';
					}
				}
			}
			return implode(' '.$operator.' ', $parts);
		}

		$column = array_shift($conds);
		if($column === null || !is_string($column))
		{
			throw new CDbException('Malformed query condition. When operator is not "AND" or "OR" the second parameter must be a column name.');
		}
		elseif(strpos($column, '(') === false)
		{
			$column = $this->getOwner()->getDbConnection()->quoteColumnName($column);
		}

		if(empty($conds))
		{
			$values = array();
		}
		else
		{
			$values = array_shift($conds);
			if(!is_array($values))
			{
				$values = array($values);
			}
		}

		if($operator === 'IN' || $operator === 'NOT IN')
		{
			if($values === array())
			{
				return $operator === 'IN' ? '0=1' : '';
			}
			foreach($values as $i => $value)
			{
				$values[$i] = self::PARAM_PREFIX.self::$paramCount;
				$params[self::PARAM_PREFIX.self::$paramCount++] = $value;
			}
			return $column.' '.$operator.' ('.implode(', ', $values).')';
		}

		if($operator === 'LIKE' ||
				$operator === 'NOT LIKE' ||
				$operator === 'OR LIKE' ||
				$operator === 'OR NOT LIKE' ||
				$operator === 'REGEXP' ||
				$operator === 'NOT REGEXP' ||
				$operator === 'OR REGEXP' ||
				$operator === 'OR NOT REGEXP')
		{
			if($values === array())
			{
				return $operator === 'LIKE' || $operator === 'OR LIKE' ? '0=1' : '';
			}

			if(strpos($operator, 'OR ') === false)
			{
				$andor = ' AND ';
			}
			else
			{
				$andor = ' OR ';
				$operator = preg_replace('/^OR (.+)$/', '$1', $operator);
			}
			$expressions = array();
			foreach($values as $value)
			{
				$expressions[] = '('.$column.' '.$operator.' '.self::PARAM_PREFIX.self::$paramCount.')';
				$params[self::PARAM_PREFIX.self::$paramCount++] = $value;
			}
			return '('.implode($andor, $expressions).')';
		}

		throw new CDbException(Yii::t('yii', 'Unknown operator "{operator}".', array('{operator}' => $operator)));
	}

}
?>