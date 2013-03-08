<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach(array(
		'.lesson-1', 
		'.lesson-2', 
		'.lesson-3', 
		'.lesson-4', 
		'.lesson-5',) as $lesson)
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

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('154418413r.png'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
</div>
<div id="sidebar"> 
  
  <!-- sidebar #1 here -->
  <div class="box-sidebar one">
    <h3><?php echo t('Pre-Course Survey'); ?></h3>
    <br />
    <p><?php echo t('Please complete the Pre-Course Survey before beginning this course. Your response are anonymous and are used to help improve your experience.'); ?></p>
    <a href="<?php echo $this->createUrl('user/profile'); ?>" target="_self" /><img class="block-center" width="96" height="113" src="<?php echo $this->getImagesUrl('survey_icon2.png'); ?>" alt="" /></a>
    <hr />
    <p id="surveynotify"><?php echo t('Complete the<br />Pre-Course Survey'); ?></p>
    <br />
  </div>
  
  <!-- sidebar #2 here -->
  <div class="box-sidebar one">
    <h3><?php echo t('Course Requirements'); ?></h3>
       <br />
    <p><b><?php echo t('Required Applications'); ?></b></p>
    <p><a href="http://get.adobe.com/flashplayer/" target="_blank" /><img src="<?php echo $this->getImagesUrl('160x41_get_flashplayer.gif'); ?>" alt="<?php echo t('Adobe Flash Player'); ?>" /></a></p>
    <p><a href="http://get.adobe.com/shockwave/" target="_blank" /><img src="<?php echo $this->getImagesUrl('get_shockwave-tn.gif'); ?>" alt="<?php echo t('Adobe ShockWave Player'); ?>" /></a></p>
    <p><a href="http://get.adobe.com/reader/" target="_blank" /><img src="<?php echo $this->getImagesUrl('get_adobe_reader.png'); ?>" alt="<?php echo t('Adobe Reader'); ?>" /></a></p>
    <hr />
    <p><b><?php echo t('Required Software Suites'); ?></b></p>
    <p><a href="http://office.microsoft.com" target="_blank" /> <?php echo t('Microsoft Office'); ?></a></p>
    <p> <?php echo t('- OR - '); ?></p>
    <p><a href="http://www.apple.com/iwork/" target="_blank" /><?php echo t('Apple iWork'); ?></a></p>
    <p> <?php echo t('- OR - '); ?></p>
    <p><a href="http://www.openoffice.org" target="_blank" /><?php echo t('Apache OpenOffice'); ?></a></p>   <br />
  </div>
  
  <!-- SIDEBAR 3 -->
  
  <div class="box-sidebar one">
    <h3><?php echo t('Statistics'); ?></h3>
    <br />
    <img class="block-center" src="<?php echo $this->getImagesUrl('286x352_Grafix_1in5.png'); ?>" />
    <p><?php echo t('One in five caregivers report having had some degree of training, but continue to seek additional resources.'); ?></p>   <br />
  </div>
  
  <!-- SIDEBAR 4 -->
  
  <div class="box-sidebar one">
    <h3>Alzheimer's Association</h3>
       <br />
    <p> <b> <?php echo t('10 Early Signs and Symptoms of Alzheimer\'s'); ?> </b> </p>
   <p> <a href="https://www.alz.org/alzheimers_disease_10_signs_of_alzheimers.asp" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('alz.png'); ?>" /></a></p>
    <p><?php echo t('Memory loss that disrupts daily life may be a symptom of Alzheimer\'s or another dementia. Alzheimer\'s is a brain disease that causes a slow decline in memory, thinking and reasoning skills. There are 10 warning signs and symptoms. Every individual may experience one or more of these signs in different degrees. If you notice any of them, please see a doctor.'); ?></p>   <br />
  </div>
  
  <!-- SIDEBAR 5 -->
  
  <div class="box-sidebar one">
    <h3>U.S. Dept. of Health &amp; Human Srvc.</h3>
    <p> <b> <?php echo t('2011 - 2012 Alzheimer\'s Disease Progress Report'); ?> </b> </p>
    <p><a href="http://www.nia.nih.gov/alzheimers/publication/2011-2012-alzheimers-disease-progress-report" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('adpr-front.png'); ?>" /></a></p>
    <p><?php echo t('A summary of Alzheimer\'s disease research, infrastructure, and funding supported by the NIH.'); ?> </p>   <br />
  </div>
</div>

<!-- start main content section here -->

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
  <h4><?php echo t('Course Lessons'); ?></h4>
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> <?php echo t('Overview of Memory Loss'); ?></a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a></li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> <?php echo t('Communication Strategies'); ?></a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a></li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> <?php echo t('Making Decisions'); ?></a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a></li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> <?php echo t('Planning for the Future'); ?></a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> <?php echo t('Effective Ways of Coping'); ?></a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
  </ul>
  <br />
  <br />
  
   <div class="box-white">
    <h4><?php echo t('Length'); ?></h4>
    <p><?php echo t('* Participant Access - 1 Year'); ?><br />
      <?php echo t('* Recommended Completion - 5 Weeks'); ?><br />
      <?php echo t('* Weekly Commitment - 1 Lesson @ 2 to 3 Hours'); ?></p>
  </div>
  
  
  
   <div class="box-white">
    <h4><?php echo t('Key'); ?></h4>
    <p><?php echo t('The following Key will help you navigate the course and it\'s requirements.'); ?></p>
    <br />
    <table width="100%" border="0">
      <tr>
        <td width="20%"><?php echo t('Word Processor'); ?><br />
          <img width="64" height="64" src="<?php echo $this->getImagesUrl('word.png'); ?>" alt="<?php echo t('Word Processor'); ?>" /></td>
        <td width="20%"><?php echo t('Spreadsheet Processor'); ?><br />
          <img width="64" height="64" src="<?php echo $this->getImagesUrl('spreadsheet.png'); ?>" alt="<?php echo t('Spreadsheet Processor'); ?>" /></td>
        <td width="20%"><?php echo t('Email Client'); ?><br />
          <img width="64" height="64" src="<?php echo $this->getImagesUrl('email.png'); ?>" alt="<?php echo t('Email Client'); ?>" /></td>
        <td width="20%"><?php echo t('Adobe Reader'); ?><br />
          <img width="64" height="64" src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="<?php echo t('Adobe Reader'); ?>" /></td>
        <td width="20%"><?php echo t('You Tube'); ?><br />
          <img width="64" height="64" src="<?php echo $this->getImagesUrl('YouTubeIcon.png'); ?>" alt="<?php echo t('You Tube'); ?>" /></td>
      </tr>
    </table>
  </div>
  
  <div class="box-white">
    <h4> <?php echo t('Resources'); ?></h4>
    <p><?php echo t('Please use these listed resources in the completion of this online course. Pleaes contact your instructor or the program director if you have additional resources you would like to see added here.'); ?></p>
    <p><a href="http://www.alz.org" target="_blank">Alzheimer's Association</a></p>
    <p><a href="http://www.nih.gov" target="_blank">National Intitute on Health (NIH)</a></p>
    <p><a href="http://pewinternet.org" target="_blank">Pew Internet &amp; American Life Project</a></p>
  </div>
  
  
  <div class="box-white">
    <div id="developers">
      <h4><?php echo t('Facilitators &amp; Course Developers'); ?></h4>
      <h5><?php echo t('Content Designer:'); ?></a></h5>
      <p><a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a><br />
        <?php echo t('Through research-based programs and innovative techniques, Mather LifeWays Institute on Aging is committed to advancing the field of geriatric care. Cutting-edge research lays the foundation for our solid solutions to senior care challenges, including recruitment, mentorship, training, and retention. Used by individuals and entire organizations, our nationally recognized, award-winning programs include training modules, online courses, toolkits, and learning modules designed to make learning fun and easy. Our programs have been shown to result in measurable improvements in the quality of care provided and workforce retention.'); ?></p>
      <p><a href="http://www.alz.org/illinois/" target="_blank">Greater Illinois Chapter | Alzheimer's Association</a><br />
        <?php echo t('The Alzheimer’s Association, Greater Illinois Chapter serves 68 counties in Illinois with offices in Bloomington, Carbondale, Chicago, Joliet, Rockford and Springfield. Since 1980, the Chapter has provided reliable information and care consultation; created supportive services for families; increased funding for dementia research; and influenced public policy changes. Today, the Greater Illinois Chapter serves the more than a half million Illinois residents affected by Alzheimer’s disease throughout our chapter area, including 210,000 people with the disease.'); ?></p>
      <h5><?php echo t('Course Developer: '); ?><a href="mailto:jwoodall@matherlifeways.com">Jon Woodall</a></h5>
      <p><?php echo t('Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs. '); ?>
      </p>
     <h5><?php echo t('Facilitator: '); ?><a href="mailto:eziegemeier@yahoo.com">Ellen Ziegemeier</a></h5>
      <p><?php echo t('Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She earned her Masters in Anthropology, and has worked locally and abroad -  Latin America and South America for various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver training. '); ?>
      </p>
    </div>
  </div>
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
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
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
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
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
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
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
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
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
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
  </div>
  <!-- final div needed to close course --> 
</div>
