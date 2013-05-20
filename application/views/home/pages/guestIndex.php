<?php

$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('homeGuest.css'));
$clientScript->registerCssFile($this->getStylesUrl('tutorial.css'));
$clientScript->registerScriptFile($this->getScriptsUrl('jquery.cycle.all.js'), CClientScript::POS_HEAD);
$clientScript->registerScript('customers_cycle', "$('#customers').cycle();");

$clientScript->registerScriptFile($this->getScriptsUrl('homeslideshow_edgePreload.js'), CClientScript::POS_HEAD);

// set to POS_END - hopefully this will load faster.. not sure though

$fancyBoxConfig = array(
						'width' => '720px',
						'height' => '900px',
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

<!-- 
<div id="home-image">
  <h1>{t}Web-based Training for Caregivers{/t}</h1>
</div>
-->



<div id="Stage" class="EDGE-4473686">


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
      <p id="data">{t}+<b>40 million Americans</b><br />
        provide care for someone with a chronic illness such as dementia.{/t}</p>
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
        <p class="wrong-answer hide"> {t}The costs associated are in the billions of dollars. Please review <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2011/mmi-caregiving-costs-working-caregivers.pdf" target="_blank">The MetLife Caregiving Cost Study (2013)</a>{/t} </p>
      </div>
    </div>
    <div class="buttons"><a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Begin Tutorial &raquo;{/t} </a></div>
  </div>
  <div id="slide-2" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}The Need to Finding Balance{/t} </h2>
      <hr />
      <p> {t}<b>Caregiving is not just a social issue, it is a critical workplace issue</b>. Caregiving for an elderly person is usually provided by a family member, and typcially these family members are employed. According to the <a href="http://www.alz.org/downloads/facts_figures_2012.pdf" target="_blank">Alzheimer's disease Facts and Figures (2012)</a> report, a large percentage of the American workforce is estimated to be involved in caregiving. And, as the number of elderly Americans grows, the number of employed caregivers—and the billions in annual cost to business, in addition to the billions associated with health care costs — is likely to continue upwards.{/t}</p>
      <p>{t}In fact, as reported, in the <b>next two decades</b>, the <b>number of older Americans will more than double</b>. The fastest growing segment of the population are those age 85 and older, a segment that is most likely to be frail and have chronic conditions. Given rising healthcare costs and shorter hospital stays, the care of these older Americans will increasingly fall on their children, friends, and other relatives — unpaid caregivers who are, for the most part, still in the workforce. Many of them are at the peak of their careers.{/t}</p>
      <p align="center">
        <iframe width="400" height="225" src="http://www.youtube.com/embed/In1IJocVor8?rel=0" frameborder="0" allowfullscreen></iframe>
      </p>
      <p>{t}The current figures are already staggering. Today, <b>millions of caregivers provide assistance to people age 50 and older</b>, and nearly all of the care of older adults is provided by family and friends. Meanwhile, more than <b>half of the nation’s unpaid caregivers are in the workforce</b>.{/t}</p>
      <div id="question1" class="question">
        <p><b>{t}The Alzheimer's Association is the world's leading voluntary health organization in Alzheimer's care, support and research.{/t}</b><br />
          <select>
            <option selected="selected" value="select"> {t}Select{/t} </option>
            <option value="1"> {t}True{/t} </option>
            <option value="0"> {t}False{/t} </option>
          </select>
        </p>
        <p class="right-answer hide"> {t}Correct!. Please familarize yourself with the <a href="http://www.alz.org" target="_blank">Alzheimer's Association's website</a>.{/t} </p>
        <p class="wrong-answer hide"> {t}Please familarize yourself with the <a href="http://www.alz.org" target="_blank">Alzheimer's Association's website</a> before continuing.{/t} </p>
      </div>
    </div>
    <div class="buttons"><a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="slide-3" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Demographics{/t}</h2>
      <hr />
      <img src="<?php echo $this->getImagesUrl('tutorial/133300753.png'); ?>" alt="{t}image{/t}" />
      <p>{t}Various surveys show caregivers include all ages, races, and both genders. In 2009, the <a href="http://www.caregiving.org" target="_blank">National Alliance for Caregiving</a> and <a href="http://www.aarp.org" target="_blank">AARP</a>, along with Census figures and other reports, developed a study entitled <a href="http://www.caregiving.org/data/Caregiving_in_the_US_2009_full_report.pdf" target="_blank">Caregiving in the U.S.</a>, found the following:{/t}</p>
      <ul>
        <li>{t}About 87 percent of caregivers provide care to someone over age 50, and 60 percent of those caregivers work full time.{/t}</li>
        <li>{t}About 15 percent of caregivers provide care to someone who lives more than an hour away.{/t}</li>
        <li>{t}More than a third have children or grandchildren under the age of 18 inthe household.{/t}</li>
      </ul>
      <div id="question" class="question">
        <p>{t}Search the Internet to find out how many caregivers are in your state or region.{/t}</p>
        <form method="get" action="http://www.google.com/search" target="_blank">
          <input type="text" id="google-search" name="q" size="65" maxlength="255" value="" />
          <input type="submit" value="{t}Google Search{/t}" class="teal" />
        </form>
      </div>
      <p><b>{t}Forum Posting{/t}</b> - {t}(Access to the Forum is only available to registered users...){/t}</p>
      <img src="<?php echo $this->getImagesUrl('tutorial/ForumScreenShot.png'); ?>" alt="{t}image{/t}"> </div>
    <div class="buttons"><a href="javascript:;" class="button left"
				onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a
				href="javascript:;" class="button right"
				onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="slide-4" class="course-slide">
    <div class="content">
      <h2 class="flowers"> {t}The Sandwich Generation - MediaStorm{/t}</h2>
      <hr />
      <p>{t}Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur's 83-year-old father, Herbie, became too infirm to care for himself. At that moment they joined some twenty million other Americans who make up the sandwich generation, those who find themselves responsible for the care of both their children and their aging parents.{/t}</p>
      <div style="width:400px;" id="video">
        <div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e51981bc412802480288&w=400&h=340&amp;lang=none"></script></div>
        <div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">Millions of middle-aged Americans are caring for their children as well as their aging parents. When filmmaker-photographer pair Julie Winokur and Ed Kashi took in Winokur's 83-year-old father, they decided to document their own story.</div>
      </div>
      <p><b>{t}Forum Posting{/t}</b> - {t}(Access to the Forum is only available to registered users...){/t}</p>
      <img src="<?php echo $this->getImagesUrl('tutorial/ForumScreenShot.png'); ?>" alt="{t}image{/t}"> </div>
    <div class="buttons"><a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
  </div>
  <div id="slide-5" class="course-slide">
    <div class="content">
      <h2 class="flowers">{t}Impact of Caregiving on Employee Health{/t}</h2>
      <hr />
      <img src="<?php echo $this->getImagesUrl('tutorial/153236274.png'); ?>" alt="{t}image{/t}" />
      <p>{t}In general, individuals responsible for caregiving — including employee caregivers — have more health-related problems than employees who are non-caregivers. A survey from <a href="http://www.commonwealthfund.org/Surveys/2005/2005-Commonwealth-Fund-International-Health-Policy-Survey-of-Sicker-Adults.aspx" target="_blank">The Commonwealth Fund (2005)</a> found that 45 percent of caregivers had one or more chronic conditions, compared to 24 percent of those with no caregiving responsibilities.{/t}</p>
      <p>{t}Caregivers (whether working or not) have higher levels of depression, heart disease, blood pressure and immune function, and are more likely to die earlier than non-caregivers. In 2010, the <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2011/mmi-caregiving-costs-working-caregivers.pdf" target="_blank">National Alliance for Caregiving and MetLife</a>, found that employee caregivers have a higher incidence of diabetes.{/t}</p>
      <p>{t}Among female employees age 50 and older providing eldercare, 17 percent reported fair or poor health compared to 9 percent of noncaregivers, the <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2011/mmi-caregiving-costs-working-caregivers.pdf" target="_blank">MetLife report</a> showed. Further, 10 percent of caregivers had missed at least one day of work over a two week period because of health issues compared to 9 percent for non-caregivers.{/t}</p>
      <div id="question1" class="question">
        <p><b>{t}Workers with caregiving responsibility report more difficulty than non-caregivers in taking care of their health.{/t}</b><br />
          <select>
            <option selected="selected" value="select"> {t}Select{/t} </option>
            <option value="1"> {t}True{/t} </option>
            <option value="0"> {t}False{/t} </option>
          </select>
        </p>
        <p class="right-answer hide"> {t}Correct!. According to the <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2011/mmi-caregiving-costs-working-caregivers.pdf" target="_blank">MetLife study</a>, workers do report more difficulty.{/t} </p>
        <p class="wrong-answer hide"> {t}Incorrect. Please review the <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2011/mmi-caregiving-costs-working-caregivers.pdf" target="_blank">MetLife study</a> for current statistics.{/t} </p>
      </div>
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
      <img src="<?php echo $this->getImagesUrl('tutorial/157666002.png'); ?>" alt="{t}Tutorial{/t}" />
      <p>{t}In a <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2010/mmi-working-caregivers-employers-health-care-costs.pdf" target="_blank">report</a> evaluating more than 17,000 employees at a large American corporation, those caring for elderly people cost employers 8 percent more in medical costs than those without caregiving responsibilities. The authors estimated that the additional medical costs to U.S. employers of caregiving employees are $13.4 billion a year.{/t}</p>
      
      <!--
      MetLife Mature Market Institute, National Alliance for
