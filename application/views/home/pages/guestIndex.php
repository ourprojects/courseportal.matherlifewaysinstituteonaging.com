<?php

$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('homeGuest.css'));
$clientScript->registerCssFile($this->getStylesUrl('tutorial.css'));
$clientScript->registerScriptFile($this->getScriptsUrl('jquery.cycle.all.js'), CClientScript::POS_HEAD);
$clientScript->registerScript('customers_cycle', "$('#customers').cycle();");

$fancyBoxConfig = array(
						'width' => '720px',
						'height' => '1000px',
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
		>{t}Request Information{/t} </a> <a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"> {t}Tutorial{/t} </a> <a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> <a href="#slide-7" data-fancybox-group="open-tutorial" class="hide open-tutorial"></a> </div>
  
  <!-- EACC pending approval sidebar here -->
  
  <div class="box-sidebar one">
    <h3>{t}EACC{/t}</h3>
    <h5 class="text-center">{t}Course Approvals<br />
      Pending Application{/t}</h5>
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
      <h2 class="flowers"> {t}Caregiving - Impact on the Workplace{/t} </h2>
      <hr />
      <img src="<?php echo $this->getImagesUrl('tutorial/127032880.png'); ?>" alt="image" />
      <h4>{t}Caregiving in America{/t}</h4>
      <p>{t}Caring for a person with Alzheimer’s disease is physically, emotionally, and financially challenging. The demands of day-to-day care, changing family roles, and difficult decisions about placement in a care facility can be hard to handle. Researchers have learned much about Alzheimer’s caregiving, and studies are testing new ways to support caregivers.{/t}</p>
      <p id="data">{t}More than <b>40 million Americans provide care</b> for relatives or friends with a chronic illness such as dementia, stroke, or Parkinson’s disease.{/t}</p>
      <p>{t}Becoming well-informed about the disease is one important long-term strategy. <a href="http://www.matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a> provides these courses to teach families about the various stages of Alzheimer’s and about flexible and practical strategies for dealing with difficult caregiving situations. We provide vital training and online education to those who care for people with Alzheimer’s and other related conditions.{/t}</p>
      <div id="question1" class="question">
        <p><b>{t}Estimated cost to employers for employees with caregiving responsibilities is in the billions of dollars.{/t}</b><br />
          <select>
            <option selected="selected" value="select"> {t}Select{/t} </option>
            <option value="1"> {t}True{/t} </option>
            <option value="0"> {t}False{/t} </option>
          </select>
        </p>
        <p class="right-answer hide"> {t}Correct! According to the The MetLife Caregiving Cost Study (2013), the costs are in the billions of dollars.{/t} </p>
        <p class="wrong-answer hide"> {t}The costs associated are in the billions of dollars. Please review the {/t} </p>
      </div>
    </div>
    <div class="buttons"><a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Begin Tutorial &raquo;{/t} </a></div>
  </div>
  <div id="slide-2" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}Find Balance{/t} </h2>
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
  <div id="slide-3" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}Demographics{/t} </h2>
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
  <div id="slide-4" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}The Sandwich Generation{/t} </h2>
      <hr />
      <h4>
      {t}Media Storm{/t}
      <p>{t}Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur's 83-year-old father, Herbie, became too infirm to care for himself.{t}
        
        {t}At that moment they joined some twenty million other Americans who make up the sandwich generation, those who find themselves responsible for the care of both their children and their aging parents.{/t}
      <div style="width:400px;">
        <div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e51981bc412802480288&w=400&h=340&amp;lang=none"></script></div>
        <div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">Millions of middle-aged Americans are caring for their children as well as their aging parents. When filmmaker-photographer pair Julie Winokur and Ed Kashi took in Winokur's 83-year-old father, they decided to document their own story. See the project at <a href="http://mediastorm.com/publication/the-sandwich-generation" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/the-sandwich-generation</a></div>
      </div>
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
    </div>
    <div class="buttons"><a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="slide-5" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Impact of Caregiving on Employee Health{/t}</h2>
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
  <div id="slide-6" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}Cost on Business{/t} </h2>
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
  <div id="slide-7" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}Conclusions{/t} </h2>
      <hr />
      <img src="<?php echo $this->getImagesUrl('56677551r.jpeg'); ?>" width="250" height="375" alt="{t}Thank You{/t}" />
      <p> {t}With such a profound impact on society, business, and potentially your family, understanding dementia and Alzheimer's disease is very important. After participating in this tutorial, you should now understand and be able to explain what Alzheimer's disease and dementia are. If necessary, please review this tutorial again.{/t} </p>
      <h4>{t}Certificate of Completion{/t}</h4>
      <p>{t}Upon successful completion of each online course, you will have the opportunity to download your custom Certificate of Completion. Once accessed, you will be able to type your name and date into the form-fillable certificate. The course title and seal will automatically be applied to the certificate upon successful participation in all of the available course lessons. Certificates will NOT be accessible by those users who DO NOT participate in all of the available lessons. Click on the icon below to access the example.{/t}</p>
      <a href="<?php echo $this->getImagesUrl('CourseCompletionCertificate.pdf'); ?>" target="_blank"><img class="normal" src="<?php echo $this->getImagesUrl('ArtworkCertificate.png'); ?>" alt="{t}Certificate{/t}" /></a>
      <p> {t}Thank you for participating in this tutorial! Now that you have a better idea on what to expect, your next step is to register and begin participating in the various online courses that are available.{/t} </p>
      <p>{t}Please contact us if you have questions or need help. Data and research have been developed or collected for this tutorial course by the following organizations in the USA: {/t} <a href="http://www.alz.org" target="_blank">Alzheimer's Association</a>, <a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a>, <a href="http://nih.gov" target="_blank">U.S. Department of Health &amp; Human Services - National Institute on Aging</a>.</p>
      <br />
      <br />
    </div>
    <div class="buttons"><a href="#" onclick="parent.jQuery.fancybox.close();"
				class="button left"> {t}End Tutorial{/t} </a> </div>
  </div>
</div>
