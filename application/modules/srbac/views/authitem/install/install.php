<?php
/**
 * Install.php
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * The install view.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.views.authitem.install
 * @since 1.0.0
 */
?>
<?php
$script = "
 		jQuery('#help_handle').click(function(){
 		$('#help').toggle('1000');
});";

Yii::app()->clientScript->registerScript("cb",$script,CClientScript::POS_READY);
?>
<?php $error = false;
$disabled = array(); ?>
<h3>
	<?php echo Yii::t('srbac','Install Srbac')?>
</h3>
<div class="srbac">
	<div id="help_handle" class="iconBox" style="float: right">
		<?php echo
		SHtml::image($this->getModule()->getIconsUrl('help.png'),
      Yii::t('srbac', 'Help'),
      array('class'=>'icon',
      'title'=>Yii::t('srbac','Help'),
      'border'=>0
      ))." " .
      ($this->getModule()->iconText ?
      Yii::t('srbac','Help') :
      "");
    ?>
	</div>
	<br />
	<?php echo SHtml::beginForm(); ?>
	<div id="help" style="display: none">
		<?php $this->renderPartial(Yii::app()->findLocalizedFile('install/installText'))?>
	</div>
	<div>
		<?php echo Yii::t('srbac','Your Database, AuthManager and srbac settings:'); ?>
		<table class="srbacDataGrid" width="'100%">
			<?php if(Yii::app()->getAuthManager() instanceof CDbAuthManager) { ?>

			<?php try { ?>
			<tr>
				<th colspan="2"><?php echo Yii::t('srbac','Database');?>
				</th>


			<tr>
				<td><?php echo Yii::t('srbac','Driver');?></td>
				<td><?php echo Yii::app()->getAuthManager()->db->getDriverName()?></td>
			</tr>
			<tr>
				<td><?php echo Yii::t('srbac','Connection');?></td>
				<td><?php echo Yii::app()->getAuthManager()->db->connectionString?></td>
			</tr>
			<?php  } catch(CException $e) { ?>
			<tr>
				<td colspan="2">
					<div class="error">
						<?php echo Yii::t('srbac','Database is not Configured');?>
						<?php echo "<pre>" . $e->getMessage() . "</pre>"; ?>
					</div>
				</td>
			</tr>
			<?php $error =true; ?>
			<?php  }?>
			<?php try { ?>
			<tr>
				<th colspan="2"><?php echo Yii::t('srbac','AuthManager');?>
				</th>


			<tr>
				<td><?php echo Yii::t('srbac','Item Table');?></td>
				<td><?php echo Yii::app()->getAuthManager()->itemTable?></td>
			</tr>
			<tr>
				<td><?php echo Yii::t('srbac','Assignment Table');?></td>
				<td><?php echo Yii::app()->getAuthManager()->assignmentTable?></td>
			</tr>
			<tr>
				<td><?php echo Yii::t('srbac','Item child table');?></td>
				<td><?php echo Yii::app()->getAuthManager()->itemChildTable?></td>
			</tr>
			<?php  } catch(CException $e) { ?>
			<tr>
				<td colspan="2">
					<div class="error">
						<?php echo Yii::t('srbac','AuthManager is not Configured');?>
						<?php echo "<pre>" . $e->getMessage() . "</pre>"; ?>
					</div>
				</td>
			</tr>
			<?php $error =true; ?>
			<?php  }?>
			<?php  }?>
			<?php try { ?>
			<tr>
				<th colspan="2"><?php echo Yii::t('srbac','srbac');?></th>
			</tr>
			<?php foreach ($this->getModule()->getAttributes() as $key=>$value) { ?>
			<?php $check = Helper::checkInstall($key,$value); ?>
			<?php echo $check[0]; ?>
			<?php if($check[1] == Helper::ERROR)$error = true;?>
			<?php } ?>
			<?php  } catch(CException $e ) { ?>
			<tr>
				<td colspan="2">
					<div class="error">
						<?php echo Yii::t('srbac','srbac is not Configured');?>
						<?php echo "<pre>" . $e->getMessage() . "</pre>"; ?>
					</div>
				</td>
			</tr>
			<?php $error =true;?>
			<?php  }?>
			<tr>
				<th colspan="2">Yii</th>
			</tr>
			<tr>
				<td><?php echo Yii::t("srbac", "Yii version")." :"; ?>
				</td>
				<?php if(Helper::checkYiiVersion(Helper::findModule("srbac")->getSupportedYiiVersion())) {?>
				<td><?php echo Yii::getVersion()?></td>
				<?php } else {?>
				<td style="color: red; font-weight: bold"><?php echo Yii::getVersion().
				"  <br /> ".
				Yii::t("srbac","Wrong Yii version, lower required version is")." ".Helper::findModule("srbac")->getSupportedYiiVersion(); ?>
				</td>
				<?php
				$error =true;
        } ?>
			</tr>
		</table>
	</div>
	<div>
		<?php if($error) { ?>
		<div>
			<?php echo Yii::t('srbac','There is an error in your configuration') ?>
			<?php $disabled = array('disabled'=>true)?>
		</div>
		<?php } ?>
		<?php echo SHtml::hiddenField("action", "Install"); ?>
		<?php echo SHtml::checkBox("demo", false, $disabled);
		echo Yii::t('srbac','Create demo authItems?')
		?>
		<br />
		<?php echo SHtml::submitButton(Yii::t('srbac','Install'),$disabled); ?>
	</div>

	<?php echo SHtml::endForm(); ?>
</div>
