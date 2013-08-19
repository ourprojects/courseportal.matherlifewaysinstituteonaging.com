<?php
$this->breadcrumbs = array('SRBAC Super Users');
?>
<div>
	<?php $this->renderPartial('../frontpage'); ?>
	<table class="srbac">
		<tr>
			<th colspan="2">
			<?php echo Yii::t('srbac', 'Manage Super User Assignments')?>
			</th>
		</tr>
		<?php if(!SrbacUser::model()->superUser()->exists()): ?>
			<tr class="srbacError">
			<th colspan="2">
				<?php
				echo Yii::t(
						'srbac',
						'The super user role has not been assigned, access to the SRBAC administration interface will be granted to all users until this problem is resolved!');
				?>
			</th>
			</tr>
		<?php endif; ?>
		<tr>
			<td id="superUsers" style="width:50%;vertical-align:top;">
				<table>
					<tr>
						<th><?php echo Yii::t('srbac', 'Super Users'); ?></th>
					</tr>
					<tr>
						<td><?php $this->renderPartial('partials/superUserGrid', array('model' => $superUserModel, 'gridId' => 'superUserGrid')); ?></td>
					</tr>
				</table>
			</td>
			<td id="normalUsers" style="width:50%;vertical-align:top;">
					<table>
						<tr>
							<th><?php echo Yii::t('srbac', 'Normal Users'); ?></th>
						</tr>
						<tr>
							<td><?php $this->renderPartial('partials/superUserGrid', array('model' => $userModel, 'gridId' => 'normalUserGrid')); ?></td>
						</tr>
					</table>
			</td>
		</tr>
	</table>
</div>