Caregiving, & University of Pittsburgh Institute on Aging.
(2010). The MetLife study of working caregivers and
employer health care costs: New insights and innovations
for reducing health care costs for employers. New York,
NY: Metropolitan Life Insurance Company.
 -->
      
      <h5>{t}Signs of eldercare work/family conflicts{/t}</h5>
      <ul>
        <li>{t}Excessive personal phone use during office hours.{/t}</li>
        <li>{t}Tardiness and absenteeism that far exceed company standards.{/t}</li>
        <li>{t}Claims for sickness benefits at a much higher than usual rate.{/t}</li>
      </ul>
      <h5>{t}Lost productivity{/t}</h5>
      <p>{t}When surveyed, 66 percent of caregivers in a <a href="http://assets.aarp.org/rgcenter/il/caregiving_09.pdf" target="_blank">2009 analysis from the National Alliance for Caregiving</a> reported that they arrived later and/or left earlier to provide care—nearly 10 percent more than who reported such workday changes just five years earlier.{/t}</p>
      <div id="question1" class="question">
        <p><b>{t}Workers with caregiving responsibility report more difficulty than non-caregivers in taking care of their health.{/t}</b><br />
          <select>
            <option selected="selected" value="select"> {t}Select{/t} </option>
            <option value="1"> {t}True{/t} </option>
            <option value="0"> {t}False{/t} </option>
          </select>
        </p>
        <p class="right-answer hide"> {t}Correct!. According to the <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2011/mmi-caregiving-costs-working-caregivers.pdf" target="_blank">MetLife study</a>, workers do report more difficulty.{/t} </p>
        <p class="wrong-answer hide"> {t}Incorrect. Please review the <a href="https://www.metlife.com/assets/cao/mmi/publications/studies/2011/mmi-caregiving-costs-working-caregivers.pdf" target="_blank">MetLife study</a> for current statistics.{/t} </p>
      </div>
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
      <img src="<?php echo $this->getImagesUrl('tutorial/168357025.png'); ?>" alt="{t}Image{/t}">
      <p>{t}According to the Health Advocate, their report <a href="http://www.healthadvocate.com/downloads/webinars/caregiving.pdf" target="_blank">Caregiving: Impact on the Workplace</a>, when it comes to caregiving programs, employees say they want:{/t}</p>
      <ul>
        <li>{t}A way to find information on caregiver rights, elder rights, caregiving services and their costs{/t}</li>
        <li>{t}Help balancing their work and family responsibilities{/t}</li>
        <li>{t}Support to manage their emotional and physical stress{/t}</li>
      </ul>
      <h5>{t}Workplace Support{/t}</h5>
      <p>{t}Additionally, the good news is that research shows that providing support, ranging from simple information and referral to the more substantial, such as counseling, respite care, education and training to caregivers, can reduce the negative health and work-related effects of caregiving and improve overall wellbeing.{/t}</p>
      <h4>{t}Certificate of Completion{/t}</h4>
      <p>{t}Upon successful completion ( participation in all of the available course lessons) of each online course, you will have the opportunity to download your custom Certificate of Completion. Once accessed, you will be able to type your name and date into the form-fillable certificate.{/t}</p>
      <a href="<?php echo $this->getImagesUrl('tutorial/CourseCompletionCertificate.pdf'); ?>" target="_blank"><img class="normal" src="<?php echo $this->getImagesUrl('ArtworkCertificate.png'); ?>" alt="{t}Certificate{/t}" /></a> </div>
    <div class="buttons"><a href="#" onclick="parent.jQuery.fancybox.close();"
				class="button left"> {t}End Tutorial{/t} </a> </div>
  </div>
</div>
