<?php
/**
 * MessageGridView class file.
 *
 * @author Louis DaPrato
 */

Yii::import('zii.widgets.grid.CGridView');

class MessageSourceGrid extends CGridView {
	
	public $translateModulePathAlias = 'modules.translate';
	
	public $messageSourceModel;
	
	public $missingCssClass = 'red';
	
	public $allTranslatedCssClass = 'green';

	public function init() {
		
		Yii::import("$this->translateModulePathAlias.models.MessageSource");
		
		if(!isset($this->messageSourceModel))
			$this->messageSourceModel = new MessageSource('search');
		$this->columns = array(
			array(
	            'name' => 'id',
	            'filter' => CHtml::listData(MessageSource::model()->findAll(
												TranslateModule::cDbCriteriaInstance(array('select' => 'm.id', 'with' => 'messageTranslation', 'params' => array(':lang' => $this->messageSourceModel->language)))
	            								->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
	            								->compare('m.category', $this->messageSourceModel->category, true)
												->compare('m.message', $this->messageSourceModel->message, true)
											), 'id', 'id'),
	        ),
			array(
				'name' => 'category',
				'filter' => CHtml::listData(MessageSource::model()->findAll(
												TranslateModule::cDbCriteriaInstance(array('select' => 'm.category', 'group' => 'category', 'with' => 'messageTranslation', 'params' => array(':lang' => $this->messageSourceModel->language)))
	            								->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
												->compare('id', $this->messageSourceModel->id)
												->compare('message', $this->messageSourceModel->message, true)
											), 'category', 'category'),
			),
	        array(
	            'name' => 'message',
	            'filter' => CHtml::listData(MessageSource::model()->findAll(
												TranslateModule::cDbCriteriaInstance(array('select' => 'm.message', 'with' => 'messageTranslation', 'params' => array(':lang' => $this->messageSourceModel->language)))
	            								->addCondition('not exists (select `id` from `'.Message::model()->tableName().'` `m` where `m`.`language`=:lang and `m`.id=`t`.`id`)')
												->compare('id', $this->messageSourceModel->id)
												->compare('category', $this->messageSourceModel->category, true)
											), 'message', 'message'),
	        	'htmlOptions' => array('width' => '600'),
	        ),
	        array(
	            'class' => 'CButtonColumn',
	            'template' => '{delete}',
	            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("delete", array("model" => "MessageSource", "id" => $data->id))',
	        )
		);
		$this->dataProvider = $this->messageSourceModel->search();
		$this->filter = $this->messageSourceModel;
		
		if(!isset($this->rowCssClassExpression))
			$this->rowCssClassExpression = array($this, 'getRowCssClass');
		
		parent::init();
	}
	
	public function getRowCssClass($row, $data) {
		$class = '';
		
		if(is_array($this->rowCssClass) && ($n = count($this->rowCssClass)) > 0)
			$class = $this->rowCssClass[$row % $n];
		
		
		
		return $class;
	}
	
}