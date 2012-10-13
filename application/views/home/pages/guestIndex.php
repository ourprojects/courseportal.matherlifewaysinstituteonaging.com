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
						'showNavArrows' => false
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
		<a href="<?php echo $this->createUrl('user/register'); ?>">
			<?php echo t('Register'); ?>
		</a> 
		<a href="<?php echo $this->createUrl('home/contact'); ?>" class="teal">
			<?php echo t('Request Information'); ?> 
		</a>
		<a href="#tutorial-slide-1" rel="tutorial" class="teal">
			<?php echo t('Tutorial'); ?>
		</a>
		<a href="#tutorial-slide-2" rel="tutorial" style="display:none"></a>
		<a href="#tutorial-slide-3" rel="tutorial" style="display:none"></a>
		<a href="#tutorial-slide-4" rel="tutorial" style="display:none"></a>
		<a href="#tutorial-slide-5" rel="tutorial" style="display:none"></a>
		<a href="#tutorial-slide-6" rel="tutorial" style="display:none"></a>
		<a href="#tutorial-slide-7" rel="tutorial" style="display:none"></a>
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
						Possibilities to Nursing Education'); ?>
			</a> <a
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
							link: Evanston, IL · http://www.aginginaction.com
							
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
	<h2 class="flowers" style="font-family:"SourceSansPro", Arial, sans-serif;">
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


	<div class="box-grey">
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
								'cssClass' => ''
							)
				)
		);
	?>
	</div>
	<!--
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
	      google.load("visualization", "1", {packages:["corechart"]});
	      google.setOnLoadCallback(drawChart);
	      function drawChart() {
	        var data = google.visualization.arrayToDataTable([
	          ['Task', 'Hours per Day'],
	          ['Online Course Delivery', 25],
	          ['Targeted Collaboration', 50],
	          ['Institution Wide Content Management', 25]
	        ]);

	        var options = {
	          colors: ["#f47b20", "#008c99", "#aaaaaa"],
	          legend: { position: "none" },
			  chartArea: {left:20, top:20, width:"90%", height:"90%" },
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('pie-chart'));
	        chart.draw(data, options);
	      }
	    </script>
	-->

	<h2 class="flowers top-pad">
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
	<div id="pie-chart">
		<img
			src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/home-chart.png" />
	</div>

	<?php 
	$this->widget(
			'modules.surveyor.widgets.Survey',
			array(
					'survey_model' => $models['workingCaregiver_survey'],
					'title_options' => array('class' => 'flowers top-pad'),
					'form_options' => array('enableAjaxValidation' => true,
											'enableClientValidation' => true),
			)
	);
	?>

	<h2 class="flowers top-pad">
		<?php echo t('Health status of your working caregivers'); ?>
	</h2>
	<p>
		<?php echo t('Please choose one of the surveys below to take. Depending on your position, employer 
	or employee, submit this voluntary survey and view aggregate feedback from all previous users.'); ?>
	</p>

	<p>
		<a id="hrEmployerSurvey" href="#survey_hrEmployer" class="survey"
			title="<?php echo t('HR/Employer Survey'); ?>"><?php echo t('HR/Employer Survey'); ?>
		</a> <a id="caregiverSurvey" href="#survey_caregiver" class="survey"
			title="<?php echo t('Caregiver Survey'); ?>"><?php echo t('Caregiver Survey'); ?>
		</a>
	</p>

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
				'title_options' => array('class' => 'flowers top-pad'),
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
				'title_options' => array('class' => 'flowers top-pad'),
				'form_options' => array('enableAjaxValidation' => true,
										'enableClientValidation' => true),
		)
);
?>
</div>
<div style="display: none;">
	<div id="tutorial-slide-1" class="slide">
		<h2 class="flowers">A Guide to Memory Loss (Online)</h2>

		<p>Welcome and thank you for your interest and support of Mather
			LifeWays Institute on Aging. This three-minute online course was
			designed to give users' a quick example of what they can expect to
			experience on this course portal. Please feel free to contact us if
			you have questions and/or concerns, or need help. THANK YOU!</p>
		<!-- style this stat below with CSS3 -->

		<h2>2 million Americans suffer from some form of memory loss</h2>

		<p>This tutorial will expose you to some basic information regarding
			medical causes of memory loss and the general symptoms of Alzheimer's
			disease. This tutorial lesson is meant to be a very basic
			presentation, and by no means is conclusive or all-ending.</p>
		<!-- image here, faded/transparet bottom 20% to compensate for 2 buttons -->
		<p>
			<a href="javascript:;" onclick="$.fancybox.next();" class="button">Start Course&raquo;</a>
		</p>
	</div>
	<div id="tutorial-slide-2"  class="slide">
		<p class="image-right">
			<iframe width="450" height="290"
				src="http://www.youtube.com/embed/In1IJocVor8?rel=0" frameborder="0"
				allowfullscreen=""></iframe>
		</p>
		<h4>Types of Memory Loss - A Short Overview</h4>

		<p>
			<strong>Lesson Objectives</strong>
		</p>

		<ul>
			<li>Explore major medical causes of memory loss</li>
			<li>Explore the general symptoms of Alzheimer's disease</li>
		</ul>

		<p>Memory loss and other signs of mental decline have profound effects
			on the lives of individuals and families. Nevertheless, we are
			convinced that a good quality of life can still be maintained for all
			concerned by learning to make changes in lifestyle and outlook. For
			many family members, this involves a change in relationships and
			priorities. At times the demands may seem overwhelming. This
			educational series is aimed at helping you make decisions about how
			and when to make changes in your lifestyle, both now and in the
			future.</p>

		<!-- we must be carefule that all text can be translated -->

		<p>Have you ever taken an online course before?</p>
		<p>
			<label><input type="radio" /> Yes</label><br /> <label><input
				type="radio" /> No</label>
		</p>
		<p>
			<button type="submit">Submit</button>
		</p>
		<!-- CSS3 background for response/feedback, possible teal background box, w/ round corners or something similar, can be static box too (??) -->
		<!-- yes: "Great! Good Luck!" no: "No Problem! Please review this <a href="http://gradschool.about.com/b/2012/08/31/taking-an-online-class-read-these-3-tips.htm" target="_blank"> website</a> which has great suggestions for taking a online course." -->
		<!-- image here -->
		<hr />
		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo; Back</a>
			<a href="javascript:;" onclick="$.fancybox.next();" class="button">Next &raquo;</a>
		</p>
	</div>
	<div id="tutorial-slide-3" class="slide">

		<h4>Explore major medical causes of memory loss</h4>

		<p>Dementia refers to an acquired and progressive loss of mental
			functions due to a brain disorder. Memory loss is typically the first
			symptom shown by someone with dementia. This is not a normal part of
			the aging process, even though the vast majority of persons who
			experience a dementia are over 65 years of age. A medical diagnosis
			is required to determine the underlying cause or causes of symptoms.
			In the past, terms like "senility" and "hardening of the arteries"
			were commonly used to describe dementia but do not accurately explain
			the disease process at work.</p>

		<p>Without searching the web, which of the following are four types of
			memory loss?</p>

		<p>
			<label><input type="radio" />Dementia, Alzheimer's, Delirium, Amnesia</label><br />
			<label><input type="radio" />Dementia, Dysthymia, Mild- Cognitive
				Impairment (MCI), Amnesia </label><br /> <label><input type="radio" />Depression,
				Alzheimer's, Delirium, Zionism </label><br /> <label><input
				type="radio" />Dementia, Zionism, Diabetes, Amnesia </label>
		
		
		</ul>

		<p>
			<button type="submit">Submit</button>
			<button type="reset">Reset</button>
		</p>
		<hr />
		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo; Back</a>
			<a href="javascript:;" onclick="$.fancybox.next();" class="button">Next &raquo;</a>
		</p>
		<!-- feedback on submit: "If you selected Dementia, Alzheimer's, Delirium, Amnesia, then you are CORRECT!" -->
	</div>
	<div id="tutorial-slide-4" class="slide">

		<h4>Explanation of types of memory loss</h4>

		<p>Dementia is a slow decline in memory, problem-solving ability,
			learning ability, and judgment that may occur over several weeks to
			several months. Many health conditions can cause dementia or symptoms
			similar to dementia. In some cases dementia may be reversible.</p>

		<p>Alzheimer's disease is the most common cause of dementia in people
			older than age 65.</p>

		<p>Delirium is a sudden change in how well a person's brain is working
			(mental status). Delirium can cause confusion, change the sleep-wake
			cycles, and cause unusual behavior. Delirium can have many causes,
			such as withdrawal from alcohol or drugs or medicines, or the
			development or worsening of an infection or other health problem.</p>

		<p>Amnesia is memory loss that may be caused by a head injury, a
			stroke, substance abuse, or a severe emotional event, such as from
			combat or a motor vehicle accident. Depending upon the cause, amnesia
			may be either temporary or permanent.</p>

		<p>For additional information on these noted types of memory loss, and
			for a better understanding, please search each of these types on the
			Web.</p>

		<form method="get" action="http://www.google.com/search"
			target="_blank">
			<table border="0" cellpadding="0">
				<tr>
					<td><input type="search" name="q" size="35" maxlength="255"
						value="" /> <input type="submit" value="Google Search" /></td>
				</tr>

				<tr>
					<td align="center" style="font-size: 75%"><br /></td>
				</tr>
			</table>
		</form>

		<form method="get" action="http://www.youtube.com" target="_blank">
			<table border="0" cellpadding="0">
				<tr>
					<td><input type="search" name="q" size="35" maxlength="255"
						value="" /> <input type="submit" value="YouTube Search" /></td>
				</tr>

				<tr>
					<td align="center" style="font-size: 75%"><br /></td>
				</tr>
			</table>
		</form>
		<!-- image here -->
		<hr />
		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo; Back</a>
			<a href="javascript:;" onclick="$.fancybox.next();" class="button">Next &raquo;</a>
		</p>

	</div>
	<div id="tutorial-slide-5" class="slide">

		<h4>Dementia &amp; Alzheimer's Disease</h4>

		<h3>About Dementia</h3>

		<p>Dementia is not a specific disease. It's an overall term that
			describes a wide range of symptoms associated with a decline in
			memory or other thinking skills severe enough to reduce a person's
			ability to perform everyday activities. Dementia is often incorrectly
			referred to as "senility" or "senile dementia," which reflects the
			formerly widespread but incorrect belief that serious mental decline
			is a normal part of aging.</p>

		<h3>Symptoms and signs of dementia</h3>

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

		<h3>About Alzheimer's Disease</h3>

		<p>Alzheimer's is a type of dementia that causes problems with memory,
			thinking and behavior. Symptoms usually develop slowly and get worse
			over time, becoming severe enough to interfere with daily tasks.</p>

		<h3>Alzheimer's basics</h3>

		<ul>
			<li>Alzheimer's is the most common form of dementia</li>
			<li>Alzheimer's is not a normal part of aging</li>
			<li>Alzheimer's worsens over time</li>
			<li>Alzheimer's has no current cure, but treatments for symptoms are
				available and research continues.</li>
		</ul>
		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo; Back</a>
			<a href="javascript:;" onclick="$.fancybox.next();" class="button">Next &raquo;</a>
		</p>

	</div>
	<div id="tutorial-slide-6" class="slide">

		<h3>Delirium &amp; Amnesia</h3>

		<h4>About Delirium</h4>

		<p>Delirium is sudden severe confusion and rapid changes in brain
			function that occur with physical or mental illness. Delirium is most
			often caused by physical or mental illness and is usually temporary
			and reversible. Many disorders cause delirium, including conditions
			that deprive the brain of oxygen or other substances.</p>

		<h4>Symptoms of Delirium</h4>

		<ul>
			<li>Changes in alertness (usually more alert in the morning, less
				alert at night)</li>

			<li>Changes in feeling (sensation) and perception</li>

			<li>Changes in level of consciousness or awareness</li>
		</ul>

		<h4>About Amnesia</h4>

		<p>Amnesia is a condition in which one's memory is lost. The memory
			can be either wholly or partially lost due to the extent of damage
			that was caused. The causes of amnesia have traditionally been
			divided into certain categories. Memory appears to be stored in
			several parts of the limbic system of the brain. Any condition that
			interferes with the function of this system can cause amnesia.</p>

		<h4>Symptoms of Amnesia</h4>

		<ul>
			<li>Impaired ability to learn new information following the onset of
				amnesia (anterograde amnesia)</li>

			<li>Impaired ability to recall past events and previously familiar
				information (retrograde amnesia)</li>
		</ul>
		<p>
			<a href="javascript:;" onclick="$.fancybox.prev();" class="button">&laquo; Back</a>
			<a href="javascript:;" onclick="$.fancybox.next();" class="button">Next &raquo;</a>
		</p>
	</div>
	<div id="tutorial-slide-7" class="slide">

		<h3>Assessment &amp; Completion</h3>

		<p>THANK YOU! for participating in this tutorial course. Hopefully,
			you have gotten a better idea on how our courses are structured and
			what your experience will be like. Your next step is to register, and
			begin participating in the available courses.</p>

		<p>Please click on the icon below for your certificate of completion.</p>
		<!-- image here of adobe icon here or something similar, links to pdf document with form-fill name field, certficiate of completion by mather lifeways, provided by Jon -->

		<p>Did this tutorial course provide you with a good experience?</p>

		<p>
			<input type="radio" name="surveyyes" /> <label for="surveyyes">Yes</label><br />
			<input type="radio" name="surveyno" /> <label for="surveyno">No</label>
			<!-- feedback yes: "Great!THANK YOU for your feedback!" no: "Please use the Contact Us page to tell us what we can do better" -->
		</p>
		</p>
		<p>
			<a href="javascript:;" onclick="$.fancybox.pos(0);" class="button">&laquo; Start
				Over</a>
		</p>
	</div>
</div>