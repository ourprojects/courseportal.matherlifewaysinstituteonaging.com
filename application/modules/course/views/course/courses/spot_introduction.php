<?php
    
    $this->breadcrumbs = array('Courses' => $this->createUrl('course/'), t($course->title));
    $clientScript = Yii::app()->getClientScript();
    $clientScript->registerCssFile($this->getStylesUrl('course.css'));
    
    foreach(array(
                  '.lesson-1',
                  '.lesson-2',
                  '.lesson-3',
                  '.activityLog',) as $lesson)
	$this->widget(
                  'ext.fancybox.EFancyBox',
                  array('id' => $lesson,
                        'config' => array('width' => '1000',
                                          'height' => '1000',
                                          'arrows' => false,
                                          'autoSize' => false,
                                          'mouseWheel' => false))
                  );
    
    ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('spencer/CC000596.png'); ?>);">
<h1 class="bottom">
<?php echo t($course->title); ?>
</h1>
</div>
<div id="sidebar">

<div class="box-sidebar one">
<h3>Activity Log</h3>
<p>Please click the button below to access your personal Activity Log.</p>
<p>
<?php
    echo CHtml::button('Activity Log', array('onclick' => '$("#activityLog").dialog("open")', 'class' => 'button'));
    ?>
</p>
<?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array('id' => 'activityLog', 'options' => array('title' => 'Activity Log', 'autoOpen' => false, 'modal' => true, 'width' => 720, 'maxWidth' => 720, 'maxHeight' => 1000),));
    $this->widget(
                  'course.widgets.SpencerPowell.ActivityLogWidget',
                  array('id' => 'spencerPowell')
                  );
    $this->endWidget('zii.widgets.jui.CJuiDialog');
    ?>
</div>



<div class="box-sidebar one">
<h3>Course Evaluations</h3>
<p>Please click the button below to access the pre-course and post-course surveys. Participation is anonymous.
Please complete each survey at the appropriate time.</p>
<p><a href="https://survey.vovici.com/se.ashx?s=4C32B0216020938B" target="_blank" class="button">Pre-Course Survey</a></p>
<p><a href="https://survey.vovici.com/se.ashx?s=4C32B0216020938B" target="_blank" class="button">Post-Course Survey</a></p>
</div>

<div class="box-sidebar one">
<h3>Certificate of Completion</h3>

<p>Click the button below to access your certificate once you have successfully completed the module. You will
be able to manually add your name, date, and course title.</p>

<p>
<a href="<?php echo $this->createDownloadUrl('spencer/CertificateOfCompletion_SpencerPowell.pdf'); ?>" target="_blank"
class="button">Download Certificate</a>
</p>
<img src="<?php echo $this->getImagesUrl('spencer/166312138.png'); ?>" id="certificate"
alt="Image">
</div>
<div class="box-sidebar one">
<h3>Facilitator: Ellen Ziegemeier, MA</h3>

<p>Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She
earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for
various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver
training.</p>

<p>
<a href="" class="button">Contact Facilitator</a>
</p>
<img src="<?php echo $this->getImagesUrl('spencer/80608570.png'); ?>" alt="Facilitator"
id="facilitator">
</div>


</div>

<!-- start main content section here -->

<div class="column-wide">
<h2 class="flowers">
<?php echo t($course->title); ?>
</h2>
<p>
<?php echo t($course->description); ?>
</p>

<h4>Objectives</h4>
<ul>
<?php
    foreach($course->objectives as $objective)
    echo '<li>' . t($objective->text) . '</li>';
    ?>
</ul>

<h4>Agenda</h4>

<ol>
<li>Discuss Brain Health and Dementia</li>
<li>Discuss Cognitive Reserve</li>
<li>Discuss Brain Performance</li>
<li>Review the Activity Log</li>
<li>Complete Memory and Attention Excercises, and Course Recap</li>
</ol>

