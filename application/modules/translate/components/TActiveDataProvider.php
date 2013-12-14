<?php
/**
 * TActiveDataProvider class file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * TActiveDataProvider implements a data provider based on a CActiveDataProvider, but also 
 * allowing data to be searched and sorted based on some virtual attribute that cannot be derived via SQL.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */
class TActiveDataProvider extends CActiveDataProvider
{
	
	public $virtualAttributes = array();
	
	private $_virtAttrsCriteria;

	/**
	 * Fetches the data from the persistent data storage.
	 * @return array list of data items
	 */
	protected function fetchData()
	{
		if(!isset($this->_virtAttrsCriteria))
		{
			$pagination = $this->getPagination();
			$this->setPagination(false);
			$sort = $this->getSort();
			$this->setSort(false);
			
			$data = parent::fetchData();
			foreach($this->virtualAttributes as $attr => $config)
			{
				if($this->model->$attr !== null && $this->model->$attr !== '')
				{
					foreach($data as $key => $value)
					{
						if($config)
						{
							if($value->$attr === $this->model->$attr)
							{
								continue;
							}
						}
						else if(is_string($value->$attr))
						{
							if(stripos($value->$attr, $this->model->$attr) !== false)
							{
								continue;
							}
						}
						else if($value->$attr == $this->model->$attr)
						{
							continue;
						}
						unset($data[$key]);
					}
				}
			}
			
			$this->_virtAttrsCriteria = new CDbCriteria();
			foreach($data as $item)
			{
				if($this->keyAttribute === null)
				{
					if(is_array($item->getPrimaryKey()))
					{
						foreach($item->getPrimaryKey() as $attr => $value)
						{
							$columnCondition[$item->getTableAlias().'.'.$attr] = $value;
						}
					}
					else 
					{
						$columnCondition = array($item->getTableAlias().'.'.$item->getTableSchema()->primaryKey => $item->getPrimaryKey());
					}
				}
				else
				{
					$columnCondition = array($item->getTableAlias().'.'.$this->keyAttribute => $item->{$this->keyAttribute});
				}
				$this->_virtAttrsCriteria->addColumnCondition($columnCondition, 'AND', 'OR');
			}
			
			$this->setPagination($pagination);
			$this->setSort($sort);
			
		}
		$criteria = $this->getCriteria();
		$virtCriteria = clone $criteria;
		$virtCriteria->mergeWith($this->_virtAttrsCriteria);
		$this->setCriteria($virtCriteria);
		$data = parent::fetchData();
		$this->setCriteria($criteria);

		return $data;
	}

	/**
	 * Calculates the total number of data items.
	 * @return integer the total number of data items.
	 */
	protected function calculateTotalItemCount()
	{
		$pagination = $this->getPagination();
		$this->setPagination(false);
		$sort = $this->getSort();
		$this->setSort(false);
		$count = count($this->fetchData());
		$this->setPagination($pagination);
		$this->setSort($sort);
		return $count;
	}
	
}
