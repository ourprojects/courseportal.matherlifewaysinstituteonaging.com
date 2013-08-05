<?php
/**
* createItems.php
*
* @author Spyros Soldatos <spyros@valor.gr>
* @link http://code.google.com/p/srbac/
*/

/**
* The auth items auto creation view
*
* @author Spyros Soldatos <spyros@valor.gr>
* @package srbac.views.authitem.manage
* @since 1.0.2
*/

Yii::app()->clientScript->registerScript(
	"cb",
	"jQuery('#cb_createTasks').click(function(){".
		"$('#userTask').toggle('fast');".
		"$('#adminTask').toggle('fast');".
	"});",
	CClientScript::POS_READY);
?>
<div class="srbacForm">
	<?php echo SHtml::form(); ?>
	<div class="action">
		<?php echo "<b>".$controller."</b>"; ?>
	</div>
	<?php if (count($actions)>0): ?>
	<div>
		<?php
		echo SHtml::checkBoxList("actions", "", $actions, array("checkAll" => "<b>".Yii::t('srbac', 'Check All')."</b>"));
		?>
	</div>
	<?php endif; ?>
	<?php if(!$delete): ?>
	<div class="simple">
		<hr style="color: red">
		<?php
		echo Yii::t('srbac',"Pages that access is always allowed").":";
		foreach($allowed as $al): ?>
		<div class="simple">
			<?php echo $al; ?>
		</div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>

	<div class="simple">
		<hr>
		<?php
		$cb_title = $delete ? "Delete Tasks" : "Create tasks";
		$button_title = $delete ? "Delete" : "Create";
		$button_action = $delete ? "autoDeleteItems" : "autoCreateItems";
		if(!$taskViewingExists || !$taskAdministratingExists || $delete)
		{
			echo Yii::t('srbac',$cb_title);
			echo SHtml::checkBox("createTasks", true, array("id" => "cb_createTasks"));
		}
		?>
	</div>
	<?php if(($taskViewingExists && $delete) || (!$taskViewingExists && !$delete)) { ?>
	<div class="simple">
		<?php echo SHtml::textField("tasks[user]", $task."Viewing",array("id" => "userTask", "readonly" => true)); ?>
	</div>
	}
	if(($taskAdministratingExists && $delete)|| (!$taskAdministratingExists && !$delete)) { ?>
	<div class="simple">
		<?php echo SHtml::textField("tasks[admin]", $task."Administrating", array("id" => "adminTask", "readonly" => true)); ?>
	</div>
	<?php } ?>
	<div class="simple">
		<?php echo SHtml::hiddenField("controller", $controller) ?>
	</div>
	<div class="action">
		<?php
			echo SHtml::ajaxButton(
				Yii::t('srbac', $button_title),
				array($button_action),
				array(
					'type' => 'POST',
					'update' => '#controllerActions',
					'beforeSend' => 'function(){'.
							'$("#controllerActions").addClass("srbacLoading");'.
						'}',
					'complete' => 'function(){'.
							'$("#controllerActions").removeClass("srbacLoading");'.
						'}',
					)
			);
		?>
	</div>
	<?php echo SHtml::endForm(); ?>
</div>