<h4>Course Content</h4>
<ul class="modules">
<li>
<a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button">Start Course</a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
</li>
<li>
<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button">TBD</a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a>
</li>
<li>
<a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3 button">TBD</a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
</li>
</li>
</ul>

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
<h2 class="flowers"><?php echo t($course->title); ?></h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/154418413.png'); ?>" alt="image">
<h4>Developers</h4>
<p>This educational program was jointly developed by:</p>
<h5>
<a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a>
</h5>
<p>Mather LifeWays Institute on Aging creates Ways to Age Well for older adults by conducting translational research and education for professionals who serve them.</p>
<h5>
<a href="http://www.alz.org" target="_blank">Alzheimer's Association ‐ Greater Illinois Chapter</a>
</h5>
<p>The Alzheimer's Association is the leading, global voluntary health organization in Alzheimer's care and support, and the largest private, nonprofit funder of Alzheimer's research.</p>
<h4>Use of Information</h4>
<p>Any person is hereby authorized to view the information available from this guide for informational purposes only. No part of the information on this guide can be redistributed, copied, or reproduced without prior written consent of Mather LifeWays Institute on Aging.</p>
<h4>Copyright</h4>
<p>Information and materials of Mather LifeWays Institute on Aging included in its guides are protected by the copyright laws of the United States and international treaties.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Course &raquo;</a>
</div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
<div class="content">
<h2 class="flowers">Welcome</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
<p>We are delighted that you are interested in MSML Online. This five‐part online course is intended to help family members of someone in the early stages of memory loss to meet the challenges they face now and in the future. Research evaluation has shown that participation in this online course increases family members’ knowledge and improves coping skills with respect to their relatives’ memory and behavior changes.</p>
<p>MSML Online is primarily intended to educate families with a relative who has been diagnosed with the early stages of Alzheimer's disease or a related dementia. Families with a relative who has not yet been diagnosed with one of these conditions may also benefit from participation. Individuals and families facing the later stages of dementia should be directed to programs that better suit their needs. Likewise, persons with memory loss should be encouraged to attend education and support programs specifically suited to them.</p>
<p>It is our experience that this course is essential for your success in acquiring knowledge and coping skills.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
<div class="content">
<h2 class="flowers">Media Storm</h2>
<hr />
<p>Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur's 83-year-old father, Herbie, became too infirm to care for himself.</p>
<div id="video" style="width: 400px;">
<div style="height: 340px;">
<script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ce9beaabc886268&w=400&h=340&amp;lang=none"></script>
</div>
<div style="padding: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16px; color: #999999; background-color: #000000;">
Millions of middle-aged Americans are caring for their children as well as their aging parents. When filmmaker-photographer pair Julie Winokur and Ed Kashi took in Winokur's 83-year-old father, they decided to document their own story. See the project at <a href="http://mediastorm.com/publication/the-sandwich-generation" target="_blank" style="color: #0083c5;">http://mediastorm.com/publication/the-sandwich-generation</a>
</div>
</div>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-4" class="course-slide">
<div class="content">
<h2 class="flowers">Course Overview</h2>
<hr />
<p>The course is divided into five Each module is approximately two to three hours. Modules build upon each other, so it is recommended that the agenda be followed as prescribed.</p>
<p>Module One ‐ Overview of Memory Loss and Related Symptoms, is an introduction of class leaders and participants. Discussion of the medical aspects of memory loss, causes of memory loss, the need for a medical evaluation, drug treatments, and the current state of research.</p>
<p>Module Two ‐ Communication Strategies, is an overview of communication changes typical in early memory loss. Familiarize participants with general principles for maintaining communication with a person experiencing early memory loss.</p>
<p>Module Three ‐ Making Decisions, addresses practical issues in everyday life such as driving a car, handling health and financial decisions, or managing household tasks.</p>
<p>Module Four ‐ Planning for the Future, addresses a number of ways to prepare for changes that are likely to occur over the course of progressive memory loss. The need for legal and financial planning and other community resources are covered.</p>
<p>Module Five ‐ Effective Ways of Coping and Caring, addresses how to involve the person with memory loss in a variety of activities and discusses ways for family members to take care of themselves.</p>
<h4>Companion Book</h4>
<p>
<a href="http://www.amazon.com/Alzheimers-Early-Stages-Friends-Caregivers/dp/0897933974" target="_blank">Alzheimer’s Early Stages: First steps for family, friends and caregivers.</a>
</p>
<p>We recommend you read this book while participating in MSML Online. Recommended chapters at the start of the course reinforce the course content.</p>
<img src="<?php echo $this->getImagesUrl('msml/logo04.jpg'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-5" class="course-slide">
<div class="content">
<h2 class="flowers">Course Components</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/153539296.png'); ?>" alt="image">
<p>It is important to note that every effort has been made to include accurate information, but sometimes health care professionals have differing opinions. Also, future scientific advances may make some of this information outdated. The developers of this course will make periodic revisions as needed. We want to encourage participants to address their specific concerns with licensed professionals. We can offer general information and guidance for participants to seek out solutions to their unique challenges.</p>
<p>This program was developed as an overview for families on what to expect as early memory loss progresses. Each module is meant to provide basic information only. Following this course, you may wish to locate content experts who can address specific issues such as legal and financial planning.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-6" class="course-slide">
<div class="content">
<h2 class="flowers">Course Effectiveness</h2>
<hr />
<p>MSML Online has undergone numerous revisions. The program it is based on, MSML, went through several formal evaluations to demonstrate its effectiveness.</p>
<p>Research evaluation was conducted among more than 200 participants in the original program. In one study, good outcomes were reported in terms of increased knowledge and improved coping skills at post‐course and six months later (Kuhn and Mendes de Leon, 2001). Similar positive outcomes plus improved self‐confidence were reported by another group (Kuhn and Fulton, 2004). Likewise, when the education program was implemented in nine chapters of the Alzheimer’s Association, participants reported improvements in their knowledge and coping skills.</p>
<p>Outcome measures used in this original research included:</p>
<ol>
<li>A 15‐item Knowledge about Memory Loss and Care Test, (Kuhn, King, and Fulton, 2005);</li>
<li>A 10‐item Measure of Self‐Efficacy (Fulton and Kuhn, 2004) and;</li>
<li>The 7‐item memory sub‐scale of the Revised Memory and Behavior Problems Checklist (Teri et al., 1992).</li>
</ol>
<h5>References</h5>
<div id="resources">
<ul>
<li>Kuhn D, Mendes de Leon, C. (2001). Evaluation of an educational intervention with relatives of persons in the early stage of Alzheimer’s disease. Research on Social Work Practice, 11, 531‐548.</li>
<li>Kuhn D., Fulton BR. (2004). Efficacy of an educational program for relatives of persons in the early stages of Alzheimer’s disease. Journal of Gerontological Social Work, 42(3), 109‐130.</li>
<li>Kuhn D, King SP, Fulton BF. (2005). Development of the Knowledge about Memory Loss and Care test. American Journal of Alzheimer’s Disease, 20(1):41‐49.</li>
<li>Teri, L., Truax, P., Logsdon, R., Uomoto, J., Zarit, S., and Vilatiano, P.P. (1992). Assessment of behavioral problems in dementia: The Revised Memory and Behavior Problems Checklist. Psychology and Aging, 7, 622‐631.</li>
</ul>
</div>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-7" class="course-slide">
<div class="content">
<h2 class="flowers">Module 1: Overview of Memory Loss &amp; Related Symptoms</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/164088989.png'); ?>" alt="image">
<h4>Purposes</h4>
<ul>
<li>Introduce Class Leader(s) and participants and give an overview of the course</li>
<li>Explain major medical causes of memory loss</li>
<li>Ensure that a medical evaluation is done to explore reasons for memory loss</li>
<li>Explain symptoms of Alzheimer’s disease and related dementias</li>
<li>Describe current and proposed medical treatments</li>
<li>Describe research efforts to treat or prevent memory loss</li>
</ul>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-8" class="course-slide">
<div class="content">
<h2 class="flowers">Introductions</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/72968269.png'); ?>" alt="image">
<p class="forum">We will begin by asking you to say something about who you are and what brings you here. Please answer these questions on the Forum:</p>
<ul class="forum">
<li>What is your relationship with the person who is experiencing memory loss?</li>
<li>How long have you noticed their problem with memory or thinking?</li>
<li>What is the name of the medical condition or diagnosis, if known, that accounts for the problem?</li>
</ul>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">

