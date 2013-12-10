<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach (array(
             '.lesson-1',
             '.lesson-2',
             '.activityLog') as $lesson) {
    $this->widget('ext.fancybox.EFancyBox', array('id' => $lesson, 'config' => array('width' => '1000px', 'height' => '1000px', 'arrows' => false, 'autoSize' => false, 'mouseWheel' => false)));
}
?>

<div class="small-masthead"
     style="background-image: url(<?php echo $this->getImagesUrl('spencer/126945521r.jpeg'); ?>);">
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

        <p>
            <a href="https://survey.vovici.com/se.ashx?s=4C32B0216020938B" target="_blank" class="button">Pre-Course
                Survey</a>
        </p>

        <p>
            <a href="https://survey.vovici.com/se.ashx?s=4C32B0216020938B" target="_blank" class="button">Post-Course
                Survey</a>
        </p>
    </div>
    <div class="box-sidebar one">
        <h3>Certificate of Completion</h3>

        <p>You must complete the first four Modules before accessing your Certificate of Completion. Click the button
            below to access your certificate where you will be able to manually add your name and date.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('spencer/CertificateOfCompletion_SpencerPowell.pdf'); ?>"
               target="_blank" class="button">Download Certificate</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('spencer/166312138.png'); ?>" id="certificate" alt="Image">
    </div>
    <div class="box-sidebar one">
        <h3>Facilitator: Sherrie All, PhD</h3>

        <p>Licensed clinical neuropsychologist specializing in brain fitness, healthy aging and cognitive enhancement.
            She is building a private practice in clinical neuropsychological assessment combined with interventions
            aimed at enhancing cognition and promoting healthy aging.</p>

        <p>
            <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button">Contact
                Facilitator</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('spencer/80608570.png'); ?>" alt="Facilitator" id="facilitator">
    </div>
</div>

<div class="column-wide">
    <h2 class="flowers">Spencer Powerll Online Training (SPOT)</h2>
    <?php // echo t($course->title); ?>

    <p>
        <?php echo t($course->description); ?>
    </p>

    <p style="color: #E80000; font-size: 10pt;">
        <strong>Disclaimer: </strong>We want to emphasize that there are still risk factors that we cannot control, so
        living a brain healthy lifestyle does not guarantee that you will not get dementia, just like living a heart
        healthy lifestyle does not guarantee you won’t have a heart attack.
    </p>

    <h4>Course Topic - Introduction</h4>
    <p>The field of brain health and brain fitness has exploded over the past decade with many new programs and applications emerging to help people think and perform better both now in their daily lives at work or at home and later in life as people age.  Maintaining independence later in life is a concern for many people, especially older adults, but even for younger people this can be a nagging concern.  Through the course of this program you will learn how investing in your brain health now can pay dividends both immediately and (zoom in on second picture) as you age.
    </p>

    <h4>Agenda</h4>

<ol>
    <li>Discuss Brain Health and Dementia
    </li>
    <li>Discuss Cognitive Reserve
    </li>
    <li>Discuss Brain Performance
    </li>
    <li>Review the Activity Log
    </li>
    <li>Complete Memory and Attention Excercises, and Course Recap
    </li>
</ol>


    <h4>Objectives</h4>
    <ul>
        <?php
        foreach ($course->objectives as $objective)
            echo '<li>' . t($objective->text) . '</li>';
        ?>
    </ul>

                <h4>SPOT - Introduction</h4>

                <ul class="modules">
                    <li>
                        <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button">Start Course</a>
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
                </ul>


    <h4>Resources</h4>

    <p>Please use these listed resources in the completion of this online course. Please contact your facilitator or the
        program director if you have additional resources you would like to see added here.</p>
    <ul id="resources">
        <li>
            <a href=" http://www.ncbi.nlm.nih.gov/pubmedhealth/PMH0008821/" target="_blank">PubMed Health</a>
        </li>
        <li>
            <a href="http://www.nih.gov/health/wellness/" target="_blank">National Institutes of Health</a>
        </li>
        <li>
            <a href="http://sharpbrains.com/" target="_blank">SharpBrains</a>
        </li>
    </ul>

    <h4>Optional Video - The Sandwich Generation</h4>

    <p>Filmmaker and photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two
        children when Winokurs 83-year-old father, Herbie, became too infirm to care for himself. At that moment they
        joined some twenty million other Americans who make up the sandwich generation, those who find themselves
        responsible for the care of both their children and their aging parents.</p>

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
<div id="course" class="hide">
<?php $clientScript->registerScript('question-answer-handler', "$('.course-slide .question').change(function() {" . "if($(this).find('select').val() == '1') {" . "$(this).find('.right-answer').removeClass('hide');" . "$(this).find('.wrong-answer').addClass('hide');" . "} else {" . "$(this).find('.right-answer').addClass('hide');" . "$(this).find('.wrong-answer').removeClass('hide');" . "}" . "});"); ?>
<div id="lesson-1">
<div id="lesson-1-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers"><?php echo t($course->title); ?></h2>
        <hr/>

