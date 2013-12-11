<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach (array(
             '.lesson-1',
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

   </div>

<div class="column-wide"><h2 class="flowers"><?php echo t($course->title); ?></h2>

    <p><?php echo t($course->description); ?></p>

<h4>Objectives</h4>
<ul><?php foreach ($course->objectives as $objective) echo '<li>' . t($objective->text) . '</li>';?></ul>

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
                        <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button">&rarr; &rarr; Start Course &larr; &larr;</a>
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


<div>