<?php if(!isset($user)): ?>
	<h2><?php echo Yii::t('srbac', 'Please select a user.'); ?></h2>
<?php else: ?>
	<h2><?php echo $user->getAttribute('name'); ?></h2>
	<?php if(empty($roles)): ?>
		<div>
			<?php echo Yii::t('srbac', 'No roles have been assigned to this user.'); ?>
		</div>
	<?php else: ?>
		<table class="srbac">
			<tr>
				<th class="roles"><?php echo Yii::t('srbac', 'Roles'); ?></th>
				<th class="tasks"><?php echo Yii::t('srbac', 'Tasks'); ?></th>
				<th class="operations"><?php echo Yii::t('srbac', 'Operations'); ?></th>
			</tr>
			<tr>
				<td colspan="3">
					<table class="roles">
						<?php foreach ($roles as $role): ?>
						<tr>
							<td>
								<?php echo $role->getAttribute('name'); ?>
								<?php foreach ($role->type(EAuthItem::TYPE_TASK)->together()->getRelated('children') as $task): ?>
								<table class="tasks">
									<tr>
										<td>
											<?php echo $task->getAttribute('name'); ?>
											<table class="operations">
												<tr>
													<td>
													<?php
													foreach ($task->type(EAuthItem::TYPE_OPERATION)->together()->getRelated('children') as $operation)
													{
														echo $operation->getAttribute('name')."<br />";
													}
													?>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<?php endforeach; ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</table>
				</td>
			</tr>
		</table>
	<?php endif; ?>
<?php endif; ?>
