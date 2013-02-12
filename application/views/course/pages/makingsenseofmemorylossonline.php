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
  <h1 class="bottom"><?php echo t('Making Sense of Memory Loss (MSML) Online'); ?></h1>
</div>

<!-- SIDEBAR 1 -->

<div id="sidebar">
  <div class="box-sidebar one">
    <h3>Alzheimer's Association</h3>
    <br />
    <p> <b> <?php echo t('10 Early Signs and Symptoms of Alzheimer\'s'); ?> </b> </p>
    <br />
    <a href="https://www.alz.org/alzheimers_disease_10_signs_of_alzheimers.asp" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('alz.png'); ?>" /></a>
    <hr />
    <p><?php echo t('Memory loss that disrupts daily life may be a symptom of Alzheimer\'s or another dementia. Alzheimer\'s is a brain disease that causes a slow decline in memory, thinking and reasoning skills. There are 10 warning signs and symptoms. Every individual may experience one or more of these signs in different degrees. If you notice any of them, please see a doctor.'); ?></p>
  </div>
  
  <!-- SIDEBAR 2 -->
  
  <div class="box-sidebar one">
    <h3>U.S. Dept. of Health &amp; Human Srvc.</h3>
    <br />
    <p> <b> <?php echo t('2011 - 2012 Alzheimer\'s Disease Progress Report'); ?> </b> </p>
    <p><a href="http://www.nia.nih.gov/alzheimers/publication/2011-2012-alzheimers-disease-progress-report" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('adpr-front.png'); ?>" /></a></p>
    <p><?php echo t('A summary of Alzheimer\'s disease research, infrastructure, and funding supported by the NIH.'); ?> </p>
  </div>
  
  
</div>


<div class="column-wide">
  <h2 class="flowers"><?php echo t('Making Sense of Memory Loss Online'); ?></h2>
  <p> <?php echo t('Developed by Mather LifeWays Institute on Aging and the Alzheimer\'s Association, 
				evidence-based Making Sense of Memory Loss Online helps those who care for someone in the early, middle, or late to final
	stages of memory loss, whether or not that individual has received a diagnosis of Alzheimer\'s Disease or related dementia.'); ?> </p>
  <p> <?php echo t('Objectives'); ?> </p>
  <ul>
    <li><?php echo t('Increase knowledge about the causes of memory loss and to promote a medical evaluation'); ?></li>
    <li><?php echo t('Assist in adjusting their attitudes and behaviors in relation to the person with memory loss'); ?></li>
    <li><?php echo t('Increase self-efficacy with respect to present and future caregiving tasks'); ?></li>
    <li><?php echo t('Explore resources available for those with memory loss'); ?></li>
    <li><?php echo t('Explore national data and statistics related to memory-loss'); ?></li>
  </ul>
  <p id="surveynotify"><?php echo t('Please complete the PRE-COURSE SURVEY before participating. It can be accessed via the PROFILE page.'); ?></p>
  <h2><?php echo t('Course Lessons'); ?></h2>

  
  
   <ul>
  <li> 
	  <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1">
	  	<?php echo t('Overview of Memory Loss'); ?>
	  </a> 
	  <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
  </li>
  <li>
	 	<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2">
	  		<?php echo t('Communication Strategies'); ?>
	  	</a> 
	  	<a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
  </li>
  <li>
	  	<a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3">
	  		<?php echo t('Making Decisions'); ?>
	  	</a> 
	  	<a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
	  	<a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3" /> 
  </li>
  <li>
	  <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4">
	  <?php echo t('Planning for the Future'); ?>
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
     <a href="#lesson-4-slide-11" data-fancybox-group="lesson-4" class="hide lesson-4" />
  </li>
  <li>
    <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5">
    <?php echo t('Effective Ways of Coping'); ?>
    </a> 
	<a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	<a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	<a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	<a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	<a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
	<a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5" /> 
   </li>
</ul>
</div>
<div id="course" class="hide">
  <div id="lesson-1">
    <div id="lesson-1-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Defining, Describing & Understanding Caregiving'); ?></h2>
        <p><?php echo t('Please check back later.'); ?></p>
      </div>
    </div>
  </div>
</div>
