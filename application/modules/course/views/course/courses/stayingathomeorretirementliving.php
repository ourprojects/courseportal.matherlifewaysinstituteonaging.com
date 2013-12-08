<?php

$this->breadcrumbs = array('Courses' => $this->createUrl('course/'), t($course->title));
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
        <h3>Course Evaluations</h3>

        <p>Please click the button below to access the pre-course and post-course surveys. Participation is anonymous.
            Please complete each survey at the appropriate time.</p>
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
                            'title' => array('htmlOptions' => array('class' => 'flowers')),
							'highcharts' => array('show' => false)
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
        <h3>Certificate of Completion</h3>

        <p>Click the button below to access your certificate once you have successfully completed the module. You will
            be able to manually add your name, date, and course title.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank"
               class="button">Download Certificate</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('stayingathomeorretirementliving/166312138.png'); ?>" id="certificate"
             alt="Image">
    </div>
    <div class="box-sidebar one">
        <h3>Facilitator: Ellen Ziegemeier, MA</h3>

        <p>Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She
            earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for
            various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver
            training.</p>

        <p>
            <a href="#" target="_blank" class="button">Contact Facilitator</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('stayingathomeorretirementliving/80608570.png'); ?>" alt="Facilitator"
             id="facilitator">
    </div>
    <div class="box-sidebar one">
        <h3>Working Caregivers in America</h3>
        <img src="<?php echo $this->getImagesUrl('care/286x366_Grafix_69pc.png'); ?>" alt="image" class="block center"/>

        <p>69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an
            unpaid leave of absence to meet their care-giving responsibilities.</p>
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
    <h4>Access</h4>

    <p>
        <strong>90 days</strong> from the <strong>initial enrollment</strong> date.
    </p>

<h4>Requirements</h4>

<p>To successfully participate, you will need <a href="http://get.adobe.com/reader/" target="_blank">Adobe Acrobat</a>.</p>

<h4>Objectives</h4>
<ul>
<?php
    foreach ($course->objectives as $objective)
    echo '<li>' . t($objective->text) . '</li>';
    ?>
</ul>
<h4>Agenda</h4>

<ul>
<li>
Introduction to senior living options
<li>
Encouraging in CARE Coaching
</li>
<li>
Self-determination and importance of choice
</li>
<li>
Transition to retirement living
</li>
<li>
General indicators when it may be time to consider moving
</li>
<li>
Understanding options: from staying at home to retirement living
</li>
</ul>

<table style="border-top: solid black; margin-top: 50px;">
<tr>
<td>

<h5><?php echo t($course->title); ?> &rarr; </h5>
            </td>
            <td>

                    <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button"> Start </a>
                    <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-23"
                        data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-24"
                                                                                     data-fancybox-group="lesson-1"
                                                                                     class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-27 data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-28" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-29" data-fancybox-group="lesson-1" class="hide lesson-1"></a>

            </td>
        </tr>
    </table>

    <h4>Agenda</h4>
        <p>test here
        </p>

<h5>Resources</h5>

<p>Please use these listed resources for additional reading.</p>
<ul id="resources">

        <li>
            <a href="http://www.aarp.org/health/doctors-hospitals/info-09-2010/finding_your_way_how_to_talk_to_8212_and_understand_8212_your_doctor.html"
               target="_blank">How To Talk To Your Doctor</a>
            <!--
Emphasis on the importance of building a "successful partnership with your doctor." Suggestions for preparing for a productive office visit.  Questions to ask your doctor to assure that you have a clear understanding of your diagnosis, the treatment recommended, and other treatment options.  On the website of the American Association of Retired Persons. -->
        </li>
        <li>
            <a href="http://www.encouragingcoach.com/projects-selfcare-quiz.htm" target="_blank">Self-Care Quiz</a>
            <!--
How good are you at taking care of yourself?  Take this brief quiz to get some ideas! -->
        </li>

        <li>
            <a href="http://www.allaboutdepression.com/relax/" target="_blank">Guided Imagery</a>
            <!--
