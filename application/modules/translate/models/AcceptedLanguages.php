<?php
class AcceptedLanguages extends CActiveRecord {
    
	static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	function tableName() {
		return '{{accepted_languages}}';
	}

	function rules() {
		return array(
            array('id', 'required'),
			array('id', 'unique'),
			array('id, name', 'safe', 'on' => 'search')
		);
	}

	function attributeLabels() {
		return array(
			'id' => TranslateModule::t('ID'),
			'name' => TranslateModule::t('Name'),
		);
	}

	function search() {
		$criteria = new CDbCriteria;
		$criteria->compare('id', $this->id);
        
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getName() {
		if(empty($this->id))
			return '';
		return TranslateModule::translator()->getLanguageDisplayName($this->id);
	}
	
	public function setName($value) {
		$this->id = array_search($value, TranslateModule::translator()->getLanguageDisplayNames());
		
	}

}