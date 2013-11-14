<?php
$this->breadcrumbs = array('SRBAC Assignments');
?>
<div>
	<?php $this->renderPartial('../frontpage'); ?>
	<div class="horTab">
	<?php
		$this->widget(
			'system.web.widgets.CTabView',
			array(
				'tabs' => array(
						'tab1' => array(
								'title' => SrbacModule::t('Users'),
								'view' => 'partials/roleToUser',
								'data' => array(
										'userId' => null,
										'users' => $users,
										'assignedRoles' => $assignedRoles,
										'notAssignedRoles' => $notAssignedRoles
								)
						),
						'tab2' => array(
								'title' => SrbacModule::t('Roles'),
								'view' => 'partials/authItemChildren',
								'data' => array(
										'children' => $assignedTasks,
										'notChildren' => $notAssignedTasks,
										'parentType' => EAuthItem::TYPE_ROLE,
										'childType' => EAuthItem::TYPE_TASK
								)
						),
						'tab3' => array(
								'title' => SrbacModule::t('Tasks'),
								'view' => 'partials/authItemChildren',
								'data' => array(
										'children' => $assignedOperations,
										'notChildren' => $notAssignedOperations,
										'parentType' => EAuthItem::TYPE_TASK,
										'childType' => EAuthItem::TYPE_OPERATION
								)
						),
				),
				'viewData' => array(
							'model' => $model,
				),
				'cssFile' => $this->getModule()->getStylesUrl('srbac.css'),
			)
		);
	?>
	</div>
</div>