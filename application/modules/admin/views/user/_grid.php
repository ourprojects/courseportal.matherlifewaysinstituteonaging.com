<?php

$columns = array(
		'email',
		'name',
		'firstname',
		'lastname'
);

if(isset($detailed) && $detailed)
{
	$gridId = 'user-detailed-grid';
	$columns = array_merge(
		$columns, 
		array(
			'id',
			'group',
			'location',
			'country',
			'created',
			'last_ip',
			'last_agent',
			'last_route',
			array(
				'name' => 'activated',
				'value' => '$data->getIsActivated() ? $data->activated->date : "{t}Never{/t}"',
				'filter' => ''
			),
			array(
				'name' => 'isOnline',
				'value' => '$data->getIsOnline() ? "{t}Yes{/t}" : "{t}No{/t}"',
				'filter' => ''
			),
			array(
				'name' => 'lastSeen',
				'filter' => ''
			)
		)
	);
}
else
{
	$gridId = 'user-grid';
}

$columns[] = array(
		'class' => 'CButtonColumn',
		'template' => '{view}{delete}',
		'viewButtonLabel' => '{t}View User Details{/t}',
		'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/admin/user/view", array("id" => $data->id))',
		'buttons' => array(
			'delete' => array(
				'url' => 'Yii::app()->getController()->createUrl("/admin/user/delete", array("id" => $data->id))',
				'click' => 'function(){'.
					'if(confirm("{t}Are you sure you would like to delete this user? All of this user\'s data will be lost forever.{/t}")){'.
						CHtml::ajax(
								array(
									'type' => 'DELETE',
									'url' => 'js:$(this).attr("href")',
									'beforeSend' => 'function(){$("div#'.$gridId.'").addClass("loading");}',
									'success' => 'function(data){'.
										'$.fn.yiiGridView.update("user-grid");'.
										'$.fn.yiiGridView.update("user-detailed-grid");'.
									'}',
									'error' => 'function(data){alert("{t}An error ocurred while attempting to delete the user.{/t}");}',
									'complete' => 'function(){$("div#'.$gridId.'").removeClass("loading");}',
								)
						).
					'}'.
					'return false;'.
				'}',
			),
		)
);

$this->widget('zii.widgets.grid.CGridView', array(
	'id' => $gridId,
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => $columns,
));

?>
