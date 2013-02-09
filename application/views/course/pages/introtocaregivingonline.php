<?php

$this->breadcrumbs = array(t('Courses'));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

// FancyBox configuration for all lessons
$courseFancyboxConfig = array('width' => '90%',
							'height' => '90%',
							'arrows' => false,
							'autoSize' => false,
							'mouseWheel' => false);
// Lesson 1 FancyBox
$this->widget(
		'ext.fancybox.EFancyBox',
		array('id' => '.lesson-1',
			  'config' => $courseFancyboxConfig)
);
// Lesson 2 FancyBox
$this->widget(
		'ext.fancybox.EFancyBox',
		array('id' => '.lesson-2',
			  'config' => $courseFancyboxConfig)
);
// Lesson 3 FancyBox
$this->widget(
		'ext.fancybox.EFancyBox',
		array('id' => '.lesson-3',
			  'config' => $courseFancyboxConfig)
);
// Lesson 4 FancyBox
$this->widget(
		'ext.fancybox.EFancyBox',
		array('id' => '.lesson-4',
			  'config' => $courseFancyboxConfig)
);
// Lesson 5 FancyBox
$this->widget(
		'ext.fancybox.EFancyBox',
		array('id' => '.lesson-5',
			  'config' => $courseFancyboxConfig)
);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-courses.png'); ?>);">
  <h1 class="bottom"> <?php echo t('Introduction to Caregiving Online'); ?> </h1>
</div>

<!-- Start sidebar here -->
<div id="sidebar">
  <div class="box-sidebar one"> 
    
    <!-- sidebar #1 here -->
    <h3><?php echo t('Caregiving and its challenges.'); ?></h3>
    <img class="block-center" src="<?php echo $this->getImagesUrl('286x231_Grafix_Pie2-3.png'); ?>" />
    <p><?php echo t('2/3 of working caregivers report conflicts between work and caregiving that result in increased absenteeism, workday interruptions, reduced hours, and workload shifting to other employees.'); ?></p>
  </div>
  
  <!-- sidebar #2 here -->
  
  
  <div class="box-sidebar two">
    <h3>Pew Internet: Health (Feb 1, 2013)</h3>
    <p><a href="http://pewinternet.org/experts/~/link.aspx?_id=E26587FE8FDB443A8610ECB87E635F94&_z=z" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('pew.png'); ?>" /></a></p>

    <ul>
      <li><?php echo t('39% of U.S. adults provided care for a loved one in the past 12 months, which could include helping with personal needs, household chores, finances, or simply visiting to check in.'); ?></li>
      <hr />
      <li><?php echo t('36% of U.S. adults care for an adult or multiple adults.'); ?></li>
      <hr />
      <li><?php echo t('8% of U.S. adults care for a child with a medical, behavioral, or other condition or disability.'); ?></li>
      <hr />
      <li><?php echo t('Eight in ten caregivers (79%) have access to the internet. Of those, 88% look online for health information, outpacing other internet users on every health topic included in our survey, from looking up certain treatments to hospital ratings to end-of-life decisions.'); ?></li>
    </ul>
  </div>
</div>


<div class="column-wide">
  <h2 class="flowers"> <?php echo t('Introduction to Caregiving Online'); ?> </h2>
  <hr />
  <p> <?php echo t('Few are fully prepared for the responsibilities and tasks involved in caring for an older adult. 
				As a caregiver, it is important to have a clear plan or guide that has multiple paths. This five-lesson online course introduces the basics
	of the caregiver role and explores the challenges associated with older adult care.'); ?> </p>
  <p> <?php echo t('Objectives'); ?> </p>
  <ul>
    <li><?php echo t('Explore, define, describe, and understand caregiving'); ?></li>
    <li><?php echo t('Explore current data, trends, and research'); ?></li>
    <li><?php echo t('Explore general challenges associated with caregiving'); ?></li>
    <li><?php echo t('Explore the impact on businesses and the economy'); ?></li>
    <li><?php echo t('Explore and discuss the future of caregiving'); ?></li>
  </ul>
  <h2><?php echo t('Course Lessons'); ?></h2>

  
  
  <ul>
  <li> 
	  <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1">
	  	<?php echo t('Defining, Describing & Understanding Caregiving'); ?>
	  </a> 
	  <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1" />
	  <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
  </li>
  <li>
	 	<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2">
	  		<?php echo t('Current Data, Trends & Research on US Caregivers'); ?>
	  	</a> 
	  	<a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
  </li>
  <li>
	  	<a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3">
	  		<?php echo t('General Challenges Associated with Caregiving'); ?>
	  	</a> 
	  	<a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-11" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-12" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
  </li>
  <li>
	  <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4">
	  <?php echo t('Impact on the Workplace & the Economy'); ?>
	  </a> 
	  <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
	  <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
	  <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
	  <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
	  <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
	  <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
	  <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
	  <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
	  <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4" /> 
  </li>
  <li>
    <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5">
    <?php echo t('The Future of Caregiving in the US'); ?>
    </a> 
	<a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	<a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	<a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	<a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5" />
	  <a href="#lesson-5-slide-11" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-12" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-13" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-14" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-15" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-16" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-17" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-18" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	  <a href="#lesson-5-slide-19" data-fancybox-group="lesson-5" class="hide lesson-5" />
	  <a href="#lesson-5-slide-20" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
  </li>

   
</ul>
</div>
  
                
<!-- need this div to close all -->
</div>

