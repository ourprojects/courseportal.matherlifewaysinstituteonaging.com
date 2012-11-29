<?php

Yii::import('zii.widgets.grid.CGridView');

class TranslationGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $translations;
	
	public $updateMessageRoute = 'message/update';
	public $deleteMessageRoute = 'message/delete';
	
	public function init() {
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