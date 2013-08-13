<div class="iconBox">
	<?php
	$obsolete = $model->findAll($model->searchCriteria(array('select' => 'id')));
	array_walk($obsolete, create_function('&$authItem', '$authItem = $authItem->getAttribute("id");'));
	echo CHtml::ajaxLink(
			CHtml::image(
						$this->getModule()->getIconsUrl('create.png'),
						Yii::t('srbac', 'Delete All'),
						array(
								'border' => 0,
								'class' => 'icon',
								'title' => Yii::t('srbac', 'Delete All'),
						)
			) . Yii::t('srbac', 'Delete All'),
			$this->createUrl('/srbac/manage/authItem', array('ajax' => 'autoObsoleteTab')),
			array(
				'type' => 'DELETE',
				'data' => array('id' => $obsolete),
				'beforeSend' => 'function(){$("#autoObsoleteTab").addClass("srbacLoading");}',
				'complete' =>
					'function(){'.
						'$("#automaticAuthItem-form").css("display", "none");'.
						'$("#autoObsoleteTab").removeClass("srbacLoading");'.
						'$("#autoGeneratedAuthItem-grid").yiiGridView("update");'.
					'}',
				'update' => '#autoObsoleteTab'
			),
			array(
				'title' => Yii::t('srbac', 'Delete All')
			)
	);
	?>
</div>
<br /><br />
<?php
$this->renderPartial(
	'partials/_authItemGrid',
	array(
		'model' => $model->obsolete(),
		'gridId' => 'autoObsoleteAuthItem-grid',
		'updateGridIds' => 'autoGeneratedAuthItem-grid',
		'formId' => 'automaticAuthItem-form'
	)
);
?>
