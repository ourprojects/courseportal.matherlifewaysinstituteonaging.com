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
												'url' => 'Yii::app()->getController()->createUrl("authItem", array("id" => $data->id))',
												'imageUrl' => $this->getModule()->getIconsUrl('update.png'),
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'GET',
																'url' => new CJavaScriptExpression('$(this).attr("href")'),
																'update' => '#form',
																'beforeSend' => 'function(){$("#form").addClass("srbacLoading");}',
																'complete' => 'function(){$("#form").removeClass("srbacLoading");}'
														)
												).'return false;}'
										),
										'delete' => array(
												'url' => 'Yii::app()->getController()->createUrl("authItem", array("id" => $data->id))',
												'imageUrl' => $this->getModule()->getIconsUrl('delete.png'),
												'click' => 'function(){'.CHtml::ajax(
														array(
																'type' => 'DELETE',
																'url' => new CJavaScriptExpression('$(this).attr("href")'),
																'update' => '#form',
																'beforeSend' => 'function(){$("#form").addClass("srbacLoading");}',
																'complete' => 'function(){$("#form").removeClass("srbacLoading");}'
														)
												).'return false;}',
												'visible' => '$this->grid->getController()->getModule()->superUser !== $data->getAttribute("name")'
										)
								),
						)
				),
		)
);
?>
