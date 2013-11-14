<?php
$dataProvider = $activitySearchModel->search();
$dataProvider->getSort()->route = $actionPrefix.'logActivityGrid';
$this->widget('zii.widgets.grid.CGridView',
	array(
		'id' => $id.'-activityGrid',
		'filter' => $activitySearchModel,
		'dataProvider' => $dataProvider,
		'selectableRows' => 0,
		'actionPrefix' => $actionPrefix,
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
						'url' => '$this->grid->getOwner()->createUrl("'.$actionPrefix.'logActivity", array("UserActivity" => array("activity_id" => $data->id)));',
						'click' => 'function(){'.
							CHtml::ajax(
								array(
									'type' => 'GET',
									'url' => 'js:$(this).attr("href")',
									'beforeSend' => 'function(){'.
										'$("div#'.$id.'-activityLogForm").spUserActivityForm();'.
										'$("div#'.$id.'-activityDialog").dialog("open");'.
									'}',
									'success' => 'function(data){'.
										'var $form = $("div#'.$id.'-activityLogForm");'.
										'$.each($.parseJSON(data), function(attribute, value){'.
											'$form.spUserActivityForm(attribute, value);'.
										'});'.
									'}',
									'error' => 'function(data){'.
										'$("div#'.$id.'-activityDialog").dialog("close");'.
										'alert("{t}Unable to contact server.{/t}");'.
									'}',
									'complete' => 'function(){'.
										'$("div#'.$id.'-activityLogForm").spUserActivityForm("loading", false);'.
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
