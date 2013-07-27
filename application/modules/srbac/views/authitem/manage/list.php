<?php
/**
 * list.php
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */
/**
 * The auth items list view
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.views.authitem.manage
 * @since 1.0.0
 */
?>
<?php if (Yii::app()->getUser()->hasFlash('updateName')): ?>
<div id="messageUpd"
	style="color: red; font-weight: bold; font-size: 14px; text-align: center; position: relative; border: solid black 2px; background-color: #DDDDDD">
	<?php
	echo Yii::app()->getUser()->getFlash('updateName');
	Yii::app()->clientScript->registerScript('myHideEffect', '$("#messageUpd").animate({opacity: 0}, 2000).fadeOut(500);', CClientScript::POS_READY);
	?>
</div>
<?php endif; ?>
<?php echo SHtml::beginForm(); ?>
<div class="controlPanel">
	<div class="iconBox">
		<?php
		echo SHtml::ajaxLink(
				SHtml::image(
							$this->getModule()->getIconsPath() . '/create.png',
							Yii::t('srbac', 'Create'),
							array('border' => 0,
								'class' => 'icon', 'title' => Yii::t('srbac', 'Create'),
								'border' => 0
							)
				) . Yii::t('srbac', 'Create'),
				array('create'),
				array(
							'type' => 'POST',
							'update' => '#preview',
							'beforeSend' => 'function(){'.
									'$("#preview").addClass("srbacLoading");'.
								'}',
							'complete' => 'function(){'.
									'$("#preview").removeClass("srbacLoading");'.
								'}',
				)
		);
		?>
	</div>
	<div style="margin: 0px">
		<?php
		echo Yii::t('srbac', 'Search') . ': &nbsp; ';
		$this->widget(
			'CAutoComplete',
			array(
				'name' => 'name',
				'max' => 10,
				'delay' => 300,
				'matchCase' => false,
				'url' => array('autocomplete'),
				'minChars' => 2,
			)
		);
		echo SHtml::imageButton(
			$this->getModule()->getIconsPath() . '/preview.png',
			array(
				'border' => 0,
				'title' => Yii::t('srbac', 'Search'),
				'live' => false,
				'ajax' => array(
					'type' => 'POST',
					'url' => array('list'),
					'update' => '#list',
					'beforeSend' => 'function(){'.
							'$("#list").addClass("srbacLoading");'.
						'}',
					'complete' => 'function(){'.
							'$("#list").removeClass("srbacLoading");'.
						'}',
				)
			)
		);
		?>
	</div>
</div>
<br />
<table class="srbacDataGrid">
	<tr>
		<th><?php echo Yii::t('srbac', 'Name'); ?></th>
		<th>
		<?php
		echo SHtml::dropDownList(
			'selectedType',
			Yii::app()->getUser()->getState("selectedType"),
			AuthItem::$TYPES,
			array(
				'prompt' => Yii::t('srbac', 'All'),
				'live' => false,
				'ajax' => array(
				'type' => 'POST',
					'url' => array('list'),
					'update' => '#list',
					'beforeSend' => 'function(){'.
							'$("#list").addClass("srbacLoading");'.
						'}',
					'complete' => 'function(){'.
							'$("#list").removeClass("srbacLoading");'.
						'}',
				)
			)
		);
		?>
		</th>
		<th colspan="2"><?php echo Yii::t('srbac', 'Actions') ?></th>
	</tr>
	<?php foreach ($models as $n => $model): ?>
	<tr class="<?php echo $n % 2 ? 'even' : 'odd'; ?>">
		<td>
		<?php
		echo SHtml::ajaxLink(
			$model->name,
			array('show', 'id' => $model->id),
			array(
				'type' => 'POST',
				'update' => '#preview',
				'beforeSend' => 'function(){'.
						'$("#preview").addClass("srbacLoading");'.
					'}',
				'complete' => 'function(){'.
						'$("#preview").removeClass("srbacLoading");'.
					'}',
			),
			array('title' => $model->description ? $model->description : $model->name)
		);
		?>
		</td>
		<td><?php echo SHtml::encode(AuthItem::$TYPES[$model->type]); ?></td>
		<td><?php
		echo SHtml::ajaxLink(
			SHtml::image($this->getModule()->getIconsPath() . '/update.png',
			Yii::t('srbac', 'Update'),
			array('border' => 0, 'title' => Yii::t('srbac', 'Update'))),
			array('update', 'id' => $model->id),
			array(
				'type' => 'POST',
				'update' => '#preview',
				'beforeSend' => 'function(){'.
						'$("#preview").addClass("srbacLoading");'.
					'}',
				'complete' => 'function(){'.
						'$("#preview").removeClass("srbacLoading");'.
					'}'
			)
		);
		?>
		</td>
		<td>
			<?php
			if ($model->name != Helper::findModule('srbac')->superUser) {
				echo SHtml::ajaxLink(
					SHtml::image($this->getModule()->getIconsPath() . '/delete.png',
					Yii::t('srbac', 'Delete'),
					array('border' => 0, 'title' => Yii::t('srbac', 'Delete'))),
					array('confirm', 'id' => $model->id),
					array(
						'type' => 'POST',
						'update' => '#preview',
						'beforeSend' => 'function(){'.
								'$("#preview").addClass("srbacLoading");'.
							'}',
						'complete' => 'function(){'.
								'$("#preview").removeClass("srbacLoading");'.
							'}',
					));
		}
		?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php echo SHtml::endForm(); ?>
<br />
<div class="simple">
<?php
	$this->widget(
		'CLinkPager',
		array(
		'pages' => $pages,
		'prevPageLabel' => '<',
		'nextPageLabel' => '>',
		'maxButtonCount' => 3
		)
	);
?>
</div>
