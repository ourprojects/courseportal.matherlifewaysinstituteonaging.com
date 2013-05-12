<div>
	<h2><?php echo t('Thank you for registering!'); ?></h2>
	<table>
		<tr>
			<th><?php echo $user->getAttributeLabel('firstname'); ?>:</th>
			<td><?php echo $user->firstname; ?></td>
		</tr>
		<tr>
			<th><?php echo $user->getAttributeLabel('lastname'); ?>:</th>
			<td><?php echo $user->lastname; ?></td>
		</tr>
		<tr>
			<th><?php echo $user->getAttributeLabel('name'); ?>:</th>
			<td><?php echo $user->name; ?></td>
		</tr>
	</table>
	<p>
		<?php echo t('If you do not recognize the information above or believe that you may have received this email in error please contact us immediately by clicking '); ?>
		<a href="<?php echo Yii::app()->createAbsoluteUrl('/home/contact')?>"><?php echo t('here'); ?></a>.
	</p>
	<p>
		<?php echo t('Please follow the link below to complete your account registration for Mather Lifeways Online Course Portal.'); ?>
	</p>
	<br/><br/>
	<?php echo CHtml::link($user->encodeUrl('user/activate'), $user->encodeUrl('user/activate')); ?>
</div>