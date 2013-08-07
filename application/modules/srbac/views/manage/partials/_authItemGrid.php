<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'authItem-grid',
				'filter' => $model,
				'dataProvider' => $model->search(),
				'columns' => array(
						'name',
						array(
								'name' => 'type',
								'value' => 'AuthItem::$TYPES[$data->getAttribute("type")].($this->grid->getController()->getModule()->superUser === $data->getAttribute("name") ? " (Super User)" : "")',
								'filter' => AuthItem::$TYPES,
								'sortable' => false
						),
						array(
								'class' => 'CButtonColumn',
								'template' => '{update}{delete}',
								'buttons' => array(
										'update' => array(
												'url' => 'Yii::app()->getController()->createUrl("/srbac/manage/authItem", array("id" => $data->getAttribute("id")))',
												'imageUrl' => $this->getModule()->getIconsUrl('update.png'),
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'GET',
																'url' => new CJavaScriptExpression('$(this).attr("href")+"&ajax=authItem-form"'),
																'beforeSend' => 'function(){$("#form").addClass("srbacLoading");}',
																'complete' => 'function(){$("#form").removeClass("srbacLoading");}',
																'replace' => '#authItem-form'
														)
												).'return false;}'
										),
										'delete' => array(
												'url' => 'Yii::app()->getController()->createUrl("/srbac/manage/authItem", array("id" => $data->getAttribute("id")))',
												'imageUrl' => $this->getModule()->getIconsUrl('delete.png'),
												'click' => 'function(){'.
														'if(!confirm("'.Yii::t('srbac', 'Are you sure you want to delete this item?').'")) return false;'.
														'$("#authItem-grid").yiiGridView("update",  '.
														CJavaScript::encode(array(
																'type' => 'DELETE',
																'url' => 'js:$(this).attr("href").split("?").shift()',
																'data' => 'js:$(this).attr("href").split("?").pop()',
																'success' => 'js:function(data){$("#authItem-grid").yiiGridView("update");$("#createNewButton").trigger("click");}',
																'error' => 'js:function(jqXHR,textStatus,errorThrown){alert(errorThrown);}'
														)).');'.
														'return false;}',
												'visible' => '$this->grid->getController()->getModule()->superUser !== $data->getAttribute("name")'
										)
								),
						)
				),
		)
);
?>
