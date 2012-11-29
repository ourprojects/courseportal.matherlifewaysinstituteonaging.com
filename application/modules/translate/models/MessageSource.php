<?php
class MessageSource extends CActiveRecord {

	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	public function tableName() {
		return Yii::app()->getMessages()->sourceMessageTable;
	}

	public function rules() {
		return array(
            array('id, category, message', 'required'),
			array('id', 'numerical', 'integerOnly' => true, 'allowEmpty' => false),
			array('id', 'unique'),
			array('category', 'length', 'max' => 32),
			array('message', 'safe'),
			array('id, category', 'safe', 'on' => 'search'),
		);
	}
	
	public function attributeLabels() {
		return array(
				'id' => TranslateModule::t('ID'),
				'category' => TranslateModule::t('Category'),
				'message' => TranslateModule::t('Message'),
		);
	}
    
	public function relations() {
		return array(
            'translations' => array(self::HAS_MANY, 'Message', 'id', 'joinType' => 'INNER JOIN'),
			'acceptedLanguages' => array(self::HAS_MANY, 'AcceptedLanguage', array('id' => 'language'), 'through' => 'translations')
		);
	}
	
	public function scopes() {
		return array(
				'isAcceptedLanguage' => array('with' => 'acceptedLanguage'),
				'missingAcceptedLanguageTranslations' => array(
						'condition' => '`t`.`id` <> ANY 
							(
								SELECT `al`.* FROM `'.AcceptedLanguage::model()->tableName().'` `al`
								WHERE `al`.`id` NOT IN
								(
									SELECT `m`.`language` FROM `'.Message::model()->tableName().'` `m`
									WHERE (`m`.`id` = `t`.`id`)
								)
							)'
				)
		);
	}
	
	public function missingTranslations($languageId = null) {
		if($languageId === null) {
			$this->getDbCriteria()->mergeWith(array(
					'condition' => '`t`.`id` <> ANY
						(
							SELECT `m`.`id` FROM `'.Message::model()->tableName().'` `m`
							WHERE `m`.`language` NOT IN
							(
								SELECT `mm`.`language` FROM `'.Message::model()->tableName().'` `mm`
								WHERE (`mm`.`id` = `t`.`id`)
							)
					
						)'
			));
		} else {
			$this->getDbCriteria()->mergeWith(array(
					'params' => array(':languageId' => $languageId),
					'condition' => '`t`.`id` NOT IN 
						(
							SELECT `id` FROM `'.Message::model()->tableName().'` `m` 
							WHERE (`m`.`language` = :languageId) AND (`m`.`id` = `t`.`id`)
						)'
			));
		}
		return $this;
	}
	
	public function search() {
		$criteria = $this->getDbCriteria();
		
		$criteria->compare('t.id', $this->id);
		$criteria->addSearchCondition('t.category', $this->category);
		$criteria->addSearchCondition('t.message', $this->message);
		
		return $this;
	}
	
	public function __toString() {
		return strval($this->message);
	}
	
}