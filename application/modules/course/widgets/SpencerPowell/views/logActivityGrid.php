<?php
$this->widget('zii.widgets.grid.CGridView',
	array(
		'id' => $this->getId().'-activityGrid',
		'filter' => $activitySearchModel,
		'dataProvider' => $activitySearchModel->search(),
		'selectableRows' => 0,
		'ajaxUrl' => $this->getController()->createUrl($this->actionPrefix.'logActivityGrid'),
		'columns' => array(
			'name',
			'description',
			'dose',
			'cr',
			array(
				'class' => 'CButtonColumn',
				'template' => '{view}',
				'buttons' => array(
					'view' => array(
						'label' => '{t}Select{/t}',
						'url' => '$this->grid->getOwner()->getController()->createUrl($this->grid->getOwner()->actionPrefix."logActivity", array("UserActivity" => array("activity_id" => $data->id)));',
						'click' => 'function(){'.
							CHtml::ajax(
								array(
									'type' => 'GET',
									'url' => 'js:$(this).attr("href")',
									'beforeSend' => 'function(){'.
										'$("div#'.$this->getId().'-activityLogForm").spUserActivityForm();'.
										'$("div#'.$this->getId().'-activityDialog").dialog("open");'.
									'}',
									'success' => 'function(data){'.
										'var $form = $("div#'.$this->getId().'-activityLogForm");'.
										'$.each($.parseJSON(data), function(attribute, value){'.
											'$form.spUserActivityForm(attribute, value);'.
										'});'.
									'}',
									'error' => 'function(data){'.
										'$("div#'.$this->getId().'-activityDialog").dialog("close");'.
										'alert("{t}Unable to contact server.{/t}");'.
									'}',
									'complete' => 'function(){'.
										'$("div#'.$this->getId().'-activityLogForm").spUserActivityForm("loading", false);'.
									'}',
								)
							).
							'return false;'.
						'}',
					),
				)
			)
		)
	)
);
?>
