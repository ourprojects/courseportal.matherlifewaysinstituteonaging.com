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
     style="background-image: url(<?php echo $this->getImagesUrl('managinghealthinformationwithapersonalhealthrecord/87333166.png'); ?>);">
	<h1 class="bottom">
		<?php echo t($course->title); ?>
	</h1>
</div>
<div id="sidebar">
	<div class="box-sidebar one">
		<h3>Course Evaluations</h3>

		<p>Please click the button below to access the pre-course and post-course surveys. Participation is anonymous. Please complete each survey at the appropriate time.</p>
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
				<a id="survey_link_<?php echo $survey->getId(); ?>" class="button" href="#survey_<?php echo $survey->getId(); ?>" title="<?php echo t($survey->model->title); ?>"><?php echo t($survey->model->title); ?> </a>
				<?php $survey->run(); ?>
			</li>
			<?php
            }
            ?>
		</ul>
	</div>

	<div class="box-sidebar one">
		<h3>Certificate of Completion</h3>

		<p>Click the button below to access your certificate once you have successfully completed the module. You will be able to manually add your name, date, and course title.</p>

		<p>
			<a href="<?php echo $this->createDownloadUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank" class="button">Download Certificate</a>
		</p>
		<img src="<?php echo $this->getImagesUrl('managinghealthinformationwithapersonalhealthrecord/166312138.png'); ?>" id="certificate" alt="Image">
	</div>
	<div class="box-sidebar one">
		<h3>Facilitator: Ellen Ziegemeier, MA</h3>

		<p>Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver training.</p>

		<p>
			<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button"> Contact your Facilitator </a>

		</p>
		<img src="<?php echo $this->getImagesUrl('managinghealthinformationwithapersonalhealthrecord/80608570.png'); ?>" alt="Facilitator" id="facilitator">
	</div>
	<div class="box-sidebar one">
		<h3>Working Caregivers in America</h3>
		<img src="<?php echo $this->getImagesUrl('care/286x366_Grafix_69pc.png'); ?>" alt="image" class="block center" />

		<p>69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an unpaid leave of absence to meet their care-giving responsibilities.</p>
	</div>
</div>
<!-- Start main content here -->

