<?php

Yii::import('zii.widgets.grid.CGridView');

class MissingAcceptedLanguageGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $sourceMessage;
	
	public $createMessageRoute = 'message/create';
	
	public function init() {
		Yii::import($this->translateModulePathAlias . 'models.*');
		
		$this->dataProvider = new CActiveDataProvider('AcceptedLanguage', array('criteria' => AcceptedLanguage::model()->missingTranslations($this->sourceMessage->id)->getDbCriteria()));
		$this->columns = array(
				array(
						'name' => 'id',
						'header' => TranslateModule::t('Language')
				),
				array(
						'class' => 'CButtonColumn',
						'template' => '{update}',
						'updateButtonLabel' => TranslateModule::t('Create Translation'),
						'updateButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->createMessageRoute.'", array("id" => '.$this->sourceMessage->id.', "languageId" => $data->id))',
				)
		);
		
		parent::init();
	}

}