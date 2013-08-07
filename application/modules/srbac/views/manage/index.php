<?php
/**
* manage.php
*
* @author Spyros Soldatos <spyros@valor.gr>
* @link http://code.google.com/p/srbac/
*/

/**
* The auth items main administration page
*
* @author Spyros Soldatos <spyros@valor.gr>
* @package srbac.views.authitem.manage
* @since 1.0.0
*/
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
$this->renderPartial("../frontpage");
?>
<div id="wizardButton" style="text-align: left" class="controlPanel marginBottom">
	<?php
	echo SHtml::ajaxLink(
			SHtml::image(
					$this->getModule()->getIconsUrl('admin.png'),
					Yii::t('srbac', 'Manage AuthItem'),
					array('class' => 'icon',
							'title' => Yii::t('srbac', 'Manage AuthItem'),
							'border' => 0
					)
			)." ".($this->getModule()->iconText ? Yii::t('srbac','Manage AuthItem') : ""),
			$this->createUrl('/srbac/manage', array('full' => true)),
			array(
				'type' => 'POST',
				'update' => '#wizard',
				'beforeSend' => 'function(){$("#wizard").addClass("srbacLoading");}',
				'complete' => 'function(){$("#wizard").removeClass("srbacLoading");}',
			),
			array(
				'name' => 'buttonManage',
				'onclick' => "$(this).css('font-weight', 'bold');$(this).siblings().css('font-weight', 'normal');",
			)
	);
	echo SHtml::ajaxLink(
			SHtml::image(
				$this->getModule()->getIconsUrl('wizard.png'),
				Yii::t('srbac', 'Autocreate Auth Items'),
				array('class' => 'icon',
					'title' => Yii::t('srbac','Autocreate Auth Items'),
					'border' => 0
				)
			)." ".($this->getModule()->iconText ? Yii::t('srbac','Autocreate Auth Items') : ""),
			$this->createUrl('/srbac/manage/auto'),
			array(
				'type' => 'POST',
				'update' => '#wizard',
				'beforeSend' => 'function(){$("#wizard").addClass("srbacLoading");}',
				'complete' => 'function(){$("#wizard").removeClass("srbacLoading");}',
			),
			array(
				'name' => 'buttonAuto',
				'onclick' => "$(this).css('font-weight', 'bold');$(this).siblings().css('font-weight', 'normal');",
			)
	);
	echo SHtml::ajaxLink(
			SHtml::image(
					$this->getModule()->getIconsUrl('allow.png'),
					Yii::t('srbac','Edit always allowed list'),
					array('class' => 'icon',
						'title' => Yii::t('srbac','Edit always allowed list'),
						'border' => 0
					)
				)." ".($this->getModule()->iconText ? Yii::t('srbac','Edit always allowed list') : ""),
				$this->createUrl('/srbac/manage/editAllowed'),
				array(
					'type' => 'POST',
					'update' => '#wizard',
					'beforeSend' => 'function(){$("#wizard").addClass("srbacLoading");}',
					'complete' => 'function(){$("#wizard").removeClass("srbacLoading");}',
				),
				array(
					'name' => 'buttonAllowed',
					'onclick' => "$(this).css('font-weight', 'bold');$(this).siblings().css('font-weight', 'normal');",
				)
	);
	echo SHtml::ajaxLink(
			SHtml::image(
				$this->getModule()->getIconsUrl('eraser.png'),
				Yii::t('srbac', 'Clear obsolete authItems'),
				array('class' => 'icon',
				'title'=>Yii::t('srbac', 'Clear obsolete authItems'),
				'border'=>0
				)
			)." ".($this->getModule()->iconText ? Yii::t('srbac', 'Clear obsolete authItems') : ""),
			$this->createUrl('/srbac/manage/clearObsolete'),
			array(
				'type' => 'POST',
				'update' => '#wizard',
				'beforeSend' => 'function(){$("#wizard").addClass("srbacLoading");}',
				'complete' => 'function(){$("#wizard").removeClass("srbacLoading");}',
			),
			array(
				'name' => 'buttonClear',
				'onclick' => "$(this).css('font-weight', 'bold');$(this).siblings().css('font-weight', 'normal');",
			)
	);
	?>
</div>
<br />
<div id="wizard">
	<table class="srbacDataGrid" align="center">
		<tr>
			<th width="50%"><?php echo Yii::t('srbac', 'Auth items');?></th>
			<th><?php echo Yii::t('srbac', 'Actions')?></th>
		</tr>
		<tr>
			<td style="vertical-align: top; text-align: center">
				<div class="iconBox">
					<?php
					echo SHtml::ajaxLink(
							SHtml::image(
										$this->getModule()->getIconsUrl('create.png'),
										Yii::t('srbac', 'Create New'),
										array('border' => 0,
											'class' => 'icon', 'title' => Yii::t('srbac', 'Create New'),
											'border' => 0
										)
							) . Yii::t('srbac', 'Create New'),
							$this->createUrl('/srbac/manage/authItem', array('ajax' => 'authItem-form')),
							array(
								'type' => 'GET',
								'beforeSend' => 'function(){$("#form").addClass("srbacLoading");}',
								'complete' => 'function(){$("#form").removeClass("srbacLoading");}',
								'replace' => '#authItem-form'
							),
							array('id' => 'createNewButton')
					);
					?>
				</div>
				<br /><br />
				<?php $this->renderPartial('partials/_authItemGrid', array('model' => $gridModel)); ?>
			</td>
			<td style="vertical-align: top; text-align: center">
				<?php $this->renderPartial('partials/_authItemForm', array('model' => $formModel)); ?>
			</td>
		</tr>
	</table>
</div>
<?php
if($this->getModule()->getShowFooter())
{
	$this->renderPartial($this->getModule()->footer);
}
?>
