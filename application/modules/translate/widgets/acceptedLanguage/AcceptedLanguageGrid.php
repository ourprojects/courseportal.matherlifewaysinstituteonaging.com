<?php

Yii::import('zii.widgets.grid.CGridView');

class AcceptedLanguageGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $acceptedLanguagesModel;
	
	public $viewRoute = 'acceptedLanguage/view';
	public $deleteRoute = 'acceptedLanguage/delete';
	
	public function init() {
		if(!isset($this->acceptedLanguagesModel))
			throw new CException(TranslateModule::t('The acceptedLanguagesModel must be set inside AcceptedLanguageGrid.'));
		
		$modelName = get_class($this->acceptedLanguagesModel);
		$userStateAttr = "{$this->getId()}-$modelName-";
		
		if(isset($_GET["{$modelName}_page"])) {
			Yii::app()->getUser()->setState("$userStateAttr-page", $_GET["{$modelName}_page"]);
		} else if(Yii::app()->getUser()->hasState("$userStateAttr-page")) {
			$_GET["{$modelName}_page"] = Yii::app()->getUser()->getState("$userStateAttr-page");
		}

		foreach($this->acceptedLanguagesModel->getSafeAttributeNames() as $safeAttr) {
			if(isset($_GET[$modelName][$safeAttr])) {
				Yii::app()->getUser()->setState("$userStateAttr-$safeAttr", $_GET[$modelName][$safeAttr]);
			} else if(Yii::app()->getUser()->hasState("$userStateAttr-$safeAttr")) {
				$this->acceptedLanguagesModel->$safeAttr = Yii::app()->getUser()->getState("$userStateAttr-$safeAttr");
			}
		}
		
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
				'value' => '$data->isMissingTranslations()',
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
	
	public function hasAcceptedLanguageWithMissingTranslations() {
		foreach($this->dataProvider->getData() as $item)
			if($item->isMissingTranslations())
				return true;
		return false;
	}

}