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

<!-- Start sidebar here -->

<div id="sidebar"> 
  
  <!-- sidebar #1 here -->
  
  <div class="box-sidebar one">
    <h3><?php echo t('Profile of the Month'); ?></h3>
    <br />
    <p><?php echo t('Profile of the Month is a short highlight of a participant who has testified to their increased self-efficacy becuase of these online courses.'); ?></p>
    <p><?php echo t('COMING SOON! PLEASE CHECK BACK LATER.'); ?></p>
  </div>
  
  <!-- sidebar #2 here -->
  <div class="box-sidebar one">
    <h3><?php echo t('Profile Page Meta-Data'); ?></h3>
    <p><?php echo t('The information you provide us, via your profile, is used for research purposes only. We do not sell, distribute, or use your information for any other purpose than helping make these online courses better.'); ?></p>
  </div>
  <!-- sidebar #3 here -->
  
  <div class="box-sidebar three">
    <h3><?php echo t('Disclaimer'); ?></h3>
    <p><?php echo t('Please check back later as we update our Disclaimer. Thank you!'); ?></p>
  </div>
</div>
<div class="column-wide">
  <h2 class="flowers"><?php echo t('Profile'); ?></h2>
  <p><?php echo t('Please complete your profile. This information helps us track your participation and helps us compile important geographical data, so we have better information when updating course content.'); ?></p>
  <br />
  <div class="box-white">
    <p>
      <?php 
echo $this->renderPartial('forms/profile_form', array('models' => $models));
?>
    </p>
  </div>
  <h2 class="flowers"> <?php echo t('Surveys'); ?> </h2>
  <p><?php echo t('Our surveys are designed to help us obtain information that help with decision-making. Our goal is to help better educate our participants by creating a client touch-point, a feedback system, and means to better understanding the shifting needs of the field.'); ?></p>
  <ul>
    <?php 
  	foreach($surveys as $survey): ?>
    <li> <a id="survey_link_<?php echo $survey->getId(); ?>" href="#survey_<?php echo $survey->getId(); ?>" title="<?php echo $survey->model->title; ?>"><?php echo $survey->model->title; ?></a>
      <?php $survey->run(); ?>
    </li>
    <?php endforeach; ?>
  </ul>
</div>