<!--


<p>As you can see, dementia is an umbrella term that includes reversible and irreversible conditions.</p>
<div id="question1" class="question">
<p><b>Have you ever visited the Alzheimer's Assocation website?</b>
<select>
<option selected="selected" value="select"> Select </option>
<option value="1"> Yes </option>
<option value="0"> No </option>
</select>
</p>
<p class="right-answer hide"> Great! We will use this resource throughout this course. </p>
<p class="wrong-answer hide"> Please familiarize yourself with their website. </p>
</div>
-->
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-9" class="course-slide">
<div class="content">
<h2 class="flowers">Who We Are</h2>
<hr />
<ul>
<li>Name</li>
<li>Relationship</li>
<li>How Long Ago was Noted?</li>
<li>Diagnosis</li>
</ul>
<h4>Goals of the Program</h4>
<p>This five‐week series of classes is intended to help you meet the current challenges of caring for someone in the early stages of memory loss. This condition is usually due to a medical condition such as Alzheimer’s disease or a related dementia. Therefore, this first session focuses on medical reasons for memory loss and its treatments. If your relative has not had a thorough medical evaluation yet, we hope this information will encourage you to seek one right away. This first class is also intended to give you other medical information. The remaining classes provide other types of information and guidance for coping with your relative’s memory loss.</p>
<p>Memory loss and other signs of mental decline have profound effects on the lives of individuals and families. Nevertheless, we are convinced that a good quality of life can still be maintained for all concerned by learning to make changes in lifestyle and outlook. For many family members, this involves a change in relationships and priorities. At times the demands may seem overwhelming. This educational series is aimed at helping you make decisions about how and when to make changes in your lifestyle, both now and in the future.</p>
<p>In writing the content for these classes, the developers spent many years talking to countless people with memory loss and their family members. They believe that there is no single way of coping successfully. Everyone must find ways that suit their own particular needs or situation, but it can be done. Those who have met the challenges of memory loss have taught us about the need for flexibility, patience, humor, faith, and friendship. Such qualities are developed over time. It is our sincere hope that a solid understanding of memory loss in the early stages will assist you in this process.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-10" class="course-slide">
<div class="content">
<h2 class="flowers">Agenda: MSML Online</h2>
<hr />
<ul>
<li>Module 1: Overview of Memory Loss &amp; Related Symptoms</li>
<li>Module 2: Communications Strategies</li>
<li>Module 3: Making Decisions</li>
<li>Module 4: Planning for the Future</li>
<li>Module 5: Effective Ways of Coping &amp; Caring</li>
</ul>
<p>The agenda for these five modules include these general topics. We strongly encourage you to participate in all five modules as the information of each class flows into the next one. In this first module, an overview of memory loss and a host of brain diseases known as dementias will be given. Again, this information is mainly medical in nature.</p>
<p>Module number two covers communication skills that will help you and others in caring for your relative. Module three prepares you for the major decisions that need to be made as memory loss progresses: when to stop driving; health; and financial decisions. In module number four, planning for the future is the focus.</p>
<p>Finally, in module five we talk about how to keep your relative engaged in meaningful activities and the need to take steps to care for yourself. It is our belief that if you take good care of yourself, your relative with memory loss will be better off too.</p>
<p class="forum">To make sure that we address your questions, please tell us what questions you have on the Forum.</p>
<p>In this first class, we will address the following questions:</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<ul>
<li>What causes memory loss?</li>
<li>How are brain diseases diagnosed?</li>
<li>What are the symptoms and stages of Alzheimer's disease?</li>
<li>How is memory loss treated?</li>
<li>What is being done in the area of medical research?</li>
</ul>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-11" class="course-slide">
<div class="content">
<h2 class="flowers">Definition of Dementia</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/135095760.png'); ?>" alt="image">
<ul>
<li>Deterioration of at least two brain functions, including memory</li>
<li>A syndrome, not a diagnosis</li>
<li>
In the past, referred to as senility or <i>hardening or the arteries</i>
</li>
</ul>
<p>Dementia is not a specific disease. It is an overall term that describes a wide range of symptoms associated with a decline in memory or other thinking skills severe enough to reduce a person's ability to perform everyday activities. Alzheimer's disease accounts for 60 to 80% of cases. Vascular dementia, which occurs after a stroke, is the second most common dementia type. But there are many other conditions that can cause symptoms of dementia, including some that are reversible, such as thyroid problems and vitamin deficiencies.</p>
<p>Dementia is often incorrectly referred to as senility or senile dementia, which reflects the formerly widespread but incorrect belief that serious mental decline is a normal part of aging.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-12" class="course-slide">
<div class="content">
<h2 class="flowers">Brain Functions</h2>
<hr />
<ul>
<li>Memory</li>
<li>Orientation</li>
<li>Language</li>
<li>Judgment</li>
<li>Perception</li>
<li>Attention</li>
<li>Ability to perform tasks in sequence</li>
</ul>
<p>Dementia typically unfolds gradually over a period of many years but it can begin suddenly or unexpectedly. It affects some or all of these brain functions listed below.</p>
<p class="forum">Search the Internet for examples of how dementia affects some of these brain functions listed above, and report your findings on the Forum.</p>
<p class="forum">Did you ever forget a name or forget an appointment or get lost? What did it feel like at the time? Please describe those experiences on the Forum</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>Imagine how difficult it would be to experience this type of problem on a regular basis. We address the experience of living dementia during the next module.</p>
<p>Is everyone familiar with terms like congestive heart failure, liver failure and kidney failure? When the brain fails to do its work, dementia is the appropriate medical term.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
</div>


