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
    
    <h3>Alzheimer's Association: behaviors</h3>
    <p><img class="block-center" src="<?php echo $this->getImagesUrl('alz.png'); ?>" /></p>
    <p><a href="http://www.alz.org/national/documents/brochure_behaviors.pdf" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('cover_behaviors.jpg'); ?>" /> </a> </p>
    <hr />
    <p><?php echo t('How to respond when dementia causes unpredictable behaviors (English)'); ?></p><br /><br />
  </div>
  
  <!-- sidebar #2 here -->
  
  <div class="box-sidebar one">
    <h3><?php echo t('Caregivers\' Resources'); ?></h3>
    <p> <a href="http://www.usa.gov/Citizen/Topics/Health/caregivers.shtml#Government_Benefits" target="_blank"> <img class="block-center" src="<?php echo $this->getImagesUrl('usagov_logo.gif'); ?>" /> </a> </p>
    <hr />
    <p><?php echo t('Find a nursing home, assisted living, or hospice; check your eligibility for benefits; get resources for long-distance caregiving; review legal issues; and find support for caregivers.'); ?></p><br /><br />
  </div>
  
<!-- need this final closing div for 'sidebar' -->
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
      <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1" />
      <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1" /> 
      <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1" />
      <a href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1" /> 

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
    <!-- Lesson 1 Slide 3 -->
    <div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Caregiver Resources (continued)'); ?></h2>
    <hr />
    <p><?php echo t('Additional resources will address special concerns and decisions you may face as a caregiver. These include what to do when a family member is no longer a safe driver, hiring in-home help, using community services, how to communicate with and respond to a family member who is memory impaired, options available when a family member is having problems managing his money; coping with depression, and making a decision about a care facility. You can turn to resources for guidance and direction when you face a specific decision or concern.'); ?></p>
    <p><?php echo t('How Much Support Do You Have?'); ?></p>
    <p><?php echo t('Mark the box in the scale to show how much support you feel from each resource. After you have completed the survey, think about what you can do to gain more support from these individuals. Again, this is simply a visual, and is not meant to be printed.'); ?></p>
    <p><?php echo t('Family'); ?></p>
    <table width="95%" border="3">
    <tr>
    <td><div align="center">Type of Support</div></td>
    <td><div align="center">None</div></td>
    <td><div align="center">Little</div></td>
    <td><div align="center">Some</div></td>
    <td><div align="center">A lot</div></td>
    <td><div align="center">As Much As I Need</div></td>
    </tr>
    <tr>
    <td><div align="left">Understanding</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Respect</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Encouragement</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help me feel good about myself</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Listen to me</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Are there for me</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Offer spiritual support</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Cooperation</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Care for me when I'm sick</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Give/loan me money when I need it</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Babysit</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help with transportation</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help take care of ill/elderly family member</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Physcial affection (hugs)</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    <tr>
    <td><div align="left">Helps cook and clean</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio" value="radio">
    </div>
    <label for="radio"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio2" value="radio">
    </div>
    <label for="radio2"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio3" value="radio">
    </div>
    <label for="radio3"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio4" value="radio">
    </div>
    <label for="radio4"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio5" value="radio">
    </div>
    <label for="radio5"></label></td>
    </tr>
    </table>
    <p>FRIENDS &amp; COWORKERS</p>
    <table width="95%" border="3">
    <tr>
    <td><div align="center">Type of Support</div></td>
    <td><div align="center">None</div></td>
    <td><div align="center">Little</div></td>
    <td><div align="center">Some</div></td>
    <td><div align="center">A lot</div></td>
    <td><div align="center">As Much As I Need</div></td>
    </tr>
    <tr>
    <td><div align="left">Understanding</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Respect</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Encouragement</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help me feel good about myself</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Listen to me</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Are there for me</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Offer spiritual support</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Cooperation</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Care for me when I'm sick</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Give/loan me money when I need it</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Babysit</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help with transportation</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help take care of ill/elderly family member</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Physcial affection (hugs)</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Helps cook and clean</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    </table>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 4 -->
    <div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Caregiver Resources (continued)'); ?></h2>
    <hr />
    <p><?php echo t('Friend\'s and Coworkers'); ?></p>
    <table width="95%" border="3">
    <tr>
    <td><div align="center">Type of Support</div></td>
    <td><div align="center">None</div></td>
    <td><div align="center">Little</div></td>
    <td><div align="center">Some</div></td>
    <td><div align="center">A lot</div></td>
    <td><div align="center">As Much As I Need</div></td>
    </tr>
    <tr>
    <td><div align="left">Understanding</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Respect</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Encouragement</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help me feel good about myself</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Listen to me</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Are there for me</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Offer spiritual support</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Cooperation</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Care for me when I'm sick</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Give/loan me money when I need it</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Babysit</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help with transportation</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Help take care of ill/elderly family member</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Physcial affection (hugs)</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    <tr>
    <td><div align="left">Helps cook and clean</div></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio6" value="radio">
    </div>
    <label for="radio6"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio7" value="radio">
    </div>
    <label for="radio7"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio8" value="radio">
    </div>
    <label for="radio8"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio9" value="radio">
    </div>
    <label for="radio9"></label></td>
    <td><div align="center">
    <input type="radio" name="radio" id="radio10" value="radio">
    </div>
    <label for="radio10"></label></td>
    </tr>
    </table>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 5 -->
    <div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Managing Self-Care'); ?></h2>
    <hr />
    <p><?php echo t('Managing our self-care means that as caregivers we:'); ?></p>
    <ul>
    <li><?php echo t('Take responsibility - We realize we are responsible for our personal well-being and for getting our needs met. This includes maintaining activities and relationships that are meaningful to us.'); ?></li>
    <li><?php echo t('Have realistic expectations - We fully understand our family member\'s medical condition and we are realistic about what our family member can and cannot do. The more you know about your family member\'s medical condition, the better you will be able to plan successful caregiving strategies. Knowledge is power. It is also important to look at your definition of a good caregiver. Unrealistic expectations can set you up for feelings of failure, resentment, and guilt. Placing burdensome expectations on yourself does not make you a better caregiver. In fact, you are much more likely to become an exhausted, irritable, and resentful caregiver... and then to feel guilty!'); ?></li>
    <li><?php echo t('Focus on what we can do - It is important to be clear about what you can and cannot change. For example, you will not be able to change a person who has always been demanding and inflexible, but you can control how you respond to that person\'s demands. You can accept and let-go of-the things you cannot change. Managing your self-care also means you seek solutions to what you can change.'); ?></li>
    <li><?php echo t('Communicate effectively with others - These include family members, friends, health care professionals, and the care receiver. Do not expect others to know what you need. Recognize it is your responsibility to tell others about your needs and concerns. Communicate in ways that are positive and avoid being demanding, manipulative, or guilt provoking when you make requests.'); ?></li>
    <li><?php echo t('Learn from our emotions - Realize there will be emotional ups and downs. Listen to your emotions and what they are telling you. Do not bottle up your emotions. Repressing or denying feelings decreases energy, causes irritability, depression, and physical problems, and affects your judgment and ability to make the best decisions. Also, do not strike out at others. You are in control of your emotions, your emotions do not control you.'); ?></li>
    <li><?php echo t('Get help when needed - An important part of self-care is knowing when you need help and how to find it. Help can be from community resources, family and friends, or professionals. Most important is that you do not wait until you are hanging at the end of your rope before you get help. Do not wait until you are overwhelmed or exhausted, or your health fails. Reaching out for help, when needed, is a sign of personal strength.'); ?></li>
    <li><?php echo t('Set goals and work toward them - Be realistic in the goals that you set and take steps toward reaching those goals. Seek solutions to the problems that you experience. Changes do not need to be major to make a significant difference. In summary, self-care means that you seek ways to take better care of yourself. As a caregiver, you do not just survive. You thrive!'); ?></li>
    </ul>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 6 -->
    <div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Managing Self-Care (continued)'); ?></h2>
    <hr />
    <div>
    <p>Ask yourself the following questions about your caregiving:</p>
    <p>
    <input type="checkbox" name="Yes" id="Yes">
    <label for="Yes">Yes</label>
    <input type="checkbox" name="No" id="No">
    <label for="No"> No</label>
    | Do you ever find yourself trying "to do it all?&quot;</p>
    <p>
    <input type="checkbox" name="Yes2" id="Yes2">
    <label for="Yes2">Yes</label>
    <input type="checkbox" name="No2" id="No2">
    <label for="No2"> No</label>
    | Do you ever say to yourself "I should be able to ... ," "I can never. .. ," or similar statements?</p>
    <p>
    <input type="checkbox" name="Yes3" id="Yes3">
    <label for="Yes3">Yes</label>
    <input type="checkbox" name="No3" id="No3">
    <label for="No3"> No</label>
    | Do you ever ignore your feelings or find that they are overwhelming?</p>
    <p>
    <input type="checkbox" name="Yes4" id="Yes4">
    <label for="Yes4">Yes</label>
    <input type="checkbox" name="No4" id="No4">
    <label for="No4"> No</label>
    | Do you ever get frustrated because of something you can't change or someone who won't change?</p>
    <p>
    <input type="checkbox" name="Yes5" id="Yes5">
    <label for="Yes5">Yes</label>
    <input type="checkbox" name="No5" id="No5">
    <label for="No5"> No</label>
    | Do you resist seeking, asking for, or accepting help?</p>
    <p>
    <input type="checkbox" name="Yes6" id="Yes6">
    <label for="Yes6">Yes</label>
    <input type="checkbox" name="No6" id="No6">
    <label for="No6"> No</label>
    | Do you feel that your family or others just don't understand what you are going through as a caregiver?</p>
    <p>
    <input name="Submit" type="submit" id="Submit" onClick="MM_popupMsg('A \'Yes\' answer to any of these questions indicates an area of self-care you might want to work on.')" value="Submit">
    </p>
    </div>
    <p><?php echo t('Trying To Do It All'); ?></p>
    <p><?php echo t('One problem that caregivers frequently experience is trying to do it all and doing it all alone. Is it possible to do it all? The answer to the question can be both yes and no. It really depends on you. What is critical is how you define what it means to do it all and, whether or not your definition of doing it all includes taking care of yourself so that you thrive, and not just survive.'); ?></p>
    <p><?php echo t('To Maxine, the answer to the question "Is it possible to do it all?" was "no." She says, "Mother\'s needs are endless and no matter what I do, I can never make her happy." Yet, at the same time, Maxine was trying to do it all. Her mother\'s care dominated Maxine\'s life. Another caregiver, Maria, answered "yes" to the question, "Is it possible to do it all?" She explained that "All that needed to be done for my mother was done."'); ?></p>
    <p><?php echo t('A major difference between Maxine and Maria was the rules by which they operated. Maxine operated by the rule, "I must do everything for my mother." The rule had become, "I must help Mama at all costs." As a result, her relationships with other family members suffered and Maxine found herself becoming increasingly resentful. Maxine\'s feelings of wanting to do everything is legitimate, but the actions associated with her feelings usually are impossible to carry out.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 7 -->
    <div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Managing Self-Care (continued)'); ?></h2>
    <hr />
    <p><?php echo t('As a result, Maxine experiences feelings of failure and lack of success. Maria was more realistic. She recognized that the things she wanted to be done whether they were her desires, her mother\'s desires, or the desires of others-were not the same as the things that needed to be done. Maria\'s goal was to make her mother as comfortable as possible, without sacrificing herself and the other important relationships in her life. She also got help from family and a community agency in meeting her mother\'s needs. Maria said:'); ?></p>
    <p><?php echo t('To some degree I recognized that caregiving was like a job and my goal was to find the best way to get the job done. A friend also told me that doing any job well-including the job of caregiving requires four things:'); ?></p>
    <ol>
    <li><?php echo t('Recognizing you can not do everything yourself-you work with others.'); ?></li>
    <li><?php echo t('Taking daily breaks.'); ?></li>
    <li><?php echo t('Taking vacations to renew oneself.'); ?></li>
    <li><?php echo t('Being realistic about what you can do...'); ?></li>
    </ol>
    <p><?php echo t('There was another difference between Maxine and Maria. Maxine felt it was selfish to think of herself. Maria, on the other hand, viewed that if she was going to be there for the long haul, she must take care of herself, and make sure that she had pleasurable moments in her life.'); ?></p>
    <p><?php echo t('As a caregiver, you are more likely to "be there" for your family member who needs your care and to be a more loving and patient caregiver when you meet some of your own needs. It is important to "fill your own cup" and not allow it to "run dry." It is not being selfish to focus on your own needs and desires when you are a caregiver to a family member who has a chronic ·or progressive illness. It is important to ask yourself, "If my health deteriorates, or I die, what will happen to the person I provide care for? If I get emotionally drained, become deprived of sleep, or become isolated because I am trying to do it all, how loving am I likely to be to my family member?"'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 8 -->
    <div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Managing Self-Care (continued)'); ?></h2>
    <hr />
    <p><?php echo t('Taking Time for Yourself'); ?></p>
    <p><?php echo t('Do you value yourself and your personal needs? What do you do for personal renewal? Do you save some time for yourself out of each day? Do you take occasional extended breaks? Or are you so involved with caregiving tasks that you have little or no time for yourself?'); ?></p>
    <p><?php echo t('What activities do you enjoy? What would you like to do that would give you a lift? When was the last time you gave yourself a treat?'); ?></p>
    <p><?php echo t('Breaks in caregiving are a must. They are as important to health as diet, sleep, rest, and exercise. It is important not to lose sight of your personal needs and interests. Studies show that sacrificing yourself in the care of another and removing pleasurable events from your life can lead to emotional exhaustion, depression, and physical illness. You have a right-even a responsibility-to take some time away from caregiving.'); ?></p>
    <p><?php echo t('Regular breaks from the tasks of caregiving are essential. Decide on the time, date, and activity-then follow through. Breaks do not have to be long to make a positive difference. It is important to plan some time for yourself in every day, even if that time is only for 15 minutes or half an hour. Most important is to do something that "fills your cup" and helps you to feel better and thrive. If you have difficulty taking breaks for yourself, consider taking them for your family member. Care receivers also benefit from caregivers getting breaks.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 9 -->
    <div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Setting Goals'); ?></h2>
    <hr />
    <p><?php echo t('An important tool in taking care of yourself is setting goals. A goal is something you would like to accomplish in the next three to six months: What would you like to do to take better care of yourself and to help yourself to thrive? This might be to get a break from caregiving for a week, get help with caregiving tasks, be able to walk three miles, or quit feeling guilty.'); ?></p>
    <p><?php echo t('Goals often are difficult to accomplish because they may seem like dreams or they may be overwhelming. As a result, we may not even try to accomplish them or we may give up shortly after we get started. We will address this problem shortly.'); ?></p>
    <p><?php echo t('For now, take a moment and write at least 3 goals on the Forum. Put an asterisk (*) next to the goal you would like to work on first. After identifying a goal, the first step is to brainstorm all of the different things you might do to reach your goal. Identify and write down all possible options on the Forum as a separate posting.'); ?></p>
    <p><?php echo t('The second step is to evaluate the options you have identified. Which options seem like possibilities to you? It is important not to assume that an option is unworkable or does not exist until you have thoroughly investigated it or given it a try. Assumptions are major self-care enemies. Put an asterisk (*) next to two or three options you would like to try. Select one to try. The third step is to turn your option into a short-term plan, which we call making an action plan.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 10 -->
    <div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Making Action Plans'); ?></h2>
    <hr />
    <p><?php echo t('An action plan is a specific action that you are confident you can accomplish within the next week. It is an agreement or contract with yourself.'); ?></p>
    <p><?php echo t('Action plans are one of your most important self-care tools. An action. plan is a step toward reaching your long-term goal. It is to be something you want to do. It is not to be something you feel you should do, have to do, or need to do. The intent of making an action plan is to help you to feel better and to take better care of yourself. Remember, an action plan is a "want to do." Here are the five steps for making an action plan: '); ?></p>
    <ul>
    <li><?php echo t('Decide what you want to do.'); ?></li>
    <li><?php echo t('Make your plan behavior-specific.'); ?></li>
    <li><?php echo t('Make a specific plan.'); ?></li>
    <li><?php echo t('Determine your confidence level.'); ?></li>
    <li><?php echo t('Write down your action plan.'); ?></li>
    </ul>
    <p><?php echo t('Decide What You Want To Do'); ?></p>
    <p><?php echo t('Think about what is realistic for you to accomplish within the next week. It is important that an action plan is reachable; otherwise, you are likely to experience frustration. An action plan is to help you experience success-not frustration, increased stress, or failure. An action plan starts with the words, "I will ... " If you find yourself saying "I will try to ... ," "I have to ... ," or "I should ... ," then re-examine your action plan. It probably is not something that you truly want to do.'); ?></p>
    <p><?php echo t('Make Your Plan Behavior-Specific'); ?></p>
    <p><?php echo t('The more specific your action plan, the greater your chances of accomplishing it. For example, "taking better care of myself" is not a specific behavior. However, making an appointment for a physical check-up, walking three times a week, getting a massage on Thursday afternoon, or asking someone to stay with your family member for one morning are all specific behaviors. "I will relax" also is not a specific behavior; however, reading a book, listening to your favorite music, or puttering in the garden are specific behaviors.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 11 -->
    <div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Making Action Plans (continued)'); ?></h2>
    <hr />
    <p><?php echo t('Make a Specific Plan'); ?></p>
    <p><?php echo t('Making a specific plan is often difficult, yet it is the most important part of making an action plan. A specific plan answers these four questions:'); ?></p>
    <ol>
    <li><?php echo t('What are you going to do? - Examples: I will read (book name) for pleasure. Or, I will walk.'); ?></li>
    <li><?php echo t('How much will you do? - Examples: Will you read one chapter or will you read for a half hour? Will you walk two blocks or for 20 minutes?'); ?></li>
    <li><?php echo t('When will you do this? Examples: Will you read the first thing in the morning when you awaken, before you go to bed, when the care receiver is sleeping, or ... ? If your plan is to walk, when during the day will you do it?'); ?></li>
    <li><?php echo t('How often will you do this activity? Example: Three times a week on Monday, Wednesday, and Friday.'); ?></li>
    </ol>
    <p><?php echo t('A common mistake is to make an action plan that is unreachable within the time frame. For example, if you plan to do something every day, you might fail. Caregiving, and life in general, has its surprises. Although well-intentioned, it is often not possible to do something every day. It is better to plan to do something once or twice a week and exceed your action plan than to plan to do something every day and fail because you only did it six days, rather than seven. Remember, an action plan is meant to help you to take better care of yourself and to experience success. The last thing you need is additional pressure, disappointment, and stress.'); ?></p>
    <p><?php echo t('Here are two recommendations for writing an action plan that can help you achieve success.'); ?></p>
    <p><?php echo t('Start where you are or start slowly. If there is a book you have been wanting to read, but just have not found the time, it may not be realistic to expect to read the entire book in the next week. Instead, try reading for a half hour twice during the week If you have not been physically active, it may be unrealistic to make an action plan· to start walking three miles. It is better to make your action plan for something that you believe you can accomplish. For example, make your plan for walking three blocks or a half mile, rather than three miles.'); ?></p>
    <p><?php echo t('Give yourself time off. We all have days when we do not feel like doing anything. That is the advantage of saying you will do something three days a week, rather than every day. That way, if you do not feel like doing something on one day, or something develops that prevents you from doing it, you can still achieve your action plan.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 12 -->
    <div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Making Action Plans (continued)'); ?></h2>
    <hr />
    <p><?php echo t('Determine Your Confidence Level'); ?></p>
    <p><?php echo t('Once you have made your action plan, ask yourself the following question: On a scale of 0 to 10, with 0 being not at all confident and 10 being totally confident, how confident am I that I can complete my action plan? If your answer is 7 or above, your action plan is probably realistic and reachable. However, if your answer is 6 or below, it is important to take another look at your action plan. Something probably needs to be adjusted.'); ?></p>
    <p><?php echo t('Ask yourself: What makes me uncertain about accomplishing my action plan? What problems do I foresee? Then, see if you either find a solution to the problems you identified or change your action plan to a new one in which you feel greater confidence.'); ?></p>
    <p><?php echo t('Write Down Your Action Plan'); ?></p>
    <p><?php echo t('Once you are satisfied with your action plan, write it down. Putting an action plan in writing helps us to remember, keep track of, and accomplish the agreement we have made with ourselves. Keep track of how you are doing. Write down the problems you encounter in carrying out your action plan. Check off activities as you accomplish them. If you made an adjustment in your action plan, make a note of what you did.'); ?></p>
    <p><?php echo t('At the end of the week, review your action plan. Ask yourself, "Am l nearer to accomplishing my goal?" "How do I feel about what I did?" What obstacles or problems, if any, did I encounter?" Taking stock is important. If you are having problems, this is the time to seek solutions.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 13 -->
    <div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Problem-Solving: A Solution-Seeking Approach'); ?></h2>
    <hr />
    <p><?php echo t('Sometimes you may find that your action plan is not workable. You may encounter unusual circumstances that week and need to give the plan a try for at least another week or you may need to make adjustments in your original plan. The following solution seeking approach can help you identify solutions to problems.'); ?></p>
    <ul>
    <li><?php echo t('Clearly identify the problem. This is the first and most important step in the solution-seeking approach. It also can be the most difficult step.'); ?></li>
    <li><?php echo t('List ideas to solve the problem. Family, friends, and others may be helpful in giving ideas. When you ask for ideas, just listen to each suggestion. It is best not to respond as to why an idea is or is not likely to work. Just focus on getting the ideas.'); ?></li>
    <li><?php echo t('Select one to try. When trying a new idea, give it a fair trial before deciding that it will not work.'); ?></li>
    <li><?php echo t('Assess the results. Ask yourself, "How well did what I chose work?" If all went well, congratulate yourself for finding a solution to the identified problem. If the first idea did not work, try another idea. Sometimes an idea just needs fine-tuning. It is important not to give up on an idea just because it did not work the first time. If you have difficulty finding a solution that works, utilize other resources. Share your problem with family, friends, and professionals and ask them for possible ideas. If you still find that suggested solutions do not work, you may need to accept that the problem is not solvable right now.'); ?></li>
    </ul>
    <p><?php echo t('Remember, just because there does not seem to be a workable solution right now does not mean that a problem can not be solved later, or that other problems can not be solved in the same way. It may be helpful to go back to the first step and consider if the problem needs to be redefined. For example, a caregiver had thought that her problem was "I am tired all of the time." However, the real problem was the caregiver\'s beliefs that "No one can care for John like I can," and "I have to do everything myself." As a result of these beliefs, the caregiver was doing everything herself and getting worn out. When she redefined the problem and focused on changing her beliefs and view of the caregiving situation, she found a workable solution. Sometimes, too, a problem may be easier to work on if you break it down into smaller problems.'); ?></p>
    <p><?php echo t('Most of the time if you follow these steps, you will find a solution that solves the problem. It is important to avoid making the mistake of jumping from step l to step 7 and thinking "nothing can be done."'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 14 -->
    <div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('Reward Yourself'); ?></h2>
    <hr />
    <p><?php echo t('Accomplishing action plans is often a reward in itself. However, it is also important to find healthy pleasures that add enjoyment to your life. Rewards do not have to be fancy or expensive or take a lot of time. One caregiver; for example, regularly goes to a movie or a play as a gift to herself from her husband. She said:'); ?></p>
    <p><?php echo t('When my husband was well, he would take me out Friday nights to a movie or a play at least twice a month. Because of his medical condition, he is no longer able to do so. Now a friend and I go to a movie or a play at least once a month. I consider this is a treat that my husband is still giving to me.'); ?></p>
    <p><?php echo t('Another caregiver said:'); ?></p>
    <p><?php echo t('Before my wife\'s illness, I would go golfing with my buddies on Saturday morning. When Carmela needed more care, I quit golfing. I now treat myself to Saturday golfing, while my daughter or a friend visits with Carmela. This gives me something to look forward to each week and I feel more alive when I return home. I am also finding I am more patient with Carmela. My daughter says I am always happier and calmer when I return home. So, I look at Saturday golfing as my treat not only to me, but also to Carmela.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 1 Slide 15 -->
    <div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
    <h2 class="flowers"><?php echo t('My Action Plan'); ?></h2>
    <hr />
    <p><?php echo t('In review, a caregiver who practices selfcare does the following:'); ?></p>
    <ol>
    <li><?php echo t('Sets goals.'); ?></li>
    <li><?php echo t('Identifies a variety of options for reaching a goal'); ?></li>
    <li><?php echo t('Makes an action plan toward accomplishing the goal.'); ?></li>
    <li><?php echo t('Carries out the action plan.'); ?></li>
    <li><?php echo t('Assesses how well the action plan is working.'); ?></li>
    <li><?php echo t('Makes adjustments, as necessary, in the action plan.'); ?></li>
    <li><?php echo t('Rewards himself or herself.'); ?></li>
    </ol>
    <p><?php echo t('Not all goals are achievable. Sometimes we must accept that what we want to do is not possible at this time, and we must let go of the idea. Be realistic about goals and do not dwell on what can not be done.'); ?></p>
    <p><?php echo t('Consider what is likely to happen to the caregiver who is driven by a goal to make her mother happy. Given her mother\'s personality, this goal may be completely unachievable. Such a goal creates a heavy burden and a caregiver is not likely to achieve it. However, an achievable goal might be to provide a pleasurable activity for her mother at least once a week perhaps taking her to get her hair done, visiting a friend, watching a comedy on television, or working together on a project her mother enjoys.'); ?></p>
    <p><?php echo t('Remember, what is important in caregiving is not just to survive, but to thrive!'); ?></p>
    <p><?php echo t('Action Plan Template'); ?> BUTTON HERE</p>
    </div>
    <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
    </div>
    <!-- need this final div here to close lesson-1 -->
  </div>
  <!-- Lesson 2 Slide 1 -->
  <div id="lesson-2">
  <div id="lesson-2-slide-1" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Reducing Personal Stress'); ?></h2>
  <hr />
  <p><?php echo t('This lesson contains two main sections:'); ?></p>
  <ul>
  <li><?php echo t('The Stress of Caregiving'); ?></li>
  <li><?php echo t('Steps to Maintain Health & Avoid Stress'); ?></li>
  </ul>
  <p><?php echo t('This lesson explores the stress of caregiving. It will help you identify and understand your particular stressors, challenges, and strengths. You can then plan strategies that help you cope, change, and reduce stress. A basic premise of this chapter is that each of us has a reservoir of strength. The challenge is to identify our strengths build on them.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
  </div>
  <!-- Lesson 2 Slide 2 -->
  <div id="lesson-2-slide-2" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('The Stress of Caregiving'); ?></h2>
  <hr />
  <p><?php echo t('There has been so much written about stress it has become a household word. Studies show that a certain amount of stress is helpful. It can challenge us to change and motivate us to do things we might not do otherwise. However, when the amount of stress overwhelms our ability to cope with it, we feel \'distress\' or \'burnout.\''); ?></p>
  <p><?php echo t('Distress is \'suffering of mind or body; severe physical or mental strain.\' As a caregiver, you no doubt have increased stress in your life, whether you are caring for a mother with early Parkinson\'s disease, who is still able to care for her personal needs, or a spouse who does not recognize you because of advanced Alzheimer\'s disease.'); ?></p>
  <p><?php echo t('Please think about the last time you were under distress.'); ?></p>
  <p><?php echo t('Each caregiving situation is unique. What is stressful for you may not be stressful for someone else. In his book The Survivor Personality, AI Siebert says, "there is no stress until you feel a strain." Since the feeling of stress is subjective and unique to each individual, it is difficult to define objectively. The stress you feel is not only the result of your caregiving situation, it is all of your perception of it. Your stress will increase or decrease depending on how you perceive your circumstances. And your perception will affect how you respond.'); ?></p>
  <p><?php echo t('Factors That Affect Stress'); ?></p>
  <p><?php echo t('Your level of stress is influenced by many factors, including:'); ?></p>
  <ul>
  <li><?php echo t('whether your caregiving is voluntary or not;'); ?></li>
  <li><?php echo t('your relationship with the care receiver;'); ?></li>
  <li><?php echo t('your coping abilities;'); ?></li>
  <li><?php echo t('your caregiving situation; and'); ?></li>
  <li><?php echo t('whether support is available.'); ?></li>
  </ul>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 3 -->
  <div id="lesson-2-slide-3" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('The Stress of Caregiving (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Whether your caregiving is voluntary or not - '); ?></p>
  <p><?php echo t('Many people become caregivers voluntarily. Others acquire the role because no one else is available. When you become a caregiver voluntarily, you are making a choice. However, if you "inherited" the job and feel you had no choice, the chances are greater for experiencing strain, distress, and resentment. Nancy became a caregiver because no one else was available.'); ?></p>
  <p><?php echo t('Nancy could not have been more surprised when the visiting nurse asked her if she was the primary caregiver for her mother in-law, Joan. Nancy was fond of Joan. She called and stopped by frequently to see how Joan was managing, but had not thought of herself as the primary caregiver. It was apparent that Joan\'s medical condition was worsening and she was becoming increasingly weak Nancy realized there were no other children or relatives available, so she agreed, although somewhat reluctantly, to be Joan\'s caregiver. Nancy felt anxious and uncertain about what it meant to be a primary caregiver and whether she had the necessary skills to perform the role.'); ?></p>
  <p><?php echo t('Luckily, Nancy and Joan had a good relationship and they were able to communicate openly, minimizing some of the potential for stress. You can not always think about a caregiving relationship in advance, but if you can, it has greater potential for success.'); ?></p>
  <p><?php echo t('Your relationship with the care receiver - '); ?></p>
  <p><?php echo t('If your relationship with the care receiver has been difficult, becoming a caregiver is more of a challenge. If the care receiver has always been demanding and controlling, you will probably feel more stress, anger, and resentment. Sometimes people are caregiving with the hope of healing a relationship. The healing may or may not happen. If healing does not happen, the caregiver may feel regret, depressed, and discouraged. A professional counselor, spiritual advisor, or trusted friend can help deal with such feelings and emotions.'); ?></p>
  <p><?php echo t('Your coping abilities - '); ?></p>
  <p><?php echo t('How you have coped with stress in the past predicts how you will cope now. Did you find constructive ways to manage your stress? Perhaps you were able to find time to exercise regularly and generally take care of yourself. Or did you rely on alcohol or drugs to help you cope? Sometimes people rely on medications and alcohol in times of stress, which only makes matters worse. It is important to identify your current coping strengths and build on them. Learning new coping skills also will help make your caregiving situation less stressful.'); ?> 
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 4 -->
  <div id="lesson-2-slide-4" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('The Stress of Caregiving (continued)'); ?></h2>
  <hr />
  <p><?php echo t('The caregiving situation - '); ?></p>
  <p><?php echo t('What does your caregiving situation require of you? Does it require 24-hour-aday availability? Or do you just need to make an occasional telephone call to check on the person? What disease does the care receiver have? Does he have a mental or physical disability, or both? Certain caregiving situations are more stressful than others. For example, caring for someone who has a dementia such as Alzheimer\'s disease is often more stressful than caring for someone with a physical limitation. Also, stress tends to be highest when:'); ?></p>
  <ul>
  <li><?php echo t('the caregiving situation continues for a long time.'); ?></li>
  <li><?php echo t('the care receiver\'s needs gradually increase.'); ?></li>
  <li><?php echo t('caregivers feel they have limited or no support.'); ?></li>
  <li><?php echo t('caregivers have their own health/physical problems.'); ?></li>
  </ul>
  <p><?php echo t('Whether support is available - '); ?></p>
  <p><?php echo t('Caregivers who feel isolated and without adequate support usually experience a higher level of stress. Support may be lacking for several reasons:'); ?></p>
  <ul>
  <li><?php echo t('The caregiver may resist accepting help, even when he or she needs it.'); ?></li>
  <li><?php echo t('Others may be willing to help but do not offer because they are uncomfortable around the ill person, frightened of the illness, or do not know what they can do.'); ?></li>
  <li><?php echo t('Others do not want to interfere, especially if the caregiver seems to have everything under control and has refused help in the past.'); ?></li>
  </ul>
  <p><?php echo t('Caregiver stress is influenced by many factors, including the need to adapt to ongoing changes and losses caused by the care receiver\'s illness. These changes cause you to redefine your life. What was normal has changed. You are living with a new reality.'); ?> 
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 5 -->
  <div id="lesson-2-slide-5" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('The Stress of Caregiving (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Signs of Stress'); ?></p>
  <p><?php echo t('Here is a checklist of some common signs of stress: '); ?>
  <table width="95%" border="3">
  <tr>
  <td>Physical</td>
  <td>Mental/Emotional</td>
  <td>Behavioral </td>
  </tr>
  <tr>
  <td><p>
  <input type="checkbox" name="checkbox" id="checkbox">
  Headache</p>
  <p>
  <input type="checkbox" name="checkbox2" id="checkbox2">
  Muscle tension and aches</p>
  <p>
  <input type="checkbox" name="checkbox3" id="checkbox3">
  Nausea, diarrhea, heartburn</p>
  <p>
  <input type="checkbox" name="checkbox4" id="checkbox4">
  Rapid heartbeat, palpitations</p>
  <p>
  <input type="checkbox" name="checkbox5" id="checkbox5">
  Shortness of breath, dizziness</p>
  <p>
  <input type="checkbox" name="checkbox6" id="checkbox6">
  Constant fatigue, energy loss</p>
  <p>
  <input type="checkbox" name="checkbox7" id="checkbox7">
  Change in appetite</p>
  <p>
  <input type="checkbox" name="checkbox8" id="checkbox8">
  Weight gain or loss</p>
  <p>
  <input type="checkbox" name="checkbox9" id="checkbox9">
  Frequent illnesses</p></td>
  <td><p>
  <input type="checkbox" name="checkbox10" id="checkbox10">
  Anxiety</p>
  <p>
  <input type="checkbox" name="checkbox11" id="checkbox11">
  Constant worrying </p>
  <p>
  <input type="checkbox" name="checkbox12" id="checkbox12">
  Depression, sadness</p>
  <p>
  <input type="checkbox" name="checkbox13" id="checkbox13">
  Inability to concentrate</p>
  <p>
  <input type="checkbox" name="checkbox14" id="checkbox14">
  Moodiness, irritability</p>
  <p>
  <input type="checkbox" name="checkbox15" id="checkbox15">
  Restlessness, agitation</p>
  <p>
  <input type="checkbox" name="checkbox16" id="checkbox16">
  Feeling overwhelmed </p>
  <p>
  <input type="checkbox" name="checkbox17" id="checkbox17">
  Racing thoughts</p>
  <p>
  <input type="checkbox" name="checkbox18" id="checkbox18">
  Forgetfulness, confusion</p></td>
  <td><p>
  <input type="checkbox" name="checkbox19" id="checkbox19">
  Sleeping too much or too little</p>
  <p>
  <input type="checkbox" name="checkbox20" id="checkbox20">
  Short temper </p>
  <p>
  <input type="checkbox" name="checkbox21" id="checkbox21">
  Difficulty making decisions</p>
  <p>
  <input type="checkbox" name="checkbox22" id="checkbox22">
  Poor nutrition</p>
  <p>
  <input type="checkbox" name="checkbox23" id="checkbox23">
  Too much smoking, drinking</p>
  <p>
  <input type="checkbox" name="checkbox24" id="checkbox24">
  Tooth grinding</p>
  <p>
  <input type="checkbox" name="checkbox25" id="checkbox25">
  Neglecting responsibilities</p>
  <p>
  <input type="checkbox" name="checkbox26" id="checkbox26">
  Social isolation</p>
  <p>
  <input type="checkbox" name="checkbox27" id="checkbox27">
  Nervous habits fidgeting</p></td>
  </tr>
  </table>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 6 -->
  <div id="lesson-2-slide-6" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress'); ?></h2>
  <hr />
  <p><?php echo t('Whatever causes stress in your life, too much of it can lower your resistance to disease and lead to "burnout." Current research shows that there is a _close connection between stress and health. Unrelieved stress is on,e of many factors that cause illness. Research also shows that thoughts and emotions affect the immune system, which is the first line of defense against disease. It is possible to strengthen the immune system by reducing stress. The following four steps will help you maintain your health and avoid distress:'); ?></p>
  <ol>
  <li><?php echo t('Recognize your warning signs of stress.'); ?></li>
  <li><?php echo t('Identify your sources of stress.'); ?></li>
  <li><?php echo t('Identify what you can and cannot change.'); ?></li>
  <li><?php echo t('Take action to manage your stress.'); ?></li>
  </ol>
  <p><?php echo t'(Each of these steps will be discussed in detail.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 7 -->
  <div id="lesson-2-slide-6" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Step 1: Recognize Your Warning Signs of Stress -') ;?></p>
  <p><?php echo t('The first step in managing stress is to be aware of how it affects you. What are your warning signs and symptoms of stress? The following are signs that may occur when you experience an unusual amount of stress. Answering these questions can help you identify your own warning signs. What is usually your earliest sign of stress? It is important to recognize stress early and do something about it, before it causes you serious problems. For one caregiver, the early sign might be increased irritability. For another, it might be lying awake for hours before falling asleep. For another, it might be fatigue and a lack of energy.'); ?></p>
  <p><?php echo t('Sometimes, too, when we are involved in a situation, we may not listen to our early warning signs, but they are voiced in the words of others: "You look so tired," "You get upset so easily lately," "Why are you snapping at me?" If you hear such statements, it is a "red light" warning sign. Just as a flashing red light on your car\'s dashboard warns you that something is wrong with your car, we also display warning signals. What happens if we ignore the early red flashing light on the car\'s dashboard? What happens if we ignore our personal early warning signals?'); ?></p>
  <p><?php echo t('Do you listen to your early warning signals? What are they? And what do you do about them? Warning signs usually mean we need to stop, valuate what is happening, and make some changes. The earlier warning signals are recognized, the greater the chance of avoiding or reducing the destructive effects of stress.'); ?></p>
  <div class="question">
  <p>
  <input type="checkbox" name="Yes" id="Yes">
  <label for="Yes">Yes</label>
  <input type="checkbox" name="No" id="No">
  <label for="No">No</label>
  | Do you feel a loss of energy or zest for life?</p>
  <p>
  <input type="checkbox" name="Yes2" id="Yes2">
  <label for="Yes2">Yes</label>
  <input type="checkbox" name="No2" id="No2">
  <label for="No2">No</label>
  | Do you feel tired or exhausted much of the time?</p>
  <p>
  <input type="checkbox" name="Yes3" id="Yes3">
  <label for="Yes3">Yes</label>
  <input type="checkbox" name="No3" id="No3">
  <label for="No3">No</label>
  | Do you feel out of control, exhibiting uncharacteristic emotions or actions?</p>
  <p>
  <input type="checkbox" name="Yes4" id="Yes4">
  <label for="Yes4">Yes</label>
  <input type="checkbox" name="No4" id="No4">
  <label for="No4">No</label>
  | Do you feel tense, nervous, or anxious much of the time?</p>
  <p>
  <input type="checkbox" name="Yes5" id="Yes5">
  <label for="Yes5">Yes</label>
  <input type="checkbox" name="No5" id="No5">
  <label for="No5">No</label>
  | Do you lack interest in people or things that were formerly pleasurable?</p>
  <p>
  <input type="checkbox" name="Yes6" id="Yes6">
  <label for="Yes6">Yes</label>
  <input type="checkbox" name="No6" id="No6">
  <label for="No6">No</label>
  | Are you becoming increasingly isolated?</p>
  <p>
  <input type="checkbox" name="Yes7" id="Yes7">
  <label for="Yes7">Yes</label>
  <input type="checkbox" name="No7" id="No7">
  <label for="No7">No</label>
  | Are you consuming more sleeping pills, medicating, alcohol, caffeine, or
  cigarettes?</p>
  <p>
  <input type="checkbox" name="Yes8" id="Yes8">
  <label for="Yes8">Yes</label>
  <input type="checkbox" name="No8" id="No8">
  <label for="No8">No</label>
  | Are you having increased health problems: ie, high blood pressure headaches, ulcers, upset stomach, or other difficulties with digestion?</p>
  <p>
  <input type="checkbox" name="Yes14" id="Yes14">
  <label for="Yes14">Yes</label>
  <input type="checkbox" name="No14" id="No14">
  <label for="No14">No</label>
  | Do you have sleep problems, such as
  difficulty falling asleep at night,
  awakening early, or sleeping excessively?</p>
  <p>
  <input type="checkbox" name="Yes13" id="Yes13">
  <label for="Yes13">Yes</label>
  <input type="checkbox" name="No13" id="No13">
  <label for="No13">No</label>
  | Are you experiencing appetite changes?</p>
  <p>
  <input type="checkbox" name="Yes12" id="Yes12">
  <label for="Yes12">Yes</label>
  <input type="checkbox" name="No12" id="No12">
  <label for="No12">No</label>
  | Do you have problems with concentration
  or memory?</p>
  <p>
  <input type="checkbox" name="Yes11" id="Yes11">
  <label for="Yes11">Yes</label>
  <input type="checkbox" name="No11" id="No11">
  <label for="No11">No</label>
  | Are you increasingly irritable or
  impatient with others?</p>
  <p>
  <input type="checkbox" name="Yes10" id="Yes10">
  <label for="Yes10">Yes</label>
  <input type="checkbox" name="No10" id="No10">
  <label for="No10">No</label>
  | Do you have feelings of helplessness or
  hopelessness?</p>
  <p>
  <input type="checkbox" name="Yes9" id="Yes9">
  <label for="Yes9">Yes</label>
  <input type="checkbox" name="No9" id="No9">
  <label for="No9">No</label>
  | Are you abusing or neglecting to provide care to the care receiver?</p>
  <p>
  <input type="checkbox" name="Yes15">
  <label for="Yes15">Yes</label>
  <input type="checkbox" name="No15">
  <label for="No15">No</label>
  Do you have thoughts of suicide?</p>
  <p>
  <input name="button" type="submit" id="button" onClick="MM_popupMsg('A \&quot;yes\&quot; answer to even one or two of these questions can indicate stress that has become debilitating.')" value="Submit">
  </p>
  </div>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 8 -->
  <div id="lesson-2-slide-8" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Step 2: Identify Your Sources of Caregiving Stress -'); ?></p>
  <p><?php echo t('The second step in managing stress is to recognize what causes your stress. Not all stressors are the result of caregiving. Other sources can affect your ability to be a caregiver. The following questions include many common sources of stress. Thinking about these questions can help you recognize some of your own sources.'); ?></p>
  <ol>
  <li><?php echo t('Are you experiencing many demands on your time, energy, or money? What are they?'); ?></li>
  <li><?php echo t('Do you feel you have conflicting responsibilities? Which ones?'); ?></li>
  <li><?php echo t('Are there differences in expectations between your family, your boss, the care receiver, and yourself? What are they?'); ?></li>
  <li><?php echo t('Do you feel others do not understand the care receiver\'s mental or physical condition?'); ?></li>
  <li><?php echo t('Do you have difficulty meeting the care receiver\'s physical or emotional needs?'); ?></li>
  <li><?php echo t('Are you pressured by financial decisions and lack of resources?'); ?></li>
  <li><?php echo t('Do you feel a loss of freedom, to the point of feeling trapped?'); ?></li>
  <li><?php echo t('Is there disagreement among family members?'); ?></li>
  <li><?php echo t('Do you feel that other family members are not doing their share?'); ?></li>
  <li><?php echo t('Does the care receiver place unrealistic demands and expectations on you?'); ?></li>
  <li><?php echo t('Is there a lack of open communication between you and the care receiver?'); ?></li>
  <li><?php echo t('Do other family members have negative attitudes that create difficulty for you?'); ?></li>
  <li><?php echo t('Is it painful to watch the care receiver\'s condition get worse?'); ?></li>
  <li><?php echo t('Are there other problems with children, marriage, job, finances, or health? What are they?'); ?></li>
  </ol>
  <p><?php echo t('Consider your "yes" answers carefully. The sources of stress you have identified are indicators for change. Use the awareness you have gained in the first two steps to make helpful changes.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 9 -->
  <div id="lesson-2-slide-9" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('The following story is an example of a caregiver who recognized the source of her distress and made changes to better manage the situation.'); ?></p>
  <p><?php echo t('Ernestine was increasingly fatigued, irritable, and depressed with the responsibility of caring for her husband, Richard, who had Parkinson\'s disease. Richard\'s condition was steadily getting worse. He was bed-bound and needed help with many functions. Other family members had not offered to help, and Ernestine felt abandoned, alone, angry, and overwhelmed. A few friends and neighbors had offered to help but Ernestine refused. When she started having health problems, it became clear that something had to change. She had to have help.'); ?></p>
  <p><?php echo t('Because Ernestine had difficulty asking for help, she devised a simple plan that would give others an opportunity to help without having to be asked. She made a list of tasks she needed help with and posted it on the refrigerator. The list included such things as vacuuming the living room, grocery shopping, staying with Richard so she could go to church, weeding the garden, picking up audio books at the library, picking up medications at the pharmacy, and preparing food. When visitors offered to help, Ernestine referred them to the list, suggesting they choose a task that suited them. This proved to be a successful plan for everyone.'); ?></p>
  <p><?php echo t('It is important to identify the causes of your stress before they overwhelm you. Do not wait until you develop health problems, as Ernestine did. Many caregivers keep going until they become ill. You can only be an effective caregiver if you are healthy. Self-sacrifice to the point of illness benefits no one and is not required or recommended.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 10 -->
  <div id="lesson-2-slide-10" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Step 3: Identify What You Can and Cannot Change - '); ?></p>
  <p><?php echo t('A major challenge of caregiving is to not only survive, but to rebuild your life and thrive. This is possible once you know the sources and signs of your stress. Then you can determine those you can do something about and those that are beyond your control. Step three is to identify what you can and cannot change'); ?></p>
  <p><?php echo t('Identifying what you can change gives you a sense of control over events. However, it is not easy to determine what can and cannot be changed. Too often people try to change things they have no control over. For example, someone who focuses on trying to change another person usually ends up more frustrated. The only person you can change is yourself. You may be able to change a situation, how you respond to it, or your perception of it, but you can not change another person. It wastes valuable time and energy trying to change what is outside of your control. Some situations can not be changed. However, you may be able to manage them better if you change your outlook about a situation, or decide to \'roll with the punches.\''); ?></p>
  <p><?php echo t('The frustration and hopelessness that result from trying to change the unchangeable are self-defeating and can adversely affect a relationship, as in the case of Hal and Sue.'); ?></p>
  <p><?php echo t('Sue and Hal had been a socially active couple. Sue was diagnosed with early Parkinson\'s disease and gradually started backing out of social plans because she did not feel up to it. Since the beginning of the disease Sue has been on a roller coaster of having good days and bad days. Hal encourages Sue to go out when she does not feel like it, urging her to \'snap out of it.\' He wants things to remain as they were.'); ?></p>
  <p><?php echo t('Hal is frustrated in his attempts to change the effect of the disease on their lives. By not accepting Sue\'s feelings, he is adding stress to their relationship. But recently he has learned more about Parkinson\'s disease and is trying to be more realistic and flexible about what he can and cannot change. Flexibility is crucial. A Japanese saying is:'); ?></p>
  <p><?php echo t('\'In a storm, it is the bamboo, the flexible tree, that can bend with the wind and survive. The rigid tree that resists the wind falls, victim of its own insistence on control.\''); ?></p>
  <p><?php echo t('Bending with the wind is crucial to surviving the winds of change, including those involved in caregiving. At times, both you and the care receiver may feel a loss of control over your lives. While feeling in control is important, sometimes it can be me a problem because the more we try to control, the less control we seem to have. Being flexible can help us keep a positive attitude, despite hardships.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 11 -->
  <div id="lesson-2-slide-11" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Use the following guidelines to look at your situation and to determine what can and cannot be changed:'); ?></p>
  <ol>
  <li><?php echo t('Accept the reality of your caregiving situation.'); ?></li>
  <li><?php echo t('Educate yourself about the care receiver\'s disease.'); ?></li>
  <li><?php echo t('Identify unrealistic expectations, especially your own.'); ?></li>
  <li><?php echo t('Seek and accept support.'); ?></li>
  <li><?php echo t('Identify what you still have, rather than focus on what is lost.'); ?></li>
  <li><?php echo t('Let go of what cannot be changed.'); ?></li>
  </ol>
  <p><?php echo t('Accept the reality of your caregiving situation'); ?></p>
  <p><?php echo t('When making changes it is necessary, but not always easy; to accept reality. We often deny things that hurt, and that can keep us from seeing a situation as it really is. Jane heard the doctor tell Joe that he had a serious illness. He also told Joe he would need more rest and help with certain daily activities. Still, Jane found herself feeling annoyed when Joe took frequent naps, especially since she was taking on more responsibility for managing things at home. It took time for Jane to stop denying, and start accepting, the full impact of the disease. It was then that she was able to see realistically what could and could not be changed.'); ?></p>
  <p><?php echo t('Jane is coping in a more adaptive way. However, Joe\'s mother denied the seriousness of the disease long after Jane came to terms with it. Family members may take different lengths of time to accept reality, which can add to the stress of caregiving.'); ?></p>
  <p><?php echo t('Educate yourself about the care receiver\'s disease'); ?></p>
  <p><?php echo t('You will be better able to identify what you can and cannot change when you understand the disease. For example, without knowledge about the communication abilities of someone with Alzheimer\'s disease, you may try to reason with the person or expect him to tell someone something you consider easy to remember. This will probably frustrate both of you. There are many sources of information about specific diseases, including your personal physician, medical libraries, and associations related to specific diseases, such as Alzheimer's and Parkinson's disease. If you have access to a computer that is linked to the Internet, you can find a wealth of current information on diseases and disease-related associations.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 12 -->
  <div id="lesson-2-slide-12" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Identify unrealistic expectations, especially your own'); ?></p>
  <p><?php echo t('You can make changes successfully only when your expectations are realistic. How realistic are yours? Do you often feel anxious because you expect more of yourself than you can achieve? Many caregivers listen only to the \'shoulds\' they have been raised with. Women, especially, often believe they "should" be able to do everything themselves, and when that is not possible, they feel guilty or depressed. If you have unrealistic expectations of yourself, then your expectations of what can be changed probably will be unrealistic also. The following story is an example of a caregiver, Rosa, who with her husband, Dean, made constructive changes in what was a difficult, stressful situation.'); ?></p>
  <p><?php echo t('Rosa was devastated when Dean, her husband of 40 years, suffered a sudden, severe stroke that left him partially paralyzed on one side of his body and unable to speak. The stroke was a shock. Rosa\'s initial response was to become overly protective and do everything for Dean. She was afraid to leave him alone for fear something terrible would happen. Before the stroke, Rosa and Dean had been making retirement plans, which included extensive travel. Those plans were forsaken as they both felt increasingly overwhelmed, fearful, isolated, and depressed. Rosa became extremely fatigued and irritable as Dean became increasingly dependent on her. The visiting nurse talked with them about what Dean could and could not do for himself. She emphasized the importance of Dean maintaining as much independence as possible. It became apparent that Dean could do many things for himself, including writing letters to family and friends. Dean felt better as he became more independent. Rosa was able to be more realistic in her expectations. She realized that Dean\'s dependence on her was detrimental to their relationship.'); ?></p>
  <p><?php echo t('As Rosa and Dean gradually adapted to living with the stroke, they became less fearful and more hopeful. They began looking at the quality of their remaining life together. They wanted, more than anything, to travel together and decided to take a short trip to see how it would go. The first trip was successful and they felt encouraged to travel more. Rosa found a travel agent who helped them plan trips that accommodated Dean\'s disabilities. They enjoyed several trips before Dean\'s death 12 years later. Rosa and Dean responded to this challenge by gaining an understanding of the disease, accepting reality; setting realistic expectations, and changing what could be changed.'); ?></p>
  <p><?php echo t('Seek and accept support'); ?></p>
  <p><?php echo t('Many caregivers find it difficult to ask for help. Rosa initially refused help from friends and neighbors. She did everything herself until she started feeling distressed. The expectations she had for herself were overwhelming and unrealistic. It was not until she began seeking support from the visiting nurse, travel agent, and others that she was able to find a way to make changes. Often you can make changes only with the help of others. Seeking and accepting support may be the single most important factor in making constructive changes.'); ?></p>
  <p><?php echo t('Identify what you still have, rather than focus on what is lost'); ?></p>
  <p><?php echo t('When Rosa and Dean decided to look for "what remained" in their situation, they hoped that they still had quality in their life together. They looked at what they still had, rather than focusing on what had been lost, and they made changes that were still possible.'); ?></p>
  <p><?php echo t('They found an unexpected \'gift\' as they made changes and adapted to the illness. Rosa said, \'I never would have asked for the stroke to happen, but it was because of it that Dean and I learned what love was all about. I am a different person than I was. I am more understanding, patient, caring, and sensitive to the pain of others. Many caregivers, as they learn more about themselves, experience personal growth. That is the \'gift\' that can often be found in difficult times.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 13 -->
  <div id="lesson-2-slide-13" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Let go of what cannot be changed'); ?></p>
  <p><?php echo t('It is natural to want to hold on to things as they were. But letting go of what you cannot change is accepting the situation as it is. It releases you from the need to control what you cannot change. Letting go is a way to cooperate with the inevitable. It releases new energy for accepting reality and seeing new possibilities. Sam is a prime example of someone who is learning to let go.'); ?></p>
  <p><?php echo t('Sam had always been an intense athletic competitor, and sports had been the driving force in his life. At age 45 he had a slight stroke which left him mildly affected. Sam's problem wasn't that he had a stroke; the problem was that he could not let go of wishing that he had not had one. He continuously wanted things to be as they had been. This made him feel angry and frustrated. Fortunately, Sam reached a point of wanting to learn to live with the stroke and to let go of wanting life to be as it had been before.'); ?></p>
  <p><?php echo t('Sam was unable to live in the present until he let go of his desire for things to be as they were. The "if onlys" and "what ifs" were a source of suffering. When Sam let go, he learned to live with the stroke and made changes that helped him develop a satisfying life. What Sam learned also applies to caregivers, as shown in the case of Marsha and Bud.'); ?></p>
  <p><?php echo t('Marsha was the caregiver for her husband, Bud, who had Parkinson\'s disease. Buds condition worsened and he and Marsha were unable to do any of the things they had done in the past. Marsha continually wanted things to be the way they had been. "If only" became her constant thought: "If only Bud could dress himself," "If only we could go dancing like we used to," "If only Bud had more energy," "If only he could still drive us places." Marsha\'s unhappiness caused a strain in their relationship. It was only when she and Bud were having a good time playing cards with friends one day that she realized how much valuable time she was wasting by constantly wanting things to be different. She began to let go of "if only" and to accept "what is." In letting go, she found acceptance and peace of mind.'); ?></p>
  <p><?php echo t('As you reflect on your challenges as a caregiver, consider these questions. What can I change? What must I accept? What can I improve?'); ?></p>
  <p><?php echo t('Step 4: Take Action to Manage Your Stress'); ?></p>
  <p><?php echo t('The fourth step points the way for you to manage and reduce your stress. There are many different tools for managing stress. But you must find what is most effective for you. Proven ways to manage and reduce stress include:'); ?></p>
  <ul>
  <li><?php echo t('managing your thoughts, beliefs, and perceptions.'); ?></li>
  <li><?php echo t('practicing self-care.'); ?></li>
  <li><?php echo t('getting social support.'); ?></li>
  <li><?php echo t('using techniques that lower stress.'); ?></li>
  <li><?php echo t('developing plans of action.'); ?></li>
  <li><?php echo t('finding hope and meaning.'); ?></li>
  </ul>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 14 -->
  <div id="lesson-2-slide-14" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Managing your thoughts, beliefs, and perceptions'); ?></p>
  <p><?php echo t('Thoughts and beliefs are the foundation of experience. They are not only reactions to events but our thoughts and beliefs can also influence events. What we think and believe affects what happens. Managing our thoughts means we have control over how we view things. As a caregiver, there may be times when the only thing you can change is how you view a situation. There are several tools for managing thoughts, beliefs, and perceptions. Two that can be helpful are reframing and self-talk.'); ?></p>
  <p><?php echo t('Reframing - '); ?></p>
  <p><?php echo t('Your frame of reference is the window through which you view the world. It gives meaning to your world. You see things one way, but someone else sees the same circumstances differently. Situations become more stressful when you view them in a negative way. Reframing is learning to look at things in a different way, for example, finding something positive about a difficult situation. Some examples of reframing include:'); ?></p>
  <ul>
  <li><?php echo t('A caregiver who views the behavior of someone with Alzheimer\'s disease as "purposefully behaving that way to get to me" versus taking the view that "the behavior is a part of the disease."'); ?></li>
  <li><?php echo t('A caregiver who is angry at her brother for helping only once a month versus taking the view that "any help, no matter how little, will lighten my load."'); ?></li>
  <li><?php echo t('A caregiver who puts the situation into a religious or philosophical framework, such as "This is happening because God is angry with me" versus taking the view that "God is giving me an opportunity to learn and grow."'); ?></li>
  </ul>
  <p><?php echo t('People who are able to reframe difficult situations generally feel less burden and more in control. Feeling a greater degree of control often leads to acting in control. Clara is a good example. Clara had difficulty taking breaks from caregiving. Before becoming a caregiver, she had worked in a demanding position and had realized the importance of taking weekends off and vacations to refresh herself and cope better with work demands. When she started to view caregiving as a job, it made a difference in how she viewed breaks in caregiving. They became not only more acceptable, but a necessity.'); ?></p>
  <p><?php echo t('Julie also found that reframing a difficult situation reduced her stress and helped her act in new ways. Julie felt resentful and burdened with the increasing demands of caring for her mother. She had no help, feeling that as a good, dutiful daughter she should do it all. A social worker told her about available resources and suggested she think of herself as a personal care manager as a way to find help in caregiving. Julie gained a sense of control over the situation once she realized she didn't have to provide all of the care herself, but could oversee her mother's care.'); ?></p>
  <p><?php echo t('As a caregiver, you may feel overwhelmed and burned out, especially if you are assuming responsibility for most of the caregiving. Changing your perception of your role from a caregiver to care manager is a way of reframing. As a care manager you still get the job done, but you do not have to provide all the care yourself. The role of care manager means that you:'); ?></p>
  <ul>
  <li><?php echo t('coordinate and supervise another\'s care needs. This includes using available support.'); ?></li>
  <li><?php echo t('are aware of available community resources.'); ?></li>
  <li><?php echo t('plan and prioritize care.'); ?></li>
  <li><?php echo t('understand the disease of the care receiver and what to expect.'); ?></li>
  <li><?php echo t('participate as an equal partner with other health care professionals.'); ?></li>
  <li><?php echo t('are knowledgeable about the health care system.'); ?></li>
  </ul>
  <p><?php echo t('As a care manager you assume an active role and reach beyond giving hands-on care, to planning and coordinating care and using available resources. You will feel an increased sense of mastery as a successful care manager.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 15 -->
  <div id="lesson-2-slide-15" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Self-talk -'); ?></p>
  <p><?php echo t('Most stress management courses include learning how to use self-talk to promote health. Self-talk is what we say to ourselves. As Ralph Waldo Emerson said, "A man is what he thinks about all day long." What do you think about all day long? What do you say to yourself? Is especially important to notice your self-talk when you suffer setbacks and when you feel anxious, angry, discouraged, or distressed. Negative self-talk statements often begin with the following phrases:'); ?></p>
  <ul>
  <li><?php echo t('I just can not do...'); ?></li>
  <li><?php echo t('If only I could (or did not) do...'); ?></li>
  <li><?php echo t('I could never...'); ?></li>
  <li><?php echo t('I should not have done...'); ?></li>
  <li><?php echo t('I should have...'); ?></li>
  </ul>
  <p><?php echo t('Negative self-talk is defeating. It can lead to depression and a sense of failure, because with negative self-talk we tend to focus on:'); ?></p>
  <ul>
  <li><?php echo t('what we did not do versus what we have done.'); ?></li>
  <li><?php echo t('what we cant do versus what we can do.'); ?></li>
  <li><?php echo t('Our mistakes and failures versus our successes.'); ?></li>
  </ul>
  <p><?php echo t('You want your self-talk to work for you, not against you. If your self-talk is negative or unhelpful, challenge it. Learn to change the negative things you say to yourself into positive statements, such as affirmations.'); ?></p>
  <p>
  <?php ecoh t('Affirmations are positive, supportive statements that counteract the effects of negative thinking. When positive statements are repeated several times a day, they begin to replace negative thoughts. This helps to change one\'s attitude, promote relaxation, and reduce stress. Karen\'s story is an example of changing negative self-talk to positive self-talk with the use of affirmations:'); ?>
  </p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 16 -->
  <div id="lesson-2-slide-16" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Karen felt angry and discouraged when her mother did not eat the tasty, nutritious meals she prepared for her. She didn't accept the fact that her mother\'s lack of appetite was caused by the illness. Karen constantly told herself, "No matter what I cook, it is never good enough for mother."'); ?></p>
  <p><?php echo t('This is an example of negative self-talk. Karen became aware that she often thought she was not doing good enough, especially in caring for her mother. These thoughts made her feel like a failure. With determination, patience, and practice, you can change your self-talk from negative to positive. The following steps lead to change:'); ?></p>
  <ul>
  <li><?php echo t('Identify your negative thoughts. Listen to what you say to yourself, especially during difficult times.'); ?></li>
  <li><?php echo t('Write your negative thoughts down on paper. This helps to identify and clarify them.'); ?></li>
  <li><?php echo t('Challenge your negative thoughts. Give them a good argument.'); ?></li>
  <li><?php echo t('Write a simple, positive statement for each thought you want to change.'); ?></li>
  <li><?php echo t('Memorize and repeat the chosen statements. This helps establish the habit of positive self-talk.'); ?></li>
  <li><?php echo t('Put your written-statements where you see them frequently. This is a helpful visual reminder.'); ?></li>
  </ul>
  <p><?php echo t('Karen chose the affirmation , "I am preparing nutritious food. That is enough." In fact, the statements, "I am doing my best. It is good enough," became her frequent affirmation and counteracted her negative thoughts of "not doing good enough."'); ?></p>
  <p><?php echo t('These statements have the dual. purpose of affirming what Karen is doing and helping her let go of the idea that she has control over her mother\'s appetite. Accepting that . was important. Telling herself that she is doing her best and it is enough is a positive way of saying she is changing what she can and letting go of what she cannot change. Karen\'s expectations for herself have become more realistic.'); ?></p>
  <p><?php echo t('Practice over time will change negative, habitual thinking. Repeat this activity frequently to identify other negative self-talk Remember, thoughts and attitudes create your reality. Changing your negative thoughts will help you focus on the positive things in your life, rather than on what you do not have.'); ?> </p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 17 -->
  <div id="lesson-2-slide-17" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('CHALLENGING YOUR SELF-TALK'); ?></p>
  <p><?php echo t('Identify an example of your negative self-talk and the situation when it is most likely to occur.'); ?></p>
  <ol>
  <li><?php echo t('My negative statement:'); ?></li>
  <li><?php echo t('I say this to myself when:'); ?></li>
  <li><?php echo t('I will replace the negative thought with this positive statement:'); ?></li>
  <li><?php echo t('Repeat the chosen affirmation whenever the above situation occurs.'); ?></li>
  </ol>
  <p><?php echo t('There will be times when you will find it hard to shake off negative thoughts. This is normal. However, paying attention to the frequency and content of these thoughts is the beginning of self-awareness and the possibility of change.'); ?></p>
  <p><?php echo t('Practicing self-care -'); ?></p>
  <p><?php echo t('To be an effective caregiver you need to maintain your own health and spirit, and to nurture yourself. All too often caregivers put their own needs last. Studies show that sacrificing yourself in giving care to another can lead to emotional exhaustion, depression, and illness.'); ?></p>
  <p><?php echo t('Maintaining your health and spirit can reduce your level of stress. It is critical to find activities that help you to stay healthy and nurture yourself. These activities are different for each individual. What works for one person may not work for another. You must find stress-reducing methods that work best for you.'); ?></p>
  <p><?php echo t('We can learn a lot from a self-care program in Florida called "Getting Well." This is a group of people who are supporting each other in learning to live and feel better. They take part in life-affirming activities such as "laughing, juggling, playing, meditating, painting, journal writing, exercising, and eating nutritiously" They demonstrate the necessity of associating with others who help you maintain your spirit and help you feel loved and supported. To manage stress, it is essential to take breaks from caregiving. Plan them into your schedule, starting immediately; if you have not done so already. Studies show that caregivers often do not take breaks until they are at the "end of their rope" or "burned out."'); ?></p>
  <p><?php echo t('This serves no one\'s best interest as your ability to function can be seriously affected. To avoid problems, it is your responsibility to take time off from caregiving to refresh yourself. It is important to the well-being of care receivers that you take breaks. If you do not, they may become increasingly dependent on you. If you take breaks, they will be less isolated and will benefit from having contact with other people. They also need breaks from you. (This is an example of reframing your perception of a situation.)'); ?> </p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 18 -->
  <div id="lesson-2-slide-18" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('You are responsible for your own self-care. Practicing self-care means that you:'); ?></p>
  <ul>
  <li><?php echo t('learn and use stress reduction techniques;'); ?></li>
  <li><?php echo t('attend to your own health care needs;'); ?></li>
  <li><?php echo t('get proper rest and nutrition;'); ?></li>
  <li><?php echo t('exercise regularly;'); ?></li>
  <li><?php echo t('take time off without feeling guilty;'); ?></li>
  <li><?php echo t('participate in pleasant, nurturing activities;'); ?></li>
  <li><?php echo t('reward yourself...;'); ?></li>
  <li><?php echo t('seek and accept the support of others;'); ?></li>
  <li><?php echo t('seek supportive counseling when you need to, or talk with a trusted counselor, religious advisor, or friend;'); ?></li>
  <li><?php echo t('identify and acknowledge your feelings;'); ?></li>
  <li><?php echo t('tell others what you need. Do not assume "they should know;"'); ?></li>
  <li><?php echo t('change the negative ways you view situations; and'); ?></li>
  <li><?php echo t('set goals and prioritize.'); ?></li>
  </ul>
  <div class="question">
  <p>ARE YOU TAKING CARE OF YOURSELF?</p>
  <p>
  <input type="checkbox" name="Yes18" id="Yes18">
  <label for="Yes18">Yes</label>
  <input type="checkbox" name="No18" id="No18">
  <label for="No18">No</label>
  |  Are you uncomfortable putting
  yourself first at times?</p>
  <p>
  <input type="checkbox" name="Yes15" id="Yes15">
  <label for="Yes15">Yes</label>
  <input type="checkbox" name="No15" id="No15">
  <label for="No15">No</label>
  |  Do you think you should always meet
  the needs of other people before your
  own?</p>
  <p>
  <input type="checkbox" name="Yes16" id="Yes16">
  <label for="Yes16">Yes</label>
  <input type="checkbox" name="No16" id="No16">
  <label for="No16">No</label>
  |  Do you feel you should be a "perfect
  caregiver"?</p>
  <p>
  <input type="checkbox" name="Yes17" id="Yes17">
  <label for="Yes17">Yes</label>
  <input type="checkbox" name="No17" id="No17">
  <label for="No17">No</label>
  |  Do you minimize or deny that you
  have needs</p>
  <p>
  <input name="button2" type="submit" id="button2" onClick="MM_popupMsg('If you answered \&quot;yes\&quot; to any of these questions, you may be ignoring your own needs.')" value="Submit">
  </p>
  </div>
  <p><?php echo t('Reflect on what it means to practice selfcare. Consider the items above. How do you fare? Are you caring for yourself as well as you are caring for another? Remember, it is only when we love and nurture ourselves that we are able to love and nurture another. As a caregiver, appreciation and "thank yous" for what you do may be lacking. For example, a person with Alzheimer\'s disease may be unable to show appreciation for what is done. Everyone has a need for approval. It motivates us to keep going. If you do not receive appreciation from other people, find a way to give it to yourself.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 19 -->
  <div id="lesson-2-slide-19" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('What would be helpful for you? Consider the following suggestions:'); ?></p>
  <ul>
  <li><?php echo t('Acknowledge and take satisfaction in those things you do well.'); ?></li>
  <li><?php echo t('Reward yourself on a regular basis.'); ?></li>
  <li><?php echo t('Involve yourself in an activity that will provide positive feedback.'); ?></li>
  </ul>
  <p><?php echo t('Carol found a creative way to reward herself for a job well done when her mother could no longer express appreciation. Carol\'s mother, Irene, had Alzheimer\'s disease. Irene often expressed frustration and anger at Carol, in spite of the fact that Carol was her mainstay Carol understood the disease process and successfully avoided taking her mother\'s attacks personally. To give herself a gift of appreciation, Carol bought flowers regularly. She said, "I considered the flowers a gift from Mom to me. It is something she would have done for me if she were well."'); ?></p>
  <p><?php echo t('Memories of past generosity and love from her mother sustained Carol. In buying herself flowers she reminded herself weekly that the gift of love and caring she gave to her mother had first been given to her. At a difficult time she found a way to nurture herself.'); ?></p>
  <p><?php echo t('What are you doing to nurture yourself? Are you choosing healthy activities? Or are you relying on drugs, alcohol, cigarettes, and tranquilizers to handle the emotional and physical burdens of caregiving? According to the National Institute on Drug Abuse, millions of people abuse these drugs to reduce tension and to relax. It is in your best interest to choose healthy, nurturing ways of coping with the difficulties of caregiving.'); ?></p>
  <p><?php echo t('Getting social support - '); ?></p>
  <p><?php echo t('Caregiving can be a lonely experience. According to the National Family Caregivers Association, caregivers often · report that they feel alone and isolated. Support from family, friends, and others is an important stress buffer. Something as simple as a two-minute telephone call can make you feel cared about and supported. It helps to share your experiences and burdens with a person you trust-a friend, family member, counselor, religious advisor, or support group member-who will listen and understand.'); ?></p>
  <p><?php echo t('Support groups can be helpful when you are going through a difficult time. Sharing with others who are going through similar experiences is a way to give and receive support, and take time out from caregiving duties. You can learn new ways of coping from others in the group, which may include learning to look at the light side of difficult situations with a bit of humor. Sharing lightens the load. A support group is a place to express thoughts and feelings in a confidential setting. Most important, you learn that you are not alone. This can be a wonderful relief. Support groups are available for caregivers and for people with various chronic illnesses. Local hospitals and disease-related associations often have groups available.'); ?></p>
  <p><?php echo t('Using techniques that lower stress -'); ?></p>
  <p><?php echo t('It is of little help to identify your stressors if you do not take action early to reduce them. Recognize obstacles to taking action. These may include:'); ?></p>
  <ul>
  <li><?php echo t('Not giving yourself permission to take care of yourself.'); ?></li>
  <li><?php echo t('Lacking awareness of stress-reduction techniques.'); ?></li>
  <li><?php echo t('Choosing unrealistic stress-reduction techniques for example, those that are too complicated, lengthy, or difficult for you.'); ?></li>
  <li><?php echo t('Delaying or postponing a stress-reduction activity. For example, planning a break or trip too far into the future to be of help now, when you need it.'); ?></li>
  </ul>
  <p><?php echo t('Take care of yourself daily Use "tried and true" stress reduction tools that work for you. In addition, learn and incorporate new stress-reducing techniques into your life. There are many worthwhile techniques available. We offer some quick and easy ones that you can fit into your busy life.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 20 -->
  <div id="lesson-2-slide-20" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Basic wellness practices -'); ?></p>
  <div class="question">
  <p>It is vital to maintain your health and well-being. Ask yourself the questions in the box below.</p>
  <p>
  <input type="checkbox" name="Yes19" id="Yes19">
  <label for="Yes19">Yes</label>
  <input type="checkbox" name="No19" id="No19">
  <label for="No19">No</label>
  |  Do you participate in physical
  activity at least three times a week?</p>
  <p>
  <input type="checkbox" name="Yes20" id="Yes20">
  <label for="Yes20">Yes</label>
  <input type="checkbox" name="No20" id="No20">
  <label for="No20">No</label>
  |  Do you get enough sleep daily so
  that you feel rested in the morning?</p>
  <p>
  <input type="checkbox" name="Yes21" id="Yes21">
  <label for="Yes21">Yes</label>
  <input type="checkbox" name="No21" id="No21">
  <label for="No21">No</label>
  |  Do you eat balanced, nutritious
  meals?</p>
  <p>
  <input type="checkbox" name="Yes22" id="Yes22">
  <label for="Yes22">Yes</label>
  <input type="checkbox" name="No22" id="No22">
  <label for="No22">No</label>
  |  Do you take time to sit down and
  eat your meals?</p>
  <p>
  <input type="checkbox" name="Yes23" id="Yes23">
  <label for="Yes23">Yes</label>
  <input type="checkbox" name="No23" id="No23">
  <label for="No23">No</label>
  |  Do you take care of your own
  physical health (e.g., get regular
  medical check-ups and take care of
  yourself when you are ill)? </p>
  <p>
  <input type="checkbox" name="Yes24" id="Yes24">
  <label for="Yes24">Yes</label>
  <input type="checkbox" name="No24" id="No24">
  <label for="No24">No</label>
  |  Do you participate regularly in
  recreational/leisure activities?</p>
  <p>
  <input type="checkbox" name="Yes25" id="Yes25">
  <label for="Yes25">Yes</label>
  <input type="checkbox" name="No25" id="No25">
  <label for="No25">No</label>
  |  Do you drink at least eight glasses
  of Water or other liquid daily?</p>
  <p>
  <input type="checkbox" name="Yes26" id="Yes26">
  <label for="Yes26">Yes</label>
  <input type="checkbox" name="No26" id="No26">
  <label for="No26">No</label>
  |  Do you limit alcoholic beverages
  to no more than two drinks a day?
  (One drink is 1.5 oz. of hard liquor,
  l2 oz. of beer, or 4 oz. of wine.) </p>
  <p>
  <input type="checkbox" name="Yes27" id="Yes27">
  <label for="Yes27">Yes</label>
  <input type="checkbox" name="No27" id="No27">
  <label for="No27">No</label>
  |  Do you avoid using alcohol,
  medications/drugs, or cigarettes to
  calm your nerves?</p>
  <p>
  <input type="checkbox" name="Yes28" id="Yes28">
  <label for="Yes28">Yes</label>
  <input type="checkbox" name="No28" id="No28">
  <label for="No28">No</label>
  |   Do you maintain a healthy weight?</p>
  <p>
  <input name="button3" type="submit" id="button3" onClick="MM_popupMsg('If you answered \&quot;yes\&quot; to all of these questions, congratulate yourself. A \&quot;no\&quot; response reflects areas to work on for better health.')" value="Submit">
  </p>
  </div>
  <p><?php echo t('Proper diet, adequate sleep, and regular exercise are necessary for all of us, and even more so when we are caregivers. These lifestyle factors increase our resistance to illness and our ability to cope with stressful situations.'); ?></p>
  <p><?php echo t('Exercise promotes better sleep, reduces tension and depression, and increases energy and alertness. If finding time to exercise is a problem, try to incorporate it into your usual day Perhaps the person receiving care can walk or do stretching exercises with you. If necessary do frequent short exercises instead of using large blocks of time. Find activities you enjoy. Walking is considered one of the best and easiest exercises. It helps to reduce psychological tension as well as having physical benefits.'); ?></p>
  <p><?php echo t('Walking 20 minutes a day, three times a week, is very beneficial. If you can not be away 20 minutes, 10-minute walks twice a day or even a five-minute walk are beneficial. Work walking into your life. Walk whenever and wherever you can. Perhaps it is easiest to walk around your block, at the mall, or a nearby park. The next time a friend or family member comes to visit, take time for a short walk. When the care receiver is getting therapy, take a walk around the medical facility.'); ?></p>
  <p><?php echo t('Breathing for relaxation - '); ?></p>
  <p><?php echo t('Stressful situations or memories of those situations can cause changes in our breathing. Often the more tense we feel, the more shallow our breathing becomes. · Stress management tools usually include a focus on breathing. The following breathing exercise takes only one or two minutes and you can easily do it anywhere. Use it often to lower stress.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 21 -->
  <div id="lesson-2-slide-21" class="course-slide">
  <div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t(' Meditation -'); ?></p>
  <p><?php echo t('The word "meditation" comes from the Sanskrit word medha which, when taken literally, means "doing the wisdom." Meditation aids in relaxation and in achieving physical and mental well-being. Meditation is keeping your attention focused in the moment to quiet the mind and hear your body\'s inner wisdom. You, too, can learn to meditate. See the "Process of Meditation" box on the next page.'); ?></p>
  <p><?php echo t('Music -'); ?></p>
  <p><?php echo t('Music is another tool for reducing stress. It can alter the body and the mind. It can induce deep relaxation, act as a stimulant, and take you into other states of consciousness. Music is often used specifically for healing and decreasing stress and tension. Use the following steps as a guideline.'); ?></p>
  <ol>
  <li><?php echo t('Choose soothing music you like.'); ?></li>
  <li><?php echo t('Relax and close your eyes.'); ?></li>
  <li><?php echo t('Breathe deeply and easily.'); ?></li>
  <li><?php echo t('Lose yourself in the music, listening with your body, not your mind.'); ?></li>
  <li><?php echo t('After the music is finished, open your eyes and notice how you feel.'); ?></li>
  </ol>
  <p><?php echo t('Music is a universal language. Listening to music can be healing for both you and the care receiver, either together or alone. People with dementia, especially, respond to music when they may respond to little else.'); ?></p>
  <p><?php echo t('Humor -'); ?></p>
  <p><?php echo t('Caregivers who maintain and foster their sense of humor do better. It is , often hard to find much that is humorous in caregiving, but the secret to succeeding as a caregiver is to find humor in your daily routine. Finding humor does not deny the fact that, at times, your heart is heavy with the pain and sadness of caregiving. Those times will exist, but they can co-exist with laughter and humor.'); ?></p>
  <p><?php echo t('Tears and laughter are closely related. They each offer a release of tension and are often intermingled. Humor does not minimize the seriousness of a situation; rather, it helps you embrace it. Humor can be a helpful tool in many ways, from making us laugh at our shortcomings and impossible situations, reducing anxiety and stress. Laughter relaxes and helps calm emotions, allowing us to regain emotional balance and think more clearly. If you want to laugh, or want someone else to laugh, you may have to find a reason, as George and Alma do.'); ?></p>
  <p><?php echo t('George and Alma watch their favorite comedy show on television every weeknight at 7 P.M. They look forward to it and anticipate laughing together. In addition, Alma and George look for humorous cartoons and jokes to share with each other. The fact that Alma has a disabling medical condition does not mean they can not appreciate laughter.'); ?></p>
  <p><?php echo t('In his book Anatomy of an Illness, Norman Cousins wrote of his fight against a crippling disease. He credited his recovery to the use of laughter. He intentionally sought healing through watching videotapes of comedies, reading joke books, and listening to people tell jokes. He had read about the effects of stress and emotions on illness. He understood that disease was caused by chemical changes in the body, due to the stress of strong emotions such as fear and anger. He concluded that perhaps love, laughter, hope, and the will to live would counteract those effects. He was right in his belief. Recent studies show that laughter helps to stimulate breathing, muscular activity; and heart rate. This serves to reduce stress and strengthen the immune system.'); ?></p>
  <p><?php echo t('Humor is important to health. It lifts the spirit and provides a way to connect with others. The following suggestions can help · you make laughter and humor a larger part of your life:'); ?></p>
  <ul>
  <li><?php echo t('Seek out humor. Humorous tapes and books can be found at video stores and libraries. Spend time with friends or family members you enjoy and can laugh with.'); ?> </li>
  <li><?php echo t('Surround yourself with humor. Put jokes, cartoons, funny pictures, and humorous sayings on the refrigerator or bulletin board where others can enjoy them with you.'); ?></li>
  <li><?php echo t('Laugh at yourself. Do not take yourself too seriously Poke fun at yourself by making light of your shortcomings (which we all have).'); ?></li>
  </ul>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 22 -->
  <div id="lesson-2-slide-22" class="course-slide"> div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Developing action plans -'); ?></p>
  <p><?php echo t('Action plans are tools for change. They can be a useful way to identify and plan specific activities for reducing stress and making change: Feelings of accomplishment are necessary for thriving as a caregiver. Action plans can help you achieve these feelings. Even the smallest action can make a big difference. This was true for Evelyn.'); ?></p>
  <p><?php echo t('Evelyn needed more time for herself during the day She made a plan to take a leisurely; warm tub bath four times a week instead of the always-hurried shower. Evelyn settled her father to watch the news on TV when she took her baths. This worked well for both of them and became an accepted part of their routine. Accomplishing the action plan encouraged Evelyn to make other action plans that made a big difference to her.'); ?></p>
  <p><?php echo t('Feelings of mastery and confidence are usually the result of developing new ways of coping. Use the information presented in this chapter to help you identify your stressors, and improve coping skills. The activity in the box on the next page can be a useful tool for managing stress. This activity can be useful on a regular basis. It will help you assess and cope with current stressors. Since your caregiving situation and stressors continually change, it is important to be aware of when you feel stress and to use stress-reducing tools that work for you. Most important, build stress reduction and nurturing activities into daily life to prevent distress. Be proactive and remember, what is good for you is good for the person receiving care!'); ?></p>
  <p><?php echo t('Finding hope and meaning -'); ?></p>
  <p><?php echo t('The ability to find hope and meaning in the caregiving situation enables you not only to survive, but to thrive. Finding meaning and hope are what keeps us going. It is a way to make sense of our circumstances.'); ?></p>
  <p><?php echo t('In his book Mans Search For Meaning, psychiatrist Viktor Frankl tells of his experience as a long-time prisoner in a prisoner of war camp during World War II. Many of his family members died in the camps. In spite of the fact that he faced death constantly and suffered severe punishment, Dr. Frankl was able to find meaning and hope in his life. He noted that the prisoners who were able to sustain even a flicker of hope were better able to survive the terrible circumstances than those who felt hopeless. He concluded that what did remain, when all else was taken away; was "the last of the human freedoms," the ability to "choose one\'s attitude in a given set of circumstances." Out of that experience, Frankl\'s guiding philosophy was born: "To live is to suffer, to survive is to find meaning in the suffering." He also believed that man\'s need for meaning is universal.'); ?></p>
  <p><?php echo t('The need to find hope and meaning is also important when you are a caregiver for a person with a chronic illness. Uncertainty; loss, and suffering may shake your foundation. After all, you have much at stake. Your world, as you have known it, has changed drastically and you may be left with questions such as, "Why me?" and perhaps, "Where is God?" Questioning often leads to a search for meaning. No one else can tell you what the meaning is for you. It can be a lonely journey.'); ?></p>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <!-- Lesson 2 Slide 23 -->
  <div id="lesson-2-slide-23" class="course-slide"> div class="content">
  <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
  <hr />
  <p><?php echo t('REFRAMING YOUR STRESS'); ?></p>
  <p><?php echo t('Make a list of those things that you find most difficult or stressful. Be specific. Write at least two (more if you can).'); ?></p>
  <p><?php echo t('Answer the following questions in relation to each item on your list. Can I ignore this? Or can I let it go?'); ?></p>
  <p><?php echo t('Can I change anything about this? If so, how can I change it?'); ?></p>
  <p><?php echo t('If it can not be changed, can I change my perception of it? If so, how? What is a more helpful perception?'); ?></p>
  <p><?php echo t('Select one stressor from your list to work on first. The stressor is: Develop an action plan for addressing this stressor. Be specific and realistic.'); ?></p>
  <p><?php echo t('A search for meaning can be a conscious choice. There are ways to stimulate your search. The following can be helpful:'); ?></p>
  <ul>
  <li><?php echo t('Ask yourself questions like "What am I to learn from this?" What good can come from this? Am I a better person now? These types of questions can help you open up to possibilities for finding meaning.'); ?></li>
  <li><?php echo t('Reflect .. Periods of quiet reflection, especially after a difficult time, are important and offer opportunities to learn from the experience.'); ?></li>
  <li><?php echo t('Talk with a trusted person. Whether this person is a counselor, religious advisor, or friend, sharing can help clarify your thoughts and feelings. As you tell your story; it often takes on meaning.'); ?></li>
  <li><?php echo t('Write. This is also a way to clarify your thinking. Writing is a way to bring out your thoughts and feelings. Write freely and spontaneously. Do not concern yourself with proper sentence structure or punctuation. Writing is a way to talk to yourself. Re-reading your journal over time provides an understanding of where you were when you started and where you are now. You will probably see changes and find new understanding and meaning.'); ?></li>
  <li><?php echo t('Seek spiritual renewal. This is especially important when you are facing difficult times. Many caregivers report that faith and prayer help them find comfort, purpose, and meaning. It may be that even when you feel anger because of suffering and sorrow, your need for meaning is greatest.'); ?></li>
  </ul>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
</div>
    
   
    
    

 <!-- Lesson 2 Slide 24 -->
  
  <div id="lesson-2-slide-24" class="course-slide"> div class="content">
    <h2 class="flowers"><?php echo t('Steps to Maintain Health & Avoid Stress (continued)'); ?></h2>
    <hr />
    <p><?php echo t('Like Frankl, it is hopeful to believe that meaning can be found in difficult and painful experiences. Hope and meaning play a large part in the following story of Margaret and Tim.'); ?></p>
    
    <p><?php echo t('Tim\'s frequent visits to his elderly mother, Margaret, in the nursing home, were meaningful to him. Years ago, when Margaret was healthy; she shared some of her beliefs with Tim. She had told him, "If there comes a time when I am not able to recognize you because of Alzheimer\'s disease, or for any other reason, I want you to know what I believe to be true. I believe that my true essence, my spirit, will always be present, even though my physical body and mind may not be the person you remember. Please know that I am with you. We may not be able to talk with each other as we did in the past, but if you play my favorite music, read poetry, hold my hand, or just be with me, I will feel your love and you will feel mine for you."'); ?></p>
    
    <p><?php echo t('In sharing her beliefs, Margaret gave Tim the gift of finding meaning in what can be a most difficult and challenging situation. Meaning is all around us. It is the "stuff'' of life. Meaning is personal. It is up to each persc1n to find his or her own meaning.'); ?></p>
    
    <p><?php echo t('SUMMARY'); ?></p>
    
    <p><?php echo t('Are you better acquainted with your stress? Have you identified what you can do to reduce at least one stressor? Do you realize the potential strength in considering your needs and in practicing self-care? Can you find meaning in difficult experiences? Have you learned that often the compassion and care you give to another comes back to you as a gift of meaning?'); ?></p>
    
    <p><?php echo t('Remember that your response to a situation will affect the situation itself. As much as possible, make it be what you want it to be.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>

    
    <!-- Lesson 2 Slide 25 -->
    
    <div id="lesson-2-slide-25" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Tips for Overcoming Negative Emotions & Reducing Stress'); ?></h2>
        <hr />
        <p><?php echo t('A Wide variety of mental activities can help caregivers overcome negative emotions and reduce stress. Think about how you might use some of these ideas in your own life.'); ?></p>
        <ul>
          <li><?php echo t('Become aware of harmful thought patterns. That is a first step in taking positive action to care for yourself.'); ?></li>
          <li><?php echo t('Pay attention to shallow breathing because it often adds to physical stress.'); ?></li>
          <li><?php echo t('Imagine washing away the stresses of the day during a shower.'); ?></li>
          <li><?php echo t('Change clothes as a way to shed the day\'s concerns'); ?></li>
          <li><?php echo t('Create a stress diary where you record information about the stresses you are experiencing so you can analyze them and take steps to manage them. In your diary, record how much time you feel depressed, in control, emotionally stable, had enough energy, and were satisfied with life.'); ?></li>
          <li><?php echo t('Think about, and write a list of, the problems you face and the options you have available. using a scale of 1-7, prioritize the problems you want to tackle first.'); ?></li>
          <li><?php echo t('Think about, and write a list of, the changes you could make in your daily life. Then prioritize the changes. The first changes to tackle are the ones that have the highest priorities.'); ?></li>
          <li><?php echo t('Visit the Mind Tools website for more information and tools that will help you with decision making, positive thinking, managing stress, and finding balance in your life.'); ?></li>
          <li><?php echo t('Read about what others are doing to reduce stress.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <!-- Lesson 2 Slide 26 -->
    <div id="lesson-2-slide-26" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Tips for Overcoming Negative Emotions & Reducing Stress: Simple Pleasures'); ?></h2>
        <hr />
        <p><?php echo t('Even tiny bursts of simple pleasures may improve your physical and mental health. Some researchers say that it is the frequency of the positive feelings that come from these small pleasures that is most important in determining happiness. On the Internet, people are posting their simple pleasures such as those listed below. When you are sitting quietly in a comfortable place, list simple pleasures that help you get through your caregiving days.'); ?></p>
        <ul>
          <li><?php echo t('Looking at old pictures'); ?></li>
          <li><?php echo t('Soft pajamas'); ?></li>
          <li><?php echo t('Seeing winter\'s first snowfall on a bright moonlit night'); ?></li>
          <li><?php echo t('Chocolate'); ?></li>
          <li><?php echo t('Watching the sun set'); ?></li>
          <li><?php echo t('The smell of freshly cut grass, and the air right after it rains'); ?></li>
          <li><?php echo t('Clean skin on clean sheets'); ?></li>
          <li><?php echo t('The smell of freshly cut grass, and the air right after it rains'); ?></li>
          <li><?php echo t('Falling asleep in the spring sun'); ?></li>
          <li><?php echo t('Looking to the birds sing early in the morning'); ?></li>
          <li><?php echo t('Sitting in bed with a cup of tea doing crossword puzzles'); ?></li>
          <li><?php echo t('Eating a spoonful of peanut butter'); ?></li>
          <li><?php echo t('An unexpected breeze on a hot summer\'s day'); ?></li>
          <li><?php echo t('Having an attached garage... and it is raining'); ?></li>
        </ul>
        <p><?php echo t('Make and post a 1-5 minute video to You Tube of your simple pleasures.'); ?></p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
    </div>
    <!-- need this final div here to close lesson-2 --> 
  </div>
  <!-- Lesson 3 Slide 1 -->
  <div id="lesson-3">
    <div id="lesson-3-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t(''); ?></h2>
        <hr />
        <p><?php echo t(''); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <!-- need this final div here to close lesson-3 --> 
  </div>
  <!-- Lesson 4 Slide 1 -->
  <div id="lesson-4">
    <div id="lesson-4-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t(''); ?></h2>
        <hr />
        <p><?php echo t(''); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <!-- need this final div here to close lesson-4 --> 
  </div>
  <!-- Lesson 5 Slide 1 -->
  <div id="lesson-5">
    <div id="lesson-5-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t(''); ?></h2>
        <hr />
        <p><?php echo t(''); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <!-- need this final div here to close lesson-5 --> 
  </div>
  <!-- need this final div here to close the course --> 
</div>
