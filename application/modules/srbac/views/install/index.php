<?php
$this->breadcrumbs = array(Yii::t('srbac', 'SRBAC Installation'));
$error = false;
Yii::app()->getClientScript()->registerCss('settingsTable', 'table th.right{text-align:right;} table th.center{text-align:center;font-size:1.6em;} table td.fill{width:100%;} table.attributesGrid th, table.attributesGrid td{padding:.135em;}');
?>
<div>
	<?php
	if($installed)
	{
		$this->renderPartial('../frontpage');
	}
	?>
	<h2><?php echo Yii::t('srbac', 'SRBAC System Status'); ?></h2>
	<div class="srbac">
		<table class="systemGrid">
			<tr>
				<th colspan="2" class="center"><?php echo Yii::t('srbac', 'AuthManager'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo Yii::t('srbac', 'Type:'); ?></th>
				<?php
				if($authManager === null)
				{
					echo '<td class="fill srbacError">'.Yii::t('srbac', 'An AuthManager has not been defined in the application\'s application\'s configuration.').'</td>';
					$error = true;
				}
				elseif(!$authManager instanceof EDbAuthManager)
				{
					echo '<td class="fill srbacError">'.Yii::t('srbac', 'An AuthManager is defined in the application\'s application\'s configuration, but it is not the correct type. SRBAC is only compatible with AuthManagers of type EDbAuthManager.').'</td>';
					$error = true;
				}
				else
				{
					echo '<td class="fill srbacNoError">'.get_class($authManager).'</td>';
				}
			?>
			</tr>
			<?php
			if(!$error):
				$schema = $authManager->db->getSchema();
			?>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'Item&nbsp;Table:'); ?></th>
					<?php $tableSchema = $schema->getTable($authManager->itemTable); ?>
					<td class="fill <?php echo $tableSchema === null ? 'srbacError' : 'srbacNoError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Name:'); ?></th>
								<td class="fill"><?php echo $authManager->itemTable; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'DB&nbsp;Table:'); ?></th>
								<td class="fill"><?php echo $tableSchema === null ? Yii::t('srbac', 'Not Found!') : $tableSchema->name; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'Contains authorization items (roles, tasks, operations).'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'Assignment&nbsp;Table:'); ?></th>
					<?php $tableSchema = $schema->getTable($authManager->assignmentTable); ?>
					<td class="fill <?php echo $tableSchema === null ? 'srbacError' : 'srbacNoError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Name:'); ?></th>
								<td class="fill"><?php echo $authManager->assignmentTable; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'DB&nbsp;Table:'); ?></th>
								<td class="fill"><?php echo $tableSchema === null ? Yii::t('srbac', 'Not Found!') : $tableSchema->name; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'Tracks authorization item assignments to users.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'Item&nbsp;Child&nbsp;Table:'); ?></th>
					<?php $tableSchema = $schema->getTable($authManager->itemChildTable); ?>
					<td class="fill <?php echo $tableSchema === null ? 'srbacError' : 'srbacNoError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Name:'); ?></th>
								<td class="fill"><?php echo $authManager->itemChildTable; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'DB&nbsp;Table:'); ?></th>
								<td class="fill"><?php echo $tableSchema === null ? Yii::t('srbac', 'Not Found!') : $tableSchema->name; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'Tracks heirarchy of authorization items.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<th colspan="2" class="center"><?php echo Yii::t('srbac', 'Settings'); ?></th>
			</tr>
			<?php if($srbacModule === null): ?>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'Status:'); ?></th>
					<td class="fill srbacError"><?php echo Yii::t('srbac', 'Unable to locate the SRBAC module. Expected name: {moduleName}.', array('{moduleName}' => SrbacUtilities::SRBAC_MODULE_NAME)); ?></td>
				</tr>
			<?php else: ?>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'Flash&nbsp;Key:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Attribute:'); ?></th>
								<td class="fill"><?php echo 'flashKey'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->flashKey; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'The key used for all flash messages generated by SRBAC.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'User&nbsp;ID:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Attribute:'); ?></th>
								<td class="fill"><?php echo 'userId'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->userId; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'The primary key of the application\'s user table.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'Username:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Attribute:'); ?></th>
								<td class="fill"><?php echo 'username'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->username; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'A column name storing a friendly identifier of the application\'s users.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'User&nbsp;Class:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Attribute:'); ?></th>
								<td class="fill"><?php echo 'userclass'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->userclass; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'The CActiveRecord class name of the application\'s users.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'Image&nbsp;Pack:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Attribute:'); ?></th>
								<td class="fill"><?php echo 'imagesPack'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->imagesPack; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'The image pack to use for the SRBAC administration interface.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo Yii::t('srbac', 'Layout:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Attribute:'); ?></th>
								<td class="fill"><?php echo 'layout'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->layout; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
								<td class="fill"><?php echo Yii::t('srbac', 'The layout to use for the SRBAC administration interface.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<th colspan="2" class="center"><?php echo Yii::t('srbac', 'Super User'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo Yii::t('srbac', 'Status:'); ?></th>
				<?php
				if($installed)
				{
					if(AuthItem::model()->superUser()->exists())
					{
						if(AuthItem::model()->superUser()->with(array('users' => array('joinType' => 'INNER JOIN')))->together()->exists())
						{
							echo '<td class="fill srbacNoError">'.Yii::t('srbac', 'Super user role exists and is assigned.').'</td>';
						}
						else
						{
							?>
							<td class="fill srbacError">
								<?php
								echo Yii::t(
										'srbac',
										'The super user role exists, but has not been assigned. Access to the SRBAC administration interface will be granted to all users until this problem is resolved! Click {link} to assign a super user now.',
										array('{link}' => CHtml::link(Yii::t('srbac', 'here'), $this->createUrl('/srbac/assign/superUsers')))
								);
								?>
							</td>
							<?php
						}
					}
					else
					{
						?>
						<td class="fill srbacError">
						<?php
						echo Yii::t(
								'srbac',
								'The super user role does not exist. Access to the SRBAC administration interface will be granted to all users until this problem is resolved! Click {link} to create the super user role now.',
								array('{link}' => CHtml::link(Yii::t('srbac', 'here'), $this->createUrl('/srbac/assign/superUsers')))
						);
						?>
						</td>
						<?php
					}
				}
				else
				{
					echo '<td class="fill srbacError">'.Yii::t('srbac', 'SRBAC is not installed. You must install SRBAC before you can configure super users.').'</td>';
				}
				?>
			</tr>
			<tr>
				<th class="right"><?php echo Yii::t('srbac', 'Value:'); ?></th>
				<td class="fill <?php echo $srbacModule->checkSetting('superUser') ? 'srbacNoError' : 'srbacError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo Yii::t('srbac', 'Attribute:'); ?></th>
							<td class="fill"><?php echo 'superUser'; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo Yii::t('srbac', 'Value:'); ?></th>
							<td class="fill"><?php echo $srbacModule->superUser; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo Yii::t('srbac', 'Description:'); ?></th>
							<td class="fill"><?php echo Yii::t('srbac', 'The name of the super user role. Any user assigned this role will have full access to all access controlled sections of the application. At least one user must always be assigned this role.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th colspan="2" class="center"><?php echo Yii::t('srbac', 'Installation'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo Yii::t('srbac', 'Status:'); ?></th>
				<td class="fill <?php echo $installed ? 'srbacNoError' : 'srbacError'; ?>"><?php echo $installed ? Yii::t('srbac', 'Installed') : Yii::t('srbac', 'Not Installed'); ?></td>
			</tr>
			<tr>
				<th class="right"></th>
				<td id="install" class="fill">
				<?php
				if($installed)
				{
					echo CHtml::ajaxButton(
						'Re-install SRBAC',
						$this->createUrl('/srbac/install/execute'),
						array(
							'type' => 'POST',
							'beforeSend' => 'function(){if(!confirm("'.Yii::t('srbac', 'Re-installing SRBAC will clear all data! All authorization items and user assignments will be lost! Are you sure you want to continue?').'")) return false;$("#install").addClass("srbacLoading");}',
							'success' => 'function(data){location.reload()}',
							'error' => 'function(jqXHR,textStatus,errorThrown){alert(errorThrown);}'
						),
						array('disabled' => $error)
					);
					?>
					<p style="font-size:1.15em;font-weight:bold;color:red;">
					<?php echo Yii::t('srbac', 'Beware! Re-installing SRBAC will clear all data! All authorization items and user assignments will be lost!'); ?>
					</p>
					<?php
				}
				else
				{
					if($error)
					{
						echo '<p style="font-size:1.15em;font-weight:bold;color:red;">'.Yii::t('srbac', 'You must fix the errors listed above before SRBAC can be installed.').'</p>';
					}
					echo CHtml::ajaxButton(
						'Install SRBAC',
						$this->createUrl('/srbac/install/execute'),
						array('type' => 'POST'),
						array('disabled' => $error)
					);
				}
				?>
				</td>
			</tr>
		</table>
	</div>
</div>