<div id="lesson-2">
<div id="lesson-2-slide-1" class="course-slide">
<div class="content">
<h2 class="flowers">Communication Strategies</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/135810412.png'); ?>" alt="image">
<h4>Purposes:</h4>
<ul>
<li>To give an overview of communication changes typical in early memory loss.</li>
<li>To familiarize participants with general principles for maintaining communication with a person experiencing early memory loss.</li>
<li>To describe several ways to encourage verbal expression.</li>
<li>To review common communication pitfalls, and how to avoid them.</li>
</ul>
<div id="question1" class="question">
<p>
<b>Does Alzheimer's disease affect communication?</b>
<select>
<option selected="selected" value="select">Select</option>
<option value="1">Yes</option>
<option value="0">No</option>
</select>
</p>
<p class="right-answer hide">Correct! People with Alzheimer's lose particular communication abilities during the early, middle, and late stages of the disease.</p>
<p class="wrong-answer hide">Incorrect. Please review Module One.</p>
</div>
</div>
<div class="buttons">
<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
</div>
</div>


<div id="lesson-2-slide-2" class="course-slide">
<div class="content">
<h2 class="flowers">Good Sources of Information</h2>
<hr />
<ul>
<li>Coping with Communication Challenges in Alzheimer’s Disease by Marie T. Rau, San Diego, CA: Singular Publishing Company, 1993.</li>
<li>My Journey into Alzheimer’s Disease by Robert Davis. Carol Stream, lL: Tyndale House Publishers, 1989.</li>
<li>Steps to Enhancing Communication: Interacting with Persons with Alzheimer’s Disease (brochure) available through the Alzheimer’s Association.</li>
</ul>
<h4>Closing</h4>
<h5>In this module, we have learned:</h5>
<ul>
<li>Typical communication changes experienced by persons with early memory loss,</li>
<li>General principles for enhancing communication with a person experiencing early memory loss,</li>
<li>Ways to encourage verbal expression, and</li>
<li>How to avoid communication pitfalls.</li>
</ul>
<p>
For more ideas about communication strategies, please refer to chapters 5 and 8 of the book, <i>Alzheimer's Early Stages</i>. Chapter 5 is especially helpful in understanding the communication challenges faced by persons with memory loss. If possible, read these chapters during the coming week.
</p>
</div>
<div class="buttons">
<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Module</a>
</div>
</div>
</div>



