<?php
/**
 * Assignments class file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * Assignments model is the authManager model that defines which operations /
 * tasks / roles are assigned to which user.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * @package srbac.models
 */

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'SrbacUtilities.php');

class Assignments extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'authassignment':
	 * @var string $item_id
	 * @var string $userid
	 * @var string $bizrule
	 * @var string $data
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function getDbConnection()
	{
		return Yii::app()->getAuthManager()->db;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return Yii::app()->getAuthManager()->assignmentTable;
	}

	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
				)
		);
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
				array('user_id, item_id', 'unsafe'),
				array('item_id, user_id', 'numerical', 'integerOnly' => true),
				array('item_id, user_id', 'required'),
				array('item_id', 'exist', 'attributeName' => 'id', 'className' => 'AuthItem', 'allowEmpty' => false),
				array('user_id', 'exist', 'attributeName' => SrbacUtilities::getSrbacModule()->userId, 'className' => SrbacUtilities::getSrbacModule()->userclass, 'allowEmpty' => false),
				array('bizrule, data', 'safe'),
				array('user_id, item_id', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
				'authItem' => array(self::BELONGS_TO, 'AuthItem', 'item_id'),
				'user' => array(self::BELONGS_TO, SrbacUtilities::getSrbacModule()->userclass, 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels()
	{
		return array(
				'item_id' => Yii::t('srbac', 'Item id'),
				'user_id' => Yii::t('srbac', 'User id'),
				'bizrule' => Yii::t('srbac', 'Bizrule'),
				'data' => Yii::t('srbac', 'Data'),
		);
	}

	public function orderBy($order)
	{
		$this->getDbCriteria()->mergeWith(array('order' => $order));
		return $this;
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$criteria->compare('item_id', $this->getAttribute('item_id'));
		$criteria->compare('user_id', $this->getAttribute('user_id'));
		$criteria->compare('bizrule', $this->getAttribute('bizrule'), true);
		$criteria->compare('data', isset($this->data) ? serialize($this->getAttribute('data')) : $this->getAttribute('data'));

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}
