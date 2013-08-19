<?php
/**
 * AuthItem class file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * AuthItem is the models for authManager items (operations, tasks and roles)
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * @package srbac.models
 */
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'SrbacUtilities.php');

class AuthItem extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'authitem':
	 * @var integer $id
	 * @var string $name
	 * @var integer $type
	 * @var string $description
	 * @var string $bizrule
	 * @var string $data
	 */

	/**
	 * The following are available virtual column attributes
	 * @var boolean $generated
	 * @var string $fullName
	 */

	public static $TYPES = array(
			CAuthItem::TYPE_OPERATION => 'Operation',
			CAuthItem::TYPE_TASK => 'Task',
			CAuthItem::TYPE_ROLE => 'Role'
	);

	public $generated = false;

	public function getDbConnection()
	{
		return Yii::app()->getAuthManager()->db;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return Yii::app()->getAuthManager()->itemTable;
	}

	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
				),
				'EFilterRawModelDataBehavior' => array(
						'class' => 'ext.EFilterRawModelDataBehavior.EFilterRawModelDataBehavior',
				)
		);
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
				array('id', 'unsafe'),
				array('id', 'numerical', 'integerOnly' => true),
				array('name', 'length', 'max' => 64),
				array('name, type', 'required'),
				array('name', 'unique'),
				array('type', 'numerical', 'integerOnly' => true),
				array('generated', 'default', 'value' => false),
				array('generated', 'filter', 'filter' => array($this, 'filterBoolean')),
				array('generated', 'boolean'),
				array('name, type, description, bizrule, data, generated', 'safe'),
				array('id', 'safe', 'on' => 'search')
		);
	}

	public function filterBoolean($attribute)
	{
		return is_string($attribute) ? $attribute === 'true' || $attribute === '1' : (bool)$attribute;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
				'assignments' => array(self::HAS_MANY, 'Assignments', 'item_id'),
				'users' => array(self::MANY_MANY, SrbacUtilities::getSrbacModule()->userclass, Yii::app()->getAuthManager()->assignmentTable.'(item_id, user_id)'),
				'children' => array(self::MANY_MANY, 'AuthItem', ItemChildren::model()->tableName().'(parent_id, child_id)'),
				'parents' => array(self::MANY_MANY, 'AuthItem', ItemChildren::model()->tableName().'(child_id, parent_id)')
		);
	}

	public function superUser()
	{
		$this->type(EAuthItem::TYPE_ROLE)
			->getDbCriteria()
			->addColumnCondition(
					array(
							$this->getDbConnection()->quoteColumnName($this->getTableAlias(false, false).'.name') => SrbacUtilities::getSrbacModule()->superUser
					)
			);
		return $this;
	}

	/**
	 * Applies a scope to this AuthItem's type attribute.
	 * @param mixed $type string or integer authorization item type identifier
	 * @return AuthItem
	 */
	public function type($type)
	{
		$this->getDbCriteria()->addColumnCondition(
				array(
						$this->getDbConnection()->quoteColumnName($this->getTableAlias(false, false).'.type') => is_numeric($type) ? $type : array_search($type, self::$TYPES)
				)
		);
		return $this;
	}

	public function obsolete($obsolete = true)
	{
		$criteria = $this->getDbCriteria();
		$authItems = SrbacUtilities::getSrbacModule()->generateAuthItems(false);
		array_walk($authItems, create_function('&$authItem', '$authItem = "'.SrbacUtilities::getSrbacModule()->getGeneratedAuthItemNamePrefix().'".$authItem["name"];'));
		if($obsolete)
		{
			$criteria->addNotInCondition($this->getTableAlias(false, false).'.name', $authItems);
		}
		else
		{
			$criteria->addInCondition($this->getTableAlias(false, false).'.name', $authItems);
		}
		return $this;
	}

	public function userAssigned($userId)
	{
		$schema = $this->getDbConnection()->getSchema();
		$this->getDbCriteria()->mergeWith(
				array(
					'scopes' => array('type' => CAuthItem::TYPE_ROLE),
					'with' => 'assignments',
					'order' => $schema->quoteColumnName($this->getTableAlias(false, false).'.name').' ASC'
			)
		);
		if($userId)
		{
			$this->getDbCriteria()->addColumnCondition(array($schema->quoteColumnName('assignments.user_id') => $userId));
		}
		return $this;
	}

	public function userNotAssigned($userId)
	{
		$schema = $this->getDbConnection()->getSchema();
		$this->getDbCriteria()->mergeWith(
				array(
						'order' => $schema->quoteColumnName($this->getTableAlias(false, false).'.name').' ASC',
						'group' => $schema->quoteColumnName($this->getTableAlias(false, false).'.id'),
						'having' => 'MIN('.$schema->quoteColumnName('assignments.user_id').') IS NULL',
						'with' => (
								$userId
								?
								array(
										'assignments' => array(
												'on' => $schema->quoteColumnName('assignments.user_id').'=:user_id',
												'params' => array(':user_id' => $userId)
										)
								)
								:
								'assignments')
				)
		);
		return $this;
	}

	public function children()
	{
		$schema = $this->getDbConnection()->getSchema();
		$this->getDbCriteria()->mergeWith(
				array(
						'with' => 'parents',
						'condition' => $schema->quoteColumnName('parents.id').'=:parentId',
						'order' => $schema->quoteColumnName($this->getTableAlias(false, false).'.name').' ASC',
						'params' => array(':parentId' => $this->getAttribute('id'))
				)
		);
		return $this;
	}

	public function notChildren()
	{
		$schema = $this->getDbConnection()->getSchema();
		$this->getDbCriteria()->mergeWith(
				array(
						'with' => array(
								'parents' => array(
										'on' => $schema->quoteColumnName('parents.id').'=:id',
										'params' => array(':id' => $this->getAttribute('id'))
								)
						),
						'order' => $schema->quoteColumnName($this->getTableAlias(false, false).'.name').' ASC',
						'group' => $schema->quoteColumnName($this->getTableAlias(false, false).'.id'),
						'having' => 'MIN('.$schema->quoteColumnName('parents.id').') IS NULL'
				)
		);
		return $this;
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels()
	{
		return array(
				'id' => Yii::t('srbac', 'ID'),
				'name' => Yii::t('srbac', 'Name'),
				'type' => Yii::t('srbac', 'Type'),
				'description' => Yii::t('srbac', 'Description'),
				'bizrule' => Yii::t('srbac', 'Bizrule'),
				'data' => Yii::t('srbac', 'Data'),
				'generated' => Yii::t('srbac', 'Generated'),
				'fullName' => Yii::t('srbac', 'Full Name'),
		);
	}

	public function getFullName()
	{
		return $this->generated ? SrbacUtilities::getSrbacModule()->getGeneratedAuthItemNamePrefix().$this->getAttribute('name') : $this->getAttribute('name');
	}

	protected function beforeSave()
	{
		$this->pack();
		return parent::beforeSave();
	}

	protected function afterFind()
	{
		parent::afterFind();
		$this->unPack();
	}

	protected function afterSave()
	{
		parent::afterSave();
		$this->unPack();
	}

	protected function afterDelete()
	{
		parent::afterDelete();
		Assignments::model()->deleteAll('item_id=:item_id', array(':item_id' => $this->getAttribute('id')));
		ItemChildren::model()->deleteAll('parent_id=:parent_id OR child_id=:child_id', array(':parent_id' => $this->getAttribute('id'), ':child_id' => $this->getAttribute('id')));
	}

	protected function pack()
	{
		$this->setAttribute('data', serialize($this->getAttribute('data')));
		if($this->generated)
		{
			$this->setAttribute('name', SrbacUtilities::getSrbacModule()->getGeneratedAuthItemNamePrefix().$this->getAttribute('name'));
		}
	}

	protected function unPack()
	{
		if($data = @unserialize($this->getAttribute('data')) === false)
		{
			$data = null;
		}
		$this->setAttribute('data', $data);
		$this->setAttribute('name', preg_replace('/^'.SrbacUtilities::getSrbacModule()->getGeneratedAuthItemNamePrefix().'(.+)$/i', '$1', $this->getAttribute('name'), 1, $count));
		$this->generated = (bool)$count;
	}

	public function orderBy($order)
	{
		$this->getDbCriteria()->mergeWith(array('order' => $order));
		return $this;
	}

	public function getIsSuperUser()
	{
		return $this->getAttribute('name') === SrbacUtilities::getSrbacModule()->superUser;
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		return new CActiveDataProvider($this, array('criteria' => $this->searchCriteria()));
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CDbCriteria
	 */
	public function searchCriteria($criteriaConfig = array())
	{
		$criteria = new CDbCriteria;

		$criteria->mergeWith($criteriaConfig);
		$criteria->compare('id', $this->getAttribute('id'));
		if(isset($this->name) && $this->name !== '')
		{
			$name = strtr($this->generated ? SrbacUtilities::getSrbacModule()->getGeneratedAuthItemNamePrefix() : '', array('%'=>'\%', '_'=>'\_', '\\'=>'\\\\'));
			$name .= '%'.strtr($this->getAttribute('name'), array('%'=>'\%', '_'=>'\_', '\\'=>'\\\\')).'%';
			$criteria->compare($this->getTableAlias(false, false).'.name', $name, true, 'AND', false);
		}
		$criteria->compare('type', $this->getAttribute('type'));
		$criteria->compare('description', $this->getAttribute('description'), true);
		$criteria->compare('bizrule', $this->getAttribute('bizrule'), true);
		$criteria->compare('data', isset($this->data) ? serialize($this->getAttribute('data')) : $this->getAttribute('data'));
		$criteria->mergeWith(array('condition' => $this->getTableAlias(false, false).'.name'.($this->generated ? ' ' : ' NOT ').'REGEXP :nameRegex', 'params' => array(':nameRegex' => '^'.SrbacUtilities::getSrbacModule()->getGeneratedAuthItemNamePrefix().'(.+)$')));

		return $criteria;
	}

}
