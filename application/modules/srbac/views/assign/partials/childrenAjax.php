<table>
	<tr>
		<th><?php echo Yii::t('srbac','Assigned '.AuthItem::$TYPES[$childType].'(s)')?></th>
		<th>&nbsp;</th>
		<th><?php echo Yii::t('srbac','Not Assigned '.AuthItem::$TYPES[$childType].'(s)')?></th>
	</tr>
	<tr>
		<td width="45%">
		<?php
		echo CHtml::activeDropDownList(
				$model,
				'id',
				CHtml::listData($children, 'id', 'name'),
				array(
					'size' => $this->getModule()->listBoxNumberOfLines,
					'multiple' => 'multiple',
					'class' => 'dropdown',
					'name' => 'children',
					'id' => 'assigned'.AuthItem::$TYPES[$childType]
				)
		);
		?>
		</td>
		<td width="10%" align="center">
		<?php
		echo CHtml::ajaxButton(
				'<<',
				array('children', 'parentType' => $parentType, 'childType' => $childType),
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
				array('children', 'parentType' => $parentType, 'childType' => $childType),
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
		<td width="45%">
		<?php
		echo CHtml::activeDropDownList(
				$model,
				'id',
				CHtml::listData($notChildren, 'id', 'name'),
				array(
					'size' => $this->getModule()->listBoxNumberOfLines,
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
	&nbsp;<?php echo $message ?>
</div>