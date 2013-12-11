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
<h3>Facilitator: Sherrie All PhD</h3>

<p>Fake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake TextFake Text</p>

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
<p>Please click the button below to begin the course. This course consist of videos, handouts/downlaods, comprehension quetions, forum postings and text content.</p>
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

<p>Welcome to the course! We are pleased you have decided to join us. Please contact your facilitator if you experience any difficulties or need help. Thank you!</p>

</div>
<div class="buttons">
<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Course &raquo;</a>
</div>
</div>


<div id="lesson-1-slide-2" class="course-slide">
<div class="content">
<h2 class="flowers">Welcome</h2>
<hr />

<h4>Overview of the following topics:</h4>
<ul>
<li><h5>Brain Health Now and Later</h5></li>
<li><h5>Dementia and Cognitive Reserve</h5></li>
<li><h5>Brain Plasticity</h5></li>
<li><h5>Peak Performance</h5></li>
</ul>

<h5>Introduction to Course Format</h5>
<h5>Memory Exercise</h5>
<h5>Goal Setting</h5>

</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
<div class="content">
<p>Video 1 here</p>

<div class="box-grey">
<?php
    $this->widget(
                  'ext.JWplayer.JWplayer',
                  array(
                        'id' => 'TheSandwichGeneration',
                        'config' => array(
                                          'image' => $this->createDownloadUrl('videos/TheSandwichGeneration/poster.jpg'),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.m4v')),
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.webm')),
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.ogv'))
                                                            )
                                          )
                        )
                  );
    ?>
</div>




</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
<div class="content">
<p>Video 2 here</p>

<div class="box-grey">
<?php
    $this->widget(
                  'ext.JWplayer.JWplayer',
                  array(
                        'id' => 'TheSandwichGeneration',
                        'config' => array(
                                          'image' => $this->createDownloadUrl('videos/TheSandwichGeneration/poster.jpg'),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.m4v')),
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.webm')),
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.ogv'))
                                                            )
                                          )
                        )
                  );
    ?>
</div>


</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-5" class="course-slide">
<div class="content">

<p>Video 3 here</p>

<div class="box-grey">
<?php
    $this->widget(
                  'ext.JWplayer.JWplayer',
                  array(
                        'id' => 'TheSandwichGeneration',
                        'config' => array(
                                          'image' => $this->createDownloadUrl('videos/TheSandwichGeneration/poster.jpg'),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.m4v')),
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.webm')),
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.ogv'))
                                                            )
                                          )
                        )
                  );
    ?>
</div>


</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-6" class="course-slide">
<div class="content">

<p> Video 4 here, activity log tutorial</p>

<div class="box-grey">
<?php
    $this->widget(
                  'ext.JWplayer.JWplayer',
                  array(
                        'id' => 'TheSandwichGeneration',
                        'config' => array(
                                          'image' => $this->createDownloadUrl('videos/TheSandwichGeneration/poster.jpg'),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.m4v')),
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.webm')),
                                                            array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.ogv'))
                                                            )
                                          )
                        )
                  );
    ?>
</div>



</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-7" class="course-slide">
<div class="content">
<h2 class="flowers">Memory Strategy</h2>
<hr/>
<h4>Improve Memory by Improving Attention</h4>

<ul>
<li>Look Up and Around</li>
<li>Put in the Effort</li>
<li>Stay “Present”</li>
<li>Get your Hearing or Vision Checked</li>
</ul>

<p>
<a href="<?php echo $this->createDownloadUrl('spencer/spencer1_memoryStrategy1.docx'); ?>"
target="_blank" class="button">Download Handout</a>
</p>

</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>


<div id="lesson-1-slide-8" class="course-slide">
<div class="content">
<h2 class="flowers">Improving Attention</h2>
<hr/>

<h5>Manage Your Environment</h5>
<ul>
<li>Reduce Distractions and Interruptions
</li>
</ul>

<h5>Do One Thing at a Time</h5>
<ul>
<li>Multi-tasking is a Myth!</li>
<li>Multi-tasking can be toxic to the brain</li>
</ul>

<h5>Bribe yourself<h5>
<h5>Get Plenty of Rest</h5>
<ul>
<li>May need to see a sleep doctor</li>
<li>Resting your when you’re awake</li>
</ul>
<h5>Manage your Emotions</h5>

<p>You may be saying to yourself, “I’m just not good at paying attention.”  “I have ADD” or “I’ve always been bad at paying attention.”  Well keep in mind that the brain is plastic and very much capable of change.  In fact, new research is showing that through brain exercises and through the tips that you will learn in this class, even people with attention problems caused by brain injury and people with Attention Deficit / Hyperactivity Disorder (ADD/ADHD) can improve their attention.</p>

<p>Here are some of the strategies, and a excercise that are used to help people with attention deficits improving their attention – we list them here because they are also important for many of us:</p>

<p>
<a href="<?php echo $this->createDownloadUrl('spencer/spencer1_improvingattention.docx'); ?>"
target="_blank" class="button">Download Handout</a>
</p>

<p>
<a href="<?php echo $this->createDownloadUrl('spencer/attentinexcercise.docx'); ?>"
target="_blank" class="button">Download Excercise</a>
</p>



</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>


<div id="lesson-1-slide-9" class="course-slide">
<div class="content">

<h2 class="flowers">Weeky Goal Steps</h2>
<hr/>

<h4>Memory Goal:</h4>

<h5>Goal: Practice paying close attention to my surroundings for at least 30 seconds, 2 times a day for 4 days<h5>

<h5>Daily Reward: A spray of my favorite cologne or perfume</h5>

<h4>Behavior Goal:</h4>

<h5>Goal: Fill out activity log before bed at least 4 days in a row</h5>

<h5>Daily Reward: Read my favorite book before bed</h5>

<p><a href="<?php echo $this->createDownloadUrl('spencer/weeklygoalsteps.docx'); ?>" target="_blank" class="button">Download Excercise</a></p>


</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
</div>
</div>
<div id="lesson-1-slide-10" class="course-slide">
<div class="content">

<h2 class="flowers">Course Recap</h2>
<hr/>
<p>Thank you so much for particiatping in this course. Please contact your facilitator if you have any suggestions or recommednations on how we can make this course better.
</p>

<p>Please download the final handout below and submit your completed form back to your factiliator via email.</p>
<p><a href="<?php echo $this->createDownloadUrl('spencer/recap.docx'); ?>" target="_blank" class="button">Download Excercise</a></p>

</div>
<div class="buttons">
<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a>
<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left">Complete Course</a>
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
