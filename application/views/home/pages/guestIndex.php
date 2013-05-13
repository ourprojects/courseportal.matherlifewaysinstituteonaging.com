<?php

$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('homeGuest.css'));
$clientScript->registerCssFile($this->getStylesUrl('course.css'));
$clientScript->registerScriptFile($this->getScriptsUrl('jquery.cycle.all.js'), CClientScript::POS_HEAD);
$clientScript->registerScript('customers_cycle', "$('#customers').cycle();");

$fancyBoxConfig = array(
						'width' => '90%',
						'height' => '90%',
						'arrows' => false,
						'autoSize' => false,
						'mouseWheel' => false,
				);

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => '.open-tutorial',
				'config' => $fancyBoxConfig
		)
);

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => 'a[id^="survey_link_"]',
				'config' => $fancyBoxConfig
		)
);

?>

<!-- index page main image -->

<div id="home-image">
  <h1>{t}Web-based Training for Caregivers{/t}</h1>
</div>

<!-- Begin sidebar -->

<div id="sidebar"> 
  <!-- Sidebar #1 with 3 buttons here -->
  <div class="box-sidebar zero"> <a href="<?php echo $this->createUrl('user/register'); ?>">{t}Register{/t} </a> <a
			href="<?php echo $this->createUrl('home/contact'); ?>" class="teal"
		>{t}Request Information{/t} </a> <a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"> {t}Tutorial{/t} </a> <a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> </div>

  <!-- EACC pending approval sidebar here -->

  <div class="box-sidebar one">
    <h3>{t}EACC{/t}</h3>
    <h5 class="text-center">{t}Course Approvals<br />Pending Application{/t}</h5>
    <p><b><a href="http://www.eapassn.org/files/public/EACCroster2012.pdf" target="_blank">{t}Employee Assistance Certification Commission (EACC){/t}</a></b></p>
    <p>{t}Established in 1986, the EACC is the credentialing governance body responsible for upholding all professional standards, policies, and procedures concerning the Certified Employee Assistance Professional (CEAP) credential.{/t}</p>
    
    <p><a href="http://www.eapassn.org/" target="_blank"><img class="block center" src="<?php echo $this->getImagesUrl('EAPlogo.png'); ?>" alt="EAP Assocation Logo"></a></p>
      </div>
  
  
