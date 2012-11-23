<?php
class AcceptedLanguages extends CActiveRecord {

	private $_name;
    
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	public function tableName() {
		return '{{accepted_languages}}';
	}

	public function rules() {
		return array(
            array('id', 'required'),
			array('id', 'unique'),
			array('id', 'length', 'max' => 3),
			array('id, name', 'safe', 'on' => 'search')
		);
	}
	
	public function relations() {

		return array(
			'translations' => array(self::HAS_MANY, 'Message', 'language', 'joinType' => 'INNER JOIN'),
			'translationSources' => array(self::HAS_MANY, 'MessageSource', array('language' => 'id'), 'through' => 'translations')
		);
	}
	
	public function scopes() {
		return array(
			'missingTranslation' => array(
					'condition' => '`t`.`id` NOT IN
						(
								SELECT `tt`.`language` FROM `'.Message::model()->tableName().'` `tt`
								WHERE (`tt`.`language` = `t`.`id`) AND `tt`.`id` NOT IN
								(
										SELECT `m`.`id` FROM `'.MessageSource::model()->tableName().'` `m`
										WHERE (`m`.`id` = `tt`.`id`)
							)
						)'
					)		
		);
	}
	
	public function missingTranslationSource($sourceMessageId) {
		$this->getDbCriteria()->mergeWith(array(
				'params' => array(':sourceMessageId' => $sourceMessageId),
				'condition' => '`t`.`id` NOT IN 
					(
						SELECT `m`.`language` FROM `'.MessageSource::model()->tableName().'` `sm` 
						INNER JOIN `'.Message::model()->tableName().'` `m` ON ((`sm`.`id` = `m`.`id`) AND (`sm`.`id` = :sourceMessageId))
					)'
		));
		return $this;
	}

	public function attributeLabels() {
		return array(
			'id' => TranslateModule::t('ID'),
			'name' => TranslateModule::t('Name'),
		);
	}
	
	public function getName() {
		if(!isset($this->_name) && isset($this->id))
			$this->_name = TranslateModule::translator()->getLanguageDisplayName($this->id);
		return $this->_name;
	}
	
	public function getSearchCriteria($data = array()) {
		$criteria = new CDbCriteria($data);
		
		$criteria->compare('id', $this->id);
		
		return $criteria;
	}

	public function search() {
		return new CActiveDataProvider($this, array('criteria' => $this->getSearchCriteria()));
	}

}