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