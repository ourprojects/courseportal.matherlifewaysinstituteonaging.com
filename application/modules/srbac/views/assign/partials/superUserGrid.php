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
								'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/srbac/user/view", array("id" => $data->{SrbacUtilities::getSrbacModule()->userId}))',
								'buttons' => array(
										'create' => array(
												'label' => Yii::t('srbac', 'Assign super user priveledges'),
												'url' => 'Yii::app()->getController()->createUrl("/srbac/assign/roles", array("userId" => $data->{SrbacUtilities::getSrbacModule()->userId}))',
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
												'visible' => '!AuthItem::model()->superUser()->with(array("users" => array("joinType" => "INNER JOIN")))->together()->exists("users.".SrbacUtilities::getSrbacModule()->userId."=:id", array(":id" => $data->{SrbacUtilities::getSrbacModule()->userId}))'
										),
										'delete' => array(
												'label' => Yii::t('srbac', 'Revoke super user priveledges'),
												'url' => 'Yii::app()->getController()->createUrl("/srbac/assign/roles", array("userId" => $data->{SrbacUtilities::getSrbacModule()->userId}))',
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'DELETE',
																'url' => 'js:$(this).attr("href")',
																'data' => array('roles' => array(SrbacUtilities::getSrbacModule()->superUser)),
																'beforeSend' => 'function(){$("#superUserGrid").addClass("srbacLoading");}',
																'complete' => 'function(){$("#superUserGrid").removeClass("srbacLoading");$("#normalUserGrid").yiiGridView("update");$("#superUserGrid").yiiGridView("update");}',
														)
												).'return false;}',
												'visible' => ($this->getSuperUserCount() > 1 ? 'true' : 'false').
													' && AuthItem::model()->superUser()->with(array("users" => array("joinType" => "INNER JOIN")))->together()->exists("users.".SrbacUtilities::getSrbacModule()->userId."=:id", array(":id" => $data->{SrbacUtilities::getSrbacModule()->userId}))'
										)
								)
						)
				),
		)
);
?>