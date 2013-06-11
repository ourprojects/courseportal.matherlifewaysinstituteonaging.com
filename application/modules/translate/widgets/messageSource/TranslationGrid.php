<?php

Yii::import('zii.widgets.grid.CGridView');

class TranslationGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $translations;
	
	public $updateMessageRoute = 'message/update';
	public $deleteMessageRoute = 'message/delete';
	
	public function init() {
		if(!isset($this->$translations))
			throw new CException(TranslateModule::t('$translations must be set in TranslationGrid.'));
		
		$modelName = get_class($this->translations);
		$userStateAttr = "{$this->getId()}-$modelName-";
		
		if(isset($_GET["{$modelName}_page"])) {
			Yii::app()->getUser()->setState("$userStateAttr-page", $_GET["{$modelName}_page"]);
		} else if(Yii::app()->getUser()->hasState("$userStateAttr-page")) {
			$_GET["{$modelName}_page"] = Yii::app()->getUser()->getState("$userStateAttr-page");
		}
		
		foreach($this->translations->getSafeAttributeNames() as $safeAttr) {
			if(isset($_GET[$modelName][$safeAttr])) {
				Yii::app()->getUser()->setState("$userStateAttr-$safeAttr", $_GET[$modelName][$safeAttr]);
			} else if(Yii::app()->getUser()->hasState("$userStateAttr-$safeAttr")) {
				$this->translations->$safeAttr = Yii::app()->getUser()->getState("$userStateAttr-$safeAttr");
			}
		}
		
		Yii::import($this->translateModulePathAlias . 'models.*');
		
		$this->dataProvider = new CActiveDataProvider($this->translations, array('criteria' => $this->translations->search()->getDbCriteria()));
		$this->filter = $this->translations;
		$this->columns = array(
				array(
						'name' => 'language',
				),
				array(
						'name' => 'translation',
						'htmlOptions' => array('width' => '700'),
				),
				array(
						'class' => 'CButtonColumn',
						'template' => '{update}{delete}',
						'updateButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->updateMessageRoute.'", array("id" => $data->id, "languageId" => $data->language))',
						'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("'.$this->deleteMessageRoute.'", array("id" => $data->id, "languageId" => $data->language))',
				)
		);
		
		parent::init();
	}

}