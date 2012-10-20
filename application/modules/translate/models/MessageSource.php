<?php
class MessageSource extends CActiveRecord {
    
    public $language;
        
	static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	function tableName() {
		return Yii::app()->getMessages()->sourceMessageTable;
	}
	
	function init() {
		$this->language = TranslateModule::translator()->getLanguageID();
	}

	function rules(){
		return array(
            array('category,message','required'),
			array('category', 'length', 'max'=>32),
			array('message', 'safe'),
			array('id, category, message, language', 'safe', 'on'=>'search'),
		);
	}
    
	function relations(){
		return array(
            'mt' => array(self::HAS_MANY, 'Message', 'id', 'joinType'=>'inner join'),
		);
	}
	function attributeLabels(){
		return array(
			'id' => TranslateModule::t('ID'),
			'category' => TranslateModule::t('Category'),
			'message' => TranslateModule::t('Message'),
		);
	}
	
	public function getMissingSearchCriteria() {
		$criteria = new CDbCriteria(array('with' => 'mt', 'params' => array(':lang' => $this->language)));
		return $criteria->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
					->compare('t.id', $this->id)
					->compare('t.category', $this->category)
					->compare('t.message', $this->message);
	}

	function searchMissing() {
		if($this->language === TranslateModule::translator()->getLanguageID(Yii::app()->sourceLanguage))
			return new CArrayDataProvider(array());
		
		return new CActiveDataProvider($this, array('criteria' => $this->getMissingSearchCriteria()));
	}

}