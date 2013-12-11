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
<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2">TBD</a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a>
</li>
<li>
<a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3">TBD</a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
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
<h2 class="flowers"><?php echo t($course->description); ?></h2>
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
<div id="lesson-1-slide-13" class="course-slide">
<div class="content">
<h2 class="flowers">Dementia</h2>
<hr />
<table>
<tr>
<th>
<p>Reversible Dementias</p>
</th>
<th>
<p>Irreversible Dementias</p>
</th>
</tr>
<tr>
<td>
<ul>
<li>Toxic Effects of Medications</li>
<li>Infections</li>
<li>Metabolic disorders</li>
<li>Major depression</li>
<li>Brain tumors</li>
</ul>
</td>
<td>
<ul>
<li>Alzheimer’s Disease</li>
<li>Multi-infarct/Vascular</li>
<li>Parkinson’s Disease</li>
<li>Lewy Body Disease</li>
<li>Over 50 rare types</li>
</ul>
</td>
</tr>
</table>
<p>As you can see, dementia is an umbrella term that includes reversible and irreversible conditions.</p>
<h5>Reversible Dementias</h5>
<p>On the left hand side of this slide is a list of more common reversible conditions that sometime mimic irreversible conditions such as Alzheimer's.</p>
<h5>Irreversible Dementias</h5>
<p>Most dementias are irreversible in nature. Sometimes two or more types of these dementias may occur together as a "mixed dementia." There are several dozen types of dementia and the major types can be found on the Internet.</p>
<p class="forum">Search the Alzheimer's Association's website for greater explanations for these types of reversible and irreversible dementias. Choose one from each category, and provide a description for each one on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-14" class="course-slide">
<div class="content">
<h2 class="flowers">Medical Evaluation of Dementia</h2>
<hr />
<ul>
<li>History from the individual &amp; relative/friend</li>
<li>Mental status test</li>
<li>Clinical exam</li>
<li>Blood work</li>
<li>Brain scan</li>
<li>Only if indicated: Psychological testing, HIV test, Brain biopsy, PET scan, Lumbar puncture, EEG</li>
</ul>
<p>A medical evaluation is always needed to clarify the diagnosis so that both reversible and irreversible conditions can be identified, treated, and understood by all concerned.</p>
<p>Basic elements of a medical evaluation by a doctor consist of the following: an accurate history of the symptoms; a brief mental status test; a physical examination; blood tests (Complete Blood Count, Chemistry profile, thyroid function, syphilis serology, Vitamin B12, and Folate); and brain imaging through either a CT or MRI scan.</p>
<p>Sometimes additional tests are ordered for the sake of thoroughness in diagnosing the exact type of dementia. There is no single test, such as a blood test, available to diagnose AD, as is the case with diabetes, for example. However, when other disorders have been ruled out and common symptoms of AD such as progressive loss of memory have been documented, there is a high probability for obtaining an accurate diagnosis by an experienced physician.</p>
<div id="question1" class="question">
<p>
<b>Is a medical evaluation necessary to clarify the diagnosis of a reversible or irreversible dementia?</b>
<select>
<option selected="selected" value="select">Select</option>
<option value="1">Yes</option>
<option value="0">No</option>
</select>
</p>
<p class="right-answer hide">Correct! A medical evaluation is always needed to clarify the diagnosis.</p>
<p class="wrong-answer hide">Incorrect. Please review the content above again.</p>
</div>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-15" class="course-slide">
<div class="content">
<h2 class="flowers">Media Storm</h2>
<hr />
<p>MediaStorm is an award-winning interactive design and video production studio that works with top visual storytellers, interactive designers and global organizations to create cinematic narratives that speak to the heart of the human condition.</p>
<div style="width: 400px;" id="video">
<div style="height: 340px;">
<script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ccd9bb6ef492263&w=400&h=340&amp;lang=none"></script>
</div>
<div style="padding: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16px; color: #999999; background-color: #000000;">
With humor as well as unflinching honesty, <i>It Ain't Television... It's Brain Surgery</i> is Ray Farkas's first-person account of his own brain surgery, which he underwent in hopes of reducing the debilitating symptoms of Parkinson's Disease. See the project at <a href="http://mediastorm.com/publication/it-aint-television-its-brain-surgery" target="_blank" style="color: #0083c5;">http://mediastorm.com/publication/it-aint-television-its-brain-surgery</a>
</div>
</div>
<br />
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-16" class="course-slide">
<div class="content">
<h2 class="flowers">Criteria for probable Alzheimer's disease</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/160330106.png'); ?>" alt="image">
<ul>
<li>Dementia is evident without other disorders to account it</li>
<li>Deficits in at least two areas of cognition</li>
<li>Progressive worsening of recent memory and other functions</li>
</ul>
<p>Criteria have been established to guide physicians in making the diagnosis. In most cases, these criteria are useful to differentiate between AD and other types of dementia. Any doubts about the accuracy of the diagnosis should be checked by a second opinion from a medical specialist such as a neurologist. Most people who experience progressive loss of memory have AD. Therefore, the major focus of the rest of today’s class will be on this particular condition.</p>
<p class="forum">Please post any questions you have on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-17" class="course-slide">
<div class="content">
<h2 class="flowers">Prevalence of Alzheimer's disease by Age</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/121113384.png'); ?>" alt="image">
<p>AD is rather common among the older population. According to the Alzheimer's Association, an estimated 5.4 million Americans of all ages had Alzheimer's disease in 2012. This figure includes 5.2 million people age 65 and older, and 200,000 individuals under age 65 who have youngeronset Alzheimer's.</p>
<p class="forum">Taking into account the figures above, can you guess how many Americans have AD today? How many people in our state are estimated to have AD? Can you guess how many people are expected to have AD 40 years from now? Search the Internet to help with your answers, and post them to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-18" class="course-slide">
<div class="content">
<h2 class="flowers">Projected Growth of Persons with Alzheimer's disease</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/AAscreenshot.png'); ?>" alt="image">
<p>Based on projections of the older population in the coming decades, it is expected that the number of Americans with AD will grow dramatically.</p>
<p class="forum">Search the Alzheimer's Association's website for the most current facts on figures on the growth of AD. Record your findings on the Forum</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-19" class="course-slide">
<div class="content">
<h2 class="flowers">Dr. Alois Alzheimer</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/122568932.png'); ?>" alt="image">
<p>Alzheimer’s disease was first described in 1906 by Dr. Alois Alzheimer, a German neurologist and pathologist. He was the first scientist to describe the symptoms in a female patient and connect them to damaged areas in her brain. Following her death, Dr. Alzheimer performed an autopsy and found shrinkage of the brain as well as tiny abnormalities he referred to as tangles and amyloid plaques.</p>
<div id="question1" class="question">
<p>
<b>Alzheimer's disease is an irreversible, progressive brain disease that slowly destroys memory and thinking skills, and eventually even the ability to carry out the simplest tasks.</b>
<select>
<option selected="selected" value="select">Select</option>
<option value="1">True</option>
<option value="0">False</option>
</select>
</p>
<p class="right-answer hide">Correct!</p>
<p class="wrong-answer hide">Incorrect. Please ensure you understand what Alzheimer's disease is before continuing.</p>
</div>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-20" class="course-slide">
<div class="content">
<h2 class="flowers">Normal -&raquo; Mild Cognitive Impairment -&raquo; Alzheimer's disease</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/118564579.png'); ?>" alt="image">
<p>Experts today agree that what is called “early stage” AD is probably the result of many years of the disease slowly developing in the brain. In the late 1990s, researchers began to identify “mild cognitive impairment” or “MCI” as a very early sign of AD in many people. Persons with this condition show evidence of recent memory loss on formal testing but show no other brain impairments such as disorientation. Recent studies indicate that about half of people with MCI develop early stage AD within 5 years and most of them develop AD within 10 years. In other words, in addition to memory loss, another brain function will begin to show signs of deterioration.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-21" class="course-slide">
<div class="content">
<h2 class="flowers">Early Stage</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/120921047.png'); ?>" alt="image">
<table>
<tr>
<th>
<p>Function</p>
</th>
<th>
<p>Potential Signs</p>
</th>
</tr>
<tr>
<td>
<ul>
<li>Memory</li>
<li>Language</li>
<li>Orientation</li>
<li>Motor</li>
<li>Mood and behavior</li>
<li>Activities of daily living (ADLs)</li>
</ul>
</td>
<td>
<ul>
<li>Loss of recent memory</li>
<li>Mild aphasia</li>
<li>Seeks familiar people and places</li>
<li>Difficulty writing and using objects</li>
<li>Disinterest and depression</li>
<li>Needs reminders with ADLs</li>
</ul>
</td>
</tr>
</table>
<p>AD is slowly progressive and may last three to twenty years. The rate of progression varies from person to person. The disease tends to advance according to stages of severity but people can remain in the early stages for five years or longer. AD unfolds in subtle ways, not unlike normal absent‐mindedness, except with daily regularity. Early stage symptoms may not be noticed until the affected person or family realizes that a pattern has developed. Something may occur that makes symptoms more evident, such as an acute illness.</p>
<p class="forum">Based on your experience, do any of these early stage symptoms or signs look familiar to you? What were the first signs you noticed in your relative? Please record your responses on the Forum</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>Forgetting appointments, misplacing things, difficulty managing a checkbook, word finding problems, and loss of initiative are typical changes at this stage. Symptoms may be inconsistent, with "good days" and "bad days" making life unpredictable for all concerned. One’s ability to manage self‐care tasks is still intact at this point but reminders and supervision are needed with activities of daily living (ADLs) such as cooking, shopping, and paying bills.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-22" class="course-slide">
<div class="content">
<h2 class="flowers">Middle Stages</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/120921047.png'); ?>" alt="image">
<table>
<tr>
<th>
<p>Function</p>
</th>
<th>
<p>Potential Signs</p>
</th>
</tr>
<tr>
<td>
<ul>
<li>Memory</li>
<li>Language</li>
<li>Orientation</li>
<li>Motor</li>
<li>Mood and behavior</li>
<li>Activities of daily living (ADLs)</li>
</ul>
</td>
<td>
<ul>
<li>Chronic, recent memory loss</li>
<li>Moderate word finding difficulty</li>
<li>May get lost at times</li>
<li>Difficulty using objects, slowed walking</li>
<li>Possible depression and agitation</li>
<li>Needs reminders and help with most ADLs</li>
<li>Difficulties with IADLs</li>
</ul>
</td>
</tr>
</table>
<p>As AD progresses to the middle stages, symptoms become more obvious. Memory loss and disorientation worsen, language difficulties increase, and walking ability may slow. Independence with daily tasks becomes compromised. The ability to make health care and financial decisions is very questionable at this stage and others must assume the role of decision makers.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-23" class="course-slide">
<div class="content">
<h2 class="flowers">Late Stages</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/120921047.png'); ?>" alt="image">
<table>
<tr>
<th>
<p>Function</p>
</th>
<th>
<p>Potential Signs</p>
</th>
</tr>
<tr>
<td>
<ul>
<li>Memory</li>
<li>Language</li>
<li>Orientation</li>
<li>Motor</li>
<li>Mood and behavior</li>
<li>Activities of daily living (ADLs)</li>
</ul>
</td>
<td>
<ul>
<li>Mixes up past and present</li>
<li>Harder to communicate verbally</li>
<li>Cannot identify familiar people and places</li>
<li>Tremors, rigidity (at risk for falls)</li>
<li>Increased risk be behavioral disturbances</li>
<li>Needs reminders with all ADLs</li>
</ul>
</td>
</tr>
</table>
<p>In the late stages of AD, all brain functions become severely impaired. Speech and long‐term memory are significantly compromised at this point. Individuals may misidentify familiar people, places, and objects. Constant supervision of the person with late stage AD is required for the sake of safety and care.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-24" class="course-slide">
<div class="content">
<h2 class="flowers">Final Stages</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/120921047.png'); ?>" alt="image">
<table>
<tr>
<th>
<p>Function</p>
</th>
<th>
<p>Potential Signs</p>
</th>
</tr>
<tr>
<td>
<ul>
<li>Memory</li>
<li>Language</li>
<li>Orientation</li>
<li>Motor</li>
<li>Mood and behavior</li>
<li>Activities of daily living (ADLs)</li>
</ul>
</td>
<td>
<ul>
<li>No apparent link to past or present</li>
<li>Mute or few incoherent words</li>
<li>Seemingly oblivious to surroundings</li>
<li>Little spontaneous movement, swallowing difficulty)</li>
<li>Completely passive</li>
<li>Requires total care</li>
</ul>
</td>
</tr>
</table>
<p>If someone lives long enough to reach the final stages of AD, there is little or no language, little purposeful movement, and total reliance on others. Swallowing problems may become evident. Death usually results from an infection or pneumonia. At any point in the disease, other medical problems can worsen symptoms and make decline faster.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-25" class="course-slide">
<div class="content">
<h2 class="flowers">Changes in the Brain</h2>
<hr />
<ul>
<li>Key chemicals malfunction, disrupting communication among cells</li>
<li>Tiny abnormalities form: plaques and tangles</li>
<li>Communication between nerve cells is disrupted</li>
<li>Brain cells die and brain shrinks</li>
</ul>
<p>Most people think of the nervous system as the body’s electrical wiring. This is correct up to a point. Nerve cells transmit impulses much like wires transmit electricity. But unlike wires, which are connected at all times, brain cells do not touch one another. They have microscopic gaps between them called synapses. Nerve impulses must jump these gaps along the way and communicate with other brain cells. They do it with the help of chemicals called neurotransmitters. In AD, many brain chemicals are either insufficient or overabundant for reasons that are not well understood.</p>
<p>The tangles and plaques formed by AD represent the death of cells throughout the brain. The brain shrinks in size, losing as much as one‐third of its weight. Tangles consist of abnormal collections of twisted threads found within brain cells. Plaques consist of an abnormal deposit of a protein between brain cells called amyloid.</p>
<p>Although most changes due to the disease can only be seen at the microscopic level, in advanced cases of the disease, some abnormalities can be seen with the naked eye. The next few slides help us visualize the brain damage caused by AD.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-26" class="course-slide">
<div class="content">
<h2 class="flowers">Normal Brain versus Advanced AD Brain</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/alzheimer_brain.png'); ?>" alt="image">
<p>This is a human brain removed from the skull after death. On the left, this brain looks normal and appears free of disease. It weighs about three and a half pounds and it looks like a giant walnut.</p>
<p>On the right, notice the deep crevices in this brain compared to the plump brain in the last photo. This brain has shrunk in size and weight due to advanced AD. It is also loaded with plaques and tangles that one can see only with a microscope.</p>
<p>The dark spots in the middle are called ventricles that are spaces for the flow of blood and spinal fluid. As you can see, the difference between the two brains is quite dramatic. In this photo, the ventricles are greatly enlarged due to damage resulting from advanced AD. Most illnesses result in physical changes in a person’s body. For example, when someone has had a major stroke, it is usually easy to see the paralysis or weakness.</p>
<p>On the other hand, AD cannot be usually seen except for changes in a person’s memory, thinking and behavior. Yet this photo shows that such changes are caused by brain damage. It is important to keep this in mind when you sometimes wonder why a person with memory loss is acting in a peculiar way.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-27" class="course-slide">
<div class="content">
<h2 class="flowers">Definite Risk Factors for Alzheimer's disease</h2>
<hr />
<ul>
<li>Increasing age</li>
<li>Heart disease</li>
<li>Diabetes</li>
<li>Down Syndrome</li>
<li>Race</li>
<li>Family history; genetics</li>
</ul>
<p>Circumstances that put one at risk for diseases are referred to as risk factors. For example, inhaling tobacco smoke is known to increase one’s risk of getting lung and heart diseases. High blood pressure, high cholesterol levels, and obesity significantly increase one’s chances for heart disease. Identification of these risk factors has led to advances in prevention, treatments, and cures. There are clear risk factors for AD.</p>
<p class="forum">Use the Internet to help you find explanations and examples of how these circumstances put one at risk for diseases. Post your findings on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>It should be kept in mind that many conditions such as stroke, diabetes, cancer, and heart disease also tend to run in families. However, just because one’s parent had a certain disease does not mean that his or her children are destined to get it too. Other factors such as environmental risks must be considered.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-28" class="course-slide">
<div class="content">
<h2 class="flowers">Genetics &amp; Alzheimer's disease</h2>
<hr />
<ul>
<li>Under age 65</li>
<li>Less than 1% of affected persons</li>
<li>Three chromosomes identified thus far</li>
<li>APOE4: risk factor gene for onset late in life</li>
</ul>
<p>In rare cases, perhaps less than one percent of the total number, genetics plays a strong role in the development of AD in persons younger than age 65. This is often referred to as early onset AD. Thus far, a few genetic mutations have been identified that result in AD being passed from one generation to the next. This hereditary form is called: Familial Alzheimer’s Disease. Again, this occurs in a relatively small number of families in which symptoms may develop as early as 35 years of age. Research has focused on specific abnormalities of genes on several chromosomes.</p>
<p>AD typically occurs late in life, and one gene has been identified thus far that increases the likelihood of developing this form of the disease. The gene for Apolipoprotein E (ApoE) is located on chromosome 19. The ApoE gene comes in three varieties, called alleles: e2, e3, and e4. Everyone’s ApoE gene has two alleles, one inherited from each parent, so there are six possible combinations in any individual’s DNA. One e4 allele approximately doubles risk of AD and two e4 alleles boosts risk 8 to 10‐fold.</p>
<p>Although a blood test can identify which APOE alleles a person has, it cannot predict who will or will not develop Alzheimer's disease. It is unlikely that genetic testing will ever be able to predict the disease with 100 percent accuracy because too many other factors may influence its development and progression.</p>
<p>At present, APOE testing is used in research settings to identify study participants who may have an increased risk of developing Alzheimer's. This knowledge helps scientists look for early brain changes in participants and compare the effectiveness of treatments for people with different APOE profiles. Most researchers believe that APOE testing is useful for studying Alzheimer's disease risk in large groups of people but not for determining any one person's specific risk.</p>
<p>In doctors' offices and other clinical settings, genetic testing is used for people with a family history of early‐onset Alzheimer's disease. However, it is not generally recommended for people at risk of late‐onset Alzheimer's.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-29" class="course-slide">
<div class="content">
<h2 class="flowers">Possible Risk Factors for AD</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/91318735.png'); ?>" alt="image">
<ul>
<li>Environmental toxins</li>
<li>Low formal education &amp; low occupational attainment</li>
<li>Previous head trauma</li>
<li>Cerebrovascular disease</li>
<li>Dietary factors</li>
</ul>
<p>Possible risk factors are those suspected of being somehow linked to AD, but the linkage has not been proven. Weak or strong associations with AD may be attributed to a complex number of factors still unidentified. Possible risk for AD has been associated with the areas listed above.</p>
<div id="question1" class="question">
<p>
<b>The greatest known risk factor for Alzheimer's is advancing age.</b>
<select>
<option selected="selected" value="select">Select</option>
<option value="1">True</option>
<option value="0">False</option>
</select>
</p>
<p class="right-answer hide">Correct!</p>
<p class="wrong-answer hide">Incorrect. Search the Alzheimer's Association website for AD risk factors.</p>
</div>
<p class="forum">Search the Internet, and locate additional risk factors for AD and report your findings on the Forum</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-30" class="course-slide">
<div class="content">
<h2 class="flowers">Strategies for Medical Treatment</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/134501532.png'); ?>" alt="image">
<ul>
<li>Prevention of disease</li>
<li>Delay onset</li>
<li>Slow rate of progression</li>
<li>Treat primary symptoms (cognitive)</li>
<li>secondary symptoms (behavioral)</li>
</ul>
<p class="forum">Search the Internet for a detail explanation how how these strategies are used as medical treatments. Post your responses to the Forum</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-31" class="course-slide">
<div class="content">
<h2 class="flowers">FDA-Approved Treatments for Alzheimer's</h2>
<hr />
<h5>Cholinesterase Inhibitors</h5>
<ul>
<li>Donepezil</li>
<li>Rivastigmine</li>
<li>Tacrine</li>
<li>Galantamine</li>
</ul>
<p>While there is no cure for Alzheimer's disease, there are five prescription drugs approved by the U.S. Food and Drug Administration (FDA) to treat its symptoms.</p>
<p>Donepezil, galantamine, rivastigmine and tacrine are called "cholinesterase inhibitors." These drugs prevent the breakdown of a chemical messenger in the brain important for learning and memory. The fifth drug, memanatine, regulates the activity of a different chemical messenger in the brain that is also important for learning and memory. Both types of drugs help manage symptoms but work in different ways.</p>
<p>Understanding available treatment options can help you and the person with the disease cope with symptoms and improve quality of life.</p>
<h5>What are cholinesterase inhibitors?</h5>
<p>Cholinesterase inhibitors are prescribed to treat symptoms related to memory, thinking, language, judgment and other thought processes. Three different cholinesterase inhibitors are commonly prescribed:</p>
<ul>
<li>Donepezil (marketed as Aricept), which is approved to treat all stages of Alzheimer's disease</li>
<li>Galantamine (marketed as Razadyne), approved for mild to moderate stages.</li>
<li>Rivastigmine (marketed as Exelon), approved for mild to moderate Alzhe1nler's.</li>
</ul>
<p>Tacrine (Cognex), the first cholinesterase inhibitor, was approved in 1993 but is rarely prescribed today because of associated side effects, including possible liver damage.</p>
<p class="forum">Search the Internet to learn how cholinesterase inhibitors work, and post your findings on the Forum. Also, search and post the benefits of memantine and the common side effects of memantine.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<h5>On the horizon</h5>
<p>Scientists have made remarkable progress in understanding how Alzheimer's affects the brain. Their insights point toward promising new treatments to slow or stop the disease. Ultimately, the path to effective therapies is through clinical studies.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-32" class="course-slide">
<div class="content">
<h2 class="flowers">Participating in Research</h2>
<hr />
<ul>
<li>Experimental medications</li>
<li>Adventurous attitude required</li>
<li>Creteria for inclusion and exclusion</li>
<li>Informed consent</li>
<li>Other types of research studies</li>
</ul>
<p>All of the medications just mentioned underwent a rigorous testing process for many years prior to approval by the FDA. Testing first takes place with animals and then a small number of people to ensure safety and potential effectiveness. The next phase involves a large number of human subjects to determine whether or not a medication is effective. Volunteers are always needed to participate in this effort.</p>
<p>An adventurous attitude is required since it is not known if these experimental drugs are truly effective—that is the purpose of the research. Such drug studies require close cooperation among volunteers, their families, and medical staff. In spite of one’s willingness to participate in a given study, there is always a strict set of inclusion and exclusion criteria so that many people do not qualify for a variety of reasons.</p>
<p>All eligible participants in any research study must sign a consent form that spells out the risks and benefits of participation. Apart from drug studies, researchers conduct a wide variety of studies into the nature of AD and its treatment or prevention. Again, all such studies are subject to informed consent so that the rights of participants are protected.</p>
<p>If interested in exploring participation in drug studies or other research studies your local area, the Alzheimer’s Disease Education and Referral Center lists all current studies on it is website.</p>
<p>Many research studies now in progress are aiming to prevent or slow down the progression of AD. As mentioned earlier, some people exhibit persistent forgetfulness but lack any other symptoms of AD. They are referred to as having mild cognitive impairment and many develop additional symptoms of AD over time. Many drug trials today are aiming to slowly the course of AD in such persons.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-33" class="course-slide">
<div class="content">
<h2 class="flowers">Potential Treatments / Prevention</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/134389167.png'); ?>" alt="image">
<ul>
<li>Anti-Inflammatory Drugs</li>
<li>Antioxidant Agents</li>
<li>Statin drugs</li>
<li>Alternative Medicine</li>
<li>Vaccines</li>
</ul>
<p>These are drugs in various stages of testing. Several other approaches to treating and preventing AD are under investigation.</p>
<p class="forum">Search the Internet for explanations on each of these listed treatments / preventions, and post your findings on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-34" class="course-slide">
<div class="content">
<h2 class="flowers">Other Ways to Reduce Risk</h2>
<hr />
<ul>
<li>Physical Exercise</li>
<li>
<i>Use it or Lose It</i>
</li>
<li>Diet</li>
</ul>
<h5>Physical Exercise</h5>
<p>Several recent studies have shown that physical exercise may prevent or slow cognitive decline among otherwise healthy people. In this regard, walking just a few times weekly has been shown to be helpful compared to little or no activity. The benefits of exercise for people with AD have not been fully explored.</p>
<h5>Use it or Lose it</h5>
<p>Use it or lose it refers to the notion that keeping one’s brain active with intellectual, physical, and social pursuits may help prevent AD. There is growing evidence that keeping mentally active may reduce the risk of developing AD. Regardless of the actual benefit of this approach, it certainly cannot hurt to keep active. There are no bad side effects! Even if activities like reading books, attending lectures, or playing games such bridge or chess slightly reduce the odds of developing AD, they may be worthwhile.</p>
<h5>Diet</h5>
<p>As already mentioned, there is growing evidence that what may be good for the heart may also be good for the brain. Eating nutritious foods may be essential for a healthy heart and a healthy brain. Participants in one large study, who consumed fish once per week or more, had 60 percent less risk of AD compared with those who rarely or never ate fish. Total intake of n‐3 polyunsaturated fatty acids was also associated with reduced risk of AD. In a study of Chicago residents, eating foods rich with Vitamin E such as green leafy vegetables was associated with lower risk of AD. Future research will shed more light on types of food to take or avoid as ways to reduce the risk of AD.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-35" class="course-slide">
<div class="content">
<h2 class="flowers">Directions for Research</h2>
<hr />
<ul>
<li>Further identify risk factors for memory loss and underlying causes</li>
<li>Improve diagnostic tools</li>
<li>Develop better treatments</li>
<li>Improve approaches to caring for people</li>
<li>Reduce distress of families</li>
</ul>
<p>Despite huge increases in research funding over the past two decades aimed at finding the root causes of AD and other brain diseases, scientific progress usually occurs at a slow pace. Yet there is reason to hope for breakthroughs as thousands of researchers worldwide are working in several major areas.</p>
<p class="forum">Search the Internet for additional details on these listed research directions, and post your findings on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-36" class="course-slide">
<div class="content">
<h2 class="flowers">Good Sources of Information</h2>
<hr />
<h4>Closing</h4>
<p>Please know that this first class is the most technical in nature. Although there were not many opportunities for sharing your ideas, the remaining four classes offer plenty of time for your input. Facts about the medical causes and treatments for memory loss are important. However, we will spend the remaining weeks talking about how to cope with the practical, day‐to‐day challenges of living with someone with memory loss.</p>
<p>Finally, we wish to introduce the companion book, Alzheimer’s Early Stages: First Steps for Family, Friends and Caregivers. We recommend that you purchase it, as we will be recommending specific that reinforce key points covered in these classes.</p>
<p class="forum">Post your questions about this module to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Module</a>
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
<h2 class="flowers">Welcome Back!</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
<p>Welcome to the second module of MSML Online. One of the more frustrating and difficult aspects of memory loss is that the person's ability to communicate may be compromised. In this section, we will discuss how to adapt to these changes. We will cover these general topics and get into specifics along the way.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-3" class="course-slide">
<div class="content">
<h2 class="flowers">Agenda for Module 2</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/56174087.png'); ?>" alt="image">
<ul>
<li>Communication changes in early stages of memory loss</li>
<li>General principles for enhancing communication</li>
<li>Ways to encourage verbal expression</li>
<li>Avoiding communication pitfalls</li>
</ul>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-4" class="course-slide">
<div class="content">
<h2 class="flowers">
<i>What we see depends on where we sit</i>
</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/122422633.png'); ?>" alt="image">
<p>This quote speaks to the fact that your perception is crucial in making necessary accommodations to the challenges of caring for someone with memory loss. It also speaks to the fact that your relative often sees things in a much different way than you do. This is important to remember as we discuss the memory changes your family member may be experiencing and how this may affect his/her ability to communicate.</p>
<p>You and the person with memory loss may be experiencing the same reality but in different ways. For example, your relative may not be as upset with the changes in memory and communication as you might be. You can easily remember your relative as a completely capable individual whereas he or she may have slowly adapted to the changes in memory and thinking over time. It is typical for that person to lack insight into all of the changes that have taken place.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-5" class="course-slide">
<div class="content">
<h2 class="flowers">The Person's Level of Awareness</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/153742771.png'); ?>" alt="image">
<ul>
<li>Role of Denial</li>
<li>No Awareness</li>
<li>Partial Awareness</li>
<li>Much Awareness</li>
</ul>
<p class="forum">Search the Internet for explanations on each of these listed levels. Post your findings on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-6" class="course-slide">
<div class="content">
<h2 class="flowers">What is Communication?</h2>
<hr />
<ul>
<li>Sending and receiving messages</li>
<li>Speaking and listening</li>
<li>Reading and writing</li>
<li>Gestures, facial expression, body language</li>
</ul>
<h4>Communication</h4>
<p>Communication is the exchange of information, ideas, and emotions. It is how we convey our thoughts, wishes, and feelings.</p>
<p>In order for communication to occur, the message needs to not only be sent, but received. We need to not only hear but to also understand the message – otherwise, communication has not really occurred. We have all had experiences where we thought we made ourselves clear, only to find that the other person interpreted the message differently than we intended! The following exercise is designed to demonstrate the importance of good communication and that it involves more than just words.</p>
<p>Communication is complicated! It involves not just speaking our minds, but also listening to the other person. As this exercise teaches us, it entails speaking, listening, and watching others for cues.</p>
<p>Listening is not as easy as it seems. To truly listen, we need to be completely attentive to the other person. Often, we may think we are listening to the other person when we are actually distracted. Maybe what we are doing, e.g., driving a car or trying to decide which kind of soup to buy at the grocery store, distracts us. We are distracted because we are thinking about something else while the person is talking, or because we are busy thinking about what our response to the person will be. It is hard to truly listen – and it takes practice.</p>
<p>Reading and writing are forms of communication. Some of us respond better to messages that are received in writing than we do to verbal messages. Some of us may find that it helps to write things down as a way of thinking them through. Sometimes we have trouble communicating because our preferred way of communicating may not be the other person’s. For example, maybe you like to write notes or send emails to someone who prefers to talk face‐to‐face or over the telephone. It is important to be sensitive to how we communicate and make sure we communicate appropriately.</p>
<p>Body language is another important component of communication. Gestures, facial expressions, and body posture are often as important in communication (if not more) as the words.</p>

