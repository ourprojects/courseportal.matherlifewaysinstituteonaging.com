<table class="srbacDataGrid" align="center">
	<tr>
		<th width="50%"><?php echo Yii::t('srbac', 'Authorization items');?></th>
		<th><?php echo Yii::t('srbac', 'Actions')?></th>
	</tr>
	<tr>
		<td style="vertical-align: top; text-align: center">
			<div class="iconBox">
				<?php
				echo CHtml::ajaxLink(
						CHtml::image(
									$this->getModule()->getIconsUrl('create.png'),
									Yii::t('srbac', 'Create New'),
									array(
											'border' => 0,
											'class' => 'icon',
											'title' => Yii::t('srbac', 'Create New'),
									)
						) . Yii::t('srbac', 'Create New'),
						$this->createUrl('/srbac/manage/authItem', array('ajax' => 'authItem-form')),
						array(
							'type' => 'GET',
							'beforeSend' => 'function(){$("#authItem-form").addClass("srbacLoading");}',
							'complete' => 'function(){$("#authItem-form").css("display", "block");$("#authItem-form").removeClass("srbacLoading");}',
							'replace' => '#authItem-form'
						),
						array(
							'id' => 'authItem-form_createNewButton',
							'title' => Yii::t('srbac', 'Create a new auth item')
						)
				);
				?>
			</div>
			<br /><br />
			<?php $this->renderPartial('partials/_authItemGrid', array('model' => $gridModel, 'gridId' => 'authItem-grid', 'formId' => 'authItem-form')); ?>
		</td>
		<td style="vertical-align: top; text-align: center">
			<?php $this->renderPartial('partials/_authItemForm', array('model' => $formModel, 'updateGridIds' => 'authItem-grid', 'formId' => 'authItem-form')); ?>
		</td>
	</tr>
</table>
