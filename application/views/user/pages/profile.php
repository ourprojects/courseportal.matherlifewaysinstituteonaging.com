<?php $this->breadcrumbs = array(t('Profile')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
  <h1 class="bottom"><?php echo t('Profile'); ?></h1>
</div>
<div id="single-column">
  <p>
    <?php 
echo $this->renderPartial('forms/profile_form', array('models' => $models));
?>
  </p>
  <hr />
  <p>
    <?php 
echo CHtml::link(t('Extended Profile Survey'), $this->createUrl('profileSurvey')); 
?>
  </p>
  <p>
    <?php 
echo CHtml::link(t('Pre-Course Survey'), $this->createUrl('precourseSurvey'));
?>
  </p>
  <p>
    <?php 
echo CHtml::link(t('Post-Course Survey'), $this->createUrl('postcourseSurvey'));	
?>
  </p>
  <p>
    <?php 
echo CHtml::link(t('Spencer Powell Brain Fitness Survey'), $this->createUrl('spencerpowellSurvey'));	
?>
  </p>
</div>
