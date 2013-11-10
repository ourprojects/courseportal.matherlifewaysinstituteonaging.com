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
     style="background-image: url(<?php echo $this->getImagesUrl('promotinghomesafetyforolderparents/173255303.png'); ?>);">
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
        <img src="<?php echo $this->getImagesUrl('promotinghomesafetyforolderparents/166312138.png'); ?>"
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
        <img src="<?php echo $this->getImagesUrl('promotinghomesafetyforolderparents/80608570.png'); ?>"
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
                    <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Agenda_promotinghomesafetyforolderparents.pdf'); ?>"
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
                    <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    <a href="#lesson-1-slide-27" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
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
        <h2 class="flowers">{t}Promoting Home Safety for Older Parents{/t}</h2>
        <hr/>
        <p>{t}Welcome to the course, “Promoting Safety for Older Parents.” This course is geared towards family members
            who provide support or care to an older adult who may be a parent, spouse, other relative, or a significant
            other.{/t}</p>

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

        <p>{t}So let's begin with some facts about family caregivers!{/t}</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Knowledge itself is power{/t}</h2>
        <hr/>
        <p>{t}You’ve heard this phrase many times – probably even from your parents during your education years. It was
            actually first documented by Sir Frances Bacon back in the 16th century. When we consider how to promote
            safety of older adults so that they may remain independent for as long as possible, having knowledge and
            understanding what’s important will facilitate decision making in the future. {/t}</p>

        <ul>
            <li>{t}Home safety tips{/t}
            </li>
            <li>{t}Moving my parents into my home{/t}
            </li>
            <li>{t}The “driving” conversation{/t}</li>
            <li>{t}Importance of exercise for older adults and its impact on safety{/t}</li>

        </ul>

        <p>{t}In this section, we look at several scenarios – all of which relate to safety in some way – that are
            commonly faced by family caregivers and their older parents. We address several topics including:{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Home safety and older adults{/t}</h2>
        <hr/>
        <p>{t}Regardless if your parents remain in their own home, move to a senior living community, or move in with you, home safety is an important topic for discussion.  The overall goal of assessing home safety needs and making modifications as necessary is to give older adults a sense of independence in their environment.{/t}</p>

        <p>{t}Accidents in the home are a major source of injury for older adults and can cause disability and sometimes death.  For older adults, did you know that the vast majority of falls occurs going between the bedroom and bathroom?   A simple fall that results in broken bones can develop into a serious, disabling injury limiting one’s independence.  As one ages, senses of sight, hearing, touch, and smell tend to decline.  Physical abilities are often reduced and certain movements that are important in daily tasks (such as stretching, lifting, and bending) are more difficult.  Reaction time or judgment may slow.{/t}</p>

        <p>{t}As a result, an older person cannot respond as quickly as a younger person in all situations.  These normal aging changes may make an older person more prone to accidents.  Simple precautions and adjustments may ensure a safe home. {/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Home safety – areas to assess{/t}</h2>
        <hr/>
        <p>{t}There are several areas of the home to assess regarding safety issues:{/t}</p>

        <ol>
            <li>
                {t}General safety (lighting, access, electrical, heating, water, medication storage){/t}
            </li>
            <li>
                {t}Kitchen{/t}
            </li>
            <li>
                {t}Stairways and halls{/t}
            </li>
            <li>
                {t}Living room{/t}
            </li>
            <li>
                {t}Bathroom{/t}
            </li>
            <li>
                {t}Bedroom{/t}
            </li>
            <li>
                {t}Outdoor area{/t}
            </li>
        </ol>
        <p>{t}CARE Coaching Tip – Be Alert!{/t}</p>

        <p>{t}You may be a situation where your older parents are living alone and you live quite a distance away, maybe even across the country.  You may not get back to visit on a regular basis, but the last time you visited, you noticed “little things” around the house that seemed “out of place” for them.  You decide that on the Thanksgiving holiday visit, you want to evaluate how they are doing.  Remember, this should not be an inspection for purposes of judgment or criticism.  Rather, think of this as a part wellness check, part well-being check, and part safety check.  Things may be getting difficult to handle around the house for your older parents, and they may just be reluctant to bring them up with you because “you’ve got so much on your plate just now.”{/t}</p>

        <p>{t}You want to try to be as subtle as possible.  Don’t look like you are checking up on them.  Use what you notice as openings for conversations.  Do it privately (not a great opener for the family Thanksgiving table conversation!).{/t}</p>

        <p>{t}“Mom, I noticed you were having a bit of trouble reading that label.  What if we change the light bulbs in here?”{/t}</p>

        <p>{t}Offer to do little things around the house.  Don’t always wait for a “yes” or “no” response, as they may be too proud to ask for help.  Just let them know that you’d like to use some of the time to be helpful and supportive.  If they are resistant, invite them to do a chore together.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Activity – using your powers of observation{/t}</h2>
        <hr/>
        <p>{t}During your next visit, use your powers of observation to note changes in the following areas.  You may want to make mental notes and then jot down some of your observations privately.  We have included some general questions to get you started.  In this activity, you will add some of your own specific questions that you may want to assess during your visit.{/t}</p>

        <p>{t}Please note that you may print or save any activities from this course for future reference.{/t}</p>

        <h5>
            {t}Additional home safety resources{/t}
        </h5>

        <p>
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Activity_Using_Your_Powers_of_Observation.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

        <p>{t}The U.S. Consumer Product Safety Commission estimates that over 1.5 million adults ages 65 and older are treated each year in hospital emergency rooms due to injuries from hazards in the home.  The Commission believes that many of these injuries are preventable with some simple steps to correct the hazards.  Some of these steps are valuable in your own home to prevent injuries in general.  Here are some general recommendations to consider.  Following the general recommendations are links to downloadable resources.{/t}</p>

        <h5>{t}General Recommendations for Home Safety{/t}</h5>

        <table>
            <th>
                {t}Area{/t}
            </th>
            <th>
                {t}Recommendations{/t}
            </th>
            <tr>
                <td>
                    {t}Exposed cords from lamps, extensions, and telephones{/t}
                </td>
                <td>
                    <ul>
                        <li>
                            {t}Arrange furniture so that outlets are available for lamps and appliances without use of numerous extension cords.{/t}
                        </li>
                        <li>
                            {t}If you use extension cords, place it along the wall on the floor where people cannot trip over it.{/t}
                        </li>
                        <li>
                            {t}Move the telephone so that the cord does not lie where people walk.{/t}
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    {t}Cords covered by carpets and rugs{/t}
                </td>
                <td>
                    <ul>
                        <li>
                            {t}Remove cords from under carpeting or rugs as they may fray and cause a fire.{/t}
                        </li>
                        <li>
                            {t}Replace damaged or frayed cords.{/t}
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    {t}Overloaded extension cords{/t}
                </td>
                <td>
                    <ul>
                        <li>
                            {t}Overloaded extension cords may cause fires.  A standard 18 gauge extension cord can carry 1250 watts.{/t}
                        </li>
                        <li>
                            {t}Change to a higher rated cord if the wattage is exceeded.{/t}
                        </li>
                    </ul>
                </td>
            </tr>
        </table>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Additional resources on home safety{/t}</h2>
        <hr/>
        <p>{t}Here are links to other resources on home safety particularly in relation to older adults.{/t}</p>

        <p>{t}<a href="http://www.homemods.org/resources/doable-home/index.shtml" target="_blank>" The Do Able Renewable Home</a>.  This booklet is designed to help overcome problems experienced in the home as one grows older.  Content was developed in collaboration with gerontologists to make the home more livable.{/t}</p>

        <p>{t}Lighting the Way: A Key to Independence (add hyperlink to pdf).  This resource provides a number of recommendations to help older adults see better.  From home lighting to doing small tasks, many suggestions can easily be implemented with simple modifications.{/t}</p>

        <p>{t}Home Safety Checklist (add hyperlink to pdf).  This is a simple checklist that you can use when visiting your older parents to assess safety issues in their home environment.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Considering your older parents moving in with you?{/t}</h2>
        <hr/>
        <p>{t}More than 3.6 million older adults live with their children (up 67% from 2000) according to U.S. Census figures. With the economy and housing market issues, many more examples of older parents moving in with their children are coming to light.  Older adults who may have been planning to sell their home and use the proceeds to living in a senior living residence may be delaying their decision or realizing they will not get enough money from the house sale to make the move.{/t}</p>

        <p>{t}The children may also be facing financial difficulties of their own.  “Merging” finances and obligations may benefit everyone in these types of arrangements.  One son commented that he “gets to see a different side of his mother and father.  They are not just parents, they’re people, and once you recognize that, you work with it and it’s fun.” {/t}</p>

        <p>{t}Interestingly, an entire new housing opportunity is developing with this “return” to multiple generations living under a single roof.  Called “multigenerational housing,” these homes are often designed with a master and guest (in-law) suite on the main floor, both with private bath and walk-in closet.  An open plan with lots of gathering areas and additional bedroom and recreation areas upstairs provides families with flexible living space.{/t}</p>

        <p>{t}“Giving each other space” is a valuable recommendation for those considering these living arrangements, particularly if the older parents are independent.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching hints{/t}</h2>
        <hr/>

        <ul>
            <li>
                {t}Hold regular family conferences to discuss issues or problems that may come up.  Often, it is much easier to discuss awkward subjects when everyone is together and in the mood to talk.{/t}
            </li>
            <li>
                {t}If your parents have health problems, set up an emergency contact system and make sure everyone knows what it is.  This could be a buzzer or alarm in the bedroom or shower.  Preprogram their telephones with your cell phone or pager number.{/t}
            </li>
            <li>
                {t}Consider safety issues for children and seniors living in the same house.  Make sure that medications with non-childproof bottle tops are not easily within reach, and make sure toys are left on the floor or stairs.{/t}
            </li>
            <li>
                {t}Caregiving can take a lot of time and energy, so make sure you still put aside some quality time for yourself, and for your spouse and children.  If you begin to feel overwhelmed by your family responsibilities, arrange for outside help or respite, or find a caregivers support group in your area.{/t}
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
        <h2 class="flowers">{t}Exercise – assessing the situation{/t}</h2>
        <hr/>
        <p>{t}This exercise provides an opportunity for you and your family to consider key questions to explore potential for having older parents move in with you.  You may not be thinking about this at the present time, but you may have other family members or friends considering various options and so this may be helpful to them as well.{/t}</p>

        <p>{t}These questions can serve as a guide for discussions with your family.  As you read through each section, we include some CARE Coaching questions to bring out your best thinking about what would be important to you.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Exercise_Assessing_the_Situation.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Driving concerns and older adults{/t}</h2>
        <hr/>

        <p>{t}According to driving statistics, older adults have more fatal car accidents than any other age group.  Additionally, older adults are more at risk for death after being involved in a car accident because of their age and health condition.{/t}</p>

        <p>{t}By 2030, it is estimated that 25% of the driving population will be age 65 years and older.  Currently, about 14% of all people killed in traffic accidents are older adults, and that percent is expected to increase to 25%.{/t}</p>

        <p>{t}In addition to being a danger to themselves, many of these accidents result in injury or death of others.{/t}</p>

        <p>{t}How does increased age impact driving ability?  Several physical and cognitive changes that are part of normal aging or that are related to chronic illnesses may affect driving ability in older adults.  Not all older adults experience these changes, but the following are some of the reasons older adults are more prone to car accidents:{/t}</p>

        <ul>
            <li>
                {t}Slowed reaction time{/t}
            </li>
            <li>
                {t}Vision problems{/t}
            </li>
            <li>
                {t}Hearing problems{/t}
            </li>
            <li>
                {t}Decreased ability to focus{/t}
            </li>
            <li>
                {t}Changes in depth perception{/t}
            </li>
            <li>
                {t}Feeling nervous or anxious{/t}
            </li>
            <li>
                {t}Medical conditions that impact mobility{/t}
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
        <h2 class="flowers">{t}Driving and older adults{/t}</h2>
        <hr/>

        <p>{t}Why is driving so important to older adults?  Driving for most people – and particularly for older adults – means independence.  I can go where I want, when I want, without having to rely on others.  Some older adults may not want to inconvenience their family or friends.{/t}</p>

        <p>{t}How can I help someone else limit or stop driving?  In most cases, drivers monitor themselves and gradually limit or stop driving when they feel that a certain driving situation or driving in general is not safe.  However, some people fail to recognize declining abilities, or they fear stopping to drive because it will make them permanently dependent on others for the necessities of life, and it may reduce their social and leisure activities as well.  Conditions such as dementia or early stages of Alzheimers' disease may make some drivers unable to evaluate their driving properly. {/t}</p>

        <p>{t}Let’s look at some of the warning signs and steps you may take to address this issue with older family members or friends.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}When to limit or stop driving – warning signs{/t}</h2>
        <hr/>

        <p>{t}The following list of warning signs comes from the American Association of Retired People (AARP).{/t}</p>

        <p>{t}What are the warning signs when someone should begin to limit driving or stop altogether?{/t}</p>

        <ol>
            <li>
                {t}Feeling uncomfortable and nervous or fearful while driving{/t}
            </li>
            <li>
                {t}Dents and scrapes on the car or on fences, mailboxes, garage doors, curbs etc.{/t}
            </li>
            <li>
                {t}Difficulty staying in the lane of travel{/t}
            </li>
            <li>
                {t}Getting lost{/t}
            </li>
            <li>
                {t}Trouble paying attention to signals, road signs and pavement markings{/t}
            </li>
            <li>
                {t}Slower response to unexpected situations{/t}
            </li>
            <li>
                {t}Medical conditions or medications that may be affecting the ability to handle the car safely{/t}
            </li>
            <li>
                {t}Frequent "close calls" (i.e. almost crashing){/t}
            </li>
            <li>
                {t}Trouble judging gaps in traffics at intersections and on highway entrance/exit ramps{/t}
            </li>
            <li>
                {t}Other drivers honking at you and instances when you are angry at other drivers{/t}
            </li>
            <li>
                {t}Friends or relatives not wanting to drive with you{/t}
            </li>
            <li>
                {t}Difficulty seeing the sides of the road when looking straight ahead{/t}
            </li>
            <li>
                {t}Easily distracted or having a hard time concentrating while driving{/t}
            </li>
            <li>
                {t}Having a hard time turning around to check over your shoulder while backing up or changing lanes{/t}
            </li>
            <li>
                {t}Frequent traffic tickets or "warnings" by traffic or law enforcement officers in the last year or two{/t}
            </li>
        </ol>

        <p>{t} If you notice one or more of these warning signs with your older parents, you may want to have their driving assessed by a professional or have them attend a driver refresher class.{/t}</p>

        <p>{t} You may also want to consult with their physician if you notice unusual concentration or memory problems, or other physical symptoms that may be affecting ability to drive.{/t}</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching: talking to your parents about their driving{/t}</h2>
        <hr/>

        <p>{t}Remember what it was like when you got your first driver’s license?  That sense of pride and freedom stays with you throughout your life.  You certainly come to appreciate the independence driving means if you have ever been dependent on someone to drive you around even for a short time period perhaps while you were recuperating from surgery.{/t}</p>

        <p>
            {t}We are a mobile culture.  In many areas, public transportation is scarce or unsafe for older adults.  We want our older parents to be safe, but the last thing we want is for them to feel isolated, trapped, and alone in their own home.{/t}
        </p>

        <p>
            {t}Bringing up the discussion on driving is very challenging.  The best way to think about this is to keep the perspective that there is a continuum of possibilities on the “continue driving” to “quit driving” scale.  By using CARE Coaching methods and breaking the driving conversation with your older parents into steps, you can better draw out the issues and support your parents in their transition.{/t}
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching: talking to your parents about their driving{/t}</h2>
        <hr/>
        <h4>{t}Step 1: Be a coach in the driving discussion{/t}</h4>

        <p>{t}Remember that most children wait too long for the driving discussion – either until their parents driving has deteriorated or until a major accident occurs.  Consider yourself more of a coach in the discussion.  Begin by letting them know how much you value their independence, judgment, and their concern for safety for themselves and for others.  Let them know that this conversation will help all of you think through what happens if and when they need to retire from driving.  At this point, you want them to think and imagine what that would be like for them and how they would like that process to go.{/t}</p>

        <h5>{t}CARE Coaching Questions{/t}</h5>

        <ul>
            <li>
                {t}How will you know when it’s time to retire from driving?{/t}
            </li>
            <li>
                {t}How do you think we should plan along the way?{/t}
            </li>
            <li>
                {t}What would you think about using some assessments along the way?{/t}
            </li>
            <li>
                {t}If you don’t notice it’s time to retire from driving, how would you like the conversation to go?{/t}
            </li>
            <li>
                {t}As we continue this discussion, can we include a plan so that you can continue to be as independent as possible?{/t}
            </li>
        </ul>

        <h5>{t}Resources{/t}</h5>

        <p>{t}Driver Self-Assessment<br /> Here is a self-assessment for older adults from ElderSafety.org to help them identify what should be noticed regarding aging changes that may impact their ability to drive safely.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Driver_Self-Assessment.pdf'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>



        <p>{t}<a href="http://www.usatoday.com/life/graphics/elderly_drivers_popup/flash.htm" target="_blank>">How Age Affects the Ability to Drive</a><br />This interactive guide from USA Today provides visual descriptions of changes that occur during normal aging that may impact one’s ability in driving.{/t}</p>



    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}CARE Coaching: talking to your parents about their driving{/t}</h2>
        <hr/>

        <h4>{t}Step 2:  Noticing the first changes{/t}</h4>



    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Step 3: Tracking warning signs{/t}</h2>
        <hr/>

        <h4>{t}Step 2:  Noticing the first changes{/t}</h4>


    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-coaching exercises – the power of journaling{/t}</h2>
        <hr/>
        <h4>{t}Step 2:  Noticing the first changes{/t}</h4>



    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The process of journaling{/t}</h2>
        <hr/>
        <ol>
            <li>{t}Begin with getting yourself a notebook or journal for your entries. Although there are inexpensive
                wire bound notebooks that work just fine, I like to get a little nicer journal with a page marker for my
                journaling. It makes it more special!{/t}
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The process of journaling{/t}</h2>
        <hr/>
        <ol start="2">
            <li>{t}Make daily entries about your accomplishments – no matter how big or small. They may be
                accomplishments in relation to either work or your personal life.{/t}
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The process of journaling{/t}</h2>
        <hr/>
        <ol start="3">
            <li>{t}Answer these questions:{/t}
            </li>
        </ol>

        <ol>
            <li>{t}What makes me unique?{/t}
            </li>
            <li>{t}In what areas of my life do I appear most satisfied or content?{/t}
            </li>
            <li>{t}In which areas do I appear to be struggling or unfulfilled?{/t}
            </li>
            <li>{t}What are my strengths? (look back at your “Principles of Success” ratings for ideas){/t}
            </li>
            <li>{t}How have these strengths helped me in the past?{/t}
            </li>
            <li>{t}How do these strengths now help me?/t}
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-22" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The process of journaling{/t}</h2>
        <hr/>
        <ol start="4">
            <li>{t}Review your journal entries of recent accomplishments to connect with your values and talents.{/t}
            </li>
        </ol>

        <ul>
            <li>{t}What can you truly brag about?{/t}
            </li>
            <li>{t}What do your successes say about you?{/t}
            </li>

        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-23" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The process of journaling{/t}</h2>
        <hr/>
        <ol start="5">
            <li>{t}Create a personal “bragging” statement. Be authentic and positive in your statement. Print out the
                statement and keep it visible so that you can refer to it often.{/t}
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-24" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}The process of journaling{/t}</h2>
        <hr/>
        <ol start="6">
            <li>{t}Recite it out loud daily, saying, “This is me….This is what makes me special.”{/t}
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-25" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Self-coaching exercise – focus on the goal{/t}</h2>
        <hr/>
        <p>{t}How do we identify the goal? The goal answers the question, “What do you want that’s really important to
            you?” This exercise allows you to practice writing goals.{/t}</p>

        <p>{t}Which of these sound like goals to you?{/t}</p>

        <ul>
            <li>
                {t}I want to lose 30 pounds.{/t}
            </li>
            <li>
                {t}I want to get better at negotiating.{/t}
            </li>
            <li>
                {t}I want to get my mother to start considering her long-term care options.{/t}
            </li>
        </ul>

        <p>{t}None of these are goals – these are strategies towards goals. Strategies are important, as they focus on
            the “how to get to” goals. It is easy to focus on strategies rather than goals because strategies seem to
            focus on actions. {/t}</p>

        <p>{t}How do we identify the goal? The goal answers the question, “What do you want that’s really important to
            you?”{/t}</p>

        <p>{t}Another way to differentiate between setting goals and identifying strategies is to look at differences
            between goal setting and problem solving. Here are some different terms that describe the two:{/t}</p>

        <table>
            <th>
                <p>{t}Goal Setting{/t}</p>
            </th>
            <th>
                <p>{t}Identifying Strategies{/t}</p>
            </th>
            <tr>
                <td>
                    <ul>
                        <li>
                            {t}Proactive{/t}
                        </li>
                        <li>
                            {t}Finding what is possible{/t}
                        </li>
                        <li>
                            {t}Developing{/t}
                        </li>
                        <li>
                            {t}Identifying priorities{/t}
                        </li>
                        <li>
                            {t}Dynamic{/t}
                        </li>
                        <li>
                            {t}Working with the whole{/t}
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>
                            {t}Reactive{/t}

                        </li>
                        <li>
                            {t}Finding what is wrong{/t}

                        </li>
                        <li>

                            {t}Fixing{/t}

                        </li>
                        <li>

                            {t}Addressing crises{/t}

                        </li>
                        <li>

                            {t}Static{/t}

                        </li>
                        <li>{t}Working with parts{/t}</li>
                    </ul>
                </td>
            </tr>
        </table>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>


