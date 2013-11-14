<?php
$this->breadcrumbs = array(SrbacModule::t('SRBAC System'));
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
	<h2><?php echo SrbacModule::t('SRBAC System Status'); ?></h2>
	<div class="srbac">
		<table class="systemGrid">
			<tr>
				<th colspan="2" class="center"><?php echo SrbacModule::t('AuthManager'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo SrbacModule::t('Type:'); ?></th>
				<?php
				if($authManager === null)
				{
					echo '<td class="fill srbacError">'.SrbacModule::t('An AuthManager has not been defined in the application\'s application\'s configuration.').'</td>';
					$error = true;
				}
				elseif(!$authManager instanceof EDbAuthManager)
				{
					echo '<td class="fill srbacError">'.SrbacModule::t('An AuthManager is defined in the application\'s application\'s configuration, but it is not the correct type. SRBAC is only compatible with AuthManagers of type EDbAuthManager.').'</td>';
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
					<th class="right"><?php echo SrbacModule::t('Item&nbsp;Table:'); ?></th>
					<?php $tableSchema = $schema->getTable($authManager->itemTable); ?>
					<td class="fill <?php echo $tableSchema === null ? 'srbacError' : 'srbacNoError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Name:'); ?></th>
								<td class="fill"><?php echo $authManager->itemTable; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('DB&nbsp;Table:'); ?></th>
								<td class="fill"><?php echo $tableSchema === null ? SrbacModule::t('Not Found!') : $tableSchema->name; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('Contains authorization items (roles, tasks, operations).'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Assignment&nbsp;Table:'); ?></th>
					<?php $tableSchema = $schema->getTable($authManager->assignmentTable); ?>
					<td class="fill <?php echo $tableSchema === null ? 'srbacError' : 'srbacNoError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Name:'); ?></th>
								<td class="fill"><?php echo $authManager->assignmentTable; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('DB&nbsp;Table:'); ?></th>
								<td class="fill"><?php echo $tableSchema === null ? SrbacModule::t('Not Found!') : $tableSchema->name; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('Tracks authorization item assignments to users.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Item&nbsp;Child&nbsp;Table:'); ?></th>
					<?php $tableSchema = $schema->getTable($authManager->itemChildTable); ?>
					<td class="fill <?php echo $tableSchema === null ? 'srbacError' : 'srbacNoError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Name:'); ?></th>
								<td class="fill"><?php echo $authManager->itemChildTable; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('DB&nbsp;Table:'); ?></th>
								<td class="fill"><?php echo $tableSchema === null ? SrbacModule::t('Not Found!') : $tableSchema->name; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('Tracks heirarchy of authorization items.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<th colspan="2" class="center"><?php echo SrbacModule::t('Settings'); ?></th>
			</tr>
			<?php if($srbacModule === null): ?>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Status:'); ?></th>
					<td class="fill srbacError"><?php echo SrbacModule::t('Unable to locate the SRBAC module. Expected name: {moduleName}.', array('{moduleName}' => SrbacUtilities::SRBAC_MODULE_NAME)); ?></td>
				</tr>
			<?php else: ?>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Debug&nbsp;Mode:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('debug') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
								<td class="fill"><?php echo 'debug'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->getDebug() ? 'Enabled' : 'Disabled'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('Enabling debug mode will disable all access controls on RBAC administration interface. Enable this option with caution!'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Default&nbsp;Controller:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('defaultController') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
								<td class="fill"><?php echo 'defaultController'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->defaultController; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('The default controller that will be used for any requests to the RBAC administration interface that do not specify a controller.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Flash&nbsp;Key:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
								<td class="fill"><?php echo 'flashKey'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->flashKey; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('The key used for all flash messages generated by SRBAC.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('User&nbsp;ID:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
								<td class="fill"><?php echo 'userId'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->userId; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('The primary key of the application\'s user table.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Username:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
								<td class="fill"><?php echo 'username'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->username; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('A column name storing a friendly identifier of the application\'s users.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('User&nbsp;Class:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
								<td class="fill"><?php echo 'userclass'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->userclass; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('The CActiveRecord class name of the application\'s users.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Image&nbsp;Pack:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
								<td class="fill"><?php echo 'imagesPack'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->imagesPack; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('The image pack to use for the SRBAC administration interface.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th class="right"><?php echo SrbacModule::t('Layout:'); ?></th>
					<td class="fill <?php echo $srbacModule->checkSetting('layout') ? 'srbacNoError' : 'srbacError'; ?>">
						<table class="attributesGrid">
							<tr>
								<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
								<td class="fill"><?php echo 'layout'; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
								<td class="fill"><?php echo $srbacModule->layout; ?></td>
							</tr>
							<tr>
								<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
								<td class="fill"><?php echo SrbacModule::t('The layout to use for the SRBAC administration interface.'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<th colspan="2" class="center"><?php echo SrbacModule::t('Super User'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo SrbacModule::t('Status:'); ?></th>
				<?php
				if($installed)
				{
					if(AuthItem::model()->superUser()->exists())
					{
						if(SrbacUser::model()->superUser()->exists())
						{
							echo '<td class="fill srbacNoError">'.SrbacModule::t('Super user role exists and is assigned.').'</td>';
						}
						else
						{
							?>
							<td class="fill srbacError">
								<?php
								echo SrbacModule::t(
										'The super user role exists, but has not been assigned. Access to the SRBAC administration interface will be granted to all users until this problem is resolved! Click {link} to assign a super user now.',
										array('{link}' => CHtml::link(SrbacModule::t('here'), $this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/superUsers')))
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
						echo SrbacModule::t('The super user role does not exist. Access to the SRBAC administration interface will be granted to all users until this problem is resolved!');
						echo '<br />';
						echo CHtml::ajaxButton(
								'Create Super User Role',
								$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/authItem/create'),
								array(
										'type' => 'POST',
										'data' => array('AuthItem' => array('name' => $srbacModule->superUser, 'type' => EAuthItem::TYPE_ROLE)),
										'beforeSend' => 'function(){$("#superUserCreate").addClass("srbacLoading");}',
										'complete' => 'function(data){location.reload()}',
								),
								array('id' => 'superUserCreate')
						);
						?>
						</td>
						<?php
					}
				}
				else
				{
					echo '<td class="fill srbacError">'.SrbacModule::t('SRBAC is not installed. You must install SRBAC before you can configure super users.').'</td>';
				}
				?>
			</tr>
			<tr>
				<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
				<td class="fill <?php echo $srbacModule->checkSetting('superUser') ? 'srbacNoError' : 'srbacError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo SrbacModule::t('Attribute:'); ?></th>
							<td class="fill"><?php echo 'superUser'; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo SrbacModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $srbacModule->superUser; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo SrbacModule::t('Description:'); ?></th>
							<td class="fill"><?php echo SrbacModule::t('The name of the super user role. Any user assigned this role will have full access to all access controlled sections of the application. At least one user must always be assigned this role.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th colspan="2" class="center"><?php echo SrbacModule::t('Installation'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo SrbacModule::t('Status:'); ?></th>
				<td class="fill <?php echo $installed ? 'srbacNoError' : 'srbacError'; ?>"><?php echo $installed ? SrbacModule::t('Installed') : SrbacModule::t('Not Installed'); ?></td>
			</tr>
			<tr>
				<th class="right"></th>
				<td class="fill">
				<?php
				if($installed)
				{
					echo CHtml::ajaxButton(
						'Re-install SRBAC',
						$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/system/install'),
						array(
							'type' => 'POST',
							'data' => array('overwrite' => true),
							'beforeSend' => 'function(){if(!confirm("'.SrbacModule::t('Re-installing SRBAC will clear all data! All authorization items and user assignments will be lost! Are you sure you want to continue?').'")) return false;$("#reInstall").addClass("srbacLoading");}',
							'complete' => 'function(data){location.reload()}',
						),
						array(
							'id' => 'reInstall',
							'disabled' => $error
						)
					);
					?>
					<p style="font-size:1.15em;font-weight:bold;color:red;">
					<?php echo SrbacModule::t('Beware! Re-installing SRBAC will clear all data! All authorization items and user assignments will be lost!'); ?>
					</p>
					<?php
				}
				else
				{
					if($error)
					{
						echo '<p style="font-size:1.15em;font-weight:bold;color:red;">'.SrbacModule::t('You must fix the errors listed above before SRBAC can be installed.').'</p>';
					}
					echo CHtml::ajaxButton(
						'Install SRBAC',
						$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/system/install'),
						array(
							'type' => 'POST',
							'data' => array('overwrite' => false),
							'beforeSend' => 'function(){$("#install").addClass("srbacLoading");}',
							'complete' => 'function(data){location.reload()}',
						),
						array(
							'id' => 'install',
							'disabled' => $error
						)
					);
				}
				?>
				</td>
			</tr>
		</table>
	</div>
</div>
