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
    <h3>{t}Survey{/t}</h3>
    <br />
    <p><a href="#">{t}MSML Online Pre-Course Survey{/t}</a></p>
    <p><a href="#">{t}MSML Online Post-Course Survey{/t}</a></p>
    <p><a href="#">{t}MSML Online Post-Post Course Survey{/t}</a></p>
    <p><a href="#">{t}MSML Online One-Year Survey{/t}</a></p>
    <br />
    <img src="<?php echo $this->getImagesUrl('msml/153075496.png'); ?>" alt="image"> </div>
  <div class="box-sidebar one">
    <h3>{t}Statistics{/t}</h3>
    <br />
    <img src="<?php echo $this->getImagesUrl('286x352_Grafix_1in5.png'); ?>" alt="image" />
    <p>{t}One in five caregivers report having had some degree of training, but continue to seek additional resources.{/t}</p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>Alzheimer's Association</h3>
    <br />
    <p>{t}10 Early Signs and Symptoms of Alzheimer's{/t}</p>
    <p> <a href="https://www.alz.org/alzheimers_disease_10_signs_of_alzheimers.asp" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('alz.png'); ?>" alt="image" /></a></p>
    <p>{t}Memory loss that disrupts daily life may be a symptom of Alzheimer's or another dementia. Alzheimer's is a brain disease that causes a slow decline in memory, thinking and reasoning skills. There are 10 warning signs and symptoms. Every individual may experience one or more of these signs in different degrees. If you notice any of them, please see a doctor.{/t}</p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>U.S. Dept. of Health &amp; Human Srvc.</h3>
    <p>{t}2011 - 2012 Alzheimer's Disease Progress Report{/t}</p>
    <p><a href="http://www.nia.nih.gov/alzheimers/publication/2011-2012-alzheimers-disease-progress-report" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('msml/adpr-front.png'); ?>" style="width:150px; height: 95px;" alt="image" /></a></p>
    <p>{t}A summary of Alzheimer's disease research, infrastructure, and funding supported by the NIH.{/t} </p>
    <br />
  </div>
</div>