<!-- Clients sidebar here -->
  <div class="box-sidebar one">
    <h3> {t}Our Clients{/t} </h3>
    <div id="customers"> <a href="http://www.ibm.com" target="_blank"><img src="<?php echo $this->getImagesUrl('customers/ibm.png'); ?>" alt="IBM" /> </a> <a href="http://www.merck.com" target="_blank"><img src="<?php echo $this->getImagesUrl('customers/merck.png'); ?>"
				alt="Merck Pharmaceuticals"
			/> </a> <a href="http://www.exxonmobil.com" target="_blank"><img src="<?php echo $this->getImagesUrl('customers/exxon.png'); ?>"
				alt="Exxon"
			/> </a> <a href="http://matherlifeways.com/" target="_blank"><img src="<?php echo $this->getImagesUrl('customers/mather.png'); ?>"
				alt="Mather Lifeways"
			/> </a> </div>
  </div>
  <!-- sidebar for Participating locations here -->
  
  <div class="box-sidebar one">
    <h3>{t}Participating Locations{/t}</h3>
    <div id="flags">
      <table>
        <tr>
          <td><img src="<?php echo $this->getImagesUrl('flags/United-States-Flag-64.png'); ?>" alt="{t}USA{/t}" /></td>
          <td><img src="<?php echo $this->getImagesUrl('flags/China-Flag-64.png'); ?>" alt="{t}China{/t}" /></td>
          <td><img src="<?php echo $this->getImagesUrl('flags/Hong-Kong-Flag-64.png'); ?>" alt="{t}Hong Kong{/t}" /></td>
        </tr>
        <tr>
          <td><img src="<?php echo $this->getImagesUrl('flags/Brazil-Flag-64.png'); ?>" alt="{t}Brazil{/t}" /></td>
          <td><img src="<?php echo $this->getImagesUrl('flags/Mexico-Flag-64.png'); ?>" alt="{t}Mexico{/t}" /></td>
          <td><img src="<?php echo $this->getImagesUrl('flags/Taiwan-Flag-64.png'); ?>" alt="{t}Taiwan{/t}" /></td>
        </tr>
        <tr>
          <td><img src="<?php echo $this->getImagesUrl('flags/Argentina-Flag-64.png'); ?>" alt="{t}Argentina{/t}" /></td>
          <td><img src="<?php echo $this->getImagesUrl('flags/United-Kingdom-flag-64.png'); ?>" alt="{t}England{/t}" /></td>
          <td><img src="<?php echo $this->getImagesUrl('flags/Luxembourg-Flag-64.png'); ?>" alt="{t}Luxembourg{/t}" /></td>
        </tr>
      </table>
    </div>
  </div>
  
  <!-- sidebar for Stats on Caregivers here -->
  
  <div class="box-sidebar one">
    <h3>{t}Statistics on Caregivers{/t}</h3>
    <div> <img src="<?php echo $this->getImagesUrl('stat-two-thirds.png'); ?>" alt="2/3" style="margin-bottom: 8px;" /><br />
      {t}2/3 of working caregivers in the USA report conflicts between work and caregiving that result in increased
					absenteeism, workday interruptions, reduced hours, and workload shifting to other employees.{/t} </div>
  </div>
  
  <!-- sidebar on Resent Research here -->
  
  <div class="box-sidebar two">
    <h3>{t}Recent Research (USA){/t}</h3>
    <img class="block center" src="<?php echo $this->getImagesUrl('metlife.jpg'); ?>" alt="MetLife" />
    <p class="text-center"><b>{t}Double Jeopardy for Baby Boomers Caring for Their Parents{/t}</b></p>
    <p> {t}Nearly 10 million adult children over the age of 50 care for their aging parents. These family caregivers are themselves aging as well
					as providing care at a time when they also need to be planning and saving for their own retirement. The study is an updated, national
					look at adult children who work and care for their parents and the impact of caregiving on their earnings and lifetime wealth.{/t} </p>
    <p> <a href="http://www.metlife.com/assets/cao/mmi/publications/studies/2010/mmi-working-caregivers-employers-health-care-costs.pdf" class="pdf" target="_blank">{t}The MetLife Study of Working Caregivers and Employer Health Care Costs (English){/t} </a> </p>
  </div>
  <div class="box-sidebar three">
    <h3>{t}Whitepapers (English){/t}</h3>
    <p> <a href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2012/03/eLearning-Maturing-Technology.pdf" class="pdf" target="_blank">{t}e-Learning: Maturing Technology Brings Balance &amp; Possibilities to Nursing Education{/t} </a> <a href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2012/03/How-eLearning-Can-Reduce-Expenses-and-Improve-Staff-Performance.pdf"
				class="pdf" target="_blank">{t}The Bottom Line: How e-Learning Can Reduce Expenses and Improve Staff Performance{/t} </a> </p>
  </div>
  <div class="box-sidebar four">
    <h3>Aging in Action</h3>
    <p>{t}Aging in Action is Mather LifeWays Institute on Aging's monthly e-newsletter and blog containing the latest research news in the field of aging.{/t}</p>
    <a href="http://twitter.com/aginginaction" target="_blank"> <img class="block center" src="<?php echo $this->getImagesUrl('twitter-bird.png'); ?>" alt="Twitter" /></a> </div>
