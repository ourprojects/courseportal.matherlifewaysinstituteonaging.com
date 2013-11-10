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
     style="background-image: url(<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/179227415.png'); ?>);">
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
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/166312138.png'); ?>" id="certificate"
             alt="{t}Image{/t}">
    </div>
    <div class="box-sidebar one">
        <h3>{t}Facilitator: Ellen Ziegemeier, MA{/t}</h3>

        <p>{t}Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She
            earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for
            various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver
            training.{/t}</p>

        <p><a href="#" target="_blank" class="button">Contact Facilitator</a></p>
        <img src="<?php echo $this->getImagesUrl('makinggooddecisionsasacaregiver/80608570.png'); ?>"
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
                    <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Agenda_makinggooddecisionsasacaregiver.pdf'); ?>"
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
                    <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
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
        <h2 class="flowers">{t}Making Good Decisions as a Caregiver{/t}</h2>
        <hr/>
        <p>{t}Welcome to the course, “Making Good Decisions as a Caregiver.” This course is geared towards family
            members who provide support or care to an older adult who may be a parent, spouse, other relative, or a
            significant other. In particular, long distance caregiving is a growing phenomenon as adult children may
            need to relocate because of career changes, new job opportunities, or other reasons.{/t}</p>

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

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Long distance caregiving{/t}</h2>
        <hr/>
        <p>{t}With many grown children seeking new career opportunities or needing to relocate due to their job away
            from their parents and the home in which they were raised, long distance caregiving has grown as an issue in
            our society.{/t}</p>

        <p>
            {t}Here are some fast facts to consider:{/t}
        </p>

        <ul>
            <li>{t}Seven million American caregivers provide 80% of the care to vulnerable or ill family members.{/t}
            </li>
            <li>{t}There are approximately 3.3 million long distance caregivers.{/t}
            </li>
            <li>{t}Caregivers live an average of 480 miles from the people for which they care.{/t}</li>
            <li>{t}Caregivers spend an average of four hours traveling to that person.{/t}</li>
            <li>{t}15 millions days are missed from work each year because of long distance caregiving.{/t}</li>
            <li>{t}The number of long distance caregivers will double over the next 15 years.{/t}
            </li>
        </ul>

        <p>{t}Long distance caregiving can range from providing physical care to helping with bills or just paying a
            visit. The good news is that you are not on your own as a long distance caregiver. There are many resources
            available. Sometimes, the main issue is not the availability of resources, but acceptance by older adults to
            receiving outside help. The final course in this series goes into more depth about issues and solutions for
            long distance caregivers.{/t}</p>

        <p>
            {t}Let’s practice some coaching skills.{/t}
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity – CARE Coaching through long distance caregiving{/t}</h2>
        <hr/>
        <p>{t}YRead the following scenario and then respond to the CARE coaching questions. We provide some initial
            “openers” for CARE coaching questions for you to more fully develop your own questions.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Activity_CARE_Coaching_through_Long_Distance_Caregiving.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}A checklist for long distance caregivers{/t}</h2>
        <hr/>
        <p>{t}It is often helpful for the long distance caregiver to have checklists to identify core areas that older
            parents now or in the future may need some assistance. Think about your own caregiving situation and review
            the following list.{/t}</p>

        <p>{t}Check off areas of care needs that are important now for you as a caregiver. Go through the list again and
            check off those areas of care needs that may be important for you in the future as a caregiver. This will
            give you some important discussion points to bring up with your parents and/or your siblings. We have
            attached this form at the bottom of the page for downloading and printing.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Caregiver_Checklist.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Sharpening your observation skills{/t}</h2>
        <hr/>
        <p>{t}Having a checklist as reference to identify areas that may now or in the future be important to your aging
            parents is a good first step. Sharpening your observation skills is important to identify if your parents
            are beginning to have some cognitive, physical, or emotional challenges. Some changes may be very subtle.
            {/t}</p>

        <p>{t}Above all, be respectful of their privacy in your observations. Rather than “challenging” your parent
            about something out of the ordinary (i.e., “Mom, I’ve noticed you’ve lost a lot of weight. Aren’t you
            eating?), try to involve her in some activity (i.e., “Mom, I was hoping that you can show me how to make
            some of those great recipes of yours. Being that I’m here for the week, I know you can give me lots of
            pointers and we can enjoy some great meals together!” {/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Areas to observe during your visits{/t}</h2>
        <hr/>
        <p>{t}
            Try to use all of your senses to observe changes related to your parent or the home environment during your
            visits.{/t}</p>

        <p>{t}Some questions to consider related to your parent:{/t}</p>

        <ul>
            <li>
                {t}Do you notice changes in their personal appearance or hygiene?{/t}
            </li>
            <li>
                {t}Do you notice any weight changes?{/t}
            </li>
            <li>
                {t}Does your parent seem unsteady in their gait or have difficulties getting up from the chair?{/t}
            </li>
            <li>
                {t}Does your parent misplace things or forget what he or she is doing in the middle of an activity?{/t}
            </li>
            <li>
                {t}Do you notice that your parent is having difficulties remembering how to do routine tasks?{/t}
            </li>
            <li>
                {t}Is your parent going out to visit friends or have contacts lessened recently?{/t}
            </li>
            <li>
                {t}Has your parent kept up with physician appointments?{/t}
            </li>
        </ul>

        <p>{t}Some questions to consider related to the environment:{/t}</p>

        <ul>
            <li>
                {t}Are there changes in relation to tidiness or cleanliness of the home environment?{/t}
            </li>
            <li>
                {t}Are bills not getting paid or mail stacking up?{/t}
            </li>
            <li>
                {t} Is the refrigerator empty of food or is food spoiling? (Hint: There may be containers in the
                refrigerator, but check if there is food actually in those containers or if they are sitting empty.){/t}
            </li>
            <li>
                {t}Are there safety issues or potential risks in the home such as loose throw rugs on the floors,
                nonfunctioning fire detectors, or burnt pots on the stove?{/t}
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Some common questions (and answers) for long distance caregivers{/t}</h2>
        <hr/>
        <p>{t}Long distance caregivers can be helpful regardless of the distance! Here are some common questions (and
            answers) for long distance caregivers.{/t}</p>

        <ol>
            <li>
                {t}What is the basic information I should have at hand as a long distance caregiver?{/t}
            </li>
        </ol>
        <ul>
            <li>
                {t}Have contact information from your older parents’ neighbors. Make sure they know how to reach you in
                an emergency.{/t}
            </li>
            <li>
                {t}Check out local resources and services (usually through a local area agency on aging, library, or
                senior center). Check with your parents which ones they may find helpful and check back on whether they
                have initiated contacts.{/t}
            </li>
            <li>{t}Have a current list of your parents’ medications (prescription and over-the-counter) including
                dosages, schedule, and reasons they are taking.{/t}
            </li>
            <li>{t}When you visit their home, be observant for changes in the environment or potential safety hazards.
                Find out if you parents have “advanced directives” that outline their health care treatment
                preferences.{/t}
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
        <h2 class="flowers">{t}Some common questions (and answers) for long distance caregivers{/t}</h2>
        <hr/>

        <ol start="2">
            <li>
                {t}What can I really expect to do from a distance? I don’t feel comfortable just stepping into a
                situation.{/t}
            </li>
        </ol>
        <ul>
            <li>
                {t}Educate yourself on what you need to know about your parents’ health care, their needs and
                preferences, and other pertinent information.{/t}
            </li>
            <li>
                {t}Plan your visits ahead of time. Decide on priorities they may have.{/t}
            </li>
            <li>{t}Everything in your visit should not just be about caregiving. Plan to actually “visit” during your
                visits!{/t}
            </li>
            <li>{t}Stay in contact and encourage your parents to do the same.{/t}
            </li>
        </ul>

        <ol start="3">
            <li>
                {t}How can I feel less frustrated and angry with the caregiving situation?{/t}
            </li>
        </ol>
        <ul>
            <li>
                {t}Feeling frustrated and angry is very common among caregivers regardless of distance.{/t}
            </li>
            <li>
                {t}Plan to give yourself a break and just do something for yourself.{/t}
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Some common questions (and answers) for long distance caregivers{/t}</h2>
        <hr/>
        <ol start="4">
            <li>
                {t}What is a geriatric care manager and how can one help?{/t}
            </li>
        </ol>
        <ul>
            <li>
                {t}Geriatric care managers are licensed nurses or social workers who specialize in geriatric care. {/t}
            </li>
            <li>
                {t}The geriatric care manager is hired by a family to evaluate and assess an older parent’s needs and to
                coordinate care through community resources.{/t}
            </li>
            <li>{t}When choosing one, you want to check references as well as find out their experience, fees, and if
                they are a member of the National Association of Professional Geriatric Care Managers.{/t}
            </li>
        </ul>

        <ol start="5">
            <li>
                {t}Respite care provides one a break from caregiving responsibilities – it can be for an afternoon or
                for several days.{/t}
            </li>
        </ol>
        <ul>
            <li>
                {t}Care can be provided in the home, in an adult day care center, or in a senior living community.{/t}
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
        <h2 class="flowers">{t}Some common questions (and answers) for long distance caregivers{/t}</h2>
        <hr/>
        <ol start="6">
            <li>
                {t}What if my mom says, “Promise me you’ll never put me in a nursing home”?{/t}
            </li>
        </ol>
        <ul>
            <li>
                {t}This request usually follows some horrendous story on the news about a nursing home death. Most of us
                want to stay in our own homes, to be independent, and to be cared for by relatives and friends.{/t}
            </li>
            <li>
                {t}Think carefully before making this type of promise. Assuring your parents that you will look out for
                them in their best interests and provide quality of care is what is really important. For some
                illnesses, long-term care may be the sole option. Discovering too late that such promises cannot be kept
                has often resulted in terrible feelings of guilt by the caregiver for many years.{/t}
            </li>
            <li>
                {t}Rather than a promise that cannot be kept, another way to respond is, “Dad, I will make sure you have
                the best care we can arrange. You can count on me to try and do what’s best for everyone. I can’t think
                of a situation where I’d walk out on you.”{/t}
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Some common questions (and answers) for long distance caregivers{/t}</h2>
        <hr/>

        <ol start="7">
            <li>
                {t}What are some other resources for long distance caregivers?{/t}
            </li>
        </ol>
        <ul>
            <li>
                {t}Obtain a free Caregiver Resource Directory that provides resources, facts, and advice about caring
                for a family member as well as for yourself. www.netofcare.org/crd/resource_form.asp{/t}
            </li>
            <li>
                {t}Benefits Check UP is a free online service provided by the National Council on Aging which allows
                people to find programs that can help them meet health care costs. www.benefitscheckup.org{/t}
            </li>
            <li>
                {t}ARCH National Respite Network and Resource Center provides resources and information including a
                respite locator program and information clearinghouse. www.archrespite.org{/t}
            </li>
            <li>
                {t}Eldercare Locator is a nationwide service helping identify local resources for older adults.
                www.eldercare.gov{/t}
            </li>
            <li>
                {t}National Family Caregivers Association supports family caregivers and offers education, information,
                and referrals. www.nfcacares.org{/t}
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Other benefits for long distance caregivers who are working{/t}</h2>
        <hr/>

        <p>{t}Long distance caregiving can have a great impact on one’s job. Because of fear of losing one’s job or
            impact on job security, many working caregivers do not inform their employers of their caregiving
            obligations. On the other side of the coin, employers are seeing a growing number of employees with family
            caregiving obligations particularly related to older parents. In fact, it may not surprise you that your
            supervisor could also be going through this experience now or in the near future.{/t}</p>

        <p>{t}Many organizations have programs in place to assist employees better meet their obligations as caregivers
            to older adults. You may want to discuss some of these benefits with your human resources department to see
            what may be available to you.{/t}</p>

        <p>
            {t}Some examples of family caregiving options include:{/t}
        </p>

        <ul>
            <li>
                {t}Employee assistance programs – Human Resources may provide information to you from your EAP provider
                regarding programs and counseling services available to employees and their families.{/t}
            </li>
            <li>
                {t}Flex time – employees with family caregiving responsibilities may be able to work flexible hours or
                days of the week to meet both work and home obligations more effectively.{/t}
            </li>
            <li>
                {t}Job sharing with another employee – employees with family caregiving obligations may be able to
                partner and share a work schedule to cover each other’s responsibilities.{/t}
            </li>
            <li>
                {t}Telecommuting or working from home – an occasion day to work at home may alleviate some of the
                pressures balancing work and home life.{/t}
            </li>
            <li>
                {t}Case management services – community services in your area may include case management or care
                management assistance in the home. This may include home care services, respite care, meals-on-wheels,
                or other referral services.{/t}
            </li>
            <li>
                {t}Family and Medical Leave Act (FMLA) – available to employees in certain companies that allow up to 12
                weeks of unpaid leave to eligible employees in order to care for certain family members for medical
                reasons.{/t}
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Are you a “sandwich generation” caregiver?{/t}</h2>
        <hr/>

        <p>{t}If you are between the ages of 35 to 54 and are caring for both younger ones such as children and older
            parents or other family members and probably employed at the same time, you may be a “sandwich generation”
            caregivers. You are not alone as approximately 20 million American fit this description.{/t}</p>

        <p>
            {t}A survey by the American Psychological Association reported that women in the “sandwich generation” feel
            more stress than any other age group as they have to balance the demands of caregiving two generations.
            Nearly 40% of them report “extreme levels” of stress which takes a toll on both their personal relationships
            but also on their own well-being as they may often put their own health on the “backburner.”{/t}
        </p>

        <p>
            {t}Watch the following video to see one family’s experience.{/t}
        </p>

        <h4>{t}Video – Part of the Sandwich Generation{/t}</h4>

        <iframe style="width: 640px; height: 360px; display: block; margin: 15px auto; frameborder: 0;"
                src="//www.youtube.com/embed/55UCToPajd4?rel=0" allowfullscreen></iframe>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity – ways to manage your own stress{/t}</h2>
        <hr/>

        <p>{t}The American Psychological Association offers several strategies to help those in the “sandwich
            generation” manage their stress. In another course, we address the power of journaling as a self-coaching
            exercise to help create positive self-talk.{/t}</p>

        <p>
            {t}In managing stress, journaling can also be a very effective tool to help identify what situations or
            events trigger stressful feelings, how you deal (or don’t deal) with stress, and how you may manage
            stress.{/t}
        </p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Activity_Ways_to_Manage_Your_Own_Stress.doc'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Family communication: when siblings attack!{/t}</h2>
        <hr/>
        <p>{t}Family dynamics can be very complex. We have been talking about your caregiving throughout this course in
            relation to your older parents. We cannot forget that, in many families, family dynamics also include
            siblings – whether they are yours or your parents.{/t}</p>

        <p>
            {t}Family conflict regarding caregiving of older parents is quite common. Dealing with care of older parents
            can rekindle early rivalries or jealousies among siblings. Family dynamics can be very complext, but there
            are some common underlying causes of conflict. In some families, siblings may perceive imbalance of care and
            responsibilities among family members. For example, siblings who live nearest to parents or those who are
            single females may be “expected” by their siblings to be primary caregivers regardless of other
            responsibilities. In some families, conflicts about money can be a significant source of conflict. One
            sibling may feel he or she deserves a greater portion of an inheritance, while the long distance sibling may
            feel that too much was spent on parent’s care by a brother or sister.{/t}
        </p>

        <p>{t}Central to most sibling conflicts is a breakdown of communication. Many care relate to this common
            scenario:{/t}</p>

        <blockquote>{t} Cara is a long distance caregiver. Unfortunately her new job meant she has not been able to
            visit her aging mother for the past three years. She never had a very close relationship with her mother,
            and so their conversations always tended to be on a superficial level. She calls her mother about every two
            weeks. Over the phone, Cara’s mother tells her she is fine. On the other hand, Cara’s sister, Joyce, who is
            the primary caregiver, calls Cara and tells her that caring for their mother has become very challenging.
            Their mother has wandered from home on numerous occasions and has difficulty finding her way back home. She
            also leaves pots on the stove and forgets to turn off the burners. Joyce wants to talk about potentially
            moving their mother to an assisted living community, but Cara does not want any part of such a decision, as
            she does not see any problem as her mother “sounds fine” on the phone.{/t}
        </blockquote>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Improving sibling communications{/t}</h2>
        <hr/>
        <p>{t}The following are some recommendations to work on sibling communications. Realize that this may take time,
            but if all parties commit to making improvements, the effect benefits the older parents – and isn’t that the
            goal?{/t}</p>

        <p>
            {t}Suggestion #1:{/t}
        </p>

        <p>
            {t}Hold regular family meetings. You may need to explore different ways to make these happen particularly if
            some of the siblings are long distant.{/t}
        </p>

        <p>
            {t}Suggestion #2:{/t}
        </p>

        <p>
            {t}Divide caregiving responsbilities up according to abilities and availability. Long distance siblings may
            be able to take care of financial responsibilities or come in to provide respite for siblings who typically
            provide more direct caregiving.{/t}
        </p>

        <p>
            {t}Suggestion #3:{/t}
        </p>

        <p>
            {t}Don’t be afraid to communicate your concerns, observations, or feelings to your siblings. The more open
            your communication, the better the understanding by your siblings of the entire caregiving situation.{/t}
        </p>

        <p>
            {t}Suggestion #4:{/t}
        </p>

        <p>
            {t}Express appreciation to siblings for help they provide. You may soon find that they are offering more
            assistance as they receive recognitions for their contributions.{/t}
        </p>

        <p>
            {t}Suggestion #5:{/t}
        </p>

        <p>
            {t}During family meetings, focus on caregiving issues rather than bringing up old family conflicts or
            issues. Try to “feed forward” rather than “feedback.”{/t}
        </p>

        <p>
            {t}Suggestion #6:{/t}
        </p>

        <p>
            {t}Consider keeping a care notebook to record and document tasks, reminders, and responsibilities. Encourage
            siblings to add to the notebook their observations and reports.{/t}
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Identifying resources and connections{/t}</h2>
        <hr/>
        <p>{t}A good method to evaluate an older parent’s environment and connections is to use an “ecomap.” Important
            perspective may be learned by considering the older parent in the context of the various systems that are
            part of his or her experiences. Systems may include individuals (such as spouse or adult child), groups
            (such as physicians or therapists), and organizations (such as hospitals) that interact with the older
            adult. Considering the older adult’s interactions with these systems may reveal areas where help may be
            needed.{/t}</p>

        <p>{t}Open the exercise below, “Developing an Ecomap” and follow the directions. Once systems are identified
            that interact with your older parent, respond to the questions that follow.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/Exercise_Developing_an_Ecomap.doc'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Dealing with resistance by your older parent{/t}</h2>
        <hr/>
        <p>
            {t}It is important that your older parent retains as much decision making abilities as possible. Your
            primary objecdtive is to help your parent fulfill his or her needs and choices, not to take over your
            parent’s life.{/t}
        </p>

        <p>
            {t}In some cases, your older parent may reject your assistance. There may be several reasons why older
            adults do not accept help from others:{/t}
        </p>

        <ul>
            <li>
                {t}Some older adults feel that accepting help is a sign of dependency.{/t}
            </li>
            <li>
                {t}Some older adults regard accepting services as a form of welfare.{/t}
            </li>
            <li>
                {t}An older parent may be concerned about the cost of the service.{/t}
            </li>
            <li>
                {t}An older parent may want you, rather than someone else, deliver the care needed.{/t}
            </li>
            <li>
                {t}Some older adults fear allowing strangers in the home.{/t}
            </li>
        </ul>

        <p>
            {t}Once you know why your relative is refusing assistance, you can develop strategies to encourage her to
            accept help. Everyone wants to feel able to take care of themselves and control their own destiny. Some
            older persons feel that social services are either a form of welfare or are too expensive. Concerns about
            who delivers services are also common. One way to make strangers more acceptable is to ask someone whom the
            older person trusts to recommend a care provider. Or you may want to ask someone the older person trusts to
            be on hand when the “stranger” is present.{/t}
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Identifying solutions to support choice and preferences{/t}</h2>
        <hr/>

        <p>{t}Throughout this course, you have had several opportunities to gain more understanding regarding your older
            parents’ needs and preferences. Every caregiving situation is unique. Understanding this will help you make
            good decisions as a caregiver.{/t}</p>

        <p>{t}Many factors come into play when considering the best possible solutions about your parents and their
            future. These factors may include: your parents’ health and functional abilities, mobility, values and
            beliefs, and family and community support systems.{/t}</p>

        <p>{t}In this exercise, we provide several questions for you to use as a framework to “interview” your parents
            regarding their choices and preferences for their future.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('makinggooddecisionsasacaregiver/ExerciseIdentifyingSolutionstoSupportChoiceandPreferences.pdf'); ?>"
               target="_blank" class="button">Download Exercise</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Congratulations on completing the course!{/t}</h2>
        <hr/>

        <p>{t}Let’s summarize the top five points we covered in this course:{/t}</p>

        <ol>
            <li>
                {t}With many grown children seeking new career opportunities or needing to relocate due to their job
                away from their parents and the home in which they were raised, long distance caregiving has grown as an
                issue in our society with the number of long distance caregivers doubling over the next 15 years.{/t}
            </li>
            <li>
                {t}Use all of your senses to observe changes related to your parent or the home environment during your
                visits.{/t}
            </li>
            <li>
                {t}If you are a long distance caregiver, have basic information at your fingertips regarding your older
                parents including: contact information from their neighbors (and they have your information); local
                resources and services for older adults; current list of their medications; and copies of “advanced
                directives.”{/t}
            </li>
            <li>
                {t}Geriatric care managers (licensed nurses or social workers who specialize in geriatric care) may be
                helpful to assist in evaluating and assessing older adults’ needs and in the coordination of care
                through community resources.{/t}
            </li>
            <li>
                {t}Many organizations have programs in place to assist employees better meet their obligations as
                caregivers to older adults. You may want to discuss some of these benefits with your human resources
                department to see what may be available to you.{/t}
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
