<?php
$this->breadcrumbs = array(
		Yii::t('srbac', 'Srbac Manage')
);
if(Yii::app()->getUser()->hasFlash($this->getModule()->flashKey))
{
?>
<div id="srbacError">
	<?php
	echo Yii::app()->getUser()->getFlash($this->getModule()->flashKey);
	echo Yii::app()->getUser()->setFlash($this->getModule()->flashKey, null);
	?>
</div>
<?php
}

if($this->getModule()->getShowHeader())
{
	$this->renderPartial($this->getModule()->header);
}

?>
<div>
<?php $this->renderPartial('../frontpage'); ?>
	<div class="horTab">
	<?php
		$this->widget(
			'system.web.widgets.CTabView',
			array(
				'tabs' => array(
						'generated' => array(
								'title' => Yii::t('srbac', 'Generated'),
								'view' => 'partials/tabs/_generated',
								'data' => array(
										'gridId' => $generatedGridId,
										'formId' => $generatedFormId,
										'gridModel' => $generatedGridModel,
										'formModel' => $generatedFormModel
								)
						),
						'custom' => array(
								'title' => Yii::t('srbac', 'Custom'),
								'view' => 'partials/tabs/_custom',
								'data' => array(
										'gridId' => $customGridId,
										'formId' => $customFormId,
										'gridModel' => $customGridModel,
										'formModel' => $customFormModel
								)
						),
				),
				'cssFile' => $this->getModule()->getStylesUrl('srbac.css'),
			)
		);
	?>
	</div>
</div>
<?php
if($this->getModule()->getShowFooter())
{
	$this->renderPartial($this->getModule()->footer);
}
?>
