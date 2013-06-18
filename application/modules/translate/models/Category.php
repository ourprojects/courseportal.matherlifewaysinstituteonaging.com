<?php
class Category extends CActiveRecord {
	
	private $_isMissingTranslations;

	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	public function tableName() {
		return TranslateModule::translator()->getMessageSource()->categoryTable;
	}
	
	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'translate.behaviors.ERememberFiltersBehavior',
				)
		);
	}

	public function rules() {
		return array(
            array('category', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('id', 'unique', 'except' => 'search'),
			array('category', 'length', 'max' => 32),
			
			array('id, category', 'safe', 'on' => 'search'),
		);
	}
	
	public function attributeLabels() {
		return array(
				'id' => TranslateModule::t('ID'),
				'category' => TranslateModule::t('Category'),
				'messageCount' =>  TranslateModule::t('Message Count')
		);
	}
    
	public function relations() {
		return array(
			'categoryMessages' => array(self::HAS_MANY, 'CategoryMessage', 'category_id'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', CategoryMessage::model()->tableName().'(category_id, message_id)'),
			'messageCount' => array(self::STAT, 'MessageSource', CategoryMessage::model()->tableName().'(category_id, message_id)')
		);
	}
	
	public function search() {
		$criteria = $this->getDbCriteria();
		
		$criteria->compare($this->getTableAlias(false, false).'.id', $this->id);
		$criteria->compare($this->getTableAlias(false, false).'.category', $this->category, true);
		
		return $this;
	}
	
	public function __toString() {
		return strval($this->category);
	}
	
}