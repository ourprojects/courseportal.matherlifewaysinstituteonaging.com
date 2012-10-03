<div class="small-masthead" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/header-register.png);">
	<h1 class="bottom"><?php echo t('Profile'); ?></h1>
</div>
<div id="single-column">
<?php
$this->pageTitle = Yii::app()->name . ' - '.t('Profile');
//$this->breadcrumbs = array( t('Profile') );
?>

<?php echo $this->renderPartial('forms/profile_form', array('models' => $models)); ?>

</div>