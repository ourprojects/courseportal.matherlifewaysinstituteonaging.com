<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach(array(
		'.lesson-1', 
		'.lesson-2', 
		'.lesson-3', 
		'.lesson-4', 
		'.lesson-5',
		'.lesson-6',
		'.lesson-7') as $lesson)
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

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('78458492r.png'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
</div>
<div id="sidebar"> 
  
  <!-- sidebar #2 here -->
  
  <div class="box-sidebar one">
    <h3><?php echo t('Working Caregivers in America'); ?></h3>
    <img src="<?php echo $this->getImagesUrl('286x366_Grafix_69pc.png'); ?>" alt="image" class="block center" />
    <p><?php echo t('69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an 
	unpaid leave of absence to meet their care-giving responsibilities.'); ?></p>
  </div>
  
  <!-- sidebar #4 here -->
  
  <div class="box-sidebar two">
    <h3><?php echo t('Magnitude - Informal Caregivers'); ?></h3>
    <p><a href="http://www.caregiver.org/caregiver/jsp/home.jsp" target="_blank">FAMILY CAREGIVER ALLIANCE</a></p>
    <p><b> <?php echo t('National Center on Caregiving (USA)'); ?></b></p>
    <p class="title"><?php echo t('65.7 million'); ?></p>
    <p><?php echo t('caregivers make up 29% of the U.S. adult population providing care to someone who is ill, disabled or aged'); ?></p>
    <hr />
    <p class="title"><?php echo t('52 million'); ?></p>
    <p><?php echo t('caregivers provide care to adults (aged 18+) with a disability or illness'); ?></p>
    <hr />
    <p class="title"><?php echo t('14.9 million'); ?></p>
    <p><?php echo t('care for someone who has Alzheimer\'s disease or other dementia'); ?></p>
  </div>
</div>
<!-- Start main content here -->

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
  <h5><?php echo t('Course Agenda'); ?></h5>
  <a href="<?php echo $this->getImagesUrl('CCOAssets/CARECoachingSyllabus.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="<?php echo t('Course Syllabus'); ?>" /></a> <br />
  <h4><?php echo t('Course Lessons'); ?></h4>
  <h5><a href="#"><?php echo t('Pre-Course Survey'); ?></a></h5>
  
  <!-- Bullet points start here for course lessons, hyperlinks to FancyBox -->
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> <?php echo t('Care Coaching'); ?> </a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> </li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> <?php echo t('Understanding Needs and Preferences of Older Adults'); ?> </a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> <?php echo t('Managing Health Information and Record Keeping'); ?> </a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-11" data-fancybox-group="lesson-3" class="hide lesson-3"></a> </li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> <?php echo t('Understanding the Health Care System and Utilization by Older Adults'); ?> </a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a> </li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> <?php echo t('Relocation and Transfers by Older Adults within the Health Care System'); ?> </a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-11" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-12" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-13" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-14" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-15" data-fancybox-group="lesson-5" class="hide lesson-5"></a> </li>
    <li> <a href="#lesson-6-slide-1" data-fancybox-group="lesson-6" class="teal lesson-6"> <?php echo t('Promoting Safety of Older Relatives and Friends in Caring for Themselves'); ?> </a> <a href="#lesson-6-slide-2" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-3" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-4" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-5" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-6" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-7" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-8" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-9" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-10" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-11" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-12" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-13" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-14" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-15" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-16" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-17" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-18" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-19" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-20" data-fancybox-group="lesson-6" class="hide lesson-6"></a> </li>
    <li> <a href="#lesson-7-slide-1" data-fancybox-group="lesson-7" class="teal lesson-7"> <?php echo t('Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making'); ?> </a> <a href="#lesson-7-slide-2" data-fancybox-group="lesson-7" class="teal lesson-7"></a> <a href="#lesson-7-slide-3" data-fancybox-group="lesson-7" class="teal lesson-7"></a> <a href="#lesson-7-slide-4" data-fancybox-group="lesson-7" class="teal lesson-7"></a> <a href="#lesson-7-slide-5" data-fancybox-group="lesson-7" class="teal lesson-7"></a> <a href="#lesson-7-slide-6" data-fancybox-group="lesson-7" class="teal lesson-7"></a> <a href="#lesson-7-slide-7" data-fancybox-group="lesson-7" class="teal lesson-7"></a> <a href="#lesson-7-slide-8" data-fancybox-group="lesson-7" class="teal lesson-7"></a> </li>
  </ul>
  <h5><a href="#"><?php echo t('Post-Course Survey'); ?></a></h5>
  <h4> <?php echo t('Resources'); ?></h4>
  <p><?php echo t('Please use these listed resources in the completion of this online course. Pleaes contact your instructor or the program director if you have additional resources you would like to see added here.'); ?></p>
  <p><a href="http://www.nlm.nih.gov/medlineplus/talkingwithyourdoctor.html" target="_blank"><?php echo t('Talking with Your Doctor'); ?></a></p>
  <!-- 
From the National Library of Medicine's MedlinePlus consumer health website.  Links to online brochures from the federal government and national health organizations on obtaining a second opinion, talking to your doctor, informed consent, being an active participant in your healthcare, and related communication topics. -->
  
  <p><a href="http://www.aarp.org/health/doctors-hospitals/info-09-2010/finding_your_way_how_to_talk_to_8212_and_understand_8212_your_doctor.html" target="_blank"><?php echo t('How To Talk To Your Doctor'); ?></a></p>
  <!--
Emphasis on the importance of building a "successful partnership with your doctor." Suggestions for preparing for a productive office visit.  Questions to ask your doctor to assure that you have a clear understanding of your diagnosis, the treatment recommended, and other treatment options.  On the website of the American Association of Retired Persons. -->
  
  <p><a href="http://www.encouragingcoach.com/projects-selfcare-quiz.htm" target="_blank"><?php echo t('Self-Care Quiz'); ?></a></p>
  <!-- 
How good are you at taking care of yourself?  Take this brief quiz to get some ideas! -->
  
  <p><a href="http://www.meditationsociety.com/108meds.html" target="_blank"><?php echo t('Meditation Exercises'); ?></a></p>
  <!-- 
The Meditation Society of America provides a free resource of over 100 meditation activities for you to try via the web.   -->
  
  <p><a href="http://www.allaboutdepression.com/relax/" target="_blank"><?php echo t('Guided Imagery'); ?></a></p>
  <!-- 
Guided imagery is an effective relaxation technique to reduce stress.  There are many benefits to being able to induce the "relaxation response" in your own body.  Some benefits include a reduction of generalized anxiety, prevention of cumulative stress, increased energy, improved concentration, reduction of some physical problems, and increased self-confidence. -->
  
  <p><a href="http://www.caregiverslibrary.org/home.aspx" target="_blank"><?php echo t('National Caregiver Library'); ?></a></p>
  <!-- 
Provides state-by-state information and resources for caregivers.  -->
  
  <p><a href="http://www.usa.gov/Citizen/Topics/Health/caregivers.shtml" target="_blank"><?php echo t('Caregiver Resources on USA.gov'); ?></a></p>
  <!-- 
Find help providing care, government agencies, long-distance caregiving, and support for caregivers on this valuable website. -->
  
  <p><a href="http://www.aarp.org/home-family/caregiving/" target="_blank"><?php echo t('Caregiving Resources from AARP'); ?></a></p>
  <!-- 
AARP provides various articles of interest and resources for family caregivers. -->
  <br />
  <br />
  <div class="box-white">
    <div id="developers">
      <h4><?php echo t('Facilitators &amp; Course Developers'); ?></h4>
      <h5><?php echo t('Content Designer: '); ?><a href="mailto:lindahollinger-smith@matherlifeways.com"><?php echo t('Linda Hollinger-Smith, PhD'); ?></a></h5>
      <p> <?php echo t('Dr. Hollinger-Smith is a doctorally prepared registered nurse focusing her research in gerontology, workforce development, and quality improvement. She has more than 28 years of experience working with older adults in senior living, long-term care settings, in the community, and in acute care settings in various staff and managerial positions. Her past positions include Assistant Dean of the Rush University College of Nursing, Nursing Director of the Rush Primary Care Institute, and Associate Chairperson of the Department of Adult Health Nursing at Rush University College of Nursing.'); ?> </p>
      <h5><?php echo t('Course Developer: '); ?><a href="mailto:jwoodall@matherlifeways.com">Jon Woodall</a></h5>
      <p><?php echo t('Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs. '); ?> </p>
      <h5><?php echo t('Facilitator: '); ?><a href="mailto:eziegemeier@yahoo.com">Ellen Ziegemeier</a></h5>
      <p><?php echo t('Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She earned her Masters in Anthropology, and has worked locally and abroad -  Latin America and South America for various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver training. '); ?> </p>
    </div>
  </div>
</div>

<!-- Care Coaching -->

<div id="course" class="hide">
  <div id="lesson-1">
    <div id="lesson-1-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Welcome to CARE Coaching Online!'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('3223247r.jpg'); ?>" alt="image" />
        <p><?php echo t('We are so pleased you can participate in this online course. This online course is 7 weeks in length. The class moves forward on interval units to encourage discussion about specific topics each week. You may log on any time during the week for a few hours by reading the content and participating.  Please note: participation will enhance what you get out of this course and will create a successful experience for you and others.'); ?></p>
        <h4><?php echo t('Technical Requirements'); ?></h4>
        <p><?php echo t('There are minimal technical requirements for participation in CARE Coaching Online, such as Internet access and e-mail.  Special software and hardware are not needed, and plug-ins are available at no cost; if needed, plug-ins can be found at blue skeleton.  Support is available 24 hours a day via a toll-free telephone number or via email. Just click on the ‘Help” icon in the top toolbar.'); ?></p>
        <h4><?php echo t('Class Schedule'); ?></h4>
        <p><?php echo t('There are 7 units in total, and we encourage you to complete at least one unit per week so that your Facilitator may monitor and help lead the various weekly unit Discussion areas.'); ?></p>
        <h4><?php echo t('Availability'); ?></h4>
        <p><?php echo t('You will have access to CARE Coaching Online for approximately 7 weeks. We limit student access to this timeframe because we review and update each class session to ensure students receive current information.'); ?></p>
        <h4><?php echo t('Contact'); ?></h4>
        <p><?php echo t('If you have any questions and/or concerns, please don’t hesitate to contact your Facilitator via email.  Their information can be found by clicking on the ‘Staff Information’ link in the left toolbar.'); ?></p>
        <h4><?php echo t('HELPFUL HINTS'); ?></h4>
        <ul>
          <li><?php echo t('MAKE A DATE WITH THE COURSE! Putting a specific time in your calendar to participate every week will get you started in the right direction.  So, for example, if you plan to participate every Tuesday at 7:00 pm, try to keep the same schedule every week.'); ?></li>
          <br />
          <li><?php echo t('READ CAREFULLY. The instructions to participate in activities are sometimes very specific but necessary to ensure everyone participates in the same way.  Instructions will become familiar to you over time.'); ?></li>
          <br />
          <li><?php echo t('KEEP ON TASK.  We know your work and family caregiving responsibilities can sometimes disrupt your participation.  The Facilitator will send emails each week to remind all students to log on and to share tips for each unit.  They will also let you know what lesson is recommended for the week so you can assess your own progress and timeline.'); ?></li>
        </ul>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching - Topics'); ?></h2>
        <hr />
        <h4><?php echo t('What’s CARE Coaching all about?'); ?></h4>
        <p><?php echo t('CARE Coaching involves a method to help you as a caregiver think differently about a caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and actions.'); ?></p>
        <h4><?php echo t('Self-Coaching: It all starts with me!'); ?></h4>
        <p> <?php echo t('Self-coaching shifts the approach from the cycling negative “internal dialogue” to help you focus on what’s important to you right now and how you may accomplish that goal.'); ?></p>
        <h4><?php echo t('Activity – Self-Awareness Survey'); ?></h4>
        <p><?php echo t('This activity invites you to explore and live several questions. Your responses should open up more self-awareness of what is important to you in your life.'); ?></p>
        <h4><?php echo t('Creating the Environment for Self-Coaching'); ?></h4>
        <p><?php echo t('The principle behind self-coaching (and CARE Coaching for that matter!) is the revelation of solutions already inherent in each person.'); ?></p>
        <h4><?php echo t('Video – 5 Steps to Self-Coaching'); ?></h4>
        <p><?php echo t('Serving as an introduction to self-coaching exercises, this video outlines a simple self-coaching process can be used over and over again whenever you need it.'); ?></p>
        <h4><?php echo t('Activity – Principles of Success'); ?></h4>
        <p> <?php echo t('This activity focuses on assessing your awareness of ten principles of success and your rating of how you presently live according to them.'); ?></p>
        <h4><?php echo t('Self-Coaching Exercise – The Power of Journaling'); ?></h4>
        <p> <?php echo t('Journaling is one powerful technique to refocus the negative into positive affirmations. With consistent practice, this method can help create a more positive outlook in our own lives as well as create more positive interactions with others.'); ?></p>
        <h4><?php echo t('Self-Coaching Exercise – Focus on the Goal'); ?></h4>
        <p> <?php echo t('How do we identify the goal? The goal answers the question, “What do you want that’s really important to you?” This exercise allows you to practice writing goals.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('What’s CARE Coaching all about?'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('3663024r.png'); ?>" alt="image" />
        <p><?php echo t('You are probably familiar with the term “coaching” from many aspects of our daily lives.'); ?></p>
        <p><?php echo t('As a parent or sibling, you may be involved in coaching little league or some other sport.  Usually this form of coaching involves teams.  The role of the coach is to motivate, set ground rules, and draw out the best in each player for the good of the team.'); ?></p>
        <p><?php echo t('In the work environment, coaching may also involve the work team or individual.  Coaching the work team may involve looking at ways to turn barriers into opportunities for the good of the team and company.  An organization may bring in a professional coach to build sustainable, high-performance work teams and thus build the company’s competitive advantage over other organizations.  At the individual level, a coach may focus on leadership development showing the company’s commitment to build a strong base of effective leaders.'); ?></p>
        <p><?php echo t('As a current or future caregiver, you may be feeling as if you are in a “reversed role” to an elderly parent, other relative, or friend.  When we are young, we look up to parents or others as a “coach” in many respects.  Though it may have been difficult at times for all of us growing up, the effective parent “coach” had the following skill set:'); ?></p>
        <ul>
          <li><?php echo t('They respected us, so we listened to them.'); ?></li>
          <li><?php echo t('They listened to us, so we felt understood.'); ?></li>
          <li><?php echo t('They appreciated us, so we felt supported.'); ?></li>
          <li><?php echo t('They supported us when we tried new things, so we grew more responsible.'); ?></li>
        </ul>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('What’s CARE Coaching all about? (continued)'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('4909913r.png'); ?>" alt="image" />
        <p><?php echo t('As our parents age, they may suffer declining physical or cognitive health and thus have greater need for our help and understanding, and so we may become their “coach” in life.  That is easier said than done in many cases!  Regardless of their age, our parents always see themselves in that role in our relationship with them.'); ?></p>
        <p><?php echo t('We also tend to go back into old habits, communication styles, or reactions when dealing with our parents.  How do you deal with a situation where your father begins to have minor car accidents or “forgets” the way home?  Talking with a parent about giving up the car keys is probably one of the most challenging situations we may face as a caregiver.'); ?></p>
        <p><?php echo t('CARE Coaching involves a method to help you as a caregiver think differently about a caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and actions.  Learning what is important to older parents – and learning how to draw that out – often bringing to light new information about what is important to them in terms of their own health and care.  '); ?></p>
        <p><?php echo t('CARE Coaching will provide your tools, resources, and experiences targeted towards strengthening your caregiving abilities to Communicate, Advocate, Relate, and Encourage older parents or other loved ones.  Throughout this course, we will highlight these terms and provide examples and activities to help you on this journey.'); ?></p>
        <p><?php echo t('In this course, we’ll usually talk about “older parents,” but we realize that caregivers may be involved in caring for older siblings, other relatives, friends, or neighbors.  For the purposes of this course, we will use “older parents” as our “short-hand” descriptor of any older adult that you may be caring for!'); ?></p>
        <p><?php echo t('Before we can start coaching others, let’s consider our skills related to coaching ourselves!'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Self-Coaching: It all starts with me!'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('4919555r.png'); ?>" alt="image" />
        <p><?php echo t('In this case, it’s alright to say “it’s all about me!”  There is quite a bit of information published about “self-coaching.”   Think about the fact that we each represent a unique individual surrounded by a myriad of things going on inside and outside of ourselves.'); ?></p>
        <p><?php echo t('We constantly have an “internal dialogue” going on that no one else can hear.  As a caregiver, that “internal dialogue” may be reliving negative experiences:'); ?></p>
        <ul>
          <li><?php echo t('“If only my mother listened to me and moved in with us years ago, she would not have fallen, broken her hip, and wound up in that terrible nursing home!”'); ?></li>
          <li><?php echo t('“I just can not take on more responsibility for my dad\’s care. I already work 50 to 60 hours a week and have family responsibilities. But if I do not, who will?”'); ?></li>
          <li><?php echo t('“How am I going to bring up the issue of long-term care planning with my parents? They always shut me off when I bring up questions about their finances.”'); ?></li>
        </ul>
        <p><?php echo t('Going over and over these types of thoughts and questions in our minds does not get to problem solving.'); ?></p>
        <p><?php echo t('Self-coaching shifts the approach from the cycling negative “internal dialogue” to help you focus on what’s important to you right now and how you may accomplish that goal.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Self-Coaching: It all starts with me! (continued)'); ?></h2>
        <hr />
        <p><?php echo t('Say this to yourself:'); ?></p>
        <ul>
          <li><?php echo t('I am going to accomplish something.'); ?></li>
          <li><?php echo t('I am going to figure it out.'); ?></li>
          <li><?php echo t('I am going to do my best thinking, because I want to get to what’s important.'); ?></li>
        </ul>
        <p><?php echo t('Now, say this out loud:'); ?></p>
        <ul>
          <li><?php echo t('I am going to accomplish something.'); ?></li>
          <li><?php echo t('I am going to figure it out.'); ?></li>
          <li><?php echo t('I am going to do my best thinking, because I want to get to what is important.'); ?></li>
        </ul>
        <p><?php echo t('This is just a simple exercise in positive self-talk.  Our internal voice and thoughts have the capability to create our reality, and so it is our daily challenge to move aside the negative, cyclical thinking and focus on positive steps we may take to move forward.  Focusing on the many skills you already have inside of yourself not only will benefit your own health, success, and self-esteem, but will be of great aide to your caregiving responsibilities'); ?></p>
        <p><?php echo t('Let us first assess where you currently are related to your readiness and awareness for self-coaching, and then we will move into some self-coaching exercises that you may continue as often as you feel it would be helpful to you.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Self-Awareness Survey'); ?></h2>
        <hr />
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ActivitySelfAwarenessSurvey.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('This activity invites you to explore and live several questions. Your responses should open up more self-awareness of what is important to you in your life.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Creating the Environment for Self-Coaching'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('5342290r.png'); ?>" alt="image" />
        <p><?php echo t('The principle behind self-coaching (and CARE Coaching for that matter!) is the revelation of solutions already inherent in each person.  For those who may be fortunate to experience an external coach, their role is to facilitate the experience and create an environment for the person being coached to do their best thinking.'); ?></p>
        <p><?php echo t('Self-coaching can work in the same way for many individuals who commit some time and effort into the process.  We have included several exercises throughout this course that will help you practice coaching skills that will be valuable when coaching yourself or communicating in your caregiving role with older parents.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Creating the Environment for Self-Coaching (continued)'); ?></h2>
        <hr />
        <p><?php echo t('What is necessary to create an effective self-coaching experience?'); ?></p>
        <ol>
          <li><?php echo t('You are aware of the need for change and are prepared to accept that you cannot blame others or circumstances of a situation. In other words, you are willing to be open to choices and you are willing to make those choices.  It would be most like stepping outside of your situation and viewing it as impartially as possible.'); ?></li>
          <li>
            <p><?php echo t('You are prepared to ask yourself some difficult questions and not avoid answering them.  Imagine that you are in some tough discussions with your father and siblings about dad’s lack of caring for himself living alone.  Dad has grown more isolated day by day.  When visiting one day, you are shocked to find empty food containers and spoiled food in the refrigerator.  There is a stack of unpaid bills on the kitchen counter next to a jar of various pills mixed together.  You bring this up with your siblings, but their reaction is, “Dad is fine.  He wants to stay in his house, and it’s not our place to kick him out!”  Your dad says, “I just haven’t gotten around to some things…and I’d thank you to stay out of my business!”'); ?></p>
            <p><?php echo t('Are your prepared to ask yourself some key questions like…”Am I an effective caregiver?  Why do I think that I am not getting the response I need from my dad or siblings?  What response should I expect?  Why do I believe that I should expect it?  Is it realistic and upon what observations do I base the perception?”'); ?></p>
            <p><?php echo t('Most importantly, “When I think about being a good caregiver, what’s important to me?”'); ?></p>
          </li>
          <li><?php echo t('You accept that through self-coaching, you are going to persist until you identify a solution and set of actions that you will then commit to implementing.  It may take some time to achieve results, but you need to stick to your goal.'); ?></li>
          <li>
            <p><?php echo t('Be willing to “let it go.”  We’ve all been in the situation where something just nags at us.  Things always seem worse when we pay too much attention to them.  If I feel anxious, overwhelmed, or depressed and focus on those feelings, I become it.  By letting go, I turn away from it.  I don’t feed those problems any longer.  It is sort of like flipping to another television channel.  You may not be able to stop a thought from “percolating” in your mind, but you can say “no!” to thoughts that result in anxiety or depression.  We always have choices.  In this case, we have the choice not be become a victim of negative thoughts or insecurities.'); ?></p>
          </li>
          <li>
            <p><?php echo t('Set a time frame for the self-coaching session.  The focus of self-coaching is to identify your goal, commit to your actions, and then move on to do something else.   Sometimes your best thinking goes on when you do move onto something else and then come back to your goal. '); ?></p>
          </li>
        </ol>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Video – Steps to Self-Coaching'); ?></h2>
        <hr />
        <p><?php echo t('View the video, self-coaching 101 by Brooke Castillo from The Life Coach School.  This video is a new way for you to experience a self-coaching session in the comfort of your own home.  Serving as an introduction to self-coaching exercises, this video shows an example of self-coaching in action.'); ?></p>
        <p>
          <iframe width="560" height="315" src="http://www.youtube.com/embed/0_otisZVT8A" frameborder="0" allowfullscreen></iframe>
        </p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Principles of Success'); ?></h2>
        <hr />
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ActivityPrinciplesofSuccess.xls'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('spreadsheet.png'); ?>" alt="image" class="normal" /></a> <?php echo t('This activity focuses on assessing your awareness of ten principles of success and your rating of how you presently live according to them.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Self-Coaching Exercises – The Power of Journaling'); ?></h2>
        <hr />
        <p><?php echo t('Journaling is one powerful technique to refocus the negative into positive affirmations.  With consistent practice, this method can help create a more positive outlook in our own lives as well as create more positive interactions with others.'); ?></p>
        <p><?php echo t('Journaling facilitates positive self-talk.  Positive self-talk has been demonstrated to build one’s self-esteem and self-confidence across a variety of situations.'); ?></p>
        <p><?php echo t('Journaling requires a time commitment to have an impact on one’s self-confidence.  We recommend that you commit 30 days to this exercise to see a difference.'); ?></p>
        <p><?php echo t('Because journaling is a private experience, you can create your own unique experience!'); ?>
        <ol>
          <li>
            <p><?php echo t('Begin with getting yourself an inexpensive notebook or journal for your entries.'); ?></p>
          </li>
          <li>
            <p><?php echo t('Make daily entries about your accomplishments – no matter how big or small. They may be accomplishments in relation to either work or your personal life.'); ?></p>
          </li>
          <li><?php echo t('Answer these questions:'); ?></li>
          <ul>
            <li style="text-decoration:underline;"><?php echo t('What makes me unique?'); ?></li>
            <li style="text-decoration:underline;"><?php echo t('In what areas of my life do I appear most satisfied or content?'); ?></li>
            <li style="text-decoration:underline;"><?php echo t('In which areas do I appear to be struggling or unfulfilled?'); ?></li>
            <li style="text-decoration:underline;"><?php echo t('What are my strengths? (look back at your “Principles of Success” ratings for ideas)'); ?></li>
            <li style="text-decoration:underline;"><?php echo t('How have these strengths helped me in the past?'); ?></li>
            <li style="text-decoration:underline;"><?php echo t('How do these strengths now help me?'); ?></li>
          </ul>
          <li><?php echo t('Review your journal entries of recent accomplishments to connect with your values and talents.'); ?></li>
          <ul>
            <li style="text-decoration:underline;"><?php echo t('What can you truly brag about?'); ?></li>
            <li style="text-decoration:underline;"><?php echo t('What do your successes say about you?'); ?></li>
          </ul>
          <li>
            <p><?php echo t('Create a personal “bragging” statement. Be authentic and positive in your statement. Print out the statement and keep it visible so that you can refer to it often.'); ?></p>
          </li>
          <li>
            <p><?php echo t('Recite it out loud daily, saying, “This is me….This is what makes me special.”'); ?></p>
          </li>
        </ol>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Self-Coaching Exercises – Focus on the Goal'); ?></h2>
        <hr />
        <p><?php echo t('Which of these sound like goals to you?'); ?></p>
        <ul>
          <li><?php echo t('I want to lose 30 pounds.'); ?></li>
          <li><?php echo t('I want to get better at negotiating.'); ?></li>
          <li><?php echo t('I want to get my mother to start considering her long-term care options.'); ?></li>
        </ul>
        <p><?php echo t('None of these are goals – these are strategies towards goals.  Strategies are important, as they focus on the “how to get to” goals. It is easy to focus on strategies rather than goals because strategies seem to focus on actions.'); ?></p>
        <p><?php echo t('How do we identify the goal?  The goal answers the question: “What do you want that is really important to you?”'); ?></p>
        <p><?php echo t('Another way to differentiate between setting goals and identifying strategies is to look at differences between goal setting and problem solving. Here are some different terms that describe the two:'); ?></p>
        <table>
          <tr>
            <td><p><?php echo t('Goal Setting'); ?></p></td>
            <td><p><?php echo t('Identifying Strategies'); ?></p></td>
          </tr>
          <tr>
            <td><p><?php echo t('Proactive'); ?></p></td>
            <td><p><?php echo t('Reactive'); ?></p></td>
          </tr>
          <tr>
            <td><p><?php echo t('Finding what is possible'); ?></p></td>
            <td><p><?php echo t('Finding what is wrong'); ?></p></td>
          </tr>
          <tr>
            <td><p><?php echo t('Developing'); ?></p></td>
            <td><p><?php echo t('Fixing'); ?></p></td>
          </tr>
          <tr>
            <td><p><?php echo t('Identifying priorities'); ?></p></td>
            <td><p><?php echo t('Addressing crises'); ?></p></td>
          </tr>
          <tr>
            <td><p><?php echo t('Dynamic'); ?></p></td>
            <td><p><?php echo t('Static'); ?></p></td>
          </tr>
          <tr>
            <td><p><?php echo t('Working with the whole'); ?></p></td>
            <td><p><?php echo t('Working with parts'); ?></p></td>
          </tr>
        </table>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Care Coaching -->
    
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Self-Coaching Exercises – Focus on the Goal (continued)'); ?></h2>
        <hr />
        <p><?php echo t('Think of goal setting in terms of NOUNS:'); ?></p>
        <ul>
          <li><?php echo t('“I want more confidence dealing with my parents.”'); ?></li>
          <li><?php echo t('“I want a more positive attitude about my caregiving responsibilities.”'); ?></li>
          <li><?php echo t('“I want better health for myself.”'); ?></li>
        </ul>
        <p><?php echo t('Compare these to strategies which are usually stated in terms of VERBS:'); ?></p>
        <ul>
          <li><?php echo t('I want to lose 30 pounds.'); ?></li>
          <li><?php echo t('I want to get better at negotiating.'); ?></li>
          <li><?php echo t('I want to get my mother to start considering her long-term care options.'); ?></li>
        </ul>
        <p><?php echo t('For this exercise, look back at your responses to the two activities in this module.  In the Self-Awareness Survey, you explored what is important to you in your life.  In the Principles of Success activity, you rated yourself against these principles. Based on these results, develop three statements of goals for yourself.'); ?></p>
        <p><?php echo t('Remember that goals should be stated in terms of nouns.  Goals also answer the question, “What do you want that’s really important to you?”'); ?></p>
        <p><?php echo t('To start, type your goals below, and we will revisit them later in the course. (You only need to type them below; you will not be able to submit them yet).'); ?></p>
        <div class="box-white">
          <p><?php echo t('Goal #1: '); ?>
            <input type="text" size="75%">
          </p>
          <p><?php echo t('Goal #2: '); ?>
            <input type="text" size="75%">
          </p>
          <p><?php echo t('Goal #3: '); ?>
            <input type="text" size="75%">
          </p>
        </div>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?> </a></div>
    </div>
  </div>
  
  <!-- Understanding Needs and Preferences of Older Adults starts here -->
  
  <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Understanding Needs and Preferences of Older Adults - Topics'); ?></h2>
        <hr />
        <h4><?php echo t('CARE Coaching: Communicating'); ?></h4>
        <p><?php echo t('Communicating in CARE Coaching is all about choice. Caregiving commonly brings up feelings of burden, confusion, and guilt for caregivers. Communicating is the first component of CARE Coaching. As a first step, using some key communication skills can relieve some of these concerns.'); ?>
        <h4><?php echo t('Exercise – Understanding Your Parents Needs and Preferences'); ?></h4>
        <p><?php echo t('This exercise is designed to help you determine what you know and do not know about your parents needs and preferences. Determining this now will help you on the road of communicating more openly about your parents’ future wishes.'); ?></p>
        <h4><?php echo t('Where to Start "The Talk"!'); ?></h4>
        <p><?php echo t('How do you start to talk to your older parents about the future? What fears do you have about bringing up this topic with them?'); ?></p>
        <h4><?php echo t('Go to the Online Topic Forum'); ?></h4>
        <p> <?php echo t('So that we can share stories, ideas, questions, and issues among participants throughout the course, we have an online topic forum. This forum is for you the caregiver, so feel free to participate in the discussions, add new topics, and share information for others to learn from!'); ?></p>
        <h4><?php echo t('A Framework to Start "The Talk"'); ?></h4>
        <p><?php echo t('A framework has been developed to help you getting the conversations going. Overall, start small while your parents are still healthy and can fully participate in the discussions about their lives and health without undue pressure.'); ?></p>
        <h4><?php echo t('Activity - Practice "The Talk"'); ?></h4>
        <p><?php echo t('Some caregivers feel that practice sessions are valuable to "test out" the conversations in other situations. Here are some practice activities for you to try out.'); ?></p>
        <h4><?php echo t('CARE Coaching: Advocating'); ?></h4>
        <p><?php echo t('The second component of CARE Coaching is advocating. You are on the same team as your parents and want to collaborate with them as a partner in their best future.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a></div>
    </div>
    
    <!-- Understanding Needs and Preferences of Older Adults starts here -->
    
    <div id="lesson-2-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching: Communicating'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('9146129r.png'); ?>" alt="image" />
        <p><?php echo t('Does this scenario sound familiar?'); ?> <i><?php echo t('You are in a restaurant having dinner with your older parents. Your mother has some memory problems which means she takes quite a long time to figure out what to order. The waiter is standing over your table, and your father gets frustrated waiting for her to order. He says, “Helen, just order the chicken. You like the chicken!” She says, “I guess I’ll have the chicken.”'); ?></i></p>
        <p><i><?php echo t('After the waiter leaves (and in front of your mother), he says, “She takes too long to order. She’s distracted with other things going on. She can’t figure it out, so it’s easy for her if I just tell her, and all she has to do is repeat it.” Your mother subsequently doesn’t say much through the rest of the evening. The mood around the table is not much better.'); ?></i></p>
        <p><?php echo t('<b>Communicating</b> in CARE Coaching is all about choice. Your father’s response is based on his own perceptions and feelings about what’s going on with your mother rather than supporting her remaining potential to make choices. Perhaps her memory problems do interfere with her capacity to make choices, but being able to “modify” the situation can maximize Helen’s remaining capacities.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Understanding Needs and Preferences of Older Adults starts here -->
    
    <div id="lesson-2-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching: Communicating (continued)'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('9869154r.png'); ?>" alt="image" />
        <p><?php echo t('Here’s an example:'); ?></p>
        <p><i><?php echo t('Back at the restaurant, the waiter is ready to take the order. You say, “Mom, this restaurant is really well known for their delicious chicken and fish dishes, just the way you like them. What do you have a taste for today – chicken or fish?” Your mother says, “Well, I just don’t know. I had
chicken for lunch today. So I think I’d like to try their fish!”'); ?></i></p>
        <p><?php echo t('So what is different in the two approaches? In your approach, you are taking a CARE Coaching approach by asking a version of “What do you want?” through your conversation. Taking into consideration your mother’s limitations, you have supported her remaining abilities to participate in daily life activities.'); ?></p>
        <p><?php echo t('You may not yet be in a “caregiving” role for your older parents or other loved ones (or you may not consider what you now do for them as “caregiving”), but this course is designed to help you think about the future. People may find themselves “plunged” into the caregiving role at a time in life when they themselves are facing challenges such as mid-career transitions, their own health issues, or before retirement. Additionally, they may be contending with raising their own children simultaneously.'); ?></p>
        <p><?php echo t('Caregiving commonly brings up feelings of burden, confusion, and guilt for caregivers. As a first step, using some key communication skills can relieve some of these concerns. Where do these feelings stem from? Burden refers to emotional response to changes and demands that occur as caregivers give help and support to the older person.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Understanding Needs and Preferences of Older Adults starts here -->
    
    <div id="lesson-2-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching: Communicating (continued)'); ?></h2>
        <hr />
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/CaregiverBurdenAssessmentTool.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a> <?php echo t('We have developed a Caregiver Burden Assessment to help you identify aspects of your life that may or may not be impacted by caregiving at this time.  Click on the icon to access the <b>Caregiver Burden Assessment</b> tool.'); ?></p>
        <p><?php echo t('<i>Confusion</i> about the healthcare system and utilization of those services by older adults is a universal experience for caregivers.  Later in this course, we will address important ways for you to better understand the key roles and responsibilities of care providers as well as where concise, accurate information may be found to also share with your older parents.'); ?></p>
        <p><?php echo t('<i>Guilt</i> is often an ongoing feeling for many caregivers.  Sometimes caregivers get so focused on their frail, older parent that they feel guilty focusing on someone else – including themselves.  Empower Online addresses these issues for caregivers and provides tools focused on self-care of the caregiver.'); ?></p>
        <p><?php echo t('As a first step to better communication with your older parents about their needs and preferences, it is important that you have a clear understanding of what you may know and do not know about these needs and preferences.  The next exercise will help you determine your level of knowledge as well as your own feelings about your parents’ future planning.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Understanding Needs and Preferences of Older Adults starts here -->
    
    <div id="lesson-2-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Exercise – Understanding Your Parents\' Needs and Preferences'); ?></h2>
        <hr />
        <p> <a href="<?php echo $this->getImagesUrl('CCO/Assets/ExerciseUnderstandingNeedsandPreferences.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a> <?php echo t('This exercise is designed to help you determine what you know and do not know about your parents needs and preferences.  Determining this now will help you on the road of communicating more openly about your parents’ future wishes to reduce your experience of burden, confusion, and guilt as a caregiver.  Everyone has a different level of knowledge when it comes to the following information, so do not feel overwhelmed if you do not recall or have not addressed some of these areas with your parents.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Understanding Needs and Preferences of Older Adults starts here -->
    
    <div id="lesson-2-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Where to Start "The Talk"!'); ?></h2>
        <hr />
        <p><?php echo t('Do not feel anxious if you had a number of "blanks" when working through the previous exercise - it is not a reflection on "bad" caregiving. Your parents have been independent through these many years and may not have felt the need to share much of these matters with "the kids."'); ?> </p>
        <p><?php echo t('How do you start to talk to your older parents about the future? What fears do you have about bringing up this topic with them?'); ?></p>
        <p><?php echo t('So that we can share stories, ideas, questions, and issues among participants throughout the course, we have an online topic forum. This forum is for you the caregiver, so feel free to participate in the discussions, add new topics, and share information for others to learn from!'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Understanding Needs and Preferences of Older Adults starts here -->
    
    <div id="lesson-2-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('A Framework to Start "The Talk"'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('11829067r.png'); ?>" alt="image" />
        <p><?php echo t('A framework has been developed to help you getting the conversations going. Overall, start small while your parents are still healthy and can fully participate in the discussions about their lives and health without undue pressure.'); ?></p>
        <p><?php echo t('Think of this paced way to communicate as "<b>TEMPO</b>." This acronym stands for:'); ?></p>
        <ul>
          <li><?php echo t('Timing'); ?></li>
          <li><?php echo t('Experience'); ?></li>
          <li><?php echo t('Motivation'); ?></li>
          <li><?php echo t('Place'); ?></li>
          <li><?php echo t('Outcome'); ?></li>
        </ul>
        <p><?php echo t('<b>Timing</b> - Plan to set aside time for conversations with your parents. Be respectful and ask them when would be the best time for them to have these conversations. In turn, make sure you have time to listen. No ringing cell phones at this time! Above all, be patient. Your parents may feel uncomfortable at first with the idea of these conversations and may want to put them off for some time.'); ?></p>
        <p><?php echo t('<b>Experience</b> - A good approach to bringing up these difficult topics is to relate it to your experiences. Some openers sound like this:'); ?></p>
        <p><i><?php echo t('"Dad, I just came from my attorney\'s office. We finished updating my will. I was wondering when the last time you took a look at yours?"'); ?></i></p>
        <p><i><?php echo t('"Mom, a colleague of mine at work just had an unfortunate experience. His father had a sudden heart attack, and it took a long time before they could notify him because his dad did not have any emergency contact information in place. Can we go over how your information is organized particularly since my office recently moved and I have new phone numbers?"'); ?></i></p>
        <p><?php echo t('"It is really gotten to be a challenge driving out there. I am on the road all day and see quite a few bad drivers, especially those on their cell phones. I am concerned about how you are feelings about driving these days."'); ?></p>
        <p><?php echo t('<b>Motivation</b> - Be clear about your motive for having the conversation. The motivating factors should be related to safety, quality of life, and well-being - both theirs and yours. Their best interests are prime consideration, but your life and the lives of your family also matters.'); ?></p>
        <p><?php echo t('<b>Place</b> - The place where these conversations take place needs to be a "safe space" as your parents would define that. It may not necessarily be in their home. Some of these topics are sensitive and so one parent may feel more comfortable taking the lead in the conversations.'); ?></p>
        <p><?php echo t('<b>Outcome</b> - One conversation is not going to address all the important topics that need to be discussed. The initial conversations may be laying the groundwork for you to better understand your parents’ feelings. Not only do you want to get information, but you also want to share information.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Understanding Needs and Preferences of Older Adults starts here -->
    
    <div id="lesson-2-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity - Practice "The Talk"'); ?></h2>
        <hr />
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ActivityPracticetheTalk.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a> <?php echo t('Some caregivers feel that practice sessions are valuable to "test out" the conversations in other situations. Here are some practice activities for you to try out.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Understanding Needs and Preferences of Older Adults starts here -->
    
    <div id="lesson-2-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching: Advocating'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('11829138r.png'); ?>" alt="image" />
        <p><?php echo t('It’s time to bring up the second component of CARE Coaching – that of advocating. We are talking about advocating in a caring sense – that of supporting another – rather than in the legal sense – that of defending another.'); ?></p>
        <p><?php echo t('Caregivers often view their parents as “stubborn” or “resistant” to their help:'); ?></p>
        <p><?php echo t('“I just can’t get them to listen to me!”'); ?></p>
        <p><?php echo t('“They just won’t talk to me about their problem, even though I’ve got the answer!”'); ?></p>
        <p><?php echo t('“They never take my advice – even though it’s for their own good!”'); ?></p>
        <p><?php echo t('Sounds like some things your parents may have said to you growing up? In these situations, the caregiver is thinking more like the parent, and we remember from our early experiences hearing these – how much did they work when your parents were saying these words to you?'); ?></p>
        <p><?php echo t('Consider this comparison:'); ?></p>
        <ul>
          <li><?php echo t('In the role of <i>PARENT</i> – you are in charge, make the rules, and set the agenda. Negotiating is unnecessary. You are a “teller of information.”'); ?></li>
          <li><?php echo t('In the role of <i>PARTNER</i> – you have a common goal, mutual interests, and work towards collaborating on common goals. You are a “listener for information.”'); ?></li>
        </ul>
        <p><?php echo t('You may need to reassure them that you are on the same team and you want to be a partner in their best future. Your goal is to collaborate with them to uphold their needs, beliefs, and values. It is not your intention to switch to a “parenting” role so as not to diminish their independence.'); ?></p>
        <p><?php echo t('<i>Self-Coaching Hint</i>: As reinforcement, you need to make sure your intentions are clear. You are not trying to subtly coerce them or manipulate them in some way. You intend to make every action and word worthy of trust. Practice holding that intention in your mind and heart, and it will make a difference in how you listen and influence what you say!'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?> </a></div>
    </div>
  </div>
  
  <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
  <!-- slide #1 -->
  
  <div id="lesson-3">
    <div id="lesson-3-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Managing Health Information and Record Keeping - Topics'); ?></h2>
        <hr />
        <h4><?php echo t('What’s a Personal Health Record?'); ?></h4>
        <p><?php echo t('Personal Health Records (PHR) have become an easy-to-use tools to help manage health information in a single place. Having a PHR can help provide more complete information to health care providers or other family members.'); ?></p>
        <h4><?php echo t('Video – What People Say about Personal Health Records'); ?></h4>
        <p><?php echo t('View a brief video on what people say about their experiences with Personal Health Records.'); ?></p>
        <h4><?php echo t('How to Choose a Personal Health Record'); ?></h4>
        <p><?php echo t('Choosing a Personal Health Record (PHR) is really a matter of personal choice. A PHR is controlled by the individual and can be shared with others including family members, caregivers, and health care providers.'); ?></p>
        <h4><?php echo t('Types of PHRs'); ?></h4>
        <p><?php echo t('PHRs may be kept as hard copy on paper or electronically on one’s computer or on the Internet through a service provider. In considering what form may be most suitable, you should consider things like accessibility, convenience, and ease of updating.'); ?></p>
        <h4><?php echo t('Activity – Reviewing Internet-Based PHR Tools – My Family Health Portrait'); ?></h4>
        <p><?php echo t('My Family Health Portrait is a web-based program developed from the U.S. Department of Health and Human Services, Family History Initiative. This initiative is designed to encourage families to learn more about their family health history.'); ?></p>
        <h4><?php echo t('Activity – Reviewing Internet-Based PHR Tools – Google Health'); ?></h4>
        <p><?php echo t('Google Health is a free, secure web-based program to store and manage health information in a central place. Information is accessible anywhere and at anytime.'); ?></p>
        <h4><?php echo t('Activity – Reviewing Internet-Based PHR Tools - ProfileMD'); ?></h4>
        <p> <?php echo t('ProfileMD is a freeware PHR that allows immediate access to medical health history and information via your smartphone or PDA.'); ?></p>
        <h4><?php echo t('Exercise – CARE Coaching and Selecting PHRs'); ?></h4>
        <p><?php echo t('Asking the right questions is key to determine which PHR product is right for you and your family. Review the previously described internet-based tools, My Family Health Profile and ProfileMD, and complete the self-learning exercise.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #2 -->
    
    <div id="lesson-3-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('What is a Personal Health Record?'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('11829178r.jpg'); ?>" alt="image" />
        <p><?php echo t('In the previous section, you had the opportunity to complete the Exercise – Understanding Your Parents Needs and Preferences. In that exercise, we asked you to document some basics about what you know about your parents medical and health conditions.'); ?></p>
        <p><?php echo t('Information like: the name and phone numbers of physicians, lists of their medical conditions and past surgeries, current lists of medications, allergies, and reactions to certain drugs or foods, advanced directives, physical functioning level, cognition, and diet requirements are basic questions asked in the emergency room – and unfortunately – usually repeated by every physician or surgeon you may see during a hospital stay!'); ?></p>
        <p><?php echo t('It is often difficult to keep all this information straight, particularly in an emergency situation.'); ?></p>
        <p><?php echo t('To address this problem, Personal Health Records (PHR) have become an easy-to- use tools to help manage health information in a single place. Having a PHR can help provide more complete information to health care providers or other family members. Unnecessary procedures or tests may be avoided if they have been documented in a PHR. Additionally, critical information about ones health in an emergency situation would easily be accessed.'); ?></p>
        <p><?php echo t('You will learn about several different types of PHRs and have the chance to test some of these out for your own use or for your older parents.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #3 -->
    
    <div id="lesson-3-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Video – What People Say about Personal Health Records'); ?></h2>
        <hr />
        <p><?php echo t('Click on the following link to view a brief video on some personal experiences with PHRs.'); ?></p>
        <p><?php echo t('Vimeo is a respectful community of creative people who are passionate about sharing the videos they make.'); ?></p>
        <p>
          <iframe src="http://player.vimeo.com/video/5001493" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </p>
        <p><a href="http://vimeo.com/5001493">PHR Video</a> from <a href="http://vimeo.com/ahima">AHIMA</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #4 -->
    
    <div id="lesson-3-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('How to Choose a Personal Health Record'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('11848241r.jpg'); ?>" alt="image" />
        <p><?php echo t('Choosing a Personal Health Record (PHR) is really a matter of personal choice. A PHR is controlled by the individual and can be shared with others including family members, caregivers, and health care providers. This is different from a health care provider’s electronic or paper health records, which are controlled by the provider. One can get access to one’s own health records from a provider, but family members do not have access without your permission.'); ?></p>
        <p><?php echo t('This can be challenging in the caregiving situation if you as the caregiver do not have permission to access your parents’ health records, and you may need to provide information to a health care provider in an emergency situation. If one of your parents was hospitalized and unable to speak for himself or herself, did you know that the hospital cannot legally provide any information to you as a child without previous permission of your parent?'); ?></p>
        <p><?php echo t('Ideally, a PHR contains a fairly complete summary of one’s medical and health history based on data from a number of sources. PHRs are available from a number of sources:'); ?></p>
        <ul>
          <li><?php echo t('From health insurance plans for members'); ?></li>
          <li><?php echo t('By health care providers for their patients'); ?></li>
          <li><?php echo t('From various vendors who have security in place to receive and store personal information'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #5 -->
    
    <div id="lesson-3-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Types of PHRs'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('12051072r.jpg'); ?>" alt="image" />
        <p><?php echo t('PHRs may be kept as hardcopy on paper or electronically on one’s computer or on the Internet through a service provider. In considering what form may be most suitable, you should consider things like accessibility, convenience, and ease of updating.'); ?></p>
        <p><?php echo t('Paper versions can range from a formal document to a file folder with information from health care providers, insurance companies and hospitals. This is at least a good starting point for most people to get a snapshot of one’s health history. The difficulties come in when trying to keep all the information current as well as having emergency access to the information.'); ?></p>
        <p><?php echo t('The greatest risk of keeping health information on paper can easily be understood when considering the saga of Hurricane Katrina. The risks of keeping health information on paper were fully exposed when hundreds of thousands of evacuees sought care in new medical communities across the country. Evacuees lacked even the most basic personal health information, such as their medications and dosages. Most of their paper records were destroyed in the muck of hurricane-caused flooding, and many medical practices and hospitals were shut down for weeks, perhaps forever. Out of necessity, a program called'); ?> <a href="http://www.katrinahealth.org" target="_blank">KatrinaHealth</a> <?php echo t('was created to rapidly develop electronic health records for those displaced by the hurricane. Since then, the American Association of Family Practitioners (AAFP) has collaborated with the city of New Orleans and Intel, among others, to provide digital PHRs to every New Orleans resident who wants one, and to transfer these to medical practices and hospitals in the displaced residents\' current location for follow-up care.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #6 -->
    
    <div id="lesson-3-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Types of PHRs'); ?></h2>
        <hr />
        <a href="<?php echo $this->getImagesUrl('CARECoachingOnlineImages/PHRForm.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" width="48" height="48" class="normal" /></a>
        <p> <a href="http://www.ahima.org/" target="_blank">The American Health Information Management Association (AHIMA)</a> <?php echo t('created a PHR form that is downloadable here.'); ?></p>
        <p><?php echo t('Software versions of PHRs are stored on personal computers. Information is inputted directly into electronic forms or by scanning documents from health care providers. A hardcopy can then be easily printed. The user controls access to the information. The major drawback is the lack of accessibility in case of an emergency unless one carries a copy of the records on a flash drive or on a data card. Most software versions of PHRs are available at a cost to consumers.'); ?></p>
        <p><?php echo t('Internet versions of PHRs are very new having just been developed over the past 1-2 years. Through the web, consumers may access their private PHR accounts by connecting to the Internet and logging in with their username and password. Information may easily be updated, and consumers may elect to share information with specific individuals of their choosing. The major advantage is the access and availability of information in emergency situations – all one needs is Internet connection and logon information.'); ?></p>
        <p><?php echo t('If you are looking at an internet-based PHR, it is very important that the provider describes security and privacy standards that are in place to protect the information being stored. We will look at a few examples in the next section.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #7 -->
    
    <div id="lesson-3-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Reviewing Internet-Based PHR Tools'); ?></h2>
        <hr />
        <h5><?php echo t('My Family Health Portrait'); ?></h5>
        <p><?php echo t('<i>My Family Health Portrait</i> is a web-based program developed from the U.S. Department of Health and Human Services, Family History Initiative. This initiative is designed to encourage families to learn more about their family health history. Because health providers have long understood that common illnesses can run in families (like high blood pressure, diabetes, and heart disease – to name a few), tracing illnesses experienced by your parents, grandparents, and other blood relatives may help your physician predict disorders to which you may be at risk and take preventive action.'); ?></p>
        <p><?php echo t('<i>My Family Health Portrait</i> website helps users organize family history information, save it to their own computer, and print a hard copy to take to the physician’s visit. Additionally, users may grant permission for other family members to view information on their website.'); ?></p>
        <p><a href="https://familyhistory.hhs.gov/fhh-web/home.action" target="_blank"><?php echo t('Click here to access My Family Health Portrait website.'); ?></a></p>
        <p><?php echo t('Read the section, “<i>Learn More About My Family Health Portrait</i>” to answer the following questions.'); ?></p>
        <ul>
          <li><?php echo t('*Why is completing a family health history important?'); ?></li>
          <li><?php echo t('*What is done to assure that my information is private that I enter in My Family Health Portrait?'); ?></li>
          <li><?php echo t('*What does it mean that this tool is EHR (Electronic Health Record) ready? How does this benefit me?'); ?></li>
          <li><?php echo t('*What is “clinical decision support”? How does it benefit me?'); ?></li>
        </ul>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #8 -->
    
    <div id="lesson-3-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Reviewing Internet-Based PHR Tools'); ?></h2>
        <hr />
        <h5><?php echo t('Google Health'); ?></h5>
        <p><?php echo t('Google offers a free, secure web-based program to store and manage health information in a central place.  Information is accessible anywhere and at anytime.  In addition to health information, test results, x-rays, and other scans may be easily uploaded into your PHR.  You may also keep track of test results and laboratory values visually to see how you progress over time.  Finally, you may print a wallet card to carry your health profile with you.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #9 -->
    
    <div id="lesson-3-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Video – Introduction to Google Health'); ?></h2>
        <hr />
        <p><?php echo t('Click on the following link to view a brief video taking you on a tour of Google Health.
'); ?></p>
        <p>
          <iframe width="560" height="315" src="http://www.youtube.com/embed/yNe6-p4G7Ik?rel=0" frameborder="0" allowfullscreen></iframe>
        </p>
        <p><?php echo t('To summarize aspects of Google Health:'); ?></p>
        <ul>
          <li><?php echo t('Store and manage all health information securely.'); ?></li>
          <li><?php echo t('Create and save a health profile and link to numerous resources to learn more about symptoms, causes, and treatments.'); ?></li>
          <li><?php echo t('Import medical record files and prescription history through links with partners such as hospitals, labs, pharmacies, and insurance companies.'); ?></li>
          <li><?php echo t('Track your medical history to keep your physician updated.'); ?></li>
          <li><?php echo t('Learn how medications may interact through an integrated program that checks for potential problems between drugs.'); ?></li>
          <li><?php echo t('Select those with whom you want to share key medical information.'); ?></li>
        </ul>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #10 -->
    
    <div id="lesson-3-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Reviewing Internet-Based PHR Tools'); ?></h2>
        <hr />
        <h5><?php echo t('ProfileMD'); ?></h5>
        <p><?php echo t('The final PHR tool we will review is one of the latest Internet-based programs designed for Smartphones.  ProfileMD is a freeware PHR that allows immediate access to medical health history and information via your smartphone or PDA.'); ?></p>
        <p><?php echo t('Download the software to your computer and sync with your handheld device.'); ?></p>
        <p><a href="http://www.e-medtools.com/profilemd.html" target="_blank"><?php echo t('Download Site for ProfileMD'); ?></a></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Lesson #3 - Managing Health Information and Record Keeping --> 
    <!-- slide #11 -->
    
    <div id="lesson-3-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Exercise – CARE Coaching and Selecting PHRs'); ?></h2>
        <hr />
        <a href="<?php echo $this->getImagesUrl('CCOAssets/ExerciseCARECoachingandSelectingPHRs.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a>
        <p> <?php echo t('Asking the right questions is key to determine which PHR product is right for you and your family. This exercise is designed to help you determine exactly that. Review the previously described internet-based tools, My Family Health Profile and ProfileMD, and respond to the following questions.'); ?></p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?> </a></div>
    </div>
  </div>
  
  <!-- Understanding the Health Care System and Utilization by Older Adults -->
  
  <div id="lesson-4">
    <div id="lesson-4-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Understanding the Health Care System and Utilization by Older Adults'); ?></h2>
        <hr />
        <h4><?php echo t('Navigating the Health Care System'); ?></h4>
        <p><?php echo t('The goal for any patient in the health care system should be to optimize your chances of achieving a good outcome when health care is needed. Taking charge of one’s health care is key.'); ?></p>
        <h4><?php echo t('CARE Coaching: Relating'); ?></h4>
        <p><?php echo t('The third component of CARE Coaching is that of relating. The most important factor in the patient-doctor relationship is communicating or relating.'); ?></p>
        <h4><?php echo t('Video – How to Communicate with the Physician'); ?></h4>
        <p><?php echo t('Dr. Lori Whittaker, a family physician in Seattle, shares tips and advice for how to speak up for yourself when you are at the doctor\'s office.'); ?></p>
        <h4><?php echo t('Helping Older Parents Talk to Medical Professionals about Health Care'); ?></h4>
        <p><?php echo t('Older adults may especially loath to question physicians because they were raised in a generation where doctors were considered to be above reproach. In planning for your discussions with your older parents and their physicians, remember that as their caregiver, you have an obligation to understand your parents’ medical care.'); ?></p>
        <h4><?php echo t('Exercise – How are You with PowerPhrases?'); ?></h4>
        <p><?php echo t('Test your skills at PowerPhrases!'); ?></p>
        <h4><?php echo t('Activity – Practicing PowerPhrases with Your Health Provider'); ?></h4>
        <p><?php echo t('Now that you have assessed your PowerPhrase skill level, we will now focus on PowerPhrases related to your health care provider to ensure a positive visit. By planning specific phrases to use in advance of the appointment, the patient can impact the outcome of the visit.'); ?></p>
        <h4><?php echo t('Learning What You Need to Know About the Health Care System'); ?></h4>
        <p><?php echo t('Learning what you need to know about the health care system can seem a daunting task. We break down some of the core components that are key for you to understand as caregivers for older parents.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a></div>
    </div>
    
    <!-- Understanding the Health Care System and Utilization by Older Adults -->
    
    <div id="lesson-4-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Navigating the Health Care System'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('Dining-MGEVr.jpg'); ?>" alt="image" />
        <p><?php echo t('Talk to anyone today about the state of health care and you will probably get an earful of complaints, “horror” stories, and head shaking.  Complaints run the gamut of problems with insurance companies and Medicare, doctors who don’t spend enough time with patients, and quick hospital discharges.'); ?></p>
        <p><?php echo t('Here are common issues voiced by older adult patients:'); ?></p>
        <ul>
          <li><?php echo t('They cannot get an accurate diagnosis, understand they need treatment, and need someone to help them find physicians, or get tests, that can help them.'); ?></li>
          <li><?php echo t('They are seeing too many specialists who are not coordinating their care.  They need someone who will take a look at their reams of medical records to help them sort out their treatment.'); ?></li>
          <li><?php echo t('They are having trouble with their insurer, who isn’t paying as promised, or who is denying them care.'); ?></li>
          <li><?php echo t('They have received doctor or hospital bills that they cannot sort out or decipher.  They believe they have been billed for services they did not receive.  They have read that up to 80% of hospital bills are incorrect, and they want someone to help them negotiate with whoever has billed them.'); ?></li>
        </ul>
        <p><?php echo t('Some of our parents may fondly remember the days when doctors took time with their patients or even came to the home for a visit!  We may not be able to “fix” all the problems with the health care system, but what we can do is focus on two things:'); ?></p>
        <ul>
          <li><?php echo t('Learning to communicate effectively with health care providers – particularly with physicians – to manage relationships with providers, and'); ?></li>
          <li><?php echo t('Becoming empowered with knowledge to better understanding health care and roles of providers'); ?></li>
        </ul>
        <p><?php echo t('Particularly for many older adults, the experience of the patient-doctor relationship is really what’s missing in much of today’s health care experience.  We can use CARE Coaching techniques to help build that relationship.'); ?></p>
        <p><?php echo t('The goal for any patient in the health care system should be to optimize your chances of achieving a good outcome when health care is needed.  Taking charge of one’s health care is key.  For older parents who may not be used to or feel comfortable “taking charge of their health care,” this may be a difficult concept for them.  We’ll look at some CARE Coaching techniques to help your parents feel comfortable being in charge.'); ?></p>
        <p><?php echo t('This section will also reinforce your important role as “advocate” that we introduced in Section 2.  So let’s begin with that all important “patient-doctor” relationship.
'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Understanding the Health Care System and Utilization by Older Adults -->
    
    <div id="lesson-4-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching: Relating'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('J0285068r.jpg'); ?>" alt="image" />
        <p><?php echo t('Over the years, the patient-doctor relationship has been defined, though rules of ethics and rules of law, as a fiduciary one, as a relationship founded in trust. When a patient seeks out a physician’s help, and the physician agrees to give that help, a special covenant is made. The patient agrees to take the physician into confidence, to reveal intimate information related to one’s health. The physician, in turn, agrees to honor that trust, and to become the patient’s advocate in all health-related matters.'); ?></p>
        <p><?php echo t('As a caregiver, you are probably stepping into a situation where your older parents already are seeing one or more physicians for various ailments. Stepping into those relationships can often make you feel like the “third wheel” initially. We are not suggesting that you go to every office visit with your older parents, but in the future, your caregiving role may include and require this so that you may best advocate for you parents.'); ?></p>
        <p><?php echo t('This brings us to the third component of CARE Coaching, that of <b>relating</b>. The most important factor in the patient-doctor relationship is communicating or relating. It fairly obvious that if a patient cannot communicate well with his or her physician, that’s a problem. How do you know that your older parents’ doctor is relating? Here are some questions to asking your parents:'); ?></p>
        <ul>
          <li><?php echo t('Is your doctor listening to what you are saying?'); ?></li>
          <li><?php echo t('Does your doctor show understanding about your concerns by responding meaningfully to them?'); ?></li>
          <li><?php echo t('When your doctor explains medical issues to you, are they made to be understandable?'); ?></li>
          <li><?php echo t('Is your doctor patient with you and willing to draw out questions you may have?'); ?></li>
        </ul>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Understanding the Health Care System and Utilization by Older Adults -->
    
    <div id="lesson-4-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Video – How to Communicate with the Physician'); ?></h2>
        <hr />
        <p><?php echo t('Have you ever left a doctor\'s appoinment feeling that your questions were not answered? Or not sure what you were supposed to do next? Do not worry, you are not alone. Dr. Lori Whittaker, a family physician in Seattle, shares tips and advice for how to speak up for yourself when you are at the doctor\'s office. Good communication is a two way street, and it is up to you to make sure you get the treatment and the information you need to stay healthy.'); ?>
        <p>
          <iframe width="420" height="315" src="http://www.youtube.com/embed/rEt8xfQ9z1U?rel=0" frameborder="0" allowfullscreen></iframe>
        </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Understanding the Health Care System and Utilization by Older Adults -->
    
    <div id="lesson-4-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Helping Older Parents Talk to Medical Professionals about Health Care'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('J0289491r.jpg'); ?>" alt="image" />
        <p><?php echo t('Occasionally, it may be feel intimidating to speak to physicians for one reason or another. At times, the actions of the doctor may appear that he or she has little time to spend with us. At other times, we may feel “inadequate” in our knowledge and use of “medical terms,” feeling like we speak a different language than physicians.'); ?></p>
        <p><?php echo t('Older adults may especially loath to question physicians because they were raised in a generation where doctors were considered to be above reproach. Many of today’s generation of health care professionals encourage questions and want their patients to play a role in their health care.'); ?></p>
        <p><?php echo t('In planning for your discussions with your older parents and their physicians, remember that as their caregiver, you have an obligation to understand your parents’ medical care.'); ?></p>
        <p><?php echo t('Another important consideration for you as the caregiver to understand relates to patient privacy requirements and rights. If you are not the medical guardian (or power of attorney) for your parents, they must give consent for you to get information about their health care.'); ?></p>
        <p><?php echo t('On the other hand, if you are the medical guardian of your parents and they are either too young, too old or too sick to speak about their medical history themselves, it is perfectly reasonable for you to take that role with health care professionals. Remember to be especially diplomatic with older adults who may take offense at being “spoken for.” Try to work out who will be the chief medical historian and speaker before you enter the doctor’s office.'); ?></p>
        <p><?php echo t('The next exercise will coach you through learning to use “PowerPhrases” – short, specific expressions that get results by saying what it means and meaning what it says. By planning some specific phrases to use in advance of a doctor’s appointment, older adults find that they can impact the outcome of the interaction.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Understanding the Health Care System and Utilization by Older Adults -->
    
    <div id="lesson-4-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Exercise – How are You with PowerPhrases?'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('J0315447r.jpg'); ?>" alt="image" />
        <p><?php echo t('How familiar does this sound? George has been waiting in the exam room for his physician to come in for over 50 minutes. He has counted the floor and ceiling tiles at least six times and needs to use the bathroom out in the hall, but is unwilling to get up with just the examining gown to cover him.'); ?></p>
        <p><?php echo t('When George’s physician entered, he seemed rush and distracted. He glanced at George’s file and talked rapidly throughout the brief exam. George has several questions that he wanted to discuss that were very personal. Because the physician seemed so rushed, George was not comfortable asking his questions.'); ?></p>
        <p><?php echo t('The physician told George that his blood pressure was high and he was going to give him a prescription for something (he didn’t say what!). The physician walked out. A few minutes later, a nurse walked in and handed George a prescription telling him that he may get dressed now. George figured that he would just have to ask his pharmacist the questions.'); ?></p>
        <p><?php echo t('Given the pressures of managed care, it is common for physicians to space appointments 15 minutes apart. The need for expediency can result in communication breakdowns that may result in inadequate care or serious consequences.'); ?></p>
        <p><?php echo t('A “PowerPhrase” is a short, specific expression that gets results by saying what it means and meaning what it says (without being mean!). By planning specific phrases to use prior to an appointment, the results can be much more favorable to the patient.'); ?></p>
        <p> <?php echo t('Let’s do an exercise to see your current “PowerPhrase” skill level.  Click on the following icon to take a quick survey.'); ?> </p>
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ExercisePowerPhraseSurvey.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" width="48" height="48" class="normal" /></a> <?php echo t('PowerPhrase Survey'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Understanding the Health Care System and Utilization by Older Adults -->
    
    <div id="lesson-4-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Practicing PowerPhrases with Your Health Provider'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('CARECoachingOnlineImages/J0321054.JPG'); ?>" alt="image" width="400" height="267" />
        <p><?php echo t('Now that you have assessed your PowerPhrase skill level, we will now focus on PowerPhrases related to your health care provider to ensure a positive visit. By planning specific phrases to use in advance of the appointment, the patient can impact the outcome of the visit. You may find these helpful not only for your older parents, but also for your own use when visiting your doctor.'); ?></p>
        <p><?php echo t('Here is another typical scenario. You are visiting your mother one Sunday afternoon. You notice that she appears to be limping and favoring one side when she walks. You say, “Mom, I noticed you are limping. Are you having some difficulty walking?” She says, “Yes, my left shin is very painful. It’s been like this for about a week.” You ask to see her shin and you notice that there is redness and swelling. She tells you that she will be seeing her doctor this Thursday. You offer to accompany her, and she agrees.'); ?></p>
        <p><?php echo t('On Thursday, you take her to her appointment and accompany her to the exam room. Dr. Palmer enters and asks your mom how she is feeling. Your mom replies, “Fine, thank you.” Dr. Palmer reviews the laboratory results and says, “Your iron level is a bit low. I’ll give you a B12 injection and you’ll feel as good as new!” “Thank you, doctor,” replies your mom. With that the doctor exits to see his next patient.'); ?></p>
        <p><?php echo t('What just happened here? Unfortunately for many older adults, this is a typical office visit. Without some preplanning for the visit and selection of PowerPhrases, that potentially serious problems may go unaddressed.'); ?></p>
        <p><?php echo t('Think of PowerPhrases as the means to tell the doctor exactly what he or she needs to know. You or your older parent should not leave the visit until all your questions are answered.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Understanding the Health Care System and Utilization by Older Adults -->
    
    <div id="lesson-4-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Practicing PowerPhrases with Your Health Provider (continued)'); ?></h2>
        <hr />
        <p><?php echo t('Here are some starter PowerPhrases to be used in response to the doctor’s opening question “How are you doing?”:'); ?></p>
        <ul>
          <li><i><?php echo t('“I have a pain in my…..that started about……”'); ?></i></li>
          <li><i><?php echo t('“My symptoms are….”'); ?></i></li>
        </ul>
        <p><?php echo t('With these simple prompts, the doctor can begin the exam with the understanding of “<b>what brought you here today.</b>”'); ?></p>
        <p><?php echo t('It is important that your older parent brings a list of pertinent information to readily provide the doctor with details that may be important. It is also an opportunity to learn more about potential issues that may arise, say from drug interactions. Some PowerPhrases include:'); ?></p>
        <p><i><?php echo t('“These are the medications I am currently taking…..”'); ?></i></p>
        <p><i><?php echo t('“These are the vitamins and herbs I take….Which of these may interact with my medications?”'); ?></i></p>
        <p><i><?php echo t('“What does this drug do?”'); ?></i></p>
        <p><?php echo t('At times, you or your older parent may feel rushed. It is essential that you or your older parent feels comfortable saying so to the doctor. This one may take practice!'); ?></p>
        <p><?php echo t('Some PowerPhrases are:'); ?></p>
        <ul>
          <li><i><?php echo t('“I am aware that you are busy. However, I am feeling rushed and I need to be sure that my questions are answered. Please give me the time I need.”'); ?></i></li>
          <li><i><?php echo t('“I’m not comfortable with how fast you are talking. I need you to slow down and help me understand.”'); ?></i></li>
          <li><i><?php echo t('“I understand that you are busy. However, I want to make sure you understand my symptoms and that I learn everything you can teach me about my condition and care.”'); ?></i></li>
        </ul>
        <p><?php echo t('For this activity, you will prepare for the doctor’s visit and practice PowerPhrases. You may want to practice with your older parent or you may role play with your spouse, relative, or friend.'); ?></p>
        <p><?php echo t('<i>Self-Coaching Hint</i>: Be assertive but not aggressive in communicating with your parent’s doctors. Most doctors and other health care professionals today want to ask questions and be asked about health care issues by their patients.'); ?></p>
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ActivityPracticingPowerPhraseswithYourHealthProvide.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" width="48" height="48" class="normal" /></a> <?php echo t('Click the icon to access the activity.'); ?> </p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Understanding the Health Care System and Utilization by Older Adults -->
    
    <div id="lesson-4-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Learning What You Need to Know About the Health Care System'); ?></h2>
        <hr />
        <p><?php echo t('Learning What You Need to Know About the Health Care System'); ?></p>
        <p><?php echo t('Learning what you need to know about the health care system can seem a daunting task. We break down some of the core components that are key for you to understand as caregivers for older parents. This information is not meant to be comprehensive, but provides you a starting point to better understand the complexities that are today’s health care system.'); ?></p>
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/Lesson4Handouts.zip'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" width="48" height="48" class="normal" /></a> <?php echo t('Click the icon below to access the folloiwng handouts: <i>People, Places, Things and More Things</i>'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
    </div>
  </div>
  
  <!-- Relocation and Transfers by Older Adults within the Health Care System -->
  
  <div id="lesson-5">
    <div id="lesson-5-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Relocation and Transfers by Older Adults within the Health Care System - Topics'); ?></h2>
        <hr />
        <h4><?php echo t('“I Think It’s Time We Sell the House.”'); ?></h4>
        <p><?php echo t('In Section 2, we focused on a framework and experiences in communicating effectively with your older parents. Probably the one area that is most challenging to discuss with older parents deals with their ability to continue to live independently in their own home or apartment.'); ?></p>
        <h4><?php echo t('CARE Coaching: Encouraging'); ?></h4>
        <p> <?php echo t('The fourth and final component of CARE Coaching is that of encouraging. The decision to move to a retirement community is often a difficult one for older adults and families alike. Changes in health or other factors typically drive this decision, but being proactive and understanding how to make educated choices is key.'); ?></p>
        <h4><?php echo t('Activity – Relocating Scenarios'); ?></h4>
        <p> <?php echo t('How can I convince my older parents to move to a retirement community? Here are two scenarios for you to respond to.'); ?></p>
        <h4><?php echo t('General Indicators When It May be Time to Consider Moving'); ?></h4>
        <p> <?php echo t('Although each situation is going to be very different, often medical conditions or mental awareness change warrant considering a move to a place where help with activities of daily living is available. In other cases, older adults may begin to find that tasks like cooking, housekeeping, shoveling snow, mowing the lawn, and taking care of home repairs have become a burden. Here are some general indicators to consider.'); ?></p>
        <h4><?php echo t('Understanding the Options: From Staying at Home to Retirement Living'); ?></h4>
        <p> <?php echo t('Major life changes are seldom easy particularly when it comes to considering moving out of one’s home with all its memories. Our aging population and growing consumer expectations for choice and quality in care for older adults have sparked an increasing number of options for older adults and their families. We will look at some of those choices in this next section.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Relocation and Transfers by Older Adults within the Health Care System - Topics (continued)'); ?></h2>
        <hr />
        <h4><?php echo t('“Aging in Place” - Planning for the Future'); ?></h4>
        <p> <?php echo t('“Aging in place” is a term often used to describe an older adult’s ability to stay in one location over the course of one’s life even as their medical and personal needs change over time. That may refer to living in a senior living community that provides services and care across the aging continuum or it may refer to continuing to live in one’s home and have services and care brought in by outside health care agencies.'); ?></p>
        <h4><?php echo t('What are Other Options for my Older Parents?'); ?></h4>
        <p> <?php echo t('Understanding all of one’s options is important in making a big decision such as relocating. The more preplanning that can occur as well as understanding all options is key. Let’s look at some additional options for older adults.'); ?></p>
        <h4><?php echo t('Exercise – Visiting a Senior Living Community'); ?></h4>
        <p> <?php echo t('The best way to understand senior living communities is to actually visit one in your area. We have developed the following checklist that you may print and take with you on your visit. We recommend visiting a CCRC so that you may get an idea of the different levels of services and care that are available to residents.'); ?></p>
        <h4><?php echo t('Long Distance Caregiving'); ?></h4>
        <p> <?php echo t('With many grown children seeking new career opportunities or needing to relocate due to their job away from their parents and the home in which they were raised, long distance caregiving has grown as an issue in our society. Here are some fast facts.'); ?></p>
        <h4><?php echo t('Activity – CARE Coaching through Long Distance Caregiving') ?></h4>
        <p> <?php echo t('Read the following scenario and then respond to the CARE coaching questions. We provide some initial “openers” for CARE coaching questions for you to more fully develop your own questions.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('“I Think It’s Time We Sell the House.”'); ?></h2>
        <hr />
        <p><?php echo t('In Section 2, we focused on a framework and experiences in communicating effectively with your older parents. Probably the one area that is most challenging to discuss with older parents deals with their ability to continue to live independently in their own home or apartment.'); ?></p>
        <p><?php echo t('In the “perfect world,” your parents call you one day and say, “Your father and I were talking today about how difficult it is for us to keep up the house. All the housework, lawn upkeep, snow shoveling. So we’ve decided to sell the house and move to that new retirement community in the next town.”'); ?></p>
        <p><?php echo t('Your response, “Whew! Thanks mom and dad for making this decision!”'); ?></p>
        <p><?php echo t('In reality, the discussion of potential relocation can be challenging – not just with your parents, but siblings and other relatives may have different viewpoints. Additionally, there are so many more choices in senior living options today even compared to ten years ago. We address some of those options in this section.'); ?></p>
        <p><?php echo t('Probably more important than the question, “Where will they live?” is the question, “How will they live?” For their quality of life to be enhanced, discussion questions must extend beyond health and safety issues (although these are important as well!). These are some of the types of questions to explore with your older parents:'); ?></p>
        <ul>
          <li><?php echo t('How do you want to live?'); ?></li>
          <li><?php echo t('What’s most important to you?'); ?></li>
          <li><?php echo t('What do you enjoy?'); ?></li>
          <li><?php echo t('What do you hope for?'); ?></li>
          <li><?php echo t('What gives you the greatest pleasure?'); ?></li>
          <li><?php echo t('What do you want more of in your lives?'); ?></li>
          <li><?php echo t('What gives meaning to your lives?'); ?></li>
          <li><?php echo t('What give you joy in your lives?'); ?></li>
        </ul>
        <p><?php echo t('Watch the following brief video to introduce yourself to senior living options.'); ?></p>
        <h5><?php echo t('Video – Learn about Senior Living'); ?></h5>
        <p>
          <iframe width="560" height="315" src="http://www.youtube.com/embed/4nHlzHS4PVg" frameborder="0" allowfullscreen></iframe>
        </p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching: Encouraging'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('J0289491r.jpg'); ?>" alt="image" />
        <p><?php echo t('The fourth and final component of CARE Coaching is that of encouraging. The decision to move to a retirement community is often a difficult one for older adults and families alike. Changes in health or other factors typically drive this decision, but being proactive and understanding how to make educated choices is key.'); ?></p>
        <p><?php echo t('Encouraging our older parents can take many forms. Primarily, we want to encourage them to be as independent as possible for as long as possible. Sometimes an older person experiences changes in health or mental awareness that is very gradual and that is “under the radar” of their children or friends. Older persons may learn effective “cues” to help them remember important events or when to pay bills. It may be as simple as keeping a calendar or written lists of when the past visits occurred with their doctors. We should encourage those “cues” that are effective in promoting independence.'); ?></p>
        <p><?php echo t('Sometimes older adults may not realize the range of options open to them if living alone seems to be challenging in some respects. Encouraging may take the form of providing accurate information about possible options for living arrangements. It is not uncommon today for adult children to be making the first visit to a retirement community to gain a better understanding of what services, programs, and amenities are being offered prior to a visit by their older parents.'); ?></p>
        <p><?php echo t('When the decision to move is made by your parents, encouraging their transition is important. Some retirement communities now offer “short stays” for prospective residents. This may be a way to introduce your parents to the new environment, while still being able to return home before making the move permanent.'); ?></p>
        <p><?php echo t('Engaging your parents in the process of choosing what furniture, household items, and personal treasures to take to their new home is important. Encouraging them to “personalize” their new home will make the transition easier. There are services available (senior move managers) across the country that focus specifically on helping older adults “downsize” from large family homes to smaller spaces. They can do everything from coordinating the entire move, packing and unpacking the home, and arranging for sales, consignment, or donation of items that would not be part of the move. Learn more about senior move managers at the professional association’s website (www.nasmm.org).'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Relocating Scenarios'); ?></h2>
        <hr />
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ActivityRelocatingScenarios.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a> <?php echo t('How can I convince my older parents to move to a retirement community? Here are two scenarios for you to respond to.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('General Indicators When It May be Time to Consider Moving'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('11829067r.png'); ?> " alt="image" />
        <p><?php echo t('Although each situation is going to be very different, often medical conditions or mental awareness change warrant considering a move to a place where help with activities of daily living is available. In other cases, older adults may begin to find that tasks like cooking, housekeeping, shoveling snow, mowing the lawn, and taking care of home repairs have become a burden.'); ?></p>
        <p><?php echo t('Some general indicators to consider:'); ?></p>
        <p><i><?php echo t('Is your older parent experiencing significant weight loss?'); ?></i></p>
        <p><?php echo t('Cooking for one can often be a chore especially for an older adult. When you eat alone, you eat less. Well-balanced meals can often be inconvenient to prepare.'); ?>
        <p><i><?php echo t('Does your older parent experience mood changes, depression, or isolation?'); ?></i></p>
        <p><?php echo t('As we get older, we tend to isolate ourselves and depression may set in. Older adults do not always experience depression in the same ways as younger adults. Older adults tend to have physical symptoms with depression, and so depression is often difficult to diagnose. Many older adults (and their health providers unfortunately!) believe that depression is just part of getting older!'); ?></p>
        <p><i><?php echo t('Do you or your older parent have concerns about safety?'); ?></i></p>
        <p><?php echo t('A two-story home can be difficult for many people with mobility problems particularly if the bedrooms, bathrooms, and laundry are on the second floor. On average, about one-third of all older adults have a fall each year most often in their own home.'); ?></p>
        <p><i><?php echo t('Do you or your older parent have concerns about security issues?'); ?></i></p>
        <p><?php echo t('Unfortunately, criminals prey on older adults. It is not uncommon to hear about cases where older adults are taken advantage of in their home by unscrupulous vendors or even prey to home invaders who may harm the older adult in addition to robbing the home.'); ?></p>
        <p><i><?php echo t('Does your older parent need help with daily tasks?'); ?></i></p>
        <p><?php echo t('Many retirement communities offer assisted living for residents to “age in place.” Personalized plans of care are designed to help with dressing, grooming, bathing, and medications.'); ?></p>
        <p><?php echo t('One last question to consider is, "<i>Will moving be any easier next spring, next year, five or even ten years down the road</i>?" In just about every case, the answer is “no.”'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Understanding the Options: From Staying at Home to Retirement Living'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('4919555r.png'); ?>" alt="image" />
        <p><?php echo t('Major life changes are seldom easy particularly when it comes to considering moving out of one’s home with all its memories. In past years, older parents had two options – either struggle to stay in one’s home, often one spouse caring for the other, or else resort to expensive (and frequently inadequate) nursing home care. The stress on the caregiving spouse can also have negative effects on his or her health and well-being.'); ?></p>
        <p><?php echo t('Our aging population and growing consumer expectations for choice and quality in care for older adults have sparked an increasing number of options for older adults and their families. We will look at some of those choices in this next section.'); ?></p>
        <p><?php echo t('Retirement living has many names and faces. The “industry” typically refers to “retirement living” as “senior living.” Retirement communities are referred to as “senior living communities.” There is basically three levels of care in senior living:'); ?></p>
        <ul>
          <li><?php echo t('Independent Living'); ?></li>
          <li><?php echo t('Assisted Living'); ?></li>
          <li><?php echo t('Long-Term Care/Nursing Homes'); ?></li>
        </ul>
        <p><?php echo t('<i>Independent living communities</i> provide services, programs, and amenities to older adults who are able to function relatively independently in their homes. Services and programs often focus on supporting independence and wellness among residents. Independent living communities generally consists of homes, condominiums, town houses, apartments, and/or mobile and motor homes where residents maintain an independent lifestyle. Some communities offer only minimal services such as building and grounds maintenance, and security. The residential units may be rented on a monthly basis or owned as condominiums or cooperatives. Basically they are no different from other residential enclaves except that there is an age restriction (over 55) or an age target. Depending on the community, residents are often able to bring in home care services or personal assistants for periods of time after an illness episode or hospitalization to aid in recuperation.'); ?></p>
        <p><?php echo t('<i>Assisted living communities</i> provide care for seniors who need some help with activities of daily living yet wish to remain as independent as possible. A middle ground between independent living and nursing homes, assisted living communities aim to foster as much autonomy as the resident is capable of. Most communities offer 24-hour supervision and an array of support services, with more privacy, space, and dignity than many nursing homes at lower costs.     There are approximately 33,000 assisted living communities operating in the U.S. today. The number of residents living in a facility can range from several to 300, with the most common size being between 25 and 120 residents. Assisted living staff helps residents with daily personal care including bathing, dressing, eating, grooming, and getting around. Medical care is limited, but families may contract for some medical needs such as medication administration or home health care. Assisted living communities focus on what is termed a “social model” of care (e.g., promoting social engagement and supporting individual care needs).'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Understanding the Options: From Staying at Home to Retirement Living (continued)'); ?></h2>
        <hr />
        <p><?php echo t('To understand more about assisted living – levels of care, caring for loved ones with dementia, how to pay for one, and how to evaluate one – search the Web and download the “ Gilbert Buide - Assisted Living Evaluation and Moving Kit.”'); ?></p>
        <h5><a href="<?php echo $this->getImagesUrl('CCOAssets/GilbertGuideALToolkit.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('Download Gilbert Guide – Assisted Living Evaluation and Moving Kit'); ?></h5>
        <p><?php echo t('Watch the following brief video to learn more about assisted living.'); ?></p>
        <h5><?php echo t('Video – Learn about Assisted Living'); ?></h5>
        <p>
          <iframe width="420" height="315" src="http://www.youtube.com/embed/_9DdN7kXw5w?rel=0" frameborder="0" allowfullscreen></iframe>
        </p>
        <p><?php echo t('Long-term care communities, or nursing homes, may be independent or part of a senior continuing care community, providing medical and nursing care.  Residents may be there temporarily for a period of rehabilitation, or may be there for long-term care.  State regulations define the services that nursing homes may provide.  Registered Nurses who help provide 24-hour care to people who can no longer care for themselves due to physical, emotional, or mental conditions.  A physician supervises each resident’s care and a nurse or other medical professional is almost always on the premises.  Most nursing homes have two basic types of services: skilled medical care and custodial care.  Nursing homes offer an array of services, in addition to the basic skilled nursing care and the custodial care.  They provide a room, all meals, some social activities, personal care, 24-hour nursing supervision and access to medical services when needed.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('“Aging in Place” - Planning for the Future'); ?></h2>
        <hr />
        <p><?php echo t('“Aging in place” is a term often used to describe an older adult\’s ability to stay in one location over the course of one\’s life even as their medical and personal needs change over time. That may refer to living in a senior living community that provides services and care across the aging continuum or it may refer to continuing to live in one\’s home and have services and care brought in by outside health care agencies.'); ?></p>
        <p><?php echo t('A “Continuing Care Retirement Community (CCRC)” are different from other types of housing for older adults as they provide customized living quarters, personal care services, and health care all at one location. A benefit to older couples is the fact that if one partner\’s health begins to fail, he or she may receive required care within that same community or campus. Most CCRCs provide all three levels of service described on the previous page:'); ?></p>
        <ul>
          <li><?php echo t('Independent Living'); ?></li>
          <li><?php echo t('Assisted Living'); ?></li>
          <li><?php echo t('Long-Term Care'); ?></li>
        </ul>
        <p><?php echo t('“Retirement living” is changing with a greater emphasis on wellness and quality of life for residents. The next generations of older adults are redefining what they are looking for in the next phase of their lives. Read about some of these changes happening in some Tucson area senior living communities.'); ?></p>
        <h5><a href="<?php echo $this->getImagesUrl('CCOAssets/RetirementRedefinedArticle.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('Retirement Redefined'); ?></h5>
        <p><?php echo t('Requirements for applicants and payment options vary considerably for CCRCs. Within the current housing market, many CCRCs are offering payment plan options or assistance to older couples who may need to sell their current home prior to moving to the new community. Many CCRCs offer what is termed “life care contracting.” Life care communities provide the same continuum of care to a resident for life, but the biggest difference is this: <b>residents who become financially unable to pay their monthly care fees are subsidized by the community, with the same access to services, and with no interruption in care or change in priority status</b>. In other words, residents are guaranteed the same quality of care and access to care from day one through end-of-life, regardless of their personal financial situation. Additionally, most life care communities offer all health care services on the same campus. The idea is that, after qualifying through a health and financial application process, residents will never have to move again, except between levels of care as needed.'); ?></p>
        <p><?php echo t('The following guide provides more information about types of contracts common to CCRCs. Because there are various across states in terms of these contracts, it is important that you also investigate your state’s requirements.'); ?></p>
        <h5> <a href="<?php echo $this->getImagesUrl('CCOAssets/GilbertGuideILTookit.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('Download Gilbert Guide – Independent Living & CCRC Evaluation Kit'); ?></h5>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('What are Other Options for my Older Parents?'); ?></h2>
        <hr />
        <p><?php echo t('Understanding all of one\'s options is important in making a big decision such as relocating. The more preplanning that can occur as well as understanding all options is key. Let’s look at some additional options for older adults.'); ?></p>
        <p><i><?php echo t('Active Adult Communities'); ?></i></p>
        <p><?php echo t('Active Adult Communities are one of the fastest growing segments of the housing market for older adults. Also known as “55+ communities” or “lifestyle communities,” these offer homes and community features attractive to 55+ adults. Many are master-planned communities that have a clubhouse or lifestyle center with numerous activities, pools, exercise equipment, golf courses, and more. Attractive to older adults is the option of a “maintenance free” lifestyle with “like-minded” adults who may share similar social and activity interests. Homes are often designed to be efficient and easier to get around. Security is also a benefit as a number are in gated communities.'); ?></p>
        <p><?php echo t('View an example of a Florida Active Adult Community in the following video.'); ?></p>
        <h5><?php echo t('Video – Active Adult Community'); ?></h5>
        <p>
          <iframe width="560" height="315" src="http://www.youtube.com/embed/ji-srBxj5MA?rel=0" frameborder="0" allowfullscreen></iframe>
        </p>
        <p><i><?php echo t('Affordable Senior Housing Options'); ?></i></p>
        <p><?php echo t('For a number of older adults, the cost of entering an active adult community or CCRC may pose a financial barrier.  What is also termed “Section 202 Housing” - named after the section of the federal legislation authorizing it – this is rental housing specifically for people over the age of 62 who have incomes under 50 percent of the area median income.  According to HUD, the U.S. Department of Housing and Urban Development, the average Section 202 resident is a woman in her 70s with an annual income of less than $10,000.  Section 202 residences are built and run by private, non-profit groups who have received loan incentives from HUD. HUD is not involved in day to day operations. Rents are calculated according to income, and rental assistance funds pay whatever balance remains.'); ?></p>
        <p><?php echo t('View the following brief video about affordable senior housing.'); ?></p>
        <h5><?php echo t('Video – Affordable Senior Housing'); ?></h5>
        <p>
          <iframe width="420" height="315" src="http://www.youtube.com/embed/cUrdKp8MGEw?rel=0" frameborder="0" allowfullscreen></iframe>
        </p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Exercise – Visiting a Senior Living Community'); ?></h2>
        <hr />
        <p><?php echo t('The best way to understand senior living communities is to actually visit one in your area. Because many adult children visit senior living communities prior to having their older parents come for a tour, many senior living communities are very welcoming to adult children.'); ?></p>
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ExerciseVisitingaSeniorLivingCommunity.pdf'); ?>" target="_blank"><img class="normal" src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" /></a> <?php echo t('Click on the icon to access the activity: Visiting a Senior Living Community'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Long Distance Caregiving'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('78634274r.jpeg'); ?>" alt="image" />
        <p><?php echo t('With many grown children seeking new career opportunities or needing to relocate due to their job away from their parents and the home in which they were raised, long distance caregiving has grown as an issue in our society.'); ?></p>
        <p><?php echo t('Here are some fast facts to consider:'); ?></p>
        <ul>
          <li><?php echo t('Seven million American caregivers provide 80% of the care to vulnerable or ill family members.'); ?></li>
          <li><?php echo t('There are approximately 3.3 million long distance caregivers.'); ?></li>
          <li><?php echo t('Caregivers live an average of 480 miles from the people for which they care.'); ?></li>
          <li><?php echo t('Caregivers spend an average of four hours traveling to that person.'); ?></li>
          <li><?php echo t('15 millions days are missed from work each year because of long distance caregiving.'); ?></li>
          <li><?php echo t('The number of long distance caregivers will double over the next 15 years.'); ?></li>
        </ul>
        <p><?php echo t('Long distance caregiving can range from providing physical care to helping with bills or just paying a visit. The good news is that you are not on your own as a long distance caregiver. There are many resources available. Sometimes, the main issue is not the availability of resources, but acceptance by older adults to receiving outside help.'); ?></p>
        <p><?php echo t('Let us start there and practice some coaching skills.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – CARE Coaching through Long Distance Caregiving'); ?></h2>
        <hr />
        <p><?php echo t('Read the following scenario and then respond to the CARE coaching questions. We provide some initial “openers” for CARE coaching questions for you to more fully develop your own questions.'); ?></p>
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ActivityCARECoachingthroughLongDistanceCaregiving.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('CARE Coaching through Long Distance Caregiving'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Some Common Questions (and Answers) for Long Distance Caregivers'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('J0285068r.jpg'); ?>" alt="image" />
        <p><?php echo t('Long distance caregivers can be helpful regardless of the distance! Here are some common questions (and answers) for long distance caregivers.'); ?></p>
        <ol start="1">
          <li>
            <p><?php echo t('What is the basic information I should have at hand as a long distance caregiver?'); ?></p>
          </li>
          <ol>
            <li><?php echo t('Have contact information from your older parents’ neighbors. Make sure they know how to reach you in an emergency.'); ?></li>
            <li><?php echo t('check out local resources and services (usually through a local area agency on aging, library, or senior center). Check with your parents which ones they may find helpful and check back on whether they have initiated contacts.'); ?></li>
            <li><?php echo t('Have a current list of your parents’ medications (prescription and over-the-counter) including dosages, schedule, and reasons they
are taking.'); ?></li>
            <li><?php echo t('When you visit their home, be observant for changes in the environment or potential safety hazards.'); ?></li>
            <li><?php echo t('Find out if you parents have “advanced directives” that outline their health care treatment preferences.'); ?></li>
          </ol>
          <li>
            <p><?php echo t('What can I really expect to do from a distance? I don’t feel comfortable just stepping into a situation.'); ?></p>
          </li>
          <ol>
            <li><?php echo t('Educate yourself on what you need to know about your parents’ health care, their needs and preferences, and other pertinent information.'); ?></li>
            <li><?php echo t('Plan your visits ahead of time. Decide on priorities they may have.'); ?></li>
            <li><?php echo t('Everything in your visit should not just be about caregiving. Plan to actually “visit” during your visits!'); ?></li>
            <li><?php echo t('Stay in contact and encourage your parents to do the same.'); ?></li>
          </ol>
          <li>
            <p><?php echo t('How can I feel less frustrated and angry with the caregiving situation?'); ?></p>
          </li>
          <ol>
            <li><?php echo t('Feeling frustrated and angry is very common among caregivers regardless of distance.'); ?></li>
            <li><?php echo t('Plan to give yourself a break and just do something for yourself.'); ?></li>
          </ol>
        </ol>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Relocation and Transfers by Older Adults within the Health Care System -->
    
    <div id="lesson-5-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Some Common Questions (and Answers) for Long Distance Caregivers (continued)'); ?></h2>
        <hr />
        <ol start="4">
          <li>
            <p><?php echo t('What is a geriatric care manager and how can one help?'); ?></p>
          </li>
          <ol>
            <li><?php echo t('Geriatric care managers are licensed nurses or social workers who specialize in geriatric care.'); ?></li>
            <li><?php echo t('The geriatric care manager is hired by a family to evaluate and assess an older parent’s needs and to coordinate care through community resources.'); ?></li>
            <li><?php echo t('When choosing one, you want to check references as well as find out their experience, fees, and if they are a member of the National Association of Professional Geriatric Care Managers.'); ?></li>
          </ol>
          <li>
            <p><?php echo t('How can I get my mother some relief in caring for my father?'); ?></p>
          </li>
          <ol>
            <li><?php echo t('Respite care provides one a break from caregiving responsibilities – it can be for an afternoon or for several days.'); ?></li>
            <li><?php echo t('Care can be provided in the home, in an adult day care center, or in a senior living community.'); ?></li>
          </ol>
          <li>
            <p><?php echo t('What if my mom says, “Promise me you’ll never put me in a nursing home”?'); ?></p>
          </li>
          <ol>
            <li><?php echo t('This request usually follows some horrendous story on the news about a nursing home death. Most of us want to stay in our own homes, to be independent, and to be cared for by relatives and friends.'); ?></li>
            <li><?php echo t('Think carefully before making this type of promise. Assuring your parents that you will look out for them in their best interests and provide quality of care is what is really important. For some illnesses, long-term care may be the sole option. Discovering too late that such promises cannot be kept has often resulted in terrible feelings of guilt by the caregiver for many years.'); ?></li>
            <li><?php echo t('Rather than a promise that cannot be kept, another way to respond is, “Dad, I will make sure you have the best care we can arrange. You can count on me to try and do what’s best for everyone. I can’t think of a situation where I’d walk out on you.”'); ?></li>
          </ol>
          <li>
            <p><?php echo t('What are some other resources for long distance caregivers?'); ?></p>
          </li>
          <ol>
            <li><?php echo t('Obtain a free Caregiver Resource Directory that provides resources, facts, and advice about caring for a family member as well as for yourself. www.netofcare.org/crd/resource_form.asp'); ?></li>
            <li><?php echo t('Benefits Check UP is a free online service provided by the National Council on Aging which allows people to find programs that can help them meet health care costs. www.benefitscheckup.org'); ?></li>
            <li><?php echo t('ARCH National Respite Network and Resource Center provides resources and information including a respite locator program and information clearinghouse. www.archrespite.org'); ?></li>
            <li><?php echo t('Eldercare Locator is a nationwide service helping identify local resources for older adults.  www.eldercare.gov'); ?></li>
            <li><?php echo t('National Family Caregivers Association supports family caregivers and offers education, information, and referrals.  www.nfcacares.org'); ?></li>
          </ol>
        </ol>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
    </div>
    
    <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
    
    <div id="lesson-6">
      <div id="lesson-6-slide-1" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Promoting Safety of Older Relatives and Friends in Caring for Themselves'); ?></h2>
          <hr />
          <h4><?php echo t('Knowledge Itself is Power'); ?></h4>
          <p> <?php echo t('When we consider how to promote safety of older adults so that they may remain independent for as long as possible, having knowledge and understanding what’s important will facilitate decision making in the future. In this section, we look at several scenarios – all of which relate to safety in some way – that are commonly faced by family caregivers and their older parents.'); ?></p>
          <h4><?php echo t('Home Safety and Older Adults'); ?></h4>
          <p> <?php echo t('Regardless if your parents remain in their own home, move to a senior living community, or move in with you, home safety is an important topic for discussion. The overall goal of assessing home safety needs and making modifications as necessary is to give older adults a sense of independence in their environment.'); ?></p>
          <h4><?php echo t('Activity – Using Your Powers of Observation'); ?></h4>
          <p> <?php echo t('During your next visit, use your powers of observation to note changes in several areas. You may want to make mental notes and then jot down some of your observations privately. We have included some general questions to get you started in this activity.'); ?></p>
          <h4><?php echo t('Additional Home Safety Resources'); ?></h4>
          <p> <?php echo t('The U.S. Consumer Product Safety Commission estimates that over 1.5 million adults ages 65 and older are treated each year in hospital emergency rooms due to injuries from hazards in the home. The Commission believes that many of these injuries are preventable with some simple steps to correct the hazards. Here are some general recommendations and downloadable resources to consider.'); ?></p>
          <h4><?php echo t('Considering Your Older Parents Moving in with You?'); ?></h4>
          <p> <?php echo t('More than 3.6 million older adults live with their children (up 67% from 2000) according to U.S. Census figures. With the economy and housing market issues, many more examples of older parents moving in with their children are coming to light.'); ?></p>
          <h4><?php echo t('Exercise – Assessing the Situation'); ?></h4>
          <p> <?php echo t('This exercise provides an opportunity for you and your family to consider key questions to explore potential for having older parents move in with you. As you read through each section, we include some CARE Coaching questions to bring out your best thinking about what would be important to you.'); ?> </p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-2" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Promoting Safety of Older Relatives and Friends in Caring for Themselves (continued)'); ?></h2>
          <hr />
          <h4><?php echo t('Driving Concerns and Older Adults'); ?></h4>
          <p> <?php echo t('According to driving statistics, older adults have more fatal car accidents than any other age group. Additionally, older adults are more at risk for death after being involved in a car accident because of their age and health condition.'); ?></p>
          <h4><?php echo t('When to Limit or Stop Driving – Warning Signs'); ?></h4>
          <p> <?php echo t('AARP has developed a list of warning signs about when to limit or stop driving.'); ?></p>
          <h4><?php echo t('CARE Coaching: Talking to Your Parents about Their Driving'); ?></h4>
          <p> <?php echo t('Bringing up the discussion on driving is very challenging. By using CARE Coaching methods and breaking the driving conversation with your older parents into steps, you can better draw out the issues and support your parents in their transition.'); ?></p>
          <h4><?php echo t('Exercise Promotes Safety and Independence'); ?></h4>
          <p> <?php echo t('Exercise for older adults is an important contributor to safety and independence. Many studies have demonstrated the positive benefits of exercise for older adults regardless of age. As we get older exercise is incredibly important to our overall health.'); ?></p>
          <h4><?php echo t('Activity – Resources on Exercises Designed for Older Adults'); ?></h4>
          <p> <?php echo t('Provided are some resources from the National Institute on Aging and exercise physiologists on exercises designed for older adults.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-3" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Knowledge Itself is Power'); ?></h2>
          <hr />
          <img src="<?php echo $this->getImagesUrl('5342290r.png'); ?>" alt="image" />
          <p><?php echo t('You’ve heard this phrase many times – probably even from your parents during your education years. It was actually first documented by Sir Frances Bacon back in the 16th century. When we consider how to promote safety of older adults so that they may remain independent for as long as possible, having knowledge and understanding what’s important will facilitate decision making in the future.'); ?></p>
          <p><?php echo t('In this section, we look at several scenarios – all of which relate to safety in some way – that are commonly faced by family caregivers and their older parents. We address several topics including:'); ?></p>
          <ul>
            <li><?php echo t('Home safety tips'); ?></li>
            <li><?php echo t('Moving my parents into my home'); ?></li>
            <li><?php echo t('The “driving” conversation'); ?></li>
            <li><?php echo t('Importance of exercise for older adults and its impact on safety'); ?></li>
          </ul>
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-4" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Home Safety and Older Adults'); ?></h2>
          <hr />
          <p><?php echo t('Regardless if your parents remain in their own home, move to a senior living community, or move in with you, home safety is an important topic for discussion. The overall goal of assessing home safety needs and making modifications as necessary is to give older adults a sense of independence in their environment.'); ?></p>
          <p><?php echo t('Accidents in the home are a major source of injury for older adults and can cause disability and sometimes death. For older adults, did you know that the vast majority of falls occurs going between the bedroom and bathroom? A simple fall that results in broken bones can develop into a serious, disabling injury limiting one’s independence. As one ages, senses of sight, hearing, touch, and smell tend to decline. Physical abilities are often reduced and certain movements that are important in daily tasks (such as stretching, lifting, and bending) are more difficult. Reaction time or judgment may slow.'); ?></p>
          <p><?php echo t('As a result, an older person cannot respond as quickly as a younger person in all situations. These normal aging changes may make an older person more prone to accidents. Simple precautions and adjustments may ensure a safe home.'); ?></p>
          <p><?php echo t('There are several areas of the home to assess regarding safety issues:'); ?></p>
          <ul>
            <li><?php echo t('General safety (lighting, access, electrical, heating, water, medication storage)'); ?></li>
            <li><?php echo t('Kitchen'); ?></li>
            <li><?php echo t('Stairways and halls'); ?></li>
            <li><?php echo t('Living room'); ?></li>
            <li><?php echo t('Bathroom'); ?></li>
            <li><?php echo t('Bedroom'); ?></li>
            <li><?php echo t('Outdoor area'); ?></li>
          </ul>
          <p><i><?php echo t('CARE Coaching Tip – Be Alert!'); ?></i></p>
          <p><?php echo t('You may be a situation where your older parents are living alone and you live quite a distance away, maybe even across the country. You may not get back to visit on a regular basis, but the last time you visited, you noticed “little things” around the house that seemed “out of place” for them. You decide that on the hanksgiving holiday visit, you want to evaluate how they are doing. Remember, this should not be an inspection for purposes of judgment or criticism. Rather, think of this as a part wellness check, part well-being check, and part safety check. Things may be getting difficult to handle around the house for your older parents, and they may just be reluctant to bring them up with you because “you’ve got so much on your plate just now.”'); ?></p>
          <p><?php echo t('You want to try to be as subtle as possible. Don’t look like you are checking up on them. Use what you notice as openings for conversations. Do it privately (not a great opener for the family Thanksgiving table conversation!).'); ?></p>
          <p><i><?php echo t('“Mom, I noticed you were having a bit of trouble reading that label. What if we change the light bulbs in here?”'); ?></i></p>
          <p><?php echo t('Offer to do little things around the house. Don’t always wait for a “yes” or “no” response, as they may be too proud to ask for help. Just let them know that you’d like to use some of the time to be helpful and supportive.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-5" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Activity – Using Your Powers of Observation'); ?></h2>
          <hr />
          <p><?php echo t('During your next visit, use your powers of observation to note changes in the following areas. You may want to make mental notes and then jot down some of your observations privately. We have included some general questions to get you started. In this activity, you will add some of your own specific questions that you may want to assess during your visit.'); ?></p>
          <p><a href="<?php echo $this->getImagesUrl('CCOAssets/ActivityUsingYourPowersofObservation.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('Click on the icon to access the activity - Using Your Powers of Observation.'); ?></p>
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-6" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Additional Home Safety Resources'); ?></h2>
          <hr />
          <p><?php echo t('The U.S. Consumer Product Safety Commission estimates that over 1.5 million adults ages 65 and older are treated each year in hospital emergency rooms due to injuries from hazards in the home.  The Commission believes that many of these injuries are preventable with some simple steps to correct the hazards.  Some of these steps are valuable in your own home to prevent injuries in general.  Here are some general recommendations to consider.  Following the general recommendations are links to downloadable resources.'); ?></p>
          <p class="subtopic"><?php echo t('General Recommendations for Home Safety'); ?></p>
          <table>
            <tr>
              <td><h5><?php echo t('Area'); ?></h5></td>
              <td><h5><?php echo t('Recommendations'); ?></h5></td>
            </tr>
            <tr>
              <td><p><?php echo t('Exposed cords from lamps, extensions, and telephones'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Arrange furniture so that outlets are    available for lamps and appliances without use of numerous extension cords.'); ?></li>
                  <li><?php echo t('If you use extension cords, place it along the wall on the floor where people cannot trip over it.'); ?></li>
                  <li><?php echo t('Move the telephone so that the cord does not lie where people walk.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Cords covered by carpets and rugs'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Remove cords from under carpeting or rugs as they may fray and cause a fire.'); ?></li>
                  <li><?php echo t('Replace damaged or frayed cords.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Overloaded extension cords'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Overloaded extension cords may cause    fires.  A standard 18 gauge extension    cord can carry 1250 watts.') ?></li>
                  <li><?php echo t('Change to a higher rated cord if the wattage is exceeded.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Rugs, runners, and mats'); ?> </p></td>
              <td><ul>
                  <li><?php echo t('Remove rugs and runners that tend to slide.'); ?></li>
                  <li><?php echo t('Used double-faced adhesives or matting to backs or rugs or runners to prevent sliding.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Accessibility to the telephone'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Have at least one telephone located where it would be accessible in the event of an accident where someone has fallen and can&rsquo;t get up. This can be simply a phone that can be pulled down from a table by grabbing the cord.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Smoke detectors'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Check location of smoke detectors according to the instructions that came with the detector.'); ?></li>
                  <li><?php echo t('Detectors should be placed near bedrooms on the ceilings or 6-12 inches below the ceiling on the wall.'); ?></li>
                  <li><?php echo t('Locate smoke detectors away from air vents.'); ?></li>
                  <li><?php echo t('Replace batteries annually!'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Electrical    outlets/switches'); ?></p></td>
              <td><ul>
                  <li><?php echo t('If an outlet or switch plate feels warm or hot to the touch, wiring may be unsafe. Carefully unplug cords from that outlet and do not use the switch. Have an electrician check the wiring as soon as possible.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Light bulbs'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Bulbs of too high a wattage or the wrong time may lead to fire through overheating.'); ?></li>
                  <li><?php echo t('Replace the bulb with one of correct    wattage and type.  If you don&rsquo;t know    the wattage, use a bulb no larger than 60 watts.'); ?></li>
                </ul></td>
            </tr>
          </table>
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-7" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Additional Home Safety Resources (continued)'); ?></h2>
          <hr />
          <table>
            <tr>
              <td><p><?php echo t('Space heaters'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Relocate heaters away from passageways and    flammable materials such as curtains, rugs, and furniture.'); ?></li>
                  <li><?php echo t('Unvented heaters should be used with room    doors open or windows slightly open to provide ventilation.'); ?></li>
                  <li><?php echo t('Improper venting is the most frequent cause of carbon monoxide poisoning and older persons are at higher risk.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Emergency escape plan'); ?></p></td>
              <td><ul>
                  <li><?php echo t('It is important that each household has an    emergency escape plan in case of fire.     This plan should include at least two ways to exit the house.'); ?></li>
                  <li><?php echo t('Practice the plan from time to time.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Kitchen range/oven'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Store flammable and combustible items away    from the range and oven.'); ?></li>
                  <li><?php echo t('Remove towels hanging on oven handles.  If towels hang close to a burner, change    the location of the towel rack.'); ?></li>
                  <li><?php echo t('Keep curtains away from the range/oven.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('High cabinets/shelves'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Standing on chairs, boxes, or other    makeshift items to reach high cabinets or shelves can result in falls.'); ?></li>
                  <li><?php echo t('Get a step stool with a handle if it is    necessary for reaching.'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Bathrooms'); ?></p></td>
              <td><ul>
                  <li><?php echo t('Apply textured strips or appliqués on the    floors of tubs and showers.'); ?></li>
                  <li><?php echo t('Use non-skid mats in the tub and shower and    on the bathroom floor.'); ?></li>
                  <li><?php echo t('Install 1-2 grab bars in tubs and showers –    check for strength and stability!'); ?></li>
                </ul></td>
            </tr>
            <tr>
              <td><p><?php echo t('Medications'); ?> </p></td>
              <td><ul>
                  <li><?php echo t('All medication containers should be clearly    marked with contents, instructions, expiration date, and patient name.'); ?></li>
                  <li><?php echo t('Dispose of outdated medications properly.'); ?></li>
                  <li><?php echo t('If the older person has difficultly opening    medication containers, the pharmacy can supply non-child-resistant lids when    requested.'); ?></li>
                </ul></td>
            </tr>
          </table>
          <p><?php echo t('Here are links to other resources on home safety particularly in relation to older adults.'); ?></p>
          <p><?php echo t('<a href="http://www.homemods.org/resources/doable-home/index.shtml" target="_blank"><b>The Do Able Renewable Home</b></a>.  This booklet is designed to help overcome problems experienced in the home as one grows older.  Content was developed in collaboration with gerontologists to make the home more livable.'); ?></p>
          <p><a href="<?php echo $this->getImagesUrl('CCOAssets/LightingInTheHome.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('<b>Lighting the Way: A Key to Independence</b>. This resource provides a number of recommendations to help older adults see better.  From home lighting to doing small tasks, many suggestions can easily be implemented with simple modifications.'); ?></p>
          <p><a href="<?php echo $this->getImagesUrl('CCOAssets/HomeSafetyChecklist.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('<b>Home Safety Checklist</b>. This is a simple checklist that you can use when visiting your older parents to assess safety issues in their home environment.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-8" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Considering Your Older Parents Moving in with You?'); ?></h2>
          <hr />
          <img src="<?php echo $this->getImagesUrl('3663024r.png'); ?>" alt="image" />
          <p><?php echo t('More than 3.6 million older adults live with their children (up 67% from 2000) according to U.S. Census figures. It is a growing family dynamic that is gaining national attention with President Barack Obama’s mother-in-law, Marian Robinson, moved into the White House to help with her young granddaughters. With the economy and housing market issues, many more examples of older parents moving in with their children are coming to light. Older adults who may have been planning to sell their home and use the proceeds to living in a senior living residence may be delaying their decision or realizing they will not get enough money from the house sale to make the move.'); ?></p>
          <p><?php echo t('The children may also be facing financial difficulties of their own. “Merging” finances and obligations may benefit everyone in these types of arrangements. One son commented that he “gets to see a different side of his mother and father. They are not just parents, they’re people, and once you recognize that, you work with it and it’s fun.”'); ?></p>
          <p><?php echo t('Interestingly, an entire new housing opportunity is developing with this “return” to multiple generations living under a single roof. Called “multigenerational housing,” these homes are often designed with a master and guest (in-law) suite on the main floor, both with private bath and walk-in closet. An open plan with lots of gathering areas and additional bedroom and recreation areas upstairs provides families with flexible living space.'); ?></p>
          <p><?php echo t('“Giving each other space” is a valuable recommendation for those considering these living arrangements, particularly if the older parents are independent.'); ?></p>
          <p><i><?php echo t('CARE Coaching Hints:'); ?></i></p>
          <ul>
            <li><?php echo t('Hold regular family conferences to discuss issues or problems that may come up. Often, it is much easier to discuss awkward subjects when everyone is together and in the mood to talk.'); ?></li>
            <li><?php echo t('If your parents have health problems, set up an emergency contact system and make sure everyone knows what it is. This could be a buzzer or alarm in the bedroom or shower. Preprogram their telephones with your cell phone or pager number.'); ?></li>
            <li><?php echo t('Consider safety issues for children and seniors living in the same house. Make sure that medications with non-childproof bottle tops are not easily within reach, and make sure toys are left on the floor or stairs.'); ?></li>
            <li><?php echo t('Caregiving can take a lot of time and energy, so make sure you still put aside some quality time for yourself, and for your spouse and children. If you begin to feel overwhelmed by your family responsibilities, arrange for outside help or respite, or find a caregivers support group in your area.'); ?></li>
          </ul>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-9" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Exercise – Assessing the Situation'); ?></h2>
          <hr />
          <p><?php echo t('This exercise provides an opportunity for you and your family to consider key questions to explore potential for having older parents move in with you. You may not be thinking about this at the present time, but you may have other family members or friends considering various options and so this may be helpful to them as well. These questions can serve as a guide for discussions with your family. As you read through each section, we include some CARE Coaching questions to bring out your best thinking about what would be important to you. '); ?></p>
          <p><a href="<?php echo $this->getImagesUrl('CCOAssets/ExerciseAssessingtheSituation.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="image" class="normal" /></a><?php echo t('Click on the icon to access the activity - Assessing the Situation.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-10" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Driving Concerns and Older Adults'); ?></h2>
          <hr />
          <img src="<?php echo $this->getImagesUrl('3223247r.jpg'); ?>" alt="image" />
          <p><?php echo t('According to driving statistics, older adults have more fatal car accidents than any other age group. Additionally, older adults are more at risk for death after being involved in a car accident because of their age and health condition.'); ?></p>
          <p><?php echo t('By 2030, it is estimated that 25% of the driving population will be age 65 years and older. Currently, about 14% of all people killed in traffic accidents are older adults, and that percent is expected to increase to 25%.'); ?></p>
          <p><?php echo t('In addition to being a danger to themselves, many of these accidents result in injury or death of others.'); ?></p>
          <p><?php echo t('<i>How does increased age impact driving ability</i>? Several physical and cognitive changes that are part of normal aging or that are related to chronic illnesses may affect driving ability in older adults. Not all older adults experience these changes, but the following are some of the reasons older adults are more prone to car accidents:'); ?></p>
          <ul>
            <li><?php echo t('Slowed reaction time'); ?></li>
            <li><?php echo t('Vision problems'); ?></li>
            <li><?php echo t('Hearing problems'); ?></li>
            <li><?php echo t('Decreased ability to focus'); ?></li>
            <li><?php echo t('Changes in depth perception'); ?></li>
            <li><?php echo t('Feeling nervous or anxious'); ?></li>
            <li><?php echo t('Medical conditions that impact mobility'); ?></li>
          </ul>
          <p><?php echo t('<i>Why is driving so important to older adults</i>? Driving for most people – and particularly for older adults – means independence. I can go where I want, when I want, without having to rely on others. Some older adults may not want to inconvenience their family or friends.'); ?></p>
          <p><?php echo t('<i>How can I help someone else limit or stop driving</i>? In most cases, drivers monitor themselves and gradually limit or stop driving when they feel that a certain driving situation or driving in general is not safe. However, some people fail to recognize declining abilities, or they fear stopping to drive because it will make them permanently dependent on others for the necessities of life, and it may reduce their social and leisure activities as well. Conditions such as dementia or early stages of Alzheimer\'s disease may make some drivers unable to evaluate their driving properly.'); ?></p>
          <p><?php echo t('Let’s look at some of the warning signs and steps you may take to address this issue with older family members or friends.'); ?></p>
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-11" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('When to Limit or Stop Driving – Warning Signs'); ?></h2>
          <hr />
          <p><?php echo t('The following list of warning signs comes from the American Association of Retired People (AARP).'); ?></p>
          <p><i><?php echo t('What are the warning signs when someone should begin to limit driving or stop altogether?'); ?></i></p>
          <table>
            <tr>
              <td><ul>
                  <li><?php echo t('Feeling uncomfortable and nervous or fearful while driving'); ?></li>
                  <li><?php echo t('Dents and scrapes on the car or on fences, mailboxes, garage doors, curbs etc.'); ?></li>
                  <li><?php echo t('Difficulty staying in the lane of travel'); ?></li>
                  <li><?php echo t('Getting lost'); ?></li>
                  <li><?php echo t('Trouble paying attention to signals, road signs and pavement markings'); ?></li>
                  <li><?php echo t('Slower response to unexpected situations'); ?></li>
                  <li><?php echo t('Medical conditions or medications that may be affecting the ability to handle the car safely'); ?></li>
                  <li><?php echo t('Frequent "close calls" (i.e. almost crashing)'); ?></li>
                  <li><?php echo t('Trouble judging gaps in traffics at intersections and on highway entrance/exit ramps'); ?></li>
                  <li><?php echo t('Other drivers honking at you and instances when you are angry at other drivers'); ?></li>
                  <li><?php echo t('Friends or relatives not wanting to drive with you'); ?></li>
                  <li><?php echo t('Difficulty seeing the sides of the road when looking straight ahead'); ?></li>
                  <li><?php echo t('Easily distracted or having a hard time concentrating while driving'); ?></li>
                  <li><?php echo t('"Having a hard time turning around to check over your shoulder while backing up or changing lanes'); ?></li>
                  <li><?php echo t('Frequent traffic tickets or "warnings" by traffic or law enforcement officers in the last year or two'); ?></li>
                </ul></td>
            </tr>
          </table>
          <p><?php echo t('If you notice one or more of these warning signs with your older parents, you may want to have their driving assessed by a professional or have them attend a driver refresher class. You may also want to consult with their doctor if you notice unusual concentration or memory problems, or other physical symptoms that may be affecting ability to drive.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-12" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('CARE Coaching: Talking to Your Parents about Their Driving'); ?></h2>
          <hr />
          <p><?php echo t('Remember what it was like when you got your first driver’s license? That sense of pride and freedom stays with you throughout your life. You certainly come to appreciate the independence driving means if you have ever been dependent on someone to drive you around even for a short time period perhaps while you were recuperating from surgery.'); ?></p>
          <p><?php echo t('We are a mobile culture. In many areas, public transportation is scarce or unsafe for older adults. We want our older parents to be safe, but the last thing we want is for them to feel isolated, trapped, and alone in their own home.'); ?></p>
          <p><?php echo t('Bringing up the discussion on driving is very challenging. The best way to think about this is to keep the perspective that there is a continuum of possibilities on the “continue driving” to “quit driving” scale. By using CARE Coaching methods and breaking the driving conversation with your older parents into steps, you can better draw out the issues and support your parents in their transition.'); ?></p>
          <h5><?php echo t('Step 1: Be a Coach in the Driving Discussion'); ?></h5>
          <p><?php echo t('Remember that most children wait too long for the driving discussion – either until their parents driving has deteriorated or until a major accident occurs. Consider yourself more of a coach in the discussion. Begin by letting them know how much you value their independence, judgment, and their concern for safety for themselves and for others. Let them know that this conversation will help all of you think through what happens if and when they need to retire from driving. At this point, you want them to think and imagine what that would be like for them and how they would like that process to go.'); ?></p>
          <p class="subtopic"><?php echo t('CARE Coaching Questions'); ?></p>
          <ul>
            <li><?php echo t('How will you know when it’s time to retire from driving?'); ?></li>
            <li><?php echo t('How do you think we should plan along the way?'); ?></li>
            <li><?php echo t('What would you think about using some assessments along the way?'); ?></li>
            <li><?php echo t('If you don’t notice it’s time to retire from driving, how would you like the conversation to go?'); ?></li>
            <li><?php echo t('As we continue this discussion, can we include a plan so that you can continue to be as independent as possible?'); ?></li>
          </ul>
          <p class="subtopic"><?php echo t('Resources'); ?></p>
          <p><a href="<?php echo $this->getImagesUrl('CCOAssets/DriverSelfAssessment.pdf'); ?>" target="_blank"><img class="normal" src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="" /></a><b><?php echo t('Driver Self-Assessment'); ?></b><br />
            <?php echo t('Here is a self-assessment for older adults from ElderSafety.org to help them identify what should be noticed regarding aging changes that may impact their ability to drive safely.'); ?></p>
          <p><a href="http://www.usatoday.com/life/graphics/elderly_drivers_popup/flash.htm" target="_blank" /><b><?php echo t('How Age Affects the Ability to Drive'); ?></a></b><br />
            <?php echo t('This interactive guide from USA Today provides visual descriptions of changes that occur during normal aging that may impact one’s ability in driving.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-13" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('CARE Coaching: Talking to Your Parents about Their Driving (continued)'); ?></h2>
          <hr />
          <h5><?php echo t('Step 2: Noticing the First Changes'); ?></h5>
          <p><?php echo t('Physical and cognitive changes with aging variy considerably from very sudden and dramatic to very subtle and barely noticeable.  Preparing and being willing to compensate for these changes will promote their safety and the safety of others.  In many communities, finding a group of older adults who are tackling driving issues together may be a positive way to address some of those initial changes through sharing.  Watch the following video to see how one church group addressed their issues through an AARP Driving Safety course.'); ?></p>
          <h5><?php echo t('Video – Senior Driving Safety'); ?></h5>
          <p>
            <iframe width="420" height="315" src="http://www.youtube.com/embed/YLW-GEJBMik?rel=0" frameborder="0" allowfullscreen></iframe>
          </p>
          <p class="subtopic"><?php echo t('CARE Coaching Questions'); ?></p>
          <ul>
            <li><?php echo t('Begin with reviewing what you discussed last time and goals that you and your parents came up with on how to promote their independence while keeping them safe driving.'); ?></li>
            <li><?php echo t('Taking a look at what we talked about last time, what are you wanting?'); ?></li>
            <li><?php echo t('One of the things I found out is that there are some driving refresher courses that you may take that will often give you a nice discount on your care insurance.  What would you think about that?  Could we check one out together?'); ?></li>
          </ul>
          <p class="subtopic"><?php echo t('Resources'); ?></p>
          <p><a href="http://apps.dmv.ca.gov/about/senior/senior_self_ess.html
" target="_blank" /><b><?php echo t('Drivers Self-Assessment'); ?></b></a><br />
            <?php echo t('This self-assessment at seniordrivers.org provides a quick self-assessment for older drivers to review their driving knowledge and skills.'); ?></p>
          <p><a href="http://www.aarp.org/families/driver_safety/driver_safety_online_course.html
" target="_blank" /><b><?php echo t('AARP Driver Safety Online Course'); ?></b></a><br />
            <?php echo t('AARP offers an online driver safety course (about 8 hours in length) for a nominal charge.  The course is designed for older drivers to learn about normal age-related changes and how to adjust driving to allow for these changes.  Successful completion of the course may qualify participants for car insurance discounts (please check with your insurance company for specifics in your state).'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-14" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('CARE Coaching: Talking to Your Parents about Their Driving (continued)'); ?></h2>
          <hr />
          <h5><?php echo t('Step 3: Tracking Warning Signs'); ?></h5>
          <p><?php echo t('It is probably not uncommon that you see some older drivers on the road who may be going much slower than traffic or seem confused making turns into busy intersections.  There may be a point where professionals are needed to assess older adult’s driving abilities.  The family physician is a good starting point, particularly if you have not been successful in bringing up the driving discussion on your own.  As we noted earlier in this course, the physician is an authority figure to many older adults and so they may listen more closely to the doctor’s recommendations.  Additionally, the physician can check for other medical conditions or medications that may need adjusting that could be altering motor functions and driving ability.'); ?></p>
          <p><?php echo t('A Driving Rehabilitation Specialist (DRS) can provide a more in depth analysis of your parent’s driving ability.  The DRS can perform an initial assessment, help make recommendations for limitations on driving (such as no night driving), and plan driving routes.  Driver rehabilitation classes may also be available in your area to help older adults learn alternate driving techniques to make driving safer.'); ?></p>
          <p><?php echo t('Watch the following video of a DRS working with an older adult client.'); ?></p>
          <h5><?php echo t('Video – Driving Rehabilitation Specialist'); ?></h5>
          <p>
            <iframe width="420" height="315" src="http://www.youtube.com/embed/6GpNJ-zh1rc" frameborder="0" allowfullscreen></iframe>
          </p>
          <p class="subtopic"><?php echo t('CARE Coaching Questions'); ?></p>
          <ul>
            <li><?php echo t('I have noticed you seem tenser behind the wheel.  What situations really get to you when you’re driving?'); ?></li>
            <li><?php echo t('I am concerned that something medical or your medications may be affecting your driving.  Can we make an appointment to see your doctor to help correct things that may be interfering with your driving?'); ?></li>
            <li><?php echo t('What would you think about working out a plan with a professional to help make sure that you can keep driving safely?'); ?></li>
          </ul>
          <p class="subtopic"><?php echo t('Resources'); ?></p>
          <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/WarningSignsOlderDrivers.pdf'); ?>" target="_blank" /><img class="normal" src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="" /></a> <b><?php echo t('Warning Signs for Older Drivers'); ?></b><br />
            <?php echo t('This checklist is for families to track potential warning signs for older drivers so that patterns may be identified early on.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-15" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('CARE Coaching: Talking to Your Parents about Their Driving (continued)'); ?></h2>
          <hr />
          <h5><?php echo t('Step 4:  When It’s Time to Retire from Driving'); ?></h5>
          <p><?php echo t('Retiring from driving is one of the most difficult moments in your older parent’s life.  In the ideal world, there has been time to prepare for this transition and your parents are part (if not taking the lead) on this decision.  No matter how much preparation went into planning, giving up driving is a major loss needing time to grieve and adjust.  There are a number of families with older parents who are no longer driving, but just keeping the car in the garage as a “symbol” of independence for that older parent is not that uncommon.'); ?></p>
          <p><?php echo t('Rather than saying, “time to take away the keys,” the goal should be that your parents are in the position to say, “It’s time to retire from driving.”'); ?></p>
          <p class="subtopic"><?php echo t('CARE Coaching Questions'); ?></p>
          <ul>
            <li><?php echo t('It seems that driving is becoming more of a struggle for you.  What do you think?'); ?></li>
            <li><?php echo t('We’ve tried several things along the way (review what those were).  It seems like those things are not keeping you as safe anymore.  Considering this, what stands out for you?'); ?></li>
            <li><?php echo t('Your safety and freedom are what’s most important to both of us.  If we can map out alternate plans to get you everywhere you need to go and try that out for a couple of weeks, what would you think about trying that plan?'); ?></li>
          </ul>
          <p class="subtopic"><?php echo t('Resources'); ?></p>
          <p><a href="http://www.driver-ed.org/i4a/pages/index.cfm?pageid=1
" target="_blank" /><b>Finding a Certified Driving Rehabilitation Specialist</b></a><br />
            <?php echo t('Click on this link to search for a certified Driving Rehabilitation Specialist in your area.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-16" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('CARE Coaching: Talking to Your Parents about Their Driving (continued)'); ?></h2>
          <hr />
          <h5><?php echo t('Step 5: Promoting Independence Post-Driving'); ?></h5>
          <p><?php echo t('Post-driving, it is very important to help your older parents remain independent so they do not become isolated and depressed, trapped in their own home.  They may need some help from you to create a plan to promote their freedom.   The plan should respond to the following questions:'); ?></p>
          <ul>
            <li><?php echo t('Where do your parents need to go on a weekly basis? (like the grocery store, hairdresser, church services, etc.)'); ?></li>
            <li><?php echo t('Where do your parents need to go other than weekly? (like the doctor’s office, banking, other appointments)'); ?></li>
            <li><?php echo t('Where do your parents enjoy going for socializing? for entertainment?'); ?></li>
            <li><?php echo t('Who are their resources for alternatives to transportation? (neighbors/friends attending the same event; transportation for older adults offered through their community or church)'); ?></li>
            <li><?php echo t('Which of these alternatives are realistic and reliable?'); ?></li>
            <li><?php echo t('What public transportation options are available and acceptable?'); ?></li>
            <li><?php echo t('Where are the gaps?'); ?></li>
          </ul>
          <p class="subtopic"><?php echo t('Resources'); ?></p>
          <p><a href="https://www.aaafoundation.org/sites/default/files/stp.pdf
" target="_blank" /><b><?php echo t('Supplemental Transportation Programs (STPs)'); ?></b></a><br />
            <?php echo t('The purpose of STPs is to provide alternative transportation to older adults who have limitations to their driving or are no longer driving.  They are designed to be more flexible than other forms of transportation.  Some include “door-to-door” service to assure the older adult arrives safely to their destination and back.  All drivers are screened and trained.'); ?></p>
          <p><a href="http://itnamerica.org" target="_blank" /><b><?php echo t('Independent Transportation Network (ITN)'); ?></b></a><br />
            <?php echo t('A newer program that is in limited numbers of areas is the ITN which combines creative transportation alternatives for older adults, but coordinates volunteers, community services and agency connections to make it work.  Find an affiliate program on their website.'); ?></p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-17" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Exercise Promotes Safety and Independence'); ?></h2>
          <hr />
          <p><?php echo t('Exercise for older adults is an important contributor to safety and independence.  Many studies have demonstrated the positive benefits of exercise for older adults regardless of age.  As we get older exercise is incredibly important to our overall health. Watch the following video with active older people talking about how physical activity has enhanced their lives and experts giving their advice.'); ?></p>
          <h5><?php echo t('Video – Older Adults and Exercise'); ?></h5>
          <p>
            <iframe width="420" height="315" src="http://www.youtube.com/embed/Y1Uoce6hfyc" frameborder="0" allowfullscreen></iframe>
          </p>
          <p><?php echo t('Before beginning an exercise program, it is important that your parents consult their physician.'); ?></p>
          <p class="subtopic"><?php echo t('Where to Start?'); ?></p>
          <p><?php echo t('It is important to wear loose, comfortable clothing and well-fitting, sturdy shoes.  Shoes should have a good arch support, and an elevated and cushioned heel to absorb shock.'); ?></p>
          <p><?php echo t('If not already active, one should begin slowly.  Starting slowly makes it less likely that injury will occur.  Starting slowly also helps prevent soreness from "overdoing" it.  The saying "no pain, no gain" is not true for older or elderly adults.  One does not have to exercise at a high intensity to get most health benefits.'); ?></p>
          <p><?php echo t('Walking, for example, is an excellent activity to start.  As one gets used to exercising, or if already active, a person can slowly increase the intensity of the exercise program.'); ?></p>
          <p class="subtopic"><?php echo t('What Types of Exercises are Good for Older Adults?'); ?></p>
          <p><?php echo t('There are several types of exercise that are effective for older adults.  At least 30 minutes of aerobic activity is recommended daily.  Examples are walking, swimming, and bicycling.  Resistance or strength training is recommended twice a week.'); ?></p>
          <p><?php echo t('Warm up for five minutes before each exercise session.  Walking slowly and stretching are good warm-up activities.  After finishing exercising, cool down with more stretching for five minutes.  Cool down longer in warmer weather.'); ?></p>
          <p><?php echo t('What are Some Safety Tips for Older Adults Related to Exercise?'); ?></p>
          <ul>
            <li><?php echo t('Wait at least 2 hours after you eat to start your exercise routine.'); ?></li>
            <li><?php echo t('Do not exercise if you have a fever.'); ?></li>
            <li><?php echo t('Do not exercise if you have high blood pressure and have not consulted your doctor for your limits.'); ?></li>
            <li><?php echo t('If your knee or elbow or ankle is swollen, painful and warm to the touch DO NOT exercise, see a doctor.'); ?></li>
            <li><?php echo t('If you have osteoporosis, talk to your doctor about any exercises that would be safe. Exercise that involves stretching or flexing the spine should be approved directly by your doctor.'); ?></li>
            <li><?php echo t('Do not exercise if you develop a new pain or symptom. Swelling, shortness of breath, extreme tiredness and you should get your parents to the doctor.'); ?></li>
          </ul>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-18" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Activity – Resources on Exercises Designed for Older Adults'); ?></h2>
          <hr />
          <p><?php echo t('The National Institutes on Aging has developed an online guide for older adults.  A number of example exercises are presented with easy to follow steps and pictures.  Exercises focus on areas including endurance, flexibility, balance, and strength training.  Click on the following link to access the guide:'); ?></p>
          <p><a href="http://www.nia.nih.gov/HealthInformation/Publications/ExerciseGuide/default.htm" target="_blank"><?php echo t('Exercise & Physical Activity: Your Everyday Guide from the National Institute on Aging'); ?></a></p>
          <p class="subtopic"><?php echo t('Exercise Videos'); ?></p>
          <p><?php echo t('These are meant to be example exercises and do not constitute a complete exercise regimen.'); ?></p>
          <h5><?php echo t('Video – Chair Stand Strengthening'); ?></h5>
          <p>
            <iframe width="420" height="315" src="http://www.youtube.com/embed/ukJnjYM9LeA?rel=0" frameborder="0" allowfullscreen></iframe>
          </p>
          <h5><?php echo t('Video – Seated Chair Leg Stretch'); ?></h5>
          <p>
            <iframe width="560" height="315" src="http://www.youtube.com/embed/ueHKUenfLtY" frameborder="0" allowfullscreen></iframe>
          </p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-19" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Activity – Resources on Exercises Designed for Older Adults (continued)'); ?></h2>
          <hr />
          <h5><?php echo t('Video – Seated Knee Extensions'); ?></h5>
          <p>
            <iframe width="420" height="315" src="http://www.youtube.com/embed/q7b7HgPYQN8" frameborder="0" allowfullscreen></iframe>
          </p>
          <h5><?php echo t('Video – Calf Muscle Exercise'); ?></h5>
          <p>
            <iframe width="420" height="315" src="http://www.youtube.com/embed/rEfS6AfIgS4" frameborder="0" allowfullscreen></iframe>
          </p>
        </div>
        <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
      </div>
      
      <!-- Promoting Safety of Older Relatives and Friends in Caring for Themselves -->
      
      <div id="lesson-6-slide-20" class="course-slide">
        <div class="content">
          <h2 class="flowers"><?php echo t('Activity – Resources on Exercises Designed for Older Adults (continued)'); ?></h2>
          <hr />
          <h5><?php echo t('Video – Shoulder Strengthening'); ?></h5>
          <p>
            <iframe width="420" height="315" src="http://www.youtube.com/embed/SUWH6Tf6bNk" frameborder="0" allowfullscreen></iframe>
          </p>
          <h5><?php echo t('Video – Bicep Curls'); ?></h5>
          <p>
            <iframe width="420" height="315" src="http://www.youtube.com/embed/7NqpW_TWEi0" frameborder="0" allowfullscreen></iframe>
          </p>
          <br />
          <br />
        </div>
        <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
      </div>
    </div>
    
    <!-- Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making -->
    
    <div id="lesson-7-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making'); ?></h2>
        <hr />
        <h4><?php echo t('It’s All about Choice'); ?></h4>
        <p><?php echo t('Self-determination means having the freedom to be in charge of one’s own life, choosing where you live, who you spend time with, and what you do every day.  It means having the resources you need to create a good life and to make responsible decisions.  We all want to feel that we have choices in our daily lives.'); ?></p>
        <h4><?php echo t('Exercise – Identifying Solutions to Support Choice and Preferences'); ?></h4>
        <p><?php echo t('Every caregiving situation is unique.  Many factors come into play when considering the best possible solutions about your parents and their future.  In this exercise, we provide several questions for you to use as a framework to “interview” your parents regarding their choices and preferences for their future.'); ?></p>
        <h4><?php echo t('CARE Coaching Review: Talking with Your Older Parents'); ?></h4>
        <p><?php echo t('Let us just take a moment to review the core components of CARE Coaching in relation to talking with your older parents.'); ?></p>
        <h4><?php echo t('Are You a “Sandwich Generation” Caregiver?'); ?></h4>
        <p><?php echo t('If you are between the ages of 35 to 54 and are caring for both younger ones such as children and older parents or other family members and probably employed at the same time, you may be a “sandwich generation” caregivers.  You are not alone as approximately 20 million American fit this description.'); ?></p>
        <h4><?php echo t('Activity – Ways to Manage Your Own Stress'); ?></h4>
        <p><?php echo t('The American Psychological Association offers several strategies to help those in the “sandwich generation” manage their stress.  In managing stress, journaling can also be a very effective tool to help identify what situations or events trigger stressful feelings, how you deal (or don’t deal) with stress, and how you may manage stress.  In this activity, you focus on journaling to help manage stress.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a></div>
    </div>
    
    <!-- Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making -->
    
    <div id="lesson-7-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('It’s All about Choice'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('Untitled1.png'); ?>" />
        <p><?php echo t('Self-determination means having the freedom to be in charge of one’s own life, choosing where you live, who you spend time with, and what you do every day.  It means having the resources you need to create a good life and to make responsible decisions.  It also means choosing where, when, and how you get help for any problems you might have.'); ?></p>
        <p><?php echo t('We all want to feel that we have choices in our daily lives.  At times, the choices our older parents may want may not be choices we would want for them particularly if their safety or health may be at risk.  At other times, we as caregivers are tempted to want to immediately rise to the occasion and take action.  This may be because you want to help find a solution to a problem quickly.  Imposing a solution may actually make a situation more of a problem.'); ?></p>
        <p><?php echo t('If you were to walk into your supervisor’s office with a problem – say that your project is 50% over budget – and your supervisor tells you to immediately cut five of your key staff, how would you feel?  Probably shocked that your supervisor did not want to discuss the situation, examine several reasons for the overage, and come up with a couple of options – all in collaboration with you as project manager.'); ?></p>
        <p><?php echo t('The same should apply with your older parents.  You may notice that one or both are starting to forget things.  Immediately, you jump to the conclusion that they have Alzheimer’s Disease.  There are many causes of memory loss including poor nutrition, sleep problems, medications, or one’s emotional state.  You would want to take a measured approach to this issue in your discussions with your parents.'); ?></p>
        <p><?php echo t('Some general <b>Do\'s</b> and <b>Dont\'s</b>:'); ?></p>
        <p><b><?php echo t('Do:'); ?></b></p>
        <ul>
          <li><?php echo t('Assess the situation thoroughly'); ?></li>
          <li><?php echo t('Look for signs of changes (physical and mental)'); ?></li>
          <li><?php echo t('Keep notes or a record of what changes you observe'); ?></li>
        </ul>
        <p><b><?php echo t('Don\'ts:'); ?></b></p>
        <ul>
          <li><?php echo t('Immediately jump to conclusions'); ?></li>
          <li><?php echo t('Rush to make a judgment'); ?></li>
          <li><?php echo t('Immediately make the assumption'); ?></li>
        </ul>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making -->
    
    <div id="lesson-7-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Exercise – Identifying Solutions to Support Choice and Preferences'); ?></h2>
        <hr />
        <p><?php echo t('Throughout this course, you have had several opportunities to gain more understanding regarding your older parents’ needs and preferences.  Every caregiving situation is unique.  Many factors come into play when considering the best possible solutions about your parents and their future.  These factors may include: your parents’ health and functional abilities, mobility, values and beliefs, and family and community support systems.'); ?></p>
        <p><?php echo t('In this exercise, we provide several questions for you to use as a framework to “interview” your parents regarding their choices and preferences for their future.  This exercise is broken into two parts.  Please complete all of Part 1 before moving onto Part 2.'); ?></p>
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ExerciseIdentifyingSolutionstoSupportChoiceandPreferences.pdf'); ?>" target="_blank" /><img class="normal" width="48" height="48" src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" /></a> <b><?php echo t('Click the icon to access the Exercise – Identifying Solutions to Support Choice and Preferences'); ?></b></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making -->
    
    <div id="lesson-7-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching Review: Talking wih Your Older Parents'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('11829178r.jpg'); ?>" />
        <p><?php echo t('Let’s just take a moment to review the core components of CARE Coaching in relation to talking with your older parents.'); ?></p>
        <h5><?php echo t('Communicate'); ?></h5>
        <p><?php echo t('Effective communication is essential to any relationship, particularly so in caregiving situations.  It is not so much what you say, but how you say it that influences how your messages are received.'); ?></p>
        <p><?php echo t('Listening is probably more important that talking when we use CARE Coaching.  Active listening requires giving your full attention, being open and receptive.  Listen to what they are saying and use CARE Coaching techniques to understand and draw out what’s important to them.'); ?></p>
        <h5><?php echo t('Advocate'); ?></h5>
        <p><?php echo t('In terms of CARE Coaching, advocating means supporting one another rather than in the legal sense of defending someone.'); ?></p>
        <p><?php echo t('Reflect back feelings to show that you are hearing and understanding their situation.  Be comfortable with silence as that is the time when the best thinking may be going on.  To make sure that you are clear on what is being said, you may want to say, “I think what you are telling me is….”'); ?></p>
        <p><?php echo t('Setting boundaries is also important.  You can still be an advocate even on the occasion when you need to say “no” to them.  A request may not be reasonable or in your circumstance, you may not be able to comply at this time.  Complying with something but then complaining about it just sets the tone for resentment.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making -->
    
    <div id="lesson-7-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('CARE Coaching Review: Talking wih Your Older Parents (continued)'); ?></h2>
        <hr />
        <h5><?php echo t('Relate'); ?></h5>
        <p><?php echo t('It is often helpful when we think about relating to try to put yourself in “someone elses shoes.”   Think before responding to them – don’t try to relate when you are angry or upset about something.  Practice a conversation, particularly if it will be a difficult one, and try to have alternatives ready depending on the response.'); ?></p>
        <p><?php echo t('Just as important as verbal communication, your nonverbal communication – or body language – may speak volumes.  Try to use body language that would be viewed as open and positive – use eye contact, touch, and an open body stance.'); ?></p>
        <h5><?php echo t('Encourage'); ?></h5>
        <p><?php echo t('As the final component of CARE Coaching, encouraging can take on many forms.  Showing appreciation for your parents, letting them know that you realize that they tried to do the best they could.  It is not uncommon for older parents to look back and say, “I wish I could have been a better parent” or “if only I could have given you more when you were growing up.”  That is a great opportunity for you to acknowledge the characteristics that they passed on to you and the valuable things you learned from them.'); ?></p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making -->
    
    <div id="lesson-7-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Are You a “Sandwich Generation” Caregiver?'); ?></h2>
        <hr />
        <p><?php echo t('If you are between the ages of 35 to 54 and are caring for both younger ones such as children and older parents or other family members and probably employed at the same time, you may be a “sandwich generation” caregivers.  You are not alone as approximately 20 million American fit this description.'); ?></p>
        <p><?php echo t('A survey by the American Psychological Association reported that women in the “sandwich generation” feel more stress than any other age group as they have to balance the demands of caregiving two generations.  Nearly 40% of them report “extreme levels” of stress which takes a toll on both their personal relationships but also on their own well-being as they may often put their own health on the “backburner.”'); ?></p>
        <p><?php echo t('Watch the following video to see one family’s experience.'); ?></p>
        <h4><?php echo t('Video – Part of the Sandwich Generation'); ?></h4>
        <p>
          <iframe width="560" height="315" src="http://www.youtube.com/embed/55UCToPajd4?rel=0" frameborder="0" allowfullscreen></iframe>
        </p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making -->
    
    <div id="lesson-7-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Activity – Ways to Manage Your Own Stress'); ?></h2>
        <hr />
        <p><?php echo t('The American Psychological Association offers several strategies to help those in the “sandwich generation” manage their stress.  In Section 1, we address the power of journaling as a self-coaching exercise to help create positive self-talk.  In managing stress, journaling can also be a very effective tool to help identify what situations or events trigger stressful feelings, how you deal (or don’t deal) with stress, and how you may manage stress.'); ?></p>
        <p> <a href="<?php echo $this->getImagesUrl('CCOAssets/ActivityWaystoManageYourOwnStress.pdf'); ?>" target="_blank" /><img class="normal" width="48" height="48"src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" /></a> <b><?php echo t('Click the icon to access the Activity'); ?></b></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo;</a></div>
    </div>
    
    <!-- Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making -->
    
    <div id="lesson-7-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Family Communication: When Siblings Attack!'); ?></h2>
        <hr />
        <p><?php echo t('Family dynamics can be very complex.  We have been talking about your caregiving throughout this course in relation to your older parents.  We cannot forget that, in many families, family dynamics also include siblings – whether they are yours or your parents.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('56677551r.jpeg'); ?>" width="250" height="375" alt="<?php echo t('Thank You'); ?>" />
        <p> <?php echo t('With such a profound impact on society, business, and potentially your family, having the essential tools, knowledge, and skills to effectively deal with the variety of issues arising from caring for their aging parents, relatives, or loved ones, is essential to thriving in life. If necessary, please review this tutorial again if you are still not confident and comfortable being able to deal with the various challenges of caregiving.'); ?> </p>
        
        <!-- Certificate of Completion here -->
        
        <h4><?php echo t('Certificate of Completion'); ?></h4>
        <p><?php echo t('Thank you for your participation! Now that you have completed this online course, you can now download your custom Certificate of Completion. Once accessed, type your name, date, and online course title into the form-fillable certificate.'); ?></p>
        <a href="<?php echo $this->getImagesUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank"><img class="normal" src="<?php echo $this->getImagesUrl('ArtworkCertificate.png'); ?>" alt="<?php echo t('Certificate'); ?>" /></a>
        <p> <?php echo t('Again, thank you for participating in this online course. Please take a moment to complete the Post-Course Survey; accessible via the Profile Page.'); ?> </p>
        <br />
        <br />
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Course'); ?></a></div>
    </div>
    
    <!-- need final 2 divs to close course and lesson id --> 
    
  </div>
</div>
