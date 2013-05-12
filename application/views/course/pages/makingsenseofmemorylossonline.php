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
    <p>{t}10 Early Signs and Symptoms of Alzheimer\'s{/t}</p>
    <p> <a href="https://www.alz.org/alzheimers_disease_10_signs_of_alzheimers.asp" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('alz.png'); ?>" alt="image" /></a></p>
    <p>{t}Memory loss that disrupts daily life may be a symptom of Alzheimer\'s or another dementia. Alzheimer\'s is a brain disease that causes a slow decline in memory, thinking and reasoning skills. There are 10 warning signs and symptoms. Every individual may experience one or more of these signs in different degrees. If you notice any of them, please see a doctor.{/t}</p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>U.S. Dept. of Health &amp; Human Srvc.</h3>
    <p>{t}2011 - 2012 Alzheimer\'s Disease Progress Report{/t}</p>
    <p><a href="http://www.nia.nih.gov/alzheimers/publication/2011-2012-alzheimers-disease-progress-report" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('msml/adpr-front.png'); ?>" style="width:150px; height: 95px;" alt="image" /></a></p>
    <p>{t}A summary of Alzheimer\'s disease research, infrastructure, and funding supported by the NIH.{/t} </p>
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
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> {t}Making Decisions{/t}</a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-11" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-12" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-13" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-14" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-15" data-fancybox-group="lesson-3" class="hide lesson-3"></a> </li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> {t}Planning for the Future{/t}</a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> {t}Effective Ways of Coping{/t}</a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
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
    <span class="h5">{t}Course Developer:{/t}</span><span class="name">Jon Woodall</span>
    <p>{t}Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs.{/t} </p>
    <span class="h5">{t}Facilitator:{/t}</span><span class="name">Ellen Ziegemeier</span>
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
        <p>{t}The Alzheimer\'s Association is the leading, global voluntary health organization in Alzheimer\'s care and
support, and the largest private, nonprofit funder of Alzheimer\'s research.{/t}</p>
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
diagnosed with the early stages of Alzheimer\'s disease or a related dementia. Families with a relative who
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
        <p>{t}Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur\'s 83-year-old father, Herbie, became too infirm to care for himself.{/t}</p>
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
          <p><b>{t}Have you ever visited the Alzheimer\'s Assocation website?{/t}</b>
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
          <li>{t}What are the symptoms and stages of Alzheimer\'s disease?{/t}</li>
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
        <p>{t}Dementia is not a specific disease. It is an overall term that describes a wide range of symptoms associated with a decline in memory or other thinking skills severe enough to reduce a person\'s ability to perform
everyday activities. Alzheimer\'s disease accounts for 60 to 80% of cases. Vascular dementia, which occurs
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
irreversible conditions such as Alzheimer\'s.{/t}</p>
        <h5>{t}Irreversible Dementias{/t}</h5>
        <p>{t}Most dementias are irreversible in nature. Sometimes two or more types of these dementias may occur
together as a "mixed dementia." There are several dozen types of dementia and the major types can be
found on the Internet.{/t}</p>
        <p class="forum">{t}Search the Alzheimer\'s Association\'s website for greater explanations for these types of reversible and irreversible dementias. Choose one from each category, and provide a description for each one on the Forum.{/t}</p>
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
        <h2 class="flowers">{t}Criteria for probable Alzheimer\'s disease{/t}</h2>
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
        <h2 class="flowers">{t}Prevalence of Alzheimer\'s disease by Age{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/121113384.png'); ?>" alt="image">
        <p>{t}AD is rather common among the older population. According to the Alzheimer\'s
Association, an estimated 5.4 million Americans of all ages had Alzheimer\'s disease in 2012. This figure
includes 5.2 million people age 65 and older, and 200,000 individuals under age 65 who have youngeronset
Alzheimer\'s.{/t}</p>
        <p class="forum">{t}Taking into account the figures above, can you guess how many Americans have AD today? How many
people in our state are estimated to have AD? Can you guess how many people are expected to have AD
40 years from now? Search the Internet to help with your answers, and post them to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Projected Growth of Persons with Alzheimer\'s disease{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/AAscreenshot.png'); ?>" alt="image">
        <p>{t}Based on projections of the older population in the coming decades, it is expected that the number of
