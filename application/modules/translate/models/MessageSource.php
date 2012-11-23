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
            array('category, message','required'),
			array('category', 'length', 'max' => 32),
			array('message', 'safe'),
			array('id, category', 'safe', 'on' => 'search, missing'),
			array('language', 'safe', 'on' => 'missing'),
		);
	}
    
	public function relations() {
		return array(
            'translations' => array(self::HAS_MANY, 'Message', 'id', 'joinType' => 'INNER JOIN'),
			'acceptedLanguages' => array(self::HAS_MANY, 'AcceptedLanguages', array('id' => 'language'), 'through' => 'translations')
		);
	}
	
	public function scopes() {
		return array(
				'isAcceptedLanguage' => array('with' => 'acceptedLanguage'),
				'missingTranslations' => array(
					'condition' => '`t`.`id` <> ANY 
						(
							SELECT `m`.`id` FROM `'.Message::model()->tableName().'` `m` 
							WHERE `m`.`language` NOT IN
							(
								SELECT `mm`.`language` FROM `'.Message::model()->tableName().'` `mm`
								WHERE (`mm`.`id` = `t`.`id`)
							)

						)'
				),
				'missingAcceptedLanguageTranslations' => array(
						'condition' => '`t`.`id` <> ANY 
							(
								SELECT `al`.* FROM `'.AcceptedLanguages::model()->tableName().'` `al`
								WHERE `al`.`id` NOT IN
								(
									SELECT `m`.`language` FROM `'.Message::model()->tableName().'` `m`
									WHERE (`m`.`id` = `t`.`id`)
								)
							)'
				)
		);
	}
	
	public function missingTranslation($languageId) {
		$this->getDbCriteria()->mergeWith(array(
				'params' => array(':languageId' => $languageId),
				'condition' => '`t`.`id` NOT IN 
					(
						SELECT `id` FROM `'.Message::model()->tableName().'` `m` 
						WHERE (`m`.`language` = :languageId) AND (`m`.`id` = `t`.`id`)
					)'
		));
		return $this;
	}
	
	public function attributeLabels() {
		return array(
			'id' => TranslateModule::t('ID'),
			'category' => TranslateModule::t('Category'),
			'message' => TranslateModule::t('Message'),
		);
	}
	
	public function getSearchCriteria($data = array()) {
		$criteria = new CDbCriteria($data);
		
		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.category',$this->category);
		$criteria->compare('t.message',$this->message);

		return $criteria;
	}

	public function search() {
		return new CActiveDataProvider($this, array('criteria' => $this->getSearchCriteria()));
	}
	
}