<!--
<div id="question1" class="question">
<p><b>Short-term memory is the information we are currently aware of or thinking about.</b>
<select>
<option selected="selected" value="select"> Select </option>
<option value="1"> True </option>
<option value="0"> False </option>
</select>
</p>
<p class="right-answer hide"> Correct! </p>
<p class="wrong-answer hide"> Please understand these various types of memory before moving forward. </p>
</div>

-->

</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-7" class="course-slide">
<div class="content">
<h2 class="flowers">Types of Memory</h2>
<hr />
<ul>
<li>Sensory memory</li>
<li>Working memory</li>
<li>Short-ter memory</li>
<li>Long-term or remote memory</li>
<li>Episodic memory</li>
<li>Procedural memory</li>
</ul>
<h5>Types of Memory</h5>
<p>There are different kinds of memory. Understanding them and how they work can help us to understand some of the communication challenges faced by persons with dementia.</p>
<p class="forum">Search the Internet for examples or explanations on each of these listed types of memory. Post your findings to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>It is important to understand the different types of memory so that we can see how impairment in these may affect one’s ability to communicate. Note that people with early stage memory loss tend to have more problems with working and short‐term memory than with long‐term, episodic and procedural memory. When conversing with someone with memory loss, it is important to remember that they may have difficulty recalling recent events or may need more time to retrieve the information.</p>
<p>Next, we are going to look at some of the changes that may occur with communication as memory becomes impaired.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-8" class="course-slide">
<div class="content">
<h2 class="flowers">Changes in Communication</h2>
<hr />
<ul>
<li>Word finding</li>
<li>Comprehending</li>
<li>Digressing and repeating</li>
<li>Reading and writing</li>
<li>Difficulty understanding abstract concepts</li>
</ul>
<p>Word finding refers to that tip of the tongue phenomenon that we all experience from time to time. We know what we want to say but just cannot immediately find the word. People who have memory loss experience this phenomenon to such a degree that it interferes with their ability to communicate.</p>
<p>The comprehension of information often becomes impaired. The person may have a difficult time tracking conversations or following instructions with more than one step.</p>
<p>The person with memory loss is more likely to digress during conversations – jumping from the original topic to another related one. Once the person digresses, they may have a difficult time remembering the original topic of conversation. Because of changes in memory, it is also common for the person with memory loss to repeat himself/herself, forgetting what has recently been said.</p>
<p>Reading and writing may be affected. The person may have difficulty understanding written material or may not be able to communicate clearly in writing.</p>
<p>People with memory loss often have difficulty with abstract concepts. Many people have trouble with talking on the telephone because they may rely more on the body language and facial expressions of others when communicating. The person may have a difficult time comprehending the conversation, may not remember to whom he is speaking, or may not recall the conversation later.</p>
<p class="forum">What communication challenges with your relative have you noticed?</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-9" class="course-slide">
<div class="content">
<h2 class="flowers">Other Factors That May Affect Communication</h2>
<hr />
<ul>
<li>More distracted by noise, motion</li>
<li>Fear of making mistakes</li>
<li>Attention problem that may appear to be hearing loss</li>
</ul>
<h5>More distracted by noise and/or motion</h5>
<p>As memory becomes impaired, the person with memory loss may find that he has to concentrate very hard in order to follow conversations. Anything that interferes with the ability to concentrate, e.g. noise or movement, may make it even more difficult for the person.</p>
<p class="forum">If you want to have a conversation with a person with memory loss and you sense that she becomes easily distracted, what could you do? Record your response on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<h5>Fear of making mistakes</h5>
<p class="forum">Has anyone here had the experience of burning something on the stove or the oven? Record that experience on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>If you do something like that, others tend to write it off to having a bad day or being distracted, right? But if a person with memory loss does the same thing it is looked at differently and the person may no longer be allowed to cook. The stakes are much higher, so the fear of making mistakes is greater. You may need to adjust to this by giving the person with memory loss more time to do things, and be as patient as possible.</p>
<h5>Attention problems may appear to be hearing loss</h5>
<p>People who are distracted or who have difficulty concentrating may sometimes miss bits and pieces of a conversation. This can sometimes make it seem as though the person has a hearing problem. On the other hand, do not rule out hearing loss as a possible issue if the person is having problems hearing when the conversation is happening in a place with few distractions.</p>
<p class="forum">So, what can we do to help overcome these challenges? Record your responses on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-10" class="course-slide">
<div class="content">
<h2 class="flowers">Communication Tips</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/138282407.png'); ?>" alt="image">
<ul>
<li>Eliminate distractions</li>
<li>Gain the person's attention</li>
<li>Give reassurance</li>
<li>Be a patient and active listener</li>
<li>Be an astute observer</li>
<li>Try not to challenge or correct mistakes</li>
<li>Maintain a sense of humor</li>
</ul>
<p class="forum">Using your own experience, or by searching the Internet, post on the Forum some examples using the above listed communication tips.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-11" class="course-slide">
<div class="content">
<h2 class="flowers">Elements of Nonverbal Communication</h2>
<hr />
<ul>
<li>Tone of voice</li>
<li>Body language</li>
<li>Facial expressions</li>
<li>Gestures</li>
</ul>
<h5>"It is often not what you say, but how you say it."</h5>
<p>As we discussed at the beginning of the module, nonverbal communication refers to the things that we do in addition to what we say. The most basic of these are tone of voice, body language, and facial expressions.</p>
<p>
We are all familiar with the saying, <i>"it is not what you say, but also how you say it."</i> We have all had experiences where we were put off by a person's tone of voice or facial expression, even if what they said was not really all that offensive.
</p>
<p>Nonverbal communication can be very important when having conversation with people with memory loss.</p>
<p>We are going to take a little time to discuss this, because it is so important.</p>
<p class="forum">On the Forum, please post your responses to the following questions.</p>
<ul class="forum">
<li>Can you think of times when someone’s nonverbal communication spoke louder than their words?</li>
<li>Do you know anyone who “talks with their hands” or whose face is very expressive?</li>
<li>What are some ways that nonverbal communication both enhances and detracts from conversations?</li>
<li>Has anyone in the group had an experience in which someone’s nonverbal communication either hindered the conversation or helped the conversation?</li>
</ul>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>Nonverbal communication becomes especially important when having a conversation with someone with memory loss.</p>
<p>A calm tone of voice can reassure a person who is frustrated or anxious. It can also help to keep us calm. Our own anxiety and anger escalates when our voices get louder, and of course the person to whom we are talking becomes upset as well. As hard as it can be to do, keeping your voice tone calm, low, and reassuring can help to keep situations from getting out of control.</p>
<p>Body language and facial expressions are other concerns. If your words are calm but your body language is tense or your facial expression does not match what you are saying, the message will be mixed. The person with memory loss may react to the look on your face or your body language instead of what is being said.</p>
<p class="forum">Think of a time when you talked to someone who you knew was not telling the truth. Their words may have been convincing, but somehow you knew something was not right. How did you know this? What gave them away? Post your responses to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>
The saying, <i>"it is not what you say; it is how you say it"</i> is important to remember in all forms of communication, but especially when talking to someone with memory loss.
</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-12" class="course-slide">
<div class="content">
<h2 class="flowers">Encouraging Verbal Expression</h2>
<hr />
<ul>
<li>
Allow circumlocution - <i>talking around</i>
</li>
<li>Allow time for processing</li>
<li>Keep conversations on track</li>
<li>
Enable ventilation - <i>letting off steam</i>
</li>
<li>Offer limited choices if needed</li>
</ul>
<p class="forum">Search the Internet for examples or explanations using these listed verbal expressions. Post your findings to the Forum.</p>
<p class="forum">For example: What is your favorite color? is an open‐ended question. Think about all of the choices that we actually make when we answer this question. First of all, we need to remember the meaning of the word color. Then, we need to remember what it means to have a favorite color. Next, we need to think of the whole palette of colors until we come to the one we like the best and we need to identify its name. So this can be a more complex process than you might imagine. What seems like a simple question, in fact, has many layers of decisions and things to think through in order to answer it correctly.</p>
<p class="forum">How can we simplify this question? Post your response on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-13" class="course-slide">
<div class="content">
<h2 class="flowers">Avoid These Common Pitfalls…</h2>
<hr />
<ul>
<li>Arguing</li>
<li>Giving orders</li>
<li>Oversimplifying</li>
</ul>
<h5>Arguing</h5>
<p>It is hard to win an argument with someone who is experiencing memory loss, because his or her view of things may be very different from yours. Let's say that your Aunt Mae can’t remember having gone to a restaurant the day before, and is upset over the doggie bag in the refrigerator because she claims, “I did not put that there, and I’m not going to eat someone else’s leftovers!”</p>
<p>Our natural inclination is to set things right and use facts to prove our point. But if the person truly does not remember the experience of going to the restaurant, no amount of facts will change her mind. It won't help to pull out the calendar to show Aunt Mae that she wrote down 6 pm ‐ dinner at Andy’s Restaurant with Susan or showing her the receipt, or even showing her a matchbook from the restaurant. Aunt Mae does not remember the experience. For her it simply never happened.</p>
<p>So arguing with her is going to frustrate both of you. Before arguing about something like this, you need to stand back and ask yourself, Is this really worth it? If a person’s safety is at stake, the answer might be yes. But in a situation like this one, it may be better to say, I’ll just take this out of your refrigerator. You will have avoided a needless argument.</p>
<h5>Giving orders</h5>
<p>No one likes to be told what to do, especially by our spouses or other family members. There is a world of difference between Joe! Will you take out the trash already? and Joe, I’d really appreciate it if you would take out the trash.</p>
<p>Sometimes, people with memory loss do not respond to our requests the way we would like them to respond. We’ll talk about this more in Class 5, but breaking tasks down into smaller steps may be the key. Maybe Joe does not take out the trash because he can’t remember all of the steps involved in this task. He used to be in charge of recycling and separating everything, and now he gets confused by all of the containers. As a result, he avoids having anything to do with the trash. If you sense this is the problem, you need to give Joe a smaller task to accomplish. For instance, ask him to stack the newspapers and put them in the recycling bin, rather than being responsible for separating and carrying out all of the trash.</p>
<h5>Oversimplifying</h5>
<p>The goal is to simplify only if needed, and without being condescending. In other words, simplify when necessary and do not dumb down. People with early memory loss may be very sensitive to the feeling that they are being treated as a child, or disrespectfully.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-14" class="course-slide">
<div class="content">
<h2 class="flowers">Share What You Know with Others</h2>
<hr />
<ul>
<li>Presume that others do not know the extent of the difficulties</li>
<li>Provide information about communication tips</li>
<li>Model and give feedback</li>
</ul>
<p>Last but not least, make sure that you share this information with your friends and other family members. Friends and other family members may not understand the extent of the difficulties you and your loved one are facing. Do not be afraid to let them know about what is going on. They may be able to better support you and your family member if they understand the situation, and they are more likely to get involved if they are informed about what is happening.</p>
<p>Do not assume that everyone will automatically know how to deal with your family member's memory loss. They will not. Presume that they do not know and teach them what you have learned. Some people may be uncomfortable or may react in an unusual way. So provide information for your family and friends about what works and what does not. Give them tips on how to communicate with your family member. Model what works so that they can learn from you. Give them feedback about how they are doing, especially when they are doing a good job. Tell them about Alzheimer's Association's educational programs and support groups so that they can learn more if they prefer. Give them a brochure or book to read.</p>
<p>Above all, do not give up, and do not allow yourself to get too frustrated. You will occasionally lose patience with your family member. No one is perfect. Learn to forgive yourself for your bad days or bad moments just as you forgive your family member for hers. Here are some resources that may assist you in understanding what a person with memory loss is experiencing, and how you may be able to assist them.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-2-slide-15" class="course-slide">
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
<h2 class="flowers">Welcome Back!</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/135545925.png'); ?>" alt="image">
<p>Welcome to the third module of MSML Online.</p>
<p class="forum">Before you begin, post any questions or comments related to module two, "Communication Strategies", to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-3" class="course-slide">
<div class="content">
<h2 class="flowers">Module Three: Making Decisions</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/100640358.png'); ?>" alt="image">
<h5>
<i>"Not to decide is to decide."</i>
</h5>
<p>In this module, we go into depth about the changes that occur in the relationship between you and your relative as a result of memory loss. Your role gradually must change so that you become the chief decision maker in the relationship.</p>
<p class="forum">Are you the chief decision maker in your household? Post your response to the Forum</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-4" class="course-slide">
<div class="content">
<h2 class="flowers">Shifting the Balance of Power</h2>
<hr />
<ul>
<li>Preserve independence and meet dependence</li>
<li>Make decisions - along or together</li>
<li>Quietly take the lead as if a great dancer</li>
</ul>
<h5>Preserve independence and meet dependence</h5>
<p>When you begin to recognize the limits of your relative’s memory and thinking abilities, you become better equipped to address his or her needs in practical decisions such as driving a car, handling money, and the like. These decisions require your active involvement. Helping someone to make such decisions may seem uncomfortable at first, especially if he or she does not recognize limits with memory and thinking. Unfortunately, he or she no longer has the capacity to be fully self‐sufficient although many abilities remain intact. The balance of power must begin to shift. You must decide how and when to keep a delicate balance between honoring the person’s need for independence versus the legitimate need for dependence. This requires much tact and patience in making decisions.</p>
<p class="forum">Let’s consider the following example:</p>
<p class="forum">Your 81‐year‐old mother has Alzheimer’s disease and lives alone. One day she says that you are responsible for managing her finances, after you found out that her bills were overdue. She is now upset because she feels you are trying to control her life. You make all the decisions because you think you know what is best for me. I am not a child just because I can’t do what I used to do.</p>
<p class="forum">How might you address her complaint? Take about 5 minutes to brainstorm a solution that is satisfactory to both parties, and post your response to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<h5>Making decisions – alone or together</h5>
<p>Instead of involving someone with memory loss in every decision and run the risk of causing confusion, it is best to narrow the choices. For example, if a big decision, such as a move, is looming, it would be chaotic to involve the person with memory loss. However, it would be appropriate to involve the person with decisions like what furniture to keep or discard.</p>
<h5>Quietly take the lead as if a great dancer</h5>
<p>One way to visualize the lead role you must now take is to consider a couple engaged in ballroom dancing. Although the man takes the lead, the woman who is his partner is actively responding to his cues and steps. This is done in a spirit of cooperation but it requires that each person accepts an agreed upon role. You must now learn how to take the lead in the relationship, but to the extent possible, seek the cooperation of the other person.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-5" class="course-slide">
<div class="content">
<h2 class="flowers">Cartoon of a young and old woman:</h2>
<hr />
<p>
<i>Honey, I have been through two world wars, the Great Depression, taught 3,297 children, administered four elementary schools and outlived every one of the people I worked with. I am 89 years old and you are telling me it is bedtime?</i>
</p>
<p>These two people are clearly not in harmony. This scene typifies the universal need for control over one’s destiny and how things can go wrong if that need is challenged. There is no reason to argue about anything as long as you take the right approach. Keep in mind that although the behavior of people with memory loss may appear childlike at times, adults are not children and should be respected as adults. Each person has a long personal history and is accustomed to making choices independently. To the extent possible, choices must be given so that conflicts can be prevented.</p>
<p class="forum">How might this particular scenario have been played out differently? Take a few minutes for ideas, and post your response to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>Now let's turn to handling some practical issues…</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-6" class="course-slide">
<div class="content">
<h2 class="flowers">Driving a Car - Continue or Stop?</h2>
<hr />
<ul>
<li>Mixed results of research studies thus far</li>
<li>No clear markers for risk of accidents</li>
<li>No disease specific public policy in most states</li>
<li>Personal freedom versus public safety</li>
<li>Voluntary versus involuntary ways to restrict or stop driving</li>
</ul>
<p>Driving a car is not only a means of getting around but is also a symbol of personal independence. AD often impairs brain functions that affect driving ability but sometimes those functions are spared so that, for a while, driving may continue without difficulty.</p>
<p class="forum">Search the Internet and find examples or explanations for each of the listed items above, and post your findings to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<p>A number of rehabilitation centers have specially trained staff members, usually occupational therapists, who can assess a person’s driving capacity through a series of tests. These exams can cost around $250‐ 400 but it may be worthwhile to get a professional opinion. A physician might recommend this course of action before a decision is reached.</p>
<p>The privilege of driving is so terribly important for some people that taking it away may harm the self esteem of the person affected by this decision. It is important to consider alternative means of transportation to minimize the impact of this decision. Does your local area have bus transportation for seniors? Is your family prepared to take on the “chauffeur” role?</p>
<p>If persuasion alone is insufficient to keep an unsafe driver off the road, taking action through the state department of motor vehicles to revoke that person’s license may be the only alternative. Other options are to disable the car or get rid of it altogether.</p>
<p class="forum">Please share a story about you have addressed the issue of driving your their family, on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-7" class="course-slide">
<div class="content">
<h2 class="flowers">Handling Health &amp; Financial Decisions</h2>
<hr />
<p>
<i>When I die, I want to go peacefully, like my grandfather did, in his sleep; not screaming like the other passengers in his car.</i>
</p>
<p>This humorous quote illustrates the serious consequences of unsafe driving. It is better to err on the side of safety when considering whether or not a person with memory loss should continue driving. Again, the issue of personal freedom versus public safety must be carefully weighed.</p>
<ul>
<li>Capacity exists unless given up voluntarily</li>
<li>Personal freedom versus risk of exploitation</li>
<li>Mismanagement of money and medications</li>
<li>Means to share or give up authority</li>
</ul>
<h5>Capacity exists unless given up voluntarily</h5>
<p>Making personal decisions over one’s health and financial affairs is a personal right that is threatened by memory loss. Assessing when and how to intervene is difficult unless the person with memory loss voluntarily gives up this authority.</p>
<h5>Personal freedom versus risks</h5>
<p>As memory loss advances over time, the risks of continuing to manage one's own affairs will become more obvious to others, but in the early stage there may be legitimate differences of opinion about the person’s ability to handle these affairs alone.</p>
<p>Nevertheless, due to the person's impaired memory and judgment, someone else must be in a position of monitoring risks. Otherwise, problems such as failing to pay important bills can emerge.</p>
<h5>Mismanagement of finances and medical compliance</h5>
<p>What are some of the risks? Persons with memory loss can lose track of money or stop paying bills. They may also be at risk of exploitation by others. They can forget to take their medication(s), take too much or too often, all of which can lead to a health crisis.</p>
<p>It is fairly easy to assess if someone with memory loss is having trouble with managing finances or taking medication. It is important to raise these issues in a delicate manner in order to maintain trust and enlist the person's cooperation.</p>
<p class="forum">Please share a story on this topic by posting it to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
<h5>Means to share or give up authority</h5>
<p>At the next class, we will discuss legal steps such as Powers of Attorney in order to ensure that someone is responsible for handling financial and health care decisions.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-8" class="course-slide">
<div class="content">
<h2 class="flowers">Handling Other Household and Personal Tasks</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/200380838-001.png'); ?>" alt="image">
<ul>
<li>Over-learned tasks are preserved</li>
<li>Difficulty with new &amp; unfamiliar tasks</li>
<li>Following a sequence of steps</li>
</ul>
<p>Generally, the ability to handle personal care tasks like bathing and dressing remain intact in the early stages. Such things have been done so often that they tend to happen almost automatically, but some instances of forgetting these basics may occur from time to time. More complex tasks such as cooking a meal or fixing a broken appliance are often problematic.</p>
<p>Anything requiring a prescribed sequence of steps for completion may be disrupted due to memory loss. As a result, the person with memory loss tends to avoid new or unfamiliar tasks that require learning or memory beyond their capacity to be successful.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-9" class="course-slide">
<div class="content">
<h2 class="flowers">Traveling</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/82090084.png'); ?>" alt="image">
<ul>
<li>Unfamiliar places, people &amp; schedule may increase confusion</li>
<li>May also be an enjoyable time together</li>
<li>Weigh risks &amp; benefits for all concerned</li>
<li>Take necessary precautions</li>
</ul>
<p>Like anything unfamiliar, traveling to new or different places may be more stressful, but should not be ruled out. However, going alone is too risky and increases the chance of becoming lost or confused. With proper planning and guidance, traveling with a relative or friend may be an enjoyable activity. Other precautions should be taken to minimize the chance of becoming lost.</p>
<p class="forum">What are some steps that might be taken to prevent or minimize confusion? With proper planning, how might you handle a crisis such as the person with memory loss getting lost while away from home? Post your responses to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-10" class="course-slide">
<div class="content">
<h2 class="flowers">Marital Intimacy</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/87352733.png'); ?>" alt="image">
<ul>
<li>Impact varies on persons &amp; couples</li>
<li>Physiological &amp; psychological consequences</li>
<li>Patterns of behavior may change over time</li>
<li>Possible need for assessment &amp; intervention</li>
</ul>
<p>Intimacy and sexuality are important issues for couples in which one partner is affected by memory loss. These important aspects of a relationship invariably change due to memory loss. The partner with memory loss slowly loses the capacity for shared closeness. Likewise, sexual functioning diminishes or ceases altogether. In rare cases, the sexual interest of the person with memory loss increases.</p>
<p>The well partner usually experiences a diminished sexual interest due to the changes of providing care although the need for non-sexual intimacy may remain strong. Couples and individuals need to know that changes in this realm of the relationship are normal. Specific situations may call for further assessment and problem solving. There is no reason for embarrassment. Please let us know of you are having any special problems in this regard.</p>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-11" class="course-slide">
<div class="content">
<h2 class="flowers">Challenges for Families</h2>
<hr />
<ul>
<li>History re-emerges, for better or worse</li>
<li>Uneven division of labor among members</li>
<li>Roles are often unclear</li>
<li>Different levels of acceptance/denial</li>
</ul>
<p>Although major responsibility of caring for a loved one with memory loss often falls on the shoulders of just one person, other family members living locally or at a distance and have their own personal reactions to the situation.</p>
<h5>History re‐emerges, for better or worse</h5>
<p>Each family has its own unique history of grappling with past problems. Some families may have worked well together, while other families may have lacked cooperation among their members. Some family members may get along while others may disagree and share bad feelings toward each other. How a family responds to the needs of a loved one with memory loss, and the primary person who provides care, depends largely on that family’s past experience.</p>
<h5>Uneven division of labor among members</h5>
<p>As already noted, one family member usually assumes most responsibilities of caring for someone. Traditionally, this has meant a spouse, a daughter or daughter‐in‐law. This person’s role is vital to the well being of the person with memory loss. However, the primary caregiver, in terms of time and effort, usually makes enormous sacrifices. It is essential for everyone in the family to recognize the primary caregiver’s key role and to share in the responsibilities to the extent possible. Some family members will initiate action or gladly accept assigned duties whereas others might refuse to help.</p>
<p class="forum">Search the Internet for examples or explanations for the third and fourth above listed bullet points, and post your findings to the Forum.</p>
<p class="forum">Has anyone here been involved in a family meeting? Please share the details on the Forum.</p>
<p class="forum">Search the Internet for handouts or downloadable forms that help organize family meetings. Please share your results on the Forum.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-12" class="course-slide">
<div class="content">
<h2 class="flowers">Telling Others: Pros and Cons</h2>
<hr />
<table>
<tr>
<th>
<p>Pros</p>
</th>
<th>
<p>Cons</p>
</th>
</tr>
<tr>
<td>
<ul>
<li>Educate others about the nature of disease</li>
<li>Create opportunities for others to help</li>
<li>Put everyone concerned at ease</li>
</ul>
</td>
<td>
<ul>
<li>
<i>“What they do not know won't hurt them”</i>
</li>
<li>Negative stereotypes associated with Alzheimer’s disease</li>
<li>Risk of social isolation</li>
</ul>
</td>
</tr>
</table>
<p>Another issue related to autonomy is how and when the diagnosis of AD or another form of dementia is conveyed to other people. This is a highly personal decision. Some people are reluctant to share the news with others while others are quite open about it. However, disclosing the diagnosis will become necessary as symptoms become more obvious over time. Most people figure things out anyway, long before the news is shared.</p>
<p class="forum">On the Forum, list some reasons on the pro-side and the con-side.</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-13" class="course-slide">
<div class="content">
<h2 class="flowers">Recognizing Reactions of Others</h2>
<hr />
<ul>
<li>Rally your supporters</li>
<li>Accept hibernators</li>
<li>Enlighten armchair quarterbacks</li>
</ul>
<h5>Rally your supporters</h5>
<p>Caring for someone with memory loss requires practical help and moral support from others on a regular basis. You are fortunate if you have family members and friends who can fill this need. These helpers may be instrumental in preserving your physical and mental health. Most people delay asking for help or do not take advantage of help when it is offered. Now is the time to rally your supporters!</p>
<h5>Accept hibernators</h5>
<p>On the other hand, there are people in your life whose absence from the scene may surprise and disappoint you. You need to be prepared for dealing with those who are not helpful. Your own well‐being is too important to be derailed by them. We refer to such people as "hibernators." They are the people who might be expected to be of service, but excuse themselves from helping out in any meaningful capacity. Like bears in winter, they cannot handle the bad weather and retreat into the privacy and security of their own lives. For whatever reasons, they cannot or will not play a supportive role.</p>
<p>Trying to engage hibernators seldom succeeds despite your repeated efforts. It is difficult to understand them and avoid harsh judgment. However, bitterness and resentment can become self‐destructive. It may not be possible to forgive hibernators for their lack of help, yet it is essential to forget counting on them. Appreciating the efforts of those who are involved will contribute to your well‐being.</p>
<h5>Enlighten armchair quarterbacks</h5>
<p class="forum">
Can you define the term, "<i>armchair quarterback?</i>" Post your answer to the Forum.
</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-14" class="course-slide">
<div class="content">
<h2 class="flowers">Getting Others Involved</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/78806140.png'); ?>" alt="image">
<p>So, how do you get others involved? You do this by:</p>
<ul>
<li>Explaining the facts of the disease;</li>
<li>Inform them of how the disease is affecting you and the person you love;</li>
<li>Identify the types of help needed;</li>
<li>Show appreciation for the concern and help provided; and</li>
<li>Develop new relationships by attending support groups, finding others who can relate with your situation.</li>
</ul>
<div id="question1" class="question">
<p>
<b>Positive peer pressure can be one of the most powerful motivators around.</b>
<select>
<option selected="selected" value="select">Select</option>
<option value="1">True</option>
<option value="0">False</option>
</select>
</p>
<p class="right-answer hide">Correct!</p>
<p class="wrong-answer hide">Incorrect. Please search the Internet for examples of how to get others involved.</p>
</div>
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-15" class="course-slide">
<div class="content">
<h2 class="flowers">Major Milestones</h2>
<hr />
<img src="<?php echo $this->getImagesUrl('msml/98381623.png'); ?>" alt="image">
<ul>
<li>The relationship has changed -- I now lead it</li>
<li>I must change, not the person with the disease</li>
<li>I can learn how to cope effectively</li>
<li>I have limits and mistakes will be made</li>
<li>My own well-being is important too</li>
<li>I must reach out and accept the help of others</li>
</ul>
<p>Based on our experience with family members and friends of people with memory loss, we have identified six major milestones that indicate if someone is coping well. These milestones may not be reached within a month or even a year. Everyone moves along the road to acceptance at a different pace and in a unique way. These statements appear to be signs of healthy coping.</p>
<p class="forum">Search the Internet for examples or explanations of the above listed major milestones, and post your findings on the Forum</p>
<img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image">
</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-3-slide-16" class="course-slide">
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
