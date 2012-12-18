<?php
$this->pageTitle = Yii::app()->name . ' - '.t('Guest');

$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('home.css'));
$clientScript->registerCssFile($this->getStylesUrl('tutorial.css'));

$clientScript->registerScriptFile($this->getScriptsUrl('jquery.cycle.js'), CClientScript::POS_HEAD);
$clientScript->registerScript('customers_cycle', "$('#customers').cycle({ fx: 'fade' });");

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => '.open-tutorial',
				'config' => array(
						'width' => '1024px',
						'height' => '768px',
						'arrows' => false,
						'autoSize' => false,
						'mouseWheel' => false,
							
				)
		)
);

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => '.survey',
				'config' => array(
						'width' => '1024px',
						'height' => '768px',
						'arrows' => false,
						'autoSize' => false,
						'mouseWheel' => false,
				)
		)
);

?>
<div id="home-image">
	<h1>
		<?php echo t('Web-based Training for Caregivers'); ?>
	</h1>
</div>
<div id="sidebar">

	<div class="box-sidebar zero">
		<a href="<?php echo $this->createUrl('user/register'); ?>"><?php echo t('Register'); ?>
		</a> <a href="<?php echo $this->createUrl('home/contact'); ?>"
			class="teal"><?php echo t('Request Information'); ?> </a> <a
			href="#slide-1" data-fancybox-group="open-tutorial"
			class="teal open-tutorial"> <?php echo t('Tutorial'); ?>
		</a> <a href="#slide-2" data-fancybox-group="open-tutorial"
			class="open-tutorial" style="display: none;"></a> <a href="#slide-3"
			data-fancybox-group="open-tutorial" class="open-tutorial"
			style="display: none;"></a> <a href="#slide-4"
			data-fancybox-group="open-tutorial" class="open-tutorial"
			style="display: none;"></a> <a href="#slide-5"
			data-fancybox-group="open-tutorial" class="open-tutorial"
			style="display: none;"></a> <a href="#slide-6"
			data-fancybox-group="open-tutorial" class="open-tutorial"
			style="display: none;"></a>
	</div>

	<div class="box-sidebar one">
		<h3>
			<?php echo t('Statistics on Caregivers'); ?>
		</h3>
		<div>
			<img src="<?php echo $this->getImagesUrl('stat-two-thirds.png'); ?>"
				style="margin-bottom: 8px;" /><br />
			<?php echo t('2/3 of working caregivers in the USA report conflicts between work and caregiving that result in increased
					absenteeism, workday interruptions, reduced hours, and workload
					shifting to other employees.'); ?>
		</div>
	</div>

	<div class="box-sidebar two">
		<h3>
			<?php echo t('Recent Research (USA)'); ?>
		</h3>
		<div style="text-align: center">
			<img src="<?php echo $this->getImagesUrl('metlife.jpg'); ?>" />
		</div>
		<p style="font-weight:bold; text-align:center;">
			<?php echo t('Double Jeopardy for Baby Boomers Caring for Their Parents'); ?>
			</p>
		<p>
			<?php echo t('Nearly 10 million adult children over the age of 50 care for their
					aging parents. These family caregivers are themselves aging as well
					as providing care at a time when they also need to be planning and
					saving for their own retirement. The study is an updated, national
					look at adult children who work and care for their parents and the
					impact of caregiving on their earnings and lifetime wealth.'); ?>
		</p>
		<p>
			<a
				href="http://www.metlife.com/assets/cao/mmi/publications/studies/2010/mmi-working-caregivers-employers-health-care-costs.pdf"
				class="pdf"><?php echo t('The MetLife Study of Working Caregivers and
						Employer Health Care Costs (English)'); ?> </a>
		</p>
	</div>

	<div class="box-sidebar three">
		<h3>
			<?php echo t('Whitepapers (English)'); ?>
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

		<h3>Aging in Action</h3>
		<p>Aging in Action is Mather LifeWays Institute on Aging's monthly
			e-newsletter and blog containing the latest research news in the
			field of aging.</p>
		<p style="text-align: center;">
			<a href="http://twitter.com/aginginaction" target="_blank"> <img
				src="<?php echo $this->getImagesUrl('twitter-bird.png'); ?>" />
			</a>
		</p>
		
		<div class="clear"></div>
	</div>

	<div class="box-sidebar three">
		<h3>
			<?php echo t('Our Clients'); ?>
		</h3>
		<div id="customers">
			<a href="http://www.ibm.com"><img
				src="<?php echo $this->getImagesUrl('customers/ibm.png'); ?>"
				alt="IBM" /> </a> <a href="http://www.ti.com/"><img
				src="<?php echo $this->getImagesUrl('customers/ti.png'); ?>"
				alt="Texas Instrument" /> </a> <a href="http://www.merck.com"><img
				src="<?php echo $this->getImagesUrl('customers/merck.png'); ?>"
				alt="Merck Pharmaceuticals" /> </a> <a
				href="http://www.exxonmobil.com"><img
				src="<?php echo $this->getImagesUrl('customers/exxon.png'); ?>"
				alt="Merck Pharmaceuticals" /> </a> <a
				href="http://www.deloitte.com"><img
				src="<?php echo $this->getImagesUrl('customers/deloitte.png'); ?>"
				alt="Deloitte" /> </a> <a href="http://matherlifeways.com/"><img
				src="<?php echo $this->getImagesUrl('customers/mather.png'); ?>"
				alt="Mather Lifeways" /> </a>
		</div>
	</div>

</div>

<div class="column-wide">
	<h2 class="flowers">Mather LifeWays Institute on Aging</h2>
	<p>
		<?php echo t('Through research-based programs and innovative techniques,'); ?>
		Mather LifeWays Institute on Aging
		<?php echo t('is committed to advancing the field of
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
		situation these caregivers were in. (English)'); ?>
	</p>


	<div class="box-grey">
		<div id="MatherCaregivers">
			<?php 
			$this->widget(
					'ext.JWplayer.JWplayer',
					array(
							'id' => 'MatherCaregivers',
							'config' => array(
									'image' => $this->createUrl('download').'/videos/MatherCaregivers/poster.jpg',
									'width' => '540px',
									'height' => '305px',
									'levels' => array(
											array('file' => $this->createUrl('download').'/videos/MatherCaregivers/video.m4v'),
											array('file' => $this->createUrl('download').'/videos/MatherCaregivers/video.webm'),
											array('file' => $this->createUrl('download').'/videos/MatherCaregivers/video.ogv')
									)
							)
					)
			);
			?>
		</div>
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
				experiences for each course user.'); ?>
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
		<img src="<?php echo $this->getImagesUrl('home-chart.png'); ?>" />
	</div>

	<div class="box-white">
		<?php
		$this->widget(
				'modules.surveyor.widgets.Survey',
				array(
						'model' => $models['workingCaregiver_survey'],
						'title' => array('htmlOptions' => array('class' => 'flowers')),
						'question' => array('htmlOptions' => array('class' => 'row')),
						'form' => array(
								'options' =>
								array(
										'enableAjaxValidation' => true,
										'enableClientValidation' => true
								),
						),
						'submitButton' => array('htmlOptions' => array('class' => 'row submit')),
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
		href="http://www.mediastorm.com/" id="mediastorm" target="_blank">Mediastorm</a>
	<div class="clear"></div>

</div>
<div style="display: none;">
	<?php 
	$this->widget(
			'modules.surveyor.widgets.Survey',
			array(
					'model' => $models['hrEmployer_survey'],
					'title' => array('htmlOptions' => array('class' => 'flowers')),
					'form' => array('options' =>
							array(
									'enableAjaxValidation' => true,
									'enableClientValidation' => true
							),
					)
			)
	);
	?>
</div>
<div style="display: none;">
	<?php 
	$this->widget(
			'modules.surveyor.widgets.Survey',
			array(
					'model' => $models['caregiver_survey'],
					'title' => array('htmlOptions' => array('class' => 'flowers')),
					'form' => array('options' =>
							array(
									'enableAjaxValidation' => true,
									'enableClientValidation' => true
							),
					)
			)
	);
	?>
</div>

<!--  start tutorial course here -->

<div id="tutorial" style="display: none;">
	<div id="slide-1" class="slide">
		<h2 class="flowers">
			<?php echo t('Tutorial'); ?>
		</h2>
				<hr>
				
			<p style="text-align: center; font-weight: bold;" />
				THANK YOU for your interest and support!
			</p>
			<p>
				<?php echo t('We are Mather LifeWays, a unique, non-denominational not-for-profit organization based in Evanston, 
				Illinois, USA, founded more than 70 years ago. We provide a continuum of living and 
				care; make neighborhoods better places for older adults to live, work, learn, contribute, and play; and identify, 
				implement, and share best practices for wellness programs, aging-in-the-workplace 
				issues, emergency preparedness, staff development, and online education and programs empowering working family 
				caregivers. We are committed to being an ongoing resource for older adults and our 
				partners - continuing to introduce progressive ideas and help advance all areas of aging and living well.'); ?>
			</p>
			<p>
				<?php echo t('Through conducting applied research, Mather LifeWays Institute on Aging has developed award-winning, 
				evidence-based education programs for professionals who serve older adults. Staffed by nationally recognized 
				researchers and educators, the Institute is a global resource for information about wellness, successful 
				aging service innovations, and educational programming.'); ?>
			</p>
			<p>
				<?php echo t('This tutorial is designed to help demonstrate our course model, and is meant to be a 
						basic presentation. We will briefly explore dementia, Alzheimer\'s disease, and how they are related.
				Please feel free to contact us if you have questions, or need help.'); ?>
			</p>
			<p>
			<?php echo t('Memory loss and other signs of mental decline have profound effects
					on the lives of individuals and families. But we are
					convinced that a good quality of life can still be maintained for all
					concerned by learning to make changes in lifestyle and outlook. For
					many family members, this involves a change in relationships and
					priorities. At times, the demands may seem overwhelming, but
					understanding the type of cognitive impairment can be the first step
					in combating a challenging situation.'); ?>
		</p>
			<p style="font-weight: bold;" />
			<?php echo t('Objectives'); ?>
			</p>
			<p>
			<ul>
				<li><?php echo t('Describe dementia'); ?></li>
				<li><?php echo t('Describe Alzheimer\'s disease'); ?></li>
				<li><?php echo t('Describe the relationship between dementia and Alzheimer\'s disease'); ?>
				</li>
			</ul>
			</p>
			<p style="font-size: small; font-style: italic;" />
			<?php echo t('Data and research have been developed or collected for this tutorial
			course by the following:'); ?>
		</p>

		<ul>
			<li style="font-size: small; font-style: italic;" /><a href="http://www.alz.org" target="_blank">Alzheimer's
					Association</a> <?php echo t('(USA)'); ?></li>
			<li style="font-size: small; font-style: italic;" /><a href="http://matherlifewaysinstituteonaging.com"
				target="_blank">Mather LifeWays Institute on Aging</a> <?php echo t('(USA)'); ?>
			</li>
			<li style="font-size: small; font-style: italic;" /><a href="http://www.nia.nih.gov" target="_blank">United States
					Department of Health &amp; Human Services - National Institute on
					Aging</a></li>
		</ul>
		<p class="course-buttons" style="text-align: center; ">
				<a href="javascript:;" class="button right"	onClick="$.fancybox.next();"><?php echo t('Start Tutorial &raquo;'); ?>
				</a>
		</p>
	</div>

	<!--   Slide #2 Alzheimer's disease    -->

	<div id="slide-2" class="slide">
		<h4 style="font-size: 2em;">
			<?php echo t('Alzheimer\'s disease'); ?>
		</h4>
			<hr>
			<p>
				<?php echo t('With such a profound impact on society, business, and potentially	on your family, could 
				you explain what Alzheimer\'s disease is? How about dementia?'); ?>
			</p>
			<p>
				<?php echo t('Alzheimer\'s disease is an irreversible, progressive brain disease
					that slowly destroys memory, thinking skills, behavior, and
					eventually even the ability to carry out the simplest tasks of daily
					living. Symptoms usually develop slowly, worsen over time, and first appear after age 60. Alzheimer\'s
					disease is the most common form and cause of dementia among older people.
					Alzheimer\'s has no current cure, but treatments for symptoms are
					available and research continues. The disease is named after Dr.
					Alois Alzheimer. According to the Alzheimer\'s Association (2012) (USA):'); ?>
			</p>
			<ul>
				<li class="pull-quote"><?php echo t('5.4 million Americans are living with Alzheimer\'s disease.'); ?>
				</li>
				<li class="pull-quote"><?php echo t('One in eight older Americans has Alzheimer\'s disease.'); ?>
				</li>
				<li class="pull-quote"><?php echo t('Alzheimer\'s is not a normal part of aging'); ?>
				</li>
			</ul>
			<p>
				<?php echo t('What to look for if you suspect someone is suffering from Alzheimer\'s disease:'); ?>
			</p>

		<ul>
			<li><?php echo t('Challenges in planning or solving problems'); ?></li>
			<li><?php echo t('Difficulty completing familiar tasks at home, at work or at leisure'); ?>
			</li>
			<li><?php echo t('Confusion with time or place'); ?></li>
		</ul>	
		
		  <p><iframe width="450" height="290" src="http://www.youtube.com/embed/In1IJocVor8?rel=0" frameborder="0"
			allowfullscreen="" class="tutorial-video"></iframe></p>
		
		<p class="course-buttons" style="text-align: center">
			<a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();"><?php echo t('&laquo; Back'); ?> </a> <a
				href="javascript:;" class="button right"
				onClick="$.fancybox.next();"><?php echo t('Next &raquo;'); ?> </a>
		</p>
	</div>

	<!--  dementia here    -->

	<div id="slide-3" class="slide">

		<h4 style="font-size: 2em;"><?php echo t('Dementia'); ?></h4>

		<hr>	
		<p>
			<?php echo t('Dementia refers to an acquired and progressive loss of mental
					functions due to a brain disorder. Dementia is not a specific
					disease. It is an overall term that describes a wide range of symptoms
					associated with a decline in memory or other thinking skills severe
					enough to reduce a persons ability to perform everyday activities. A
					medical diagnosis is required to determine the underlying cause or
					causes of symptoms.'); ?>
		</p>

		<p>
			<strong> <?php echo t('Symptoms and signs of dementia'); ?>
			</strong>
		</p>

		<p>
			<?php echo t('While symptoms of dementia can vary greatly, at least two of the
					following core mental functions, amongst others, must be significantly impaired to be
			considered dementia:'); ?>
		</p>

		<ul>
			<li><?php echo t('Memory'); ?></li>
			<li><?php echo t('Communication and language'); ?></li>
			<li><?php echo t('Ability to focus and pay attention'); ?></li>
		</ul>

		<p>
			<?php echo t('People with dementia may have problems with short-term memory,
					keeping track of a purse or wallet, paying bills, planning and
					preparing meals, remembering appointments or traveling out of the
					neighborhood. Many dementias are progressive, meaning symptoms start
			out slowly and gradually get worse.'); ?>
		</p>

			<img src="<?php echo $this->getImagesUrl('image-men.png'); ?>"
							style="margin: 20px 20px; width: 95%;" />

		<p class="course-buttons" style="text-align: center">
			<a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();"><?php echo t('&laquo; Back'); ?> </a> <a
				href="javascript:;" class="button right"
				onClick="$.fancybox.next();"><?php echo t('Next &raquo;'); ?> </a>
		</p>

	</div>


	<!--  Slide #4 Relationship    -->

	<div id="slide-4" class="slide">

		<h4 style="font-size: 2em;"><?php echo t('The Relationship'); ?></h4>
			<hr>
		
			<p class="course-buttons" style="text-align: center;">
				<a href="javascript:;" class="button left" 	onclick="$.fancybox.prev();"><?php echo t('&laquo; Back'); ?> </a>
				<a href="javascript:;" class="button right" onClick="$.fancybox.next();"><?php echo t('Next &raquo;'); ?> </a>
			</p>
	</div>

	<!--   Slide #5 Assessment   -->

	<div id="slide-5" class="slide">

		<h4 style="font-size: 2em;">
			<?php echo t('Assessment'); ?>
		</h4>

		<hr>
		
		<div id="question">

			<p>
				<?php echo t('Without searching the web, is dementia a disease of the brain?'); ?>
				<br> <br> 
				<select>
					<option selected="selected" value="select">
						<?php echo t('Select'); ?>
					</option>
					<option value="1">
						<?php echo t('Yes'); ?>
					</option>
					<option value="0">
						<?php echo t('No') ?>
					</option>
				</select>

				<?php
				$clientScript->registerScript('slide-3',
						"$('#slide-3 #question select').change(function() {
						if($(this).val() == '1') {
						$('#slide-3 #question p').html('Great! Yes, Dementia is a disease of the brain.');
} else {
						$('#slide-3 #question p').html('Please review this slide again. Dementia is a disease of the brain.');
}
});");
				?>
		
		</div>
	<!-- 
		<div id="question">

			<p>
				<?php echo t('Without searching the Web, what other signs might there be?'); ?>
			</p>

			<select>
				<option selected="selected" value="select">
					<?php echo t('Select'); ?>
				</option>
				<option value="0">
					<?php echo t('Having a brown hair'); ?>
				</option>
				<option value="1">
					<?php echo t('Misplacing things and losing the ability to retrace steps'); ?>
				</option>
			</select>
			<?php
			$clientScript->registerScript('slide-4',
					"$('#slide-4 #question select').change(function() {
					if($(this).val() == '0') {
					$('#slide-4 #question p').html('No. This is not a sign. The correct response is: misplacing things and losing the ability to restrace steps.');
}
					else {
					$('#slide-4 #question p').html('Correct!');
}
});");
			?>
			
	

		</div>
		
	-->	
		<p>
			<strong> <?php echo t('Tutorial Assessment'); ?>
			</strong>
		</p>

		<ul>
			<li><?php echo t('Alzheimer\'s is the sixth-leading cause of death and the only cause of death among the top 10 in the United States
					that cannot be prevented, cured or even slowed.'); ?>
			</li>
			<li><?php echo t('An estimated 800,000 individuals with Alzheimer\'s live alone in the United States.'); ?>
			</li>
			<li><?php echo t('A new person develops Alzheimer\'s disease every 69 seconds in the United States --
					this is projected to increase to every 33 seconds by 2050.'); ?>
			</li>
			<li><?php echo t('<a href="http://www.alz.org/downloads/facts_figures_2012.pdf"
					target="_blank">2012 United States Alzheimer\'s Disease Facts and
					Figures report (English)</a>'); ?> - Alzheimer's Association (USA)
			</li>
		</ul>

		<p>
			<strong> <?php echo t('Dementia'); ?>
			</strong>
		</p>

		<ul>
			<li><?php echo t('Millions of people in the United States have some degree of
					dementia, and that number will increase over the next few decades
					with the aging of the population.'); ?>
			</li>
			<li><?php echo t('In the United States, dementia affects about 1% of people aged 60-64 years and as many
					as 30-50% of people older than 85 years.'); ?>
			</li>
			<li><?php echo t('It is the leading reason for placing elderly people in
					institutions such as nursing homes.'); ?>
			</li>
		</ul>


		<div id="question">

			<p>
				<?php echo t('Using the search box below, find additional data and statistics on dementia or Alzheimer\'s disease where you reside.<br>It is 
			important that you learn to conduct your own research.'); ?>

			</p>

			<form method="get" action="http://www.google.com/search"
				target="_blank">

				<input type="search" id="google-search" name="q" size="35"
					maxlength="255" value="" /> <br> <br> <input type="submit"
					value="<?php echo t('Google Search'); ?>" class="teal" />
			</form>
		</div>

		<!-- 
<form method="get" action="http://www.youtube.com" target="_blank"><input
	type="search" name="q" size="35" maxlength="255" value="" /> <input
	type="submit" value="YouTube Search" /></form>
					-->


		<p class="course-buttons" style="text-align: center;">
			<a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();"><?php echo t('&laquo;
						Back'); ?> </a> <a href="javascript:;" class="button right"
				onClick="$.fancybox.next();"><?php echo t('Next &raquo;'); ?> </a>
		</p>

	</div>

	<!--   slide 6 - closing here    -->

	<div id="slide-6" class="slide">

		<h4 style="font-size: 2em;">
			<?php echo t('Completion and Certificate (English)'); ?>
		</h4>

		<hr>
		<p>
			<?php echo t('Thank you for participating in this tutorial course! Now that you have a
				 better idea on what to expect, your next step is to register and
				begin participating!'); ?>
		</p>

		<div id="question">

			<p>
				<?php echo t('Please complete this final assessment.'); ?>
			</p>
			<p>
				<?php echo t('Dementia and Alzheimer\'s are diseases of the brain.'); ?>

				<select>
					<option selected="selected" value="select">
						<?php echo t('Select'); ?>
					</option>
					<option value="1">
						<?php echo t('True'); ?>
					</option>
					<option value="0">
						<?php echo t('False'); ?>
					</option>
				</select>
			</p>
			<p>
				<?php echo t('Alzheimer\'s is the most common form of dementia.'); ?>
				<select>
					<option selected="selected" value="select">
						<?php echo t('Select'); ?>
					</option>
					<option value="1">
						<?php echo t('True'); ?>
					</option>
					<option value="0">
						<?php echo t('False'); ?>
					</option>
				</select>
			</p>
		</div>

		<div id="question">

			<p>
				<?php echo t('Please complete this voluntary survey.'); ?>
			</p>
			<p>
				<?php echo t('How likely are you to participate in a full course, based on your
			experience with this tutorial course?'); ?>

				<select>
					<option selected="selected" value="select">
						<?php echo t('Select'); ?>
					</option>
					<option value="1">
						<?php echo t('Definitely!'); ?>
					</option>
					<option value="0">
						<?php echo t('No!'); ?>
					</option>
				</select>
			</p>

		</div>
		<p>
			<?php echo t('Click <a
					href="/themes/onlinecourseportal/images/CourseCompletionCertificate.pdf"
				target="_blank">here</a> to download your certificate.'); ?>
		</p>

		<p class="course-buttons" style="text-align: center;">
			<a href="#" onClick="parent.jQuery.fancybox.close();"
				class="button left"> <?php echo t('Exit'); ?>
			</a>
		</p>

	</div>


</div>
