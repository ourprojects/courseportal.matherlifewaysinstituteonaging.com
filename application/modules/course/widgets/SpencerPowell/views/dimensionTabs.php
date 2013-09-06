<?php if(Yii::app()->getUser()->hasFlash($this->getId().'-success')): ?>
<p>
	<?php echo Yii::app()->getUser()->getFlash($this->getId().'-success', null, true); ?>
</p>
<?php 
endif;

echo CHtml::link(t('Log an Activity'), $this->getController()->createUrl($this->actionPrefix.'logActivity'), array('class' => 'button'));

$tabs = array();
foreach($dimensions as $dimension)
{
	$tabs[$dimension->name] = $this->_actionDimension($dimension->id, time(), 'day', true);
}
$this->widget('zii.widgets.jui.CJuiTabs', array('tabs' => $tabs, 'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'));
?>

