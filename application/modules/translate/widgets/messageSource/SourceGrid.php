<?php

Yii::import('zii.widgets.grid.CGridView');

class SourceGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $sources;
	
	public $viewRoute = 'messageSource/view';
	public $deleteRoute = 'messageSource/delete';
	
	public function init() {
		Yii::import($this->translateModulePathAlias . 'models.*');
		
		$this->dataProvider = new CActiveDataProvider($this->sources, array('criteria' => $this->sources->search()->getDbCriteria()));
		$this->filter = $this->sources;
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