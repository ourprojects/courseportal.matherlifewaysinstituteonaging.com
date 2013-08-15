<?php
$this->breadcrumbs = array(Yii::t('srbac', 'RBAC Installation'));
$installed = SrbacUtilities::isInstalled();

Yii::app()->getClientScript()->registerScript('');
?>
<div>
	<?php
	if($installed)
	{
		$this->renderPartial('../frontpage');
		if(AuthItem::model()->superUser()->exists())
		{
			// Also show that configuration is complete
			$this->renderPartial('partials/superUserGrid'); // List of users that are super users
		}
		else
		{
			// A requirement for picking at least 1 super user with a list of users
		}
		// A reinstallation button with warnings
	}
	else
	{
		// A button to install
	}
	?>
	<div id="message">
		<?php Yii::t('srbac', 'Please wait while the RBAC system is installed. Your browser will be redirected to the management page as soon as the installation is complete.');?>
	</div>
</div>
<?php
$script = "jQuery('#help_handle').click(function(){ $('#help').toggle('1000');});";

Yii::app()->clientScript->registerScript("cb",$script,CClientScript::POS_READY);
$error = false;
$disabled = array();
?>
<h2><?php echo Yii::t('srbac', 'Srbac System Status')?></h2>
<div class="srbac">
	<div>
		<?php echo Yii::t('srbac', 'Your Database, AuthManager and srbac settings:'); ?>
		<table class="srbacDataGrid">
			<?php
			$authManager = Yii::app()->getAuthManager();

			if($authManager === null)
			{
				$error = Yii::t('srbac', 'An AuthManager has not been defined in your application\'s configuration.');
			}
			elseif(!$authManager instanceof EDbAuthManager)
			{
				$error = Yii::t('srbac', 'An AuthManager is defined in your application\'s configuration, but it is not the correct type. SRBAC is only compatible with AuthManagers of type EDbAuthManager.');
			}
			?>
			<tr>
				<th colspan="2"><?php echo Yii::t('srbac', 'AuthManager');?></th>
			</tr>
			<tr>
				<td><?php echo Yii::t('srbac', 'Status');?></td>
				<td class="<?php echo isset($error) ? 'srbacNoError' : 'srbacError' ?>">
				<?php echo isset($error) ? $error : Yii::t('srbac', 'OK'); ?>
				</td>
			</tr>
			<?php if(!isset($error)): ?>
			<tr>
				<td><?php echo Yii::t('srbac', 'Item Table'); ?></td>
				<td><?php echo $authManager->itemTable; ?></td>
			</tr>
			<tr>
				<td><?php echo Yii::t('srbac', 'Assignment Table'); ?></td>
				<td><?php echo $authManager->assignmentTable; ?></td>
			</tr>
			<tr>
				<td><?php echo Yii::t('srbac', 'Item child table'); ?></td>
				<td><?php echo $authManager->itemChildTable; ?></td>
			</tr>
			<?php endif; ?>
			<tr>
				<th colspan="2"><?php echo Yii::t('srbac', 'SRBAC Configuration');?></th>
			</tr>
			<?php
			foreach (SrbacUtilities::getSrbacModule()->getAttributes() as $key => $value)
			{
				$check = Helper::checkInstall($key, $value);
				echo $check[0];
				if($check[1] == Helper::ERROR)
					$error = true;
			}
			?>
		</table>
	</div>
	<div>
		<?php if($error) { ?>
		<div>
			<?php
			echo Yii::t('srbac','There is an error in your configuration');
			$disabled = array('disabled' => true);
			?>
		</div>
		<?php
			}
		echo SHtml::hiddenField("action", "Install");
		echo SHtml::checkBox("demo", false, $disabled);
		echo Yii::t('srbac','Create demo authItems?');
		?>
		<br />
		<?php echo SHtml::submitButton(Yii::t('srbac','Install'),$disabled); ?>
	</div>
</div>
