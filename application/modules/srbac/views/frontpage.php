<?php
Yii::app()->getClientScript()->registerCssFile($this->getModule()->getStylesUrl('srbac.css'));
?>
<div class="marginBottom">
<?php if(Yii::app()->getUser()->hasFlash($this->getModule()->flashKey)): ?>
<div id="srbacError">
	<?php echo Yii::app()->getUser()->getFlash($this->getModule()->flashKey, null, true); ?>
</div>
<?php endif; ?>
	<div class="iconSet">
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('manageAuth.png'),
							Yii::t('srbac', 'Manage Auth Items'),
							array('class' => 'icon',
									'title' => Yii::t('srbac','Manage Auth Items'),
									'border' => 0
							)
					).' '.Yii::t('srbac', 'Manage Auth Items'),
					$this->createUrl('/srbac/authItem')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('usersAssign.png'),
						Yii::t('srbac', 'Assign to Users'),
						array('class' => 'icon',
							'title' => Yii::t('srbac','Assign to Users'),
							'border' => 0,
						)
					).' '.Yii::t('srbac', 'Assign to Users'),
					$this->createUrl('/srbac/assign')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('users.png'),
						Yii::t('srbac', 'User assignments'),
						array('class' => 'icon',
							'title' => Yii::t('srbac', 'User assignments'),
							'border' => 0
						)
					).' '.Yii::t('srbac', 'User assignments'),
					$this->createUrl('/srbac/user')
			);
			?>
		</div>
	</div>
	<div class="reset"></div>
</div>
