<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach(array(
		'.lesson-1', 
		'.lesson-2', 
		'.lesson-3', 
		'.lesson-4', 
		'.lesson-5') as $lesson)
	$this->widget(
			'ext.fancybox.EFancyBox',
			array('id' => $lesson,
				  'config' => array('width' => '90%',
									'height' => '90%',
									'arrows' => false,
									'autoSize' => false,
									'mouseWheel' => false))
	);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-courses.png'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
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
  <h2 class="flowers"><?php echo t($course->title); ?></h2>
  <p><?php echo t($course->description); ?></p>
  <h4><?php echo t('Objectives'); ?></h4>
  <ul>
  <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  <p id="surveynotify"><?php echo t('Please complete the PRE-COURSE SURVEY before participating. It can be accessed via the PROFILE page.'); ?></p>
  <h2><?php echo t('Course Lessons'); ?></h2>
  
   <ul>
  <li> 
	  <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1">
	  	<?php echo t('Overview of Memory Loss'); ?>
	  </a> 
	  <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
	  <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
	  <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
	  <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
      <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
      <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
      <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
      <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
      <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
  </li>
  <li>
	 	<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2">
	  		<?php echo t('Communication Strategies'); ?>
	  	</a> 
	  	<a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> 
	  	<a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> 
	  	<a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> 
	  	<a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> 
	  	<a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> 
	  	<a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> 
	  	<a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> 
        <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a>
        <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a>
  </li>
  <li>
	  	<a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3">
	  		<?php echo t('Making Decisions'); ?>
	  	</a> 
	  	<a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
	  	<a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
	  	<a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
	  	<a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
	  	<a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
	  	<a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
        <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
        <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
        <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
  </li>
  <li>
	  <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4">
	  <?php echo t('Planning for the Future'); ?>
	  </a> 
	  <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
	  <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
	  <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
	  <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
	  <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
	  <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
	  <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
	  <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
	 <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a> 
  </li>
  <li>
    <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5">
    <?php echo t('Effective Ways of Coping'); ?>
    </a> 
	<a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> 
	<a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> 
	<a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> 
	<a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> 
	<a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> 
	<a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a>
    <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a>
    <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a>
    <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a>
   </li>
</ul>

 <h2><?php echo t('Length'); ?></h2>
  <p><?php echo t('You will have 8 weeks to complete this online course, but full access for one-year. After your intitial 8-week period ends, you will not have access to your Facilitator. This course was designed to be completed in 8-weeks, completing one-lesson each week. Each Lesson is designed to take 2-3 hours.'); ?></p>
  <h2><?php echo t('Facilitators &amp; Course Developers'); ?></h2>
  <p><a href="mailto:lindahollinger-smith@matherlifeways.com"><?php echo t('Content Designer: Linda Hollinger-Smith, PhD - '); ?></a></p>
  <p><?php echo t('Dr. Hollinger-Smith is a doctorally prepared registered nurse focusing her research in gerontology, workforce development, and quality improvement. She has more than 28 years of experience working with older adults in senior living, long-term care settings, in the community, and in acute care settings in various staff and managerial positions. Her past positions include Assistant Dean of the Rush University College of Nursing, Nursing Director of the Rush Primary Care Institute, and Associate Chairperson of the Department of Adult Health Nursing at Rush University College of Nursing.'); ?></p>
  
  <p><?php echo t('She has served as Principal Investigator for multiple national research projects totaling more than $4.5 million in support, targeting nursing workforce development and retention, falls reduction, and caregiver support issues. She has published over 50 journal articles, book chapters and research abstracts and has presented on national and international levels on various topics related to aging. In her current position, Dr. Hollinger-Smith leads a team of applied researchers and staff responsible for developing and expanding the Mather LifeWays applied research agenda.'); ?></p>
  <p><a href="mailto:jwoodall@matherlifeways.com"><?php echo t('Course Developer: Jon Woodall - '); ?></a></p>
  <p><?php echo t('Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs. '); ?></p>


