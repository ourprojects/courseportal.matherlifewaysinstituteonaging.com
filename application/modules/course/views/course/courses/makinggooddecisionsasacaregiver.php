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
     style="background-image: url(<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/179227415.png'); ?>);">
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
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/166312138.png'); ?>" id="certificate"
             alt="Image">
    </div>
    <div class="box-sidebar one">
        <h3>Facilitator: Ellen Ziegemeier, MA</h3>

        <p>Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She
            earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for
            various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver
            training.</p>

        <p>
            <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button"> Contact your
                Facilitator </a>

        </p>

        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/80608570.png'); ?>" alt="Facilitator"
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
            Long distance caregiving
        <li>
            Sharpening your observation skills during home visits
        </li>
        <li>
            Common issues faced by long distance caregivers
        </li>
        <li>
            Worksite benefits for employed long distance caregivers
        </li>
        <li>
            Ways to manage stress
        </li>
        <li>
            Family dynamics and improving sibling communication
        </li>
        <li>
            Dealing with resistance from older parents
        </li>
        <li>
            Identifying solutions to support choices and preferences of older parents
        </li>
    </ul>
                <p>
                    <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Agenda_makinggooddecisionsasacaregiver.pdf'); ?>"
                       target="_blank" class="button">Agenda</a>
                </p>

                <h5>Becoming a More Confident Caregiver - </h5>

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
                        href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                </p>

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
        <h2 class="flowers">Making Good Decisions as a Caregiver</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/179227415r.png'); ?>" alt="image">

        <p>Welcome to the course, “Making Good Decisions as a Caregiver.” This course is geared towards family members
            who provide support or care to an older adult who may be a parent, spouse, other relative, or a significant
            other. In particular, long distance caregiving is a growing phenomenon as adult children may need to
            relocate because of career changes, new job opportunities, or other reasons.</p>

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

        <ul class="contentlist">
            <li>Communicate</li>
            <li>Advocate</li>
            <li>Relate</li>
            <li>Encourage</li>
        </ul>

        <p>In summary, CARE Coaching involves a method to help you as a caregiver think differently about a caregiving
            situation so you may better prepare and feel confident about your caregiving responsibilities and
            actions.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">Long distance caregiving</h2>
        <hr/>
        <p>With many grown children seeking new career opportunities or needing to relocate due to their job away from
            their parents and the home in which they were raised, long distance caregiving has grown as an issue in our
            society.</p>

        <p>Here are some fast facts to consider:</p>

        <ul class="contentlist">
            <li>Seven million American caregivers provide 80% of the care to vulnerable or ill family members.</li>
            <li>There are approximately 3.3 million long distance caregivers.</li>
            <li>Caregivers live an average of 480 miles from the people for which they care.</li>
            <li>Caregivers spend an average of four hours traveling to that person.</li>
            <li>15 millions days are missed from work each year because of long distance caregiving.</li>
            <li>The number of long distance caregivers will double over the next 15 years.</li>
        </ul>

        <p>Long distance caregiving can range from providing physical care to helping with bills or just paying a visit.
            The good news is that you are not on your own as a long distance caregiver. There are many resources
            available. Sometimes, the main issue is not the availability of resources, but acceptance by older adults to
            receiving outside help. The final course in this series goes into more depth about issues and solutions for
            long distance caregivers.</p>

        <p>Let’s practice some coaching skills.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">Activity – CARE Coaching through long distance caregiving</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/163881431.png'); ?>" alt="image">

        <p>Read the following scenario and then respond to the CARE coaching questions. We provide some initial
            “openers” for CARE coaching questions for you to more fully develop your own questions.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Activity_CARE_Coaching_through_Long_Distance_Caregiving.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">A checklist for long distance caregivers</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/163881431.png'); ?>" alt="image">

        <p>It is often helpful for the long distance caregiver to have checklists to identify core areas that older
            parents now or in the future may need some assistance. Think about your own caregiving situation and review
            the following list.</p>

        <p>Check off areas of care needs that are important now for you as a caregiver. Go through the list again and
            check off those areas of care needs that may be important for you in the future as a caregiver. This will
            give you some important discussion points to bring up with your parents and/or your siblings. We have
            attached this form at the bottom of the page for downloading and printing.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Caregiver_Checklist.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">Sharpening your observation skills</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/sb10068250ch-001.png'); ?>"
             alt="image">

        <p>Having a checklist as reference to identify areas that may now or in the future be important to your aging
            parents is a good first step. Sharpening your observation skills is important to identify if your parents
            are beginning to have some cognitive, physical, or emotional challenges. Some changes may be very
            subtle. </p>

        <p>Above all, be respectful of their privacy in your observations. Rather than “challenging” your parent about
            something out of the ordinary (i.e., “Mom, I’ve noticed you’ve lost a lot of weight. Aren’t you eating?),
            try to involve her in some activity (i.e., “Mom, I was hoping that you can show me how to make some of those
            great recipes of yours. Being that I’m here for the week, I know you can give me lots of pointers and we can
            enjoy some great meals together!” </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">Areas to observe during your visits</h2>
        <hr/>
        <p> Try to use all of your senses to observe changes related to your parent or the home environment during your
            visits.</p>

        <p>Some questions to consider related to your parent:</p>

        <ul class="contentlist">
            <li>Do you notice changes in their personal appearance or hygiene?</li>
            <li>Do you notice any weight changes?</li>
            <li>Does your parent seem unsteady in their gait or have difficulties getting up from the chair?</li>
            <li>Does your parent misplace things or forget what he or she is doing in the middle of an activity?</li>
            <li>Do you notice that your parent is having difficulties remembering how to do routine tasks?</li>
            <li>Is your parent going out to visit friends or have contacts lessened recently?</li>
            <li>Has your parent kept up with physician appointments?</li>
        </ul>

        <p>Some questions to consider related to the environment:</p>

        <ul class="contentlist">
            <li>Are there changes in relation to tidiness or cleanliness of the home environment?</li>
            <li>Are bills not getting paid or mail stacking up?</li>
            <li> Is the refrigerator empty of food or is food spoiling? (Hint: There may be containers in the
                refrigerator, but check if there is food actually in those containers or if they are sitting empty.)
            </li>
            <li>Are there safety issues or potential risks in the home such as loose throw rugs on the floors,
                nonfunctioning fire detectors, or burnt pots on the stove?
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">Some common questions (and answers) for long distance caregivers</h2>
        <hr/>
        <p>Long distance caregivers can be helpful regardless of the distance! Here are some common questions (and
            answers) for long distance caregivers.</p>

        <ol>
            <li>What is the basic information I should have at hand as a long distance caregiver?</li>
        </ol>
        <ul class="contentlist">
            <li>Have contact information from your older parents’ neighbors. Make sure they know how to reach you in an
                emergency.
            </li>
            <li>Check out local resources and services (usually through a local area agency on aging, library, or senior
                center). Check with your parents which ones they may find helpful and check back on whether they have
                initiated contacts.
            </li>
            <li>Have a current list of your parents’ medications (prescription and over-the-counter) including dosages,
                schedule, and reasons they are taking.
            </li>
            <li>When you visit their home, be observant for changes in the environment or potential safety hazards. Find
                out if you parents have “advanced directives” that outline their health care treatment preferences.
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">Some common questions (and answers) for long distance caregivers</h2>
        <hr/>

        <ol start="2">
            <li>What can I really expect to do from a distance? I don’t feel comfortable just stepping into a
                situation.
            </li>
        </ol>
        <ul class="contentlist">
            <li>Educate yourself on what you need to know about your parents’ health care, their needs and preferences,
                and other pertinent information.
            </li>
            <li>Plan your visits ahead of time. Decide on priorities they may have.</li>
            <li>Everything in your visit should not just be about caregiving. Plan to actually “visit” during your
                visits!
            </li>
            <li>Stay in contact and encourage your parents to do the same.</li>
        </ul>

        <ol start="3">
            <li>How can I feel less frustrated and angry with the caregiving situation?</li>
        </ol>
        <ul class="contentlist">
            <li>Feeling frustrated and angry is very common among caregivers regardless of distance.</li>
            <li>Plan to give yourself a break and just do something for yourself.</li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">Some common questions (and answers) for long distance caregivers</h2>
        <hr/>
        <ol start="4">
            <li>What is a geriatric care manager and how can one help?</li>
        </ol>
        <ul class="contentlist">
            <li>Geriatric care managers are licensed nurses or social workers who specialize in geriatric care.</li>
            <li>The geriatric care manager is hired by a family to evaluate and assess an older parent’s needs and to
                coordinate care through community resources.
            </li>
            <li>When choosing one, you want to check references as well as find out their experience, fees, and if they
                are a member of the National Association of Professional Geriatric Care Managers.
            </li>
        </ul>

        <ol start="5">
            <li>Respite care provides one a break from caregiving responsibilities – it can be for an afternoon or for
                several days.
            </li>
        </ol>
        <ul>
            <li>Care can be provided in the home, in an adult day care center, or in a senior living community.</li>
        </ul>


    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">Some common questions (and answers) for long distance caregivers</h2>
        <hr/>
        <ol start="6">
            <li>What if my mom says, “Promise me you’ll never put me in a nursing home”?</li>
        </ol>
        <ul class="contentlist">
            <li>This request usually follows some horrendous story on the news about a nursing home death. Most of us
                want to stay in our own homes, to be independent, and to be cared for by relatives and friends.
            </li>
            <li>Think carefully before making this type of promise. Assuring your parents that you will look out for
                them in their best interests and provide quality of care is what is really important. For some
                illnesses, long-term care may be the sole option. Discovering too late that such promises cannot be kept
                has often resulted in terrible feelings of guilt by the caregiver for many years.
            </li>
            <li>Rather than a promise that cannot be kept, another way to respond is, “Dad, I will make sure you have
                the best care we can arrange. You can count on me to try and do what’s best for everyone. I can’t think
                of a situation where I’d walk out on you.”
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">Some common questions (and answers) for long distance caregivers</h2>
        <hr/>

        <ol start="7">
            <li>What are some other resources for long distance caregivers?</li>
        </ol>

        <ul class="contentlist">
            <li>
                Obtain a free <a href="www.netofcare.org/crd/resource_form.asp" target="_blank">Caregiver Resource
                    Directory</a> that provides resources, facts, and advice about caring for a family member as well as
                for yourself.
            </li>
            <li>
                <a href="www.benefitscheckup.org" target="_blank">Benefits Check UP</a> is a free online service
                provided by the National Council on Aging which allows people to find programs that can help them meet
                health care costs.
            </li>
            <li>
                <a href="www.archrespite.org" target="_blank">ARCH National Respite Network and Resource Center</a>
                provides resources and information including a respite locator program and information clearinghouse.
            </li>
            <li>
                <a href="www.eldercare.gov" target="_blank">Eldercare Locator</a> is a nationwide service helping
                identify local resources for older adults.
            </li>
            <li>
                <a href="www.nfcacares.org" target="_blank">National Family Caregivers Association</a> supports family
                caregivers and offers education, information, and referrals.
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">Other benefits for long distance caregivers who are working</h2>
        <hr/>

        <p>Long distance caregiving can have a great impact on one’s job. Because of fear of losing one’s job or impact
            on job security, many working caregivers do not inform their employers of their caregiving obligations. On
            the other side of the coin, employers are seeing a growing number of employees with family caregiving
            obligations particularly related to older parents. In fact, it may not surprise you that your supervisor
            could also be going through this experience now or in the near future.</p>

        <p>Many organizations have programs in place to assist employees to better meet their obligations as caregivers
            to older adults. You may want to discuss some of these benefits with your human resources department to see
            what may be available to you.</p>

        <p>Some examples of family caregiving options include:</p>

        <ul class="contentlist">
            <li>Employee assistance programs – Human Resources may provide information to you from your EAP provider
                regarding programs and counseling services available to employees and their families.
            </li>
            <li>Flex time – employees with family caregiving responsibilities may be able to work flexible hours or days
                of the week to meet both work and home obligations more effectively.
            </li>
            <li>Job sharing with another employee – employees with family caregiving obligations may be able to partner
                and share a work schedule to cover each other’s responsibilities.
            </li>
            <li>Telecommuting or working from home – an occasion day to work at home may alleviate some of the pressures
                balancing work and home life.
            </li>
            <li>Case management services – community services in your area may include case management or care
                management assistance in the home. This may include home care services, respite care, meals-on-wheels,
                or other referral services.
            </li>
            <li>Family and Medical Leave Act (FMLA) – available to employees in certain companies that allow up to 12
                weeks of unpaid leave to eligible employees in order to care for certain family members for medical
                reasons.
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">Are you a “sandwich generation” caregiver?</h2>
        <hr/>

        <p>If you are between the ages of 35 to 54 and are caring for both younger ones such as children and older
            parents or other family members and probably employed at the same time, you may be a “sandwich generation”
            caregivers. You are not alone as approximately 20 million American fit this description.</p>

        <p>A survey by the American Psychological Association reported that women in the “sandwich generation” feel more
            stress than any other age group as they have to balance the demands of caregiving two generations. Nearly
            40% of them report “extreme levels” of stress which takes a toll on both their personal relationships but
            also on their own well-being as they may often put their own health on the “backburner.”</p>

        <p>Watch the following video to see one family’s experience.</p>

        <h4>Video – Part of the Sandwich Generation</h4>

        <div style="display: block; margin: 15px auto;">

            <!-- MediaStorm Player Embed Code -->
            <script type="text/javascript" id="mediastorm-player-e5282f8c15c9d3853198"
                    src="https://player.mediastorm.com/players/embed?id=e5282f8c15c9d3853198&w=460&h=366&lang=none"></script>
        </div>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">Activity – ways to manage your own stress</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/163881431.png'); ?>" alt="image">

        <p>The American Psychological Association offers several strategies to help those in the “sandwich generation”
            manage their stress. In another course, we address the power of journaling as a self-coaching exercise to
            help create positive self-talk.</p>

        <p>In managing stress, journaling can also be a very effective tool to help identify what situations or events
            trigger stressful feelings, how you deal (or don’t deal) with stress, and how you may manage stress.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Activity_Ways_to_Manage_Your_Own_Stress.doc'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">Family communication: when siblings attack!</h2>
        <hr/>
        <p>Family dynamics can be very complex. We have been talking about your caregiving throughout this course in
            relation to your older parents. We cannot forget that, in many families, family dynamics also include
            siblings – whether they are yours or your parents.</p>

        <p>Family conflict regarding caregiving of older parents is quite common. Dealing with care of older parents can
            rekindle early rivalries or jealousies among siblings. Family dynamics can be very complex, but there are
            some common underlying causes of conflict. In some families, siblings may perceive imbalance of care and
            responsibilities among family members. For example, siblings who live nearest to parents or those who are
            single females may be “expected” by their siblings to be primary caregivers regardless of other
            responsibilities. In some families, conflicts about money can be a significant source of conflict. One
            sibling may feel he or she deserves a greater portion of an inheritance, while the long distance sibling may
            feel that too much was spent on parent’s care by a brother or sister.</p>

        <p>Central to most sibling conflicts is a breakdown of communication. Many caregivers relate to this common
            scenario:</p>

        <p style="font-style: italic;">Cara is a long distance caregiver. Unfortunately her new job meant she has not
            been able to visit
            her aging mother for the past three years. She never had a very close relationship with her mother, and so
            their conversations always tended to be on a superficial level. She calls her mother about every two weeks.
            Over the phone, Cara’s mother tells her she is fine. On the other hand, Cara’s sister, Joyce, who is the
            primary caregiver, calls Cara and tells her that caring for their mother has become very challenging. Their
            mother has wandered from home on numerous occasions and has difficulty finding her way back home. She also
            leaves pots on the stove and forgets to turn off the burners. Joyce wants to talk about potentially moving
            their mother to an assisted living community, but Cara does not want any part of such a decision, as she
            does not see any problem as her mother “sounds fine” on the phone.
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">Improving sibling communications</h2>

        <hr/>
        <p>The following are some recommendations to work on sibling communications. Realize that this may take time,
            but if all parties commit to making improvements, the effect benefits the older parents – and isn’t that the
            goal?</p>

        <p>Suggestion #1:</p>

        <p>Hold regular family meetings. You may need to explore different ways to make these happen, particularly if
            some of the siblings are long distance.</p>

        <p>Suggestion #2:</p>

        <p>Divide caregiving responsbilities up according to abilities and availability. Long distance siblings may be
            able to take care of financial responsibilities or come in to provide respite for siblings who typically
            provide more direct caregiving.</p>

        <p>Suggestion #3:</p>

        <p>Don’t be afraid to communicate your concerns, observations, or feelings to your siblings. The more open your
            communication, the better the understanding by your siblings of the entire caregiving situation.</p>

        <p>Suggestion #4:</p>

        <p>Express appreciation to siblings for help they provide. You may soon find that they are offering more
            assistance as they receive recognitions for their contributions.</p>

        <p>Suggestion #5:</p>

        <p>During family meetings, focus on caregiving issues rather than bringing up old family conflicts or issues.
            Try to “feed forward” rather than “feedback.”</p>

        <p>Suggestion #6:</p>

        <p>Consider keeping a care notebook to record and document tasks, reminders, and responsibilities. Encourage
            siblings to add to the notebook their observations and reports.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">Identifying resources and connections</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/163881431.png'); ?>" alt="image">

        <p>A good method to evaluate an older parent’s environment and connections is to use an “ecomap.” Important
            perspective may be learned by considering the older parent in the context of the various systems that are
            part of his or her experiences. Systems may include individuals (such as spouse or adult child), groups
            (such as physicians or therapists), and organizations (such as hospitals) that interact with the older
            adult. Considering the older adult’s interactions with these systems may reveal areas where help may be
            needed.</p>

        <p>Open the exercise below, “Developing an Ecomap” and follow the directions. Once systems are identified that
            interact with your older parent, respond to the questions that follow.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Exercise_Developing_an_Ecomap.doc'); ?>"
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
        <h2 class="flowers">Dealing with resistance by your older parent</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/94360449.png'); ?>" alt="image">

        <p>It is important that your older parent retains as much decision making abilities as possible. Your primary
            objective is to help your parent fulfill his or her needs and choices, not to take over your parent’s
            life.</p>

        <p>In some cases, your older parent may reject your assistance. There may be several reasons why older adults do
            not accept help from others:</p>

        <ul class="contentlist">
            <li>Some older adults feel that accepting help is a sign of dependency.</li>
            <li>Some older adults regard accepting services as a form of welfare.</li>
            <li>An older parent may be concerned about the cost of the service.</li>
            <li>An older parent may want you, rather than someone else, to deliver the care needed.</li>
            <li>Some older adults fear allowing strangers in the home.</li>
        </ul>

        <p>Once you know why your relative is refusing assistance, you can develop strategies to encourage her to accept
            help. Everyone wants to feel able to take care of themselves and control their own destiny. Some older
            persons feel that social services are either a form of welfare or are too expensive. Concerns about who
            delivers services are also common. One way to make strangers more acceptable is to ask someone whom the
            older person trusts to recommend a care provider. Or you may want to ask someone the older person trusts to
            be on hand when the “stranger” is present.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">Identifying solutions to support choice and preferences</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/163881431.png'); ?>" alt="image">

        <p>Throughout this course, you have had several opportunities to gain more understanding regarding your older
            parents’ needs and preferences. Every caregiving situation is unique. Understanding this will help you make
            good decisions as a caregiver.</p>

        <p>Many factors come into play when considering the best possible solutions about your parents and their future.
            These factors may include: your parents’ health and functional abilities, mobility, values and beliefs, and
            family and community support systems.</p>

        <p>In this exercise, we provide several questions for you to use as a framework to “interview” your parents
            regarding their choices and preferences for their future.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/ExerciseIdentifyingSolutionstoSupportChoiceandPreferences.pdf'); ?>"
               target="_blank" class="button">Download Exercise</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">Congratulations on completing the course!</h2>
        <hr/>

        <p>Let’s summarize the top five points we covered in this course:</p>

        <ol class="contentlist">
            <li>With many grown children seeking new career opportunities or needing to relocate due to their job away
                from their parents and the home in which they were raised, long distance caregiving has grown as an
                issue in our society with the number of long distance caregivers doubling over the next 15 years.
            </li>
            <li>Use all of your senses to observe changes related to your parent or the home environment during your
                visits.
            </li>
            <li>If you are a long distance caregiver, have basic information at your fingertips regarding your older
                parents including: contact information from their neighbors (and they have your information); local
                resources and services for older adults; current list of their medications; and copies of “advanced
                directives.”
            </li>
            <li>Geriatric care managers (licensed nurses or social workers who specialize in geriatric care) may be
                helpful to assist in evaluating and assessing older adults’ needs and in the coordination of care
                through community resources.
            </li>
            <li>Many organizations have programs in place to assist employees to better meet their obligations as
                caregivers to older adults. You may want to discuss some of these benefits with your human resources
                department to see what may be available to you.
            </li>
        </ol>

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
            <h2 class="flowers">Contact Facilitator</h2>
            <hr/>
            <p>Please complete the form below to contact your facilitator.</p>

            <h4>Maintenance - Please check back later today.</h4>

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
