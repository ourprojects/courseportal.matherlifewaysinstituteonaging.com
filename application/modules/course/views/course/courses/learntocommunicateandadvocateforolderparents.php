<?php

$this->breadcrumbs = array('{t}Courses{/t}' => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach (array(
             '.lesson-1') as $lesson)
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
     style="background-image: url(<?php echo $this->getImagesUrl('learntocommunicateandadvocateforolderparents/163354198.png'); ?>);">
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
        <img src="<?php echo $this->getImagesUrl('learntocommunicateandadvocateforolderparents/166312138.png'); ?>"
             id="certificate"
             alt="{t}Image{/t}">
    </div>
    <div class="box-sidebar one">
        <h3>{t}Facilitator: Ellen Ziegemeier, MA{/t}</h3>

        <p>{t}Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She
            earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for
            various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver
            training.{/t}</p>

        <p><a href="#" target="_blank" class="button">Contact Facilitator</a></p>
        <img src="<?php echo $this->getImagesUrl('learntocommunicateandadvocateforolderparents/80608570.png'); ?>"
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
                    <a href="<?php echo $this->createDownloadUrl('learntocommunicateandadvocateforolderparents/Agenda_learntocommunicateandadvocateforolderparents.pdf'); ?>"
                       target="_blank" class="button">{t}Agenda{/t}</a></p></td>
        </tr>
        <tr>
            <td>
                <h5>{t}Becoming a More Confident Caregiver - {/t}</h5>
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
        <h2 class="flowers">{t}Learning to Communicate and Advocate for Older Parents{/t}</h2>
        <hr/>
        <p>{t}Welcome to the course, “Learning to Communicate and Advocate for Older Parents.” This course is geared
            towards family members who provide support or care to an older adult who may be a parent, spouse, other
            relative, or a significant other. {/t}</p>

        <p>{t}Also, this course may be of help to a “future caregiver” to better prepare oneself for a future caregiving
            role. Whether you are now – or will be in the future – a caregiver for an older adult, it is important to
            understand that you are not alone.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a>
    </div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What’s this course all about?{/t}</h2>
        <hr/>

        <p>{t}This is one in a series of short courses built on a framework called CARE Coaching. CARE Coaching courses
            provide working caregivers – both current and future – with essential tools, knowledge, and behaviors to
            effectively deal with a variety of issues arising from caring for older relatives or friends through
            application of effective coaching skills.{/t}</p>

        <p>{t} CARE Coaching considers “real life” situations that family caregivers must often deal with (such as
            having conversations with aging parents about their needs and preferences for their future care, managing
            health information, communicating with health care providers, maneuvering the health care system, and
            addressing home safety issues, to name a few), activities in the course help stimulate “new thinking” by
            family caregivers providing them with tools to strengthen their knowledge, skills, and self-awareness about
            their role and responsibilities. As a result, family caregivers can focus on what is most important to be
            effective in caring for their loved ones.{/t}</p>

        <p>{t}A fundamental learning approach that is used throughout this course is that of “coaching.” CARE Coaching
            is a model developed specifically for working caregivers that combines the best of what we know about
            coaching methods. CARE Coaching improves working caregivers’ abilities to:{/t}</p>

        <ul>
            <li>{t}Communicate{/t}</li>
            <li>{t}Advocate{/t}</li>
            <li>{t}Relate{/t}</li>
            <li>{t}Encourage{/t}</li>
        </ul>

        <p>{t}In summary, CARE Coaching involves a method to help you as a caregiver think differently about a
            caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and
            actions.{/t}</p>

        <p>{t}In this course, we’ll focus on the first two elements of CARE Coaching, that of “Communicating” and
            “Advocating.”{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching: Communicating{/t}</h2>
        <hr/>
        <p>{t}Caregiving commonly brings up feelings of burden, confusion, and guilt for caregivers. Communicating is
            the first component of CARE Coaching. As a first step, using some key communication skills can relieve some
            of these concerns.{/t}</p>

        <p>{t} Does this scenario sound familiar? You are in a restaurant having dinner with your older parents. Your
            mother has some memory problems which means she takes quite a long time to figure out what to order. The
            waiter is standing over your table, and your father gets frustrated waiting for her to order. He says,
            “Helen, just order the chicken. You like the chicken!” She says, “I guess I’ll have the chicken.”{/t}</p>

        <p>{t}After the waiter leaves (and in front of your mother), he says, “She takes too long to order. She’s
            distracted with other things going on. She can’t figure it out, so it’s easy for her if I just tell her, and
            all she has to do is repeat it.” Your mother subsequently doesn’t say much through the rest of the evening.
            The mood around the table is not much better.{/t}</p>

        <p>{t}Communicating in CARE Coaching is all about choice. Your father’s response is based on his own perceptions
            and feelings about what’s going on with your mother rather than supporting her remaining potential to make
            choices. Perhaps her memory problems do interfere with her capacity to make choices, but being able to
            “modify” the situation can maximize Helen’s remaining capacities.{/t}</p>

        <p>{t}Let’s look at an alternative approach.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}An example of an alternative approach{/t}</h2>
        <hr/>
        <p>{t}Back at the restaurant, the waiter is ready to take the order. You say, “Mom, this restaurant is really
            well known for their delicious chicken and fish dishes, just the way you like them. What do you have a taste
            for today – chicken or fish?” Your mother says, “Well, I just don’t know. I had chicken for lunch today. So
            I think I’d like to try their fish!” {/t}</p>

        <p>{t}So what is different in the two approaches? In your approach, you are taking a CARE Coaching approach by
            asking a version of “What do you want?” through your conversation. Taking into consideration your mother’s
            limitations, you have supported her remaining abilities to participate in daily life activities.{/t}</p>

        <p>{t}You may not yet be in a “caregiving” role for your older parents or other loved ones (or you may not
            consider what you now do for them as “caregiving”), but this course is designed to help you think about the
            future. People may find themselves “plunged” into the caregiving role at a time in life when they themselves
            are facing challenges such as mid-career transitions, their own health issues, or before retirement.
            Additionally, they may be contending with raising their own children simultaneously.
            {/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Common feelings about caregiving{/t}</h2>
        <hr/>
        <p>{t}Caregiving commonly brings up feelings of burden, confusion, and guilt for caregivers. As a first step,
            using some key communication skills can relieve some of these concerns. Where do these feelings stem from?
            Burden refers to emotional response to changes and demands that occur as caregivers give help and support to
            the older person.{/t}</p>

        <p>{t}We have developed a Caregiver Burden Assessment to help you identify aspects of your life that may or may
            not be impacted by caregiving at this time. Click on the following to access the tool.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('learntocommunicateandadvocateforolderparents/Caregiver_Burden_Assessment_Tool.doc'); ?>"
               target="_blank" class="button">Download Assessment</a>
        </p>

        <p>{t}Confusion about the healthcare system and utilization of those services by older adults is a universal
            experience for caregivers. Later in this course, we will address important ways for you to better understand
            the key roles and responsibilities of care providers as well as where concise, accurate information may be
            found to also share with your older parents.{/t}</p>

        <p>{t}Guilt is often an ongoing feeling for many caregivers. Sometimes caregivers get so focused on their frail,
            older parent that they feel guilty focusing on someone else – including themselves. Empower Online addresses
            these issues for caregivers and provides tools focused on self-care of the caregiver.{/t}</p>

        <p>{t}As a first step to better communication with your older parents about their needs and preferences, it is
            important that you have a clear understanding of what you may know and do not know about these needs and
            preferences. The next exercise will help you determine your level of knowledge as well as your own feelings
            about your parents’ future planning.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Exercise – understanding your parents' needs and preferences{/t}</h2>
        <hr/>
        <p>{t}This exercise is designed to help you determine what you know and do not know about your parents needs and
            preferences. Determining this now will help you on the road of communicating more openly about your parents’
            future wishes to reduce your experience of burden, confusion, and guilt as a caregiver. {/t}</p>

        <p>{t}Everyone has a different level of knowledge when it comes to the following information, so do not feel
            overwhelmed if you do not recall or have not addressed some of these areas with your parents.{/t}</p>

        <p>{t}Please note that you may print or save any activities from this course for future reference.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('learntocommunicateandadvocateforolderparents/Exercise_Understanding_Needs_and_Preferences.doc'); ?>"
               target="_blank" class="button">Download Exercise</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Where to start "the talk"!{/t}</h2>
        <hr/>
        <p>{t}Don't feel anxious if you had a number of "blanks" when working through the previous exercise - it is not
            a reflection on "bad" caregiving. Your parents have been independent through these many years and may not
            have felt the need to share much of these matters with "the kids."{/t}</p>

        <p>{t}What do we mean by “the talk”? In the context of this course, it is the often difficult discussion about
            what they are wanting for their future.{/t}</p>

        <p>{t}How do you start to talk to your older parents about the future? What fears do you have about bringing up
            this topic with them?{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}A framework to start "the talk"{/t}</h2>
        <hr/>
        <p>{t}A framework has been developed to help you getting the conversations going. Overall, start small while
            your parents are still healthy and can fully participate in the discussions about their lives and health
            without undue pressure.{/t}</p>

        <p>{t} Think of this paced way to communicate as "TEMPO." This acronym stands for:{/t}</p>

        <ul>
            <li>
                {t}Timing{/t}
            </li>
            <li>
                {t}Experience{/t}
            </li>
            <li>
                {t}Motivation{/t}
            </li>
            <li>
                {t}Place{/t}
            </li>
            <li>
                {t}Outcome{/t}
            </li>
        </ul>

        <p>{t}Let’s look at each of these components.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}A framework to start "the talk" - timing{/t}</h2>
        <hr/>
        <p>{t}Plan to set aside time for conversations with your parents. You may want to have a “standing day and time”
            scheduled.{/t}</p>

        <p>{t}Be respectful and ask them when would be the best time for them to have these conversations.{/t}</p>

        <p>{t}In turn, make sure you have time to listen. No ringing cell phones or texting at this time!{/t}</p>

        <p>{t}Above all, be patient. Your parents may feel uncomfortable at first with the idea of these conversations
            and may want to put them off for some time.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}A framework to start "the talk" – experience{/t}</h2>
        <hr/>
        <p>{t}A good approach to bringing up these difficult topics is to relate it to your experiences.{/t}</p>

        <p>{t}Some openers sound like this:{/t}</p>

        <p>{t}"Dad, I just came from my attorney's office. We finished updating my will. I was wondering when the last
            time you took a look at yours?"{/t}</p>

        <p>{t}"Mom, a colleague of mine at work just had an unfortunate experience. His father had a sudden heart
            attack, and it took a long time before they could notify him because his dad did not have any emergency
            contact information in place. Can we go over how your information is organized particularly since my office
            recently moved and I have new phone numbers?"{/t}</p>

        <p>{t}"It's really gotten to be a challenge driving out there. I'm on the road all day and see quite a few bad
            drivers, especially those on their cell phones. I'm concerned about how you're feeling about driving these
            days."{/t}</p>

        <p>{t}Try this yourself.{/t}</p>

        <ul>
            <li>
                {t}Identify the difficult topic you are wanting to bring up with your parent.{/t}
            </li>
            </li>
            <li>
                {t}Think of an experience you or someone you may know that addresses this topic.{/t}
            </li>
            </li>
            <li>
                {t}Describe the experience and impact in no more than two sentences.{/t}
            </li>
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}A framework to start "the talk" – experience{/t}</h2>
        <hr/>
        <p>{t}Relate the topic back to you or your concerns about your parent. It is very important not to put blame on
            your parent. For example, looking at the last opener noted above, saying to your parent, “You really seem
            confused sometimes behind the wheel” will not move the conversation forward. Rather, saying “I’m concerned
            about how you’re feeling about driving these days” puts the focus on you rather than setting up a potential
            confrontation. A framework to start "the talk" – motivation.{/t}</p>

        <p>{t}Be clear about your motive for having the conversation.{/t}</p>

        <p>{t}The motivating factors should be related to safety, quality of life, and well-being - both theirs and
            yours.{/t}</p>

        <p>{t}Their best interests are prime consideration, but your life and the lives of your family also
            matter.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What are the motivators in your situation?A framework to start "the talk" –
            place{/t}</h2>
        <hr/>
        <p>{t}The place where these conversations take place needs to be a "safe space" as your parents would define
            that.{/t}</p>

        <p>{t}It may not necessarily be in their home.{/t}</p>

        <p>{t}Some of these topics are sensitive and so one parent may feel more comfortable taking the lead in the
            conversations.
            {/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What may be a comfortable place for your conversations?A framework to start "the talk" –
            outcome{/t}</h2>
        <hr/>
        <p>{t}One conversation is not going to address all the important topics that need to be discussed.{/t}</p>

        <p>{t}The initial conversations may be laying the groundwork for you to better understand your parents’
            feelings.{/t}</p>

        <p>{t}Not only do you want to get information, but you also want to share information.{/t}</p>

        <p>{t} What outcomes would be your goal in your conversations?{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity - Practice "The Talk"{/t}</h2>
        <hr/>
        <p>{t}Some caregivers feel that practice sessions are valuable to "test out" the conversations in other
            situations. Here are some practice activities for you to try out.{/t}</p>

        <h5>{t}Practice “The Talk”){/t}</h5>

        <p>
            <a href="<?php echo $this->createDownloadUrl('learntocommunicateandadvocateforolderparents/Activity_Practice_the_Talk.doc'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching: Advocating{/t}</h2>
        <hr/>
        <p>{t}It’s time to bring up the second component of CARE Coaching – that of advocating. We are talking about
            advocating in a caring sense – that of supporting another – rather than in the legal sense – that of
            defending another.{/t}</p>

        <p>{t}Caregivers often view their parents as “stubborn” or “resistant” to their help:{/t}</p>

        <ul>
            <li>
                {t}“I just can’t get them to listen to me!”
            </li>
            <li>
                {t}“They just won’t talk to me about their problem, even though I’ve got the answer!”
            </li>
            <li>
                {t}“They never take my advice – even though it’s for their own good!”
            </li>
        </ul>

        <p>{t} Sounds like some things your parents may have said to you growing up? In these situations, the caregiver
            is thinking more like the parent, and we remember from our early experiences hearing these – how much did
            they work when your parents were saying these words to you?{/t}</p>

        <p>{t}Consider this comparison:{/t}</p>

        <ul>
            <li>
                {t}In the role of PARENT – you are in charge, make the rules, and set the agenda. Negotiating is
                unnecessary. You are a “teller of information.”{/t}
            </li>
            </li>
            <li>
                {t} In the role of PARTNER – you have a common goal, mutual interests, and work towards collaborating on
                common goals. You are a “listener for information.”{/t}
            </li>
            </li>
        </ul>

        <p>{t}You are on the same team as your parents and want to collaborate with them as a partner in their best
            future. You may need to reassure them that you are on the same team and you want to be a partner in their
            best future. Your goal is to collaborate with them to uphold their needs, beliefs, and values. It is not
            your intention to switch to a “parenting” role so as not to diminish their independence.{/t}</p>

        <p>{t}Self-Coaching Hint: As reinforcement, you need to make sure your intentions are clear. You are not trying
            to subtly coerce them or manipulate them in some way. You intend to make every action and word worthy of
            trust. Practice holding that intention in your mind and heart, and it will make a difference in how you
            listen and influence what you say!{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Congratulations on completing the course!{/t}</h2>
        <hr/>
        <p>{t}Let’s summarize the top five points we covered in this course:{/t}</p>

        <ol>
            <li>
                {t}Communicating in CARE Coaching focuses on asking a version of the question, “What do you want?”
                through your conversation with older parents to support their participation in decisions. It is the
                first step towards better communication with your older parents about their needs and preferences.{/t}
            </li>
            <li>
                {t}Plan to set aside time for conversations with your older parents. Be patient, as it may take some
                time for everyone to be comfortable with discussions about their future.{/t}
            </li>
            <li>
                {t}Try to relate your own experiences or those of others in situations of difficult conversation as
                openers to difficult conversations.{/t}
            </li>
            <li>
                {t}Difficult conversations should focus on what is the positive outcome being sought (such as better
                quality of life or personal safety) rather than the negative (“If you keep driving, you are going to
                kill yourself or somebody else!).
                {/t}
            </li>
            <li>
                {t}Focus on being an Advocate to your older parents. Sometimes you may feel that you are now the parent.
                Try to see yourself as a partner on the same team with your parents – your goal is to uphold their
                needs, beliefs, and values to support their independence as long as possible.
                {/t}
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