Guided imagery is an effective relaxation technique to reduce stress.  There are many benefits to being able to induce the "relaxation response" in your own body.  Some benefits include a reduction of generalized anxiety, prevention of cumulative stress, increased energy, improved concentration, reduction of some physical problems, and increased self-confidence. -->
        </li>

        <li>
            <a href="http://www.usa.gov/Citizen/Topics/Health/caregivers.shtml" target="_blank">Caregiver Resources on
                USA.gov</a>
            <!--
Find help providing care, government agencies, long-distance caregiving, and support for caregivers on this valuable website. -->
        </li>
        <li>
            <a href="http://www.aarp.org/home-family/caregiving/" target="_blank">Caregiving Resources from AARP</a>
            <!--
AARP provides various articles of interest and resources for family caregivers. -->
        </li>
    </ul>

<p style="border-bottom: solid black; margin-bottom: 35px;">Please contact your course facilitator if you have additional resources you would like to see added here.</p>

 <h4>Optional Video - The Sandwich Generation (Media Storm)</h4>

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
<div id="lesson-1">
<div id="lesson-1-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">Self-Determination Theory</h2>
        <hr/>
        <blockquote style="font-size: 24px;">To be self-determined is to endorse one's actions at the highest level of
            reflection.
        </blockquote>
        <blockquote style="font-size: 24px;">When self-determined people experience a sense of freedom to do what is
            interesting, personally important, and vitalizing.
        </blockquote>

        <cite> Edward Deci &amp; Richard Ryan </cite>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
    </div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers"><?php echo t($course->title); ?></h2>
        <hr/>

        <p>Welcome to the course, “Staying at Home or Retirement Living? Helping Parents Plan for the Future.” This
            course is geared towards family members who provide support or care to an older adult who may be a parent,
            spouse, other relative, or a significant other. </p>

        <p>Also, this course may be of help to a “future caregiver” to better prepare oneself for a future caregiving
            role. Whether you are now – or will be in the future – a caregiver for an older adult, it is important to
            understand that you are not alone.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">What’s this course all about?</h2>
        <hr/>
        <p>This is one in a series of short courses built on a framework called CARE Coaching. CARE Coaching courses
            provide working caregivers – both current and future – with essential tools, knowledge, and behaviors to
            effectively deal with a variety of issues arising from caring for older relatives or friends through
            application of effective coaching skills.</p>

        <p>CARE Coaching considers “real life” situations that family caregivers must often deal with (such as having
            conversations with aging parents about their needs and preferences for their future care, managing health
            information, communicating with health care providers, maneuvering the health care system, and addressing
            home safety issues, to name a few), activities in the course help stimulate “new thinking” by family
            caregivers providing them with tools to strengthen their knowledge, skills, and self-awareness about their
            role and responsibilities. As a result, family caregivers can focus on what is most important to be
            effective in caring for their loved ones.</p>

        <p>A fundamental learning approach that is used throughout this course is that of “coaching.” CARE Coaching is a
            model developed specifically for working caregivers that combines the best of what we know about coaching
            methods. CARE Coaching improves working caregivers’ abilities to:</p>

        <ul>
            <li>Communicate</li>
            <li>Advocate</li>
            <li>Relate</li>
            <li>Encourage</li>
        </ul>

        <p>In summary, CARE Coaching involves a method to help you as a caregiver think differently about a caregiving
            situation so you may better prepare and feel confident about your caregiving responsibilities and
            actions.</p>

        <p>This course will emphasize the CARE Coaching component of encouraging.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">“I think it’s time we sell the house.”</h2>
        <hr/>
        <p>Probably the one area that is most challenging to discuss with older parents deals with their ability to
            continue to live independently in their own home or apartment. </p>

        <p>In the “perfect world,” your parents call you one day and say, “Your father and I were talking today about
            how difficult it is for us to keep up the house. All the housework, lawn upkeep, snow shoveling. So we’ve
            decided to sell the house and move to that new retirement community in the next town.”</p>

        <p>Your response, “Whew! Thanks mom and dad for making this decision!”</p>

        <p>In reality, the discussion of potential relocation can be challenging – not just with your parents, but
            siblings and other relatives may have different viewpoints. Additionally, there are so many more choices in
            senior living options today even compared to ten years ago. We address some of those options in this
            section.</p>

        <p>Probably more important than the question, “Where will they live?” is the question, “How will they live?” For
            their quality of life to be enhanced, discussion questions must extend beyond health and safety issues
            (although these are important as well!). These are some of the types of questions to explore with your older
            parents:</p>

        <ul>
            <li>How do you want to live?</li>
            <li>What’s most important to you?</li>
            <li>What do you enjoy?</li>
            <li>What do you hope for?</li>
            <li>What gives you the greatest pleasure?</li>
            <li>What do you want more of in your lives?</li>
            <li>What gives meaning to your lives?</li>
            <li>What gives you joy in your lives?</li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">Introduction to senior living options</h2>
        <hr/>
        <p>Watch the following brief video to introduce yourself to senior living options.</p>
        <h4>Video – Learn about Senior Living</h4>
        <iframe style="width: 640px; height: 360px; display: block; margin: 15px auto; frameborder: 0;"
                src="//www.youtube.com/embed/4nHlzHS4PVg?list=UUwxxN3aMVzEs5AET6Hg3Ebw" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching: Encouraging</h2>
        <hr/>
        <p>The fourth component of CARE Coaching is that of encouraging. The decision to move to a retirement community
            is often a difficult one for older adults and families alike. Changes in health or other factors typically
            drive this decision, but being proactive and understanding how to make educated choices is key. </p>

        <p>Encouraging our older parents can take many forms. Primarily, we want to encourage them to be as independent
            as possible for as long as possible. Sometimes an older person experiences changes in health or mental
            awareness that is very gradual and that is “under the radar” of their children or friends. </p>

        <p>Older persons may learn effective “cues” to help them remember important events or when to pay bills. It may
            be as simple as keeping a calendar or written lists of when the past visits occurred with their doctors. We
            should encourage those “cues” that are effective in promoting independence. </p>

        <p>Sometimes older adults may not realize the range of options open to them if living alone seems to be
            challenging in some respects. Encouraging may take the form of providing accurate information about possible
            options for living arrangements. It is not uncommon today for adult children to be making the first visit to
            a retirement community to gain a better understanding of what services, programs, and amenities are being
            offered prior to a visit by their older parents.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">It’s All about Choice</h2>
        <hr/>
        <p>Self-determination means having the freedom to be in charge of one’s own life, choosing where you live, who
            you spend time with, and what you do every day. It means having the resources you need to create a good life
            and to make responsible decisions. It also means choosing where, when, and how you get help for any problems
            you might have.</p>

        <p>We all want to feel that we have choices in our daily lives. At times, the choices our older parents may want
            may not be choices we would want for them particularly if their safety or health may be at risk. At other
            times, we as caregivers are tempted to want to immediately rise to the occasion and take action. This may be
            because you want to help find a solution to a problem quickly. Imposing a solution may actually make a
            situation more of a problem.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">Some general Do’s and Don’ts</h2>
        <hr/>
        <p>If you were to walk into your supervisor’s office with a problem – say that your project is 50% over budget –
            and your supervisor tells you to immediately cut five of your key staff, how would you feel? Probably
            shocked that your supervisor did not want to discuss the situation, examine several reasons for the overage,
            and come up with a couple of options – all in collaboration with you as project manager. </p>

        <p>The same should apply with your older parents. You may notice that one or both are starting to forget things.
            Immediately, you jump to the conclusion that they have Alzheimer’s disease. There are many causes of memory
            loss including poor nutrition, sleep problems, medications, or one’s emotional state. You would want to take
            a measured approach to this issue in your discussions with your parents.</p>

        <p>Some general Do’s and Don’ts:</p>

        <h5>Do:</h5>
        <ul>
            <li>Assess the situation thoroughly</li>
            <li>Look for signs of changes (physical and mental)</li>
            <li>Keep notes or a record of what changes you observe</li>
        </ul>

        <h5>Don't:</h5>

        <ul>
            <li>Immediately jump to conclusions</li>
            <li>Rush to make a judgment</li>
            <li>Immediately make the assumption</li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">Exercise – identifying solutions to support choice and preferences</h2>
        <hr/>
        <p>Every caregiving situation is unique. Many factors come into play when considering the best possible
            solutions about your parents and their future. These factors may include: your parents’ health and
            functional abilities, mobility, values and beliefs, and family and community support systems. </p>

        <p>In this exercise, we provide several questions for you to use as a framework to “interview” your parents
            regarding their choices and preferences for their future. This exercise is broken into two parts. Please
            complete all of Part 1 before moving onto Part 2.</p>

        <p>Please note that you may print or save any activities from this course for future reference.</p>

        <p>Click below to access the Exercise – Identifying Solutions to Support Choice and Preferences</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Exercise_Identifying_Solutions_to_Support_Choice_and_Prefe.doc'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">Transition to retirement living</h2>
        <hr/>

        <p>When the decision to move is made by your parents, encouraging their transition is important. Some retirement
            communities now offer “short stays” for prospective residents. This may be a way to introduce your parents
            to the new environment, while still being able to return home before making the move permanent. </p>

        <p>Engaging your parents in the process of choosing what furniture, household items, and personal treasures to
            take to their new home is important. Encouraging them to “personalize” their new home will make the
            transition easier. </p>

        <p>
            There are services available (senior move managers) across the country that focus specifically on helping
            older adults “downsize” from large family homes to smaller spaces. They can do everything from coordinating
            the entire move, packing and unpacking the home, and arranging for sales, consignment, or donation of items
            that would not be part of the move. Learn more about senior move managers at the professional association’s
            <a href="http://nasmm.org" target="_blank">website</a> (www.nasmm.org).
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">Activity – relocating scenarios</h2>
        <hr/>

        <p>How can I convince my older parents to move to a retirement community? Here are two scenarios for you to
            respond to.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Activity_Relocating_Scenarios.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">General indicators when it may be time to consider moving</h2>
        <hr/>
        <p>Although each situation is going to be very different, often medical conditions or mental awareness change
            warrant considering a move to a place where help with activities of daily living is available. In other
            cases, older adults may begin to find that tasks like cooking, housekeeping, shoveling snow, mowing the
            lawn, and taking care of home repairs have become a burden. </p>

        <p>Some general indicators to consider:</p>

        <p>Is your older parent experiencing significant weight loss?</p>

        <p>Cooking for one can often be a chore especially for an older adult. When you eat alone, you eat less.
            Well-balanced meals can often be inconvenient to prepare.</p>

        <p>Does your older parent experience mood changes, depression, or isolation?</p>

        <p>As we get older, we tend to isolate ourselves and depression may set in. Older adults do not always
            experience depression in the same ways as younger adults. Older adults tend to have physical symptoms with
            depression, and so depression is often difficult to diagnose. Many older adults (and their health providers
            unfortunately!) believe that depression is just part of getting older!</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">Some additional indicators when it may be time to consider moving</h2>
        <hr/>
        <p>Do you or your older parent have concerns about safety?</p>

        <p>A two-story home can be difficult for many people with mobility problems particularly if the bedrooms,
            bathrooms, and laundry are on the second floor. On average, about one-third of all older adults have a fall
            each year most often in their own home.</p>

        <p>Do you or your older parent have concerns about security issues?</p>

        <p>Unfortunately, criminals prey on older adults. It is not uncommon to hear about cases where older adults are
            taken advantage of in their home by unscrupulous vendors or even prey to home invaders who may harm the
            older adult in addition to robbing the home.</p>

        <p>Does your older parent need help with daily tasks?</p>

        <p>Many retirement communities offer assisted living for residents to “age in place.” Personalized plans of care
            are designed to help with dressing, grooming, bathing, and medications.</p>

        <p>One last question to consider is, “Will moving be any easier next spring, next year, five or even ten years
            down the road?” In just about every case, the answer is “no.”</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">Understanding the options: from staying at home to retirement living</h2>
        <hr/>

        <p>Major life changes are seldom easy particularly when it comes to considering moving out of one’s home with
            all its memories. In past years, older parents had two options – either struggle to stay in one’s home,
            often one spouse caring for the other, or else resort to expensive (and frequently inadequate) nursing home
            care. The stress on the caregiving spouse can also have negative effects on his or her health and
            well-being.</p>

        <p>Our aging population and growing consumer expectations for choice and quality in care for older adults have
            sparked an increasing number of options for older adults and their families. We will look at some of those
            choices in this next section.</p>

        <p>Retirement living has many names and faces. The “industry” typically refers to “retirement living” as “senior
            living.” Retirement communities are referred to as “senior living communities.” There is basically three
            levels of care in senior living:</p>

        <ul>
            <li>Independent Living</li>
            <li>Assisted Living</li>
            <li>Long-Term Care/Nursing Homes</li>
        </ul>

        <p>We'll look at each of these in more detail on the next few pages.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">Independent living communities</h2>
        <hr/>
        <p>Independent living communities provide services, programs, and amenities to older adults who are able to
            function relatively independently in their homes. Services and programs often focus on supporting
            independence and wellness among residents. Independent living communities generally consists of homes,
            condominiums, town houses, apartments, and/or mobile and motor homes where residents maintain an independent
            lifestyle. Some communities offer only minimal services such as building and grounds maintenance, and
            security.</p>

        <p>The residential units may be rented on a monthly basis or owned as condominiums or cooperatives. Basically
            they are no different from other residential enclaves except that there is an age restriction (over 55) or
            an age target. Depending on the community, residents are often able to bring in home care services or
            personal assistants for periods of time after an illness episode or hospitalization to aid in
            recuperation.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">Assisted living communities</h2>
        <hr/>
        <p>Assisted living communities provide care for seniors who need some help with activities of daily living yet
            wish to remain as independent as possible. A middle ground between independent living and nursing homes,
            assisted living communities aim to foster as much autonomy as the resident is capable of.  Most communities
            offer 24-hour supervision and an array of support services, with more privacy, space, and dignity than many
            nursing homes at lower costs.</p>

        <p>There are approximately 33,000 assisted living communities operating in the U.S. today. The number of
            residents living in a facility can range from several to 300, with the most common size being between 25 and
            120 residents.</p>

        <p>Assisted living staff helps residents with daily personal care including bathing, dressing, eating, grooming,
            and getting around. Medical care is limited, but families may contract for some medical needs such as
            medication administration or home health care. Assisted living communities focus on what is termed a “social
            model” of care (e.g., promoting social engagement and supporting individual care needs).</p>

        <p>To understand more about assisted living – levels of care, caring for loved ones with dementia, how to pay
            for one, and how to evaluate one – click on the following link to download an “Assisted Living Evaluation
            and Moving Kit.”</p>

        <p>Download Gilbert Guide – Assisted Living Evaluation and Moving Kit</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Gilbert_Guide_AL_Toolkit.pdf'); ?>"
               target="_blank" class="button">Download AL Guide</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">Learn more about assisted living communities</h2>
        <hr/>

        <p>Watch the following brief video to learn more about assisted living.</p>

        <h4>Video – Learn about Assisted Living</h4>

        <iframe style="width: 480px; height: 360px; display: block; frameborder: 0; margin: 15px auto;"
                src="//www.youtube.com/embed/_9DdN7kXw5w?rel=0" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">Long-term care communities</h2>
        <hr/>
        <p>Long-term care communities, or nursing homes, may be independent or part of a senior continuing care
            community, providing medical and nursing care. Residents may be there temporarily for a period of
            rehabilitation, or may be there for long-term care. State regulations define the services that nursing homes
            may provide.</p>

        <p>Registered Nurses who help provide 24-hour care to people who can no longer care for themselves due to
            physical, emotional, or mental conditions. A physician supervises each resident’s care and a nurse or other
            medical professional is almost always on the premises.</p>

        <p>Most nursing homes have two basic types of services: skilled medical care and custodial care. Nursing homes
            offer an array of services, in addition to the basic skilled nursing care and the custodial care.  They
            provide a room, all meals, some social activities, personal care, 24-hour nursing supervision and access to
            medical services when needed.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">Visiting and evaluating a long-term care community: part 1</h2>
        <hr/>

        <p>Making the decision that a loved one needs to enter a long-term care community is never an easy one. There
            are many feelings and emotions that may be experienced by both your older parent and yourself ranging from
            anger to rejection to anxiety to relief. It is important to be prepared ahead of time for your initial visit
            to a long-term care community. </p>

        <p>The Centers for Medicare and Medicaid prepared some questions for adult children or older adults to ask when
            evaluating a long-term care community. Here are some highlights of these questions:</p>

        <h5>Quality of Life</h5>

        <ul>
            <li>
                Can my loved one participate in social, recreational, religious, or cultural activities that are
                important to him/her?
            </li>
            <li>
                Can my loved one choose what time to get up, go to sleep, or bathe?
            </li>
            <li>
                Can my loved one get meals or snacks at any time and have choices that he/she likes?
            </li>
            <li>
                Can my loved one have visitors at any time?
            </li>
        </ul>

        <h5>Quality of Care</h5>

        <ul>
            <li>
                Will the community share an example plan of care?
            </li>
            <li>
                Is the resident and family included in planning care?
            </li>
            <li>
                Will my loved one’s interests and preferences be included in the care plan?
            </li>
            <li>
                Who are the physicians that will be caring for my loved one?
            </li>
            <li>
                Will the community share the home’s latest inspection report showing quality of care problems
                (deficiencies)?
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">Visiting and evaluating a long-term care community: part 2</h2>
        <hr/>

        <p>More questions to consider when evaluating a long-term care community:</p>

        <h5>Location</h5>

        <p>Is the community located in an area convenient for relatives/friends to visit?</p>

        <h5>Staffing</h5>

        <ul>
            <li>
                How many staff are available on each shift?
            </li>
            <li>
                How many residents is a Certified Nursing Assistant (CNA) assigned to work with during each shift and
                during meals?
            </li>
            <li>
                Will the same staff take care of my loved one from day to day?
            </li>
            <li>
                What types of therapy are available? How often may my loved one receive therapy?
            </li>
            <li>
                Is there a social worker available? May I meet him/her?
            </li>
        </ul>

        <h5>Religious/Cultural Preferences</h5>

        <ul>
            <li>
                Does the community offer religious or cultural support that my loved one may need? If not, what type of
                arrangements may be provided?
            </li>
            <li>
                Does the community offer special diet options that my loved one’s faith may require?
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">Visiting and evaluating a long-term care community: part 3</h2>
        <hr/>

        <p>More questions to consider when evaluating a long-term care community:</p>

        <h5>Policies/Safety and Security</h5>

        <ul>
            <li>
                May I see a copy of the community’s policies that affect residents and families?
            </li>
            <li>
                Does the community provide a safe environment?
            </li>
            <li>
                Will my loved one’s personal belongings be secure?
            </li>
            <li>
                Will the community provide in writing information about their services, charges, and fees before making
                the decision to move?
            </li>
            <li>
                Is there a basic fee for room, meals, and personal care?
            </li>
            <li>
                Are there additional charges for other services such as beauty shop services?
            </li>
            <li>
                Will the community share the most recent health and fire inspection reports?
            </li>
        </ul>

        <h5>Health Care</h5>

        <ul>
            <li>
                Do all residents receive preventive services to keep them healthy? These services may include vaccines,
                dental exams, vision exams, hearing tests, and foot care.
            </li>
            <li>
                Does the community have an arrangement with a nearby hospital for emergencies?
            </li>
            <li>
                Does the physician that would be caring for my loved one have admitting privileges at that hospital?
            </li>
            <li>
                Is the community Medicare and/or Medicaid certified?
            </li>
            <li>
                May I talk to staff, residents, and family members of residents to ask about their satisfaction with
                care and services?
            </li>
        </ul>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-22" class="course-slide">
    <div class="content">
        <h2 class="flowers">Important points when visiting a long-term care community</h2>
        <hr/>

        <p>There are some important points to keep in mind when visiting a long-term care community. After considering
            what is important to your older parent as well as yourself in finding the best long-term care community, it
            is time to identify and visit some communities. You may want to discuss with health care professionals who
            you may know some of their recommendations for long-term care communities to visit. Remember, the long-term
            care community is home to their residents. So it is important to be considerate of residents and their
            family members.</p>

        <p>Some suggestions to consider when visiting:</p>

        <ul>
            <li>
                Make an appointment to meet with staff as well as “drop in” to visit with someone on staff. If a
                community does not have a “drop in” policy, you may want to consider that in your final decision.
            </li>
            <li>
                Ask many questions!
            </li>
            <li>
                Ask staff to explain anything you do not understand.
            </li>
            <li>
                Ask if you may talk to residents or family members to learn more about the daily routines or quality of
                care provided.
            </li>
            <li>
                Ask permission to enter another resident’s room. Remember, this is their home and they have the right to
                privacy!
            </li>
            <li>
                Make a list of any additional questions you may have after your visit and follow-up with any additional
                questions.
            </li>
        </ul>

        <p>Center for Medicare and Medicaid provide a Nursing Home Checklist that you may take with you on any long-term
            care community visit.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Nursing_Home_Checklist.pdf'); ?>"
               target="_blank" class="button">Download Checklist</a>
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-23" class="course-slide">
    <div class="content">
        <h2 class="flowers">"Aging in Place" - planning for the future </h2>
        <hr/>
        <p>“Aging in place” is a term often used to describe an older adult’s ability to stay in one location over the
            course of one’s life even as their medical and personal needs change over time. That may refer to living in
            a senior living community that provides services and care across the aging continuum or it may refer to
            continuing to live in one’s home and have services and care brought in by outside health care agencies.</p>

        <p>A “Continuing Care Retirement Community” (also referred to as a CCRC) are different from other types of
            housing for older adults as they provide customized living quarters, personal care services, and health care
            all at one location. A benefit to older couples is the fact that if one partner’s health begins to fail, he
            or she may receive required care within that same community or campus. Most CCRCs provide all three levels
            of service described on the previous page:</p>

        <ul>
            <li>Independent Living</li>
            <li>Assisted Living</li>
            <li>Long-Term Care</li>
        </ul>

        <p>“Retirement living” is changing with a greater emphasis on wellness and quality of life for residents. The
            next generations of older adults are redefining what they are looking for in the next phase of their lives.
            Read about some of these changes happening in some Tucson area senior living communities.</p>

        <h5>Retirement Redefined</h5>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Retirement_Redefined_Article.pdf'); ?>"
               target="_blank" class="button">Download Article</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-24" class="course-slide">
    <div class="content">
        <h2 class="flowers">Life care contracting</h2>
        <hr/>
        <p>Requirements for applicants and payment options vary considerably for CCRCs. Within the current housing
            market, many CCRCs are offering payment plan options or assistance to older couples who may need to sell
            their current home prior to moving to the new community.</p>

        <p>Many CCRCs offer what is termed “life care contracting.” Life care communities provide the same continuum of
            care to a resident for life, but the biggest difference is this: residents who become financially unable to
            pay their monthly care fees are subsidized by the community, with the same access to services, and with no
            interruption in care or change in priority status. In other words, residents are guaranteed the same quality
            of care and access to care from day one through end-of-life, regardless of their personal financial
            situation.</p>

        <p>Additionally, most life care communities offer all health care services on the same campus. The idea is that,
            after qualifying through a health and financial application process, residents will never have to move
            again, except between levels of care as needed.</p>

        <p>The following guide provides more information about types of contracts common to CCRCs. Because there are
            various across states in terms of these contracts, it is important that you also investigate your state’s
            requirements.</p>

        <h5>Gilbert Guide – Independent Living & CCRC Evaluation Kit</h5>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Gilbert_Guide_IL_Tookit.pdf'); ?>"
               target="_blank" class="button">Download Guide</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-25" class="course-slide">
    <div class="content">
        <h2 class="flowers">What are other options for my older parents?</h2>
        <hr/>

        <p>Understanding all of one’s options is important in making a big decision such as relocating. The more
            preplanning that can occur as well as understanding all options is key. Let’s look at some additional
            options for older adults.</p>

        <p>Active adult communities</p>

        <p>Active Adult Communities are one of the fastest growing segments of the housing market for older adults. Also
            known as “55+ communities” or “lifestyle communities,” these offer homes and community features attractive
            to 55+ adults. Many are master-planned communities that have a clubhouse or lifestyle center with numerous
            activities, pools, exercise equipment, golf courses, and more. Attractive to older adults is the option of a
            “maintenance free” lifestyle with “like-minded” adults who may share similar social and activity interests.
            Homes are often designed to be efficient and easier to get around. Security is also a benefit as a number
            are in gated communities.</p>

        <p>View an example of an Active Adult Community in the following video.</p>

        <h5>Video – Active Adult Community</h5>

        <iframe style="width: 420px; height: 315px; frameborder: 0; display: block; margin: 15px auto;"
                src="//www.youtube.com/embed/4ZuGvIfuk6M?rel=0" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-26" class="course-slide">
    <div class="content">
        <h2 class="flowers">What are other options for my older parents?</h2>
        <hr/>

        <p>Affordable Senior Housing Options</p>

        <p>For a number of older adults, the cost of entering an active adult community or CCRC may pose a financial
            barrier. What is also termed “Section 202 Housing” - named after the section of the federal legislation
            authorizing it – this is rental housing specifically for people over the age of 62 who have incomes under 50
            percent of the area median income. According to HUD, the U.S. Department of Housing and Urban Development,
            the average Section 202 resident is a woman in her 70s with an annual income of less than $10,000. Section
            202 residences are built and run by private, non-profit groups who have received loan incentives from HUD.
            HUD is not involved in day to day operations. Rents are calculated according to income, and rental
            assistance funds pay whatever balance remains.</p>

        <p>View the following brief video about affordable senior housing.</p>

        <h4>Video – Affordable Senior Housing</h4>

        <iframe style="width: 420px; height: 315px; frameborder: 0; display: block; margin: 15px auto;"
                src="//www.youtube.com/embed/cUrdKp8MGEw?rel=0" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-27" class="course-slide">
    <div class="content">
        <h2 class="flowers">Exercise – visiting a senior living community</h2>
        <hr/>
        <p>The best way to understand senior living communities is to actually visit one in your area. Because many
            adult children visit senior living communities prior to having their older parents come for a tour, many
            senior living communities are very welcoming to adult children.</p>

        <p>We have developed the following checklist that you may print and take with you on your visit. We recommend
            visiting a CCRC so that you may get an idea of the different levels of services and care that are available
            to residents.</p>

        <h5>Visiting a Senior Living Community</h5>

        <p>
            <a href="<?php echo $this->createDownloadUrl('stayingathomeorretirementliving/Exercise_Visiting_a_Senior_Living_Community.docx'); ?>"
               target="_blank" class="button">Download Exercise</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-28" class="course-slide">
    <div class="content">
        <h2 class="flowers">Congratulations on completing the course!</h2>
        <hr/>
        <p>Let’s summarize the top five points we covered in this course:</p>

        <ol>
            <li>The fourth component of CARE Coaching is that of Encouraging. Encouraging our older parents can take
                many forms. Primarily, we want to encourage them to be as independent as possible for as long as
                possible.
            </li>
            <li> We all want to feel that we have choices in our daily lives. In some cases, it may be tempting to want
                to quickly find a solution to a problem older parents are experiencing. Imposing a solution on older
                parents may actually make a situation more of a problem.
            </li>
            <li> When the decision to move is made by your parents, encouraging their transition is important. That may
                include; (1) offering a short stay at a retirement community before making final decisions; (2)
                encouraging parents to personalize their new home; or (3) utilizing the services of senior move managers
                who can help with important decisions and coordination of moves.
            </li>
            <li> Some indicators when it may be time to consider a move for older parents include: (1) significant
                weight loss; (2) changes in mood or growing isolation; (3) safety concerns; and (4) growing need for
                help with daily tasks.
            </li>
            <li>There are several options in considering a move by older parents ranging from staying at home to various
                retirement living options. The aging population and growing consumer expectations for choice and quality
                in care have sparked increased options and interest in retirement living options. The best way to
                understand senior living communities is to actually visit one in your area. Many welcome adult children
                to visit and learn about programs and amenities.
            </li>
        </ol>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Course </a>
    </div>
</div>

<!-- need final 2 divs to close course and lesson id -->

</div>
</div>
