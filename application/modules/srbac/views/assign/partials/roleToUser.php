<!-- USER -> ROLES -->
<div class="srbac">
	<?php
	echo CHtml::beginForm();
	echo CHtml::errorSummary($model);
	?>
	<table>
		<tr>
			<th colspan="2">
			<?php echo Yii::t('srbac', 'Assign Roles to Users')?>
			</th>
		</tr>
		<tr>
			<td width="50%">
				<table>
					<tr>
						<th><?php echo Yii::t('srbac', 'User'); ?></th>
					</tr>
					<tr>
						<td>
						<?php
						echo CHtml::activeDropDownList(
								$this->getModule()->getUserModel(),
								$this->getModule()->userId,
								CHtml::listData($this->getModule()->getUserModel()->findAll(new CDbCriteria(array('order' => $this->getModule()->username))), $this->getModule()->userId, $this->getModule()->username),
								array(
									'size' => $this->getModule()->listBoxNumberOfLines,
									'class' => 'dropdown',
									'ajax' => array(
										'type' => 'GET',
										'url' => 'roles',
										'update' => '#role',
										'beforeSend' => 'function(){$("#loadMessageRole").addClass("srbacLoading");}',
										'complete' => 'function(){$("#loadMessageRole").removeClass("srbacLoading");}'
									),
									'name' => 'userId',
									'id' => 'UserList'
								)
						);
						?>
						</td>
					</tr>
				</table>
			</td>
			<td width="50%" id="role">
				<?php
					$this->renderPartial(
						'partials/userAjax',
						array(
							'model' => $model,
							'userId' => $userId,
							'assignedRoles' => $assignedRoles,
							'notAssignedRoles' => $notAssignedRoles,
							'message' => $message
						)
					);
				?>
			</td>
		</tr>
	</table>
	<br />
	<?php echo CHtml::endForm(); ?>
</div>