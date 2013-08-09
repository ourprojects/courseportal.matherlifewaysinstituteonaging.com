<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => $gridId,
				'filter' => $model,
				'dataProvider' => isset($dataProvider) ? $dataProvider : $model->search(),
				'columns' => array(
						'name',
						array(
								'name' => 'type',
								'value' => 'AuthItem::$TYPES[$data["type"]].($this->grid->getController()->getModule()->superUser === $data["name"] ? " (Super User)" : "")',
								'filter' => AuthItem::$TYPES,
								'sortable' => false
						),
						array(
								'class' => 'CButtonColumn',
								'template' => '{create}{update}{delete}',
								'buttons' => array(
										'create' => array(
												'label' => Yii::t('srbac', 'Create'),
												'url' => 'Yii::app()->getController()->createUrl("/srbac/manage/authItem", array("ajax" => "'.$formId.'"))',
												'imageUrl' => $this->getModule()->getIconsUrl('create.png'),
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'POST',
																'url' => new CJavaScriptExpression('$(this).attr("href")'),
																'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
																'complete' => 'function(){$("#'.$formId.'").removeClass("srbacLoading");}',
																'replace' => '#'.$formId
														)
												).'return false;}',
												'visible' => '$data instanceof CActiveRecord ? $data->getIsNewRecord() : empty($data["id"])'
										),
										'update' => array(
												'url' => 'Yii::app()->getController()->createUrl("/srbac/manage/authItem", array("id" => $data["id"]))',
												'imageUrl' => $this->getModule()->getIconsUrl('update.png'),
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'GET',
																'url' => new CJavaScriptExpression('$(this).attr("href")+"&ajax='.$formId.'"'),
																'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
																'complete' => 'function(){$("#'.$formId.'").removeClass("srbacLoading");}',
																'replace' => '#'.$formId
														)
												).'return false;}',
												'visible' => '$data instanceof CActiveRecord ? !$data->getIsNewRecord() : !empty($data["id"])'
										),
										'delete' => array(
												'url' => 'Yii::app()->getController()->createUrl("/srbac/manage/authItem", array("id" => $data["id"]))',
												'imageUrl' => $this->getModule()->getIconsUrl('delete.png'),
												'click' => 'function(){'.
														'if(!confirm("'.Yii::t('srbac', 'Are you sure you want to delete this item?').'")) return false;'.
														'var id = $(this).attr("href").split("?").pop().split("=").pop();'.
														'$("#'.$gridId.'").yiiGridView("update",  '.
														CJavaScript::encode(array(
																'type' => 'DELETE',
																'url' => 'js:$(this).attr("href").split("?").shift()',
																'data' => 'js:"id="+id',
																'success' => 'js:function(data){$("#'.$gridId.'").yiiGridView("update");if($("#'.$formId.' #AuthItem_id").val()==id)$("#'.$formId.'_createNewButton").trigger("click");}',
																'error' => 'js:function(jqXHR,textStatus,errorThrown){alert(errorThrown);}'
														)).');'.
														'return false;}',
												'visible' => '($data instanceof CActiveRecord ? !$data->getIsNewRecord() : !empty($data["id"])) && $this->grid->getController()->getModule()->superUser !== $data["name"]'
										)
								),
						)
				),
		)
);
?>