</div>
<div class="column-wide">
  <h2 class="flowers">Mather LifeWays Institute on Aging</h2>
  <p> {t}Through research-based programs and innovative techniques, Mather LifeWays Institute on Aging is committed to advancing the field of eldercare. Used by individuals and entire organizations, our nationally recognized, award-winning programs include training modules, online
				courses, toolkits, and learning modules designed to make learning fun and easy.{/t} </p>
  
  <!-- online courses for caregivers div here -->
  
  <h2 class="flowers top-pad">{t}Digital Workforce Solutions{/t}</h2>
  <p style="padding-bottom: 5px;">{t}We deliver online learning and web-based modalities using the latest technologies to efficiently and cost-effectively empower professionals in the workplace. In addition, we are well-positioned to help conduct pilot studies that measure the impact on both working caregivers and the bottom line for interested corporations. We provide practical solutions in the form of online courses, workplace toolkits, and workforce surveys.{/t}</p>
  
  <!-- text for ROI here for program use  -->
  
  <h2 class="flowers top-pad">{t}Benefits of Participation{/t}</h2>
  <p style="padding-bottom: 5px;">{t}Why participate? Our programs have been shown to result in measurable
				improvements in the quality of care provided and workforce retention. Past participation has yieled many benfits for our clients, including, but not limited to: {/t}</p>
  <ul>
    <li>{t}Increased employee morale due to greater self-efficacy.{/t}</li>
    <li>{t}Improved employee to employer, and employee to family relations.{/t}</li>
    <li>{t}Reduced employee absenteeism which leads to increased productvity.{/t}</li>
  </ul>
  
  <!-- video and text here div -->
  
  <h2 class="flowers top-pad">{t}A Closer Look - Lives of Caregivers{/t}</h2>
  <p style="padding-bottom: 25px;"> {t}Join us in looking at the incredible lives of several, unique caregivers, as they recall their experience and emotion. Capturing various age groups and ethnicities, you will quickly relate to the
		situation these caregivers were in. (English){/t} </p>
  <div class="box-grey">
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
  <h2 class="flowers top-pad">{t}Pedagogy{/t}</h2>
  <p> {t}Effective online instruction depends on learning experiences appropriately designed and facilitated by knowledgeable facilitators.
				Because learners have different learning styles or a combination of styles, our web-based training has been design using activities that
				address their modes of learning in order to provide significant experiences for each course user.{/t} </p>
  <p> {t}Institution Wide Content Management - 25%{/t}<br />
    {t}Online Course Delivery - 25%{/t}<br />
    {t}Targeted Collaboration - 50%{/t} </p>
  <img id="pie-chart" class="block center" height="300" src="<?php echo $this->getImagesUrl('home-chart.png'); ?>" alt="{t}Pie chart{/t}" />
  <?php $workingCaregiverSurvey->run(); ?>
  <div class="box-white">
    <h2 class="flowers"> {t}Health status of your working caregivers{/t} </h2>
    <p> {t}Please choose one of the surveys below to take. Depending on your position, employer 
			or employee, submit this voluntary survey and view aggregate feedback from all previous users.{/t} </p>
    <p>
      <?php foreach($hiddenSurveys as $survey): ?>
      <a id="survey_link_<?php echo $survey->getId(); ?>" href="#survey_<?php echo $survey->getId(); ?>" class="button" title="<?php echo $survey->model->title; ?>"><?php echo $survey->model->title; ?></a>
      <?php endforeach; ?>
    </p>
    <?php 
	  	foreach($hiddenSurveys as $survey)
  			$survey->run();
  	?>
  </div>
</div>
<div id="bottom-logos">
  <h4>{t}Partners{/t}</h4>
  <a href="http://www.rushu.rush.edu" id="rush">Rush University (Chicago)</a> <a href="http://www.alz.org/" id="aa" target="_blank">Alzheimer's Asssociation</a> <a href="http://wfd.com/" id="wfd" target="_blank">WFD</a> <a href="http://gladerfilmworks.com/" id="glader" target="_blank">Glader Filmworks</a> <a href="http://www.mediastorm.com/" id="mediastorm" target="_blank">Mediastorm</a> <a href="http://www.rosalynncarter.org/" id="rciLogo" target="_blank">Rosayln Carter Institute</a> </div>

<!--  start tutorial course here -->

