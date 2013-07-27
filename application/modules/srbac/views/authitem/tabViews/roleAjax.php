<?php
/**
* roleAjax.php
*
* @author Spyros Soldatos <spyros@valor.gr>
* @link http://code.google.com/p/srbac/
*/

/**
* The assigning task to roles listboxes
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
				'roleAssignedTasks' => array(),
				'roleNotAssignedTasks' => array(),
				'assign' => array('disable' => true),
				'revoke' => array('disable' => true)
		),
		$data
);
?>
<table width="100%">
	<tr>
		<th><?php echo Yii::t('srbac','Assigned Tasks')?></th>
		<th>&nbsp;</th>
		<th><?php echo Yii::t('srbac','Not Assigned Tasks')?></th>
	</tr>
	<tr>
		<td width="45%"><?php
		echo SHtml::activeDropDownList(
				$model,
				'name[revoke]',
				SHtml::listData($data["roleAssignedTasks"], 'name', 'name'),
				array('size'=>$this->getModule()->listBoxNumberOfLines, 'multiple' => 'multiple', 'class' => 'dropdown')
		);
		?>
		</td>
		<td width="10%" align="center"><?php
		echo SHtml::ajaxSubmitButton(
				'<<',
				array('assign', 'assignTasks' => 1),
				array(
					'type' => 'POST',
					'update' => '#tasks',
					'beforeSend' => 'function(){'.
							'$("#loadMessRole").addClass("srbacLoading");'.
						'}',
					'complete' => 'function(){'.
							'$("#loadMessRole").removeClass("srbacLoading");'.
						'}'
				),
				$data['assign']
		);
		echo SHtml::ajaxSubmitButton(
				'>>',
				array('assign', 'revokeTasks' => 1),
				array(
					'type' => 'POST',
					'update' => '#tasks',
					'beforeSend' => 'function(){'.
							'$("#loadMessRole").addClass("srbacLoading");'.
						'}',
					'complete' => 'function(){'.
							'$("#loadMessRole").removeClass("srbacLoading");'.
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
				SHtml::listData($data["roleNotAssignedTasks"], 'name', 'name'),
				array('size' => $this->getModule()->listBoxNumberOfLines, 'multiple' => 'multiple','class' => 'dropdown')
		);
		?>
		</td>
	</tr>
</table>
<div id="loadMessRole" class="message">
	<?php echo "&nbsp;".$message ?>
</div>
