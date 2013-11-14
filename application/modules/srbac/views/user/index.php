<?php $this->breadcrumbs = array(SrbacModule::t('User Assignments')); ?>
<div>
	<?php $this->renderPartial('../frontpage'); ?>
	<table class="srbac">
		<tr>
			<th><?php echo SrbacModule::t('Users');?></th>
			<th><?php echo SrbacModule::t('Assignments')?></th>
		</tr>
		<tr>
			<td style="text-align: center; width: 33%; vertical-align: top;">
			<?php
				$this->widget('zii.widgets.grid.CGridView',
						array(
								'id' => 'userGrid',
								'filter' => $userModel,
								'dataProvider' => $userModel->search(),
								'pager' => array(
										'class' => 'CLinkPager',
										'maxButtonCount' => 5,
										'header' => ''
								),
								'columns' => array(
										array(
												'name' => $this->getModule()->userId,
												'htmlOptions' => array('width' => '25'),
										),
										$this->getModule()->username,
										array(
												'class' => 'CButtonColumn',
												'template' => '{view}',
												'buttons' => array(
														'view' => array(
																'label' => SrbacModule::t('View User\'s Assignments'),
																'url' => 'Yii::app()->getController()->createUrl("/'.SrbacUtilities::SRBAC_MODULE_NAME.'/user/view", array("id" => $data->{$this->grid->getController()->getModule()->userId}))',
																'click' => 'function(){'.CHtml::ajax(
																		array(
																				'type' => 'GET',
																				'url' => 'js:$(this).attr("href")',
																				'beforeSend' => 'function(){$("#assignments").addClass("srbacLoading");}',
																				'complete' => 'function(){$("#assignments").removeClass("srbacLoading");}',
																				'update' => '#assignments',
																		)
																).'return false;}',
														),
												)
										)
								),
						)
				);
			?>
			</td>
			<td id="assignments" style="text-align: center; width: 66%; vertical-align: top;">
					<?php $this->renderPartial('partials/_view', array('user' => isset($user) ? $user : null, 'roles' => isset($roles) ? $roles : null)); ?>
			</td>
		</tr>
	</table>
</div>