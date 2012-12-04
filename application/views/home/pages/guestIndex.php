<?php
$this->pageTitle = Yii::app()->name . ' - '.t('Guest');

Yii::app()->getClientScript()->registerCssFile($this->getStylesUrl('home.css'));
Yii::app()->getClientScript()->registerCssFile($this->getStylesUrl('tutorial.css'));

Yii::app()->getClientScript()->registerScriptFile($this->getScriptsUrl('jquery.cycle.js'), CClientScript::POS_HEAD);
Yii::app()->getClientScript()->registerScript('customers_cycle', "$('#customers').cycle({ fx: 'fade' });");

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => 'tutorial',
				'target' => '.open-tutorial',
				'config' => array(
						'width' => '960px',
						'height' => '600px',
						'arrows' => false,
						'mouseWheel' => false,
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
						'autoDimensions' => false,
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
			<img
				src="<?php echo $this->getImagesUrl('stat-two-thirds.png'); ?>"
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
				src="<?php echo $this->getImagesUrl('metlife.jpg'); ?>" />
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
		<!-- text here
							header: 'Aging in Action'
							text: Aging in Action is Mather LifeWays Institute on Aging's monthly 
							e-newsletter and blog containing the latest research news in the field of aging.
							larger twitter image here
							link: Evanston, IL â€šÃ Ã« http://www.aginginaction.com
							
							 -->

		<h3>Aging in Action</h3>
		<p>Aging in Action is Mather LifeWays Institute on Aging's monthly
			e-newsletter and blog containing the latest research news in the
			field of aging.</p>
		<p style="text-align: center;">
			<a href="http://twitter.com/aginginaction" target="_blank"> <img
				src="<?php echo $this->getImagesUrl('twitter-bird.png'); ?>" />
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
		<?php echo t('A Closer Look - Lives of Caregivers (English)'); ?>
	</h2>

	<p style="padding-bottom: 10px;">
		<?php echo t( 
				'Join us in looking at the incredible lives of several, unique caregivers, as they recall their
				experience and emotion. Capturing various age groups and ethnicities, you will quickly relate to the
		situation these caregivers were in.'); ?>
	</p>


	<div class="box-grey">
		<div id="MatherCaregivers">
			<?php 
			$this->widget(
					'ext.JWplayer.JWplayer',
					array(
							'target' => 'MatherCaregivers',
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
		<img
			src="<?php echo $this->getImagesUrl('home-chart.png'); ?>" />
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
<div
	id="tutorial" style="display: none;">
	<div id="slide-1" class="slide">
		<h2 class="flowers">
			<?php echo t('Tutorial'); ?>
		</h2>

		<p>
			<?php echo t('Welcome! This short tutorial is designed to help demonstrate our course model, and is meant to be a basic presentation. 
		We will briefly explore dementia, Alzheimer\'s disease, and how they\'re related. Please feel free to contact us if you have questions, or need help.'); ?>
		</p>

		<p>
			<?php echo t('According to the Alzheimer\'s Association (2012) in the United States:'); ?>
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
			<?php echo t('With such a profound impact on society, business and potentially, 
		on your family, could you explain what Alzheimer\'s disease is? How about dementia?'); ?>
		</p>


		<p>
			<img
				src="<?php echo $this->getImagesUrl('image-men.png'); ?>"
				style="margin: 5px 5px; width: 100%;" />
		</p>

		<p class="course-buttons">
			<a href="javascript:;" class="button right"
				onClick="$.fancybox.next();"><?php echo t('Start Tutorial&raquo;'); ?>
			</a>
		</p>
	</div>

	<!--   overview of tutorial here    -->

	<div id="slide-2" class="slide">

		<h4 style="font-size: 2em;">
			<?php echo t('Dementia &amp; Alzheimer\'s disease - A Short Overview'); ?>
		</h4>
		<hr>

		<p>
			<strong> <?php echo t('Objectives'); ?>
			</strong>
		</p>

		<ul>
			<li><?php echo t('Describe dementia'); ?></li>
			<li><?php echo t('Describe Alzheimer\'s disease'); ?></li>
			<li><?php echo t('Explore data and statistics regarding Alzheimer\'s and dementia (US)'); ?>
			</li>
		</ul>

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

		<p>
			<?php echo t('Data and research have been developed or collected for this tutorial
			course by the following:'); ?>
		</p>

		<ul class="no-bullets">
			<li><a href="http://www.alz.org" target="_blank">Alzheimer's
					Association</a> <?php echo t('(United States)'); ?></li>
			<li><a href="http://matherlifewaysinstituteonaging.com"
				target="_blank">Mather LifeWays Institute on Aging</a> <?php echo t('(United States)'); ?>
			</li>
			<li><a href="http://www.nia.nih.gov" target="_blank">United States
					Department of Health &amp; Human Services - National Institute on
					Aging</a></li>
		</ul>


		<div id="survey_onlineexperience" class="box-white">
			<?php echo t('Have you ever taken an online course before?');?>

			<select>
				<option selected="selected" value="select">
					<?php echo t('Select'); ?>
				</option>
				<option value="1">
					<?php echo t('yes'); ?>
				</option>
				<option value="0">
					<?php echo t('no'); ?>
				</option>
			</select>
			<p></p>
			<?php
			Yii::app()->getClientScript()->registerScript('survey_onlineexperience',
			"$('#survey_onlineexperience select').change(function() {
				if($(this).val() == '1') {
					$('#survey_onlineexperience p').html('Great! Good luck!!');
				} else {
					$('#survey_onlineexperience p').html('No Problem! Please visit <a href=\"http://coursecatalog.com/dbpages/learn/asp_assess.htm\">this site</a> to learn more about how you can become ready.');
				}
			});");
			?>
		</div>

		<p class="course-buttons">
			<a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();"><?php echo t('&laquo; Back'); ?>
			</a> <a href="javascript:;" class="button right"
				onClick="$.fancybox.next();"><?php echo t('Next &raquo;'); ?>
			</a>
		</p>
	</div>

	<!--  dementia here    -->

	<div id="slide-3" class="slide">

		<h4 style="font-size: 2em;">
			<?php echo t('Dementia'); ?>
		</h4>

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
					following core mental functions must be significantly impaired to be
			considered dementia:'); ?>
		</p>

		<ul>
			<li><?php echo t('Memory'); ?></li>
			<li><?php echo t('Communication and language'); ?></li>
			<li><?php echo t('Ability to focus and pay attention'); ?></li>
			<li><?php echo t('Reasoning and judgment'); ?></li>
			<li><?php echo t('Visual perception'); ?></li>
		</ul>

		<p>
			<?php echo t('People with dementia may have problems with short-term memory,
					keeping track of a purse or wallet, paying bills, planning and
					preparing meals, remembering appointments or traveling out of the
					neighborhood. Many dementias are progressive, meaning symptoms start
			out slowly and gradually get worse.'); ?>
		</p>


		<div class="box-white">

			<p>
				<?php echo t('Without searching the web, is dementia a disease of the brain?'); ?>
				<select>
					<option selected="selected" value="select">
						<?php echo t('Select'); ?>
					</option>
					<option value="yes">
						<?php echo t('yes'); ?>
					</option>
					<option value="no">
						<?php echo t('no') ?>
					</option>
				</select>

				<!-- 
				<button type="submit" class="teal">Submit</button>
				<button type="reset" class="teal">Reset</button>
		-->
		
		</div>


		<p class="course-buttons">
			<a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();"><?php echo t('&laquo; Back'); ?>
			</a> <a href="javascript:;" class="button right"
				onClick="$.fancybox.next();"><?php echo t('Next &raquo;'); ?>
			</a>
		</p>

	</div>


	<!--  Alzheimer's disease here    -->

	<div id="slide-4" class="slide">

		<h4 style="font-size: 2em;">
			<?php echo t('Alzheimer\'s Disease'); ?>
		</h4>

		<hr>

		<p>
			<?php echo t('Alzheimer\'s disease is an irreversible, progressive brain disease
					that slowly destroys memory, thinking skills, behavior, and
					eventually even the ability to carry out the simplest tasks of daily
					living. Alzheimer\'s is the most common form of dementia. Symptoms
					usually develop slowly and get worse over time. In most people with
					Alzheimer\'s, symptoms first appear after age 60. Alzheimerâ€™s
					disease is the most common cause of dementia among older people.
					Alzheimer\'s has no current cure, but treatments for symptoms are
					available and research continues. The disease is named after Dr.
			Alois Alzheimer.'); ?>
		</p>


		<p>
			<strong> <?php echo t('Symptoms and signs of Alzheimer\'s disease'); ?>
			</strong>
		</p>

		<p>
			<?php echo t('The following is a short list of warning signs to look for if you
			suspect someone is suffering from Alzheimer\'s disease:'); ?>
		</p>

		<ul>
			<li><?php echo t('Memory loss that disrupts daily life'); ?></li>
			<li><?php echo t('Challenges in planning or solving problems'); ?></li>
			<li><?php echo t('Difficulty completing familiar tasks at home, at work or at leisure'); ?>
			</li>
			<li><?php echo t('Confusion with time or place'); ?></li>
			<li><?php echo t('Decreased or poor judgment') ?></li>
		</ul>

		<div class="box-white">

			<p>
				<?php echo t('Without searching the Web, what other signs might there be?'); ?>
			</p>


			<select>
				<option selected="selected" value="select">
					<?php echo t('Select'); ?>
				</option>
				<option value="1">
					<?php echo t('Having a brown hair'); ?>
				</option>
				<option value="2">
					<?php echo t('Being two meters tall'); ?>
				</option>
				<option value="3">
					<?php echo t('Misplacing things and losing the ability to retrace steps'); ?>
				</option>
			</select>

			<!-- 
			<button type="submit" class="teal">Submit</button>
			<button type="reset" class="teal">Reset</button>
			
		-->

		</div>

		<p class="course-buttons">
			<a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();"><?php echo t('&laquo;
						Back'); ?>
			</a> <a href="javascript:;" class="button right"
				onClick="$.fancybox.next();"><?php echo t('Next &raquo;'); ?>
			</a>
		</p>

	</div>


	<!--   data, stats, video here    -->

	<div id="slide-5" class="slide">

		<h4 style="font-size: 2em;">
			<?php echo t('Stats and Data (USA / English)'); ?>
		</h4>

		<hr>
		<iframe width="450" height="290"
			src="http://www.youtube.com/embed/In1IJocVor8?rel=0" frameborder="0"
			allowfullscreen="" class="tutorial-video"></iframe>
		<p>
			<strong> <?php echo t('Alzheimer\'s disease'); ?>
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
			<li><a href="http://www.alz.org/downloads/facts_figures_2012.pdf"
				target="_blank">2012 United States Alzheimer's Disease Facts and
					Figures report</a>, <?php echo t ('Web Video (English)')?>
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

		<p>
			<?php echo t('Using the search box below, find additional data and statistics on dementia or Alzheimer\'s disease where you reside. It is 
			important that you learn to conduct your own research.'); ?>
		</p>


		<form method="get" action="http://www.google.com/search"
			target="_blank">
			<input type="search" id="google-search" name="q" size="35"
				maxlength="255" value="" /><br /> <input type="submit"
				value="<?php echo t('Google Search'); ?>" class="teal" />
		</form>


		<!-- 
<form method="get" action="http://www.youtube.com" target="_blank"><input
	type="search" name="q" size="35" maxlength="255" value="" /> <input
	type="submit" value="YouTube Search" /></form>
					-->


		<p class="course-buttons">
			<a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();"><?php echo t('&laquo;
						Back'); ?>
			</a> <a href="javascript:;" class="button right"
				onClick="$.fancybox.next();"><?php echo t('Next &raquo;'); ?>
			</a>
		</p>

	</div>

	<!--   slide 6 - closing here    -->

	<div id="slide-6" class="slide">

		<h4 style="font-size: 2em;">
			<?php echo t('Assessment'); ?>
		</h4>

		<hr>

		<p>
			<?php echo t('Please complete this short assessment. You will receive immediate feedback.'); ?>
		</p>

		<div class="box-white">
			<p>
				<strong><u> <?php echo t('Tutorial Course Assessment'); ?>
				</u> </strong>
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

		<h4 style="font-size: 2em; padding-bottom: 15px;">
			<?php echo t('Certificate of Completion (English)'); ?>
		</h4>

		<p>
			<?php echo t('Thank you for participating in this tutorial course! Now that you have a
				 better idea on what to expect, your next step is to register and
				begin participating! Click below to download your certificate.'); ?>
		</p>
		<p style="text-align: center;">
			<a
				href="/themes/onlinecourseportal/images/CourseCompletionCertificate.pdf"
				target="_blank"> <?php echo t('Download Certificate'); ?>
			</a>
		</p>

		<div class="box-white">

			<p>
				<strong><u> <?php echo t('Voluntary Survey'); ?>
				</u> </strong>
			</p>

			<p>
				<?php echo t('Did this tutorial course provide you with an acceptable learning
			experience?'); ?>
				<select>
					<option selected="selected" value="select">
						<?php echo t('Select'); ?>
					</option>
					<option value="1">
						<?php echo t('Yes'); ?>
					</option>
					<option value="0">
						<?php echo t('No'); ?>
					</option>
				</select>
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

		<p class="course-buttons">
		
		
		<p class="course-buttons">
			<a href="javascript:;" class="button left"
				onclick="$.fancybox.pos(0);"><?php echo t('&laquo; Start Over'); ?>
			</a>
		</p>

	</div>


</div>
