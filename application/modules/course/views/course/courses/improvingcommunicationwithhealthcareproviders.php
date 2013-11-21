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
     style="background-image: url(<?php echo $this->getImagesUrl('improvingcommunicationwithhealthcareproviders/153233524.png'); ?>);">
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
		<h3>Certificate of Completion</h3>

		<p>Click the button below to access your certificate once you have successfully completed the module. You will be able to manually add your name, date, and course title.</p>

		<p>
			<a href="<?php echo $this->createDownloadUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank" class="button">Download Certificate</a>
		</p>
		<img src="<?php echo $this->getImagesUrl('improvingcommunicationwithhealthcareproviders/166312138.png'); ?>" id="certificate" alt="Image">
	</div>
	<div class="box-sidebar one">
		<h3>Facilitator: Ellen Ziegemeier, MA</h3>

		<p>Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She earned her Masters in Anthropology, and has worked locally and abroad - Latin America and South America for various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver training.</p>

		<p>
			<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button"> Contact your Facilitator </a>

		</p>

		<img src="<?php echo $this->getImagesUrl('improvingcommunicationwithhealthcareproviders/80608570.png'); ?>" alt="Facilitator" id="facilitator">
	</div>
	<div class="box-sidebar one">
		<h3>Working Caregivers in America</h3>
		<img src="<?php echo $this->getImagesUrl('care/286x366_Grafix_69pc.png'); ?>" alt="image" class="block center" />

		<p>69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an unpaid leave of absence to meet their care-giving responsibilities.</p>
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
					<a href="<?php echo $this->createDownloadUrl('improvingcommunicationwithhealthcareproviders/Agenda_improvingcommunicationwithhealthcareproviders.pdf'); ?>" target="_blank" class="button">Agenda</a>
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<h5>Becoming a More Confident Caregiver - </h5>
			</td>
			<td>
				<p>
					<a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button"> Start </a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a
						href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
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
				<h2 class="flowers">Improving Communication with Health Care Providers</h2>
				<hr />
				<p>Welcome to the course, “Improving Communication with Health Care Providers.” This course is geared towards family members who provide support or care to an older adult who may be a parent, spouse, other relative, or a significant other.</p>

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

				<p>CARE Coaching considers “real life” situations that family caregivers must often deal with (such as having conversations with aging parents about their needs and preferences for their future care, managing health information, communicating with health care providers, maneuvering the health care system, and addressing home safety issues, to name a few).</p>

				<p>Activities in the course help stimulate “new thinking” by family caregivers providing them with tools to strengthen their knowledge, skills, and self-awareness about their role and responsibilities. As a result, family caregivers can focus on what is most important to be effective in caring for their loved ones.</p>

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
				<h2 class="flowers">Navigating the health care system</h2>
				<hr />
				<p>Talk to anyone today about the state of health care and you will probably get an earful of complaints, “horror” stories, and head shaking. Complaints run the gamut from problems with insurance companies and Medicare, physicians who don’t spend enough time with patients, to quick hospital discharges.</p>

				<p>Here are common issues voiced by older adult patients:</p>

				<ul>
					<li>They cannot get an accurate diagnosis, don't understand they need treatment, and need someone to help them find physicians, or get tests, that can help them.</li>
					<li>They are seeing too many specialists who are not coordinating their care.  They need someone who will take a look at their reams of medical records to help them sort out their treatment. </li>
					<li>They are having trouble with their insurer, who isn’t paying as promised, or who is denying them care.</li>
					<li> They have received physician or hospital bills that they cannot sort out or decipher.  They believe they have been billed for services they did not receive.  They have read that up to 80% of hospital bills are incorrect, and they want someone to help them negotiate with whoever has billed them.</li>
				</ul>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-4" class="course-slide">
			<div class="content">
				<h2 class="flowers">Interacting with the health care system</h2>
				<hr />
				<p>Some of our parents may fondly remember the days when physicians took time with their patients or even came to the home for a visit! We may not be able to “fix” all the problems with the health care system, but what we can do is focus on two things:</p>

				<ul>
					<li>Learning to communicate effectively with health care providers – particularly with physicians – to manage relationships with providers, and </li>
					<li>Becoming empowered with knowledge to better understanding health care and roles of providers.</li>
				</ul>

				<p>Particularly for many older adults, the experience of the patient-physician relationship is really what’s missing in much of today’s health care experience. We can use CARE Coaching techniques to help build that relationship.</p>

				<p>The goal for any patient in the health care system should be to optimize chances of achieving a good outcome when health care is needed. Taking charge of one’s health care is key. For older parents who may not be used to or feel comfortable “taking charge of their health care,” this may be a difficult concept for them. We’ll look at some CARE Coaching techniques to help your parents feel comfortable being in charge.</p>

				<p>This course will also reinforce your important role as “advocate.” So let’s begin with that all important “patient-physician” relationship.</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-5" class="course-slide">
			<div class="content">
				<h2 class="flowers">CARE Coaching: Relating</h2>
				<hr />
				<p>Over the years, the patient-physician relationship has been defined, though rules of ethics and rules of law, as a fiduciary one, as a relationship founded in trust. When a patient seeks out a physician’s help, and the physician agrees to give that help, a special covenant is made. The patient agrees to take the physician into confidence, to reveal intimate information related to one’s health. The physician, in turn, agrees to honor that trust, and to become the patient’s advocate in all health-related matters.</p>

				<p>As a caregiver, you are probably stepping into a situation where your older parents already are seeing one or more physicians for various ailments. Stepping into those relationships can often make you feel like the “third wheel” initially. We are not suggesting that you go to every office visit with your older parents, but in the future, your caregiving role may include and require this so that you may best advocate for you parents. </p>

				<p>This brings us to the third component of CARE Coaching, that of relating. The most important factor in the patient-physician relationship is communicating or relating. It is fairly obvious that if a patient cannot communicate well with his or her physician, that’s a problem. How do you know that your older parents’ physician is relating? Here are some questions to ask your parents:</p>

				<ul>
					<li>Is your physician listening to what you are saying?</li>

					<li>Does your physician show understanding about your concerns by responding meaningfully to them?</li>
					<li>When your physician explains medical issues to you, are they made to be understandable?</li>
					<li>Is your physician patient with you and willing to draw out questions you may have?</li>
				</ul>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-6" class="course-slide">
			<div class="content">
				<h2 class="flowers">Video – How to communicate with the physician</h2>
				<hr />
				<p>Have you ever left a physician's appoinment feeling that your questions weren't answered? Or not sure what you were supposed to do next? Don't worry, you're not alone. Dr. Lori Whittaker, a family physician in Seattle, shares tips and advice for how to speak up for yourself when you're at the physician's office. Good communication is a two-way street, and it's up to you to make sure you get the treatment and the information you need to stay healthy.</p>

				<iframe style="width: 640px; height: 480px; display: block; margin: 15px auto; frameborder: 0;" width="640" height="480" src="//www.youtube.com/embed/rEt8xfQ9z1U?rel=0" allowfullscreen></iframe>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>


		<div id="lesson-1-slide-7" class="course-slide">
			<div class="content">
				<h2 class="flowers">Helping older parents talk to medical professionals about health care</h2>
				<hr />
				<p> Occasionally, it may feel intimidating to speak to physicians for one reason or another. At times, the actions of the physician may make it appear that he or she has little time to spend with us. At other times, we may feel inadequate in our knowledge and use of medical terms, feeling like we speak a different language than physicians.</p>

				<p>Older adults may especially loath to question physicians because they were raised in a generation where physicians were considered to be above reproach. Many of today’s generation of health care professionals encourage questions and want their patients to play a role in their health care.</p>

				<p>In planning for your discussions with your older parents and their physicians, remember that as their caregiver you have an obligation to understand your parents’ medical care.</p>

				<p>Another important consideration for you to understand as the caregiver relates to patient privacy requirements and rights. If you are not the medical guardian (or power of attorney) for your parents, they must give consent for you to get information about their health care.</p>

				<p>On the other hand, if you are the medical guardian of someone and they are either too young, too old or too sick to speak about their medical history themselves, it is perfectly reasonable for you to take that role with health care professionals. Remember to be especially diplomatic with older adults who may take offense at being “spoken for.” Try to work out who will be the chief medical historian and speaker before you enter the physician’s office.</p>

				<p>The next exercise will coach you through learning to use “PowerPhrases” – short, specific expressions that get results by saying what you mean and meaning what you say. By planning some specific phrases to use in advance of a physician’s appointment, older adults find that they can impact the outcome of the interaction.</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-8" class="course-slide">
			<div class="content">
				<h2 class="flowers">Exercise – how are you with PowerPhrases?</h2>
				<hr />
				<p>How familiar does this sound? George has been waiting in the exam room for his physician to come in for over 50 minutes. He has counted the floor and ceiling tiles at least six times and needs to use the bathroom out in the hall, but is unwilling to get up with just the examining gown to cover him.</p>

				<p>When George’s physician entered, he seemed rush and distracted. He glanced at George’s file and talked rapidly throughout the brief exam. George has several questions that he wanted to discuss that were very personal. Because the physician seemed so rushed, George was not comfortable asking his questions.</p>

				<p>The physician told George that his blood pressure was high and he was going to give him a prescription for something (he didn’t say what!). The physician walked out. A few minutes later, a nurse walked in and handed George a prescription telling him that he may get dressed now. George figured that he would just have to ask his pharmacist the questions.</p>

				<p>Given the pressures of managed care, it is common for physicians to space appointments 15 minutes apart. The need for expediency can result in communication breakdowns that may result in inadequate care or serious consequences.</p>

				<p>A “PowerPhrase” is a short, specific expression that gets results by saying what it means and meaning what it says (without being cruel!). By planning specific phrases to use prior to an appointment, the results can be much more favorable to the patient.</p>

				<p>Let’s do an exercise to see your current “PowerPhrase” skill level. Click on the following link to take a quick survey.</p>

				<p>
					<a href="<?php echo $this->createDownloadUrl('improvingcommunicationwithhealthcareproviders/Exercise_PowerPhrase_Survey.doc'); ?>" target="_blank" class="button">Download Survey</a>
				</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-9" class="course-slide">
			<div class="content">
				<h2 class="flowers">Activity – practicing PowerPhrases with your health provider</h2>
				<hr />
				<p>Now that you have assessed your PowerPhrase skill level, we will now focus on PowerPhrases related to your health care provider to ensure a positive visit. By planning specific phrases to use in advance of the appointment, the patient can impact the outcome of the visit. You may find these helpful not only for your older parents, but also for your own use when visiting your physician.</p>

				<p>Here is another typical scenario. You are visiting your mother one Sunday afternoon. You notice that she appears to be limping and favoring one side when she walks. You say, “Mom, I noticed you are limping. Are you having some difficulty walking?” </p>

				<p>She says, “Yes, my left shin is very painful. It’s been like this for about a week.” You ask to see her shin and you notice that there is redness and swelling. She tells you that she will be seeing her physician this Thursday. You offer to accompany her, and she agrees.</p>

				<p>On Thursday, you take her to her appointment and accompany her to the exam room. Dr. Palmer enters and asks your mom how she is feeling. Your mom replies, “Fine, thank you.” Dr. Palmer reviews the laboratory results and says, “Your iron level is a bit low. I’ll give you a B12 injection and you’ll feel as good as new!” “Thank you, physician,” replies your mom. With that the physician exits to see his next patient.</p>

				<p>What just happened here? Unfortunately for many older adults, this is a typical office visit. Without some preplanning for the visit and selection of PowerPhrases, that potentially serious problems may go unaddressed.</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-10" class="course-slide">
			<div class="content">
				<h2 class="flowers">PowerPhrases in action</h2>
				<hr />

				<p>Think of PowerPhrases as the means to tell the physician exactly what he or she needs to know. You or your older parent should not leave the visit until all your questions are answered.</p>

				<p>Here are some starter PowerPhrases to be used in response to the physician’s opening question “How are you doing?”:</p>

				<ul>
					<li>“I have a pain in my... that started about..."</li>
					<li>“My symptoms are….”</li>
				</ul>

				<p>With these simple prompts, the physician can begin the exam with the understanding of “what brought you here today.”</p>

				<p> It is important that your older parent brings a list of pertinent information to readily provide the physician with details that may be important. The Physician visit is also an opportunity to learn more about potential issues that may arise, say from drug interactions. Some PowerPhrases include:</p>

				<ul>
					<li>“These are the medications I am currently taking…..”</li>
					<li>“These are the vitamins and herbs I take….Which of these may interact with my medications?”
					
					
					<li>“What does this drug do?”</li>
					</li>
				</ul>


				<p>At times, you or your older parent may feel rushed. It is essential that you or your older parent feels comfortable saying so to the physician. This one may take practice!</p>

				<p> Some PowerPhrases are:</p>

				<ul>
					<li>“I am aware that you are busy. However, I am feeling rushed and I need to be sure that my questions are answered. Please give me the time I need.”</li>
					<li>“I’m not comfortable with how fast you are talking. I need you to slow down and help me understand.”
					
					
					<li>“I understand that you are busy. However, I want to make sure you understand my symptoms and that I learn everything you can teach me about my condition and care.”</li>
					</li>
				</ul>

				<p>For this activity, you will prepare for the physician visit and practice PowerPhrases. You may want to practice with your older parent or you may role play with your spouse, relative, or friend.</p>

				<p>
					<a href="<?php echo $this->createDownloadUrl('improvingcommunicationwithhealthcareproviders/Activity_Practicing_PowerPhrases_with_Your_Health_Provide.docx'); ?>" target="_blank" class="button">Download Activity</a>
				</p>

				<p>Self-Coaching Hint: Be assertive but not aggressive in communicating with your parent’s physicians. Most physicians and other health care professionals today want to ask questions and be asked about health care issues by their patients.</p>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-11" class="course-slide">
			<div class="content">
				<h2 class="flowers">Learning what you need to know about the health care system</h2>
				<hr />

				<p>Learning what you need to know about the health care system can seem a daunting task. We break down some of the core components that are key for you to understand as caregivers for older parents.</p>

				<p>This information is not meant to be comprehensive, but provides you a starting point to better understand the complexities that are today’s health care system.</p>

				<table>
					<tr>
						<td>
							<p>People - </p>
						</td>
						<td>
							<a href="<?php echo $this->createDownloadUrl('improvingcommunicationwithhealthcareproviders/People.docx'); ?>" target="_blank" class="button">Download Handout</a>
						</td>
					</tr>
					<tr>
						<td>
							<p>Places - </p>
						</td>
						<td>
							<a href="<?php echo $this->createDownloadUrl('improvingcommunicationwithhealthcareproviders/Places.docx'); ?>" target="_blank" class="button">Download Handout</a>
						</td>
					</tr>
					<tr>
						<td>
							<p>Things and More Things - </p>
						</td>
						<td>
							<a href="<?php echo $this->createDownloadUrl('improvingcommunicationwithhealthcareproviders/Things_and_More_Things.docx'); ?>" target="_blank" class="button">Download Handouty</a>
						</td>
					</tr>
				</table>

			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>

		<div id="lesson-1-slide-12" class="course-slide">
			<div class="content">
				<h2 class="flowers">Congratulations on completing the course!</h2>
				<hr />

				<p>Let’s summarize the top five points we covered in this course:</p>

				<ol>
					<li>The goal for any patient in the health care system should be to optimize one’s chances of achieving a good outcome when health care is needed. Taking charge of one’s health care is key.</li>
					<li>The third component of CARE Coaching is Relating. The most important factor in the patient-physician relationship is communicating or relating.</li>
					<li>In planning for your discussions with your older parents and their physicians, as their caregiver you have an obligation to understand your parents’ medical care as well as patient privacy requirements and rights. If you are not the medical guardian (or power of attorney) for your parents, they must give consent for you to get information about their health care. Try to work out who will be the chief medical historian and speaker before you enter the physician’s office.</li>
					<li>A “PowerPhrase” is a short, specific expression that gets results by saying what it means and meaning what it says. By planning specific phrases to use prior to an appointment, the results can be much more favorable to the patient since the physician can begin the exam with the understanding of “what brought you here today.”</li>
					<li>Be assertive but not aggressive in communicating with your parent’s physicians. Most physicians and other health care professionals today want to ask questions and be asked about health care issues by their patients.</li>
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
					<hr />
					<p>Please complete the form below to contact your facilitator.</p>

					<div class="box-white">
						<?php
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
                ?>
					</div>


				</div>
				<div class="buttons">
					<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Close </a>
				</div>
			</div>

			<!-- need final 2 divs to close course and lesson id -->

		</div>
	</div>