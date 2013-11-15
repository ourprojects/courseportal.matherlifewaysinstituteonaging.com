<?php

$this->breadcrumbs = array('{t}Courses{/t}' => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach (array(
             '.lesson-1',
             '.lesson-2',
             '.lesson-3') as $lesson)
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

<div class="small-masthead"
     style="background-image: url(<?php echo $this->getImagesUrl('stayingathomeorretirementliving/89144182.png'); ?>);">
    <h1 class="bottom">
        <?php echo t($course->title); ?>
    </h1>
</div>
<div id="sidebar">
    <div class="box-sidebar one">
        <h3>{t}Course Evaluations{/t}</h3>

        <p>{t}Please click the button below to access the pre-course and post-course surveys. Participation is
            anonymous. Please complete each survey at the appropriate time.{/t}</p>
        <br/>
        <ul id="surveys">
            <?php
            $this->widget(
                'ext.fancybox.EFancyBox',
                array(
                    'id' => 'a[id^="survey_link_"]',
                    'config' => array(
                        'width' => '95%',
                        'height' => '95%',
                        'arrows' => false,
                        'autoSize' => false,
                        'mouseWheel' => false,
                    )
                )
            );
            foreach (array(
                         'precourse',
                         'postcourse') as $surveyName) {
                $survey = $this->createWidget(
                    'surveyor.widgets.Survey',
                    array(
                        'id' => $surveyName,
                        'options' => array(
                            'htmlOptions' => array('style' => 'display:none;'),
                            'title' => array('htmlOptions' => array('class' => 'flowers'))
                        )
                    )
                );
                $survey->model->user_id = Yii::app()->getUser()->getId();
                ?>
                <li>
                    <a id="survey_link_<?php echo $survey->getId(); ?>" class="button"
                       href="#survey_<?php echo $survey->getId(); ?>"
                       title="<?php echo t($survey->model->title); ?>"><?php echo t($survey->model->title); ?> </a>
                    <?php $survey->run(); ?>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>

    <div class="box-sidebar one">
        <h3>{t}Certificate of Completion{/t}</h3>

        <p>{t}Click the button below to access your certificate once you have successfully completed the module. You
            will be able to manually add your name, date, and
            course title.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank"
               class="button">Download Certificate</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('stayingathomeorretirementliving/166312138.png'); ?>" id="certificate"
             alt="{t}Image{/t}">
    </div>
    <div class="box-sidebar one">
        <h3>{t}Facilitator: Ellen Ziegemeier, MA{/t}</h3>

        <p>{t}Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She
            earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for
            various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver
            training.{/t}</p>

        <p><a href="#" target="_blank" class="button">Contact Facilitator</a></p>
        <img src="<?php echo $this->getImagesUrl('stayingathomeorretirementliving/80608570.png'); ?>"
             alt="{t}Facilitator{/t}" id="facilitator">
    </div>
    <div class="box-sidebar one">
        <h3>{t}Working Caregivers in America{/t}</h3>
        <img src="<?php echo $this->getImagesUrl('care/286x366_Grafix_69pc.png'); ?>" alt="image" class="block center"/>

        <p>{t}69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an
            unpaid leave of absence to meet their care-giving responsibilities.{/t}</p>
    </div>
</div>
<!-- Start main content here -->

<div class="column-wide">
    <h2 class="flowers">
        <?php echo t($course->title); ?>
    </h2>

    <p>
        <?php echo t($course->description); ?>
    </p>
    <h4>{t}Access{/t}</h4>

    <p>
        {t}<strong>90 days</strong> from the <strong>initial enrollment</strong> date.{/t}
    </p>

    <h4>
        {t}Requirements{/t}
    </h4>

    <p>
        {t}To successfully participate, you will need access to the following software on the computer(s) you are using
        to access this course:{/t}
    </p>
    <ul>
        <li><a href="http://get.adobe.com/reader/" target="_blank">{t}Adobe Acrobat{/t}</a></li>
    </ul>
    <h4>{t}Objectives{/t}</h4>
    <ul>
        <?php
        foreach ($course->objectives as $objective)
            echo '<li>' . t($objective->text) . '</li>';
        ?>
    </ul>
    <h4>{t}Agenda &amp; Module(s){/t}</h4>

    <table style="border-bottom: 2px solid black; border-top: 2px solid black; margin-top: 10px;">
        <tr>
            <td><h5>{t}Download the course Agenda - {/t}</h5></td>
            <td><p>
                    <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Agenda_stayingathomeorretirementliving.pdf'); ?>"
                       target="_blank" class="button">{t}Agenda{/t}</a></p></td>
        </tr>
        <tr>
            <td>
                <h5>{t}Staying at Home or Retirement Living? Helping Parents Plan for the Future - {/t}</h5>
            </td>
            <td>
                <p><a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button">
                        {t}Start{/t} </a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1"
                                             class="hide lesson-1"></a> <a href="#lesson-1-slide-3"
                                                                           data-fancybox-group="lesson-1"
                                                                           class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1"></a>

                </p>
            </td>
        </tr>
    </table>

    <h4>{t}Resources{/t}</h4>

    <p>{t}Please use these listed resources for additional reading. Please contact your course facilitator if you have
        additional resources you would like to see added here.{/t}</p>
    <ul id="resources">

        <li>
            <a href="http://www.aarp.org/health/doctors-hospitals/info-09-2010/finding_your_way_how_to_talk_to_8212_and_understand_8212_your_doctor.html"
               target="_blank">{t}How To Talk To Your Doctor{/t}</a>
            <!--
Emphasis on the importance of building a "successful partnership with your doctor." Suggestions for preparing for a productive office visit.  Questions to ask your doctor to assure that you have a clear understanding of your diagnosis, the treatment recommended, and other treatment options.  On the website of the American Association of Retired Persons. -->
        </li>
        <li>
            <a href="http://www.encouragingcoach.com/projects-selfcare-quiz.htm" target="_blank">{t}Self-Care
                Quiz{/t}</a>
            <!--
How good are you at taking care of yourself?  Take this brief quiz to get some ideas! -->
        </li>

        <li>
            <a href="http://www.allaboutdepression.com/relax/" target="_blank">{t}Guided Imagery{/t}</a>
            <!--
Guided imagery is an effective relaxation technique to reduce stress.  There are many benefits to being able to induce the "relaxation response" in your own body.  Some benefits include a reduction of generalized anxiety, prevention of cumulative stress, increased energy, improved concentration, reduction of some physical problems, and increased self-confidence. -->
        </li>

        <li>
            <a href="http://www.usa.gov/Citizen/Topics/Health/caregivers.shtml" target="_blank">{t}Caregiver Resources
                on USA.gov{/t}</a>
            <!--
Find help providing care, government agencies, long-distance caregiving, and support for caregivers on this valuable website. -->
        </li>
        <li>
            <a href="http://www.aarp.org/home-family/caregiving/" target="_blank">{t}Caregiving Resources from
                AARP{/t}</a>
            <!--
AARP provides various articles of interest and resources for family caregivers. -->
        </li>
    </ul>

    <h4>{t}Optional Video - Working Caregivers{/t}</h4>

    <h5>The Sandwich Generation - by Media Storm</h5>

    <p>{t}Filmmaker and photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two
        children when Winokurs 83-year-old father, Herbie, became too infirm to care for himself. At that moment they
        joined some twenty million other Americans who make up the sandwich generation, those who find themselves
        responsible for the care of both their children and their aging parents.{/t}</p>

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
<?php $clientScript->registerScript('question-answer-handler',
    "$('.course-slide .question').change(function() {" .
    "if($(this).find('select').val() == '1') {" .
    "$(this).find('.right-answer').removeClass('hide');" .
    "$(this).find('.wrong-answer').addClass('hide');" .
    "} else {" .
    "$(this).find('.right-answer').addClass('hide');" .
    "$(this).find('.wrong-answer').removeClass('hide');" .
    "}" .
    "});");
?>
<div id="lesson-1">
<div id="lesson-1-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-Determination Theory{/t}</h2>
        <hr/>
        <blockquote style="font-size: 24px;">{t}To be self-determined is to endorse one's actions at the highest level
            of reflection.{/t}
        </blockquote>
        <blockquote style="font-size: 24px;">{t}When self-determined people experience a sense of freedom to do what is
            interesting, personally important, and vitalizing.{/t}
        </blockquote>

        <cite>
            {t}Edward Deci &amp; Richard Ryan{/t}
        </cite>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a>
    </div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Staying at Home or Retirement Living? Helping Parents Plan for the Future{/t}</h2>
        <hr/>

        <p>{t}Welcome to the course, “Staying at Home or Retirement Living? Helping Parents Plan for the Future.” This
            course is geared towards family members who provide support or care to an older adult who may be a parent,
            spouse, other relative, or a significant other. {/t}</p>

        <p>{t}Also, this course may be of help to a “future caregiver” to better prepare oneself for a future caregiving
            role. Whether you are now – or will be in the future – a caregiver for an older adult, it is important to
            understand that you are not alone.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What’s this course all about?{/t}</h2>
        <hr/>
        <p>{t}This is one in a series of short courses built on a framework called CARE Coaching.
            CARE Coaching courses provide working caregivers – both current and future – with essential tools,
            knowledge, and behaviors to effectively deal with a variety of issues arising from caring for older
            relatives or friends through application of effective coaching skills.{/t}</p>

        <p>{t}CARE Coaching considers “real life” situations that family caregivers must often deal with (such as having
            conversations with aging parents about their needs and preferences for their future care, managing health
            information, communicating with health care providers, maneuvering the health care system, and addressing
            home safety issues, to name a few), activities in the course help stimulate “new thinking” by family
            caregivers providing them with tools to strengthen their knowledge, skills, and self-awareness about their
            role and responsibilities. As a result, family caregivers can focus on what is most important to be
            effective in caring for their loved ones.{/t}</p>

        <p>{t}A fundamental learning approach that is used throughout this course is that of “coaching.” CARE Coaching
            is a model developed specifically for working caregivers that combines the best of what we know about
            coaching methods. CARE Coaching improves working caregivers’ abilities to:{/t}</p>

        <ul>
            <li>
                {t}Communicate{/t}
            </li>
            <li>
                {t}Advocate{/t}
            </li>
            <li>
                {t}Relate{/t}
            </li>
            <li>
                {t}Encourage{/t}
            </li>
        </ul>

        <p>{t}In summary, CARE Coaching involves a method to help you as a caregiver think differently about a
            caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and
            actions.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}“I think it’s time we sell the house.”{/t}</h2>
        <hr/>
        <p>{t}Probably the one area that is most challenging to discuss with older parents deals with their ability to
            continue to live independently in their own home or apartment. {/t}</p>

        <p>{t}In the “perfect world,” your parents call you one day and say, “Your father and I were talking today about
            how difficult it is for us to keep up the house. All the housework, lawn upkeep, snow shoveling. So we’ve
            decided to sell the house and move to that new retirement community in the next town.”{/t}</p>

        <p>{t}Your response, “Whew! Thanks mom and dad for making this decision!”{/t}</p>

        <p>{t}In reality, the discussion of potential relocation can be challenging – not just with your parents, but
            siblings and other relatives may have different viewpoints. Additionally, there are so many more choices in
            senior living options today even compared to ten years ago. We address some of those options in this
            section.{/t}</p>

        <p>{t}Probably more important than the question, “Where will they live?” is the question, “How will they live?”
            For their quality of life to be enhanced, discussion questions must extend beyond health and safety issues
            (although these are important as well!). These are some of the types of questions to explore with your older
            parents:{/t}</p>

        <ul>
            <li>
                {t}How do you want to live?{/t}
            </li>
            <li>
                {t}What’s most important to you?{/t}
            </li>
            <li>
                {t}What do you enjoy?{/t}
            </li>
            <li>
                {t}What do you hope for?{/t}
            </li>
            <li>
                {t}What gives you the greatest pleasure?{/t}
            </li>
            <li>
                {t}What do you want more of in your lives?{/t}
            </li>
            <li>
                {t}What gives meaning to your lives?{/t}
            </li>
            <li>
                {t}What gives you joy in your lives?{/t}
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Introduction to senior living options{/t}</h2>
        <hr/>
        <p>{t}Watch the following brief video to introduce yourself to senior living options.{/t}</p>
        <h4>
            {t}Video – Learn about Senior Living{/t}
        </h4>
        <iframe style="width: 640px; height: 360px; display: block; margin: 15px auto; frameborder: 0;"
                src="//www.youtube.com/embed/4nHlzHS4PVg?list=UUwxxN3aMVzEs5AET6Hg3Ebw" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching: Encouraging{/t}</h2>
        <hr/>
        <p>{t}The fourth component of CARE Coaching is that of encouraging. The decision to move to a retirement
            community is often a difficult one for older adults and families alike. Changes in health or other factors
            typically drive this decision, but being proactive and understanding how to make educated choices is key.
            {/t}</p>

        <p>{t}Encouraging our older parents can take many forms. Primarily, we want to encourage them to be as
            independent as possible for as long as possible. Sometimes an older person experiences changes in health or
            mental awareness that is very gradual and that is “under the radar” of their children or friends. {/t}</p>

        <p>{t}Older persons may learn effective “cues” to help them remember important events or when to pay bills. It
            may be as simple as keeping a calendar or written lists of when the past visits occurred with their doctors.
            We should encourage those “cues” that are effective in promoting independence. {/t}</p>

        <p>{t}Sometimes older adults may not realize the range of options open to them if living alone seems to be
            challenging in some respects. Encouraging may take the form of providing accurate information about possible
            options for living arrangements. It is not uncommon today for adult children to be making the first visit to
            a retirement community to gain a better understanding of what services, programs, and amenities are being
            offered prior to a visit by their older parents.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}It’s All about Choice{/t}</h2>
        <hr/>
        <p>{t}Self-determination means having the freedom to be in charge of one’s own life, choosing where you live,
            who you spend time with, and what you do every day. It means having the resources you need to create a good
            life and to make responsible decisions. It also means choosing where, when, and how you get help for any
            problems you might have.{/t}</p>

        <p>{t}We all want to feel that we have choices in our daily lives. At times, the choices our older parents may
            want may not be choices we would want for them particularly if their safety or health may be at risk. At
            other times, we as caregivers are tempted to want to immediately rise to the occasion and take action. This
            may be because you want to help find a solution to a problem quickly. Imposing a solution may actually make
            a situation more of a problem.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Some general Do’s and Don’ts{/t}</h2>
        <hr/>
        <p>{t}If you were to walk into your supervisor’s office with a problem – say that your project is 50% over
            budget – and your supervisor tells you to immediately cut five of your key staff, how would you feel?
            Probably shocked that your supervisor did not want to discuss the situation, examine several reasons for the
            overage, and come up with a couple of options – all in collaboration with you as project manager. {/t}</p>

        <p>{t}The same should apply with your older parents. You may notice that one or both are starting to forget
            things. Immediately, you jump to the conclusion that they have Alzheimer’s disease. There are many causes of
            memory loss including poor nutrition, sleep problems, medications, or one’s emotional state. You would want
            to take a measured approach to this issue in your discussions with your parents.{/t}</p>

        <p>{t}Some general Do’s and Don’ts:{/t}</p>

        <h5>
            {t}Do:{/t}
        </h5>
        <ul>
            <li>
                {t}Assess the situation thoroughly{/t}
            </li>
            <li>
                {t}Look for signs of changes (physical and mental){/t}
            </li>
            <li>
                {t}Keep notes or a record of what changes you observe{/t}
            </li>
        </ul>

        <h5>
            {t}Don't:{/t}
        </h5>

        <ul>
            <li>
                {t}Immediately jump to conclusions{/t}
            </li>
            <li>
                {t}Rush to make a judgment{/t}
            </li>
            <li>
                {t}Immediately make the assumption{/t}
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Exercise – identifying solutions to support choice and preferences{/t}</h2>
        <hr/>
        <p>{t}Every caregiving situation is unique. Many factors come into play when considering the best possible
            solutions about your parents and their future. These factors may include: your parents’ health and
            functional abilities, mobility, values and beliefs, and family and community support systems. {/t}</p>

        <p>{t}In this exercise, we provide several questions for you to use as a framework to “interview” your parents
            regarding their choices and preferences for their future. This exercise is broken into two parts. Please
            complete all of Part 1 before moving onto Part 2.{/t}</p>

        <p>{t}Please note that you may print or save any activities from this course for future reference.{/t}</p>

        <p>{t}Click below to access the Exercise – Identifying Solutions to Support Choice and Preferences{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Exercise_Identifying_Solutions_to_Support_Choice_and_Prefe.doc'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching review: talking wih your older parents{/t}</h2>
        <hr/>
        <p>{t}Let’s just take a moment to review the core components of CARE Coaching in relation to talking with your
            older parents.{/t}</p>

        <h5>
            {t}Communicate{/t}
        </h5>

        <p>{t}Effective communication is essential to any relationship, particularly so in caregiving situations. It is
            not so much what you say, but how you say it that influences how your messages are received. {/t}</p>

        <p>{t}Listening is probably more important that talking when we use CARE Coaching. Active listening requires
            giving your full attention, being open and receptive. Listen to what they are saying and use CARE Coaching
            techniques to understand and draw out what’s important to them. {/t}</p>

        <h5>
            {t}Advocate{/t}
        </h5>

        <p>{t}In terms of CARE Coaching, advocating means supporting one another rather than in the legal sense of
            defending someone. {/t}</p>

        <p>{t}Reflect back feelings to show that you are hearing and understanding their situation. Be comfortable with
            silence as that is the time when the best thinking may be going on. To make sure that you are clear on what
            is being said, you may want to say, “I think what you are telling me is….”{/t}</p>

        <p>{t}Setting boundaries is also important. You can still be an advocate even on the occasion when you need to
            say “no” to them. A request may not be reasonable or in your circumstance, you may not be able to comply at
            this time. Complying with something but then complaining about it just sets the tone for resentment.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching review: talking wih your older parents{/t}</h2>
        <hr/>

        <h5>{t}Relate{/t}</h5>

        <p>{t}It is often helpful when we think about relating to try to put yourself in “someone elses shoes.” Think
            before responding to them – don’t try to relate when you are angry or upset about something. Practice a
            conversation, particularly if it will be a difficult one, and try to have alternatives ready depending on
            the response.{/t}</p>

        <p>{t}Just as important as verbal communication, your nonverbal communication – or body language – may speak
            volumes. Try to use body language that would be viewed as open and positive – use eye contact, touch, and an
            open body stance.{/t}</p>

        <h5>{t}Encourage{/t}</h5>

        <p>{t}As the final component of CARE Coaching, encouraging can take on many forms. Showing appreciation for your
            parents, letting them know that you realize that they tried to do the best they could. It is not uncommon
            for older parents to look back and say, “I wish I could have been a better parent” or “if only I could have
            given you more when you were growing up.” That is a great opportunity for you to acknowledge the
            characteristics that they passed on to you and the valuable things you learned from them.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Transition to retirement living{/t}</h2>
        <hr/>

        <p>{t}When the decision to move is made by your parents, encouraging their transition is important. Some
            retirement communities now offer “short stays” for prospective residents. This may be a way to introduce
            your parents to the new environment, while still being able to return home before making the move permanent.
            {/t}</p>

        <p>{t}Engaging your parents in the process of choosing what furniture, household items, and personal treasures
            to take to their new home is important. Encouraging them to “personalize” their new home will make the
            transition easier. {/t}</p>

        <p>{t}There are services available (senior move managers) across the country that focus specifically on helping
            older adults “downsize” from large family homes to smaller spaces. They can do everything from coordinating
            the entire move, packing and unpacking the home, and arranging for sales, consignment, or donation of items
            that would not be part of the move. Learn more about senior move managers at the professional association’s
            <a href="http://nasmm.org" target="_blank">website</a> (www.nasmm.org).
            {/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity – relocating scenarios{/t}</h2>
        <hr/>

        <p>{t}How can I convince my older parents to move to a retirement community? Here are two scenarios for you to
            respond to.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Activity_Relocating_Scenarios.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}General indicators when it may be time to consider moving{/t}</h2>
        <hr/>
        <p>{t}Although each situation is going to be very different, often medical conditions or mental awareness change
            warrant considering a move to a place where help with activities of daily living is available. In other
            cases, older adults may begin to find that tasks like cooking, housekeeping, shoveling snow, mowing the
            lawn, and taking care of home repairs have become a burden. {/t}</p>

        <p>
            {t}Some general indicators to consider:{/t}
        </p>

        <p>
            {t}Is your older parent experiencing significant weight loss?{/t}
        </p>

        <p>
            {t}Cooking for one can often be a chore especially for an older adult. When you eat alone, you eat less.
            Well-balanced meals can often be inconvenient to prepare.{/t}
        </p>

        <p>
            {t}Does your older parent experience mood changes, depression, or isolation?{/t}
        </p>

        <p>
            {t}As we get older, we tend to isolate ourselves and depression may set in. Older adults do not always
            experience depression in the same ways as younger adults. Older adults tend to have physical symptoms with
            depression, and so depression is often difficult to diagnose. Many older adults (and their health providers
            unfortunately!) believe that depression is just part of getting older!{/t}
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Some additional indicators when it may be time to consider moving{/t}</h2>
        <hr/>
        <p>{t}Do you or your older parent have concerns about safety?{/t}</p>

        <p>{t}A two-story home can be difficult for many people with mobility problems particularly if the bedrooms,
            bathrooms, and laundry are on the second floor. On average, about one-third of all older adults have a fall
            each year most often in their own home.{/t}</p>

        <p>{t}Do you or your older parent have concerns about security issues?{/t}</p>

        <p>{t}Unfortunately, criminals prey on older adults. It is not uncommon to hear about cases where older adults
            are taken advantage of in their home by unscrupulous vendors or even prey to home invaders who may harm the
            older adult in addition to robbing the home.{/t}</p>

        <p>{t}Does your older parent need help with daily tasks?{/t}</p>

        <p>{t}Many retirement communities offer assisted living for residents to “age in place.” Personalized plans of
            care are designed to help with dressing, grooming, bathing, and medications.{/t}</p>

        <p>{t}One last question to consider is, “Will moving be any easier next spring, next year, five or even ten
            years down the road?” In just about every case, the answer is “no.”{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Understanding the options: from staying at home to retirement living{/t}</h2>
        <hr/>

        <p>{t}Major life changes are seldom easy particularly when it comes to considering moving out of one’s home with
            all its memories. In past years, older parents had two options – either struggle to stay in one’s home,
            often one spouse caring for the other, or else resort to expensive (and frequently inadequate) nursing home
            care. The stress on the caregiving spouse can also have negative effects on his or her health and
            well-being.{/t}</p>

        <p>{t}Our aging population and growing consumer expectations for choice and quality in care for older adults
            have sparked an increasing number of options for older adults and their families. We will look at some of
            those choices in this next section.{/t}</p>

        <p>{t}Retirement living has many names and faces. The “industry” typically refers to “retirement living” as
            “senior living.” Retirement communities are referred to as “senior living communities.” There is basically
            three levels of care in senior living:{/t}</p>

        <ul>
            <li>{t}Independent Living{/t}</li>
            <li>{t}Assisted Living{/t}</li>
            <li>{t}Long-Term Care/Nursing Homes{/t}</li>
        </ul>

        <p>{t}We'll look at each of these in more detail on the next few pages.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Independent living communities{/t}</h2>
        <hr/>
        <p>{t}Independent living communities provide services, programs, and amenities to older adults who are able to
            function relatively independently in their homes. Services and programs often focus on supporting
            independence and wellness among residents. Independent living communities generally consists of homes,
            condominiums, town houses, apartments, and/or mobile and motor homes where residents maintain an independent
            lifestyle. Some communities offer only minimal services such as building and grounds maintenance, and
            security.{/t}</p>

        <p>{t}The residential units may be rented on a monthly basis or owned as condominiums or cooperatives. Basically
            they are no different from other residential enclaves except that there is an age restriction (over 55) or
            an age target. Depending on the community, residents are often able to bring in home care services or
            personal assistants for periods of time after an illness episode or hospitalization to aid in
            recuperation.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Assisted living communities{/t}</h2>
        <hr/>
        <p>{t}Assisted living communities provide care for seniors who need some help with activities of daily living
            yet wish to remain as independent as possible. A middle ground between independent living and nursing homes,
            assisted living communities aim to foster as much autonomy as the resident is capable of.  Most communities
            offer 24-hour supervision and an array of support services, with more privacy, space, and dignity than many
            nursing homes at lower costs.{/t}</p>

        <p>{t}There are approximately 33,000 assisted living communities operating in the U.S. today. The number of
            residents living in a facility can range from several to 300, with the most common size being between 25 and
            120 residents.{/t}</p>

        <p>{t}Assisted living staff helps residents with daily personal care including bathing, dressing, eating,
            grooming, and getting around. Medical care is limited, but families may contract for some medical needs such
            as medication administration or home health care. Assisted living communities focus on what is termed a
            “social model” of care (e.g., promoting social engagement and supporting individual care needs).{/t}</p>

        <p>{t}To understand more about assisted living – levels of care, caring for loved ones with dementia, how to pay
            for one, and how to evaluate one – click on the following link to download an “Assisted Living Evaluation
            and Moving Kit.”{/t}</p>

        <p>{t}Download Gilbert Guide – Assisted Living Evaluation and Moving Kit{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Gilbert_Guide_AL_Toolkit.pdf'); ?>"
               target="_blank" class="button">Download AL Guide</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Learn more about assisted living communities{/t}</h2>
        <hr/>

        <p>
            {t}Watch the following brief video to learn more about assisted living.{/t}
        </p>

        <h4>
            {t}Video – Learn about Assisted Living{/t}
        </h4>

        <iframe style="width: 480px; height: 360px; display: block; frameborder: 0; margin: 15px auto;"
                src="//www.youtube.com/embed/_9DdN7kXw5w?rel=0" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Long-term care communities{/t}</h2>
        <hr/>
        <p>{t}Long-term care communities, or nursing homes, may be independent or part of a senior continuing care
            community, providing medical and nursing care. Residents may be there temporarily for a period of
            rehabilitation, or may be there for long-term care. State regulations define the services that nursing homes
            may provide.{/t}</p>

        <p>{t}Registered Nurses who help provide 24-hour care to people who can no longer care for themselves due to
            physical, emotional, or mental conditions. A physician supervises each resident’s care and a nurse or other
            medical professional is almost always on the premises.{/t}</p>

        <p>{t}Most nursing homes have two basic types of services: skilled medical care and custodial care. Nursing
            homes offer an array of services, in addition to the basic skilled nursing care and the custodial care. 
            They provide a room, all meals, some social activities, personal care, 24-hour nursing supervision and
            access to medical services when needed.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}“Aging in Place” - planning for the future {/t}</h2>
        <hr/>
        <p>{t}“Aging in place” is a term often used to describe an older adult’s ability to stay in one location over
            the course of one’s life even as their medical and personal needs change over time. That may refer to living
            in a senior living community that provides services and care across the aging continuum or it may refer to
            continuing to live in one’s home and have services and care brought in by outside health care
            agencies.{/t}</p>

        <p>{t}A “Continuing Care Retirement Community” (also referred to as a CCRC) are different from other types of
            housing for older adults as they provide customized living quarters, personal care services, and health care
            all at one location. A benefit to older couples is the fact that if one partner’s health begins to fail, he
            or she may receive required care within that same community or campus. Most CCRCs provide all three levels
            of service described on the previous page:{/t}</p>

        <ul>
            <li>
                {t}Independent Living{/t}
            </li>
            <li>
                {t}Assisted Living{/t}
            </li>
            <li>
                {t}Long-Term Care{/t}
            </li>
        </ul>

        <p>{t}“Retirement living” is changing with a greater emphasis on wellness and quality of life for residents. The
            next generations of older adults are redefining what they are looking for in the next phase of their lives.
            Read about some of these changes happening in some Tucson area senior living communities.{/t}</p>


        <h5>{t}Retirement Redefined{/t}</h5>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Retirement_Redefined_Article.pdf'); ?>"
               target="_blank" class="button">Download Article</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-22" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Life care contracting{/t}</h2>
        <hr/>
        <p>{t}Requirements for applicants and payment options vary considerably for CCRCs. Within the current housing
            market, many CCRCs are offering payment plan options or assistance to older couples who may need to sell
            their current home prior to moving to the new community.{/t}</p>

        <p>{t}Many CCRCs offer what is termed “life care contracting.” Life care communities provide the same continuum
            of care to a resident for life, but the biggest difference is this: residents who become financially unable
            to pay their monthly care fees are subsidized by the community, with the same access to services, and with
            no interruption in care or change in priority status. In other words, residents are guaranteed the same
            quality of care and access to care from day one through end-of-life, regardless of their personal financial
            situation.{/t}</p>

        <p>{t}Additionally, most life care communities offer all health care services on the same campus. The idea is
            that, after qualifying through a health and financial application process, residents will never have to move
            again, except between levels of care as needed.{/t}</p>

        <p>{t}The following guide provides more information about types of contracts common to CCRCs. Because there are
            various across states in terms of these contracts, it is important that you also investigate your state’s
            requirements.{/t}</p>

        <h5>{t}Gilbert Guide – Independent Living & CCRC Evaluation Kit{/t}</h5>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Gilbert_Guide_IL_Tookit.pdf'); ?>"
               target="_blank" class="button">Download Guide</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-23" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What are other options for my older parents?{/t}</h2>
        <hr/>

        <p>{t}Understanding all of one’s options is important in making a big decision such as relocating. The more
            preplanning that can occur as well as understanding all options is key. Let’s look at some additional
            options for older adults.{/t}</p>

        <p>{t}Active adult communities{/t}</p>

        <p>{t}Active Adult Communities are one of the fastest growing segments of the housing market for older adults.
            Also known as “55+ communities” or “lifestyle communities,” these offer homes and community features
            attractive to 55+ adults. Many are master-planned communities that have a clubhouse or lifestyle center with
            numerous activities, pools, exercise equipment, golf courses, and more. Attractive to older adults is the
            option of a “maintenance free” lifestyle with “like-minded” adults who may share similar social and activity
            interests. Homes are often designed to be efficient and easier to get around. Security is also a benefit as
            a number are in gated communities.{/t}</p>

        <p>{t}View an example of an Active Adult Community in the following video.{/t}</p>

        <h5>{t}Video – Active Adult Community{/t}</h5>

        <iframe style="width: 420px; height: 315px; frameborder: 0; display: block; margin: 15px auto;"
                src="//www.youtube.com/embed/4ZuGvIfuk6M?rel=0" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-24" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What are other options for my older parents?{/t}</h2>
        <hr/>

        <p>{t}Affordable Senior Housing Options{/t}</p>

        <p>{t}For a number of older adults, the cost of entering an active adult community or CCRC may pose a financial
            barrier. What is also termed “Section 202 Housing” - named after the section of the federal legislation
            authorizing it – this is rental housing specifically for people over the age of 62 who have incomes under 50
            percent of the area median income.
            According to HUD, the U.S. Department of Housing and Urban Development, the average Section 202 resident is
            a woman in her 70s with an annual income of less than $10,000. Section 202 residences are built and run by
            private, non-profit groups who have received loan incentives from HUD. HUD is not involved in day to day
            operations. Rents are calculated according to income, and rental assistance funds pay whatever balance
            remains.{/t}</p>

        <p>{t}View the following brief video about affordable senior housing.{/t}</h4>

        <h4>{t}Video – Affordable Senior Housing{/t}</h4>

        <iframe style="width: 420px; height: 315px; frameborder: 0; display: block; margin: 15px auto;"
                src="//www.youtube.com/embed/cUrdKp8MGEw?rel=0" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-25" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Exercise – visiting a senior living community{/t}</h2>
        <hr/>
        <p>{t}The best way to understand senior living communities is to actually visit one in your area. Because many
            adult children visit senior living communities prior to having their older parents come for a tour, many
            senior living communities are very welcoming to adult children.{/t}</p>

        <p>{t}We have developed the following checklist that you may print and take with you on your visit. We recommend
            visiting a CCRC so that you may get an idea of the different levels of services and care that are available
            to residents.{/t}</p>

        <h5>{t}Visiting a Senior Living Community{/t}</h5>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Exercise_Visiting_a_Senior_Living_Community.docx'); ?>"
               target="_blank" class="button">Download Exercise</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-26" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Congratulations on completing the course!{/t}</h2>
        <hr/>
        <p>{t}Let’s summarize the top five points we covered in this course:{/t}</p>

        <ol>
            <li>
                {t}The fourth component of CARE Coaching is that of Encouraging. Encouraging our older parents can take
                many forms. Primarily, we want to encourage them to be as independent as possible for as long as
                possible.{/t}
            </li>
            <li>
                {t} We all want to feel that we have choices in our daily lives. In some cases, it may be tempting to
                want to quickly find a solution to a problem older parents are experiencing. Imposing a solution on
                older parents may actually make a situation more of a problem.{/t}
            </li>
            <li>
                {t} When the decision to move is made by your parents, encouraging their transition is important. That
                may include; (1) offering a short stay at a retirement community before making final decisions; (2)
                encouraging parents to personalize their new home; or (3) utilizing the services of senior move managers
                who can help with important decisions and coordination of moves.{/t}
            </li>
            <li>
                {t} Some indicators when it may be time to consider a move for older parents include: (1) significant
                weight loss; (2) changes in mood or growing isolation; (3) safety concerns; and (4) growing need for
                help with daily tasks.{/t}
            </li>
            <li>
                {t}There are several options in considering a move by older parents ranging from staying at home to
                various retirement living options. The aging population and growing consumer expectations for choice and
                quality in care have sparked increased options and interest in retirement living options. The best way
                to understand senior living communities is to actually visit one in your area. Many welcome adult
                children to visit and learn about programs and amenities.{/t}
            </li>
        </ol>


    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Course{/t} </a>
    </div>
</div>

<!-- need final 2 divs to close course and lesson id -->

</div>
</div>
