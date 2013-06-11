<?php

Yii::import('zii.widgets.grid.CGridView');

class ALMissingTranslationGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $sourceLanguageId;
	
	public $createMessageRoute = 'message/create';
	
	public function init() {
		if(!isset($this->sourceLanguageId))
			throw new CException(TranslateModule::t('A sourceLanguageId must be set in ALMissingTranslationGrid.'));
		
		Yii::import($this->translateModulePathAlias . 'models.*');
		
		$this->dataProvider = new CActiveDataProvider('MessageSource', array('criteria' => MessageSource::model()->missingTranslations($this->sourceLanguageId)->getDbCriteria()));
		$this->columns = array(
				array(
						'name' => 'id',
				),
				array(
						'name' => 'category',
				),
				array(
						'name' => 'message',
						'htmlOptions' => array('width' => '600'),
				),
				array(
						'class' => 'CButtonColumn',
						'template' => '{update}',
						'updateButtonLabel' => TranslateModule::t('Create Translation'),
						'updateButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->createMessageRoute.'", array("id" => $data->id, "languageId" => "'.$this->sourceLanguageId.'"))',
				)
		);
		
		parent::init();
	}

}