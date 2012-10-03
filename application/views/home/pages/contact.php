<div class="small-masthead" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/header-contact.png);">
	<h1 class="bottom"><?php echo t('Contact Us'); ?></h1>
</div>
<div id="single-column">
<?php
$this->pageTitle = Yii::app()->name . ' - '.t('Contact Us');
// $this->breadcrumbs = array(	t('Contact Us') );
?>

<?php echo $this->renderPartial('forms/contact', array('models' => $models)); ?>

</div>