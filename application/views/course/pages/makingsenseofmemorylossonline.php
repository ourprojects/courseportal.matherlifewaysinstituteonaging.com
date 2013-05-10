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
				  'config' => array('width' => '720',
									'height' => '1000',
									'arrows' => false,
									'autoSize' => false,
									'mouseWheel' => false))
	);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('154418413r.png'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
</div>
<div id="sidebar">
  <div class="box-sidebar one" style="background-color:#FFF;">
    <h3><?php echo t('Survey'); ?></h3>
    <br />
    <p><a href="#"><?php echo t('MSML Online Pre-Course Survey'); ?></a></p>
    <p><a href="#"><?php echo t('MSML Online Post-Course Survey'); ?></a></p>
    <p><a href="#"><?php echo t('MSML Online Post-Post Course Survey'); ?></a></p>
    <p><a href="#"><?php echo t('MSML Online One-Year Survey'); ?></a></p>
    <br />
    <img src="<?php echo $this->getImagesUrl('msml/153075496.png'); ?>" alt="image"> </div>
  <div class="box-sidebar one">
    <h3><?php echo t('Statistics'); ?></h3>
    <br />
    <img src="<?php echo $this->getImagesUrl('286x352_Grafix_1in5.png'); ?>" alt="image" />
    <p><?php echo t('One in five caregivers report having had some degree of training, but continue to seek additional resources.'); ?></p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>Alzheimer's Association</h3>
    <br />
    <p><?php echo t('10 Early Signs and Symptoms of Alzheimer\'s'); ?></p>
    <p> <a href="https://www.alz.org/alzheimers_disease_10_signs_of_alzheimers.asp" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('alz.png'); ?>" alt="image" /></a></p>
    <p><?php echo t('Memory loss that disrupts daily life may be a symptom of Alzheimer\'s or another dementia. Alzheimer\'s is a brain disease that causes a slow decline in memory, thinking and reasoning skills. There are 10 warning signs and symptoms. Every individual may experience one or more of these signs in different degrees. If you notice any of them, please see a doctor.'); ?></p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>U.S. Dept. of Health &amp; Human Srvc.</h3>
    <p><?php echo t('2011 - 2012 Alzheimer\'s Disease Progress Report'); ?></p>
    <p><a href="http://www.nia.nih.gov/alzheimers/publication/2011-2012-alzheimers-disease-progress-report" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('msml/adpr-front.png'); ?>" style="width:150px; height: 95px;" alt="image" /></a></p>
    <p><?php echo t('A summary of Alzheimer\'s disease research, infrastructure, and funding supported by the NIH.'); ?> </p>
    <br />
  </div>
</div>

<!-- start main content section here -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t($course->title); ?></h2>
  <p><?php echo t($course->description); ?></p>
  <h5><?php echo t('Access - 1 year / Completion - 5 weeks (recommended)'); ?></h5>
  <h4><?php echo t('Objectives'); ?></h4>
  <ul>
    <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  <h4><?php echo t('Course Lessons'); ?></h4>
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> <?php echo t('Overview of Memory Loss'); ?></a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-27" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-28" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-29" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-30" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-31" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-32" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-33" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-34" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-35" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    
    <a href="#lesson-1-slide-36" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    
    
    
     </li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> <?php echo t('Communication Strategies'); ?></a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-11" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-12" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-13" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-14" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-15" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-16" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-17" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> <?php echo t('Making Decisions'); ?></a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-11" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-12" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-13" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-14" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-15" data-fancybox-group="lesson-3" class="hide lesson-3"></a> </li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> <?php echo t('Planning for the Future'); ?></a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> <?php echo t('Effective Ways of Coping'); ?></a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
  </ul>
  <div class="box-white" id="resources">
    <h4> <?php echo t('Resources'); ?></h4>
    <p><?php echo t('Please use these listed resources in the completion of this online course. Please contact your instructor or the program director if you have additional resources you would like to see added here.'); ?></p>
    <ul>
      <li><a href="http://www.alz.org" target="_blank">Alzheimer's Association</a></li>
      <li><a href="http://www.nih.gov" target="_blank">National Intitute on Health (NIH)</a></li>
      <li><a href="http://pewinternet.org" target="_blank">Pew Internet &amp; American Life Project</a></li>
    </ul>
  </div>
  <div class="box-white" id="developers">
    <h4><?php echo t('Facilitators &amp; Course Developers'); ?></h4>
    <h5><?php echo t('Content Designer:'); ?></h5>
    <p><a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a><br />
      <?php echo t('Through research-based programs and innovative techniques, Mather LifeWays Institute on Aging is committed to advancing the field of geriatric care. Cutting-edge research lays the foundation for our solid solutions to senior care challenges, including recruitment, mentorship, training, and retention. Used by individuals and entire organizations, our nationally recognized, award-winning programs include training modules, online courses, toolkits, and learning modules designed to make learning fun and easy. Our programs have been shown to result in measurable improvements in the quality of care provided and workforce retention.'); ?></p>
    <p><a href="http://www.alz.org/illinois/" target="_blank">Greater Illinois Chapter | Alzheimer's Association</a><br />
      <?php echo t('The Alzheimer’s Association, Greater Illinois Chapter serves 68 counties in Illinois with offices in Bloomington, Carbondale, Chicago, Joliet, Rockford and Springfield. Since 1980, the Chapter has provided reliable information and care consultation; created supportive services for families; increased funding for dementia research; and influenced public policy changes. Today, the Greater Illinois Chapter serves the more than a half million Illinois residents affected by Alzheimer’s disease throughout our chapter area, including 210,000 people with the disease.'); ?></p>
    <span class="h5"><?php echo t('Course Developer: '); ?></span><span class="name">Jon Woodall</span>
    <p><?php echo t('Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs. '); ?> </p>
    <span class="h5"><?php echo t('Facilitator: '); ?></span><span class="name">Ellen Ziegemeier</span>
    <p><?php echo t('Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She earned her Masters in Anthropology, and has worked locally and abroad -  Latin America and South America for various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver training. '); ?> </p>
  </div>
</div>

<!-- start course content here -->

<div id="course" class="hide">
  <?php $clientScript->registerScript('question-answer-handler',
					"$('.course-slide .question').change(function() {".
						"if($(this).find('select').val() == '1') {".
							"$(this).find('.right-answer').removeClass('hide');".
							"$(this).find('.wrong-answer').addClass('hide');".
						"} else {".
							"$(this).find('.right-answer').addClass('hide');".
							"$(this).find('.wrong-answer').removeClass('hide');".
						"}".
					"});");
			?>
  <div id="lesson-1">
    <div id="lesson-1-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Making Sense of Memory Loss (MSML) Online'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/154418413.png'); ?>" alt="image">
        <h4><?php echo t('Developers'); ?></h4>
        <p><?php echo t('This educational program was jointly developed by:'); ?></p>
        <h5><a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a></h5>
        <p><?php echo t('Mather LifeWays Institute on Aging creates Ways to Age Well for older adults by conducting translational
research and education for professionals who serve them.'); ?></p>
        <h5><a href="http://www.alz.org" target="_blank">Alzheimer's Association ‐ Greater Illinois Chapter</a></h5>
        <p><?php echo t('The Alzheimer\'s Association is the leading, global voluntary health organization in Alzheimer\'s care and
support, and the largest private, nonprofit funder of Alzheimer\'s research.'); ?></p>
        <h4><?php echo t('Use of Information'); ?></h4>
        <p><?php echo t('Any person is hereby authorized to view the information available from this guide for informational
purposes only. No part of the information on this guide can be redistributed, copied, or reproduced
without prior written consent of Mather LifeWays Institute on Aging.'); ?></p>
        <h4><?php echo t('Copyright'); ?></h4>
        <p><?php echo t('Information and materials of Mather LifeWays Institute on Aging included in its guides are protected by
the copyright laws of the United States and international treaties.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Welcome'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
        <p><?php echo t('We are delighted that you are interested in MSML Online. This five‐part
online course is intended to help family members of someone in the early stages of memory loss to
meet the challenges they face now and in the future. Research evaluation has shown that participation in
this online course increases family members’ knowledge and improves coping skills with respect to their
relatives’ memory and behavior changes.'); ?></p>
        <p><?php echo t('MSML Online is primarily intended to educate families with a relative who has been
diagnosed with the early stages of Alzheimer\'s disease or a related dementia. Families with a relative who
has not yet been diagnosed with one of these conditions may also benefit from participation. Individuals
and families facing the later stages of dementia should be directed to programs that better suit their
needs. Likewise, persons with memory loss should be encouraged to attend education and support
programs specifically suited to them.'); ?></p>
        <p><?php echo t('It is our experience that this course is essential for your success in acquiring
knowledge and coping skills.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">Media Storm</h2>
        <hr />
        <p><?php echo t('Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur\'s 83-year-old father, Herbie, became too infirm to care for himself.'); ?></p>
        <div id="video" style="width:400px;">
          <div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ce9beaabc886268&w=400&h=340&amp;lang=none"></script></div>
          <div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">Millions of middle-aged Americans are caring for their children as well as their aging parents. When filmmaker-photographer pair Julie Winokur and Ed Kashi took in Winokur's 83-year-old father, they decided to document their own story. See the project at <a href="http://mediastorm.com/publication/the-sandwich-generation" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/the-sandwich-generation</a></div>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Course Overview'); ?></h2>
        <hr />
        <p><?php echo t('The course is divided into five modules. Each module is approximately two to three hours. Modules build upon each other, so it is recommended that the agenda be followed as prescribed.'); ?></p>
        <p><?php echo t('Module One ‐ Overview of Memory Loss and Related Symptoms, is an introduction of class leaders and
participants. Discussion of the medical aspects of memory loss, causes of memory loss, the need for a
medical evaluation, drug treatments, and the current state of research.'); ?></p>
        <p><?php echo t('Module Two ‐ Communication Strategies, is an overview of communication changes typical in early memory
loss. Familiarize participants with general principles for maintaining communication with a person
experiencing early memory loss.'); ?></p>
        <p><?php echo t('Module Three ‐ Making Decisions, addresses practical issues in everyday life such as driving a car, handling health and financial decisions, or managing household tasks.'); ?></p>
        <p><?php echo t('Module Four ‐ Planning for the Future, addresses a number of ways to prepare for changes that are likely to
occur over the course of progressive memory loss. The need for legal and financial planning and other
community resources are covered.'); ?></p>
        <p><?php echo t('Module Five ‐ Effective Ways of Coping and Caring, addresses how to involve the person with memory loss in
a variety of activities and discusses ways for family members to take care of themselves.'); ?></p>
        <h4><?php echo t('Companion Book'); ?></h4>
        <p><a href="http://www.amazon.com/Alzheimers-Early-Stages-Friends-Caregivers/dp/0897933974" target="_blank"><?php echo t('Alzheimer’s Early Stages: First steps for family, friends and caregivers.'); ?></a></p>
        <p><?php echo t('We recommend you read this book while participating in MSML Online. Recommended chapters at the start of the course reinforce the course content.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/logo04.jpg'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Course Components'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/153539296.png'); ?>" alt="image">
        <p><?php echo t('It is important to note that every effort has been made to include accurate information, but sometimes health care professionals have differing opinions. Also, future scientific advances may make some of this
information outdated. The developers of this course will make periodic revisions as needed. We want to encourage participants to address their specific concerns with licensed professionals. We can offer general information and guidance for participants to seek out solutions to their unique challenges.'); ?></p>
        <p><?php echo t('This program was developed as an overview for families on what to expect as early memory loss
progresses. Each module is meant to provide basic information only. Following this course, you may wish to
locate content experts who can address specific issues such as legal and financial planning.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Course Effectiveness'); ?></h2>
        <hr />
        <p><?php echo t('MSML Online has undergone numerous revisions. The program it is based on, MSML, went through several formal evaluations to demonstrate its effectiveness.'); ?></p>
        <p><?php echo t('Research evaluation was conducted among more than 200 participants in the original program. In one study, good outcomes were reported in terms of increased knowledge and improved coping skills at post‐course and six months later (Kuhn and Mendes de Leon, 2001). Similar positive outcomes plus improved self‐confidence were reported by another group (Kuhn and Fulton, 2004). Likewise, when the education program was implemented in nine chapters of the
Alzheimer’s Association, participants reported improvements in their knowledge and coping skills.'); ?></p>
        <p><?php echo t('Outcome measures used in this original research included:'); ?></p>
        <ol>
          <li><?php echo t('A 15‐item Knowledge about Memory Loss and Care Test, (Kuhn, King, and Fulton, 2005);'); ?></li>
          <li><?php echo t('A 10‐item Measure of Self‐Efficacy (Fulton and Kuhn, 2004) and;'); ?></li>
          <li><?php echo t('The 7‐item memory sub‐scale of the Revised Memory and Behavior Problems Checklist (Teri et al., 1992).'); ?></li>
        </ol>
        <h5><?php echo t('References'); ?></h5>
        <ul>
          <li>Kuhn D, Mendes de Leon, C. (2001). Evaluation of an educational intervention with relatives of persons in
            the early stage of Alzheimer’s disease. Research on Social Work Practice, 11, 531‐548.</li>
          <li>Kuhn D., Fulton BR. (2004). Efficacy of an educational program for relatives of persons in the early stages
            of Alzheimer’s disease. Journal of Gerontological Social Work, 42(3), 109‐130.</li>
          <li>Kuhn D, King SP, Fulton BF. (2005). Development of the Knowledge about Memory Loss and Care test.
            American Journal of Alzheimer’s Disease, 20(1):41‐49.</li>
          <li>Teri, L., Truax, P., Logsdon, R., Uomoto, J., Zarit, S., and Vilatiano, P.P. (1992). Assessment of behavioral
            problems in dementia: The Revised Memory and Behavior Problems Checklist. Psychology and Aging, 7,
            622‐631.</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Module 1: Overview of Memory Loss & Related Symptoms'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/164088989.png'); ?>" alt="image">
        <h4><?php echo t('Purposes'); ?></h4>
        <ul>
          <li><?php echo t('Introduce Class Leader(s) and participants and give an overview of the course'); ?></li>
          <li><?php echo t('Explain major medical causes of memory loss'); ?></li>
          <li><?php echo t('Ensure that a medical evaluation is done to explore reasons for memory loss'); ?></li>
          <li><?php echo t('Explain symptoms of Alzheimer’s disease and related dementias'); ?></li>
          <li><?php echo t('Describe current and proposed medical treatments'); ?></li>
          <li><?php echo t('Describe research efforts to treat or prevent memory loss'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Introductions'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/72968269.png'); ?>" alt="image">
        <p class="forum"><?php echo t('We will begin by asking you to say something about who you are and what brings you here. Please answer these questions on the Forum:'); ?></p>
        <ul class="forum">
          <li><?php echo t('What is your relationship with the person who is experiencing memory loss?'); ?></li>
          <li><?php echo t('How long have you noticed their problem with memory or thinking?'); ?></li>
          <li><?php echo t('What is the name of the medical condition or diagnosis, if known, that accounts for the problem?'); ?></li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> 
        
        <!-- 
        
       
        <p><?php echo t('As you can see, dementia is an umbrella term that includes reversible and irreversible conditions.'); ?></p>
        <div id="question1" class="question">
          <p><b><?php echo t('Have you ever visited the Alzheimer\'s Assocation website?'); ?></b>
            <select>
              <option selected="selected" value="select"> <?php echo t('Select'); ?> </option>
              <option value="1"> <?php echo t('Yes'); ?> </option>
              <option value="0"> <?php echo t('No') ?> </option>
            </select>
          </p>
          <p class="right-answer hide"> <?php echo t("Great! We will use this resource throughout this course."); ?> </p>
          <p class="wrong-answer hide"> <?php echo t("Please familiarize yourself with their website."); ?> </p>
        </div>
         --> 
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Who We Are'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Name'); ?></li>
          <li><?php echo t('Relationship'); ?></li>
          <li><?php echo t('How Long Ago was Noted?'); ?></li>
          <li><?php echo t('Diagnosis'); ?></li>
        </ul>
        <h4><?php echo t('Goals of the Program'); ?></h4>
        <p><?php echo t('This five‐week series of classes is intended to help you meet the current challenges of caring for someone in the early stages of memory loss. This condition is usually due to a medical condition such as Alzheimer’s
disease or a related dementia. Therefore, this first session focuses on medical reasons for memory loss and
its treatments. If your relative has not had a thorough medical evaluation yet, we hope this information
will encourage you to seek one right away. This first class is also intended to give you other medical
information. The remaining classes provide other types of information and guidance for coping with your
relative’s memory loss.'); ?></p>
        <p><?php echo t('Memory loss and other signs of mental decline have profound effects on the lives of individuals and
families. Nevertheless, we are convinced that a good quality of life can still be maintained for all concerned
by learning to make changes in lifestyle and outlook. For many family members, this involves a change in
relationships and priorities. At times the demands may seem overwhelming. This educational series is
aimed at helping you make decisions about how and when to make changes in your lifestyle, both now and
in the future.'); ?></p>
        <p><?php echo t('In writing the content for these classes, the developers spent many years talking to countless people with
memory loss and their family members. They believe that there is no single way of coping successfully.
Everyone must find ways that suit their own particular needs or situation, but it can be done. Those who
have met the challenges of memory loss have taught us about the need for flexibility, patience, humor,
faith, and friendship. Such qualities are developed over time. It is our sincere hope that a solid
understanding of memory loss in the early stages will assist you in this process.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Agenda: MSML Online'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Module 1: Overview of Memory Loss &amp; Related Symptoms'); ?></li>
          <li><?php echo t('Module 2: Communications Strategies'); ?></li>
          <li><?php echo t('Module 3: Making Decisions'); ?></li>
          <li><?php echo t('Module 4: Planning for the Future'); ?></li>
          <li><?php echo t('Module 5: Effective Ways of Coping &amp; Caring'); ?></li>
        </ul>
        <p><?php echo t('The agenda for these five modules include these general topics. We strongly encourage you to participate in all five modules as the information of each class flows into the next one. In this first module, an overview of memory loss and a host of brain diseases known as dementias will be given. Again, this information is mainly medical in nature.'); ?></p>
        <p><?php echo t('Module number two covers communication skills that will help you and others in caring for your relative. Module three prepares you for the major decisions that need to be made as memory loss progresses: when
to stop driving; health; and financial decisions. In module number four, planning for the future is the focus.'); ?></p>
        <p><?php echo t('Finally, in module five we talk about how to keep your relative engaged in meaningful activities and the need
to take steps to care for yourself. It is our belief that if you take good care of yourself, your relative with
memory loss will be better off too.'); ?></p>
        <p class="forum"><?php echo t('To make sure that we address your questions, please tell us what questions you have on the Forum.'); ?></p>
        <p><?php echo t('In this first class, we will address the following questions:'); ?></p>
        <ul>
          <li><?php echo t('What causes memory loss?'); ?></li>
          <li><?php echo t('How are brain diseases diagnosed?'); ?></li>
          <li><?php echo t('What are the symptoms and stages of Alzheimer\'s disease?'); ?></li>
          <li><?php echo t('How is memory loss treated?'); ?></li>
          <li><?php echo t('What is being done in the area of medical research?'); ?></li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Definition of Dementia'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135095760.png'); ?>" alt="image">
        <ul>
          <li><?php echo t('Deterioration of at least two brain functions, including memory'); ?></li>
          <li><?php echo t('A syndrome, not a diagnosis'); ?></li>
          <li><?php echo t('In the past, referred to as senility or <i>hardening or the arteries</i>'); ?></li>
        </ul>
        <p><?php echo t('Dementia is not a specific disease. It is an overall term that describes a wide range of symptoms associated with a decline in memory or other thinking skills severe enough to reduce a person\'s ability to perform
everyday activities. Alzheimer\'s disease accounts for 60 to 80% of cases. Vascular dementia, which occurs
after a stroke, is the second most common dementia type. But there are many other conditions that can
cause symptoms of dementia, including some that are reversible, such as thyroid problems and vitamin
deficiencies.'); ?></p>
        <p><?php echo t('Dementia is often incorrectly referred to as senility or senile dementia, which reflects the formerly
widespread but incorrect belief that serious mental decline is a normal part of aging.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Brain Functions'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Memory'); ?></li>
          <li><?php echo t('Orientation'); ?></li>
          <li><?php echo t('Language'); ?></li>
          <li><?php echo t('Judgement'); ?></li>
          <li><?php echo t('Perception'); ?></li>
          <li><?php echo t('Attention'); ?></li>
          <li><?php echo t('Ability to peform tasks in sequence'); ?></li>
        </ul>
        <p><?php echo t('Dementia typically unfolds gradually over a period of many years but it can begin suddenly or
unexpectedly. It affects some or all of these brain functions listed below.'); ?></p>
        <p class="forum"><?php echo t('Search the Internet for examples of how dementia affects some of these brain functions listed above, and report your findings on the Forum.'); ?></p>
        <p class="forum"><?php echo t('Did you ever forget a name or forget an appointment or get lost? What did it feel like at the time? Please describe those experinces on the Forum'); ?></p>
        <p><?php echo t('Imagine how difficult it would be to experience this type of problem on a regular basis. We address the
experience of living dementia during the next module.'); ?></p>
        <p><?php echo t('Is everyone familiar with terms like congestive heart failure, liver failure and kidney failure? When the
brain fails to do its work, dementia is the appropriate medical term.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Dementia'); ?></h2>
        <hr />
        <table>
          <tr>
            <th><p><?php echo t('Reversible Dementias'); ?></p></th>
            <th><p><?php echo t('Irreversible Dementias'); ?></p></th>
          </tr>
          <tr>
            <td><ul>
                <li><?php echo t('Toxic Effects of Medications'); ?></li>
                <li><?php echo t('Infections'); ?></li>
                <li><?php echo t('Metabolic disorders'); ?></li>
                <li><?php echo t('Major depression'); ?></li>
                <li><?php echo t('Brain tumors'); ?></li>
              </ul></td>
            <td><ul>
                <li><?php echo t('Alzheimer’s Disease'); ?></li>
                <li><?php echo t('Multi-infarct/Vascular'); ?></li>
                <li><?php echo t('Parkinson’s Disease'); ?></li>
                <li><?php echo t('Lewy Body Disease'); ?></li>
                <li><?php echo t('Over 50 rare types'); ?></li>
              </ul></td>
          </tr>
        </table>
        <p><?php echo t('As you can see, dementia is an umbrella term that includes reversible and irreversible conditions.'); ?></p>
        <h5><?php echo t('Reversible Dementias'); ?></h5>
        <p><?php echo t('On the left hand side of this slide is a list of more common reversible conditions that sometime mimic
irreversible conditions such as Alzheimer\'s.'); ?></p>
        <h5><?php echo t('Irreversible Dementias'); ?></h5>
        <p><?php echo t('Most dementias are irreversible in nature. Sometimes two or more types of these dementias may occur
together as a "mixed dementia." There are several dozen types of dementia and the major types can be
found on the Internet.'); ?></p>
        <p class="forum"><?php echo t('Search the Alzheimer\'s Association\'s website for greater explanations for these types of reversible and irreversible dementias. Choose one from each category, and provide a description for each one on the Forum.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Medical Evaluation of Dementia'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('History from the individual &amp; relative/friend'); ?></li>
          <li><?php echo t('Mental status test'); ?></li>
          <li><?php echo t('Clinical exam'); ?></li>
          <li><?php echo t('Blood work'); ?></li>
          <li><?php echo t('Brain scan'); ?></li>
          <li><?php echo t('Only if indicated: Psycholgoical testing, HIV test, Brain biopsy, PET scan, Lumbar puncture, EEG'); ?></li>
        </ul>
        <p><?php echo t('A medical evaluation is always needed to clarify the diagnosis so that both reversible and irreversible
conditions can be identified, treated, and understood by all concerned.'); ?></p>
        <p><?php echo t('Basic elements of a medical evaluation by a doctor consist of the following: an accurate history of the
symptoms; a brief mental status test; a physical examination; blood tests (Complete Blood Count,
Chemistry profile, thyroid function, syphilis serology, Vitamin B12, and Folate); and brain imaging through
either a CT or MRI scan.'); ?></p>
        <p><?php echo t('Sometimes additional tests are ordered for the sake of thoroughness in diagnosing the exact type of
dementia. There is no single test, such as a blood test, available to diagnose AD, as is the case with
diabetes, for example. However, when other disorders have been ruled out and common symptoms of AD
such as progressive loss of memory have been documented, there is a high probability for obtaining an
accurate diagnosis by an experienced physician.'); ?></p>
        <div id="question1" class="question">
          <p><b><?php echo t('Is a medical evaluation necessary to clarify the diagnosis of a reversible or irreversible dementia?'); ?></b>
            <select>
              <option selected="selected" value="select"> <?php echo t('Select'); ?> </option>
              <option value="1"> <?php echo t('Yes'); ?> </option>
              <option value="0"> <?php echo t('No') ?> </option>
            </select>
          </p>
          <p class="right-answer hide"> <?php echo t("Correct! A medical evaluation is always needed to clarify the diagnosis."); ?> </p>
          <p class="wrong-answer hide"> <?php echo t("Incorrect. Please review the content above again."); ?> </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">Media Storm</h2>
        <hr />
        <p><?php echo t('MediaStorm is an award-winning interactive design and video production studio that works with top visual storytellers, interactive designers and global organizations to create cinematic narratives that speak to the heart of the human condition.'); ?></p>
               <div style="width:400px;" id="video">
          <div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ccd9bb6ef492263&w=400&h=340&amp;lang=none"></script></div>
          <div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">With humor as well as unflinching honesty, <i>It Ain't Television... It's Brain Surgery</i> is Ray Farkas's first-person account of his own brain surgery, which he underwent in hopes of reducing the debilitating symptoms of Parkinson's Disease. See the project at <a href="http://mediastorm.com/publication/it-aint-television-its-brain-surgery" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/it-aint-television-its-brain-surgery</a></div>
        </div>
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Criteria for probable Alzheimer\'s disease'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/160330106.png'); ?>" alt="image">
        <ul>
          <li><?php echo t('Dementia is evident without other disorders to account it'); ?> </li>
          <li><?php echo t('Deficits in at least two areas of cognition'); ?> </li>
          <li><?php echo t('Progressive worsening of recent memory and other functions'); ?> </li>
        </ul>
        <p><?php echo t('Criteria have been established to guide physicians in making the diagnosis. In most cases, these criteria are
useful to differentiate between AD and other types of dementia. Any doubts about the accuracy of the
diagnosis should be checked by a second opinion from a medical specialist such as a neurologist. Most
people who experience progressive loss of memory have AD. Therefore, the major focus of the rest of
today’s class will be on this particular condition.'); ?></p>
        <p class="forum"><?php echo t('Please post any questions you have on the Forum.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Prevalence of Alzheimer\'s disease by Age'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/121113384.png'); ?>" alt="image">
        <p><?php echo t('AD is rather common among the older population. According to the Alzheimer\'s
Association, an estimated 5.4 million Americans of all ages had Alzheimer\'s disease in 2012. This figure
includes 5.2 million people age 65 and older, and 200,000 individuals under age 65 who have youngeronset
Alzheimer\'s.'); ?></p>
        <p class="forum"><?php echo t('Taking into account the figures above, can you guess how many Americans have AD today? How many
people in our state are estimated to have AD? Can you guess how many people are expected to have AD
40 years from now? Search the Internet to help with your answers, and post them to the Forum.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Projected Growth of Persons with Alzheimer\'s disease'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/AAscreenshot.png'); ?>" alt="image">
        <p><?php echo t('Based on projections of the older population in the coming decades, it is expected that the number of
Americans with AD will grow dramatically.'); ?></p>
        <p class="forum"><?php echo t('Search the Alzheimer\'s Association\'s website for the most current facts on figurs on the growth of AD. Record your findings on the Forum'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Dr. Alois Alzheimer'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/122568932.png'); ?>" alt="image">
        <p><?php echo t('Alzheimer’s disease was first described in 1906 by Dr. Alois Alzheimer, a German neurologist and
pathologist. He was the first scientist to describe the symptoms in a female patient and connect them to
damaged areas in her brain. Following her death, Dr. Alzheimer performed an autopsy and found
shrinkage of the brain as well as tiny abnormalities he referred to as tangles and amyloid plaques.'); ?></p>


 <div id="question1" class="question">
          <p><b><?php echo t('Is a medical evaluation necessary to clarify the diagnosis of a reversible or irreversible dementia?'); ?></b>
            <select>
              <option selected="selected" value="select"> <?php echo t('Select'); ?> </option>
              <option value="1"> <?php echo t('Yes'); ?> </option>
              <option value="0"> <?php echo t('No') ?> </option>
            </select>
          </p>
          <p class="right-answer hide"> <?php echo t("Correct! A medical evaluation is always needed to clarify the diagnosis."); ?> </p>
          <p class="wrong-answer hide"> <?php echo t("Incorrect. Please review the content above again."); ?> </p>
        </div>



      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Normal'); ?> -> <?php echo t('Mild Cognitive Impairment'); ?> -> <?php echo t('Alzheimer\'s disease'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/118564579.png'); ?>" alt="image">
        <p><?php echo t('     
      Experts today agree that what is called “early stage” AD is probably the result of many years of the disease
slowly developing in the brain. In the late 1990s, researchers began to identify “mild cognitive
impairment” or “MCI” as a very early sign of AD in many people. Persons with this condition show
evidence of recent memory loss on formal testing but show no other brain impairments such as
disorientation. Recent studies indicate that about half of people with MCI develop early stage AD within 5
years and most of them develop AD within 10 years. In other words, in addition to memory loss, another
brain function will begin to show signs of deterioration.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Early Stage'); ?></h2>
        <hr />
        <table>
          <tr>
            <th><p><?php echo t('Function'); ?></p></th>
            <th><p><?php echo t('Potential Signs'); ?></p></th>
          </tr>
          <tr>
            <td><ul>
                <li><?php echo t('Memory'); ?></li>
                <li><?php echo t('Langauge'); ?></li>
                <li><?php echo t('Orientation'); ?></li>
                <li><?php echo t('Motor'); ?></li>
                <li><?php echo t('Mood and behavior'); ?></li>
                <li><?php echo t('Activities of daily living (ADLs)'); ?></li>
              </ul></td>
            <td><ul>
                <li><?php echo t('Loss of recent memory'); ?></li>
                <li><?php echo t('Mild aphasia'); ?></li>
                <li><?php echo t('Seeks familiar people and places'); ?></li>
                <li><?php echo t('Difficulty writing and using objects'); ?></li>
                <li><?php echo t('Disinterest and depression'); ?></li>
                <li><?php echo t('Needs reminders with ADLs'); ?></li>
              </ul></td>
          </tr>
        </table>
        <p><?php echo t('       
        AD is slowly progressive and may last three to twenty years. The rate of progression varies from person to
person. The disease tends to advance according to stages of severity but people can remain in the early
stages for five years or longer. AD unfolds in subtle ways, not unlike normal absent‐mindedness, except
with daily regularity. Early stage symptoms may not be noticed until the affected person or family realizes
that a pattern has developed. Something may occur that makes symptoms more evident, such as an acute
illness.'); ?></p>
        <p class="forum"><?php echo t('Based on your experience, do any of these early stage symptoms or signs look familiar to you? What were the first signs you noticed in your relative? Please record your responses on the Forum'); ?></p>
        <p><?php echo t('Forgetting appointments, misplacing things, difficulty managing a checkbook, word finding problems, and
loss of initiative are typical changes at this stage. Symptoms may be inconsistent, with "good days" and
"bad days" making life unpredictable for all concerned. One’s ability to manage self‐care tasks is still intact
at this point but reminders and supervision are needed with activities of daily living (ADLs) such as cooking,
shopping, and paying bills.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Middle Stages'); ?></h2>
        <hr />
        <table>
          <tr>
            <th><p><?php echo t('Function'); ?></p></th>
            <th><p><?php echo t('Potential Signs'); ?></p></th>
          </tr>
          <tr>
            <td><ul>
                <li><?php echo t('Memory'); ?></li>
                <li><?php echo t('Langauge'); ?></li>
                <li><?php echo t('Orientation'); ?></li>
                <li><?php echo t('Motor'); ?></li>
                <li><?php echo t('Mood and behavior'); ?></li>
                <li><?php echo t('Activities of daily living (ADLs)'); ?></li>
              </ul></td>
            <td><ul>
                <li><?php echo t('Chronic, recent memory loss'); ?></li>
                <li><?php echo t('Moderate word finding difficulty'); ?></li>
                <li><?php echo t('May get lost at times'); ?></li>
                <li><?php echo t('Difficulty using objects, slowed walking'); ?></li>
                <li><?php echo t('Possible depression and agitation'); ?></li>
                <li><?php echo t('Needs reminders and help with most ADLs'); ?></li>
                <li><?php echo t('Difficulties with IADLs'); ?></li>
              </ul></td>
          </tr>
        </table>
        <p><?php echo t('As AD progresses to the middle stages, symptoms become more obvious. Memory loss and disorientation
worsen, language difficulties increase, and walking ability may slow. Independence with daily tasks
becomes compromised. The ability to make health care and financial decisions is very questionable at this
stage and others must assume the role of decision makers.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-23" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Late Stages'); ?></h2>
        <hr />
        <table>
          <tr>
            <th><p><?php echo t('Function'); ?></p></th>
            <th><p><?php echo t('Potential Signs'); ?></p></th>
          </tr>
          <tr>
            <td><ul>
                <li><?php echo t('Memory'); ?></li>
                <li><?php echo t('Langauge'); ?></li>
                <li><?php echo t('Orientation'); ?></li>
                <li><?php echo t('Motor'); ?></li>
                <li><?php echo t('Mood and behavior'); ?></li>
                <li><?php echo t('Activities of daily living (ADLs)'); ?></li>
              </ul></td>
            <td><ul>
                <li><?php echo t('Mixes up past and present'); ?></li>
                <li><?php echo t('Harder to communicate verbally'); ?></li>
                <li><?php echo t('Cannot identify familiar people and places'); ?></li>
                <li><?php echo t('Tremors, rigidity (at risk for falls)'); ?></li>
                <li><?php echo t('Increased risk be behavioral disturbances'); ?></li>
                <li><?php echo t('Needs reminders with all ADLs'); ?></li>
              </ul></td>
          </tr>
        </table>
        <p><?php echo t('In the late stages of AD, all brain functions become severely impaired. Speech and long‐term memory are
significantly compromised at this point. Individuals may misidentify familiar people, places, and objects.
Constant supervision of the person with late stage AD is required for the sake of safety and care.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-24" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Final Stages'); ?></h2>
        <hr />
        <table>
          <tr>
            <th><p><?php echo t('Function'); ?></p></th>
            <th><p><?php echo t('Potential Signs'); ?></p></th>
          </tr>
          <tr>
            <td><ul>
                <li><?php echo t('Memory'); ?></li>
                <li><?php echo t('Langauge'); ?></li>
                <li><?php echo t('Orientation'); ?></li>
                <li><?php echo t('Motor'); ?></li>
                <li><?php echo t('Mood and behavior'); ?></li>
                <li><?php echo t('Activities of daily living (ADLs)'); ?></li>
              </ul></td>
            <td><ul>
                <li><?php echo t('No apparent link to past or present'); ?></li>
                <li><?php echo t('Mute or few incoherent words'); ?></li>
                <li><?php echo t('Seemingly oblivious to surrondings'); ?></li>
                <li><?php echo t('Little spontaneous movement, swallowing difficulty)'); ?></li>
                <li><?php echo t('Completely passive'); ?></li>
                <li><?php echo t('Requires total care'); ?></li>
              </ul></td>
          </tr>
        </table>
        <p><?php echo t('
		
		If someone lives long enough to reach the final stages of AD, there is little or no language, little purposeful movement, and total reliance on others. Swallowing problems may become evident. Death usually results from an infection or pneumonia. At any point in the disease, other medical problems can worsen symptoms and make decline faster.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-25" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Changes in the Brain'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Key chemicals malfunction, disrupting communication among cells'); ?></li>
          <li><?php echo t('Tiny abnormalities form: plaques and tangles'); ?></li>
          <li><?php echo t('Communication between nerve cells is disrupted'); ?></li>
          <li><?php echo t('Brain cells die and brain shrinks'); ?></li>
        </ul>
        <p><?php echo t('       
        Most people think of the nervous system as the body’s electrical wiring. This is correct up to a point. Nerve
cells transmit impulses much like wires transmit electricity. But unlike wires, which are connected at all
times, brain cells do not touch one another. They have microscopic gaps between them called synapses.
Nerve impulses must jump these gaps along the way and communicate with other brain cells. They do it
with the help of chemicals called neurotransmitters. In AD, many brain chemicals are either insufficient or
overabundant for reasons that are not well understood.'); ?></p>
        <p><?php echo t('
The tangles and plaques formed by AD represent the death of cells throughout the brain. The brain shrinks
in size, losing as much as one‐third of its weight. Tangles consist of abnormal collections of twisted threads
found within brain cells. Plaques consist of an abnormal deposit of a protein between brain cells called
amyloid.'); ?></p>
        <p><?php echo t('
Although most changes due to the disease can only be seen at the microscopic level, in advanced cases of
the disease, some abnormalities can be seen with the naked eye. The next few slides help us visualize the
brain damage caused by AD.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-26" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Normal Brain versus Advanced AD Brain'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/alzheimer_brain.png'); ?>" alt="image">
        <p><?php echo t('This is a human brain removed from the skull after death. On the left, this brain looks normal and appears
free of disease. It weighs about three and a half pounds and it looks like a giant walnut.'); ?></p>
        <p><?php echo t('


On the right, notice the deep crevices in this brain compared to the plump brain in the last photo. This
brain has shrunk in size and weight due to advanced AD. It is also loaded with plaques and tangles that one
can see only with a microscope.'); ?></p>
        <p><?php echo t('


The dark spots in the middle are called ventricles that are spaces for the flow of blood and spinal fluid.
As you can see, the difference between the two brains is quite dramatic. In this photo, the ventricles are
greatly enlarged due to damage resulting from advanced AD. Most illnesses result in physical changes in a
person’s body. For example, when someone has had a major stroke, it is usually easy to see the paralysis
or weakness.'); ?></p>
        <p><?php echo t('


On the other hand, AD cannot be usually seen except for changes in a person’s memory, thinking and
behavior. Yet this photo shows that such changes are caused by brain damage. It is important to keep this
in mind when you sometimes wonder why a person with memory loss is acting in a peculiar way.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-27" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Definite Risk Factors for Alzheimer\'s disease'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Increasing age'); ?></li>
          <li><?php echo t('Heart disease'); ?></li>
          <li><?php echo t('Diabetes'); ?></li>
          <li><?php echo t('Down Syndrome'); ?></li>
          <li><?php echo t('Race'); ?></li>
          <li><?php echo t('Family history; genetics'); ?></li>
        </ul>
        <p><?php echo t('        
        Circumstances that put one at risk for diseases are referred to as risk factors. For example, inhaling
tobacco smoke is known to increase one’s risk of getting lung and heart diseases. High blood pressure,
high cholesterol levels, and obesity significantly increase one’s chances for heart disease. Identification of
these risk factors has led to advances in prevention, treatments, and cures. There are clear risk factors for
AD.'); ?></p>
        <p class="forum"><?php echo t('Use the Internet to help you find explanations and examples of how these circumstances put one at risk for diseases. Post your findings on the Forum.'); ?></p>
        <p><?php echo t('

It should be kept in mind that many conditions such as stroke, diabetes, cancer, and heart disease also
tend to run in families. However, just because one’s parent had a certain disease does not mean that his or
her children are destined to get it too. Other factors such as environmental risks must be considered.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-28" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Genetics &amp; Alzheimer\'s disease'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Under age 65'); ?></li>
          <li><?php echo t('Less than 1% of affected persons'); ?></li>
          <li><?php echo t('Three chromosomes identified thus far'); ?></li>
          <li><?php echo t('APOE4: risk factor gene for onset late in life'); ?></li>
        </ul>
        <p><?php echo t('
        
        In rare cases, perhaps less than one percent of the total number, genetics plays a strong role in the
development of AD in persons younger than age 65. This is often referred to as early onset AD. Thus far, a
few genetic mutations have been identified that result in AD being passed from one generation to the
next. This hereditary form is called: Familial Alzheimer’s Disease. Again, this occurs in a relatively small
number of families in which symptoms may develop as early as 35 years of age. Research has focused on
specific abnormalities of genes on several chromosomes.'); ?></p>
        <p><?php echo t('

AD typically occurs late in life, and one gene has been identified thus far that increases the likelihood of
developing this form of the disease. The gene for Apolipoprotein E (ApoE) is located on chromosome 19.
The ApoE gene comes in three varieties, called alleles: e2, e3, and e4. Everyone’s ApoE gene has two
alleles, one inherited from each parent, so there are six possible combinations in any individual’s DNA. One
e4 allele approximately doubles risk of AD and two e4 alleles boosts risk 8 to 10‐fold.'); ?></p>
        <p><?php echo t('


Although a blood test can identify which APOE alleles a person has, it cannot predict who will or will not
develop Alzheimer\'s disease. It is unlikely that genetic testing will ever be able to predict the disease with
100 percent accuracy because too many other factors may influence its development and progression.'); ?></p>
        <p><?php echo t('


At present, APOE testing is used in research settings to identify study participants who may have an
increased risk of developing Alzheimer\'s. This knowledge helps scientists look for early brain changes in
participants and compare the effectiveness of treatments for people with different APOE profiles. Most
researchers believe that APOE testing is useful for studying Alzheimer\'s disease risk in large groups of
people but not for determining any one person\'s specific risk.'); ?></p>
        <p><?php echo t('

In doctors\' offices and other clinical settings, genetic testing is used for people with a family history of
early‐onset Alzheimer\'s disease. However, it is not generally recommended for people at risk of late‐onset
Alzheimer\'s.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-29" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Possbie Risk Factors for AD'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Environmental toxins'); ?></li>
          <li><?php echo t('Low formal educaiton &amp; low occupational attainment'); ?></li>
          <li><?php echo t('Previous head trauma'); ?></li>
          <li><?php echo t('Cerebrovascular disease'); ?></li>
          <li><?php echo t('Dietary factors'); ?></li>
        </ul>
        <p><?php echo t('Possible risk factors are those suspected of being somehow linked to AD, but the linkage has not been
proven. Weak or strong associations with AD may be attributed to a complex number of factors still
unidentified. Possible risk for AD has been associated with the areas listed above.'); ?></p>
        <p class="forum"><?php echo t('Search the Internet, and locate additional risk factors for AD and report your findings on the Forum'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-30" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Strategies for Medical Treatment'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/134501532.png'); ?>" alt="image">
        <ul>
          <li><?php echo t('Prevention of disease'); ?></li>
          <li><?php echo t('Delay onset'); ?></li>
          <li><?php echo t('Slow rate of progression'); ?></li>
          <li><?php echo t('Treat primary symptoms (cognitive)'); ?></li>
          <li><?php echo t('secondary symptoms (behavioral)'); ?></li>
        </ul>
        <p class="forum"><?php echo t('Search the Internet for a detail explanation how how these strategies are used as medical treatments. Post your responses to the Forum 
		  
		  
		  '); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-31" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('FDA-Approved Treatments for Alzheimer\'s'); ?></h2>
        <hr />
        <h5><?php echo t('Cholinesterase Inhibitors'); ?></h5>
        <ul>
          <li><?php echo t('Donepezil'); ?></li>
          <li><?php echo t('Rivastigmine'); ?></li>
          <li><?php echo t('Tacrine'); ?></li>
          <li><?php echo t('Galantamine'); ?></li>
        </ul>
        <p><?php echo t('While there is no cure for Alzheimer\'s disease, there are five prescription drugs approved by the U.S. Food
and Drug Administration (FDA) to treat its symptoms.'); ?></p>
        <p><?php echo t('Donepezil, galantamine, rivastigmine and tacrine are called "cholinesterase inhibitors." These drugs
prevent the breakdown of a chemical messenger in the brain important for learning and memory. The fifth
drug, memanatine, regulates the activity of a different chemical messenger in the brain that is also
important for learning and memory. Both types of drugs help manage symptoms but work in different
ways.'); ?></p>
        <p><?php echo t('
Understanding available treatment options can help you and the person with the disease cope with
symptoms and improve quality of life.'); ?></p>
        <h5><?php echo t('What are cholinesterase inhibitors?'); ?></h5>
        <p><?php echo t('Cholinesterase inhibitors are prescribed to treat symptoms related to memory, thinking, language,
judgment and other thought processes. Three different cholinesterase inhibitors are commonly
prescribed:'); ?></p>
        <ul>
          <li><?php echo t('Donepezil (marketed as Aricept), which is approved to treat all stages of Alzheimer\'s disease'); ?></li>
          <li><?php echo t('Galantamine (marketed as Razadyne), approved for mild to moderate stages.'); ?></li>
          <li><?php echo t('Rivastigmine (marketed as Exelon), approved for mild to moderate Alzhe1nler\'s.'); ?></li>
        </ul>
        <p><?php echo t('
Tacrine (Cognex), the first cholinesterase inhibitor, was approved in 1993 but is rarely prescribed today
because of associated side effects, including possible liver damage.
        '); ?></p>
        <p class="forum"><?php echo t('Search the Internet to learn how cholinesterase inhibitors work, and post your findings on the Forum. Also, search and post the benefits of memantine and the common side effects of memantine.'); ?></p>
        <h5><?php echo t('On the horizon'); ?></h5>
        <p><?php echo t('
Scientists have made remarkable progress in understanding how Alzheimer\'s affects the brain. Their
insights point toward promising new treatments to slow or stop the disease. Ultimately, the path to
effective therapies is through clinical studies.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-32" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Participating in Research'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Experimental medications'); ?></li>
          <li><?php echo t('Adventurous attitude required'); ?></li>
          <li><?php echo t('Creteria for inclusion and exclusoin'); ?></li>
          <li><?php echo t('Informed consent'); ?></li>
          <li><?php echo t('Other types of research studies'); ?></li>
        </ul>
        <p><?php echo t(' All of the medications just mentioned underwent a rigorous testing process for many years prior to
approval by the FDA. Testing first takes place with animals and then a small number of people to ensure
safety and potential effectiveness. The next phase involves a large number of human subjects to
determine whether or not a medication is effective. Volunteers are always needed to participate in this
effort.'); ?></p>
        <p><?php echo t('An adventurous attitude is required since it is not known if these experimental drugs are truly effective—that is the purpose of the research. Such drug studies require close cooperation among volunteers, their
families, and medical staff. In spite of one’s willingness to participate in a given study, there is always a
strict set of inclusion and exclusion criteria so that many people do not qualify for a variety of reasons.'); ?></p>
        <p><?php echo t('All eligible participants in any research study must sign a consent form that spells out the risks and benefits of participation. Apart from drug studies, researchers conduct a wide variety of studies into the nature of
AD and its treatment or prevention. Again, all such studies are subject to informed consent so that the
rights of participants are protected.'); ?></p>
        <p><?php echo t('If interested in exploring participation in drug studies or other research studies your local area, the
Alzheimer’s Disease Education and Referral Center lists all current studies on it is website.'); ?></p>
        <p><?php echo t('Many research studies now in progress are aiming to prevent or slow down the progression of AD. As
mentioned earlier, some people exhibit persistent forgetfulness but lack any other symptoms of AD. They
are referred to as having mild cognitive impairment and many develop additional symptoms of AD over
time. Many drug trials today are aiming to slowly the course of AD in such persons.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-33" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Potential Treatments / Prevention'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/134389167.png'); ?>" alt="image">
        <ul>
          <li><?php echo t('Anti-Inflammatory Drugs'); ?></li>
          <li><?php echo t('Antioxidant Agents'); ?></li>
          <li><?php echo t('Statin drugs'); ?></li>
          <li><?php echo t('Alternative Medicine'); ?></li>
          <li><?php echo t('Vaccines'); ?></li>
        </ul>
        <p><?php echo t('These are drugs in various stages of testing. Several other approaches to treating and preventing AD are under investigation.'); ?></p>
        <p class="forum"><?php echo t('Search the Internet for explanations on each of these listed treatments / preventions, and post your findings on the Forum.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-34" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Other Ways to Reduce Risk'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Physical Exercise'); ?></li>
          <li><?php echo t('<i>Use it or Lose It</i>'); ?></li>
          <li><?php echo t('Diet'); ?></li>
        </ul>
        <h5><?php echo t('Physical Exercise'); ?></h5>
        <p><?php echo t('
        
        
Several recent studies have shown that physical exercise may prevent or slow cognitive decline among
otherwise healthy people. In this regard, walking just a few times weekly has been shown to be helpful
compared to little or no activity. The benefits of exercise for people with AD have not been fully explored.'); ?></p>
        <h5><?php echo t('Use it or Lose it'); ?></h5>
        <p><?php echo t('Use it or lose it refers to the notion that keeping one’s brain active with intellectual, physical, and social
pursuits may help prevent AD. There is growing evidence that keeping mentally active may reduce the risk
of developing AD. Regardless of the actual benefit of this approach, it certainly cannot hurt to keep active.
There are no bad side effects! Even if activities like reading books, attending lectures, or playing games
such bridge or chess slightly reduce the odds of developing AD, they may be worthwhile.'); ?></p>
        <h5><?php echo t('Diet'); ?></h5>
        <p><?php echo t('
As already mentioned, there is growing evidence that what may be good for the heart may also be good
for the brain. Eating nutritious foods may be essential for a healthy heart and a healthy brain. Participants
in one large study, who consumed fish once per week or more, had 60 percent less risk of AD compared
with those who rarely or never ate fish. Total intake of n‐3 polyunsaturated fatty acids was also associated
with reduced risk of AD. In a study of Chicago residents, eating foods rich with Vitamin E such as green
leafy vegetables was associated with lower risk of AD. Future research will shed more light on types of
food to take or avoid as ways to reduce the risk of AD.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-35" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Directions for Research'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Further identify risk factors for memory loss and underlying causes'); ?></li>
          <li><?php echo t('Improve diagnostic tools'); ?></li>
          <li><?php echo t('Develop better treatments'); ?></li>
          <li><?php echo t('Improve approaches to caring for people'); ?></li>
          <li><?php echo t('Reduce distress of families'); ?></li>
        </ul>
        <p><?php echo t('Despite huge increases in research funding over the past two decades aimed at finding the root causes of AD and other brain diseases, scientific progress usually occurs at a slow pace. Yet there is reason to hope
for breakthroughs as thousands of researchers worldwide are working in several major areas.'); ?></p>
        <p class="forum"><?php echo t('Search the Internet for additional details on these listed research directions, and post your findings on the Forum.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-36" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Good Sources of Information'); ?></h2>
        <hr />
        <h4><?php echo t('Closing'); ?></h4>
        <p><?php echo t('Please know that this first class is the most technical in nature. Although there were not many
opportunities for sharing your ideas, the remaining four classes offer plenty of time for your input. Facts
about the medical causes and treatments for memory loss are important. However, we will spend the
remaining weeks talking about how to cope with the practical, day‐to‐day challenges of living with
someone with memory loss.'); ?></p>
        <p><?php echo t('Finally, we wish to introduce the companion book, Alzheimer’s Early Stages: First Steps for Family, Friends
and Caregivers. We recommend that you purchase it, as we will be recommending specific that reinforce
key points covered in these classes.'); ?></p>
        <p class="forum"><?php echo t('Post your questions about this module to the Forum.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
    </div>
  </div>
  <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Communication Strategies'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135810412.png'); ?>" alt="image">
        <h4><?php echo t('Lesson Objectives:'); ?></h4>
        <ul>
          <li><?php echo t('To give an overview of communication changes typical in early memory loss.'); ?></li>
          <li><?php echo t('To familiarize participants with general principles for maintaining communication with a person experiencing early memory loss.'); ?></li>
          <li><?php echo t('To describe several ways to encourage verbal expression.'); ?></li>
          <li><?php echo t('To review common communication pitfalls, and how to avoid them.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <div id="lesson-2-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Welcome Back!'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
        <p><?php echo t('Welcome to the second lesson of MSML Online. One of the more frustrating and difficult aspects of memory loss is that the person\'s ability to communicate may be compromised. In this section, we will discuss how to adapt to these changes. We will cover these general topics and get into specifics along the way.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
  </div>
  <div id="lesson-2-slide-3" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Agenda for Lesson 2'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Communication changes in early stages of memory loss'); ?></li>
        <li><?php echo t('General principles for enhancing communication'); ?></li>
        <li><?php echo t('Ways to encourage verbal expression'); ?></li>
        <li><?php echo t('Avoiding communication pitfalls'); ?></li>
      </ul>
      <h5 style="text-align:center;"><?php echo t('"What we see depends upon where we sit."'); ?></h5>
      <p><?php echo t('This quote speaks to the fact that your perception is crucial in making necessary accommodations to the challenges of caring for someone with memory loss. It also speaks to the fact that your relative often sees things in a much different way than you do. This is important to remember as we discuss the memory changes your family member may be experiencing and how this may affect his/her ability to communicate.'); ?></p>
      <img src="<?php echo $this->getImagesurl('msml/2012693_f260.jpg'); ?>" alt="image">
      <p><?php echo t('Do you see the old woman or the young woman in this drawing? Can you see both women?'); ?></p>
      <p><?php echo t('Some people can only see one or the other but both are right! This drawing illustrates the fact that different people can see the same reality but in different ways. This may hold true in your situation as well. You and the person with memory loss may be experiencing the same reality but in different ways. For example, your relative may not be as upset with the changes in memory and communication as you might be. You can easily remember your relative as a completely capable individual whereas he or she may have slowly adapted to the changes in memory and thinking over time. It is typical for that person to lack insight into all of the changes that have taken place.');?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-4" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('The Person\'s Level of Awareness'); ?></h2>
      <hr />
      <h5><?php echo t('Role of Denial'); ?></h5>
      <p><?php echo t('Denial is a term familiar to most of us. It refers to the human tendency to deny that a painful reality is occurring despite the hard times at hand. It seems reasonable to assume that anyone with memory loss would downplay or deny the presence or the severity of his/her problem. However, it appears that denial is less of an issue than we might expect. Instead of denying the presence or severity of symptoms, persons with memory loss have varying degrees of insight or awareness into their difficulties.');?></p>
      <p><?php echo t('Some people with AD, for example, have little or no awareness, while others may have much awareness. Still others may have awareness now and then but do not dwell upon the implications of their disease. Scientists are just beginning to understand how damage to certain parts of the brain is associated with personal insight or awareness. The damage to the brain itself may be responsible for these "degrees" of awareness. ');?></p>
      <h5><?php echo t('No awareness'); ?></h5>
      <p><?php echo t('Some persons seem to forget that they are forgetful. They have no appreciation of their limitations. They reject offers of help by others since they do not perceive any need. Getting their cooperation with respect to any need for care or oversight is virtually impossible in light of their resistance. They are not in a state of "denial." They simply lack insight due to impairment in the brain.');?></p>
      <h5><?php echo t('Partial awareness'); ?></h5>
      <p><?php echo t('Most people with memory loss have some awareness into their deficits, especially whenthey are put in demanding situations that tax their memory and thinking. On the other hand, they may not dwell on their problems. The experience of "living in the moment" is often their outlook.');?></p>
      <h5><?php echo t('Much awareness'); ?></h5>
      <p><?php echo t('Those who have a high degree of awareness appear to be the ones most prone to suffering from reactive depression. They may grieve over their past losses and worry about the future in ways that we can not understand. Fortunately, only a minority of people with memory loss seems acutely aware of the true nature of their impairments.');?></p>
      <p><?php echo t('Understanding where your family member is in terms of awareness of his/her situation can be helpful as you think about communication and how it has been affected by their memory loss. There may be some communication issues that are very distressing to you but that do not particularly upset your family member. Likewise, there may be some communication issues that are problematic for your family member but that you do not consider problematic.');?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-5" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('What is Communication?'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Sending and receiving messages'); ?></li>
        <li><?php echo t('Speaking and listening'); ?></li>
        <li><?php echo t('Reading and writing'); ?></li>
      </ul>
      <h4><?php echo t('Communication'); ?></h4>
      <p><?php echo t('Communication is the exchange of information, ideas and emotions. It is how we convey our thoughts, wishes, and feelings. In order for communication to occur, the message needs to be not only sent, but received. We need to not only hear but to also understand the message – otherwise, communication has not really occurred. We have all had experiences where we thought we made ourselves clear, only to find that the other person interpreted the message differently than we intended! (Search the Web for excercises in Communication) ');?></p>
      <p><?php echo t('Communication is complicated! It involves not just speaking our minds, but also listening to the other person. As your exercises teach, it entails speaking, listening, and watching others for cues.');?></p>
      <p><?php echo t('Listening is not as easy as it seems. To truly listen, we need to be completely attentive to the other person. Often, we may think we are listening to the other person when we are actually distracted. Maybe we aree distracted by something else that we are doing, like driving a car or trying to decide which kind of soup to buy at the grocery store. Maybe we are distracted because we are thinking about something else while the person is talking, or because we are busy thinking about what our response to the person will be. It is hard to truly listen – and it takes practice. (Search the Web for excercises in Listening)');?></p>
      <p><?php echo t('Reading and writing are forms of communication. Some of us respond better to messages that are received in writing than we do to verbal messages. Some of us may find that it helps us to write things down as a way of thinking them through. Sometimes we have trouble communicating because our preferred way of communicating may not be the other person\'s. For example, maybe you like to write notes or send e-mails to someone who prefers to talk face-to-face or over the telephone. So we need to be sensitive to how we communicate, to make sure we communicate is appropriately.');?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-6" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Types of Memory'); ?></h2>
      <hr />
      <p><?php echo t('There are many kinds of memory. Understanding them and how they work can help us to understand some of the communication challenges faced by persons with dementia.'); ?></p>
      <ul>
        <li><?php echo t('Sensory memory'); ?></li>
        <li><?php echo t('Working memory'); ?></li>
        <li><?php echo t('Short-term memory'); ?></li>
        <li><?php echo t('Long term or remote memory'); ?></li>
        <li><?php echo t('Episodic memory'); ?></li>
        <li><?php echo t('Procedural memory'); ?></li>
      </ul>
      <p><?php echo t('Search the Alzheimer\'s Association <a href="http://www.alz.org" target="_blank">website</a> for examples and greater explanations on each of these topics listed above.'); ?></p>
      <p><?php echo t('It is important to understand the different types of memory, so that we can see how impairment in these may affect one\'s ability to communicate. Note that people with early stage memory loss tend to have more problems with working and short term memory than with long term, episodic and procedural memory. When having a conversation with someone with memory loss, it is important to remember that they may have difficulty recalling recent events or may need more time to retrieve the information. Next, we are going to look at some of the changes that may occur with communication as memory becomes impaired.'); ?></p>
      <div id="question1" class="question">
        <p><b><?php echo t('Short-term memory is the information we are currently aware of or thinking about.'); ?></b>
          <select>
            <option selected="selected" value="select"> <?php echo t('Select'); ?> </option>
            <option value="1"> <?php echo t('True'); ?> </option>
            <option value="0"> <?php echo t('False') ?> </option>
          </select>
        </p>
        <p class="right-answer hide"> <?php echo t('Correct!'); ?> </p>
        <p class="wrong-answer hide"> <?php echo t('Please understand these various types of memory before moving forward.') ?> </p>
      </div>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-7" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Changes in Communication'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Word finding'); ?></li>
        <li><?php echo t('Comprehending'); ?></li>
        <li><?php echo t('Reading and writing'); ?></li>
      </ul>
      <p><?php echo t('Word finding refers to that "tip of the tongue" phenomenon that we all experience from time to time. We know what we want to say but just cannot find the word right away. People who have memory loss experience this phenomenon to a degree that it interferes with their ability to communicate.'); ?></p>
      <p><?php echo t('Comprehension often becomes impaired. The person may have a difficult time tracking conversations or following instructions that have more than one step to them. The person with memory loss is more likely to digress during conversations – jumping from the original topic to another, related one. Once the person digresses, they may have a difficult time remembering the original topic of conversation; they may get "off track" easily. Because of changes in memory, it is also common for the person with memory loss to repeat himself/herself because he or she may forget what has already been said.'); ?></p>
      <p><?php echo t('Reading and writing may be affected. The person may have difficulty in understanding written material, or may not be able to communicate clearly in writing.'); ?></p>
      <p class="forum"><?php echo t('Has anyone started to notice communication challenges with your relative? Please describe your observations on the Forum.'); ?></p>
      <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-8" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Other Factors That May Affect Communication'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('More distracted by noise, motion'); ?></li>
        <li><?php echo t('Fear of making mistakes'); ?></li>
        <li><?php echo t('Attention problem that may appear to be hearing loss'); ?></li>
      </ul>
      <h5><?php echo t('More distracted by noise, motion:'); ?></h5>
      <p><?php echo t('As memory becomes impaired, the person with memory loss may find that he has to concentrate very hard in order to follow conversations. Anything that interferes with the ability to concentrate – noise, movement, etc. – may make it even more difficult for the person.'); ?></p>
      <p class="forum"><?php echo ('If you want to have a conversation with a person with memory loss and you sense that he becomes easily distracted, what could you do?'); ?></p>
      <h5><?php echo t('Fear of making mistakes:'); ?></h5>
      <p><?php echo t('Has anyone here had the experience of burning something on the stove or the oven?'); ?></p>
      <p><?php echo ('If you do something wrong like that, others tend to write it off to having a bad day or being distracted, right? But if a person with memory loss does the same thing, it is looked at differently – and the person may no longer be allowed to cook. The stakes are much higher, so the fear of making mistakes is greater. You may need to adjust to this by giving the person with memory loss more time to do things, and be as patient as possible.'); ?></p>
      <h5><?php echo t('Attention problem that may appear to be hearing loss'); ?></h5>
      <p><?php echo t('People who are distracted or who have difficulty concentrating may sometimes miss bits and pieces of a conversation. This may sometimes make it seem as though the person has a hearing problem when in fact this is not the case. On the other hand, do not rule out hearing loss as a possible issue if the person is having problems hearing when the conversation is happening in a place with few distractions.'); ?></p>
      <p class="forum"><?php echo t('So, what can we do to help overcome these challenges?'); ?></p>
      <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-9" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Communication Tips'); ?></h2>
      <hr />
      <p><?php echo t('These tips may help us to remove some barriers to good communication.'); ?></p>
      <h5><?php echo t('Eliminate distractions'); ?></h5>
      <p><?php echo t('Think about a time when you have tried to carry on a conversation in a noisy place. It is hard to concentrate on what another person is saying when you are also trying hard simply to hear them through the noise. Because people with memory loss have a difficult time filtering out distractions, it is a good idea to make sure that the surroundings are quiet and calm before you have a conversation. Distractions in the environment, such as the television or radio, loud conversations, or competing activities may take the person\'s attention away from you. So it is a good idea to move to a quieter, calmer area to have a conversation with a person with memory loss.'); ?></p>
      <h5><?php echo t('Gain the person\'s attention.'); ?></h5>
      <p><?php echo t('This may seem obvious, but we do not always do this. Think about times when you have had one sided conversations with family or friends whose attention was divided between what you were saying and what they were doing – watching a game on TV, reading the newspaper, concentrating on driving, etc. Or perhaps you have been in the situation where you were busy with a task and were not able to give someone else your undivided attention. This is even more important when having a conversation with a person with memory loss, who can be easily distracted.'); ?></p>
      <h5><?php echo t('Give reassurance.'); ?></h5>
      <p><?php echo t('Sometimes the person with memory loss may feel embarrassed at his communication problems. He may get lost in the middle of a conversation, not be able to remember the word he is looking for, or have a difficult time comprehending what you are telling him. As frustrating as this may be for you, it is even more frustrating for the person experiencing the problems. At times like these, reassurances like, "I know this must be hard for you" or even a statement like "I am not sure what you are trying to say, but please know that I will help you any way I can" may help to calm the person and make them feel that you do understand him, even if you do not understand his words at that moment.'); ?></p>
      <p class="forum"><?php echo t('On the forum please share an example or a story'); ?></p>
      <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-10" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Elements of Nonverbal Communication'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Tone of voice'); ?></li>
        <li><?php echo t('Body language'); ?></li>
        <li><?php echo t('Facial expressions'); ?></li>
      </ul>
      <h5><?php echo t('"It is often not what you say, but how you say it."'); ?></h5>
      <p><?php echo t('As we discussed at the beginning of the lesson, nonverbal communication refers to the things that we do in addition to what we say. The most basic of these are tone of voice, body language, and facial expressions We are all familiar with the saying, <i>"it is not what you say, but also how you say it."</i> We have all had experiences where we were put off by a person\'s tone of voice or facial expression, even if what they said was not really all that offensive. Nonverbal communication can be very important when having conversation with people with memory loss. We are going to take a little time to discuss this, because it is so important.'); ?></p>
      <h5><?php echo t('Nonverbal Communication'); ?></h5>
      <p class="forum"><?php echo t('On the Forum, answer the following questions:'); ?></p>
      <ul class="forum">
        <li><?php echo t('Can you think of times when someone’s nonverbal communication spoke louder than their words?'); ?></li>
        <li><?php echo t('Do you know anyone who “talks with their hands” or whose face is very expressive?'); ?></li>
        <li><?php echo t('What are some ways that nonverbal communication both enhances and detracts from conversations?'); ?></li>
        <li><?php echo t('Has anyone in the group had an experience in which someone’s nonverbal communication either hindered the conversation or helped the conversation?'); ?></li>
      </ul>
      <p><?php echo t('Nonverbal communication becomes especially important when having a conversation with someone with memory loss. A calm tone of voice can reassure a person who is frustrated or anxious. It can also help to keep us calm. Our own anxiety and anger escalates when our voices get louder, and of course the person to whom we are talking becomes upset as well. As hard as it can be to do, keeping your voice tone calm, low, and reassuring can help to keep situations from getting out of control.'); ?></p>
      <p><?php echo t('Body language and facial expressions are other concerns. If your words are calm but your body language is tense or your facial expression does not match what you are saying, the message will be mixed. The person with memory loss may react not to what you are saying, but perhaps at the look on your face or your body language.'); ?></p>
      <p><?php echo t('As an example of all of the above, think of a time when you talked to someone that you knew was not telling the truth. Their words may have been convincing, but somehow you knew something was not right. How did you know this? What gave them away? The saying, "It is not what you say, but how you say it" is important to remember in all forms of communication, but especially when talking to someone with memory loss.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-11" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Encouraging Verbal Expression'); ?></h2>
      <hr />
      <p><?php echo t('Communication is difficult, and especially so when you are dealing with memory loss.'); ?></p>
      <h5><?php echo t('Allow circumlocution'); ?></h5>
      <p><?php echo t('Circumlocution refers to "talking around" or "talking in circles." People with memory loss sometimes "talk around" a subject before they are able to pinpoint it. Though this may seem annoying to us at times, for the person with memory loss it is actually a useful coping tool. Avoid rushing the person to the point, and allow them time to do this. It will help them to get their thoughts out, and will also serve to give you extra cues as to their thoughts or needs.'); ?></p>
      <h5><?php echo t('Allow time for processing'); ?></h5>
      <p><?php echo t('A person who is experiencing memory loss may have trouble following a conversation, particularly a conversation between several people. In these cases, her reaction time may be delayed while she tries to "catch up" with what is being said. If the person has been asked a question, allow her a little extra time to give a response. If she seems to be confused about how she is to respond, then you can either restate the question or narrow the possible answers – "Mom, Joe asked how you haveve been feeling" or "Mom, Joe wants to know if you are over your cold?"'); ?></p>
      <h5><?php echo ('Keep conversations on track'); ?></h5>
      <p><?php echo t('If the conversation gets too far off track, use gentle reminders to get the person back to the main point: "We did have a good time at Mary\'s birthday party. Joe was just asking how you are feeling today?" Remember, some circumlocution is helpful, but if the person gets too far off track, the train of thought may be lost entirely.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-12" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Avoid These Common Pitfalls…'); ?></h2>
      <hr />
      <h5><?php echo t('Arguing'); ?></h5>
      <p><?php echo t('It is hard to win an argument with someone who is experiencing memory loss, because his or her view of things may be very different from yours. Let us say that your Aunt Mae can not remember having gone to a restaurant the day before, and is upset over the doggie bag in the refrigerator because she claims, "I did not put that there, and I am not going to eat someone else\'s leftovers!"'); ?></p>
      <p><?php echo t('Our natural inclination is to set things right and use facts to prove our point. But if the person truly does not remember the experience of going to the restaurant, no amount of facts will change their mind. It won\'t help to pull out the calendar to show Aunt Mae that she wrote down "6 pm - dinner at Andy\'s Restaurant with Susan" or showing her the receipt, or even showing her a matchbook from the restaurant. Aunt Mae does not remember the experience – for her it simply never happened.'); ?></p>
      <p><?php echo t('So arguing with her that it did is just going to frustrate the both of you. Before arguing about something like this, you need to stand back and ask yourself, "Is this really worth it?" If a person\'s safety is at stake, the answer might be "yes." But in a situation like this one, it may be better to just say, "Well, then, I will just take this out of your refrigerator then." You will have avoided a needless argument.'); ?></p>
      <h5><?php echo t('Giving orders'); ?></h5>
      <p><?php echo t('No one likes to be told what to do – especially by our spouses or other family members. There is a world of difference between "Joe! Will you take out the trash already?" and "Joe, I would really appreciate it if you would take out the trash."'); ?></p>
      <p><?php echo t('Sometimes, people with memory loss do not respond to our requests the way we would like because the task seems too difficult. We will talk about this more in Section 5, but breaking tasks down into smaller steps may be the key. Maybe Joe does not take out the trash because he can not remember all of the steps involved in this task. He used to be in charge of recycling and separating everything and now he gets confused by all of the containers. As a result, he now avoids having anything to do with the trash. If you sense this is the problem, you may need to give Joe a smaller task to accomplish. For instance, just ask him to stack the newspapers and put them in the recycling bin rather than being responsible for separating and carrying out all of the trash.'); ?></p>
      <h5><?php echo t('Oversimplifying'); ?></h5>
      <p><?php echo t('The goal is to simplify only if needed, and without being condescending. In other words, simplify only when necessary and do not "dumb down." People with early memory loss may be very sensitive to the feeling that they are being treated as a child, or disrespectfully.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-13" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Share What You Know with Others'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Presume that others do not know the extent of the difficulties'); ?></li>
        <li><?php echo t('Provide information about communication tips'); ?></li>
        <li><?php echo t('Model and give feedback'); ?></li>
      </ul>
      <p><?php echo t('Last but not least, make sure that you share this information with your friends and other family members. Friends and other family members may not understand the extent of the difficulties you and your loved one are facing. Do not be afraid to let them know about what is going on. They may be able to better support you and your family member if they understand the situation, and they are more likely to get involved if they are informed about what is happening.'); ?></p>
      <p><?php echo t('Do not assume that everyone will automatically know how to deal with your family member\'s memory loss. They will not. Presume that they do not know and teach them what you have learned. Some people may be uncomfortable or may react in an unusual way. So provide information for your family and friends about what works and what does not. Give them tips on how to communicate with your family member. Model what works so that they can learn from you. Give them feedback about how they are doing, especially when they are doing a good job. Tell them about Alzheimer\'s Association\'s educational programs and support groups so that they can learn more if they prefer. Give them a brochure or book to read.'); ?></p>
      <p><?php echo t('Above all, do not give up, and do not allow yourself to get too frustrated. You will occasionally lose patience with your family member. No one is perfect. Learn to forgive yourself for your bad days or bad moments just as you forgive your family member for hers. Here are some resources that may assist you in understanding what a person with memory loss is experiencing, and how you may be able to assist them.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-14" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Good Sources of Information'); ?></h2>
      <hr />
      <p><?php echo t('Coping with Communication Challenges in Alzheimer’s Disease by Marie T. Rau, San Diego, CA: Singular Publishing Company, 1993.'); ?></p>
      <p><?php echo t('My Journey into Alzheimer’s Disease by Robert Davis. Carol Stream, lL: Tyndale House Publishers, 1989.'); ?></p>
      <p><?php echo t('Steps to Enhancing Communication: Interacting with Persons with Alzheimer’s Disease (brochure) available through the Alzheimer’s Association.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-15" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Closing'); ?></h2>
      <hr />
      <p><?php echo t('In this lesson, we have learned:'); ?></p>
      <ul>
        <li><?php echo t('Typical communication changes experienced by persons with early memory loss,'); ?></li>
        <li><?php echo t('General principles for enhancing communication with a person experiencing early memory loss,'); ?></li>
        <li><?php echo t('Ways to encourage verbal expression, and'); ?></li>
        <li><?php echo t('How to avoid communication pitfalls.'); ?></li>
      </ul>
      <p><?php echo t('For more ideas about communication strategies, please refer to chapters 5 and 8 of the book, Alzheimer’s Early Stages. Chapter 5 is especially helpful in understanding the communication challenges faced by persons with memory loss. If possible, read these chapters during the coming week.'); ?></p>
    </div>
    <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
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
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <div id="lesson-3-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Welcome Back!'); ?></h2>
        <hr />
        <p><?php echo t('Welcome to the third lesson of MSML Online.'); ?></p>
        <p><?php echo t('Before you begin, please email your Instructor or post to the Forum/Blog any questions or comments related to last week\'s lesson on Communication.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Making Decisions'); ?></h2>
        <hr />
        <p><?php echo t('"Not to decide is to decide."'); ?></p>
        <p><?php echo t('In this lesson, we go into depth about the changes that occur in the relationship between you and your relative as a result of memory loss. Your role gradually must change so that you become the chief decision-maker in the relationship. '); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Shifting the Balance of Power'); ?></h2>
        <hr />
        <h4><?php echo t('Preserve independence and meet dependence'); ?></h4>
        <p><?php echo t('When you begin to recognize the limits of your relative\'s memory and thinking abilities, you become better equipped to address his or her needs in practical decisions such as driving a car, handling money, and the like. These decisions require your active involvement. Helping someone to make such decisions may seem uncomfortable at first, especially if he or she does not recognize limits with memory and thinking. Unfortunately, he or she no longer has the capacity to be fully self-sufficient although many abilities remain intact. The balance of power must begin to shift in the relationship with the person with memory loss. You must decide how and when to keep a delicate balance between honoring that person\'s need for independence versus the legitimate need for dependence. This requires much tact and patience in making decisions.'); ?></p>
        <h4><?php echo t('Let us consider the following example:'); ?></h4>
        <p><?php echo t('Your 81-year-old mother has Alzheimer\'s disease and lives alone in her home. You are now responsible for managing her finances after you found out that her bills were months overdue. She is upset because she feels you are trying to control her life. She says to you one day: "You make all the decisions because you think you know what\'s best for me. I am not a child just because I ca not do what I used to do."'); ?></p>
        <p><?php echo t('How might you address her complaint? (Take about 5 minutes to arrive at a solution that would be satisfactory to both parties).'); ?></p>
        <h4><?php echo t('Making decisions – alone or together'); ?></h4>
        <p><?php echo t('Instead of involving someone with memory loss in every decision and run the risk of causing confusion, it is best to narrow the choices. For example, if a big decision is looming such as a move, it would be chaotic to involve the person with memory loss at each step in the process. However, it would be appropriate to involve the person at key points along the way like picking out furniture to keep or discard.'); ?></p>
        <h4><?php echo t('Quietly take the lead as if a great dancer'); ?></h4>
        <p><?php echo t('One way to visualize the lead role you must now take is to consider a couple engaged in ballroom dancing. Although the man takes the lead, the woman who is his partner is actively responding to his cues and steps. This is done in a spirit of cooperation but it requires that each person accepts an agreed upon role. You must now learn how to take the lead in the relationship but to the extent possible seek the cooperation of the other person.'); ?></p>
        <p><?php echo t('Cartoon of young and old woman with the latter saying:'); ?></p>
        <p><?php echo t('"Honey, I have been through two world wars, the Great Depression, taught 3,297 children, administered four elementary schools and outlived every one of the people I worked with. I am 89 years old and you are telling me it is bedtime?"'); ?></p>
        <p><?php echo t('These two people are clearly not in harmony. This scene typifies the universal need for control over one\'s destiny and how things can go wrong if that need is challenged. There is no reason to argue about anything as long as you take the right approach. Keep in mind that although the behavior of people with memory loss may appear childlike at times, adults are not children and should be respected as adults. Each person has a long personal history and is accustomed to making choices independently. To the extent possible, choices must be given so that conflicts can be prevented.'); ?></p>
        <p><?php echo t('How might this particular scenario have been played out differently? (Take a few minutes for ideas and use your imagination and flexibility.)'); ?></p>
        <p><?php echo t('Now let us turn to handling some practical issues…'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Driving a Car - Continue or Stop?'); ?></h2>
        <hr />
        <p><?php echo t('Driving a car is not only a means of getting around but is also a symbol of personal independence. AD often impairs brain functions that affect driving ability but sometimes those functions are spared so that driving may continue without difficulty for awhile.'); ?></p>
        <h4><?php echo t('Mixed results of research studies thus far'); ?></h4>
        <p><?php echo t('Results of research on the effects of AD on driving performance are not completely clear. However, virtually all studies conclude that as person becomes more impaired over time, there is a greater risk for traffic accidents.'); ?></p>
        <h4><?php echo t('No clear markers for risks'); ?></h4>
        <p><?php echo t('There is no definitive cognitive test or driving test yet available to accurately measure one\'s risk of impaired driving ability. However, you may be the best judge of one\'s ability to drive safely. One simple question you might ask yourself is this: Given what you know about the driving skills of the person with memory loss, would you feel comfortable letting a young child ride alone in the car with him or her?'); ?></p>
        <h4><?php echo t('No specific public policy in most states'); ?></h4>
        <p><?php echo t('In the state of California, every person who drives a car who is diagnosed with AD must be reported by the diagnosing physician to the state for a reassessment of driving skills. Drivers in California who reach the middle or late stage of the disease are not allowed to have their licenses renewed. In other states, however, there is no specific public policy governing AD and driving. Most states address the issue of medical problems that may impair driving ability in order to protect personal and public safety. Physicians and other authorities are usually entitled under state laws to take action if there is a serious concern about a driver\'s ability to safely operate a vehicle.'); ?></p>
        <p><?php echo t('If there are specific policies in your state pertaining to driving and disability, please share/post them on this Lesson\'s Forum.'); ?></p>
        <h4><?php echo t('Personal freedom versus public safety'); ?></h4>
        <p><?php echo t('Weighing one\'s desire to drive a motor vehicle against the public\'s need for safe drivers appears to be the crux of the issue. How this dilemma is resolved remains a private matter in most states.'); ?></p>
        <h4><?php echo t('Voluntary versus involuntary means'); ?></h4>
        <p><?php echo t('Fortunately, most people with AD discontinue driving on their own for the sake of safety or will bend to the wishes of others to quit driving voluntarily. By all means, a physician should take the lead in addressing this issue in order to spare the family the hassles that often ensue. After all, the decisions to stop driving stems from the medical problem of AD or a related dementia and therefore, a physician is best suited to address the practical implications of the disease including driving. You should communicate your concerns in advance of a visit to the physician’s office.'); ?></p>
        <p><?php echo t('A number of rehabilitation centers have specially trained staff members, usually occupational therapists, who can assess one’s driving capacity through a series of tests. Such testing may cost $250-400 but may be worthwhile to get a professional opinion about one’s driving capacity. A physician might recommend this course of action before a decision is reached.'); ?></p>
        <p><?php echo t('The privilege of driving is so terribly important for some people that taking away it away may harm the self-esteem of the person affected by this decision. It is important to consider alternative means of transportation in order to minimize the impact of this decision. Does your local area have bus transportation for seniors? Is your family prepared to take on the “chauffer” role?'); ?></p>
        <p><?php echo t('If persuasion alone is insufficient to keep an unsafe driver off the road, then taking action through the state department of motor vehicles to revoke one’s license may be the only alternative. Others undesirable options are to disable the car or get rid of it altogether.'); ?></p>
        <p><?php echo t('Please share a story about how they have addressed the issue of driving in their family.'); ?></p>
        <p><?php echo t('“When I die, I want to go peacefully, like my grandfather did, in his sleep; not screaming like the other passengers in his car.”'); ?></p>
        <p><?php echo t('This humorous quote illustrates the serious consequences of unsafe driving. It is better to err on the side of safety when considering whether or not a person with memory loss should continue driving. Again, the issue of personal freedom versus public safety must be carefully weighed when it comes to driving a car.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Handling Health &amp; Financial Decisions'); ?></h2>
        <hr />
        <h4><?php echo t('Capacity exists unless given up voluntarily'); ?></h4>
        <p><?php echo t('Making personal decisions over one’s health and financial affairs is a personal right that is threatened by memory loss. Assessing when and how to intervene is difficult unless the person with memory loss gives up this authority on a voluntary basis.'); ?></p>
        <h4><?php echo t('Personal freedom versus risks'); ?></h4>
        <p><?php echo t('As memory loss advances over time, the risks of continuing to manage one’s own affairs will become more obvious to others but in the early stage there may legitimate differences of opinion about the person’s ability to handle these affairs alone.'); ?></p>
        <p><?php echo t('Nevertheless, due to the person’s impaired memory and judgment, someone else must be in a position of monitoring risks. Otherwise, problems such as failing to pay important bills may emerge, as the previous example shows.'); ?></p>
        <h4><?php echo t('Mismanagement of finances & medical compliance'); ?></h4>
        <p><?php echo t('What are some of the risks? Persons with memory loss can lose track of money or stop paying bills. They may also be at risk of exploitation by others. In regards to medications, they can forget about taking their pills or take them more often than prescribed. Problems with taking or not taking medications can lead to health crises.'); ?></p>
        <p><?php echo t('It is fairly easy to assess if some one with memory loss is having trouble with their finances or their medication IF he or she is open to scrutiny. It’s important to raise these issues in a delicate manner in order to maintain trust and enlist the person’s cooperation.'); ?></p>
        <p><?php echo t('Does anyone have a story to share on this topic? If time permits.'); ?></p>
        <h4><?php echo t('Means to share or give up authority'); ?></h4>
        <p><?php echo t('At the next class, we will discuss legal steps such as Powers of Attorney in order to ensure that someone is responsible for handling financial and health care decisions.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Handling Other Household and Personal Tasks'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Over-learned tasks are preserved'); ?></li>
          <li><?php echo t('Difficulty with new & unfamiliar tasks'); ?></li>
          <li><?php echo t('Following a sequence of steps'); ?></li>
        </ul>
        <p><?php echo t('Generally, the ability to handle personal care tasks such as bathing and dressing is intact in the early stages. Such things have been done so often that they tend to be done almost automatically but some instances of forgetting these basic things may occur from time to time. More complex tasks such as cooking a meal or fixing an appliance in need of a repair are often problematic, however anything requiring a prescribed sequence of steps for completion may be disrupted due to memory loss. Thus, the person with memory loss tends to avoid doing new or unfamiliar tasks that require learning or memory beyond their capacity to be successful.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Traveling'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Unfamiliar places, people & schedule may increase confusion'); ?></li>
          <li><?php echo t('May also be an enjoyable time together'); ?></li>
          <li><?php echo t('Weigh risks & benefits for all concerned'); ?></li>
          <li><?php echo t('Take necessary precautions'); ?></li>
        </ul>
        <p><?php echo t('Like anything unfamiliar, traveling to new or different places may be more stressful than in the past for someone with memory loss but should not be ruled out altogether. However, traveling alone is too risky and increases the chance of becoming lost or confused. With proper planning and guidance, traveling with a relative or a friend may be an enjoyable activity. Precautions should be taken to minimize the chance of becoming lost while traveling.'); ?></p>
        <p><?php echo t('What are some steps that might be taken to prevent or minimize confusion? With proper planning, how might you handle a crisis such as the person with memory loss getting lost while away from home?'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Marital Intimacy'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Impact varies on persons & couples'); ?></li>
          <li><?php echo t('Physiological & psychological consequences'); ?></li>
          <li><?php echo t('Patterns of behavior may change over time'); ?></li>
          <li><?php echo t('Possible need for assessment & intervention'); ?></li>
        </ul>
        <p><?php echo t('Intimacy and sexuality are important issues for couples in which one partner is affected by memory loss. These important aspects of a relationship invariably change due to memory loss. The partner with memory loss slowly loses the capacity for shared closeness. Likewise, sexual functioning diminishes or ceases altogether. In rare cases, the sexual interest of the person with memory loss increases.'); ?></p>
        <p><?php echo t('The well partner usually experiences a diminished sexual interest due to the changes of providing care although the need for non-sexual intimacy may remain strong. Couples and individuals need to know that changes in this realm of the relationship are normal. Specific situations may call for further assessment and problem solving. There is no reason for embarrassment. Please let us know of you are having any special problems in this regard.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Challenges for Families'); ?></h2>
        <hr />
        <p><?php echo t('Although major responsibility of caring for a loved one with memory loss often falls on the shoulders of just one person, other family members may live in the local vicinity or at a distance and have their own personal reactions to the situation. Families are sometimes faced with these challenges:'); ?></p>
        <h4><?php echo t('History re-emerges, for better or worse'); ?></h4>
        <p><?php echo t('Each family has its own unique history of grappling with past problems. Some families may have worked well together in the past while other families may have lacked cooperation among their members. Some family members may get along well while others may disagree and share bad feelings toward each other. How a family responds to the needs of a loved one with memory loss and the primary person who provides care depends in large part on the family’s past experience.'); ?></p>
        <h4><?php echo t('Uneven division of labor among members'); ?></h4>
        <p><?php echo t('As already noted, most responsibilities of caring for someone are usually assumed by one family member. Traditionally, this has meant a spouse, a daughter or daughter-in-law. This person’s role is vital to the well-being of the person with memory loss. However, enormous sacrifices are usually made by the primary helper, in terms of time and effort. It is essential for everyone in the family to recognize the primary helper’s key role and to share in the responsibilities to the extent possible. Some family members will initiate action or gladly accept assigned duties whereas others might refuse to help.'); ?></p>
        <h4><?php echo t('Roles are often unclear'); ?></h4>
        <p><?php echo t('In the early stages of memory loss, each family member’s role and responsibilities may not be easy to identify. The person with memory loss may not seem to need help or readily accept anyone’s help. Likewise, the primary helper may be reluctant to call upon anyone’s assistance. As soon as possible, it is important to identify the needs of both the person with memory loss and the primary helper, keeping in mind that needs change over time with the advance of the disease. It is often useful to hold a family meeting for the sake of identifying these needs and giving everyone an opportunity to respond.'); ?></p>
        <h4><?php echo t('Different levels of acceptance / denial'); ?></h4>
        <p><?php echo t('Each member of a family accepts or denies the diagnosis of AD or a related dementia at a different pace. Those closest to the person with memory loss usually are the first to notice the subtle changes due to the disease and slowly come to terms with the resulting disabilities. Conversely, those who have casual contact, at holiday gatherings, for example, may not see the changes in memory and thinking that are noticeable on a daily basis.'); ?></p>
        <p><?php echo t('Again, a family meeting to discuss the diagnosis and its implications is often useful to clarify the facts of each situation. In order to put aside personal agendas that may exist within a family, having a third party involved in such a meeting may be useful. A physician, nurse, psychologist or social worker may be helpful in resenting the medical facts and facilitating a plan of action on behalf of the person with memory loss and the primary helper. Getting everyone “on the same page” is a first step toward enabling a family to better understand the situation and garnering each member’s support.'); ?></p>
        <p><?php echo t('Has anyone here been involved in a family meeting? Would you like to share the details?'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Telling Others: Pros and Cons'); ?></h2>
        <hr />
        <h4><?php echo t('Pros'); ?></h4>
        <ul>
          <li><?php echo t('Educate others about the nature of disease'); ?></li>
          <li><?php echo t('Create opportunities for others to help'); ?></li>
          <li><?php echo t('Put everyone concerned at ease'); ?></li>
        </ul>
        <h4><?php echo t('Cons'); ?></h4>
        <ul>
          <li><?php echo t('“What they don’t know won’t hurt them”'); ?></li>
          <li><?php echo t('Negative stereotypes associated with Alzheimer’s disease'); ?></li>
          <li><?php echo t('Risk of social isolation'); ?></li>
        </ul>
        <p><?php echo t('Another issue related to autonomy is how and when the diagnosis of AD or another form of dementia is conveyed to other people. This is a highly personal decision. Some people are reluctant to share the news with others while others are quite open about it. However, disclosing the diagnosis will become necessary as symptoms become more obvious over time. Most people figure things out anyway, long before the news is shared.'); ?></p>
        <p><?php echo t('Let us talk about good reasons for sharing the diagnosis. What are some reasons to list on the pro-side?'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Recognizing Reactions of Others'); ?></h2>
        <hr />
        <h4><?php echo t('Rally your supporters'); ?></h4>
        <p><?php echo t('Caring for someone with memory loss requires practical help and moral support from others on a regular basis. You are fortunate if you have family members and friends who can fill this need. These helpers may be instrumental in preserving your physical and mental health. Most people delay asking for help or do not take advantages of opportunities for help when offered. Now is the time to rally your supporters!'); ?></p>
        <h4><?php echo t('Accept hibernators'); ?></h4>
        <p><?php echo t('On the other hand, there are people in your life whose absence from the scene may surprise and disappoint you. You need to be prepared for dealing with those who are not helpful. Your own well-being is too important to be derailed by them. We refer to such people as "hibernators." Hibernators are those people who might be expected to be of service but excuse themselves from helping out in any meaningful capacity. Like bears in winter, they cannot handle the bad weather and retreat into the privacy and security of their own lives. For whatever reasons, they cannot or will not play a supportive role.'); ?></p>
        <p><?php echo t('Trying to engage hibernators seldom succeeds despite your repeated efforts. Much time and energy can be wasted persuading them to get involved. It is difficult to understand them and avoid harsh judgment. However, bitterness and resentment can become self-destructive. It may not be possible to forgive hibernators for their lack of help yet it is essential to forget that they can be counted on. Appreciating the efforts of those who are still involved instead of remaining disappointed over those who are not involved will contribute to your well-being.'); ?></p>
        <h4><?php echo t('Enlighten armchair quarterbacks'); ?></h4>
        <p><?php echo t('Can anyone here define the term, “armchair quarterback?”'); ?></p>
        <p><?php echo t('An armchair quarterback is someone who sits at home watching a football game on television and second-guesses the players or coach after a play has occurred. It is easy to call the shots from a distance instead of playing in the actual game. Armchair quarterbacks may think that they know how to play the game but this illusion stems from lack of experience. So it is with family members and friends who think that they know all about caring for someone with memory loss and offer unsolicited advice or criticism. Since their knowledge is based on theory instead of real world experience, most of what they have to say tends to fall on deaf ears.'); ?></p>
        <p><?php echo t('Some armchair quarterbacks may care enough to change their ways and become active helpers. They should be invited to "get into the game." They need encouragement as well as some concrete directions on how to get directly involved in the providing truly valuable help. Opportunities to experience caring for someone with memory loss, for an entire weekend, for example, may be an awakening for them. If an armchair quarterback seems unwilling to give up the role of self-appointed expert, it is probably best to set limits on their unwanted advice or avoid them as much as possible. It may simply be too stressful for you to withstand their meddling.'); ?></p>
        <p><?php echo t('You need to surround yourself with others who can enable you to maintain a positive attitude. Dealings with hibernators and armchair quarterbacks are draining. You need to eliminate or minimize their influence and focus your attention on those important people who enable you to remain healthy and happy. These relationships are essential for coping over the long haul.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Getting Others Involved'); ?></h2>
        <hr />
        <p><?php echo t('So, how do you get others involved? You do this by:'); ?></p>
        <ul>
          <li><?php echo t('Explaining the facts of the disease;'); ?></li>
          <li><?php echo t('Inform them of how the disease is affecting you and the person you love;'); ?></li>
          <li><?php echo t('Identify the types of help needed;'); ?></li>
          <li><?php echo t('Show appreciation for the concern and help provided;'); ?></li>
          <li><?php echo t('And develop new relationships by attending support groups, finding others who can relate with your situation and be a positive force in your life.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Major Milestones'); ?></h2>
        <hr />
        <p><?php echo t('Based on our experience with family members and friends of people with memory loss, we have identified six major milestones that indicate if someone is coping well. These milestones may not be reached within a month or even a year. Everyone moves along the road to acceptance at a different pace and in a unique way. These statements appear to be signs of healthy coping:'); ?></p>
        <h4><?php echo t('The relationship has changed -- I now lead it.'); ?></h4>
        <p><?php echo t('This statement reflects an understanding that your relationship with a memory-impaired person has been changed by a medical condition. He or she can no longer be completely self-sufficient and you have a right to protect the person’s well-being by offering leadership. Good leadership appreciates the deficits of the other person and enables one’s remaining capacities to be used as often as possible.'); ?></p>
        <h4><?php echo t('I must change, not the person with the disease.'); ?></h4>
        <p><?php echo t('Customary ways of listening to and talking with a memory-impaired person must give way to new ways of communicating. There is a basic understanding that you cannot control the person’s memory loss so you will have to make the necessary adaptations to fit the person’s needs. Just as you would not expect someone with broken legs to walk unaided, you supply the memory, thinking and other intellectual skills whenever needed.'); ?></p>
        <h4><?php echo t('I can learn how to cope effectively.'); ?></h4>
        <p><?php echo t('Knowledge, skill, and virtues such as patience and understanding can be practiced and learned so that you and the person with memory loss can enjoy a good quality of life.'); ?></p>
        <h4><?php echo t('I have limits and mistakes will be made.'); ?></h4>
        <p><?php echo t('You cannot provide for all of the person’s need at all times nor can you carry out this role perfectly. You can learn from your mistakes and apply the lessons to the future.'); ?></p>
        <h4><?php echo t('My own well-being is important too.'); ?></h4>
        <p><?php echo t('Although you spend lots of time caring for the needs of the person with memory loss, your own well-being must be attended too as well. In fact, the well-being of the person you care for is directly tied to your own well-being. If you are not in good shape, then the person you care for will suffer the consequences.'); ?></p>
        <h4><?php echo t('I must reach out and accept the help of others.'); ?></h4>
        <p><?php echo t('Consequently, you need to seek out help, take time off, and replenish your energy. Someone else may not be a perfect substitute but others can be taught and trusted to provide temporary assistance. An important milestone is reached when you have put a plan in place to do something on a regular basis that you find enjoyable apart from the person with memory loss.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Good Sources of Information'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Dancing on Quicksand: A Gift of Friendship in the Age of Alzheimer’s by Marilyn Mitchell. Boulder, CO: Johnson Books, 2002.'); ?></li>
          <li><?php echo t('Learning To Speak Alzheimer’s by Joanne Koenig Coste, New York: Houghton Miflin Co., 2003.'); ?></li>
          <li><?php echo t('The Majesty of Your Loving: A Couple\'s Journey through Alzheimer\'s by Olivia Hoblitzelle. Lyndonville, VT: Green Mountain Books, 2008.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Closing'); ?></h2>
        <hr />
        <p><?php echo t('We have just finished lesson three.'); ?></p>
        <p><?php echo t('Are there any questions about this lesson?'); ?></p>
        <p><?php echo t('Chapters 6 and 7 in the book, Alzheimer’s Early Stages, relate to this class. Please read those chapters for more information about the issues we covered today. The next lesson will focus on Planning for the Future.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
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
  
  <!-- close course --> 
</div>
