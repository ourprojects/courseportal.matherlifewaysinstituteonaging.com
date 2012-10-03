<div class="small-masthead" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/header-forum.png);">
	<h1 class="bottom"><?php echo t('Forum'); ?></h1>
</div>
<div id="single-column">
<?php
$this->pageTitle = Yii::app()->name . ' - '.t('Forum');
//$this->breadcrumbs = array( t('Forum') );
?>

<iframe src="<?php echo Yii::app()->request->baseUrl; ?>/phpBB" height="700" width="100%">
</div>