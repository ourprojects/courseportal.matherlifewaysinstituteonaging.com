<table>
	<tr>
		<th><?php echo Yii::t('srbac', AuthItem::$TYPES[$childType].'s Assigned')?></th>
		<th>&nbsp;</th>
		<th><?php echo Yii::t('srbac', AuthItem::$TYPES[$childType].'s Not Assigned')?></th>
	</tr>
	<tr>
		<td style="width: 45%;">
		<?php
		echo CHtml::activeDropDownList(
				$model,
				'id',
				CHtml::listData($children, 'id', 'name'),
				array(
					'size' => 15,
					'multiple' => 'multiple',
					'class' => 'dropdown',
					'name' => 'children',
					'id' => 'assigned'.AuthItem::$TYPES[$childType]
				)
		);
		?>
		</td>
		<td align="center" style="width: 10%;">
		<?php
		echo CHtml::ajaxButton(
				'<<',
				$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/children', array('parentType' => $parentType, 'childType' => $childType)),
				array(
					'type' => 'PUT',
					'update' => '#'.AuthItem::$TYPES[$childType].'Management',
					'beforeSend' => 'function(){$("#loadMessage'.AuthItem::$TYPES[$childType].'").addClass("srbacLoading");}',
					'complete' => 'function(){$("#loadMessage'.AuthItem::$TYPES[$childType].'").removeClass("srbacLoading");}'
				),
				array('disabled' => empty($notChildren), 'id' => 'assign'.AuthItem::$TYPES[$childType])
		);
		echo CHtml::ajaxButton(
				'>>',
				$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/children', array('parentType' => $parentType, 'childType' => $childType)),
				array(
					'type' => 'DELETE',
					'update' => '#'.AuthItem::$TYPES[$childType].'Management',
					'beforeSend' => 'function(){$("#loadMessage'.AuthItem::$TYPES[$childType].'").addClass("srbacLoading");}',
					'complete' => 'function(){$("#loadMessage'.AuthItem::$TYPES[$childType].'").removeClass("srbacLoading");}'
				),
				array('disabled' => empty($children), 'id' => 'revoke'.AuthItem::$TYPES[$childType])
		);
		?>
		</td>
		<td style="width: 45%;">
		<?php
		echo CHtml::activeDropDownList(
				$model,
				'id',
				CHtml::listData($notChildren, 'id', 'name'),
				array(
					'size' => 15,
					'multiple' => 'multiple',
					'class' => 'dropdown',
					'name' => 'children',
					'id' => 'notAssigned'.AuthItem::$TYPES[$childType]
				)
		);
		?>
		</td>
	</tr>
</table>
<div id="loadMessage<?php echo AuthItem::$TYPES[$childType]; ?>" class="message">
	&nbsp;<?php echo Yii::app()->getUser()->getFlash($this->getModule()->flashKey, null, true); ?>
</div>