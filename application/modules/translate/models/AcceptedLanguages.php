<?php
class AcceptedLanguages extends CActiveRecord {
    
	static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	function tableName() {
		return '{{accepted_languages}}';
	}

	function rules(){
		return array(
            array('id','required'),
			array('id', 'unique'),
		);
	}

	function attributeLabels(){
		return array(
			'id'=> TranslateModule::t('ID'),
		);
	}

	function search(){
		$criteria=new CDbCriteria;
		$criteria->compare('id', $this->id);
        
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}