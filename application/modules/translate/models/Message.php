<?php
class Message extends CActiveRecord {

    private $_isMissingTranslations;
    
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
	
	public function tableName() {
		return Yii::app()->getMessages()->translatedMessageTable;
	}
	
	public function behaviors() {
		return array_merge(parent::behaviors(),
				array(
						'toArray' => array('class' => 'application.behaviors.EArrayBehavior'),
				));
	}

	public function rules() {
		return array(
            array('id, language, translation', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('language', 'length', 'max' => 12),
			array('last_modified', 'date', 'format' => 'yyyy-M-d H:m:s'),
			array('id',
					'unique',
					'caseSensitive' => false,
					'criteria' => array(
							'condition' => 'language = :language',
							'params' => array(':language' => $this->language),
					),
					'message' => 'Source message {attribute} "{value}" has already been translated to '.$this->language.' ('.TranslateModule::translator()->getLanguageDisplayName($this->language).').',
					'except' => 'search'
			),
			array('id', 'exist', 'attributeName' => 'id', 'className' => 'MessageSource', 'except' => 'search'),
			
			array('id, language, category, translation', 'safe', 'on' => 'search'),
		);
	}
    
	public function relations() {
		return array(
            'source' => array(self::BELONGS_TO, 'MessageSource', 'id'),
			'acceptedLanguage' => array(self::BELONGS_TO, 'AcceptedLanguage', 'language', 'joinType' => 'INNER JOIN'),
		);
	}
	
	public function scopes() {
		return array(
			'isAcceptedLanguage' => array('with' => 'acceptedLanguage'),
			'notAcceptedLanguage' => array(
					'join' => 'LEFT JOIN '.AcceptedLanguage::model()->tableName().' al ON (al.id='.$this->getTableAlias(false, false).'.language)',
					'condition' => 'al.id IS NULL'
			),
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
					'select' => $this->getTableAlias(false, false).'.language',
					'condition' => $this->getTableAlias(false, false).'.id NOT IN
						(
								SELECT tt.id FROM '.Message::model()->tableName().' tt
								WHERE (tt.language = '.$this->getTableAlias(false, false).'.language) AND tt.id NOT IN
								(
										SELECT m.id FROM '.MessageSource::model()->tableName().' m
										WHERE (m.id = tt.id)
								)
						)',
					'group' => $this->getTableAlias(false, false).'.language'
			));
		} else {
			$this->getDbCriteria()->mergeWith(array(
					'select' => $this->getTableAlias(false, false).'.language',
					'params' => array(':sourceMessageId' => $sourceMessageId),
					'condition' => $this->getTableAlias(false, false).'.language NOT IN 
						(
							SELECT m.language FROM '.MessageSource::model()->tableName().' sm 
							INNER JOIN '.Message::model()->tableName().' m ON ((sm.id = m.id) AND (sm.id = :sourceMessageId))
						)',
					'group' => $this->getTableAlias(false, false).'.language'
			));
		}
		return $this;
	}
	
	public function attributeLabels() {
		return array(
			'id' => TranslateModule::t('ID'),
			'language' => TranslateModule::t('Language'),
			'translation' => TranslateModule::t('Translation'),
		);
	}
	
	public function search() {
		$criteria = $this->getDbCriteria();
		
		$criteria->compare('id', $this->id);
		$criteria->compare('language', $this->language, true);
		$criteria->compare('translation', $this->translation, true);
	
		return $this;
	}
	
	public function __toString() {
		return isset($this->translation) ? strval($this->translation) : '';
	}

}