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
  <h1 class="bottom"><?php echo t('Empower Online'); ?></h1>
</div>

<!-- Start sidebar here -->
<div id="sidebar">
  <div class="box-sidebar one"> 
    
    <!-- sidebar #1 here -->
    <h3><?php echo t('Working Caregivers in America'); ?></h3>
    <img class="block-center" src="<?php echo $this->getImagesUrl('286x366_Grafix_69pc.png'); ?>" />
    <p><?php echo t('69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an 
	unpaid leave of absence to meet their care-giving responsibilities.'); ?></p>
  </div>
  
  <!-- sidebar #2 here -->
  
  <div class="box-sidebar two">
    <h3><?php echo t('Magnitude - Informal Caregivers'); ?></h3>
    <p><a href="http://www.caregiver.org/caregiver/jsp/home.jsp" target="_blank">FAMILY CAREGIVER ALLIANCE</a><br />
      <?php echo t('National Center on Caregiving (USA)'); ?></p>
    <p class="title">65.7 million</p>
    <p><?php echo t('caregivers make up 29% of the U.S. adult population providing care to someone who is ill, disabled or aged'); ?></p>
    <hr />
    <p class="title">52 million</p>
    <p><?php echo t('caregivers provide care to adults (aged 18+) with a disability or illness'); ?></p>
    <hr />
    <p class="title">14.9 million</p>
    <p><?php echo t('care for someone who has Alzheimer\'s disease or other dementia'); ?></p>
  </div>
</div>

<!-- start main content here -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t('Empower Online'); ?></h2>
  <p> <?php echo t('Empower Online is an in-depth, five-lesson online course that focuses on self-care for the working caregiver that was developed by '); ?><a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a> <?php echo t(' with the support of '); ?><a href="https://www.wfd.com" target="_blank">WFD Consulting</a>. <?php echo t('The program focuses on managing responsibilities while caring for loved ones with chronic medical issues and includes communicating effectively with healthcare providers and locating additional caregiver resources.'); ?> </p>
  <p> <?php echo t('Objectives'); ?> </p>
  <ul>
    <li><?php echo t('Explore and introduce self-care'); ?></li>
    <li><?php echo t('Explore caregiver stress'); ?></li>
    <li><?php echo t('Explore caregiving transitions'); ?></li>
    <li><?php echo t('Explore and discuss the challenges associated with long-distance caregiving'); ?></li>
    <li><?php echo t('Explore various decisions associated with the caregiver role'); ?></li>
  </ul>
  <h2><?php echo t('Course Lessons'); ?></h2>

<ul>
  <li> 
	  <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"><?php echo t('Taking Care of You'); ?></a> 
	  <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
	  <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1" />
	  <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
  </li>
  <li>
	 	<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"><?php echo t('Reducing Personal Stress'); ?></a> 
	  	<a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
	  	<a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2" />
        <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2" /> 
  </li>
  <li>
	  	<a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3">
	  		<?php echo t('Communicating Effectively in Challenging Situations'); ?>
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
  </li>
  <li>
	  <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4">
	  <?php echo t('Normal &amp; Abnormal Aging Changes'); ?>
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
    <?php echo t('Financial &amp; Legal Issues'); ?>
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
  </li>
 
</ul>
</div>

<!-- start course content here --> 

<!-- Lesson 1 Slide 1 -->

<div id="course" class="hide">
  <div id="lesson-1">
    <div id="lesson-1-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Taking Care of You'); ?></h2>
        <hr />
        <p><?php echo t('This lesson contains several main sections:'); ?></p>
        <ul>
          <li><?php echo t('Caregiver Resources'); ?></li>
          <li><?php echo t('Managing Self-Care'); ?></li>
          <li><?php echo t('Setting Goals'); ?></li>
          <li><?php echo t('Making Action Plans'); ?></li>
          <li><?php echo t('Problem-Solving: A Solution-Seeking Approach'); ?></li>
          <li><?php echo t('Reward Yourself'); ?></li>
          <li><?php echo t('My Action Plan'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    
    <!-- Lesson 1 Slide 2 -->
    
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Caregiver Resources'); ?></h2>
        <hr />
        <p><?php echo t('Caregiving involves many challenges. You often need to master new skills and gain support. You may need to develop new ways of relating to a family member if his or her ability to communicate or remember is compromised by illness. You may have to make tough decisions. But often one of the greatest challenges is taking care of yourself.'); ?></p>
        <p><?php echo t('Too often caregivers neglect their own health and well-being, and put their own needs on the back burner. Sometimes caregivers become a second victim of the disease that afflicts their family member. It is sad when someone says, My mother was the ill person, but her illness destroyed my father. Usually, we cannot stop the impact of a chronic illness on a family member. However, we are responsible for our own self-care.'); ?></p>
        <p><?php echo t('When you board an airplane, the flight attendant gives several safety instructions. One of them is, If oxygen masks drop down, put on your oxygen mask first before helping others. This is because if you do not take care of yourself first, you may not be able to help those who need your help. It is the same thing with caregiving. When you take care of yourself, everyone benefits. Ignoring your own needs is not only potentially detrimental to you, but it can also be harmful to the person who depends on you.'); ?></p>
        <p><?php echo t('The Resource section was designed to give you additional details in order to help you maintain personal well-being while providing quality care to your family member. Many focus on tools to help you to take care of you. These tools will help you'); ?></p>
        <ul>
          <li><?php echo t('set goals and make action plans;'); ?></li>
          <li><?php echo t('identify and reduce personal stress;'); ?></li>
          <li><?php echo t('make your thoughts and feelings work for you, not against you;'); ?></li>
          <li><?php echo t('communicate your feelings, needs, and concerns in positive ways;'); ?></li>
          <li><?php echo t('cope with difficult situations, including asking for help and setting limits;'); ?></li>
          <li><?php echo t('deal with emotions, especially feelings of anger, guilt, and depression; and'); ?></li>
          <li><?php echo t('make tough caregiving decisions.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- 2 divs needed, closes 'lesson' and closes 'course' --> 
  </div>
</div>
