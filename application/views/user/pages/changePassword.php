<?php $this->breadcrumbs = array('{t}Lost your password?{/t}'); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
	<h1 class="bottom">{t}Lost your password?{/t}</h1>
</div>
<div id="single-column">
<?php echo $this->renderPartial('forms/change_password_form', array('ChangePassword' => $ChangePassword)); ?>
</div>