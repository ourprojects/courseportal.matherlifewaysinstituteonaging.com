<table>
	<tr>
		<th><?php echo Yii::t('srbac','Assigned Roles') ?></th>
		<th>&nbsp;</th>
		<th><?php echo Yii::t('srbac','Not Assigned Roles') ?></th>
	</tr>
	<tr>
		<td width="45%">
		<?php
		echo CHtml::activeDropDownList(
				$model,
				'id',
				CHtml::listData($assignedRoles, 'id', 'name'),
				array(
						'size' => $this->getModule()->listBoxNumberOfLines,
						'multiple' => 'multiple',
						'class' => 'dropdown',
						'name' => 'roles',
						'id' => 'assignedRole'
				)
			);
		?>
		</td>
		<td width="10%" align="center">
		<?php
		echo CHtml::ajaxButton(
			'<<',
			array('roles', 'userId' => $userId),
			array(
				'type' => 'PUT',
				'update' => '#role',
				'beforeSend' => 'function(){$("#loadMessageRole").addClass("srbacLoading");}',
				'complete' => 'function(){$("#loadMessageRole").removeClass("srbacLoading");}'
			),
			array('disabled' => empty($notAssignedRoles), 'id' => 'assignRole')
		);
		echo CHtml::ajaxButton(
			'>>',
			array('roles', 'userId' => $userId),
			array(
				'type' => 'DELETE',
				'update' => '#role',
				'beforeSend' => 'function(){$("#loadMessageRole").addClass("srbacLoading");}',
				'complete' => 'function(){$("#loadMessageRole").removeClass("srbacLoading");}'
			),
			array('disabled' => empty($assignedRoles), 'id' => 'revokeRole')
		);
		?>
		</td>
		<td width="45%">
		<?php
		echo CHtml::activeDropDownList(
				$model,
				'id',
				CHtml::listData($notAssignedRoles, 'id', 'name'),
				array(
						'size' => $this->getModule()->listBoxNumberOfLines,
						'multiple' => 'multiple',
						'class' => 'dropdown',
						'name' => 'roles',
						'id' => 'notAssignedRole'
				)
			);
		?>
		</td>
	</tr>
</table>
<div class="message" id="loadMessageRole">
	&nbsp;<?php echo $message; ?>
</div>