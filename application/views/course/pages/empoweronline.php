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
    
    Taking Time for Yourself

Do you value yourself and your personal needs? What do you do for personal renewal? Do you save some time for yourself out of each day? Do you take occasional extended breaks? Or are you so involved with caregiving tasks that you have little or no time for yourself?

What activities do you enjoy? What would you like to do that would give you a lift? When was the last time you gave yourself a treat?

Breaks in caregiving are a must. They are as important to health as diet, sleep, rest, and exercise. It's important not to lose sight of your personal needs and interests. Studies show that sacrificing yourself in the care of another and removing pleasurable events from your life can lead to emotional exhaustion, depression, and physical illness. You have a right-even a responsibility-to take some time away from caregiving.

Regular breaks from the tasks of caregiving are essential. Decide on the time, date, and activity-then follow through. Breaks don't have to be long to make a positive difference. It's important to plan some time for yourself in every day, even if that time is only for 15 minutes or half an hour. Most important is to do something that "fills your cup" and helps you to feel better and thrive. If you have difficulty taking breaks for yourself, consider taking them for your family member. Care receivers also benefit from caregivers getting breaks.
    
    
<!-- 2 divs needed, closes 'lesson' and closes 'course' --> 
  </div>
</div>
