<?php

$this->breadcrumbs = array('Courses' => $this->createUrl('course/'), t($course->title));
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
        <img src="<?php echo $this->getImagesUrl('promotinghomesafetyforolderparents/166312138.png'); ?>"
             id="certificate" alt="Image">
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
        <img src="<?php echo $this->getImagesUrl('promotinghomesafetyforolderparents/80608570.png'); ?>"
             alt="Facilitator" id="facilitator">
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
Home safety tips
<li>
Moving my parents into my home
</li>
<li>
The “driving” conversation
</li>
<li>
Importance of exercise for older adults and its impact on safety
</li>
</ul>

<table style="border-top: solid black; margin-top: 50px;">
<tr>
<td>

<h5><?php echo t($course->title); ?> &rarr; </h5>
</td>
<td>
<a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button">&rarr; &rarr; Start Course &larr; &larr;</a>
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
<a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
<a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
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
</td>
</tr>
</table>

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
        <h2 class="flowers"><?php echo t($course->title); ?></h2>
        <hr/>
        <p>Welcome to the course, “Promoting Safety for Older Parents.” This course is geared towards family members who
            provide support or care to an older adult who may be a parent, spouse, other relative, or a significant
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
        <h2 class="flowers">Knowledge itself is power</h2>
        <hr/>
        <p>You’ve heard this phrase many times – probably even from your parents during your education years. It was
            actually first documented by Sir Frances Bacon back in the 16th century. When we consider how to promote
            safety of older adults so that they may remain independent for as long as possible, having knowledge and
            understanding what’s important will facilitate decision making in the future. </p>

        <ul>
            <li>Home safety tips</li>
            <li>Moving my parents into my home</li>
            <li>The “driving” conversation</li>
            <li>Importance of exercise for older adults and its impact on safety</li>

        </ul>

        <p>In this section, we look at several scenarios – all of which relate to safety in some way – that are commonly
            faced by family caregivers and their older parents. We address several topics including:</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">Home safety and older adults</h2>
        <hr/>
        <p>Regardless if your parents remain in their own home, move to a senior living community, or move in with you,
            home safety is an important topic for discussion. The overall goal of assessing home safety needs and making
            modifications as necessary is to give older adults a sense of independence in their environment.</p>

        <p>Accidents in the home are a major source of injury for older adults and can cause disability and sometimes
            death. For older adults, did you know that the vast majority of falls occurs going between the bedroom and
            bathroom? A simple fall that results in broken bones can develop into a serious, disabling injury limiting
            one’s independence. As one ages, senses of sight, hearing, touch, and smell tend to decline. Physical
            abilities are often reduced and certain movements that are important in daily tasks (such as stretching,
            lifting, and bending) are more difficult. Reaction time or judgment may slow.</p>

        <p>As a result, an older person cannot respond as quickly as a younger person in all situations. These normal
            aging changes may make an older person more prone to accidents. Simple precautions and adjustments may
            ensure a safe home. </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">Home safety – areas to assess</h2>
        <hr/>
        <p>There are several areas of the home to assess regarding safety issues:</p>

        <ol>
            <li>General safety (lighting, access, electrical, heating, water, medication storage)</li>
            <li>Kitchen</li>
            <li>Stairways and halls</li>
            <li>Living room</li>
            <li>Bathroom</li>
            <li>Bedroom</li>
            <li>Outdoor area</li>
        </ol>
        <p>CARE Coaching Tip – Be Alert!</p>

        <p>You may be in a situation where your older parents are living alone and you live quite a distance away, maybe
            even across the country. You may not get back to visit on a regular basis, but the last time you visited,
            you noticed “little things” around the house that seemed “out of place” for them. You decide that on the
            Thanksgiving holiday visit, you want to evaluate how they are doing. Remember, this should not be an
            inspection for purposes of judgment or criticism. Rather, think of this as a part wellness check, part
            well-being check, and part safety check. Things may be getting difficult to handle around the house for your
            older parents, and they may just be reluctant to bring them up with you because “you’ve got so much on your
            plate just now.”</p>

        <p>You want to try to be as subtle as possible. Don’t look like you are checking up on them. Use what you notice
            as openings for conversations. Do it privately (not a great opener for the family Thanksgiving table
            conversation!).</p>

        <p>“Mom, I noticed you were having a bit of trouble reading that label. What if we change the light bulbs in
            here?”</p>

        <p>Offer to do little things around the house. Don’t always wait for a “yes” or “no” response, as they may be
            too proud to ask for help. Just let them know that you’d like to use some of the time to be helpful and
            supportive. If they are resistant, invite them to do a chore together.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">Activity – using your powers of observation</h2>
        <hr/>
        <p>During your next visit, use your powers of observation to note changes in the following areas. You may want
            to make mental notes and then jot down some of your observations privately. We have included some general
            questions to get you started. In this activity, you will add some of your own specific questions that you
            may want to assess during your visit.</p>

        <p>Please note that you may print or save any activities from this course for future reference.</p>

        <h5>Additional home safety resources</h5>

        <p><a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Activity_Using_Your_Powers_of_Observation.docx'); ?>" target="_blank" class="button">Download Activity</a></p>

        <p>The U.S. Consumer Product Safety Commission estimates that over 1.5 million adults ages 65 and older are
            treated each year in hospital emergency rooms due to injuries from hazards in the home. The Commission
            believes that many of these injuries are preventable with some simple steps to correct the hazards. Some of
            these steps are valuable in your own home to prevent injuries in general. Here are some general
            recommendations to consider.</p>

        <h5>General Recommendations for Home Safety</h5>

        <table>
            <th>
                <p>Area</p>
            </th>
            <th>
                <p>Recommendations</p>
            </th>
            <tr>
                <td>
                    <p>Exposed cords from lamps, extensions, and telephones</p>
                </td>
                <td>
                    <ul>
                        <li>
                            <p>Arrange furniture so that outlets are available for lamps and appliances without use of
                                numerous extension cords.</p>
                        </li>
                        <li>If you use extension cords, place it along the wall on the floor where people cannot trip
                            over it.
                        </li>
                        <li>Move the telephone so that the cord does not lie where people walk.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><p>Cords covered by carpets and rugs</p></td>
                <td>
                    <ul>
                        <li>Remove cords from under carpeting or rugs as they may fray and cause a fire.</li>
                        <li>Replace damaged or frayed cords.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><p>Overloaded extension cords</p></td>
                <td>
                    <ul>
                        <li>Overloaded extension cords may cause fires. A standard 18 gauge extension cord can carry
                            1250 watts.
                        </li>
                        <li>Change to a higher rated cord if the wattage is exceeded.</li>
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

