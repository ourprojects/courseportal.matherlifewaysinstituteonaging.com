<table>
	<tr>
		<th><?php echo SrbacModule::t('Roles Assigned') ?></th>
		<th>&nbsp;</th>
		<th><?php echo SrbacModule::t('Roles Not Assigned') ?></th>
	</tr>
	<tr>
		<td style="width: 45%;">
		<?php
		echo CHtml::activeDropDownList(
				$model,
				'id',
				CHtml::listData($assignedRoles, 'id', 'name'),
				array(
						'size' => 15,
						'multiple' => 'multiple',
						'class' => 'dropdown',
						'name' => 'roles',
						'id' => 'assignedRole'
				)
			);
		?>
		</td>
		<td align="center" style="width: 10%;">
		<?php
		echo CHtml::ajaxButton(
			'<<',
			$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/roles'),
			array(
				'type' => 'PUT',
				'update' => '#role',
				'data' => 'js:"userId="+$("#UserList").val()+"&"+$("#notAssignedRole").serialize()',
				'beforeSend' => 'function(){$("#loadMessageRole").addClass("srbacLoading");}',
				'complete' => 'function(){$("#loadMessageRole").removeClass("srbacLoading");}'
			),
			array('disabled' => empty($notAssignedRoles), 'id' => 'assignRole')
		);
		echo CHtml::ajaxButton(
			'>>',
			$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/roles'),
			array(
				'type' => 'DELETE',
				'data' => 'js:"userId="+$("#UserList").val()+"&"+$("#assignedRole").serialize()',
				'update' => '#role',
				'beforeSend' => 'function(){$("#loadMessageRole").addClass("srbacLoading");}',
				'complete' => 'function(){$("#loadMessageRole").removeClass("srbacLoading");}'
			),
			array('disabled' => empty($assignedRoles), 'id' => 'revokeRole')
		);
		?>
		</td>
		<td style="width: 45%;">
		<?php
		echo CHtml::activeDropDownList(
				$model,
				'id',
				CHtml::listData($notAssignedRoles, 'id', 'name'),
				array(
						'size' => 15,
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
	&nbsp;<?php echo Yii::app()->getUser()->getFlash($this->getModule()->flashKey, null, true); ?>
</div>