<img src="<?php echo $this->getImagesUrl('spencer/134203608.png'); ?>" alt="image">
        <h4>Introduction Course</h4>
        <p>Welcome to the course! We are pleased you have decided to join us. Please contact your facilitator if you
            experience any difficulties or need help. Thank you!</p>

<!--
        <div id="question1" class="question">
            <p style="text-align: center;">
                <b>Have you taken the pre-course evaluation yet?</b> <br/>
                <select style="text-align: center;">
                    <option selected="selected" value="select">Select</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </p>
            <p class="right-answer hide">Great! Thank you! Please continue.</p>

            <p class="wrong-answer hide">
                No Problem! Please <a href="location.href('http://www.vovici.com/home_index.aspx" target="_blank">click
                    here</a> to participate.
            </p>
        </div>
-->

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Course &raquo;</a>
    </div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">Course Outline</h2>
        <hr/>
        <h4>
            Overview of the following topics:
        </h4>
        <ul>
            <li>
                <h5>Brain Health Now and Later</h5>
            </li>
<li>
<h5>Dementia and Cognitive Reserve</h5>
</li>
<li>
<h5>Brain Plasticity</h5>
</li>
<li>
<h5>Peak Performance</h5>
</li>
</ul>

<h5>Introduction to Course Format</h5>
<h5>Memory Exercise</h5>
<h5>Goal Setting</h5>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();"> Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">Brain Health</h2>
        <hr/>


<div class="box-grey">
<?php
    $this->widget(
                  'ext.JWplayer.JWplayer',
                  array(
                        'id' => 'spencer',
                        'config' => array(
                                          'image' => $this->createDownloadUrl(''),
                                          'width' => '540px',
                                          'height' => '400px',
                                          'levels' => array(
                                                            array('file' => $this->createDownloadUrl('videos/course1_snip1.mp4'))
                                                            )
                                          )
                        )
                  );
    ?>
</div>


</div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();"> Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">Cognitive Reserve</h2>
        <hr/>

        <p>video 2 here</p>


    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">Peak Performance</h2>
        <hr/>
            <p>video 3 here</p>


</div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">Activity Log</h2>
        <hr/>

        <p>Video 4 here, activity log example</p>


</div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">Memory Strategy</h2>
        <hr/>
        <p>text here

</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">Improving Attention</h2>
        <hr/>
        <p>
            One key way that we can lower our risk for dementia is through understanding and utilizing a theory that is
            central to this area of science, called the <strong>Theory of Cognitive Reserve</strong>. You can think of
            this as your brain’s 401(k) or retirement account.
        </p>

        <p>
            Simply put, the Theory of Cognitive Reserve is based on observations that <strong>no 2 brains respond to
                injury or illness in exactly the same way</strong>. There are people who can sustain a small amount of
            damage to their brains and lose a lot of brain function, and there are people who can sustain large amounts
            of damage and never develop dementia. <strong>What seems to differentiate these types of people is the
                amount of brain reserve that they have “stored in the bank” that can make up for the losses</strong>.
        </p>

        <p>So when planning financially for retirement, if you have a lot invested in your retirement account, you can
            survive losses - such as fluctuations in the market or an unexpected expense - much better if your account
            is bigger than if it were smaller. This principle seems to apply to our brains too, which serves as the
            basis for the theory of cognitive reserve. People with high levels of Cognitive Reserve have to sustain many
            more losses before crossing over the threshold to having dementia than people who have lower reserve.</p>

        <p>
            The keyword to learn from this is “Cognitive Reserve” – which is your<strong> brain’s reserve of both tissue
                and abilities</strong> that affects your risk for dementia. Or your Brain’s retirement account.
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">Weekly Goal Steps</h2>
        <hr/>
        <p>text here
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">Course Recap</h2>
        <hr/>
        <p>text here
            </p>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Course</a>
    </div>
</div>

<div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
        <div class="content">
            <h2 class="flowers">Contact Facilitator</h2>
            <hr/>
            <p>Please complete the form below to contact your facilitator.</p>

            <!--
            <div class="box-white">
                <?php /*
                $this->widget(
                    'ext.LDContactUsWidget.LDContactUsWidget',
                    array(
                        'captcha' => array(
                            'class' => 'ext.LDContactUsWidget.components.CUReCaptcha',
                            'config' => array(
                                'publicKey' => Yii::app()->params['reCaptcha']['publicKey'],
                                'privateKey' => Yii::app()->params['reCaptcha']['privateKey'],
                                'useAjax' => true
                            )
                        ),
                        'options' => array(
                            'htmlOptions' => array('class' => 'form')
                        )
                    )
                );
            */    ?>
            </div>
-->
        </div>
        <div class="buttons">
            <a href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();"> Close </a>
        </div>
    </div>
</div>
</div>