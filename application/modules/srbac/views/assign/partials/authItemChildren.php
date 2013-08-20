<!-- <?php echo AuthItem::$TYPES[$childType].' -> '.AuthItem::$TYPES[$parentType]; ?> -->
<div class="srbac">
	<?php
	echo CHtml::beginForm();
	echo CHtml::errorSummary($model);
	?>
	<table>
		<tr>
			<th colspan="2">
			<?php echo Yii::t('srbac','Assign '.AuthItem::$TYPES[$childType].'s to '.AuthItem::$TYPES[$parentType].'s') ?>
			</th>
		</tr>
		<tr>
			<td colspan="2">
				<?php
				echo CHtml::ajaxLink(
						CHtml::image(
									$this->getModule()->getIconsUrl('create.png'),
									Yii::t('srbac', 'Auto Assign Generated'),
									array(
											'border' => 0,
											'class' => 'icon',
											'title' => Yii::t('srbac', 'Auto Assign Generated'),
									)
						) . Yii::t('srbac', 'Auto Assign Generated'),
						$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/auto'),
						array(
							'type' => 'GET',
							'beforeSend' => 'function(){$("#'.AuthItem::$TYPES[$childType].'Management").addClass("srbacLoading");}',
							'complete' => 'function(){$("#'.AuthItem::$TYPES[$childType].'Management").removeClass("srbacLoading");}',
						),
						array(
							'title' => Yii::t('srbac', 'Auto Assign Generated')
						)
				);
				?>
			</td>
		</tr>
		<tr>
			<td style="width: 50%;">
				<table>
					<tr>
						<th><?php echo Yii::t('srbac', AuthItem::$TYPES[$parentType].'s')?></th>
					</tr>
					<tr>
						<td>
							<?php
							echo CHtml::activeDropDownList(
									AuthItem::model(),
									'id',
									CHtml::listData(AuthItem::model()->orderBy('name')->findAllByAttributes(array('type' => $parentType)), 'id', 'name'),
									array(
										'size' => 15,
										'class' => 'dropdown',
										'ajax' => array(
											'type' => 'GET',
											'url' => $this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/children', array('parentType' => $parentType, 'childType' => $childType)),
											'update' => '#'.AuthItem::$TYPES[$childType].'Management',
											'beforeSend' => 'function(){$("#loadMessage'.AuthItem::$TYPES[$childType].'").addClass("srbacLoading");}',
											'complete' => 'function(){$("#loadMessage'.AuthItem::$TYPES[$childType].'").removeClass("srbacLoading");}'
										),
										'name' => 'parent',
										'id' => AuthItem::$TYPES[$parentType].'List'
									)
							);
							?>
						</td>
					</tr>
				</table>
			</td>
			<td id="<?php echo AuthItem::$TYPES[$childType].'Management'; ?>" style="width: 50%;">
				<?php
					$this->renderPartial(
						'partials/childrenAjax',
						array(
							'model' => $model,
							'children' => $children,
							'notChildren' => $notChildren,
							'childType' => $childType,
							'parentType' => $parentType
						)
					);
				?>
			</td>
		</tr>
	</table>
	<br />
	<?php echo CHtml::endForm(); ?>
</div>