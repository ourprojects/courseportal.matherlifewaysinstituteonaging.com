<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach (array(
             '.lesson-1',
             '.lesson-2',
             '.lesson-3',
             '.lesson-4',
             '.lesson-5',
             '.lesson-6',
             '.lesson-7',
             '.lesson-8',
             '.lesson-9',
             '.lesson-10',
             '.lesson-11',
             '.lesson-12',
             '.lesson-13',
             '.lesson-14',
             '.lesson-15',
             '.lesson-16',
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
        <h3>{t}Activity Log{/t}</h3>

        <p>{t}Please click the button below to access your personal Actvity Log.{/t}</p>

        <p>
            <?php
            echo CHtml::button('{t}Activity Log{/t}', array('onclick' => '$("#activityLog").dialog("open")', 'class' => 'button'));
            ?>
        </p>
        <?php
        $this->beginWidget('zii.widgets.jui.CJuiDialog', array('id' => 'activityLog', 'options' => array('title' => '{t}Activity Log{/t}', 'autoOpen' => false, 'modal' => true, 'width' => 720, 'maxWidth' => 720, 'maxHeight' => 1000),));
        $this->widget('course.widgets.SpencerPowell.ActivityLogWidget');
        $this->endWidget('zii.widgets.jui.CJuiDialog');
        ?>
    </div>
    <div class="box-sidebar one">
        <h3>{t}Course Evaluations{/t}</h3>

        <p>{t}Please click the button below to access the pre-course and post-course surveys. Participation is
            anonymous. Please complete each survey at the appropriate time.{/t}</p>

        <p>
            <a href="https://survey.vovici.com/se.ashx?s=4C32B0216020938B" target="_blank" class="button">Pre-Course Survey</a>
        </p>

        <p>
            <a href="https://survey.vovici.com/se.ashx?s=4C32B0216020938B" target="_blank" class="button">Post-Course Survey</a>
        </p>
    </div>
    <div class="box-sidebar one">
        <h3>{t}Certificate of Completion{/t}</h3>

        <p>{t}You must complete the first four Modules before accessing your Certificate of Completion. Click the button
            below to access your certificate where you will be able to manually add your name and date.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('spencer/certificate.pdf'); ?>" target="_blank" class="button">Download Certificate</a>
        </p>
    </div>
    <div class="box-sidebar one">
        <h3>{t}Facilitator: Sherrie All, PhD{/t}</h3>
        <p>{t}Licensed clinical neuropsychologist specializing in brain fitness, healthy aging and cognitive
            enhancement. She is building a private practice in clinical neuropsychological assessment combined with
            interventions aimed at enhancing cognition and promoting healthy aging.{/t}</p>
        <p>
            <a href="#" target="_blank" class="button">Contact Facilitator</a>
        </p>
    </div>
</div>

<div class="column-wide">
<h2 class="flowers">
    <?php echo t($course->title); ?>
</h2>

<p>
    <?php echo t($course->description); ?>
</p>

<p style="color: #E80000;">
    {t}<strong>Disclaimer: </strong>We want to emphasize that there are still risk factors that we cannot control,
    so living a brain healthy lifestyle does not guarantee that you will not get dementia, just like living a heart
    healthy lifestyle does not guarantee you won’t have a heart attack.{/t}
</p>
<h4>{t}Participant Access{/t}</h4>

<p>
    {t}<strong>90 days</strong> from the <strong>initial enrollment</strong> date.{/t}
</p>
<h4>{t}Objectives{/t}</h4>
<ul>
    <?php
    foreach ($course->objectives as $objective)
        echo '<li>' . t($objective->text) . '</li>';
    ?>
</ul>

<table>
<th>
    <h4>{t}Modules{/t}</h4>
</th>
<th>
    <h4>{t}Memory Strategies &amp; Excercises{/t}</h4>
</th>
<tr>
<td>
<ul class="modules">
<li>
    <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button">{t}Introduction{/t}</a>
    <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-12"  data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a><a
        href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
</li>
<li>
    <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button">{t}Physical Activity{/t}</a>
    <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-11" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-12"
        data-fancybox-group="lesson-2" class="hide lesson-2"></a><a href="#lesson-2-slide-13"
                                                                    data-fancybox-group="lesson-2"
                                                                    class="hide lesson-2"></a><a
        href="#lesson-2-slide-14" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-15" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-16" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-17" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-18" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-19" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-20" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-21" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-22" data-fancybox-group="lesson-2" class="hide lesson-2"></a><a
        href="#lesson-2-slide-23" data-fancybox-group="lesson-2"
        class="hide lesson-2"></a>
</li>
<li>
    <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3 button">{t}Emotional{/t}</a><a
        href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-11" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-12"
        data-fancybox-group="lesson-3" class="hide lesson-3"></a><a href="#lesson-3-slide-13"
                                                                    data-fancybox-group="lesson-3"
                                                                    class="hide lesson-3"></a><a
        href="#lesson-3-slide-14" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-15" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-16" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-17" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-18" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-19" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-20" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-21" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-22" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-23" data-fancybox-group="lesson-3"
        class="hide lesson-3"></a><a href="#lesson-3-slide-24" data-fancybox-group="lesson-3"
                                     class="hide lesson-3"></a><a href="#lesson-3-slide-25"
                                                                  data-fancybox-group="lesson-3"
                                                                  class="hide lesson-3"></a><a
        href="#lesson-3-slide-26" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-27" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-28" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-29" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-30" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-31" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-32" data-fancybox-group="lesson-3" class="hide lesson-3"></a><a
        href="#lesson-3-slide-33" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
</li>
<li>
    <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4 button">{t}Intellectual{/t}</a><a
        href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-11" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-12"
        data-fancybox-group="lesson-4" class="hide lesson-4"></a><a href="#lesson-4-slide-13"
                                                                    data-fancybox-group="lesson-4"
                                                                    class="hide lesson-4"></a><a
        href="#lesson-4-slide-14" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-15" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-16" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-17" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-18" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-19" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-20" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-21" data-fancybox-group="lesson-4" class="hide lesson-4"></a><a
        href="#lesson-4-slide-22" data-fancybox-group="lesson-4" class="hide lesson-4"></a>
</li>
<li>
    <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5 button">{t}Nutritional{/t}</a><a
        href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-11" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-12"
        data-fancybox-group="lesson-5" class="hide lesson-5"></a><a href="#lesson-5-slide-13"
                                                                    data-fancybox-group="lesson-5"
                                                                    class="hide lesson-5"></a><a
        href="#lesson-5-slide-14" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-15" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-16" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-17" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-18" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-19" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-20" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-21" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-22" data-fancybox-group="lesson-5" class="hide lesson-5"></a><a
        href="#lesson-5-slide-23" data-fancybox-group="lesson-5"
        class="hide lesson-5"></a><a href="#lesson-5-slide-24" data-fancybox-group="lesson-5"
                                     class="hide lesson-5"></a><a href="#lesson-5-slide-25"
                                                                  data-fancybox-group="lesson-5"
                                                                  class="hide lesson-5"></a>
</li>
<li>
    <a href="#lesson-6-slide-1" data-fancybox-group="lesson-6" class="teal lesson-6 button">{t}Spiritual{/t}</a><a
        href="#lesson-6-slide-2" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-3" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-4" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-5" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-6" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-7" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-8" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-9" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-10" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-11" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-12"
        data-fancybox-group="lesson-6" class="hide lesson-6"></a><a href="#lesson-6-slide-13"
                                                                    data-fancybox-group="lesson-6"
                                                                    class="hide lesson-6"></a><a
        href="#lesson-6-slide-14" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-15" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-16" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-17" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-18" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-19" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-20" data-fancybox-group="lesson-6" class="hide lesson-6"></a><a
        href="#lesson-6-slide-21" data-fancybox-group="lesson-6" class="hide lesson-6"></a>
</li>
<li>
    <a href="#lesson-7-slide-1" data-fancybox-group="lesson-7" class="teal lesson-7 button">{t}Social{/t}</a>
    <a href="#lesson-7-slide-2" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-3" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-4" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-5" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-6" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-7" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-8" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-9" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-10" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-11" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-12" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-13" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-14" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-15" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-16" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-17" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-18" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-19" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-20" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-21" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
    <a href="#lesson-7-slide-22" data-fancybox-group="lesson-7" class="hide lesson-7"></a>
</li>
<li>
    <a href="#lesson-8-slide-1" data-fancybox-group="lesson-8" class="teal lesson-8 button">{t}Closing{/t}</a>
    <a href="#lesson-8-slide-2" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-3" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-4" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-5" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-6" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-7" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-8" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-9" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-10" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-11" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-12" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-13" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-14" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-15" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-16" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-17" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-18" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-19" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-20" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
    <a href="#lesson-8-slide-21" data-fancybox-group="lesson-8" class="hide lesson-8"></a>
</li>
</ul>
</td>
<td>
    <ul class="modules">
        <li>
            <a href="#lesson-9-slide-1" data-fancybox-group="lesson-9" class="teal lesson-9 button">{t}Improving Attention{/t}</a>
            <a href="#lesson-9-slide-2" data-fancybox-group="lesson-9" class="hide lesson-9"></a>
            <a href="#lesson-9-slide-3" data-fancybox-group="lesson-9" class="hide lesson-9"></a>
        </li>
        <li>
            <a href="#lesson-10-slide-1" data-fancybox-group="lesson-10" class="teal lesson-10 button">{t}Visualization{/t}</a>
            <a href="#lesson-10-slide-2" data-fancybox-group="lesson-10" class="hide lesson-10"></a>
            <a href="#lesson-10-slide-3" data-fancybox-group="lesson-10" class="hide lesson-10"></a>
        </li>
        <li>
            <a href="#lesson-11-slide-1" data-fancybox-group="lesson-11" class="teal lesson-11 button">{t}Chunking{/t}</a>
            <a href="#lesson-11-slide-2" data-fancybox-group="lesson-11" class="hide lesson-11"></a>
        </li>
        <li>
            <a href="#lesson-12-slide-1" data-fancybox-group="lesson-12" class="teal lesson-12 button">{t}Attach Meaning{/t}</a>
            <a href="#lesson-12-slide-2" data-fancybox-group="lesson-12" class="hide lesson-12"></a>
        </li>
        <li>
            <a href="#lesson-13-slide-1" data-fancybox-group="lesson-13" class="teal lesson-13 button">{t}Mindfulness{/t}</a>
            <a href="#lesson-13-slide-2" data-fancybox-group="lesson-13" class="hide lesson-13"></a>
        </li>
        <li>
            <a href="#lesson-14-slide-1" data-fancybox-group="lesson-14" class="teal lesson-14 button">{t}External Memory Aids{/t}</a>
            <a href="#lesson-14-slide-2" data-fancybox-group="lesson-14" class="hide lesson-14"></a>
        </li>
        <li>
            <a href="#lesson-15-slide-1" data-fancybox-group="lesson-15" class="teal lesson-15 button">{t}Rehearsal{/t}</a>
            <a href="#lesson-15-slide-2" data-fancybox-group="lesson-15" class="hide lesson-15"></a>
        </li>
        <li>
            <a href="#lesson-16-slide-1" data-fancybox-group="lesson-16" class="teal lesson-16 button">{t}Compassion{/t}</a>
            <a href="#lesson-16-slide-2" data-fancybox-group="lesson-16" class="hide lesson-16"></a>
        </li>
    </ul>
</td>
</tr>
</table>

<h4>{t}Resources{/t}</h4>

<p>{t}Please use these listed resources in the completion of this online course. Please contact your facilitator or
    the program director if you have additional resources you would like to see added here.{/t}</p>
<ul id="resources">
    <li>
        <a href="http://www.mindful.org/" target="_blank">Mindful - taking time for what matters</a> (Emotional,
        Spiritual and Closing)
    </li>
    <li>
        <a href="http://www.psychologytoday.com/basics/mindfulness" target="_blank">Psychologytoday</a> (Emotional,
        Spiritual and Closing)
    </li>
    <li>
        <a href=" http://www.ncbi.nlm.nih.gov/pubmedhealth/PMH0008821/" target="_blank">PubMed Health</a>
        (Introduction)
    </li>
    <li>
        <a href="http://www.bis.gov.uk/foresight/our-work/projects/published-projects/mental-capital-and-wellbeing/reports-and-publications"
           target="_blank">Foresight</a> (Intellectual)
    </li>
    <li>
        <a href="http://cognitivetherapyonline.com/" target="_blank">Cognitive Therapy Online</a> (Emotional)
    </li>
    <li>
        <a href="http://www.cognitivebehavioraltherapyonline.com/index.php" target="_blank">FixMyThinking.com</a>
        (Emotional)
    </li>
    <li>
        <a href="http://www.nih.gov/health/wellness/" target="_blank">National Institutes of Health</a> (All
        Modules)
    </li>
    <li>
        <a href="http://sharpbrains.com/" target="_blank">SharpBrains</a> (Introduction and Intellectual)
    </li>
    <li>
        <a href="http://go4life.nia.nih.gov/" target="_blank">Go4Life</a> (Physical Activity)
    </li>
    <li>
        <a href="http://www.nlm.nih.gov/medlineplus/nutrition.html" target="_blank">NIH</a> (Nutrition)
    </li>
</ul>
</div>
<div id="course" class="hide">
<?php $clientScript->registerScript('question-answer-handler', "$('.course-slide .question').change(function() {" . "if($(this).find('select').val() == '1') {" . "$(this).find('.right-answer').removeClass('hide');" . "$(this).find('.wrong-answer').addClass('hide');" . "} else {" . "$(this).find('.right-answer').addClass('hide');" . "$(this).find('.wrong-answer').removeClass('hide');" . "}" . "});"); ?>
<div id="lesson-1">
<div id="lesson-1-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Spencer Powell Brain Fitness Program online{/t}</h2>
        <hr/>
        <h4>{t}Welcome!{/t}</h4>

        <p>
            {t}Welcome and thank you for your interest and participation in the <strong>Spencer Powell Brain Fitness
                Program</strong> online course. We are excited to have your participation and look forward to our
            interactions! Please contact us if you need help, have questions, or suggestions for course
            improvements.{/t}
        </p>
        <h4>{t}Course Description{/t}</h4>

        <p>
            {t}<strong>The Spencer Powell Brain Fitness Program</strong> is designed to promote cognitive health and
            healthy lifestyle changes. The course provides information on how lifestyle factors such as physical
            activity and cognitive engagement affect your brain and your risk for dementia. Practical strategies are
            suggested for maintaining memory over time. In addition, the course includes memory training such as
            chunking, the story method, and mnemonic techniques.{/t}
        </p>

        <div id="question1" class="question">
            <p style="text-align: center;">
                <b>{t}Have you taken the pre-course evaluation yet?{/t}</b> <br/>
                <select style="text-align: center;">
                    <option selected="selected" value="select">{t}Select{/t}</option>
                    <option value="1">{t}Yes{/t}</option>
                    <option value="0">{t}No{/t}</option>
                </select>
            </p>
            <p class="right-answer hide">{t}Great! Thank you! Please continue.{/t}</p>

            <p class="wrong-answer hide">
                {t}No Problem! Please <a href="location.href('http://www.vovici.com/home_index.aspx" target="_blank">click
                    here</a> to participate.{/t}
            </p>
        </div>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a>
    </div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}You Tube - The Brain Fitness Program{/t}</h2>
        <hr/>
        <p>
            {t}This short video will provide you with a first look at some of the exciting new discoveries about
            neuroplasticity (the ability of the adult brain to change itself) that form the foundation of this course.
            You may have already seen this popular <a href="http://www.pbs.org" target="_blank">PBS</a> (Public
            Broacdcasting Service) special, which helped pave the way for many incredible advances, including this
            course, that can help you strengthen your brain and lower your risk for dementia.{/t}
        </p>
        <iframe style="width: 480px; height: 360px; display: block; margin: 15px auto;"
                src="//www.youtube.com/embed/WBSNQi4es5k?rel=0" frameborder="0" allowfullscreen></iframe>
        <!-- 'url' => Yii::app()->getComponent('phpBB')->getForumUrl(), -->
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();"> {t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Module Outline{/t}</h2>
        <hr/>
        <h4>{t}Module One - Introduction:{/t}</h4>
        <ol>
            <li>{t}Overview{/t}</li>
            <li>{t}Brain Health Now and Later{/t}</li>
            <li>{t}Dementia and Cognitive Reserve{/t}</li>
            <li>{t}Brain Plasticity{/t}</li>
            <li>{t}Peak Performance{/t}</li>
            <li>{t}Introduction to Program Format{/t}</li>
            <li>{t}Memory Exercise{/t}</li>
            <li>{t}Goal Setting{/t}</li>
        </ol>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();"> {t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Brain Health{/t}</h2>
        <hr/>
        <p>{t}The world of brain health has exploded over the past decade with many new programs and applications
            emerging to help people think and perform better both now in their daily lives at work or at home and later
            in life as people age. Maintaining independence later in life is a concern for many people, especially older
            adults, but even for younger people this can be a nagging concern. Through the course of this program you
            will learn how investing in your brain health now can pay dividends both immediately and as you age.{/t}</p>

        <p>{t}To describe some of the key concepts underlying the field of brain health, we will start by talking a bit
            about how to protect brain health as you age.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Dementia is not inevitable{/t}</h2>
        <hr/>
        <p>{t}Many people think that dementia is a normal part of the aging process and that losing ones memory is just
            part of getting older. While some cognitive skills, such as reaction time and our ability to access words at
            times (what we think of as “senior moments”), do decline naturally with age, “dementia” is a decline in
            cognitive ability beyond the normal aging process, most likely due to disease or injury.{/t}</p>

        <p>{t}Many people also think that if dementia is in their family they are destined to develop it at some point
            in their lives. However, brain research is showing that the way people live their lives actually seems to
            account for as much or more of the risk for dementia than family history. In fact for the typical late-onset
            form of Alzheimer’s disease, genes seem to only account for about 30% of the risk (that’s in contrast to
            early-onset Alzheimer’s, which occurs before age 65 and has a much stronger genetic component). The rest of
            that 70% is made up of some other things that we can’t control such as environmental toxins, but within that
            70% area there are a lot of things that we can control.{/t}</p>

        <p>
            {t}This information is leading some doctors and scientists to start thinking of<strong> dementia as a
                preventable disease</strong>, similar to how we think of heart disease, cancer and Type II diabetes as
            preventable.{/t}
        </p>

        <p>&nbsp;</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Dementia{/t}</h2>
        <hr/>
        <p>
            {t}People often ask, “what is the difference between Alzheimer's disease and dementia?” Before we get too
            far, we should clarify that Alzheimer’s disease is a TYPE of dementia. <strong>Dementia</strong> is an
            umbrella term used to describe any<strong> type of stable decline in cognitive abilities, severe enough to
                interrupt a person’s ability to function independently</strong>. Dementia describes the observable
            symptoms of a brain disease or injury.{/t}
        </p>

        <p>
            {t}<strong>Alzheimer’s is a disease process</strong> – a medical condition – that causes the cognitive
            changes that produce dementia. There are many other medical conditions that cause dementia as well.{/t}
        </p>

        <p>{t}The second most common disease that causes dementia is what we call cerebrovascular disease, which causes
            vascular dementia. This includes any type of injury to the brain caused by a problem with the brain’s blood
            supply, most notably a stroke. There are varying degrees of strokes, however. You may have heard of TIA’s
            (or Transient Ischemic Attacks) or mini strokes. The stroke process can also occur without any identifiable
            symptoms, causing what we call silent strokes. You will learn more about these in the next session.{/t}</p>

        <p>{t}Head trauma, Parkinson’s disease, Huntington Disease, Pick’s disease, infections such as HIV and CJD
            (Creutzfeldt-Jakob Disease – the human form of mad cow disease), substance abuse and environmental toxins
            can also cause dementia.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Risk Factors are Interactive{/t}</h2>
        <hr/>
        <p>{t}We are also learning that most people who develop dementia tend to have more than one type of risk factor
            and may even have more than one disease process affecting their brains. It may also be the case that one
            disease process, such as diabetes, may play a role in the formation of another disease process such as
            Alzheimer’s.{/t}</p>

        <p>{t}We know that hypertension (high blood pressure) is a common result of the pressure that diabetes puts on
            the vascular system. We still have a lot to learn in this area, but we mention it here because there are a
            lot of things that we can do to lessen the effects of many of these disease conditions on our aging brains,
            which may help us ward off or delay the clinical symptoms of dementia.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Cognitive Reserve: Your Brain's 401(k) Account{/t}</h2>
        <hr/>
        <p>
            {t}One key way that we can lower our risk for dementia is through understanding and utilizing a theory that
            is central to this area of science, called the <strong>Theory of Cognitive Reserve</strong>. You can think
            of this as your brain’s 401(k) or retirement account.{/t}
        </p>

        <p>
            {t}Simply put, the Theory of Cognitive Reserve is based on observations that <strong>no 2 brains respond to
                injury or illness in exactly the same way</strong>. There are people who can sustain a small amount of
            damage to their brains and lose a lot of brain function, and there are people who can sustain large amounts
            of damage and never develop dementia. <strong>What seems to differentiate these types of people is the
                amount of brain reserve that they have “stored in the bank” that can make up for the losses</strong>.{/t}
        </p>

        <p>{t}So when planning financially for retirement, if you have a lot invested in your retirement account, you
            can survive losses - such as fluctuations in the market or an unexpected expense - much better if your
            account is bigger than if it were smaller. This principle seems to apply to our brains too, which serves as
            the basis for the theory of cognitive reserve. People with high levels of Cognitive Reserve have to sustain
            many more losses before crossing over the threshold to having dementia than people who have lower
            reserve.{/t}</p>

        <p>
            {t}The keyword to learn from this is “Cognitive Reserve” – which is your<strong> brain’s reserve of both
                tissue and abilities</strong> that affects your risk for dementia. Or your Brain’s retirement
            account.{/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}More on Cognitive Reserve{/t}</h2>
        <hr/>
        <p>{t}A little over 10 years ago, Yaakov Stern, PhD, a neuropsychologist at Columbia University, summarized a
            series of important brain discoveries and proposed the theory of Cognitive Reserve. Since then, numerous
            studies have continued to support this theory, allowing us to now know many of the factors that can raise
            and lower a person’s risk for dementia.{/t}</p>

        <p>
            {t}One of the first discoveries leading to the theory of cognitive reserve came after scientists noticed
            that a group of people who had donated their brains for autopsy showed signs of advanced Alzheimer’s disease
            in their brains even though at the time of their death they had no clinical signs of the disease. In other
            words, these were people<strong> with fully intact memories who had remained quite independent, yet their
                brains looked exactly the same as the brains of people who had forgotten their families and could no
                longer care for themselves</strong>.{/t}
        </p>

        <p>
            {t}The scientists wondered if there might be something different about the way these people had lived their
            lives that allowed them to resist the effects of the Alzheimer’s disease pathology that had grown in their
            brains. It turned out that<strong> these people had been more active intellectually, socially and physically
                throughout their adult lives than the people in the other group</strong>.{/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The Adult Brain Grows New Cells{/t}</h2>
        <hr/>
        <p>
            {t}About 10 years after that autopsy study, another group of researchers studied the brains of people who
            had survived cancer through radiation treatment. It turns out that after people go through radiation
            treatment, some of the genetic information in their cells changes. By applying a special dye that is only
            attracted to cells with this new genetic data, researchers can see which cells had formed after the cancer.
            They applied this dye to brain tissue on autopsy and were surprised to find cells in the brain that accepted
            the dye. This meant that these <strong>cells had developed AFTER the radiation treatment.{/t}</strong>
        </p>

        <p>
            <strong>{t}Some of the people in this study well into their 80’s when they received the cancer treatment, so
                it seems that new brain cells are growing well into later life</strong>. This evidence combined with
            other studies since this has changed the way we think about the adult brain;<strong> now we accept that the
                adult brain DOES grow new brain cells</strong>!{/t}
        </p>

        <p>
            {t}Now this excitement has to be tempered a bit because<strong> brain cells do not grow at the same rate as
                say cells in your skin or your bones</strong>, so it is still harder for the brain to recover from
            injury.{/t}
        </p>

        <p>
            {t}Nevertheless, it is exciting to know that we can still grow new brain cells. This may actually be one of
            the<strong> mechanism by which we can learn new things as the region of the brain where these new brain
                cells grow – called the hippocampus – is the area responsible for forming new memories</strong>.{/t}
        </p>

        <p>{t}The key word to learn from this is “neurogenesis,” meaning the growth of new brain cells.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Brain Structures Also Grow with Experience{/t}</h2>
        <hr/>
        <p>&nbsp;</p>

        <p>
            {t}In addition to discovering the growth of new brain cells, over the last couple of decades, scientist have
            demonstrated that<strong> brain structures can grow in adulthood, which often seems to be the result of
                experience, or learning new things</strong>.{/t}
        </p>

        <p>
            {t}In the late 1990’s a group of researchers started studying the brains of cab drivers in London. This is
            an elite group of taxi drivers who have to complete a 3-4 year apprenticeship to learn the intricate routes
            within the 6-square mile are of central London (see map). They literally call it <strong>“The Knowledge.”
                75% of the people who start the apprenticeship drop out</strong>.{/t}
        </p>

        <p>
            {t}At first researchers noted that a<strong> region of the hippocampus responsible for spatial relations was
                larger in experienced drivers compared to other people</strong>. After following new recruits over time,
            the same researchers observed that<strong> this region actually grew in the recruits who successfully
                completed the program</strong>.{/t}
        </p>

        <p>
            {t}Developing such a specialized skill did come at a price, however, as other studies from the same group
            have shown that these taxi drivers perform worse on other tests of memory. This suggests that it is<strong>
                likely important to diversify your brain building activities</strong>. But the exciting part of all of
            this research is that it shows in a pretty clear way that the <strong>adult brain can grow – that is
                actually change its structure in a positive direction – through experience</strong>.{/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Brain Cells Form New Connections{/t}</h2>
        <hr/>
        <p>&nbsp;</p>

        <p>
            {t}The adult brain also changes in another way. The brain cells you already have as well as the new ones you
            are growing, can also form new connections. These connections are referred to as “<strong>pathways</strong>,”
            and just like with your muscles,<strong> the stronger a pathway becomes, the bigger it gets</strong>.{/t}
        </p>

        <p>
            {t}The connections between brain cells, at the ends of the pathways, are called <strong>synapses</strong>,
            and “<strong>synaptic density</strong>”<strong> can be increased by learning new things and performing new
                skills</strong>.{/t}
        </p>

        <p>
            {t}<strong>Pathways and synapses can also rewire</strong>, diverting their resources to different regions
            following an injury.{/t}
        </p>

        <p>
            {t}All of this “<strong>malleability</strong>”<strong> in the wiring of brain cells</strong> is called
            <strong>“plasticity</strong>.”{/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Cells that Fire Together, Wire Together{/t}</h2>
        <hr/>
        <p>
            {t}This phenomenon was first described in the 1940’s by a scientist named Donald Hebb, and the process has
            since been termed Hebb’s Law, which is often <strong>paraphrased</strong> as, “<strong>cells that fire
                together, wire together</strong>.” So anytime you practice a new skill, the brain cells required to
            perform that skill will fire together, meaning they will both produce an electrical charge, which over time
            will change the structure of the synapse and allow the cells to be “wired together” or more likely to excite
            one another when one is excited.{/t}
        </p>

        <p>
            {t}The technical names for the “rewiring process” are called <strong>Long Term Potentiation (LTP)</strong>
            and<strong> Long Term Depression (LTD)</strong>.<strong> LTP</strong> we already understand, that<strong>
                cells that fire together build stronger connections</strong>.<strong> LTD</strong> explains what we call
            negative plasticity or the “<strong>use it or lose it</strong>” phenomenon, meaning that when cells are not
            firing together, when you are not practicing a particular skill, the connections become weaker over
            time.{/t}
        </p>

        <p style="text-align: center;">
            <iframe width="480" height="360" src="//www.youtube.com/embed/jSE703UokZY?rel=0" frameborder="0"
                    allowfullscreen></iframe>
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Your Brain’s 401(k){/t}</h2>
        <hr/>
        <table style="width: 100%; margin: 15px auto; border: 3;">
            <tr style="text-align: center;">
                <th>
                    <strong>Minimize Losses</strong>
                </th>
                <th>
                    <strong>Maximize Contributions</strong>
                </th>
            </tr>
            <tr>
                <td>Prevent or slow disease processes</td>
                <td>Maximize new brain cell growth</td>
            </tr>
            <tr>
                <td>Avoid brain injury</td>
                <td>Grow new connections between brain cells</td>
            </tr>
            <tr>
                <td>Reduce stress</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <p>
            {t}Now that we know that a lot of the things we do throughout our lives affects our susceptibility to
            dementia, we can utilize the principles of Cognitive Reserve Theory to <strong>maximize our investments in
                our Brain’s retirement account</strong>.{/t}
        </p>

        <p>{t}However, this course will help you understand the things you can do that may lower the risk for dementia
            or postpone cognitive decline in the hopes that you will maintain independence for as long as
            possible.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Peak Performance!{/t}</h2>
        <hr/>
        <p>{t}We have talked a lot about protecting your brain from dementia, but this program will also focus on
            helping you get the most out of your brain today, which can help you both at work and at home. You will be
            learning strategies to remember things better, to be more organized, to pay closer attention and to regulate
            your emotions.{/t}</p>

        <p>{t}Some of the strategies will come to you directly through the memory tips that you will learn in modules
            2-7 and the lifestyle demonstrations we will present in each module. Other strategies will come to you
            indirectly as you practice the exercises included in both the course assignments and the brain training
            software being providing.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Program Format{/t}</h2>
        <hr/>
        <ul>
            <li>{t}Physical Activity{/t}</li>
            <li>{t}Social Engagement{/t}</li>
            <li>{t}Intellectual Engagement{/t}</li>
            <li>{t}Nutrition{/t}</li>
            <li>{t}Emotional Wellbeing{/t}</li>
        </ul>
        <p>{t}During each of the next few modules, you will learn the details of how each of these five areas of
            wellness affect your risk for dementia. You will learn the science supporting the connection between your
            brain health and each area of wellness.{/t}</p>

        <p>{t}We aim to help you identify areas of your lifestyle where you could increase your investment in your
            Cognitive Reserve, diversifying your “Brain Portfolio.”{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CR Contributions Logs{/t}</h2>
        <hr/>
        <p>{t}Knowing if we are doing enough for our brains can be a challenge, so in an effort to help you take account
            of your brain healthy activities, we created the CR (Cognitive Reserve) Contribution Log. You would not
            expect to invest in your financial retirement account without keeping track of your investments would you?
            With this log you can get a better idea of how you’re investing in your brain health, and if you choose to
            increase your investment, you can monitor that too, watching your gains grow over time.{/t}</p>
        <h4>{t}How it works{/t}</h4>

        <p>{t}We are providing you with a Menu of brain healthy activities that converts your activities to CR
            Contribution units. The Menu is available on the main course page, in the right sidebar. It makes your
            activities easier to quantify, therefore making it easier to see the gains that you are making each week in
            Maximizing your CR Contributions.{/t}</p>

        <p>{t}The Menu is broken up into three sections, the top section are standard brain healthy activities, the
            second section has a list of all of the brain healthy activities that are provided at this facility, the
            third section includes some blank paces for you to add your own, customized brain healthy activities. The
            menu also has suggested domains for each activity, but the domain that you feel the activity best fits is
            entirely up to you. Some people think that going for a walk is purely for exercise, but others see the
            connection with nature as a spiritual experience. This is for you to decide.{/t}</p>
        <h4>{t}What to do:{/t}</h4>

        <p>
            {t}<strong>In this module, we would like for you to get started in logging your brain healthy activities.
                This will give you an idea of your baseline, and will help you know where you want to add when it comes
                time to set goals</strong>. Your Activity log can be accessed on the course home page in the right
            sidebar.{/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Let’s Give Ourselves a Break{/t}</h2>
        <hr/>
        <p>
            {t}Before we get into the specifics of what you will be doing for the next few modules, let’s take a moment
            to give ourselves a little break. Not an actual break from the course, but rather let’s take a moment to go
            over some<strong> myths and misconceptions that older adults tend to have about their memories</strong>.{/t}
        </p>

        <p>
            {t}Because dementia is such a great concern among older adults, <strong>many people forget that it’s normal
                to forget things</strong>. You’ve been forgetting things all your life! It’s just that when you were 25
            years old, you didn’t care so much because you didn’t interpret the forgetting as a signal that you may be
            on the path to losing your independence.{/t}
        </p>

        <p>
            {t}<strong>It is also a myth that people can remember everything</strong>. You may have heard of these
            “memory champions” who can remember several decks of cards just by seeing them flipped over one at a time or
            about people with photographic memories. Well the memory champions train like professional athletes, hours
            on end, day after day for months to develop their craft, but it doesn’t really seem to help them get better
            at much of anything else. And most of the people with photographic memories are savants whose incredible
            gifts are often accompanied by severe handicaps in other areas of day-to-day living.{/t}
        </p>

        <p>
            {t}So<strong> let’s all just have reasonable expectations of our memories. If you forget something, try and
                relax</strong>. That may even help you remember since, as you will learn in a few weeks, being upset can
            arrest our thinking.{/t}
        </p>

        <p>
            {t}Over the next few modules you will be working on some techniques to remember things better, and with a
            fair amount of effort and practice you can improve your thinking, but <strong>there is no magic bullet, no
                miracle cure, and no special pill to give us perfect thinking</strong>.{/t}
        </p>

        <p>
            {t}Nor is it likely that your memory is really as bad as you think. On that note, however,<strong> if you
                really are concerned about your thinking, we encourage you to talk with your doctor if you have not done
                so already</strong>.{/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-22" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Set Some Goals for This Week{/t}</h2>
        <hr/>
        <p>{t}To get the most out of this program, it is important that you set goals for yourself to practice the
            skills you are learning and to pave the way for developing new brain-healthy habits.{/t}</p>

        <p>
            {t}It&rsquo;s is important that you<strong> set goals that are not too difficult or too vague</strong> – It&rsquo;s
            better to set a &ldquo;ridiculously simple goal&rdquo; that a you can achieve in order to feel successful
            than to set a lofty goal that you will feel bad about not reaching. We want to start you on a cycle of
            success...{/t}
        </p>
        <h5>{t}Goals are most effective when they are:{/t}</h5>
        <ol>
            <li>{t}Specific with respect to:{/t}</li>
            <li>{t}Type of behavior – have people write a specific behavior (will log activities) as opposed to a vague
                aspiration (will try to monitor activities){/t}
            </li>
            <li>{t}Duration of the behavior (5 minutes, etc.){/t}</li>
            <li>{t}Frequency of behavior (4 times a week){/t}</li>
            <li>{t}Simple (ridiculously easy goals are an important place to start because small successes create
                momentum for bigger change){/t}
            </li>
            <li>{t}Feasible (same as simple){/t}</li>
        </ol>
        <h5>{t}Rewards{/t}</h5>

        <p>{t}Rewards are intended to be used each time the goal behavior is performed – not merely at the end of the
            week. Using the memory goal above as an example, each day a person pays close attention for 30 seconds two
            times in a single day, she gets to put on a spray of her favorite perfume (maybe in preparation for dinner
            or the next morning). She doesn’t have to wait the entire week to use her perfume. If the perfume is part of
            her daily routine, then she can continue this routine provided she meet her goal each day.{/t}</p>
        <h5>{t}Here are some guidelines for rewards:{/t}</h5>
        <ul>
            <li>{t}Take some time to think of a reward or ask someone for suggestions{/t}</li>
            <li>{t}Rewards should be small and feasible do not use a reward that will get in the way of other health
                goals, such as cookies{/t}
            </li>
            <li>{t}Make an agreement with yourself that you will in no way get to have the reward without FIRST having
                achieved your goal{/t}
            </li>
        </ul>
        <h5>{t}Sample Behavior Goal:{/t}</h5>

        <p>{t}Goal: Fill out activity log before bed at least 4 days in a row{/t}</p>

        <p>{t}Daily Reward: Read my favorite book before bed{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-23" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr/>
        <h4>{t}You Made It!{/t}</h4>

        <p>{t}Congratulations on completing this first module! You should now be comfortable with the course setup,
            having had this first experience.{/t}</p>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a>
    </div>
</div>
</div>
<div id="lesson-2">
<div id="lesson-2-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Physical Activity{/t}</h2>
        <hr/>
        <h4>{t}Module Outline{/t}</h4>
        <ul>
            <li>{t}Check-in and Review{/t}</li>
            <li>{t}Benefits of Physical Activity{/t}</li>
            <li>{t}Memory Exercise{/t}</li>
            <li>{t}Goal Setting{/t}</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a>
    </div>
</div>
<div id="lesson-2-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Check-in{/t}</h2>
        <hr/>
        <ul>
            <li>
                {t}How did your week go?{/t}
                <ul>
                    <li>{t}Did you think about anything you learned last week?{/t}</li>
                    <li>{t}Did you log your activities?{/t}</li>
                    <li>{t}Any questions about the CR Contribution Logs?{/t}</li>
                </ul>
            </li>
            <li>
                {t}What is Cognitive Reserve?{/t}
                <ul>
                    <li>{t}How can knowing about this theory help you?{/t}</li>
                </ul>
            </li>
            <li>
                {t}What was the Memory Strategy that you learned last week?{/t}
                <ul>
                    <li>{t}Did you have a chance to use it?{/t}</li>
                </ul>
            </li>
        </ul>
        <h5>{t}Last week’s memory strategy was:{/t}</h5>
        <ul>
            <li>
                <strong>{t}Improving Attention to Improve Memory</strong>{/t}
            </li>
            <li>
                {t}Look Up and Around{/t}
                <ul>
                    <li>{t}Put in the Effort{/t}</li>
                </ul>
            </li>
            <li>{t}Stay “Present”{/t}</li>
            <li>{t}Get your Hearing or Vision Checked{/t}</li>
            <li>
                {t}Manage Your Environment{/t}
                <ul>
                    <li>
                        {t}Reduce <strong>Distractions</strong> and <strong>Interruptions</strong> {/t}
                    </li>
                </ul>
            </li>
            <li>
                <strong>{t}Do</strong> One Thing at a Time{/t}
                <ul>
                    <li>{t}Multi-tasking is a Myth!{/t}</li>
                    <li>{t}Multi-tasking can be toxic to the brain{/t}</li>
                </ul>
            </li>
            <li>{t}Bribe yourself{/t}</li>
            <li>
                {t}Get Plenty of Rest{/t}
                <ul>
                    <li>{t}May need to see a sleep doctor{/t}</li>
                    <li>{t}Resting your when you’re awake{/t}</li>
                </ul>
            </li>
            <li>{t}Manage your Emotions{/t}</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Investing in Brain Health{/t}</h2>
        <hr/>
        <p>{t}In the last module we talked about actively investing in our brain reserve (or Cognitive Reserve / Brain
            401(k)) – Maximizing our contributions to our brain, which can help us build up a larger reserve in order to
            ward off dementia.{/t}</p>

        <p>{t}In the last module, about the autopsy study where people had resisted the clinical effects of Alzheimer’s
            disease growing in their brains, there were three main lifestyle behaviors that distinguished these people
            from people who had lost their independence. They had been more active during their lives in a few key
            ways.{/t}</p>

        <p>{t}We are going to present how physical activity seems to be a key component of brain health. In fact, it may
            be one of the best things you can do for your brain. {/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Exercise is Linked to:{/t}</h2>
        <hr/>
        <ul>
            <li>
                {t}Maintaining a Healthy Weight{/t}
                <ul>
                    <li>{t}Decreased body fat{/t}</li>
                    <li>{t}Increased lean body mass{/t}</li>
                    <li>{t}Increased resting metabolism{/t}</li>
                    <li>{t}Better digestion{/t}</li>
                </ul>
            </li>
            <li>
                {t}Preventing and Managing Chronic Disease{/t}
                <ul>
                    <li>{t}Cardiovascular fitness (Heart, Blood Pressure, Stroke){/t}</li>
                    <li>{t}Prevent and control adult onset diabetes{/t}</li>
                    <li>{t}Increased insulin sensitivity{/t}</li>
                </ul>
            </li>
            <li>
                {t}Maintaining a Strong Body{/t}
                <ul>
                    <li>{t}Increased bone density and reduced osteoporosis{/t}</li>
                    <li>{t}Reversed physical frailty{/t}</li>
                    <li>{t}Improved vestibular function{/t}</li>
                    <li>{t}Fewer falls{/t}</li>
                </ul>
            </li>
            <li>{t}Reduced depression{/t}</li>
            <li>{t}Better quality sleep{/t}</li>
            <li>{t}AND… Delayed onset of cognitive decline!{/t}</li>
            <li>{t}AND… Better memory performance!{/t}</li>
        </ul>
        <p>Let us start off by talking about the benefits of physical activity that we already know about.</p>

        <p>&ldquo;Most recently, we have learned that participation in physical activity may also help to prevent or
            postpone the onset of dementia and cognitive decline.&rdquo;</p>

        <p>As you&rsquo;ve been learning, scientists have learned that the brain stays plastic (changeable) all the way
            into our later years – this means that the brain can change in response to exercise no matter how old or
            young you are. (Eckmann, 2011)</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}How does physical activity reduce cognitive decline?{/t}</h2>
        <hr/>
        <p>There are two proposed routes through which it seems that physical activity reduces cognitive decline.</p>

        <p>The route that has been understood for some time is an indirect route, a relationship that scientists call a
            moderating relationship, where the effects of a third variable (in this case vascular health) explains or
            “moderates” the relationship between physical activity and cognitive decline. For a long time, scientists
            believed that the link between physical activity and cognitive performance was primarily moderated by
            vascular health, which remains an important moderator!!</p>

        <p>But more recently evidence suggests that physical activity also seems to have a direct impact on cognitive
            performance, which we will discuss in a moment.</p>

        <p>But first let’s get a better understanding of the impact that your vascular health on your brain performance
            and aging.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Medical Conditions Linked to Cognitive Decline{/t}</h2>
        <hr/>
        <p>High blood pressure, heart disease, diabetes, stroke, and obesity are consistently associated with cognitive
            decline.</p>

        <p>Research has found that:</p>

        <p>High blood pressure, high cholesterol, heart disease, diabetes and mini-strokes are all related to cognitive
            decline, but it appears that of all these conditions, high blood pressure may be the worst culprit!</p>

        <p>Blood pressure above or below the healthy level in middle-aged men has been associated with poor performance
            on cognitive tests 25 years later This association, however, was only found in men who did not treat their
            blood pressure, showing that if we do something to attend to our health problems we can help to prevent or
            postpone onset of cognitive decline.</p>

        <p>Stroke and diabetes consistently and reliably predicted cognitive deficits.</p>

        <p>High blood pressure and poorer health ratings were more predictive of deficits in younger old adults versus
            older old adults, meaning that it seems that these health conditions promote premature brain aging.</p>

        <p>High cholesterol increases the risk for heart disease, and a healthy heart is essential to having a healthy
            brain.</p>

        <p>Diabetes and pre-diabetes (insulin resistance) can damage the blood vessels that bring important nutrients to
            brain cells.</p>

        <p>As we just discussed, physical activity seems to play a role in preventing or reducing the impact of all of
            these medical conditions, so this is an important way that exercise protects our brains.</p>

        <p>How is it that these conditions reduce our cognitive reserve? Well let’s look inside the brain to find out
            more.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}White Dots on the Brain{/t}</h2>
        <hr/>
        <p>Brain cells needs a constant and robust supply of blood flow to stay alive. Unlike other most other cells in
            your body, neurons (brain cells) cannot store the oxygen and glucose (sugar) they need to survive. Any
            interruption in blood flow for even just a few minutes can significant damage.</p>

        <p>High blood pressure, high blood sugar and high cholesterol damage can interrupt the blood supply contributing
            to the form of dementia we call Vascular Dementia. Vascular dementia has many names including:
            cerebrovascular disease, stroke, TAI, mini-stroke, and “white dot syndrome.”</p>

        <p>The term &quot;white dots&quot; (also called white matter hyperintensities) comes from the way that
            vascular-related damage to the brain shows up on a certain type of MRI picture called a T2 weighted image.
            In this type of image, the tissue for what we call “white matter tracks” normally show up as black. White
            matter tracks are bundles of the connective fibers through which brain cells communicate with one another.
            They are also called axon bundles. When these tracks are damaged, they show up on T2 MRI as white instead of
            black, hence the name &quot;white dot syndrome.&quot; You can see the white dots on this image inside the
            red circles. The big white dots around the red circles are supposed to be there.</p>

        <p>Cerebrovascular disease is a serious condition, which includes stroke, and it is the 4th leading cause of
            death in people over 65, more than Alzheimer’s which is #5. Most of us are familiar with the effects of
            stroke and maybe even TIA’s, which are basically just short-acting strokes, but you may not be familiar with
            this “white dot syndrome,” which can occur without any symptoms. The white dots form from an accumulation of
            little silent strokes. The effects on thinking build up over time, in many cases leading to dementia. White
            dots start forming somewhat early in adulthood, with some detected in people as young as their 30’s. White
            dots are common in the brains of older adults, and a certain number of them are considered to be “age
            appropriate.” But since they are linked to high blood pressure, high cholesterol and diabetes, we can work
            to reduce or prevent them.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The Formation of White Dots{/t}</h2>
        <hr/>
        <p>These white dots form because the arteries that feed this area of the brain are very, very tiny capillaries.
            Chronic high blood pressure can cause these tiny capillaries to burst, spilling blood into the area where
            brain cells live, which is toxic to them.</p>

        <p>OR these tiny capillaries can also “clog up” and prevent blood flow from reaching points beyond the clog,
            leading to tissue damage.</p>

        <p>The things that “clog up” these capillaries are directly related to high blood pressure, high blood sugar and
            high cholesterol. High blood pressure and high cholesterol lead to the build up of plaque in the arteries,
            sort of like the gunk that fills up in a slow kitchen sink pipe. If a piece of this plaque or an associated
            blood clot becomes loose &amp; starts floating around in the blood stream, it can float freely in the larger
            arteries.</p>

        <p>But if the plaque floats up to these small capillaries, (Click to start animation) it will block blood flow
            to the tissue downstream.</p>

        <p>The same type of thing happens when blood sugar is too high. High blood sugar causes the red blood cells to
            swell up, (Click to animate) and this can block off capillaries as well. High blood sugar also damages the
            walls of blood vessels increasing the risk for high blood pressure.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}How does physical activity prevent cognitive decline?{/t}</h2>
        <hr/>
        <p>In addition to protecting our vascular health and thereby our brain health, more recent evidence suggests
            that physical activity seems to also play a direct role in promoting cognitive performance, cognitive
            reserve and brain health.</p>
        <ul>
            <li>Directly, physical activity has been found to influence the processes by which learning and memory
                occur.
            </li>
            <li>Animal studies have shown that aerobic exercise (a rat running on a wheel) can have a profound effect on
                increasing the number of new brain cells that are born.
            </li>
            <li>In humans physical cardiovascular exercise is linked to increase in the size of the structure
                responsible for forming new memories (hippocampus) (Click to Reveal Circle)
            </li>
            <li>
                Physical activity has been found to increase a group of proteins called nerve growth factors . There are
                lots of these growth factors, but most notably:
                <ul>
                    <li>Cardiovascular exercise has been linked with increased production of one called BDNF
                        (brain-derived neurotrophin factor). BDNF has also been found to be more abundant in people with
                        higher cognitive abilities.
                    </li>
                    <li>Strength training has been shown to increase a different nerve growth factor called IGF-1
                        (insulin-like growth factor-1).
                    </li>
                    <li>
                        These nerve growth factors help neurons and dendrites grow and thrive. Some have even referred
                        to these growth factors as<strong> Miracle Grow for your brain cells</strong>.
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Physical Activity and Cognitive Reserve{/t}</h2>
        <hr/>
        <p>
            For example, in a recent study, researchers put 120 healthy older adults participants on a fitness plan for
            1 full year. Half of them (60) were assigned to a moderate to high intensity <strong>aerobics class</strong>
            3 times per week and the other half (60) were assigned to a <strong>stretching and toning class</strong>
            that also met 3 days a week.
        </p>

        <p>MRI brain scans were given before the program, half-way through the program (at 6 months) and at the end of
            the program (1 year after the first scan).</p>
        <ul>
            <li>Before the program, the groups’ brain scans were not any different.</li>
            <li>
                After 6 months and again after a year:
                <ul>
                    <li>
                        The aerobics training increased the volume of the hippocampus by 2%,
                        <ul>
                            <li>(2.12% over baseline at 6-months and 1.97% over baseline at 12-months)</li>
                            <li>effectively reversing age-related loss in volume by 1 to 2 years</li>
                        </ul>
                    </li>
                    <li>Volume for the stretching control group on the other hand declined 1.4% (1.40% at 6-months and
                        1.43% at 12-months)
                    </li>
                </ul>
            </li>
        </ul>
        <p>Erikson, et al, 2010 http://www.pnas.org/content/early/2011/01/25/1015950108.full.pdf</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}How much Physical Activity do we need?{/t}</h2>
        <hr/>
        <p>One study found that those who participated in leisure-time physical activity at least twice a week in
            midlife (between the ages of 40 and 55), lowered their odds of developing Alzheimer’s disease by 60%. The
            largest impact was in people who had a genetic predisposition to dementia (meaning that they carried the
            APoE-4 allele, a gene found to be linked to Alzheimer’s disease), but the effect of exercise was still
            significant in people without this gene meaning that everyone’s risk for dementia seemed to be lower if they
            exercised.</p>

        <p>Another study looked at regular exercise, which they measured by asking participants how many times a week
            they participated in a variety of specific types of exercise. They found that regular exercise was
            associated with a reduced risk for all types of dementia 6 years later. They also found that those who
            exercised 3 or more times per week had a 32% reduction in risk for dementia. The finding was greatest among
            those who had poor physical functioning at the start of the study.</p>

        <p>A similar study found that those who participated in moderate or high levels of physical activity and were
            dementia-free at the beginning of the study had a significantly reduced risk of cognitive impairment 2 years
            later.</p>

        <p>It seems clear that the more physical active people are the better off they are.</p>

        <p>But you don’t have to immediately become a body builder or start training for marathons to reap the benefits
            of exercise. Researchers have found positive results when they analyzed physical activity, including
            walking.</p>

        <p>The more walking, the better, but even walking briskly 90 minutes a week (that’s only 15 minutes a day) was
            all that was needed to improve cognitive outcomes and increased blood flow in the brain. That translates to
            about walking as little as 6-9 miles a week, which is really a just a pretty nice walk (2-3 miles), 3x/week.
            That seems doable doesn’t it?</p>

        <p>There is still much research that needs to be done in this area to understand the relationship between
            exercise and specific types of dementia, but from what we know so far, exercise seems to be one of the best
            ways to protect your brain as you age. It has some of the best evidence supporting it in terms of helping
            people build the “hardware” (brain cells) aspect of cognitive reserve.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Increasing physical activity: The FITT Principle{/t}</h2>
        <hr/>
        <p>As you can see from the last couple of slides, it’s not just about how often you exercise. The brain benefits
            of exercise appear to increase when you increase several different factors related to your physical
            activity.</p>

        <p>One group of scientists pulled together a series of research articles and reviewed them inclusively. They
            found that the amount of impact that exercise had on cognition depended upon several factors including the
            length of the fitness-training intervention, the type of the intervention, and the duration of training
            sessions, Generally, higher levels of exercise at higher intensities for longer amounts of time throughout
            the life course appear to be most beneficial.</p>

        <p>Because the risk of dementia decreases with increased intensity and duration of exercise, we recommend that
            people who already have a habit of exercising, set goals to step it up in some way.</p>

        <p>So, when we are thinking about improving our brain health through increased physical activity, there are a
            few different dimensions that you can consider following the FITT Principle:</p>
        <ul>
            <li>Frequency of our workouts – how often we plan to do them, for example, will we walk every day or 4 days
                per week?
            </li>
            <li>Intensity of our workouts – for example, are we going to walk at a brisk or a leisurely pace?, the</li>
            <li>Time of our sessions – how long will we walk for each time? And, of course, the</li>
            <li>Type of our workout – will it in fact be walking, or another type of exercise such as swimming, playing
                tennis, lifting weights or something else.
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Types of Physical Activity{/t}</h2>
        <hr/>
        <p>Frequency, Intensity and Time for our physical activity is pretty straightforward, but what do we mean by
            type? Here are some examples of the major categories of types of physical activities. It is important for
            older adults to consider doing a variety of different types of workouts because they can all be beneficial
            to us in different ways.</p>

        <p>We tend to experience the greatest benefit from endurance type exercises, however, we can’t keep up with
            endurance routines without maintaining our flexibility and balance. When we were young, balance was
            something that came naturally to us, as we age, it is something we need to work on to maintain. Flexibility
            is also often over-looked in terms of its importance. In order to maintain our range of motion to be able to
            do things like reaching a can on the top shelf or bending down to pick up something that we dropped we need
            to work on our flexibility. Finally, maintaining our strength is another key component that will allow us to
            continue caring for ourselves and keeping up with our daily activities. Strength training can also help
            build bone density and seems to help us generate a different type of nerve growth factor than endurance
            exercise. Ideally, you should try to incorporate each one of these types of exercises into your routine.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Making the most out of our daily activities{/t}</h2>
        <hr/>
        <p>In order to help maintain brain health, it is recommended that we live a lifestyle enhanced by as much
            physical activity as possible. There are a variety of ways we could easily increase the amount of activity
            in our daily lives, these are just a few suggestions.</p>
        <ul>
            <li>When you’re going to the store, park far away from the door in order to limit the time you waste looking
                for parking and to get more steps in your day.
            </li>
            <li>Or even, park a block away from your destination – this way you don’t have to take time out of your day
                for your physical activity, just leave a few minutes early – as the research showed us, every bit of
                activity that we do will be beneficial to us.
            </li>
            <li>Walk instead of drive.</li>
            <li>Walking around the block in the middle of the day is a great way to take a break from whatever you are
                doing and refresh yourself and to burn some extra calories and benefit our brains!
            </li>
            <li>
                Make 2 laps at the grocery store:
                <ul>
                    <li>1) A Memory Lap: Make a grocery list, but don’t use the list when you shop – this is a way you
                        exercise your memory
                    </li>
                    <li>2) Then when you’re done, check the list and take another lap to get anything you missed – this
                        helps you get some extra steps into your day and works your memory.
                    </li>
                </ul>
            </li>
            <li>
                Stairs instead of the elevator – can even take the stairs up a few flights and then switch to the
                elevator if going up a lot of stories.
                <ul>
                    <li>Fun Fact: One woman who worked at a desk all day, said she never got out to do much walking. She
                        decided that every time she had to use the restroom she would walk up then down a flight of
                        stairs – she lost 10 pounds in 3 months! Find fun ways to add activity to your day.
                    </li>
                </ul>
            </li>
            <li>Plan a walking date instead of a lunch date. Remember, plans with friends don’t always have to be over
                food – plan a date to get together to walk the mall, or walk along the lakefront path or a forest path.
            </li>
            <li>Wear Comfortable Shoes. If you wear uncomfortable shoes you will not walk as much as you do if your
                shoes are comfortable – so wear comfortable shoes everyday!
            </li>
            <li>
                Wear a pedometer to help keep you conscious of the number of steps you are getting it – if it is 7pm and
                you realize you haven’t done much for the day you could do a few extra laps around your home or
                apartment just to get in that movement.
                <ul>
                    <li>It is recommended that, on average, everyone should walk 10,000 steps a day (this is the
                        national recommendation by the surgeon general – your daily goal may be less or more, but this
                        gives us a sense of where an average American should be in order to live an enhanced physically
                        active lifestyle).
                    </li>
                </ul>
            </li>
            <li>
                Keep weights in clear view – under the coffee table, somewhere where you will see them regularly as a
                cue to use them. Lift weights during commercials or while on the phone
                <ul>
                    <li>Pace while talking on the phone</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Standing{/t}</h2>
        <hr/>
        <p>Another thing you can do to increase your activity and help your body is to take opportunities to stand as
            much as possible.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Strategy #2 - Visualization{/t}</h2>
        <hr/>
        <p>Visualization: The Roman Room Method (a.k.a. the Method of Loci).</p>

        <p>We use our verbal skills so much day to day that sometimes it seems as though most of us have forgotten that
            we also have a visual memory. We try to remember things by “telling ourselves” to remember it (auditory or
            verbal) as oppose to perhaps “picturing it” (visual). In fact, many scientists argue that our visual
            memories may be stronger than our verbal memories. They draw this conclusion from some memory studies but
            also because “language” or verbal skills evolved so much later than our visuospatial skills. Our visual
            memories may be so effective because they have been part of our brains longer as our hunter and gathering
            ancestors had to use them to navigate large distances to survive.</p>

        <p>Some scientists argue that our new reliance on verbal memory may be the result of having become a literate
            society and the wide availability of written text, so we have now grown accustom to “externalizing” our
            memories. Nowadays we write so many things down, keeping calendars and datebooks, communicating by email and
            text message, reading stories in books and now on e-readers as opposed to memorizing stories that we keep in
            our heads until we have the opportunity to tell to someone else. Thus we seem to have lost some very
            effective memory techniques that were relied upon by pre-literate and even early literate cultures who
            didn’t have wide access to books. Remember that tales like The Odyssey were passed down almost verbatim for
            centuries before anyone wrote them down. People back then had strategies for remembering the details of
            these epic tales. And even after people could read, when books were scarce, they championed their ability to
            memorize vast texts. Now we can read
            e-books or even read the internet until we are cross-eyed. We can “bookmark” and “highlight” and write
            things down, so our memories are a bit weaker than our ancestors’. We could argue that we now have other
            skills, like how to organize all of this information, and we are likely more efficient, but nevertheless we
            agonize about our “failing memories.” So to make our memories stronger, we will practice some of the
            strategies used by people before words took over the world.</p>

        <p>But just because we do not overtly use visual memory skills as much anymore doesn’t mean that we no longer
            possess the ability to do so, especially since it seems that we are somewhat “hard wired” to benefit from
            using visualization to improve our memories.</p>

        <p>Let’s talk more about using “visualization” to improve our memories:</p>

        <p>One quick way to use visualization is to take mental snapshots of things such as:</p>
        <ul>
            <li>Where you placed your keys</li>
            <li>Where you parked your car</li>
            <li>The arrangement of items on your desk before you take them off to dust</li>
            <li>The contents of your refrigerator</li>
            <li>Even a list</li>
        </ul>
        <p>You can also use your visual memory to help you memorize directions somewhere. Instead of relying on the GPS,
            you can challenge yourself to memorize a new or somewhat unfamiliar route.</p>
        <ul>
            <li>If the route is brand new to you, then you can visualize the road signs that you will be on the lookout
                for and then imagine right and left arrows for the turns.
            </li>
            <li>If you sort of know the area, then try visualizing the intersections where you will make each turn.</li>
        </ul>
        <p>If you try this challenge then it will probably be a good idea to put the GPS or a map in the car just in
            case you get yourself</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Exercise{/t}</h2>
        <hr/>
        <h4>Visualization: The Roman Room Method</h4>

        <p>For today’s memory exercise, you are going to learn about and practice a very powerful visualization exercise
            that can be used to memorize virtually anything, but it is particularly useful when it comes to memorizing
            lists. This technique is called the “Method of Loci,” but it is also sometimes called the “Journey Method”
            or the “Roman Room Method” because it was used by ancient Romans and likely the Greeks before them. As you
            learned in today’s lecture, learning and practicing this method on a regular basis can bulk up the pathways
            in the frontal lobes underlying this skill.</p>

        <p>How this works is that you use your visual memory to help you out. You place vivid mental images of whatever
            it is that you are trying to remember along a pathway around a familiar location. The easiest place to start
            is within a home that is solidly ingrained in your memory. For most people this is the house they grew up
            in.</p>

        <p>Let’s take a moment to take a good look around this familiar space. Imagine the driveway leading up to the
            house, recall the look of the path leading up to the front door, imagine the entry way just inside the front
            door, look around the front room, walk down the hallway and recall a mental picture of each room along the
            way. Take a couple of moments to complete this mental tour of this memorable home as though you were there
            for an open-house. When you make it back to the front room join us back in this room, maybe you’ll need to
            open your eyes.</p>

        <p>Now we are going to remember a shopping list for brain healthy foods by placing very large, vivid, and
            humorous representations of them throughout the pathway we just took through this familiar house.</p>
        Here is the shopping list of Brain Healthy Foods:
        <ul>
            <li>2 bunches of salad greens</li>
            <li>1 quart of blueberries</li>
            <li>1 pound of shelled English walnuts</li>
            <li>2 pounds of fresh wild salmon</li>
            <li>A quart of low-fat Greek yogurt</li>
            <li>2 bars of dark chocolate</li>
            <li>3 bottles of red wine</li>
        </ul>
        <p>Now, start off by imagining that as you’re walking up the pathway to the house, it has been neglected for
            some time and you have to push back large, over-grown leaves that look like salad greens or leafy lettuce
            that are taller than you are. Every time you move one out of the way a new one slaps you in the face.</p>

        <p>The trick here is to imagine things that are absurd, unusual, humorous and even arousing in some way.
            Emotional memories are often more salient because they get an encoding boost from the emotional brain
            structures that live near the memory center, so try to make walking through this pathway as dramatic as a
            Hollywood movie.</p>

        <p>So you finally make it through the overgrown salad greens and you arrive at the front porch. Blocking your
            way to opening the door is a container that looks like a quart of blueberries except that the container is
            the size of a hot-tub and there are little kids inside smashing blueberries over each other’s heads, making
            a colossal mess.</p>

        <p>You finally manage to get the door open and once inside the entry way, you are met by a giant shelled walnut,
            dressed like one of the guards at Buckingham palace, asking you to give him a pound as a fee for passing
            into your childhood home. You pay the walnut and move into the living room where you see a whole, 2-pound
            salmon, disgusting mouth and all, laying across the vent on the back of the old television set, steaming
            from the heat coming off of the tube of the TV, causing it to cook a little and to stink a lot!</p>

        <p>Moving down the hallway, you pass by the first room and see that inside there is another giant
            quart-sized-looking container of yogurt and a Greek god or goddess of your choosing, but who is skinny with
            “low-fat”, is taking a bath in the yogurt. Moving farther down the hallway, you look inside a bedroom and
            see two giant bars of dark chocolate laid out on the bed as though they are sleeping side-by-side. It can
            help your memory if these bars of chocolate grow faces and you see them wake up and look at you or something
            like that. Finally you arrive in the kitchen and open up the refrigerator door to see three large bottles of
            red wine that also have faces and start “whining” at you, so you immediately close the door to make them
            stop being so annoying.</p>

        <p>Now that you’ve taken your walk through your own “Roman Room,” rehearse this path a few times later today,
            and we will see next week how well it stuck with you. The list is in your workbook in case you need to brush
            up on any items, but it’s possible through this exercise in what we call “elaborated encoding” that you may
            not have to reference it.</p>

        <p>A great resource for learning more about this and a few other methods like it is the book Moonwalking with
            Einstein: The Art and Science of Remembering Everything by Joshua Foer, an entertaining account of how an
            average journalist (Mr. Foer, himself) trains to win the U.S. Memory Championship.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Sample Memory Goals{/t}</h2>
        <hr/>
        <p>The more Memory Palaces you have, the easier it will be for you to use the Roman Room Technique in different
            circumstances. So spend some time this week &ldquo;revisiting,&rdquo; (either literally or in your mind)
            familiar spaces that you can use as Memory Palaces. Then spend some time practicing this technique. Even
            though it is powerful (you may be surprised at how easily you remember the list of foods from this week) it
            does take some work, and as with most things, the more you practice them the easier they get.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Goal Setting for Physical Activity{/t}</h2>
        <hr/>
        <p>Lifestyle changes are difficult. In order to help you do that, we are going to help you create short and long
            term goals. Goal setting has been found to be an effective way to help create behavioral habits and maintain
            healthy behaviors into everyday lifestyles.</p>

        <p>Start by identifying a long term goal, then create action steps for short-term (1-week) to help you reach
            your long term goals. Often times, long term goals are too daunting that we don&rsquo;t even know where to
            begin!</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Action Steps for Physical Activity{/t}</h2>
        <hr/>
        <p>Short term goals should be realistic and attainable, they should be specific – include each element of the
            FITT principle where appropriate, and they should be something that you will enjoy and are likely to
            complete.</p>

        <p>Remind yourself of your action items – write them down, and keep track of your progress</p>

        <p>Don’t let yourself get discouraged, remember, it is hard to start something new in life. It doesn’t matter
            how long it takes you to get to your long-term goals, just as long as you keep working towards it is what
            counts.</p>

        <p>And make sure to reward yourself for your accomplishments. Changing your lifestyle is difficult to do and you
            need to be patient with yourself and give yourself credit for trying!</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}This Week&rsquo;s Goals{/t}</h2>
        <hr/>
        <h5>Memory Goal:</h5>
        <ul>
            <li>Goal: Practice a Roman Room using a grocery list, a to-do list, the names of people in this group, etc.
                once each day
            </li>
            <li>Daily Reward: Five strawberries at dinner</li>
        </ul>
        <h5>Behavior Goal:</h5>
        <ul>
            <li>Goal: Increase the intensity of my daily walk (walk faster) for 5 minutes</li>
            <li>Daily Reward: An extra 5 minutes relaxing in the shower</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-22" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr/>
        <p>{t}Physical Activity Helps the Brain by:{/t}</p>
        <ul>
            <li>{t}Improves vascular health{/t}</li>
            <li>{t}Increases brain volume{/t}</li>
            <li>{t}Increases production of brain cells (neurogenesis){/t}</li>
            <li>{t}Increases production of nerve growth factors (BDNF, IGF-1){/t}</li>
        </ul>
        <p>{t}White dots are silent strokes that can build up over time to cause cognitive decline (vascular
            dementia){/t}</p>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a>
    </div>
</div>
</div>
<div id="lesson3">
<div id="lesson-3-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Emotional{/t}</h2>
        <hr/>
        <h4>{t}Module Outline{/t}</h4>
        <ul>
            <li>Check-in and Review</li>
            <li>Effects of Emotions on the Brain</li>
            <li>Memory Exercise</li>
            <li>Goal Setting</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Check-in{/t}</h2>
        <hr/>
        <p class="forum">Please remember the importance of being compassionate with yourself. Change is hard, and if we
            get mad at ourselves for not changing then we are more likely to go back to our old patterns.</p>
        <h4>FITT is Frequency, Intensity, Time &amp; Type</h4>
        <h5>Ways that Physical Activity helps the brain:</h5>
        <ul>
            <li>Improves vascular health (blood pressure, cholesterol, heart health, diabetes)</li>
            <li>Reduces risk of white dots</li>
            <li>Increases neurogenesis (growth of new brain cells)</li>
            <li>Increases size of brain structures (hippocampus – used for memory)</li>
            <li>Increases release of nerve growth factors (BDNF, IGF-1, aka Miracle Grow for the brain)</li>
        </ul>
        <h5>Last week’s Memory Strategy:</h5>
        <ul>
            <li>Visualization</li>
            <li>Roman Room Method / Method of Loci / Memory Palace</li>
        </ul>
        <p>Brain Healthy Food (Grocery) List:</p>
        <ul>
            <li>2 bunches of salad greens</li>
            <li>1 quart of blueberries</li>
            <li>1 pound of shelled English walnuts</li>
            <li>2 pounds of fresh wild salmon</li>
            <li>A quart of low-fat Greek yogurt</li>
            <li>2 bars of dark chocolate</li>
            <li>3 bottles of red wine</li>
        </ul>
        <p>Gather honest feedback about the activity log and memory strategy to discuss in the weekly call.</p>

        <p>If people did not practice the memory strategy, have them imagine and generate scenarios where they might use
            it. Also emphasize that memory strategies are most effective when they are practiced,</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Investing in Brain Health{/t}</h2>
        <hr/>
        <p>The last couple of weeks we have talked about actively investing in our brain reserve (or Cognitive Reserve /
            Brain 401(k)) in order to prevent or delay the onset of dementia. Last week we talked about maximizing
            contributions to our cognitive reserve through physical activity.</p>

        <p>Current module:</p>
        <ul>
            <li>will focus a little more on minimizing losses by discussing the impact of emotions on our brains,</li>
            <li>but we will also discuss briefly how emotions can also help maximize contributions.</li>
            <li>We will also give you some tools for reducing stress and improving focus.</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Emotions and the Brain{/t}</h2>
        <hr/>
        <p>Emotions are an important part of being human. They motivate us to do pretty much everything we need to do to
            ensure our survival: mate, work, avoid harm, etc.. They also add depth and dimension to our lives. Most of
            the time emotions help us, but there are times when they get in our way. Today we will discuss the ways
            emotions impact the way your brain works and help you develop strategies to work more effectively with your
            emotions to improve your thinking and increase your cognitive reserve.</p>

        <p>Since we experience such a wide range of emotions, to cover all of the ways that emotions affect the brain
            would be a whole course all by itself. Therefore, our discussion will focus on the short-term (or “acute”)
            effects of stress on how we think and the long-term effects of chronic stress on our bodies and brains.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Stress{/t}</h2>
        <hr/>
        <p>Stress is an umbrella term that we use colloquially to describe a pretty wide range of emotions. Typically we
            think of stress as something negative, such as “I’m so stressed out,” but some people will also distinguish
            between “good stress” and &quot;bad stress."</p>

        <p>While our minds conceive of these emotions as very different things, our bodies actually don’t know the
            difference. To understand the impact that stress has on our brains, we need to spend a little time talking
            about the body’s reaction to stress. What we call “the stress response.”</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The Physical Stress Response{/t}</h2>
        <hr/>
        <p>Here is what happens in the body and brain when we become stressed:</p>
        <ul>
            <li>When we are faced with threats, emergencies, or what we think are emergencies, our physical stress
                response, called the fight-or-flight response, is switched on.
            </li>
            <li>
                The fight or flight response involves the activation of multiple systems in the body, generally
                following this sequence of events (From Left to Right):
                <ol>
                    <li>Structures in the brain and body from our hormonal (or endocrine) system called the HPA Axis
                        become active, which triggers
                    </li>
                    <li>
                        a release of
                        <ul>
                            <li>adrenaline and</li>
                            <li>cortsol, activating the the fight-or-flight state, which activates</li>
                        </ul>
                    </li>
                    <li>the primitive, emotion-related structures in the brain collectively called the “Limbic System”
                        or the Emotional Brain
                    </li>
                </ol>
            </li>
            <li>The fight-or-flight response is designed to help us survive life-threatening situations—in other words,
                it helps us to escape or defend ourselves when we feel threatened. This causes a uniform series of body
                sensations and changes in how our brain works.
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What We Feel Physically{/t}</h2>
        <hr/>
        <ul>
            <li>Heart rate increases, pumping oxygenated blood to our skeletal muscles in preparation to run away</li>
            <li>We sweat – like the body’s car radiator kicking-in in preparation for the exertion required to run
                away
            </li>
            <li>Blood flow is moved to our muscles, which become tense, preparing us to run away</li>
            <li>Goose bumps – part of the skin’s cooling process</li>
            <li>Digestion stops – as blood flow is diverted to our skeletal muscles, the body diverts blood flow away
                from our digestive organs so as to not waste valuable resources. Tension in this area may also increase.
                This can lead to irritable bowl syndrome over time. Other unpleasant things can occur when digestion is
                not allowed to proceed naturally.
            </li>
            <li>Respiration increases preparing us to provide our muscles oxygen in order to run away.</li>
            <li>Blood vessels dilate (vasodilation) – allowing more blood flow to the body’s muscles.</li>
            <li>Eyes widen – allowing us to be able to look around for threats</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Stress Can Impair Memory{/t}</h2>
        <hr/>
        <p>When we are stressed, the brain puts a lot of effort into remembering what it thinks is important about the
            situation, namely things that will ensure our survival. Therefore, even though stress may improve memory for
            certain things, the details that are remembered may not be the things that we want to remember. This is how
            acute stress can get the way of our thinking abilities. More specifically, it distracts our attention from
            the things we may want to remember.</p>

        <p>Since we humans are uniquely able to activate our stress response simply with our thoughts, what starts off
            as a senior moment, can be made much, much worse if we start to worry about what that means about our
            brains.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Escaping Emotional Hijackings {/t}</h2>
        <hr/>
        <p>The reason this happens is because when the stress response kicks in, it activates the “emotional brain” or
            the “Limbic System.” (Point to brain image) This image is a transparent look at the brain, showing some of
            the deep structures that make up the more primal parts of our brain.</p>

        <p>The Limbic System is also sometimes called the “reptilian (or reptile) brain” because in the brains of
            reptiles such as alligators and snakes (creatures that have a reputation for being aggressive and
            persnickety), Limbic structures take up most of the brain real estate. As humans evolved, we never gave up
            those primitive parts of our brains, instead we grew new structures around them, most notably the region we
            call the prefrontal cortex (or frontal lobes), which surrounds the limbic system and works hard to literally
            inhibit the “reptilian” brain.</p>

        <p>The prefrontal cortex keeps the emotional brain under pretty good control most of the time. BUT because the
            emotional brain is so important for ensuring our survival, when it becomes active through the
            fight-or-flight response, most of the brain’s resources (literally blood flow) get diverted to this
            region.</p>

        <p>The prefrontal cortex is also a very energy-hungry region, so when blood-flow is diverted to the limbic
            system, the prefrontal cortex can’t work as well as it normally does when we are relaxed. It’s like when the
            lights dim when you turn on the toaster.</p>

        <p>An important way to use your brain more effectively is to know when the logical prefrontal cortex has been
            hijacked by the emotional part of the brain (the limbic system) and take steps to release it. By noticing
            when a the stress response kicks in and taking steps to calm down, we can direct our brains to focus better,
            dialing down the emotional brain and dialing up the prefrontal cortex. One way to do this is to learn how to
            activate the PNS, which you will learn in today’s demonstration.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Using Stress to Optimize your Performance{/t}</h2>
        <hr/>
        <p>On the other hand, stress isn’t always “all bad.” This brings us back to that concept of “good stress” and
            “bad stress.”</p>

        <p>An absence of stress can make us unmotivated.</p>

        <p>Mild to moderate SNS activation can be useful for:</p>
        <ul>
            <li>Feeling enthusiasm</li>
            <li>Maintaining attention - our senses become sharper under SNS activation</li>
            <li>Being motivated</li>
            <li>Working passionately at something</li>
        </ul>
        <p>This may explain some elements of procrastination.</p>

        <p>This inverted u-shaped curve is referred to as the Yerkes-Dodson Curve, and it was proposed by Yerkes and
            Dodson to explain this phenomenon. You can use this curve to your advantage by thinking about where you fall
            on the curve in any given situation where you want perform at your best. If you feel you are not performing
            at your best, are you on the left side of the curve and unmotivated? Or are you on the right side and
            “stressed-out”?</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Stress Can Even Improve Memory (Sometimes){/t}</h2>
        <hr/>
        <p>Stress can also improve certain types of memory. As we have been discussing, activation of the SNS leads to
            activation of the “emotional” part of the brain, which actually includes the hippocampus, the structure
            responsible for forming new memories, so in some instances, stress can help facilitate some memories,
            particularly the threatening or highly arousing details of those memories.</p>

        <p>Ever experience a tragedy or some highly arousing event and you can remember it as though it happened
            yesterday? This is an example of a “stress-enhanced memory” also called “flash-bulb memory”</p>

        <p>This happens because the Amygdala - a structure in the brain that controls some negative emotions such as
            fear and disgust - sits right in front of the Hippocampus (the structure that forms new memories) and the
            cells in these two structures are highly interconnected. When the Amygdala is activated by fear or disgust,
            it sends a lot of signals to the the hippocampus, giving it a boost and helping us remember some things
            better. This means that memories that contain an element of fear or drama tend to stick with us better.</p>

        <p>You can harness this effect when you are trying to remember something by adding a flare for the dramatic.
            That is why we made the images in our Roman Room exercise so absurd and in some cases either disgusting or
            arousing.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Relaxation Response{/t}</h2>
        <hr/>
        <p>This concludes the acute or immediate effects of stress on our brains and thinking abilities. Now let’s talk
            more about the long term effects of too much stress.</p>

        <p>To understand this, we need to introduce you to the Relaxation Response. This is the opposite of
            fight-or-flight, and many scientists refer to it as “rest-and-digest.” These two “nervous systems” cannot be
            active at the same time.</p>

        <p>When rest-and-digest kicks in:</p>

        <p>Heart rate and respiration slow back to the resting baseline Blood flow is re-routed from the skeletal
            muscles to the internal organs, so muscles relax Salivation occurs and Digestion resumes, allowing our body
            to consume and convert food to energy in preparation for the next fight-or-flight spike Pupils constrict
            back to their baseline Rest-and-Digest is intended to be our normal resting state, while fight-or-flight is
            actually a change from our resting baseline.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Why Zebras Don&rsquo;t Get Ulcers{/t}</h2>
        <hr/>
        <p>Even though there are times when the stress response can be good for us, we want to be able to recover, or
            come down from those necessary fight-or-flight spikes quickly and avoid the unnecessary spikes as much as
            possible. Otherwise, we are setting ourselves up for all sorts of “stress-related disease."</p>

        <p>The Stress and Relaxation responses seem to have evolved in order for us to get our selves out of sticky
            situations. So most animal species will have a brief fight-or-fight spike and will return to baseline.
            Author and neuroscientist Robert Sapolsky, PhD describes this as why “Zebras Don’t Get Ulcers” in his book
            by the same name. The zebra is consistently in a relaxed state unless there is an eminent threat, say a lion
            from which the zebra will run away after getting a boos of adrenaline from the stress response, and then go
            about resting and recovering again.</p>

        <p>Human and other social primates, however, are unique in that we can activate the Stress Response purely with
            our thoughts. So instead of lions chasing us, we activate our fight-or-fight system in response to:</p>
        <ul>
            <li>Chronic stressors</li>
            <li>Big life changes such as moving or loss of a loved one</li>
            <li>Daily hassles and minor irritations such as being stuck in traffic</li>
            <li>
                Even just WORRYING
                <ul>
                    <li>that something bad might happen</li>
                    <li>about paying our bills on time</li>
                </ul>
            </li>
            <li>THINKING something is an emergency even when it’s not</li>
        </ul>
        <p>Due to chronic stressors and daily hassles, most of us experience an ongoing activation of the stress
            response. Therefore, most people may not be getting the “rest and digest” breaks that their bodies and
            brains need.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Chronic Stress: Wear and Tear on the Body{/t}</h2>
        <hr/>
        <table width="100%" border="3">
            <tr>
                <th width="50%">
                    <p>Chronic Stress Disturbs all of these Body Systems:</p>
                </th>
                <th>
                    <p>Makes us more vulnerable to:</p>
                </th>
            </tr>
            <tr>
                <td width="50%">
                    <ul>
                        <li>Nervous system</li>
                        <li>Cardiovascular system</li>
                        <li>Endocrine (hormone) system</li>
                        <li>Gastrointestinal system</li>
                        <li>Immune system</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>High Blood Pressure</li>
                        <li>Hardening of the arteries</li>
                        <li>Heart attack and Stroke</li>
                        <li>Type II diabetes</li>
                        <li>Cancer</li>
                        <li>Ulcers</li>
                        <li>Colitis &amp; IBS</li>
                        <li>Diarrhea &amp; Constipation</li>
                        <li>Colds &amp; Flus</li>
                        <li>Slower wound healing</li>
                        <li>Infection</li>
                        <li>Erectile dysfunction</li>
                        <li>Lowered libido</li>
                        <li>Chronic Pain</li>
                        <li>Sleep Disorders</li>
                    </ul>
                </td>
            </tr>
        </table>
        <cite>(Licinio et al, 1995,; Wolf, 1995; Salpolsky, 2004; Kabat-Zinn, 1990)</cite>

        <p>Over time, this chronic stress response can lead to wear and tear on the body and the brain.</p>

        <p>It disturbs basically every major organ system and can makes us more vulnerable to many health problems that
            over time can affect our brains. A healthy brain is dependent on a healthy body. Disruption in pretty much
            any organ system can impair the brain.</p>

        <p>What sorts of health conditions do you think are caused by or exacerbated by chronic stress?</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Chronic Stress is Toxic to the Brain{/t}</h2>
        <hr/>
        <p>Studies show negative effects of cortisol on neurons (brain cells) and brain function.</p>

        <p>Cortisol is:</p>
        <ul>
            <li>toxic to brain cells;</li>
            <li>inhibits the birth of new brain cells; and</li>
            <li>weakens synaptic connections and prevents the formation of new connections.</li>
        </ul>
        <cite>(Hanson, 2009; 1990; Sapolsky et al., 2004, Uno et al, 1994) </cite>

        <p>In addition to the indirect effects of stress taking a toll on the body, chronic stress also seems to
            directly lower cognitive reserve.</p>

        <p>As stated earlier, cortisol is released during the stress response. If levels get too high or the brain is
            not give a chance to flush the cortisol out through PNS breaks, then cortisol can have negative effects on
            brain cells and brain function.</p>

        <p>For example:</p>
        <ol>
            <li>Cortisol is toxic to brain cells.</li>
            <li>Cortisol inhibits the birth of new brain cells</li>
            <li>Cortisol weakens synaptic connections and prevents the formation of new connections.</li>
        </ol>
        <p>These effects can lead to a decline in cognitive function and can interrupt the ability to make new
            memories</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The Stress and Anxiety Cycle{/t}</h2>
        <hr/>
        <p>Chronic stress has other long-term effects in that it can actually change our brains to make us more &ldquo;sensitive
            to future stress.&rdquo;</p>

        <p>Stress often leads to the feeling of anxiety, or being &ldquo;keyed up&rdquo; or &ldquo;on edge&rdquo;. And
            chronic stress and activation of the fight-or-flight response actually makes it easier to become
            anxious.</p>

        <p>This increase in sensitivity occurs in part because, as we&rsquo;ve discussed before, cells that fire
            together wire together-- so over time with repeated activation those connections get stronger and the
            emotional brain becomes more sensitive to stressful cues. So then we tend to react more strongly to
            perceived threats, which can repeat the cycle. Over time we may develop an ongoing feeling of anxiety
            regardless of the situation. This ongoing anxiety is called trait anxiety.</p>

        <p>Chronic stress can become like a pot on a low simmer. That low bubbling can result in the chronic feeling of
            anxiety, and when faced with a stressor, we react strongly—the simmer turns into a boil. This does not feel
            good, and definitely does not make us better at problem-solving or thinking clearly.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Stress and Depression{/t}</h2>
        <hr/>
        <p>Stress may also lower our cognitive reserve by way of increasing the risk for depression.</p>
        <ul>
            <li>Stress hormones have been linked to the brain chemicals associated with depression</li>
            <li>Depression has been shown to be linked to Alzheimer’s disease and cognitive decline</li>
            <li>
                Stress and depression also exacerbate one another, creating a cycle whereby the stress response can
                trigger negative thoughts, destructive beliefs and pessimism – these thoughts trigger the stress
                response and so on.
                <ul>
                    <li>For Example: Having negative thought about yourself (”I should be better”; “I’m not very good”)
                        can trigger the fight or flight response, leading to more of those types of negative thoughts
                        about yourself, which is linked to depression. The thoughts trigger the stress response, the
                        stress response triggers more thoughts, and so on.
                    </li>
                    <li>The more we have these thoughts (or activate those negative belief systems), the stronger the
                        underlying brain pathway gets.
                    </li>
                </ul>
            </li>
        </ul>
        <p>The details about stress hormones and depression chemicals:</p>
        <ul>
            <li>Stress hormones deplete norepinephrine. This can make us feel flat or apathetic and makes it hard to
                concentrate
            </li>
            <li>Stress hormones lower the production of dopamine, which makes it harder to enjoy pleasurable
                activities
            </li>
            <li>Stress reduces serotonin, a chemical which is essential for maintaining a good mood)</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What can we do? {/t}</h2>
        <hr/>
        <p>So, now we know that the stress response can wreak havoc on us physically, cognitively, and emotionally. We
            may be feeling pretty hopeless.</p>

        <p>
            The good news is, we now understand that there are techniques we can use to <u>actively engage the
                relaxation response</u>.
        </p>

        <p>Any time you can activate rest-and-digest state, you are providing your body and mind the opportunity to
            recover from the stress response and clear out harmful stress hormones like cortisol. The calming, steadying
            influence of the parasympathetic nervous system restores balance to our system after a spike in the fight-or
            flight response.</p>

        <p>With practice you can lower your baseline level of stress and feel more calm, restoring balance and returning
            your body to the more natural Stress/Recovery cycle. This will lower your risk for that huge list of
            stress-related medical issues, including cognitive decline!</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Put yourself into Rest-and-Digest{/t}</h2>
        <hr/>
        <p>Doctors used to believe that the stress response was an automatic process brought on by a division of the
            nervous system that we could not control, but that belief is long gone! We now know that we have the power
            to take control of our Stress / Relaxation cycle, and the easiest way to do this is to actively engage the
            Relaxation Response.</p>

        <p>Here are some ways to actively engage your Relaxation Response.</p>

        <p>Relaxation techniques provide the body the opportunity to relax, you can simply sit for a while and slow your
            breath.</p>
        <ul>
            <li>
                Slowing the breath:
                <ul>
                    <li>Breathing at a rate of about 4 seconds in / 6 seconds out can engage the rest-and-digest
                        response.
                    </li>
                    <li>Don’t breath deeply (this may cause hyperventilation and trigger fight-or-flight), just breath
                        normally, just a bit more slowly.
                    </li>
                    <li>Relaxed breathing will move the belly not the chest.</li>
                </ul>
            </li>
            <li>
                Muscle Relaxation:
                <ul>
                    <li>You can also relax your muscles with your minds, imagining that tension is released from a
                        particular muscle can help it relax.
                    </li>
                    <li>A body scan where you relax muscles progressively from head to toe or from toe to head can be an
                        easy way to start a relaxation practice.
                    </li>
                </ul>
            </li>
            <li>Meditation involves a little more than relaxation techniques, mainly in that it involves a bit more
                focus on directing attention toward a particular stimulus such as the breath, a body part or a mantra.
                So meditation is pretty much the same thing as relaxation practice, but with the added benefit of
                turning off negative thoughts and training your attention.
            </li>
        </ul>
        <p>Biofeedback refers to gathering objective information about body responses. Biofeedback could be as simple as
            taking your pulse to see if your heart is racing. But as technology develops, most people think of
            biofeedback as involving some sort of device to measure body states. These devices ensure that you spend
            some good quality (not necessarily quantity) time in rest-and-digest, because they are able to measure body
            states that are more subtle than a simple pulse. There are body and brain states that let we know represent
            the rest-and-digest state, and they can be monitored using:</p>

        <p>Heart-rate variability biofeedback: This involves using a small, relatively inexpensive, heart-rate monitor
            that will tell you when you are breathing at a rate that engages your rest-and-digest system (also called
            the parasympathetic nervous system or PNS).</p>

        <p>Neurofeedback: Brain wave monitors are also becoming less and less expensive. Alpha waves are associated with
            a relaxed brain state, so using a brain wave monitor can help you ensure that you are spending some good
            quality time in a relaxed state.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Mindfulness Practices {/t}</h2>
        <hr/>
        <h4>Mindfulness Sitting Meditation</h4>

        <p>Say: Sit comfortably in a chair or on the floor, with your back, neck, and head straight but not stiff.
            Concentrate on a single object, such as the breath. Focus your attention on the sensations of the breath
            wherever you feel them in your body. Use the breath as an anchor. When your mind wanders or you become
            distracted, gently return focus to your breathing. Practice this just for 1-2 minutes at first. You can
            gradually increase the time up to 30 to 60 minutes if you wish. Guided meditations can make this easier –
            any recording by Jon Kabit-Zenn is helpful and can teach you a lot.</p>

        <p>
            <u>Walking Meditation</u>. Similar to sitting meditation, but walking is the focus of attention. Slowly and
            comfortably walk, focusing your attention on each step, on each movement of the body, the feel of the foot
            on the ground. When your mind wanders, gently bring it back to the movement of walking.
        </p>

        <p>
            <u>Mindfully Doing Anything:</u> Mindfulness simply is the act of giving one thing your full attention and
            taking in every part of the experience. All of the sights, sounds, smells, tactile sensations, tastes, even
            the emotional experiences that you may have, giving every part of the experience your full attention. YOUR
            MIND WILL WANDER and that&rsquo;s OK. Just gently bring your focus back to the present moment. Being in the
            present protects us from emotional distress because worry lives in the future and rumination lives in the
            past (rumination is replaying events in your head that are typically negative, which leads to depression).
            Very little of the present moment is unpleasant. If it is unpleasant then feel that too. Distress most often
            comes when we are trying to cover up or escape an emotion, learning to sit with an emotion will also relieve
            stress over time. Mindfulness practice can also improve your memory, which we will discuss more in a future
            session.
        </p>

        <p>
            <u>Lovingkindness Meditation</u>. Sharon Salzberg is a meditation teacher who has written quite a
            about &ldquo;metta,&rdquo; or lovingkindness meditations. These meditations focus on practicing compassion
            and positive intention for ourselves and others. We&rsquo;ve given you more information about Lovingkindness
            Meditation in your workbook.
        </p>

        <p>Centering Prayer: Centering Prayer was first described in the 14th century text, The Cloud of Unknowing.
            Centering prayer was reintroduced in the 1970s by Friar Thomas Keating and two other trappist monks. This
            simple meditation involves choosing a word, concept, or passage (such as love, inner peace, God&rsquo;s
            presence) that has sacred meaning for you and focusing on it for 20 minutes or more with your eyes closed.
            The goal is not to concentrate on the single word, rather, allow your mind to reflect on the qualities
            associated with this particular word. As with the sitting meditation, when your mind wanders, you gently
            return to your sacred word or idea. This is not meant to replace other types of prayer, and can be used on
            it&rsquo;s own or, if it appeals to you, to enhance an existing prayer practice.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Unhelpful or Negative Thinking{/t}</h2>
        <hr/>
        <p>Since our thoughts, all by themselves, can trigger the stress response, we can also lower chronic stress by
            interrupting the cycle of negative thoughts, which leads to anxiety and depression. Interrupting this cycle
            is not only important for getting breaks from stress, but it can also reduce future stress by weakening the
            underlying brain pathway that makes us prone to more negative thinking by reducing their activation.</p>

        <p>Unfortunately, negative thoughts tend to be automatic, so you may not even be aware that your thoughts are
            contributing to stress and emotional distress. Once we are more aware of what we are thinking, we can look
            at whether the thinking is helpful or unhelpful.</p>

        <p>When stressed or upset, try to:</p>
        <ul>
            <li>
                Pause and pay attention to what you are saying to yourself. If the thoughts are unhelpful, meaning they
                are making you feel more upset, stressed, anxious, angry, or sad, there are strategies to change or
                decrease thoughts or distance ourselves from them.
                <ul>
                    <li>It’s important to know and remember that we are more than just our thoughts, and our thoughts
                        are that - just thoughts!, not necessarily facts, not necessarily true.
                    </li>
                </ul>
            </li>
            <li>
                If you notice yourself thinking something especially unhelpful or hurtful about yourself, you might ask
                yourself:
                <ul>
                    <li>Is this really true? Or is it just a habit?</li>
                    <li>
                        If someone I truly cared about said this about themselves, would I let them get away with it?
                        What would I say to him or her?
                        <ul>
                            <li>Usually we are much more compassionate towards others than we are towards ourselves. Try
                                turning that compassion towards yourself.
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Saying something new and more compassionate not only helps you to feel better in the moment, it can
                weaken those old negative pathways in the brain and create new positive pathways, making you less
                vulnerable to stress, anxiety, and depression, and very likely cognitive decline as you age.
            </li>
        </ul>
        <p>There have been many books written about ways to cope with negative thoughts. Counselors and psychologists
            can also be helpful with this process. Simply writing down thoughts when your are feeling stressed or upset
            (we call these “hot” or emotionally charged thoughts) can be a good place to start.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-22" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-care{/t}</h2>
        <ul>
            <li>Taking time to engage in pleasurable activities</li>
            <li>Eating well</li>
            <li>Exercising</li>
            <li>Getting enough sleep and rest</li>
        </ul>
        <p>It’s important to take good care of yourself. When our basic needs are not being met; when we’re not getting
            enough rest or eating properly:</p>
        <ul>
            <li>we become stressed more easily</li>
            <li>we are more vulnerable to the negative effects of stress</li>
            <li>we are more likely to be emotionally distressed, and</li>
            <li>we have a more difficult time effectively coping with stressful situations</li>
        </ul>
        <p>We know that exercise has positive effects on mood and is a great way to cope with stress. Other self-care
            strategies such as taking time to do something healthy and pleasant, like enjoying a good meal, talking with
            a friend, engaging in a hobby, or taking a bath can turn also down the stress response and turn up the
            relaxation response.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-23" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Strategy #3: Chunking{/t}</h2>
        <hr/>
        <p>Get Organized</p>

        <p>Organizing information makes it easier to remember. There are some tried and true techniques that can help
            you put information into a form that will help you remember.</p>

        <p>
            <u>Chunking</u>. This is an old psychological technique used to help improve memory when learning lists of
            things. Cognitive psychologists discovered it as a natural tendency that people with strong memories have
            used naturally for some time. Now that you know about it, you can use it too.
        </p>

        <p>Basically, Chunking involves breaking longer lists into smaller groups of items, which makes it feel like
            there is less to remember. It also capitalizes on associations, which you learned about a few weeks ago.
            There are a few different ways to chunk information.</p>
        <blockquote>
            <p>
                <u>Break strings of numbers down into smaller chunks.</u> 2, 3 and 4-item clusters are easier to
                remember than larger ones. It helps to also chunk in a way that you are well practiced at, such as
                remembering a group of seven numbers in either a group of 3 digits and 4 digits or 3-2-2, like the way
                you would remember a telephone number. 10-digit numbers can be grouped the same way, just think of the
                first three numbers as the area code.
            </p>

            <p>
                <u>Group words from a list based on some similar feature or category.</u> Language is stored in the
                brain in what we call semantic networks, so words with similar features or in similar categories are
                linked together naturally in our brains. You can capitalize on this natural association when trying to
                remember things. Group similar items together, so that you only have to remember the category and
                remembering the category will cue you to think of the items within that category. This works with
                shopping lists. Organize your grocery list according to department (produce, deli, pharmacy, etc.) and
                aisle (breakfast food, baking, canned foods, etc.).
            </p>
        </blockquote>
        <p>
            <u>Outlines.</u> Make outlines of oral or written information that you are trying to remember. Outlines aren&rsquo;t
            just for preparing reports or laying out a long story you want to write. You can use outlines to help you
            learn new things. You can make use of outlines when:
        </p>
        <blockquote>
            <p>trying to memorize a speech or the lines to a play if, for instance, you decide that a new way to
                stimulate your brain is to run for an elected office in your community or to try out for a community
                play;</p>

            <p>studying for a test if, for instance, you decided to take a class;</p>

            <p>or you want to remember the details of a newspaper article that you thought was interesting so you can
                tell your friends about it.</p>
        </blockquote>
        <p>Having the important points laid out in a list and organized according to idea can reduce the amount of
            information you have to remember. You can also visualize your list when you are trying to recall it, and you
            can rehearse the list by quizzing yourself, which we will discuss more in the last session. When studying
            the list, try to recall the list from memory. If you forget what&rsquo;s next, just glance at it (maybe even
            cover up the items below it with your hand or a sheet of paper) and then quiz yourself on the details that
            the key point represents.</p>

        <p>
            <u>Organize your space.</u> One of the best ways to appear as though you are the person who remembers
            everything is to have a special spot for everything and keep everything in that spot. The organization will
            allow you to remember where everything is, and it will save you time and effort in having to recall where
            you put certain things. It can also reduce stress because you will be less pressed for time when looking for
            things and you may not be as hard on yourself about &ldquo;how bad your memory is getting.&rdquo; (Really it&rsquo;s
            not that your memory is bad, it&rsquo;s that you&rsquo;ve given it too much to do).
        </p>

        <p>Often we do not take the time to organize our space in this way because we feel like we don&rsquo;t have the
            time, but imagine the time that you will save by not having to search for your things. Enlisting the help of
            a relative or trusted friend or even a professional organizer can help to get you started if it feels
            overwhelming.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-24" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Strategy #3: Chunking - Making use of Semantic Networks{/t}</h2>
        <hr/>
        <p>
            <u>Group words from a list based on some similar feature or category.</u> Language is stored in the brain in
            what we call semantic networks, so words within the same categories or that represent objects with similar
            features are linked together naturally in our brains.
        </p>

        <p>You can capitalize on this natural association when you are trying to remember things. Say for instance if
            you are trying to memorize a list of words, group similar items together. This way you only have to recall
            the category and then remembering the category will cue you to think of the items within that category.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-25" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Exercise: Chunking{/t}</h2>
        <hr/>
        <h4>Chunk this shopping list</h4>
        <table width="100%" border="3">
            <tr>
                <td>Produce</td>
                <td>Apples, Oranges, Lettuce, Carrots</td>
            </tr>
            <tr>
                <td>Dairy</td>
                <td>Milk, Cheese, Eggs</td>
            </tr>
            <tr>
                <td>Packaged Foods</td>
                <td>Juice, Cookies</td>
            </tr>
            <tr>
                <td>Baking</td>
                <td>Salt, Flour, Sugar</td>
            </tr>
            <tr>
                <td>Household</td>
                <td>Detergent</td>
            </tr>
        </table>
        <h4>5 Minute Exercise</h4>

        <p>This works with shopping lists.</p>

        <p>Take a minute to try and memorize this list AS IS, TRYING TO REMEMBER THE ITEMS IN THE ORDER THEY ARE ON THE
            LIST.</p>

        <p>How was that? Easy? Hard?</p>

        <p>Now try organizing your grocery list according to department (produce, deli, pharmacy, etc.) and aisle
            (breakfast food, baking, canned foods, etc.).</p>

        <p>How would you reorganize this list?</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-26" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Exercise: Follow-Up{/t}</h2>
        <hr/>
        <p>removed questions</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-27" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Strategy #3: Chunking Text{/t}</h2>
        <hr/>
        <ul>
            <li>Poems</li>
            <li>Religious Text</li>
            <li>Articles</li>
        </ul>
        <p>You can also use chunking to memorize text such as poems or verses or the key points of a newspaper or
            magazine article. The whole point is to reduce the amount of information into a size that your memory can
            handle better.</p>

        <p>Can you think of any other applications for chunking?</p>

        <p>
            Chunking is helpful for some situations, but some chunking exercises may feel unnecessary. Part of our goal
            here is to give you strategies to help your everyday memory, but another part of our goal is to <u>exercise
                your memory</u>, so even if you don&rsquo;t think that you will use a particular strategy very much in
            your everyday life, practicing the strategy is good brain exercise that research shows has a good chance of
            increasing your cognitive reserve.
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-28" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Sample Memory Goals{/t}</h2>
        <hr/>
        <ul>
            <li>Memorize 4 phone numbers using Chunking</li>
            <li>
                Memorize your grocery list using Chunking and go to the store without it
                <ul>
                    <li>Or do a first pass by memory and a second pass with the list</li>
                    <li>This may get you more physical activity</li>
                </ul>
            </li>
            <li>Memorize a short newspaper article, poem or verse using Chunking and the Roman Room Method</li>
        </ul>
        <p>Set goals similar to these and challenge yourself to increase time, frequency, or intensity over this online
            course curriculum. Ensure you log your goals in your activity log.</p>

        <p>To use the Roman Room Method for poems, articles etc, each chunk or phrase should have it’s own image in the
            memory palace.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-29" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Sample Behavior Goals{/t}</h2>
        <hr/>
        <ul>
            <li>
                Meditation or relaxation practice
                <ul>
                    <li>1-2 minutes</li>
                    <li>1-2 times per day</li>
                </ul>
            </li>
            <li>Buy a meditation CD and practice 4 days in a row.</li>
            <li>30 minute relaxed walk, 3 times a week</li>
            <li>Get a massage</li>
            <li>
                Pay attention to negative thoughts when you feel your mood sink or you get anxious
                <ul>
                    <li>4 times throughout the week</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-30" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}This Week&rsquo;s Goals{/t}</h2>
        <hr/>
        <h4>Memory Goal:</h4>
        <ul>
            <li>Goal: Practice memorizing a short poem by using “Chunking”</li>
            <li>Daily Reward: Surfing the internet for 10 minutes</li>
        </ul>
        <h4>Behavior Goal:</h4>
        <ul>
            <li>Goal: Practice relaxed breathing for 2 minutes 4 days in a row</li>
            <li>Daily Reward: Read my favorite book before bed</li>
        </ul>
        <h5>Make your goals:</h5>
        <ul>
            <li>Specific</li>
            <li>Simple</li>
            <li>Feasible</li>
        </ul>
        <h4>5 minute activity</h4>

        <p>Please ensure that you are logging your goals and that you do not this course until you have recorded
            something on the activity log.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-31" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Optional Exercise: Focused Breathing{/t}</h2>
        <hr/>
        <p>1. Explanation of focused breathing (2 minutes)</p>
        <ul>
            <li>This is a guided meditation</li>
            <li>No real goal, except to bring attention to present; to bring awareness to the breath</li>
            <li>When distracted, gently bring awareness back to the breath.</li>
            <li>Be gentle and compassionate with yourself when your mind wanders – our brains are made to think so it is
                very natural to get distracted.
            </li>
            <li>Notice what comes up as you are breathing</li>
        </ul>
        <p>2. Brief breath meditation (5 minutes)</p>
        <ul>
            <li>Let’s start by settling in. Close your eyes if that is comfortable, or soften gaze and pick a spot to
                focus on. Take an upright position, with your neck and back straight but not rigid. Place your hands
                wherever they are comfortable. (pause 10 sec)
            </li>
            <li>Now, bring awareness to your body. Notice your feet on the floor. Notice the contact of your body in the
                chair. (pause 10 sec)
            </li>
            <li>Invite your body to begin to relax, to let go of any stress or tension that has been building today.
                (pause 10 sec)
            </li>
            <li>Now become aware that your body is breathing. (pause 10 sec)</li>
            <li>There is no need to change the breath. Just notice the breath wherever you feel it (long pause) (about
                half-way through) When you notice that you’ve become distracted or lost in thought, gently bring
                awareness back to your breathing (after 5 minutes can ring meditation bell or simply say) Open your
                eyes.
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-3-slide-32" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr/>
        <p class="forum">&nbsp;</p>

        <p>removed questions here</p>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a>
    </div>
</div>
</div>
<div id="lesson-4">
<div id="lesson-4-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Intellectual{/t}</h2>
        <hr/>
        <h4>{t}Module Outline!{/t}</h4>
        <ul>
            <li>Check-in and Review</li>
            <li>Benefits of Intellectual Activity</li>
            <li>Memory Exercise</li>
            <li>Goal Setting</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a>
    </div>
</div>
<div id="lesson-4-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Check-in{/t}</h2>
        <hr/>
        <p>Give people the opportunity to process what they experienced last week, providing a safe place for them to
            express any fears that they may have about change. Roll with resistance &amp; if people become negative,
            defensive or pessimistic, try to steer them back to the facts about dementia (people do have the power to
            affect some of their risk, dementia is costly, it may be embarrassing).</p>

        <p>Last Week’s Memory Strategy: Link-it! Making Associations.</p>
        <ul>
            <li>Link back to something you know</li>
            <li>Attach personal meaning</li>
            <li>
                Link details of the current memory together
                <ul>
                    <li>Give meories context by noting date, place, etc.</li>
                    <li>Make elements interact</li>
                    <li>Link facial feature to name</li>
                </ul>
            </li>
            <li>Make the assoctions dramatic or emotional</li>
        </ul>
        <p>Working Memory is a short-term platform where information is held long enough for our brains to do something
            with it. It’s where new information is held so that it can be formed into a long-term memory. It’s where old
            information is brought to mind so that it can be manipulated or linked with new information, such as making
            associations or figuring the tip on a restaurant bill. It is the intersection between attention and memory.
            Sometimes it is considered part of the brain’s attention system. Other times it is considered “memory,”
            replacing what we have traditionally thought of as “short-term memory.” Some even consider it to be an
            “executive skill,” and the activity of working memory has been located in the frontal lobes. We can take
            charge of our working memory, directing our attention, holding things in mind, etc.</p>

        <p>The 3 parts of Working Memory are:</p>
        <ul>
            <li>The Central Executive</li>
            <li>The Phonological Loop</li>
            <li>The Visuo-spatial Sketchpad</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Cognitive Reserve: Your Brain&rsquo;s 401(k) Account{/t}</h2>

        <p>Remember back in Session 1 when we discussed the Theory of Cognitive Reserve? This theory was born out of the
            discovery that there were people who had resisted the effects of Alzheimer’s disease growing in their brain,
            most likely because of the way they had lived their lives. One of the key factors distinguishing people who
            had resisted dementia from those who did not was the amount of intellectual stimulation they had experienced
            throughout their lives through education, their jobs and their leisure activities.</p>

        <p>Researchers continue to demonstrate that intellectually stimulating leisure activities lower the risk for
            dementia. Generally, researchers have thought that this was only due to the “reserve-building” properties of
            these activities, which we will review, but very recently a second mechanism for the protective effects of
            intellectual stimulation was proposed. Let’s review these two mechanisms.</p>
        <hr/>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Mechanism 1: Reserve Building{/t}</h2>
        <hr/>
        <p>The first mechanism is based on the idea that the more we use our brains, the more “brain real estate” we are
            able to develop. This occurs through brain plasticity, following the principles of Hebb’s Law. Remember from
            Session 1 that Hebb’s Law generally states that “cells that fire together, wire together,” so the more you
            practice a certain skill, the more you provide your brain cells the opportunity to wire up new connections
            and make existing connections stronger and more resistant to disease.</p>

        <p>Research has shown that practicing a skill can make the pathways between cells, or the “connection highways,”
            bigger! These brain images show different levels of the brain from the vantage point of peering down into
            the brain as though you were standing over the top of someone's head. Connection highways are shown in blue.
            The red area is an area of connection highway that actually got bigger in adults during 10 weeks of training
            in using the “Roman Room” or “Method of Loci” memory technique that you learned back in week 3, so if you’ve
            been practicing this technique, chances are that you are building up the pathways in the front right part of
            your brain.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Mechanism 1: Reserve Building{/t}</h2>
        <hr/>
        <p>Also, remember back to Session 1 that another important way to build reserve is by growing new brain cells.
            One important thing to know about these new brain cells is that they actually start off as stem cells, which
            are cells that can perform any function. These stem cells must be given a job to do in order to be
            effectively incorporated into the system or else many of them will not survive for very long.</p>

        <p>So by stimulating your new baby brain cells – by stimulating your brain and learning new things – you are
            helping these stem cells grow into new, functioning neurons.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Mechanism 2: Possible Reduced AD Pathology{/t}</h2>
        <hr/>
        <p>So building up your Cognitive Reserve is the main way that we have understood that intellectual stimulation
            can protect your brain from dementia. However, very recently a new relationship between intellectual
            stimulation and cognitive reserve has been proposed, suggesting that it may also be the case that
            intellectual stimulation can ward off some “reserve depleters.”</p>

        <p>Agroup of researchers from the University of California and Rush University in Chicago found that people who
            engaged in intellectually stimulating activities had less Alzheimer’s disease pathology in their brains, not
            just left over cells and connections. They discovered this by using new brain imaging techniques that can
            actually detect one of the brain deposits thought to cause Alzheimer’s disease – a protein called
            Beta-Amyloid – in people when they are still alive.</p>

        <p>The older adults in this study (folks in their 70’s) who had engaged in more intellectually stimulating
            leisure activities throughout their lives had fewer Beta-Amyloid deposits.</p>

        <p>The group with the highest amount of intellectual activity had deposits in the same range as young
            participants (20-year-olds), and (Click again to activate animation) the group with the lowest amount of
            intellectually stimulating activity had deposits in the same range as people who were already showing signs
            of Alzheimer's disease.</p>

        <p>Now this study is a) preliminary and b) just showed a relationship, so we cannot be sure yet if the
            intellectual stimulation prevented the growth of the Beta-Amyloid. That is, we cannot say that intellectual
            stimulation caused the effect. It may be the case that Alzheimer’s disease can have effects very early in a
            person’s life that prevents him or her from pursuing intellectual activities, but the new association is
            exciting and may be a newly discovered benefit to staying mentally active.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What Sort of Intellectual Stimulation Seems Protective?{/t}</h2>
        <hr/>
        <h4>Lifetime Activities</h4>
        <ul>
            <li>
                Reading
                <ul>
                    <li>Newspapers,</li>
                    <li>Magazines,</li>
                    <li>Books</li>
                </ul>
            </li>
            <li>Writing Letters</li>
            <li>Playing Games</li>
            <li>Education</li>
            <li>Stimulating Professions</li>
            <li>Hobbies</li>
        </ul>
        <p>Studies of people with high reserve have shown that these people tend to have engaged in intellectually
            stimulating activities over their lifetimes. While we still have a lot to learn about which activities are
            most protective, here is a list of most of the activities that have been studied so far (reading, writing
            letters, playing games, getting a higher education, intellectually demanding professions and hobbies).</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}A caveat…{/t}</h2>
        <hr/>
        <p>Let us give a bit more attention to the issue of causal relationships in correlational studies.</p>

        <p>The studies we just discussed and much of the other evidence linking any type of activity with better brain
            aging come from observational studies in which people are followed over time, and their levels of activity
            and their cognitive function or brain size is observed. Observational studies cannot prove causality, and
            there may be many reasons why intellectual activity seems to be linked to better cognitive function that are
            not “causal” per se.</p>

        <p>For example:</p>
        <ol>
            <li>some other factor, such as personality type, socioeconomic status, educational background or health
                status, may be a common cause of both a person’s mental activity level and their cognitive function.
                Most observational studies attempt to control for these influences but may not do so perfectly.
            </li>
            <li>It may also be that early declines in cognitive function are what leads to people disengaging
                intellectually. Observational studies attempt to deal with this problem by measuring social activities
                many years before cognitive problems appear to establish that changes in cognition come after social
                activity levels are determined, but as we just observed, certain neurological diseases such as
                Alzheimer’s are now believed to start many years before they are clinically detected.
            </li>
            <li>As a related concept, intellectual disengagement may be an early marker for brain disease such as
                Alzheimer’s that manifests years before cognitive problems.
            </li>
        </ol>
        <p>Well-designed studies attempt to control for for these alternate relationships, but the gold standard for
            testing a causal relationship is to perform an experiment where similar groups of people are to assigned to
            different conditions and the effects are observed. We saw some of these types of studies in the exercise
            lecture. But when it comes to other areas of lifestyle such as intellectual activity or social activity,
            these types of studies can be quite difficult to pull of.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}ACTIVE Study{/t}</h2>
        <hr/>
        <p>There have been some experimental studies performed though with active brain training.</p>

        <p>Brain training is another area where it seems that people can build reserve. One of the biggest clinical
            trials of brain training programs so far was funded by the National Institutes of Health (or NIH) to compare
            the effects of three different brain training programs on skill and independence loss as people aged. A
            memory skills group, a problem solving skills group and a group that used a computer program to improve
            their processing speed, were compared to a group of people who didn’t received any brain training. All three
            programs lead to improvements on independent measure of their respective skills, but there was little
            transfer from one type of training to another. The idea of “cross training” your brain was born out of this
            finding.</p>

        <p>The people who participated in a brain training group retained more functional independence in the 5 years
            following the study than people who did not do any training. Therefore, it seems that investing in your
            intellectual stimulation, even relatively late in life, can pay big dividends in helping you maintain your
            independence.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Diversify your Intellectual Investments{/t}</h2>
        <hr/>
        <p>Scientists believe that the most efficient way to build up connections between brain cells may be to learn
            something new because this promotes the growth of new connections. If you do the same type of cognitively
            stimulating activity that you’ve been doing for years, it seems that you will get less of a return on your
            intellectual investment than if you were to learn something new. This is because the nerve stimulation that
            you are creating by doing the old activity seems to only serve to maintain the connection pathway that you
            grew years ago. It likely does not challenge your brain to grow a new pathway.</p>

        <p>As you also learned in the physical activity lecture, building more pathways between cells seems important
            because many of these pathways, or the white matter tracks, are particularly vulnerable to the effects of
            those “white dots” that we talked about, which can lead to vascular dementia.</p>

        <p>Dr. Marie Pasinski, a neurologist at Harvard Medical School and author of the book “Beautiful Brain,
            Beautiful You” challenges her readers to “Indulge in the New.” It’s actually the first step in her 7-step
            “brain beauty makeover.” She describes this step as “surprisingly simple,” recommending her readers to open
            themselves up to 5 new experiences as a way to get started.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Diversify your Intellectual Investments{/t}</h2>
        <hr/>
        <p>A common mistake that people seem to make with respect to brain fitness is that they focus exclusively on one
            or two intellectual tasks that only work a narrow focus of skills. People often say, “I’m keeping my brain
            active by doing the crossword every day” or “I stay sharp with those Sudoku puzzles.” Often these are
            activities that have become part of the person’s routine, and more often they are skills that represent that
            person’s strengths. For example the crossword person is often someone who tends to be more verbal in his
            thinking, and the Sudoku person may tend to be more analytical or spatial in her thinking. This is an
            understandable mistake because activities that are consistent with our strengths are fun, easy and
            rewarding.</p>

        <p>But to get the most out of your intellectual investments, we challenge you to do things that are really out
            of character for you. If you are a word person who likes to do crossword puzzles and read books, then you
            may get a better return on your intellectual investment by doing something that is artistic or musical, like
            taking a sculpture class or going to a music concert. If you are a visual person who likes to do crafty
            things like quilting, painting or jigsaw puzzles, you will likely get a better return on your intellectual
            investment by taking a writing class or starting to do the crossword.</p>

        <p>This doesn’t mean that your brain fitness activities should not be fun or rewarding. We just want to
            emphasize the importance of exercising your whole brain and engaging in mental activities that involve brain
            skills that have not traditionally been “your thing” and have the most room for improvement. Just like with
            your body, the brain needs to sweat a little to truly grow.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Diversify Your Intellectual Investments{/t}</h2>
        <hr/>
        <p>Knowing about the anatomy of our brains can provide a road map for keeping track of our brain workouts,
            ensuring that we work all of the different parts of the brain. This is like one of those posters at the gym
            that shows you how to work each muscle group.</p>

        <p>The Cortex is the outer covering of our brain (seen here), where most of the functions that we are familiar
            with, are housed.</p>

        <p>
            The Frontal cortex (in red) is the CEO of your brain. It keeps everything <u>organized, makes plans,
                inhibits &ldquo;bad&rdquo; behaviors, and coordinates problem solving.</u> If you&rsquo;re thinking that
            you are doing something that is &ldquo;CEO-like,&rdquo; then you are likely working this part of your brain.
            Logic puzzles and Sudoku are exercises for your frontal cortex.
        </p>

        <p>(Trainer Tip – Also often called the Prefrontal Cortex)</p>

        <p>
            The Temporal cortex (in blue) controls <u>auditory perception, language, storage of new, overt memories </u>(the
            hippocampus, which encodes new memories, lives deep inside this lobe), and some fear perception (the
            amygdala, which generates our fear response, lives deep inside this lobe – right in front of the
            hippocampus). Memory games, the memory strategies you are learning in this class, and reading all work this
            part of the brain.
        </p>

        <p>
            The Parietal cortex (in yellow), is responsible for <u>understanding all of our tactile senses, directing
                our attention focus, and understanding where objects are in space</u>. Learning a new route somewhere,
            learning to get around a new city on a vacation, and practicing intense focus either through meditation or a
            personal challenge or a brain game, work this part of the brain.
        </p>

        <p>
            The Occipital cortex (in green), located at the back of our brains are entirely committed to <u>decoding all
                of the visual information that comes through our eyes</u>. You may have noticed that 3 of these 4 lobes
            have some role in visual perception. Obviously that means that what we see is essential input to our brains.
            Some scientists estimate that about 80% of the sensory information that our brains receive is visual. This
            means that regular eye exams are an important part of keeping your brain fit. The same goes for regular
            hearing exams and investing in high quality vision and hearing treatments. When our brains don&rsquo;t get
            high-quality stimulation, the regions responsible for decoding this &ldquo;high definition&rdquo; input
            withers from disuse. Visual puzzles, painting or drawing, and simply enjoying the scenery works this part of
            the brain.
        </p>

        <p>There is more information about each of these regions in your workbook.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Getting the most out of your intelligence now{/t}</h2>
        <hr/>
        <p>Research is suggesting that we can practice techniques to engage the prefrontal cortex in order to help us
            stay focused and complete tasks that require concentration. Some techniques for improving focus include
            brain training games that require extended concentration. Some training programs include discussions with a
            coach that seem to help a person uncover the strategies that they are using to stay focused such as
            self-talk, noticing attention lapses and re-engaging, and planned attention breaks for quick recovery.
            Engaging the prefrontal cortex can be quite fatiguing because this is a very &ldquo;energy-hungry&rdquo;
            part of the brain. Therefore, it seems that brief recovery periods may be important to counteract the
            fatigue. Focused meditation has been shown to improve focus and strengthen the activity of the prefrontal
            cortex likely because it involves practice of some of these techniques.</p>

        <p>Another way we can direct our brains is to know when the logical prefrontal cortex has been hijacked by the
            emotional part of the brain and take steps to release it. We learned a lot about this during the Emotion
            Module, so we won&rsquo;t go into any further detail here, but just remember that we can regain control of
            the logical brain by relaxing, engaging the PNS or relaxation response (turning off the SNS or
            fight-or-flight).</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Getting the most out of your intelligence now{/t}</h2>
        <hr/>
        <p>On other hand, dialing down the prefrontal cortex can also be important for other types of intellectual
            achievements. For example, scientists have come to learn that insights, or those aha moments where
            everything seems to come together in a flash, are triggered by a very specific region of the temporal lobes
            called the anterior superior temporal gyrus or ASTG (in green). The problem is that this region has a very
            difficult time becoming activated when the prefrontal cortex is active (in red).</p>

        <p>We now have access to techniques that can quiet the prefrontal cortex to encourage creativity and insight.
            Improvisational actors promote their own creativity by doing warm-up exercises to put themselves into
            a &ldquo;child-like&rdquo; state before going on stage. You see, the prefrontal cortex acts to inhibit and
            control other parts of the brain. This helps us interact with one another in socially appropriate ways, but
            this inhibition or self-criticism can get in the way of novel ideas and creativity. The prefrontal cortex is
            the last part of the brain to develop when a person grows up, not maturing fully until about age 25, so
            getting into a &ldquo;child-like&rdquo; state happens when we dial down the activity of this region.
            &nbsp;</p>

        <p>
            Some activities that are good for quieting the prefrontal cortex are are the same ones you've been
            practicing in the emotional module and ones that you will be learning more about in the spiritual module.
            Relaxing the body, helps to dial down the prefrontal cortex because it allows your brain to move into a
            relaxed state, which has been captured on brain scans to be essential for having insights. Basically, it is
            counterproductive to &ldquo;think harder&rdquo; when trying to be creative or have insights. <u>Thinking
                about something else for a while, taking a break, stepping back and &ldquo;sleeping on it&rdquo; all
                allow for the brain to get into a state that promotes insight and that aha moment. Quieting visual
                activity </u>has also been associated with triggering these aha moments, so closing your eyes when
            trying to solve a difficult problem may also help.
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Strategy #4{/t}</h2>
        <hr/>
        <h4>Link it!</h4>

        <p>As the saying goes, we are only as strong as our weakest link. This is true for memories as well, but if
            there is NO link from a new memory to an old memory, what good is that? Taking the time to chain new
            memories up to our brains – linking them, associating them – is a worthwhile endeavor.</p>

        <p>Here are some tips for getting the most out of your linking:</p>

        <p>
            <u>Attach meaning</u> to what you are trying to remember.
        </p>
        <blockquote>
            <p>Here is how one Chicago resident remembered her room number when staying in room 194 in the west tower of
                a large hotel. She was able to think of a way to attach meaning to the number &ldquo;194 west.&rdquo;
                She thought, &ldquo;well, from Chicago I love the drive heading out of the city along I-94 westbound to
                get out to my mom's house.&rdquo;&nbsp; So, she equated the 1 with an &ldquo;I&rdquo; and the 94 with
                the highway number. She also noted that she goes west out to her mom's house, so she connected the room
                number with this meaning.&nbsp;</p>
        </blockquote>
        <p>
            Try to associate the thing you want to remember with something <u>emotional</u>. Scary, funny, and even
            provocative images work best because they pull in your emotional brain for some added encoding power.
        </p>

        <p>
            <u>Link details of the current memory together</u>.
        </p>
        <blockquote>
            <p>If it&rsquo;s an event that you really want to remember, elaborate on it by linking in the date, the day
                of the week, where you are, who is with you, etc.</p>

            <p>If it&rsquo;s a list of things that you want to remember, pair up the items and associate them with one
                another in a dramatic or vivid way. Put one on top of another, crash them together, or make them
                interact.</p>
        </blockquote>
        <p>
            <u>Use all of your senses</u> when linking memories together. Be aware of sights, sounds, smells, tastes,
            textures, temperatures, and emotions.
        </p>

        <p>
            When remembering <u>people&rsquo;s</u><u>names</u>, either associate something the name with another person
            you know with the same or a similar name or associate something about the name with a special feature about
            he person. (Often it is best to keep these associations to yourself, especially if you try to make this
            association funny or dramatic. It can make people self-conscious to know what you&rsquo;ve noticed about
            them).
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Working Memory{/t}</h2>
        <hr/>
        <p>The way new memories are formed is a multi-step process.</p>
        <ol>
            <li>First information has to be captured by our attention. That is why we spent so much time talking about
                improving attention with the first memory tip.
            </li>
            <li>Then it is held very briefly in short-term memory, which is really only a matter of a few seconds. If
                the information is not repeated to oneself, experienced again or linked back to something the person
                already knows, there is little chance that it will turn into a long-term memory.
            </li>
        </ol>
        <p>The concept of short-term memory has been re-conceptualized into what we now call “Working Memory.” Working
            memory just describes in more detail what our brains do with short-term memories.</p>

        <p>Working Memory has 3 parts:</p>
        <ol>
            <li>The Central Executive is the CEO of your Working Memory. It helps allocate resources to the two slave
                systems and coordinates their efforts. You can step in and direct your working memory yourself by
                consciously doing the job of the Central Executive.
            </li>
            <li>The Phonolgical (fo-no-log-i-cal) Loop – is the “auditory” slave system. If you hear some verbal
                information, say for instance a list of words that you are trying to remember or the numbers we worked
                on a couple of weeks ago, you may notice that you are hearing the words over and over again inside your
                head. This is the phonological loop.
            </li>
            <li>The Visuo-spatial (vis-u-o-spā-shal) Sketchpad – is the “visual” slave system. It’s your mind’s eye. If
                you were to look at something, say for instance you look across the room, and then you close your eyes
                and see traces of what you saw when your eyes are open, that is your visuo-spatial sketchpad.
            </li>
        </ol>
        <p>It’s important to know about Working Memory because these platforms are where you hold new information long
            enough to LINK IT in with your existing knowledge. Working memory provides you the “work-space” to shape,
            form and manipulate new and old information – working memory is where you would figure the tip on a
            restaurant bill in your head. Now that you are familiar with these processes, you can notice and feel when
            they are working and you can step into the role of the Central Executive to make better use of the two
            systems in order to remember things better.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Strategy #4{/t}</h2>
        <hr/>
        <h4>Link it! Making Associations</h4>

        <p>Here are some tips for getting the most out of your linking:</p>
        <ol>
            <li>Link back to something you know - When remembering people’s names it helps to associate the name with
                another person you know with the same or a similar name.
            </li>
            <li>
                Attach personal meaning to what you are trying to remember. This is similar to #2, but it has the added
                benefit of “extra importance” and often comes with some sort of emotion, which can give your memory a
                boost.
                <ul>
                    <li>Here is how one Chicago resident remembered her room number when staying in room 194 in the west
                        tower of a large hotel. She was able to think of a way to attach meaning to the number “194
                        west.” She thought, “well, from Chicago I love the drive heading out of the city along I-94
                        westbound to get out to my mom's house.” So, she equated the 1 with an “I” and the 94 with the
                        highway number. She also noted that she goes west out to her mom's house, so she connected the
                        room number with this meaning.
                    </li>
                </ul>
            </li>
            <li>
                Link details of the current memory together
                <ul>
                    <li>If it’s an event that you really want to remember, elaborate on it by linking in the date, the
                        day of the week, where you are, who is with you, etc.
                    </li>
                    <li>If it’s a list of things that you want to remember, pair up the items and associate them with
                        one another in a dramatic or vivid way. Put one on top of another, crash them together, or make
                        them interact.
                    </li>
                    <li>For names associate something about the name with a special feature about he person. (Often it
                        is best to keep these associations to yourself, especially if you try to make this association
                        funny or dramatic. It can make people self-conscious to know what you’ve noticed about them).
                    </li>
                </ul>
            </li>
            <li>Make it Emotional – Try to associate the thing you want to remember with something emotional. Scary,
                funny, and even provocative images work best because they pull in your emotional brain for some added
                encoding power.
            </li>
        </ol>
        <p>Use all of your senses when linking memories together. Be aware of sights, sounds, smells, tastes, textures,
            temperatures, and emotions.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Link it! Exercise{/t}</h2>
        <hr/>
        <h4>5 minutes activity</h4>
        <table width="100%" border="3">
            <tr>
                <td>
                    <ul>
                        <li>Turtle</li>
                        <li>Beanstalk</li>
                        <li>Shoe</li>
                        <li>Glasses</li>
                        <li>Peanuts</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>Fish</li>
                        <li>Soup</li>
                        <li>Cup</li>
                        <li>Jacket</li>
                        <li>Basket</li>
                    </ul>
                </td>
            </tr>
        </table>
        <p>&nbsp;</p>

        <p>Using the Link-It Strategies we discussed today, spend some time memorizing this list of words.</p>

        <p>After about 2-3 minutes of practice, have participants talk briefly about their experience, noting the
            techniques that they used to link up items.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-4-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr/>
        <p>removed questions</p>

        <p>&ldquo;Rule of thumb&rdquo; activity: &ldquo;Learn something new&rdquo;</p>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a>
    </div>