<div id="tutorial" class="hide">
  <?php $clientScript->registerScript('question-answer-handler',
					"$('.course-slide .question').change(function() {".
						"if($(this).find('select').val() == '1') {".
							"$(this).find('.right-answer').removeClass('hide');".
							"$(this).find('.wrong-answer').addClass('hide');".
						"} else {".
							"$(this).find('.right-answer').addClass('hide');".
							"$(this).find('.wrong-answer').removeClass('hide');".
						"}".
					"});");
			?>
  <div id="slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}Tutorial{/t} </h2>
      <hr />
      <img src="<?php echo $this->getImagesUrl('116777136r.jpeg'); ?>" alt="{t}Tutorial{/t}" />
      <p>{t}We appreciate your support and interest in Mather LifeWays Institute on Aging. Through conducting applied research, we have developed award-winning, 
			evidence-based education programs for professionals who serve older adults. Staffed by researchers and educators, 
			we are a global resource for information about wellness, successful aging service innovations, and 
			educational programming.{/t} </p>
      <p> {t}This tutorial is designed to help demonstrate our course model. We will briefly explore dementia, 
			Alzheimer's disease, and how they are related.{/t} </p>
      <h5>{t}Tutorial Requirements{/t}</h5>
      
      <!-- tutorial requirements start here -->
      
      <p>{t}You will need the following applications to successfully complete this tutorial:{/t}</p>
      <p>
      <ul>
        <li class="inline"> <img class="normal" width="48" height="48" src="<?php echo $this-> getImagesUrl('word.png'); ?>" alt="{t}Word Processor{/t}" /></li>
        <li class="inline"> <img class="normal" width="48" height="48" src="<?php echo $this-> getImagesUrl('spreadsheet.png'); ?>" alt="{t}Spreadsheet Processor{/t}" /></li>
        <li class="inline"> <a href="mailto:jwoodall@matherlifeways.com" /><img class="normal" width="48" height="48" src="<?php echo $this-> getImagesUrl('email.png'); ?>" alt="{t}Email Client{/t}" /></a></li>
        <li class="inline"> <a href="http://get.adobe.com/reader/" target="_blank" /> <img class="normal" width="48" height="48" src="<?php echo $this-> getImagesUrl('pdf-icon.png'); ?>" alt="{t}Adobe Reader{/t}" /></a></li>
      </ul>
      </p>
      <br />
      <br />
      <br />
      <p>{t}The following software packages are compatible with this Tutorial's requirements: {/t} <a href="http://www.openoffice.org" target="_blank" />Apache Open Office</a>, <a href="http://www.apple.com/iwork/" target="_blank" />Apple iWork</a>, {t}or{/t} <a href="http://office.microsoft.com" target="_blank" />Microsoft Office</a>.</p>
      <h5>{t}Tutorial Facilitator{/t}</h5>
      <p>{t}Your course facilitator can be accessed by clicking on the "Email Client" icon{/t}</p>
      <img style="float:left;" width="64" height="64" src="<?php echo $this->getImagesUrl('skd182124sdcr.png'); ?>" alt="" />
      <p>{t}Jon Woodall - is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs. He is alos one of several online course facilitators.{/t}</p>
      <br />
      <br />
    </div>
    <div class="buttons"><a href="javascript:;" class="button right"
				onclick="$.fancybox.next();">{t}Start Tutorial &raquo;{/t} </a></div>
  </div>
  
  <!--   Slide #2 Alzheimer's disease    -->
  
  <div id="slide-2" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}Alzheimer's disease{/t} </h2>
      <hr />
      <p> {t}Memory loss and other signs of mental decline have profound effects on the lives of individuals and families. But we are
			convinced that a good quality of life can still be maintained for all concerned by learning to make changes in lifestyle and outlook. For
			many family members, this involves a change in relationships and priorities. At times, the demands may seem overwhelming, but
			understanding the type of cognitive impairment can be the first step in combating a challenging situation.{/t} </p>
      <p> <b>{t}Tutorial Objectives{/t}</b> </p>
      <ul>
        <li>{t}Describe Alzheimer's disease amd dementia{/t}</li>
        <li>{t}Describe the relationship between Alzheimer's disease and dementia{/t}</li>
      </ul>
      <p> {t}Alzheimer's disease is an irreversible, progressive brain disease that slowly destroys memory, thinking skills, behavior, and
					eventually even the ability to carry out the simplest tasks of daily living. Symptoms usually develop slowly, worsen over time, and first appear after age 60. Alzheimer's disease is the most common form and cause of dementia among older people. Alzheimer's has no current cure. The disease is named after Dr. Alois Alzheimer.{/t} </p>
      
      <!-- <ul id="quotes"> -->
      
      <ul>
        <li>{t}Millions of Americans are living with Alzheimer's disease.{/t} </li>
        <li>{t}Alzheimer's is not a normal part of aging{/t} </li>
      </ul>
      <p>
        <iframe width="400" height="225" src="http://www.youtube.com/embed/In1IJocVor8?rel=0" frameborder="0" allowfullscreen></iframe>
      </p>
      <p> <b> {t}What to look for if you suspect someone is suffering from Alzheimer's disease:{/t} </b> </p>
      <ul>
        <li>{t}Challenges in planning or solving problems{/t}</li>
        <li>{t}Difficulty completing familiar tasks at home, at work or at leisure{/t} </li>
      </ul>
      <p class="link">{t}Alzheimer's disease Facts and Figures 2012 (USA / English) - {/t}</p>
      <p><a href="http://www.alz.org/downloads/facts_figures_2012.pdf" target="_blank"><img class="normal" width="64" height="64" src="<?php echo $this->GetImagesURL('pdf-icon.png'); ?>" alt="{t}.pdf icon{/t}" /></a> </p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
    </div>
    <div class="buttons"><a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  
  <!--  Slide #3 dementia   -->
  
  <div id="slide-3" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}Dementia{/t} </h2>
      <hr />
      <img src="<?php echo $this->getImagesUrl('78634274r.jpeg'); ?>" alt="{t}Tutorial{/t}" />
      <p> {t}Dementia refers to an acquired and progressive loss of mental functions due to a brain disorder. Dementia is not a specific
			disease. It is an overall term that describes a wide range of symptoms associated with a decline in memory or other thinking skills 
			severe enough to reduce a person's ability to perform everyday activities. A medical diagnosis is required to determine the underlying 			cause or causes of symptoms.{/t} </p>
      <p> <b>{t}Symptoms and signs of dementia{/t}</b> </p>
      <p> {t}While symptoms of dementia can vary greatly, at least two of the following core mental functions, amongst others, must be significantly impaired to be onsidered dementia:{/t} </p>
      <ul>
        <li>{t}Memory{/t}</li>
        <li>{t}Communication and language{/t}</li>
        <li>{t}Ability to focus and pay attention{/t}</li>
      </ul>
      <p> {t}People with dementia may have problems with short-term memory, keeping track of a purse or wallet, paying bills, planning and
			preparing meals, remembering appointments or traveling out of the neighborhood. Many dementias are progressive, meaning symptoms start
			out slowly and gradually get worse.{/t} </p>
      <p> {t}Using your spreadsheet processor, please search the Internet for additional symptoms and signs of dementia that have not been mentioned here and list them. Once completed, please email your Facilitator the attachment.{/t}</p>
      <p><img class="normal" width="48" height="48" src="<?php echo $this->getImagesUrl('spreadsheet.png'); ?>" /><a href="mailto:jwoodall@matherlifeways.com" /> <img class="normal" width="48" height="48" src="<?php echo $this->getImagesUrl('email.png'); ?>" /></a></p>
      <br />
      <br />
    </div>
    <div class="buttons"><a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
				href="javascript:;" class="button right"
				onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  
  <!--  Slide #4 Relationship    -->
  
  <div id="slide-4" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}The Relationship{/t} </h2>
      <hr />
      <p> <b>{t}Dementia and Alzheimer's disease - How are they related?{/t}</b> </p>
      <p> {t}Dementia is defined as the global, progressive deterioration of memory, language, thought, 
				behavior and personality or mood. All or only a combination of these symptoms need to be present for a doctor 
				to someone has dementia. Under the umbrella of dementia are specific types of dementia like Reversible Dementia, 
				Vascular Dementia, Frontal-temporal Dementia and some diseases as well.{/t} </p>
      <p> {t}Alzheimer's disease, is a disease under the label of dementia. Alzheimer's disease
				 is estimated to account for 60-65% of all dementia, while reversible dementia account for 10% (2011, USA statistics).
				 The relationship of dementia vs Alzheimers is not one of opposition. Alzheimer's disease is a type of dementia. 
				 If someone has Alzheimers, they also have dementia. But if they have dementia they would have been diagnosed 
				with a particular type of dementia or disease, like Alzheimer's disease.{/t} </p>
      <p> {t}Alzheimer's Disease results in a gradual deterioration of cognitive function over time. For this reason, Alzheimer's 
				stages have been designated to refer to the amount of memory loss and function during the disease process.{/t} </p>
      <p> <b>{t}Statistics (USA){/t}</b> </p>
      <ul>
        <li>{t}Alzheimer's is the sixth-leading cause of death and the only cause of death among the 
				top 10 in the USA that cannot be prevented, cured or even slowed.{/t} </li>
        <li>{t}Millions of people in the USA have some degree of
							dementia, and that number will increase over the next few decades
							with the aging of the population.{/t} </li>
        <li>{t}It is the leading reason for placing elderly people in
							institutions such as nursing homes.{/t} </li>
      </ul>
      <br />
      <div id="question1" class="question">
        <p><b>{t}Is dementia a disease of the brain?{/t}</b>
          <select>
            <option selected="selected" value="select"> {t}Select{/t} </option>
            <option value="1"> {t}Yes{/t} </option>
            <option value="0"> {t}No{/t} </option>
          </select>
        </p>
        <p class="right-answer hide"> {t}Great! Yes, Dementia is a disease of the brain.{/t} </p>
        <p class="wrong-answer hide"> {t}Please ensure you understand what dementia is. Dementia is a disease of the brain.{/t} </p>
      </div>
      <br />
      <br />
    </div>
    <div class="buttons"><a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  
  <!--   Slide #5 Assessment   -->
  
  <div id="slide-5" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Assessment{/t}</h2>
      <hr />
      <p>{t}It is important that you are assessed after each topic to ensure you are learning the material. If you feel you are not ready to complete this assessment, please review this tutorial again.{/t}</p>
      <p>{t}Thinking about the material you just read, please try and correctly answer the assessment questions below without searching the Internet. Your responses are not recorded, and you will receive immediate feedback.{/t}</p>
      <br />
      <div id="question1" class="question">
        <p><b>{t}Is Alzehimer's disease a disease of the brain?{/t}</b>
          <select>
            <option selected="selected" value="select"> {t}Select{/t} </option>
            <option value="1"> {t}Yes{/t} </option>
            <option value="0"> {t}No{/t} </option>
          </select>
        </p>
        <p class="right-answer hide"> {t}Great! Yes, Alzheimer's disease is a disease of the brain.{/t} </p>
        <p class="wrong-answer hide"> {t}Please review this tutorial again. Alzheimer's disease is a disease of the brain.{/t} </p>
      </div>
      <div id="question2" class="question">
        <p><b>{t}Alzheimer's disease is the most common form of dementia.{/t}</b>
          <select>
            <option selected="selected" value="select"> {t}Select{/t} </option>
            <option value="1"> {t}True{/t} </option>
            <option value="0"> {t}False{/t} </option>
          </select>
        </p>
        <p class="right-answer hide"> {t}Yes, Alzheimer's disease is the most common form of dementia.{/t} </p>
        <p class="wrong-answer hide"> {t}Please review this tutorial again. Alzheimer's disease is the most common form of dementia.{/t} </p>
      </div>
      <div id="question" class="question">
        <p> {t}Please find additional data on dementia and Alzheimer's disease. Try and conduct your own research.{/t} </p>
        <form method="get" action="http://www.google.com/search" target="_blank">
          <input type="text" id="google-search" name="q" size="65" maxlength="255" value="" />
          <input type="submit" value="{t}Google Search{/t}" class="teal" />
        </form>
      </div>
      <br />
      <br />
    </div>
    <div class="buttons"><a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
				href="javascript:;" class="button right"
				onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo;</a> </div>
  </div>
  
  <!--   slide 6 - closing here    -->
  
  <div id="slide-6" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}Conclusion{/t} </h2>
      <hr />
      <img src="<?php echo $this->getImagesUrl('56677551r.jpeg'); ?>" width="250" height="375" alt="{t}Thank You{/t}" />
      <p> {t}With such a profound impact on society, business, and potentially your family, understanding dementia and Alzheimer's disease is very important. After participating in this tutorial, you should now understand and be able to explain what Alzheimer's disease and dementia are. If necessary, please review this tutorial again.{/t} </p>
      
      <!-- Certificate of Completion here -->
      
      <h4>{t}Certificate of Completion{/t}</h4>
      <p>{t}Upon successful completion of each online course, you will have the opportunity to download your custom Certificate of Completion. Once accessed, you will be able to type your name and date into the form-fillable certificate. The course title and seal will automatically be applied to the certificate upon successful participation in all of the available course lessons. Certificates will NOT be accessible by those users who DO NOT participate in all of the available lessons. Click on the icon below to access the example.{/t}</p>
      <a href="<?php echo $this->getImagesUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank"><img class="normal" src="<?php echo $this->getImagesUrl('ArtworkCertificate.png'); ?>" alt="{t}Certificate{/t}" /></a>
      <p> {t}Thank you for participating in this tutorial! Now that you have a better idea on what to expect, your next step is to register and begin participating in the various online courses that are available.{/t} </p>
      
      <!-- removed <p class="small"> <i> could not find in css folder structure --> 
      <!-- removed <ul id="developers"> cold not find in css folder structure --> 
      <!-- removed <li class="small"> cold not find in css folder structure -->
      <p>{t}Please contact us if you have questions or need help. Data and research have been developed or collected for this tutorial course by the following organizations in the USA: {/t} <a href="http://www.alz.org" target="_blank">Alzheimer's Association</a>, <a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a>, <a href="http://nih.gov" target="_blank">U.S. Department of Health &amp; Human Services - National Institute on Aging</a>.</p>
      <br />
      <br />
    </div>
    <div class="buttons"><a href="#" onclick="parent.jQuery.fancybox.close();"
				class="button left"> {t}Exit{/t} </a> </div>
  </div>
</div>
