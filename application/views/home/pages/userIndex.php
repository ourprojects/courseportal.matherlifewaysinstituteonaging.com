<?php

$clientScript = Yii::app()->getClientScript();
$clientScript->registerScriptFile($this->getScriptsUrl('jquery.quote.js'), CClientScript::POS_HEAD);
$clientScript->registerScript('quotes_rotator', "$('ul#quotes').quote_rotator({randomize_first_quote: true});");
$clientScript->registerCssFile($this->getStylesUrl('homeUser.css'));

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('home.png'); ?>);">
  <h1 class="bottom">{t}Welcome!{/t}</h1>
</div>
<div id="sidebar">
  <div class="box-sidebar three statistics">
    <h3>{t}Statistics on Caregivers (USA){/t}</h3>
    <ul id="quotes">
      <li> <img src="<?php echo $this->getImagesUrl('stat-one-quarter.png'); ?>" /> <span>1/4</span>&nbsp;{t}of US households has a family caregiver providing some form of care or service to a relative or friend, age 50+{/t} </li>
      <li> <img src="<?php echo $this->getImagesUrl('stat-two-thirds.png'); ?>" /> <span>2/3</span>&nbsp;{t}of these family caregivers are also working{/t} </li>
      <li> <img src="<?php echo $this->getImagesUrl('stat-half.png'); ?>" /> <span>50%</span>&nbsp;{t}of employed caregivers work full-time{/t} </li>
    </ul>
  </div>
  <div class="box-sidebar three">
    <h3>{t}Whitepapers (English){/t}</h3>
    <p> <a href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2012/03/eLearning-Maturing-Technology.pdf" class="pdf" target="_blank">{t}e-Learning: Maturing Technology Brings Balance &amp; Possibilities to Nursing Education{/t} </a> <a href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2012/03/How-eLearning-Can-Reduce-Expenses-and-Improve-Staff-Performance.pdf"
				class="pdf" target="_blank">{t}The Bottom Line: How e-Learning Can Reduce Expenses and Improve Staff Performance{/t} </a> </p>
  </div>
  <div class="box-sidebar two">
    <h3>{t}Pew Research Center (English){/t}</h3>
    <a href="http://www.pewresearch.org" target="_blank"><img class="block center" src="<?php echo $this->getImagesUrl('pew.png'); ?>" alt="Pew Internet Research Logo"></a>
    <p class="text-center"><b>{t}Family Caregivers are Wired for Health{/t}</b></p>
    <p> {t}
      Four in ten adults in the U.S. are caring for an adult or child with significant health issues, up from 30% in 2010. Caring for a loved one is an activity that cuts across most demographic groups, but is especially prevalent among adults ages 30 to 64, a group traditionally still in the workforce.
      Caregivers are highly engaged in the pursuit of health information, support, care, and advice, both online and offline, and do many health-related activities at higher levels than non-caregivers.
      {/t} </p>
    <p> <a href="http://www.pewinternet.org/~/media//Files/Reports/2013/PewResearch_FamilyCaregivers.pdf" class="pdf" target="_blank">{t}Family Caregivers are Wired for Health (2013){/t} </a> </p>
  </div>
  <div class="box-sidebar one">
    <h3>{t}Alzheimer's Assocation (English) (USA){/t}</h3>
    <img class="block center" src="<?php echo $this->getImagesUrl('partners/alz.png'); ?>" />
    <p>{t}There are 10 warning signs of Alzheimer's. If you or someone you know is experiencing 
      any of the signs, please see a doctor. Early diagnosis gives you a chance to seek treatment and plan for the future.{/t}</p>
    <p><a href="http://www.alz.org/national/documents/checklist_10signs.pdf" class="pdf">{t}Click to download the handout (English){/t}</a></p>
  </div>
  <div class="box-sidebar two">
    <h3 class="two-line">{t}Medicare.gov - Tips &amp; Resources for Caregivers (English) (USA){/t}</h3>
    <img class="block center" src="<?php echo $this->getImagesUrl('medicare.png'); ?>" />
    <p>{t}Are you familar and/or have you visited the Medicare website? 
      The handout below is a list of tips and resources for caregivers as suggested by Medicare.{/t}</p>
    <p><a href="http://www.medicare.gov/files/ask-medicare-what-medicare-covers.pdf" class="pdf"> {t}Click to download the handout (English){/t}</a></p>
  </div>
</div>
<div class="column-wide">
  <h2 class="flowers">{t}Employers and Employees{/t}</h2>
  <p>{t}We are uniquely positioned to provide corporations with innovative programs and products, all thoughtfully developed and tested under applied research conditions with well respected companies and senior living organizations.{/t}</p>
  <p>{t}With staff expertise across a number of fields including gerontology, psychology, sociology, nursing, and cultural anthropology, we bring together multiple perspectives to address a wide range of issues that affect the aging population. Digital toolkits provide one-stop training resources for human resource managers and trainers who wish to incorporate key topics for working caregivers into current training programs. In addition, we are well positioned to help conduct pilot studies that measure the impact on both working caregivers and the bottom line for interested corporations.{/t}</p>
  <h2 class="flowers top-pad">{t}Portal Requirements &amp; Pedagogy{/t}</h2>
  <p>{t}You will need the following applications to participate:{/t}</p>
  <ul>
    <li><a href="http://get.adobe.com/flashplayer/" target="_blank">{t}Adobe Flash Player{/t};</a></li>
    <li><a href="http://get.adobe.com/reader/" target="_blank">{t}Adobe Reader{/t}; and</a></li>
    <li><a href="http://office.microsoft.com" target="_blank">Microsoft Office</a> or (<a href="http://www.apple.com/iwork/" target="_blank">Apple iWork</a> or <a href="http://www.openoffice.org" target="_blank">Apache OpenOffice).</a></li>
  </ul>
  <p> {t}Effective online instruction depends on learning experiences appropriately designed and facilitated by knowledgeable facilitators.
    Because learners have different learning styles or a combination of styles, our web-based training has been design using activities that
    address their modes of learning in order to provide significant experiences for each course user.{/t} </p>
  <p> {t}Institution Wide Content Management - 25%{/t}<br />
    {t}Online Course Delivery - 25%{/t}<br />
    {t}Targeted Collaboration - 50%{/t} </p>
  <img id="pie-chart" class="block center" height="300" src="<?php echo $this->getImagesUrl('home-chart.png'); ?>" alt="{t}Pie chart{/t}" />
  <h2 class="flowers top-pad">The Sandwich Generation - by Media Storm</h2>
  <p>{t}Filmmaker and photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers 
    and raising two children when Winokurs 83-year-old father, Herbie, became too infirm to care for himself. At that moment they joined 
    some twenty million other Americans who make up the sandwich generation, those who find themselves responsible for the care of both 
    their children and their aging parents.{/t} </p>
  <div class="box-grey">
    <?php 
			$this->widget(
					'ext.JWplayer.JWplayer',
					array(
						'id' => 'TheSandwichGeneration',
						'config' => array(
							'image' => $this->createUrl('download').'/videos/TheSandwichGeneration/poster.jpg',
							'width' => '540px',
							'height' => '400px',
							'levels' => array(
					            array('file' => $this->createUrl('download').'/videos/TheSandwichGeneration/video.m4v'),
					            array('file' => $this->createUrl('download').'/videos/TheSandwichGeneration/video.webm'),
					            array('file' => $this->createUrl('download').'/videos/TheSandwichGeneration/video.ogv')
					        )
						)
					)
			);
			?>
  </div>
</div>
