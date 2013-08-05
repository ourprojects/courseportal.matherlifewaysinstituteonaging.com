<!-- <?php echo AuthItem::$TYPES[$childType].' -> '.AuthItem::$TYPES[$parentType]; ?> -->
<div class="srbac">
	<?php
	echo CHtml::beginForm();
	echo CHtml::errorSummary($model);
	?>
	<table>
		<tr>
			<th colspan="2">
			<?php echo Yii::t('srbac','Assign '.AuthItem::$TYPES[$childType].' to '.AuthItem::$TYPES[$parentType]) ?>
			</th>
		</tr>
		<tr>
			<td width="50%">
				<table>
					<tr>
						<th><?php echo Yii::t('srbac', AuthItem::$TYPES[$parentType])?></th>
					</tr>
					<tr>
						<td>
							<?php
							echo CHtml::activeDropDownList(
									AuthItem::model(),
									'id',
									CHtml::listData(AuthItem::model()->orderBy('name')->findAllByAttributes(array('type' => $parentType)), 'id', 'name'),
									array(
										'size' => $this->getModule()->listBoxNumberOfLines,
										'class' => 'dropdown',
										'ajax' => array(
											'type' => 'GET',
											'url' => array('children', 'parentType' => $parentType, 'childType' => $childType),
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
			<td width="50%" id="<?php echo AuthItem::$TYPES[$childType].'Management'; ?>">
				<?php
					$this->renderPartial(
						'partials/childrenAjax',
						array(
							'model' => $model,
							'children' => $children,
							'notChildren' => $notChildren,
							'message' => $message,
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