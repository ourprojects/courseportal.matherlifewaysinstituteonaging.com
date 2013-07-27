<?php
/**
 * frontpage.php
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * Srbac main administration page
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.views.authitem
 * @since 1.0.2
 */
?>
<div class="marginBottom">
	<div class="iconSet">
		<div class="iconBox">
			<?php echo SHtml::link(
					SHtml::image($this->getModule()->getIconsPath().'/manageAuth.png',
							Yii::t('srbac','Managing auth items'),
							array('class'=>'icon',
									'title'=>Yii::t('srbac','Managing auth items'),
									'border'=>0
                      )
					)." " .
                ($this->getModule()->iconText ?
                Yii::t('srbac','Managing auth items') :
                ""),
					array('authitem/manage'))
					?>
		</div>
		<div class="iconBox">
			<?php echo SHtml::link(
					SHtml::image($this->getModule()->getIconsPath().'/usersAssign.png',
                    Yii::t('srbac','Assign to users'),
                    array('class'=>'icon',
                      'title'=>Yii::t('srbac','Assign to users'),
                      'border'=>0,
                      )
                )." " .
                ($this->getModule()->iconText ?
                Yii::t('srbac','Assign to users') :
                ""),
            array('authitem/assign'));?>
		</div>
		<div class="iconBox">
			<?php echo SHtml::link(
					SHtml::image($this->getModule()->getIconsPath().'/users.png',
                    Yii::t('srbac','User\'s assignments'),
                    array('class'=>'icon',
                      'title'=>Yii::t('srbac','User\'s assignments'),
                      'border'=>0
                      )
                )." " .
                ($this->getModule()->iconText ?
                Yii::t('srbac','User\'s assignments') :
                ""),
            array('authitem/assignments'));?>
		</div>
	</div>
	<div class="reset"></div>
</div>
