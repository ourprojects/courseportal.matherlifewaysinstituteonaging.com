<?php

$this->breadcrumbs = array('Courses' => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach (array(
	'.lesson-1',
	'.lesson-2',
	'.lesson-3',
	'.lesson-4',
	'.lesson-5',
	'.lesson-6') as $lesson)
	$this->widget(
		'ext.fancybox.EFancyBox',
		array('id' => $lesson,
			'config' => array('width' => '720px',
				'height' => '1000px',
				'arrows' => false,
				'autoSize' => false,
				'mouseWheel' => false))
	);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('intro/99931457r.png'); ?>);">
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
		<img src="<?php echo $this->getImagesUrl('intro/166312138.png'); ?>" id="certificate" alt="Image">
	</div>
	<div class="box-sidebar one">
		<h3>Facilitator: Jon Woodall</h3>

		<p>Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs.</p>

		<p>
			<a href="#lesson-6-slide-1" data-fancybox-group="lesson-6" class="teal lesson-6 button">Contact Facilitator</a>
		</p>
		<img src="<?php echo $this->getImagesUrl('intro/200488040-001.png'); ?>" alt="Facilitator" id="facilitator">
	</div>
	<div class="box-sidebar one">
		<h3>Working Caregivers in America</h3>
		<img src="<?php echo $this->getImagesUrl('intro/286x366_Grafix_69pc.png'); ?>" alt="image" class="block center" />

		<p>69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an unpaid leave of absence to meet their caregiving responsibilities.</p>
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
	<h4>Objectives</h4>
	<ul>
		<?php
		foreach ($course->objectives as $objective)
			echo '<li>' . t($objective->text) . '</li>';
		?>
	</ul>
	<h4>Course Modules</h4>
	<ul>
		<li>
			<a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> Defining, Describing &amp; Understanding Caregiving </a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
		</li>
		<li>
			<a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> Current Data, Trends &amp; Research on US Caregivers </a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a>
		</li>
		<li>
			<a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> General Challenges Associated with Caregiving </a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
		</li>
		<li>
			<a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> Impact on the Workplace &amp; the Economy </a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-11" data-fancybox-group="lesson-4" class="hide lesson-4"></a>
			<a href="#lesson-4-slide-12" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-13" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-14" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-15" data-fancybox-group="lesson-4" class="hide lesson-4"></a>
		</li>
		<li>
			<a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> The Future of Caregiving in the US </a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a>
		</li>
	</ul>
	<h4>Resources</h4>

	<p>Please use these listed resources for additional reading. Please contact your course facilitator if you have additional resources you would like to see added here.</p>
	<ul id="resources">
		<li>
			<a href="http://www.alz.org" target="_blank">Alzheimer's Association</a>
		</li>
		<li>
			<a href="http://www.nih.gov" target="_blank">National Institute on Health (NIH)</a>
		</li>
		<li>
			<a href="http://pewinternet.org" target="_blank">Pew Internet &amp; American Life Project</a>
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

<!-- Lesson 1 - slide #1 -->

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
				<h2 class="flowers">Introduction to Caregiving Online</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/78365380.png'); ?>" alt="Tutorial" />
				<h4>Welcome</h4>

				<p>Few are fully prepared for the responsibilities and tasks involved in caring for the elderly. As a caregiver, it is important to have a clear plan or guide that has multiple paths. This in-depth, five-module online course introduces the basics of the caregiver role and explorers the challenges and experiences associated with elder-care. Topics will include; understanding caregiving, current data and research related to caregiving, describing the caregiver role and the challenges associated with it.</p>
				<h4>Course Objectives</h4>
				<ol>
					<li>Summarize the role and purpose of a caregiver</li>
					<li>Locate and analyze current data and trends related to US caregivers</li>
					<li>Identify challenges related to caregiving</li>
				</ol>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Course &raquo;</a>
			</div>
		</div>
		<div id="lesson-1-slide-2" class="course-slide">
			<div class="content">
				<h2 class="flowers">Modules</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/157999502.png'); ?>" alt="Tutorial" />
				<ol>
					<li>Defining, Describing &amp; Understanding Caregiving</li>
					<li>Current Data, Trends &amp; Research on US Caregivers</li>
					<li>General Challenges Associated with Caregiving</li>
					<li>Impact on the Workplace &amp; the Economy</li>
					<li>The Future of Caregiving in the US</li>
				</ol>
				<h4>Snapshot</h4>
				<h5>Caregiver Population -</h5>

				<p>Millions of people in the U.S. provide care for a chronically ill, disabled or aged family member or friend during any given year and spend many hours per week providing care for their loved one.</p>

				<p class="forum">Search the Internet for current data on the number of people in your country that provide care to an older adult, and post your findings on the Forum.</p>
				<!--
<div id="question" class="question">
  <p class="forum">Seach the Internet for current data on the number of people in your country that provide care to an older adult, and post your findings on the Forum.</p>
  <form method="get" action="http://www.google.com/search" target="_blank">
    <input type="text" id="google-search" name="q" size="65" maxlength="255" value="" />
    <input type="submit" value="Google Search" class="teal" />
  </form>