</div>
</div>
<div id="lesson-5">
<div id="lesson-5-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Nutritional{/t}</h2>
        <hr/>
        <h4>{t}Module Outline{/t}</h4>
        <ul>
            <li>Review/Discuss content from last week</li>
            <li>Overview of Healthy Brain Nutrition</li>
            <li>Cooking Demonstration and discussion of how to eat for a brain healthy lifestyle</li>
            <li>Goal Setting/Wrap-up</li>
            <li>Take home memory tip</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Welcome to Module Five!{/t}</h2>
        <hr/>
        <p>Last week we discussed how Intellectual Stimulation keeps your brain sharp.</p>

        <p>Ask: How did you do with your goals from last week? Ask: Those of you who met your goals, are there any tips
            or pointers you could share with the class about how you went about those goals? (give an example, was it
            easy to develop a habit of meeting your goal first thing in the morning or right before bed?)</p>

        <p>Ask: Those of you who had trouble this week, was there a particular barrier that you encountered? Do you have
            a concrete plan for overcoming that barrier and achieving your goals for the coming week.</p>

        <p>Ask: Who remembers the items from the list of brain healthy foods that you learned last week using the Roman
            Room method? How many times did you have to practice it to remember? Ask: Did anyone complete the
            multiplication table in the workbook?</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Learning Objectives{/t}</h2>
        <hr/>
        <ul>
            <li>Understand how a healthy diet could benefit our brain</li>
            <li>Discuss the evidence for healthy brain nutrition</li>
            <li>Provide examples of how everyone could improve their diet to benefit their brain</li>
            <li>Create short-term nutrition goals as first steps to living a brain healthy lifestyle</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Nutrition and our Brain{/t}</h2>
        <hr/>
        <ul>
            <li>
                What we eat effects our brains
                <ul>
                    <li>Obesity</li>
                    <li>Cardiovascular health</li>
                    <li>Diabete</li>
                    <li>Chronic inflammation</li>
                    <li>Vitamins & Minerals</li>
                </ul>
            </li>
        </ul>
        <p>Explain: Most of you already know that what we put into our bodies has a major impact on our health. We know
            that in order to maintain a healthy body weight we need to keep an even balance between the energy (or
            calories) we consume with the energy we expend. We know that eating foods high in calories and high in fat
            will contribute to greater body weight if we don’t burn those calories. We also know that foods that are
            higher in fat content tend to have other implications such as contributing to increased cholesterol and
            blocked arteries. And, we know that foods high in carbohydrates and sugars are going to contribute to the
            liklihood of late-onset diabetes and blood-sugar imbalances. Finally, we know that taking vitamins and
            minerals has been found to be good for our health and to help reduce onset of chronic conditions including
            cardiovascular disease and certain cancers.</p>

        <p>Key point: But, did you know that what we eat also has a big effect on our brain health?</p>

        <p>Reminder: In our previous module on physical activity we talked about how our cardiovascular health is linked
            to Alzheimer’s disease and cognition and how blocked arteries and diabetes can lower Cognitive Reserve.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Healthy Dietary Patterns{/t}</h2>
        <hr/>
        <p>Diets Rich in:</p>
        <ul>
            <li>Healthy salad dressing, nuts, fish, tomatoes, poultry, cruciferous vegetables, fruits, dark green leafy
                vegetables
            </li>
        </ul>
        <p>With limited:</p>
        <ul>
            <li>High fat dairy products, red meats, organ meats, butter</li>
        </ul>
        <p>Researchers are beginning to look at patterns of food consumption in order to understand how different food
            could work together to help promote a brain healthy lifestyle. A diet pattern similar to the Mediterranean
            diet has been identified as helping reduce the risk of Alzheimer’s disease. This diet was discovered by
            researchers in the 1960’s who noticed that people who lived in the Mediterranean region had very low rates
            of Alzheimer’s disease. Overall, the Mediterranean Diet includes eating lots of fruits and vegetables, “good
            fats” from olive oil, walnuts, fish and avocados, and low-fat and non-fat cheeses and yogurt (Greek yogurt
            is great!). The diet also includes reliance on fish, poultry and legumes for protein with much more limited
            consumption of red meat. Fresh or dried fruit is eaten for dessert, and lots of water and moderate wine
            consumption are also recommended.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Antioxidants{/t}</h2>
        <hr/>
        <p>Antioxidant rich foods include:</p>
        <ul>
            <li>
                Fruits
                <ul>
                    <li>Blueberries, blackberries, cranberries, prunes, strawberries, applies</li>
                </ul>
            </li>
            <li>
                Vegetables
                <ul>
                    <li>Red beans, kidney beans, pinto beans</li>
                </ul>
            </li>
            <li>
                Nuts
                <ul>
                    <li>Pecans, walnuts, hazelnuts</li>
                </ul>
            </li>
            <li>
                Spices
                <ul>
                    <li>Cinnamon, oregano, cloves</li>
                </ul>
            </li>
            <li>Teas</li>
        </ul>
        <p>There are a few routes through which consumption of antioxidants seem to help reduce our risk of dementia or
            postpone its onset.</p>

        <p>For one thing, chronic inflammation has been linked to the development of Alzheimer’s disease, and
            antioxidants are thought to help reduce chronic inflammation.</p>

        <p>Antioxidants are also helpful because they are thought to relieve a process called oxidative stress that
            happens throughout the body, including the brain. Oxidative stress has been linked many diseases including
            cancer, Parkinson's disease, heart disease, Alzheimer’s disease, and the aging process itself.</p>

        <p>Oxidative stress is a fancy term to describe the burden placed on our bodies by unstable molecules called
            “free oxygen radicals” or “free radicals”. This may bring you back to chemistry class for a minute. When
            oxygen is metabolized (a process called oxidation), some of the oxygen molecules end up missing an electron,
            making them unstable – these are the free radicals. This is the same process that causes iron to rust, so
            you can think of oxidative stress as your body rusting. In their search for an electron to make them stable,
            these free radicals bounce all around causing damage to your cells. Antioxidants provide the missing
            electron that these oxygen cells need to stabilize, so they tone down the oxidative stress in your body and
            in your brain, allowing more brain cells to stick around in your cognitive reserve.</p>

        <p>Antioxidants are simply vitamins and minerals that you are used to knowing are good for you. They include
            Vitamins C and E, beta-carotene and the minerals zinc and selenium.</p>

        <p>Most of the research suggests that the positive benefits from these vitamins and minerals really only comes
            through direct consumption of the foods that contain the vitamins or minerals as opposed to consumption of a
            supplement. For example, Vitamin C found naturally in an orange appears to be more beneficial than taking a
            Vitamin C pill. Our bodies are better at absorbing the nutrients directly from foods than from capsules or
            supplements.</p>

        <p>Dark chocolate is one of those ‘miracle foods’ that is also high in antioxidants! But be careful. In order to
            make it taste so good, it is mixed with a lot of sugar and fat. Other “superfoods” that are high in
            antioxidants include wild blueberries, red beans, cranberries & artichoke hearts.</p>

        <p>Many of the antioxidants are found in the skins of fruits and vegetables including potatoes and apples – so
            peeling or boiling these foods may lessen the amount of antioxidants found in them.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Fruits &amp; Vegetables{/t}</h2>
        <hr/>
        <ul>
            <li>Fresh fruits & vegetables</li>
            <li>Fruit & Vegetable Juice</li>
            <li>Pomegranate Juice</li>
        </ul>
        <p>In addition to being high in anti-oxidants, fruits and vegetables have many other benefits including lots of
            other essential vitamins and nutruietnts as well as being high in fiber and liquid, which can help slow the
            absorption of sugar into the blood stream and help us feel fuller and therefore hopefully eat less.</p>

        <p>The best way to get your nutrients is by eating fresh fruits and vegetables, such as eating a salad or
            snacking on veggies with a low-fat dip. Try to vary the color of your fruits and veggies. The multitude of
            colors that appear in our fruits and vegetables is natures way of enticing us to eat and enjoy a variety!
            Each color comes with its on profile of healthy nutrients.</p>

        <p>In an attempt to control the type of fruit and vegetable consumption and the cooking methods involved, one
            study specifically looked at the consumption of fruit and vegetable juices. The study then compared people
            who drank fruit or vegetable juices at least 3 times per week to those who drank less than once per week and
            found that those who drank more juice were less likely to have Alzheimer’s disease 7 years later. They found
            the results to be even stronger for people who had a genetic predisposition (the ApOE-4 gene) to Alzheimer’s
            disease and for people who were less physically active. The same study found no benefit from dietary
            supplements of vitamins C, E, and beta carotene –which is consistent with other research on the topic.</p>

        <p>A recent study using mice found that a daily glass of pomegranate juice cut the build-up of harmful proteins
            linked to Alzheimer’s disease in half for these mice. In fact, the study showed that pomegranates worked
            just as well as pharmaceutical medicines in the mice. Pomegranate's are extremely high in antioxidants, and
            they have been used as folk-medicine for ages.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Omega-3&rsquo;s{/t}</h2>
        <hr/>
        <p>Foods rich in Omega 3’s</p>
        <ul>
            <li>Salmon</li>
            <li>Sardines</li>
            <li>Pumpkin seeds</li>
            <li>Soybeans</li>
            <li>Herring</li>
            <li>Flaxseed</li>
            <li>Walnuts</li>
            <li>Tuna</li>
        </ul>
        <p>Omega-3 fatty acids are considered to be important protectors of your brain as well as your heart, and as
            you’ve been learning, what’s good for the heart is good for the brain!</p>

        <p>Scientists have focused primarily on fish consumption to understand the benefit of Omega-3 fatty acids on
            brain health, so research in this area is still young, but it is growing, and there is promising evidence to
            suggest that omega 3’s are beneficial to our brains.</p>

        <p>There was a recent study that prospectively examined brain volume in older people who did and didn’t eat fish
            and provided some of the strongest evidence to date for the role of Omega-3 in brain health. Those who ate
            fish 2-3 times per week maintained more brain volume over the years of the study whereas those who had low
            fish consumption lost brain volume.</p>

        <p>Researchers at Rush University found that people who ate fish once per week or more had a 60% reduced risk
            for Alzheimer’s disease 2 years later.</p>

        <p>One benefit of Omega-3’s may be related to the way they seem to help reduce depression. Depression is
            predictive of Alzheimer’s disease, so it may be speculated that people who consume a diet rich in Omega 3’s
            are less likely to be depressed, and therefore less likely to experience cognitive decline.</p>

        <p>Researchers have also found that diets rich in Omega 3’s could help to combat other nutrition-related
            problems. For example people who consume diets that are high in sugars are more likely to be effected by
            metabolic syndrome problems with insulin levels that could negatively affect brain health. However, people
            who also had diets high in Omega-3 had less trouble from the high rates of sugar in their diet.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Caffeine and Water{/t}</h2>
        <hr/>
        <p>Coffee appears to be actually good for our brains! On the short-term it helps keep us alert and focused, on
            the long-term it has been found that people who drink up to 3 cups of coffee a day have decreased risks of
            AD. The important thing is to pay attention to what you are putting in your coffee. Low-fat or non-fat milk
            is best, but if you load your coffee up with cream and sugar, the detrimental effects of these may
            counteract the potential benefits of the coffee.</p>

        <p>We know that drinking water has many health benefits – it is good for our body and good for our brains! Our
            brains are made up of 90% water! First and foremost, water helps to ward off dehydration which could cause
            symptoms of dementia. It also helps us stay focused, and it helps transport nutrients and oxygen to our
            cells, helps our organisms absorb all those helpful nutrients that we discussed earlier, and helps detoxify
            us.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Alcohol{/t}</h2>
        <hr/>
        <p>Alcohol in moderation also appears to be good for us.</p>

        <p>Scientists have found a very interesting relationship between alcohol and Alzheimer's disease, it is
            described as a “Curvilinear relationship.” That means the relationship looks more like a “U”. So, people who
            abstain from alcohol and those who over-indulge tend to have a greater risk for cognitive decline than those
            who drink in moderation (ie, approximately 1 glass per day). This relationship has mystified many
            researchers and scientists for years, yet findings replicating this relationship have been strong and
            consistent.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Cooking Demonstration{/t}</h2>
        <hr/>
        <p>Explain: Spice up snacks with additional ingredients to make them more enticing. Simple snacks that make
            healthy eating yummier!</p>

        <p>Possible cooking demonstrations are as follows (Receipes are in the Participant Workbook):</p>

        <p>Trainer tip: you could pick and choose from the below suggestions, we have listed a variety of ideas so you
            could demonstrate as many as you would like with whatever ingredients you have access to. The key is that
            these are easy recipes with few ingredients that could help incorporate brain healthy foods.</p>
        <ul>
            <li>Demonstrate & pass out water with sliced cucumber & basil and water with strawberry & fresh mint</li>
            <li>If you have a blender in class make a fruit smoothie</li>
            <li>Simple and tasty fruit salad – Cut up some fruit, then make a simple marinade of lime juice, honey &
                chopped up mint leaves to pour on top – makes the fruit salad more enjoyable and more elegant to serve.
            </li>
            <li>A great way to add some anti-oxidants to your veggies is to make a simple dip for them – Curry dip: mix
                2, 6 ounce containers of low fat yogurt with ¼ cut mango chutney, and 2-3 tspoons of curry powder
                together for a great dip to have with raw veggies.
            </li>
            <li>Trail mix: mix together pretzels, almonds, walnuts, dried fruit (cranberries or raisins) few m&m’s</li>
            <li>Explain: it is ok to have some sweets and we don’t want to deprive ourselves of things we crave
                otherwise we may eat too much of it later. By incorporating a variety of different textures into this
                trail mix we will help satisfy our cravings and enjoy our snacks.
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What we could do{/t}</h2>
        <hr/>
        <p>Suggested tips: Simple ways to add brain healthy nutrients to our everyday diet</p>
        <ul>
            <li>Always drink water with your coffee</li>
            <li>Drink a large glass of water when you first wake up in the morning</li>
            <li>Flavor your water with fruit or veggies (cucumber water, fresh mint, basil, lemons, strawberries, - any
                of those in combination (cucumber-basil, or strawberry mint.) etc.)
            </li>
            <li>Add cinnamon to your coffee grounds</li>
            <li>Add pomegranate juice to your orange juice</li>
            <li>Try to eat every color every day</li>
            <li>Use healthy oils to cook in (olive oil, sunflower oil, saflower oil)</li>
            <li>Use more curry & cinnamon in your cooking</li>
            <li>Try to avoid sugar</li>
            <li>Snack on brain healthy walnuts or almonds</li>
            <li>Add flaxseed to things</li>
            <li>Add a little fat free cool whip or Greek yogurt or a touch of sugar to fresh fruit for dessert</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Strategy #5{/t}</h2>
        <hr/>
        <h4>Mindful Memory</h4>
        <ul>
            <li>You can’t make memories if you’re not “there”</li>
        </ul>
        <p>We have discussed mindfulness practice a couple of times so far in this program, and you have even tried out
            a few techniques. For today’s memory strategy, we will practice mindfulness as a way to remember better.</p>

        <p>To recap, mindfulness is simply “paying attention on purpose.” By paying attention on purpose, you can
            increase your awareness of what you’re experiencing and increase your capacity to remember things.</p>

        <p>Why don’t we have all of the awareness we need already? Well many of us are distracted. If we are not
            distracted by something on the outside, such as the TV, then we are probably distracted by our thoughts.
            People will say, I know I took a shower today, but I can’t remember any details of what happened. That
            person may take this as evidence that she is developing dementia. What is more likely is that she was
            probably lost in thought, about what, who knows? The point is that there was probably little else to
            distract her in the shower, yet she just “wasn’t there.” Where was she? She may have been in the past,
            thinking about something that happened, replaying an event, wondering if she remembered to take her
            medication, re-doing a conversation where this time she really gets her point across. She may be in the
            future, planning what she will wear, practicing the conversation she will have with her daughter, reminding
            herself she needs to eat breakfast, remembering that the car is
            due for an oil change.</p>

        <p>Do you see how not being “present” in the moment of the shower provided her little opportunity to make any
            memories about her shower?</p>

        <p>Now daydreaming isn’t all bad, and we are not suggesting you shouldn’t do it. It can be a very helpful
            process. What we want is to provide you with the skills to approach your world with intention, daydreaming
            when you want to and making memories when you want to.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}High Definition Memories{/t}</h2>
        <hr/>
        <p>We have touched a bit on how memories are made when we talked the first week about Attention and last week
            about Working Memory.</p>

        <p>Let’s say you buy a new high definition TV because you really want to see the best possible images you can
            see on TV. You bring it home, plug it in, turn it on & the picture looks terrible!</p>

        <p>That’s when you realize that you can’t watch high definition TV if you don’t have a high definition signal
            coming into the TV.</p>

        <p>Attention or Awareness is the signal that feeds into our Memories. We can’t expect to have high quality
            memories if we are not sending high definition information into the memory system. Mindfulness allows you to
            make high definition memories. Having improved awareness, enhances your attention, so there is more
            information available to memory circuits to create those memories.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Mindfulness Meditation is Also Good Brain Exercise{/t}</h2>
        <hr/>
        <p>Research has provided evidence that spiritual practice has many positive effects on the brain itself. The
            majority of the research demonstrating direct effects of spiritual practice on the brain has focused on
            meditation. So, it seems wise to spend some time discussing these findings; we will also discuss several
            types of meditation practices later on.</p>

        <p>Studies have shown that meditation increases the gray matter in areas of the brain important for
            consciousness and awareness of body states, short- and long-term memory, and complex cognitive processes
            such as planning, decision-making, attention, and short-term memory. Meditation has also been shown to
            reduce cortical thinning due to aging in the prefrontal cortex. And it has been shown to increase the
            activation of the left frontal regions of the brain, which lift mood.</p>

        <p>(complex cognitive activity including planning, goal-setting, decision-making, attention, short-term
            memory)</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Mindful Memory Exercise{/t}</h2>
        <hr/>
        <ul>
            <li>Holding</li>
            <li>Seeing</li>
            <li>Touching</li>
            <li>Smelling</li>
            <li>Placing</li>
            <li>Tasting</li>
            <li>Swallowing</li>
            <li>Following</li>
        </ul>
        <h4>Activity</h4>

        <p>During this exercise we will spend some time paying careful attention to an orange. You may be thinking,
            “what good is that? I’m around oranges all the time.” But how often do you fully experience the orange? This
            exercise is sort of like stopping to smell the roses. We are going to eat a bit of orange in today’s group,
            but before we dive right into eating the orange, we will spend some time taking in the orange through all of
            our senses.</p>

        <p>Allow 30-60 seconds for each step below.</p>

        <p>Holding: Hold the orange in the palm of your hand. Move it around your hands taking in the texture, the
            temperature the firmness, etc. Imagine this is the first time that you are experiencing an orange, and you
            have to gather data to report back to someone about what you experienced.</p>

        <p>Seeing: Take time to really see the orange. Give it your full attention. Notice all of the contours, she
            shape, color, etc. If your mind wanders during this step, which is common, just gently bring your awareness
            back to seeing the orange.</p>

        <p>Touching: Move your fingers around on the orange, taking in its texture.</p>

        <p>Smelling: Hold the orange to your nose and breathe slowly. With each inhalation, really take in the fragrance
            of the outside of the orange. At this point go ahead and pierce the skin of the orange with your thumbnail
            or a knife as though you were getting ready to peel it. Notice any spray of oil that may come from the skin
            or from the fruit inside. Notice any differences in the way the oil smells versus the outside of the orange
            or the juice inside. Soak it all in.</p>

        <p>Placing: Bring a segment of orange to your mouth to eat, but slowly experience every step of this process.
            Notice the movement of you arm as you bring the food to your mouth. Notice how your hand knows exactly where
            to go to meet your mouth. Place the food in your mouth, but don’t eat it right away. Spend a little time
            experiencing what the orange feels like in your mouth.</p>

        <p>Tasting: When you are ready, chew the orange segment in your mouth with intention and full awareness of what
            happens when you bight into the orange. Notice any wave of flavor or texture that comes from each bight.
            Without swallowing, engage fully in this moment of simply chewing and tasting.</p>

        <p>Swallowing: When you feel ready to swallow the orange, see if you can first detect the intention to swallow
            as it comes up, so that even this is experienced consciously before you actually swallow the raisin.</p>

        <p>Following: See if you are aware of any sensations of the orange leaving your mouth and moving into the
            stomach. Also become aware of the way your body feels after completing this exercise.</p>

        <p>Allow participants some time to “come back” to the room.</p>

        <p>Allow them a few moments to discuss their experience, prompting them to consider the impact of a skill like
            this on their memory.</p>

        <p>Roll with any resistance, as some people may find this task tedious and frustrating. Simply respond to
            resistance with validation (this is not an easy exercise for many people) and emphasizing that a mindful
            eating exercise like this one may not be everyone’s cup of tea, acknowledging that the experience was drawn
            out.</p>

        <p>Doing things mindfully does not always mean that you have to do them more slowly. This exercise is slow
            because it is sort of like a “drill” for the skill of paying attention, other rehearsals can be done more in
            real time.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Practicing Awareness During Routine Activities{/t}</h2>
        <hr/>
        <ul>
            <li>Brushing your Teeth</li>
            <li>Taking a Shower</li>
            <li>Leaving the house</li>
            <li>Entering the Hose</li>
            <li>Getting Dressed</li>
            <li>Putting on Lotion</li>
            <li>Washing your Hands</li>
            <li>Tidying Up</li>
            <li>Opening the Mail</li>
            <li>Washing Dishes</li>
            <li>Loading the Dishwasher</li>
            <li>Taking out the Garbage</li>
            <li>Doing the Laundry</li>
            <li>Driving the Car</li>
        </ul>
        <p>We performed the orange activity very slowly, but that doesn’t mean that doing things mindfully atomically
            means you have to do them more slowly. You may choose to slow your activities down to get the most out of
            the experience, but that may not always be required.</p>

        <p>The more you practice paying close attention and “making memories” the better you become at this skill and
            therefore better able to use it in situations that really count – those situations where you get frustrated
            because you didn’t remember.</p>

        <p>A good way build up your “awareness muscle” is to practice awareness during routine tasks and activities.
            This provides you a lot of opportunity to exercise your memory and attention, and as a result you may even
            find that you may dread doing some of these activities less than you did before.</p>
        (Review List)
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}This weeks Goals{/t}</h2>
        <hr/>
        <p>Choose a category</p>
        <ul>
            <li>Water, fruits, vegetables, good fats, spices, etc.</li>
            <li>Choose a dose</li>
            <li>Every day, once a week, etc.</li>
            <li>Choose a routine</li>
            <li>In the morning, with every meal, at snack time, for dessert.</li>
            <li>Implement it!</li>
        </ul>
        <p>Memory tip for the week:</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-5-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr/>
        <p>removed questions</p>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a>
    </div>