<div id="lesson-3">
<div id="lesson-3-slide-1" class="course-slide">
<div class="content">
<h2 class="flowers">Making Decisions</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/142532454.png'); ?>" alt="image">
<h4>Purposes</h4>
<ul>
<li>Understand the shifting balance of power in the relationship,</li>
<li>Address practical issues in everyday life such as driving a car, handling health &amp; financial decisions or managing household tasks,</li>
<li>Share the diagnosis and involved others in helping out.</li>
</ul>
<div id="question1" class="question">
<p>
<b>There are different kinds of memory. Understanding them can help us to understand some of the communication challenges faced by persons with dementia.</b>
<select>
<option selected="selected" value="select">Select</option>
<option value="1">True</option>
<option value="0">False</option>
</select>
</p>
<p class="right-answer hide">Correct!</p>
<p class="wrong-answer hide">Incorrect. Please review module two.</p>
</div>
</div>
<div class="buttons">
<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
</div>
</div>





<div id="lesson-3-slide-2" class="course-slide">
<div class="content">
<h2 class="flowers">Good Sources of Information</h2>
<hr />
<ul>
<li>Dancing on Quicksand: A Gift of Friendship in the Age of Alzheimer's by Marilyn Mitchell. Boulder, CO: Johnson Books, 2002.</li>
<li>Learning To Speak Alzheimer's by Joanne Koenig Coste, New York: Houghton Miflin Co., 2003.</li>
<li>The Majesty of Your Loving: A Couple's Journey through Alzheimer's by Olivia Hoblitzelle. Lyndonville, VT: Green Mountain Books, 2008.</li>
</ul>
<h4>Closing</h4>
<p>We have just finished module three</p>
<p class="forum">Please post any questions about this module to the Forum.</p>
<p>
Contact your class leader in order to address specific issues that did not get answered on the Forum. Chapters 6 and 7 in the book, <i>Alzheimer's Early Stages</i>, relate to this class. Please read those chapters for more information about the issues we covered today. Next module will focus on planning for the future. Thanks your for participating.
</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left">Complete Module</a>
</div>
</div>


</div>
</div>
<!-- used this div below to correct open div with no closing somewhere above -->
