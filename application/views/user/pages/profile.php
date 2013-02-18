<?php
$this->breadcrumbs = array(t('Profile')); 
$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => 'a[id^="survey_link_"]',
				'config' => array(
						'width' => '80%',
						'height' => '70%',
						'arrows' => false,
						'autoSize' => false,
						'mouseWheel' => false,
				)
		)
);
?>

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
  
   <h2 class="flowers"> <?php echo t('Surveys'); ?> </h2>
  <p><?php echo t('Our surveys are designed to help us obtain information that help with decision-making.'); ?></p>
  <p><?php echo t('Our goal is to help better educate our participants by creating a client touch-point, a feedback system, and means to better understanding the shifting needs of the field.'); ?></p>
  <ul>
  <?php 
  	foreach($surveys as $survey): ?>
	<li>
  		<a id="survey_link_<?php echo $survey->getId(); ?>" href="#survey_<?php echo $survey->getId(); ?>" title="<?php echo $survey->model->title; ?>"><?php echo $survey->model->title; ?></a>
  		<?php $survey->run(); ?>
  	</li>
  	<?php endforeach; ?>
   </ul>
</div>
