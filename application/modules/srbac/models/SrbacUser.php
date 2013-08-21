<?php
/**
 * SrbacUser class file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * @package srbac.models
 */
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'SrbacUtilities.php');

class SrbacUser extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'SrbacUser':
	 * @var integer $id
	 * @var string $name
	 */

	private $_isSuperUser;

	public function getDbConnection()
	{
		return SrbacUtilities::getSrbacModule()->getStaticUserModel()->getDbConnection();
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
		return SrbacUtilities::getSrbacModule()->getStaticUserModel()->tableName();
	}

	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
				),
		);
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array();
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array_merge(
				SrbacUtilities::getSrbacModule()->getStaticUserModel()->relations(),
				array(
					'assignments' => array(self::HAS_MANY, 'Assignments', array('user_id' => SrbacUtilities::getSrbacModule()->userId)),
				)
		);
	}

	public function superUser()
	{
		return $this->with(
				array(
						'assignments' =>
							array(
									'joinType' => 'INNER JOIN',
									'with' =>
										array(
											'authItem' =>
												array(
														'scopes' => array('superUser'),
														'joinType' => 'INNER JOIN'
												)
										)
							)
				)
		)->together();
	}

	public function normalUser()
	{
		$this->with(
				array(
						'assignments' =>
							array(
									'joinType' => 'LEFT OUTER JOIN',
									'with' =>
										array(
											'authItem' =>
												array(
														'scopes' => array('superUser'),
														'joinType' => 'LEFT OUTER JOIN'
												)
										)
							)
				)
		)->together();
		$this->getDbCriteria()->mergeWith(
				array(
					'group' => $this->getDbConnection()->quoteColumnName($this->getTableAlias(false, false).'.'.SrbacUtilities::getSrbacModule()->userId),
					'having' => 'MIN('.$this->getDbConnection()->quoteColumnName('authItem.id').') IS NULL'
				)
		);
		return $this;
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels()
	{
		return SrbacUtilities::getSrbacModule()->getStaticUserModel()->attributeLabels();
	}

	public function getIsSuperUser($refresh = false)
	{
		if($refresh || !isset($this->_isSuperUser))
		{
			$this->_isSuperUser = $this->superUser()->exists($this->getDbConnection()->quoteColumnName($this->getTableAlias().'.'.SrbacUtilities::getSrbacModule()->userId).'=:id', array(':id' => $this->{SrbacUtilities::getSrbacModule()->userId}));
		}
		return $this->_isSuperUser;
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
		$criteria = new CDbCriteria($criteriaConfig);

		$criteria->compare(SrbacUtilities::getSrbacModule()->userId, $this->getAttribute(SrbacUtilities::getSrbacModule()->userId));
		$criteria->compare(SrbacUtilities::getSrbacModule()->username, $this->getAttribute(SrbacUtilities::getSrbacModule()->username), true);

		return $criteria;
	}

}