</div>

<!-- start course content here -->

<div id="course" class="hide">
<div id="lesson-1">
  <div id="lesson-1-slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Overview of Memory Loss and Related Symptoms'); ?></h2>
      <hr />
      <p><?php echo t('We are delighted that you are interested in MSML Online. This five-lesson course is intended to help family members of someone in the early stages of memory loss to meet the challenges they face now and in the future. Research evaluation has shown that participation in this course increases family members’ knowledge and improves coping skills with respect to their relatives’ memory and behavior changes.'); ?></p>
      <p><?php echo t('Lesson Objectives:'); ?></p>
      <ul>
        <li><?php echo t('To introduce participants and give an overview of the course.');?></li>
        <li><?php echo t('To explain major medical causes of memory loss.'); ?></li>
        <li><?php echo t('To ensure that a medical evaluation is done to explore reasons for memory loss.'); ?></li>
        <li><?php echo t('To explain symptoms of Alzheimer’s disease and related dementias.'); ?></li>
        <li><?php echo t('To describe current and proposed medical treatments.'); ?></li>
        <li><?php echo t('To describe research efforts to treat or prevent memory loss.'); ?></li>
      </ul>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
  </div>
</div>
<div id="lesson-2">
  <div id="lesson-2-slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Communication Strategies'); ?></h2>
      <hr />
      <p><?php echo t('Lesson Objectives:'); ?></p>
      <ul>
        <li><?php echo t('To give an overview of communication changes typical in early memory loss.'); ?></li>
        <li><?php echo t('To familiarize participants with general principles for maintaining communication with a person experiencing early memory loss.'); ?></li>
        <li><?php echo t('To describe several ways to encourage verbal expression.'); ?></li>
        <li><?php echo t('To review common communication pitfalls, and how to avoid them.'); ?></li>
      </ul>
      <p><?php echo t('Welcome Back!'); ?></p>
      <p><?php echo t('Welcome to the second lesson of MSML Online. One of the more frustrating and difficult aspects of memory loss is that the person\'s ability to communicate may be compromised. In this class, we will discuss how to adapt to these changes. We will cover these general topics and get into specifics along the way:'); ?></p>
      <p><?php echo t('Agenda for Lesson 2'); ?></p>
      <ul>
        <li><?php echo t('Communication changes in early stages of memory loss'); ?></li>
        <li><?php echo t('General principles for enhancing communication'); ?></li>
        <li><?php echo t('Ways to encourage verbal expression'); ?></li>
        <li><?php echo t('Avoiding communication pitfalls'); ?></li>
      </ul>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
  </div>
</div>
<div id="lesson-3">
  <div id="lesson-3-slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Making Decisions'); ?></h2>
      <hr />
      <p><?php echo t('Lesson Objectives:'); ?></p>
      <ul>
        <li><?php echo t('Understand the shifting balance of power in the relationship,'); ?></li>
        <li><?php echo t('Address practical issues in everyday life such as driving a car, handling health & financial decisions or managing household tasks,'); ?></li>
        <li><?php echo t('Share the diagnosis and involved others in helping out.'); ?></li>
      </ul>
      <p><?php echo t('Welcome Back!'); ?></p>
      <p><?php echo t('Welcome to the third lesson of MSML Online.'); ?></p>
      <p><?php echo t('Before you begin, please email your Instructor or post to the Forum/Blog any questions or comments related to last week\'s lesson on Communication.'); ?></p>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
  </div>
