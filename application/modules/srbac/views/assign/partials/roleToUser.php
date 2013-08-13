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
			<td style="width: 50%;">
				<table>
					<tr>
						<th><?php echo Yii::t('srbac', 'Users'); ?></th>
					</tr>
					<tr>
						<td>
						<?php
						echo CHtml::activeDropDownList(
								$this->getModule()->getStaticUserModel(),
								$this->getModule()->userId,
								CHtml::listData($users, $this->getModule()->userId, $this->getModule()->username),
								array(
									'size' => 15,
									'class' => 'dropdown',
									'ajax' => array(
										'type' => 'GET',
										'url' => $this->createUrl('/srbac/assign/roles'),
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
			<td id="role" style="width: 50%;">
				<?php
					$this->renderPartial(
						'partials/userAjax',
						array(
							'model' => $model,
							'userId' => $userId,
							'assignedRoles' => $assignedRoles,
							'notAssignedRoles' => $notAssignedRoles,
						)
					);
				?>
			</td>
		</tr>
	</table>
	<br />
	<?php echo CHtml::endForm(); ?>
</div>