<!-- start main content section here -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t($course->title); ?></h2>
  <p><?php echo t($course->description); ?></p>
  <h5>{t}Access - 1 year / Completion - 5 weeks (recommended){/t}</h5>
  <h4>{t}Objectives{/t}</h4>
  <ul>
    <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  <h4>{t}Course Lessons{/t}</h4>
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> {t}Overview of Memory Loss{/t}</a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-27" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-28" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-29" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-30" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-31" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-32" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-33" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-34" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-35" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-36" data-fancybox-group="lesson-1" class="hide lesson-1"></a> </li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> {t}Communication Strategies{/t}</a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-11" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-12" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-13" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-14" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-15" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> {t}Making Decisions{/t}</a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-11" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-12" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-13" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-14" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-15" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-16" data-fancybox-group="lesson-3" class="hide lesson-3"></a> </li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> {t}Planning for the Future{/t}</a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-11" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-12" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-13" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-14" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-15" data-fancybox-group="lesson-4" class="hide lesson-4"></a> </li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> {t}Effective Ways of Coping{/t}</a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-11" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-12" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-13" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-14" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-15" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-16" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-17" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-18" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-19" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-20" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-21" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-22" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-23" data-fancybox-group="lesson-5" class="hide lesson-5"></a> </li>
  </ul>
  <div class="box-white" id="resources">
    <h4> {t}Resources{/t}</h4>
    <p>{t}Please use these listed resources in the completion of this online course. Please contact your instructor or the program director if you have additional resources you would like to see added here.{/t}</p>
    <ul>
      <li><a href="http://www.alz.org" target="_blank">Alzheimer's Association</a></li>
      <li><a href="http://www.nih.gov" target="_blank">National Intitute on Health (NIH)</a></li>
      <li><a href="http://pewinternet.org" target="_blank">Pew Internet &amp; American Life Project</a></li>
    </ul>
  </div>
  <div class="box-white" id="developers">
    <h4>{t}Facilitators &amp; Course Developers{/t}</h4>
    <h5>{t}Content Designer:{/t}</h5>
    <p><a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a><br />
      {t}Through research-based programs and innovative techniques, Mather LifeWays Institute on Aging is committed to advancing the field of geriatric care. Cutting-edge research lays the foundation for our solid solutions to senior care challenges, including recruitment, mentorship, training, and retention. Used by individuals and entire organizations, our nationally recognized, award-winning programs include training modules, online courses, toolkits, and learning modules designed to make learning fun and easy. Our programs have been shown to result in measurable improvements in the quality of care provided and workforce retention.{/t}</p>
    <p><a href="http://www.alz.org/illinois/" target="_blank">Greater Illinois Chapter | Alzheimer's Association</a><br />
      {t}The Alzheimer’s Association, Greater Illinois Chapter serves 68 counties in Illinois with offices in Bloomington, Carbondale, Chicago, Joliet, Rockford and Springfield. Since 1980, the Chapter has provided reliable information and care consultation; created supportive services for families; increased funding for dementia research; and influenced public policy changes. Today, the Greater Illinois Chapter serves the more than a half million Illinois residents affected by Alzheimer’s disease throughout our chapter area, including 210,000 people with the disease.{/t}</p>
    <span class="h5">{t}Course Developer: {/t}</span><span class="name">Jon Woodall</span>
    <p>{t}Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs.{/t} </p>
    <span class="h5">{t}Facilitator: {/t}</span><span class="name">Ellen Ziegemeier</span>
    <p>{t}Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She earned her Masters in Anthropology, and has worked locally and abroad -  Latin America and South America for various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver training.{/t} </p>
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
        <h2 class="flowers">{t}Making Sense of Memory Loss (MSML) Online{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/154418413.png'); ?>" alt="image">
        <h4>{t}Developers{/t}</h4>
        <p>{t}This educational program was jointly developed by:{/t}</p>
        <h5><a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a></h5>
        <p>{t}Mather LifeWays Institute on Aging creates Ways to Age Well for older adults by conducting translational
research and education for professionals who serve them.{/t}</p>
        <h5><a href="http://www.alz.org" target="_blank">Alzheimer's Association ‐ Greater Illinois Chapter</a></h5>
        <p>{t}The Alzheimer's Association is the leading, global voluntary health organization in Alzheimer's care and
support, and the largest private, nonprofit funder of Alzheimer's research.{/t}</p>
        <h4>{t}Use of Information{/t}</h4>
        <p>{t}Any person is hereby authorized to view the information available from this guide for informational
purposes only. No part of the information on this guide can be redistributed, copied, or reproduced
without prior written consent of Mather LifeWays Institute on Aging.{/t}</p>
        <h4>{t}Copyright{/t}</h4>
        <p>{t}Information and materials of Mather LifeWays Institute on Aging included in its guides are protected by
the copyright laws of the United States and international treaties.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Welcome{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
        <p>{t}We are delighted that you are interested in MSML Online. This five‐part
online course is intended to help family members of someone in the early stages of memory loss to
meet the challenges they face now and in the future. Research evaluation has shown that participation in
this online course increases family members’ knowledge and improves coping skills with respect to their
relatives’ memory and behavior changes.{/t}</p>
        <p>{t}MSML Online is primarily intended to educate families with a relative who has been
diagnosed with the early stages of Alzheimer's disease or a related dementia. Families with a relative who
has not yet been diagnosed with one of these conditions may also benefit from participation. Individuals
and families facing the later stages of dementia should be directed to programs that better suit their
needs. Likewise, persons with memory loss should be encouraged to attend education and support
programs specifically suited to them.{/t}</p>
        <p>{t}It is our experience that this course is essential for your success in acquiring
knowledge and coping skills.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">Media Storm</h2>
        <hr />
        <p>{t}Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur's 83-year-old father, Herbie, became too infirm to care for himself.{/t}</p>
        <div id="video" style="width:400px;">
          <div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ce9beaabc886268&w=400&h=340&amp;lang=none"></script></div>
          <div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">Millions of middle-aged Americans are caring for their children as well as their aging parents. When filmmaker-photographer pair Julie Winokur and Ed Kashi took in Winokur's 83-year-old father, they decided to document their own story. See the project at <a href="http://mediastorm.com/publication/the-sandwich-generation" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/the-sandwich-generation</a></div>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Course Overview{/t}</h2>
        <hr />
        <p>{t}The course is divided into five modules. Each module is approximately two to three hours. Modules build upon each other, so it is recommended that the agenda be followed as prescribed.{/t}</p>
        <p>{t}Module One ‐ Overview of Memory Loss and Related Symptoms, is an introduction of class leaders and
participants. Discussion of the medical aspects of memory loss, causes of memory loss, the need for a
medical evaluation, drug treatments, and the current state of research.{/t}</p>
        <p>{t}Module Two ‐ Communication Strategies, is an overview of communication changes typical in early memory
loss. Familiarize participants with general principles for maintaining communication with a person
experiencing early memory loss.{/t}</p>
        <p>{t}Module Three ‐ Making Decisions, addresses practical issues in everyday life such as driving a car, handling health and financial decisions, or managing household tasks.{/t}</p>
        <p>{t}Module Four ‐ Planning for the Future, addresses a number of ways to prepare for changes that are likely to
occur over the course of progressive memory loss. The need for legal and financial planning and other
community resources are covered.{/t}</p>
        <p>{t}Module Five ‐ Effective Ways of Coping and Caring, addresses how to involve the person with memory loss in
a variety of activities and discusses ways for family members to take care of themselves.{/t}</p>
        <h4>{t}Companion Book{/t}</h4>
        <p><a href="http://www.amazon.com/Alzheimers-Early-Stages-Friends-Caregivers/dp/0897933974" target="_blank">{t}Alzheimer’s Early Stages: First steps for family, friends and caregivers.{/t}</a></p>
        <p>{t}We recommend you read this book while participating in MSML Online. Recommended chapters at the start of the course reinforce the course content.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/logo04.jpg'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Course Components{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/153539296.png'); ?>" alt="image">
        <p>{t}It is important to note that every effort has been made to include accurate information, but sometimes health care professionals have differing opinions. Also, future scientific advances may make some of this
information outdated. The developers of this course will make periodic revisions as needed. We want to encourage participants to address their specific concerns with licensed professionals. We can offer general information and guidance for participants to seek out solutions to their unique challenges.{/t}</p>
        <p>{t}This program was developed as an overview for families on what to expect as early memory loss
progresses. Each module is meant to provide basic information only. Following this course, you may wish to
locate content experts who can address specific issues such as legal and financial planning.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Course Effectiveness{/t}</h2>
        <hr />
        <p>{t}MSML Online has undergone numerous revisions. The program it is based on, MSML, went through several formal evaluations to demonstrate its effectiveness.{/t}</p>
        <p>{t}Research evaluation was conducted among more than 200 participants in the original program. In one study, good outcomes were reported in terms of increased knowledge and improved coping skills at post‐course and six months later (Kuhn and Mendes de Leon, 2001). Similar positive outcomes plus improved self‐confidence were reported by another group (Kuhn and Fulton, 2004). Likewise, when the education program was implemented in nine chapters of the
Alzheimer’s Association, participants reported improvements in their knowledge and coping skills.{/t}</p>
        <p>{t}Outcome measures used in this original research included:{/t}</p>
        <ol>
          <li>{t}A 15‐item Knowledge about Memory Loss and Care Test, (Kuhn, King, and Fulton, 2005);{/t}</li>
          <li>{t}A 10‐item Measure of Self‐Efficacy (Fulton and Kuhn, 2004) and;{/t}</li>
          <li>{t}The 7‐item memory sub‐scale of the Revised Memory and Behavior Problems Checklist (Teri et al., 1992).{/t}</li>
        </ol>
        <h5>{t}References{/t}</h5>
        <div id="resources">
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
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Module 1: Overview of Memory Loss & Related Symptoms{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/164088989.png'); ?>" alt="image">
        <h4>{t}Purposes{/t}</h4>
        <ul>
          <li>{t}Introduce Class Leader(s) and participants and give an overview of the course{/t}</li>
          <li>{t}Explain major medical causes of memory loss{/t}</li>
          <li>{t}Ensure that a medical evaluation is done to explore reasons for memory loss{/t}</li>
          <li>{t}Explain symptoms of Alzheimer’s disease and related dementias{/t}</li>
          <li>{t}Describe current and proposed medical treatments{/t}</li>
          <li>{t}Describe research efforts to treat or prevent memory loss{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Introductions{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/72968269.png'); ?>" alt="image">
        <p class="forum">{t}We will begin by asking you to say something about who you are and what brings you here. Please answer these questions on the Forum:{/t}</p>
        <ul class="forum">
          <li>{t}What is your relationship with the person who is experiencing memory loss?{/t}</li>
          <li>{t}How long have you noticed their problem with memory or thinking?{/t}</li>
          <li>{t}What is the name of the medical condition or diagnosis, if known, that accounts for the problem?{/t}</li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> 
        
        <!-- 
        
       
        <p>{t}As you can see, dementia is an umbrella term that includes reversible and irreversible conditions.{/t}</p>
        <div id="question1" class="question">
          <p><b>{t}Have you ever visited the Alzheimer's Assocation website?{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Great! We will use this resource throughout this course.{/t} </p>
          <p class="wrong-answer hide"> {t}Please familiarize yourself with their website.{/t} </p>
        </div>
         --> 
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Who We Are{/t}</h2>
        <hr />
        <ul>
          <li>{t}Name{/t}</li>
          <li>{t}Relationship{/t}</li>
          <li>{t}How Long Ago was Noted?{/t}</li>
          <li>{t}Diagnosis{/t}</li>
        </ul>
        <h4>{t}Goals of the Program{/t}</h4>
        <p>{t}This five‐week series of classes is intended to help you meet the current challenges of caring for someone in the early stages of memory loss. This condition is usually due to a medical condition such as Alzheimer’s
disease or a related dementia. Therefore, this first session focuses on medical reasons for memory loss and
its treatments. If your relative has not had a thorough medical evaluation yet, we hope this information
will encourage you to seek one right away. This first class is also intended to give you other medical
information. The remaining classes provide other types of information and guidance for coping with your
relative’s memory loss.{/t}</p>
        <p>{t}Memory loss and other signs of mental decline have profound effects on the lives of individuals and
families. Nevertheless, we are convinced that a good quality of life can still be maintained for all concerned
by learning to make changes in lifestyle and outlook. For many family members, this involves a change in
relationships and priorities. At times the demands may seem overwhelming. This educational series is
aimed at helping you make decisions about how and when to make changes in your lifestyle, both now and
in the future.{/t}</p>
        <p>{t}In writing the content for these classes, the developers spent many years talking to countless people with
memory loss and their family members. They believe that there is no single way of coping successfully.
Everyone must find ways that suit their own particular needs or situation, but it can be done. Those who
have met the challenges of memory loss have taught us about the need for flexibility, patience, humor,
faith, and friendship. Such qualities are developed over time. It is our sincere hope that a solid
understanding of memory loss in the early stages will assist you in this process.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Agenda: MSML Online{/t}</h2>
        <hr />
        <ul>
          <li>{t}Module 1: Overview of Memory Loss &amp; Related Symptoms{/t}</li>
          <li>{t}Module 2: Communications Strategies{/t}</li>
          <li>{t}Module 3: Making Decisions{/t}</li>
          <li>{t}Module 4: Planning for the Future{/t}</li>
          <li>{t}Module 5: Effective Ways of Coping &amp; Caring{/t}</li>
        </ul>
        <p>{t}The agenda for these five modules include these general topics. We strongly encourage you to participate in all five modules as the information of each class flows into the next one. In this first module, an overview of memory loss and a host of brain diseases known as dementias will be given. Again, this information is mainly medical in nature.{/t}</p>
        <p>{t}Module number two covers communication skills that will help you and others in caring for your relative. Module three prepares you for the major decisions that need to be made as memory loss progresses: when
to stop driving; health; and financial decisions. In module number four, planning for the future is the focus.{/t}</p>
        <p>{t}Finally, in module five we talk about how to keep your relative engaged in meaningful activities and the need
to take steps to care for yourself. It is our belief that if you take good care of yourself, your relative with
memory loss will be better off too.{/t}</p>
        <p class="forum">{t}To make sure that we address your questions, please tell us what questions you have on the Forum.{/t}</p>
        <p>{t}In this first class, we will address the following questions:{/t}</p>
        <ul>
          <li>{t}What causes memory loss?{/t}</li>
          <li>{t}How are brain diseases diagnosed?{/t}</li>
          <li>{t}What are the symptoms and stages of Alzheimer's disease?{/t}</li>
          <li>{t}How is memory loss treated?{/t}</li>
          <li>{t}What is being done in the area of medical research?{/t}</li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Definition of Dementia{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135095760.png'); ?>" alt="image">
        <ul>
          <li>{t}Deterioration of at least two brain functions, including memory{/t}</li>
          <li>{t}A syndrome, not a diagnosis{/t}</li>
          <li>{t}In the past, referred to as senility or <i>hardening or the arteries</i>{/t}</li>
        </ul>
        <p>{t}Dementia is not a specific disease. It is an overall term that describes a wide range of symptoms associated with a decline in memory or other thinking skills severe enough to reduce a person's ability to perform
everyday activities. Alzheimer's disease accounts for 60 to 80% of cases. Vascular dementia, which occurs
after a stroke, is the second most common dementia type. But there are many other conditions that can
cause symptoms of dementia, including some that are reversible, such as thyroid problems and vitamin
deficiencies.{/t}</p>
        <p>{t}Dementia is often incorrectly referred to as senility or senile dementia, which reflects the formerly
widespread but incorrect belief that serious mental decline is a normal part of aging.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Functions{/t}</h2>
        <hr />
        <ul>
          <li>{t}Memory{/t}</li>
          <li>{t}Orientation{/t}</li>
          <li>{t}Language{/t}</li>
          <li>{t}Judgement{/t}</li>
          <li>{t}Perception{/t}</li>
          <li>{t}Attention{/t}</li>
          <li>{t}Ability to peform tasks in sequence{/t}</li>
        </ul>
        <p>{t}Dementia typically unfolds gradually over a period of many years but it can begin suddenly or
unexpectedly. It affects some or all of these brain functions listed below.{/t}</p>
        <p class="forum">{t}Search the Internet for examples of how dementia affects some of these brain functions listed above, and report your findings on the Forum.{/t}</p>
        <p class="forum">{t}Did you ever forget a name or forget an appointment or get lost? What did it feel like at the time? Please describe those experinces on the Forum{/t}</p>
        <p>{t}Imagine how difficult it would be to experience this type of problem on a regular basis. We address the
experience of living dementia during the next module.{/t}</p>
        <p>{t}Is everyone familiar with terms like congestive heart failure, liver failure and kidney failure? When the
brain fails to do its work, dementia is the appropriate medical term.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Dementia{/t}</h2>
        <hr />
        <table>
          <tr>
            <th><p>{t}Reversible Dementias{/t}</p></th>
            <th><p>{t}Irreversible Dementias{/t}</p></th>
          </tr>
          <tr>
            <td><ul>
                <li>{t}Toxic Effects of Medications{/t}</li>
                <li>{t}Infections{/t}</li>
                <li>{t}Metabolic disorders{/t}</li>
                <li>{t}Major depression{/t}</li>
                <li>{t}Brain tumors{/t}</li>
              </ul></td>
            <td><ul>
                <li>{t}Alzheimer’s Disease{/t}</li>
                <li>{t}Multi-infarct/Vascular{/t}</li>
                <li>{t}Parkinson’s Disease{/t}</li>
                <li>{t}Lewy Body Disease{/t}</li>
                <li>{t}Over 50 rare types{/t}</li>
              </ul></td>
          </tr>
        </table>
        <p>{t}As you can see, dementia is an umbrella term that includes reversible and irreversible conditions.{/t}</p>
        <h5>{t}Reversible Dementias{/t}</h5>
        <p>{t}On the left hand side of this slide is a list of more common reversible conditions that sometime mimic
irreversible conditions such as Alzheimer's.{/t}</p>
        <h5>{t}Irreversible Dementias{/t}</h5>
        <p>{t}Most dementias are irreversible in nature. Sometimes two or more types of these dementias may occur
together as a "mixed dementia." There are several dozen types of dementia and the major types can be
found on the Internet.{/t}</p>
        <p class="forum">{t}Search the Alzheimer's Association's website for greater explanations for these types of reversible and irreversible dementias. Choose one from each category, and provide a description for each one on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Medical Evaluation of Dementia{/t}</h2>
        <hr />
        <ul>
          <li>{t}History from the individual &amp; relative/friend{/t}</li>
          <li>{t}Mental status test{/t}</li>
          <li>{t}Clinical exam{/t}</li>
          <li>{t}Blood work{/t}</li>
          <li>{t}Brain scan{/t}</li>
          <li>{t}Only if indicated: Psycholgoical testing, HIV test, Brain biopsy, PET scan, Lumbar puncture, EEG{/t}</li>
        </ul>
        <p>{t}A medical evaluation is always needed to clarify the diagnosis so that both reversible and irreversible
conditions can be identified, treated, and understood by all concerned.{/t}</p>
        <p>{t}Basic elements of a medical evaluation by a doctor consist of the following: an accurate history of the
symptoms; a brief mental status test; a physical examination; blood tests (Complete Blood Count,
Chemistry profile, thyroid function, syphilis serology, Vitamin B12, and Folate); and brain imaging through
either a CT or MRI scan.{/t}</p>
        <p>{t}Sometimes additional tests are ordered for the sake of thoroughness in diagnosing the exact type of
dementia. There is no single test, such as a blood test, available to diagnose AD, as is the case with
diabetes, for example. However, when other disorders have been ruled out and common symptoms of AD
such as progressive loss of memory have been documented, there is a high probability for obtaining an
accurate diagnosis by an experienced physician.{/t}</p>
        <div id="question1" class="question">
          <p><b>{t}Is a medical evaluation necessary to clarify the diagnosis of a reversible or irreversible dementia?{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct! A medical evaluation is always needed to clarify the diagnosis.{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Please review the content above again.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">Media Storm</h2>
        <hr />
        <p>{t}MediaStorm is an award-winning interactive design and video production studio that works with top visual storytellers, interactive designers and global organizations to create cinematic narratives that speak to the heart of the human condition.{/t}</p>
        <div style="width:400px;" id="video">
          <div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ccd9bb6ef492263&w=400&h=340&amp;lang=none"></script></div>
          <div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">With humor as well as unflinching honesty, <i>It Ain't Television... It's Brain Surgery</i> is Ray Farkas's first-person account of his own brain surgery, which he underwent in hopes of reducing the debilitating symptoms of Parkinson's Disease. See the project at <a href="http://mediastorm.com/publication/it-aint-television-its-brain-surgery" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/it-aint-television-its-brain-surgery</a></div>
        </div>
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Criteria for probable Alzheimer's disease{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/160330106.png'); ?>" alt="image">
        <ul>
          <li>{t}Dementia is evident without other disorders to account it{/t} </li>
          <li>{t}Deficits in at least two areas of cognition{/t} </li>
          <li>{t}Progressive worsening of recent memory and other functions{/t} </li>
        </ul>
        <p>{t}Criteria have been established to guide physicians in making the diagnosis. In most cases, these criteria are
useful to differentiate between AD and other types of dementia. Any doubts about the accuracy of the
diagnosis should be checked by a second opinion from a medical specialist such as a neurologist. Most
people who experience progressive loss of memory have AD. Therefore, the major focus of the rest of
today’s class will be on this particular condition.{/t}</p>
        <p class="forum">{t}Please post any questions you have on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Prevalence of Alzheimer's disease by Age{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/121113384.png'); ?>" alt="image">
        <p>{t}AD is rather common among the older population. According to the Alzheimer's
Association, an estimated 5.4 million Americans of all ages had Alzheimer's disease in 2012. This figure
includes 5.2 million people age 65 and older, and 200,000 individuals under age 65 who have youngeronset
Alzheimer's.{/t}</p>
        <p class="forum">{t}Taking into account the figures above, can you guess how many Americans have AD today? How many
people in our state are estimated to have AD? Can you guess how many people are expected to have AD
40 years from now? Search the Internet to help with your answers, and post them to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Projected Growth of Persons with Alzheimer's disease{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/AAscreenshot.png'); ?>" alt="image">
        <p>{t}Based on projections of the older population in the coming decades, it is expected that the number of
Americans with AD will grow dramatically.{/t}</p>
        <p class="forum">{t}Search the Alzheimer's Association's website for the most current facts on figurs on the growth of AD. Record your findings on the Forum{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Dr. Alois Alzheimer{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/122568932.png'); ?>" alt="image">
        <p>{t}Alzheimer’s disease was first described in 1906 by Dr. Alois Alzheimer, a German neurologist and
pathologist. He was the first scientist to describe the symptoms in a female patient and connect them to
damaged areas in her brain. Following her death, Dr. Alzheimer performed an autopsy and found
shrinkage of the brain as well as tiny abnormalities he referred to as tangles and amyloid plaques.{/t}</p>
        <div id="question1" class="question">
          <p><b>{t}Alzheimer's disease is an irreversible, progressive brain disease that slowly destroys memory and thinking skills, and eventually even the ability to carry out the simplest tasks.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}True{/t} </option>
              <option value="0"> {t}False{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct!{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Please ensure you understand what Alzheimer's disease is before continuing.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal{/t} -> {t}Mild Cognitive Impairment{/t} -> {t}Alzheimer's disease{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/118564579.png'); ?>" alt="image">
        <p>{t}Experts today agree that what is called “early stage” AD is probably the result of many years of the disease
slowly developing in the brain. In the late 1990s, researchers began to identify “mild cognitive
impairment” or “MCI” as a very early sign of AD in many people. Persons with this condition show
evidence of recent memory loss on formal testing but show no other brain impairments such as
disorientation. Recent studies indicate that about half of people with MCI develop early stage AD within 5
years and most of them develop AD within 10 years. In other words, in addition to memory loss, another
brain function will begin to show signs of deterioration.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Early Stage{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/120921047.png'); ?>" alt="image">
        <table>
          <tr>
            <th><p>{t}Function{/t}</p></th>
            <th><p>{t}Potential Signs{/t}</p></th>
          </tr>
          <tr>
            <td><ul>
                <li>{t}Memory{/t}</li>
                <li>{t}Langauge{/t}</li>
                <li>{t}Orientation{/t}</li>
                <li>{t}Motor{/t}</li>
                <li>{t}Mood and behavior{/t}</li>
                <li>{t}Activities of daily living (ADLs){/t}</li>
              </ul></td>
            <td><ul>
                <li>{t}Loss of recent memory{/t}</li>
                <li>{t}Mild aphasia{/t}</li>
                <li>{t}Seeks familiar people and places{/t}</li>
                <li>{t}Difficulty writing and using objects{/t}</li>
                <li>{t}Disinterest and depression{/t}</li>
                <li>{t}Needs reminders with ADLs{/t}</li>
              </ul></td>
          </tr>
        </table>
        <p>{t}AD is slowly progressive and may last three to twenty years. The rate of progression varies from person to
person. The disease tends to advance according to stages of severity but people can remain in the early
stages for five years or longer. AD unfolds in subtle ways, not unlike normal absent‐mindedness, except
with daily regularity. Early stage symptoms may not be noticed until the affected person or family realizes
that a pattern has developed. Something may occur that makes symptoms more evident, such as an acute
illness.{/t}</p>
        <p class="forum">{t}Based on your experience, do any of these early stage symptoms or signs look familiar to you? What were the first signs you noticed in your relative? Please record your responses on the Forum{/t}</p>
        <p>{t}Forgetting appointments, misplacing things, difficulty managing a checkbook, word finding problems, and
loss of initiative are typical changes at this stage. Symptoms may be inconsistent, with "good days" and
"bad days" making life unpredictable for all concerned. One’s ability to manage self‐care tasks is still intact
at this point but reminders and supervision are needed with activities of daily living (ADLs) such as cooking,
shopping, and paying bills.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Middle Stages{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/120921047.png'); ?>" alt="image">
        <table>
          <tr>
            <th><p>{t}Function{/t}</p></th>
            <th><p>{t}Potential Signs{/t}</p></th>
          </tr>
          <tr>
            <td><ul>
                <li>{t}Memory{/t}</li>
                <li>{t}Langauge{/t}</li>
                <li>{t}Orientation{/t}</li>
                <li>{t}Motor{/t}</li>
                <li>{t}Mood and behavior{/t}</li>
                <li>{t}Activities of daily living (ADLs){/t}</li>
              </ul></td>
            <td><ul>
                <li>{t}Chronic, recent memory loss{/t}</li>
                <li>{t}Moderate word finding difficulty{/t}</li>
                <li>{t}May get lost at times{/t}</li>
                <li>{t}Difficulty using objects, slowed walking{/t}</li>
                <li>{t}Possible depression and agitation{/t}</li>
                <li>{t}Needs reminders and help with most ADLs{/t}</li>
                <li>{t}Difficulties with IADLs{/t}</li>
              </ul></td>
          </tr>
        </table>
        <p>{t}As AD progresses to the middle stages, symptoms become more obvious. Memory loss and disorientation
worsen, language difficulties increase, and walking ability may slow. Independence with daily tasks
becomes compromised. The ability to make health care and financial decisions is very questionable at this
stage and others must assume the role of decision makers.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-23" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Late Stages{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/120921047.png'); ?>" alt="image">
        <table>
          <tr>
            <th><p>{t}Function{/t}</p></th>
            <th><p>{t}Potential Signs{/t}</p></th>
          </tr>
          <tr>
            <td><ul>
                <li>{t}Memory{/t}</li>
                <li>{t}Langauge{/t}</li>
                <li>{t}Orientation{/t}</li>
                <li>{t}Motor{/t}</li>
                <li>{t}Mood and behavior{/t}</li>
                <li>{t}Activities of daily living (ADLs){/t}</li>
              </ul></td>
            <td><ul>
                <li>{t}Mixes up past and present{/t}</li>
                <li>{t}Harder to communicate verbally{/t}</li>
                <li>{t}Cannot identify familiar people and places{/t}</li>
                <li>{t}Tremors, rigidity (at risk for falls){/t}</li>
                <li>{t}Increased risk be behavioral disturbances{/t}</li>
                <li>{t}Needs reminders with all ADLs{/t}</li>
              </ul></td>
          </tr>
        </table>
        <p>{t}In the late stages of AD, all brain functions become severely impaired. Speech and long‐term memory are
significantly compromised at this point. Individuals may misidentify familiar people, places, and objects.
Constant supervision of the person with late stage AD is required for the sake of safety and care.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-24" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Final Stages{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/120921047.png'); ?>" alt="image">
        <table>
          <tr>
            <th><p>{t}Function{/t}</p></th>
            <th><p>{t}Potential Signs{/t}</p></th>
          </tr>
          <tr>
            <td><ul>
                <li>{t}Memory{/t}</li>
                <li>{t}Langauge{/t}</li>
                <li>{t}Orientation{/t}</li>
                <li>{t}Motor{/t}</li>
                <li>{t}Mood and behavior{/t}</li>
                <li>{t}Activities of daily living (ADLs){/t}</li>
              </ul></td>
            <td><ul>
                <li>{t}No apparent link to past or present{/t}</li>
                <li>{t}Mute or few incoherent words{/t}</li>
                <li>{t}Seemingly oblivious to surrondings{/t}</li>
                <li>{t}Little spontaneous movement, swallowing difficulty){/t}</li>
                <li>{t}Completely passive{/t}</li>
                <li>{t}Requires total care{/t}</li>
              </ul></td>
          </tr>
        </table>
        <p>{t}If someone lives long enough to reach the final stages of AD, there is little or no language, little purposeful movement, and total reliance on others. Swallowing problems may become evident. Death usually results from an infection or pneumonia. At any point in the disease, other medical problems can worsen symptoms and make decline faster.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-25" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Changes in the Brain{/t}</h2>
        <hr />
        <ul>
          <li>{t}Key chemicals malfunction, disrupting communication among cells{/t}</li>
          <li>{t}Tiny abnormalities form: plaques and tangles{/t}</li>
          <li>{t}Communication between nerve cells is disrupted{/t}</li>
          <li>{t}Brain cells die and brain shrinks{/t}</li>
        </ul>
        <p>{t}Most people think of the nervous system as the body’s electrical wiring. This is correct up to a point. Nerve
cells transmit impulses much like wires transmit electricity. But unlike wires, which are connected at all
times, brain cells do not touch one another. They have microscopic gaps between them called synapses.
Nerve impulses must jump these gaps along the way and communicate with other brain cells. They do it
with the help of chemicals called neurotransmitters. In AD, many brain chemicals are either insufficient or
overabundant for reasons that are not well understood.{/t}</p>
        <p>{t}The tangles and plaques formed by AD represent the death of cells throughout the brain. The brain shrinks
in size, losing as much as one‐third of its weight. Tangles consist of abnormal collections of twisted threads
found within brain cells. Plaques consist of an abnormal deposit of a protein between brain cells called
amyloid.{/t}</p>
        <p>{t}Although most changes due to the disease can only be seen at the microscopic level, in advanced cases of
the disease, some abnormalities can be seen with the naked eye. The next few slides help us visualize the
brain damage caused by AD.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-26" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal Brain versus Advanced AD Brain{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/alzheimer_brain.png'); ?>" alt="image">
        <p>{t}This is a human brain removed from the skull after death. On the left, this brain looks normal and appears
free of disease. It weighs about three and a half pounds and it looks like a giant walnut.{/t}</p>
        <p>{t}On the right, notice the deep crevices in this brain compared to the plump brain in the last photo. This
brain has shrunk in size and weight due to advanced AD. It is also loaded with plaques and tangles that one
can see only with a microscope.{/t}</p>
        <p>{t}The dark spots in the middle are called ventricles that are spaces for the flow of blood and spinal fluid.
As you can see, the difference between the two brains is quite dramatic. In this photo, the ventricles are
greatly enlarged due to damage resulting from advanced AD. Most illnesses result in physical changes in a
person’s body. For example, when someone has had a major stroke, it is usually easy to see the paralysis
or weakness.{/t}</p>
        <p>{t}On the other hand, AD cannot be usually seen except for changes in a person’s memory, thinking and
behavior. Yet this photo shows that such changes are caused by brain damage. It is important to keep this
in mind when you sometimes wonder why a person with memory loss is acting in a peculiar way.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-27" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Definite Risk Factors for Alzheimer's disease{/t}</h2>
        <hr />
        <ul>
          <li>{t}Increasing age{/t}</li>
          <li>{t}Heart disease{/t}</li>
          <li>{t}Diabetes{/t}</li>
          <li>{t}Down Syndrome{/t}</li>
          <li>{t}Race{/t}</li>
          <li>{t}Family history; genetics{/t}</li>
        </ul>
        <p>{t}Circumstances that put one at risk for diseases are referred to as risk factors. For example, inhaling
tobacco smoke is known to increase one’s risk of getting lung and heart diseases. High blood pressure,
high cholesterol levels, and obesity significantly increase one’s chances for heart disease. Identification of
these risk factors has led to advances in prevention, treatments, and cures. There are clear risk factors for
AD.{/t}</p>
        <p class="forum">{t}Use the Internet to help you find explanations and examples of how these circumstances put one at risk for diseases. Post your findings on the Forum.{/t}</p>
        <p>{t}It should be kept in mind that many conditions such as stroke, diabetes, cancer, and heart disease also
tend to run in families. However, just because one’s parent had a certain disease does not mean that his or
her children are destined to get it too. Other factors such as environmental risks must be considered.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-28" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Genetics &amp; Alzheimer's disease{/t}</h2>
        <hr />
        <ul>
          <li>{t}Under age 65{/t}</li>
          <li>{t}Less than 1% of affected persons{/t}</li>
          <li>{t}Three chromosomes identified thus far{/t}</li>
          <li>{t}APOE4: risk factor gene for onset late in life{/t}</li>
        </ul>
        <p>{t}In rare cases, perhaps less than one percent of the total number, genetics plays a strong role in the
development of AD in persons younger than age 65. This is often referred to as early onset AD. Thus far, a
few genetic mutations have been identified that result in AD being passed from one generation to the
next. This hereditary form is called: Familial Alzheimer’s Disease. Again, this occurs in a relatively small
number of families in which symptoms may develop as early as 35 years of age. Research has focused on
specific abnormalities of genes on several chromosomes.{/t}</p>
        <p>{t}AD typically occurs late in life, and one gene has been identified thus far that increases the likelihood of
developing this form of the disease. The gene for Apolipoprotein E (ApoE) is located on chromosome 19.
The ApoE gene comes in three varieties, called alleles: e2, e3, and e4. Everyone’s ApoE gene has two
alleles, one inherited from each parent, so there are six possible combinations in any individual’s DNA. One
e4 allele approximately doubles risk of AD and two e4 alleles boosts risk 8 to 10‐fold.{/t}</p>
        <p>{t}Although a blood test can identify which APOE alleles a person has, it cannot predict who will or will not
develop Alzheimer's disease. It is unlikely that genetic testing will ever be able to predict the disease with
100 percent accuracy because too many other factors may influence its development and progression.{/t}</p>
        <p>{t}At present, APOE testing is used in research settings to identify study participants who may have an
increased risk of developing Alzheimer's. This knowledge helps scientists look for early brain changes in
participants and compare the effectiveness of treatments for people with different APOE profiles. Most
researchers believe that APOE testing is useful for studying Alzheimer's disease risk in large groups of
people but not for determining any one person's specific risk.{/t}</p>
        <p>{t}In doctors' offices and other clinical settings, genetic testing is used for people with a family history of
early‐onset Alzheimer's disease. However, it is not generally recommended for people at risk of late‐onset
Alzheimer's.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-29" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Possbie Risk Factors for AD{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/91318735.png'); ?>" alt="image">
        <ul>
          <li>{t}Environmental toxins{/t}</li>
          <li>{t}Low formal educaiton &amp; low occupational attainment{/t}</li>
          <li>{t}Previous head trauma{/t}</li>
          <li>{t}Cerebrovascular disease{/t}</li>
          <li>{t}Dietary factors{/t}</li>
        </ul>
        <p>{t}Possible risk factors are those suspected of being somehow linked to AD, but the linkage has not been
proven. Weak or strong associations with AD may be attributed to a complex number of factors still
unidentified. Possible risk for AD has been associated with the areas listed above.{/t}</p>
        <div id="question1" class="question">
          <p><b>{t}The greatest known risk factor for Alzheimer's is advancing age.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}True{/t} </option>
              <option value="0"> {t}False{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct!{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Search the Alzheimer's Association website for AD risk factors.{/t} </p>
        </div>
        <p class="forum">{t}Search the Internet, and locate additional risk factors for AD and report your findings on the Forum{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-30" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Strategies for Medical Treatment{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/134501532.png'); ?>" alt="image">
        <ul>
          <li>{t}Prevention of disease{/t}</li>
          <li>{t}Delay onset{/t}</li>
          <li>{t}Slow rate of progression{/t}</li>
          <li>{t}Treat primary symptoms (cognitive){/t}</li>
          <li>{t}secondary symptoms (behavioral){/t}</li>
        </ul>
        <p class="forum">{t}Search the Internet for a detail explanation how how these strategies are used as medical treatments. Post your responses to the Forum{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-31" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}FDA-Approved Treatments for Alzheimer's{/t}</h2>
        <hr />
        <h5>{t}Cholinesterase Inhibitors{/t}</h5>
        <ul>
          <li>{t}Donepezil{/t}</li>
          <li>{t}Rivastigmine{/t}</li>
          <li>{t}Tacrine{/t}</li>
          <li>{t}Galantamine{/t}</li>
        </ul>
        <p>{t}While there is no cure for Alzheimer's disease, there are five prescription drugs approved by the U.S. Food
and Drug Administration (FDA) to treat its symptoms.{/t}</p>
        <p>{t}Donepezil, galantamine, rivastigmine and tacrine are called "cholinesterase inhibitors." These drugs
prevent the breakdown of a chemical messenger in the brain important for learning and memory. The fifth
drug, memanatine, regulates the activity of a different chemical messenger in the brain that is also
important for learning and memory. Both types of drugs help manage symptoms but work in different
ways.{/t}</p>
        <p>{t}Understanding available treatment options can help you and the person with the disease cope with
symptoms and improve quality of life.{/t}</p>
        <h5>{t}What are cholinesterase inhibitors?{/t}</h5>
        <p>{t}Cholinesterase inhibitors are prescribed to treat symptoms related to memory, thinking, language,
judgment and other thought processes. Three different cholinesterase inhibitors are commonly
prescribed:{/t}</p>
        <ul>
          <li>{t}Donepezil (marketed as Aricept), which is approved to treat all stages of Alzheimer's disease{/t}</li>
          <li>{t}Galantamine (marketed as Razadyne), approved for mild to moderate stages.{/t}</li>
          <li>{t}Rivastigmine (marketed as Exelon), approved for mild to moderate Alzhe1nler's.{/t}</li>
        </ul>
        <p>{t}Tacrine (Cognex), the first cholinesterase inhibitor, was approved in 1993 but is rarely prescribed today
because of associated side effects, including possible liver damage.{/t}</p>
        <p class="forum">{t}Search the Internet to learn how cholinesterase inhibitors work, and post your findings on the Forum. Also, search and post the benefits of memantine and the common side effects of memantine.{/t}</p>
        <h5>{t}On the horizon{/t}</h5>
        <p>{t}Scientists have made remarkable progress in understanding how Alzheimer's affects the brain. Their
insights point toward promising new treatments to slow or stop the disease. Ultimately, the path to
effective therapies is through clinical studies.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-32" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Participating in Research{/t}</h2>
        <hr />
        <ul>
          <li>{t}Experimental medications{/t}</li>
          <li>{t}Adventurous attitude required{/t}</li>
          <li>{t}Creteria for inclusion and exclusoin{/t}</li>
          <li>{t}Informed consent{/t}</li>
          <li>{t}Other types of research studies{/t}</li>
        </ul>
        <p>{t}All of the medications just mentioned underwent a rigorous testing process for many years prior to
approval by the FDA. Testing first takes place with animals and then a small number of people to ensure
safety and potential effectiveness. The next phase involves a large number of human subjects to
determine whether or not a medication is effective. Volunteers are always needed to participate in this
effort.{/t}</p>
        <p>{t}An adventurous attitude is required since it is not known if these experimental drugs are truly effective—that is the purpose of the research. Such drug studies require close cooperation among volunteers, their
families, and medical staff. In spite of one’s willingness to participate in a given study, there is always a
strict set of inclusion and exclusion criteria so that many people do not qualify for a variety of reasons.{/t}</p>
        <p>{t}All eligible participants in any research study must sign a consent form that spells out the risks and benefits of participation. Apart from drug studies, researchers conduct a wide variety of studies into the nature of
AD and its treatment or prevention. Again, all such studies are subject to informed consent so that the
rights of participants are protected.{/t}</p>
        <p>{t}If interested in exploring participation in drug studies or other research studies your local area, the
Alzheimer’s Disease Education and Referral Center lists all current studies on it is website.{/t}</p>
        <p>{t}Many research studies now in progress are aiming to prevent or slow down the progression of AD. As
mentioned earlier, some people exhibit persistent forgetfulness but lack any other symptoms of AD. They
are referred to as having mild cognitive impairment and many develop additional symptoms of AD over
time. Many drug trials today are aiming to slowly the course of AD in such persons.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-33" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Potential Treatments / Prevention{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/134389167.png'); ?>" alt="image">
        <ul>
          <li>{t}Anti-Inflammatory Drugs{/t}</li>
          <li>{t}Antioxidant Agents{/t}</li>
          <li>{t}Statin drugs{/t}</li>
          <li>{t}Alternative Medicine{/t}</li>
          <li>{t}Vaccines{/t}</li>
        </ul>
        <p>{t}These are drugs in various stages of testing. Several other approaches to treating and preventing AD are under investigation.{/t}</p>
        <p class="forum">{t}Search the Internet for explanations on each of these listed treatments / preventions, and post your findings on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-34" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Other Ways to Reduce Risk{/t}</h2>
        <hr />
        <ul>
          <li>{t}Physical Exercise{/t}</li>
          <li>{t}<i>Use it or Lose It</i>{/t}</li>
          <li>{t}Diet{/t}</li>
        </ul>
        <h5>{t}Physical Exercise{/t}</h5>
        <p>{t}Several recent studies have shown that physical exercise may prevent or slow cognitive decline among
otherwise healthy people. In this regard, walking just a few times weekly has been shown to be helpful
compared to little or no activity. The benefits of exercise for people with AD have not been fully explored.{/t}</p>
        <h5>{t}Use it or Lose it{/t}</h5>
        <p>{t}Use it or lose it refers to the notion that keeping one’s brain active with intellectual, physical, and social
pursuits may help prevent AD. There is growing evidence that keeping mentally active may reduce the risk
of developing AD. Regardless of the actual benefit of this approach, it certainly cannot hurt to keep active.
There are no bad side effects! Even if activities like reading books, attending lectures, or playing games
such bridge or chess slightly reduce the odds of developing AD, they may be worthwhile.{/t}</p>
        <h5>{t}Diet{/t}</h5>
        <p>{t}As already mentioned, there is growing evidence that what may be good for the heart may also be good
for the brain. Eating nutritious foods may be essential for a healthy heart and a healthy brain. Participants
in one large study, who consumed fish once per week or more, had 60 percent less risk of AD compared
with those who rarely or never ate fish. Total intake of n‐3 polyunsaturated fatty acids was also associated
with reduced risk of AD. In a study of Chicago residents, eating foods rich with Vitamin E such as green
leafy vegetables was associated with lower risk of AD. Future research will shed more light on types of
food to take or avoid as ways to reduce the risk of AD.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-35" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Directions for Research{/t}</h2>
        <hr />
        <ul>
          <li>{t}Further identify risk factors for memory loss and underlying causes{/t}</li>
          <li>{t}Improve diagnostic tools{/t}</li>
          <li>{t}Develop better treatments{/t}</li>
          <li>{t}Improve approaches to caring for people{/t}</li>
          <li>{t}Reduce distress of families{/t}</li>
        </ul>
        <p>{t}Despite huge increases in research funding over the past two decades aimed at finding the root causes of AD and other brain diseases, scientific progress usually occurs at a slow pace. Yet there is reason to hope
for breakthroughs as thousands of researchers worldwide are working in several major areas.{/t}</p>
        <p class="forum">{t}Search the Internet for additional details on these listed research directions, and post your findings on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-36" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Good Sources of Information{/t}</h2>
        <hr />
        <h4>{t}Closing{/t}</h4>
        <p>{t}Please know that this first class is the most technical in nature. Although there were not many
opportunities for sharing your ideas, the remaining four classes offer plenty of time for your input. Facts
about the medical causes and treatments for memory loss are important. However, we will spend the
remaining weeks talking about how to cope with the practical, day‐to‐day challenges of living with
someone with memory loss.{/t}</p>
        <p>{t}Finally, we wish to introduce the companion book, Alzheimer’s Early Stages: First Steps for Family, Friends
and Caregivers. We recommend that you purchase it, as we will be recommending specific that reinforce
key points covered in these classes.{/t}</p>
        <p class="forum">{t}Post your questions about this module to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Lesson{/t}</a></div>
    </div>
  </div>
  <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communication Strategies{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135810412.png'); ?>" alt="image">
        <h4>{t}Purposes:{/t}</h4>
        <ul>
          <li>{t}To give an overview of communication changes typical in early memory loss.{/t}</li>
          <li>{t}To familiarize participants with general principles for maintaining communication with a person experiencing early memory loss.{/t}</li>
          <li>{t}To describe several ways to encourage verbal expression.{/t}</li>
          <li>{t}To review common communication pitfalls, and how to avoid them.{/t}</li>
        </ul>
        <div id="question1" class="question">
          <p><b>{t}Does Alzheimer's disease affect communication?{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct! People with Alzheimer's lose particular communication abilities during the early, middle, and late stages of the disease.{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Please review Module One.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    <div id="lesson-2-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Welcome Back!{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
        <p>{t}Welcome to the second module of MSML Online. One of the more frustrating and difficult aspects of memory loss is that the person's ability to communicate may be compromised. In this section, we will discuss how to adapt to these changes. We will cover these general topics and get into specifics along the way.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Agenda for Module 2{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/56174087.png'); ?>" alt="image">
        <ul>
          <li>{t}Communication changes in early stages of memory loss{/t}</li>
          <li>{t}General principles for enhancing communication{/t}</li>
          <li>{t}Ways to encourage verbal expression{/t}</li>
          <li>{t}Avoiding communication pitfalls{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}<i>What we see depends on where we sit</i>{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/122422633.png'); ?>" alt="image">
        <p>{t}This quote speaks to the fact that your perception is crucial in making necessary accommodations to the
challenges of caring for someone with memory loss. It also speaks to the fact that your relative often sees
things in a much different way than you do. This is important to remember as we discuss the memory
changes your family member may be experiencing and how this may affect his/her ability to communicate.{/t}</p>
        <p>{t}You and the person with memory loss may be experiencing the same reality but in different ways. For
example, your relative may not be as upset with the changes in memory and communication as you might
be. You can easily remember your relative as a completely capable individual whereas he or she may have
slowly adapted to the changes in memory and thinking over time. It is typical for that person to lack insight
into all of the changes that have taken place.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Person's Level of Awareness{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/153742771.png'); ?>" alt="image">
        </ul>
        <li>{t}Role of Denial{/t}</li>
        <li>{t}No Awareness{/t}</li>
        <li>{t}Partial Awareness{/t}</li>
        <li>{t}Much Awareness{/t}</li>
        </ul>
        <p class="forum">{t}Search the Internet for explanations on each of these listed levels. Post your findings on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}What is Communication?{/t}</h2>
        <hr />
        <ul>
          <li>{t}Sending and receiving messages{/t}</li>
          <li>{t}Speaking and listening{/t}</li>
          <li>{t}Reading and writing{/t}</li>
          <li>{t}Gestures, facial expression, body langauge{/t}</li>
        </ul>
        <h4>{t}Communication{/t}</h4>
        <p>{t}Communication is the exchange of information, ideas, and emotions. It is how we convey our thoughts,
wishes, and feelings.{/t}</p>
        <p>{t}In order for communication to occur, the message needs to not only be sent, but received. We need to not
only hear but to also understand the message – otherwise, communication has not really occurred. We have all had experiences where we thought we made ourselves clear, only to find that the other person interpreted the message differently than we intended! The following exercise is designed to demonstrate the importance of good communication and that it
involves more than just words.{/t}</p>
        <p>{t}Communication is complicated! It involves not just speaking our minds, but also listening to the other
person. As this exercise teaches us, it entails speaking, listening, and watching others for cues.{/t}</p>
        <p>{t}Listening is not as easy as it seems. To truly listen, we need to be completely attentive to the other person.
Often, we may think we are listening to the other person when we are actually distracted. Maybe what we
are doing, e.g., driving a car or trying to decide which kind of soup to buy at the grocery store, distracts us.
We are distracted because we are thinking about something else while the person is talking, or because
we are busy thinking about what our response to the person will be. It is hard to truly listen – and it takes
practice.{/t}</p>
        <p>{t}Reading and writing are forms of communication. Some of us respond better to messages that are
received in writing than we do to verbal messages. Some of us may find that it helps to write things down
as a way of thinking them through. Sometimes we have trouble communicating because our preferred way
of communicating may not be the other person’s. For example, maybe you like to write notes or send emails
to someone who prefers to talk face‐to‐face or over the telephone. It is important to be sensitive to
how we communicate and make sure we communicate appropriately.{/t}</p>
        <p>{t}Body language is another important component of communication. Gestures, facial expressions, and body
posture are often as important in communication (if not more) as the words.{/t}</p>
        
        <!--
      <div id="question1" class="question">
        <p><b>{t}Short-term memory is the information we are currently aware of or thinking about.{/t}</b>
          <select>
            <option selected="selected" value="select"> {t}Select{/t} </option>
            <option value="1"> {t}True{/t} </option>
            <option value="0"> {t}False{/t} </option>
          </select>
        </p>
        <p class="right-answer hide"> {t}Correct!{/t} </p>
        <p class="wrong-answer hide"> {t}Please understand these various types of memory before moving forward.{/t} </p>
      </div>
      
      --> 
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Types of Memory{/t}</h2>
        <hr />
        <ul>
          <li>{t}Sensory memory{/t}</li>
          <li>{t}Working memory{/t}</li>
          <li>{t}Short-ter memory{/t}</li>
          <li>{t}Long-term or remote memory{/t}</li>
          <li>{t}Episodic memory{/t}</li>
          <li>{t}Procedural memory{/t}</li>
        </ul>
        <h5>{t}Types of Memory{/t}</h5>
        <p>{t}There are different kinds of memory. Understanding them and how they work can help us to understand
some of the communication challenges faced by persons with dementia.{/t}</p>
        <p class="forum">{t}Search the Internet for examples or explanations on each of these listed types of memory. Post your findings to the Forum.{/t}</p>
        <p>{t}It is important to understand the different types of memory so that we can see how impairment in these
may affect one’s ability to communicate. Note that people with early stage memory loss tend to have
more problems with working and short‐term memory than with long‐term, episodic and procedural
memory. When conversing with someone with memory loss, it is important to remember that they may
have difficulty recalling recent events or may need more time to retrieve the information.{/t}</p>
        <p>{t}Next, we are going to look at some of the changes that may occur with communication as memory
becomes impaired.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Changes in Communication{/t}</h2>
        <hr />
        <ul>
          <li>{t}Word finding{/t}</li>
          <li>{t}Comprehending{/t}</li>
          <li>{t}Digressing and repeating{/t}</li>
          <li>{t}Reading and writing{/t}</li>
          <li>{t}Difficulty understanding abstract concepts{/t}</li>
        </ul>
        <p>{t}Word finding refers to that tip of the tongue phenomenon that we all experience from time to time. We
know what we want to say but just cannot immediately find the word. People who have memory loss
experience this phenomenon to such a degree that it interferes with their ability to communicate.{/t}</p>
        <p>{t}The comprehension of information often becomes impaired. The person may have a difficult time tracking
conversations or following instructions with more than one step.{/t}</p>
        <p>{t}The person with memory loss is more likely to digress during conversations – jumping from the original
topic to another related one. Once the person digresses, they may have a difficult time remembering the
original topic of conversation. Because of changes in memory, it is also common for the person with
memory loss to repeat himself/herself, forgetting what has recently been said.{/t}</p>
        <p>{t}Reading and writing may be affected. The person may have difficulty understanding written material or
may not be able to communicate clearly in writing.{/t}</p>
        <p>{t}People with memory loss often have difficulty with abstract concepts. Many people have trouble with
talking on the telephone because they may rely more on the body language and facial expressions of
others when communicating. The person may have a difficult time comprehending the conversation, may
not remember to whom he is speaking, or may not recall the conversation later.{/t}</p>
        <p class="forum">{t}What communication challenges with your relative have you noticed?{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Other Factors That May Affect Communication{/t}</h2>
        <hr />
        <ul>
          <li>{t}More distracted by noise, motion{/t}</li>
          <li>{t}Fear of making mistakes{/t}</li>
          <li>{t}Attention problem that may appear to be hearing loss{/t}</li>
        </ul>
        <h5>{t}More distracted by noise and/or motion{/t}</h5>
        <p>{t}As memory becomes impaired, the person with memory loss may find that he has to concentrate very
hard in order to follow conversations. Anything that interferes with the ability to concentrate, e.g. noise or
movement, may make it even more difficult for the person.{/t}</p>
        <p class="forum">{t}If you want to have a conversation with a person with memory loss and you sense that she becomes easily distracted, what could you do? Record your response on the Forum.{/t}</p>
        <h5>{t}Fear of making mistakes{/t}</h5>
        <p class="forum">{t}Has anyone here had the experience of burning something on the stove or the oven? Record that experience on the Forum.{/t}</p>
        <p>{t}If you do something like that, others tend to write it off to having a bad day or being distracted, right? But
if a person with memory loss does the same thing it is looked at differently and the person may no longer
be allowed to cook. The stakes are much higher, so the fear of making mistakes is greater. You may need
to adjust to this by giving the person with memory loss more time to do things, and be as patient as
possible.{/t}</p>
        <h5>{t}Attention problems may appear to be hearing loss{/t}</h5>
        <p>{t}People who are distracted or who have difficulty concentrating may sometimes miss bits and pieces of a
conversation. This can sometimes make it seem as though the person has a hearing problem. On the other
hand, do not rule out hearing loss as a possible issue if the person is having problems hearing when the
conversation is happening in a place with few distractions.{/t}</p>
        <p class="forum">{t}So, what can we do to help overcome these challenges? Record your responses on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communication Tips{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/138282407.png'); ?>" alt="image">
        <ul>
          <li>{t}Eliminate distractions{/t}</li>
          <li>{t}Gain the person's attention{/t}</li>
          <li>{t}Give reassurance{/t}</li>
          <li>{t}Be a patient and active listener{/t}</li>
          <li>{t}Be an astute observer{/t}</li>
          <li>{t}Try not to challenge or correct mistakes{/t}</li>
          <li>{t}Maintain a sense of humor{/t}</li>
        </ul>
        <p class="forum">{t}Using your own experience, or by searching the Internet, post on the Forum some examples using the above listed communicaition tips.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Elements of Nonverbal Communication{/t}</h2>
        <hr />
        <ul>
          <li>{t}Tone of voice{/t}</li>
          <li>{t}Body language{/t}</li>
          <li>{t}Facial expressions{/t}</li>
          <li>{t}Gestures{/t}</li>
        </ul>
        <h5>{t}"It is often not what you say, but how you say it."{/t}</h5>
        <p>{t}As we discussed at the beginning of the lesson, nonverbal communication refers to the things that we do in addition to what we say. The most basic of these are tone of voice, body language, and facial expressions.{/t}</p>
        <p>{t}We are all familiar with the saying, <i>"it is not what you say, but also how you say it."</i> We have all had experiences where we were put off by a person's tone of voice or facial expression, even if what they said was not really all that offensive.{/t}</p>
        <p>{t}Nonverbal communication can be very important when having conversation with people with memory loss.{/t}</p>
        <p>{t}We are going to take a little time to discuss this, because it is so important.{/t}</p>
        <p class="forum">{t}On the Forum, please post your responses to the following questions.{/t}</p>
        <ul class="forum">
          <li>{t}Can you think of times when someone’s nonverbal communication spoke louder than their words?{/t}</li>
          <li>{t}Do you know anyone who “talks with their hands” or whose face is very expressive?{/t}</li>
          <li>{t}What are some ways that nonverbal communication both enhances and detracts from conversations?{/t}</li>
          <li>{t}Has anyone in the group had an experience in which someone’s nonverbal communication either hindered the conversation or helped the conversation?{/t}</li>
        </ul>
        <p>{t}Nonverbal communication becomes especially important when having a conversation with someone with memory loss.{/t}</p>
        <p>{t}A calm tone of voice can reassure a person who is frustrated or anxious. It can also help to keep us calm. Our own anxiety and anger escalates when our voices get louder, and of course the person to whom we are talking becomes upset as well. As hard as it can be to do, keeping your voice tone calm, low, and reassuring can help to keep situations from getting out of control.{/t}</p>
        <p>{t}Body language and facial expressions are other concerns. If your words are calm but your body language is
tense or your facial expression does not match what you are saying, the message will be mixed. The
person with memory loss may react to the look on your face or your body language instead of what is
being said.{/t}</p>
        <p class="forum">{t}Think of a time when you talked to someone who you knew was not telling the truth. Their words may
have been convincing, but somehow you knew something was not right. How did you know this? What
gave them away? Post your responses to the Forum.{/t}</p>
        <p>{t}The saying, <i>"it is not what you say; it is how you say it"</i> is important to remember in all forms of
communication, but especially when talking to someone with memory loss.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Encouraging Verbal Expression{/t}</h2>
        <hr />
        <ul>
          <li>{t}Allow circumlocution - <i>talking around</i>{/t}</li>
          <li>{t}Allow time for processing{/t}</li>
          <li>{t}Keep conversations on track{/t}</li>
          <li>{t}Enable ventilation - <i>letting off steam</i>{/t}</li>
          <li>{t}Offer limited choices if needed{/t}</li>
        </ul>
        <p class="forum">{t}Search the Internet for examples or explanations using these listed verbal expressions. Post your findings to the Forum.{/t}</p>
        <p class="forum">{t}For example: What is your favorite color? is an open‐ended question. Think about all of the choices that we actually make when we answer this question. First of all, we need to remember the meaning of the word
color. Then, we need to remember what it means to have a favorite color. Next, we need to think of the whole palette of colors until we come to the one we like the best and we need to identify its name. So this can be a more complex process than you might imagine. What seems like a simple question, in fact, has many layers of decisions and things to think through in order to answer it correctly.{/t}</p>
        <p class="forum">{t}How can we simplfy this question? Post your response on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Avoid These Common Pitfalls…{/t}</h2>
        <hr />
        <ul>
          <li>{t}Arguing{/t}</li>
          <li>{t}Giving orders{/t}</li>
          <li>{t}Oversimplying{/t}</li>
        </ul>
        <h5>{t}Arguing{/t}</h5>
        <p>{t}It is hard to win an argument with someone who is experiencing memory loss, because his or her view of
things may be very different from yours. Let's say that your Aunt Mae can’t remember having gone to a restaurant the day before, and is upset over the doggie bag in the refrigerator because she claims, “I did not put that there, and I’m not going to eat someone else’s leftovers!”{/t}</p>
        <p>{t}Our natural inclination is to set things right and use facts to prove our point. But if the person truly does
not remember the experience of going to the restaurant, no amount of facts will change her mind. It won't help to pull out the calendar to show Aunt Mae that she wrote down 6 pm ‐ dinner at Andy’s Restaurant with Susan or showing her the receipt, or even showing her a matchbook from the restaurant. Aunt Mae does not remember the experience. For her it simply never happened.{/t}</p>
        <p>{t}So arguing with her is going to frustrate both of you. Before arguing about something like this, you need to
stand back and ask yourself, Is this really worth it? If a person’s safety is at stake, the answer might be yes. But in a situation like this one, it may be better to say, I’ll just take this out of your refrigerator. You will have avoided a needless argument.{/t}</p>
        <h5>{t}Giving orders{/t}</h5>
        <p>{t}No one likes to be told what to do, especially by our spouses or other family members. There is a world of
difference between Joe! Will you take out the trash already? and Joe, I’d really appreciate it if you would take out the trash.{/t}</p>
        <p>{t}Sometimes, people with memory loss do not respond to our requests the way we would like them to respond. We’ll talk about this more in Class 5, but breaking tasks down into smaller steps may be the key. Maybe Joe does not take out the trash because he can’t remember all of the steps involved in this task. He used to be in charge of recycling and separating everything, and now he gets confused by all of the containers. As a result, he avoids having anything to do with the trash. If you sense this is the problem, you need to give Joe a smaller task to accomplish. For instance, ask him to stack the newspapers and put them
in the recycling bin, rather than being responsible for separating and carrying out all of the trash.{/t}</p>
        <h5>{t}Oversimplifying{/t}</h5>
        <p>{t}The goal is to simplify only if needed, and without being condescending. In other words, simplify when necessary and do not dumb down. People with early memory loss may be very sensitive to the feeling that they are being treated as a child, or disrespectfully.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Share What You Know with Others{/t}</h2>
        <hr />
        <ul>
          <li>{t}Presume that others do not know the extent of the difficulties{/t}</li>
          <li>{t}Provide information about communication tips{/t}</li>
          <li>{t}Model and give feedback{/t}</li>
        </ul>
        <p>{t}Last but not least, make sure that you share this information with your friends and other family members. Friends and other family members may not understand the extent of the difficulties you and your loved one are facing. Do not be afraid to let them know about what is going on. They may be able to better support you and your family member if they understand the situation, and they are more likely to get involved if they are informed about what is happening.{/t}</p>
        <p>{t}Do not assume that everyone will automatically know how to deal with your family member's memory loss. They will not. Presume that they do not know and teach them what you have learned. Some people may be uncomfortable or may react in an unusual way. So provide information for your family and friends about what works and what does not. Give them tips on how to communicate with your family member. Model what works so that they can learn from you. Give them feedback about how they are doing, especially when they are doing a good job. Tell them about Alzheimer's Association's educational programs and support groups so that they can learn more if they prefer. Give them a brochure or book to read.{/t}</p>
        <p>{t}Above all, do not give up, and do not allow yourself to get too frustrated. You will occasionally lose patience with your family member. No one is perfect. Learn to forgive yourself for your bad days or bad moments just as you forgive your family member for hers. Here are some resources that may assist you in understanding what a person with memory loss is experiencing, and how you may be able to assist them.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Good Sources of Information{/t}</h2>
        <hr />
        <ul>
          <li>{t}Coping with Communication Challenges in Alzheimer’s Disease by Marie T. Rau, San Diego, CA: Singular Publishing Company, 1993.{/t}</li>
          <li>{t}My Journey into Alzheimer’s Disease by Robert Davis. Carol Stream, lL: Tyndale House Publishers, 1989.{/t}</li>
          <li>{t}Steps to Enhancing Communication: Interacting with Persons with Alzheimer’s Disease (brochure) available through the Alzheimer’s Association.{/t}</li>
        </ul>
        <h4>{t}Closing{/t}</h4>
        <h5>{t}In this module, we have learned:{/t}</h5>
        <ul>
          <li>{t}Typical communication changes experienced by persons with early memory loss,{/t}</li>
          <li>{t}General principles for enhancing communication with a person experiencing early memory loss,{/t}</li>
          <li>{t}Ways to encourage verbal expression, and{/t}</li>
          <li>{t}How to avoid communication pitfalls.{/t}</li>
        </ul>
        <p>{t}For more ideas about communication strategies, please refer to chapters 5 and 8 of the book, <i>Alzheimer's Early Stages</i>. Chapter 5 is especially helpful in understanding the communication challenges faced by persons with memory loss. If possible, read these chapters during the coming week.{/t}</p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Lesson{/t}</a></div>
    </div>
  </div>
  <div id="lesson-3">
    <div id="lesson-3-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Making Decisions{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/142532454.png'); ?>" alt="image">
        <h4>{t}Purposes{/t}</h4>
        <ul>
          <li>{t}Understand the shifting balance of power in the relationship,{/t}</li>
          <li>{t}Address practical issues in everyday life such as driving a car, handling health & financial decisions or managing household tasks,{/t}</li>
          <li>{t}Share the diagnosis and involved others in helping out.{/t}</li>
        </ul>
        <div id="question1" class="question">
          <p><b>{t}There are different kinds of memory. Understanding them can help us to understand some of the communication challenges faced by persons with dementia.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}True{/t} </option>
              <option value="0"> {t}False{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct!{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Please review module two.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    <div id="lesson-3-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Welcome Back!{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
        <p>{t}Welcome to the third module of MSML Online.{/t}</p>
        <p class="forum">{t}Before you begin, post any questions or comments related to module two, "Communication Strategies", to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Module Three: Making Decisions{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/100640358.png'); ?>" alt="image">
        <h5><i>{t}"Not to decide is to decide."{/t}</i></h5>
        <p>{t}In this module, we go into depth about the changes that occur in the relationship between you and your
relative as a result of memory loss. Your role gradually must change so that you become the chief decision maker
in the relationship.{/t}</p>
        <p class="forum">{t}Are you the cheif decision maker in your household? Post your response to the Forum{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Shifting the Balance of Power{/t}</h2>
        <hr />
        <ul>
          <li>{t}Preserve independence and meet dependence{/t}</li>
          <li>{t}Make decisions - along or together{/t}</li>
          <li>{t}Quietly take the lead as if a great dancer{/t}</li>
        </ul>
        <h5>{t}Preserve independence and meet dependence{/t}</h5>
        <p>{t}When you begin to recognize the limits of your relative’s memory and thinking abilities, you become
better equipped to address his or her needs in practical decisions such as driving a car, handling money,
and the like. These decisions require your active involvement. Helping someone to make such decisions
may seem uncomfortable at first, especially if he or she does not recognize limits with memory and
thinking. Unfortunately, he or she no longer has the capacity to be fully self‐sufficient although many
abilities remain intact. The balance of power must begin to shift. You must decide how and when to keep a
delicate balance between honoring the person’s need for independence versus the legitimate need for
dependence. This requires much tact and patience in making decisions.{/t}</p>
        <p class="forum">{t}Let’s consider the following example:{/t}</p>
        <p class="forum">{t}Your 81‐year‐old mother has Alzheimer’s disease and lives alone. One day she says that you are
responsible for managing her finances, after you found out that her bills were overdue. She is now upset
because she feels you are trying to control her life. You make all the decisions because you think you know
what is best for me. I’m not a child just because I can’t do what I used to do.{/t}</p>
        <p class="forum">{t}How might you address her complaint? Take about 5 minutes to brainstorm a solution that is satisfactory to both parties, and post your response to the Forum.{/t}</p>
        <h5>{t}Making decisions – alone or together{/t}</h5>
        <p>{t}Instead of involving someone with memory loss in every decision and run the risk of causing confusion, it is
best to narrow the choices. For example, if a big decision, such as a move, is looming, it would be chaotic
to involve the person with memory loss. However, it would be appropriate to involve the person with
decisions like what furniture to keep or discard.{/t}</p>
        <h5>{t}Quietly take the lead as if a great dancer{/t}</h5>
        <p>{t}One way to visualize the lead role you must now take is to consider a couple engaged in ballroom dancing.
Although the man takes the lead, the woman who is his partner is actively responding to his cues and
steps. This is done in a spirit of cooperation but it requires that each person accepts an agreed upon role.
You must now learn how to take the lead in the relationship, but to the extent possible, seek the
cooperation of the other person.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cartoon of a young and old woman:{/t}</h2>
        <hr />
        <p><i>{t}Honey, I have been through two world wars, the Great Depression, taught 3,297 children, administered four elementary schools and outlived every one of the people I worked with. I am 89 years old and you are telling me it is bedtime?{/t}</i></p>
        <p>{t}These two people are clearly not in harmony. This scene typifies the universal need for control over one’s
destiny and how things can go wrong if that need is challenged. There is no reason to argue about anything
as long as you take the right approach. Keep in mind that although the behavior of people with memory
loss may appear childlike at times, adults are not children and should be respected as adults. Each person
has a long personal history and is accustomed to making choices independently. To the extent possible,
choices must be given so that conflicts can be prevented.{/t}</p>
        <p class="forum">{t}How might this particular scenario have been played out differently? Take a few minutes for ideas, and post your response to the Forum.{/t}</p>
        <p>{t}Now let's turn to handling some practical issues…{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Driving a Car - Continue or Stop?{/t}</h2>
        <hr />
        <ul>
          <li>{t}Mixed results of research studies thus far{/t}</li>
          <li>{t}No clear markers for risk of accidents{/t}</li>
          <li>{t}No disease specific public policy in most states{/t}</li>
          <li>{t}Personal freedom versus public safety{/t}</li>
          <li>{t}Voluntary versus involuntary ways to restrict or stop driving{/t}</li>
        </ul>
        <p>{t}Driving a car is not only a means of getting around but is also a symbol of personal independence. AD often impairs brain functions that affect driving ability but sometimes those functions are spared so that, for a while, driving may continue without difficulty.{/t}</p>
        <p class="forum">{t}Search the Internet and find examples or explanations for each of the listed  items above, and post your findgins to the Forum.{/t}</p>
        <p>{t}A number of rehabilitation centers have specially trained staff members, usually occupational therapists,
who can assess a person’s driving capacity through a series of tests. These exams can cost around $250‐
400 but it may be worthwhile to get a professional opinion. A physician might recommend this course of
action before a decision is reached.{/t}</p>
        <p>{t}The privilege of driving is so terribly important for some people that taking it away may harm the selfesteem
of the person affected by this decision. It is important to consider alternative means of
transportation to minimize the impact of this decision. Does your local area have bus transportation for
seniors? Is your family prepared to take on the “chauffeur” role?{/t}</p>
        <p>{t}If persuasion alone is insufficient to keep an unsafe driver off the road, taking action through the state
department of motor vehicles to revoke that person’s license may be the only alternative. Other options
are to disable the car or get rid of it altogether.{/t}</p>
        <p class="forum">{t}Please share a story about you have addressed the issue of driving your their family, on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Handling Health &amp; Financial Decisions{/t}</h2>
        <hr />
        <p><i>{t}When I die, I want to go peacefully, like my grandfather did, in his sleep; not sreaming like the other passengers in his car.{/t}</i></p>
        <p>{t}This humorous quote illustrates the serious consequences of unsafe driving. It is better to err on the side
of safety when considering whether or not a person with memory loss should continue driving. Again, the
issue of personal freedom versus public safety must be carefully weighed.{/t}</p>
        <ul>
          <li>{t}Capacity exists unles given up voluntarily{/t}</li>
          <li>{t}Personal freedom versus risk of exploitation{/t}</li>
          <li>{t}Mismanagement of money and medications{/t}</li>
          <li>{t}Means to share or give up authority{/t}</li>
        </ul>
        <h5>{t}Capacity exists unless given up voluntarily{/t}</h5>
        <p>{t}Making personal decisions over one’s health and financial affairs is a personal right that is threatened by
memory loss. Assessing when and how to intervene is difficult unless the person with memory loss
voluntarily gives up this authority.{/t}</p>
        <h5>{t}Personal freedom versus risks{/t}</h5>
        <p>{t}As memory loss advances over time, the risks of continuing to manage one's own affairs will become more obvious to others, but in the early stage there may be legitimate differences of opinion about the person’s ability to handle these affairs alone.{/t}</p>
        <p>{t}Nevertheless, due to the person's impaired memory and judgment, someone else must be in a position of
monitoring risks. Otherwise, problems such as failing to pay important bills can emerge.{/t}</p>
        <h5>{t}Mismanagement of finances and medical compliance{/t}</h5>
        <p>{t}What are some of the risks? Persons with memory loss can lose track of money or stop paying bills. They may also be at risk of exploitation by others. They can forget to take their medication(s), take too much or too often, all of which can lead to a health crisis.{/t}</p>
        <p>{t}It is fairly easy to assess if someone with memory loss is having trouble with managing finances or taking medication. It is important to raise these issues in a delicate manner in order to maintain trust and enlist the person's cooperation.{/t}</p>
        <p class="forum">{t}Please share a story on this topic by posting it to the Forum.{/t}</p>
        <h5>{t}Means to share or give up authority{/t}</h5>
        <p>{t}At the next class, we will discuss legal steps such as Powers of Attorney in order to ensure that someone is responsible for handling financial and health care decisions.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Handling Other Household and Personal Tasks{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/200380838-001.png'); ?>" alt="image">
        <ul>
          <li>{t}Over-learned tasks are preserved{/t}</li>
          <li>{t}Difficulty with new & unfamiliar tasks{/t}</li>
          <li>{t}Following a sequence of steps{/t}</li>
        </ul>
        <p>{t}Generally, the ability to handle personal care tasks like bathing and dressing remain intact in the early
stages. Such things have been done so often that they tend to happen almost automatically, but some
instances of forgetting these basics may occur from time to time. More complex tasks such as cooking a
meal or fixing a broken appliance are often problematic.{/t}</p>
        <p>{t}Anything requiring a prescribed sequence of steps for completion may be disrupted due to memory loss. As a result, the person with memory loss tends to avoid new or unfamiliar tasks that require learning or memory beyond their capacity to be successful.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Traveling{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/82090084.png'); ?>" alt="image">
        <ul>
          <li>{t}Unfamiliar places, people & schedule may increase confusion{/t}</li>
          <li>{t}May also be an enjoyable time together{/t}</li>
          <li>{t}Weigh risks & benefits for all concerned{/t}</li>
          <li>{t}Take necessary precautions{/t}</li>
        </ul>
        <p>{t}Like anything unfamiliar, traveling to new or different places may be more stressful, but should not be
ruled out. However, going alone is too risky and increases the chance of becoming lost or confused. With
proper planning and guidance, traveling with a relative or friend may be an enjoyable activity. Other
precautions should be taken to minimize the chance of becoming lost.{/t}</p>
        <p class="forum">{t}What are some steps that might be taken to prevent or minimize confusion? With proper planning, how might you handle a crisis such as the person with memory loss getting lost while away from home? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Marital Intimacy{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/87352733.png'); ?>" alt="image">
        <ul>
          <li>{t}Impact varies on persons & couples{/t}</li>
          <li>{t}Physiological & psychological consequences{/t}</li>
          <li>{t}Patterns of behavior may change over time{/t}</li>
          <li>{t}Possible need for assessment & intervention{/t}</li>
        </ul>
        <p>{t}Intimacy and sexuality are important issues for couples in which one partner is affected by memory loss. These important aspects of a relationship invariably change due to memory loss. The partner with memory loss slowly loses the capacity for shared closeness. Likewise, sexual functioning diminishes or ceases altogether. In rare cases, the sexual interest of the person with memory loss increases.{/t}</p>
        <p>{t}The well partner usually experiences a diminished sexual interest due to the changes of providing care although the need for non-sexual intimacy may remain strong. Couples and individuals need to know that changes in this realm of the relationship are normal. Specific situations may call for further assessment and problem solving. There is no reason for embarrassment. Please let us know of you are having any special problems in this regard.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Challenges for Families{/t}</h2>
        <hr />
        <ul>
          <li>{t}History re-emerges, for better or worse{/t}</li>
          <li>{t}Uneven division of labor among members{/t}</li>
          <li>{t}Roles are often unclear{/t}</li>
          <li>{t}Different levels of acceptance/denial{/t}</li>
        </ul>
        <p>{t}Although major responsibility of caring for a loved one with memory loss often falls on the shoulders of
just one person, other family members living locally or at a distance and have their own personal reactions to the situation.{/t}</p>
        <h5>{t}History re‐emerges, for better or worse{/t}</h5>
        <p>{t}Each family has its own unique history of grappling with past problems. Some families may have worked
well together, while other families may have lacked cooperation among their members. Some family
members may get along while others may disagree and share bad feelings toward each other. How a
family responds to the needs of a loved one with memory loss, and the primary person who provides care,
depends largely on that family’s past experience.{/t}</p>
        <h5>{t}Uneven division of labor among members{/t}</h5>
        <p>{t}As already noted, one family member usually assumes most responsibilities of caring for someone.
Traditionally, this has meant a spouse, a daughter or daughter‐in‐law. This person’s role is vital to the well
being of the person with memory loss. However, the primary caregiver, in terms of time and effort, usually
makes enormous sacrifices. It is essential for everyone in the family to recognize the primary caregiver’s
key role and to share in the responsibilities to the extent possible. Some family members will initiate
action or gladly accept assigned duties whereas others might refuse to help.{/t}</p>
        <p class="forum">{t}Search the Internet for examples or explanations for the third and fourth above listed bullet points, and post your findings to the Forum.{/t}</p>
        <p class="forum">{t}Has anyone here been involved in a family meeting? Please share the details on the Forum.{/t}</p>
        <p class="forum">{t}Search the Internet for handouts or downloadable forms that help organzie family meetings. Please share your results on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Telling Others: Pros and Cons{/t}</h2>
        <hr />
        <table>
          <tr>
            <th><p>{t}Pros{/t}</p></th>
            <th><p>{t}Cons{/t}</p></th>
          </tr>
          <tr>
            <td><ul>
                <li>{t}Educate others about the nature of disease{/t}</li>
                <li>{t}Create opportunities for others to help{/t}</li>
                <li>{t}Put everyone concerned at ease{/t}</li>
              </ul></td>
            <td><ul>
                <li>{t}<i>“What they do not know won't hurt them”</i>{/t}</li>
                <li>{t}Negative stereotypes associated with Alzheimer’s disease{/t}</li>
                <li>{t}Risk of social isolation{/t}</li>
              </ul></td>
          </tr>
        </table>
        </ul>
        <p>{t}Another issue related to autonomy is how and when the diagnosis of AD or another form of dementia is conveyed to other people. This is a highly personal decision. Some people are reluctant to share the news with others while others are quite open about it. However, disclosing the diagnosis will become necessary as symptoms become more obvious over time. Most people figure things out anyway, long before the news is shared.{/t}</p>
        <p class="forum">{t}On the Forum, list some reasons on the pro-side and the con-side.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Recognizing Reactions of Others{/t}</h2>
        <hr />
        <ul>
          <li>{t}Rally your supporters{/t}</li>
          <li>{t}Accept hibernators{/t}</li>
          <li>{t}Enlighten armchair quarterbacks{/t}</li>
        </ul>
        <h5>{t}Rally your supporters{/t}</h5>
        <p>{t}Caring for someone with memory loss requires practical help and moral support from others on a regular basis. You are fortunate if you have family members and friends who can fill this need. These helpers may be instrumental in preserving your physical and mental health. Most people delay asking for help or do not take advantage of help when it is offered. Now is the time to rally your supporters!{/t}</p>
        <h5>{t}Accept hibernators{/t}</h5>
        <p>{t}On the other hand, there are people in your life whose absence from the scene may surprise and disappoint you. You need to be prepared for dealing with those who are not helpful. Your own well‐being is too important to be derailed by them. We refer to such people as "hibernators." They are the people who might be expected to be of service, but excuse themselves from helping out in any meaningful capacity. Like bears in winter, they cannot handle the bad weather and retreat into the privacy and
security of their own lives. For whatever reasons, they cannot or will not play a supportive role.{/t}</p>
        <p>{t}Trying to engage hibernators seldom succeeds despite your repeated efforts. It is difficult to understand them and avoid harsh judgment. However, bitterness and resentment can become self‐destructive. It may not be possible to forgive hibernators for their lack of help, yet it is essential to forget counting on them. Appreciating the efforts of those who are involved will contribute to your well‐being.{/t}</p>
        <h5>{t}Enlighten armchair quarterbacks{/t}</h5>
        <p class="forum">{t}Can you define the term, "<i>armchair quarterback?</i>" Post your answer to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Getting Others Involved{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/78806140.png'); ?>" alt="image">
        <p>{t}So, how do you get others involved? You do this by:{/t}</p>
        <ul>
          <li>{t}Explaining the facts of the disease;{/t}</li>
          <li>{t}Inform them of how the disease is affecting you and the person you love;{/t}</li>
          <li>{t}Identify the types of help needed;{/t}</li>
          <li>{t}Show appreciation for the concern and help provided; and{/t}</li>
          <li>{t}Develop new relationships by attending support groups, finding others who can relate with your
situation.{/t}</li>
        </ul>
        <div id="question1" class="question">
          <p><b>{t}Positive peer pressure can be one of the most powerful motivators around.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}True{/t} </option>
              <option value="0"> {t}False{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct!{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Please search the Internet for examples of how to get others involved.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Major Milestones{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/98381623.png'); ?>" alt="image">
        <ul>
          <li>{t}The relationship has changed -- I now lead it{/t}</li>
          <li>{t}I must change, not the person with the disease{/t}</li>
          <li>{t}I can learn how to cope effectively{/t}</li>
          <li>{t}I have limits and mistakes will be made{/t}</li>
          <li>{t}My own well-being is important too{/t}</li>
          <li>{t}I must reach out and accept the help of others{/t}</li>
        </ul>
        <p>{t}Based on our experience with family members and friends of people with memory loss, we have identified
six major milestones that indicate if someone is coping well. These milestones may not be reached within a
month or even a year. Everyone moves along the road to acceptance at a different pace and in a unique
way. These statements appear to be signs of healthy coping.{/t}</p>
        <p class="forum">{t}Search the Internet for examples or explanations of the above listed major milestones, and post your findings on the Forum{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Good Sources of Information{/t}</h2>
        <hr />
        <ul>
          <li>{t}Dancing on Quicksand: A Gift of Friendship in the Age of Alzheimer's by Marilyn Mitchell. Boulder, CO: Johnson Books, 2002.{/t}</li>
          <li>{t}Learning To Speak Alzheimer's by Joanne Koenig Coste, New York: Houghton Miflin Co., 2003.{/t}</li>
          <li>{t}The Majesty of Your Loving: A Couple's Journey through Alzheimer's by Olivia Hoblitzelle. Lyndonville, VT: Green Mountain Books, 2008.{/t}</li>
        </ul>
        <h4>{t}Closing{/t}</h4>
        <p>{t}We have just finished module three{/t}</p>
        <p class="forum">{t}Please post any questions about this module to the Forum.{/t}</p>
        <p>{t}Contact your class leader in order to address specific issues that did not get answered on the Forum. Chapters 6 and 7 in the book, <i>Alzheimer's Early Stages</i>, relate to this class. Please read those chapters for more information about the issues we covered today. Next module will focus on planning for the future. Thanks your for participating.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Lesson{/t}</a></div>
    </div>
  </div>
  <div id="lesson-4">
    <div id="lesson-4-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Module Four: Planning for the Future{/t}</h2>
        <hr />
        <p>{t}Welcome to the fourth module. We are glad you continued to participate. The title of this module is <i>Planning for the Future</i>. In our previous modules we touched on changes that impact the person experiencing memory loss, as well as challenges to those providing care: family members, friends, and professionals.{/t}</p>
        <p>{t}Please contact your class leader if your needs and questions are not being addressed. We have a great deal of information to cover in this module. To best utilize your time here, be sure that your informational needs and questions are addressed.{/t}</p>
        <p class="forum">{t}Please post a response if you are interested in learning more about the following module purposes:{/t}</p>
        <h4>{t}Purposes{/t}</h4>
        <ul>
          <li>{t}Strategies to effectively communicate with health care professionals,{/t}</li>
          <li>{t}Advanced directives and legal planning,{/t}</li>
          <li>{t}Medicare and Medicaid,{/t}</li>
          <li>{t}Respite options including community-based programs and services,{/t}</li>
          <li>{t}Impact of a move on an individual with memory loss,{/t}</li>
          <li>{t}Residential care options, including how to decide/choose residential care.{/t}</li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    <div id="lesson-4-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating with Healthcare Professionals{/t}</h2>
        <hr />
        <h5>{t}You are an advocate; Physicians are your consultants{/t}</h5>
        <p>{t}Frequent and effective communication with your loved one’s physician is a necessity. View yourself as an
advocate and the physician as a consultant. Sometimes it may be difficult to discuss concerns when the
person with memory loss is present. This may be especially true if your loved one tends to rise to the
occasion and be on his/her best behavior. Speaking with the physician by phone prior to the appointment
will allow you the freedom to provide an update on any changes you wish to discuss privately.{/t}</p>
        <h5>{t}Prepare for visits{/t}</h5>
        <p>{t}Put your questions in writing ahead of time and ask for what you need and be direct.{/t}</p>
        <h5>{t}Ask questions{/t}</h5>
        <p>{t}Ask questions about the disease, medications, or other instructions that are unclear to you.{/t}</p>
        <p class="forum">{t}Forum Posting: What kind of questions might you be interested in having answered? Take a few minutes befor you respond.{/t}</p>
        <h5>{t}Shop around if dissatisfied{/t}</h5>
        <p>{t}Unfortunately, not all physicians are knowledgeable about AD and related dementias. The Alzheimer's Association or other organizations can assist you in finding a specialist.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Using Advanced Directives{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/152177237.png'); ?>" alt="image">
        <ul>
          <li>{t}Durable Power of Attorney: For Healthcare and Property{/t}</li>
          <li>{t}Living Wills{/t}</li>
          <li>{t}Living Trusts{/t}</li>
          <li>{t}Other legal tools: Guardianship of the Estate Person{/t}</li>
        </ul>
        <p>{t}It is never too early to begin legal and financial planning. Doing so can allow you to involve the person with memory loss in decision‐making. For many families, legal and financial issues are not easy to discuss. If you are an adult child, it is common that these issues may be handled or discussed independently from you. Early planning can often make an emergency situation easier to handle, such as a sudden hospitalization.{/t}</p>
        <p class="forum">{t}Searching the Internet to help you define the above listed types of advance directives, and post your findings to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Who Can Assist with Legal Planning?{/t}</h2>
        <hr />
        <ul>
          <li>{t}National Academy of Elder Law Attorney website{/t}</li>
          <li>{t}Local Bar Associations{/t}</li>
          <li>{t}Non-Profit Legal Agencies{/t}</li>
        </ul>
        <p>{t}An attorney who is well versed in elder law can best assist you in legal planning. The National Academy of Elder Law Attorneys is a non‐profit organization assisting lawyers, bar associations and those who work with older clients and their families. By visiting their website, you can locate attorneys nearest you. Nonprofit legal agencies also provide legal council to families, and often offer financial assistance or reduced rates.{/t}</p>
        <p class="forum">{t}You may know of elder law attorneys and non‐profit legal agencies in your local area. Prepare a list and post it to the Forum.{/t}</p>
        <p>{t}Again, this next section is meant as an overview only. Cover the basic information and refer participants to the Medicare website, Centers for Medicare & Medicaid Services website and their local Social Security Administration office for more detailed information about Medicare and Medicaid.{/t}</p>
        <ul>
          <li><a href="http://www.medicare.gov" target="_blank">{t}Medicare.gov{/t}</a></li>
          <li><a href="http://www.ssa.gov" target="_blank">{t}Social Security Administration website{/t}</a></li>
          <li><a href="http://medicaid.gov" target="_blank">{t}Medicaid.gov{/t}</a></li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Medicare - A health insurance program{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/medicareScreenShot.png'); ?>" alt="image">
        <ul>
          <li>{t}Part A - covers inpatient hospital, skilled nursing, hospice, long-term acute care, and home health services{/t}</li>
          <li>{t}Part B - covers outpatient medically necessary services and preventive services{/t}</li>
          <li>{t}Part C - are Medicare Advantage Plans offered by private companies that contract with Medicare to cover Part A and B benefits{/t}</li>
          <li>{t}Part D - covers prescription drugs{/t}</li>
        </ul>
        <p>{t}Medicare is a national health insurance program administered by the federal government that guarantees
health insurance for people age 65 or older, people under age 65 with certain disabilities, and people of all
ages with end‐stage renal disease (permanent kidney failure requiring dialysis or a kidney transplant).{/t}</p>
        <p class="forum">{t}Search the Internet, and post the descriptions of the various parts of Medicare.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Who Can Answer Questions About Medicare?{/t}</h2>
        <hr />
        <ul>
          <li>{t}The Centers for Medicare and Medicaid Services website{/t}</li>
          <li>{t}The Medicare website{/t}</li>
          <li>{t}Phone 800-MEDICARE (US Only){/t}</li>
        </ul>
        <p>{t}The Centers for Medicare and Medicaid Services (CMS) can answer questions about Medicare and help
you enroll for one of the drug discount cards. People with Medicare, family members, and caregivers
should visit the Official U.S. Government Site for People with Medicare, for the latest information on
Medicare enrollment, benefits, and other helpful tools.{/t}</p>
        <p>{t}You may also search the CMS website for their guide titled: <i>Medicare and You</i>, an outline of the Medicare program that includes up‐to‐date information regarding eligibility and costs, such as deductibles and copays.{/t}</p>
        <div id="question1" class="question">
          <p><b>{t}Medicare Part A (Hospital Insurance) helps cover inpatient care in hospitals, as well as skilled nursing facility, hospice, and home health care.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct! Medicare Part A is hospital insurance.{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Please ensure you understand the various parts of Medicare before conintuing.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Medicaid{/t}</h2>
        <hr />
        <p>{t}Enacted in 1965 through amendments to the Social Security Act, Medicaid is a health and long‐term care
coverage program that is jointly financed by states and the federal government. Each state establishes and
administers its own Medicaid program and determines the type, amount, duration, and scope of services
covered within broad federal guidelines. States must cover certain mandatory benefits and may choose to
provide other optional benefits.{/t}</p>
        <p>{t}Federal law also requires states to cover certain mandatory eligibility groups, including qualified parents,
children, and pregnant women with low income, as well as older adults and people with disabilities with
low income. States have the flexibility to cover other optional eligibility groups and set eligibility criteria
within the federal standards. The Affordable Care Act of 2010 created a new national Medicaid minimum
eligibility level that covers most Americans with household income up to 133 percent of the federal
poverty level. This new eligibility requirement is effective January 1, 2014, but states may choose to
expand coverage before this date.{/t}</p>
        <p class="forum">{t}Search the CMS website to help you post responses to the following questions:{/t}</p>
        <ul class="forum">
          <li>{t}How do you get Medicaid?{/t}</li>
          <li>{t}What does Medicaid cost?{/t}</li>
          <li>{t}What does Medicaid cover?{/t}</li>
          <li>{t}How does the Affordable Care Act expand options for community-based care?{/t}</li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Who can answer questions about Medicaid?{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/139539392.png'); ?>" alt="image">
        <ul>
          <li>{t}State agencies administering Medicaid{/t}</li>
          <li>{t}The CMS website{/t}</li>
          <li>{t}Phone 800-MEDICARE (US Only){/t}</li>
        </ul>
        <p>{t}The Centers for Medicare and Medicaid Services can also answer questions about Medicaid. You can contact them by phone or through their website. You may also contact your State Agency that administers Medicaid.{/t}</p>
        <p class="forum">{t}Search the Internet for the contact information of the State Agency responsible for administering Medicaid in your area, and post your findings to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Respite Care Options{/t}</h2>
        <hr />
        <ul>
          <li>{t}Informal or Volunteer Respite Care{/t}</li>
          <li>{t}Adult Day Services{/t}</li>
          <li>{t}In-Home Services{/t}</li>
          <li>{t}Short-Term Residential Care{/t}</li>
        </ul>
        <p>{t}These are several types of respite options that may be available to you,{/t}</p>
        <p class="forum">{t}Search the Internet for examples or an explanation for each of the above listed respite care options, and post your findings to the Forum{/t}</p>
        <p>{t}An adult daughter shared her story of the struggles she encountered in getting her father to attend an
adult day center. Each morning, her father would grumble, curse, and occasionally become combative.
When she would pick her father up at the end of the day, he was often agitated.{/t}</p>
        <p>{t}She would ask, <i>“How was your day, Dad?”</i> and he would reply with disparaging remarks about the program and staff. However, when she would speak with the staff she would receive a positive and reassuring account of the day's activities. Her father would take part in activities, including baking with a majority of female participants, and would sing along with an exuberant voice whenever guests came to play the guitar or piano.{/t}</p>
        <p>{t}With this in mind, she was able to feel much better about bringing her father to the center each day. Has anyone had the experience of enrolling a relative in an adult day program?{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Evaluating Respite Programs{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/145924457.png'); ?>" alt="image">
        <ul>
          <li>{t}Licensed program (where required){/t}</li>
          <li>{t}Qualifications and training of caregivers{/t}</li>
          <li>{t}Costs/what services are included{/t}</li>
          <li>{t}Supervisoin of caregivers{/t}</li>
          <li>{t}Handling emergencies{/t}</li>
        </ul>
        <p>{t}When evaluating a respite program, there are several questions to ask:{/t}</p>
        <ul>
          <li>{t}Is the program licensed (where required)?{/t}</li>
          <li>{t}Do caregivers have the qualifications necessary for the job? How are they screened?{/t}</li>
          <li>{t}How are caregivers trained and how do they receive regular updates to improve care?{/t}</li>
          <li>{t}May family members interview and be part of the decision to hire caregivers?{/t}</li>
          <li>{t}Is transportation provided for the caregiver/older adult?{/t}</li>
          <li>{t}What is the cost of respite and what is included in the cost?{/t}</li>
          <li>{t}How are caregivers supervised and evaluated?{/t}</li>
          <li>{t}How do caregivers handle emergencies?{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Community-Based Programs and Services{/t}</h2>
        <hr />
        <h5>{t}Alzheimer's Association -{/t}</h5>
        <p>{t}The Alzheimer's Association works on a global, national and local level to enhance care and support for all those affected by Alzheimer's and related dementias.{/t}</p>
        <p>{t}The Alzheimer's Association works on a global, national and local level to enhance care and support for all
those affected by Alzheimer’s and related dementias. Their mission is to eliminate Alzheimer’s disease
through the advancement of research; to provide and enhance care and support for all affected; and to
reduce the risk of dementia through the promotion of brain health.{/t}</p>
        <ul>
          <li>{t}Have local chapters across the nation, providing services within each community.{/t}</li>
          <li>{t}Professionally staffed 24/7 Helpline (U.S. 800‐272‐3900) offers information and advice to more than 250,000 callers each year and provides translation services in more than 170 languages.{/t}</li>
          <li>{t}They run more than 4,500 support groups throughout the country and connect people across the
globe through our online message boards.{/t}</li>
          <li>{t}They provide caregivers and families with comprehensive online resources and information
through our Alzheimer's and Dementia Caregiver Center, which features sections on early‐stage,
middle‐stage and late‐stage caregiving.{/t}</li>
          <li>{t}They help people find clinical trials through our free service Alzheimer’s Association TrialMatch,
which makes it easy to search opportunities based on personal criteria.{/t}</li>
          <li>{t}They deliver 20,000 education programs annually and offer online information in 17 languages.{/t}</li>
          <li>{t}Their free online tool, Alzheimer's Navigator, provides individuals with Alzheimer's and their
caregivers with step‐by‐step guidance and customized action plans, and our online Community Resource Finder provides instant access to community resources and services.{/t}</li>
          <li>{t}They house the Alzheimer's Association Green‐Field Library, the nation's largest library and
resource center devoted to increasing knowledge about Alzheimer's disease and related dementias.{/t}</li>
          <li>{t}Their safety services, Comfort Zone and MedicAlert® + Alzheimer’s Association Safe Return®,
provide location management for people with Alzheimer’s who wander.{/t}</li>
          <li>{t}Their annual Walk to End Alzheimer's is the nation's largest event to raise awareness and funds
for Alzheimer's care, support and research.{/t}</li>
        </ul>
        <p class="forum">{t}Search the Internet for your local chapter and contact information. This information can be found
on the Alzheimer's Association’s website. Also, there may be other organizations in your area that offer similar programs and services. Post your findings on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Other Related Programs and Services{/t}</h2>
        <hr />
        <ul>
          <li>{t}Administration on Aging - Serves the growning senior population{/t}</li>
          <li>{t}Department of Veterans Affairs{/t}</li>
          <li>{t}National (888) 222-VETS (US only){/t}</li>
        </ul>
        <p>{t}The Administration on Aging has designated a network of Area Agencies on Aging (AAAs) throughout the
country. Their mission is to develop a comprehensive, coordinated and cost‐effective system of home and
community‐based services that help elderly individuals maintain their health and independence in their
homes and communities. In each state, these AAA’s have designated agencies to administer local
programs and services to persons age 60 and older. Some of the programs include:{/t}</p>
        <ul>
          <li>{t}Older American Act & the Aging Network;{/t}</li>
          <li>{t}Home & Community Based Long‐Term Care;{/t}</li>
          <li>{t}Health, Prevention, and Wellness Program;{/t}</li>
          <li>{t}Elder Rights Protection;{/t}</li>
          <li>{t}Special Projects; and{/t}</li>
          <li>{t}Tools/Resources for Professionals.{/t}</li>
        </ul>
        <p><?php echo ('Provide the name of the local Area Agency(s) on Aging and contact information. The Eldercare Locator (1‐
800‐677‐1116) or Administration on Aging website can help you find this information.'); ?></p>
        <p>{t}Originally established as an independent agency in 1930 and elevated to cabinet level in 1989, the
Department of Veterans Affairs dispenses benefits and services to eligible veterans of U.S. military service
and their dependents. The Veterans Health Administration provides hospital and nursing‐home care and
outpatient medical and dental services through a range of medical centers, retirement homes, clinics,
nursing homes, and Vietnam Veteran Outreach Centers across the United States. The Department of
Veteran Affairs also conducts medical research in such areas as aging, women’s health issues, AIDS, and
post‐traumatic stress disorder. The Veterans Benefits Administration (VBA) oversees claims for disability
payments, pensions, specially adapted housing, and other services, while the VA’s National Cemetery
System provides burial services, headstones, and markers for veterans and eligible family members at
more than 100 cemeteries throughout the United States.{/t}</p>
        <p class="forum">{t}Class leaders should provide contact information for local Veterans’ Service Centers.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Choosing Residential Care{/t}</h2>
        <hr />
        <ul>
          <li>{t}Considering a Move{/t}</li>
          <li>{t}Weigh advantages and disadvantages{/t}</li>
          <li>{t}Preparing the person with memory loss{/t}</li>
        </ul>
        <p>{t}In their book, <a href="http://www.amazon.com/Moving-Relative-With-Memory-Loss/dp/0970760914" target="_blank">Moving a Relative with Memory Loss: A Family Caregiver's Guide</a>, authors Laurie White and Beth Spencer share their many years of experience working with families struggling with the decision to move a family member.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/logo04.jpg'); ?>" alt="image">
        <p>{t}Making the decision to move a family member with memory loss to a new home, whether it is your home,
an assisted living facility, or nursing home, is not easy. An emergency situation or crisis often opens our eyes to a loved one's increased care needs. Even if you do not think that a move is imminent, looking into different residential care options now is a good idea. That way, if and when the time comes for a move, you have done your homework and will have an idea of what places would be a good fit for your family member. If possible, taking your family member on the tours is helpful, as he/she can offer their opinions of the places you are considering.{/t}</p>
        <p>{t}Of course, your family may decide that you would prefer to keep your family member in his/her home as long as possible. There are advantages and disadvantages to this.{/t}</p>
        <p class="forum">{t}Can you think for a moment about some advantages and disadvantages? List your responses on the Forum{/t}</p>
        <p>{t}It is important for families to weigh the advantages and disadvantages, while keeping in mind the best interest of the person with memory loss.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Good Sources of Information{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/80699907.png'); ?>" alt="image">
        <h4>{t}Closing{/t}</h4>
        <p class="forum">{t}Please post any questions to the Forum.{/t}</p>
        <p>{t}As usual, post any specific concerns you may have to the Forum. Your supplemental reading, in the companion book, includes Chapters 9 and 12. These chapters cover the material we covered today in greater detail.
Thank you for participating. The next module is the final one, and we will discuss <i>Effective Ways of Coping and Caring</i>. We look forward to your participation.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Lesson{/t}</a></div>
    </div>
  </div>
  <div id="lesson-5">
    <div id="lesson-5-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Effective Ways of Coping and Caring{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/J0321054r.png'); ?>" alt="image">
        <h4>{t}Purposes{/t}</h4>
        <ul>
          <li>{t}Discuss the importance of doing things{/t}</li>
          <li>{t}Consider the impact the environment can have on participation in activities and tasks for a person experiencing memory loss{/t}</li>
          <li>{t}Learn how to analyze and adapt tasks and activities{/t}</li>
          <li>{t}Review key points of the MSML Online course{/t}</li>
        </ul>
        <div id="question1" class="question">
          <p><b>{t}Medicare is a health insurance program; parts, A, B, C and D.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct! Good job!{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Please ensure you understand the various parts of Medicare before conintuing.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Welcome!{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
        <p>{t}Welcome to the fifth and final module of MSML Online. We are glad to see your continued participation.{/t}</p>
        <p>{t}In this module, we will focus on effective ways of coping and caring. We will first learn about one of the most effective ways of coping activity. In its purest form, activity means <i>doing</i>. For the first half of the module,
we will:{/t}</p>
        <ul>
          <li>{t}Discuss the importance of <i>doing</i>{/t}</li>
          <li>{t}Consider the importance of activities and tasks among persons with memory loss{/t}</li>
          <li>{t}Learn how to analyze and adapt tasks{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Recognize the importance of <i>doing</i> in your life &amp; in the life of your family member{/t}</h2>
        <hr />
        <p>{t}Think about when you meet someone new. What do you talk about? The first thing you do is probably
exchange names and a few pleasantries. As the conversation continues, however, you probably begin to talk about what you do – your occupation, hobbies, and interests. What we do is important to us and helps other people understand us.{/t}</p>
        <p class="forum">{t}Think of your own life. What things do you enjoy doing? Post your responses on the Forum.{/t}
        <p class="forum">{t}After reviewing your Personal Activity List, to take two minutes to make a list of a few things that they really enjoy doing – things you feel improve your quality of life. Post that new list to the Forum.{/t}</p>
        <p class="forum">{t}Now, look at your list. Imagine what your life would be like if you were no longer able to do these things. How would you feel? Allow a short time to reflect, then post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}I would feel...{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/113558101.png'); ?>" alt="image">
        <p>{t}Activity, or doing things, is an important consideration in terms of quality of life for all people, but
particularly for people with memory loss. Memory loss may interfere with a person's ability to fully engage
in the activities that he or she always enjoyed. The person may remember what they liked to do but may
have difficulty getting organized enough to do it, or may find the activity too complex. So, the person may
simply stop doing the activities they enjoyed doing and may experience some of the feelings listed here.{/t}</p>
        <p>{t}When we talk about <i>activities</i> in this context, we do not only mean leisure and recreational pursuits, but
every interaction that we have daily with other people or with our environment.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Structuring the day through meaningful activity{/t}</h2>
        <hr />
        <h5>{t}Activity: Any interaction between an individual and the environment{/t}</h5>
        <p>{t}We are all creatures of habit; we tend to have a pattern to our days. This routine is important to us and
when it is disrupted we tend to feel a bit off. Think of times in your life when your daily routine is
disrupted: when you are sick, when you are on vacation; or on a business trip; when you have had a new
addition to your family. Even if the circumstance itself is positive, the disruption to your schedule takes
some getting used to.{/t}</p>
        <p>{t}With memory loss, having a predictable pattern to the day, or a particular routine when doing things, can
be helpful. This does not mean that every day needs to be exactly the same or that there is no room for
new experiences. But generally, following the person’s preferred routine may be helpful, as it provides
familiarity and comfort.{/t}</p>
        <p class="forum">{t}Think about your own typical day. What are some of the routines that you engage in every day? Post your responses to the Forum.{/t}</p>
        <p>{t}Have the group brainstorm about this. You may need to start the discussion by giving an example of
something that you do as a routine, having a cup of coffee in the morning before going to work, or taking a
walk every evening. Ask the group to think about activities that they engage in every day as a routine –
activities that they miss when they are unable to get to them. Discuss how unsettling it can feel when
one's timetable is interrupted through illness, scheduling difficulties, or travel. Remind the group that a
person with memory loss may have a particularly difficult time with a change in routine.{/t}</p>
        <p>{t}Some people with early memory loss describe the difficulty they have in changing their routines or
switching from one activity or event to another. The person may feel that she needs to finish the first
activity completely before going on to the next so as to not leave a project half done.{/t}</p>
        <p class="forum">{t}Has your family member or friend ever had difficulty with sudden changes to routine? What do you think you might be able to do to make transitions from one event to another easier? What daily activities seem
to be important to your family member/friend, and what do you do to accommodate them? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}5. Find a Confidante{/t}</h2>
        <hr />
        <p>{t}Life does not end when a family member is diagnosed with a memory disorder. There are still plenty of
opportunities for you and your family member/friend to enjoy one another's company, and yes, even have fun!{/t}</p>
        <p>{t}Families and friends may want to make note of situations and events that the person with memory loss enjoys. If the person with memory loss is able to have a successful experience, then you can make every effort to include that experience in his or her routine. On the other hand, if the person clearly cannot tolerate an activity, make a note to avoid that situation in the future. For example, a person who once loved large family get‐togethers may find these overwhelming; a better option may be to visit with family and friends in smaller, more intimate groups.{/t}</p>
        <p class="forum">{t}Let's take a moment to think about this. On the Forum create a two columns posting. On one side, post a few things that your family member enjoys doing on his/her own. On the other side, post down a few things that you enjoy doing together. Ater that, post your response to the following questions:{/t}</p>
        <ul class="forum">
          <li>{t}How often are you able to do these things?{/t}</li>
          <li>{t}What opportunities does your family member/friend have to engage in his/her preferred activities?{/t}</li>
        </ul>
        <p>{t}Please keep these lists. Think about them later and maybe even add items as they come to mind.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Task Analysis{/t}</h2>
        <hr />
        <h5>{t}Breaking an activity down into its smallest possible steps{/t}</h5>
        <p>{t}Even people experiencing mild memory loss occasionally have the experience of getting lost in an activity –
losing their place and becoming confused about what to do next. This can be frightening and confusing to
friends and family as well as to the person with memory loss.{/t}</p>
        <p>{t}We can help by anticipating places where the person may become confused and offering cues to help the person accomplish the task independently.{/t}</p>
        <p>{t}People with normal memory are able to look at a task like teeth brushing or getting dressed in the morning
as a simple activity, going through the motions without needing to give it much thought. But a person with
memory loss may lose their way because in reality these activities are very complicated and have many
steps.{/t}</p>
        <h5>{t}Task Analysis Exercise{/t}</h5>
        <p class="forum">{t}On the Forum, list all the tasks of breaking down the activity of making toast. Think about every step along the way, no matter how small or inconsequential it seems.{/t}</p>
        <p class="forum">{t}For example, before getting the bread, you need to remember that the bread is in the kitchen and where it is kept. So step number one may actually be walking to the kitchen. Please think through all of the steps.{/t}</p>
        <p>{t}This exercise is to help us understand why the simple tasks we take for granted can sometimes seem
overwhelming to a person with even mild memory loss. A task like making toast seems pretty easy and
straightforward to us until we try to break it down into smaller steps. It is easy to see how a person
experiencing memory loss may have difficulty remembering all of the steps or may get off track.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Making Adaptations{/t}</h2>
        <hr />
        <ul>
          <li>{t}Simplify activities{/t}</li>
          <li>{t}Offer supervision{/t}</li>
          <li>{t}Do a little at a time{/t}</li>
          <li>{t}Look for new alternatives{/t}</li>
        </ul>
        <p>{t}Sometimes we may find that a person with memory loss has difficulty doing activities that she used to enjoy. This does not necessarily mean they need to stop engaging in that activity altogether – adapting the activity may be a better alternative.{/t}</p>
        <p>{t}Let's take Ted as an example. Ted always enjoyed gardening. Last week his wife, Mary, found Ted in the
shed, staring at his garden tools and looking confused. Mary asked Ted <i>what was wrong</i> and he said, <i>I
need to pull weeds but I do not remember what I am supposed to use to do that.</i>{/t}</p>
        <p>{t}When Mary looks at the garden, she notices that Ted has pulled out three small tomato plants, mistaking
them for weeds. It is obvious that Ted can not garden without supervision anymore, but gardening has always been very important to him.{/t}</p>
        <p class="forum">{t}What should Mary do? Post your response to the Forum.{/t}</p>
        <h5>{t}Summary{/t}</h5>
        <p>{t}It is the things we do that give our lives meaning – our work, hobbies, and daily routines. Our challenge as
family members, partners, and friends of people experiencing early memory loss is to help these
individuals do the things they have always liked to do, while considering adaptations when necessary.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Ten Steps for Living with Memory Loss{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/90329967.png'); ?>" alt="image">
        <p>{t}We have covered a lot of information in these past five modules. We are going to take a bit of time now to
review and discuss a few new ideas that you may want to consider as you continue on this journey.{/t}</p>
        <div id="question1" class="question">
          <p><b>{t}Could you describe dementia, Alheimer's disease, Medicare and its various parts?{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Great! Please continue.{/t} </p>
          <p class="wrong-answer hide"> {t}Please consider reviewing the previous four modules before continuing.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}1. Educate Yourself{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}Being well informed about current therapies, research and practice will help you immensely in the months
and years ahead. By enrolling in this course, you have taken the first step in finding out what you need to
know about memory loss. As time goes on, you will find that the needs of your family member will change,
and you will need additional information.{/t}</p>
        <p>{t}The Alzheimer's Association is a good resource. Other resources include hospitals and medical centers,
particularly those with neurology or memory loss clinics, research or educational organizations, and online
resources like the Alzheimer's Disease Education and Referral Center (ADEAR) and the National
Institutes of Health.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}2. Finding an Understanding Physician{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}It is very important to find a physician you can trust. You will have many questions as time goes on, and
        you will certainly want to keep up with current treatment options. If your physician does not understand
        memory loss, does not appear to be familiar with current treatments, or minimizes the seriousness of your
        relative’s symptoms, you should consider changing physicians. Contact the Alzheimer's Association for
        referrals to physicians who are sensitive to the needs of persons experiencing memory loss.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cartoon --{/t}</h2>
        <hr />
        <h5>{t}Please don't waste the doctor's time with questions!{/t}</h5>
        <img src="<?php echo $this->getImagesUrl('msml/168733398.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}3. Obtain Advice on Legal and Financial Planning{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}As we discussed in the last class, it is important to put legal and financial plans in place now. Durable
powers of attorney for finance, health care and advance directives may not be pleasant to think about, but
having these legal tools in place can be useful in preventing struggles and conflicts down the road.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}4. Rally Your Supporters{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}You may feel that you do not need help from anyone else right now. As time goes on you may need
assistance from others. One of the best things that you can do for yourself now, and in anticipation of the
future, is to keep in touch with your friends and other family members. Let them know what is happening.
If they offer to help you, find something for them to do, even if it is a small favor like running an errand or
mowing your lawn. You may not feel as though you need the help now, but cultivating these relationships
will help you immensely down the road. If you turn people away now, they may not feel comfortable
offering you assistance later, when you really need it.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}5. Find a Confidante{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}Everyone needs a listening ear now and then. As the demands of caring for a person with memory loss
grow over time, you may find that you benefit from talking to a trusted friend or family member about
your experience. If you do not feel that you have such a person in your life, you may want to consider
talking to a counselor or a clergy person. There are also support groups available to assist you.{/t}</p>
        <p>{t}The important thing is to make sure that you have an outlet for your thoughts and feelings as you go
through this journey. Your confidante should be someone you trust, who will listen to you in a
nonjudgmental way and offer you emotional support and assistance.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}6. Take Time for Yourself{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}What do you like to do? Do you like to go for long walks? Do you like to read? Whatever your interest, it is important that you get into the habit of taking time for yourself. This may sound selfish and frivolous, but in reality it is necessary if you want to continue being able to care for your family member.{/t}</p>
        <p>{t}As your family member's memory loss progresses, they will need more and more of your attention. If you do not take time for yourself, you may find that you feel stressed out, tired and impatient. Worse, you may begin to experience stress‐related illnesses. So caring for yourself is not selfish, it is essential.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}7. Use Community Resources{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}As we discussed in module four, there are a number of resources in your community that can assist you as you care for a family member with memory loss. Knowing what resources are available is the first step, the second is recognizing when it is time to begin utilizing these resources.{/t}</p>
        <p>{t}Some people have a good support network of family and friends, and are able to handle the majority of the care of the person experiencing memory loss. Others do not have the same support and may need to utilize community resources earlier on in the disease process.{/t}</p>
        <p>{t}Seeking assistance is nothing to be ashamed of. It is very healthy. By seeking outside assistance, you are able to give yourself a break from your role as caregiver.{/t}</p>
        <p>{t}Options like adult day programs not only give you a break, but also have the benefit of keeping your family member active socially, physically and cognitively. Sitting at home in an unstructured environment may not provide the stimulation that your family member needs in order to function at his or her highest possible potential. Day programs provide structured activities and opportunities for socialization in a supportive environment that recognizes and adapts to the needs of a person with memory loss. For more information about community resources, contact the local Area Agency on Aging.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}8. Maintain a Sense of Humor{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}Memory loss is nothing to laugh at. But life is full of absurdities. Funny things can and do happen! Learn to enjoy these moments.{/t}</p>
        <p>{t}Memory loss does not mean an end to the relationship you enjoyed with your family member. The relationship may change, but it is not over. You can still enjoy one another's company and do fun things together. And yes, you can still have moments of joy, despite the memory loss.{/t}</p>
        <p>{t}A woman who cared for her husband with memory loss tells the story of having a long, protracted argument with him about putting on his pajamas to go to bed, because he wanted to sleep in his clothes. After a long, difficult struggle, he finally put on his pajamas. As he lay down to go to sleep, he looked at his wife and said, <i>was that really worth it?</i> She laughs about this now and tells this story to caregivers as an illustration of, how first of all, we need to choose our battles wisely, but secondly, that there is humor to be found even in the difficult moments.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}9. Explore your Spiritual Beliefs{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}You may not consider yourself to be a religious or spiritual person. But we all have some source of
inspiration and spiritual renewal. What inspires you? What gives you the energy to get through the day?{/t}</p>
        <p>{t}Whatever source you have for spiritual growth, this is the time to go to that source and take advantage of
the strength you draw from it. For some people, that may mean reading scriptures or attending worship
services. For others, it may mean taking walks in the woods or going fishing. Others may find inspiration in
art: music, dance, drama, or the visual arts. Still others may gain inspiration and support from friends or
family.{/t}</p>
        <p>{t}Whatever the source that works for you, make sure that you find ways to renew your spirit. This may be
the most important thing that you can do for yourself as you love and care for a person with memory loss.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}10. Set Realistic Goals{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/94403180.png'); ?>" alt="image">
        <p>{t}We often expect far too much of ourselves, becoming our own worst enemy.{/t}</p>
        <ul>
          <li>{t}I will walk five miles every day.{/t}</li>
          <li>{t}I will call all of the home health agencies on my list this week to find the right one for me.{/t}</li>
          <li>{t}I will lose ten pounds by my niece’s wedding!{/t}</li>
        </ul>
        <p>{t}As we have learned throughout this course, our goals need to be realistic in order for us to achieve them.
Thinking about what we need to do, and the smaller steps that it may take in getting there, will help us in
the long run. It is easier and more rewarding to achieve smaller goals, working our way up to the larger
ones. Instead of setting a goal of walking five miles every day, a more realistic and achievable goal may be
to walk around the block three times a week.{/t}</p>
        <p>{t}Thank you all for participating in Making Sense of Memory Loss Online. We hope that you have learned some tips
and techniques that will assist you in the future.{/t}</p>
        <p>{t}As a summary and to make sure we have answered all of your questions, please review the Forum, and contact your facilitator, via email, with any final concerns.  {/t}</p>
        <p class="forum">{t}On the Forum, please post your final responses to these questions:{/t}</p>
        <ul class="forum">
          <li>{t}Do you feel like enough informaiton has been covered during these five modules?{/t}</li>
          <li>{t}And, please answer any remaining questions from all five modules.{/t}</li>
        </ul>
        
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Thank You! Good Luck!{/t}</h2>
        <hr />
       <p>{t}Your supplemental readingfor this class in thecompanion book includesChapters 10 and 11.{/t}</p>
        
        <p>{t}To end the course, I would like to share with you one last message that conveys the feeling of caring for
someone with memory loss and invite you to remember this quote from Helen Keller.{/t}</p>
        <p><i>{t}The best and most beautifulthings in the world cannotbe seen or even touched.They must be felt withinthe heart. --Helen Keller{/t}</i></p>
        <p>{t}We have really enjoyed getting to know you. Best wishes as you carry on in the future!{/t}</p>
        
        <h4>     {t}Certificates of Completion{/t}</h4>
        <a href="<?php echo $this->getImagesUrl('msml/CourseCompletionCertificate.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('msml/ArtworkCertificate.png'); ?>" alt="image"></a>
        
        <h4>{t}Evaluation (optional){/t}</h4>
        <p>{t}Please complete the Post-Course Evaluation. It is acceissble via the course page, in the sidebar.{/t}</p>
        <p>{t}Your feedback is greatly appreciated, and will help us to better serve family members in the future. We ask that you
        complete it before you exit the course. You do not have to include your name on the evaluation. It is completely
        confidential.{/t}</p>
         </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Course{/t}</a></div>
    </div>
  </div>
        
        
        
 
  
  <!-- close course --> 
</div>
