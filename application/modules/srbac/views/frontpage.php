<?php
Yii::app()->getClientScript()->registerCssFile($this->getModule()->getStylesUrl('srbac.css'));
?>
<div class="marginBottom">
	<div class="iconSet">
			<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('system.png'),
							Yii::t('srbac', 'System'),
							array('class' => 'icon',
									'title' => Yii::t('srbac', 'System'),
									'border' => 0
							)
					).' '.Yii::t('srbac', 'System'),
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/system')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('manageAuth.png'),
							Yii::t('srbac', 'Auth Items'),
							array('class' => 'icon',
									'title' => Yii::t('srbac', 'Auth Items'),
									'border' => 0
							)
					).' '.Yii::t('srbac', 'Auth Items'),
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/authItem')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('hierarchy.png'),
						Yii::t('srbac', 'Hierarchy'),
						array('class' => 'icon',
							'title' => Yii::t('srbac', 'Hierarchy'),
							'border' => 0,
						)
					).' '.Yii::t('srbac', 'Hierarchy'),
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('superman.png'),
						Yii::t('srbac', 'Super Users'),
						array('class' => 'icon',
							'title' => Yii::t('srbac', 'Super Users'),
							'border' => 0,
						)
					).' '.Yii::t('srbac', 'Super Users'),
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/superUsers')
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
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/user')
			);
			?>
		</div>
	</div>
	<?php if(Yii::app()->getUser()->hasFlash($this->getModule()->flashKey)): ?>
	<div id="srbacFlash">
		<?php echo Yii::app()->getUser()->getFlash($this->getModule()->flashKey, null, true); ?>
	</div>
	<?php endif; ?>
</div>
