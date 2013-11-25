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
     style="background-image: url(<?php echo $this->getImagesUrl('becomingamoreconfidentcaregiver/84008631.png'); ?>);">
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
        <h3>Certificate of Completion</h3>

        <p>Click the button below to access your certificate once you have successfully completed the module. You will
            be able to manually add your name, date, and course title.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank"
               class="button">Download Certificate</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('becomingamoreconfidentcaregiver/166312138.png'); ?>" id="certificate"
             alt="Image">
    </div>
    <div class="box-sidebar one">
        <h3>Facilitator: Ellen Ziegemeier, MA</h3>

        <p>Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She
            earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for
            various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver
            training.</p>

        <p>
            <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-1 button">Contact
                Facilitator</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('becomingamoreconfidentcaregiver/80608570.png'); ?>" alt="Facilitator"
             id="facilitator">
    </div>
    <div class="box-sidebar one">
        <h3>Working Caregivers in America</h3>
        <img src="<?php echo $this->getImagesUrl('care/286x366_Grafix_69pc.png'); ?>" alt="image" class="block center"/>

        <p>69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an
            unpaid leave of absence to meet their caregiving responsibilities.</p>
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

    <p>To successfully participate, you will need access to the following software on the computer(s) you are using to
        access this course:</p>
    <ul>
        <li>Spreadsheet processor (Microsoft Excel or similar)</li>
        <li>
            <a href="http://get.adobe.com/reader/" target="_blank">Adobe Acrobat</a>
        </li>
    </ul>
    <h4>Objectives</h4>
    <ul>
        <?php
        foreach ($course->objectives as $objective)
            echo '<li>' . t($objective->text) . '</li>';
        ?>
    </ul>
    <h4>Agenda &amp; Module(s)</h4>

    <table style="border-bottom: 2px solid black; border-top: 2px solid black; margin-top: 10px;">
        <tr>
            <td>
                <h5>Download the course Agenda - </h5>
            </td>
            <td>
                <p>
                    <a href="<?php echo $this->createDownloadUrl('becomingamoreconfidentcaregiver/Agenda_becomingamoreconfidentcaregiver.pdf'); ?>"
                       target="_blank" class="button">Agenda</a>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <h5>Becoming a More Confident Caregiver - </h5>
            </td>
            <td>
                <p>
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
                        href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
                        href="#lesson-1-slide-27" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a  href="#lesson-1-slide-28" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                </p>
            </td>
        </tr>
    </table>

    <h4>Resources</h4>

    <p>Please use these listed resources for additional reading. Please contact your course facilitator if you have
        additional resources you would like to see added here.</p>
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

    <h4>Optional Video - Working Caregivers</h4>

    <h5>The Sandwich Generation - by Media Storm</h5>

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
        <h2 class="flowers">Becoming a More Confident Caregiver</h2>
        <hr/>
        <p>Welcome to the course, “Becoming a More Confident Caregiver.” This course is geared towards family members
            who provide support or care to an older adult who may be a parent, spouse, other relative, or a significant
            other.</p>

        <p>Also, this course may be of help to a “future caregiver” to better prepare oneself for a future caregiving
            role. Whether you are now – or will be in the future – a caregiver for an older adult, it is important to
            understand that you are not alone.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
    </div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">What’s this course all about?</h2>
        <hr/>

        <p>This is one in a series of short courses built on a framework called CARE Coaching. CARE Coaching courses
            provide working caregivers – both current and future – with essential tools, knowledge, and behaviors to
            effectively deal with a variety of issues arising from caring for older relatives or friends through
            application of effective coaching skills.</p>

        <p> CARE Coaching considers “real life” situations that family caregivers must often deal with (such as having
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

        <p>So let's begin with some facts about family caregivers!</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">Some facts about family caregivers</h2>
        <hr/>
        <p>Here are some interesting facts about family caregivers:</p>

        <ul>
            <li>Nearly 44 million family caregivers provided support or care to someone ages 50 years or older.</li>
            <li>Nearly 15 million family caregivers care for someone with Alzheimer’s disease or other forms of
                dementia.
            </li>
            <li>More than two-thirds of family caregivers taking care of an older adult are female.</li>
            <li>Two-thirds of family caregivers do not live with the older adults they are caring for.</li>
            <li>Nearly 60 percent of care recipients live in their own homes.</li>
            <li>The number of male caregivers is steadily growing. Male caregivers are more likely to help with tasks
                related to the home of the older adult (such as home repairs or financial issues) while female
                caregivers perform more physical care tasks (such as bathing or dressing).
            </li>
            <li>A significant portion of family caregiver’s time focuses on errands (such as shopping, transportation,
                picking up medications), researching and making care arrangements, transportation to physician
                appointments, and managing financial matters.
            </li>
            <li>More than one in six working caregivers care for one or more older adults.</li>
        </ul>

        <p>Next, we’ll learn more about the CARE Coaching concepts.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">What’s coaching all about?</h2>
        <hr/>
        <p>You are probably familiar with the term “coaching” from many aspects of our daily lives.</p>

        <p>As a parent or sibling, you may be involved in coaching little league or some other sport. Usually this form
            of coaching involves teams. The role of the coach is to motivate, set ground rules, and draw out the best in
            each player for the good of the team.</p>

        <p>In the work environment, coaching may also involve the work team or individual. Coaching the work team may
            involve looking at ways to turn barriers into opportunities for the good of the team and company. An
            organization may bring in a professional coach to build sustainable, high-performance work teams and thus
            build the company’s competitive advantage over other organizations. At the individual level, a coach may
            focus on leadership development showing the company’s commitment to build a strong base of effective
            leaders.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">Role reversals with aging parents</h2>
        <hr/>
        <p>As a current or future caregiver, you may be feeling as if you are in a “reversed role” to an elderly parent,
            other relative, or friend. When we are young, we look up to parents or others as a “coach” in many respects.
            Though it may have been difficult at times for all of us growing up, the effective parent “coach” had the
            following skill set:</p>

        <ul>
            <li>They respected us, so we listened to them.</li>
            <li>They listened to us, so we felt understood.</li>
            <li>They appreciated us, so we felt supported.</li>
            <li>They supported us when we tried new things, so we grew more responsible.</li>
        </ul>
        <p>As our parents age, they may suffer declining physical or cognitive health and thus have greater need for our
            help and understanding, and so we may become their “coach” in life. That is easier said than done in many
            cases! Regardless of their age, our parents always see themselves in that role in our relationship with
            them.</p>

        <p>We also tend to go back into old habits, communication styles, or reactions when dealing with our parents.
            How do you deal with a situation where your father begins to have minor car accidents or “forgets” the way
            home? Talking with a parent about giving up the car keys is probably one of the most challenging situations
            we may face as a caregiver.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">What’s CARE Coaching all about?</h2>
        <hr/>
        <p>CARE Coaching involves a method to help you as a caregiver think differently about a caregiving situation so
            you may better prepare and feel confident about your caregiving responsibilities and actions. Learning what
            is important to older parents – and learning how to draw that out – often bringing to light new information
            about what is important to them in terms of their own health and care.</p>

        <p>CARE Coaching will provide your tools, resources, and experiences targeted towards strengthening your
            caregiving abilities to Communicate, Advocate, Relate, and Encourage older parents or other loved ones.
            Throughout this course, we will highlight these terms and provide examples and activities to help you on
            this journey.</p>

        <p>In this course, we’ll usually talk about “older parents,” but we realize that caregivers may be involved in
            caring for older siblings, other relatives, friends, or neighbors. For the purposes of this course, we will
            use “older parents” as our “short-hand” descriptor of any older adult that you may be caring for!</p>

        <p>Before we can start coaching others, let’s consider our skills related to coaching ourselves!</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching: core components</h2>
        <hr/>

        <p>Let’s just take a moment to review the core components of CARE Coaching.</p>

        <h4>Communicate</h4>

        <p>Effective communication is essential to any relationship, particularly so in caregiving situations. It is not
            so much what you say, but how you say it that influences how your messages are received.</p>

        <p>Listening is probably more important that talking when we use CARE Coaching. Active listening requires giving
            your full attention, being open and receptive. Listen to what they are saying and use CARE Coaching
            techniques to understand and draw out what’s important to them.</p>

        <h4>Advocate</h4>

        <p>In terms of CARE Coaching, advocating means supporting one another rather than in the legal sense of
            defending someone.</p>

        <p>Reflect back feelings to show that you are hearing and understanding their situation. Be comfortable with
            silence as that is the time when the best thinking may be going on. To make sure that you are clear on what
            is being said, you may want to say, “I think what you are telling me is….”</p>

        <p>Setting boundaries is also important. You can still be an advocate even on the occasion when you need to say
            “no” to them. A request may not be reasonable or in your circumstance, you may not be able to comply at this
            time. Complying with something but then complaining about it just sets the tone for resentment.</p>

        <h4>Relate</h4>

        <p>It is often helpful when we think about relating to try to put yourself in “someone elses shoes.”   Think before responding to them – don’t try to relate when you are angry or upset about something.  Practice a conversation, particularly if it will be a difficult one, and try to have alternatives ready depending on the response.</p>

        <p>Just as important as verbal communication, your nonverbal communication – or body language – may speak volumes.  Try to use body language that would be viewed as open and positive – use eye contact, touch, and an open body stance.</p>

        <h4>Encourage</h4>

        <p>As the final component of CARE Coaching, encouraging can take on many forms.  Showing appreciation for your parents, letting them know that you realize that they tried to do the best they could.  It is not uncommon for older parents to look back and say, “I wish I could have been a better parent” or “if only I could have given you more when you were growing up.”  That is a great opportunity for you to acknowledge the characteristics that they passed on to you and the valuable things you learned from them.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">Self-coaching: It all starts with me!</h2>
        <hr/>
        <p>Self-coaching shifts the approach from the cycling negative “internal dialogue” to help you focus on what’s
            important to you right now and how you may accomplish that goal.</p>

        <p>In this case, it’s alright to say “it’s all about me!” There is quite a bit of information published about
            “self-coaching.” Think about the fact that we each represent a unique individual surrounded by a myriad of
            things going on inside and outside of ourselves.</p>

        <p>We constantly have an “internal dialogue” going on that no one else can hear. As a caregiver, that “internal
            dialogue” may be reliving negative experiences:</p>

        <ul>
            <li>“If only my mother listened to me and moved in with us years ago, she wouldn’t have fallen, broken her
                hip, and wound up in that terrible nursing home!”
            </li>
            <li>“I just can’t take on more responsibility for my dad’s care. I already work 50 to 60 hours a week and
                have family responsibilities. But if I don’t, who will?”
            </li>
            <li>“How am I going to bring up the issue of long-term care planning with my parents? They always shut me
                off when I bring up questions about their finances.”
            </li>
        </ul>

        <p>Going over and over these types of thoughts and questions in our minds does not get to problem solving.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">Self-coaching “self talk”</h2>
        <hr/>
        <p>Self-coaching shifts the approach from the cycling negative “internal dialogue” to help you focus on what’s
            important to you right now and how you may accomplish that goal.</p>

        <p>Say this to yourself:</p>
        <ul>
            <li>I am going to accomplish something.</li>
            <li>I am going to figure it out.</li>
            <li>I am going to do my best thinking, because I want to get to what’s important.</li>
        </ul>

        <p>Now, say this out loud:</p>

        <ul>
            <li>I am going to accomplish something.</li>
            <li>I am going to figure it out.</li>
            <li>I am going to do my best thinking, because I want to get to what’s important.</li>
        </ul>

        <p>This is just a simple exercise in positive self-talk. Our internal voice and thoughts have the capability to
            create our reality, and so it is our daily challenge to move aside the negative, cyclical thinking and focus
            on positive steps we may take to move forward. Focusing on the many skills you already have inside of
            yourself not only will benefit your own health, success, and self-esteem, but will be of great aide to your
            caregiving responsibilities.</p>

        <p>Let’s first assess where you currently are related to your readiness and awareness for self-coaching, and
            then we will move into some self-coaching exercises that you may continue as often as you feel it would be
            helpful to you.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">Activity – Self-awareness survey</h2>
        <hr/>
        <p>This activity invites you to explore and live several questions. Your responses should open up more
            self-awareness of what is important to you in your life. Please note that you may print or save any
            activities from this course for future reference.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('becomingamoreconfidentcaregiver/Activity_Self_Awareness_Survey.doc'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">Creating the environment for self-coaching</h2>
        <hr/>
        <p>The principle behind self-coaching (and CARE Coaching for that matter!) is the revelation of solutions
            already inherent in each person. For those who may be fortunate to experience an external coach, their role
            is to facilitate the experience and create an environment for the person being coached to do their best
            thinking. </p>

        <p>Self-coaching can work in the same way for many individuals who commit some time and effort into the process.
            We have included several exercises throughout this course that will help you practice coaching skills that
            will be valuable when coaching yourself or communicating in your caregiving role with older parents. </p>

        <p>Let’s look at the five steps necessary to create an effective self-coaching experience.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">What is necessary to create an effective self-coaching experience?</h2>
        <hr/>
        <h4>Step 1</h4>

        <p>You are aware of the need for change and are prepared to accept that you cannot blame others or circumstances
            of a situation.</p>

        <p>In other words, you are willing to be open to choices and you are willing to make those choices. It would be
            most like stepping outside of your situation and viewing it as impartially as possible.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">What is necessary to create an effective self-coaching experience?</h2>
        <hr/>
        <h4>Step 2</h4>

        <p>You are prepared to ask yourself some difficult questions and not avoid answering them. </p>

        <p>Imagine that you are in some tough discussions with your father and siblings about dad’s lack of caring for
            himself living alone. Dad has grown more isolated day by day. When visiting one day, you are shocked to find
            empty food containers and spoiled food in the refrigerator. There is a stack of unpaid bills on the kitchen
            counter next to a jar of various pills mixed together. You bring this up with your siblings, but their
            reaction is, “Dad is fine. He wants to stay in his house, and it’s not our place to kick him out!” Your dad
            says, “I just haven’t gotten around to some things…and I’d thank you to stay out of my business!”</p>

        <p>Are your prepared to ask yourself some key questions like…”Am I an effective caregiver? Why do I think that I
            am not getting the response I need from my dad or siblings? What response should I expect? Why do I believe
            that I should expect it? Is it realistic and upon what observations do I base the perception?”</p>

        <p>Most importantly, “When I think about being a good caregiver, what’s important to me?”</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">What is necessary to create an effective self-coaching experience?</h2>
        <hr/>
        <h4>Step 3</h4>

        <p>You accept that through self-coaching, you are going to persist until you identify a solution and set of
            actions that you will then commit to implementing. </p>

        <p>It may take some time to achieve results, but you need to stick to your goal.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">What is necessary to create an effective self-coaching experience?</h2>
        <hr/>
        <h4>Step 4</h4>

        <p>Be willing to “let it go.”</p>

        <p>We’ve all been in the situation where something just nags at us. Things always seem worse when we pay too
            much attention to them. If I feel anxious, overwhelmed, or depressed and focus on those feelings, I become
            it. By letting go, I turn away from it. I don’t feed those problems any longer.</p>

        <p>It is sort of like flipping to another television channel. You may not be able to stop a thought from
            “percolating” in your mind, but you can say “no!” to thoughts that result in anxiety or depression. We
            always have choices. In this case, we have the choice not be become a victim of negative thoughts or
            insecurities.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">What is necessary to create an effective self-coaching experience?</h2>
        <hr/>
        <h4>Step 5</h4>

        <p>Set a time frame for the self-coaching session.</p>

        <p>The focus of self-coaching is to identify your goal, commit to your actions, and then move on to do something
            else. Sometimes your best thinking goes on when you do move onto something else and then come back to your
            goal. </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">Video – 5 steps to self-coaching</h2>
        <hr/>
        <p>Serving as an introduction to self-coaching exercises, this video outlines a simple self-coaching process can
            be used over and over again whenever you need it.</p>

        <p>View the video, self-coaching 101 by Brooke Castillo from The Life Coach School. This video is a new way for
            you to experience a self-coaching session in the comfort of your own home. This video shows an example of
            self-coaching in action.</p>

        <iframe style="display: block; width: 640px; height: 360px; framebroder: 0; margin: 15px auto;"
                src="//www.youtube.com/embed/0_otisZVT8A?rel=0" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">Activity – principles of success</h2>
        <hr/>
        <p>This activity focuses on assessing your awareness of ten principles of success and your rating of how you
            presently live according to them. Complete a 10 item assessment and then review results based on your
            responses.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('becomingamoreconfidentcaregiver/Activity_Principles_of_Success.xls'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">Self-coaching exercises – the power of journaling</h2>
        <hr/>
        <p>Journaling is one powerful technique to refocus the negative into positive affirmations. With consistent
            practice, this method can help create a more positive outlook in our own lives as well as create more
            positive interactions with others.</p>

        <p>Journaling facilitates positive self-talk. Positive self-talk has been demonstrated to build one’s
            self-esteem and self-confidence across a variety of situations. </p>

        <p>Journaling requires a time commitment to have an impact on one’s self-confidence. We recommend that you
            commit 30 days to this exercise to see a difference.</p>

        <p>Because journaling is a private experience, you can create your own unique experience!</p>

        <p>Continue to the next page to learn more about the process of journaling.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">The process of journaling</h2>
        <hr/>
        <ol>
            <li>Begin with getting yourself a notebook or journal for your entries. Although there are inexpensive wire
                bound notebooks that work just fine, I like to get a little nicer journal with a page marker for my
                journaling. It makes it more special!
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">The process of journaling</h2>
        <hr/>
        <ol start="2">
            <li>Make daily entries about your accomplishments – no matter how big or small. They may be accomplishments
                in relation to either work or your personal life.
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-22" class="course-slide">
    <div class="content">
        <h2 class="flowers">The process of journaling</h2>
        <hr/>
        <ol start="3">
            <li>Answer these questions:</li>
        </ol>

        <ol>
            <li>What makes me unique?</li>
            <li>In what areas of my life do I appear most satisfied or content?</li>
            <li>In which areas do I appear to be struggling or unfulfilled?</li>
            <li>What are my strengths? (look back at your “Principles of Success” ratings for ideas)</li>
            <li>How have these strengths helped me in the past?</li>
            <li>How do these strengths now help me?</li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-23" class="course-slide">
    <div class="content">
        <h2 class="flowers">The process of journaling</h2>
        <hr/>
        <ol start="4">
            <li>Review your journal entries of recent accomplishments to connect with your values and talents.</li>
        </ol>

        <ul>
            <li>What can you truly brag about?</li>
            <li>What do your successes say about you?</li>

        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-24" class="course-slide">
    <div class="content">
        <h2 class="flowers">The process of journaling</h2>
        <hr/>
        <ol start="5">
            <li>Create a personal “bragging” statement. Be authentic and positive in your statement. Print out the
                statement and keep it visible so that you can refer to it often.
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-25" class="course-slide">
    <div class="content">
        <h2 class="flowers">The process of journaling</h2>
        <hr/>
        <ol start="6">
            <li>Recite it out loud daily, saying, “This is me….This is what makes me special.”</li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-26" class="course-slide">
    <div class="content">
        <h2 class="flowers">Self-coaching exercise – focus on the goal</h2>
        <hr/>
        <p>How do we identify the goal? The goal answers the question, “What do you want that’s really important to
            you?” This exercise allows you to practice writing goals.</p>

        <p>Which of these sound like goals to you?</p>

        <ul>
            <li>I want to lose 30 pounds.</li>
            <li>I want to get better at negotiating.</li>
            <li>I want to get my mother to start considering her long-term care options.</li>
        </ul>

        <p>None of these are goals – these are strategies towards goals. Strategies are important, as they focus on the
            “how to get to” goals. It is easy to focus on strategies rather than goals because strategies seem to focus
            on actions. </p>

        <p>How do we identify the goal? The goal answers the question, “What do you want that’s really important to
            you?”</p>

        <p>Another way to differentiate between setting goals and identifying strategies is to look at differences
            between goal setting and problem solving. Here are some different terms that describe the two:</p>

        <table>
            <th>
                <p>Goal Setting</p>
            </th>
            <th>
                <p>Identifying Strategies</p>
            </th>
            <tr>
                <td>
                    <ul>
                        <li>Proactive</li>
                        <li>Finding what is possible</li>
                        <li>Developing</li>
                        <li>Identifying priorities</li>
                        <li>Dynamic</li>
                        <li>Working with the whole</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>Reactive</li>
                        <li>Finding what is wrong</li>
                        <li>Fixing</li>
                        <li>Addressing crises</li>
                        <li>Static</li>
                        <li>Working with parts</li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-27" class="course-slide">
    <div class="content">
        <h2 class="flowers">Setting your goals</h2>
        <hr/>
        <p>Think of goal setting in terms of NOUNS:</p>

        <ul>

            <li>“I want more confidence dealing with my parents.”</li>
            <li>“I want a more positive attitude about my caregiving responsibilities.”</li>
            <li>“I want better health for myself.”</li>
        </ul>

        <p>Think of goal setting in terms of NOUNS:</p>

        <ul>
            <li>I want to lose 30 pounds.</li>
            <li>I want to get better at negotiating.</li>
            <li> I want to get my mother to start considering her long-term care options.</li>
        </ul>

        <p>For this exercise, look back at your responses to the two activities in this module. In the Self-Awareness
            Survey, you explored what is important to you in your life. In the Principles of Success activity, you rated
            yourself against these principles. Based on these results, develop three statements of goals for
            yourself. </p>

        <p>Remember that goals should be stated in terms of nouns. Goals also answer the question, “What do you want
            that’s really important to you?”</p>

        <p>
            Goal #1:
            <input style="margin-left: 15px;" type="text" name="Goal#1" value="(Example)" size="45">
        </p>

        <p>
            Goal #2:
            <input style="margin-left: 15px;" type="text" name="Goal#2" value="(Example)" size="45">
        </p>

        <p>
            Goal #3:
            <input style="margin-left: 15px;" type="text" name="Goal#3" value="(Example)" size="45">
        </p>


        <p>Click below to download a copy of this page to write in your goals.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('becomingamoreconfidentcaregiver/Exercise_Setting_your_Goals.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
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
            <li>You are not alone as a caregiver of an older adult! More than one in six working caregivers care for one
                or more older adults.
            </li>

            <li>A “role reversal” with aging parents is common, although it is not uncommon for that to be challenging
                to now be the “coach” for your aging parents. So remember to be a successful coach, use the skills of
                appreciating, listening, appreciating, and supporting.
            </li>

            <li> Focus on shifting from negative “self talk” to positive “self talk” to get to what’s important to you
                as a caregiver.
            </li>

            <li>Use the five steps involved in creating an effective self-coaching experience to help you move your
                thinking forward as an effective caregiver and focus on the goal.
            </li>

            <li> Try journaling to facilitate positive “self talk” and boost your self-confidence as an effective
                caregiver.
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Course </a>
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
            <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Close </a>
        </div>
    </div>

    <!-- need final 2 divs to close course and lesson id -->

</div>
</div>