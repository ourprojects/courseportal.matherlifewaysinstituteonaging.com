<?php
$this->breadcrumbs = array('Srbac Assign');

if(Yii::app()->getUser()->hasFlash($this->getModule()->flashKey)):
?>
<div id="srbacError">
	<?php
	echo Yii::app()->getUser()->getFlash($this->getModule()->flashKey, null, true);
	echo Yii::app()->getUser()->setFlash($this->getModule()->flashKey, null);
	?>
</div>
<?php endif; ?>
<h1><?php Yii::t('srbac', 'Srbac Administration Web Interface'); ?></h1>
<div>
	<?php $this->renderPartial('../frontpage'); ?>
	<div class="horTab">
	<?php
		$this->widget(
			'system.web.widgets.CTabView',
			array(
				'tabs' => array(
						'tab1' => array(
								'title' => Yii::t('srbac','Users'),
								'view' => 'partials/roleToUser',
								'data' => array(
										'userId' => null,
										'users' => $users,
										'assignedRoles' => $assignedRoles,
										'notAssignedRoles' => $notAssignedRoles
								)
						),
						'tab2' => array(
								'title' => Yii::t('srbac','Roles'),
								'view' => 'partials/authItemChildren',
								'data' => array(
										'children' => $assignedTasks,
										'notChildren' => $notAssignedTasks,
										'parentType' => EAuthItem::TYPE_ROLE,
										'childType' => EAuthItem::TYPE_TASK
								)
						),
						'tab3' => array(
								'title' => Yii::t('srbac','Tasks'),
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