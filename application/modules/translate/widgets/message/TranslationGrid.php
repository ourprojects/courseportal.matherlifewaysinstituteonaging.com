<?php

Yii::import('zii.widgets.grid.CGridView');

class TranslationGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $messagesModel;
	
	public $deleteRoute = 'message/delete';
	public $viewRoute = 'message/view';
	
	public function init() {
		if(!isset($this->messagesModel))
			throw new CException(TranslateModule::t('The messagesModel must be set in TranslationGrid.'));
		
		$modelName = get_class($this->messagesModel);
		$userStateAttr = "{$this->getId()}-$modelName-";
		
		if(isset($_GET["{$modelName}_page"])) {
			Yii::app()->getUser()->setState("$userStateAttr-page", $_GET["{$modelName}_page"]);
		} else if(Yii::app()->getUser()->hasState("$userStateAttr-page")) {
			$_GET["{$modelName}_page"] = Yii::app()->getUser()->getState("$userStateAttr-page");
		}
		foreach($this->messagesModel->getSafeAttributeNames() as $safeAttr) {
			if(isset($_GET[$modelName][$safeAttr])) {
				Yii::app()->getUser()->setState("$userStateAttr-$safeAttr", $_GET[$modelName][$safeAttr]);
			} else if(Yii::app()->getUser()->hasState("$userStateAttr-$safeAttr")) {
				$this->messagesModel->$safeAttr = Yii::app()->getUser()->getState("$userStateAttr-$safeAttr");
			}
		}
		
		Yii::import($this->translateModulePathAlias . 'models.*');
		
		$this->dataProvider = new CActiveDataProvider($this->messagesModel, array('criteria' => $this->messagesModel->with('source')->search()->getDbCriteria()));
		$this->filter = $this->messagesModel;
		$this->columns = array(
			array(
	            'name' => 'id',
				'htmlOptions' => array('width' => '50'),
	        ),
			array(
				'name' => 'source.category',
			),
			array(
				'name' => 'language',
				'htmlOptions' => array('width' => '50'),
			),
	        array(
	            'name' => 'source.message',
	        	'htmlOptions' => array('width' => '300'),
	        ),
			array(
				'name' => 'translation',
				'htmlOptions' => array('width' => '300'),
			),
	        array(
	            'class' => 'CButtonColumn',
	            'template' => '{view}{delete}',
	        	'viewButtonLabel' => TranslateModule::t('View Translations'),
	        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->viewRoute.'", array("id" => $data->id, "languageId" => $data->language))',
	            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->deleteRoute.'", array("id" => $data->id, "languageId" => $data->language))',
	        )
		);
		
		parent::init();
	}

}