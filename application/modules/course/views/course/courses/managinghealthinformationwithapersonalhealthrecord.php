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
     style="background-image: url(<?php echo $this->getImagesUrl('managinghealthinformationwithapersonalhealthrecord/87333166.png'); ?>);">
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
        <img
            src="<?php echo $this->getImagesUrl('managinghealthinformationwithapersonalhealthrecord/166312138.png'); ?>"
            id="certificate"
            alt="{t}Image{/t}">
    </div>
    <div class="box-sidebar one">
        <h3>{t}Facilitator: Ellen Ziegemeier, MA{/t}</h3>

        <p>{t}Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She
            earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for
            various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver
            training.{/t}</p>

        <p>
            <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button">
                {t}Contact your Facilitator{/t} </a>

        </p>
        <img src="<?php echo $this->getImagesUrl('managinghealthinformationwithapersonalhealthrecord/80608570.png'); ?>"
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
    <h2 class="flowers">Managing Health Information with a PHR</h2>
    <?php // echo t($course->title); ?>

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
                    <a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/Agenda_managinghealthinformationwithapersonalhealthrecord.pdf'); ?>"
                       target="_blank" class="button">{t}Agenda{/t}</a></p></td>
        </tr>
        <tr>
            <td>
                <h5>{t}Managing Health Information with a PHR - {/t}</h5>
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
        <h2 class="flowers">{t}Managing Health Information with a Personal Health Record{/t}</h2>
        <hr/>
        <p>{t}Welcome to the course, “Managing Health Information with a Personal Health Record.” This course is geared
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

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What’s a personal health record?{/t}</h2>
        <hr/>
        <p>{t}Personal Health Records (PHR) have become easy-to-use tools to help manage health information in a single
            place. Having a PHR can help provide more complete information to health care providers or other family
            members.{/t}</p>


        <p>{t}In the previous section, you had the opportunity to complete the Exercise – Understanding Your Parents
            Needs and Preferences. In that exercise, we asked you to document some basics about what you know about your
            parents medical and health conditions.{/t}</p>

        <p>{t}Information like: the name and phone numbers of physicians, lists of their medical conditions and past
            surgeries, current lists of medications, allergies, and reactions to certain drugs or foods, advanced
            directives, physical functioning level, cognition, and diet requirements are basic questions asked in the
            emergency room – and unfortunately – usually repeated by every physician or surgeon you may see during a
            hospital stay! {/t}</p>

        <p>{t}It is often difficult to keep all this information straight, particularly in an emergency
            situation.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Benefits of using a PHR for older parents{/t}</h2>
        <hr/>
        <p>{t}One never knows when an emergency situation may occur. Consider this scenario. You are at work in the
            middle of the afternoon and get a call from your mother. She is crying and tells you that your father fell
            in the basement and the ambulance just picked him up. The emergency room physician just called her and was
            asking lots of questions about his health history, current health problems, drug allergies, medications,
            past hospitalizations, surgeries, diagnoses, and so on. She is very anxious and just doesn’t remember
            answers to all these questions.{/t}</p>

        <p>{t}A PHR for your older parents has many benefits. A PHR can:{/t}</p>

        <ul>
            <li>
                Be a means to quickly access important health information in one central location;
            </li>
            <li>
                Allow sharing health information among multiple health care providers;
            </li>
            <li>
                Track appointments and outcomes between visits to health care providers;
            </li>
            <li>
                Provide a comprehensive list of current (and past) medications to evaluate potential interactions; and
            </li>
            <li>
                Improve the physician visit experience by providing information or questions you want to share.
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
        <h2 class="flowers">{t}Using a PHR to manage health records{/t}</h2>
        <hr/>
        <p>{t}To address this problem, Personal Health Records (PHR) have become an easy-to-use tools to help manage
            health information in a single place. Having a PHR can help provide more complete information to health care
            providers or other family members. Unnecessary procedures or tests may be avoided if they have been
            documented in a PHR. Additionally, critical information about ones health in an emergency situation would
            easily be accessed.{/t}</p>


        <p>{t}You will learn about several different types of PHRs and have the chance to test some of these out for
            your own use or for your older parents.{/t}</p>

        <p>{t}Click on the following link to view a brief video on some personal experiences with PHRs.{/t}</p>

        (embed)
        <iframe src="http://player.vimeo.com/video/5001493" style="width: 500px; height: 338px; frameborder: 0;"
                webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        <p><a href="http://vimeo.com/5001493">PHR Video</a> from <a href="http://vimeo.com/ahima">AHIMA</a> on <a
                href="http://vimeo.com">Vimeo</a>.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Personal health records and protected health information{/t}</h2>
        <hr/>
        <p>{t}As a caregiver to older parents, you may be a point where you may need to help make health care decisions
            for your loved ones. Even though they are your parents, you don’t automatically have a right to see or use
            their medical information even if you need it to communicate to a health professional, insurance company, or
            you need the information to help them complete a PHR. {/t}</p>

        <p>{t}By law, only the patient has the right to view their own health information. The patient needs to submit a
            written authorization to their health professional, hospital, and/or insurer to obtain access to their own
            health information. {/t}</p>

        <p>{t}As a family caregiver, caregiver authorization needs to be complete and comprehensive before any
            information would be released to you as the caregiver. {/t}</p>

        <p>{t}What you need to go to obtain authorization to access protected health information for an older
            parent:{/t}</p>

        <ul>
            <li>
                Your parent needs to submit written authorization to his or her physician, hospital, or insurer.
            </li>
            <li>
                The written authorization needs to specify what information may be released to you as the caregiver.
            </li>
            <li>
                The written authorization should also specify who may request the information.
            </li>
        </ul>

        <p>{t}In the ideal scenario, you and your parents have discussed this before there is a situation where one or
            more parents becomes incapacitated and is unable to provide authorization.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}How to choose a personal health record{/t}</h2>
        <hr/>
        <p>{t}Choosing a Personal Health Record (PHR) is really a matter of personal choice. A PHR is controlled by the individual and can be shared with others including family members, caregivers, and health care providers.  This is different from a health care provider’s electronic or paper health records which are controlled by the provider.  One can get access to one’s own health records from a provider, but family members do not have access without your permission.  {/t}</p>

        <p>{t}This can be challenging in the caregiving situation if you as the caregiver do not have permission to access your parents’ health records, and you may need to provide information to a health care provider in an emergency situation.  If one of your parents was hospitalized and unable to speak for himself or herself, did you know that the hospital cannot legally provide any information to you as a child without previous permission of your parent?{/t}</p>

        <p>{t}Ideally, a PHR contains a fairly complete summary of one’s medical and health history based on data from a number of sources.  PHRs are available from a number of sources:{/t}</p>

        <ul>
            <li>
                {t}From health insurance plans for members{/t}
            </li>
            <li>
                {t}By health care providers for their patients{/t}
            </li>
            <li>
                {t}From various vendors who have security in place to receive and store personal information{/t}
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
        <h2 class="flowers">{t}Types of PHRs{/t}</h2>
        <hr/>
        <p>{t}PHRs may be kept as hardcopy on paper or electronically on one’s computer or on the Internet through a service provider.  In considering what form may be most suitable, you should consider things like accessibility, convenience, and ease of updating.  {/t}</p>

        <p>{t}Paper versions can range from a formal document to a file folder with information from health care providers, insurance companies and hospitals.  This is at least a good starting point for most people to get a snapshot of one’s health history.  The difficulties come in when trying to keep all the information current as well as having emergency access to the information.  {/t}</p>

        <p>{t}The greatest risk of keeping health information on paper can easily be understood when considering the saga of Hurricane Katrina.  The risks of keeping health information on paper were fully exposed when hundreds of thousands of evacuees sought care in new medical communities across the country.  Evacuees lacked even the most basic personal health information, such as their medications and dosages.  Most of their paper records were destroyed in the muck of hurricane-caused flooding, and many medical practices and hospitals were shut down for weeks, perhaps forever.  {/t}</p>



        <p>{t}Out of necessity, a program called KatrinaHealth was created to rapidly develop electronic health records for those displaced by the hurricane.  (For more on this program, go to http://www.katrinahealth.org.) Since then, the American Association of Family Practitioners (AAFP) has collaborated with the city of New Orleans and Intel, among others, to provide digital PHRs to every New Orleans resident who wants one, and to transfer these to medical practices and hospitals in the displaced residents' current location for follow-up care. {/t}</p>

        <p>{t}The American Health Information Management Association (AHIMA) created a PHR form that is downloadable.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/PHR_Form_from_AHIMA.pdf'); ?>"
               target="_blank" class="button">Download Form</a>
        </p>


    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Software versions of PHRs{/t}</h2>
        <hr/>
        <p>{t}Software versions of PHRs can be stored on personal computers.  Information is inputted directly into electronic forms or by scanning documents from health care providers.  A hardcopy can then be easily printed.  The user controls access to the information.  The major drawback is the lack of accessibility in case of an emergency unless one carries a copy of the records on a flash drive or on a data card.  Most software versions of PHRs are available at a cost to consumers.{/t}</p>

        <p>{t}Internet versions of PHRs are very new having just been developed over the past 1-2 years.  Through the web, consumers may access their private PHR accounts by connecting to the Internet and logging in with their username and password.  Information may easily be updated, and consumers may elect to share information with specific individuals of their choosing.  The major advantage is the access and availability of information in emergency situations – all one needs is Internet connection and logon information.  {/t}</p>

        <p>{t}If you are looking at an internet-based PHR, it is very important that the provider describes security and privacy standards that are in place to protect the information being stored.  We will look at a few examples in the next section.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/Activity_Self_Awareness_Survey.doc'); ?>"
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
        <h2 class="flowers">{t}Activity – reviewing internet-based PHR tools {/t}</h2>
        <hr/>

        <h4>My Family Health Portrait</h4>
        <p>{t}My Family Health Portrait is a web-based program developed from the U.S. Department of Health and Human Services, Family History Initiative.  This initiative is designed to encourage families to learn more about their family health history.  Because health providers have long understood that common illnesses can run in families (like high blood pressure, diabetes, and heart disease – to name a few), tracing illnesses experienced by your parents, grandparents, and other blood relatives may help your physician predict disorders to which you may be at risk and take preventive action.{/t}</p>

        <p>{t}My Family Health Portrait helps users organize family history information, save it to their own computer, and print a hard copy to take to the physician’s visit.  Additionally, users may grant permission for other family members to view information on their website.{/t}</p>

        <p>{t}Visit the <a href="https://familyhistory.hhs.gov/fhh-web/home.action" target="_blank">My Family Health Portrait</a> website.{/t}</p>

        <p>Read the section on the website, “Learn More About My Family Health Portrait” to answer the following questions.</p>

        <ol>
            <li>
                Why is completing a family health history important?
            </li>
            <li>
                What is done to assure that my information is private that I enter in My Family Health Portrait?
            </li>
            <li>
                What does it mean that this tool is EHR (Electronic Health Record) ready?  How does this benefit me?
            </li>
            <li>
                What is “clinical decision support”?  How does it benefit me?
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity – reviewing internet-based PHR tools{/t}</h2>
        <hr/>
        <h4>{t}Google Health{/t}</h4>

        <p>{t}Google offers a free, secure web-based program to store and manage health information in a central place.  Information is accessible anywhere and at anytime.  In addition to health information, test results, x-rays, and other scans may be easily uploaded into your PHR.  You may also keep track of test results and laboratory values visually to see how you progress over time.  Finally, you may print a wallet card to carry your health profile with you.   {/t}</p>

        <p>{t}Click on the following link to view a brief video taking you on a tour of Google Health.{/t}</p>

        <h4>Video – Introduction to Google Health</h4>

        (URL) http://www.youtube.com/watch?v=yNe6-p4G7Ik

        (embed)
        <iframe width="560" height="315" src="http://www.youtube.com/embed/yNe6-p4G7Ik" frameborder="0" allowfullscreen></iframe>


        <p>To summarize aspects of Google Health:</p>

        <ul>
            <li>

            </li>
        </ul>

        Store and manage all health information securely.
        Create and save a health profile and link to numerous resources to learn more about symptoms, causes, and treatments.
        Import medical record files and prescription history through links with partners such as hospitals, labs, pharmacies, and insurance companies.
        Track your medical history to keep your physician updated.
        Learn how medications may interact through an integrated program that checks for potential problems between drugs.
        Select those with whom you want to share key medical information.

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity – reviewing internet-based PHR tools {/t}</h2>
        <hr/>
        <h4>{t}Step 2{/t}</h4>

        <p>{t}You are prepared to ask yourself some difficult questions and not avoid answering them. {/t}</p>

        <p>{t}Imagine that you are in some tough discussions with your father and siblings about dad’s lack of caring
            for himself living alone. Dad has grown more isolated day by day. When visiting one day, you are shocked to
            find empty food containers and spoiled food in the refrigerator. There is a stack of unpaid bills on the
            kitchen counter next to a jar of various pills mixed together. You bring this up with your siblings, but
            their reaction is, “Dad is fine. He wants to stay in his house, and it’s not our place to kick him out!”
            Your dad says, “I just haven’t gotten around to some things…and I’d thank you to stay out of my
            business!”{/t}</p>

        <p>{t}Are your prepared to ask yourself some key questions like…”Am I an effective caregiver? Why do I think
            that I am not getting the response I need from my dad or siblings? What response should I expect? Why do I
            believe that I should expect it? Is it realistic and upon what observations do I base the
            perception?”{/t}</p>

        <p>{t}Most importantly, “When I think about being a good caregiver, what’s important to me?”{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What is necessary to create an effective self-coaching experience?{/t}</h2>
        <hr/>
        <h4>{t}Step 3{/t}</h4>

        <p>{t}You accept that through self-coaching, you are going to persist until you identify a solution and set of
            actions that you will then commit to implementing. {/t}</p>

        <p>{t}It may take some time to achieve results, but you need to stick to your goal.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What is necessary to create an effective self-coaching experience?{/t}</h2>
        <hr/>
        <h4>{t}Step 4{/t}</h4>

        <p>{t}Be willing to “let it go.”{/t}</p>

        <p>
            {t}We’ve all been in the situation where something just nags at us. Things always seem worse when we pay too
            much attention to them. If I feel anxious, overwhelmed, or depressed and focus on those feelings, I become
            it. By letting go, I turn away from it. I don’t feed those problems any longer.{/t}
        </p>

        <p>
            {t}It is sort of like flipping to another television channel. You may not be able to stop a thought from
            “percolating” in your mind, but you can say “no!” to thoughts that result in anxiety or depression. We
            always have choices. In this case, we have the choice not be become a victim of negative thoughts or
            insecurities.{/t}
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}What is necessary to create an effective self-coaching experience?{/t}</h2>
        <hr/>
        <h4>{t}Step 5{/t}</h4>

        <p>{t}Set a time frame for the self-coaching session.{/t}</p>

        <p>
            {t}The focus of self-coaching is to identify your goal, commit to your actions, and then move on to do
            something else. Sometimes your best thinking goes on when you do move onto something else and then come back
            to your goal.{/t}</p>

    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Course{/t} </a>
    </div>
</div>


<!--
<div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
        <div class="content">
            <h2 class="flowers">{t}Contact Facilitator{/t}</h2>
            <hr/>
            <p>{t}Please complete the form below to contact your facilitator.{/t}</p>

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
              */  ?>
            </div>

            </div>
<div class="buttons">
    <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Close{/t} </a>
</div>
</div>

            -->


<!-- need final 2 divs to close course and lesson id -->

</div>
</div>