Americans with AD will grow dramatically.{/t}</p>
        <p class="forum">{t}Search the Alzheimer\'s Association\'s website for the most current facts on figurs on the growth of AD. Record your findings on the Forum{/t}</p>
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
          <p><b>{t}Alzheimer\'s disease is an irreversible, progressive brain disease that slowly destroys memory and thinking skills, and eventually even the ability to carry out the simplest tasks.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}True{/t} </option>
              <option value="0"> {t}False{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct!{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Please ensure you understand what Alzheimer\'s disease is before continuing.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal{/t} -> {t}Mild Cognitive Impairment{/t} -> {t}Alzheimer\'s disease{/t}</h2>
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
        <h2 class="flowers">{t}Definite Risk Factors for Alzheimer\'s disease{/t}</h2>
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
        <h2 class="flowers">{t}Genetics &amp; Alzheimer\'s disease{/t}</h2>
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
develop Alzheimer\'s disease. It is unlikely that genetic testing will ever be able to predict the disease with
100 percent accuracy because too many other factors may influence its development and progression.{/t}</p>
        <p>{t}At present, APOE testing is used in research settings to identify study participants who may have an
increased risk of developing Alzheimer\'s. This knowledge helps scientists look for early brain changes in
participants and compare the effectiveness of treatments for people with different APOE profiles. Most
researchers believe that APOE testing is useful for studying Alzheimer\'s disease risk in large groups of
people but not for determining any one person\'s specific risk.{/t}</p>
        <p>{t}In doctors\' offices and other clinical settings, genetic testing is used for people with a family history of
early‐onset Alzheimer\'s disease. However, it is not generally recommended for people at risk of late‐onset
Alzheimer\'s.{/t}</p>
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
          <p><b>{t}The greatest known risk factor for Alzheimer\'s is advancing age.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}True{/t} </option>
              <option value="0"> {t}False{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct!{/t} </p>
          <p class="wrong-answer hide"> {t}Incorrect. Search the Alzheimer\'s Association website for AD risk factors.{/t} </p>
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
        <h2 class="flowers">{t}FDA-Approved Treatments for Alzheimer\'s{/t}</h2>
        <hr />
        <h5>{t}Cholinesterase Inhibitors{/t}</h5>
        <ul>
          <li>{t}Donepezil{/t}</li>
          <li>{t}Rivastigmine{/t}</li>
          <li>{t}Tacrine{/t}</li>
          <li>{t}Galantamine{/t}</li>
        </ul>
        <p>{t}While there is no cure for Alzheimer\'s disease, there are five prescription drugs approved by the U.S. Food
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
          <li>{t}Donepezil (marketed as Aricept), which is approved to treat all stages of Alzheimer\'s disease{/t}</li>
          <li>{t}Galantamine (marketed as Razadyne), approved for mild to moderate stages.{/t}</li>
          <li>{t}Rivastigmine (marketed as Exelon), approved for mild to moderate Alzhe1nler\'s.{/t}</li>
        </ul>
        <p>{t}Tacrine (Cognex), the first cholinesterase inhibitor, was approved in 1993 but is rarely prescribed today
because of associated side effects, including possible liver damage.{/t}</p>
        <p class="forum">{t}Search the Internet to learn how cholinesterase inhibitors work, and post your findings on the Forum. Also, search and post the benefits of memantine and the common side effects of memantine.{/t}</p>
        <h5>{t}On the horizon{/t}</h5>
        <p>{t}Scientists have made remarkable progress in understanding how Alzheimer\'s affects the brain. Their
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
          <p><b>{t}Does Alzheimer\'s Disease Affect Communication?{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct! People with Alzheimer\'s lose particular communication abilities during the early, middle, and late stages of the disease.{/t} </p>
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
        <p>{t}Welcome to the second lesson of MSML Online. One of the more frustrating and difficult aspects of memory loss is that the person\'s ability to communicate may be compromised. In this section, we will discuss how to adapt to these changes. We will cover these general topics and get into specifics along the way.{/t}</p>
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
      <h2 class="flowers">{t}The Person\'s Level of Awareness{/t}</h2>
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
        <li>{t}Gain the person\'s attention{/t}</li>
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
      <p>{t}We are all familiar with the saying, <i>"it is not what you say, but also how you say it."</i> We have all had experiences where we were put off by a person\'s tone of voice or facial expression, even if what they said was not really all that offensive.{/t}</p>
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
things may be very different from yours. Let\'s say that your Aunt Mae can’t remember having gone to a restaurant the day before, and is upset over the doggie bag in the refrigerator because she claims, “I did not put that there, and I’m not going to eat someone else’s leftovers!”{/t}</p>
      <p>{t}Our natural inclination is to set things right and use facts to prove our point. But if the person truly does
not remember the experience of going to the restaurant, no amount of facts will change her mind. It won\'t help to pull out the calendar to show Aunt Mae that she wrote down 6 pm ‐ dinner at Andy’s Restaurant with Susan or showing her the receipt, or even showing her a matchbook from the restaurant. Aunt Mae does not remember the experience. For her it simply never happened.{/t}</p>
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
      <p>{t}Do not assume that everyone will automatically know how to deal with your family member\'s memory loss. They will not. Presume that they do not know and teach them what you have learned. Some people may be uncomfortable or may react in an unusual way. So provide information for your family and friends about what works and what does not. Give them tips on how to communicate with your family member. Model what works so that they can learn from you. Give them feedback about how they are doing, especially when they are doing a good job. Tell them about Alzheimer\'s Association\'s educational programs and support groups so that they can learn more if they prefer. Give them a brochure or book to read.{/t}</p>
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
    <p>{t}For more ideas about communication strategies, please refer to chapters 5 and 8 of the book, <i>Alzheimer\'s Early Stages</i>. Chapter 5 is especially helpful in understanding the communication challenges faced by persons with memory loss. If possible, read these chapters during the coming week.{/t}</p>
  </div>
  <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Lesson{/t}</a></div>
</div>



  </div>




<div id="lesson-3">
  <div id="lesson-3-slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Making Decisions{/t}</h2>
      <hr />
      <p>{t}Lesson Objectives:{/t}</p>
      <ul>
        <li>{t}Understand the shifting balance of power in the relationship,{/t}</li>
        <li>{t}Address practical issues in everyday life such as driving a car, handling health & financial decisions or managing household tasks,{/t}</li>
        <li>{t}Share the diagnosis and involved others in helping out.{/t}</li>
      </ul>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
  </div>
  <div id="lesson-3-slide-2" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Welcome Back!{/t}</h2>
      <hr />
      <p>{t}Welcome to the third lesson of MSML Online.{/t}</p>
      <p>{t}Before you begin, please email your Instructor or post to the Forum/Blog any questions or comments related to last week\'s lesson on Communication.{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-3" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Making Decisions{/t}</h2>
      <hr />
      <p>{t}"Not to decide is to decide."{/t}</p>
      <p>{t}In this lesson, we go into depth about the changes that occur in the relationship between you and your relative as a result of memory loss. Your role gradually must change so that you become the chief decision-maker in the relationship.{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-4" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Shifting the Balance of Power{/t}</h2>
      <hr />
      <h4>{t}Preserve independence and meet dependence{/t}</h4>
      <p>{t}When you begin to recognize the limits of your relative\'s memory and thinking abilities, you become better equipped to address his or her needs in practical decisions such as driving a car, handling money, and the like. These decisions require your active involvement. Helping someone to make such decisions may seem uncomfortable at first, especially if he or she does not recognize limits with memory and thinking. Unfortunately, he or she no longer has the capacity to be fully self-sufficient although many abilities remain intact. The balance of power must begin to shift in the relationship with the person with memory loss. You must decide how and when to keep a delicate balance between honoring that person\'s need for independence versus the legitimate need for dependence. This requires much tact and patience in making decisions.{/t}</p>
      <h4>{t}Let us consider the following example:{/t}</h4>
      <p>{t}Your 81-year-old mother has Alzheimer\'s disease and lives alone in her home. You are now responsible for managing her finances after you found out that her bills were months overdue. She is upset because she feels you are trying to control her life. She says to you one day: "You make all the decisions because you think you know what\'s best for me. I am not a child just because I ca not do what I used to do."{/t}</p>
      <p>{t}How might you address her complaint? (Take about 5 minutes to arrive at a solution that would be satisfactory to both parties).{/t}</p>
      <h4>{t}Making decisions – alone or together{/t}</h4>
      <p>{t}Instead of involving someone with memory loss in every decision and run the risk of causing confusion, it is best to narrow the choices. For example, if a big decision is looming such as a move, it would be chaotic to involve the person with memory loss at each step in the process. However, it would be appropriate to involve the person at key points along the way like picking out furniture to keep or discard.{/t}</p>
      <h4>{t}Quietly take the lead as if a great dancer{/t}</h4>
      <p>{t}One way to visualize the lead role you must now take is to consider a couple engaged in ballroom dancing. Although the man takes the lead, the woman who is his partner is actively responding to his cues and steps. This is done in a spirit of cooperation but it requires that each person accepts an agreed upon role. You must now learn how to take the lead in the relationship but to the extent possible seek the cooperation of the other person.{/t}</p>
      <p>{t}Cartoon of young and old woman with the latter saying:{/t}</p>
      <p>{t}"Honey, I have been through two world wars, the Great Depression, taught 3,297 children, administered four elementary schools and outlived every one of the people I worked with. I am 89 years old and you are telling me it is bedtime?"{/t}</p>
      <p>{t}These two people are clearly not in harmony. This scene typifies the universal need for control over one\'s destiny and how things can go wrong if that need is challenged. There is no reason to argue about anything as long as you take the right approach. Keep in mind that although the behavior of people with memory loss may appear childlike at times, adults are not children and should be respected as adults. Each person has a long personal history and is accustomed to making choices independently. To the extent possible, choices must be given so that conflicts can be prevented.{/t}</p>
      <p>{t}How might this particular scenario have been played out differently? (Take a few minutes for ideas and use your imagination and flexibility.){/t}</p>
      <p>{t}Now let us turn to handling some practical issues…{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-5" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Driving a Car - Continue or Stop?{/t}</h2>
      <hr />
      <p>{t}Driving a car is not only a means of getting around but is also a symbol of personal independence. AD often impairs brain functions that affect driving ability but sometimes those functions are spared so that driving may continue without difficulty for awhile.{/t}</p>
      <h4>{t}Mixed results of research studies thus far{/t}</h4>
      <p>{t}Results of research on the effects of AD on driving performance are not completely clear. However, virtually all studies conclude that as person becomes more impaired over time, there is a greater risk for traffic accidents.{/t}</p>
      <h4>{t}No clear markers for risks{/t}</h4>
      <p>{t}There is no definitive cognitive test or driving test yet available to accurately measure one\'s risk of impaired driving ability. However, you may be the best judge of one\'s ability to drive safely. One simple question you might ask yourself is this: Given what you know about the driving skills of the person with memory loss, would you feel comfortable letting a young child ride alone in the car with him or her?{/t}</p>
      <h4>{t}No specific public policy in most states{/t}</h4>
      <p>{t}In the state of California, every person who drives a car who is diagnosed with AD must be reported by the diagnosing physician to the state for a reassessment of driving skills. Drivers in California who reach the middle or late stage of the disease are not allowed to have their licenses renewed. In other states, however, there is no specific public policy governing AD and driving. Most states address the issue of medical problems that may impair driving ability in order to protect personal and public safety. Physicians and other authorities are usually entitled under state laws to take action if there is a serious concern about a driver\'s ability to safely operate a vehicle.{/t}</p>
      <p>{t}If there are specific policies in your state pertaining to driving and disability, please share/post them on this Lesson\'s Forum.{/t}</p>
      <h4>{t}Personal freedom versus public safety{/t}</h4>
      <p>{t}Weighing one\'s desire to drive a motor vehicle against the public\'s need for safe drivers appears to be the crux of the issue. How this dilemma is resolved remains a private matter in most states.{/t}</p>
      <h4>{t}Voluntary versus involuntary means{/t}</h4>
      <p>{t}Fortunately, most people with AD discontinue driving on their own for the sake of safety or will bend to the wishes of others to quit driving voluntarily. By all means, a physician should take the lead in addressing this issue in order to spare the family the hassles that often ensue. After all, the decisions to stop driving stems from the medical problem of AD or a related dementia and therefore, a physician is best suited to address the practical implications of the disease including driving. You should communicate your concerns in advance of a visit to the physician’s office.{/t}</p>
      <p>{t}A number of rehabilitation centers have specially trained staff members, usually occupational therapists, who can assess one’s driving capacity through a series of tests. Such testing may cost $250-400 but may be worthwhile to get a professional opinion about one’s driving capacity. A physician might recommend this course of action before a decision is reached.{/t}</p>
      <p>{t}The privilege of driving is so terribly important for some people that taking away it away may harm the self-esteem of the person affected by this decision. It is important to consider alternative means of transportation in order to minimize the impact of this decision. Does your local area have bus transportation for seniors? Is your family prepared to take on the “chauffer” role?{/t}</p>
      <p>{t}If persuasion alone is insufficient to keep an unsafe driver off the road, then taking action through the state department of motor vehicles to revoke one’s license may be the only alternative. Others undesirable options are to disable the car or get rid of it altogether.{/t}</p>
      <p>{t}Please share a story about how they have addressed the issue of driving in their family.{/t}</p>
      <p>{t}“When I die, I want to go peacefully, like my grandfather did, in his sleep; not screaming like the other passengers in his car.”{/t}</p>
      <p>{t}This humorous quote illustrates the serious consequences of unsafe driving. It is better to err on the side of safety when considering whether or not a person with memory loss should continue driving. Again, the issue of personal freedom versus public safety must be carefully weighed when it comes to driving a car.{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-6" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Handling Health &amp; Financial Decisions{/t}</h2>
      <hr />
      <h4>{t}Capacity exists unless given up voluntarily{/t}</h4>
      <p>{t}Making personal decisions over one’s health and financial affairs is a personal right that is threatened by memory loss. Assessing when and how to intervene is difficult unless the person with memory loss gives up this authority on a voluntary basis.{/t}</p>
      <h4>{t}Personal freedom versus risks{/t}</h4>
      <p>{t}As memory loss advances over time, the risks of continuing to manage one’s own affairs will become more obvious to others but in the early stage there may legitimate differences of opinion about the person’s ability to handle these affairs alone.{/t}</p>
      <p>{t}Nevertheless, due to the person’s impaired memory and judgment, someone else must be in a position of monitoring risks. Otherwise, problems such as failing to pay important bills may emerge, as the previous example shows.{/t}</p>
      <h4>{t}Mismanagement of finances & medical compliance{/t}</h4>
      <p>{t}What are some of the risks? Persons with memory loss can lose track of money or stop paying bills. They may also be at risk of exploitation by others. In regards to medications, they can forget about taking their pills or take them more often than prescribed. Problems with taking or not taking medications can lead to health crises.{/t}</p>
      <p>{t}It is fairly easy to assess if some one with memory loss is having trouble with their finances or their medication IF he or she is open to scrutiny. It’s important to raise these issues in a delicate manner in order to maintain trust and enlist the person’s cooperation.{/t}</p>
      <p>{t}Does anyone have a story to share on this topic? If time permits.{/t}</p>
      <h4>{t}Means to share or give up authority{/t}</h4>
      <p>{t}At the next class, we will discuss legal steps such as Powers of Attorney in order to ensure that someone is responsible for handling financial and health care decisions.{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-7" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Handling Other Household and Personal Tasks{/t}</h2>
      <hr />
      <ul>
        <li>{t}Over-learned tasks are preserved{/t}</li>
        <li>{t}Difficulty with new & unfamiliar tasks{/t}</li>
        <li>{t}Following a sequence of steps{/t}</li>
      </ul>
      <p>{t}Generally, the ability to handle personal care tasks such as bathing and dressing is intact in the early stages. Such things have been done so often that they tend to be done almost automatically but some instances of forgetting these basic things may occur from time to time. More complex tasks such as cooking a meal or fixing an appliance in need of a repair are often problematic, however anything requiring a prescribed sequence of steps for completion may be disrupted due to memory loss. Thus, the person with memory loss tends to avoid doing new or unfamiliar tasks that require learning or memory beyond their capacity to be successful.{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-8" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Traveling{/t}</h2>
      <hr />
      <ul>
        <li>{t}Unfamiliar places, people & schedule may increase confusion{/t}</li>
        <li>{t}May also be an enjoyable time together{/t}</li>
        <li>{t}Weigh risks & benefits for all concerned{/t}</li>
        <li>{t}Take necessary precautions{/t}</li>
      </ul>
      <p>{t}Like anything unfamiliar, traveling to new or different places may be more stressful than in the past for someone with memory loss but should not be ruled out altogether. However, traveling alone is too risky and increases the chance of becoming lost or confused. With proper planning and guidance, traveling with a relative or a friend may be an enjoyable activity. Precautions should be taken to minimize the chance of becoming lost while traveling.{/t}</p>
      <p>{t}What are some steps that might be taken to prevent or minimize confusion? With proper planning, how might you handle a crisis such as the person with memory loss getting lost while away from home?{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-9" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Marital Intimacy{/t}</h2>
      <hr />
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
  <div id="lesson-3-slide-10" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Challenges for Families{/t}</h2>
      <hr />
      <p>{t}Although major responsibility of caring for a loved one with memory loss often falls on the shoulders of just one person, other family members may live in the local vicinity or at a distance and have their own personal reactions to the situation. Families are sometimes faced with these challenges:{/t}</p>
      <h4>{t}History re-emerges, for better or worse{/t}</h4>
      <p>{t}Each family has its own unique history of grappling with past problems. Some families may have worked well together in the past while other families may have lacked cooperation among their members. Some family members may get along well while others may disagree and share bad feelings toward each other. How a family responds to the needs of a loved one with memory loss and the primary person who provides care depends in large part on the family’s past experience.{/t}</p>
      <h4>{t}Uneven division of labor among members{/t}</h4>
      <p>{t}As already noted, most responsibilities of caring for someone are usually assumed by one family member. Traditionally, this has meant a spouse, a daughter or daughter-in-law. This person’s role is vital to the well-being of the person with memory loss. However, enormous sacrifices are usually made by the primary helper, in terms of time and effort. It is essential for everyone in the family to recognize the primary helper’s key role and to share in the responsibilities to the extent possible. Some family members will initiate action or gladly accept assigned duties whereas others might refuse to help.{/t}</p>
      <h4>{t}Roles are often unclear{/t}</h4>
      <p>{t}In the early stages of memory loss, each family member’s role and responsibilities may not be easy to identify. The person with memory loss may not seem to need help or readily accept anyone’s help. Likewise, the primary helper may be reluctant to call upon anyone’s assistance. As soon as possible, it is important to identify the needs of both the person with memory loss and the primary helper, keeping in mind that needs change over time with the advance of the disease. It is often useful to hold a family meeting for the sake of identifying these needs and giving everyone an opportunity to respond.{/t}</p>
      <h4>{t}Different levels of acceptance / denial{/t}</h4>
      <p>{t}Each member of a family accepts or denies the diagnosis of AD or a related dementia at a different pace. Those closest to the person with memory loss usually are the first to notice the subtle changes due to the disease and slowly come to terms with the resulting disabilities. Conversely, those who have casual contact, at holiday gatherings, for example, may not see the changes in memory and thinking that are noticeable on a daily basis.{/t}</p>
      <p>{t}Again, a family meeting to discuss the diagnosis and its implications is often useful to clarify the facts of each situation. In order to put aside personal agendas that may exist within a family, having a third party involved in such a meeting may be useful. A physician, nurse, psychologist or social worker may be helpful in resenting the medical facts and facilitating a plan of action on behalf of the person with memory loss and the primary helper. Getting everyone “on the same page” is a first step toward enabling a family to better understand the situation and garnering each member’s support.{/t}</p>
      <p>{t}Has anyone here been involved in a family meeting? Would you like to share the details?{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-11" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Telling Others: Pros and Cons{/t}</h2>
      <hr />
      <h4>{t}Pros{/t}</h4>
      <ul>
        <li>{t}Educate others about the nature of disease{/t}</li>
        <li>{t}Create opportunities for others to help{/t}</li>
        <li>{t}Put everyone concerned at ease{/t}</li>
      </ul>
      <h4>{t}Cons{/t}</h4>
      <ul>
        <li>{t}“What they don’t know won’t hurt them”{/t}</li>
        <li>{t}Negative stereotypes associated with Alzheimer’s disease{/t}</li>
        <li>{t}Risk of social isolation{/t}</li>
      </ul>
      <p>{t}Another issue related to autonomy is how and when the diagnosis of AD or another form of dementia is conveyed to other people. This is a highly personal decision. Some people are reluctant to share the news with others while others are quite open about it. However, disclosing the diagnosis will become necessary as symptoms become more obvious over time. Most people figure things out anyway, long before the news is shared.{/t}</p>
      <p>{t}Let us talk about good reasons for sharing the diagnosis. What are some reasons to list on the pro-side?{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-12" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Recognizing Reactions of Others{/t}</h2>
      <hr />
      <h4>{t}Rally your supporters{/t}</h4>
      <p>{t}Caring for someone with memory loss requires practical help and moral support from others on a regular basis. You are fortunate if you have family members and friends who can fill this need. These helpers may be instrumental in preserving your physical and mental health. Most people delay asking for help or do not take advantages of opportunities for help when offered. Now is the time to rally your supporters!{/t}</p>
      <h4>{t}Accept hibernators{/t}</h4>
      <p>{t}On the other hand, there are people in your life whose absence from the scene may surprise and disappoint you. You need to be prepared for dealing with those who are not helpful. Your own well-being is too important to be derailed by them. We refer to such people as "hibernators." Hibernators are those people who might be expected to be of service but excuse themselves from helping out in any meaningful capacity. Like bears in winter, they cannot handle the bad weather and retreat into the privacy and security of their own lives. For whatever reasons, they cannot or will not play a supportive role.{/t}</p>
      <p>{t}Trying to engage hibernators seldom succeeds despite your repeated efforts. Much time and energy can be wasted persuading them to get involved. It is difficult to understand them and avoid harsh judgment. However, bitterness and resentment can become self-destructive. It may not be possible to forgive hibernators for their lack of help yet it is essential to forget that they can be counted on. Appreciating the efforts of those who are still involved instead of remaining disappointed over those who are not involved will contribute to your well-being.{/t}</p>
      <h4>{t}Enlighten armchair quarterbacks{/t}</h4>
      <p>{t}Can anyone here define the term, “armchair quarterback?”{/t}</p>
      <p>{t}An armchair quarterback is someone who sits at home watching a football game on television and second-guesses the players or coach after a play has occurred. It is easy to call the shots from a distance instead of playing in the actual game. Armchair quarterbacks may think that they know how to play the game but this illusion stems from lack of experience. So it is with family members and friends who think that they know all about caring for someone with memory loss and offer unsolicited advice or criticism. Since their knowledge is based on theory instead of real world experience, most of what they have to say tends to fall on deaf ears.{/t}</p>
      <p>{t}Some armchair quarterbacks may care enough to change their ways and become active helpers. They should be invited to "get into the game." They need encouragement as well as some concrete directions on how to get directly involved in the providing truly valuable help. Opportunities to experience caring for someone with memory loss, for an entire weekend, for example, may be an awakening for them. If an armchair quarterback seems unwilling to give up the role of self-appointed expert, it is probably best to set limits on their unwanted advice or avoid them as much as possible. It may simply be too stressful for you to withstand their meddling.{/t}</p>
      <p>{t}You need to surround yourself with others who can enable you to maintain a positive attitude. Dealings with hibernators and armchair quarterbacks are draining. You need to eliminate or minimize their influence and focus your attention on those important people who enable you to remain healthy and happy. These relationships are essential for coping over the long haul.{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-13" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Getting Others Involved{/t}</h2>
      <hr />
      <p>{t}So, how do you get others involved? You do this by:{/t}</p>
      <ul>
        <li>{t}Explaining the facts of the disease;{/t}</li>
        <li>{t}Inform them of how the disease is affecting you and the person you love;{/t}</li>
        <li>{t}Identify the types of help needed;{/t}</li>
        <li>{t}Show appreciation for the concern and help provided;{/t}</li>
        <li>{t}And develop new relationships by attending support groups, finding others who can relate with your situation and be a positive force in your life.{/t}</li>
      </ul>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-14" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Major Milestones{/t}</h2>
      <hr />
      <p>{t}Based on our experience with family members and friends of people with memory loss, we have identified six major milestones that indicate if someone is coping well. These milestones may not be reached within a month or even a year. Everyone moves along the road to acceptance at a different pace and in a unique way. These statements appear to be signs of healthy coping:{/t}</p>
      <h4>{t}The relationship has changed -- I now lead it.{/t}</h4>
      <p>{t}This statement reflects an understanding that your relationship with a memory-impaired person has been changed by a medical condition. He or she can no longer be completely self-sufficient and you have a right to protect the person’s well-being by offering leadership. Good leadership appreciates the deficits of the other person and enables one’s remaining capacities to be used as often as possible.{/t}</p>
      <h4>{t}I must change, not the person with the disease.{/t}</h4>
      <p>{t}Customary ways of listening to and talking with a memory-impaired person must give way to new ways of communicating. There is a basic understanding that you cannot control the person’s memory loss so you will have to make the necessary adaptations to fit the person’s needs. Just as you would not expect someone with broken legs to walk unaided, you supply the memory, thinking and other intellectual skills whenever needed.{/t}</p>
      <h4>{t}I can learn how to cope effectively.{/t}</h4>
      <p>{t}Knowledge, skill, and virtues such as patience and understanding can be practiced and learned so that you and the person with memory loss can enjoy a good quality of life.{/t}</p>
      <h4>{t}I have limits and mistakes will be made.{/t}</h4>
      <p>{t}You cannot provide for all of the person’s need at all times nor can you carry out this role perfectly. You can learn from your mistakes and apply the lessons to the future.{/t}</p>
      <h4>{t}My own well-being is important too.{/t}</h4>
      <p>{t}Although you spend lots of time caring for the needs of the person with memory loss, your own well-being must be attended too as well. In fact, the well-being of the person you care for is directly tied to your own well-being. If you are not in good shape, then the person you care for will suffer the consequences.{/t}</p>
      <h4>{t}I must reach out and accept the help of others.{/t}</h4>
      <p>{t}Consequently, you need to seek out help, take time off, and replenish your energy. Someone else may not be a perfect substitute but others can be taught and trusted to provide temporary assistance. An important milestone is reached when you have put a plan in place to do something on a regular basis that you find enjoyable apart from the person with memory loss.{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-15" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Good Sources of Information{/t}</h2>
      <hr />
      <ul>
        <li>{t}Dancing on Quicksand: A Gift of Friendship in the Age of Alzheimer’s by Marilyn Mitchell. Boulder, CO: Johnson Books, 2002.{/t}</li>
        <li>{t}Learning To Speak Alzheimer’s by Joanne Koenig Coste, New York: Houghton Miflin Co., 2003.{/t}</li>
        <li>{t}The Majesty of Your Loving: A Couple\'s Journey through Alzheimer\'s by Olivia Hoblitzelle. Lyndonville, VT: Green Mountain Books, 2008.{/t}</li>
      </ul>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-3-slide-16" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Closing{/t}</h2>
      <hr />
      <p>{t}We have just finished lesson three.{/t}</p>
      <p>{t}Are there any questions about this lesson?{/t}</p>
      <p>{t}Chapters 6 and 7 in the book, Alzheimer’s Early Stages, relate to this class. Please read those chapters for more information about the issues we covered today. The next lesson will focus on Planning for the Future.{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
</div>
<div id="lesson-4">
  <div id="lesson-4-slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Planning for the Future{/t}</h2>
      <hr />
      <p>{t}Lesson Objectives:{/t}</p>
      <p>{t}To familiarize participants with effective ways for communicating with health care professionals.{/t}</p>
      <ul>
        <li>{t}To provide an overview on advance directives and legal planning.{/t}</li>
        <li>{t}To explain the difference between Medicare and Medicaid.{/t}</li>
        <li>{t}To explain respite options, including community-based programs and services.{/t}</li>
        <li>{t}To discuss the impact of a move on an individual with memory loss, highlighting types of residential care.{/t}</li>
      </ul>
      <p>{t}Welcome Back!{/t}</p>
      <p>{t}Welcome to the fourth lesson of MSML Online. The title of this lesson is “Planning for the Future.” In our previous lessones we have touched on changes that will impact the person experiencing memory loss, as well as challenges to those providing care: family members, friends and professionals.{/t}</p>
      <p>{t}We have a great deal of information to cover in this lesson. To best utilize time, be sure that your information needs and questions are addressed, please message the Forum/Blog if you are interested in learning more about:{/t}</p>
      <ul>
        <li>{t}strategies to effectively communicate with health care professionals,{/t}</li>
        <li>{t}advanced directives and legal planning,{/t}</li>
        <li>{t}Medicare and Medicaid,{/t}</li>
        <li>{t}respite options including community-based programs and services,{/t}</li>
        <li>{t}impact of a move on an individual with memory loss,{/t}</li>
        <li>{t}residential care options, including how to decide/choose residential care.{/t}</li>
      </ul>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
  </div>
</div>
<div id="lesson-5">
  <div id="lesson-5-slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Effective Ways of Coping and Caring{/t}</h2>
      <hr />
      <p>{t}Lesson Objectives:{/t}</p>
      <ul>
        <li>{t}To discuss the importance of “doing things,”{/t}</li>
        <li>{t}To consider the impact that the environment can have on participation in activities and tasks for a person experiencing memory loss,{/t}</li>
        <li>{t}To learn how to analyze and adapt tasks and activities, and{/t}</li>
        <li>{t}To review key points of the Making Sense of Memory Loss program.{/t}</li>
      </ul>
      <p>{t}Welcome!{/t}</p>
      <p>{t}Welcome to the final lesson of MSML Online.{/t}</p>
      <p>{t}Effective Ways of Coping and Caring{/t}</p>
      <p>{t}In this lesson, we will focus on effective ways of coping and caring. We’ll first learn about one of the most effective ways of coping and that is activity. In its purest form, “activity” means “doing.” In particular, for the first half of the lesson we will:{/t}</p>
      <ul>
        <li>{t}Discuss the importance of “doing”{/t}</li>
        <li>{t}Consider the importance of activities and tasks among persons with memory loss{/t}</li>
        <li>{t}Learn how to analyze and adapt tasks{/t}</li>
      </ul>
      <p>{t}Recognize the importance of “doing” in your life and in the life of your family member.{/t}</p>
      <p>{t}Think about when you meet someone new. What do you talk about? The first thing you do is probably to exchange names and a few pleasantries. As the conversation continues, however, you probably begin to talk about what you do – your occupation, your hobbies and interests. What we do is important to us, and helps other people understand us.{/t}</p>
      <p>{t}Think of your own life. What things do you enjoy doing?{/t}</p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
  </div>
</div>

<!-- close course -->
</div>
