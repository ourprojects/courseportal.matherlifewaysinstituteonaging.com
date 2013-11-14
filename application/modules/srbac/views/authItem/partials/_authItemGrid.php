<?php
if(!isset($deleteSuccessJS))
{
	$deleteSuccessJS = '';
}
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => $gridId,
				'filter' => $model,
				'dataProvider' => isset($dataProvider) ? $dataProvider : $model->search(),
				'pager' => array(
						'class' => 'CLinkPager',
						'maxButtonCount' => 8
				),
				'columns' => array(
						'name',
						array(
								'name' => 'type',
								'value' => 'AuthItem::$TYPES[$data["type"]]',
								'filter' => AuthItem::$TYPES,
								'sortable' => false
						),
						array(
								'class' => 'CButtonColumn',
								'template' => '{create}{update}{delete}',
								'buttons' => array(
										'create' => array(
												'label' => SrbacModule::t('Create'),
												'url' => '$this->grid->getController()->createUrl("/'.SrbacUtilities::SRBAC_MODULE_NAME.'/authItem/authItem", array_merge($data instanceof AuthItem ? $data->getAttributes($data->getSafeAttributeNames()) : $data, array("ajax" => "'.$formId.'")))',
												'imageUrl' => $this->getModule()->getIconsUrl('create.png'),
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'GET',
																'url' => 'js:$(this).attr("href")',
																'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
																'replace' => '#'.$formId,
																'complete' => 'function(){$("#'.$formId.'").css("display", "block");}',
														)
												).'return false;}',
												'visible' => '$data instanceof CActiveRecord ? $data->getIsNewRecord() : (empty($data["id"]) || empty($data["name"]))'
										),
										'update' => array(
												'url' => '$this->grid->getController()->createUrl("/'.SrbacUtilities::SRBAC_MODULE_NAME.'/authItem/authItem", array("id" => $data["id"]))',
												'imageUrl' => $this->getModule()->getIconsUrl('update.png'),
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'GET',
																'url' => 'js:$(this).attr("href")+"&ajax='.$formId.'"',
																'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
																'replace' => '#'.$formId
														)
												).'return false;}',
												'visible' => '$data instanceof CActiveRecord ? !$data->getIsNewRecord() : !(empty($data["id"]) || empty($data["name"]))'
										),
										'delete' => array(
												'url' => '$this->grid->getController()->createUrl("/'.SrbacUtilities::SRBAC_MODULE_NAME.'/authItem/authItem", array("id" => $data["id"]))',
												'imageUrl' => $this->getModule()->getIconsUrl('delete.png'),
												'click' => 'function(){'.
														'if(!confirm("'.SrbacModule::t('Are you sure you want to delete this item?').'")) return false;'.
														'var id = $(this).attr("href").split("?").pop().split("=").pop();'.
														'$("#'.$gridId.'").yiiGridView("update",  '.
														CJavaScript::encode(array(
																'type' => 'DELETE',
																'url' => 'js:$(this).attr("href").split("?").shift()',
																'data' => 'js:"id="+id',
																'success' => 'js:function(data){if($("#'.$formId.' input[name=\'AuthItem[id]\']").val()==id){$("#'.$formId.'").css("display", "none");}$("#'.$gridId.'").yiiGridView("update");'.$deleteSuccessJS.'}',
																'error' => 'js:function(jqXHR,textStatus,errorThrown){alert(errorThrown);}'
														)).');'.
														'return false;}',
												'visible' => '($data instanceof CActiveRecord ? !$data->getIsNewRecord() : !(empty($data["id"]) || empty($data["name"]))) && $this->grid->getController()->getModule()->superUser !== $data["name"]'
										)
								),
						)
				),
		)
);
?>
<div class="message" id="loadMessage<?php echo $gridId; ?>">
	&nbsp;<?php echo Yii::app()->getUser()->getFlash($this->getModule()->flashKey, null, true); ?>
</div>