<div id="lesson-1-slide-26" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Setting your goals{/t}</h2>
        <hr/>
        <p>{t}Think of goal setting in terms of NOUNS:{/t}</p>

        <ul>

            <li>{t}“I want more confidence dealing with my parents.”{/t}</li>
            <li>{t}“I want a more positive attitude about my caregiving responsibilities.”{/t}</li>
            <li>{t}“I want better health for myself.”{/t}</li>
        </ul>

        <p>{t}Think of goal setting in terms of NOUNS:{/t}</p>

        <ul>
            <li>{t}I want to lose 30 pounds.{/t}</li>
            <li>{t}I want to get better at negotiating.{/t}</li>
            <li>{t} I want to get my mother to start considering her long-term care options.{/t}</li>
        </ul>

        <p>{t}For this exercise, look back at your responses to the two activities in this module. In the Self-Awareness
            Survey, you explored what is important to you in your life. In the Principles of Success activity, you rated
            yourself against these principles. Based on these results, develop three statements of goals for yourself.
            {/t}</p>

        <p>{t}Remember that goals should be stated in terms of nouns. Goals also answer the question, “What do you want
            that’s really important to you?”{/t}</p>

        <p>{t}Goal #1: {/t}<input style="margin-left: 15px;" type="text" name="Goal#1" value="(Example)" size="45"></p>

        <p>{t}Goal #2: {/t}<input style="margin-left: 15px;" type="text" name="Goal#2" value="(Example)" size="45"></p>

        <p>{t}Goal #3: {/t}<input style="margin-left: 15px;" type="text" name="Goal#3" value="(Example)" size="45"></p>


        <p>{t}Click below to download a copy of this page to write in your goals.{/t}</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Exercise_Setting_your_Goals.docx'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>


    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-27" class="course-slide">
    <div class="content">
        <h2 class="flowers">{t}Congratulations on completing the course!{/t}</h2>
        <hr/>
        <p>{t}Let’s summarize the top five points we covered in this course:{/t}</p>
        <ol>
            <li>{t}You are not alone as a caregiver of an older adult! More than one in six working caregivers care for
                one or more older adults.{/t}
            </li>

            <li>{t}A “role reversal” with aging parents is common, although it is not uncommon for that to be
                challenging to now be the “coach” for your aging parents. So remember to be a successful coach, use the
                skills of appreciating, listening, appreciating, and supporting.{/t}
            </li>

            <li>{t} Focus on shifting from negative “self talk” to positive “self talk” to get to what’s important to
                you as a caregiver.{/t}
            </li>

            <li>{t}Use the five steps involved in creating an effective self-coaching experience to help you move your
                thinking forward as an effective caregiver and focus on the goal.{/t}
            </li>

            <li>{t} Try journaling to facilitate positive “self talk” and boost your self-confidence as an effective
                caregiver.{/t}
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
