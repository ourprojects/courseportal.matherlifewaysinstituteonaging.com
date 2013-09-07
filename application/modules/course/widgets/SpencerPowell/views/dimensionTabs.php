<?php 
$tabs = array();
foreach($dimensions as $dimension)
{
	$tabs[$dimension->name] = $this->_actionDimension($dimension->id, time(), 'day', array(), true);
}
$this->widget('zii.widgets.jui.CJuiTabs', array('tabs' => $tabs, 'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'));
?>

