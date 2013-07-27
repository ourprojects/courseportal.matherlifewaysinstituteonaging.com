<?php
/**
* userAjax.php
*
* @author Spyros Soldatos <spyros@valor.gr>
* @link http://code.google.com/p/srbac/
*/

/**
* The assigning roles to users listboxes
*
* @author Spyros Soldatos <spyros@valor.gr>
* @package srbac.views.authitem.tabViews
* @since 1.0.0
*/
if(!isset($data))
{
	$data = array();
}

$data = array_merge_recursive(
		array(
				'userAssignedRoles' => array(),
				'userNotAssignedRoles' => array(),
				'assign' => array('disable' => true),
				'revoke' => array('disable' => true)
		),
		$data
);
?>
<table width="100%">
	<tr>
		<th><?php echo Yii::t('srbac','Assigned Roles') ?></th>
		<th>&nbsp;</th>
		<th><?php echo Yii::t('srbac','Not Assigned Roles') ?></th>
	</tr>
	<tr>
		<td width="45%"><?php
		echo SHtml::activeDropDownList(
				$model,
				'name[revoke]',
				SHtml::listData($data['userAssignedRoles'], 'name', 'name'),
				array(
					'size' => $this->getModule()->listBoxNumberOfLines,
					'multiple' => 'multiple',
					'class' => 'dropdown'
				)
			);
		?>
		</td>
		<td width="10%" align="center"><?php
		echo SHtml::ajaxSubmitButton(
				'<<',
				array('assign', 'assignRoles' => 1),
				array(
					'type' => 'POST',
					'update' => '#roles',
					'beforeSend' => 'function(){'.
							'$("#loadMess").addClass("srbacLoading");'.
						'}',
					'complete' => 'function(){'.
							'$("#loadMess").removeClass("srbacLoading");'.
						'}'),
				$data['assign']
			);
		echo SHtml::ajaxSubmitButton(
			'>>',
			array('assign', 'revokeRoles' => 1),
			array(
				'type' => 'POST',
				'update' => '#roles',
				'beforeSend' => 'function(){'.
						'$("#loadMess").addClass("srbacLoading");'.
					'}',
				'complete' => 'function(){'.
						'$("#loadMess").removeClass("srbacLoading");'.
					'}'
			),
			$data['revoke']
		);
		?>
		</td>
		<td width="45%"><?php
		echo SHtml::activeDropDownList(
				$model,
				'name[assign]',
				SHtml::listData($data['userNotAssignedRoles'], 'name', 'name'),
				array('size' => $this->getModule()->listBoxNumberOfLines, 'multiple' => 'multiple', 'class' => 'dropdown')
			);
		?>
		</td>
	</tr>
</table>
<div class="message" id="loadMess">
	<?php echo "&nbsp;".$message ?>
</div>
