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