<div class="column-wide">
	<h2 class="flowers">Managing Health Information with a PHR</h2>
	<?php // echo t($course->title); ?>

	<p>
		<?php echo t($course->description); ?>
	</p>
	<h4>Access</h4>

	<p>
		<strong>90 days</strong> from the <strong>initial enrollment</strong> date.
	</p>

	<h4>Requirements</h4>

	<p>To successfully participate, you will need access to the following software on the computer(s) you are using to access this course:</p>
	<ul>
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
					<a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/Agenda_managinghealthinformationwithapersonalhealthrecord.pdf'); ?>" target="_blank" class="button">Agenda</a>
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<h5>Managing Health Information with a PHR - </h5>
			</td>
			<td>
				<p>
					<a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button"> Start </a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
						href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
				</p>
			</td>
		</tr>
	</table>

	<h4>Resources</h4>

	<p>Please use these listed resources for additional reading. Please contact your course facilitator if you have additional resources you would like to see added here.</p>
	<ul id="resources">

		<li>
			<a href="http://www.aarp.org/health/doctors-hospitals/info-09-2010/finding_your_way_how_to_talk_to_8212_and_understand_8212_your_doctor.html" target="_blank">How To Talk To Your Doctor</a>
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
			<a href="http://www.usa.gov/Citizen/Topics/Health/caregivers.shtml" target="_blank">Caregiver Resources on USA.gov</a>
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

	<p>Filmmaker and photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokurs 83-year-old father, Herbie, became too infirm to care for himself. At that moment they joined some twenty million other Americans who make up the sandwich generation, those who find themselves responsible for the care of both their children and their aging parents.</p>

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
				<h2 class="flowers">Managing Health Information with a Personal Health Record</h2>
				<hr />
				<p>Welcome to the course, “Managing Health Information with a Personal Health Record.” This course is geared towards family members who provide support or care to an older adult who may be a parent, spouse, other relative, or a significant other. </p>

				<p>Also, this course may be of help to a “future caregiver” to better prepare oneself for a future caregiving role. Whether you are now – or will be in the future – a caregiver for an older adult, it is important to understand that you are not alone.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
			</div>
		</div>
		<div id="lesson-1-slide-2" class="course-slide">
			<div class="content">
				<h2 class="flowers">What’s this course all about?</h2>
				<hr />

				<p>This is one in a series of short courses built on a framework called CARE Coaching. CARE Coaching courses provide working caregivers – both current and future – with essential tools, knowledge, and behaviors to effectively deal with a variety of issues arising from caring for older relatives or friends through application of effective coaching skills.</p>

				<p> CARE Coaching considers “real life” situations that family caregivers must often deal with (such as having conversations with aging parents about their needs and preferences for their future care, managing health information, communicating with health care providers, maneuvering the health care system, and addressing home safety issues, to name a few), activities in the course help stimulate “new thinking” by family caregivers providing them with tools to strengthen their knowledge, skills, and self-awareness about their role and responsibilities. As a result, family caregivers can focus on what is most important to be effective in caring for their loved ones.</p>

				<p>A fundamental learning approach that is used throughout this course is that of “coaching.” CARE Coaching is a model developed specifically for working caregivers that combines the best of what we know about coaching methods. CARE Coaching improves working caregivers’ abilities to:</p>

				<ul>
					<li>Communicate</li>
					<li>Advocate</li>
					<li>Relate</li>
					<li>Encourage</li>
				</ul>

				<p>In summary, CARE Coaching involves a method to help you as a caregiver think differently about a caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and actions.</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-1-slide-3" class="course-slide">
			<div class="content">
				<h2 class="flowers">What’s a personal health record?</h2>
				<hr />
				<p>Personal Health Records (PHR) have become easy-to-use tools to help manage health information in a single place. Having a PHR can help provide more complete information to health care providers or other family members.</p>


				<p>In the previous section, you had the opportunity to complete the Exercise – Understanding Your Parents Needs and Preferences. In that exercise, we asked you to document some basics about what you know about your parents medical and health conditions.</p>

				<p>Information like: the name and phone numbers of physicians, lists of their medical conditions and past surgeries, current lists of medications, allergies, and reactions to certain drugs or foods, advanced directives, physical functioning level, cognition, and diet requirements are basic questions asked in the emergency room – and unfortunately – usually repeated by every physician or surgeon you may see during a hospital stay! </p>

				<p>It is often difficult to keep all this information straight, particularly in an emergency situation.</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-4" class="course-slide">
			<div class="content">
				<h2 class="flowers">Benefits of using a PHR for older parents</h2>
				<hr />
				<p>One never knows when an emergency situation may occur. Consider this scenario. You are at work in the middle of the afternoon and get a call from your mother. She is crying and tells you that your father fell in the basement and the ambulance just picked him up. The emergency room physician just called her and was asking lots of questions about his health history, current health problems, drug allergies, medications, past hospitalizations, surgeries, diagnoses, and so on. She is very anxious and just doesn’t remember answers to all these questions.</p>

				<p>A PHR for your older parents has many benefits. A PHR can:</p>

				<ul>
					<li>Be a means to quickly access important health information in one central location;</li>
					<li>Allow sharing health information among multiple health care providers;</li>
					<li>Track appointments and outcomes between visits to health care providers;</li>
					<li>Provide a comprehensive list of current (and past) medications to evaluate potential interactions; and</li>
					<li>Improve the physician visit experience by providing information or questions you want to share.</li>
				</ul>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-5" class="course-slide">
			<div class="content">
				<h2 class="flowers">Using a PHR to manage health records</h2>
				<hr />
				<p>To address this problem, Personal Health Records (PHR) have become an easy-to-use tools to help manage health information in a single place. Having a PHR can help provide more complete information to health care providers or other family members. Unnecessary procedures or tests may be avoided if they have been documented in a PHR. Additionally, critical information about ones health in an emergency situation would easily be accessed.</p>

				<p>You will learn about several different types of PHRs and have the chance to test some of these out for your own use or for your older parents.</p>

				<p>
					Click <a href="http://vimeo.com/5001493" target="_blank"> here</a> to view a brief video on some personal experiences with PHRs.
				</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-6" class="course-slide">
			<div class="content">
				<h2 class="flowers">Personal health records and protected health information</h2>
				<hr />
				<p>As a caregiver to older parents, you may be a point where you may need to help make health care decisions for your loved ones. Even though they are your parents, you don’t automatically have a right to see or use their medical information even if you need it to communicate to a health professional, insurance company, or you need the information to help them complete a PHR. </p>

				<p>By law, only the patient has the right to view their own health information. The patient needs to submit a written authorization to their health professional, hospital, and/or insurer to obtain access to their own health information. </p>

				<p>As a family caregiver, caregiver authorization needs to be complete and comprehensive before any information would be released to you as the caregiver. </p>

				<p>What you need to go to obtain authorization to access protected health information for an older parent:</p>

				<ul>
					<li>Your parent needs to submit written authorization to his or her physician, hospital, or insurer.</li>
					<li>The written authorization needs to specify what information may be released to you as the caregiver.</li>
					<li>The written authorization should also specify who may request the information.</li>
				</ul>

				<p>In the ideal scenario, you and your parents have discussed this before there is a situation where one or more parents becomes incapacitated and is unable to provide authorization.</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>


		<div id="lesson-1-slide-7" class="course-slide">
			<div class="content">
				<h2 class="flowers">How to choose a personal health record</h2>
				<hr />
				<p>Choosing a Personal Health Record (PHR) is really a matter of personal choice. A PHR is controlled by the individual and can be shared with others including family members, caregivers, and health care providers. This is different from a health care provider’s electronic or paper health records which are controlled by the provider. One can get access to one’s own health records from a provider, but family members do not have access without your permission. </p>

				<p>This can be challenging in the caregiving situation if you as the caregiver do not have permission to access your parents’ health records, and you may need to provide information to a health care provider in an emergency situation. If one of your parents was hospitalized and unable to speak for himself or herself, did you know that the hospital cannot legally provide any information to you as a child without previous permission of your parent?</p>

				<p>Ideally, a PHR contains a fairly complete summary of one’s medical and health history based on data from a number of sources. PHRs are available from a number of sources:</p>

				<ul>
					<li>From health insurance plans for members</li>
					<li>By health care providers for their patients</li>
					<li>From various vendors who have security in place to receive and store personal information</li>
				</ul>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-8" class="course-slide">
			<div class="content">
				<h2 class="flowers">Types of PHRs</h2>
				<hr />
				<p>PHRs may be kept as hardcopy on paper or electronically on one’s computer or on the Internet through a service provider. In considering what form may be most suitable, you should consider things like accessibility, convenience, and ease of updating. </p>

				<p>Paper versions can range from a formal document to a file folder with information from health care providers, insurance companies and hospitals. This is at least a good starting point for most people to get a snapshot of one’s health history. The difficulties come in when trying to keep all the information current as well as having emergency access to the information. </p>

				<p>The greatest risk of keeping health information on paper can easily be understood when considering the saga of Hurricane Katrina. The risks of keeping health information on paper were fully exposed when hundreds of thousands of evacuees sought care in new medical communities across the country. Evacuees lacked even the most basic personal health information, such as their medications and dosages. Most of their paper records were destroyed in the muck of hurricane-caused flooding, and many medical practices and hospitals were shut down for weeks, perhaps forever. </p>


				<p>Out of necessity, a program called KatrinaHealth was created to rapidly develop electronic health records for those displaced by the hurricane. (For more on this program, go to http://www.katrinahealth.org.) Since then, the American Association of Family Practitioners (AAFP) has collaborated with the city of New Orleans and Intel, among others, to provide digital PHRs to every New Orleans resident who wants one, and to transfer these to medical practices and hospitals in the displaced residents' current location for follow-up care. </p>

				<p>The American Health Information Management Association (AHIMA) created a PHR form that is downloadable.</p>

				<p>
					<a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/PHR_Form_from_AHIMA.pdf'); ?>" target="_blank" class="button">Download Form</a>
				</p>


			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-9" class="course-slide">
			<div class="content">
				<h2 class="flowers">Software versions of PHRs</h2>
				<hr />
				<p>Software versions of PHRs can be stored on personal computers. Information is inputted directly into electronic forms or by scanning documents from health care providers. A hardcopy can then be easily printed. The user controls access to the information. The major drawback is the lack of accessibility in case of an emergency unless one carries a copy of the records on a flash drive or on a data card. Most software versions of PHRs are available at a cost to consumers.</p>

				<p>Internet versions of PHRs are very new having just been developed over the past 1-2 years. Through the web, consumers may access their private PHR accounts by connecting to the Internet and logging in with their username and password. Information may easily be updated, and consumers may elect to share information with specific individuals of their choosing. The major advantage is the access and availability of information in emergency situations – all one needs is Internet connection and logon information. </p>

				<p>If you are looking at an internet-based PHR, it is very important that the provider describes security and privacy standards that are in place to protect the information being stored. We will look at a few examples in the next section.</p>

				<p>
					<a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/Activity_Self_Awareness_Survey.doc'); ?>" target="_blank" class="button">Download Activity</a>
				</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-10" class="course-slide">
			<div class="content">
				<h2 class="flowers">Activity – reviewing internet-based PHR tools </h2>
				<hr />

				<h4>My Family Health Portrait</h4>

				<p>My Family Health Portrait is a web-based program developed from the U.S. Department of Health and Human Services, Family History Initiative. This initiative is designed to encourage families to learn more about their family health history. Because health providers have long understood that common illnesses can run in families (like high blood pressure, diabetes, and heart disease – to name a few), tracing illnesses experienced by your parents, grandparents, and other blood relatives may help your physician predict disorders to which you may be at risk and take preventive action.</p>

				<p>My Family Health Portrait helps users organize family history information, save it to their own computer, and print a hard copy to take to the physician’s visit. Additionally, users may grant permission for other family members to view information on their website.</p>

				<p>
					Visit the <a href="https://familyhistory.hhs.gov/fhh-web/home.action" target="_blank">My Family Health Portrait</a> website.
				</p>

				<p>Read the section on the website, “Learn More About My Family Health Portrait” to answer the following questions.</p>

				<ol>
					<li>Why is completing a family health history important?</li>
					<li>What is done to assure that my information is private that I enter in My Family Health Portrait?</li>
					<li>What does it mean that this tool is EHR (Electronic Health Record) ready? How does this benefit me?</li>
					<li>What is “clinical decision support”? How does it benefit me?</li>
				</ol>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-11" class="course-slide">
			<div class="content">
				<h2 class="flowers">Activity – reviewing internet-based PHR tools</h2>
				<hr />
				<h4>Google Health</h4>

				<p>Google offers a free, secure web-based program to store and manage health information in a central place. Information is accessible anywhere and at anytime. In addition to health information, test results, x-rays, and other scans may be easily uploaded into your PHR. You may also keep track of test results and laboratory values visually to see how you progress over time. Finally, you may print a wallet card to carry your health profile with you. </p>

				<p>Click on the following link to view a brief video taking you on a tour of Google Health.</p>

				<h4>Video – Introduction to Google Health</h4>

				<iframe style="width: 640px; height: 360px; frameborder: 0;" src="//www.youtube.com/embed/yNe6-p4G7Ik" allowfullscreen></iframe>

				<p>To summarize aspects of Google Health:</p>

				<ul>
					<li>Store and manage all health information securely.</li>
					<li>Create and save a health profile and link to numerous resources to learn more about symptoms, causes, and treatments.</li>
					<li>Import medical record files and prescription history through links with partners such as hospitals, labs, pharmacies, and insurance companies.</li>
					<li>Track your medical history to keep your physician updated.</li>
					<li>Learn how medications may interact through an integrated program that checks for potential problems between drugs.</li>
					<li>Select those with whom you want to share key medical information.</li>
				</ul>


			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-12" class="course-slide">
			<div class="content">
				<h2 class="flowers">Activity – reviewing internet-based PHR tools </h2>
				<hr />
				<h4>ProfileMD</h4>

				<p>The final PHR tool we will review is one of the latest Internet-based programs designed for Smartphones. ProfileMD is a freeware PHR that allows immediate access to medical health history and information via your smart phone. </p>

				<p>Download the software to your computer and sync with your handheld device.</p>

				<p>If the files do not download, go to one of these websites to download the software:</p>

				<p>
					<a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/ProfileMDClassic106.zip'); ?>" target="_blank" class="button">Download Zip</a>
				</p>

				<p>
					<a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/ProfileMDClassic106.sit'); ?>" target="_blank" class="button">Download Sit</a>
				</p>

				<p>
					<a href="http://download.cnet.com/Profile-MD/3640-2094_4-23947.html" target="_blank">Download Site for ProfileMD</a>
				</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-13" class="course-slide">
			<div class="content">
				<h2 class="flowers">Exercise – CARE Coaching and Selecting PHRs</h2>
				<hr />

				<p>Asking the right questions is key to determine which PHR product is right for you and your family. This exercise is designed to help you determine exactly that. Review the previously described Internet-based tools, My Family Health Profile and ProfileMD, and respond to the following questions.</p>

				<p>Please note that you may print or save any activities from this course for future reference.</p>

				<p>
					<a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/Exercise_CARE_Coaching_and_Selecting_PHRs.docx'); ?>" target="_blank" class="button">Download Activity</a>
				</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-14" class="course-slide">
			<div class="content">
				<h2 class="flowers">Emergency contact information list</h2>
				<hr />

				<p>In some situations where you as a family caregiver may feel you just don’t have enough time at this point to put together a PHR for your older parents. You may also find that your parents are just not ready to share a more comprehensive profile of their entire health history at this point in their lives.</p>

				<p>You may then suggest completing an emergency contact information list as a first step. You may suggest to them that they keep a copy in their home in a location convenient to both of them and also provide you a copy for your reference. </p>

				<p>You may download an example of an Emergency Contact Information Sheet below.</p>

				<p>
					<a href="<?php echo $this->createDownloadUrl('managinghealthinformationwithapersonalhealthrecord/Emergency_Contact_Information_Sheet.doc'); ?>" target="_blank" class="button">Download Activity</a>
				</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-15" class="course-slide">
			<div class="content">
				<h2 class="flowers">Congratulations on completing the course!</h2>
				<hr />

				<p>Let’s summarize the top five points we covered in this course:</p>

				<ol>
					<li>Personal Health Records (PHR) are easy-to-use tools to help manage health information in a single place. </li>
					<li>A PHR for your older parents has several benefits including:</li>

					<ul>
						<li>Allow sharing health information among multiple health care providers</li>
						<li>Track appointments and outcomes between health care visits</li>
						<li>Provide a comprehensive list of past and current medications</li>
						<li>Improve the physician visit experience</li>
					</ul>

					<li>Releasing of one’s personal health information is protected by law, and so health care providers cannot share protected health information of someone else (even close relatives) without their written permission.</li>
					<li>PHRs may be kept as hard copy or electronically. In considering a format, look at accessibility, convenience, and ease of updating.</li>
					<li>There are several software versions of PHRs as well as Internet versions. Security is a very important consideration when reviewing Internet versions where information may be stored outside of your computer.</li>
				</ol>

			</div>
			<div class="buttons">
				<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Course </a>
			</div>
		</div>


		<!--
<div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
        <div class="content">
            <h2 class="flowers">Contact Facilitator</h2>
            <hr/>
            <p>Please complete the form below to contact your facilitator.</p>

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
    <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Close </a>
</div>
</div>

            -->


		<!-- need final 2 divs to close course and lesson id -->

	</div>
</div>
