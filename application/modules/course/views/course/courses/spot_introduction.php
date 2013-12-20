<?php
    
    $this->breadcrumbs = array('Courses' => $this->createUrl('course/'), t($course->title));
    $clientScript = Yii::app()->getClientScript();
    $clientScript->registerCssFile($this->getStylesUrl('course.css'));
    
    foreach(array(
                  '.lesson-1',
                  '.lesson-2',
                  '.activityLog',) as $lesson)
	$this->widget(
                  'ext.fancybox.EFancyBox',
                  array('id' => $lesson,
                        'config' => array('width' => '1000',
                                          'min-height' => '720',
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
<p>This course consist of videos, handouts, comprehension quetions, forum postings and text content.</p>
<ul class="modules">
<li>
<a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button"> &rarr; &rarr; Start Course &larr; &larr;  </a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
</li>
</ul>

<h4>Facilitator: Sherrie All, PhD</h4>
<p>Dr. All has supported Mather LifeWays Insitute on Aging for 2 years. She researched and developed the course content and is the Director and Principle for the Chicago Center for Cognitive Wellness.</p>
<ul class="modules">

<li>
<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button">Contact Facilitator</a>
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
<img src="<?php echo $this->getImagesUrl('spencer/134203608.png'); ?>" alt="image">

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
                        'id' => 'course1_snip1',
                        'config' => array(
                                          'image' => $this->createDownloadUrl('videos/spencer_introduction/posterhere.png'),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip1.m4v')),
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip1.webm')),
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip1.ogv'))
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
                        'id' => 'course1_snip2',
                        'config' => array(
                                          'image' => $this->createDownloadUrl('videos/spencer_introduction/posterhere.png'),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip2.m4v')),
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip2.webm')),
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip2.ogv'))
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
                        'id' => 'course1_snip3',
                        'config' => array(
                                          'image' => $this->createDownloadUrl('videos/spencer_introduction/posterhere.png'),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip3.m4v')),
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip3.webm')),
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip3.ogv'))
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
                        'id' => 'course1_snip4',
                        'config' => array(
                                          'image' => $this->createDownloadUrl('videos/spencer_introduction/posterhere.png'),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip4.m4v')),
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip4.webm')),
                                                            array('file' => $this->createDownloadUrl('videos/spencer_introduction/course1_snip4.ogv'))
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
<p>Please compplete the form below to contact your facilitator.</p>

<div class="box-white">
<?php
    $this->widget(
                  'ext.LDContactUsWidget.LDContactUsWidget',
                  array(
                        'captcha' => array(
                                           'class' => 'ext.LDContactUsWidget.components.CUReCaptcha',
                                           'config' => array(
                                                             'reCaptcha' => Yii::app()->getComponent('reCaptcha'),
                                                             'useAjax' => true
                                                             )
                                           ),
                        'options' => array(
                                           'htmlOptions' => array('class' => 'form')
                                           )
                        )
                  );
    ?>
</div>


</div>
<div class="buttons">
<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left">Close</a>
</div>
</div>


</div>
</div>