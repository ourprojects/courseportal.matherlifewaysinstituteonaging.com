<table class="srbacDataGrid" align="center">
	<tr>
		<th width="50%"><?php echo Yii::t('srbac', 'Auth items');?></th>
		<th><?php echo Yii::t('srbac', 'Actions')?></th>
	</tr>
	<tr>
		<td style="vertical-align: top; text-align: center">
			<div class="iconBox">
				<?php
				echo CHtml::ajaxLink(
						CHtml::image(
									$this->getModule()->getIconsUrl('create.png'),
									Yii::t('srbac', $formModel->generated ? 'Show Missing' : 'Create New'),
									array(
											'border' => 0,
											'class' => 'icon',
											'title' => Yii::t('srbac', $formModel->generated ? 'Show Missing' : 'Create New'),
									)
						) . Yii::t('srbac', $formModel->generated ? 'Show Missing' : 'Create New'),
						$this->createUrl('/srbac/manage/authItem', array('ajax' => $formId)),
						array(
							'type' => 'GET',
							'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
							'complete' => 'function(){$("#'.$formId.'").removeClass("srbacLoading");}',
							'replace' => $formId
						),
						array(
							'id' => $formId.'_createNewButton',
							'title' => Yii::t('srbac', $formModel->generated ? 'Show controllers and actions without a generated auth item' : 'Create a new auth item')
						)
				);
				?>
			</div>
			<br /><br />
			<?php $this->renderPartial('partials/_authItemGrid', array('model' => $gridModel, 'gridId' => $gridId, 'formId' => $formId)); ?>
		</td>
		<td style="vertical-align: top; text-align: center">
			<?php $this->renderPartial('partials/_authItemForm', array('model' => $formModel, 'gridId' => $gridId, 'formId' => $formId)); ?>
		</td>
	</tr>
</table>
