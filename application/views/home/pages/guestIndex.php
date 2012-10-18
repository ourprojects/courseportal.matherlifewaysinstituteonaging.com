<?php
$this->pageTitle = Yii::app()->name . ' - '.t('Guest');

Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->getScriptsUrl() . '/jquery.cycle.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScript('customers_cycle', "$('#customers').cycle({ fx: 'fade' });");

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => 'tutorial',
				'target' => 'a[rel=tutorial]',
				'config' => array(
						'width' => '90%',
						'height' => '95%',
						'autoDimensions' => false,
						'arrows' => false
				)
		)
);

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => 'survey',
				'target' => '.survey',
				'config' => array(
						'width' => '90%',
						'height' => '95%',
						'autoDimensions' => false
				)
		)
);

?>
<div class="home-image">
	<h1>
		<?php echo t('Web-based Training for Caregivers'); ?>
	</h1>
</div>
<div id="sidebar">

	<div class="box-sidebar zero">
		<a href="<?php echo $this->createUrl('user/register'); ?>"> <?php echo t('Register'); ?>
		</a> <a href="<?php echo $this->createUrl('home/contact'); ?>"
			class="teal"> <?php echo t('Request Information'); ?>
		</a> <a href="#tutorial-slide-1" rel="tutorial" class="teal"> <?php echo t('Tutorial'); ?>
		</a> <a href="#tutorial-slide-2" rel="tutorial" style="display: none"></a>
		<a href="#tutorial-slide-3" rel="tutorial" style="display: none"></a>
		<a href="#tutorial-slide-4" rel="tutorial" style="display: none"></a>
		<a href="#tutorial-slide-5" rel="tutorial" style="display: none"></a>
		<a href="#tutorial-slide-6" rel="tutorial" style="display: none"></a>
		<a href="#tutorial-slide-7" rel="tutorial" style="display: none"></a>
	</div>

	<div class="box-sidebar one">
		<h3>
			<?php echo t('Stats on Caregivers'); ?>
		</h3>
		<div>
			<img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/two-thirds.png"
				style="margin-bottom: 8px;" /><br />
			<?php echo t('2/3 of working caregivers
					report conflicts between work and caregiving that result in increased
					absenteeism, workday interruptions, reduced hours, and workload
					shifting to other employees.'); ?>
		</div>
	</div>

	<div class="box-sidebar two">
		<h3>
			<?php echo t('Recent Research'); ?>
		</h3>
		<div style="text-align: center">
			<img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/metlife.jpg" />
		</div>
		<p>
			<?php echo t('<strong>Double Jeopardy for Baby Boomers Caring for Their Parents</strong><br />
					Nearly 10 million adult children over the age of 50 care for their
					aging parents. These family caregivers are themselves aging as well
					as providing care at a time when they also need to be planning and
					saving for their own retirement. The study is an updated, national
					look at adult children who work and care for their parents and the
					impact of caregiving on their earnings and lifetime wealth.'); ?>
		</p>
		<p>
			<a
				href="http://www.metlife.com/assets/cao/mmi/publications/studies/2010/mmi-working-caregivers-employers-health-care-costs.pdf"
				class="pdf"><?php echo t('Read "The MetLife Study of Working Caregivers and
						Employer Health Care Costs"'); ?> </a>
		</p>
	</div>

	<div class="box-sidebar three">
		<h3>
			<?php echo t('Whitepapers'); ?>
		</h3>
		<p>
			<a
				href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2012/03/eLearning-Maturing-Technology.pdf"
				class="pdf"><?php echo t('e-Learning: Maturing Technology Brings Balance &amp;
						Possibilities to Nursing Education'); ?> </a> <a
				href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2012/03/How-eLearning-Can-Reduce-Expenses-and-Improve-Staff-Performance.pdf"
				class="pdf"><?php echo t('The Bottom Line: How e-Learning Can Reduce Expenses and
						Improve Staff Performance'); ?> </a>
		</p>
	</div>

	<div class="box-sidebar four">
		<!-- text here
							header: 'Aging in Action'
							text: Aging in Action is Mather LifeWays Institute on Aging's monthly 
							e-newsletter and blog containing the latest research news in the field of aging.
							larger twitter image here
							link: Evanston, IL ∑ http://www.aginginaction.com
							
							 -->

		<h3>Aging in Action</h3>
		<p>Aging in Action is Mather LifeWays Institute on Aging's monthly
			e-newsletter and blog containing the latest research news in the
			field of aging.</p>
		<p style="text-align: center;">
			<a href="http://twitter.com/aginginaction" target="_blank"> <img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/twitter-bird.png" />
			</a>
		</p>
		<p>
			Evanston, IL &bull; <a href="http://www.aginginaction.com">www.aginginaction.com</a>
		</p>
		<div class="clear"></div>
	</div>

	<div class="box-sidebar three">
		<h3>
			<?php echo t('Our Clients'); ?>
		</h3>
		<div id="customers">
			<a href="http://www.ibm.com"><img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/customers/ibm.png"
				alt="IBM" /> </a> <a href="http://www.ti.com/"><img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/customers/ti.png"
				alt="Texas Instrument" /> </a> <a href="http://www.merck.com"><img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/customers/merck.png"
				alt="Merck Pharmaceuticals" /> </a> <a
				href="http://www.exxonmobil.com"><img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/customers/exxon.png"
				alt="Merck Pharmaceuticals" /> </a> <a
				href="http://www.deloitte.com"><img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/customers/deloitte.png"
				alt="Deloitte" /> </a> <a href="http://matherlifeways.com/"><img
				src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/customers/mather.png"
				alt="Mather Lifeways" /> </a>
		</div>
	</div>

</div>

<div class="column-wide">
	<h2 class="flowers">
		<?php echo t('Mather
				LifeWays Institute on Aging'); ?>
	</h2>
	<p>
		<?php echo t('Through research-based programs and innovative techniques, Mather
				LifeWays Institute on Aging is committed to advancing the field of
				geriatric care. Cutting-edge research lays the foundation for our
				solid solutions to senior care challenges, including recruitment,
		mentorship, training, and retention.'); ?>
	</p>
	<p>
		<?php echo t('Used by individuals and entire organizations, our nationally
				recognized, award-winning programs include training modules, online
				courses, toolkits, and learning modules designed to make learning fun
				and easy. Our programs have been shown to result in measurable
		improvements in the quality of care provided and workforce retention.'); ?>
	</p>

	<h2 class="flowers top-pad">
		<?php echo t('Online
				Courses for Caregivers'); ?>
	</h2>
	<p style="padding-bottom: 5px;">
		<?php echo t( 
				'We deliver online learning and web-based modalities using the latest
				technologies to efficiently and cost-effectively empower professionals.
				In addition, we are well-positioned to help conduct pilot studies that measure the impact
				on both working caregivers and the bottom line for interested
		corporations.'); ?>
	</p>

	<h2 class="flowers top-pad">
		<?php echo t('A Closer Look - Lives of Caregivers'); ?>
	</h2>

	<p style="padding-bottom: 10px;">
		<?php echo t( 
				'Join us in looking at the incredible lives of several, unique caregivers, as they recall their
				experience and emotion. Capturing various age groups and ethnicities, you will quickly relate to the
		situation these caregivers were in.'); ?>
	</p>


	<div class="box-grey" style="float: left;">
		<?php 
		$this->widget(
				'ext.Jplayer.Jplayer',
				array(
						'target' => '#MatherCaregivers',
						'files' => array(
								'm4v' => $this->createUrl('download').'/videos/MatherCaregivers/video.m4v',
								'ogv' => $this->createUrl('download').'/videos/MatherCaregivers/video.ogv',
								'webmv' => $this->createUrl('download').'/videos/MatherCaregivers/video.webm',
								'poster' => $this->createUrl('download').'/videos/MatherCaregivers/poster.jpg'
						),
						'size' => array(
								'width' => '540px',
								'height' => '305px',
								'cssClass' => 'jp-video-mathercaregivers'
						)
				)
		);
		?>
	</div>

	<h2 class="flowers top-pad" style="margin-top: 5px;">
		<?php echo t('Pedagogy'); ?>
	</h2>
	<p>
		<?php echo t('Effective online instruction depends on learning experiences
				appropriately designed and facilitated by knowledgeable facilitators.
				Because learners have different learning styles or a combination of
				styles, our web-based training has been design using activities that
				address their modes of learning in order to provide significant
				experiences for each course user. Mouse-over the chart below to see
		our areas of focus.'); ?>
	</p>


	<p>
		<?php echo t('Institution Wide Content Management - 25%')?>
	</p>

	<p>
		<?php echo t('Online Course Delivery - 25%')?>
	</p>

	<p>
		<?php echo t('Targeted Collaboration - 50%')?>
	</p>



	<div id="pie-chart">
		<img
			src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/home-chart.png" />
	</div>

	<div class="box-white">
		<?php
		$this->widget(
				'modules.surveyor.widgets.Survey',
				array(
						'survey_model' => $models['workingCaregiver_survey'],
						'title_options' => array('class' => 'flowers'),
						'form_options' => array('enableAjaxValidation' => true,
								'enableClientValidation' => true),
				)
		);
		?>
	</div>

	<div class="box-white">
		<h2 class="flowers">
			<?php echo t('Health status of your working caregivers'); ?>
		</h2>
		<p>
			<?php echo t('Please choose one of the surveys below to take. Depending on your position, employer 
			or employee, submit this voluntary survey and view aggregate feedback from all previous users.'); ?>
		</p>

		<p>
			<a id="hrEmployerSurvey" href="#survey_hrEmployer"
				class="survey button" title="<?php echo t('HR/Employer Survey'); ?>"><?php echo t('HR/Employer Survey'); ?>
			</a> <a id="caregiverSurvey" href="#survey_caregiver"
				class="survey button" title="<?php echo t('Caregiver Survey'); ?>"><?php echo t('Caregiver Survey'); ?>
			</a>
		</p>
	</div>

</div>

<div id="bottom-logos">

	<h4>
		<?php echo t('Partners'); ?>
	</h4>
	<a href="http://www.rushu.rush.edu" id="rush">Rush University (Chicago)</a>
	<a href="http://www.alz.org/" id="aa" target="_blank">Alzheimer's
		Asssociation</a> <a href="https://github.com/" id="git"
		target="_blank">GitHub</a> <a href="http://www.yiiframework.com/"
		id="yii" target="_blank">Yii Framework</a> <a href="http://wfd.com/"
		id="wfd" target="_blank">WFD</a> <a
		href="http://www.discoursellc.com/" id="discourse" target="_blank">Discourse,
		LLC.</a> <a href="http://gladerfilmworks.com/" id="glader"
		target="_blank">Glader Filmworks</a> <a
		href="http://www.mediastorm.com/" id="mediastorm" target="_blank">Discourse,
		LLC.</a>
	<div class="clear"></div>

</div>
<div style="display: none;">
	<?php 
	$this->widget(
			'modules.surveyor.widgets.Survey',
			array(
					'survey_model' => $models['hrEmployer_survey'],
					'title_options' => array('class' => 'flowers'),
					'form_options' => array('enableAjaxValidation' => true,
							'enableClientValidation' => true),
			)
	);
	?>
</div>
<div style="display: none;">
	<?php 
	$this->widget(
			'modules.surveyor.widgets.Survey',
			array(
					'survey_model' => $models['caregiver_survey'],
					'title_options' => array('class' => 'flowers'),
					'form_options' => array('enableAjaxValidation' => true,
							'enableClientValidation' => true),
			)
	);
	?>
</div>



<!--  start tutorial course here -->

<div
	style="display: none;">
	<div id="tutorial-slide-1" class="slide">
		<h2 class="flowers">Tutorial</h2>
		<hr>
		<p>Welcome and thank you for your interest and support for Mather
			LifeWays Institute on Aging. This short, online tutorial was designed
			to help demonstate our course model. Please feel free to contact us
			if you have questions, suggestions, or just need help.</p>

		<p>This tutorial will briefly explain Dementia, Alzheimer's Disease
			and how their related. This short lesson is meant to be a very basic
			presentation, and by no means is conclusive or all-ending.</p>

		<p>According to the Alzheimer's Assocation (2012):</p>
		<ul style="list-style-type: none;">
			<li
				style="color: red; font-family: 'Oldtown', fantasy; font-size: 3em; padding: 35px 0px;">5.4
				million Americans are living with Alzheimer's disease.</li>
			<li
				style="color: red; font-family: 'Oldtown', fantasy; font-size: 3em;">One
				in eight older Americans has Alzheimer's disease.</li>
			<li
				style="color: red; font-family: 'Oldtown', fantasy; font-size: 3em; padding: 35px 0px;">Alzheimer's
				is not a normal part of aging</li>
		</ul>

		<p>With such a profound impact on soceity, businesses and poetneitally
			your family, could you explain what Alzehimer's disease is? How about
			Dementia?</p>


		<p>
			<a href="javascript:;" onclick="$.fancybox.next();" class="button">Start
				Tutorial&raquo;</a>
		</p>
	</div>

	<!--   overview of tutorial here    -->


	<div id="tutorial-slide-2" class="slide">

		<h4 style="font-size: 2em; padding-bottom: 15px;">Dementia &amp;
			Alzheimer's Disease - A Short Overview</h4>

		<p>
			<strong>Objectives</strong>
		</p>

		<ul>
			<li>Describe Dementia</li>
			<li>Describe Alzheimer's disease</li>
			<li>Explore data and statistics regarding Alzheimer's and Dementia
				(US)</li>
		</ul>

		<p>Memory loss and other signs of mental decline have profound effects
			on the lives of individuals and families. Nevertheless, we are
			convinced that a good quality of life can still be maintained for all
			concerned by learning to make changes in lifestyle and outlook. For
			many family members, this involves a change in relationships and
			priorities. At times the demands may seem overwhelming, but
			understanding the type of cognitive impairment can be the first step
			in combating a challening situation.</p>

		<p>Data and research have been devloped or collected for this tutorial
			course by the following:</p>

		<ul style="list-style-type: none";>
			<li style="padding-bottom: 15px;"><a href="http://www.alz.org"
				target="_blank">Alziehmer's Assocation</a></li>
			<li><a href="http://matherlifewaysinstituteonaging.com"
				target="_blank">Mather LifeWays Insitute on Aging</a></li>
			<li style="padding-top: 15px;"><a href="http://www.nia.nih.gov"
				target="_blank">U.S. Department of Health &amp; Human Services -
					National Institute on Aging</a></li>
		</ul>


		<div
			style="border: 2px solid; border-radius: 25px; -moz-border-radius: 25px; /* Firefox 3.6 and earlier */ padding: 5px; margin: 15px; background-color: #F8F8F8;">

			<p>
				To help us collect data on our users, please let us know if you have
				ever taken an online course before? <select>
					<option selected="selected" value="select">Select</option>
					<option value="yes">YES</option>
					<option value="no">NO</option>
				</select>

				<button type="submit">Submit</button>
				<button type="reset">Reset</button>
			</p>



			<!--  need javascriopt validator and response for both answers -->
		</div>


		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo;
				Back</a> <a href="javascript:;" onclick="$.fancybox.next();"
				class="button">Next &raquo;</a>
		</p>
	</div>

	<!--  Dementia here    -->

	<div id="tutorial-slide-3" class="slide">

		<h4 style="font-size: 2em; padding-bottom: 15px;">Dementia</h4>

		<p>Dementia refers to an acquired and progressive loss of mental
			functions due to a brain disorder. Dementia is not a specific
			disease. It's an overall term that describes a wide range of symptoms
			associated with a decline in memory or other thinking skills severe
			enough to reduce a person's ability to perform everyday activities. A
			medical diagnosis is required to determine the underlying cause or
			causes of symptoms.</p>

		<p>
			<strong>Symptoms and signs of dementia</strong>
		</p>

		<p>While symptoms of dementia can vary greatly, at least two of the
			following core mental functions must be significantly impaired to be
			considered dementia:</p>

		<ul>
			<li>Memory</li>
			<li>Communication and language</li>
			<li>Ability to focus and pay attention</li>
			<li>Reasoning and judgment</li>
			<li>Visual perception</li>
		</ul>

		<p>People with dementia may have problems with short-term memory,
			keeping track of a purse or wallet, paying bills, planning and
			preparing meals, remembering appointments or traveling out of the
			neighborhood. Many dementias are progressive, meaning symptoms start
			out slowly and gradually get worse.</p>


		<div
			style="border: 2px solid; border-radius: 25px; -moz-border-radius: 25px; /* Firefox 3.6 and earlier */ padding: 5px; margin: 15px; background-color: #F8F8F8;">

			<p>
				Without searching the web, is Dementia a disease of the brain? <select>
					<option selected="selected" value="select">Select</option>
					<option value="yes">YES</option>
					<option value="no">NO</option>
				</select>

				<button type="submit">Submit</button>
				<button type="reset">Reset</button>
			</p>
		</div>
		<br> <br> <br>
		<!--  need javascript validator and response here -->

		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo;
				Back</a> <a href="javascript:;" onclick="$.fancybox.next();"
				class="button">Next &raquo;</a>
		</p>

	</div>


	<!--  Alzheimer's disease here    -->


	<div id="tutorial-slide-4" class="slide">

		<h4 style="font-size: 2em; padding-bottom: 15px;">Alzheimer's Disease</h4>

		<p>Alzheimer's disease is an irreversible, progressive brain disease
			that slowly destroys memory, thinking skills, behavior, and
			eventually even the ability to carry out the simplest tasks of daily
			living. Alzheimer's is the most common form of dementia. Symptoms
			usually develop slowly and get worse over time. In most people with
			Alzheimer's, symptoms first appear after age 60. Alzheimer’s
			disease is the most common cause of dementia among older people.
			Alzheimer's has no current cure, but treatments for symptoms are
			available and research continues. The disease is named after Dr.
			Alois Alzheimer.</p>


		<p>
			<strong>Symptoms and signs of Alzheimer's disease</strong>
		</p>

		<p>The following is a short list of warning signs to look for if you
			suspect someone is suffering from Alzeheimr's disease:</p>

		<ul>
			<li>Memory loss that disrupts daily life</li>
			<li>Challenges in planning or solving problems</li>
			<li>Difficulty completing familir tasks at home, at work or at
				leisure</li>
			<li>Confusion with time or place</li>
			<li>Decreased or poor judgement</li>
		</ul>


		<div
			style="border: 2px solid; border-radius: 25px; -moz-border-radius: 25px; /* Firefox 3.6 and earlier */ padding: 5px; margin: 15px; background-color: #F8F8F8;">

			<p>Without searching the Web, what other signs might there be?</p>

			<input type="checkbox" value="1">Trouble understanding visual images
			and spatial relationships</input><br> <input type="checkbox"
				value="2">New problems with words in speaking or writing</input><br>
			<input type="checkbox" value="3">Misplacing things and losing the
			ability to retrace steps</input><br> <input type="checkbox" value="4">Withdrawal
			from work or social activities</input><br> <input type="checkbox"
				value="5">Changes in mood and personality</input><br>

			<button type="submit">Submit</button>
			<button type="reset">Reset</button>
		</div>

		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo;
				Back</a> <a href="javascript:;" onclick="$.fancybox.next();"
				class="button">Next &raquo;</a>
		</p>

	</div>


	<!--   data, stats, video here    -->

	<div id="tutorial-slide-5" class="slide">

		<h4 style="font-size: 2em; padding-bottom: 15px;">Stats and Data (US)</h4>

		<p>
			<iframe width="450" height="290"
				src="http://www.youtube.com/embed/In1IJocVor8?rel=0" frameborder="0"
				allowfullscreen="" align="right"></iframe>
		</p>

		<p>
			<strong>Alzheimer's disease</strong>
		</p>

		<ul>
			<li>Alzheimer's is the sixth-leading cause of death in the country
				and the only cause of death among the top 10 in the United States
				that cannot be prevented, cured or even slowed.</li>
			<li>An estimated 800,000 individuals with Alzheimer's (or one in
				seven) live alone.</li>
			<li>A new person develops Alzheimer's disease every 69 seconds --
				this is projected to increase to every 33 seconds by 2050.</li>
			<li><a href="http://www.alz.org/downloads/facts_figures_2012.pdf"
				target="_blank">2012 Alzheimer's Disease Facts and Figures report</a>
			</li>
		</ul>

		<p>
			<strong>Dementia</strong>
		</p>

		<ul>
			<li>Millions of people in the United States have some degree of
				dementia, and that number will increase over the next few decades
				with the aging of the population.</li>
			<li>Dementia affects about 1% of people aged 60-64 years and as many
				as 30-50% of people older than 85 years.</li>
			<li>It is the leading reason for placing elderly people in
				institutions such as nursing homes.</li>
		</ul>


		<p>By conducting your own research, use the search boxes below to find
			additional data and statics on Dementia and Alzehimer's disease.</p>


		<form method="get" action="http://www.google.com/search"
			target="_blank">


			<input type="search" name="q" size="35" maxlength="255" value="" /> <input
				type="submit" value="Google Search" />
		</form>


		<!-- 
<form method="get" action="http://www.youtube.com" target="_blank"><input
	type="search" name="q" size="35" maxlength="255" value="" /> <input
	type="submit" value="YouTube Search" /></form>
					-->


		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo;
				Back</a> <a href="javascript:;" onclick="$.fancybox.next();"
				class="button">Next &raquo;</a>
		</p>




	</div>

	<!--   closing here    -->

	<div id="tutorial-slide-6" class="slide">

		<h4 style="font-size: 2em; padding-bottom: 15px;">Assessment</h4>

		<div
			style="border: 2px solid; border-radius: 25px; -moz-border-radius: 25px; /* Firefox 3.6 and earlier */ padding: 5px; margin: 15px; background-color: #F8F8F8;">


			<p>Please take a moment to complete this short assessment. Your
				responses are not recorded, but you will recieve immiedate feedback
				once submitted.</p>

			<p>Dementia and Alzheimer's are disease's of the brain.</p>
			<select>
				<option selected="selected" value="select">Select</option>
				<option value="yes">True</option>
				<option value="no">False</option>
			</select>

			<p>Alzheimer's is the most common form of dementia.</p>
			<select>
				<option selected="selected" value="select">Select</option>
				<option value="yes">True</option>
				<option value="no">False</option>
			</select>
		</div>

		<h4 style="font-size: 2em; padding-bottom: 15px;">Certificate of
			Completion</h4>

		<p>Thank you for participating in this tutorial course. Hopefully, you
			have gotten a better idea on how our courses are structured and what
			your experience will be like. Your next step is to register, and
			begin participating in the available courses. Click on the icon below
			to downlod your certficiate:</p>

		<p>
			<img
				src="http://static.verious.com/screenshots/4fa8b5f84cdcab7a46000caf.jpeg"
				alt="Adobe Reader (PDF) Logo" width="75px" height="75px"
				align="CENTER" border="0" />
		</p>

		<div
			style="border: 2px solid; border-radius: 25px; -moz-border-radius: 25px; /* Firefox 3.6 and earlier */ padding: 5px; margin: 15px; background-color: #F8F8F8;">

			<p>
				<strong>Survey (voluntary and anonymous)</strong>
			</p>

			<p>
				Did this tutorial course provide you with an acceptable learning
				experience? <select>
					<option selected="selected" value="select">Select</option>
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</p>

			<p>
				Was the content depth and detail: <select>
					<option selected="selected" value="select">Select</option>
					<option value="10">Great</option>
					<option value="5">Average</option>
					<option value="0">Poor</option>
				</select>
			</p>

			<p>
				How likely are you to participate in a full course, based on your
				experience with this tutorial course? <select>
					<option selected="selected" value="select">Select</option>
					<option value="10">Likely</option>
					<option value="5">Possibly</option>
					<option value="0">Not Likely</option>
				</select>
			</p>

		</div>

		<p>
			<a href="javascript:;" onclick="$.fancybox.pos(0);" class="button">&laquo;
				Start Over</a>
		</p>
	</div>
</div>
