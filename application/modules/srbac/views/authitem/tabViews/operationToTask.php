<?php
/**
* operationToTask.php
*
* @author Spyros Soldatos <spyros@valor.gr>
* @link http://code.google.com/p/srbac/
*/

/**
* The tab view for assigning operations to tasks
*
* @author Spyros Soldatos <spyros@valor.gr>
* @package srbac.views.authitem.tabViews
* @since 1.0.0
*/
?>
<?php
$criteria = new CDbCriteria();
$criteria->condition = "type=1";
$criteria->order = "name";
?>
<!-- TASKS -> OPERATIONS -->
<div class="srbac">
	<?php echo SHtml::beginForm(); ?>
	<?php echo SHtml::errorSummary($model); ?>
	<table width="100%">
		<tr>
			<th colspan="2"><?php echo Yii::t('srbac','Assign Operations to Tasks') ?>
			</th>
		</tr>
		<tr>
			<th width="50%"><?php echo SHtml::label(Yii::t('srbac', 'Task'), 'task'); ?>
			</th>
			<td width="50%" rowspan="2">
				<div id="operations">
					<?php
					$this->renderPartial(
						'tabViews/taskAjax',
						array('model' => $model, 'userid' => $userid, 'data' => isset($data) ? $data : array(), 'message' => $message));
				?>
				</div>
			</td>
		</tr>
		<tr valign="top">
			<td><?php
			echo SHtml::activeDropDownList(
					Assignments::model(),
					'item_id',
					SHtml::listData(AuthItem::model()->findAll($criteria), 'id', 'name'),
					array(
						'size' => $this->getModule()->listBoxNumberOfLines,
						'class' => 'dropdown',
						'ajax' => array(
							'type' => 'POST',
							'url' => array('getOpers'),
							'update' => '#operations',
							'beforeSend' => 'function(){'.
												'$("#loadMessTask").addClass("srbacLoading");'.
											'}',
							'complete' => 'function(){'.
												'$("#loadMessTask").removeClass("srbacLoading");'.
											'}'
						),
					)
				);
				?>
			</td>
		</tr>
	</table>
	<br />

	<div class="message" id="loadMessTask">
		<?php echo $message ?>
	</div>
	<?php echo SHtml::endForm(); ?>
</div>
