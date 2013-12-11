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

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('spencer/126945521r.jpeg'); ?>);">
    <h1 class="bottom"><?php echo t($course->title); ?></h1>
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
        <img src="<?php echo $this->getImagesUrl('spencer/80608570.png'); ?>" alt="Facilitator" id="facilitator">
    </div>
</div>

<div class="column-wide"><h2 class="flowers"><?php echo t($course->title); ?></h2>

    <p><?php echo t($course->description); ?></p>

    <h4>Agenda</h4>

<ol>
    <li>Discuss Brain Health and Dementia</li>
    <li>Discuss Cognitive Reserve</li>
    <li>Discuss Brain Performance</li>
    <li>Review the Activity Log</li>
    <li>Complete Memory and Attention Excercises, and Course Recap</li>
</ol>

    <h4>Objectives</h4>
    <ul><?php foreach ($course->objectives as $objective) echo '<li>' . t($objective->text) . '</li>';?></ul>
                <ul>
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
   </div>

<!-- Course Starts here -->

<div id="lesson-1">
<div id="lesson-1-slide-1" class="course-slide">
<div class="content">
<h2 class="flowers"><?php echo t($course->title); ?></h2>
<hr/>

<p>Welcome to the course! We are pleased you have decided to join us. Please contact your facilitator if you experience any difficulties or need help. Thank you!</p>

</div>
<div class="buttons"><a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Course &raquo;</a></div>
</div>
<div>