</div>
</div>
<div id="lesson-6">
<div id="lesson-6-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Spiritual{/t}</h2>
        <hr/>
        <h4>{t}Module Outline{/t}</h4>
        <ul>
            <li>Review/Discuss content from last week</li>
            <li>Benefits of Spiritual Practices</li>
            <li>Overview of how spiritual practices help us</li>
            <li>Discussion of types of spiritual practices</li>
            <li>Goal setting/Wrap-up</li>
            <li>Take home memory tip</li>
        </ul>
        <p>Today’s discussion is about spiritual health. Research has shown that spiritual practice has many very
            positive effects on the brain and body. So, today we are going to discuss these benefits as well as
            practical ideas for enhancing spiritual practice. There is an extremely wide variety of types of spiritual
            practice, and it’s important to keep in mind that spiritual practice can be part of organized religion,
            completely separate from organized religion, or a mix of both. Today’s discussion is all about finding
            practices that you are personally drawn to—practices that fit YOUR personal interests, values, and
            lifestyle.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Welcome to Module Six{/t}</h2>
        <hr/>
        <p>In the previous module, we discussed how nutrition and certain foods are good for your brain.</p>

        <p>removed questions</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Brain Benefits of Spiritual Practice{/t}</h2>
        <hr/>
        <ul>
            <li>Religious practice and spirituality are associated with slower rate of cognitive decline</li>
            <li>Meditation increases the power of brainwaves involved in higher-level mental activity</li>
            <li>Meditation improves attention, compassion, and empathy</li>
            <li>Preliminary evidence that mindfulness meditation practices may enhance cognitive functions such as
                working memory
            </li>
        </ul>
        <cite>(Hanson, 2009; Chiesa et al., 2011; Carter et al, 2005; Tang et al, 2007; Lutz, Brefczynski-Lewis et al.
            2008; Lazar et al, 2005; Kaufman, et al., 2007)</cite>

        <p>In addition to the evidence supporting the benefits of meditation, there is also some evidence that other
            types of spiritual practice are beneficial. For example, religious practice and spirituality have been shown
            to be associated with a slower rate of cognitive decline in individuals with Alzheimer’s disease.</p>

        <p>A study involving Tibetan monks who were experienced, long-term meditators found that lovingkindness
            meditation increases the power of brainwaves that are involved in higher-level mental activity. Research has
            also shown that meditation can also improve attention, it can increase empathy, which is our ability to
            understand another person’s experience, and it can increase feelings of compassion for ourselves and
            others.</p>

        <p>Preliminary evidence suggests that mindfulness mediation practices may enhance cognitive functions such as
            working memory.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Brain Benefits of Spiritual Practice{/t}</h2>
        <hr/>
        <h5>Studies have shown that meditation:</h5>
        <ul>
            <li>Increases gray matter and reduces cortical thinning due to aging in the PREFRONTAL CORTEX (complex
                cognitive activity including planning, goal-setting, decision-making, attention, short-term memory)
            </li>
            <li>Increases activation of LEFT FRONTAL REGIONS (positive mood)</li>
            <li>Increases gray matter in the INSULA (awareness of internal body states and gut feelings, helps with
                empathy)
            </li>
            <li>Increases gray matter in the HIPPOCAMPUS (memory)</li>
        </ul>
        <p>Research has provided evidence that spiritual practice has many positive effects on the brain itself. The
            majority of the research demonstrating direct effects of spiritual practice on the brain has focused on
            meditation. So, it seems wise to spend some time discussing these findings; we will also discuss several
            types of meditation practices later on.</p>

        <p>Studies have shown that meditation increases the gray matter in areas of the brain important for
            consciousness and awareness of body states, short- and long-term memory, and complex cognitive processes
            such as planning, decision-making, attention, and short-term memory. Meditation has also been shown to
            reduce cortical thinning due to aging in the prefrontal cortex. And it has been shown to increase the
            activation of the left frontal regions of the brain, which lift mood.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}It’s good for your brain because it’s good for your body{/t}</h2>
        <hr/>
        <ul>
            <li>
                Church attendance and prayer are associated with:
                <ul>
                    <li>Lower blood pressure</li>
                    <li>Better immune function</li>
                </ul>
            </li>
            <li>
                Spirituality and religious practice have been linked to:
                <ul>
                    <li>Longer lifespan</li>
                    <li>Positive health outcomes</li>
                </ul>
            </li>
            <li>
                Meditation shown to:
                <ul>
                    <li>Strengthen the immune system</li>
                    <li>Decrease stress-related cortisol</li>
                    <li>Lower blood pressure</li>
                </ul>
            </li>
        </ul>
        <cite>(e.g., Po well et al., 2003; Davidson et al 2003; Walsh and Shapiro, 2006; Tang et al 2007; Seeman, Dubin,
            and Seeman, 2003)</cite>

        <p>Spirituality and religion are also good for the brain because they are good for the body. There are many
            studies suggesting that spirituality and religious activity are linked to longer lifespan and many positive
            health outcomes. Church attendance and prayer are associated with lower blood pressure and better immune
            function. You might remember from previous modules that high blood pressure can be bad for the brain.


        <p>Meditation has a wide variety of health and psychological benefits and has been shown to strengthen the
            immune system, decrease stress-related cortisol, and lower blood pressure. You may also remember that
            chronic stress and cortisol are toxic to the brain.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Mechanisms for the Spirituality and Health Relationship{/t}</h2>
        <hr/>
        <ul>
            <li>Social support</li>
            <li>Connection to a higher power</li>
            <li>Reduced stress</li>
            <li>Healthy lifestyle</li>
            <li>Gratitude, hopefulness, and optimism</li>
            <li>Attention training</li>
            <li>Forgiveness</li>
        </ul>
        <p>There are several possible reasons for the relationship between spirituality and health.</p>
        <blockquote>
            <p>Social support: Religious or spiritual communities provide an opportunity to connect with others,
                socialize, and access social support. We know that social support is a very important psychosocial
                predictor of health.</p>

            <p>Connection to a higher power: A recent study demonstrated a link between connection to a higher power and
                life satisfaction, distress, and functional ability among individuals with traumatic brain injury.
                (Waldron-Perrine et al., 2011)</p>

            <p>Reduced stress: You might remember that a few weeks back we talked about the link between stress and
                illness. Spiritual practices such as meditation and extended prayer can naturally reduce stress by
                quieting the sympathetic fight-or-flight response and activating the relaxation response. A study
                conducted in Italy in 2001 found that rosary prayer and yoga mantras lead to changes in cardiovascular
                rhythms likely related to parasympathetic relaxation. (Bertalli et al, 2001)</p>

            <p>Healthy lifestyle. Religion tends to encourage a healthy lifestyle and taking care of your body.
                Specifically, studies have found that healthy behaviors encouraged by religion protects against
                cardiovascular disease (Powell et al review, 2003).</p>

            <p>Gratitude, Hopefulness, and Optimism: People who notice the good stuff and express gratitude see benefits
                in their health, sleep, and relationships. They also tend to perform better. (Seligman, 2011). Optimism
                has been linked with good health outcomes including increased immune function and increased cancer
                survival rates (Karren, K., Hafen, B., Frandsen, K, and Smoth, L.)</p>

            <p>Attention training. As stated earlier, meditation has also been shown to improve attention. Meditation
                practices involve sustained concentration and learning to refocus when distracted. So you can think of
                meditation as attention-training for your brain. Also, sitting through a religious service can provide
                opportunities for attention training as a collective focus on the rituals is required, which is rather
                unique in our culture.</p>

            <p>Forgiveness and letting go of anger. All contemplative and spiritual traditions emphasize forgiveness. By
                letting go of resentments and anger, we are reducing that sympathetic nervous system stress response.
                According to research by Fred Luskin and colleagues at Stanford University, forgiveness can reduce
                anxiety and depression, improve sleep, boost our immune system, and lower blood pressure. Luskin also
                argues that forgiveness is a skill that can be learned and practiced. (Luskin, 2003).</p>
        </blockquote>
        <p>Transition: Now, let us discuss some brain-healthy spiritual practices. This is presenting a wide variety of
            types of religious and spiritual practice; notice what you are personally drawn to.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Attend religious services{/t}</h2>
        <hr/>
        <ul>
            <li>Reduced mortality</li>
            <li>Extended prayer linked to health benefits</li>
            <li>Build Social Connections</li>
        </ul>
        <p>A review by Powell and colleagues published in American Psychologist in 2003 concluded that attending
            religious services protected healthy people from death. This is a strong and consistent finding. In
            addition, two longitudinal studies have found that the more individuals attended services, the more the risk
            of mortality decreased. So, the more you go, the more it helps. Attending religious services is an
            opportunity for extended prayer, and prayer as part of a weekly religious service has been shown to have
            health benefits. Additionally, attending religious services is a way to build social connections. And we
            know that social support has tremendous positive effects on one’s health.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Studying spiritual texts or engaging in spiritual dialogue{/t}</h2>
        <hr/>
        <h5>Brain Exercise – Reading, Dialogue, attending lectures, critical thinking</h5>

        <p>Studying spiritual texts, listening to talks by spiritual teachers or leaders, or engaging in spiritual
            dialogue are ways to exercise your spiritual brain. Contemplating or grappling with any of life’s big
            questions is a way to build critical thinking skills and grow the brain. You could, for example, participate
            in a bible study or a meetup group, listen to audio recordings of mindfulness talks, read spiritual texts,
            or take a class examining the world’s religions. Study and contemplate on your own or with trusted
            others.</p>

        <p>A word of caution about spiritual dialogue: friendly, intellectual, philosophical conversations or mutually
            respectful discussions can be stimulating and rewarding; arguments about religion and worldviews, on the
            other hand, can be stressful and even damaging to relationships. Engage in study or conversation that feels
            safe and rewarding; avoid those conversations that leave you feeling hurt or angry.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Forgiveness:{/t}</h2>
        <hr/>
        <p>Remember forgiveness:</p>
        <ul>
            <li>is for you</li>
            <li>takes strength</li>
            <li>isn’t condoning</li>
            <li>is a process</li>
            <li>is easier with empathy</li>
        </ul>
        <cite>Adapted from Gelb &amp; Howell, 2012, Brain Power; Luskin, F., www.learningtoforgive.com</cite>

        <p>Certainly, forgiveness is beneficial to our brains and bodies, but often it’s easier said that done. As
            English poet Alexander Pope said “To err is human, to forgive, divine”. However, forgiveness can be viewed
            as a skill that can be learned and practiced.</p>

        <p>Some points to remember about the skill of forgiveness:</p>
        <ul>
            <li>Forgiveness is for you. Holding on to anger, blame, or hurt feelings takes work and can be incredibly
                draining.
            </li>
            <li>Forgiveness frees up emotional energy that can be channeled into something that is nourishing and
                invigorating
            </li>
            <li>Forgiveness takes strength. It is not about giving up or being a victim. Forgiveness sometimes takes
                tremendous strength. As Gandhi said, “The weak can never forgive.
            </li>
            <li>Forgiveness is the attribute of the strong.” Forgiveness isn’t condoning. It is not about excusing or
                allowing unacceptable behavior. You can forgive completely without reconciling or continuing the
                relationship
            </li>
            <li>Forgiveness is a process. Wounds are sometimes deep and take time to heal; having the intention to
                forgive is a wonderful start. Sometimes we think we have forgiven when something reminds us of the hurt
                and breaks open the old wound. Be patient and kind to yourself if this happens; do not judge; just renew
                your intention to let go. Forgiveness is easier with empathy. It’s much easier to forgive when we at
                least partially understand and empathize with the person who has wronged us.
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t} Mindfulness Meditation Practices{/t}</h2>
        <hr/>
        <ul>
            <li>Mindfulness Sitting Meditation</li>
            <li>Walking Meditation</li>
            <li>Lovingkindness Meditation</li>
            <li>Centering Prayer</li>
        </ul>
        <p>Mindfulness Sitting Meditation: We’ve already practiced a sitting meditation during the emotional module. But
            to review, some basic steps for sitting meditation: Sit comfortably in a chair or on the floor, with your
            back, neck, and head straight but not stiff. Concentrate on a single object, such as the breath. Focus your
            attention on the sensations of the breath wherever you feel them in your body. Use the breath as an anchor.
            When your mind wanders or you become distracted, gently return focus to your breathing. Practice this just
            for 5 minutes at first, gradually increasing the time up to 30 to 60 minutes if you wish. Using a meditation
            timer can be very helpful in helping you stay focused on the meditation as opposed to the time. There are
            several meditation timers that you can download to your smartphone.</p>

        <p>Walking Meditation. Similar to sitting meditation, but walking is the focus of attention. Slowly and
            comfortably walk, focusing your attention on each step, on each movement of the body, the feel of the foot
            on the ground. When your mind wanders, gently bring it back to the movement of walking.</p>

        <p>Lovingkindness Meditation. Sharon Salzberg is a meditation teacher who has written quite a about “metta,” or
            lovingkindness meditations. These meditations focus on practicing compassion and positive intention for
            ourselves and others.</p>

        <p>Centering Prayer: Centering Prayer was first described in the 14th century text, The Cloud of Unknowing.
            Centering prayer was reintroduced in the 1970s by Friar Thomas Keating and two other trappist monks. This
            simple meditation involves choosing a word, concept, or passage (such as love, inner peace, God’s presence)
            that has sacred meaning for you and focusing on it for 20 minutes or more with your eyes closed. The goal is
            not to concentrate on the single word, rather, allow your mind to reflect on the qualities associated with
            this particular word. As with the sitting meditation, when your mind wanders, you gently return to your
            sacred word or idea. This is not meant to replace other types of prayer, and can be used on it’s own or, if
            it appeals to you, to enhance an existing prayer practice.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Mindful movement practices{/t}</h2>
        <hr/>
        <p>Movement practices such as Tai Chi, Feldenkrais, and yoga have meditative aspects to them, including
            awareness of the breath or body, and yoga has been shown to have brain benefits that are similar to other
            forms of meditation. Additionally, any exercise, such as taking a walk, lifting weights, or jogging, can be
            done in a mindful or meditative way. Exercising mindfully means that you pay attention to, or notice, each
            movement and how it feels in your body. Instead of getting on the treadmill and zoning out by watching TV or
            counting down the minutes until you are done with the exercise, pay attention to any pleasant sensations
            that arise. This sustained concentration can enhance the exercise experience and, as stated earlier, is a
            type of attention-training for your brain!</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Gratitude Journal Three Good Thingas{/t}</h2>
        <hr/>
        <p>The final technique we’ll talk about today is gratitude journaling. We tend to think too much about what went
            wrong and spend to little time noticing or thinking about what went right. Of course, there are times when
            it is helpful to think about what went wrong, and what mistakes were made, so that we can learn from these
            experiences and potentially avoid them in the future. However, we tend to spend more time thinking about the
            negatives than is helpful. Our brains are actually wired to notice and pay attention to bad events while
            minimizing, ignoring, or overlooking the good things. This may be because those of our ancestors who were
            preparing for disaster were more likely to survive when disasters struck (such as the ice age, or a hungry
            saber-tooth tiger). To overcome this brain-bias towards the negative, we need to practice noticing, taking
            in, and appreciating the good things in life.</p>

        <p>Martin Seligman, a psychologist, former president of the American Psychological Association, and pioneer in
            the field of Positive Psychology, created a simple exercise to help people practice the skill of thinking
            about what went well. He called originally called this exercise Three Blessings. For this exercise, set
            aside a few minutes each night before bed to write down three things that went well and why they went well.
            These do not have to be big things, but they might be important things. Seligman found that people who did
            this each night for a week had less depression and increased happiness, and remained less depressed and more
            happy six months later.</p>

        <P>Trainer note: Go through example on slide, noting that the things can be small (“my husband brought home my
            favorite take-out food”) or large (I was given an award for volunteering) and they decided WHY it happened,
            maybe because of something you did, maybe because God was looking out my you, etc. Emphasize that it’s
            important to stick with the exercise for at least a week to try and get in the habit of noticing the big and
            small good things.</P>

        <p>TRAINER TIP: This leads in to today’s exercise. Have clients write down three good things that have happened
            in the last 24 hours and why those things happened. Spend 5 minutes discussing their experience during and
            after the exercise: What did clients notice went writing these things down? Was it awkward or difficult?
            Explain that, with practice, this exercise of noticing the good becomes easier and often becomes
            addictive!</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Sample Short Term Goals{/t}</h2>
        <hr/>
        <ul>
            <li>Meditate for 5 minutes 1-2 times a day</li>
            <li>Write down three good things and why they happened in each night before bed</li>
            <li>Attend a religious service once a week</li>
            <li>Yoga, feldenkrais or tai chi practice 10 minutes 3 times a week</li>
        </ul>
        <p>Memory tip of the week.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-6-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Tip of the Week{/t}</h2>
        <hr/>
        <h4>External Memory Aids</h4>

        <p>This memory tip is less about forcing your brain to remember more and more about helping your brain out by
            outsourcing some of the work to external memory aids. (Although these memory aids can help with getting new
            long-term memories to stay in your brain as you will see below.)</p>

        <p>An external memory aid is anything that either holds a memory that can be referenced later, such as writing
            something down, or serves as a cue to help trigger a memory, such as leaving something by the front door
            that you want to take with you the next time you go out.</p>

        <p>Here are some tips for using external memory aids:</p>

        <p>Write things down. Often we forget this very simple, yet highly effective means of helping our memories.
            Writing things down can serve several purposes, and you are encouraged to do this often! Here are some
            advantages of writing things down.</p>
        <ul>
            <li>It keeps you organized. Making lists can keep you tasks organized. Writing out your thoughts when you
                are struggling with a complicated problem or decision can give you the opportunity to organize your
                thoughts by seeing it on paper. You can also write out details of a difficult conversation you may plan
                to have, which can allow you to decide what to say first.
            </li>
            <li>It can de-clutter your brain. This is a especially good technique for nights when you are having trouble
                sleeping because the same three thoughts keep running around in your head. It seems that this thought
                repetition may be a way of ensuring that these important tasks or ideas are not forgotten, so if you jot
                them down you can get them out of your head to be dealt with later.
            </li>
            <li>It helps you memorize things. Writing things down creates a record of information that you can study and
                memorize later. Short-term memory is very short-term (typically less than 30 seconds). You can improve
                your memorization skills by writing something down and then using all of the other skills you are
                learning in this class to commit that information to long-term memory over time. Who says you have to
                just memorize things right away to have a good memory?
            </li>
            <li>It helps you use more of your brain to store memories. Some people may think that it’s cheating to write
                things down, but actually seeing something in your own handwriting can help with encoding it. For one
                thing it moves the information into a new “modality” to where you are actually seeing it instead of just
                rehearsing the information in your mind, which tends to be auditory.
            </li>
        </ul>
        <p>The Special Spot. Putting important items in a special spot and being disciplined about keeping them there is
            a great external memory aid.</p>
        <ul>
            <li>Keys. If you don’t have a special spot where you keep you keys or your wallet or whatever it is that you
                take out of with you each time you leave your home by now, then make one today!
            </li>
            <li>Important Documents. Put the bills you have to pay each month in a special spot, maybe a place that is
                somewhat visible that will serve as a visual cue to help you remember to pay them. Other, less
                frequently accessed documents should also have a special spot but more out of the way of your everyday
                space.
            </li>
        </ul>
        <p>Use a Calendar. So many people complain about missing appointments, but when you ask them if they use a
            calendar, they often say no. They start worrying that they are getting dementia when what has most likely
            occurred is that their lifestyle or their routines have changed.</p>

        <p>If you do not already use a calendar to keep up with appointments, visits with friends, and daily tasks, now
            is the time to start! Here are some tips.</p>
        <blockquote>
            <p>Pick the right calendar for your lifestyle. There are lots of different types of calendars. The standard
                1-month calendar that hangs on the wall is good for having your appointments out in the open so you can
                reference it in a glance. Date books that come in one week per page or even one day per page may be what
                you need if you are particularly busy or if you want to jot memory notes about what you’ve been up to.
                Electronic calendars are available these days either installed on your computer or over the internet
                (Google has a nice calendar). These electronic calendars are nice because you don’t have to choose the
                format. You can view your tasks by day, week or month just by clicking a button.</p>

            <p>Write it all down. Even if you think that you will probably remember a task or an appointment, put it on
                your calendar anyway. It’s better to have things on your calendar that you remembered anyway than it is
                to forget something or to miss an appointment or special event.</p>

            <p>Check it often! What good is writing something down in a calendar if you never look to see what you have
                to do? Make it a habit to look at your calendar everyday. First thing in the morning or before you go to
                bed the night before are good strategies.</p>

            <p>Alarms and Reminders. Many seniors are getting used to using cell phone or computerized calendars that
                will give you reminders and alerts. Even if you are not that tech savvy, there are devices you can buy
                for the home that have programmable alarms that can remind you to take medication, wake up, check your
                blood sugar, etc.</p>
        </blockquote>
        <p>Buy, Fill and Use a Pill Box! Using a pill box doesn’t make you old; it makes you responsible. It is a good
            idea for anyone, at any age, who takes medication on a regular basis to use a pill box (even, or should we
            say “especially,” 25-year-olds). There is a reason that birth control pills come in those packs that have
            the days of the week marked. So give up resisting getting a pill box because of what you think it will mean
            about your brain or your age. This is an important memory task to outsource, and it could help you preserve
            your memory, especially if you take medication for blood pressure or diabetes!</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a>
    </div>
