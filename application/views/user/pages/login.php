<?php $this->breadcrumbs = array(t('Login')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-login.png'); ?>);">
  <h1 class="bottom">{t}Login{/t}</h1>
</div>

<!-- need to replace text buttons with buttons near Login button -->

<div id="single-column">

  <p>
  
  	<?php echo CHtml::link(t('Not registered?'), $this->createUrl('register')); ?>
    
     - {t}OR{/t} - 
     
	 <?php echo CHtml::link(t('Forgot Password?'), $this->createUrl('forgotPassword')); ?></p>
     
  <br>
  
<?php echo $this->renderPartial('forms/login_form', array('Login' => $model)); ?>

</div>
