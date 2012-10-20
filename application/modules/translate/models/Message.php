<?php
class Message extends CActiveRecord {
    
    public $message, $category;
    
	static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	function tableName() {
		return Yii::app()->getMessages()->translatedMessageTable;
	}

	function rules(){
		return array(
            array('id, language, translation', 'required'),
			array('id', 'numerical', 'integerOnly' => true),
			array('language', 'length', 'max' => 16),
			array('translation', 'safe'),
			array('id, language, translation, category, message', 'safe', 'on' => 'search'),
		);
	}
    
	function relations(){
		return array(
            'source' => array(self::BELONGS_TO, 'MessageSource', 'id'),
		);
	}
	function attributeLabels(){
		return array(
			'id'=> TranslateModule::t('ID'),
			'language'=> TranslateModule::t('Language'),
			'translation'=> TranslateModule::t('Translation'),
            'category'=> MessageSource::model()->getAttributeLabel('category'),
            'message'=> MessageSource::model()->getAttributeLabel('message'),
		);
	}
	
	function getSearchCriteria($data = array()) {
		$criteria = new CDbCriteria($data);
		$criteria->select = 't.*, source.message as message, source.category as category';
		$criteria->with = array('source');
		
		$criteria->compare('t.id', $this->id);
		$criteria->compare('t.language', $this->language, true);
		$criteria->compare('t.translation', $this->translation, true);
		$criteria->compare('source.category', $this->category, true);
		$criteria->compare('source.message', $this->message, true);
		
		return $criteria;
	}

	function search() {
		return new CActiveDataProvider($this, array(
			'criteria' => $this->getSearchCriteria(),
		));
	}

}