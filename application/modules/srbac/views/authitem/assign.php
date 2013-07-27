<?php
/**
 * assign.php
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * The Assign tabview view
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.views.authitem
 * @since 1.0.0
 */
?>
<?php $this->breadcrumbs = array(
		'Srbac Assign'
)
?>
<?php if($this->getModule()->getMessage() != ""){ ?>
<div id="srbacError">
	<?php echo $this->getModule()->getMessage();?>
</div>
<?php } ?>
<?php if($this->getModule()->getShowHeader()) {
	$this->renderPartial($this->getModule()->header);
}
?>
<div>
	<?php

	$this->renderPartial("frontpage");

	$tabs = array(
      'tab1'=>array(
      'title'=>Yii::t('srbac','Users'),
      'view'=>'tabViews/roleToUser',
      ),
      'tab2'=>array(
      'title'=>Yii::t('srbac','Roles'),
      'view'=>'tabViews/taskToRole',
      ),
      'tab3'=>array(
      'title'=>Yii::t('srbac','Tasks'),
      'view'=>'tabViews/operationToTask',
      ),
  );
  ?>
	<div class="horTab">
		<?php
		Helper::publishCss($this->getModule()->css);
		$this->widget('system.web.widgets.CTabView',
        array('tabs' => $tabs,
        'viewData' => array('model' => $model, 'userid' => $userid, 'message' => $message, 'data' => isset($data) ? $data : array()),
        'cssFile' => $this->getModule()->getCssUrl(),
    ));
    ?>
	</div>
</div>
<?php if($this->getModule()->getShowFooter()) {
	$this->renderPartial($this->getModule()->footer);
}
?>
