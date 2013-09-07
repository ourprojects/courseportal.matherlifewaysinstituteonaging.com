<table id="<?php echo $this->getId().'-'.$dimension->id; ?>-activities">
	<tr>
		<td colspan="2"><p><?php echo $dimension->description; ?></p></td>
	</tr>
	<tr id="<?php echo $this->getId().'-'.$dimension->id; ?>-activityInfo">
		<td>
			{t}Date Period{/t}:
			<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
							'name' => 'date',
							'value' => date($userActivitySearchModel->dateFormat, $time),
							'language' => Yii::app()->getLanguage(),
							'htmlOptions' => array(
								'id' => $this->getId().'-'.$dimension->id.'-activityDate',
								'onchange' => '$.fn.yiiGridView.update("'.$this->getId().'-'.$dimension->id.'-userActivityGrid")'
							)
					));
			echo '&nbsp;-&nbsp;'.CHtml::dropDownList(
					'range', 
					$range, 
					array(
						'day' => '{t}Day{/t}', 
						'week' => '{t}Week{/t}', 
						'month' => '{t}Month{/t}', 
						'year' => '{t}Year{/t}', 
						'all' => '{t}All Time{/t}'
					),
					array(
						'id' => $this->getId().'-'.$dimension->id.'-activityRange',
						'onchange' => '$.fn.yiiGridView.update("'.$this->getId().'-'.$dimension->id.'-userActivityGrid")' 
					)
			);
			?>
		</td>
		<td>
			{t}Total CR Contributions{/t}: <?php echo $userActivitySearchModel->getCRtotal(); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<?php 
			$this->widget('zii.widgets.grid.CGridView',
					array(
							'id' => $this->getId().'-'.$dimension->id.'-userActivityGrid',
							'filter' => $userActivitySearchModel,
							'dataProvider' => $userActivitySearchModel->search(),
							'columns' => array(
									'activity.name',
									'activity.cr',
									'comment',
									'dateCompleted'
							),
							'ajaxUrl' => $this->getController()->createUrl($this->actionPrefix.'dimension', array('id' => $dimension->id)),
							'beforeAjaxUpdate' => 'function(id,options){'.
								'options.data = $("input#'.$this->getId().'-'.$dimension->id.'-activityDate, select#'.$this->getId().'-'.$dimension->id.'-activityRange").serialize();'.
								'return true;'.
							'}',
					)
			);
			?>
		</td>
	</tr>
</table>