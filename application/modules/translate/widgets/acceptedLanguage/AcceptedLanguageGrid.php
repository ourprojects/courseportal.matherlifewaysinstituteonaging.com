<?php

Yii::import('zii.widgets.grid.CGridView');

class AcceptedLanguageGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $acceptedLanguagesModel;
	
	public $viewRoute = 'acceptedLanguage/view';
	public $deleteRoute = 'acceptedLanguage/delete';
	
	public function init() {
		Yii::import($this->translateModulePathAlias . 'models.*');
		
		$this->dataProvider = new CActiveDataProvider($this->acceptedLanguagesModel, array('criteria' => $this->acceptedLanguagesModel->search()->getDbCriteria()));
		$this->filter = $this->acceptedLanguagesModel;
		$this->columns = array(
			array(
	            'name' => 'id',
	        ),
			array(
				'header' => TranslateModule::t('Missing Translations?'),
				'type' => 'boolean',
				'value' => '$data->missingTranslations()->exists("`t`.`id`=:id", array(":id" => $data->id))',
			),
	        array(
	            'class' => 'CButtonColumn',
	            'template' => '{view}{delete}',
	        	'viewButtonLabel' => TranslateModule::t('View Translations'),
	        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->viewRoute.'", array("id" => $data->id))',
	            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->deleteRoute.'", array("id" => $data->id))',
	        )
		);
		
		parent::init();
	}

}