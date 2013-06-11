<?php

Yii::import('zii.widgets.grid.CGridView');

class MissingAcceptedLanguageGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $sourceMessage;
	
	public $createMessageRoute = 'message/create';
	
	public function init() {
		if(!isset($this->sourceMessageId))
			throw new CException(TranslateModule::t('A sourceMessageId must be set in MissingAcceptedLanguageGrid.'));
		
		Yii::import($this->translateModulePathAlias . 'models.*');
		
		$this->dataProvider = new CActiveDataProvider('AcceptedLanguage', array('criteria' => AcceptedLanguage::model()->missingTranslations($this->sourceMessageId)->getDbCriteria()));
		$this->columns = array(
				array(
						'name' => 'id',
						'header' => TranslateModule::t('Language')
				),
				array(
						'class' => 'CButtonColumn',
						'template' => '{update}',
						'updateButtonLabel' => TranslateModule::t('Create Translation'),
						'updateButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->createMessageRoute.'", array("id" => '.$this->sourceMessageId.', "languageId" => $data->id))',
				)
		);
		
		parent::init();
	}

}