</div>
</div>
<div id="lesson-7">
<div id="lesson-7-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Social{/t}</h2>
        <hr/>
        <h4>{t}Module Outline{/t}</h4>
        <ul>
            <li>{t}Review/Discuss content from last week{/t}</li>
            <li>{t}Overview of Social Activity and Healthy Brains{/t}</li>
            <li>{t}Examine ways in which social activity can help our brains{/t}</li>
            <li>{t}Social activities you can do{/t}</li>
            <li>{t}Goal Setting/Wrap-up{/t}</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a>
    </div>
</div>
<div id="lesson-7-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Welcome to Module Seven!{/t}</h2>
        <hr/>
        <p>&nbsp;</p>

        <p>{t}In the last module we discussed the impact of spirituality on longevity and brain health.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}More Socially Active Adults{/t}</h2>
        <hr/>
        <p>&nbsp;</p>
        <ol>
            <li>{t}Have better cognitive function{/t}</li>
            <li>{t}Experience less cognitive decline{/t}</li>
            <li>{t}Are less likely to develop Alzheimer’s disease and other dementias{/t}</li>
            <li>{t}Are less likely to develop disabilities {/t}</li>
        </ol>
        <p>{t}Ask: How many of you would consider yourselves socially active? How many of you have heard that being
            socially active is good for your brain?{/t}</p>

        <p>{t}We are going to talk today about how social activities may be a key component of brain health. The great
            news for this module is that we are going to be talking about how doing things with other people that you
            consider FUN is actually good for you!{/t}</p>

        <p>{t}Scientists have shown repeatedly that social engagement, meaning participating in social activities and
            keeping a robust social network, is associated with many beneficial outcomes in later life in terms of
            preserving our memory and thinking abilities. The majority of these findings come from observational
            studies, in which hundreds or thousands of older persons without cognitive impairments are followed over
            time to see who develops problems like Alzheimer’s disease, other dementias, or declines in their cognitive
            function. Such studies have shown that the more socially active seniors tend to have better cognitive
            function and experience less cognitive decline as they age. One study showed that in over a thousand people
            aged 65 and older, the people in the top 10% of social activity experienced an average rate of cognitive
            decline that was 70% less than the 10% least socially active. More socially active people are also less
            likely to develop Alzheimer’s disease or other
            forms of dementia, and they are less likely to develop disabilities and loss of independence.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Why is social activity good for our brains?{/t}</h2>
        <hr/>
        <p>{t}So why do more socially active older persons experience better cognitive outcomes? What are the ways in
            which social activity can improve the health of our brains?{/t}</p>

        <p>{t}There are a number of theories as to how this could work. More than one of these factors may be at play.
            You will see how many of these ideas tie in with other modules in the brain health series.{/t}</p>

        <p>{t}Social activity can lower stress and increase our mood. Some studies have shown that social isolation is
            linked to higher production of stress hormones. In an earlier module you learned all about how stress and
            negative emotions can be very bad for our brains. Therefore, social activity may be good for us by keeping
            us happy.{/t}</p>

        <p>{t}Social activity can provide social roles to older people and keep people engaged in communities and
            groups. This can be especially important post-retirement, as many people, especially men, consider their
            occupation to be their primary role. Social activity can help to fill this void that some people
            feel.{/t}</p>

        <p>{t}Social activity can provide a sense of purpose in life, which can be very important to the health and well
            being of older adults. A group of studies has shown that a strong sense of purpose in life is associated
            with less incidence of Alzheimer’s, less disability, and a longer life.{/t}</p>

        <p>{t}Social activity can keep seniors from disengaging from life and becoming couch potatoes. Many
            gerontologists, scientists who study aging, focus on disengagement and have shown that seniors who disengage
            from others and stop leaving their homes are much more likely to enter a quick spiral downwards in terms of
            health and being able to care for themselves adequately.{/t}</p>

        <p>{t}Human beings are social creatures in that we thrive on cooperation and the relationships we have with
            other people who are close to us. Seniors who socially disengage may be missing a critical element of what
            it is to be human.{/t}</p>

        <p>{t}A more direct reason that staying social can be good for our brain health is because being around family
            and friends who care about us can be good in terms of preventative health. Loved ones can notice unhealthy
            symptoms and behaviors that could be early signs that something may be wrong and that it is time to see a
            medical professional.{/t}</p>

        <p>{t}Finally, many social activities challenge us physically and mentally. Two other modules in this class will
            teach you why physical activity and mentally stimulating activity is good for you. Many social activities
            have these same elements and can be good for our brains in multiple ways! {/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Social Brain Exercise{/t}</h2>
        <hr/>
        <p>{t}Being social also seems to be good brain exercise. As we discussed briefly in the emotional module, people
            who are more socially active, have lower rates of cognitive decline. Lower stress may be one of the reasons
            for this, but increased intellectual stimulation may also be another mechanism.{/t}</p>

        <p>{t}Let’s think for a minute about all of the brain activities that are involved in carrying on a simple
            conversation:{/t}</p>

        <p>{t}What sort of brain skills do you think are involved?{/t}</p>
        <ol>
            <li>
                {t}The sides of our brains (the<strong> temporal lobes</strong>) are activated in a conversation because
                they are responsible for processing the sensations from our ears, so any sound, and converting that into
                meaningful information <strong>(language</strong>). Our <strong>word bank</strong> is also stored here,
                so when we go searching for what we want to say, this part is activated. This part also <strong>forms
                    new memories</strong>.{/t}
            </li>
            <li>
                {t}The <strong>occipital lobes</strong> at the back of the head are devoted to processing sensations
                that come through our eyes. So if you are communicating face-to-face with someone, this part of the
                brain is active in reading important social cues such as facial expression and gestures.{/t}
            </li>
            <li>
                {t}The front of the brain <strong>(frontal lobes</strong>) is responsible for what we call “<strong>executive
                    functions</strong>” or things a CEO would do <strong>(plan, organize, direct attention,
                    inhibit</strong>). This part of the brain is what makes humans unique, allowing us to interact in
                civil ways. It also helps us retrieve memories. This part of the brain is also involved in <strong>motor
                    function</strong>, allowing us to gesture with our body, make facial expressions and even move the
                muscles required to talk. Therefore this part of the brain is also very active during a simple
                conversation.{/t}
            </li>
            <li>
                {t}The <strong>parietal lobes</strong> (top back) are involved in maintaining our
                <strong>attention</strong>.{/t}
            </li>
        </ol>
        <p>{t}</p>

        <p>
            These are brain skills involved in a simple conversation. Now think of all of the<strong> additional brain
                skills</strong> involved in <strong>planning outings</strong> with a friend (planning, spatial skills
            required to navigate to a meeting place – e.g. new restaurant) as well as<strong> maintaining a
                relationship</strong> (empathy, compassion, initiation, etc.). {/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Oxytocin the Love Hormone{/t}</h2>
        <hr/>
        <ul>
            <li>{t}A brain chemical that promotes bonding{/t}</li>
            <li>
                {t}Is activated when we are around people we feel a connection with:{/t}
                <ul>
                    <li>{t}Spouse or partner{/t}</li>
                    <li>{t}Children{/t}</li>
                    <li>{t}Close friends{/t}</li>
                    <li>{t}Even Pets {t}</li>
                </ul>
            </li>
            <li>{t}Oxytocin has been shown to play a role in memory improvement and brain plasticity.{/t}</li>
        </ul>
        <p>
            {t}Finally, a chemical called <strong>oxytocin</strong> (sometimes called the love hormone) promotes bonding
            and is activated when we are around people we feel a connection with (spouse or partner, children, close
            friends, etc.).<strong> Oxytocin has been shown to play a role in memory improvement and brain
                plasticity</strong>. {/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}An active lifestyle{/t}</h2>
        <hr/>
        <p>{t}In fact, I would encourage you all to think of engaging in a general “active lifestyle”, replete with
            physical, mental, and social activities. Many activities are both social and physical, including going for
            walks with friends, exercise groups, and dancing. Many activities are both social and mental, including
            playing cards and other games, taking group classes, and book clubs. And then there are activities that hit
            that sweet spot of social, physical, and mental activity, such as learning new dance moves with a dance
            partner, playing sports which require strategy such as golf, and discovering new places with friends or a
            tour group.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Cognitive reserve{/t}</h2>
        <hr/>
        <p>{t}How many of you have heard the term “use it or lose it”? One of the theories for why social activity is
            good for us is that when we are social, we are using our brains and challenging them to remember names and
            faces, addresses, phone numbers, language skills, and other cognitive abilities. Think for a moment about
            all of the different cognitive skills that you use just to carry on a simple conversation, including:
            auditory and visual processing, emotion perception, memory, language, working memory, needed to remember
            what you want to say next, planning, organizing your thoughts – basically your whole brain. In other words,
            being social is “exercise” for our brains. In Session 1 of this course, you learned about the concept of
            cognitive reserve, and there is convincing evidence that social activity may be one way that we can build up
            this cognitive reserve capacity. More socially active seniors may have a larger reserve to work with and
            more to lose cognitively before they
            experience problems like dementia.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}A caveat…{/t}</h2>
        <hr/>
        <p>{t}In discussing the observed link between social activity and positive cognitive outcomes, we do need to
            caution that as I said before, most of the evidence comes from observational studies in which people are
            followed over time and their levels of social activity and their cognitive function is observed.
            Observational studies cannot prove causality beyond a shadow of a doubt and there are many reasons that
            social activity may be linked to better cognitive function that is not “causal” per se.{/t}</p>

        <p>{t}For example, 1) some other factor, such as personality type, socioeconomic status, or health status, may
            be a common cause of both a person’s social activity level and their cognitive function. Most observational
            studies attempt to control for these influences but may not do so perfectly. 2) It may also be that early
            declines in cognitive function are what leads to people disengaging socially. Observational studies attempt
            to deal with this problem by measuring social activities many years before cognitive problems appear to
            establish that changes in cognition come after social activity levels are determined, but certain
            neurological diseases such as Alzheimer’s are now believed to start many years before they are clinically
            detected. 3) As a related concept, social disengagement may be an early marker for brain disease such as
            Alzheimer’s that manifests years before cognitive problems.{/t}</p>

        <p>{t}The most well-designed studies have attempted to address these challenges to establishing a causal role
            for social activity, and the preponderance of evidence supports the idea that social activity actually
            affects our brain health, but these concerns cannot totally be ruled out. Because of the complexity of
            randomizing people to years of social activity, it is very difficult to conceive of randomized controlled
            trials in this area. But, despite some doubts about social activity having a direct effect on our brains,
            given that there are very few negative effects of social activity, there is little reason to not
            engage!{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Enriched environments{/t}</h2>
        <hr/>
        <p>{t}Despite the lack of clinical trial evidence of a causal role for social activity in humans, there has been
            a large body of animal research showing that animals that are allowed to experience what we might consider
            an analogue of social activity experience beneficial changes in their brain. Enriched environments are lab
            environments that are &lsquo;enriched&rsquo; in relation to standard laboratory cages: animals (usually
            mice) are placed in larger cages with other animals and a large amount of objects and obstacles and
            opportunities for exercise.{/t}</p>

        <p>{t}Unlike human studies, animal researchers can have animals live in enriched environments and others in
            standard cages, and then autopsy them to observe differences in brain biology that can be attributed to
            living in the enriched environments. Scientists found that mice in enriched environments actually grew new
            neurons (brain cells), had more synapses (the connections between neurons), had more dendritic branching,
            meaning there are more branches coming off of brain cells (point to picture) are connecting to other brain
            cells, and neurochemical changes such as an increase in certain chemicals that lead to brain cell
            development.{/t}</p>

        <p>{t}Therefore, these animal experiments give some biological evidence that humans who are socially active and
            engaged may be experiencing some of these same beneficial changes in their brain as compared to people who
            socially disengage from the world. Coupled with the observational evidence in humans, the animal evidence
            helps to paint a convincing picture of social activity&rsquo;s role in keeping our brains healthy.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Helpful tips on how to stay socially engaged{/t}</h2>
        <hr/>
        <ol>
            <li>{t}Stay socially connected so you feel like you're a part of something – workplace, clubs, network of
                friends, religious congregation, or volunteer group{/t}
            </li>
            <li>{t}Make friends and family a priority and spend time with them regularly{/t}</li>
            <li>{t}Seek out friends and family for emotional support{/t}</li>
            <li>{t}Keep working as long as you can and want to {/t}</li>
            <li>{t}After you stop working, find something that gives you a role and a purpose and has other people
                relying on you{/t}
            </li>
            <li>{t}Put your passion into action: volunteer for a cause that is meaningful to you{/t}</li>
        </ol>
        <p>
            <a href="http://www.beautiful-minds.com/FourDimensionsOfBrainHealth/TheSociallyConnectedMind.aspx
					" target="_blank">Beautiful-Minds.com</a>
        </p>

        <p>{t}OK, now that we have gone over the scientific evidence, let’s talk about some ways that we can stay
            socially active to improve our brain health. Here are some healthy tips that are adapted from this website,
            beautiful-minds.com. [read list and go over each point individually.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Quality Matters{/t}</h2>
        <hr/>
        <ul>
            <li>{t}Negative relationships can take a toll on us both emotionally and physically{/t}</li>
            <li>{t}Get the most out of your socialization by surrounding yourself with positive, supportive people{/t}
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Fun social activities{/t}</h2>
        <hr/>
        <ul>
            <li>{t}Walking groups{/t}</li>
            <li>{t}Dancing{/t}</li>
            <li>{t}Bowling{/t}</li>
            <li>{t}Bridge and other card games{/t}</li>
            <li>{t}Coffee and tea groups Dinner with friends{/t}</li>
            <li>{t}Goup trips to museums{/t}</li>
            <li>{t}Anything you find FUN!!{/t}</li>
        </ul>
        <p>{t}To give you some good ideas, here are some fun social activities that you can engage in. Remember, you are
            more likely to stay socially active if you are doing something you have a lot of fun doing, and having fun
            may be the key to staying happy and healthy!{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Setting goals{/t}</h2>
        <hr/>
        <ul>
            <li>
                Identify a long term goal (Sample long term goals):
                <ul>
                    <li>Volunteer for a cause</li>
                    <li>Join a group or club</li>
                    <li>Spend more time withfamily and friends</li>
                </ul>
            </li>
            <li>
                Set a short term goal for the week (Sample short term goals):
                <ul>
                    <li>Watch one less TV show and go for a walk with friend or family member instead</li>
                    <li>Pick up the phone and call one person you have not talked to in a while</li>
                    <li>Introduce yourself to someone you see frequently but have never met (this moduel's exercise does
                        not count)
                    </li>
                </ul>
            </li>
        </ul>
        <p>{t}Before we leave, I would like you to set some goals for staying socially active. We can set some long term
            goals, which may take a little longer to get into but hopefully can last a lifetime. But we can start with
            some short term goals, that you can accomplish by next week.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Memory Strategy #7{/t}</h2>
        <hr/>
        <h4>{t}Memory Tip #6{/t}</h4>
        <h5>{t}Rehearsal{/t}</h5>

        <p>{t}So often it seems that people overestimate the ability of the human memory, assuming to be able to
            remember things after just one exposure. Often they forget that practice makes perfect, the operative word
            here being “practice.” No self-respecting ballerina would be caught dead trying to perform a routine after
            just seeing it once and never rehearsing! So why do we expect our memories to work perfectly without
            rehearsal? {/t}</p>

        <p>
            {t}If we really want our memories to live up to the expectations that we set for them, <strong>we have to
                invest some time in rehearsing what we want to remember.</strong>{/t}
        </p>

        <p>{t}Here are some tips for using rehearsal to your advantage:{/t}</p>

        <p>
            {t}<strong>Repeat what you want to remember to yourself a couple of times.</strong>{/t}
        </p>

        <p>{t}Recall back to a couple of weeks ago when we discussed the concept of Working Memory. Remember that one of
            the systems in working memory is the phonological loop. This is the place where you can repeat something to
            yourself a few times, which will keep it in your working memory longer, allowing you more time to “work with
            it,” perhaps linking it, visualizing, or some other strategy. But even just rehearsing the info to yourself
            a few times can give you more time to make it into a memory.{/t}</p>

        <p>
            {t}<strong>Repeat what you want to remember out loud a couple of times</strong>.{/t}
        </p>

        <p>This is easy to do in a conversation. Simply repeat what the other person said in the form of a question. It
            may seem awkward at first, but you may do it naturally already without realizing it. It is standard practice
            of conversation. “The Empire State Building is at the corner of 34th street and 5th Avenue, you
            say?”{/t}</p>

        <p>{t}This is a common tip for remembering the name of someone you just met also. The standard recommendation is
            to try and use their name three times in your first conversation with them.{/t}</p>
        <ul>
            <li>
                Repeat it when they first introduce themselves{/t}
                <ul>
                    <li>“Well hi Bill Smith, it is great to meet you.”{/t}</li>
                </ul>
            </li>
            <li>
                Call them by name once in the course of your conversation{/t}
                <ul>
                    <li>“Have you lived around here for a long time, Bill?” {/t}</li>
                </ul>
            </li>
            <li>
                Call them by name again when you end the conversation.{/t}
                <ul>
                    <li>“Well Bill, it was really great to meet you. I hope to see you around soon.”{/t}</li>
                </ul>
            </li>
        </ul>
        <p>
            <strong>{t}Quiz yourself.</strong> Getting into a solid habit of quizzing yourself could work wonders in
            helping you improve your memory. For example, you park on the 5th floor of the parking garage. You practice
            your skill from Session 1 and pay attention to the sign indicating what floor you are on, and you may even
            write it down. But one other thing you can do is to quiz yourself on the floor number at gradually
            increasing intervals.{/t}
        </p>

        <p>{t}Quiz yourself right after looking at the number or right after writing it down, and quickly verify if you
            are right or wrong.{/t}</p>
        <ul>
            <li>{t}Getting it right can help your memory because you will feel good, and you may get a little burst of
                happy brain chemicals that can improve your memory.{/t}
            </li>
            <li>{t}Getting it wrong can also help your memory because the disappointment that comes with getting it
                wrong can often provide a more salient memory than if we were to get it right.{/t}
            </li>
        </ul>
        <p>{t}Then quiz yourself on your walk to the elevator. If you didn’t write the floor down, you will know if have
            the right answer by looking at the floor number on the elevator.{/t}</p>

        <p>{t}Then quiz yourself about half-way to your destination.{/t}</p>

        <p>{t}Quiz yourself again later after you’ve settled into the event that you’re attending. And quiz yourself
            again any other time you think about it, perhaps when you go to the rest room or when you have a quiet
            moment to yourself.{/t}</p>

        <p>
            {t}<strong>Tell someone else all about it.</strong> The common teaching method for getting students to learn
            the vast amounts of information required in medical school is “see one, do one, teach one.” That last step
            is an important rehearsal technique that you can use in your everyday life. Recounting an interesting fact
            you heard on the news, an entertaining story of a situation you experienced or a joke that someone told you
            is an easy way to rehearse what you want to remember. What will work even better in helping you repeat the
            story will be to rehearse the story to yourself a few times (in the same way as quizzing yourself) to polish
            it up before telling someone else.{/t}
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Rehearsal Exercise{/t}</h2>
        <hr/>
        <ul>
            <li>{t}Repeat Things to Yourself{/t}</li>
            <li>
                {t}Repeat things out loud{/t}
                <ul>
                    <li>{t}Repeat with questions{/t}</li>
                    <li>{t}Repeat names 3 times{/t}</li>
                </ul>
            </li>
            <li>{t}Quiz Yourself{/t}</li>
            <li>
                {t}Tell Someone Else{/t}
                <ul>
                    <li>{t}See one, do one, teach one{/t}</li>
                </ul>
            </li>
        </ul>
        <p>{t}Have people pair off and spend about 5 minutes interviewing the other person, uncovering 3-4
            autobiographical facts about the other person that they did not know before. This could include the other
            person’s middle name, where they grew up, their occupation, somewhere they’ve traveled, etc. Encourage
            people to practice the rehearsal techniques that were just discussed.{/t}</p>

        <p>{t}After 5 minutes of interviewing, ask the group to return to their seats.{/t}</p>

        <p>{t}Have them sit quietly for a minute or two, Quizzing themselves.{/t}</p>

        <p>{t}Then ask them to share what they learned.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}This Week&rsquo;s Goals{/t}</h2>
        <hr/>
        <h4>{t}Goals{/t}</h4>
        <ul>
            <li>
                {t} You will likely need to <strong>offer guidance in helping set goals that are not too difficult or
                    too vague</strong> – It’s better to set a “ridiculously simple goal” that a person can achieve in
                order to feel success than to set a goal that they will not achieve. {/t}
            </li>
        </ul>
        <h5>{t}Goals need to be:{/t}</h5>
        <ul>
            <li>
                <strong>{t}Specific</strong> with respect to:{/t}
                <ul>
                    <li>{t}Type of behavior – have people write a specific behavior (will log activities) as opposed to
                        a vague aspiration (will try to monitor activities){/t}
                    </li>
                    <li>{t}Duration of the behavior (5 minutes, etc.){/t}</li>
                    <li>{t}Frequency of behavior (4 times aweek){/t}</li>
                </ul>
            </li>
            <li>
                <strong>{t}Simple</strong> (ridiculously easy goals are an important place to start because small
                successes create momentum for bigger change){/t}
            </li>
            <li>
                <strong>{t}Feasible</strong> (same as simple){/t}
            </li>
        </ul>
        <h5>{t}Rewards{/t}</h5>
        <ul>
            <li>{t}Rewards are intended to be used each time the goal behavior is performed – not merely at the end of
                the week. Using the memory goal above as an example, each day a person pays close attention for 30
                seconds two times in a single day, she gets to put on a spray of her favorite perfume (maybe in
                preparation for dinner or the next morning). She doesn’t have to wait the entire week to use her
                perfume. If the perfume is part of her daily routine, then she can continue this routine provided she
                meet her goal each day.{/t}
            </li>
        </ul>
        <h5>{t}Here are some guidelines for rewards:{/t}</h5>
        <ul>
            <li>
                {t}Some people <strong>may need to take some time to think over their reward</strong>, so encourage them
                to come up with a reward very soon if they do not finish that in class{/t}
            </li>
            <li>{t}Rewards should be small and feasible &amp; it’s a good idea not to use a reward that will get in the
                way of some other health goal, such as cookies{/t}
            </li>
            <li>
                <strong>{t}For a reward to be effective, the person must make an agreement with themselves that they
                    will in no way get to have the reward without FIRST having achieved their small goal</strong>{/t}
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-7-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr/>
        <p class="forum">removed questions</p>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a>
    </div>
</div>
</div>
<div id="lesson-8">
<div id="lesson-8-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr/>
        <h4>{t}Welcome to the final Module!{/t}</h4>

        <p>{t}In this module, we are going to review the key points from the last seven modules of this course and help
            you set goals for the future. We will also go over some strategies that you can use to maintain a brain
            healthy lifestyle.{/t}</p>
        <h4>{t}Module Objectives{/t}</h4>
        <ul>
            <li>{t}Review content from last seven modules of the course{/t}</li>
            <li>{t}Discuss progress{/t}</li>
            <li>{t}Goal setting and strategies to maintain a brain-healthy lifestyle{/t}</li>
            <li>{t}Post-program survey{/t}</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a>
    </div>
</div>
<div id="lesson-8-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Brain Health Fundamentals{/t}</h2>
        <hr/>
        <ul>
            <li>{t}Dementia is not a normal part of aging{/t}</li>
            <li>{t}Genetics do not equal destiny{/t}</li>
            <li>{t}Our lifestyle affects our brain{/t}</li>
            <li>{t}It is never too late to adopt brain-healthy behaviors!{/t}</li>
        </ul>
        <p>{t}Let us review some facts which serve as the foundation for our course. First, unlike slowed reaction time
            or impaired hearing, dementia is not a normal part of aging. Dementia is a disease, and while it is very
            common among older adults, it is not something that occurs in everyone who grows to be old.{/t}</p>

        <p>{t}Next, Alzheimer’s disease is not entirely caused by genetics. Although there are deterministic genes that
            result in dementia, individuals with these genes represent only a small subset of those with the disease,
            and typically the onset of this variant of Alzheimer's disease is earlier in the lifespan, typically before
            age 65.{/t}</p>

        <p>{t}Risk genes on the other hand only contribute to the likelihood that someone will develop dementia.
            Therefore, someone may have the risk gene and not develop dementia.{/t}</p>

        <p>{t}At the beginning of this program, we told you that genes are responsible for only about 30% of the risk of
            contracting late onset Alzheimer ’s disease, the most common form of dementia. Therefore, approximately 70%
            of what causes the disease is environmental, much of which is within our control. This is why we say that
            lifestyle is an important factor in brain health.{/t}</p>

        <p>{t}Fortunately, it is never too late to adopt brain healthy behaviors. Although someone with a lifetime of
            participation in these behaviors may fare the best, even older adult will gain from them, so it is never too
            late to get started!{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Key Terms{/t}</h2>
        <hr/>
        <ul>
            <li>{t}Alzheimer's disease and Dementia{/t}</li>
            <li>{t}Cognitive reserve{/t}</li>
            <li>{t}Neuroplasticity{/t}</li>
        </ul>
        <h5>{t}What is the difference between Alzheimer’s disease and dementia?{/t}</h5>

        <p>{t}Dementia is an umbrella term used to describe any type of stable decline in cognitive abilities, severe
            enough to interrupt a person's ability to function independently. Dementia describes the observable symptoms
            of a brain disease or injury. Alzheimer’s disease is a TYPE of dementia.{/t}</p>

        <p>{t}Alzheimer’s is a disease process – a medical condition – that causes the cognitive changes that produce
            dementia.{/t}</p>
        <h5>{t}How do we define cognitive reserve?{/t}</h5>

        <p>{t}Cognitive reserve is your brain’s reserve of both tissue and abilities that affects your risk for
            dementia.{/t}


        <p>{t}In this course, we have compared cognitive reserve to your brain&rsquo;s retirement account. Individuals
            who have a lot of Cognitive Reserve are more able to sustain losses before showing symptoms of dementia than
            people who do not have much reserve. Cognitive reserve is not just about preventing dementia. It is also
            about delaying the onset of symptoms so you can have greater quality of life for a longer time.{/t}


        <h5>{t}How can we describe neuroplasticity?{/t}</h5>

        <p>{t}The adult brain can change much more than we ever thought possible. Adult brains can grow new neurons and
            existing neurons can modify and grow new connections between each other. Brains can recover from injury
            better than we ever thought before as well. All of this malleability is referred to as plasticity – the
            brain is more plastic or changeable than we ever thought before.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Six areas affecting brain health{/t}</h2>
        <hr/>
        <p>{t}Let us list the six areas we studied that effect brain health:{/t}</p>
        <ul>
            <li>{t}Physical activity{/t}</li>
            <li>{t}Emotional{/t}</li>
            <li>{t}Intellectual{/t}</li>
            <li>{t}Nutrition{/t}</li>
            <li>{t}Spiritual{/t}</li>
            <li>{t}Social{/t}</li>
        </ul>
        <p>{t}Throughout the course, we have helped you learn about how behavior changes in different areas of your life
            could help you build your cognitive reserve and maintain a healthy brain.{/t}</p>

        <p style="text-align: center; font-style: italic;">
            {t}Quiz yourself: <em>Close your eyes and name all six areas of a brain-healthy lifestyle</em>.{/t}
        </p>

        <p>{t} What kinds of behaviors in these areas can promote brain health? Let us review some key points from each
            of the areas now.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Physical Activity{/t}</h2>
        <hr/>
        <h4>{t}Key points:{/t}</h4>
        <ul>
            <li>{t}Physical activity lowers your lifetime odds of developing Alzheimer's disease{/t}</li>
            <li>{t}You don’t have to run a marathon!{/t}</li>
            <li>{t}Walking as little as 6-9 miles a week reduces the risk of cognitive decline.{/t}</li>
        </ul>
        <ul>
            <li>
                {t}Physical activity increases:{/t}
                <ul>
                    <li>{t}The growth of new brain cells{/t}</li>
                    <li>{t}Nerve growth factors to help new and existing brain cells{/t}</li>
                    <li>{t}The growth of new blood vessels in the brain to nourish and oxygenate brain cells{/t}</li>
                    <li>{t}Brain volume and the size of key structures in the brain (&ldquo;Reverses 1-2 years of age
                        related volume loss&rdquo;){/t}
                    </li>
                </ul>
            </li>
            <li>{t}People who have a genetic predisposition to Alzheimer's d isease may be helped the most by physical
                activity.{/t}
            </li>
            <li>{t}The degree to which physical activity helps your brain depends on length, type and duration of
                training sessions (Colcombe and Krammer, 2003).{/t}
            </li>
        </ul>
        <p>{t}But moderate levels of physical activity are enough to reduce the risk of cognitive impairment to some
            degree.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Emotional{/t}</h2>
        <hr/>
        <h4>{t}Key points:{/t}</h4>
        <ul>
            <li>{t}Chronic stress is toxic to brain cells and can increase your risk of all types of dementia.{/t}</li>
            <li>{t}Managing stress is an important part of a brain healthy lifestyle.{/t}</li>
        </ul>
        <p>{t}In this module, we learned about the physiology of stress and its effect on the body and brain. We know
            that chronic stress can lead to depression, which has been linked with a higher risk of Alzheimer's disease.
            Controlling stress is an important component in a brain healthy lifestyle. We talked about several
            practices, such as mindfulness meditation, that can be used to reduce stress.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Intellectual{/t}</h2>
        <hr/>
        <h4>{t}Key points:{/t}</h4>
        <ul>
            <li>{t}Stimulating your brain can promote cognitive reserve.{/t}</li>
            <li>{t}The best way to stimulate your brain is to try new things that are really out of character for
                you.{/t}
            </li>
        </ul>
        <p>{t}In this module you learned how intellectual stimulation promotes cognitive reserve. And while doing
            crossword puzzles every day is generally a good thing, it really seems that you may get a bigger return on
            your investment by learning something new. We also taught you about diversifying your cognitive
            investments.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Nutritional{/t}</h2>
        <hr/>
        <h4>{t}Key points:{/t}</h4>
        <ul>
            <li>{t}The food we eat affects our brains.{/t}</li>
            <li>{t}We can incorporate brain healthy food choices into our diet.{/t}</li>
        </ul>
        <p>{t}In this module, we learned how good nutrition can benefit our brains. Perhaps most importantly, we learned
            how to make healthy food choices that can promote cognitive health.{/t}</p>

        <p class="forum">{t}What foods should we avoid because they are not good for our brain (examples can include:
            high fat dairy products, red meats, organ meats, butter, fried foods, too many sweets)?{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Spiritual{/t}</h2>
        <hr/>
        <h4>{t}Key points:{/t}</h4>
        <ul>
            <li>{t}Research has demonstrated that people who participate in spiritual practices experience various
                benefits to their health.{/t}
            </li>
            <li>{t}There are a multitude of practices that could be considered spiritual.{/t}</li>
        </ul>
        <p>{t}In this module, you learned different types of spiritual practices, their benefits, and how they help us.
            For example, meditation, Judeo-Christian practice and other spiritual practices have been shown to have
            positive health outcomes. We also learned some of the reasons why this might be the case. These
            include:{/t}</p>
        <ul>
            <li>{t}social support{/t}</li>
            <li>{t}connection to a higher power{/t}</li>
            <li>{t}healthy lifestyle / clean living{/t}</li>
            <li>{t}gatitude{/t}</li>
            <li>{t}hopefulness{/t}</li>
            <li>{t}optimism{/t}</li>
            <li>{t}forgiveness{/t}</li>
            <li>{t}attention training{/t}</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Social{/t}</h2>
        <hr/>
        <h4>{t}Key points:{/t}</h4>
        <ul>
            <li>{t}Older adults who are socially active have better cognitive function, less cognitive decline, and are
                less likely to develop Alzheimer's disease and other dementias.{/t}
            </li>
            <li>
                {t}Social activity seems to help the brain by:{/t}
                <ul>
                    <li>{t}Lowering stress{/t}</li>
                    <li>{t}Promoting positive mood{/t}</li>
                    <li>{t}Providing social roles and a purpose in life{/t}</li>
                    <li>{t}Keeping people from &lsquo;disengaging&rsquo;{/t}</li>
                    <li>{t}Satisfying a basic human need for social interaction{/t}</li>
                    <li>{t}Providing opportunities for physical activity{/t}</li>
                    <li>{t}Providing an efficient outlet for brain exercise{/t}</li>
                    <li>{t}Oxytocin (a brain chemical associated with love and bonding) is associated with positive
                        brain plasticity{/t}
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Keeping it Up!{/t}</h2>
        <hr/>
        <p>{t}So we have spent a lot of time working with you to help you increase your investments in your Brain 401(k)
            over the past few weeks. For some things, you have have likely developed enduring routines that will stand
            the test of time. Sort of like an automatic withdrawal from your paycheck that goes into you 401(k) account.
            It&rsquo;s so much of a part of your normal routine that you hardly notice that you&rsquo;re investing. For
            example you may have been going to exercise classes regularly for so many years that you didn&rsquo;t really
            even notice that you were investing in your Brain 401(k). It&rsquo;s not painful, it&rsquo;s
            routine.{/t}</p>

        <p>{t}However, if you started any new habits over the last six weeks, these habits may be new enough to where
            they are vulnerable to disruptions. This is comparable to earning overtime pay or a bonus and having the
            discipline to throw a bit of that toward your 401(k). Set-backs, distractions, and competing priorities can
            easily get in the way of this &ldquo;investing goal&rdquo; much like they can get in the way of a
            new &ldquo;brain investment goal&rdquo; such as a new habit.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Slips &amp; Setbacks{/t}</h2>
        <hr/>
        <p>{t}Slips and setbacks are very common. So common in fact that popular thinking about habit change has shifted
            away from where they were denied or suppressed to where they are now embraced and accepted. Not that you
            have to abandon your goals, but by not judging a slip, you are more likely to get back on track with your
            goal.{/t}


        <p>{t}We have a tendency to be very hard on ourselves anytime we make a slip or suffer a setback, which may lead
            to us throwing in the towel. But what researchers are finding is that it is less about the actual slip that
            can cause us to abandon our new habit as it is the way we deal with the slip.{/t}</p>

        <p>
            {t}If we see the slip as a major &quot;screw-up&quot; and think that we really &quot;blew it&quot; then we
            are more likely to abandon our goal. <strong>But if we embrace the natural tendency to lose sight of a new
                goal or to temporarily fall out of a new habit, we can move forward with that goal without having to
                carry around all of the emotional baggage that comes with beating ourselves up over the slip.</strong>{/t}
        </p>

        <p>
            {t}Say for instance, your goal is to not eat cookies except for one night a week, say Saturday nights. And
            on a Wednesday night you forget your goal and accidentally eat a cookie. If you think to yourself, &quot;Oh
            I totally blew it! Oh well, that rule will never work.&quot; Then you are <strong>allowing perfectionism to
                destroy your new goal or new habit.</strong>{/t}
        </p>

        <p>{t}If on the other hand you say to yourself, &quot;Uh, oh, I forgot my goal. I slipped! Oh well, back on the
            horse.&quot; Then you are much more likely to stick with your goal.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}When the CEO Fails Us{/t}</h2>
        <hr/>
        <ul>
            <li>{t}Willpower relies on the Logical Brain{/t}</li>
            <li>{t}The Logical Brain inhibits the “instant gratification” impulses of the Emotional Brain{/t}</li>
            <li>
                {t}The Logical Brain loses power from:{/t}
                <ul>
                    <li>{t}Lack of Sleep{/t}</li>
                    <li>{t}Illness{/t}</li>
                    <li>{t}Emotions:{/t}</li>
                    <li>
                        {t}Anger{/t}
                        <ul>
                            <li>{t}Guilt{/t}</li>
                            <li>{t}Stress{/t}</li>
                        </ul>
                    </li>
                    <li>{t}Routine Disruption{/t}</li>
                </ul>
            </li>
        </ul>
        <p>{t}How does one develop this attitude? The key is COMPASSION.{/t}</p>

        <p>
            {t}A slip doesn’t make you a bad person. <strong>Getting angry</strong> with yourself is counter productive
            because <strong>it activates the limbic brain &amp; fight or flight. Beating yourself up just makes you
                defensive. Slips are normal.</strong>{/t}
        </p>

        <p>
            <strong>{t}Will power relies on the executive brain</strong>. If the CEO calls in sick, goes on vacation or
            loses focus, we can give up on our goals. This is because the CEO of your brain is in charge of “keeping
            your eye on the prize” or fully embracing the long-term reward of your goal. Your limbic system or emotional
            or primitive brain wants things NOW.{/t}
        </p>

        <p>{t}As you learned in the Emotion Module, a big part of your Brain CEO's job is to inhibit the primitive
            brain. So most often we slip because the logical brain can’t keep the emotional brain from seeking instant
            gratification. It is very common for short-term rewards to get in the way of our long-term goals because
            short-term rewards are more salient – more “in-your-face.” We have to actually “think” about long-term
            goals, which requires an energized and effective Brian CEO.{/t}</p>

        <p>{t}For example, you may avoid getting a hearing aid because you are embarrassed. But in the long run, getting
            a hearing aid may prevent you from getting dementia. Which is more embarrassing long term? A hearing aid or
            dementia? But the long-term consequence is not at the forefront of your mind the way your current appearance
            is.{/t}</p>

        <p>{t}When the CEO of your brain is out sick or takes a vacation, things can get a little messy.{/t}</p>

        <p>{t}The CEO loses power from:{/t}</p>
        <ul>
            <li>{t}Lack of sleep{/t}</li>
            <li>{t}Illness{/t}</li>
            <li>
                {t}Emotional hijacking{/t}
                <ul>
                    <li>{t}Anger{/t}</li>
                    <li>{t}Guilt{/t}</li>
                </ul>
            </li>
            <li>{t}Stress{/t}</li>
            <li>{t}Interrupted routine{/t}</li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Why We Slip{/t}</h2>
        <hr/>
        <p>{t}Even the very act of doing something new or even thinking of doing something new can cause our CEO to call
            in sick. This is because the brain sees change as a threat – so our emotional brain will kick in to trip us
            up from time to time.{/t}</p>

        <p>{t}This is a popular model outlines some stages of change toward a new habit. With any of the particular
            habits that we have been discussing, you may fall in one of these categories. We are hoping for at least one
            or two new habits that you are in the Action stage, but it&rsquo;s possible that you may not be there yet,
            and it is likely that there are other aspirations or activities that were part of your vision, that you are
            in the &ldquo;Pre-contemplative&rdquo; or &ldquo;Contemplative&rdquo; stage.{/t}</p>

        <p>{t}We present this model here to illustrate that even though we would like to think that the stages of change
            naturally progress from left to right, in fact a person's stage of change can jump all over the place, even
            from moment to moment.{/t}</p>

        <p>{t}These are slips, and all of the things we identified on the last slide as slips can pop us out of action
            into an &ldquo;earlier&rdquo; stage of change. How temporary or permanent that slip is, is up to
            you.{/t}</p>

        <p>{t}One of the main things that pops us out of action or preparation or even contemplation is fear. You may
            not experience a particular sensation as fear, but if you dig down and sit with the feeling, which may feel
            more like &ldquo;resistance&rdquo; or discounting the benefit of the long term reward, it may all boil down
            to fear, apprehension, doubt, etc. Thoughts like, &ldquo;I just can&rsquo;t make to the gym, I won&rsquo;t
            be able to walk for as long as I want and I will feel like a failure.&rdquo; Or &ldquo;Oh well, I can do my
            memory exercise tomorrow,&rdquo; which may really translate to, &ldquo;I don&rsquo;t really like the antsy
            feeling I get when I&rsquo;m practicing my memory skills,&rdquo; and antsy may translate to the
            fight-or-flight response.{/t}</p>

        <p>{t}(This is a sub-set of the stages of change that are part of what are called the &ldquo;Transtheoretical
            Model&rdquo; of change proposed by Prochaska an Di Clemente, two psychological researchers. It is widely
            used, particularly in a method of psychological treatment and coaching practice called Motivational
            Interviewing (MI). The goal of MI is to identify where a person is in the stages of change and gently work
            to motivate him or her to the next step. It actually plays on the person&rsquo;s cognitive dissonance, which
            was discussed in Session 4 and was part of the exercises of that session. By amplifying or pointing out
            discrepancies between a person&rsquo;s ideal of themselves versus their current behavior, an uncomfortable
            feeling emerges, which the coach uses to guide the person toward changing the behavior to make it more in
            line with the ideal self. You have been doing this throughout this entire program.){/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Compassion{/t}</h2>
        <hr/>
        <p>{t}So what to do about slips you ask? Well this brings us back to compassion.{/t}</p>
        <ul>
            <li>
                {t}Compassion allows us to <strong>dial down the emotional brain</strong>, and helps <strong>divert
                    resources back to the thinking brain</strong>.{/t}
            </li>
            <li>
                {t}Compassion allows us to <strong>tolerate &quot;sitting&quot; with the feelings that are causing us
                    resistance</strong> so that we can:{/t}
                <ul>
                    <li>Experience them fully, allowing them to “have their day in court” or “be heard,” which often
                        makes them go away, and{/t}
                    </li>
                    <li>{t}Provide the logical brain the opportunity to label the feelings, sort through the thoughts
                        underlying the feelings and make new, more logical decisions as opposed to abandoning the goal
                        and going back to old habits.{/t}
                    </li>
                </ul>
            </li>
            <li>
                <strong>{t}If you judge your feelings, you can’t feel safe enough to sit compassionately with them, so
                    they are never &quot;aired out&quot; –</strong> they never “see the light of day.” Instead they sit
                under the surface, controlling our behaviors, sabotaging our goals.{/t}
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Exercise in Compassion{/t}</h2>
        <hr/>
        <h4>{t}5 Minute Exercise{/t}</h4>

        <p>{t}The goal here is to lead participants in spending some time in an relaxed state, offering compassion to
            themselves for set-backs.{/t}</p>
        <h5>{t}Instructions{/t}</h5>

        <p>{t}Sit back, relax and close your eyes. Take a few relaxing breaths and notice some of the tension leave your
            body. (Pause for 30-60 seconds, looking for observable signs that people have relaxed).{/t}</p>

        <p>{t}Spend sometime thinking about the last time that you set a goal for yourself that you did not meet.
            (Pause) Think about the way that you felt the moment that you realized that you were going to fail at your
            goal. (Pause) You may feel some of those feelings now. You may feel disappointment, anger, frustration, or
            sadness. You may feel like giving up and throwing in the towel. You may even feel hopeless. (Pause 30
            seconds allowing people to feel the feelings). It is normal to want to escape from these uncomfortable
            feelings, so if you feel yourself becoming distracted, that is fine and perfectly normal. Try to re-engage
            with the feelings if you can. (Pause){/t}</p>

        <p>
            {t}Now imagine two competing sides of yourself are arguing over this set-back. One side is punitive and
            critical. You may give that side a name like &ldquo;<strong>the bully</strong>&rdquo; or the &ldquo;<strong>drill
                sergeant</strong>.&rdquo; Spend some time imagining this person sitting on your right side, voicing all
            of the things that you are telling yourself about why your slip was so terrible.(Pause){/t}
        </p>

        <p>
            {t}Now spend a moment imagining the opposite of this person on your left side who represents your primitive
            and impulsive side. The one that wants instant gratification, and wants to run away form discipline. You may
            give this side a name like &ldquo;<strong>the hippy</strong>&rdquo; or &ldquo;<strong>the wild
                child</strong>.&rdquo; (Pause){/t}
        </p>

        <p>
            {t}Now that you can imagine these two sides pretty clearly, spend some time offering these two sides of
            yourself compassion. It can help to offer them compassion using the following meditation: &quot;<strong>May
                you be well, may you be happy, may you be free from suffering.</strong>&quot; (Repeat this a few
            times){/t}
        </p>

        <p>{t}Repeat these phrases over and over to each side of yourself. You can spend time focusing on one side and
            then the other or you can switch back and forth. &ldquo;May you be well, may you be happy, may you be free
            from suffering.&rdquo; (Repeat a couple of times slowly to the group if this feels comfortable){/t}</p>

        <p>{t}(Pause 1-2 minutes allowing time to meditate){/t}</p>

        <p>
            {t}As you spend some time offering this phrase to each side, <strong>you may feel yourself start to detach
                from each side</strong>, literally feeling yourself pull back from identifying heavily with one or the
            other or both and gaining some distance. <strong> This distance is your new self</strong>, not the bully or
            the wild child, but you are now becoming &ldquo;the watcher.&rdquo;{/t}
        </p>

        <p>{t}(Pause 1-2 minutes){/t}</p>

        <p>
            {t}As you are watching, and offering these two sides compassion, <strong>you can gain some distance from the
                things that cause you to abandon your goals</strong>. This will help you pick yourself up, dust yourself
            off and get back on the road of working toward the ideal self you have been envisioning. The healthy,
            vibrant you 5, 10, or 15 years down the road.{/t}
        </p>

        <p>{t}(This meditation is referred to as Lovingkindness Meditation, and there is more information about it
            included in the workbook. This particular exercise is adapted from Martha Beck, PhD and her book The
            Four-day Win, and she is credited with the terms &ldquo;wild child,&rdquo; &ldquo;dictator,&rdquo;
            and &ldquo;watcher&rdquo;){/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-8-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Congratulations!{/t}</h2>
        <hr/>
        <h4 style="text-align: center;">You’re on your way to a brain healthy life!</h4>

        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and
            tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each
            of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move
            forward.{/t}</p>

        <p>{t}We have really enjoyed getting to know you, and hope this course was helpful. Best wishes as you carry on
            in the future!{/t}</p>
        <h4>{t}Evaluation (optional){/t}</h4>

        <p>{t}Please complete the Post-Course Evaluation located on the course home page.{/t}</p>

        <p>{t}Your feedback is greatly appreciated, and will help us to better serve other participants in the future.
            We ask that you complete it before you exit this course portal. You do not have to include your name on the
            evaluation. It is completely confidential.{/t}</p>
        <script>
            function myFunction() {
                alert("Coming Soon!");
            }
        </script>
        <p style="text-align: center;">
            <input type="button" style="width: 175px;" onclick="myFunction()" value="Post-Course Evaluation"/>
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

<div id="lesson-9-slide-1" class="course-slide">
    <div class="content">
    <h2 class="flowers">{t}Memory Strategy #1{/t}</h2>
                <hr/>
                <h4>{t}5 Minute Explanation – 10 Minute Practice{/t}</h4>
                <h5>{t}Memory Tip #1 - Improve Memory by Improving Attention {/t}</h5>

                <p>{t}In each module, you will learn a new strategy for improving your memory in your everyday life. Today,
                    please focus on helping build a cognitive skill that is not “memory” per se but is essential for having a
                    better memory.{/t}</p>

                <p>
                    {t}In this module we are going to help you improve your memory by helping you improve your ATTENTION. The
                    reason we are starting here is because <strong>attention is the gateway to memory</strong>. You can’t expect
                    to remember things that you don’t see, hear, feel or otherwise experience, right? How can we expect our
                    brains to hold onto information that doesn’t get in in the first place?{/t}
                </p>
                <h5>{t}What are some ways that you can improve your attention?{/t}</h5>

                <p>
                    {t}<strong>Look up and around</strong> - Open your eyes - <strong>Simply being more aware</strong> can
                    improve your attention. <strong>Putting in the effort</strong> to look around and making mental notes of
                    where you parked your car or whether or not you locked the door, can do wonders for setting a good
                    foundation for remembering things!{/t}
                </p>

                <p>
                    {t}<strong>Stay</strong> “<strong>Present</strong>” - <strong>Dial down the internal chatter or the mental
                        to-do list</strong>. In conversations, remind yourself that you will be able to come up with something
                    to say after the person is finished talking in order to stop the mental rehearsal of your next point. This
                    way you can really pay attention to what the other person is saying{/t}
                </p>

                <p>
                    {t}<strong>Get your hearing or vision checked and corrected if needed</strong> – Do not let vanity get in
                    the way of your brain health. Vision and hearing loss not only keep you from taking in current information,
                    but over time it seems that they can weaken you whole brain. As we just learned today, cells that fire
                    together, wire together, so if your brain is not getting good quality stimulation from your ears or your
                    eyes, all of the brain circuits that process that information (including your memory circuits) have less
                    stimulation, and therefore seem to also weaken over time.{/t}
                </p>
            </div>
            <div class="buttons">
                <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
                    href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
            </div>
        </div>
        <div id="lesson-9-slide-2" class="course-slide">
            <div class="content">
                <h2 class="flowers">{t}Improving Attention{/t}</h2>
                <hr/>
                <p>
                    {t}<strong>Manage Your Environment</strong>{/t}
                </p>

                <p>{t} - Reduce Distractions and Interruptions{/t}</p>

                <p>
                    {t}<strong>Do One Thing at a Time</strong>{/t}
                </p>

                <p>{t} - Multi-tasking is a Myth!{/t}</p>

                <p>{t} - Multi-tasking can be toxic to the brain{/t}</p>

                <p>
                    {t}<strong>Bribe Yourself</strong>{/t}
                </p>

                <p>
                    {t}<strong>Get Plenty of Rest</strong>{/t}
                </p>

                <p>{t} - May need to see a sleep doctor{/t}</p>

                <p>{t} - Resting when you're awake{/t}</p>

                <p>
                    {t}<strong>Manage your Emotions</strong>{/t}
                </p>

                <p>{t}You may be saying to yourself, “I’m just not good at paying attention.” “I have ADD” or “I’ve always been
                    bad at paying attention.” Well keep in mind that the brain is plastic and very much capable of change. In
                    fact, new research is showing that through brain exercises and through the tips that you will learn in this
                    course, even people with attention problems caused by brain injury and people with Attention Deficit /
                    Hyperactivity Disorder (ADD/ADHD) can improve their attention.{/t}</p>

                <p>
                    {t}<strong>Strategies that are used to help people with attention deficits improving their attention – we
                        list them here because they are also important for many of us.</strong>{/t}
                </p>
                <h5>
                    {t}<strong>Manage your environment</strong> –{/t}
                </h5>

                <p>{t}Distractions and interruptions some of the biggest threats to attention.{/t}</p>
                <h5>{t}Do one thing at a time –{/t}</h5>

                <p>{t}Multi-tasking is a myth! Our brains really don’t seem to process more than one thing at a time. What may
                    feel like multi-tasking, for example checking your email while having a conversation, really seems to just
                    involve your brain switching rapidly back and forth between the two tasks. This inability to multitask the
                    way we think we can is also starting to influence public policy in terms of limiting cell phone use while
                    driving. Texting has received a lot of focus, but talking may be just a bad.{/t}</p>
                <h5>{t}Bribe yourself –{/t}</h5>

                <p>{t}Often we have trouble paying attention simply because we are not motivated to do so. Sometimes we don’t
                    admit this and just get mad at ourselves for not being able to pay attention.{/t}</p>
                <h5>{t}Get Plenty of Rest -{/t}</h5>

                <p>{t}Feeling tired, either by not sleeping well or from mental fatigue, can limit our attention. People who do
                    not get enough, good quality sleep perform considerably worse on tests of attention, which can have a big
                    impact on important tasks such as driving.{/t}</p>

                <p>{t}Finally, it is also important to remember that emotions can interrupt our attention! Feeling anxious or
                    being distracted by self-criticism or worried thoughts is often one of the biggest robbers of our attention.
                    So learning to relax is also very important for improving attention. You will learn more about caring for
                    your emotions and dealing with stress in the coming modules.{/t}</p>
            </div>
            <div class="buttons">
                <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
                    href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
            </div>
        </div>
        <div id="lesson-9-slide-3" class="course-slide">
            <div class="content">
                <h2 class="flowers">{t}Attention Exercise{/t}</h2>
                <hr/>
                <p>
                    {t}Allow 10 minutes of time for this activity. Please visit the following <a
                        href="http://sharpbrains.com/blog/2007/10/16/brain-teasers-and-games-for-adults-our-top-50/"
                        target="_blank">website</a> and participate in one of the 'Attention' activities.{/t}
                </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

<div id="lesson-10-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr/>
        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and
            tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each
            of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move
            forward.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

<div id="lesson-11-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr/>
        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and
            tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each
            of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move
            forward.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

<div id="lesson-12-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr/>
        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and
            tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each
            of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move
            forward.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

<div id="lesson-13-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr/>
        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and
            tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each
            of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move
            forward.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

<div id="lesson-14-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr/>
        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and
            tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each
            of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move
            forward.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

<div id="lesson-15-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr/>
        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and
            tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each
            of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move
            forward.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

<div id="lesson-16-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr/>
        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and
            tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each
            of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move
            forward.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">{t}Exit{/t}</a>
    </div>
</div>

</div>
</div>