</div>
<div id="lesson-4">
<div id="lesson-4-slide-1" class="course-slide">
<div class="content">
<h2 class="flowers"><?php echo t('Planning for the Future'); ?></h2>
<hr />
<p><?php echo t('Lesson Objectives:'); ?></p>
<p><?php echo t('To familiarize participants with effective ways for communicating with health care professionals.'); ?></p>
<ul>
  <li><?php echo t('To provide an overview on advance directives and legal planning.'); ?></li>
  <li><?php echo t('To explain the difference between Medicare and Medicaid.'); ?></li>
  <li><?php echo t('To explain respite options, including community-based programs and services.'); ?></li>
  <li><?php echo t('To discuss the impact of a move on an individual with memory loss, highlighting types of residential care. '); ?></li>
</ul>
<p><?php echo t('Welcome Back!'); ?></p>
<p><?php echo t('Welcome to the fourth lesson of MSML Online. The title of this lesson is “Planning for the Future.” In our previous lessones we have touched on changes that will impact the person experiencing memory loss, as well as challenges to those providing care: family members, friends and professionals.'); ?></p>
<p><?php echo t('We have a great deal of information to cover in this lesson. To best utilize time, be sure that your information needs and questions are addressed, please message the Forum/Blog if you are interested in learning more about:'); ?></p>
<ul>
<li><?php echo t('strategies to effectively communicate with health care professionals,'); ?></li>
<li><?php echo t('advanced directives and legal planning,'); ?></li>
<li><?php echo t('Medicare and Medicaid,'); ?></li>
<li><?php echo t('respite options including community-based programs and services,'); ?></li>
<li><?php echo t('impact of a move on an individual with memory loss,'); ?></li>
<li><?php echo t('residential care options, including how to decide/choose residential care.'); ?></li>
  </ul>
  <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
</div>
</div>
</div>
<div id="lesson-5">
  <div id="lesson-5-slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Effective Ways of Coping and Caring'); ?></h2>
      <hr />
      <p><?php echo t('Lesson Objectives:'); ?></p>
      <ul>
        <li><?php echo t('To discuss the importance of “doing things,”'); ?></li>
        <li><?php echo t('To consider the impact that the environment can have on participation in activities and tasks for a person experiencing memory loss,'); ?></li>
        <li><?php echo t('To learn how to analyze and adapt tasks and activities, and'); ?></li>
        <li><?php echo t('To review key points of the Making Sense of Memory Loss program.'); ?></li>
      </ul>
      <p><?php echo t('Welcome!');?></p>
      <p><?php echo t('Welcome to the final lesson of MSML Online.'); ?></p>
      <p><?php echo t('Effective Ways of Coping and Caring'); ?></p>
      <p><?php echo t('In this lesson, we will focus on effective ways of coping and caring. We’ll first learn about one of the most effective ways of coping and that is activity. In its purest form, “activity” means “doing.” In particular, for the first half of the lesson we will:'); ?></p>
      <ul>
        <li><?php echo t('Discuss the importance of “doing”'); ?></li>
        <li><?php echo t('Consider the importance of activities and tasks among persons with memory loss'); ?></li>
        <li><?php echo t('Learn how to analyze and adapt tasks'); ?></li>
      </ul>
      <p><?php echo t('Recognize the importance of “doing” in your life and in the life of your family member.'); ?></p>
      <p><?php echo t('Think about when you meet someone new. What do you talk about? The first thing you do is probably to exchange names and a few pleasantries. As the conversation continues, however, you probably begin to talk about what you do – your occupation, your hobbies and interests. What we do is important to us, and helps other people understand us.'); ?></p>
      <p><?php echo t('Think of your own life. What things do you enjoy doing?'); ?></p>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
  </div>
</div>

<!-- final div needed to close course -->

</div>

<!-- white box under course lesson links, had to re-add div column-wide here again, need better coding for this situation -->
<div class="column-wide">
<div class="box-white">
  <h2 class="flowers"> <?php echo t('Resources'); ?> </h2>
 <p><?php echo t('Please use these listed resources in the completion of this online course. Pleaes contact your instructor or the program director if you have additional resources you would like to see added here.'); ?></p>
 
 <p><?php echo t('Under Construction'); ?></p>
</div>
</div>
