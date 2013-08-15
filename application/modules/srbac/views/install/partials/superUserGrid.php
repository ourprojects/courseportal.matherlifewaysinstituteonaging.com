<?php
	$this->widget('zii.widgets.grid.CGridView',
			array(
					'id' => 'superUserGrid',
					'filter' => $userModel,
					'dataProvider' => $userModel->search(),
					'columns' => array(
							array(
									'name' => SrbacUtilities::getSrbacModule()->userId,
									'htmlOptions' => array('width' => '25'),
							),
							SrbacUtilities::getSrbacModule()->username,
							array(
									'class' => 'CButtonColumn',
									'template' => '{view}{delete}',
									'viewButtonLabel' => Yii::t('srbac', 'View user\'s assignments'),
									'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/srbac/user/view", array("id" => $data->{$this->grid->getController()->getModule()->userId}))',
									'buttons' => array(
											'delete' => array(
													'label' => Yii::t('srbac', 'Remove super user priveledges'),
													'url' => 'Yii::app()->getController()->createUrl("/srbac/assign/roles", array("userId" => $data->{$this->grid->getController()->getModule()->userId}))',
													'click' => 'function(){'.CHtml::ajax(
															array(
																	'type' => 'DELETE',
																	'url' => 'js:$(this).attr("href")',
																	'data' => array('roles' => array(SrbacUtilities::getSrbacModule()->superUser)),
																	'beforeSend' => 'function(){$("#superUserGrid").addClass("srbacLoading");$("superUserGrid").yiiGridView("update");}',
																	'complete' => 'function(){$("#superUserGrid").removeClass("srbacLoading");$("superUserGrid").yiiGridView("update");}',
															)
													).'return false;}',
											)
									)
							)
					),
			)
	);
?>