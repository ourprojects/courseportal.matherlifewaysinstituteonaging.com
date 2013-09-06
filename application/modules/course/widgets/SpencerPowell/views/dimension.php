<table id="<?php echo $this->getId().'-'.$dimension->id; ?>-activities">
	<tr>
		<td colspan="3"><p><?php echo $dimension->description; ?></p></td>
	</tr>
	<tr id="<?php echo $this->getId().'-'.$dimension->id; ?>-activityInfo">
		<td>
			{t}Date:{/t}
			<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
							'name' => 'date',
							'value' => date($userActivityModel->dateFormat, $time),
							'htmlOptions' => array('id' => $this->getId().'-'.$dimension->id.'-activityDate')
					));
			?>
		</td>
		<td>
			{t}Period:{/t}
			<?php 
			echo CHtml::dropDownList(
					'range', 
					$range, 
					array('day' => '{t}Day{/t}', 'week' => '{t}Week{/t}', 'month' => '{t}Month{/t}', 'year' => '{t}Year{/t}', 'all' => '{t}All Time{/t}'),
					array('id' => $this->getId().'-'.$dimension->id.'-activityRange')
			);
			?>
		</td>
		<td>
			{t}Total CR Contributions:{/t} <?php echo $userActivityModel->crTotal; ?>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<?php 
			$this->widget('zii.widgets.grid.CGridView',
					array(
							'id' => $this->getId().'-'.$dimension->id.'-userActivitiesGrid',
							'filter' => $userActivityModel,
							'dataProvider' => $userActivityModel->search(),
							'columns' => array(
									'activity.name',
									'activity.cr',
									'comment',
									'dateCompleted'
							),
							'ajaxUrl' => $this->getController()->createUrl($this->actionPrefix.'dimension', array('id' => $dimension->id)),
							'beforeAjaxUpdate' => 'function(id,options){'.
														'options.data = $("#'.$this->getId().'-'.$dimension->id.'-activityDate, #'.$this->getId().'-'.$dimension->id.'-activityRange").serialize();'.
														'return true;'.
												  '}',
							'afterAjaxUpdate' => 'function(id,data){'.
														'$("tr#'.$this->getId().'-'.$dimension->id.'-activityInfo").html($("tr#'.$this->getId().'-'.$dimension->id.'-activityInfo", $(data)).html());'.
														'return true;'.
												  '}'
					)
			);
			?>
		</td>
	</tr>
</table>