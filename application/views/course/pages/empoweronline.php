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
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
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