</div>
-->
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-1-slide-3" class="course-slide">
			<div class="content">
				<h2 class="flowers">Defining, Describing &amp; Understanding Caregiving</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/147800069.png'); ?>" alt="Tutorial" />

				<p>In this module, we will:</p>
				<ul>
					<li>Locate, define and summarize caregiving and it's characteristics</li>
					<li>Describe the caregiver role</li>
					<li>Explore different types of US caregivers</li>
				</ul>
				<h5>Your Definition of Caregiving</h5>

				<p class="forum">Create your own definition or description of caregiving, and post your response on the Forum. Please use the Internet to help create your definition.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-1-slide-4" class="course-slide">
			<div class="content">
				<h2 class="flowers">Defining Caregiving</h2>
				<hr />
				<p>
					<a href="http://www.merriam-webster.com/dictionary/caregiving" target="_blank">Merriam-Webster's</a> dictionary defines <i>caregiving</i> as a person who provides direct care (as for children, elderly people, or the chronically ill). <a href="http://www.caregiver.org/caregiver/jsp/content_node.jsp?nodeid=439" target="_blank">The Family Caregiver Alliance</a> defines the term caregiver as anyone who provides assistance to someone else who is, to some degree, incapacitated and needs help performing the daily tasks essential to living a normal life. This would include persons providing care for: a husband who has suffered a stroke, a wife with Parkinson's disease, a mother-in-law with cancer, a grandfather with Alzheimer's disease, a loved one with traumatic brain injury, a friend with AIDS, a child with muscular dystrophy, an elder who is very frail.
				</p>

				<p>More specifically, A a caregiver is an unpaid family member, friend, or neighbor who provides care to an individual who has an acute or chronic condition and needs assistance to manage a variety of tasks, from bathing, to medication administration, to symptom monitoring. For our purposes, a caregiver is an unpaid individual (a spouse, significant other, family member, friend, or neighbor) involved in assisting others who are unable to perform certain activities on their own.</p>

				<p>
					<a href="http://www.aarp.org/research/ppi/" target="_blank">The AARP Public Policy Institute</a> reports that in 2009, about 42.1 million family caregivers in the United States provided care to an adult with limitations in daily activities at any given point in time, and about 61.6 million provided care at some time during the year. The estimated economic value of their unpaid contributions was approximately $450 billion in 2009, up from an estimated $375 billion in 2007. That's a lot of money and a lot of caregivers!
				</p>

				<p>
					Please search the Internet and read the following reports to get a better understanding of <i>caregiving</i>:
				</p>
				<ul>
					<li>The MetLife Study of Caregiving Costs to Working Caregivers - Double Jeopardy for Baby Boomers Caring for Their Parents</li>
					<li>A study by the National Alliance for Caregiving and United Healthcare - The e-Connected Family Caregiver</li>
					<li>Conducted by the National Alliance for Caregiving and Funded by the United Health Foundation Caregivers of Veterans – Serving on the Home front</li>
					<li>National Alliance for Caregiving in Collaboration with AARP; Funded by The MetLife Foundation - Caregiving in the U.S. 2009</li>
				</ul>
				<p class="forum">After learning how several organizations define caregiving, would you consider yourself a caregiver and why?</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-1-slide-5" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Caregiver Role</h2>
				<hr />
				<p>Being in the caregiver role does not only mean taking care of people, but communicating with the people you care for and the rest of their health team in an effective way. As a caregiver, nonverbal communication is a big deal, certain body language and gestures need to be avoided in order not to give people the wrong idea of a caregiver. Inappropriate, accidental, or improper gestures in a nonverbal manner can cause a negative environment for all parties involved and can cause a lack of trust, resulting in a breakdown in the communication process. Through communication, we have to offer the presence of caring, comfort, support, and respect.</p>

				<p>Caregivers must quickly develop strategies for active, critical, and empathic listening, recognizing how words have the power to create and affect attitudes, behavior, and perception, and finally, understanding how perceptions, emotions, and nonverbal expressions affect relationships.</p>

				<p>Developing these strategies (for active, critical, and empathic listening, three types of listening) are important in communication because listening and responding appropriately results in better care and can build a better relationship between the caregiver and the person receiving care.</p>
				<h5>Active listening -</h5>

				<p>is being mentally engaged in the needs of what the person is expressing.</p>
				<h5>Critical listening -</h5>

				<p>is observing the steps that the caregiver will take in carrying out the needs the person is expressing.</p>
				<h5>Empathic listening -</h5>

				<p>is understanding what the person is saying from their perspective and repeating back to them the importance of their needs being taken care of. Empathic listening is important because caregivers have to show the person being cared for caring and compassion. In order for the person receiving care to get the best care possible, caregivers need to listen and make sure the correct care is received.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-1-slide-6" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Caregiver Role (continued)</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/76946582.png'); ?>" alt="Tutorial" />

				<p>More importantly, care receivers need to be secure in knowing that the caregiver can perform the persons' basic needs, since they can no longer do it for themselves. Those needs may include:</p>
				<ul>
					<li>Physical needs</li>
					<li>Safety and security needs</li>
					<li>Loving and belonging needs</li>
					<li>Self-esteem needs, and</li>
					<li>Self- actualization needs</li>
				</ul>
				<p class="forum">Please search the Internet for detailed information and descriptions on these topics listed above, and post your findings on the Forum.</p>

				<p>The caregiver must be able to listen and focus on these needs through verbal and nonverbal messages of the person receiving care. They must develop a strategy over the years, keeping in mind the caregiver at all times, maintaining respect and understanding cultural and religious differences. Caregivers contribute more than any other member of the health team to the physical, psychological, spiritual, and most important, social aspects of a person’s care. Now, let's look at a real-life caregiving situation and see how one family copes.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="Tutorial" />
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-1-slide-7" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Sandwich Generation - MediaStorm</h2>
				<hr />
				<p>Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur's 83-year-old father, Herbie, became too infirm to care for himself. At that moment they joined some twenty million other Americans who make up the sandwich generation, those who find themselves responsible for the care of both their children and their aging parents.</p>

				<p>
					Authors of the book <i>Aging in America: The Years Ahead</i>, which chronicles the country's fastest-growing segment of the population, Winokur and Kashi decided to tell their own story as they took on the care of Winokur's father. In The Sandwich Generation, they have created an honest, intimate account of their own shifting — and challenging — responsibilities, as well as some of their unexpected joys.
				</p>

				<div style="width: 400px;" id="video">
					<div style="height: 340px;">
						<script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e4eb092b527c88685918&w=400&h=340&amp;lang=none"></script>
					</div>
					<div style="padding: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16px; color: #999999; background-color: #000000;">
						Millions of middle-aged Americans are caring for their children as well as their aging parents. When filmmaker-photographer pair Julie Winokur and Ed Kashi took in Winokur's 83-year-old father, they decided to document their own story. See the project at <a href="http://mediastorm.com/publication/the-sandwich-generation" target="_blank" style="color: #0083c5;">http://mediastorm.com/publication/the-sandwich-generation</a>
					</div>
				</div>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-1-slide-8" class="course-slide">
			<div class="content">
				<h2 class="flowers">Types of Caregivers in the US</h2>
				<hr />
				<p>
					While many consider caring for a parent and/or grandparent the summation of the term <i>caregiving</i>, there are many more roles that are included when defining caregiving. As you have read in the reports listed above, caring for those other than our parents and/or grandparents also puts you in a caregiving role.
				</p>

				<p>
					As reported by the <a href="http://www.caregiverresource.net" target="_blank">Caregiver Network Resource</a>, caregivers are wives, husbands, parents, children, friends, employees… Types of caregivers include:
				</p>
				<ul>
					<li>
						<b>Crisis Caregiver</b>: Your family member manages most of the time on their own until there is an emergency.
					</li>
					<li>
						<b>Primary Caregiver</b>: Your family member depends on you for regular assistance for two or more activities in their life. You make decisions that directly affect them. You may act as their representative in situations. You provide hands-on assistance with basic daily tasks (bathing, dressing, transportation, money matters, etc.)
					</li>
					<li>
						<b>Secondary Caregiver</b>: Your parent, sibling, spouse, etc. functions as the primary caregiver and you provide assistance to them.
					</li>
				</ul>
				<p class="forum">Search the Internet and research other types of caregivers. Post your findings on the Forum</p>

				<p>Whether you are an informal caregiver caring for a relative, or a professional caregiver - all caregivers share certain experiences. For many people, caregiving isn't a job or a duty. It is doing what is right for a loved one. Caregiving is an unspoken promise that so many of us make in our relationships, to be there for our loved ones when they need us. Unfortunately, few people have the time, resources or ability to care for their aging or disabled loved one without any help. It is important as a caregiver to know your limits, take care of yourself, know your resources in the community, and understand the wants and needs of the person needing care.</p>

				<p class="forum">On the Forum, post what type of caregiver you are and explain your caregiving situation. Search You Tube for postings that people have left explaining their caregiving situation. If possible, record and post your own video and monitor the responses over the next 5 weeks.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="Tutorial" />
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-1-slide-9" class="course-slide">
			<div class="content">
				<h2 class="flowers">Closing</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/imsis530-020.png'); ?>" alt="Tutorial" />

				<p>Whether you are an informal caregiver caring for a relative, or a professional caregiver - all caregivers share certain experiences. For many people, caregiving is not a job or a duty. It is doing what is right for a loved one.</p>

				<p>Caregiving is an unspoken promise that so many of us make in our relationships, to be there for our loved ones when they need us. Unfortunately, few people have the time, resources or ability to care for their aging or disabled loved one without any help. It is important as a caregiver to know your limits, take care of yourself, know your resources in the community, and understand the wants and needs of the person needing care.</p>

				<div id="question1" class="question">
					<p>
						<b>Listening and responding appropriately results in better care and can build a better relationship.</b><br />
						<select>
							<option selected="selected" value="select">Select</option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select>
					</p>
					<p class="right-answer hide">Correct! Strategies for active, critical, and empathic listening are important.</p>

					<p class="wrong-answer hide">Please review this module again, and understand the caregiver role before continuing.</p>
				</div>
				<p>Search You Tube for postings that people have left explaining their caregiving situation. If possible, record and post your own video and monitor the responses over the next 5 weeks.</p>
			</div>
			<div class="buttons">
				<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Module</a>
			</div>
		</div>
	</div>
	<div id="lesson-2">
		<div id="lesson-2-slide-1" class="course-slide">
			<div class="content">
				<h2 class="flowers">Current Data, Trends &amp; Research</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/157743677.png'); ?>" alt="Tutorial" />

				<p>In this module, we will:</p>
				<ul>
					<li>Locate and explore current data on US caregivers</li>
					<li>Locate and explore current trends on US caregivers</li>
					<li>Locate and explore current research on US caregivers</li>
				</ul>
				<div id="question1" class="question">
					<p>
						<b>According to the Administration on Aging, in 2030, all <i>baby boomers</i> will be at least 65 years old; this age group is projected to be 71 million.
						</b><br />
						<select>
							<option selected="selected" value="select">Select</option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select>
					</p>
					<p class="right-answer hide">
						Correct! According the AoA website, by 2030 all <i>baby boomers</i> will be at least 65.
					</p>

					<p class="wrong-answer hide">Please review this module again, and understand the caregiver role before continuing.</p>
				</div>
				<p>
					The information supplied by the <a href="http://www.aoa.gov" target="_blank">Administration on Aging</a> website is a great reference and resource for current and future caregivers. There vision is to serve a growing senior population, ensuring the continuation of a vibrant aging services network at State, Territory, local and Tribal levels through funding of lower-cost, non-medical services and supports that provide the means by which many more seniors can maintain their independence.
				</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
			</div>
		</div>
		<div id="lesson-2-slide-2" class="course-slide">
			<div class="content">
				<h2 class="flowers">Data on US Caregivers</h2>
				<hr />
				<p>The older population--persons 65 years or older -- are a large portion of the US population. They represent more than 10% of Americans. By 2030, there will be more than 70 million older persons, more than twice their number in 2000. People 65+ represented more than 10% of the population in the year 2000 but are expected to grow to be appropriately 20% of the population by 2030.</p>

				<p class="forum">Search the following website to research data on the number of US caregivers, and post your findings to the Forum: National Institutes of Health, Alzheimer's Association, and National Alliance for Caregivers.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="Tutorial" />

				<p>
					As reported by the <a href="http://caregiveraction.org" target="_blank">National Family Caregivers Association (NFCA)</a>, here is a snapshot of statistics on family caregivers and family caregiving:
				</p>
				<h5>Caregiving Population</h5>
				<ul>
					<li>More than 65 million people, 29% of the U.S. population, provide care for a chronically ill, disabled or aged family member or friend during any given year and spend an average of 20 hours per week providing care for their loved one.</li>
					<li>The value of the services family caregivers provide for "free," when caring for older adults, is estimated to be $375 billion a year. That is almost twice as much as is actually spent on home care and nursing home services combined ($158 billion).</li>
					<li>The typical family caregiver is a 49-year-old woman caring for her widowed 69-year-old mother who does not live with her. She is married and employed. Approximately 66% of family caregivers are women. More than 37% have children or grandchildren under 18 years old living with them.</li>
				</ul>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-2-slide-3" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Data</h2>
				<hr />
				<h5>Economics Of Caregiving</h5>
				<ul>
					<li>Women who are family caregivers are 2.5 times more likely than non-caregivers to live in poverty and five times more likely to receive Supplemental Security Income (SSI).</li>
					<li>Caregiving families (families in which one member has a disability) have median incomes that are more than 15% lower than non-caregiving families. In every state and DC the poverty rate is higher among families with members with a disability than among families without.</li>
					<li>During the 2009 economic downturn, 1 in 5 family caregivers had to move into the same home with their loved ones to cut expenses.</li>
				</ul>
				<h5>Impact on Family Caregiver's Health</h5>
				<ul>
					<li>23% of family caregivers caring for loved ones for 5 years or more report their health is fair or poor.</li>
					<li>Stress of family caregiving for persons with dementia has been shown to impact a person's immune system for up to three years after their caregiving ends thus increasing their chances of developing a chronic illness themselves.</li>
					<li>Nearly three quarters (72%) of family caregivers report not going to the doctor as often as they should and 55% say they skip doctor appointments for themselves. 63% of caregivers report having poor eating habits than non-caregivers and 58% indicate worse exercise habits than before caregiving responsibilities.</li>
				</ul>
				<h5>Caregiving and Work</h5>
				<ul>
					<li>Six in 10 family caregivers are employed.</li>
					<li>73% of family caregivers who care for someone over the age of 18 either work or have worked while providing care; 66% have had to make some adjustments to their work life, from reporting late to work to giving up work entirely; and 1 in 5 family caregivers have had to take a leave of absence.</li>
					<li>64% of working parents caring for a special needs child believe that caregiving responsibility has negatively impacted their work performance.</li>
				</ul>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-2-slide-4" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Data</h2>
				<hr />
				<h4>Caregiving and Health Care</h4>

				<p>22% of family caregivers say they need help communicating with physicians. Focus group research suggests that family caregivers do not recognize that public policy has a direct impact on their day-to-day lives. Many are uncomfortable even thinking there might be a connection.</p>
				<h5>Caregiving Self-Awareness</h5>
				<ul>
					<li>Over 90% of family caregivers become more proactive about seeking resources and skills they need to assist their care recipient after they have self-identified.</li>
					<li>83% of self-identified family caregivers believe their self-awareness led to increased confidence when talking to healthcare professionals about their loved one's care.</li>
					<li>For over 75% of family caregivers it was the act of helping their loved one with personal care that contributed to their self-identification.</li>
				</ul>
				<h5>State by State Statistics</h5>

				<p>There are many reports that detail the economic value of family caregiving in a state-by-state comparison of the number of family caregivers in the country, the number of hours they spend on caregiving responsibilities, and the market value of those services. Also reported, the most recent estimate of the value of family caregivers' services can reach hundreds of billions of US dollars, annually.</p>

				<div id="question" class="question">
					<p class="forum">Search the Internet and read the most current report titled: Economic Value of Informal Caregiving.</p>

					<form method="get" action="http://www.google.com/search" target="_blank">
						<input type="text" id="google-search" name="q" size="65" maxlength="255" value="" />
						<input type="submit" value="Google Search" class="teal" />
					</form>
				</div>
				<p class="forum">Search the Internet, and read the most up-to-date report titled: Alzheimer’s Disease Facts and Figures. Post your thoughts and any statistical data about your region or state to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-2-slide-5" class="course-slide">
			<div class="content">
				<h2 class="flowers">Trends on US Caregivers</h2>
				<hr />
				<p>Families have always been the primary source of support for older people in America. In fact, most of all the long-term care services used by older adults are provided by family and friends. Today, however, sweeping social, demographic, economic, and technological changes underway in the U.S. are altering the face of family caregiving and challenging families’ ability to carry on this tradition. Key among these changes are:</p>
				<ul>
					<li>the aging of the American population,</li>
					<li>the aging of the American workforce,</li>
					<li>an increasing number of women in the workforce,</li>
				</ul>
				<h5>The American population is aging</h5>

				<p>Over the last century, the proportion of older Americans tripled. This aging of the population resulted not only from increases in life expectancy, but also because of a decline in the birth rate. In 2000, there were about 35 million Americans over the age of 65 representing 12.4% of the American population. By 2020, persons aged 65 or older are expected to comprise 20% of the U.S. population. And by 2030, older Americans are projected to outnumber children under the age of 18.</p>

				<p>There are more than 13 million Americans with long-term care needs in the U.S., more than half of whom are over the age of 65. Over the next 25 years, as the Baby Boom generation ages, some have estimated that the number of persons requiring long-term care may double. Among the older adult population, those 85 years of age and older showed the highest percentage increase between 1990 and 2000, growing by 38%. Although the disability rates of older adults have declined, advanced age remains associated with an increased risk of chronic illness and need for assistance in performing activities of daily living. In fact, almost half of people aged 85+ need assistance with the activities of daily living.</p>

				<p>In addition, increased longevity may mean that there will be longer periods of dependency on middle-aged or older adult children for older people, and that adult children may become responsible for the care of family members from two older generations, either sequentially or simultaneously.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-2-slide-6" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Trends</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/92963839.png'); ?>" alt="image">
				<h5>The combination of an aging workforce and a declining birth rate suggests that support for the growing older population will be limited -</h5>

				<p>This is supported by the decrease in family members available to help, and because public health care dollars generated through income taxes will be diminished due to the smaller workforce. In 1978, the median age of the labor force was 34.8. In 1988, it was 35.9. In 2008 it was 41.2, and it is projected to be 42.3 by 2018. Contributing to this trend is the decrease in early retirement and an increase in post-retirement work. A recent survey of Baby Boomers, by the Committee for Economic Development, found that 70% intend to work at least part-time after retirement. As the average age of the workforce increases, elder care and other issues related to this aging workforce are likely to overshadow childcare in importance for workers and for employers who need to retain valued workers.</p>
				<h5>More women are in the workforce -</h5>

				<p>Ginzberg called the entry of women into the paid labor force "the single most important phenomenon of the mid-twentieth century," affecting every aspect of society. Today, women comprise about 46% of the workforce, compared to about 37% in 1970. From 1986 to 1996, the number of women in the workforce increased by 18%; from 1996 to 2006, this number is expected to increase by an additional 14%. Nearly 80% of women between the ages of 25 and 54 are in the labor force today. Between 1988 and 2000, almost two-thirds of new entrants into the workforce were expected to be women, and this trend is expected to continue. As female labor participation has grown, so too has concern for the groups traditionally cared for by women: elders as well as children.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-2-slide-7" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Trends</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/92963839.png'); ?>" alt="image">
				<h5>Family size and composition are changing -</h5>

				<p>The previously dominant family type of a sole wage-earner father with a wife/mother who stayed at home to raise children has been replaced by the dual-earner or the single-parent household. Couples often cohabitate without formally marrying, and in most couples, both partners work. Marriages occur later and are less enduring, and births are later and fewer in number. Most children have mothers who work. The number of single-parent families has skyrocketed. Many families today are “blended” families, with stepchildren and stepparents. And many families have multiple responsibilities for children and elders who are either living with the families or apart. The number of three-generation households is growing, and the number of grandparents raising grandchildren is increasing. Finally, geographic mobility of families has increased, with more adult children living at a distance from their elders needing care. This latter trend has resulted in approximately seven million
					Americans involved in long-distance caregiving.</p>

				<p>Moreover, as the primary household configuration has changed, and with the increased proportion of women in the paid labor force, life styles have been altered and there is a trend toward redistribution of traditional gender role responsibilities. Men now play a larger role, either forced or desired, in child-rearing, performance of household tasks, and elder care. Although the general caregiving literature reports that women comprise about 72% of the primary caregivers to elders, a different pattern emerges when working populations are surveyed. For example, in an early study of 9,573 employees in 33 organizations, Neal, Chapman and Ingersoll-Dayton found that 63% of the caregivers to elders were women, and 37% were men. In the 1997 National Study of the Changing Workforce, found that as many men as women in the workplace reported that they had caregiving responsibilities for an older adult.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-2-slide-8" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Trends</h2>
				<hr />
				<h5>Health care costs have risen dramatically -</h5>

				<p>
					This key trend has resulted in the implementation of cost containment measures and the further informalization of care, that is, increased reliance on family and friends to provide informal care to substitute for formal health care services. Older adults who, in the past, remained in the hospital for most of their recovery period from an illness or accident are today sent home after considerably fewer days and with less <i>formal</i> support. Family members and other informal supports are left to manage the overall care of an elder and to perform sometimes very complicated health care tasks. This often comes at great personal expense and frequently with little or no training or resources from health care professionals.
				</p>

				<p>Taken together, these aging, workforce, family, and health care-related trends mean that there are growing numbers of people who must juggle the demands of their work with those of their families. The cost of replacing the work of these informal caregivers with paid home care has been estimated to range from $45 - 75 billion to $196 billion dollars per year. This latter figure represents about 18% of total national health care spending per year. Although the American family continues to perform the basic family functions of socialization, care and nurturing of its members, the ways in which family functions are performed now differ. It is clear that for most families today, reliance on a stay-at-home spouse to handle family responsibilities is not an option. Also, increasingly there will be fewer children to care for aging parents.</p>

				<p>The implications of these trends for caregiving in the future are that there will be more elders who need care, fewer women who can devote their full attention to providing this care due to their paid work responsibilities, more men who will be involved in caregiving, more care provided by non-relatives, and more caregivers who will also be engaged in paid work. Conflicts between work and family are becoming more common and are of concern to employers and workers alike. So, who are these working caregivers, and how many of them are there?</p>

				<p class="forum">Search the Internet for other trends you may find in the US, and post your findings on the Forum. As you comment on these listed trends, also share if you can see signs of these trends in your personal life. Finally, search the Internet and post to the Forum how many caregivers are in your State/Region and what, in general, are their biggest challenges.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-2-slide-9" class="course-slide">
			<div class="content">
				<h2 class="flowers">Research on US Caregivers</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/118562621.png'); ?>" alt="image">

				<p>
					One of the first national profiles of caregivers was <a href="http://assets.aarp.org/rgcenter/il/caregiving_97.pdf" target="_blank">Family Caregiving in the US</a>, published in 1997. The study has been updated since then. In 2009, the <a href="http://www.caregiving.org" target="_blank">National Alliance for Caregiving</a> (NAC) in collaboration with the <a href="http://www.aarp.org" target="_blank">AARP</a> completed the most comprehensive examination to date of caregiving in America: <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2010/mmi-working-caregivers-employers-health-care-costs.pdf" target="_blank">The MetLife Study of Working Caregivers and Employer Health Care Costs</a>.
				</p>

				<p>Funded by The MetLife Foundation, the study reveals that:</p>
				<ul>
					<li>29% of the U.S. adult population are caregivers.</li>
					<li>On average, they provide 20 hours of care per week.</li>
					<li>Of those 65.7 million people, approximately three-fourths of caregivers are or were working while providing care.</li>
				</ul>
				<p class="forum">Search the Internet and download at least two recent studies associated with the financial impact caregiving has on businesses, and attach them to a posting on the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete module</a>
			</div>
		</div>
	</div>
	<div id="lesson-3">
		<div id="lesson-3-slide-1" class="course-slide">
			<div class="content">
				<h2 class="flowers">General Challenges Associated with Caregiving</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/sb10069456i-001.png'); ?>" alt="image">

				<p>In this module, we will:</p>
				<ul>
					<li>Locate and explore general challenges associated with caregiving</li>
					<li>Locate and explore various local and regional resources for caregivers</li>
					<li>Discuss long-distance caregiving and potential solutions</li>
				</ul>
				<p>Caring for others is filled with many mixed and varied emotions such as feelings of love, loss, anger, affection, sadness, frustration, and guilt. It’s not uncommon for family caregivers to feel lonely and isolated. It takes a lot of physical, mental, spiritual, and emotional energy to care for a loved one.</p>

				<p>No one can ever be fully prepared for the challenges of caregiving. The tasks and responsibilities involved can be demanding, even more so when caregivers themselves are frail, have been thrust into their role unexpectedly or reluctantly, or must care for someone who is uncooperative or combative.</p>

				<div id="question1" class="question">
					<p>
						<b>Caregivers often experience a higher rate of stress, anxiety, and depression than those who are not caregivers.</b><br />
						<select>
							<option selected="selected" value="select">Select</option>
							<option value="1">True</option>
							<option value="0">False</option>
						</select>
					</p>
					<p class="right-answer hide">Correct! Caregivers experience a higher rate of stress, anxiety, and depression than those who are not caregivers.</p>

					<p class="wrong-answer hide">Incorrect. This module will help you learn more about the challenges associated with caregiving.</p>
				</div>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
			</div>
		</div>
		<div id="lesson-3-slide-2" class="course-slide">
			<div class="content">
				<h2 class="flowers">Challenges Associated with Caregiving</h2>
				<hr />
				<h4>Types of Challenges</h4>
				<h5>Physical -</h5>

				<p>Elder care provides a number of unique opportunities as well as challenges to adult children, family members and friends. Challenges to providing in home care may range from the physical to the emotional to the mental.</p>

				<p>You may be physically fit, but mentally unable to provide special care for an individual diagnosed with late-stage Alzheimer's disease. Or, you may be emotionally and mentally able to care for the needs of an elderly person, but be physically weak in body, which may lead to less than quality of in home care and as such safe care for your loved one.</p>

				<p>Understanding the unique challenges that face in home care givers today will help you make educated, safe and effective decisions regarding care for your parent, grandparent, or other elderly loved one.</p>

				<p>More people today are providing in home care of elderly relatives rather than placing them in long-term care or nursing facilities due to increasing health care costs. However, the convenience of caring for an elderly person in their own home, or moving them into yours, should always be balanced with safety and quality care.</p>

				<p>If you are a 125-pound middle aged caregiver to an elderly parent who weighs more than you do, you may regularly face physical challenges to providing safe and effective care. The same goes for a physically strong person who must continually care for even frail individuals who weigh 100 pounds or less. For example, the strain of transferring, lifting, turning and helping with the physical needs of an individual incapable of bearing part or all of their own weight is difficult even in the best of circumstances.</p>

				<p>Adult children providing in home care of elderly parents should take the time to attend training sessions on the proper lifting, turning and transfer techniques that will not only protect their own back and shoulders, but will ensure the safety of the senior. Dressing an individual who is partially or fully paralyzed or caring for their hygiene or toileting needs is physically demanding, and may place additional physical strain on the caregiver. Adapting the home environment to facilitate such needs is recommended, not only for the safety of the senior, but the health and well-being of the caregivers.</p>

				<p>Adaptations such as grab rails, non-skid rugs and toilet risers are just a few of the items that can be installed in a home environment to make the job of caregiving a little easier. Talk to professionals in nursing centers or long-term care facilities or your local medical supply store regarding adaptations that can make your caregiving efforts more effective and reduce the risk of injury.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-3-slide-3" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Challenges</h2>
				<hr />
				<h5>Emotional -</h5>

				<p>Caring for others is filled with many mixed and varied emotions such as feelings of love, loss, anger, affection, sadness, frustration, and guilt. It’s not uncommon for family caregivers to feel lonely and isolated. It takes a lot of physical, mental, spiritual, and emotional energy to care for a loved one. Caregivers often experience a higher rate of stress, anxiety, and depression than those who are not caregivers. You have probably heard it before – you need to take care of yourself! That can seem overwhelming and often requires energy and support to help make some changes.</p>

				<p>It is important for you to feel emotionally supported. Current research is clear that those who get emotional support while caregiving fare far better and provide care longer than those who don’t. Family and friends, while a valuable emotional support system for some, may not always be available or particularly helpful now. This is not unusual. Changing family roles, unresolved past family dynamics, and stress brought on by your loved one’s health, can strain even the best of support systems and relationships.</p>

				<p>You may need more or a different kind of emotional support than your current support network can offer. Think about what could help you feel more supported?</p>
				<ul>
					<li>A few hours for yourself?</li>
					<li>More information about your loved one’s disease or condition?</li>
					<li>Getting some help solving caregiving problems?</li>
				</ul>
				<p>If any of these things would help you feel more supported, there is good news. A variety of family caregiver support services offer this kind of emotional support, information, and knowledgeable advice.</p>

				<p class="forum">Post to the Forum any emotional support you may have. If you do not have any, please post the support you would like to have.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-3-slide-4" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Challenges</h2>
				<hr />
				<h5>Spiritual -</h5>

				<p>As a caregiver, your first priority and natural inclination is to be an advocate for your loved one’s physical health. Each day you make sure that your loved has everything he or she needs to be healthy. You administer medications, you help prepare meals, you help with housekeeping chores, and you make sure your loved one gets to each of his doctor’s appointments on time. It’s a lot of responsibility all on its own. However, for people who spend the majority of their lives engaged in spiritual activities, it is also important to help them find a way to stay spiritually connected. As a caregiver, there are several things you can do to nurture your elderly loved one’s spiritual needs.</p>

				<p>Take them to worship. It might not always be possible to take your loved one to worship services, but getting them to their house of worship even a few times a year can go a long way in helping the elderly get a spiritual tune-up. Many churches, synagogues, and other places of worship have transportation available for elderly members. Seeing old friends and meeting with spiritual leaders can help encourage socialization and ward off depression.</p>

				<p>Bring worship to them. Another option may be to bring religious studies to your loved one. This is a particularly beneficial option when several seniors can meet at the same home or facility. See if someone you know is willing to hold a book study or other group meeting on a regular basis at a location outside. It doesn’t have to be at traditional worship times. Any time of week that works for all involved can be a special time for spiritual activities.</p>

				<p>Give them books to read. It is probably a good idea to look for large print editions. However, in lieu of that you might find audio books, too. Also, if you, another family member or a friend are willing to read aloud and discuss a religious text, it can help your loved one stay spiritually connected.</p>

				<p>Have a spiritual conversation. Talking with like-minded people about spiritual questions, ideas, and convictions is another way that the elderly can have their spiritual needs met. It doesn’t have to be a formal service or a weekly meeting; just an impromptu conversation can be enough to meet your loved ones’ basic spiritual needs. How you and your loved one choose to meet the spiritual challenges of caregiving will depend largely on your loved one’s overall health, specific faith, and general worship practices. The point is that there are several options available, and sometimes all it takes is to be able to think outside the box.</p>

				<p class="forum">Post to the Forum any spiritual support you may have.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-3-slide-5" class="course-slide">
			<div class="content">
				<h2 class="flowers">Resources for Caregivers</h2>
				<hr />
				<p>The Web has a ocean of information for caregivers. While it can be intimidating, part of this online course is to teach you how to use the Web to your advantage. Entering your caregiving role can be complicated enough, but you can use the Web as a first-stop for many of your questions and as your main research tools. Useful tools and resources like checklists for doctor visits, online education, links to resources, phone numbers, and answers to frequently asked questions are readily available on the Web for those who use it.</p>

				<p>On the home page for this course, there is list of hyper links to various caregiver resources. While this is a small list, it does provide you with several resources.</p>

				<p class="forum">
					Search the Internet for caregiver resources and post to the Forum at least 3 new hyper links that are not already listed on this course's home page under the <i>Resource</i> section.
				</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">

				<p>To give you some more direction, familiarize yourself with the following websites:</p>
				<ul>
					<li>
						<a href="http://www.aoa.gov/" target="_blank">Administration on Aging</a>
					</li>
					<li>
						<a href="http://www.alz.org/" target="_blank">Alzheimer's Association</a>
					</li>
					<li>
						<a href="http://www.nfcacares.org/" target="_blank">National Family Caregiver's Association</a>
					</li>
				</ul>
				<p>Please think about whether or not you use the Internet as a tool when looking for caregiver resources.</p>
				<h5>Video - Community Resources for Caregivers</h5>

				<p>
					<iframe width="480" height="360" src="http://www.youtube.com/embed/bqefVGjaqB8?rel=0" frameborder="0" allowfullscreen></iframe>
				</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-3-slide-6" class="course-slide">
			<div class="content">
				<h2 class="flowers">Long Distance Caregiver - Challenges and Solutions</h2>
				<hr />
				<p>Families who struggle to care for a parent across the miles have a unique disadvantage. They cannot be there to know what is really happening. It is often difficult and frustrating to reach doctors or social service agencies and to be able to coordinate the needed care. The older parent may forget what the doctor has told them, or choose not to “burden” their child with problematic information. Indeed, many adult children are not aware that there is a problem until a visit is made, and they see the changes in the parent's physical, mental or emotional functioning. Situations that might occur would involve the following scenarios:</p>
				<ul>
					<li>The older parent is a danger to himself</li>
					<li>There are safety issues in the home environment</li>
					<li>The older parent is wandering and is confused</li>
				</ul>
				<p>There are a number of challenges that the adult child faces when dealing with long-distance care of an older parent. These include the following:</p>
				<ul>
					<li>
						When phone conversations are held, everything sounds fine. <i>No need to worry dear. I am doing fine on my own</i>, when you know in your gut that everything is not fine.
					</li>
					<li>Trusting someone else with the day-to-day care when you think you should be the one to provide the care.</li>
				</ul>
				<p>Dealing with the various emotions often associated with caregiving, such as:</p>
				<ul>
					<li>Guilt - over the fact that you are not able to be physically present all the time</li>
					<li>Grief - over your relative\’s decline in health</li>
					<li>Anger - at the whole situation</li>
				</ul>
				<p class="forum">List other emotions that you have experienced on the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-3-slide-7" class="course-slide">
			<div class="content">
				<h2 class="flowers">Types of PHRs</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/140009937.png'); ?>" alt="image">

				<p>
					Often, adult children are also faced with a demanding relative who wants to know why you just can not drop <i>everything</i> and spend time caring for them.
				</p>

				<p>What can adult children do to be better aware of and be able to manage care for their older relative when there is a physical distance between them? The following strategies might be utilized:</p>
				<ul>
					<li>If there is a neighbor or close friend who lives near to the older relative, entrust them to check up and visit on a regular basis. Make sure that you are contacted if there are any serious changes that occur.</li>
					<li>Make contacts with formal services that are appropriate with the older person’s care. These services might include visiting nurses, senior centers, adult day care or a meals program. Keep in regular contact with these agencies and make sure that the older relative is receiving the care that is needed.</li>
					<li>Keep in regular contact with the older relative’s physician. Call and speak to the physician directly. If you feel comfortable, have the physician send you regular, updated notes on the visits and tests that are administered.</li>
				</ul>
				<p class="forum">What other strategies can be used, when there is a physical distance between you and the person you are caring for? List your responses on the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
			</div>
		</div>
		<div id="lesson-3-slide-8" class="course-slide">
			<div class="content">
				<h2 class="flowers">Closing</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/86505302.png'); ?>" alt="image">

				<p>When you are not able to be around to oversee the day-to-day care of your older relative due to geographical distance, it is comforting to know that there are strategies that can be used to plan and to monitor your relative’s situation. Customizing a caregiving network will make your life much easier, which will lead to decreased stress and both you and your older relative will reap the benefit of the care that is provided.</p>

				<p class="forum">Please list any questions or concerns you have on the Forum. Also list any content additions or corrections you would like to suggest.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Module</a>
			</div>
		</div>
	</div>
	<div id="lesson-4">
		<div id="lesson-4-slide-1" class="course-slide">
			<div class="content">
				<h2 class="flowers">Impact on the Workplace &amp; the Economy</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/80707212.png'); ?>" alt="image">

				<p>In this module, we will:</p>
				<ul>
					<li>Explore and discuss the impact caregiving has on the economy</li>
					<li>Examine the impact caregiving has on the workplace</li>
					<li>Explore and discuss how employers have responded to the needs of working caregivers</li>
				</ul>
				<h4>Working American Caregivers</h4>

				<p>Those who work at least 15 hours per week and help care for an aging family member, relative, or friend -- report that their caregiving obligations significantly affect their work life. The majority of caregivers say that caregiving has at least some impact on their performance at work.</p>
				<ul>
					<li>Based on a five-point scale, where five is a great impact and one is no impact, 10% of caregivers choose five and 44% pick somewhere between two and four.</li>
					<li>Additionally, 24% of caregivers say that providing care to an aging family member, relative, or friend keeps them from being able to work more.</li>
					<li>Thirty-six percent report missing one to five days per year because of caregiving duties, while 30% say they missed six or more days in the past year. </li>
				</ul>
				<div id="question1" class="question">
					<p>
						<b>Caregivers who are in more intensive caregiving situations, seem to be at greater risk for adverse financial impacts.</b><br />
						<select>
							<option selected="selected" value="select">Select</option>
							<option value="1">True</option>
							<option value="0">False</option>
						</select>
					</p>
					<p class="right-answer hide">Correct! Intensive caregiving situations may require additional financial support.</p>

					<p class="wrong-answer hide">Incorrect. This module will help you learn more about the financial impacts of caregiving.</p>
				</div>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-2" class="course-slide">
			<div class="content">
				<h2 class="flowers">Impact on the Economy</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/121371451.png'); ?>" alt="image">

				<p>Overall, caregivers reporting missing an average of 6.6 workdays per year. With approximately 17% of the American full-time workforce acting as caregivers, this amounts to a combined 126 million missed workdays each year. This absenteeism costs the U.S. economy an estimated $25.2 billion in lost productivity per year. Including caregivers who work part time in the equation would cause absenteeism costs to climb even higher.</p>

				<p>
					These findings are from a special survey of Americans who self-identified as caregivers in <a href="http://www.well-beingindex.com" target="_blank">Gallup-Healthways Well-Being Index</a> surveys throughout 2010. Gallup recontacted those self-identified caregivers and interviewed 2,805 who were also employed at least 15 hours per week for a Pfizer-ReACT/Gallup poll specifically about caregiving.
				</p>

				<p>
					All respondents answered affirmatively to the question, <i>Do you currently help care for an elderly family member, relative, or friend, or not?</i>
				</p>

				<p class="forum">Search the Internet and find at least two additional statistics that show how caregiving impacts the economy, and post your findings to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-3" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Impacts</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/76755074.png'); ?>" alt="image">
				<h5>Most Working Caregivers in Professional Roles</h5>

				<p>Nearly one-third of all working caregivers are in a professional occupation, with another 12% each in service and management roles. Less than 5% of caregivers work in other professions such as installation/repair, transportation, and construction.</p>

				<p>Most caregivers (71%) indicate that their employer is aware of their caregiving status, but another 28% believe that their employer is unaware. Furthermore, an analysis of knowledge of workplace support programs shows that about one-quarter or less of working caregivers have access to support groups, ask-a-nurse-type services, financial/legal advisors, and assisted living counselors through their respective workplaces.</p>

				<p class="forum">Is your employer aware of your caregiving status? Post your response to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-4" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Impacts</h2>
				<hr />
				<h5>Implications</h5>

				<p>Many caregivers face significant physical and emotional challenges on a routine basis. Given the significant effect that caregiving can have on workplace absenteeism, business leaders should be mindful of the unique realities that caregivers encounter.</p>

				<p>Ultimately, providing an organized support system for these employees may prove to be a fruitful investment for businesses, given the high percentages of working caregivers who would like to work more if they could. Many working caregivers are likely interested in seeking support in work-life balance to help them meet their responsibilities as caregivers and employees alike, and the accessibility to assistance could potentially go a long way toward greater productivity in the U.S. workplace.</p>
				<ul>
					<li>Family caregivers provide more than half of all long-term care services in the U.S.</li>
					<li>More than half of all caregivers in the U.S. work either full or part time while providing care.</li>
					<li>More than half of working caregivers say they have to go into work late, leave early or take time off during the day to provide care.</li>
				</ul>
				<p class="forum">Search the Internet and find related or additional statistics to those listed above. Post your findings to the Forum. Also think about the financial impact your caregiving situation has had on your household, and post your thoughts to the Forum as well.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-5" class="course-slide">
			<div class="content">
				<h2 class="flowers">Impact on the workplace</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/78327070.png'); ?>" alt="image">

				<p>
					Increasingly, American workers can expect to be ground between two millstones. The graying of the population means that more workers will have an elderly relative or friend to care for at the same time as they are juggling work and other family responsibilities. According to the <a href="http://assets.aarp.org/rgcenter/il/caregiving_09_es.pdf" target="_blank">2009 national caregiver survey</a> conducted by the <a href="http://www.caregiving.org" target="_blank">National Alliance for Caregiving</a> and <a href="http://www.aarp.org" target="_blank">AARP</a>, 65 million people, 29% of the US population, provides care for someone. Nearly two-thirds of family caregivers work full or part-time, and over half of these caregivers report that they have had to make some sort of workplace accommodation, such as coming in late to work or leaving early, dropping back to part-time, turning down a promotion, choosing early retirement, or giving up work entirely.
				</p>

				<p class="forum">What are the implications of these workplace accommodations? Search the Internet for help; and post your response to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">

				<p>More and more employees will be faced with caregiving responsibilities that will affect their finances and their health, and their employers' bottom line. It is estimated that working caregivers’ accommodations cost U.S. employers billions of dollars per year in lost productivity and the average family caregiver for someone 50 years or older spends $5,531 per year on out of pocket caregiving expenses in 2007 which was more than 10% of the median income for a family caregiver that year.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-6" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Impacts</h2>
				<hr />
				<h5>Caregivers' ability to stay in the workforce</h5>

				<p>Caregiving for someone with significant disabilities can place great demands on a caregiver’s time. Therefore, it is not surprising that there are working-age individuals who leave the labor force to care for a loved one. Yet other working-age individuals are able to continue to work while providing care. To better understand this, two questions are asked:</p>
				<ol>
					<li>What factors make it possible for a caregiver to remain in the workforce, even when providing significant care to a disabled individual?</li>
					<li>And, will there be a positive effect on a caregiver’s ability to continue working if the care recipient has private long term care insurance?</li>
				</ol>
				<p>To explore these questions, we must consider the effect of caregiver and care recipient characteristics — including whether a care recipient is insured — on the probability of being in the workplace. Estimates are calculated based on the average value of each of the specific characteristics (e.g., gender, age, insurance status, income, etc.) of caregivers and care recipients observed in this sample. The following are factors related to a caregiver’s ability to work:</p>
				<ul>
					<li>Disability Status (Frailty) of Care Recipient - Caregivers for more disabled older people are less likely to be able to work. This is not surprising given the increasing care needs associated with greater levels of disability.</li>
					<li>Relationship to Care Recipient - A caregiver who is not a spouse is much more likely to be in the workforce than a caregiver who is a spouse. In fact, a non-spousal caregiver is 2.4 times more likely to be in the labor force as is a spousal caregiver.</li>
					<li>Education Level - College educated caregivers are more likely to be in the workplace than those without college education. Caregivers with less than a college education are only half as likely to be in the workforce. This finding mirrors trends in the general population relating to labor force participation.</li>
				</ul>
				<p class="forum">Why would educational levels influence the type of care that could be provided to a family member or friend? Search the Internet for help, and post your responses to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-7" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Impacts</h2>
				<hr />
				<h4>Factors influencing job disruption among working caregivers</h4>

				<p>Even a family caregiver who remains in the workforce may need to take time off without pay or work fewer hours due to caregiving. At the extreme, he or she may even have to quit a job. Furthermore, the demands of caregiving may keep caregivers not currently in the labor force from looking for work outside of the home or accepting a job they would otherwise have taken. Long-term care insurance reduced the following job disruptions:</p>
				
				<h5>Working Fewer Hours Than Desired - </h5>

				<p>A family caregiver caring for a privately insured severely disabled elder (for example, one with three or more ADL limitations and at least five or more IADL limitations) is less likely to have to work fewer hours than desired than if the recipient had no LTCI. On the other hand, family caregivers assisting moderately disabled insured individuals are more likely to work less than they want than caregivers of non-privately insured and moderately disabled elders. This suggests that the insurance has its most positive impact on caregivers of the more seriously disabled.</p>
				<h5>Taking Time Off From Work Without Pay - </h5>

				<p>
					<i>Sandwich Generation</i> caregivers, those who also have children in the home under the age of 18, are most relieved from the necessity of taking time off without pay if they are caring for someone with private LTCI. <i>Sandwich Generation</i> caregivers of insured care recipients are only 26% as likely to have to take leave without pay as are those of non-privately insured disabled elders. Though not statistically significant, the study also found that caregivers of the privately insured take 16 days off without pay whereas those assisting the non-privately insured take 26 days off without pay.
				</p>

				<p>On the other hand, LTCI did not appear to have an effect on the following disruptions:</p>
				<h5>Being Kept from Looking for a Job - </h5>

				<p>Individuals who are no longer in the workforce may continue to have work-related caregiving issues. About 15% of the caregivers in the sample indicated that they had been kept from looking for a job because of their caregiving responsibilities, a figure unaffected by the insurance status of the care recipient.</p>
				<h5>Turning Down a Job Due to Caregiving - </h5>

				<p>Only a relatively small percentage of caregivers reported having to turn down a job because of their caregiving activities. The insurance status of the care recipient did not influence the probability of this happening.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-8" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Impacts</h2>
				<hr />
				<h4>Factors influencing stress among working caregivers</h4>

				<p>Providing care to a disabled elderly friend or relative can have profound effects on the caregiver’s physical and emotional health. Caregiving can be a significant risk factor for some people in developing depression. Also, recent research suggests that mental or emotional strain experienced by the caregiver is an independent risk factor for mortality, particularly among elderly spousal caregivers of people with Alzheimer’s disease.</p>

				<p>In a 1999 study, most caregivers (68%) felt that the presence of insurance-financed benefits for the care recipient had reduced the stress level due to family caregiving. In this study, researchers focused on working caregivers and gauged caregiver stress by asking respondents whether they agreed or disagreed with the following five statements:</p>
				<ol>
					<li>Taking care of him/her is hard on me emotionally.</li>
					<li>I have to take care of him/her when I don’t feel well myself.</li>
					<li>Taking care of him/her limits my free time or social life.</li>
					<li>I have to give him/her my constant attention.</li>
					<li>Taking care of him/her has caused my health to get worse.</li>
				</ol>
				<p>If a caregiver agreed with three or more of these statements, he or she was considered to have severe social stress. The 1999 study found that, controlling for other important factors related to caregiving stress (e.g., the level of disability of the care recipient, living arrangement, work status, amount of work disruption), the working caregivers of disabled elders with private insurance are less likely to agree with statements 2, 3, and 4.</p>

				<div id="question" class="question">
					<p class="forum">Search for and read the study: The MetLife Juggling Act Study - Balancing Caregiving with Work and the Costs Involved.</p>

					<form method="get" action="http://www.google.com/search" target="_blank">
						<input type="text" id="google-search" name="q" size="65" maxlength="255" value="" />
						<input type="submit" value="Google Search" class="teal" />
					</form>
				</div>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-9" class="course-slide">
			<div class="content">
				<h2 class="flowers">Additional Impacts</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/164649179.png'); ?>" alt="image">

				<p>Recent studies show the following characteristics associated with severe social stress among all family caregivers:</p>
				<ul>
					<li>
						<b>Gender of the Caregiver - </b>Women are about 1.8 times more likely to experience three or more stressors than men.
					</li>
					<li>
						<b>Co-Residence - </b>When caregivers and care recipients live in the same household, there is a much greater likelihood that the caregiver will experience severe social stress.
					</li>
					<li>
						<b>Hours of Care - </b>Caregivers reporting more than 20 hours of caregiving per week are slightly more than twice as likely to experience severe stress as are those providing less care.
					</li>
					<li>
						<b>Job Disruptions - </b>To the extent that working caregivers experience job disruptions (e.g., having to rearrange their schedule, take time off, or having had to quit a previous job for caregiving), they are three times more likely than working caregivers who do not have job disruptions to experience severe stress.
					</li>
				</ul>
				<p class="forum">Please think about ways caregiving has affected your workplace, and post your responses to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-10" class="course-slide">
			<div class="content">
				<h2 class="flowers">Employers Response to the Needs of Working Caregivers</h2>
				<hr />
				<h5>The corporate response to employee caregivers</h5>

				<p>In recognition of the negative effects that caregiving can have on employees and their work, some U.S. employers have initiated various work-based supports for their employees with elder care responsibilities. In actuality, there is a long history in the U.S. of employer concern for individual employees and their familial circumstances. Specifically, family-oriented benefits in the U.S. date back to the industrial revolution, when women (and children) began to work outside the home in the first factories and mills. It was during this time, in 1825, that Robert Owen, an English businessman, established the first employer-sponsored child-care center in the U.S., in New Harmony, Indiana.</p>

				<p>Typically, however, employer concern has been manifest only during periods of our history when women were needed in the workplace, and employer provision of child care was seen as a strategy to attract and retain needed workers. Except for the years during the two World Wars, when women were recruited to fill jobs left by men serving in the military, for most of the 19th and 20th centuries managing the intersection of work and family was seen as the sole responsibility of the workers themselves. This began to change in the late 1970’s and 1980’s, as increasing numbers of women began to enter and remain in the workforce. The prevailing belief that family life and family responsibilities should and could be left at home was challenged by the realities facing workers as they struggled to balance work and family obligations.</p>

				<p>
					Increasing awareness of the demographic and social changes affecting the workforce created a shift in the philosophy of both employers and employees regarding the <i>appropriateness</i> of employer involvement in the family-related aspects of employees lives and spurred the development of work and family benefits and programs. At this time, child care benefits and programs became more available to American workers. In the mid-1980s, American employers began to introduce elder care programming to its array of work-family programs. These programs were fashioned after the child care programs that included resource and referral services. Search the Web for a a timeline of the development of workplace elder care programs.
				</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-11" class="course-slide">
			<div class="content">
				<h2 class="flowers">Employers Response to the Needs of Working Caregivers (continued)</h2>
				<hr />
				<h5>Factors contributing to the growth of work-based elder-care programs</h5>

				<p>Several inter-related factors provided the impetus for employers concern for working caregivers and the growth of work-based elder care programs. These factors included:</p>
				<ol>
					<li>the recognition of the growing numbers of workers who were providing assistance to an older family member or friend;</li>
					<li>the personal elder care-related experience of managers and key decision-makers;</li>
					<li>research findings on the potential and actual negative consequences of caregiving on employees and their work;</li>
					<li>the involvement of organized labor;</li>
					<li>concerns about worker retention and recruitment; and</li>
					<li>the goals of remaining competitive and improving morale.</li>
				</ol>
				<p>
					The early elder care programs developed in the mid-1980s were begun largely as a result of research on the numbers of working caregivers and the demographic imperative of an aging America. The Travelers Insurance conducted one of the first workplace surveys of caregiving employees, and several workplace surveys quickly followed. Between 23% and 32% of the employees responding to these surveys reported having at least some elder care duties and <i>the prevalence estimate of 25% became a benchmark for employers, who initiated workplace programs to assist their caregiving employees</i>.
				</p>

				<p>
					However, as reported in Kossek, DeMarr, Backman, and Kollar (1993), IBM’s nationwide elder care referral service, which was one of the first such programs, <i>was developed not as a response to employee demand, but rather a proactive response to undeniable demographic trends</i>.
				</p>

				<p>In addition to the impetus provided by research documenting the numbers of working caregivers, employers were encouraged to develop formal elder care programs by several studies that attempted to quantify the costs to them of working caregivers. One early estimate of these costs suggested that companies without formal elder care programs could lose about $2,500 a year per caregiving employee in lost productivity. More recent estimates suggest these costs might be as high as $3,142. Various MetLife analyses estimate that the aggregated costs of caregiving employees to employers nationwide ranged in the billions per year.</p>

				<p>Organized labor also has played a significant role in the development of elder care policies and programs, both through collective bargaining and through education regarding the importance of work-family benefits and policies. The CWA, IBEW and AT&amp;T contracts negotiated in 1990 represented a significant milestone for unionized workers. This latter contract resulted in the Family Care Development Fund of AT&amp;T, which provided funding for specific aging network services that benefit union members and enhancement of the quality of available elder care programs (i.e., adult day service and senior centers).</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-12" class="course-slide">
			<div class="content">
				<h2 class="flowers">Employers Response to the Needs of Working Caregivers (continued)</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/137597454.png'); ?>" alt="image">

				<p>
					Underlying all of these factors has been a concern with productivity and profitability. In fact, concern with the <i>bottom line</i> has been the primary catalyst for employer response to employees' family-related needs. Changes in personnel practices are motivated less by concerns about the personal and family lives of employees than by specific business problems, such as absenteeism and tardiness, difficulties in recruiting and retaining employees, employee reluctance to relocate, poor labor-management relations, or rising benefit costs.
				</p>

				<p>The quality of care available for children and elders has also been of concern to employers, for similar reasons: To the extent that care provided by non-family members is substandard, employees may decide to quit work to provide care themselves, jeopardizing the productivity of American business.</p>

				<p>Despite the evidence provided by research in regard to the prevalence and costs of elder care among employees, work-based programs addressing employees’ elder care needs continue to lag behind child care programs in the workplace. Moreover, large employers are much more likely than smaller employers to offer elder care programs at work. One current estimate of access to elder care programming is that one in four companies with more than 100 employees offer such programs.</p>

				<p>Smaller employers are considerably less likely to have formal elder care programs in place for their employees, and most workers in the U.S. are employed by small businesses. For example, 87% of American employers have fewer than 20 employees. At the same time, small and mid-sized companies are more likely to have informal policies that support working caregivers. For example, sometimes supervisors will allow workers to take time off during the day when needed to handle their family caregiving responsibilities and then make that time up later.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-13" class="course-slide">
			<div class="content">
				<h2 class="flowers">Employers Response to the Needs of Working Caregivers (continued)</h2>
				<hr />
				<h5>Types of formal caregiving programs that employers offer</h5>

				<p>Organizations offer a variety of workplace supports to help their employees manage their work and family responsibilities. Some, such as flexible work schedules, job sharing, leave policies, flexible benefits plans, and employer-sponsored group long term care insurance, are not intended specifically or exclusively for employees who have elder care responsibilities, but they can be extremely beneficial to working caregivers. The feasible approaches for a particular organization vary with the size and culture of the organization.</p>

				<p>Examples of non-caregiving-specific employer-provided supports that may be especially useful to working caregivers include:</p>
				<ul>
					<li>flexible work schedules,</li>
					<li>telecommuting,</li>
					<li>family leave (preferably paid),</li>
				</ul>
				<p>Employers can also provide employees access to telephones both on and off-site, (e.g., cell phones), pagers, and the like to reduce stress for employees who are concerned about their elders or the elders’ care providers not being able to reach them in a crisis. Finally, the provision (directly or through contracting) of concierge services (e.g., running errands for employees, such as picking up or dropping off dry cleaning, taking cars to the mechanic, and shopping) can allow working caregivers to spend more time at work, on caregiving tasks, or taking care of themselves.</p>

				<div id="question1" class="question">
					<p>
						<b>Your employer is NOT legally obligated to provide you with benefits that specifically relate to caregiving.</b><br />
						<select>
							<option selected="selected" value="select">Select</option>
							<option value="1">True</option>
							<option value="0">False</option>
						</select>
					</p>
					<p class="right-answer hide">Correct! In general, companies are not legally obligated to provide specific benefits related to caregiving in the U.S.</p>

					<p class="wrong-answer hide">Incorrect. Companies have no legal obligation to offer benefits specifically related to caregiving in the U.S.</p>
				</div>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-4-slide-14" class="course-slide">
			<div class="content">
				<h2 class="flowers">Closing</h2>
				<hr />
				<p>With regard to work-based programs specifically for working caregivers of elders, corporate America has experimented with a range of such programs for the past twenty or more years. Despite the lack of systematic evaluation, formal elder care supports have been modified, enhanced, and reformulated based primarily upon demand from employees. For example, in an early effort by Stride-Rite, few workers were helped by on-site adult day services, and the center became more of a community resource than an employee-driven service. Counseling services have also had a mixed response, with some groups of employees (e.g., women, non-management) more likely than others to attend counseling sessions or support groups.</p>

				<p>Today, the most common form of elder care-specific work-based programming is a resource and referral service that offers a telephone linkage to needed community services and is supplemented by educational information and resources.</p>

				<p>
					For the most part, the large employer-based programs in place today were put in place by private vendors of services, not the aging network. This has meant that the aging network has not benefited from this corporate investment in elder care. Two exceptions are the <a href="http://www.nyc.gov/html/dfta/html/home/home.shtml" target="_blank">New York City Department on Aging</a>, an early aging network pioneer, and a more recent developer of programs, <a href="http://www.atlantaregional.com" target="_blank">Atlanta Regional Commission’s Area Agency on Aging</a>. Both of these agencies contract with certain employers to provide services directly to their employees.
				</p>

				<p>Despite this lack of direct financial benefit through business partnerships with employers, the aging network has gained financial support through employer investment in community services. Such support has come through individual employers’ support of local services as a component of their overall community investment strategy and through coalitions of businesses formed to invest funds in local services that benefit their employees and which support quality improvement in selected aging services. An example is the American Business Collaboration for Quality Dependent Care (ABC), a consortium of 137 companies, including 11 large corporations (e.g., IBM, AT&amp;T). The ABC has as its goal the enhanced quality of and access to child care and elder care.</p>

				<p>New approaches to work-based elder care programs are currently being developed. This next generation of formal elder care programs has been referred to as decision-support services. Rather than relying solely upon resource and referral models, these programs strategically address key needs of working caregivers - enhanced information and resources through geriatric care professionals, information on legal and financial matters, and help with insurance paperwork.</p>

				<p class="forum">Research any benefits your employer offers you as a employee caregiver, and post your findings to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Module</a>
			</div>
		</div>
	</div>
	<div id="lesson-5">
		<div id="lesson-5-slide-1" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Future of Caregiving</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/119032857.png'); ?>" alt="image">

				<p>In this module, we will:</p>
				<ul>
					<li>Quickly describe the past and discuss a possible future for caregivers</li>
					<li>Discuss the upcoming generation of caregivers</li>
					<li>
						Explore and discuss how the <i>Technology Revolution</i> will impact US caregiving
					</li>
				</ul>
				<p>While today’s average baby boomer has one of the highest overall income and wealth levels ever, creative financing will be a big priority as they move into their golden years. Because pension funds and overall savings are predicted not to keep up with rising medical costs, things like reverse mortgages will become even more popular. Employers will also continue to restructure daily work schedules and family leave policies. Family leave policies often created for families taking time off for the birth or adoption of a child will now be changed to also add time off policies for dealing with a sick family member. Because of the growing concern facing more family members, employers will also begin to offer seminars and other resources for their working caregiver employees. Flexibility will be the key in the future.</p>

				<p class="forum">How do you think technology will impact caregiving in the U.S. in the future? Post your feedback to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Module &raquo;</a>
			</div>
		</div>
		<div id="lesson-5-slide-2" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Past and Future of Caregiving</h2>
				<hr />
				<p>
					The trend from hospital to community based care also puts an increased emphasis on the role of caregivers. Health care specialists, family members, friends and community health care workers now spend more hours in <i>at home</i> caregiving. As well, social expectations regarding the division of responsibility for elder-care keep moving the onus of care:
				</p>
				<ol>
					<li>How much should the state provide?</li>
					<li>How much should families and the informal system provide?</li>
				</ol>
				<p>
					While the jury is still out on this issue, seniors themselves are clear. They insist on <i>aging in place</i> — staying in their homes for as long as possible. Because of love, duty, necessity, or a mix of these, informal caregivers, family and friends continue to provide substantial support to seniors. Estimates are that between 75 percent and 85 percent of care received by seniors in the community is provided by family members and friends.
				</p>

				<p>
					Many informal caregivers feel pressured by the demands of caregiving, yet also speak of its <i>rewards</i>. If factors such as higher divorce rates, and smaller and more geographically dispersed families further reduce the capacity of the informal system to meet the growing demand for assistance, the benefits to seniors and their caregivers may become burdens. How will seniors cope? How will caregivers fare? In times of change, informal caregivers and formal caregivers — i.e., persons who are specially trained to provide care within institutions or the community — may need to redefine their role and involvement in care.
				</p>

				<p class="forum">On the Forum, describe your caregiver situation next year and then in 2 years, if applicable. Research and try and anticipate changes in technology and how your caregiving role will be effected.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-5-slide-3" class="course-slide">
			<div class="content">
				<h2 class="flowers">Times have changed</h2>
				<hr />
				<p>
					The twentieth century has witnessed significant changes in attitudes towards seniors and elder-care practices. In the early 1900s, assistance was thought to <i>foster indolence and dependency</i>, but by the mid-century there was growing acceptance of the public responsibility for health and social services. In response, a system of formal care for seniors was developed which included residential care for frail seniors, with services provided by health professionals with a range of technical expertise. States soon realized that this model of care was not appropriate for a growing number of seniors: not only were long-term care beds costly, but seniors and their advocates were demanding more and more care in a community setting.
				</p>

				<p>Today, there is an increasing emphasis on keeping seniors in the community and helping them to keep up connections with their informal networks of friends and family. A variety of community-based services are in place to help people maintain or regain a maximum degree of autonomy by addressing their physical, mental or social needs. These services include information and referral, coordination and the services of health professionals and seniors advocacy groups, as well as a range of other support services (personal and social support, housing services, health promotion, respite services and transportation).</p>

				<p>Generally less costly than hospitalization or long-term institutional care, community based services contribute to seniors’ quality of life by preventing or delaying institutionalization, promoting social integration, responding to changing health needs in a flexible manner, and providing support to informal caregivers. Plans in health care reform reinforce this shift from institutional to community-based care, at the same time assuring a continuum of care that includes institutional care.</p>

				<p>
					In Canada, <a href="http://www.elderweb.com/organization/canada-national-advisory-council-aging" target="_blank">The National Advisory Council on Aging (NACA)</a> has observed that provincial trends limiting the growth of long-term care facilities may result in insufficient accommodation for those who are too disabled to remain in the community. If, as expected, more and more older people — and their caregivers — reach a point at which institutionalization becomes appropriate, suitable accommodation must be made available.
				</p>

				<p>A dynamic partnership between formal and informal care is the cornerstone of new policies of care being adopted for frail seniors. According to this view, elders, family and friends collaborate with a variety of paid workers to provide the range of services required by the client. In fact, most states have been shifting the focus of long-term care to the community and to families as the main caregivers, with some support from home care workers. Seniors themselves are viewed as clients who have an important decision-making role in their care, rather than as the passive recipients of services.</p>

				<p class="forum">Search the Internet for national-level changes in the past 10 years that were specifically aimed at protecting seniors, and post your findings to the Forum. Next, considering your caregiving situation, what changes do you expect to see in the near future, in the form of support and available services, from the State and Federal level, if any? And post your response to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-5-slide-4" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Next Caregiver Generation</h2>
				<hr />
				<p>
					Seventy-six million American children were born between 1945 and 1964, representing a cohort that is significant on account of its size alone. A baby boomer is a person who was born during the demographic Post-World War II baby boom and who grew up during the period between 1945 and 1964. The term <i>baby boomer</i> is sometimes used in a cultural context. Therefore, it is impossible to achieve broad consensus of a precise definition, even within a given territory. Different groups, organizations, individuals, and scholars may have widely varying opinions on what constitutes a baby boomer, both technically and culturally
				</p>

				<p>
					The words <i>sandwich generation</i> today are a new term in society's long history of the written language. This term is now found in the latest editions of the <a href="http://www.oed.com" target="_blank">Oxford English Dictionary</a> and the <a href="http://www.merriam-webster.com/cgi-bin/book.pl?c11.htm&1" target="_blank">Webster's Collegiate Dictionary</a>. These <i>Sandwich Generationers</i>, are those sandwiched between aging parents and their own children. As more baby boomers become both sandwich generationers and seniors, the need to understand aging dynamics and family relationships increases dramatically. It is not easy to become elderly or a parent to your parent(s). After all, our society "says" adults should be able to take care of themselves. But, as more live well into their 80s and 90s and families are dispersed across the country, everyone is going to be involved somehow, some way, in elder care. If not today, then tomorrow.
				</p>

				<p>With so many baby boomers entering the market each year, caring for their parents, we must also remember that they too will need care at some point in the future. This is a large concern and responsibility for the baby boomers, but also a large responsibility for the generation right behind the baby boomers. As reported by various surveys and reports:</p>
				<ul>
					<li>Most caregivers feel relatively unprepared for their own possible long term care. That is, they feel only a little or not at all prepared.</li>
					<li>Caregivers report thinking more about saving money to meet their needs as a result of their caregiving experience. They also think about the adequacy of their insurance and the need to plan.</li>
					<li>Over one-third of the caregivers say they have taken some specific actions to plan for their own possible long term care, mostly by increasing their investments or by obtaining more insurance.</li>
				</ul>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-5-slide-5" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Next Caregiver Generation (continued)</h2>
				<hr />
				<p>In this You Tube video, Susan Colley-Monk, a caregiver, describes how she takes care of her kids and her parents at the same time.</p>

				<p>
					<iframe width="480" height="360" src="http://www.youtube.com/embed/nHzxbfKr_Wc?rel=0" frameborder="0" allowfullscreen></iframe>
				</p>
				<p class="forum">Post to the Forum your thoughts on the level of care expected by the Baby Boomer generation, considering their achievement and success over current and previous generations.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-5-slide-6" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Technology Revolution and Caregiving</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/114258929.png'); ?>" alt="image">

				<p>The technology revolution is upon us. Now more than ever, people are able to communicate over thousands of miles with the greatest of ease. Wireless communication is much to thank for the ease of communication. But just like any revolution there are social consequences, especially when the revolution takes place around the globe.</p>

				<p>Since the world does not evolve at the same pace, lesser developed countries as well as minorities in developed countries have not even come close to reaping the benefits of a world connected at the touch of a button. The social argument is that as this revolution proceeds, the gap between the haves and have-nots will widen to the point of ill repute. Others argue that because of technological advances the world is a much better place. This seems to be the debate at hand.</p>

				<p>Family caregivers are responsible for the home care of millions of older adults in the U.S. For many, the elder family member lives more than an hour’s distance away. Distance caregiving is a growing alternative to more familiar models where:</p>
				<ol>
					<li>the elder and the family caregiver(s) may reside in the same household; or</li>
					<li>the family caregiver may live nearby but not in the same household as the elder.</li>
				</ol>
				<p>The distance caregiving model involves elders and their family caregivers who live at some distance, defined as more than a 60-minute commute, from one another. Evidence suggests that distance caregiving is a distinct phenomenon, differs substantially from on-site family caregiving, and requires additional assistance to support the physical, social, and contextual dimensions of the caregiving process. Technology-based assists could virtually connect the caregiver and elder and provide strong support that addresses the elder’s physical, social, cognitive, and/or sensory impairments.</p>

				<p>Therefore, in today’s era of high technology, it is surprising that so few affordable innovations are being marketed for distance caregiving.</p>
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-5-slide-7" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Technology Revolution and Caregiving (continued)</h2>
				<hr />
				<p>This final part of the module addresses distance caregiving, proposes the use of technology innovation to support caregiving, and we will then discuss suggested research agenda to better inform policy decisions related to the unique needs of this situation.</p>

				<p>When the physical location of the caregiver and elder are at a geographic distance, additional assists are required to support the physical, social, and contextual dimensions of the caregiving process. Numerous technological assists, including enabling, automation, and tele-health technologies, have potential for providing this type of caregiver support. Technology-based interventions that include computer and communication technology offer potentially strong support in the areas of prevention and detection, managing everyday life, social connectedness, and identity affirmation.</p>

				<p>
					Therefore, in today’s era of high technology, it is surprising that so few affordable innovations are being marketed for distance caregiving. One explanation for this gap in application may be the lack of understanding about the relationship between technology and caregiving activities. Technology-based interventions could virtually connect the caregiver and elder and provide strong support for distance caregiving that addresses the elder’s physical, social, cognitive, and/or sensory impairments. A possible solution to acceptable application of technology into the homes of elders is through ubiquitous computing. This approach integrates computer technology into the environment, rather than having computers that are distinct objects. Ubiquitous computing and embedded technology are emerging as assists in the home environments. Weiser (1996), who coined the term, reflected, <i>Ubiquitous</i> computing names the third wave in computing, just now beginning.
				</p>

				<p class="forum">As you consider technology and caregiving, what limits do you anticipate or think should be governed when it comes to caregiving assistance? Post your feedback on the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-5-slide-8" class="course-slide">
			<div class="content">
				<h2 class="flowers">The Technology Revolution and Caregiving (continued)</h2>
				<hr />
				<p>
					First there were mainframes, each shared by lots of people. Now we are in the personal computing era, person and machine staring uneasily at each other across the desktop. Next comes ubiquitous computing, or the age of <i>calm technology</i>, when technology <i>recedes into the background of our lives</i>.
				</p>

				<p>For those with cognitive decline, Morris and Lundell (2003) identify four principles to guide the use of calm technology solutions including assessing while helping, adapting assistance to variability in cognitive abilities, catalyzing instead of replacing social interactions, and leveraging familiar interfaces. These needs are embodied in the technology-based solutions that are being proposed for the caregiver/elder dyad.</p>

				<p>Technologies for adaptive aging include: wireless broadband; biosensors and bodily diagnostics; activity sensors and behavioral diagnostics; information fusion; personal health informatics; ambient displays and actuator networks; agents, assistants, coaches, and companions; adaptive, distributed interfaces; and remote community and collaboration.</p>

				<p>Two-way video connections adapted for the elder’s level of physical and cognitive ability can engage the elder in social and cognitive stimulation. Intelligent assistive technology such as activity cueing, autominders, televideo monitoring or a Computer Links network could assist in remote wellness checking, providing information and decision-support, and address distance caregiving needs to assess changes in health or functional status. Telecommunication innovations could bridge some of the socialization and communication gaps imposed by distance and assist the caregiver in assessing and enhancing the elder’s functional status. The use of family portraits, ambient displays, and customized two-way video and computers offer methods to connect and represent a way of feeling presence across distance.</p>

				<p>Using technology to communicate and interact with elders offers avenues for novel approaches to care and opens new areas of exploration. The challenge to using advanced technology-based interventions is to match these technological capabilities to actual caregiving needs, understand how people prefer to interact with technology, and learn how it fits into caregivers’ and elders’ lives without introducing new burdens associated with technology use.</p>

				<p class="forum">How has technology changed your caregiving situation? What web-based tools do you use to communicate with others, besides e-mail? Post your responses to the Forum.</p>
				<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="image">
			</div>
			<div class="buttons">
				<a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo;</a>
			</div>
		</div>
		<div id="lesson-5-slide-9" class="course-slide">
			<div class="content">
				<h2 class="flowers">Closing</h2>
				<hr />
				<img src="<?php echo $this->getImagesUrl('intro/160382234.png'); ?>" alt="image">

				<p>We have really enjoyed getting to know you, and hope this course was helpful. Please post any final thoughts, questions, or concerns to the Forum before you close out this final module. Best wishes as you carry on in the future!</p>
				<h4 style="text-align: center;">Certificates of Completion</h4>
				<a href="<?php echo $this->createDownloadUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('intro/ArtworkCertificate.png'); ?>" alt="image"> </a>
				<h4>Evaluation (optional)</h4>

				<p>Please complete the Post-Course Evaluation. It is accessible via the course page, in the sidebar.</p>

				<p>Your feedback is greatly appreciated, and will help us to better serve family members in the future. We ask that you complete it before you exit the course. You do not have to include your name on the evaluation. It is completely confidential.</p>
			</div>
			<div class="buttons">
				<a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> End Course</a>
			</div>
		</div>

		<div id="lesson-6">
			<div id="lesson-6-slide-1" class="course-slide">
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
										'reCaptcha' => Yii::app()->getComponent('reCaptcha'),
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


		</div>
	</div>