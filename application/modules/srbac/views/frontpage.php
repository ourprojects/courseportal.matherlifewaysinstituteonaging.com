<?php
Yii::app()->getClientScript()->registerCssFile($this->getModule()->getStylesUrl('srbac.css'));
?>
<div class="marginBottom">
	<div class="iconSet">
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('manageAuth.png'),
							Yii::t('srbac', 'Managing auth items'),
							array('class' => 'icon',
									'title' => Yii::t('srbac','Managing auth items'),
									'border' => 0
							)
					)." " .($this->getModule()->iconText ? Yii::t('srbac', 'Managing auth items') : ""),
					Yii::app()->createUrl('srbac/manage')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('usersAssign.png'),
						Yii::t('srbac', 'Assign to users'),
						array('class' => 'icon',
							'title' => Yii::t('srbac','Assign to users'),
							'border' => 0,
						)
					)." " .($this->getModule()->iconText ? Yii::t('srbac', 'Assign to users') : ""),
					Yii::app()->createUrl('srbac/assign')
			);
			?>
		</div>
		<div class="iconBox">
			<?php
			echo CHtml::link(
					CHtml::image($this->getModule()->getIconsUrl('users.png'),
						Yii::t('srbac', 'User\'s assignments'),
						array('class' => 'icon',
							'title' => Yii::t('srbac', 'User\'s assignments'),
							'border' => 0
						)
					)." ".($this->getModule()->iconText ? Yii::t('srbac', 'User\'s assignments') : ""),
					Yii::app()->createUrl('srbac/assignments')
			);
			?>
		</div>
	</div>
	<div class="reset"></div>
</div>
