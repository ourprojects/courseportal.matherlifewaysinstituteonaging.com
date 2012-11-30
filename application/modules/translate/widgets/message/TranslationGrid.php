<?php

Yii::import('zii.widgets.grid.CGridView');

class TranslationGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $messagesModel;
	
	public $deleteRoute = 'message/delete';
	public $viewRoute = 'message/view';
	
	public function init() {
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