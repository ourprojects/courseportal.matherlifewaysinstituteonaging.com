<?php

$this->breadcrumbs = array(t('Courses'));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => '.open-tutorial',
				'config' => array(
						'width' => '1024px',
						'height' => '768px',
						'arrows' => false,
						'autoSize' => false,
						'mouseWheel' => false,
							
				)
		)
);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-courses.png'); ?>);" />
  <h1 class="bottom"><?php echo t('Care Coaching Online'); ?></h1>
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

<!-- Start main content here -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t('CARE Coaching Online'); ?></h2>
  <p><?php echo t('Balancing work and family caregiver responsibilities'); ?></p>
  <p><?php echo t('CARE Coaching Online provides working caregivers with essential tools, knowledge, and skills to effectively deal with the variety of issues arising from caring for their aging parents, relatives, or loved ones. Developed by Mather LifeWays Institute on Aging, CARE Coaching Online improves working caregivers abilities to communicate, advocate, relate, and encourage their older parents or loved ones in making future plans.'); ?></p>
  <h2><?php echo t('Objectives'); ?></h2>
  <ul>
    <li><?php echo t('Identify, understand, and support needs and preferences of older adults'); ?></li>
    <li><?php echo t('Manage health information and record keeping'); ?></li>
    <li><?php echo t('Understand aspects of the health care system and utilization by older adults'); ?></li>
    <li><?php echo t('Better prepare for potential relocation of older adults'); ?></li>
    <li><?php echo t('Promote the safety of older relatives and friends in caring for themselves'); ?></li>
  </ul>
  <h2><?php echo t('Course Lessons'); ?></h2>
  
  
  <!-- Bullet points start here for course lessons, hyperlinks to FancyBox -->
  
  
  <ul>
    <li>
		<a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"><?php echo t('Care Coaching'); ?></a>
		<a href="#slide-2" data-fancybox-group="open-tutorial" class="open-tutorial" style="display: none;"></a>
		<a href="#slide-3" data-fancybox-group="open-tutorial" class="open-tutorial" style="display: none;"></a>
		<a href="#slide-4" data-fancybox-group="open-tutorial" class="open-tutorial" style="display: none;"></a>
		<a href="#slide-5" data-fancybox-group="open-tutorial" class="open-tutorial" style="display: none;"></a>
		<a href="#slide-6" data-fancybox-group="open-tutorial" class="open-tutorial" style="display: none;"></a> 
    </li>
    <li><a href="#"><?php echo t('Understanding Needs and Preferences of Older Adults'); ?></a></li>
    <li><a href="#"><?php echo t('Managing Health Information and Record Keeping'); ?></a></li>
    <li><a href="#"><?php echo t('Understanding the Health Care System and Utilization by Older Adults'); ?></a></li>
    <li><a href="#"><?php echo t('Relocation and Transfers by Older Adults within the Health Care System'); ?></a></li>
    <li><a href="#"><?php echo t('Promoting Safety of Older Relatives and Friends in Caring for Themselves'); ?></a></li>
    <li><a href="#"><?php echo t('Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making'); ?></a></li>
  </ul>
  
  <!-- Start Course content here for FancyBox -->
  
  <!-- Lesson #1 - Care Coaching starts here -->
  
  
  <div id="tutorial" style="display: none;">
    <div id="slide-1" class="slide">
      <h2 class="flowers"><?php echo t('CARE Coaching Online'); ?></h2>
      <hr />
      <p>start here</p>
    </div>
  </div>
  
</div>