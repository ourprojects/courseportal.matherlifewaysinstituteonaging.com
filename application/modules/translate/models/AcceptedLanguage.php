<?php
class AcceptedLanguage extends CActiveRecord {

	private $_name;
	private $_isMissingTranslations;
    
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	public function tableName() {
		return Yii::app()->getMessages()->acceptedLanguageTable;
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
            array('id', 'required', 'except' => 'search'),
			array('id', 'unique', 'except' => 'search'),
			array('id', 'length', 'max' => 12),
				
			array('id', 'safe', 'on' => 'search')
		);
	}
	
	public function relations() {
		return array(
			'translations' => array(self::HAS_MANY, 'Message', 'language', 'joinType' => 'INNER JOIN'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', Message::model()->tableName().'(language, id)')
		);
	}
	
	public function isMissingTranslations($refresh = false) {
		if($refresh || !isset($this->_isMissingTranslations))
			$this->_isMissingTranslations = $this->missingTranslations()->exists();
		return $this->_isMissingTranslations;
	}
	
	public function missingTranslations($sourceMessageId = null) {
		if($sourceMessageId === null) {
			$this->getDbCriteria()->mergeWith(array(
					'condition' => $this->getTableAlias(false, false).'.id NOT IN ' .
						'(' .
							'SELECT tt.language FROM '.Message::model()->tableName().' tt ' .
							'WHERE (tt.language = '.$this->getTableAlias(false, false).'.id) AND tt.id NOT IN ' .
							'(' .
								'SELECT m.id FROM '.MessageSource::model()->tableName().' m ' .
								'WHERE (m.id = tt.id)' .
							')' .
						')'
			));
		} else {
			$this->getDbCriteria()->mergeWith(array(
					'params' => array(':sourceMessageId' => $sourceMessageId),
					'condition' => $this->getTableAlias(false, false).'.id NOT IN ' .
						'(' .
							'SELECT m.language FROM '.MessageSource::model()->tableName().' sm ' . 
							'INNER JOIN '.Message::model()->tableName().' m ON ((sm.id = m.id) AND (sm.id = :sourceMessageId))' .
						')'
			));
		}
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
		{
			$this->_name = TranslateModule::translator()->getLanguageDisplayName($this->id);
			if($this->_name === false)
				$this->_name = strval($this->id);
		}
		return $this->_name;
	}
	
	public function search() {
		$criteria = $this->getDbCriteria();
		
		$criteria->compare('id', $this->id);
		
		return $this;
	}
	
	public function __toString() {
		return $this->getName();
	}

}