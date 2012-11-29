<?php

Yii::import('zii.widgets.grid.CGridView');

class MissingTranslationGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $sourceLanguage;
	
	public $createMessageRoute = 'message/create';
	
	public function init() {
		Yii::import($this->translateModulePathAlias . 'models.*');
		
		$this->dataProvider = new CActiveDataProvider('MessageSource', array('criteria' => MessageSource::model()->missingTranslations($this->sourceLanguage->id)->getDbCriteria()));
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
						'updateButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->createMessageRoute.'", array("id" => $data->id, "languageId" => "'.$this->sourceLanguage->id.'"))',
				)
		);
		
		parent::init();
	}

}