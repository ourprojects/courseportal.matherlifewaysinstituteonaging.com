<?php
/**
* roleToUser.php
*
* @author Spyros Soldatos <spyros@valor.gr>
* @link http://code.google.com/p/srbac/
*/

/**
* The tab view for assigning roles to users
*
* @author Spyros Soldatos <spyros@valor.gr>
* @package srbac.views.authitem.tabViews
* @since 1.0.0
*/
?>
<!-- USER -> ROLES -->
<div class="srbac">
	<?php echo SHtml::beginForm(); ?>
	<?php echo SHtml::errorSummary($model); ?>
	<table width="100%">
		<tr>
			<th colspan="2"><?php echo Yii::t('srbac', 'Assign Roles to Users')?>
			</th>
		</tr>
		<tr>
			<th width="50%"><?php echo SHtml::label(Yii::t('srbac', 'User'), 'user'); ?>
			</th>
			<td width="50%" rowspan="2">
				<div id="roles">
					<?php
					$this->renderPartial(
			'tabViews/userAjax',
			array('model' => $model, 'userid' => $userid, 'data' => isset($data) ? $data : array(),'message' => $message)
			);
		?>
				</div>
			</td>
		</tr>
		<tr valign="top">
			<td><?php
			$criteria = new CDbCriteria();
			$criteria->order = $this->getModule()->username;
			echo SHtml::activeDropDownList(
					$this->getModule()->getUserModel(),
					$this->getModule()->userid,
					SHtml::listData($this->getModule()->getUserModel()->findAll($criteria), $this->getModule()->userid, $this->getModule()->username),
					array(
						'size' => $this->getModule()->listBoxNumberOfLines,
						'class' => 'dropdown',
						'ajax' => array(
							'type' => 'POST',
							'url' => array('getRoles'),
							'update' => '#roles',
							'beforeSend' => 'function(){'.
								'$("#loadMess").addClass("srbacLoading");'.
							'}',
							'complete' => 'function(){'.
								'$("#loadMess").removeClass("srbacLoading");'.
							'}'
						),
					));
			?>
			</td>
		</tr>
	</table>
	<br />
	<?php echo SHtml::endForm(); ?>
</div>
