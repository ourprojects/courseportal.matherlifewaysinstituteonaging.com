<?php 
$tabs = array();
$dimensionAction = $this->getController()->createAction($actionPrefix.'dimension');
foreach($dimensions as $dimension)
{
	$tabs[$dimension->name] = $dimensionAction->actionDimension($dimension->id, time(), 'week', array(), true);
}
$this->widget('zii.widgets.jui.CJuiTabs', array('tabs' => $tabs, 'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'));
?>

