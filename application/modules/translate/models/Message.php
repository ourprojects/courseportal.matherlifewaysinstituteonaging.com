<?php
class Message extends CActiveRecord {
    
    public $message, $category;
    
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	public function tableName() {
		return Yii::app()->getMessages()->translatedMessageTable;
	}

	public function rules() {
		return array(
            array('id, language, translation', 'required'),
			array('id', 'numerical', 'integerOnly' => true),
			array('language', 'length', 'max' => 3),
			array('translation', 'safe'),
			array('id, language, translation, category, message', 'safe', 'on' => 'search'),
		);
	}
    
	public function relations() {
		return array(
            'source' => array(self::BELONGS_TO, 'MessageSource', 'id'),
			'acceptedLanguage' => array(self::BELONGS_TO, 'AcceptedLanguages', 'language', 'joinType' => 'INNER JOIN')
		);
	}
	
	public function scopes() {
		return array(
			'isAcceptedLanguage' => array('with' => 'acceptedLanguage'),
			'missingTranslation' => array(
					'condition' => '`t`.`id` NOT IN 
						(
							SELECT `tt`.`id` FROM `'.Message::model()->tableName().'` `tt` 
							WHERE (`tt`.`language` = `t`.`language`) AND `tt`.`id` NOT IN 
							(
								SELECT `m`.`id` FROM `'.MessageSource::model()->tableName().'` `m` 
								WHERE (`m`.`id` = `tt`.`id`)
							)
						)',
					'group' => '`t`.`language`'
				)
		);
	}
	
	public function missingTranslationSource($sourceMessageId) {
		$this->getDbCriteria()->mergeWith(array(
				'params' => array(':sourceMessageId' => $sourceMessageId),
				'condition' => '`t`.`language` NOT IN 
					(
						SELECT `m`.`language` FROM `'.MessageSource::model()->tableName().'` `sm` 
						INNER JOIN `'.Message::model()->tableName().'` `m` ON ((`sm`.`id` = `m`.`id`) AND (`sm`.`id` = :sourceMessageId))
					)'
		));
		return $this;
	}
	
	public function attributeLabels() {
		return array(
			'id'=> TranslateModule::t('ID'),
			'language'=> TranslateModule::t('Language'),
			'translation'=> TranslateModule::t('Translation'),
            'category'=> MessageSource::model()->getAttributeLabel('category'),
            'message'=> MessageSource::model()->getAttributeLabel('message'),
		);
	}
	
	public function getSearchCriteria($data = array()) {
		$criteria = new CDbCriteria($data);

		$criteria->compare('t.id', $this->id);
		$criteria->addSearchCondition('t.language', $this->language, true);
		$criteria->addSearchCondition('t.translation', $this->translation, true);
		
		return $criteria;
	}

	public function search() {
		return new CActiveDataProvider($this, array('criteria' => $this->getSearchCriteria()));
	}

}