<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">Additional resources on home safety</h2>
        <hr/>
        <p>Here are links to other resources on home safety particularly in relation to older adults.</p>

        <p>
            <a href="http://www.homemods.org/resources/doable-home/index.shtml" target="_blank">The Do Able Renewable
                Home</a> - This booklet is designed to help overcome problems experienced in the home as one grows
            older. Content was developed in collaboration with gerontologists to make the home more livable.
        </p>

        <p>Lighting the Way: A Key to Independence - This resource provides a number of recommendations to help older
            adults see better. From home lighting to doing small tasks, many suggestions can easily be implemented with
            simple modifications.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Lighting_in_the_Home.pdf'); ?>"
               target="_blank" class="button">Download Resource</a>
        </p>

        <p>Home Safety Checklist - This is a simple checklist that you can use when visiting your older parents to
            assess safety issues in their home environment.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Home_Safety_Checklist.pdf'); ?>"
               target="_blank" class="button">Download Checklist</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">Considering your older parents moving in with you?</h2>
        <hr/>
        <p>More than 3.6 million older adults live with their children (up 67% from 2000) according to U.S. Census
            figures. With the economy and housing market issues, many more examples of older parents moving in with
            their children are coming to light. Older adults who may have been planning to sell their home and use the
            proceeds to live in a senior living residence may be delaying their decision or realizing they will not
            get enough money from the sale of their home to make the move.</p>

        <p>The children may also be facing financial difficulties of their own. “Merging” finances and obligations may
            benefit everyone in these types of arrangements. One son commented that he “gets to see a different side of
            his mother and father. They are not just parents, they’re people, and once you recognize that, you work with
            it and it is fun."</p>

        <p>Interestingly, an entire new housing opportunity is developing with this “return” to multiple generations
            living under a single roof. Called “multigenerational housing,” these homes are often designed with a master
            and guest (in-law) suite on the main floor, both with private bath and walk-in closet. An open plan with
            lots of gathering areas and additional bedroom and recreation areas upstairs provides families with flexible
            living space.</p>

        <p>“Giving each other space” is a valuable recommendation for those considering these living arrangements,
            particularly if the older parents are independent.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching hints</h2>
        <hr/>

        <ul>
            <li>Hold regular family conferences to discuss issues or problems that may come up. Often, it is much easier
                to discuss awkward subjects when everyone is together and in the mood to talk.
            </li>
            <li>If your parents have health problems, set up an emergency contact system and make sure everyone knows
                what it is. This could be a buzzer or alarm in the bedroom or shower. Preprogram their telephones with
                your cell phone or pager number.
            </li>
            <li>Consider safety issues for children and seniors living in the same house. Make sure that medications
                with non-childproof bottle tops are not easily within reach, and make sure toys are left on the floor or
                stairs.
            </li>
            <li>Caregiving can take a lot of time and energy, so make sure you still put aside some quality time for
                yourself, and for your spouse and children. If you begin to feel overwhelmed by your family
                responsibilities, arrange for outside help or respite, or find a caregivers support group in your area.
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">Exercise – assessing the situation</h2>
        <hr/>
        <p>This exercise provides an opportunity for you and your family to consider key questions to explore potential
            for having older parents move in with you. You may not be thinking about this at the present time, but you
            may have other family members or friends considering various options and so this may be helpful to them as
            well.</p>

        <p>These questions can serve as a guide for discussions with your family. As you read through each section, we
            include some CARE Coaching questions to bring out your best thinking about what would be important to
            you.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Exercise_Assessing_the_Situation.docx'); ?>"
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
        <h2 class="flowers">Driving concerns and older adults</h2>
        <hr/>

        <p>According to driving statistics, older adults have more fatal car accidents than any other age group.
            Additionally, older adults are more at risk for death after being involved in a car accident because of
            their age and health condition.</p>

        <p>By 2030, it is estimated that 25% of the driving population will be age 65 years and older. Currently, about
            14% of all people killed in traffic accidents are older adults, and that percent is expected to increase to
            25%.</p>

        <p>In addition to being a danger to themselves, many of these accidents result in injury or death of others.</p>

        <p>How does increased age impact driving ability? Several physical and cognitive changes that are part of normal
            aging or that are related to chronic illnesses may affect driving ability in older adults. Not all older
            adults experience these changes, but the following are some of the reasons older adults are more prone to
            car accidents:</p>

        <ul>
            <li>Slowed reaction time</li>
            <li>Vision problems</li>
            <li>Hearing problems</li>
            <li>Decreased ability to focus</li>
            <li>Changes in depth perception</li>
            <li>Feeling nervous or anxious</li>
            <li>Medical conditions that impact mobility</li>
        </ul>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">Driving and older adults</h2>
        <hr/>

        <p>Why is driving so important to older adults? Driving for most people – and particularly for older adults –
            means independence. I can go where I want, when I want, without having to rely on others. Some older adults
            may not want to inconvenience their family or friends.</p>

        <p>How can I help someone else limit or stop driving? In most cases, drivers monitor themselves and gradually
            limit or stop driving when they feel that a certain driving situation or driving in general is not safe.
            However, some people fail to recognize declining abilities, or they fear stopping to drive because it will
            make them permanently dependent on others for the necessities of life, and it may reduce their social and
            leisure activities as well. Conditions such as dementia or early stages of Alzheimers' disease may make some
            drivers unable to evaluate their driving properly. </p>

        <p>Let’s look at some of the warning signs and steps you may take to address this issue with older family
            members or friends.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">When to limit or stop driving – warning signs</h2>
        <hr/>

        <p>The following list of warning signs comes from the American Association of Retired People (AARP).</p>

        <p>What are the warning signs when someone should begin to limit driving or stop altogether?</p>

        <ol>
            <li>Feeling uncomfortable and nervous or fearful while driving</li>
            <li>Dents and scrapes on the car or on fences, mailboxes, garage doors, curbs etc.</li>
            <li>Difficulty staying in the lane of travel</li>
            <li>Getting lost</li>
            <li>Trouble paying attention to signals, road signs and pavement markings</li>
            <li>Slower response to unexpected situations</li>
            <li>Medical conditions or medications that may be affecting the ability to handle the car safely</li>
            <li>Frequent "close calls" (i.e. almost crashing)</li>
            <li>Trouble judging gaps in traffics at intersections and on highway entrance/exit ramps</li>
            <li>Other drivers honking at you and instances when you are angry at other drivers</li>
            <li>Friends or relatives not wanting to drive with you</li>
            <li>Difficulty seeing the sides of the road when looking straight ahead</li>
            <li>Easily distracted or having a hard time concentrating while driving</li>
            <li>Having a hard time turning around to check over your shoulder while backing up or changing lanes</li>
            <li>Frequent traffic tickets or "warnings" by traffic or law enforcement officers in the last year or two
            </li>
        </ol>

        <p>If you notice one or more of these warning signs with your older parents, you may want to have their driving
            assessed by a professional or have them attend a driver refresher class.</p>

        <p>You may also want to consult with their physician if you notice unusual concentration or memory problems, or
            other physical symptoms that may be affecting ability to drive.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching: talking to your parents about their driving</h2>
        <hr/>

        <p>Remember what it was like when you got your first driver’s license? That sense of pride and freedom stays
            with you throughout your life. You certainly come to appreciate the independence driving means if you have
            ever been dependent on someone to drive you around even for a short time period perhaps while you were
            recuperating from surgery.</p>

        <p>We are a mobile culture. In many areas, public transportation is scarce or unsafe for older adults. We want
            our older parents to be safe, but the last thing we want is for them to feel isolated, trapped, and alone in
            their own home.</p>

        <p>Bringing up the discussion on driving is very challenging. The best way to think about this is to keep the
            perspective that there is a continuum of possibilities on the “continue driving” to “quit driving” scale. By
            using CARE Coaching methods and breaking the driving conversation with your older parents into steps, you
            can better draw out the issues and support your parents in their transition.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching: talking to your parents about their driving</h2>
        <hr/>
        <h4>Step 1: Be a coach in the driving discussion</h4>

        <p>Remember that most children wait too long for the driving discussion – either until their parents driving has
            deteriorated or until a major accident occurs. Consider yourself more of a coach in the discussion. Begin by
            letting them know how much you value their independence, judgment, and their concern for safety for
            themselves and for others. Let them know that this conversation will help all of you think through what
            happens if and when they need to retire from driving. At this point, you want them to think and imagine what
            that would be like for them and how they would like that process to go.</p>

        <h5>CARE Coaching Questions</h5>

        <ul>
            <li>How will you know when it’s time to retire from driving?</li>
            <li>How do you think we should plan along the way?</li>
            <li>What would you think about using some assessments along the way?</li>
            <li>If you don’t notice it’s time to retire from driving, how would you like the conversation to go?</li>
            <li>As we continue this discussion, can we include a plan so that you can continue to be as independent as
                possible?
            </li>
        </ul>

        <h5>Resources</h5>

        <p>
            Driver Self-Assessment<br/> Here is a self-assessment for older adults from ElderSafety.org to help them
            identify what should be noticed regarding aging changes that may impact their ability to drive safely.
        </p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Driver_Self-Assessment.pdf'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>


        <p>
            <a href="http://www.usatoday.com/life/graphics/elderly_drivers_popup/flash.htm" target="_blank>">How Age
                Affects the Ability to Drive</a><br/>This interactive guide from USA Today provides visual descriptions
            of changes that occur during normal aging that may impact one’s ability in driving.
        </p>


    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-16" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching: talking to your parents about their driving</h2>
        <hr/>

        <h4>Step 2: Noticing the first changes</h4>

        <p>Physical and cognitive changes with aging variy considerably from very sudden and dramatic to very subtle and
            barely noticeable. Preparing and being willing to compensate for these changes will promote their safety and
            the safety of others. In many communities, finding a group of older adults who are tackling driving issues
            together may be a positive way to address some of those initial changes through sharing. Watch the following
            video to see how one church group addressed their issues through an AARP Driving Safety course.</p>

        <h4>Video – Senior Driving Safety</h4>

        <iframe style="width: 640px; height: 480px; display: block; margin: 15px auto; frameborder: 0;"
                src="//www.youtube.com/embed/YLW-GEJBMik?rel=0"></iframe>

        <h5>CARE Coaching Questions</h5>

        <ul>
            <li>Begin with reviewing what you discussed last time and goals that you and your parents came up with on
                how to promote their independence while keeping them safe driving.
            </li>
            <li>Taking a look at what we talked about last time, what are you wanting?</li>
            <li>One of the things I found out is that there are some driving refresher courses that you may take that
                will often give you a nice discount on your care insurance. What would you think about that? Could we
                check one out together?
            </li>
        </ul>

        <h5>Resources</h5>

        <p>
            <a href="http://apps.dmv.ca.gov/about/senior/senior_self_ess.html" target="_blank">Drivers
                Self-Assessment</a><br/> This self-assessment at seniordrivers.org provides a quick self-assessment for
            older drivers to review their driving knowledge and skills.
        </p>

        <p>
            <a href="http://www.aarp.org/families/driver_safety/driver_safety_online_course.html" target="_blank">AARP
                Driver Safety Online Course</a><br/> AARP offers an online driver safety course (about 8 hours in
            length) for a nominal charge. The course is designed for older drivers to learn about normal age-related
            changes and how to adjust driving to allow for these changes. Successful completion of the course may
            qualify participants for car insurance discounts (please check with your insurance company for specifics in
            your state).
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-17" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching: talking to your parents about their driving</h2>
        <hr/>

        <h4>Step 3: Tracking warning signs</h4>

        <p>It is probably not uncommon that you see some older drivers on the road who may be going much slower than
            traffic or seem confused making turns into busy intersections. There may be a point where professionals are
            needed to assess older adult’s driving abilities. The family physician is a good starting point,
            particularly if you have not been successful in bringing up the driving discussion on your own. As we noted
            earlier in this course, the physician is an authority figure to many older adults and so they may listen
            more closely to the doctor’s recommendations. Additionally, the physician can check for other medical
            conditions or medications that may need adjusting that could be altering motor functions and driving
            ability.</p>

        <p>A Driving Rehabilitation Specialist (DRS) can provide a more in depth analysis of your parent’s driving
            ability. The DRS can perform an initial assessment, help make recommendations for limitations on driving
            (such as no night driving), and plan driving routes. Driver rehabilitation classes may also be available in
            your area to help older adults learn alternate driving techniques to make driving safer.</p>

        <p>Watch the following video of a DRS working with an older adult client.</p>

        <h4>Video – Driving Rehabilitation Specialist</h4>

        <iframe style="width: 640px; height: 480px; display: block; margin: 15px auto; frameborder: 0;" src="
        //www.youtube.com/embed/6GpNJ-zh1rc?rel=0" allowfullscreen></iframe>

        <h5>CARE Coaching Questions</h5>

        <ul>
            <li>I’ve noticed you seem more tense behind the wheel. What situations really get to you when you’re
                driving?
            </li>
            <li> I’m concerned that something medical or your medications may be affecting your driving. Can we make an
                appointment to see your doctor to help correct things that may be interfering with your driving?
            </li>
            <li>What would you think about working out a plan with a professional to help make sure that you can keep
                driving safely?
            </li>
        </ul>

        <h5>Resources</h5>

        <p>
            Warning Signs for Older Drivers<br/> This checklist is for families to track potential warning signs for
            older drivers so that patterns may be identified early on.
        </p>

        <p style="margin-bottom: 25px;">
            <a href="<?php echo $this->createDownloadUrl('promotinghomesafetyforolderparents/Warning_Signs_Older_Drivers.pdf'); ?>"
               target="_blank" class="button">Download Activity</a>
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-18" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching: talking to your parents about their driving</h2>
        <hr/>
        <h4>Step 4: When it’s time to retire from driving</h4>

        <p>Retiring from driving is one of the most difficult moments in your older parent’s life. In the ideal world,
            there has been time to prepare for this transition and your parents are part (if not taking the lead) on
            this decision. No matter how much preparation went into planning, giving up driving is a major loss needing
            time to grieve and adjust. There are a number of families with older parents who are no longer driving, but
            just keeping the car in the garage as a “symbol” of independence for that older parent is not that
            uncommon.</p>

        <p>Rather than saying, “time to take away the keys,” the goal should be that your parents are in the position to
            say, “It’s time to retire from driving.”</p>

        <h5>CARE Coaching Questions</h5>

        <ul>
            <li>It seems that driving is becoming more of a struggle for you. What do you think?</li>
            <li>We’ve tried several things along the way (review what those were). It seems like those things are not
                keeping you as safe anymore. Considering this, what stands out for you?
            </li>
            <li>Your safety and freedom are what’s most important to both of us. If we can map out alternate plans to
                get you everywhere you need to go and try that out for a couple of weeks, what would you think about
                trying that plan?
            </li>
        </ul>

        <h5>Resources</h5>

        <p>
            Finding a Certified Driving Rehabilitation Specialist<br/> Click on <a
                href="http://www.driver-ed.org/i4a/pages/index.cfm?pageid=1" target="_blank">this link</a> to search for
            a certified Driving Rehabilitation Specialist in your area.
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-19" class="course-slide">
    <div class="content">
        <h2 class="flowers">CARE Coaching: talking to your parents about their driving</h2>
        <hr/>

        <h4>Step 5: Promoting independence post-driving</h4>

        <p>Post-driving, it is very important to help your older parents remain independent so they do not become
            isolated and depressed, trapped in their own home. They may need some help from you to create a plan to
            promote their freedom. The plan should respond to the following questions:</p>

        <ol>
            <li>Where do your parents need to go on a weekly basis? (like the grocery store, hairdresser, church
                services, etc.)
            </li>
            <li>Where do your parents need to go other than weekly? (like the doctor’s office, banking, other
                appointments)
            </li>
            <li>Where do your parents enjoy going for socializing? for entertainment?</li>
            <li>Who are their resources for alternatives to transportation? (neighbors/friends attending the same event;
                transportation for older adults offered through their community or church)
            </li>
            <li>Which of these alternatives are realistic and reliable?</li>
            <li>What public transportation options are available and acceptable?</li>
            <li>Where are the gaps?</li>
        </ol>

        <h5>Resources</h5>

        <p>
            <a href="https://www.aaafoundation.org/sites/default/files/stp.pdf" target="_blank">Supplemental
                Transportation Programs (STPs)</a><br/> The purpose of STPs is to provide alternative transportation to
            older adults who have limitations to their driving or are no longer driving. They are designed to be more
            flexible than other forms of transportation. Some include “door-to-door” service to assure the older adult
            arrives safely to their destination and back. All drivers are screened and trained.
        </p>

        <p>
            <a href="http://itnamerica.org" target="_blank">Independent Transportation Network (ITN)</a><br/> A newer
            program that is in limited numbers of areas is the ITN which combines creative transportation alternatives
            for older adults, but coordinates volunteers, community services and agency connections to make it work.
            Find an affiliate program on their website.
        </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-20" class="course-slide">
    <div class="content">
        <h2 class="flowers">Exercise promotes safety and independence</h2>
        <hr/>

        <p>Exercise for older adults is an important contributor to safety and independence. Many studies have
            demonstrated the positive benefits of exercise for older adults regardless of age. As we get older exercise
            is incredibly important to our overall health. Watch the following video with active older people talking
            about how physical activity has enhanced their lives and experts giving their advice.</p>

        <h4>Video – Older Adults and Exercise</h4>

        <iframe style="width: 640px; height: 480px; display: block; margin: 15px; auto; frameborder: 0;"
                src="//www.youtube.com/embed/Y1Uoce6hfyc?rel=0" allowfullscreen></iframe>

        <p>Before beginning an exercise program, it is important that your parents consult their physician.</p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-21" class="course-slide">
    <div class="content">
        <h2 class="flowers">Where to start exercising</h2>
        <hr/>

        <p>It is important to wear loose, comfortable clothing and well-fitting, sturdy shoes. Shoes should have a good
            arch support, and an elevated and cushioned heel to absorb shock.</p>

        <p>If not already active, one should begin slowly. Starting slowly makes it less likely that injury will occur.
            Starting slowly also helps prevent soreness from "overdoing" it. The saying "no pain, no gain" is not true
            for older or elderly adults. One does not have to exercise at a high intensity to get most health
            benefits</p>

        <p>Walking, for example, is an excellent activity to start. As one gets used to exercising, or if already
            active, a person can slowly increase the intensity of the exercise program.</p>


    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-22" class="course-slide">
    <div class="content">
        <h2 class="flowers">What types of exercises are good for older adults?</h2>
        <hr/>

        <p>There are several types of exercise that are effective for older adults. At least 30 minutes of aerobic
            activity is recommended daily. Examples are walking, swimming, and bicycling. Resistance or strength
            training is recommended twice a week. </p>

        <p>Warm up for five minutes before each exercise session. Walking slowly and stretching are good warm-up
            activities. After finishing exercising, cool down with more stretching for five minutes. Cool down longer in
            warmer weather. </p>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-23" class="course-slide">
    <div class="content">
        <h2 class="flowers">What are some safety tips for older adults related to exercise?</h2>
        <hr/>

        <ol>
            <li>Wait at least 2 hours after you eat to start your exercise routine.</li>
            <li>Don't exercise if you have a fever.</li>
            <li>Do not exercise if you have high blood pressure and have not consulted your doctor for your limits.</li>
            <li>If your knee or elbow or ankle is swollen, painful and warm to the touch DON'T exercise, see a doctor.
            </li>
            <li>If you have osteoporosis, talk to your doctor about any exercises that would be safe. Exercise that
                involves stretching or flexing the spine should be approved directly by your doctor.
            </li>
            <li>Do not exercise if you develop a new pain or symptom. Swelling, shortness of breath, extreme tiredness
                and you should get your parents to the doctor.
            </li>
        </ol>

    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>

