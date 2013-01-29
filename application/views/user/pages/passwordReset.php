<?php $this->breadcrumbs = array(t('Lost your password?')); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
	<h1 class="bottom"><?php echo t('Lost your password?'); ?></h1>
</div>
<div id="single-column">
<?php echo $this->renderPartial('forms/password_reset_form', array('user' => $user)); ?>
</div>