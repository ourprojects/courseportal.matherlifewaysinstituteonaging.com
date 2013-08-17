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
							Yii::t('srbac', 'Auth Items'),
							array('class' => 'icon',
									'title' => Yii::t('srbac','Auth Items'),
									'border' => 0
							)
					).' '.Yii::t('srbac', 'Auth Items'),
					$this->createUrl('/srbac/authItem')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('usersAssign.png'),
						Yii::t('srbac', 'Hierarchy'),
						array('class' => 'icon',
							'title' => Yii::t('srbac', 'Hierarchy'),
							'border' => 0,
						)
					).' '.Yii::t('srbac', 'Hierarchy'),
					$this->createUrl('/srbac/assign')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('superman.png'),
						Yii::t('srbac', 'Super Users'),
						array('class' => 'icon',
							'title' => Yii::t('srbac','Super Users'),
							'border' => 0,
						)
					).' '.Yii::t('srbac', 'Super Users'),
					$this->createUrl('/srbac/assign/superUsers')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('users.png'),
						Yii::t('srbac', 'User Assignments'),
						array('class' => 'icon',
							'title' => Yii::t('srbac', 'User Assignments'),
							'border' => 0
						)
					).' '.Yii::t('srbac', 'User Assignments'),
					$this->createUrl('/srbac/user')
			);
			?>
		</div>
	</div>
	<div class="reset"></div>
</div>
