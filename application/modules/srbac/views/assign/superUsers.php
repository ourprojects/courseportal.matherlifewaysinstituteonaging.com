<?php
$this->breadcrumbs = array('SRBAC Super Users');
?>
<div>
	<?php $this->renderPartial('../frontpage'); ?>
	<table class="srbac">
		<tr>
			<th colspan="2">
			<?php echo SrbacModule::t('Manage Super User Assignments')?>
			</th>
		</tr>
		<?php if(!SrbacUser::model()->superUser()->exists()): ?>
			<tr class="srbacError">
			<th colspan="2">
				<?php
				echo SrbacModule::t('The super user role has not been assigned, access to the SRBAC administration interface will be granted to all users until this problem is resolved!');
				?>
			</th>
			</tr>
		<?php endif; ?>
		<tr>
			<td id="superUsers" style="width:50%;vertical-align:top;">
				<table>
					<tr>
						<th><?php echo SrbacModule::t('Super Users'); ?></th>
					</tr>
					<tr>
						<td><?php $this->renderPartial('partials/superUserGrid', array('model' => $superUserModel, 'gridId' => 'superUserGrid')); ?></td>
					</tr>
				</table>
			</td>
			<td id="normalUsers" style="width:50%;vertical-align:top;">
					<table>
						<tr>
							<th><?php echo SrbacModule::t('Normal Users'); ?></th>
						</tr>
						<tr>
							<td><?php $this->renderPartial('partials/superUserGrid', array('model' => $userModel, 'gridId' => 'normalUserGrid')); ?></td>
						</tr>
					</table>
			</td>
		</tr>
	</table>
</div>