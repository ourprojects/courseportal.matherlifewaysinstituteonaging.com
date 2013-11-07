<?php

$this->breadcrumbs = array('{t}Courses{/t}' => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach(array(
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

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('becomingamoreconfidentcaregiver/84008631.png'); ?>);">
    <h1 class="bottom">
        <?php echo t($course->title); ?>
    </h1>
</div>
<div id="sidebar">
    <div class="box-sidebar one">
        <h3>{t}Course Evaluations{/t}</h3>
        <p>{t}Please click the button below to access the pre-course and post-course surveys. Participation is
            anonymous. Please complete each survey at the appropriate time.{/t}</p>
        <br />
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
            foreach(array(
                        'precourse',
                        'postcourse') as $surveyName)
            {
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
                    <a id="survey_link_<?php echo $survey->getId(); ?>" class="button" href="#survey_<?php echo $survey->getId(); ?>" title="<?php echo t($survey->model->title); ?>"><?php echo t($survey->model->title); ?> </a>
                    <?php $survey->run(); ?>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="box-sidebar one">
        <h3>{t}Working Caregivers in America{/t}</h3>
        <img src="<?php echo $this->getImagesUrl('care/286x366_Grafix_69pc.png'); ?>" alt="image" class="block center" />
        <p>{t}69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an unpaid leave of absence to meet their care-giving responsibilities.{/t}</p>
    </div>
    <div class="box-sidebar one">
        <h3>{t}Certificate of Completion{/t}</h3>

        <p>{t}Click the button below to access your certificate where you will be able to manually add your name and date.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank" class="button">Download Certificate</a>
        </p>
    </div>
    <div class="box-sidebar one">
        <h3>{t}Facilitator: Ellen Ziegemeier, MA{/t}</h3>
        <p>{t}Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver training.{/t}</p>
            <p><a href="#" target="_blank" class="button">Contact Facilitator</a></p>
            <img src="<?php echo $this->getImagesUrl('becomingamoreconfidentcaregiver/80608570.png'); ?>" alt="{t}Facilitator{/t}" id="facilitator">
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
    <h4>{t}Participant Access{/t}</h4>

    <p>
        {t}<strong>90 days</strong> from the <strong>initial enrollment</strong> date.{/t}
    </p>
    <h4>{t}Objectives{/t}</h4>
    <ul>
        <?php
        foreach($course->objectives as $objective)
            echo '<li>' . t($objective->text) . '</li>';
        ?>
    </ul>
    <h4>{t}Course Agenda &amp; Module{/t}</h4>

    <table style="border-bottom: 2px solid black; border-top: 2px solid black; margin-top: 10px;">
        <tr>
            <td><h5>{t}Download the course Agenda - {/t}</h5></td>
            <td><p><a href="<?php echo $this->createDownloadUrl('carecoachingonline/CARECoachingSyllabus.pdf'); ?>" target="_blank" class="button">{t}Agenda{/t}</a></p></td>
        </tr>
        <tr>
            <td>
                <h5>{t}Becoming a More Confident Caregiver - {/t}</h5>
            </td>
            <td>
                <p><a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button"> {t}Start{/t} </a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a></p>
            </td>
        </tr>
    </table>

    <h4>{t}Resources{/t}</h4>
    <p>{t}Please use these listed resources for additional reading. Please contact your course facilitator if you have additional resources you would like to see added here.{/t}</p>
    <ul id="resources">
        <li>
            <a href="http://www.nlm.nih.gov/medlineplus/talkingwithyourdoctor.html" target="_blank">{t}Talking with Your Doctor{/t}</a>
            <!--
From the National Library of Medicine's MedlinePlus consumer health website.  Links to online brochures from the federal government and national health organizations on obtaining a second opinion, talking to your doctor, informed consent, being an active participant in your healthcare, and related communication topics. -->
        </li>
        <li>
            <a href="http://www.aarp.org/health/doctors-hospitals/info-09-2010/finding_your_way_how_to_talk_to_8212_and_understand_8212_your_doctor.html" target="_blank">{t}How To Talk To Your Doctor{/t}</a>
            <!--
Emphasis on the importance of building a "successful partnership with your doctor." Suggestions for preparing for a productive office visit.  Questions to ask your doctor to assure that you have a clear understanding of your diagnosis, the treatment recommended, and other treatment options.  On the website of the American Association of Retired Persons. -->
        </li>
        <li>
            <a href="http://www.encouragingcoach.com/projects-selfcare-quiz.htm" target="_blank">{t}Self-Care Quiz{/t}</a>
            <!--
How good are you at taking care of yourself?  Take this brief quiz to get some ideas! -->
        </li>
        <li>
            <a href="http://www.meditationsociety.com/108meds.html" target="_blank">{t}Meditation Exercises{/t}</a>
            <!--
The Meditation Society of America provides a free resource of over 100 meditation activities for you to try via the web.   -->
        </li>
        <li>
            <a href="http://www.allaboutdepression.com/relax/" target="_blank">{t}Guided Imagery{/t}</a>
            <!--
Guided imagery is an effective relaxation technique to reduce stress.  There are many benefits to being able to induce the "relaxation response" in your own body.  Some benefits include a reduction of generalized anxiety, prevention of cumulative stress, increased energy, improved concentration, reduction of some physical problems, and increased self-confidence. -->
        </li>
        <li>
            <a href="http://www.caregiverslibrary.org/home.aspx" target="_blank">{t}National Caregiver Library{/t}</a>
            <!--
Provides state-by-state information and resources for caregivers.  -->
        </li>
        <li>
            <a href="http://www.usa.gov/Citizen/Topics/Health/caregivers.shtml" target="_blank">{t}Caregiver Resources on USA.gov{/t}</a>
            <!--
Find help providing care, government agencies, long-distance caregiving, and support for caregivers on this valuable website. -->
        </li>
        <li>
            <a href="http://www.aarp.org/home-family/caregiving/" target="_blank">{t}Caregiving Resources from AARP{/t}</a>
            <!--
AARP provides various articles of interest and resources for family caregivers. -->
        </li>
    </ul>

    <h4>The Sandwich Generation - by Media Storm</h4>
    <p>{t}Filmmaker and photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokurs 83-year-old father, Herbie, became too infirm to care for himself. At that moment they joined some twenty million other Americans who make up the sandwich generation, those who find themselves responsible for the care of both their children and their aging parents.{/t}</p>
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
        <h2 class="flowers">{t}Coming Soon!{/t}</h2>
        <hr />
        <p>{t}Coming Soon!{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a>
    </div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching - Topics{/t}</h2>
        <hr />
        <h4>{t}What’s CARE Coaching all about?{/t}</h4>
        <p>{t}CARE Coaching involves a method to help you as a caregiver think differently about a caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and actions.{/t}</p>
        <h4>{t}Self-Coaching: It all starts with me!{/t}</h4>
        <p>{t}Self-coaching shifts the approach from the cycling negative “internal dialogue” to help you focus on what’s important to you right now and how you may accomplish that goal.{/t}</p>
        <h4>{t}Activity – Self-Awareness Survey{/t}</h4>
        <p>{t}This activity invites you to explore and live several questions. Your responses should open up more self-awareness of what is important to you in your life.{/t}</p>
        <h4>{t}Creating the Environment for Self-Coaching{/t}</h4>
        <p>{t}The principle behind self-coaching (and CARE Coaching for that matter!) is the revelation of solutions already inherent in each person.{/t}</p>
        <h4>{t}Video – 5 Steps to Self-Coaching{/t}</h4>
        <p>{t}Serving as an introduction to self-coaching exercises, this video outlines a simple self-coaching process can be used over and over again whenever you need it.{/t}</p>
        <h4>{t}Activity – Principles of Success{/t}</h4>
        <p>{t}This activity focuses on assessing your awareness of ten principles of success and your rating of how you presently live according to them.{/t}</p>
        <h4>{t}Self-Coaching Exercise – The Power of Journaling{/t}</h4>
        <p>{t}Journaling is one powerful technique to refocus the negative into positive affirmations. With consistent practice, this method can help create a more positive outlook in our own lives as well as create more positive interactions with others.{/t}</p>
        <h4>{t}Self-Coaching Exercise – Focus on the Goal{/t}</h4>
        <p>{t}How do we identify the goal? The goal answers the question, “What do you want that’s really important to you?” This exercise allows you to practice writing goals.{/t}</p>
        <br /> <br />
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What’s CARE Coaching all about?{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('care/3663024-532x800.png'); ?>" alt="image" />
        <p>{t}You are probably familiar with the term “coaching” from many aspects of our daily lives.{/t}</p>
        <p>{t}As a parent or sibling, you may be involved in coaching little league or some other sport. Usually this form of coaching involves teams. The role of the coach is to motivate, set ground rules, and draw out the best in each player for the good of the team.{/t}</p>
        <p>{t}In the work environment, coaching may also involve the work team or individual. Coaching the work team may involve looking at ways to turn barriers into opportunities for the good of the team and company. An organization may bring in a professional coach to build sustainable, high-performance work teams and thus build the company’s competitive advantage over other organizations. At the individual level, a coach may focus on leadership development showing the company’s commitment to build a strong base of effective leaders.{/t}</p>
        <p>{t}As a current or future caregiver, you may be feeling as if you are in a “reversed role” to an elderly parent, other relative, or friend. When we are young, we look up to parents or others as a “coach” in many respects. Though it may have been difficult at times for all of us growing up, the effective parent “coach” had the following skill set:{/t}</p>
        <ul>
            <li>{t}They respected us, so we listened to them.{/t}</li>
            <li>{t}They listened to us, so we felt understood.{/t}</li>
            <li>{t}They appreciated us, so we felt supported.{/t}</li>
            <li>{t}They supported us when we tried new things, so we grew more responsible.{/t}</li>
        </ul>
        <br /> <br />
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What’s CARE Coaching all about? (continued){/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('care/154057898.png'); ?>" alt="image" />
        <p>{t}As our parents age, they may suffer declining physical or cognitive health and thus have greater need for our help and understanding, and so we may become their “coach” in life. That is easier said than done in many cases! Regardless of their age, our parents always see themselves in that role in our relationship with them.{/t}</p>
        <p>{t}We also tend to go back into old habits, communication styles, or reactions when dealing with our parents. How do you deal with a situation where your father begins to have minor car accidents or “forgets” the way home? Talking with a parent about giving up the car keys is probably one of the most challenging situations we may face as a caregiver.{/t}</p>
        <p>{t}CARE Coaching involves a method to help you as a caregiver think differently about a caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and actions. Learning what is important to older parents – and learning how to draw that out – often bringing to light new information about what is important to them in terms of their own health and care.{/t}</p>
        <p>{t}CARE Coaching will provide your tools, resources, and experiences targeted towards strengthening your caregiving abilities to Communicate, Advocate, Relate, and Encourage older parents or other loved ones. Throughout this course, we will highlight these terms and provide examples and activities to help you on this journey.{/t}</p>
        <p>{t}In this course, we’ll usually talk about “older parents,” but we realize that caregivers may be involved in caring for older siblings, other relatives, friends, or neighbors. For the purposes of this course, we will use “older parents” as our “short-hand” descriptor of any older adult that you may be caring for!{/t}</p>
        <p>{t}Before we can start coaching others, let’s consider our skills related to coaching ourselves!{/t}</p>
        <br /> <br />
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-Coaching: It all starts with me!{/t}</h2>
        <hr />
        <p>{t}In this case, it’s alright to say “it’s all about me!” There is quite a bit of information published about “self-coaching.” Think about the fact that we each represent a unique individual surrounded by a myriad of things going on inside and outside of ourselves.{/t}</p>
        <p>{t}We constantly have an “internal dialogue” going on that no one else can hear. As a caregiver, that “internal dialogue” may be reliving negative experiences:{/t}</p>
        <ul>
            <li>{t}“If only my mother listened to me and moved in with us years ago, she would not have fallen, broken her hip, and wound up in that terrible nursing home!”{/t}</li>
            <li>{t}“I just cannot take on more responsibility for my dad\’s care. I already work 50 to 60 hours a week and have family responsibilities. But if I do not, who will?”{/t}</li>
            <li>{t}“How am I going to bring up the issue of long-term care planning with my parents? They always shut me off when I bring up questions about their finances.”{/t}</li>
        </ul>
        <p>{t}Going over and over these types of thoughts and questions in our minds does not get to problem solving.{/t}</p>
        <p>{t}Self-coaching shifts the approach from the cycling negative “internal dialogue” to help you focus on what’s important to you right now and how you may accomplish that goal.{/t}</p>
        <br /> <br />
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-Coaching: It all starts with me! (continued){/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('care/86509800.png'); ?>" alt="{t}image{/t}">
        <p>{t}Say this to yourself:{/t}</p>
        <ul>
            <li>
                <em>{t}I am going to accomplish something.{/t}</em>
            </li>
            <li>
                <em>{t}I am going to figure it out.{/t}</em>
            </li>
            <li>
                <em>{t}I am going to do my best thinking, because I want to get to what’s important.{/t}</em>
            </li>
        </ul>
        <p>{t}Now, say this out loud:{/t}</p>
        <ul>
            <li>
                <em>{t}I am going to accomplish something.{/t}</em>
            </li>
            <li>
                <em>{t}I am going to figure it out.{/t}</em>
            </li>
            <li>
                <em>{t}I am going to do my best thinking, because I want to get to what is important.{/t}</em>
            </li>
        </ul>
        <p>{t}This is just a simple exercise in positive self-talk. Our internal voice and thoughts have the capability to create our reality, and so it is our daily challenge to move aside the negative, cyclical thinking and focus on positive steps we may take to move forward. Focusing on the many skills you already have inside of yourself not only will benefit your own health, success, and self-esteem, but will be of great aide to your caregiving responsibilities{/t}</p>
        <p>{t}Let us first assess where you currently are related to your readiness and awareness for self-coaching, and then we will move into some self-coaching exercises that you may continue as often as you feel it would be helpful to you.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity – Self-Awareness Survey{/t}</h2>
        <hr />
        <p>{t}This activity invites you to explore and live several questions. Your responses should open up more self-awareness of what is important to you in your life.{/t}</p>
        <p>
            <a href="<?php echo $this->createDownloadUrl('carecoachingonline/ActivitySelfAwarenessSurvey.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('care/pdf-icon.png'); ?>" alt="image" class="normal" style="display: block; margin: 0 auto;" /> </a>
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Creating the Environment for Self-Coaching{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('care/5342290.png'); ?>" alt="image" />
        <p>{t}The principle behind self-coaching (and CARE Coaching for that matter!) is the revelation of solutions already inherent in each person. For those who may be fortunate to experience an external coach, their role is to facilitate the experience and create an environment for the person being coached to do their best thinking.{/t}</p>
        <p>{t}Self-coaching can work in the same way for many individuals who commit some time and effort into the process. We have included several exercises throughout this course that will help you practice coaching skills that will be valuable when coaching yourself or communicating in your caregiving role with older parents.{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Creating the Environment for Self-Coaching (continued){/t}</h2>
        <hr />
        <p>{t}What is necessary to create an effective self-coaching experience?{/t}</p>
        <ol>
            <li>{t}You are aware of the need for change and are prepared to accept that you cannot blame others or circumstances of a situation. In other words, you are willing to be open to choices and you are willing to make those choices. It would be most like stepping outside of your situation and viewing it as impartially as possible.{/t}</li>
            <li>
                <p>{t}You are prepared to ask yourself some difficult questions and not avoid answering them. Imagine that you are in some tough discussions with your father and siblings about dad’s lack of caring for himself living alone. Dad has grown more isolated day by day. When visiting one day, you are shocked to find empty food containers and spoiled food in the refrigerator. There is a stack of unpaid bills on the kitchen counter next to a jar of various pills mixed together. You bring this up with your siblings, but their reaction is, “Dad is fine. He wants to stay in his house, and it’s not our place to kick him out!” Your dad says, “I just haven’t gotten around to some things…and I’d thank you to stay out of my business!”{/t}</p>
                <p>{t}Are your prepared to ask yourself some key questions like…”Am I an effective caregiver? Why do I think that I am not getting the response I need from my dad or siblings? What response should I expect? Why do I believe that I should expect it? Is it realistic and upon what observations do I base the perception?”{/t}</p>
                <p>{t}Most importantly, “When I think about being a good caregiver, what’s important to me?”{/t}</p>
            </li>
            <li>{t}You accept that through self-coaching, you are going to persist until you identify a solution and set of actions that you will then commit to implementing. It may take some time to achieve results, but you need to stick to your goal.{/t}</li>
            <li>
                <p>{t}Be willing to “let it go.” We have all been in the situation where something just nags at us. Things always seem worse when we pay too much attention to them. If I feel anxious, overwhelmed, or depressed and focus on those feelings, I become it. By letting go, I turn away from it. I don’t feed those problems any longer. It is sort of like flipping to another television channel. You may not be able to stop a thought from “percolating” in your mind, but you can say “no!” to thoughts that result in anxiety or depression. We always have choices. In this case, we have the choice not be become a victim of negative thoughts or insecurities.{/t}</p>
            </li>
            <li>
                <p>{t}Set a time frame for the self-coaching session. The focus of self-coaching is to identify your goal, commit to your actions, and then move on to do something else. Sometimes your best thinking goes on when you do move onto something else and then come back to your goal.{/t}</p>
            </li>
        </ol>
        <br /> <br />
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Video – Steps to Self-Coaching{/t}</h2>
        <hr />
        <p>{t}View the video, self-coaching 101 by Brooke Castillo from The Life Coach School. This video is a new way for you to experience a self-coaching session in the comfort of your own home. Serving as an introduction to self-coaching exercises, this video shows an example of self-coaching in action.{/t}</p>
        <div>
            <iframe style="width: 640px; height: 360px; display: block; margin: 25px auto;" src="//www.youtube.com/embed/0_otisZVT8A?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity – Principles of Success{/t}</h2>
        <hr />
        <p>{t}This activity focuses on assessing your awareness of ten principles of success and your rating of how you presently live according to them.{/t}</p>
        <a href="<?php echo $this->createDownloadUrl('carecoachingonline/ActivityPrinciplesofSuccess.xls'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('care/spreadsheet.png'); ?>" alt="image" class="normal" style="display: block; margin: 0 auto;" /> </a>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-Coaching Exercises – The Power of Journaling{/t}</h2>
        <hr />
        <p>{t}Journaling is one powerful technique to refocus the negative into positive affirmations. With consistent practice, this method can help create a more positive outlook in our own lives as well as create more positive interactions with others.{/t}</p>
        <p>{t}Journaling facilitates positive self-talk. Positive self-talk has been demonstrated to build one’s self-esteem and self-confidence across a variety of situations.{/t}</p>
        <p>{t}Journaling requires a time commitment to have an impact on one’s self-confidence. We recommend that you commit 30 days to this exercise to see a difference.{/t}</p>
        <p>{t}Because journaling is a private experience, you can create your own unique experience!{/t}


        <ol>
            <li>
                <p>{t}Begin with getting yourself an inexpensive notebook or journal for your entries.{/t}</p>
            </li>
            <li>
                <p>{t}Make daily entries about your accomplishments – no matter how big or small. They may be accomplishments in relation to either work or your personal life.{/t}</p>
            </li>
            <li>{t}Answer these questions:{/t}</li>
            <li>
                <ul>
                    <li style="text-decoration: underline;">{t}What makes me unique?{/t}</li>
                    <li style="text-decoration: underline;">{t}In what areas of my life do I appear most satisfied or content?{/t}</li>
                    <li style="text-decoration: underline;">{t}In which areas do I appear to be struggling or unfulfilled?{/t}</li>
                    <li style="text-decoration: underline;">{t}What are my strengths? (look back at your “Principles of Success” ratings for ideas){/t}</li>
                    <li style="text-decoration: underline;">{t}How have these strengths helped me in the past?{/t}</li>
                    <li style="text-decoration: underline;">{t}How do these strengths now help me?{/t}</li>
                </ul>
            </li>
            <li>{t}Review your journal entries of recent accomplishments to connect with your values and talents.{/t}</li>
            <li>
                <ul>
                    <li style="text-decoration: underline;">{t}What can you truly brag about?{/t}</li>
                    <li style="text-decoration: underline;">{t}What do your successes say about you?{/t}</li>
                </ul>
            </li>
            <li>
                <p>{t}Create a personal “bragging” statement. Be authentic and positive in your statement. Print out the statement and keep it visible so that you can refer to it often.{/t}</p>
            </li>
            <li>
                <p>{t}Recite it out loud daily, saying, “This is me….This is what makes me special.”{/t}</p>
            </li>
        </ol>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-Coaching Exercises – Focus on the Goal{/t}</h2>
        <hr />
        <p>{t}Which of these sound like goals to you?{/t}</p>
        <ul>
            <li>{t}I want to lose 30 pounds.{/t}</li>
            <li>{t}I want to get better at negotiating.{/t}</li>
            <li>{t}I want to get my mother to start considering her long-term care options.{/t}</li>
        </ul>
        <p>{t}None of these are goals – these are strategies towards goals. Strategies are important, as they focus on the “how to get to” goals. It is easy to focus on strategies rather than goals because strategies seem to focus on actions.{/t}</p>
        <p>{t}How do we identify the goal? The goal answers the question: “What do you want that is really important to you?”{/t}</p>
        <p>{t}Another way to differentiate between setting goals and identifying strategies is to look at differences between goal setting and problem solving. Here are some different terms that describe the two:{/t}</p>
        <table style="width: 100%;">
            <tr>
                <td width="50%">
                    <p>{t}Goal Setting{/t}</p>
                </td>
                <td>
                    <p>{t}Identifying Strategies{/t}</p>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <p>{t}Proactive{/t}</p>
                </td>
                <td>
                    <p>{t}Reactive{/t}</p>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <p>{t}Finding what is possible{/t}</p>
                </td>
                <td>
                    <p>{t}Finding what is wrong{/t}</p>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <p>{t}Developing{/t}</p>
                </td>
                <td>
                    <p>{t}Fixing{/t}</p>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <p>{t}Identifying priorities{/t}</p>
                </td>
                <td>
                    <p>{t}Addressing crises{/t}</p>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <p>{t}Dynamic{/t}</p>
                </td>
                <td>
                    <p>{t}Static{/t}</p>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <p>{t}Working with the whole{/t}</p>
                </td>
                <td>
                    <p>{t}Working with parts{/t}</p>
                </td>
            </tr>
        </table>
        <br /> <br />
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<!-- Care Coaching -->

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-Coaching Exercises – Focus on the Goal (continued){/t}</h2>
        <hr />
        <p>{t}Think of goal setting in terms of NOUNS:{/t}</p>
        <ul>
            <li>
                <em>{t}I want more confidence dealing with my parents.{/t}</em>
            </li>
            <li>
                <em>{t}I want a more positive attitude about my caregiving responsibilities.{/t}</em>
            </li>
            <li>
                <em>{t}I want better health for myself.{/t}</em>
            </li>
        </ul>
        <p>{t}Compare these to strategies which are usually stated in terms of VERBS:{/t}</p>
        <ul>
            <li>
                <em>{t}I want to lose 30 pounds.{/t}</em>
            </li>
            <li>
                <em>{t}I want to get better at negotiating.{/t}</em>
            </li>
            <li>
                <em>{t}I want to get my mother to start considering her long-term care options.{/t}</em>
            </li>
        </ul>
        <p>
            {t}For this exercise, look back at your responses to the two activities in this module. In the <strong>Self-Awareness Survey</strong>, you explored what is important to you in your life. In the <strong>Principles of Success activity</strong>, you rated yourself against these principles. Based on these results, develop three statements of goals for yourself.{/t}
        </p>
        <p>
            {t}Remember that goals should be stated in terms of nouns. Goals also answer the question, <em>“What do you want that’s really important to you?”</em>{/t}
        </p>
        <p class="forum">{t}To start, post your goals to the Forum, and we will revisit them later in the course. The Forum is accessible by clicking the icon in the top navigation bar, back on the course home page.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('care/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t} </a>
    </div>
</div>

<!-- need final 2 divs to close course and lesson id -->

</div>
</div>
