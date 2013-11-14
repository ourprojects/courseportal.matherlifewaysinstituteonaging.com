<?php
Yii::app()->getClientScript()->registerCssFile($this->getModule()->getStylesUrl('srbac.css'));
?>
<div class="marginBottom">
	<div class="iconSet">
			<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('system.png'),
							SrbacModule::t('System'),
							array('class' => 'icon',
									'title' => SrbacModule::t('System'),
									'border' => 0
							)
					).' '.SrbacModule::t('System'),
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/system')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('manageAuth.png'),
							SrbacModule::t('Auth Items'),
							array('class' => 'icon',
									'title' => SrbacModule::t('Auth Items'),
									'border' => 0
							)
					).' '.SrbacModule::t('Auth Items'),
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/authItem')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('hierarchy.png'),
						SrbacModule::t('Hierarchy'),
						array('class' => 'icon',
							'title' => SrbacModule::t('Hierarchy'),
							'border' => 0,
						)
					).' '.SrbacModule::t('Hierarchy'),
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('superman.png'),
						SrbacModule::t('Super Users'),
						array('class' => 'icon',
							'title' => SrbacModule::t('Super Users'),
							'border' => 0,
						)
					).' '.SrbacModule::t('Super Users'),
					$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/assign/superUsers')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('users.png'),
						SrbacModule::t('User Assignments'),
						array('class' => 'icon',
							'title' => SrbacModule::t('User Assignments'),
							'border' => 0
						)
					).' '.SrbacModule::t('User Assignments'),
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
