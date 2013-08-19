<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => $gridId,
				'filter' => $model,
				'dataProvider' => $model->search(),
				'columns' => array(
						array(
								'name' => SrbacUtilities::getSrbacModule()->userId,
								'htmlOptions' => array('width' => '25'),
						),
						SrbacUtilities::getSrbacModule()->username,
						array(
								'class' => 'CButtonColumn',
								'template' => '{view}{create}{delete}',
								'viewButtonLabel' => Yii::t('srbac', 'View user\'s assignments'),
								'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/'.SrbacUtilities::SRBAC_MODULE_NAME.'/user/view", array("id" => $data->{SrbacUtilities::getSrbacModule()->userId}))',
								'buttons' => array(
										'create' => array(
												'label' => Yii::t('srbac', 'Assign super user privledges'),
												'url' => 'Yii::app()->getController()->createUrl("/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/roles", array("userId" => $data->{SrbacUtilities::getSrbacModule()->userId}))',
												'imageUrl' => $this->getModule()->getIconsUrl('create.png'),
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'PUT',
																'url' => 'js:$(this).attr("href")',
																'data' => array('roles' => array(SrbacUtilities::getSrbacModule()->superUser)),
																'beforeSend' => 'function(){$("#superUserGrid").addClass("srbacLoading");}',
																'complete' => 'function(){$("#superUserGrid").removeClass("srbacLoading");$("#normalUserGrid").yiiGridView("update");$("#superUserGrid").yiiGridView("update");}',
														)
												).'return false;}',
												'visible' => '!$data->getIsSuperUser()'
										),
										'delete' => array(
												'label' => Yii::t('srbac', 'Revoke super user privledges'),
												'url' => 'Yii::app()->getController()->createUrl("/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/roles", array("userId" => $data->{SrbacUtilities::getSrbacModule()->userId}))',
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'DELETE',
																'url' => 'js:$(this).attr("href")',
																'data' => array('roles' => array(SrbacUtilities::getSrbacModule()->superUser)),
																'beforeSend' => 'function(){$("#superUserGrid").addClass("srbacLoading");}',
																'complete' => 'function(){$("#superUserGrid").removeClass("srbacLoading");$("#normalUserGrid").yiiGridView("update");$("#superUserGrid").yiiGridView("update");}',
														)
												).'return false;}',
												'visible' => (SrbacUser::model()->superUser()->count() > 1 ? 'true' : 'false').' && $data->getIsSuperUser()'
										)
								)
						)
				),
		)
);
?>