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
						//'imageUrl' => '',
						'click' => 'function(){'.
							CHtml::ajax(
								array(
									'type' => 'GET',
									'url' => 'js:$(this).attr("href")',
									'beforeSend' => 'function(){'.
										'var $form = $("#'.$this->getId().'-activityLogForm");'.
										'$form.find("h2#Activity_name").text("");'.
										'$form.find("p#Activity_description").text("");'.
										'$form.find("form#'.$this->getId().'-userActivityForm")[0].reset();'.
										'$form.addClass("loading");'.
										'$("#'.$this->getId().'-activityDialog").dialog("open");'.
									'}',
									'success' => 'function(data){'.
										'var $form = $("div#'.$this->getId().'-activityLogForm");'.
										'var $obj = $.parseJSON(data);'.
										'$form.find("h2#Activity_name").text($obj.name);'.
										'$form.find("p#Activity_description").text($obj.description);'.
										'$form = $form.find("form#'.$this->getId().'-userActivityForm");'.
										'var $dropdown = $form.find("select#UserActivity_dimensions");'.
										'$dropdown.empty();'.
										'$($obj.dimensions).each(function (index, data) {'.
											'$dropdown.append($("<option></option>").val(data.val).text(data.text));'.
										'});'.
										'$form.find("input#UserActivity_dateCompleted").datepicker("setDate", $obj.dateCompleted);'.
										'$form.find("input#UserActivity_comment").val($obj.comment);'.
										'$form.find("input#UserActivity_activity_id").val($obj.activity_id);'.
										'$form.find("input#UserActivity_id").val($obj.id);'.
									'}',
									'error' => 'function(data){'.
										'$("#'.$this->getId().'-activityDialog").dialog("close");'.
										'alert(data);'.
									'}',
									'complete' => 'function(){'.
										'$("#'.$this->getId().'-activityLogForm").removeClass("loading");'.
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
