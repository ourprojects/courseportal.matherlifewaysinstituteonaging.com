<?php
/**
* taskAjax.php
*
* @author Spyros Soldatos <spyros@valor.gr>
* @link http://code.google.com/p/srbac/
*/

/**
* The assigning operations to tasks listboxes
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
				'taskAssignedOpers' => array(),
				'taskNotAssignedOpers' => array(),
				'assign' => array('disable' => true),
				'revoke' => array('disable' => true)
		),
		$data
);
?>
<table width="100%">
	<tr>
		<th><?php echo Yii::t('srbac','Assigned Operations') ?></th>
		<th>&nbsp;</th>
		<th><?php echo Yii::t('srbac','Not Assigned Operations')?></th>
	</tr>
	<tr>
		<td width="45%"><?php
		echo SHtml::activeDropDownList(
				$model,
				'name[revoke]',
				SHtml::listData($data['taskAssignedOpers'], 'name', 'name'),
				array('size' => $this->getModule()->listBoxNumberOfLines, 'multiple' => 'multiple', 'class' => 'dropdown')
			);
		?>
		</td>
		<td width="10%" align="center"><?php
		echo SHtml::ajaxSubmitButton(
					'<<',
					array('assign', 'assignOpers' => 1),
					array(
						'type' => 'POST',
						'update' => '#operations',
						'beforeSend' => 'function(){'.
								'$("#loadMessTask").addClass("srbacLoading");'.
							'}',
						'complete' => 'function(){'.
								'$("#loadMessTask").removeClass("srbacLoading");'.
							'}'
					),
					$data['assign']);
			echo SHtml::ajaxSubmitButton(
					'>>',
					array('assign', 'revokeOpers' => 1),
					array(
						'type' => 'POST',
						'update' => '#operations',
						'beforeSend' => 'function(){'.
								'$("#loadMessTask").addClass("srbacLoading");'.
							'}',
						'complete' => 'function(){'.
								'$("#loadMessTask").removeClass("srbacLoading");'.
							'}'),
					$data['revoke']);
		?>
		</td>
		<td width="45%"><?php
		echo SHtml::activeDropDownList(
				$model,
				'name[assign]',
				SHtml::listData($data['taskNotAssignedOpers'], 'name', 'name'),
				array('size' => $this->getModule()->listBoxNumberOfLines, 'multiple' => 'multiple', 'class' => 'dropdown')
			);
		?>
		</td>
	</tr>
</table>
<div id="loadMessTask" class="message">
	<?php echo "&nbsp;".$message ?>
</div>
