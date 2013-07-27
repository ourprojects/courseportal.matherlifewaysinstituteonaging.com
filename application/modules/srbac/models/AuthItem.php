<?php
/**
 * AuthItem class file.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * AuthItem is the models for authManager items (operations, tasks and roles)
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.models
 * @since 1.0.0
 */
class AuthItem extends CActiveRecord {
	/**
	 * The followings are the available columns in table 'authitem':
	 * @var integer $id
	 * @var string $name
	 * @var integer $type
	 * @var string $description
	 * @var string $bizrule
	 * @var string $data
	 *
	 */

	public static $TYPES = array(CAuthItem::TYPE_OPERATION => 'Operation',CAuthItem::TYPE_TASK => 'Task', CAuthItem::TYPE_ROLE => 'Role');

	public function getDbConnection() {
		return Yii::app()->getAuthManager()->db;
	}


	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return Yii::app()->getAuthManager()->itemTable;
	}

	//  public function safeAttributes() {
	//    parent::safeAttributes();
	//    return array('name','type','description','bizrule','data');
	//  }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('id', 'numerical', 'integerOnly' => true),
				array('name', 'length', 'max' => 64),
				array('name, type', 'required'),
				array('type', 'numerical', 'integerOnly' => true),
				array('name,type,description,bizrule,data', 'safe'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
				'assignments' => array(self::HAS_MANY, 'Assignments', 'item_id'),
				'users' => array(self::MANY_MANY, Helper::findModule('srbac')->userclass, Yii::app()->getAuthManager()->assignmentTable.'(item_id, user_id)'),
				'children' => array(self::MANY_MANY, 'AuthItem', ItemChildren::model()->tableName().'(parent_id, child_id)'),
				'parents' => array(self::MANY_MANY, 'AuthItem', ItemChildren::model()->tableName().'(child_id, parent_id)')
		);
	}

	/**
	 * Applies a scope to this AuthItem's type attribute.
	 * @param mixed $type string or integer authorization item type identifier
	 * @return AuthItem
	 */
	public function type($type)
	{
		$this->getDbCriteria()->addColumnCondition(array($this->getDbConnection()->getSchema()->quoteColumnName($this->getTableAlias(false, false).'.type') => is_string($type) ? array_search($type, self::$TYPES) : $type));
		return $this;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
				'name'=>Yii::t('srbac','Name'),
				'type'=>Yii::t('srbac','Type'),
				'description'=>Yii::t('srbac','Description'),
				'bizrule'=>Yii::t('srbac','Bizrule'),
				'data'=>Yii::t('srbac','Data'),
		);
	}

	//  protected function beforeSave() {
	//    if($this->getIsNewRecord()) {
	//      $authItem = AuthItem::model()->findByPk($this->name);
	//      if($authItem !== null) {
	//        return false;
	//      }
	//    }
	//    parent::beforeSave();
	//  }


	protected function beforeSave() {
		$this->data = serialize($this->data);
		return parent::beforeSave();
	}

	protected function afterFind() {
		parent::afterFind();
		$this->data = unserialize($this->data);
	}

	protected function afterSave() {
		parent::afterSave();
		$this->data = unserialize($this->data);
	}

	protected function afterDelete() {
		parent::afterDelete();
		Assignments::model()->deleteAll("item_id='".$this->id."'");
		ItemChildren::model()->deleteAll( "parent_id='".$this->id."' OR child_id='".$this->id."'");
	}
}