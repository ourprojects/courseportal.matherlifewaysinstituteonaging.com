<table class="srbacDataGrid" align="center">
	<tr>
		<th width="50%"><?php echo Yii::t('srbac', 'Auth items');?></th>
		<th><?php echo Yii::t('srbac', 'Actions')?></th>
	</tr>
	<tr>
		<td style="vertical-align: top; text-align: center">
			<?php
				$this->widget(
					'system.web.widgets.CTabView',
					array(
						'tabs' => array(
								'generated_existing' => array(
										'title' => Yii::t('srbac', 'Existing'),
										'view' => 'partials/_authItemGrid',
										'data' => array(
												'model' => $gridModel,
												'gridId' => $gridId,
												'formId' => $formId
										)
								),
								'generated_missing' => array(
										'title' => Yii::t('srbac', 'Missing'),
										'view' => 'partials/_missingGeneratedGrid',
										'data' => array(
												'gridId' => $gridId,
												'formId' => $formId
										)
								),
								'generated_obsolete' => array(
										'title' => Yii::t('srbac', 'Obsolete'),
										'view' => 'partials/_authItemGrid',
										'data' => array(
												'model' => $gridModel,
												'gridId' => $gridId,
												'formId' => $formId
										)
								),
						),
						'cssFile' => $this->getModule()->getStylesUrl('srbac.css'),
					)
				);
			?>
		</td>
		<td style="vertical-align: top; text-align: center">
			<?php $this->renderPartial('partials/_authItemForm', array('model' => $formModel, 'gridId' => $gridId, 'formId' => $formId)); ?>
		</td>
	</tr>
</table>