<div id="lesson-1-slide-24" class="course-slide">
    <div class="content">
        <h2 class="flowers">Activity – resources on exercises designed for older adults</h2>
        <hr/>

        <p>The National Institutes on Aging has developed an online guide for older adults. A number of example
            exercises are presented with easy to follow steps and pictures. Exercises focus on areas including
            endurance, flexibility, balance, and strength training. Click on the following link to access the guide:</p>

        <p>
            <Exercise
            & Physical Activity: Your Everyday Guide from the National Institute on Aging
        </p>

        <h4>Exercise Videos</h4>

        <p>These are meant to be example exercises and do not constitute a complete exercise regimen.</p>

        <ol>
            <li>
                <a href="http://www.youtube.com/watch?v=ukJnjYM9LeA" target="_blank">Video – Chair Stand
                    Strengthening</a>
            </li>
            <li>
                <a href="http://www.youtube.com/watch?v=ueHKUenfLtY" target="_blank">Video – Seated Chair Leg
                    Stretch</a>
            </li>
            <li>
                <a href="http://www.youtube.com/watch?v=q7b7HgPYQN8" target="_blank">Video – Seated Knee Extensions</a>
            </li>
            <li>
                <a href="http://www.youtube.com/watch?v=rEfS6AfIgS4" target="_blank">Video – Calf Muscle Exercise</a>
            </li>
            <li>
                <a href="http://www.youtube.com/watch?v=SUWH6Tf6bNk" target="_blank">Video – Shoulder Strengthening</a>
            </li>
            <li>
                <a href="http://www.youtube.com/watch?v=7NqpW_TWEi0" target="_blank">Video – Bicep Curls</a>
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
        <h2 class="flowers">Congratulations on completing the course!</h2>
        <hr/>
        <p>Let’s summarize the top five points we covered in this course:</p>
        <ol>
            <li>Accidents in the home are a major source of injury for older adults and can cause disability and
                sometimes death. For older adults, the vast majority of falls occurs going between the bedroom and
                bathroom.
            </li>

            <li>During your next visit with your older parents, use your powers of observation to note changes around
                their home or in their appearance. This should not be an inspection for purposes of judgment or
                criticism. Rather, think of this as a part wellness check, part well-being check, and part safety check.
            </li>

            <li>According to driving statistics, older adults have more fatal car accidents than any other age group.
                Additionally, older adults are more at risk for death after being involved in a car accident because of
                their age and health condition.
            </li>

            <li>Bringing up the discussion on driving is very challenging. The best way to think about this is to keep
                the perspective that there is a continuum of possibilities on the “continue driving” to “quit driving”
                scale. By using CARE Coaching methods and breaking the driving conversation with your older parents into
                steps, you can better draw out the issues and support your parents in their transition.
            </li>

            <li>Exercise for older adults is an important contributor to safety and independence. Many studies have
                demonstrated the positive benefits of exercise for older adults regardless of age. As we get older
                exercise is incredibly important to our overall health.
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
