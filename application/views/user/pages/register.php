<div class="small-masthead" style="background-image: url(<?php echo Yii::app()->theme->getImagesUrl(); ?>/header-register.png);">
	<h1 class="bottom"><?php echo t('Register'); ?></h1>
</div>
<div id="single-column">
<?php
$this->pageTitle = Yii::app()->name . ' - '.t('Register');
$this->breadcrumbs = array( t('Register') );
?>

<?php echo $this->renderPartial('forms/register_form', array('models' => $models)); ?>
</div>