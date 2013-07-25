<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach(array(
		'.lesson-1', 
		'.lesson-2', 
		'.lesson-3', 
		'.lesson-4', 
		'.lesson-5') as $lesson)
	$this->widget(
			'ext.fancybox.EFancyBox',
			array('id' => $lesson,
				  'config' => array(
				  			'width' => '720',
							'height' => '1000',
							'arrows' => false,
							'autoSize' => false,
							'mouseWheel' => false))
	);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('empower/86503244r.png'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
</div>

<!-- Start sidebar here -->

<div id="sidebar">
  <div class="box-sidebar one" style="background-color:#FFF;">
    <h3>{t}Evaluations - Coming Soon!{/t}</h3>
    <br />
    <p><a href="#">{t}Pre-Course Evaluation{/t}</a></p>
    <p><a href="#">{t}Post-Course Evaluation{/t}</a></p>
<br />
    <img src="<?php echo $this->getImagesUrl('empower/153075496.png'); ?>" alt="image"> </div>
  <div class="box-sidebar one">
    <h3>Alzheimer's Association: behaviors</h3>
    <p><img src="<?php echo $this->getImagesUrl('empower/alz.png'); ?>" /></p>
    <p><a href="http://www.alz.org/national/documents/brochure_behaviors.pdf" target="_blank"><img src="<?php echo $this->getImagesUrl('empower/cover_behaviors.jpg'); ?>" /> </a> </p>
    <hr />
    <p>{t}How to respond when dementia causes unpredictable behaviors (English){/t}</p>
    <br />
    <br />
  </div>
  <div class="box-sidebar three">
    <h3>{t}Caregiver Resources{/t}</h3>
    <p><a href="http://www.usa.gov/Citizen/Topics/Health/caregivers.shtml#Government_Benefits" target="_blank"><img src="<?php echo $this->getImagesUrl('empower/usagov_logo.gif'); ?>" alt="image"></a> </p>
    <hr />
    <p>{t}Find a nursing home, assisted living, or hospice; check your eligibility for benefits; get resources for long-distance caregiving; review legal issues; and find support for caregivers. (English){/t}</p>
    <br />
    <br />
  </div>
  
  <!-- need this final closing div for 'sidebar' --> 
</div>
<!-- start main content here -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t($course->title); ?></h2>
  <p><?php echo t($course->description); ?></p>
  <h5>{t}Independent Study / One-Year Access{/t}</h5>
  <h4>{t}Objectives{/t}</h4>
  <ul>
    <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  
  <!-- Course Lesson list starts here -->
  
  <h4>{t}Course Modules{/t}</h4>
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1">{t}Taking Care of You{/t}</a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2">{t}Reducing Personal Stress{/t}</a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-11" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-12" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-13" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-14" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-15" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-16" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-17" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-18" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-19" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-20" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-21" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-22" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-23" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-24" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-25" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-26" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-27" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-28" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-29" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-30" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> 
    
    
    
    
    
    <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> {t}Communicating Effectively in Challenging Situations{/t} </a> 
    <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-11" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-12" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-13" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-14" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-15" data-fancybox-group="lesson-3" class="hide lesson-3"></a> 
    <a href="#lesson-3-slide-16" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-17" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-18" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-19" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-20" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-21" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-22" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-23" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-24" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-25" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-26" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-27" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-28" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-29" data-fancybox-group="lesson-3" class="hide lesson-3"></a>
    
    
    
    </li>
    
    
    
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> {t}Normal &amp; Abnormal Aging Changes{/t} </a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-11" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-12" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-13" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-14" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-15" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-16" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-17" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-18" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-19" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-20" data-fancybox-group="lesson-4" class="hide lesson-4"></a> </li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> {t}Financial &amp; Legal Issues{/t} </a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-11" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-12" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-13" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-14" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-15" data-fancybox-group="lesson-5" class="hide lesson-5"></a> </li>
  </ul>
  
  <!-- Resources div white box here -->
  
  <div class="box-white" id="resources">
    <h4> {t}Resources{/t}</h4>
    <p>{t}Please click on your countries flag to access resources that may be required to complete this online course. Pleaes contact your instructor or the program director if you have additional resources you would like to see added to your geographical location.{/t}</p>
    <table>
      <tr>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/United-States-Flag-64.png'); ?>" alt="{t}USA{/t}" /></a></td>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/China-Flag-64.png'); ?>" alt="{t}China{/t}" /></a></td>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/Hong-Kong-Flag-64.png'); ?>" alt="{t}Hong Kong{/t}" /></a></td>
      </tr>
      <tr>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/Brazil-Flag-64.png'); ?>" alt="{t}Brazil{/t}" /></a></td>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/Mexico-Flag-64.png'); ?>" alt="{t}Mexico{/t}" /></a></td>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/Taiwan-Flag-64.png'); ?>" alt="{t}Taiwan{/t}" /></a></td>
      </tr>
      <tr>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/Argentina-Flag-64.png'); ?>" alt="{t}Argentina{/t}" /></a></td>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/United-Kingdom-flag-64.png'); ?>" alt="{t}England{/t}" /></a></td>
        <td><a href="#"><img src="<?php echo $this->getImagesUrl('flags/Luxembourg-Flag-64.png'); ?>" alt="{t}Luxembourg{/t}" /></a></td>
      </tr>
    </table>
  </div>
  
  <!-- Developers div white box here -->
  
  <div class="box-white" id="developers">
    <h4>{t}Course Contacts{/t}</h4>
    <br />
    <SPAN class="h5">{t}Content Designer:{/t}</SPAN> <span class="name">Linda Hollinger-Smith, PhD</SPAN>
    <p> {t}Dr. Hollinger-Smith is a doctorally prepared registered nurse focusing her research in gerontology, workforce development, and quality improvement. She has more than 28 years of experience working with older adults in senior living, long-term care settings, in the community, and in acute care settings in various staff and managerial positions. Her past positions include Assistant Dean of the Rush University College of Nursing, Nursing Director of the Rush Primary Care Institute, and Associate Chairperson of the Department of Adult Health Nursing at Rush University College of Nursing.{/t} </p>
    <span class="h5">{t}Developer:{/t}</span> <span class="name">Jon Woodall</span>
    <p>{t}Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs.{/t} </p>
    <span class="h5">{t}Facilitator (English / Spanish / Portuguese):{/t}</span> <span class="name">Elise Foss</span>
    <p>{t}Ms. Foss has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. Currently, she is the Fitness Coordinator for a Mather LifeWays Senior Living community. Originally from Venezula, and educated in Brazil, Elise is fluent in English, Spanish and Portuguese, and travels to family in Brazil each year.{/t} </p>
    <span class="h5">{t}Facilitator (Chinese):{/t}</span> <span class="name">LiJuan Yin</span>
    <p>{t}Mrs. Lin is currently a PhD student at the University of Illinois at Chicago (UIC), studying Public Health. She has helped reserarch, develop, and facilitate online courses for Mather LifeWays Institute on aging for the past 3 years.{/t} </p>
  </div>
</div>

<!-- start course content here -->

<div id="course" class="hide">
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
  <div id="lesson-1">
    <div id="lesson-1-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Empower Online{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/104651788.png'); ?>" alt="{t}image{/t}">
        <h4>{t}Self care for the working family caregiver{/t}</h4>
        <p>{t}<a href="http://www.matherlifewaysinstituteonaging.com/family-caregivers/empower-online/" target="_blank">Empower Online</a> is an in-depth, five-module online course that focuses on self-care for the working caregiver that was developed by <a href="http://www.matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a> with the support of the <a href="http://www.abcdependentcare.com/docs/" target="_blank">American Business Collaboration for Quality Dependent Care (ABC)</a>. The program focuses on managing responsibilities while caring for loved ones with chronic medical issues and includes communicating effectively with healthcare providers and locating additional caregiver resources.{/t}</p>
        <p>{t}Empower Online provides working caregivers with the knowledge and tools to both manage responsibilities of caring for older relatives or friends and address their own physical, mental, and emotional health needs.{/t}</p>
        <p>{t}A research study conducted by Mather LifeWays Institute on Aging found that an online self-care program for working caregivers had multiple benefits.  As a result of participating in the online self-care program, working caregivers reported:{/t}</p>
        <ul>
          <li>{t}Increased participation in exercise and leisure activities;{/t}</li>
          <li>{t}Improved self-reported health;{/t}</li>
          <li>{t}Reduced job stress and feelings of burnout; and{/t}</li>
          <li>{t}Increased positive feelings about their skills in caregiving.{/t}</li>
        </ul>
        <h5>{t}Empower Online focuses on the following key topics:{/t}</h5>
        <ul>
          <li>{t}Improving and maintaining one’s own health through self-care{/t}</li>
          <li>{t}Effectively managing caregiver stress{/t}</li>
          <li>{t}Managing caregiver transitions as loved ones’ health needs change{/t}</li>
          <li>{t}Meeting caregiver responsibilities long distance{/t}</li>
          <li>{t}Making care-related decisions for loved ones{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Course Agenda{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/160910502.png'); ?>" alt="{t}image{/t}">
        <h4>{t}Course Objectives{/t}</h4>
        <ul>
          <li>{t}Manage the ambiguities of self‐care while in the caregiver role{/t}</li>
          <li>{t}Manage stress and emotions{/t}</li>
          <li>{t}Communicating effectively with healthcare providers and coworkers{/t}</li>
          <li>{t}Locate caregiver resources{/t}</li>
        </ul>
        <h4>{t}Course Modules{/t}</h4>
        <ul>
          <li>{t}Taking Care of You{/t}</li>
          <li>{t}Reducing Personal Stress{/t}</li>
          <li>{t}Communicating Effectively in Challenging Situations{/t}</li>
          <li>{t}Normal &amp; Abnormal Aging Changes{/t}</li>
          <li>{t}Financial &amp; Legal Issues{/t}</li>
        </ul>
        <h4>{t}Resources{/t}</h4>
        <p>{t}Specific resources have been identified here because they relate to the course content. These resources will help you get greater detail about specific topics and ideas presented in this course. These resources can be accessed via the course homme page, by country or region.{/t}</p>
        <p class="forum">{t}Please feel free to post your own resources on the Forum throughout this course.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Taking Care of You{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/105817205.png'); ?>" alt="{t}image{/t}">
        <p>{t}This module contains several main sections:{/t}</p>
        <ul>
          <li>{t}Caregiver Resources{/t}</li>
          <li>{t}Managing Self-Care{/t}</li>
          <li>{t}Setting Goals{/t}</li>
          <li>{t}Making Action Plans{/t}</li>
          <li>{t}Problem-Solving: A Solution-Seeking Approach{/t}</li>
          <li>{t}Reward Yourself{/t}</li>
          <li>{t}My Action Plan{/t}</li>
        </ul>
        <p>{t}Caregiving involves many challenges. You often need to master new skills and gain support. You may need to develop new ways of relating to a family member if his or her ability to communicate or remember is compromised by illness. You may have to make tough decisions. But often one of the greatest challenges is taking care of yourself.{/t}</p>
        <div id="question1" class="question">
          <p><b>{t}Caregivers providing on-going care, typically are under a lot stress, which may lead to mental and/or physical health problems.{/t}</b>
            <select>
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}True{/t} </option>
              <option value="0"> {t}False{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct! Stress from caregiving can lead to many health problems./t} </p>
          <p class="wrong-answer hide"> {t}Stress from caregiving can lead to many health problems. This module covers this specific topic.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Caregiver Resources{/t}</h2>
        <hr />
        <p>{t}Too often caregivers neglect their own health and well-being, and put their own needs <i>on the back burner</i>. Sometimes caregivers become a second victim of the disease that afflicts their family member. It is sad when someone says, <i>my mother was the ill person, but her illness destroyed my father</i>. Usually, we cannot stop the impact of a chronic illness on a family member. However, we are responsible for our own self-care.{/t}</p>
        <p>{t}When you board an airplane, the flight attendant gives several safety instructions. One of them is, <i>if oxygen masks drop down, put on your oxygen mask first before helping others</i>. This is because if you do not take care of yourself first, you may not be able to help those who need your help. It is the same thing with caregiving. When you take care of yourself, everyone benefits. Ignoring your own needs is not only potentially detrimental to you, but it can also be harmful to the person who depends on you.{/t}</p>
        <p>{t}The Resource section, on this course's home page, was designed to give you additional resources in order to help you maintain personal well-being while providing quality care to your family member. Many focus on tools to help you to take care of you. These tools will help you:{/t}</p>
        <ul>
          <li>{t}set goals and make action plans;{/t}</li>
          <li>{t}identify and reduce personal stress;{/t}</li>
          <li>{t}make your thoughts and feelings work for you, not against you;{/t}</li>
          <li>{t}communicate your feelings, needs, and concerns in positive ways;{/t}</li>
          <li>{t}cope with difficult situations, including asking for help and setting limits;{/t}</li>
          <li>{t}deal with emotions, especially feelings of anger, guilt, and depression; and{/t}</li>
          <li>{t}make tough caregiving decisions.{/t}</li>
        </ul>
        <p>{t}Additional resources will address special concerns and decisions you may face as a caregiver. These include what to do when a family member is no longer a safe driver, hiring in-home help, using community services, how to communicate with and respond to a family member who is memory impaired, options available when a family member is having problems managing his money; coping with depression, and making a decision about a care facility. You can turn to resources for guidance and direction when you face a specific decision or concern.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Caregiver Resources{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/165424108.png'); ?>" alt="{t}image{/t}">
        <h4>{t}How Much Support Do You Have?{/t}</h4>
        <p>{t}Even if you’re the primary family caregiver, you can’t do everything on your own, especially if you’re caregiving from a distance (more than an hour’s drive from your family member). You’ll need help from friends, siblings, and other family members, as well as health professionals. If you don’t get the support you need, you'll quickly burn out—which will compromise your ability to provide care.{/t}</p>
        <p>{t}Take the surveys below to visually see how much support you feel from each resource. After you have completed the survey, think about what you can do to gain more support from these individuals. Again, this is simply a visual, and is not meant to be printed.{/t}</p>
        <ul>
          <li><a href="#" target="_blank">{t}Family{/t}</a></li>
          
          <!--
      
      
      <table>
        <tr>
          <td><div align="center">Type of Support</div></td>
          <td><div align="center">None</div></td>
          <td><div align="center">Little</div></td>
          <td><div align="center">Some</div></td>
          <td><div align="center">A lot</div></td>
          <td><div align="center">As Much As I Need</div></td>
        </tr>
        <tr>
          <td><div align="left">Understanding</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Respect</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Encouragement</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help me feel good about myself</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Listen to me</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Are there for me</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Offer spiritual support</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Cooperation</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Care for me when I'm sick</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Give/loan me money when I need it</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Babysit</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help with transportation</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help take care of ill/elderly family member</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Physcial affection (hugs)</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
        <tr>
          <td><div align="left">Helps cook and clean</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio" value="radio">
            </div>
            <label for="radio"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio2" value="radio">
            </div>
            <label for="radio2"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio3" value="radio">
            </div>
            <label for="radio3"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio4" value="radio">
            </div>
            <label for="radio4"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio5" value="radio">
            </div>
            <label for="radio5"></label></td>
        </tr>
      </table>
      <p>FRIENDS &amp; COWORKERS</p>
      <table>
        <tr>
          <td><div align="center">Type of Support</div></td>
          <td><div align="center">None</div></td>
          <td><div align="center">Little</div></td>
          <td><div align="center">Some</div></td>
          <td><div align="center">A lot</div></td>
          <td><div align="center">As Much As I Need</div></td>
        </tr>
        <tr>
          <td><div align="left">Understanding</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Respect</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Encouragement</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help me feel good about myself</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Listen to me</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Are there for me</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Offer spiritual support</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Cooperation</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Care for me when I'm sick</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Give/loan me money when I need it</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Babysit</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help with transportation</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help take care of ill/elderly family member</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Physcial affection (hugs)</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Helps cook and clean</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
      </table>
      
      -->
          
          <li><a href="#" target="_blank">{t}Friends and/or Coworkers{/t}</a></li>
        </ul>
        
        <!--
      
       <p>{t}Friend's and Coworkers{/t}</p>
      <table>
        <tr>
          <td><div align="center">Type of Support</div></td>
          <td><div align="center">None</div></td>
          <td><div align="center">Little</div></td>
          <td><div align="center">Some</div></td>
          <td><div align="center">A lot</div></td>
          <td><div align="center">As Much As I Need</div></td>
        </tr>
        <tr>
          <td><div align="left">Understanding</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Respect</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Encouragement</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help me feel good about myself</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Listen to me</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Are there for me</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Offer spiritual support</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Cooperation</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Care for me when I'm sick</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Give/loan me money when I need it</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Babysit</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help with transportation</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Help take care of ill/elderly family member</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Physcial affection (hugs)</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
        <tr>
          <td><div align="left">Helps cook and clean</div></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio6" value="radio">
            </div>
            <label for="radio6"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio7" value="radio">
            </div>
            <label for="radio7"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio8" value="radio">
            </div>
            <label for="radio8"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio9" value="radio">
            </div>
            <label for="radio9"></label></td>
          <td><div align="center">
              <input type="radio" name="radio" id="radio10" value="radio">
            </div>
            <label for="radio10"></label></td>
        </tr>
      </table>
      
      --> 
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Managing Self-Care{/t}</h2>
        <hr />
        <h5>{t}Managing our self-care means that as caregivers we:{/t}</h5>
        <ul>
          <li style="margin-bottom:10px;">{t}<b>Take responsibility</b> - We realize we are responsible for our personal well-being and for getting our needs met. This includes maintaining activities and relationships that are meaningful to us.{/t}</li>
          <li style="margin-bottom:10px;">{t}<b>Have realistic expectations</b> - We fully understand our family member's medical condition and we are realistic about what our family member can and cannot do. The more you know about your family member's medical condition, the better you will be able to plan successful caregiving strategies. Knowledge is power. It is also important to look at your definition of a good caregiver. Unrealistic expectations can set you up for feelings of failure, resentment, and guilt. Placing burdensome expectations on yourself does not make you a better caregiver. In fact, you are much more likely to become an exhausted, irritable, and resentful caregiver... and then to feel guilty!{/t}</li>
          <li style="margin-bottom:10px;">{t}<b>Focus on what we can do</b> - It is important to be clear about what you can and cannot change. For example, you will not be able to change a person who has always been demanding and inflexible, but you can control how you respond to that person's demands. You can accept and let-go of-the things you cannot change. Managing your self-care also means you seek solutions to what you can change.{/t}</li>
          <li style="margin-bottom:10px;">{t}<b>Communicate effectively with others</b> - These include family members, friends, health care professionals, and the care receiver. Do not expect others to know what you need. Recognize it is your responsibility to tell others about your needs and concerns. Communicate in ways that are positive and avoid being demanding, manipulative, or guilt provoking when you make requests.{/t}</li>
          <li style="margin-bottom:10px;">{t}<b>Learn from our emotions</b> - Realize there will be emotional ups and downs. Listen to your emotions and what they are telling you. Do not bottle up your emotions. Repressing or denying feelings decreases energy, causes irritability, depression, and physical problems, and affects your judgment and ability to make the best decisions. Also, do not strike out at others. You are in control of your emotions, your emotions do not control you.{/t}</li>
          <li style="margin-bottom:10px;">{t}<b>Get help when needed</b> - An important part of self-care is knowing when you need help and how to find it. Help can be from community resources, family and friends, or professionals. Most important is that you do not wait until you are hanging at the end of your rope before you get help. Do not wait until you are overwhelmed or exhausted, or your health fails. Reaching out for help, when needed, is a sign of personal strength.{/t}</li>
          <li style="margin-bottom:10px;">{t}<b>Set goals and work toward them</b> - Be realistic in the goals that you set and take steps toward reaching those goals. Seek solutions to the problems that you experience. Changes do not need to be major to make a significant difference. In summary, self-care means that you seek ways to take better care of yourself. As a caregiver, you do not just survive. You thrive!{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Managing Self-Care{/t}</h2>
        <hr />
        <p>Ask yourself the following questions about your caregiving:</p>
        <table>
          <tr style="text-align:left;">
            <td><input type="checkbox" name="Yes" id="Yes">
              <label for="Yes">Yes</label>
              <input type="checkbox" name="No" id="No">
              <label for="No"> No</label></td>
            <td style="text-align:left;"> Do you ever find yourself trying "to do it all?&quot; </td>
          </tr>
          <tr style="text-align:left;">
            <td><input type="checkbox" name="Yes2" id="Yes2">
              <label for="Yes2">Yes</label>
              <input type="checkbox" name="No2" id="No2">
              <label for="No2"> No</label></td>
            <td style="text-align:left;"> Do you ever say to yourself "I should be able to ... ," "I can never. .. ," or similar statements?
              </p></td>
          </tr>
          <tr style="text-align:left;">
            <td><input type="checkbox" name="Yes3" id="Yes3">
              <label for="Yes3">Yes</label>
              <input type="checkbox" name="No3" id="No3">
              <label for="No3"> No</label></td>
            <td style="text-align:left;"> Do you ever ignore your feelings or find that they are overwhelming?
              </p></td>
          </tr>
          <tr style="text-align:left;">
            <td><input type="checkbox" name="Yes4" id="Yes4">
              <label for="Yes4">Yes</label>
              <input type="checkbox" name="No4" id="No4">
              <label for="No4"> No</label></td>
            <td style="text-align:left;"> Do you ever get frustrated because of something you can't change or someone who won't change?
              </p></td>
          </tr>
          <tr style="text-align:left;">
            <td><input type="checkbox" name="Yes5" id="Yes5">
              <label for="Yes5">Yes</label>
              <input type="checkbox" name="No5" id="No5">
              <label for="No5"> No</label></td>
            <td style="text-align:left;"> Do you resist seeking, asking for, or accepting help?
              </p></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="Yes6" id="Yes6">
              <label for="Yes6">Yes</label>
              <input type="checkbox" name="No6" id="No6">
              <label for="No6"> No</label></td>
            <td style="text-align:left;"> Do you feel that your family or others just don't understand what you are going through as a caregiver?
              </p></td>
          </tr>
          <tr>
            <td><p style="text-align:center;">
                <input name="Submit" type="submit" id="Submit" onClick="MM_popupMsg('{t}A \'Yes\' answer to any of these questions indicates an area of self-care you might want to work on.{/t}')" value="Submit">
              </p></td>
          </tr>
        </table>
        <h5>{t}Trying To Do It All{/t}</h5>
        <p>{t}One problem that caregivers frequently experience is trying to do it all and doing it all alone.{/t}</p>
        <p style="text-align:center;"><i>{t}Is it possible to do it all?</i>{/t}</p>
        <p>{t}The answer to the question can be both yes and no. It really depends on you. What is critical is how you define what it means to do it all and, whether or not your definition of doing it all includes taking care of yourself so that you thrive, and not just survive.{/t}</p>
        <p>{t}To Maxine, the answer to the question <em>is it possible to do it all</em>? was <em>no</em>. She says, <em>Mother's needs are endless and no matter what I do, I can never make her happy.</em> Yet, at the same time, Maxine was trying to do it all. Her mother's care dominated Maxine's life. Another caregiver, Maria, answered <em>yes</em> to the question, <em>is it possible to do it all</em>? She explained that "<em>all that needed to be done for my mother was done.</em>"{/t}</p>
        <p>{t}A major difference between Maxine and Maria was the rules by which they operated. Maxine operated by the rule, <em>I must do everything for my mother</em>. The rule had become, <em>I must help Mama at all costs</em>. As a result, her relationships with other family members suffered and Maxine found herself becoming increasingly resentful. Maxine's feelings of wanting to do everything is legitimate, but the actions associated with her feelings usually are impossible to carry out.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Managing Self-Care{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/100207042.png'); ?>" alt="{t}forum icon{/t}">
        <p>{t}As a result, Maxine experiences feelings of failure and lack of success. Maria was more realistic. She recognized that the things she wanted to be done whether they were her desires, her mother's desires, or the desires of others-were not the same as the things that needed to be done. Maria's goal was to make her mother as comfortable as possible, without sacrificing herself and the other important relationships in her life. She also got help from family and a community agency in meeting her mother's needs. Maria said:{/t}</p>
        <p><i>{t}To some degree I recognized that caregiving was like a job and my goal was to find the best way to get the job done. A friend also told me that doing any job well-including the job of caregiving requires four things:{/t}</i></p>
        <ol>
          <li><i>{t}Recognizing you can not do everything yourself-you work with others.{/t}</i></li>
          <li><i>{t}Taking daily breaks.{/t}</i></li>
          <li><i>{t}Taking vacations to renew oneself.{/t}</i></li>
          <li><i>{t}Being realistic about what you can do...{/t}</i></li>
        </ol>
        <p>{t}There was another difference between Maxine and Maria. Maxine felt it was selfish to think of herself. Maria, on the other hand, viewed that if she was going to be there for the long haul, she must take care of herself, and make sure that she had pleasurable moments in her life.{/t}</p>
        <p>{t}As a caregiver, you are more likely to <i>be there</i> for your family member who needs your care and to be a more loving and patient caregiver when you meet some of your own needs. It is important to <i>fill your own cup</i> and not allow it to <i>run dry</i>.{/t}</p>
        <p>{t}It is not being selfish to focus on your own needs and desires when you are a caregiver to a family member who has a chronic or progressive illness. It is important to ask yourself, <i>If my health deteriorates, or I die, what will happen to the person I provide care for? If I get emotionally drained, become deprived of sleep, or become isolated because I am trying to do it all, how loving am I likely to be to my family member?</i>{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Managing Self-Care{/t}</h2>
        <hr />
        <h5>{t}Taking Time for Yourself{/t}</h5>
        <p class="forum">{t}Please respond to the following questions on the Forum:{/t}</p>
        <ul class="forum">
          <li>{t}Do you value yourself and your personal needs?{/t}</li>
          <li>{t}What do you do for personal renewal?{/t}</li>
          <li>{t}Do you save some time for yourself out of each day?{/t}</li>
          <li>{t}Do you take occasional extended breaks?{/t}</li>
          <li>{t}Or are you so involved with caregiving tasks that you have little or no time for yourself?{/t}</li>
          <li>{t}What activities do you enjoy?{/t}</li>
          <li>{t}What would you like to do that would give you a lift?{/t}</li>
          <li>{t}When was the last time you gave yourself a treat?{/t}</li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}forum icon{/t}">
        <p>{t}Breaks in caregiving are a must. They are as important to health as diet, sleep, rest, and exercise. It is important not to lose sight of your personal needs and interests. Studies show that sacrificing yourself in the care of another and removing pleasurable events from your life can lead to emotional exhaustion, depression, and physical illness. You have a right-even a responsibility-to take some time away from caregiving.{/t}</p>
        <p>{t}Regular breaks from the tasks of caregiving are essential. Decide on the time, date, and activity-then follow through. Breaks do not have to be long to make a positive difference. It is important to plan some time for yourself in every day, even if that time is only for 15 minutes or half an hour. Most important is to do something that "fills your cup" and helps you to feel better and thrive. If you have difficulty taking breaks for yourself, consider taking them for your family member. Care receivers also benefit from caregivers getting breaks.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Setting Goals{/t}</h2>
        <hr />
        <p>{t}An important tool in taking care of yourself is setting goals. A goal is something you would like to accomplish in the next three to six months:{/t}</p>
        <p style="text-align:center;"><i>{t}What would you like to do to take better care of yourself and to help yourself to thrive?{/t}</i></p>
        <p>{t}This might be to get a break from caregiving for a week, get help with caregiving tasks, be able to walk three miles, or quit feeling guilty.{/t}</p>
        <p>{t}Goals often are difficult to accomplish because they may seem like dreams or they may be overwhelming. As a result, we may not even try to accomplish them or we may give up shortly after we get started. We will address this problem shortly.{/t}</p>
        <p class="forum">{t}For now, take a moment and write at least 3 goals on the Forum. Put an asterisk (*) next to the goal you would like to work on first. After identifying a goal, the first step is to brainstorm all of the different things you might do to reach your goal. Identify and write down all possible options on the Forum as a separate posting.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}forum icon{/t}">
        <p>{t}The second step is to evaluate the options you have identified. Which options seem like possibilities to you? It is important not to assume that an option is unworkable or does not exist until you have thoroughly investigated it or given it a try. Assumptions are major self-care enemies.{/t}</p>
        <p class="forum">{t}Go back to the above Forum posting and put an asterisk (*) next to two or three options you would like to try. Select one to try.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}forum icon{/t}">
        <p>{t}The third step is to turn your option into a short-term plan, which we call making an action plan.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Making Action Plans{/t}</h2>
        <hr />
        <p>{t}An action plan is a specific action that you are confident you can accomplish within the next week. It is an agreement or contract with yourself.{/t}</p>
        <p>{t}Action plans are one of your most important self-care tools. An action. plan is a step toward reaching your long-term goal. It is to be something you want to do. It is not to be something you feel you should do, have to do, or need to do. The intent of making an action plan is to help you to feel better and to take better care of yourself. Remember, an action plan is a <i>want to do</i>. Here are the five steps for making an action plan:{/t}</p>
        <ul>
          <li>{t}Decide what you want to do.{/t}</li>
          <li>{t}Make your plan behavior-specific.{/t}</li>
          <li>{t}Make a specific plan.{/t}</li>
          <li>{t}Determine your confidence level.{/t}</li>
          <li>{t}Write down your action plan.{/t}</li>
        </ul>
        <h5>{t}Decide What You Want To Do{/t}</h5>
        <p>{t}Think about what is realistic for you to accomplish within the next week. It is important that an action plan is reachable; otherwise, you are likely to experience frustration. An action plan is to help you experience success-not frustration, increased stress, or failure. An action plan starts with the words, "<i>I will ...</i>" If you find yourself saying "<i>I will try to ...,</i>" "<i>I have to ...,</i>" or "<i>I should ...,</i>" then re-examine your action plan. It probably is not something that you truly want to do.{/t}</p>
        <h5>{t}Make Your Plan Behavior-Specific{/t}</h5>
        <p>{t}The more specific your action plan, the greater your chances of accomplishing it. For example, <i>taking better care of myself</i> is not a specific behavior. However, making an appointment for a physical check-up, walking three times a week, getting a massage on Thursday afternoon, or asking someone to stay with your family member for one morning are all specific behaviors. <i>I will relax</i> also is not a specific behavior; however, reading a book, listening to your favorite music, or puttering in the garden are specific behaviors.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t} </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Making Action Plans{/t}</h2>
        <hr />
        <h5>{t}Make a Specific Plan{/t}</h5>
        <p>{t}Making a specific plan is often difficult, yet it is the most important part of making an action plan. A specific plan answers these four questions:{/t}</p>
        <ol>
          <li><b>{t}What are you going to do?</b> - Examples: <i>I will read for pleasure. Or, I will walk.</i>{/t}</li>
          <li><b>{t}How much will you do?</b> - Examples: <i>Will you read one chapter or will you read for a half hour? Will you walk two blocks or for 20 minutes?</i>{/t}</li>
          <li><b>{t}When will you do this?</b> Examples: <i>Will you read the first thing in the morning when you awaken, before you go to bed, when the care receiver is sleeping, or ... ? If your plan is to walk, when during the day will you do it?</i>{/t}</li>
          <li><b>{t}How often will you do this activity?</b> Example: <i>Three times a week on Monday, Wednesday, and Friday.</i>{/t}</li>
        </ol>
        <p>{t}A common mistake is to make an action plan that is unreachable within the time frame. For example, if you plan to do something every day, you might fail. Caregiving, and life in general, has its surprises. Although well-intentioned, it is often not possible to do something every day. It is better to plan to do something once or twice a week and exceed your action plan than to plan to do something every day and fail because you only did it six days, rather than seven. Remember, an action plan is meant to help you to take better care of yourself and to experience success. The last thing you need is additional pressure, disappointment, and stress.{/t}</p>
        <p>{t}Here are some recommendations for writing an action plan that can help you achieve success.{/t}</p>
        <h5>{t}Start where you are or start slowly.{/t}</h5>
        <p>{t}If there is a book you have been wanting to read, but just have not found the time, it may not be realistic to expect to read the entire book in the next week. Instead, try reading for a half hour twice during the week If you have not been physically active, it may be unrealistic to make an action plan· to start walking three miles. It is better to make your action plan for something that you believe you can accomplish. For example, make your plan for walking three blocks or a half mile, rather than three miles.{/t}</p>
        <h5>{t}Give yourself time off.{/t}</h5>
        <p>{t}We all have days when we do not feel like doing anything. That is the advantage of saying you will do something three days a week, rather than every day. That way, if you do not feel like doing something on one day, or something develops that prevents you from doing it, you can still achieve your action plan.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Making Action Plans{/t}</h2>
        <hr />
        <h5>{t}Determine Your Confidence Level{/t}</h5>
        <p>{t}Once you have made your action plan, ask yourself the following question: On a scale of 0 to 10, with 0 being not at all confident and 10 being totally confident, how confident am I that I can complete my action plan? If your answer is 7 or above, your action plan is probably realistic and reachable. However, if your answer is 6 or below, it is important to take another look at your action plan. Something probably needs to be adjusted.{/t}</p>
        <p>{t}Ask yourself:{/t}</p>
        <ul>
          <li>{t}<i>What makes me uncertain about accomplishing my action plan?</i>{/t}</li>
          <li>{t}<i>What problems do I foresee?</i>{/t}</li>
        </ul>
        <p>{t}Then, see if you either find a solution to the problems you identified or change your action plan to a new one in which you feel greater confidence.{/t}</p>
        <h5>{t}Write Down Your Action Plan{/t}</h5>
        <p>{t}Once you are satisfied with your action plan, write it down. Putting an action plan in writing helps us to remember, keep track of, and accomplish the agreement we have made with ourselves. Keep track of how you are doing. Write down the problems you encounter in carrying out your action plan. Check off activities as you accomplish them. If you made an adjustment in your action plan, make a note of what you did.{/t}</p>
        <p>{t}At the end of the week, review your action plan. Ask yourself:{/t}</p>
        <ul>
          <li>{t}<i>Am l nearer to accomplishing my goal?</i>{/t}</li>
          <li>{t}<i>How do I feel about what I did?</i>{/t}</li>
          <li>{t}<i>What obstacles or problems, if any, did I encounter?</i>{/t}</li>
        </ul>
        <p>{t}Taking stock is important. If you are having problems, this is the time to seek solutions.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Problem-Solving: A Solution-Seeking Approach{/t}</h2>
        <hr />
        <p>{t}Sometimes you may find that your action plan is not workable. You may encounter unusual circumstances that week and need to give the plan a try for at least another week or you may need to make adjustments in your original plan. The following solution seeking approach can help you identify solutions to problems.{/t}</p>
        <ul>
          <li>{t}<b>Clearly identify the problem.</b> This is the first and most important step in the solution-seeking approach. It also can be the most difficult step.{/t}</li>
          <li>{t}<b>List ideas to solve the problem.</b> Family, friends, and others may be helpful in giving ideas. When you ask for ideas, just listen to each suggestion. It is best not to respond as to why an idea is or is not likely to work. Just focus on getting the ideas.{/t}</li>
          <li>{t}<b>Select one to try.</b> When trying a new idea, give it a fair trial before deciding that it will not work.{/t}</li>
          <li>{t}<b>Assess the results.</b> Ask yourself, <i>How well did what I chose work?</i> If all went well, congratulate yourself for finding a solution to the identified problem. If the first idea did not work, try another idea.{/t}</li>
        </ul>
        <p>{t}Sometimes an idea just needs fine-tuning. It is important not to give up on an idea just because it did not work the first time. If you have difficulty finding a solution that works, utilize other resources. Share your problem with family, friends, and professionals and ask them for possible ideas. If you still find that suggested solutions do not work, you may need to accept that the problem is not solvable right now.{/t}</p>
        <p>{t}Remember, just because there does not seem to be a workable solution right now does not mean that a problem can not be solved later, or that other problems can not be solved in the same way. It may be helpful to go back to the first step and consider if the problem needs to be redefined.{/t}</p>
        <p>{t}For example, a caregiver had thought that her problem was <i>I am tired all of the time.</i> However, the real problem was the caregiver's beliefs that <i>No one can care for John like I can,</i> and <i>I have to do everything myself.</i> As a result of these beliefs, the caregiver was doing everything herself and getting worn out. When she redefined the problem and focused on changing her beliefs and view of the caregiving situation, she found a workable solution. Sometimes, too, a problem may be easier to work on if you break it down into smaller problems.{/t}</p>
        <p>{t}Most of the time if you follow these steps, you will find a solution that solves the problem. It is important to avoid making the mistake of jumping from step l to step 7 and thinking <i>nothing can be done.</i>{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Reward Yourself{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/78771154.png'); ?>" alt="{t}image{/t}" />
        <p>{t}Accomplishing action plans is often a reward in itself. However, it is also important to find healthy pleasures that add enjoyment to your life. Rewards do not have to be fancy or expensive or take a lot of time.{/t}</p>
        <p>{t}One caregiver; for example, regularly goes to a movie or a play as a gift to herself from her husband. She said:{/t}</p>
        <p><i>{t}When my husband was well, he would take me out Friday nights to a movie or a play at least twice a month. Because of his medical condition, he is no longer able to do so. Now a friend and I go to a movie or a play at least once a month. I consider this is a treat that my husband is still giving to me.{/t}</i></p>
        <p>{t}Another caregiver said:{/t}</p>
        <p><i>{t}Before my wife's illness, I would go golfing with my buddies on Saturday morning. When Carmela needed more care, I quit golfing. I now treat myself to Saturday golfing, while my daughter or a friend visits with Carmela. This gives me something to look forward to each week and I feel more alive when I return home. I am also finding I am more patient with Carmela. My daughter says I am always happier and calmer when I return home. So, I look at Saturday golfing as my treat not only to me, but also to Carmela.{/t}</i></p>
        <p class="forum">{t}Have you rewarded yourself recently for the task you have accomplisehd within your caregiver role? Post your response on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}My Action Plan{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/145121152.png'); ?>" alt="{t}image{/t}" />
        <p>{t}In review, a caregiver who practices selfcare does the following:{/t}</p>
        <ol>
          <li>{t}Sets goals.{/t}</li>
          <li>{t}Identifies a variety of options for reaching a goal{/t}</li>
          <li>{t}Makes an action plan toward accomplishing the goal.{/t}</li>
          <li>{t}Carries out the action plan.{/t}</li>
          <li>{t}Assesses how well the action plan is working.{/t}</li>
          <li>{t}Makes adjustments, as necessary, in the action plan.{/t}</li>
          <li>{t}Rewards himself or herself.{/t}</li>
        </ol>
        <p>{t}Not all goals are achievable. Sometimes we must accept that what we want to do is not possible at this time, and we must let go of the idea. Be realistic about goals and do not dwell on what can not be done.{/t}</p>
        <p>{t}Consider what is likely to happen to the caregiver who is driven by a goal to make her mother happy. Given her mother's personality, this goal may be completely unachievable. Such a goal creates a heavy burden and a caregiver is not likely to achieve it. However, an achievable goal might be to provide a pleasurable activity for her mother at least once a week perhaps taking her to get her hair done, visiting a friend, watching a comedy on television, or working together on a project her mother enjoys.{/t}</p>
        <p>{t}Remember, what is important in caregiving is not just to survive, but to thrive!{/t}</p>
        <p style="text-align:center;">{t}<a href="#" target="_blank">Action Plan Template</a>{/t}</p>
        
        <!--
 <?php // echo CHtml::link('Link Text',array('controller/action',param1'=>'value1'), array('target'=>'_blank'); ?>

HTML Output:

<a target="_blank" href="index.php?r=controller/action&param1=value1">Link Text</a>

--> 
        
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a></div>
    </div>
    <!-- need this final div here to close lesson-1 --> 
  </div>
  <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Reducing Personal Stress{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/154263430.png'); ?>" alt="{t}image{/t}" />
        <p>{t}This module two main sections:{/t}</p>
        <ul>
          <li>{t}The Stress of Caregiving{/t}</li>
          <li>{t}Steps to Maintain Health &amp; Avoid Stress{/t}</li>
        </ul>
        <p>{t}This module explores the stress of caregiving. It will help you identify and understand your particular stressors, challenges, and strengths. You can then plan strategies that help you cope, change, and reduce stress. A basic premise of this chapter is that each of us has a reservoir of strength. The challenge is to identify our strengths build on them.{/t}</p>
        <p class="forum">{t}Before you get started, post to the Forum your current stressors, so at the end of this module we may recall them.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
    <div id="lesson-2-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Stress of Caregiving{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/LS021194.png'); ?>" alt="{t}image{/t}" />
        <p>{t}There has been so much written about stress it has become a household word. Studies show that a certain amount of stress is helpful. It can challenge us to change and motivate us to do things we might not do otherwise. However, when the amount of stress overwhelms our ability to cope with it, we feel <i>'distress'</i> or <i>'burnout.'</i>{/t}</p>
        <p>{t}Distress is <i>'suffering of mind or body; severe physical or mental strain.'</i> As a caregiver, you no doubt have increased stress in your life, whether you are caring for a mother with early Parkinson's disease, who is still able to care for her personal needs, or a spouse who does not recognize you because of advanced Alzheimer's disease.{/t}</p>
        <p class="forum">{t}Please think about the last time you were under distress. Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}" />
        <p>{t}Each caregiving situation is unique. What is stressful for you may not be stressful for someone else. In his book <a href="http://www.amazon.com/The-Survivor-Personality-Stronger-Difficulties/dp/0399522301" target="_blank">The Survivor Personality</a>, AI Siebert says, <i>"there is no stress until you feel a strain."</i>{/t}</p>
        <p>{t}Since the feeling of stress is subjective and unique to each individual, it is difficult to define objectively. The stress you feel is not only the result of your caregiving situation, it is all of your perception of it. Your stress will increase or decrease depending on how you perceive your circumstances. And your perception will affect how you respond.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Stress of Caregiving{/t}</h2>
        <hr />
        <h4>{t}Factors That Affect Stress{/t}</h4>
        <p>{t}Your level of stress is influenced by many factors, including:{/t}</p>
        <ul>
          <li>{t}whether your caregiving is voluntary or not;{/t}</li>
          <li>{t}your relationship with the care receiver;{/t}</li>
          <li>{t}your coping abilities;{/t}</li>
          <li>{t}your caregiving situation; and{/t}</li>
          <li>{t}whether support is available.{/t}</li>
        </ul>
        <h5>{t}Whether your caregiving is voluntary or not -{/t}</h5>
        <p>{t}Many people become caregivers voluntarily. Others acquire the role because no one else is available. When you become a caregiver voluntarily, you are making a choice. However, if you "inherited" the job and feel you had no choice, the chances are greater for experiencing strain, distress, and resentment. Nancy became a caregiver because no one else was available.{/t}</p>
        <p>{t}Nancy could not have been more surprised when the visiting nurse asked her if she was the primary caregiver for her mother in-law, Joan. Nancy was fond of Joan. She called and stopped by frequently to see how Joan was managing, but had not thought of herself as the primary caregiver. It was apparent that Joan's medical condition was worsening and she was becoming increasingly weak Nancy realized there were no other children or relatives available, so she agreed, although somewhat reluctantly, to be Joan's caregiver. Nancy felt anxious and uncertain about what it meant to be a primary caregiver and whether she had the necessary skills to perform the role.{/t}</p>
        <p>{t}Luckily, Nancy and Joan had a good relationship and they were able to communicate openly, minimizing some of the potential for stress. You can not always think about a caregiving relationship in advance, but if you can, it has greater potential for success.{/t}</p>
        <h5>{t}Your relationship with the care receiver -{/t}</h5>
        <p>{t}If your relationship with the care receiver has been difficult, becoming a caregiver is more of a challenge. If the care receiver has always been demanding and controlling, you will probably feel more stress, anger, and resentment. Sometimes people are caregiving with the hope of healing a relationship. The healing may or may not happen. If healing does not happen, the caregiver may feel regret, depressed, and discouraged. A professional counselor, spiritual advisor, or trusted friend can help deal with such feelings and emotions.{/t}</p>
        <h5>{t}Your coping abilities -{/t}</h5>
        <p>{t}How you have coped with stress in the past predicts how you will cope now. Did you find constructive ways to manage your stress? Perhaps you were able to find time to exercise regularly and generally take care of yourself. Or did you rely on alcohol or drugs to help you cope? Sometimes people rely on medications and alcohol in times of stress, which only makes matters worse. It is important to identify your current coping strengths and build on them. Learning new coping skills also will help make your caregiving situation less stressful.{/t} 
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Stress of Caregiving{/t}</h2>
        <hr />
        <h5>{t}The caregiving situation -{/t}</h5>
        <p class="forum">{t}What does your caregiving situation require of you? Does it require 24-hour-aday availability? Or do you just need to make an occasional telephone call to check on the person? What disease does the care receiver have? Does he have a mental or physical disability, or both? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}" />
        <p>{t}Certain caregiving situations are more stressful than others. For example, caring for someone who has a dementia such as Alzheimer's disease is often more stressful than caring for someone with a physical limitation. Also, stress tends to be highest when:{/t}</p>
        <ul>
          <li>{t}the caregiving situation continues for a long time.{/t}</li>
          <li>{t}the care receiver's needs gradually increase.{/t}</li>
          <li>{t}caregivers feel they have limited or no support.{/t}</li>
          <li>{t}caregivers have their own health/physical problems.{/t}</li>
        </ul>
        <h5>{t}Whether support is available -{/t}</h5>
        <p>{t}Caregivers who feel isolated and without adequate support usually experience a higher level of stress. Support may be lacking for several reasons:{/t}</p>
        <ul>
          <li>{t}The caregiver may resist accepting help, even when he or she needs it.{/t}</li>
          <li>{t}Others may be willing to help but do not offer because they are uncomfortable around the ill person, frightened of the illness, or do not know what they can do.{/t}</li>
          <li>{t}Others do not want to interfere, especially if the caregiver seems to have everything under control and has refused help in the past.{/t}</li>
        </ul>
        <p>{t}Caregiver stress is influenced by many factors, including the need to adapt to ongoing changes and losses caused by the care receiver's illness. These changes cause you to redefine your life. What was normal has changed. You are living with a new reality.{/t} 
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Stress of Caregiving{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/92037503.png'); ?>" alt="{t}image{/t}" />
        <h5>{t}Signs of Stress{/t}</h5>
        <p>{t}The first step in managing stress is to be aware of how it affect you.{/t}</p>
        <p class="forum">{t}On the Forum, post your warning signs and symptoms of stress. Also, search the Internet and locate at least 3 different resources that list stress symptoms, and post them to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}" />
        <p>{t}According to the <a href="http://www.cdc.gov/Features/HandlingStress/" target="_blank">CDC</a>, common reactions to a stressful event include:{/t}</p>
        <ul>
          <li>{t}Disbelief and shock{/t}</li>
          <li>{t}Tension and irritability{/t}</li>
          <li>{t}Fear and anxiety about the future{/t}</li>
          <li>{t}Difficulty making decisions{/t}</li>
          <li>{t}Being numb to one’s feelings{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/155236974.png'); ?>" alt="{t}image{/t}" />
        <p>{t}Whatever causes stress in your life, too much of it can lower your resistance to disease and lead to <i>"burnout."</i> Current research shows that there is a close connection between stress and health. Unrelieved stress is one of many factors that cause illness.{/t}</p>
        <p>{t}Research also shows that thoughts and emotions affect the immune system, which is the first line of defense against disease. It is possible to strengthen the immune system by reducing stress. The following four steps will help you maintain your health and avoid distress:{/t}</p>
        <ol>
          <li>{t}Recognize your warning signs of stress.{/t}</li>
          <li>{t}Identify your sources of stress.{/t}</li>
          <li>{t}Identify what you can and cannot change.{/t}</li>
          <li>{t}Take action to manage your stress.{/t}</li>
        </ol>
        <p>{t}Each of these steps will be discussed in detail.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h4>{t}Step 1: Recognize Your Warning Signs of Stress{/t} -</h4>
        <p>{t}The first step in managing stress is to be aware of how it affects you. What are your warning signs and symptoms of stress? The following are signs that may occur when you experience an unusual amount of stress. Answering these questions can help you identify your own warning signs.{/t}</p>
        <p style="text-align:center;"><i>{t}What is usually your earliest sign of stress?{/t}</i></p>
        <p>{t}It is important to recognize stress early and do something about it, before it causes you serious problems. For one caregiver, the early sign might be increased irritability. For another, it might be lying awake for hours before falling asleep. For another, it might be fatigue and a lack of energy.{/t}</p>
        <p>{t}Sometimes, too, when we are involved in a situation, we may not listen to our early warning signs, but they are voiced in the words of others:{/t}</p>
        <ul>
          <li>{t}<i>"You look so tired,"</i>{/t}</li>
          <li>{t}<i>"You get upset so easily lately,"</i>{/t}</li>
          <li>{t}<i>"Why are you snapping at me?"</i>{/t}</li>
        </ul>
        <p>{t}If you hear such statements, it is a <i>"red light"</i> warning sign. Just as a flashing red light on your car's dashboard warns you that something is wrong with your car, we also display warning signals. What happens if we ignore the early red flashing light on the car's dashboard? What happens if we ignore our personal early warning signals?{/t}</p>
        <p class="forum">{t}Do you listen to your early warning signals? What are they? And what do you do about them? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}" />
        <p>{t}Warning signs usually mean we need to stop, valuate what is happening, and make some changes. The earlier warning signals are recognized, the greater the chance of avoiding or reducing the destructive effects of stress.{/t}</p>
        
        <!--
      
        <div class="question">
          <p>
            <input type="checkbox" name="Yes" id="Yes">
            <label for="Yes">Yes</label>
            <input type="checkbox" name="No" id="No">
            <label for="No">No</label>
            | Do you feel a loss of energy or zest for life?</p>
          <p>
            <input type="checkbox" name="Yes2" id="Yes2">
            <label for="Yes2">Yes</label>
            <input type="checkbox" name="No2" id="No2">
            <label for="No2">No</label>
            | Do you feel tired or exhausted much of the time?</p>
          <p>
            <input type="checkbox" name="Yes3" id="Yes3">
            <label for="Yes3">Yes</label>
            <input type="checkbox" name="No3" id="No3">
            <label for="No3">No</label>
            | Do you feel out of control, exhibiting uncharacteristic emotions or actions?</p>
          <p>
            <input type="checkbox" name="Yes4" id="Yes4">
            <label for="Yes4">Yes</label>
            <input type="checkbox" name="No4" id="No4">
            <label for="No4">No</label>
            | Do you feel tense, nervous, or anxious much of the time?</p>
          <p>
            <input type="checkbox" name="Yes5" id="Yes5">
            <label for="Yes5">Yes</label>
            <input type="checkbox" name="No5" id="No5">
            <label for="No5">No</label>
            | Do you lack interest in people or things that were formerly pleasurable?</p>
          <p>
            <input type="checkbox" name="Yes6" id="Yes6">
            <label for="Yes6">Yes</label>
            <input type="checkbox" name="No6" id="No6">
            <label for="No6">No</label>
            | Are you becoming increasingly isolated?</p>
          <p>
            <input type="checkbox" name="Yes7" id="Yes7">
            <label for="Yes7">Yes</label>
            <input type="checkbox" name="No7" id="No7">
            <label for="No7">No</label>
            | Are you consuming more sleeping pills, medicating, alcohol, caffeine, or
            cigarettes?</p>
          <p>
            <input type="checkbox" name="Yes8" id="Yes8">
            <label for="Yes8">Yes</label>
            <input type="checkbox" name="No8" id="No8">
            <label for="No8">No</label>
            | Are you having increased health problems: ie, high blood pressure headaches, ulcers, upset stomach, or other difficulties with digestion?</p>
          <p>
            <input type="checkbox" name="Yes14" id="Yes14">
            <label for="Yes14">Yes</label>
            <input type="checkbox" name="No14" id="No14">
            <label for="No14">No</label>
            | Do you have sleep problems, such as
            difficulty falling asleep at night,
            awakening early, or sleeping excessively?</p>
          <p>
            <input type="checkbox" name="Yes13" id="Yes13">
            <label for="Yes13">Yes</label>
            <input type="checkbox" name="No13" id="No13">
            <label for="No13">No</label>
            | Are you experiencing appetite changes?</p>
          <p>
            <input type="checkbox" name="Yes12" id="Yes12">
            <label for="Yes12">Yes</label>
            <input type="checkbox" name="No12" id="No12">
            <label for="No12">No</label>
            | Do you have problems with concentration
            or memory?</p>
          <p>
            <input type="checkbox" name="Yes11" id="Yes11">
            <label for="Yes11">Yes</label>
            <input type="checkbox" name="No11" id="No11">
            <label for="No11">No</label>
            | Are you increasingly irritable or
            impatient with others?</p>
          <p>
            <input type="checkbox" name="Yes10" id="Yes10">
            <label for="Yes10">Yes</label>
            <input type="checkbox" name="No10" id="No10">
            <label for="No10">No</label>
            | Do you have feelings of helplessness or
            hopelessness?</p>
          <p>
            <input type="checkbox" name="Yes9" id="Yes9">
            <label for="Yes9">Yes</label>
            <input type="checkbox" name="No9" id="No9">
            <label for="No9">No</label>
            | Are you abusing or neglecting to provide care to the care receiver?</p>
          <p>
            <input type="checkbox" name="Yes15">
            <label for="Yes15">Yes</label>
            <input type="checkbox" name="No15">
            <label for="No15">No</label>
            Do you have thoughts of suicide?</p>
          <p>
            <input name="button" type="submit" id="button" onClick="MM_popupMsg('A \&quot;yes\&quot; answer to even one or two of these questions can indicate stress that has become debilitating.')" value="Submit">
          </p>
        </div>
        --> 
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h4>{t}Step 2: Identify Your Sources of Caregiving Stress -{/t}</h4>
        <p>{t}The second step in managing stress is to recognize what causes your stress. Not all stressors are the result of caregiving. Other sources can affect your ability to be a caregiver. The following questions include many common sources of stress. Thinking about these questions can help you recognize some of your own sources.{/t}</p>
        <ol>
          <li>{t}Are you experiencing many demands on your time, energy, or money? What are they?{/t}</li>
          <li>{t}Do you feel you have conflicting responsibilities? Which ones?{/t}</li>
          <li>{t}Are there differences in expectations between your family, your boss, the care receiver, and yourself? What are they?{/t}</li>
          <li>{t}Do you feel others do not understand the care receiver's mental or physical condition?{/t}</li>
          <li>{t}Do you have difficulty meeting the care receiver's physical or emotional needs?{/t}</li>
          <li>{t}Are you pressured by financial decisions and lack of resources?{/t}</li>
          <li>{t}Do you feel a loss of freedom, to the point of feeling trapped?{/t}</li>
          <li>{t}Is there disagreement among family members?{/t}</li>
          <li>{t}Do you feel that other family members are not doing their share?{/t}</li>
          <li>{t}Does the care receiver place unrealistic demands and expectations on you?{/t}</li>
          <li>{t}Is there a lack of open communication between you and the care receiver?{/t}</li>
          <li>{t}Do other family members have negative attitudes that create difficulty for you?{/t}</li>
          <li>{t}Is it painful to watch the care receiver's condition get worse?{/t}</li>
          <li>{t}Are there other problems with children, marriage, job, finances, or health? What are they?{/t}</li>
        </ol>
        <p>{t}Consider your <i>"yes"</i> answers carefully. The sources of stress you have identified are indicators for change. Use the awareness you have gained in the first two steps to make helpful changes.{/t}</p>
        <p class="forum">{t}Which of the above listed common sources of stress can you identify with the most? Please post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/120277481.png'); ?>" alt="{t}Image{/t}" />
        <p>{t}The following story is an example of a caregiver who recognized the source of her distress and made changes to better manage the situation.{/t}</p>
        <p>{t}Ernestine was increasingly fatigued, irritable, and depressed with the responsibility of caring for her husband, Richard, who had Parkinson's disease. Richard's condition was steadily getting worse. He was bed-bound and needed help with many functions. Other family members had not offered to help, and Ernestine felt abandoned, alone, angry, and overwhelmed. A few friends and neighbors had offered to help but Ernestine refused. When she started having health problems, it became clear that something had to change. She had to have help.{/t}</p>
        <p>{t}Because Ernestine had difficulty asking for help, she devised a simple plan that would give others an opportunity to help without having to be asked. She made a list of tasks she needed help with and posted it on the refrigerator. The list included such things as vacuuming the living room, grocery shopping, staying with Richard so she could go to church, weeding the garden, picking up audio books at the library, picking up medications at the pharmacy, and preparing food. When visitors offered to help, Ernestine referred them to the list, suggesting they choose a task that suited them. This proved to be a successful plan for everyone.{/t}</p>
        <p>{t}It is important to identify the causes of your stress before they overwhelm you. Do not wait until you develop health problems, as Ernestine did. Many caregivers keep going until they become ill. You can only be an effective caregiver if you are healthy. Self-sacrifice to the point of illness benefits no one and is not required or recommended.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h4>{t}Step 3: Identify What You Can and Cannot Change -{/t}</h4>
        <p>{t}A major challenge of caregiving is to not only survive, but to rebuild your life and thrive. This is possible once you know the sources and signs of your stress. Then you can determine those you can do something about and those that are beyond your control. Step three is to identify what you can and cannot change{/t}</p>
        <p>{t}Identifying what you can change gives you a sense of control over events. However, it is not easy to determine what can and cannot be changed. Too often people try to change things they have no control over. For example, someone who focuses on trying to change another person usually ends up more frustrated. The only person you can change is yourself. You may be able to change a situation, how you respond to it, or your perception of it, but you can not change another person. It wastes valuable time and energy trying to change what is outside of your control. Some situations can not be changed. However, you may be able to manage them better if you change your outlook about a situation, or decide to 'roll with the punches.'{/t}</p>
        <p>{t}The frustration and hopelessness that result from trying to change the unchangeable are self-defeating and can adversely affect a relationship, as in the case of Hal and Sue.{/t}</p>
        <p>{t}Sue and Hal had been a socially active couple. Sue was diagnosed with early Parkinson's disease and gradually started backing out of social plans because she did not feel up to it. Since the beginning of the disease Sue has been on a roller coaster of having good days and bad days. Hal encourages Sue to go out when she does not feel like it, urging her to 'snap out of it.' He wants things to remain as they were.{/t}</p>
        <p>{t}Hal is frustrated in his attempts to change the effect of the disease on their lives. By not accepting Sue's feelings, he is adding stress to their relationship. But recently he has learned more about Parkinson's disease and is trying to be more realistic and flexible about what he can and cannot change. Flexibility is crucial. A Japanese saying is:{/t}</p>
        <blockquote style="text-align:center;">{t}'In a storm, it is the bamboo, the flexible tree, that can bend with the wind and survive. The rigid tree that resists the wind falls, victim of its own insistence on control.'{/t}</blockquote>
        <p>{t}Bending with the wind is crucial to surviving the winds of change, including those involved in caregiving. At times, both you and the care receiver may feel a loss of control over your lives. While feeling in control is important, sometimes it can be me a problem because the more we try to control, the less control we seem to have. Being flexible can help us keep a positive attitude, despite hardships.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <p>{t}Use the following guidelines to look at your situation and to determine what can and cannot be changed:{/t}</p>
        <ol>
          <li>{t}Accept the reality of your caregiving situation.{/t}</li>
          <li>{t}Educate yourself about the care receiver's disease.{/t}</li>
          <li>{t}Identify unrealistic expectations, especially your own.{/t}</li>
          <li>{t}Seek and accept support.{/t}</li>
          <li>{t}Identify what you still have, rather than focus on what is lost.{/t}</li>
          <li>{t}Let go of what cannot be changed.{/t}</li>
        </ol>
        <h5>{t}Accept the reality of your caregiving situation{/t}</h5>
        <p>{t}When making changes it is necessary, but not always easy; to accept reality. We often deny things that hurt, and that can keep us from seeing a situation as it really is. Jane heard the doctor tell Joe that he had a serious illness. He also told Joe he would need more rest and help with certain daily activities. Still, Jane found herself feeling annoyed when Joe took frequent naps, especially since she was taking on more responsibility for managing things at home. It took time for Jane to stop denying, and start accepting, the full impact of the disease. It was then that she was able to see realistically what could and could not be changed.{/t}</p>
        <p>{t}Jane is coping in a more adaptive way. However, Joe's mother denied the seriousness of the disease long after Jane came to terms with it. Family members may take different lengths of time to accept reality, which can add to the stress of caregiving.{/t}</p>
        <h5>{t}Educate yourself about the care receiver's disease{/t}</h5>
        <p>{t}You will be better able to identify what you can and cannot change when you understand the disease. For example, without knowledge about the communication abilities of someone with Alzheimer's disease, you may try to reason with the person or expect him to tell someone something you consider easy to remember. This will probably frustrate both of you. There are many sources of information about specific diseases, including your personal physician, medical libraries, and associations related to specific diseases, such as Alzheimer's and Parkinson's disease. If you have access to a computer that is linked to the Internet, you can find a wealth of current information on diseases and disease-related associations.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h5>{t}Identify unrealistic expectations, especially your own{/t}</h5>
        <p>{t}You can make changes successfully only when your expectations are realistic. How realistic are yours? Do you often feel anxious because you expect more of yourself than you can achieve? Many caregivers listen only to the 'shoulds' they have been raised with. Women, especially, often believe they "should" be able to do everything themselves, and when that is not possible, they feel guilty or depressed. If you have unrealistic expectations of yourself, then your expectations of what can be changed probably will be unrealistic also. The following story is an example of a caregiver, Rosa, who with her husband, Dean, made constructive changes in what was a difficult, stressful situation.{/t}</p>
        <p>{t}Rosa was devastated when Dean, her husband of 40 years, suffered a sudden, severe stroke that left him partially paralyzed on one side of his body and unable to speak. The stroke was a shock. Rosa's initial response was to become overly protective and do everything for Dean. She was afraid to leave him alone for fear something terrible would happen. Before the stroke, Rosa and Dean had been making retirement plans, which included extensive travel. Those plans were forsaken as they both felt increasingly overwhelmed, fearful, isolated, and depressed. Rosa became extremely fatigued and irritable as Dean became increasingly dependent on her. The visiting nurse talked with them about what Dean could and could not do for himself. She emphasized the importance of Dean maintaining as much independence as possible. It became apparent that Dean could do many things for himself, including writing letters to family and friends. Dean felt better as he became more independent. Rosa was able to be more realistic in her expectations. She realized that Dean's dependence on her was detrimental to their relationship.{/t}</p>
        <p>{t}As Rosa and Dean gradually adapted to living with the stroke, they became less fearful and more hopeful. They began looking at the quality of their remaining life together. They wanted, more than anything, to travel together and decided to take a short trip to see how it would go. The first trip was successful and they felt encouraged to travel more. Rosa found a travel agent who helped them plan trips that accommodated Dean's disabilities. They enjoyed several trips before Dean's death 12 years later. Rosa and Dean responded to this challenge by gaining an understanding of the disease, accepting reality; setting realistic expectations, and changing what could be changed.{/t}</p>
        <h5>{t}Seek and accept support{/t}</h5>
        <p>{t}Many caregivers find it difficult to ask for help. Rosa initially refused help from friends and neighbors. She did everything herself until she started feeling distressed. The expectations she had for herself were overwhelming and unrealistic. It was not until she began seeking support from the visiting nurse, travel agent, and others that she was able to find a way to make changes. Often you can make changes only with the help of others. Seeking and accepting support may be the single most important factor in making constructive changes.{/t}</p>
        <h5>{t}Identify what you still have, rather than focus on what is lost{/t}</h5>
        <p>{t}When Rosa and Dean decided to look for <i>"what remained"</i> in their situation, they hoped that they still had quality in their life together. They looked at what they still had, rather than focusing on what had been lost, and they made changes that were still possible.{/t}</p>
        <p>{t}They found an unexpected <i>'gift'</i> as they made changes and adapted to the illness. Rosa said, <i>'I never would have asked for the stroke to happen, but it was because of it that Dean and I learned what love was all about. I am a different person than I was. I am more understanding, patient, caring, and sensitive to the pain of others.'</i> {/t}</p>
        <p>{t}Many caregivers, as they learn more about themselves, experience personal growth. That is the <i>'gift'</i> that can often be found in difficult times.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h5>{t}Let go of what cannot be changed{/t}</h5>
        <p>{t}It is natural to want to hold on to things as they were. But letting go of what you cannot change is accepting the situation as it is. It releases you from the need to control what you cannot change. Letting go is a way to cooperate with the inevitable. It releases new energy for accepting reality and seeing new possibilities. Sam is a prime example of someone who is learning to let go.{/t}</p>
        <p>{t}Sam had always been an intense athletic competitor, and sports had been the driving force in his life. At age 45 he had a slight stroke which left him mildly affected. Sam's problem wasn't that he had a stroke; the problem was that he could not let go of wishing that he had not had one. He continuously wanted things to be as they had been. This made him feel angry and frustrated. Fortunately, Sam reached a point of wanting to learn to live with the stroke and to let go of wanting life to be as it had been before.{/t}</p>
        <p>{t}Sam was unable to live in the present until he let go of his desire for things to be as they were. The "if onlys" and "what ifs" were a source of suffering. When Sam let go, he learned to live with the stroke and made changes that helped him develop a satisfying life. What Sam learned also applies to caregivers, as shown in the case of Marsha and Bud.{/t}</p>
        <p>{t}Marsha was the caregiver for her husband, Bud, who had Parkinson's disease. Buds condition worsened and he and Marsha were unable to do any of the things they had done in the past. Marsha continually wanted things to be the way they had been. "If only" became her constant thought: "If only Bud could dress himself," "If only we could go dancing like we used to," "If only Bud had more energy," "If only he could still drive us places." Marsha's unhappiness caused a strain in their relationship. It was only when she and Bud were having a good time playing cards with friends one day that she realized how much valuable time she was wasting by constantly wanting things to be different. She began to let go of "if only" and to accept "what is." In letting go, she found acceptance and peace of mind.{/t}</p>
        <p class="forum">{t}As you reflect on your challenges as a caregiver, consider these questions: What can I change? What must I accept? What can I improve? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h4>{t}Step 4: Take Action to Manage Your Stress{/t}</h4>
        <p>{t}The fourth step points the way for you to manage and reduce your stress. There are many different tools for managing stress. But you must find what is most effective for you. Proven ways to manage and reduce stress include:{/t}</p>
        <ul>
          <li>{t}managing your thoughts, beliefs, and perceptions.{/t}</li>
          <li>{t}practicing self-care.{/t}</li>
          <li>{t}getting social support.{/t}</li>
          <li>{t}using techniques that lower stress.{/t}</li>
          <li>{t}developing plans of action.{/t}</li>
          <li>{t}finding hope and meaning.{/t}</li>
        </ul>
        <h5>{t}Managing your thoughts, beliefs, and perceptions{/t}</h5>
        <p>{t}Thoughts and beliefs are the foundation of experience. They are not only reactions to events but our thoughts and beliefs can also influence events. What we think and believe affects what happens. Managing our thoughts means we have control over how we view things. As a caregiver, there may be times when the only thing you can change is how you view a situation. There are several tools for managing thoughts, beliefs, and perceptions. Two that can be helpful are reframing and self-talk.{/t}</p>
        <h5>{t}Reframing -{/t}</h5>
        <p>{t}Your frame of reference is the window through which you view the world. It gives meaning to your world. You see things one way, but someone else sees the same circumstances differently. Situations become more stressful when you view them in a negative way. Reframing is learning to look at things in a different way, for example, finding something positive about a difficult situation. Some examples of reframing include:{/t}</p>
        <ul>
          <li>{t}A caregiver who views the behavior of someone with Alzheimer's disease as "purposefully behaving that way to get to me" versus taking the view that "the behavior is a part of the disease."{/t}</li>
          <li>{t}A caregiver who is angry at her brother for helping only once a month versus taking the view that "any help, no matter how little, will lighten my load."{/t}</li>
          <li>{t}A caregiver who puts the situation into a religious or philosophical framework, such as "This is happening because God is angry with me" versus taking the view that "God is giving me an opportunity to learn and grow."{/t}</li>
        </ul>
        <p>{t}People who are able to reframe difficult situations generally feel less burden and more in control. Feeling a greater degree of control often leads to acting in control. Clara is a good example. Clara had difficulty taking breaks from caregiving. Before becoming a caregiver, she had worked in a demanding position and had realized the importance of taking weekends off and vacations to refresh herself and cope better with work demands. When she started to view caregiving as a job, it made a difference in how she viewed breaks in caregiving. They became not only more acceptable, but a necessity.{/t}</p>
        <p>{t}Julie also found that reframing a difficult situation reduced her stress and helped her act in new ways. Julie felt resentful and burdened with the increasing demands of caring for her mother. She had no help, feeling that as a good, dutiful daughter she should do it all. A social worker told her about available resources and suggested she think of herself as a personal care manager as a way to find help in caregiving. Julie gained a sense of control over the situation once she realized she didn't have to provide all of the care herself, but could oversee her mother's care.{/t}</p>
        <p>{t}As a caregiver, you may feel overwhelmed and burned out, especially if you are assuming responsibility for most of the caregiving. Changing your perception of your role from a caregiver to care manager is a way of reframing. As a care manager you still get the job done, but you do not have to provide all the care yourself. The role of care manager means that you:{/t}</p>
        <ul>
          <li>{t}coordinate and supervise another's care needs. This includes using available support.{/t}</li>
          <li>{t}are aware of available community resources.{/t}</li>
          <li>{t}plan and prioritize care.{/t}</li>
          <li>{t}understand the disease of the care receiver and what to expect.{/t}</li>
          <li>{t}participate as an equal partner with other health care professionals.{/t}</li>
          <li>{t}are knowledgeable about the health care system.{/t}</li>
        </ul>
        <p>{t}As a care manager you assume an active role and reach beyond giving hands-on care, to planning and coordinating care and using available resources. You will feel an increased sense of mastery as a successful care manager.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h5>{t}Self-talk -{/t}</h5>
        <p>{t}Most stress management courses include learning how to use self-talk to promote health. Self-talk is what we say to ourselves. As Ralph Waldo Emerson said, <i>"A man is what he thinks about all day long."</i> What do you think about all day long? What do you say to yourself? Is especially important to notice your self-talk when you suffer setbacks and when you feel anxious, angry, discouraged, or distressed. Negative self-talk statements often begin with the following phrases:{/t}</p>
        <ul>
          <li>{t}I just can not do...{/t}</li>
          <li>{t}If only I could (or did not) do...{/t}</li>
          <li>{t}I could never...{/t}</li>
          <li>{t}I should not have done...{/t}</li>
          <li>{t}I should have...{/t}</li>
        </ul>
        <p>{t}Negative self-talk is defeating. It can lead to depression and a sense of failure, because with negative self-talk we tend to focus on:{/t}</p>
        <ul>
          <li>{t}what we did not do versus what we have done.{/t}</li>
          <li>{t}what we cant do versus what we can do.{/t}</li>
          <li>{t}Our mistakes and failures versus our successes.{/t}</li>
        </ul>
        <p>{t}You want your self-talk to work for you, not against you. If your self-talk is negative or unhelpful, challenge it. Learn to change the negative things you say to yourself into positive statements, such as affirmations.{/t}</p>
        <p> {t}Affirmations are positive, supportive statements that counteract the effects of negative thinking. When positive statements are repeated several times a day, they begin to replace negative thoughts. This helps to change one's attitude, promote relaxation, and reduce stress. Karen's story is an example of changing negative self-talk to positive self-talk with the use of affirmations:{/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <p>{t}Karen felt angry and discouraged when her mother did not eat the tasty, nutritious meals she prepared for her. She didn't accept the fact that her mother's lack of appetite was caused by the illness. Karen constantly told herself, <i>"No matter what I cook, it is never good enough for mother."</i>{/t}</p>
        <p>{t}This is an example of negative self-talk. Karen became aware that she often thought she was not doing good enough, especially in caring for her mother. These thoughts made her feel like a failure. With determination, patience, and practice, you can change your self-talk from negative to positive. The following steps lead to change:{/t}</p>
        <ul>
          <li>{t}Identify your negative thoughts. Listen to what you say to yourself, especially during difficult times.{/t}</li>
          <li>{t}Write your negative thoughts down on paper. This helps to identify and clarify them.{/t}</li>
          <li>{t}Challenge your negative thoughts. Give them a good argument.{/t}</li>
          <li>{t}Write a simple, positive statement for each thought you want to change.{/t}</li>
          <li>{t}Memorize and repeat the chosen statements. This helps establish the habit of positive self-talk.{/t}</li>
          <li>{t}Put your written-statements where you see them frequently. This is a helpful visual reminder.{/t}</li>
        </ul>
        <p>{t}Karen chose the affirmation , <i>"I am preparing nutritious food. That is enough."</i> In fact, the statements, <i>"I am doing my best. It is good enough," became her frequent affirmation and counteracted her negative thoughts of "not doing good enough."</i>{/t}</p>
        <p>{t}These statements have the dual. purpose of affirming what Karen is doing and helping her let go of the idea that she has control over her mother's appetite. Accepting that . was important. Telling herself that she is doing her best and it is enough is a positive way of saying she is changing what she can and letting go of what she cannot change. Karen's expectations for herself have become more realistic.{/t}</p>
        <p>{t}Practice over time will change negative, habitual thinking. Repeat this activity frequently to identify other negative self-talk Remember, thoughts and attitudes create your reality. Changing your negative thoughts will help you focus on the positive things in your life, rather than on what you do not have.{/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h4>{t}Challening your Self-Talk{/t}</h4>
        <p>{t}Identify an example of your negative self-talk and the situation when it is most likely to occur.{/t}</p>
        <ol>
          <li>{t}My negative statement:{/t}</li>
          <li>{t}I say this to myself when:{/t}</li>
          <li>{t}I will replace the negative thought with this positive statement:{/t}</li>
          <li>{t}Repeat the chosen affirmation whenever the above situation occurs.{/t}</li>
        </ol>
        <p>{t}There will be times when you will find it hard to shake off negative thoughts. This is normal. However, paying attention to the frequency and content of these thoughts is the beginning of self-awareness and the possibility of change.{/t}</p>
        <h5>{t}Practicing self-care -{/t}</h5>
        <p>{t}To be an effective caregiver you need to maintain your own health and spirit, and to nurture yourself. All too often caregivers put their own needs last. Studies show that sacrificing yourself in giving care to another can lead to emotional exhaustion, depression, and illness.{/t}</p>
        <p>{t}Maintaining your health and spirit can reduce your level of stress. It is critical to find activities that help you to stay healthy and nurture yourself. These activities are different for each individual. What works for one person may not work for another. You must find stress-reducing methods that work best for you.{/t}</p>
        <p>{t}We can learn a lot from a self-care program in Florida called <i>"Getting Well."</i> This is a group of people who are supporting each other in learning to live and feel better. They take part in life-affirming activities such as <i>"laughing, juggling, playing, meditating, painting, journal writing, exercising, and eating nutritiously."</i> They demonstrate the necessity of associating with others who help you maintain your spirit and help you feel loved and supported. To manage stress, it is essential to take breaks from caregiving. Plan them into your schedule, starting immediately; if you have not done so already. Studies show that caregivers often do not take breaks until they are at the "end of their rope" or "burned out."{/t}</p>
        <p>{t}This serves no one's best interest as your ability to function can be seriously affected. To avoid problems, it is your responsibility to take time off from caregiving to refresh yourself. It is important to the well-being of care receivers that you take breaks. If you do not, they may become increasingly dependent on you. If you take breaks, they will be less isolated and will benefit from having contact with other people. They also need breaks from you. (This is an example of reframing your perception of a situation.){/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/83590515.png'); ?>" alt="{t}Image{/t}">
        <p>{t}You are responsible for your own self-care. Practicing self-care means that, amongst others, you:{/t}</p>
        <ul>
          <li>{t}learn and use stress reduction techniques;{/t}</li>
          <li>{t}attend to your own health care needs;{/t}</li>
          <li>{t}get proper rest and nutrition;{/t}</li>
        </ul>
        
        <!-- 
        <div class="question">
          <p>ARE YOU TAKING CARE OF YOURSELF?</p>
          <p>
            <input type="checkbox" name="Yes18" id="Yes18">
            <label for="Yes18">Yes</label>
            <input type="checkbox" name="No18" id="No18">
            <label for="No18">No</label>
            |  Are you uncomfortable putting
            yourself first at times?</p>
          <p>
            <input type="checkbox" name="Yes15" id="Yes15">
            <label for="Yes15">Yes</label>
            <input type="checkbox" name="No15" id="No15">
            <label for="No15">No</label>
            |  Do you think you should always meet
            the needs of other people before your
            own?</p>
          <p>
            <input type="checkbox" name="Yes16" id="Yes16">
            <label for="Yes16">Yes</label>
            <input type="checkbox" name="No16" id="No16">
            <label for="No16">No</label>
            |  Do you feel you should be a "perfect
            caregiver"?</p>
          <p>
            <input type="checkbox" name="Yes17" id="Yes17">
            <label for="Yes17">Yes</label>
            <input type="checkbox" name="No17" id="No17">
            <label for="No17">No</label>
            |  Do you minimize or deny that you
            have needs</p>
          <p>
            <input name="button2" type="submit" id="button2" onClick="MM_popupMsg('If you answered \&quot;yes\&quot; to any of these questions, you may be ignoring your own needs.')" value="Submit">
          </p>
        </div>
        -->
        
        <p>{t}Reflect on what it means to practice selfcare. Consider the items above.{/t}</p>
        <p class="forum">{t}Search the Internet and find other ways to be responsbile for your selfcare. Post your findings to the Forum. Then consider, how do you fare, are you caring for yourself as well as you are caring for another? And post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
        <p>{t}Remember, it is only when we love and nurture ourselves that we are able to love and nurture another. As a caregiver, appreciation and "thank yous" for what you do may be lacking. For example, a person with Alzheimer's disease may be unable to show appreciation for what is done. Everyone has a need for approval. It motivates us to keep going. If you do not receive appreciation from other people, find a way to give it to yourself.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <p>{t}What would be helpful for you? Consider the following suggestions:{/t}</p>
        <ul>
          <li>{t}Acknowledge and take satisfaction in those things you do well.{/t}</li>
          <li>{t}Reward yourself on a regular basis.{/t}</li>
          <li>{t}Involve yourself in an activity that will provide positive feedback.{/t}</li>
        </ul>
        <p>{t}Carol found a creative way to reward herself for a job well done when her mother could no longer express appreciation. Carol's mother, Irene, had Alzheimer's disease. Irene often expressed frustration and anger at Carol, in spite of the fact that Carol was her mainstay Carol understood the disease process and successfully avoided taking her mother's attacks personally. To give herself a gift of appreciation, Carol bought flowers regularly. She said, "I considered the flowers a gift from Mom to me. It is something she would have done for me if she were well."{/t}</p>
        <p>{t}Memories of past generosity and love from her mother sustained Carol. In buying herself flowers she reminded herself weekly that the gift of love and caring she gave to her mother had first been given to her. At a difficult time she found a way to nurture herself.{/t}</p>
        <p>{t}What are you doing to nurture yourself? Are you choosing healthy activities? Or are you relying on drugs, alcohol, cigarettes, and tranquilizers to handle the emotional and physical burdens of caregiving? According to the National Institute on Drug Abuse, millions of people abuse these drugs to reduce tension and to relax. It is in your best interest to choose healthy, nurturing ways of coping with the difficulties of caregiving.{/t}</p>
        <h5>{t}Getting social support -{/t}</h5>
        <p>{t}Caregiving can be a lonely experience. According to the National Family Caregivers Association, caregivers often · report that they feel alone and isolated. Support from family, friends, and others is an important stress buffer. Something as simple as a two-minute telephone call can make you feel cared about and supported. It helps to share your experiences and burdens with a person you trust-a friend, family member, counselor, religious advisor, or support group member-who will listen and understand.{/t}</p>
        <p>{t}Support groups can be helpful when you are going through a difficult time. Sharing with others who are going through similar experiences is a way to give and receive support, and take time out from caregiving duties. You can learn new ways of coping from others in the group, which may include learning to look at the light side of difficult situations with a bit of humor. Sharing lightens the load. A support group is a place to express thoughts and feelings in a confidential setting. Most important, you learn that you are not alone. This can be a wonderful relief. Support groups are available for caregivers and for people with various chronic illnesses. Local hospitals and disease-related associations often have groups available.{/t}</p>
        <h5>{t}Using techniques that lower stress -{/t}</h5>
        <p>{t}It is of little help to identify your stressors if you do not take action early to reduce them. Recognize obstacles to taking action. These may include:{/t}</p>
        <ul>
          <li>{t}Not giving yourself permission to take care of yourself.{/t}</li>
          <li>{t}Lacking awareness of stress-reduction techniques.{/t}</li>
          <li>{t}Choosing unrealistic stress-reduction techniques for example, those that are too complicated, lengthy, or difficult for you.{/t}</li>
          <li>{t}Delaying or postponing a stress-reduction activity. For example, planning a break or trip too far into the future to be of help now, when you need it.{/t}</li>
        </ul>
        <p>{t}Take care of yourself daily Use <i>"tried and true"</i> stress reduction tools that work for you. In addition, learn and incorporate new stress-reducing techniques into your life. There are many worthwhile techniques available. We offer some quick and easy ones that you can fit into your busy life.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/159161086.png'); ?>" alt="{t}Image{/t}">
        <h5>{t}Basic wellness practices -{/t}</h5>
        
        <!--
        <div class="question">
          <p>It is vital to maintain your health and well-being. Ask yourself the questions in the box below.</p>
        
      
          <p>
            <input type="checkbox" name="Yes19" id="Yes19">
            <label for="Yes19">Yes</label>
            <input type="checkbox" name="No19" id="No19">
            <label for="No19">No</label>
            |  Do you participate in physical
            activity at least three times a week?</p>
          <p>
            <input type="checkbox" name="Yes20" id="Yes20">
            <label for="Yes20">Yes</label>
            <input type="checkbox" name="No20" id="No20">
            <label for="No20">No</label>
            |  Do you get enough sleep daily so
            that you feel rested in the morning?</p>
          <p>
            <input type="checkbox" name="Yes21" id="Yes21">
            <label for="Yes21">Yes</label>
            <input type="checkbox" name="No21" id="No21">
            <label for="No21">No</label>
            |  Do you eat balanced, nutritious
            meals?</p>
          <p>
            <input type="checkbox" name="Yes22" id="Yes22">
            <label for="Yes22">Yes</label>
            <input type="checkbox" name="No22" id="No22">
            <label for="No22">No</label>
            |  Do you take time to sit down and
            eat your meals?</p>
          <p>
            <input type="checkbox" name="Yes23" id="Yes23">
            <label for="Yes23">Yes</label>
            <input type="checkbox" name="No23" id="No23">
            <label for="No23">No</label>
            |  Do you take care of your own
            physical health (e.g., get regular
            medical check-ups and take care of
            yourself when you are ill)? </p>
          <p>
            <input type="checkbox" name="Yes24" id="Yes24">
            <label for="Yes24">Yes</label>
            <input type="checkbox" name="No24" id="No24">
            <label for="No24">No</label>
            |  Do you participate regularly in
            recreational/leisure activities?</p>
          <p>
            <input type="checkbox" name="Yes25" id="Yes25">
            <label for="Yes25">Yes</label>
            <input type="checkbox" name="No25" id="No25">
            <label for="No25">No</label>
            |  Do you drink at least eight glasses
            of Water or other liquid daily?</p>
          <p>
            <input type="checkbox" name="Yes26" id="Yes26">
            <label for="Yes26">Yes</label>
            <input type="checkbox" name="No26" id="No26">
            <label for="No26">No</label>
            |  Do you limit alcoholic beverages
            to no more than two drinks a day?
            (One drink is 1.5 oz. of hard liquor,
            l2 oz. of beer, or 4 oz. of wine.) </p>
          <p>
            <input type="checkbox" name="Yes27" id="Yes27">
            <label for="Yes27">Yes</label>
            <input type="checkbox" name="No27" id="No27">
            <label for="No27">No</label>
            |  Do you avoid using alcohol,
            medications/drugs, or cigarettes to
            calm your nerves?</p>
          <p>
            <input type="checkbox" name="Yes28" id="Yes28">
            <label for="Yes28">Yes</label>
            <input type="checkbox" name="No28" id="No28">
            <label for="No28">No</label>
            |   Do you maintain a healthy weight?</p>
          <p>
            <input name="button3" type="submit" id="button3" onClick="MM_popupMsg('If you answered \&quot;yes\&quot; to all of these questions, congratulate yourself. A \&quot;no\&quot; response reflects areas to work on for better health.')" value="Submit">
          </p>
        </div>
        -->
        
        <p>{t}Proper diet, adequate sleep, and regular exercise are necessary for all of us, and even more so when we are caregivers. These lifestyle factors increase our resistance to illness and our ability to cope with stressful situations.{/t}</p>
        <p>{t}Exercise promotes better sleep, reduces tension and depression, and increases energy and alertness. If finding time to exercise is a problem, try to incorporate it into your usual day Perhaps the person receiving care can walk or do stretching exercises with you. If necessary do frequent short exercises instead of using large blocks of time. Find activities you enjoy. Walking is considered one of the best and easiest exercises. It helps to reduce psychological tension as well as having physical benefits.{/t}</p>
        <p>{t}Walking 20 minutes a day, three times a week, is very beneficial. If you can not be away 20 minutes, 10-minute walks twice a day or even a five-minute walk are beneficial. Work walking into your life. Walk whenever and wherever you can. Perhaps it is easiest to walk around your block, at the mall, or a nearby park. The next time a friend or family member comes to visit, take time for a short walk. When the care receiver is getting therapy, take a walk around the medical facility.{/t}</p>
        <h5>{t}Breathing for relaxation -{/t}</h5>
        <p>{t}Stressful situations or memories of those situations can cause changes in our breathing. Often the more tense we feel, the more shallow our breathing becomes. Stress management tools usually include a focus on breathing. The following breathing exercise takes only one or two minutes and you can easily do it anywhere. Use it often to lower stress.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h5>{t}Meditation -{/t}</h5>
        <p>{t}The word "meditation" comes from the Sanskrit word medha which, when taken literally, means "doing the wisdom." Meditation aids in relaxation and in achieving physical and mental well-being. Meditation is keeping your attention focused in the moment to quiet the mind and hear your body's inner wisdom. You, too, can learn to meditate. See the "Process of Meditation" box on the next page.{/t}</p>
        <h5>{t}Music -{/t}</h5>
        <p>{t}Music is another tool for reducing stress. It can alter the body and the mind. It can induce deep relaxation, act as a stimulant, and take you into other states of consciousness. Music is often used specifically for healing and decreasing stress and tension. Use the following steps as a guideline.{/t}</p>
        <ol>
          <li>{t}Choose soothing music you like.{/t}</li>
          <li>{t}Relax and close your eyes.{/t}</li>
          <li>{t}Breathe deeply and easily.{/t}</li>
          <li>{t}Lose yourself in the music, listening with your body, not your mind.{/t}</li>
          <li>{t}After the music is finished, open your eyes and notice how you feel.{/t}</li>
        </ol>
        <p>{t}Music is a universal language. Listening to music can be healing for both you and the care receiver, either together or alone. People with dementia, especially, respond to music when they may respond to little else.{/t}</p>
        <h5>{t}Humor -{/t}</h5>
        <p>{t}Caregivers who maintain and foster their sense of humor do better. It is , often hard to find much that is humorous in caregiving, but the secret to succeeding as a caregiver is to find humor in your daily routine. Finding humor does not deny the fact that, at times, your heart is heavy with the pain and sadness of caregiving. Those times will exist, but they can co-exist with laughter and humor.{/t}</p>
        <p>{t}Tears and laughter are closely related. They each offer a release of tension and are often intermingled. Humor does not minimize the seriousness of a situation; rather, it helps you embrace it. Humor can be a helpful tool in many ways, from making us laugh at our shortcomings and impossible situations, reducing anxiety and stress. Laughter relaxes and helps calm emotions, allowing us to regain emotional balance and think more clearly. If you want to laugh, or want someone else to laugh, you may have to find a reason, as George and Alma do.{/t}</p>
        <p>{t}George and Alma watch their favorite comedy show on television every weeknight at 7 P.M. They look forward to it and anticipate laughing together. In addition, Alma and George look for humorous cartoons and jokes to share with each other. The fact that Alma has a disabling medical condition does not mean they can not appreciate laughter.{/t}</p>
        <p>{t}In his book Anatomy of an Illness, Norman Cousins wrote of his fight against a crippling disease. He credited his recovery to the use of laughter. He intentionally sought healing through watching videotapes of comedies, reading joke books, and listening to people tell jokes. He had read about the effects of stress and emotions on illness. He understood that disease was caused by chemical changes in the body, due to the stress of strong emotions such as fear and anger. He concluded that perhaps love, laughter, hope, and the will to live would counteract those effects. He was right in his belief. Recent studies show that laughter helps to stimulate breathing, muscular activity; and heart rate. This serves to reduce stress and strengthen the immune system.{/t}</p>
        <p>{t}Humor is important to health. It lifts the spirit and provides a way to connect with others. The following suggestions can help · you make laughter and humor a larger part of your life:{/t}</p>
        <ul>
          <li>{t}Seek out humor. Humorous tapes and books can be found at video stores and libraries. Spend time with friends or family members you enjoy and can laugh with.{/t} </li>
          <li>{t}Surround yourself with humor. Put jokes, cartoons, funny pictures, and humorous sayings on the refrigerator or bulletin board where others can enjoy them with you.{/t}</li>
          <li>{t}Laugh at yourself. Do not take yourself too seriously Poke fun at yourself by making light of your shortcomings (which we all have).{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress{/t}</h2>
        <hr />
        <h5>{t}Developing action plans -{/t}</h5>
        <p>{t}Action plans are tools for change. They can be a useful way to identify and plan specific activities for reducing stress and making change: Feelings of accomplishment are necessary for thriving as a caregiver. Action plans can help you achieve these feelings. Even the smallest action can make a big difference. This was true for Evelyn.{/t}</p>
        <p>{t}Evelyn needed more time for herself during the day She made a plan to take a leisurely; warm tub bath four times a week instead of the always-hurried shower. Evelyn settled her father to watch the news on TV when she took her baths. This worked well for both of them and became an accepted part of their routine. Accomplishing the action plan encouraged Evelyn to make other action plans that made a big difference to her.{/t}</p>
        <p>{t}Feelings of mastery and confidence are usually the result of developing new ways of coping. Use the information presented in this chapter to help you identify your stressors, and improve coping skills. The activity in the box on the next page can be a useful tool for managing stress. This activity can be useful on a regular basis. It will help you assess and cope with current stressors. Since your caregiving situation and stressors continually change, it is important to be aware of when you feel stress and to use stress-reducing tools that work for you. Most important, build stress reduction and nurturing activities into daily life to prevent distress. Be proactive and remember, what is good for you is good for the person receiving care!{/t}</p>
        <h5>{t}Finding hope and meaning -{/t}</h5>
        <p>{t}The ability to find hope and meaning in the caregiving situation enables you not only to survive, but to thrive. Finding meaning and hope are what keeps us going. It is a way to make sense of our circumstances.{/t}</p>
        <p>{t}In his book <a href="http://www.amazon.com/Mans-Search-Meaning-Viktor-Frankl/dp/080701429X" target="_blank">Mans Search For Meaning</a>, psychiatrist Viktor Frankl tells of his experience as a long-time prisoner in a prisoner of war camp during World War II. Many of his family members died in the camps. In spite of the fact that he faced death constantly and suffered severe punishment, Dr. Frankl was able to find meaning and hope in his life. He noted that the prisoners who were able to sustain even a flicker of hope were better able to survive the terrible circumstances than those who felt hopeless. He concluded that what did remain, when all else was taken away; was "the last of the human freedoms," the ability to "choose one's attitude in a given set of circumstances." Out of that experience, Frankl's guiding philosophy was born: "To live is to suffer, to survive is to find meaning in the suffering." He also believed that man's need for meaning is universal.{/t}</p>
        <p>{t}The need to find hope and meaning is also important when you are a caregiver for a person with a chronic illness. Uncertainty; loss, and suffering may shake your foundation. After all, you have much at stake. Your world, as you have known it, has changed drastically and you may be left with questions such as, "Why me?" and perhaps, "Where is God?" Questioning often leads to a search for meaning. No one else can tell you what the meaning is for you. It can be a lonely journey.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-23" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress (continued){/t}</h2>
        <hr />
        <h4>{t}Reframing your Stress{/t}</h4>
        <p class="forum">{t}Make a list of those things that you find most difficult or stressful. Be specific. Write at least two (more if you can), and post your responses to the Forum. Then, answer the following questions in relation to each item on your list:{/t}</p>
        <ul class="forum">
          <li>{t}Can I ignore this? Or can I let it go?{/t}</li>
          <li>{t}Can I change anything about this? If so, how can I change it?{/t}</li>
          <li>{t}If it can not be changed, can I change my perception of it? If so, how?{/t}</li>
          <li>{t}What is a more helpful perception?{/t}</li>
        </ul>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
        <p>{t}Select one stressor from your list to work on first. The stressor is: Develop an action plan for addressing this stressor. Be specific and realistic.{/t}</p>
        <p>{t}A search for meaning can be a conscious choice. There are ways to stimulate your search. The following can be helpful:{/t}</p>
        <ul>
          <li>{t}<b>Ask yourself questions</b> like; <i>"what am I to learn from this?; what good can come from this?; am I a better person now?</i>. These types of questions can help you open up to possibilities for finding meaning.{/t}</li>
          <li>{t}<b>Reflect</b> .. Periods of quiet reflection, especially after a difficult time, are important and offer opportunities to learn from the experience.{/t}</li>
          <li>{t}<b>Talk with a trusted person</b>. Whether this person is a counselor, religious advisor, or friend, sharing can help clarify your thoughts and feelings. As you tell your story; it often takes on meaning.{/t}</li>
          <li>{t}<b>Write</b>. This is also a way to clarify your thinking. Writing is a way to bring out your thoughts and feelings. Write freely and spontaneously. Do not concern yourself with proper sentence structure or punctuation. Writing is a way to talk to yourself. Re-reading your journal over time provides an understanding of where you were when you started and where you are now. You will probably see changes and find new understanding and meaning.{/t}</li>
          <li>{t}<b>Seek spiritual renewal</b>. This is especially important when you are facing difficult times. Many caregivers report that faith and prayer help them find comfort, purpose, and meaning. It may be that even when you feel anger because of suffering and sorrow, your need for meaning is greatest.{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-24" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Steps to Maintain Health &amp; Avoid Stress (continued){/t}</h2>
        <hr />
        <p>{t}Like Frankl, it is hopeful to believe that meaning can be found in difficult and painful experiences. Hope and meaning play a large part in the following story of Margaret and Tim.{/t}</p>
        <p>{t}Tim's frequent visits to his elderly mother, Margaret, in the nursing home, were meaningful to him. Years ago, when Margaret was healthy; she shared some of her beliefs with Tim. She had told him, "If there comes a time when I am not able to recognize you because of Alzheimer's disease, or for any other reason, I want you to know what I believe to be true. I believe that my true essence, my spirit, will always be present, even though my physical body and mind may not be the person you remember. Please know that I am with you. We may not be able to talk with each other as we did in the past, but if you play my favorite music, read poetry, hold my hand, or just be with me, I will feel your love and you will feel mine for you."{/t}</p>
        <p>{t}In sharing her beliefs, Margaret gave Tim the gift of finding meaning in what can be a most difficult and challenging situation. Meaning is all around us. It is the "stuff" of life. Meaning is personal. It is up to each persc1n to find his or her own meaning.{/t}</p>
        <h4>{t}Summary{/t}</h4>
        <p class="forum">{t}Are you better acquainted with your stress? Have you identified what you can do to reduce at least one stressor? Do you realize the potential strength in considering your needs and in practicing self-care? Can you find meaning in difficult experiences? Have you learned that often the compassion and care you give to another comes back to you as a gift of meaning? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
        <p>{t}Remember that your response to a situation will affect the situation itself. As much as possible, make it be what you want it to be.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-25" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Tips for Overcoming Negative Emotions &amp; Reducing Stress{/t}</h2>
        <hr />
        <p>{t}A wide variety of mental activities can help caregivers overcome negative emotions and reduce stress. Think about how you might use some of these ideas in your own life.{/t}</p>
        <ul class="bulletlist">
          <li>{t}Become aware of harmful thought patterns. That is a first step in taking positive action to care for yourself.{/t}</li>
          <li>{t}Pay attention to shallow breathing because it often adds to physical stress.{/t}</li>
          <li>{t}Imagine washing away the stresses of the day during a shower.{/t}</li>
          <li>{t}Change clothes as a way to shed the day's concerns{/t}</li>
          <li>{t}Create a stress diary where you record information about the stresses you are experiencing so you can analyze them and take steps to manage them. In your diary, record how much time you feel depressed, in control, emotionally stable, had enough energy, and were satisfied with life.{/t}</li>
          <li>{t}Think about, and write a list of, the problems you face and the options you have available. using a scale of 1-7, prioritize the problems you want to tackle first.{/t}</li>
          <li>{t}Think about, and write a list of, the changes you could make in your daily life. Then prioritize the changes. The first changes to tackle are the ones that have the highest priorities.{/t}</li>
          <li>{t}Visit the Mind Tools website for more information and tools that will help you with decision making, positive thinking, managing stress, and finding balance in your life.{/t}</li>
          <li>{t}Read about what others are doing to reduce stress.{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-2-slide-26" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Tips for Overcoming Negative Emotions &amp; Reducing Stress: Simple Pleasures{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/148154562.png'); ?>" alt="{t}Image{/t}">
        <p>{t}Even tiny bursts of simple pleasures may improve your physical and mental health. Some researchers say that it is the frequency of the positive feelings that come from these small pleasures that is most important in determining happiness.{/t}</p>
        <p>{t}On the Internet, people are posting their simple pleasures such as those listed below. When you are sitting quietly in a comfortable place, list simple pleasures that help you get through your caregiving days.{/t}</p>
        <ul class="bulletlist">
          <li>{t}Looking at old pictures{/t}</li>
          <li>{t}Soft pajamas{/t}</li>
          <li>{t}Seeing winter's first snowfall on a bright moonlit night{/t}</li>
          <li>{t}Chocolate{/t}</li>
          <li>{t}Watching the sun set{/t}</li>
        </ul>
        <h4>{t}Activity{/t}</h4>
        <p class="forum">{t}Search the Internet to help you think of at least five other simple pleasures and then post your findings to the Forum. Then, make and post a 1-5 minute video to You Tube of your simple pleasures. Post the link to your YouTube posting on the Forum for your facilitator to review.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/youtube-icon.png'); ?>" alt="{t}YouTube Icon{/t}"> </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a></div>
    </div>
    <!-- need this final div here to close lesson-2 --> 
  </div>
  <div id="lesson-3">
    <div id="lesson-3-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/168357025.png'); ?>" alt="{t}image{/t}">
        <p>{t}This module contains four main sections:{/t}</p>
        <ul>
          <li>{t}Communicating to Take Care of You{/t}</li>
          <li>{t}Expressing Yourself Under Special Circumstances{/t}</li>
          <li>{t}Challenging Communication Styles{/t}</li>
          <li>{t}Setting your Goals and Making Action Plans{/t}</li>
        </ul>
        <p>{t}Many caregivers say one of their biggest challenges involves uttering the word <em>"No"</em>. The feeling is that saying no is somehow not permissible. If you feel this way, ask yourself:{/t}</p>
        <ol>
          <li>{t}<em>Is there courage and nobility in saying nothing and burning out?</em>{/t}</li>
          <li>{t}<em>Or does true courage and nobility lie in taking care of yourself so you can be a caring helper longer?</em>{/t}</li>
        </ol>
        <p>{t}Keep those questions in mind as we discuss in this module tools for dealing with these caregiving challenges:{/t}</p>
        <ul>
          <li>{t}setting limits{/t}</li>
          <li>{t}asking for help{/t}</li>
          <li>{t}expressing and responding to criticism{/t}</li>
          <li>{t}expressing anger{/t}</li>
        </ul>
        <p>{t}We will also discuss how to communicate more effectively under special circumstances and with people who use the following communication styles:{/t}</p>
        <ul>
          <li>{t}Passive/peacekeeping{/t}</li>
          <li>{t}Aggressive/pitbull{/t}</li>
          <li>{t}Factual/computer{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
    <div id="lesson-3-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating to Take Care of You{/t}</h2>
        <hr />
        <p>{t}Caregivers frequently report they have difficulty setting limits and asking for help. Yet, these are critical tools for avoiding burnout, maintaining your well-being, and getting the support you need. It's equally important to express your feelings and give criticism in constructive ways. You want others to hear what you have to say, not to focus on how you said something.{/t}</p>
        <h5>{t}Setting Limits{/t}</h5>
        <p>{t}If you have never set limits, it can take time to feel good about doing so and to communicate your limits in positive ways. At first people may not take you seriously and you might back down a few times. But with time and practice, you can do it. You might be surprised at your family's reaction. Many caregivers discovered that their relatives were pleased and relieved when they began setting limits. It seems family members worried less knowing that caregivers were taking care of themselves. B ecause only you know what your limits are, setting your limits is up to you. Setting limits is a form of self-respect and honesty. It's realizing that you can't do everything and that's okay. It also shows consideration for family and friends. It helps take the guesswork out of planning and problem solving when you tell others what you are able and unable to do.{/t}</p>
        <p>{t}Remember, your limits are not engraved in stone. You can be flexible and change them when your priorities change and when time, place, people, and circumstances demand it.{/t}</p>
        <h5>{t}What happens if you don't set limits -{/t}</h5>
        <p class="forum">{t}As a caregiver, do you think setting limits is selfish? Do you believe people who set limits are uncaring? If so, think about what can happen if you don't set limits. Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
        <p>{t}Not setting limits can lead to:{/t}</p>
        <ul>
          <li>{t}feelings of resentment on your part.{/t}</li>
          <li>{t}caregiver burnout, and possibly, the inability to provide the help needed.{/t}</li>
          <li>{t}concern by family about your health and even your survival.{/t}</li>
          <li>{t}health problems related to stress and fatigue, or even death.{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating to Take Care of You{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/156468003.png'); ?>" alt="{t}Image{/t}">
        <h5>{t}Limits carry risks -{/t}</h5>
        <p>{t}Relationships suffer when they are based on someone doing whatever another person wants or needs. If you lose closeness with a person because you set limits, ask yourself, "Am I better off without a relationship completely defined by what the other person wants?" Then weigh the risks, to yourself and the care receiver, of not setting limits. Think about the serious effects on you and the care receiver if your health fails.{/t}</p>
        <h5>{t}Consider the consequences of setting limits -{/t}</h5>
        <p>{t}Before saying or doing anything about setting limits, review possible consequences of what you want to do. Ask yourself:{/t}</p>
        <ul>
          <li>{t}What would be the worst outcome? How would I handle it?{/t}</li>
          <li>{t}What are the chances the worst outcome will happen? Could I live with it?{/t}</li>
          <li>{t}What are the consequences if I do nothing? Can I live with those?{/t}</li>
          <li>{t}What is the best thing that could happen?{/t}</li>
        </ul>
        <h5>{t}Some limits are not negotiable -{/t}</h5>
        <p>{t}Look carefully at limits you cannot exceed. These are your non-negotiable limits. What is the most you can give to others? This has to be clear, <i>"I am able to help two days a week. That is all I can do."</i>{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/147709685.png'); ?>" alt="{t}image{/t}">
        <h4>{t}Look at how you set limits now -{/t}</h4>
        <p>Evaluate your current style of setting limits, particularly with the care receiver and other family members. Check the boxes that most closely describe how you set limits.{/t}</p>
        
        <!--
    <div class="question">
      <p>
        <input type="checkbox" name="Yes" id="Yes">
        <label for="Yes">Yes</label>
        <input type="checkbox" name="No" id="No">
        <label for="No">No | </label>
        Do I set limits so seldom that people
        don't pay attention when I do?</p>
      <p>
        <input type="checkbox" name="Yes2" id="Yes2">
        <label for="Yes2">Yes</label>
        <input type="checkbox" name="No2" id="No2">
        <label for="No2">No  | </label>
        Am I so meek about setting limits that
        people don't take me seriously?</p>
      <p>
        <input type="checkbox" name="Yes3" id="Yes3">
        <label for="Yes3">Yes</label>
        <input type="checkbox" name="No3" id="No3">
        <label for="No3">No  | </label>
        Do I usually wait too long-until I
        can't continue-before I set limits?</p>
      <p>
        <input type="checkbox" name="Yes4" id="Yes4">
        <label for="Yes4">Yes</label>
        <input type="checkbox" name="No4" id="No4">
        <label for="No4">No  | </label>
        Do I hint or expect people to read my
        mind about what I can and can't do?</p>
      <p>
        <input type="checkbox" name="Yes5" id="Yes5">
        <label for="Yes5">Yes</label>
        <input type="checkbox" name="No5" id="No5">
        <label for="No5">No  | </label>
        Do I complain instead of setting clear
        caregiving limits with those who need
        to know my limits?</p>
      <p>
        <input type="checkbox" name="Yes6" id="Yes6">
        <label for="Yes6">Yes</label>
        <input type="checkbox" name="No6" id="No6">
        <label for="No6">No  | </label>
        Do I set limits and flip-flop by not
        sticking to them?</p>
      <p>
        <input type="checkbox" name="Yes7" id="Yes7">
        <label for="Yes7">Yes</label>
        <input type="checkbox" name="No7" id="No7">
        <label for="No7">No  | </label>
        Do I try setting limits once and then
        quit if people ignore them?</p>
      <p>
        <input name="Submit" type="submit" id="Submit" onClick="MM_popupMsg('Did you check \'yes\' in answering any  questions? If so, the following suggestions  will help you set and communicate your limits.')" value="Submit">
      </p>
    </div>
    
    -->
        <h5>{t}Start small -{/t}</h5>
        <p>{t}If you have trouble setting limits, start with people outside your family and start with small matters, like telling a caller you can visit for only five minutes.{/t}</p>
        <h5>{t}Start with the easy people -{/t}</h5>
        <p>{t}This means practicing saying a polite, firm <i>"no"</i> to someone either unrelated to you or that you do not even know, such as telephone sales       solicitors, fund-raisers for questionable charities, or pollsters in the local mall. A simple ~'Thank you for your call, but I cannot donate to your cause" (or whatever the request is) is all you need to say. If the person persists, just keep repeating your statement and soon he will give up.{/t}</p>
        <h5>{t}Start with easy situations -{/t}</h5>
        <p>{t}It is a good idea to warm up on situations or tasks that are impersonal or that you don't like. For example, if you enjoy volunteering but you do not care for the schedule or the assignment, try saying, <i>"I enjoy volunteering but I must cut back. I would be glad to help one Thursday a month at this time with ... "</i> Then work up to family situations, such as who will host the holiday dinners.</p>
        {/t}
        </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/91057929.png'); ?>" alt="{t}image{/t}">
        <h4>{t}Communicating your limits{/t}</h4>
        <p>{t}The following tools will help you communicate what you can and cannot do.{/t}</p>
        <h5>{t}Be clear about your limits -{/t}</h5>
        <p>{t}Use I statements and be as specific about your limits as possible. I am happy to stop by after work tonight but I have to leave by 6:30. (The formula is: Up to this point I can do __ . Beyond this point I will do _ , or _ happens.){/t}</p>
        <h5>{t}Offer choices within your limits -{/t}</h5>
        <p>{t}This is a way to replace what you can't do with a choice of what you can and are willing to do. "I can't take you shopping today; but I can do it either on Thursday afternoon or Saturday morning. Which is best for you?" (The formula is: "I am unable to do __ , but I can do __ or _· _ .Which do you prefer?"). Sharon said to her son:{/t}</p>
        <p>{t}I've enjoyed having the grandchildren stay at the house over the holidays every year. Because Grandpa needs more help these days, I can't ask them to stay with us this year. I would like to have them over to sing carols and decorate Christmas cookies with Grandpa. Let's talk during Thanksgiving.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        <h5>{t}Make no excuses -{/t}</h5>
        <p>{t}Giving factual reasons for setting limits aids understanding and is different from making excuses. Offering excuses sounds apologetic. Notice that the following statements contain no excuses or self-criticism:{/t}</p>
        <ul>
          <li>{t}<i>"I would like to do that, but for now I can only handle these three things."</i> (You are being factual and specific, and suggesting the limits are not permanent ones.){/t}</li>
          <li>{t}<i>"I appreciate your suggestions. Right now I can not fit them into my day."</i> (This is a good response to unsolicited advice.){/t}</li>
          <li>{t}<i>"I need some time to think about it. I will let you know tomorrow."</i> (This gives you time if you feel like making excuses or if flattery or <i>"guilt trips"</i> undermine your resolve.){/t}</li>
        </ul>
        <p>{t}If you want to make it easier, you can prepare people over the phone or in writing that you have to rethink how much you can do. You also can mention that your doctor advises you to cut down. Some people may respond negatively to your limits. This does not mean you are wrong. It usually means things are changing that other people wish would stay the same.{/t}</p>
        <p class="forum">{t}Do you find yourself making excuses or not giving factual reasons for your limits? Post your feedback to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}"> 
        
        
        
        
   
   <!-- 
    <div class="question">
      <p>
        <input type="checkbox" name="Yes8" id="Yes8">
        <label for="Yes8">Yes</label>
        <input type="checkbox" name="No8" id="No8">
        <label for="No8">No  | </label>
        Do you expect people to pass the salt before you ask for it?</p>
      <p>
        <input type="checkbox" name="Yes9" id="Yes9">
        <label for="Yes9">Yes</label>
        <input type="checkbox" name="No9" id="No9">
        <label for="No9">No  | </label>
        Do you blame people for not knowing you want salt?</p>
      <p>
        <input type="checkbox" name="Yes10" id="Yes10">
        <label for="Yes10">Yes</label>
        <input type="checkbox" name="No10" id="No10">
        <label for="No10">No  | </label>
        Would you plead, hint, or whine to get the salt?</p>
      <input type="button" onClick="MM_popupMsg('You probably answered \&quot;no\&quot; to the salt questions. just as we expect to ask for salt in order to receive it, we also need to ask for the help we need in caregiving. As you ask for help, remember to use the tone of voice you use when asking for salt. It\'s probably pleasant and matter-of-fact, without blaming and hinting.')" value="Submit">
    </div>
        -->
        
        
              </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    
    <div id="lesson-3-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        
          <h4>{t}Asking for Help{/t}</h4>
          
    <p>{t}Some caregivers feel that by asking for help they are somehow falling short. But asking for help may be the only way they can continue to provide care at home. They are not falling short; they are adapting to changing care needs that cannot be met without help. It is a caregiver's responsibility to ask for help. If you feel uncomfortable asking for it, consider the following questions about asking for salt.{/t}</p>
        
         <h5>{t}Prepare yourself to ask for help -{/t}</h5>
         
    <p>{t}Before you ask for help, consider the following suggestions:{/t}</p>    
    <p>{t}<b>Consider the person's special abilities and interests</b> - Before approaching someone with a request, consider their likes, dislikes, areas of interest, experience, abilities, and knowledge. For instance, if someone likes cooking but dislikes driving, your chances improve if you ask for help with cooking. Your chances for success also improve if you ask the person to help you with tasks he feels comfortable with and knows how to do. Tasks unrelated to caregiving are easier for some people.{/t}</p>
    
    <p>{t}<i>Note: When one family member has a medical or nursing background, it is natural to expect that he is the best one to help with caregiving. Take care that other relatives are not automatically excused from responsibility because there is a health professional in the family.</i>{/t}</p>      
      
    <p>{t}<b>Resist asking the same person repeatedly</b> - Ask yourself if you are requesting help from a certain person because he or she has difficulty saying no. It is important to capitalize on your stronger speaking skills rather than on someone else's inability to set limits.{/t}</p>
    
    
    <p>{t}<b>Consider the person's special needs</b> - Personal, private time is hard to come by. As a caregiver, no one knows this better than you. Other obligations in people's lives may limit the time and energy they have to give. Consider these matters before asking for help and talk them over.{/t}</p>
    
    <ul>
    <li>{t}I need more help with the...{/t}</li>
    <li>{t}I know you are very busy and I'm concerned about asking too much of you.{/t}</li>
    <li>{t}Would helping me a few hours during the week be more than you can do comfortably?{/t}</li>
    <li>{t}Out of concern for everyone's needs, you may decide it's time Jo inquire about hiring in-home help.{/t}</li>
      </ul>
      
    <p>{t}<b>Decide the best time to make a request</b> - Timing is important. A person who is tired, hungry, stressed, or busy is not a good candidate for a request.{/t}</p>
    
    <p>{t}<b>Prepare a list of things that need doing</b> - If you are unsure what people prefer to do, relatives say they do not know how to help, make a list of tasks you need help with (cooking, errands, yard-work, someone to visit with the care receiver) and let them choose. Some caregivers turn providing help into gifts given. The idea is that when people give their time and energy to help, they are giving the caregiver a valuable gift. They may call their list <i>Gifts of Help</i> or <i>Gifts You Can Share/Give</i>.{/t}</p>
    
       <p>{t}<b>Be prepared for hesitance or refusal</b> - Your request might be answered with a simple <i>no</i> or silence. The person may be unable or unwilling to help and is setting personal limits. Sometimes refusals upset caregivers. Realizing the refusal has hurt the caregiver's feelings, the person may change his mind and decide to help, but the relationship will suffer. If the person hesitates, ask, <i>"Would you like time to think about it?"</i>{/t}</p>
        
        
        
                     </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
        
          <div id="lesson-3-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        
        <h5>{t}Suggestions for asking for help - {/t}</h5>
        
        <p>{t}The following communication tools may help if you feel uncomfortable putting your request into words.{/t}</p>
        
        <p>{t}<b>Use your please-pass-the-salt style to make requests</b> - This is the tone you want to use when you ask someone for help. Practice making a request: <i>"I would like to go to church on Sunday. Would you mind staying with Grandma?"</i> in the same tone you would use to ask for the salt.{/t}</p>
        
        <p>{t}<b>Use <i>"I"</i> statements to make clear, specific requests</b> - A statement like <i>"I need more help"</i> is vague. A specific request sounds like, <i>"I would like to go to church this Sunday. Would you stay with Grandma from 9:00a.m. to noon?"</i>{/t}</p>
        
        <p>{t}<b>Avoid weakening your request</b> - If you say <i>"Could you think about staying with Grandma?"</i> you weaken your request. Saying, <i>"It is only a thought, but I would like to go to church,"</i> sounds like your request is not very important to you. Notice the strength of the statement, <i>Would you stay with Grandma from 9:00a.m. to noon?"</i>{/t}</p>
        
        <p>{t}<b>Use an <i>"I"</i> statement to express appreciation for any help even if it is given reluctantly</b> - <i>"I want to thank you for staying with Grandma so I could go to church today."</i>{/t}</p>        
        
                     </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
        
          <div id="lesson-3-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        
        <h5>{t}If your request is turned down -{/t}</h5>
        
        <p>{t}If your request is turned down, try not to take it personally and give yourself credit for asking. Most likely the person is turning down the task, not you. Or he may worry about doing the task the way you want it done. Consider asking, <i>"Do you have any concerns about what I have asked?"</i> Then express appreciation for the person's willingness to hear your request. <i>"Thank you for taking the time to listen."</i> Try not to let a refusal prevent you from asking for help again. The person who refused today may be glad to help another time.{/t}</p>
        
        <h5>{t}Expressing Criticism{/t}</h5>
        
        <p>{t}If setting limits and asking for help seems risky to caregiving relationships, expressing criticism may seem even more risky. But sometimes you must speak up whether you want to or not. This is especially true when health or safety are involved. Because the person may not like what he hears does not mean you should not speak up. Usually, how criticism is given affects people more than the criticism itself. Consider Grace's approach:{/t}</p>
        
        <p style="text-align:center; font-style:italic;">{t}Do not load the dishwasher that way. Always put the glasses on the upper rack and the cups in rows behind the saucers. You are wasting detergent. I never use that much.{/t}</p>
        
        
      <p>{t}How would you feel about loading Grace's dishwasher? Was the way you were doing it wrong or simply different? Grace could use some advice on more effective ways to correct people.{/t}</p>
        
        <h5>{t}Before offering criticism -{/t}</h5>
        
        <p>{t}Constructive criticism helps people learn. It focuses on problems, not personalities. It shows you care enough to level with the person. A courteous, respectful tone makes your words, not your behavior, worth remembering. Before you say anything, reflect on why you are criticizing. Use the following checklist to be certain you are criticizing for the right reasons.{/t}</p>
        
        <h5>{t}Address problems promptly -{/t}</h5>
        
        <p>{t}Timing is important. If you ignore a problem or delay addressing it, you give someone the message that he is doing fine. Then when you do speak up, the person wonders why you did not say something earlier. Delays in addressing the problem may also allow it to grow worse and your feelings about it to build. This often leads to blaming <i>"you"</i> statements like, <i>"Why don't you ever ... ?" "You always ... ,1 ' or "You never ... "</i>{/t}</p>

<h5>{t}Avoid the pitfalls -{/t}</h5>

<p>{t}Before you say anything, mentally review pitfalls you want to avoid. It is important to:{/t}</p>

<ul>
	<li>{t}resist offering an opinion about the person's motives for doing what he did;{/t}</li>
    <li>{t}avoid mind-reading and judging the other person's motives for doing what he did;{/t}</li>
    <li>{t}avoid making comparisons with other people; and{/t}</li>
    <li>{t}avoid raising questions about the person's loyalty or commitment.{/t}</li>
 </ul>
        
        
                     </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    
          <div id="lesson-3-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        
        <h5>{t}Ways to deliver constructive criticism -{/t}</h5>
        
        <p>{t}Bringing up a problem can be the hardest part of communicating effectively. If the person has seen you (or others in the family) do what you will be discussing, mention that you are also working on this problem. This makes you partners against the problem. Grace has done this in the following scenario. Compare this with her statements earlier about loading the dishwasher. Do you feel differently about the way the criticism was given?{/t}</p>
        
        <p style="text-align:center; font-style:italic;">{t}I would like to talk about the way the bathroom is left after Grandpa has his shower. I know he throws his damp towels on the floor. I would like them put in the laundry. I step in puddles of water when I go in the bathroom and I worry about slipping and falling. You can use the mop in the kitchen closet or the damp towels to soak up the puddles. I would appreciate it if you would make sure the floor is dry. Thanks.{/t}</p>
        
        <p>{t}Grace's criticism was constructive because she applied the following suggestions. She used an <i>"I"</i> statement when she said, <i>"I step in puddles."</i> She focused on the problem, not the person, by saying, <i>"I would like to talk about the way the bathroom is left."</i> She was specific when she said, <i>"You can use the damp towel to soak up the puddles."</i> She focused on the issue of concern-the bathroom. She did not mention the dishwasher. The following are additional tools for giving constructive criticism:{/t}</p>
        
        <p>{t}<b>Phrase questions carefully</b> - Your questions and comments can help or hurt. Asking why the person did something sounds accusatory. Frequently people do not know why they did something. Questions beginning with how, what, and when sound like you are gathering information, not blaming.{/t}</p>
        
        <ul>
        	<li>{t}How do you usually do this?{/t}</li>
            <li>{t}What do you think went wrong?{/t}</li>
            <li>{t}When does the problem arise?{/t}</li>
         </ul>
         
         <p>{t}<b>Offer face-saving comments</b> - Your intent is to protect the person's pride and feelings by offering valid, impersonal reasons for what has happened. Ask yourself the aikido question when a criticism must be given, <i>"What does this person need from me to feel better or to save face? Protection from embarrassment? A chance to improve without having to apologize?"</i> Some examples of face-savers are:{/t}</p>
         
         <ul>
         	<li>{t}I can see how a mistake could be made. The directions are confusing.{/t}</li>
            <li>{t}This is easy to forget, especially when it is a busy time.{/t}</li>
            <li>{t}I hope we can continue to talk things over at a later time.{/t}</li>
         </ul>
         
         <p>{t}<b>End on a positive note</b> - You can end on an upbeat note by mentioning positive, helpful contributions the person has made and expressing your belief that things will work out. For example, Gerald said to an in-home worker:{/t}</p>
         
         <p style="text-align:center; font-style:italic;">{t}I notice how patient you are when talking to Dad, especially when he keeps asking who you are.{/t}</p>
         
         <p>{t}One thing I have become more sensitive to when talking to Dad is to say <i>"you"</i> instead of <i>"we."</i> It sounds more respectful to say <i>"How are you today?"</i> instead of <i>"How are we today?"</i> With a little forethought, this can be an easy change to make. And it is a change I will appreciate very much.{/t}</p>       
        
                            </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
        
               <div id="lesson-3-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr /> 
        
        <h5>{t}Responding to criticism -{/t}</h5>
        
        <p>{t}Although you may do your best to offer criticism in a constructive manner, you may not always be treated in the same way. This can be infuriating even when you sense a criticism has merit. Being open to criticism is not easy, but it is important. As a caregiver you may be offended by criticism you feel is neither deserved nor wanted. How does one deal with criticism? The Boy Scouts say it best: <i>"Be prepared."</i> Here are some other tools that will help:{/t}</p>
        
        <p>{t}<b>Think about the merits of the criticism, not just how it makes you feel</b> - Does the criticism have merit? Did the person truly criticize or was he expressing a concern that you viewed as a criticism? For example, if you were told you needed help to provide care, would you see it as a criticism of your ability? Are there times when you could be wrong? If so, it shows true grit to admit a mistake and apologize. just be sure your apology doesn't have the word "if' in it. Saying ''I'm sorry if I was wrong" suggests you don't really believe you were wrong. A genuine apology has no "ifs" and says, "I was wrong and I'm sorry."{/t}</p>
        
        <p>{t}<b>Use your aikido skills if the criticism is valid</b> - Step into the other person's shoes and try to see things from his point of view. Ask what needs to change for him to feel better: <i>"I need to understand what you want done differently."</i> Perhaps you can't make the changes he wants, but you can listen with respect and concern. That might be all he wanted.{/t}</p>
        
        <p>{t}<b>Don not take unjust criticism to heart</b> - Another part of readiness is the ability to disregard unfair criticism. You can ignore the criticism by simply saying, <i>"I find your remarks interesting"</i> and dropping the subject. If ignoring the criticism is not the answer, you can calmly assert yourself by returning the problem to the critic with a statement like, <i>"It would help me if you would share how you would have done __ ."</i> Or, to deflect criticism, try a remark like, <i>"That is another way of looking at this ... "</i> If you need time to collect your thoughts, tell the person, <i>"I will think about what you've said."</i>{/t}</p>
        
        <h5>{t}Responding to criticism from the care receiver - {/t}</h5>
        
        <p>{t}Taking criticism from the person receiving your help can be particularly difficult. This is especially true if you are the brunt of all the criticism and you are doing the most. If the criticism is undeserved or invalid, try using aikido to respond and try not to take the criticism personally.{/t}</p>
        
        <p>{t}Aikido is a very useful tool to use in these situations. It tends to disarm the person because he has no opponent and is not given <i>"fuel"</i> for an argument. Some caregivers have also found it helps to calmly interrupt when the care receiver takes a breath and suggest talking later. Other caregivers quietly state that they can not listen any longer:{/t}</p>
        
        <p>{t}<i>"I need to excuse myself for a while,"</i> and leave the room. Offering a snack or something to drink gives you a reason to leave the room and may reduce the stress of the moment.{/t}</p>
        
        <p>{t}Another option is to suggest the person put his criticisms in writing because you can not remember everything. (The idea here is that people who criticize for the sake of criticizing often will not take the time to put their criticisms in writing.) This also may help to focus you and the care receiver on legitimate issues that need to be addressed.{/t}</p>
        
        <p>{t}Remember, you do not have to listen to a barrage of unfair and hurtful criticism. Regardless of the criticism or its source, how you react to it affects how you will feel about yourself later. It is gratifying to look back on a challenging situation and say to yourself, <i>"I handled that very well."</i>{/t}</p>
        
                            </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
        
               <div id="lesson-3-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        
        <h5>{t}Expressing Anger{/t}</h5>
        
        <p>{t}Like most of us, you can probably relate to this quote. Being able to express anger in ways that are positive and not hurtful is critical This can be especially true when you find yourself facing emotionally charged problems and decisions. This happened to Betty when she least expected it.{/t}</p>
        
        <p>{t}Betty is 50 years old. She is the youngest of three children in the family and the only one who lives near their parents, who are both in their nineties. Her sister, Catherine, lives on the East Coast and her brother, Allen, lives in France. Betty thought the family should get together at least once while both the parents were alive. After much planning, a family reunion was held.{/t}</p>
        
        <p>{t}Betty still gets a knot in her stomach when she thinks about what happened that weekend. Catherine had said she felt the folks should move in with Betty because they should not live at home alone at their age. Allen agreed with Catherine. Betty became upset and angry.{/t}</p>
        
        <p>{t}<b>Betty</b>: You are both fine ones to give me advice. You do none of the work. You never offer to send a dime to help me with the folks' expenses. I end up doing all the work and paying for everything. Now, you have the nerve to suggest that they move in with me so I can sacrifice what little free time I have left to take care of them!{/t}</p>
        
        <p>{t}<b>Catherine</b>: I did not realize you would be so touchy about my idea.{/t}</p>
        
        <p>{t}<b>Allen</b>: You never asked for any help or money How was I to know you needed it?'{/t}</p>
        
        <p>{t}<b>Betty</b>: Just forget I said anything. You are obviously too busy with your own lives to care about your own parents and me.{/t}</p>
        
        <p>{t}Silence descended on the group. The rest of the time was spent avoiding each other while trying to be polite in front of their parents. The family reunion ended with polite good-byes. Nothing had changed, except Betty wishes she had handled her anger in a better way The goal of expressing anger effectively is to share your feelings in a positive way so that people hear what you say versus hearing only your anger. Reaching this goal requires taking the time to regain perspective and to prepare.{/t}</p>
        
        <p>{t}Begin preparing by taking a look at what triggers your anger. Is it advice from people who don't help? Is it repetitive questions or behavior? Is it a request for help just when you have a moment to yourself? Once you identify the triggers, think of ways to cool off before you say anything. Deep-breathing and stress reduction activities might help you regroup. Counting to ten remains an effective way to calm down and think about what to say Once you feel composed it helps to apply the following communication tools:{/t}</p>
        
        <ul>
        	<li>{t}<b>Use I messages in a non-threatening manner</b> - Be aware of your body language. For example, do not tower over people when you talk to them. Place yourself at or below eye level when you say, I get upset when I get advice instead of help taking care of Mother.{/t}</li>
            
            <li>{t}<b>Avoid you messages</b> - Blaming, accusing, and mind-reading are huge pitfalls. They usually lead to strong feelings of remorse later.{/t}</li>
            
            <li>{t}<b>Speak in a normal tone of voice</b> - Talking fast with a raised voice implies anger, regardless of what you actually say. Maintaining a moderate tone, volume, and rate of speaking suggests you are in control of your anger. Getting angry is only human and saying so is not a bad thing as long as you follow the tools for how to best express yourself.{/t}</li>
            
        </ul>
        
        
                            </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
        
        
        
               <div id="lesson-3-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        
        <h5>{t}Responding to anger -{/t}</h5>
        
        <p>{t}When we respond to anger, our goal is to defuse the anger and calm the situation. Applying the aikido style of communication is an effective way to do this. If Catherine and Allen would have responded this way; the family reunion might have turned out differently.{/t}</p>
        
        <p>{t}<b>Catherine</b>: If I believed that my brother and sister did not care about me or the folks, I would feel the same way you do.{/t}</p>
        
        <p>{t}<b>Allen</b>: I do not know exactly what you need from us. Give us an example of what we can do from such long distances.{/t}</p>
        
        <p>{t}<b>Betty</b>: I figure I spend about $200 a month on the folks. I would really like some help in covering my out-of-pocket expenses.{/t}</p>
        
        <p>{t}<b>Catherine</b>: I can see we have a problem. What would you like me to do to help? I do not have much money.{/t}</p>
        
        <p>{t}<b>Betty</b>: If you could come out once a year and keep an eye on the folks so I could take a vacation, it would be a big help.{/t}</p>
        
        <p>{t}In this example, Catherine and Allen aligned with Betty. They empathized with her feelings and asked for more information. This told Betty they cared. Meanwhile, they received information from Betty to redirect the conversation and move toward resolving the problem.{/t}</p>
                                  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
        
            
               <div id="lesson-3-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Communicating Effectively in Challenging Situations{/t}</h2>
        <hr />
        
        <h5>{t}Other possible tools for responding to anger -{/t}</h5>
        
        <p>{t}Be careful with the following tools because they can backfire and make people angrier. Your knowledge and experience with the person will help you decide if these responses are appropriate in your situation.{/t}</p>
        
        <p>{t}<b>Excuse yourself and leave the person alone</b> - Sometimes anger builds as it is being expressed. You may decide to say; <i>"I have to excuse myself. Let us talk when we both feel less emotional,"</i> and calmly leave the room. This is an option if your presence is making the person angry, if your safety is at risk, or anger is building and the person usually calms down when alone. Be careful about using this response. There are times when even politely leaving the room will increase someone's anger.{/t}</p>
        
        <p>{t}<b>Use humor to ease tensions</b> - Humor, used wisely, can recast unfairness into nonsense. It can help people rethink a problem. The difficulty is that not taking someone seriously is a powerful act of defiance. Using humor can come across as insulting or arrogant when it is not meant that way. Either way, there is a risk of increasing anger if the person feels you are making fun of him or light of an issue. Refer to yourself, riot the other person, in using humor. So, I guess I am not <i>"person of the week"</i> or <i>"Here we are, madder than hatters at each other, and Dad is the one with the driving problem."</i>{/t}</p>
        
        <p>{t}<b>Change the subject</b> - This is risky, too, because the person may think you do not understand or do not care. He needs to feel you have heard him before you change the subject. A remark like <i>"You have a good reason to be upset. I have news I hope will help you feel better ..."</i> may work to lighten the atmosphere. Expressing anger with blaming and accusations or responding to anger with anger does not promote family unity or help to solve problems. The assertiveness and aikido communication tools will help you accomplish more.{/t}</p>
        
        
                                  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
               <div id="lesson-3-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Expressing Yourself Under Special Circumstances{/t}</h2>
        <hr />
        
        <h4>{t}Talking On The Telephone{/t}</h4>
        
        <p>{t}Bob lived several hundred miles from his father. He called his father weekly, but was - increasingly concerned about his father's well-being after the calls. He said:{/t}</p>
        
        <p style="text-align:center; font-style:italic;">{t}My dad is 85 years old and very frail. He is hard of hearing and has poor vision. Lately he seems more forgetful. I learned from a neighbor that my dad had a blood test at the hospital the previous day. Dad did not remember anything about it. Every time I call, he tells me "everything is just fine." But his voice sounds weaker when he says it. I have a feeling something just is not right, so I am going down for a visit.{/t}</p>
        
        <p>{t}Although telephone conversations can reveal clues about potential problems, they also can lead you astray. Miscommunication can occur because you do not have <i>"the messages"</i> that body language and facial expression provide. If you want to understand what the person means or feels, you might have to check with the person to make certain you both understand each other. For instance:{/t}</p>
        
        <p>{t}<i>"From the sound of your voice, I have the feeling you are worried. Is there something that is worrying you?"</i>{/t}</p>
        
        <p>{t}<i>"I am having trouble understanding what you mean. Can you explain a little more?"</i>{/t}</p>
        
        <p>{t}<i>"It sounds like you mean (want, need, feel) __. Am I right?"</i>{/t}</p>
        
        <p>{t}Some people feel safer talking on the telephone than they do face to face. It is possible to capture honest thoughts, concerns, and feelings that would not be disclosed in person. If you discover this, try to schedule your calls when you won't be interrupted and you have time to talk. You do not want to cut off someone who finally trusts you and opens up to you. If your time is short when the person calls, mention in advance how long you can visit.{/t}</p>    
        
        
        <h5>{t}Telephone skills -{/t}</h5>
        
        <p>{t}A skilled, considerate telephone listener will:{/t}</p>
        
        <ul>
        	<li>{t}listen for clues in the tone of voice or manner of speaking that are different from earlier conversations;{/t}</li>
            <li>{t}ask open-ended questions to get more information about those clues; and{/t}</li>
            <li>{t}stop other activities such as housework or driving while on the phone.{/t}</li>
        </ul>
            
                                  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
        
               <div id="lesson-3-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Expressing Yourself Under Special Circumstances{/t}</h2>
        <hr />
        
       <h4>{t}Communicate With The Doctor{/t}</h4>
       
       <p>{t}As you provide care over the years, you wear various hats. You are an expert in the care of your relative, a consumer of health care services, and the person who works with the doctors. You may also be a patient occasionally. In any case, you want to build a partnership with the physician and other health care providers. You, as well as the physician and his or her staff, have a role in forming and maintaining this relationship.{/t}</p>
       
       <h5>{t}What to consider before going to the doctor -{/t}</h5>
       
       <p>{t}Think about the main reasons for your visit and what you expect from the doctor as you prepare for your visit. Consider the following tools.{/t}</p>
       
       <ul>
       	<li>{t}Prepare your questions{/t}</li>
        <li>{t}Consider other reliable sources of information{/t}</li>
     </ul>
       
       <p>{t}Before you decide what questions you want to ask the doctor, consider other reliable sources of information. Your pharmacist can answer questions about medications and the office nurse may have answers to your caregiving questions. Most caregiving issues relate more closely to nursing than to medicine.{/t}</p>
       
       <p>{t}Also, the nurse usually has extensive knowledge about the doctor's patients, their illnesses, and the treatments prescribed. Do not worry about asking the nurse questions the doctor should or prefers to answer. The nurse will refer you to the doctor for those questions. Depending on her background and the doctor's wishes, you can usually ask a nurse questions regarding:{/t}</p>
       
       <ul>
       	<li style="list-style-type:square;">{t}what you can learn from various tests and examinations;{/t}</li>
        <li style="list-style-type:square;">{t}scheduling tests and what you have to do to prepare for tests or surgical procedures;{/t}</li>
        <li style="list-style-type:square;">{t}providing personal care and measures to prevent problems such as pressure sores; and{/t}</li>
        <li style="list-style-type:square;">{t}managing medications at home.{/t}</li>
      </ul>
      
      <p>{t}You also can obtain information from support groups, specialty clinics, your local health department, and organizations dealing with certain health problems such as Parkinson's and Alzheimer's diseases, and stroke. These organizations offer free or inexpensive educational materials or can tell you where to get them. Sharing this information with non-caregiving relatives gives them an objective overview of the illness and related caregiving issues.{/t}</p>
      
      <ul>
      	<li>{t}Make sure appointments meet your needs{/t}</li>
        <li>{t}Call ahead{/t}</li>
        <li>{t}Take someone with you{/t}</li>
        <li>{t}Build a relationship with the office staff{/t}</li>
      </ul>      
                                  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
               <div id="lesson-3-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Expressing Yourself Under Special Circumstances{/t}</h2>
        <hr />
        
        <h5>{t}Talking with the doctor - {/t}</h5>
        
        <p>{t}The following tools can help you get the most out of your time with the doctor.{/t}</p>
        
        <p>{t}Discuss your main concerns first. This is important because if you wait until the end of your appointment there may not be time to properly deal with the main reasons for your visit. You can say something like:{/t}</p>
        
        <ul>
        	<li style="list-style-type:square; font-style:italic;">{t}"I have something important I want to talk about."{/t}</li>
            <li style="list-style-type:square; font-style:italic;">{t}"There are three things I need to understand better."{/t}</li>
            <li style="list-style-type:square; font-style:italic;">{t}"I have three important questions to ask."{/t}</li>
         </ul>
         
    <ul>
    	<li>{t}Be concise{/t}</li>
        <li>{t}Refer to a second party{/t}</li>
     </ul>
     
     <p>{t}If you want a second opinion but you hesitate to ask for it, tell your doctor: <i>"my and I have discussed the importance of getting a second opinion."</i> (Remember, there is a better chance of getting a second opinion if you ask for it than if you don't ask.){/t}</p>
    
    <ul>
    	<li>{t}Get your questions answered{/t}</li>
      </ul>
      <p>{t}Ask about tests and treatments and the reasons for them.{/t}</p>
      
      <p>{t}+What do you expect to learn from the test? When can I expect to hear the results of the test?{/t}</p>
      <p>{t}+How will I (or my relative) feel afterward?{/t}</p>
      <p>{t}+Are there other options to having this test?{/t}</p>

<ul>
	<li>{t}Ask about treatment plans{/t}</li>
 </ul>
 
 <p>{t}Ask about medications and treatments that don't seem to work. Ask about alternatives for any treatment you find burdensome, such as a medication that must be taken in the middle of the night. Ask for clarification about the. diagnosis and treatment plan· and the reasons the doctor recommends it, what the treatment will accomplish, and restrictions on activities, food, or driving and the reasons for the restrictions. Find out about recovery and how long it will take to get back to normal, not just to feel better.{/t}</p>
   
        
        
                                  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
        
        
            
               <div id="lesson-3-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Coming Soon!{/t}</h2>
        <hr />
        
        
        
                                  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
        
            
               <div id="lesson-3-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Coming Soon!{/t}</h2>
        <hr />
        
        
        
                                  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
        
            
               <div id="lesson-3-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Coming Soon!{/t}</h2>
        <hr />
        
        
        
        
        
        
                                        </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    
    
               <div id="lesson-3-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Coming Soon!{/t}</h2>
        <hr />
        
        
        
                                       </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    
               <div id="lesson-3-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Coming Soon!{/t}</h2>
        <hr />
        
        
        
    
        
    
    <!-- need this final div here to close lesson-2 --> 
  </div>
  <div id="lesson-4">
    <div id="lesson-4-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal &amp; Abnormal Aging Changes{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/164010920.png'); ?>" alt="{t}image{/t}">
        <p>{t}This module contains four main sections:{/t}</p>
        <ul>
          <li>{t}Myths and Realities of Aging{/t}</li>
          <li>{t}Focusing on Healthy Aging{/t}</li>
          <li>{t}Normal Aging Changes{/t}</li>
          <li>{t}Aging Well{/t}</li>
        </ul>
        <p>{t}<i>“Healthy aging is a broad concept that is more than just physical health status or absence of disease. It encompasses all of the intellectual, emotional, social, and spiritual facts of our being. While healthy aging is driven by internal dimensions such as our beliefs, attitudes, and intentions about our health, it also depends on external supports including our social networks, community services, public policies, and the built and natural environment. These dimensions are interrelated, affecting behavior and lifestyle choices.”</i>{/t}</p>
        <p class="forum">On the Forum, post your definiton or descripton of normal and abnoral aging changes.</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
    <div id="lesson-4-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Myths and Realities of Aging{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/dv2092031.png'); ?>" alt="{t}image{/t}">
        <p>{t}Images of aging in our society are not very positive. For example, let us look at some of our stereotypes about older adults:{/t}</p>
        <ul>
          <li>{t}Old people can not learn new things.{/t}</li>
          <li>{t}Old people are close-minded, set in their ways.{/t}</li>
          <li>{t}Old people are cantankerous, crabby.{/t}</li>
          <li>{t}Old people are slow.{/t}</li>
          <li>{t}The elderly do not pull their own weight.{/t}</li>
          <li>{t}Old people are always sick.{/t}</li>
        </ul>
        <p>{t}Dr. Erdman Palmore developed a <i>“Facts on Aging”</i> quiz to measure perceptions (and misperceptions) about aging. Dr. Palmore’s quiz is a good way to look at our concepts of aging. Let’s look at some of these items and see how you score them:{/t}</p>
        <p style="text-align:center;"><a href="#" target="_blank">Facts on Aging Quiz</a> and <a href="http://cas.umkc.edu/agingstudies/PDFs/Answers%20to%20Quiz.pdf" target="_blank">Answer Key</a></p>
        
        <!-- need to add all these questions soon 
                <p>{t}The majority of older people are senile, have a defective memory, or are disoriented.{/t}</p>

    <p>
      <input name="True" type="submit" id="True" onClick="MM_popupMsg('Ccorrect!')" value="True">
      <input name="True2" type="submit" id="True2" onClick="MM_popupMsg('Incorrect!')" value="False">
    </p>
    <p> All five senses (sight, smell, hearing, taste, and touch) tend to decline in old age.</p>
    <p>
      <input name="True7" type="submit" id="True11" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True7" type="submit" id="True12" onClick="MM_popupMsg('Correct!')" value="False">
    </p>
    <p> The majority of older people say they are miserable most of the time.</p>
    <p>
      <input name="True3" type="submit" id="True3" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True3" type="submit" id="True4" onClick="MM_popupMsg('Correct!')" value="False">
    </p>
    <p> Older workers usually cannot work as effectively as younger workers.</p>
    <p>
      <input name="True4" type="submit" id="True5" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True4" type="submit" id="True6" onClick="MM_popupMsg('Correct!')" value="False">
    </p>
    <p> Over three-fourths of older people say they are healthy enough to carry out normal activities.</p>
    <p>
      <input name="True8" type="submit" id="True13" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True8" type="submit" id="True14" onClick="MM_popupMsg('Correct!')" value="False">
    </p>
    <p> The majority of older people say they are lonely.</p>
    <p>
      <input name="True5" type="submit" id="True7" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True5" type="submit" id="True8" onClick="MM_popupMsg('Correct!')" value="False">
    </p>
    <p> Older workers have fewer accidents than younger workers.</p>
    <p>
      <input name="True9" type="submit" id="True15" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True9" type="submit" id="True16" onClick="MM_popupMsg('Correct!')" value="False">
    </p>
    <p> Older people tend to react more slowly than younger people.</p>
    <p>
      <input name="True10" type="submit" id="True17" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True10" type="submit" id="True18" onClick="MM_popupMsg('Correct!')" value="False">
    </p>
    <p> The majority of older people are working, or say they would like to have some kind of work to   
      do, including work around the house and volunteer work.</p>
    <p>
      <input name="True11" type="submit" id="True19" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True11" type="submit" id="True20" onClick="MM_popupMsg('Correct!')" value="False">
      <br>
    </p>
    <p>Older people tend to become more religious as they age.</p>
    <p>
      <input name="True6" type="submit" id="True9" onClick="MM_popupMsg('Incorrect!')" value="True">
      <input name="True6" type="submit" id="True10" onClick="MM_popupMsg('Correct!')" value="False">
    </p>
    
    --> 
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Myths and Realities of Aging{/t}</h2>
        <hr />
        <h5>{t}Realities of Aging{/t}</h5>
        <p>{t}So, if the stereotype of older adults as slow, sick, and/or senile is false, what is the reality of aging in America? The National Council on the Aging and AARP published the resource, American Perceptions of Aging in the 21st Century, a longitudinal study that began in 1974. In 2002 a follow-up study compared results from the original 1974 study with contemporary findings. Here are some highlights about the realities of aging:{/t}</p>
        <ul>
          <li>{t}58% of older adults were very happy with growing older{/t}</li>
          <li>{t}88% felt that social relationships were very important to a meaningful, vital life{/t}</li>
          <li>{t}32% felt that new learning was very important to a meaningful, vital life{/t}</li>
          <li>{t}47% felt their overall health was excellent to very good{/t}</li>
          <li>{t}60% were very or somewhat worried about memory loss as they aged{/t}</li>
        </ul>
        <p>{t}How about a few more realities of aging. A survey of key trends in aging conducted by <a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a> documented the following facts about older adults:{/t}</p>
        <ul>
          <li>{t}The educational level of the older adult population is increasing.{/t}</li>
          <li>{t}Almost half of older adults currently do volunteer work.{/t}</li>
          <li>{t}More than 75% of older adults say old age should be defined by a decline in physical or mental functioning rather than a specific age.{/t}</li>
          <li>{t}Only 8% of older adults say they are very old.{/t}</li>
          <li>{t}Almost 40% of older adults work part-time.{/t}</li>
          <li>{t}Older Americans age 65+ comprise 16.3% of the US labor force.{/t}</li>
        </ul>
        <p>{t}First of all, how do we define healthy aging? <a href="http://www.ncoa.org" target="_blank">The National Council on the Aging</a> gives this definition:{/t}</p>
        <p><i>{t}“Healthy aging is a broad concept that is more than just physical health status or absence of disease. It encompasses all of the intellectual, emotional, social, and spiritual facts of our being. While healthy aging is driven by internal dimensions such as our beliefs, attitudes, and intentions about our health, it also depends on external supports including our social networks, community services, public policies, and the built and natural environment. These dimensions are interrelated, affecting behavior and lifestyle choices.”{/t}</i></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Focusing on Healthy Aging{/t}</h2>
        <hr />
        <h4>{t}Maintaining Physical Health{/t}</h4>
        <p>{t}Research shows that older adults can attain healthy vital old age through simple health promotion and disease prevention initiatives. The MacArthur Foundation study identified several lifestyle changes that clearly proved to benefit older adults:{/t}</p>
        <ul>
          <li>{t}Exercise and physical activity{/t}</li>
          <li>{t}Early detection of cancer{/t}</li>
          <li>{t}Reducing risk of heart disease{/t}</li>
          <li>{t}Vaccinations{/t}</li>
        </ul>
        <h5>{t}Exercise and physical activity{/t}</h5>
        <p>{t}Exercise can help prevent heart disease, high blood pressure, and tendency toward diabetes, osteoporosis, and risk for falls. A regular, moderate program of aerobic and strength training for older adults is both safe and effective in improving physical function.{/t}</p>
        <h5>{t}Early detection of cancer{/t}</h5>
        <p>{t}With early detection, many forms of cancer are treatable and have a high survival rate. Fortunately, screening tests for early detection of cancer have become very effective and commonly available. In addition, research suggests that promoting a healthy diet may also decrease the risk of certain types of cancer.{/t}</p>
        <h5>{t}Heart disease{/t}</h5>
        <p>{t}Heart disease is a major killer of men at all ages and of older women. Education about reducing risk factors (high cholesterol, smoking, hypertension) is vitally important for older adults.{/t}</p>
        <h5>{t}Vaccinations{/t}</h5>
        <p>{t}Among the greatest advances in health promotion and disease prevention in older adults had been the development of safe and effective vaccines. Among non-vaccinated older adults, disease can sweep through the population rapidly and can be very dangerous.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Focusing on Healthy Aging{/t}</h2>
        <hr />
        <h4>{t}Maintaining High Cognitive and Physical Function{/t}</h4>
        <p>{t}Fear of cognitive loss, and especially of Alzheimer’s disease are widespread among older adults, and with good reason. Such losses place great burden on both the older adult and his/ her caregivers. Fortunately, research shows that even though the proportion of older adults in the population is increasing, the usual pattern is that most older adults retain a good portion of their independence and mental sharpness.{/t}</p>
        <p>{t}The MacArthur Foundation study documented a number of ways that older adults sustain mental ability as they age. Many of the study’s “successful agers” reported that such activities as reading, conversation, crosswords and other word puzzles, card games, and other similar activities kept their minds alert and active. The study also shows that the strongest predictors of sustained cognitive function include:{/t}</p>
        <ul>
          <li>{t}Education{/t}</li>
          <li>{t}Physical activity{/t}</li>
          <li>{t}High <i>“self-efficacy”</i>{/t}</li>
        </ul>
        <h5>{t}Education{/t}</h5>
        <p>{t}People with more years of education were more likely to maintain high cognitive function. The study that education early in life may have a direct beneficial effect of brain circuitry, and education may set a pattern of intellectual pursuits, including reading and puzzle solving, which maintains lifelong exercise of cognitive function.{/t}</p>
        <h5>{t}Physical Activity{/t}</h5>
        <p>{t}The study found that older adults who engaged in strenuous physical activity were much more likely to maintain high cognitive function. One possible answer for this is that exercise releases chemicals in the brain which promote the growth of new brain cells.{/t}</p>
        <h5>{t}Self-efficacy{/t}</h5>
        <p>{t}Self-efficacy, or self-esteem, is a person\’s belief in his or her ability to handle various situations. Many studies show that a strong sense of self-efficacy leads to improved performance in solving cognitive problems. Older adults with strong self-efficacy are more likely to view memory as a set of skills that can be learned and improved.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Focusing on Healthy Aging{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/153986639.png'); ?>" alt="{t}image{/t}">
        <h4>{t}Engagement in Productive Relationships and Behaviors{/t}</h4>
        <p>{t}The <a href="http://www.macfound.org" target="_blank">MacArthur</a> research showed that <i>“happy activities”</i> are essential to successful aging. The two most important areas they identified that contribute to successful aging are:{/t}</p>
        <ul>
          <li>{t}Relating to others{/t}</li>
          <li>{t}Continuing productive activity.{/t}</li>
        </ul>
        <h5>{t}Relating to Others{/t}</h5>
        <p>{t}Being part of a social network of family and friends contributes significantly to successful aging.{/t}</p>
        <h5>{t}Continuing Productive Activity{/t}</h5>
        <p>{t}Most people equate being productive with earning money. However, there are many activities, both paid and unpaid, which can be considered productive.{/t}</p>
        <p class="forum">On the Forum, post any <i>"happy activites"</i> that you are currently involved in. If you do not have any, post some that you would like to have.</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal Aging Changes{/t}</h2>
        <hr />
        <h4>{t}Hearing Changes{/t}</h4>
        <p>{t}More than half of people aged 60 or over are hard of hearing or deaf. Presbycusis is the most common form of hearing loss and is thought to be due to the combined effects of aging of the peripheral or central auditory systems, and the accumulated effects of wear-and-tear.{/t}</p>
        <p>{t}Older adults may compensate for hearing loss by using hearing aids. However, some older adults don’t recognize their problem and some deny they have problems and thus don’t take actions to correct hearing impairments resulting in potential communication problems. These communication problems can lead to social isolation.{/t}</p>
        <h5>{t}Strategies for Compensating for Hearing Changes{/t}</h5>
        <ul>
          <li>{t}Stand or sit in front of the older adult; get the older adult’s attention.{/t}</li>
          <li>{t}Speak up but do not shout.{/t}</li>
          <li>{t}Use lower-pitched tones. They are heard more easily than higher ones.{/t}</li>
          <li>{t}Speak slowly and clearly, and emphasize only key words.{/t}</li>
          <li>{t}Cut out as much background noise as possible.{/t}</li>
          <li>{t}Keep your mouth in clear view, and maintain eye contact if possible.{/t}</li>
          <li>{t}Rephrase rather than repeat a misunderstood sentence. Allow a few seconds pause after every few sentences to allow for processing and to allow the listener to formulate questions.{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal Aging Changes{/t}</h2>
        <hr />
        <h4>{t}Vision Changes{/t}</h4>
        <p>{t}About 7.3 million or 21% of persons age 65 and over report some form of vision impairment. As baby boomers age, this number will reach 8.3 million in the year 2010, 11.3 million in 2020, and 14.8 million in 2030.{/t}</p>
        <h5>{t}Vision loss may be due to:{/t}</h5>
        <ul>
          <li>{t}Decreased pupil size and accommodation which alter visual accuracy{/t}</li>
          <li>{t}Macular degeneration which impedes central vision{/t}</li>
          <li>{t}Glaucoma which impeded peripheral vision{/t}</li>
          <li>{t}Cataracts which cloud vision.{/t}</li>
        </ul>
        <h5>{t}Strategies for Compensating for Vision Changes{/t}</h5>
        <p>{t}To accommodate older adults with visual impairments, it is important to make give clear verbal cues to assist the older adult.{/t}</p>
        <ul>
          <li>{t}If you are entering a room with someone who is visually impaired, describe the room layout, other people who are in the room, and what is happening.{/t}</li>
          <li>{t}Tell the person if you are leaving. Let him/her know if others will remain in the room or if he/she will be alone.{/t}</li>
          <li>{t}Allow the person to take your arm for guidance.{/t}</li>
          <li>{t}When you speak, let the person know whom you are addressing;{/t}</li>
          <li>{t}Ask how you may help: increasing the light, reading the menu, describing where things are, or in some other way.{/t}</li>
          <li>{t}Call out the person’s name before touching; touching lets a person know that you are listening.{/t}</li>
          <li>{t}Treat him/her like a sighted person as much as possible.{/t}</li>
          <li>{t}Explain what you are doing as you are doing it.{/t}</li>
          <li>{t}Leave things where they are unless the person asks you to move something.{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal Aging Changes{/t}</h2>
        <hr />
        <h4>{t}Changes in Smell and Taste{/t}</h4>
        <p>{t}Decline in smell and taste are also normal aging sensory changes. Older adults recognize and identify common odors less well. Loss of taste and smell are common and result from:{/t}</p>
        <ul>
          <li>{t}Normal aging from the degeneration of the taste buds, and decreased saliva production{/t}</li>
          <li>{t}Certain disease states, such as Alzheimer’s disease{/t}</li>
          <li>{t}Medications{/t}</li>
          <li>{t}Surgical interventions{/t}</li>
          <li>{t}Environmental exposure{/t}</li>
        </ul>
        <h5>{t}Sensory losses of taste and smell can cause:{/t}</h5>
        <ul>
          <li>{t}Reluctance to talk about food{/t}</li>
          <li>{t}Reduced pleasure and comfort from food affecting the socialization that accompanies eating{/t}</li>
          <li>{t}Increased nutritional and immune deficiencies{/t}</li>
          <li>{t}Reduced adherence to dietary regimen.{/t}</li>
        </ul>
        <p>{t}Older adults should be encouraged to have routine oral care and dental visits and to use dentures regularly. To accommodate declines in smell and taste, meals should have pleasing colors, textures, and flavorings to make them look and taste more appealing.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal Aging Changes{/t}</h2>
        <hr />
        <h4>{t}Common Health Issues of Older Adults{/t}</h4>
        <p>{t}According to <a href="http://www.agingstats.gov/Main_Site/Data/2008_Documents/OA_2008.pdf" target="_blank">Older Americans 2008: Key Indicators of Well-Being</a>, published by the <a href="http://www.agingstats.gov/agingstatsdotnet/main_site/default.aspx" target="_blank">Federal Interagency Forum on Age Related Statistics</a>, about 80% of older adults have at least one age- related chronic health condition and 50% have at least two. The most prevalent include:{/t}</p>
        <ul>
          <li>{t}Arthritis{/t}</li>
          <li>{t}Hypertension{/t}</li>
          <li>{t}Heart Disease{/t}</li>
          <li>{t}Stroke{/t}</li>
          <li>{t}Diabetes{/t}</li>
          <li>{t}Cancer{/t}</li>
          <li>{t}Osteoporosis{/t}</li>
          <li>{t}Alzheimer’s Disease{/t}</li>
        </ul>
        <p>{t}<b>Arthritis</b> encompasses more than 100 diseases and conditions that affect joints, surrounding tissues, and other connective tissues. It is the leading cause of disability among older adults. Approximately 43% of all men and 54% of all women over the age of 65 have some level of arthritis.{/t}</p>
        <p>{t}<b>Hypertension</b> is also prevalent among older adults and can lead to activity limitations. 52% of all men and 54% of all women over the age of 65 suffer from hypertension.{/t}</p>
        <p>{t}<b>Heart Disease and Stroke</b>. Although older women are more likely to have hypertension than older men, the prevalence of heart disease and stroke is higher among older men. 37% of men and 26% of older women have heart disease, while 10% of older men and 8% of older women have suffered a stroke.{/t}</p>
        <p>{t}<b>Diabetes</b> also affects the health of older adults and limits their ability to perform normal activities. 19% of men and 17% of women over the age of 65 suffer from diabetes.{/t}</p>
        <p>{t}<b>Cancer</b>. Older men are at a greater risk of cancer than older women, 24% of older men and 19% of older women having some form of cancer. For men, the most commonly diagnosed cancers included prostate, lung, colon, and rectum. Among women, cancers of the breast, colon, and rectum were the most common.{/t}</p>
        <p>{t}<b>Osteoporosis</b>, another common chronic ailment among older adults, reduces bone density and raises the risk for potential disabling fractures. Although women are four times more likely than men to experience bone loss, recent research suggests that the prevalence of osteoporosis among men has been significantly under-diagnosed and under-reported.{/t}</p>
        <p>{t}<b>Alzheimer’s Disease</b> is a progressive, degenerative disease that causes gradual but irreversible loss of brain cells. It currently affects an estimated 4.5 million Americans, with the vast majority of sufferers being 65 and older. The group of people who are at the highest risk for Alzheimer’s Disease are those age 85 and older, also the fastest growing segment of the population.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal Aging Changes{/t}</h2>
        <hr />
        <h5>{t}Emotional and Personality Changes{/t}</h5>
        <p>{t}As we get older, our more dominant personality traits become more pronounced. You may notice that some older people whom you know become “more difficult” to get along with while others become “more mellow” as they age. Some older people may become more concerned about death. Others may feel that they have reached a certain age that their “wisdom” should be respected by everyone and they take offense if someone disagrees or challenges them on an issue.{/t}</p>
        <p>{t}As a caregiver, being aware and understanding of some of these changes is important. Showing empathy and compassion to older adults when they may be coping with multiple changes or losses will benefit both the older person and you as caregiver.{/t}</p>
        <p>{t}Emotional, behavioral, and mental change may include depression, memory lapses, inability ot concentrate, or disorientation. It is important to remember that memory lapses are not automatically a sign of dementia or Alzheimer’s Disease! These changes may be caused by a number of factors including:{/t}</p>
        <ul>
          <li>{t}Thickening of artery walls{/t}</li>
          <li>{t}Poor nutrition{/t}</li>
          <li>{t}Action of medications{/t}</li>
          <li>{t}Loss of a spouse or death among friends/relatives{/t}</li>
          <li>{t}Reduced physical strength and endurance{/t}</li>
          <li>{t}Fears of illness{/t}</li>
          <li>{t}Major life changes such as moving from one’s home to another setting{/t}</li>
        </ul>
        <p>{t}If the change is sudden and impacts the ability of the older adult to function on a daily basis, it is important to consult with the physician as there may be an underlying cause that could be addressed by medical care.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Normal Aging Changes{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/155544151.png'); ?>" alt="{t}Memory Changes Image{/t}">
        <h5>{t}Memory Changes{/t}</h5>
        <p>{t}A major concern of people as they or their loved ones age is “What is normal memory loss and what is abnormal?”{/t}</p>
        <p>{t}By the time a person reaches 70 to 80 years of age, the brain loses 10% of its original size. Some people’s memory remains sharp throughout old age while others are mildly affected by memory loss.{/t}</p>
        <p>{t}As many as 50% of older adults have trouble remembering things, a situation called benign forgetfulness. Some loss of short-term memory is common with older adults, yet they often can easily remember life events and experiences from the past. It is also common that older adults tell and retell information. This is not so much a situation that the older adult does not remember telling the story, but it is a way to “lock in” the story into their short-term memory <i>"bank."</i>{/t}</p>
        <p>{t}As the caregiver, rather than responding in an aggravated tone, “Mom, don’t you remember you just told me that story!”, it is better to just listen and then engage mom in more discussion about that story – maybe ask some questions about the situation or relate it back to a past similar experience. It will help mom “bank” that information, as well as you may learn something you did not know about your mom’s life experiences from the past!{/t}</p>
        <h5>{t}Other Changes{/t}</h5>
        <p>{t}Because it takes longer for the older brain to process information, it takes longer for an older person to react. The performance of routine tasks takes longer. Combined with normal slowing of movement, ordinary tasks may become more difficult and frustrating for both the older person and their caregiver.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Aging Well{/t}</h2>
        <hr />
        <h4>{t}Encouraging Health and Wellness{/t}</h4>
        <p>{t}Wellness means striving to achieve the optimum state of health and well-being that you are capable of achieving. The whole-person wellness model, which emphasizes personal choice, self-responsibility, optimism, and self-direction comprises six dimensions of wellness:{/t}</p>
        <ul>
          <li>{t}Physical{/t}</li>
          <li>{t}Social{/t}</li>
          <li>{t}Emotional{/t}</li>
          <li>{t}Spiritual{/t}</li>
          <li>{t}Vocational{/t}</li>
          <li>{t}Intellectual{/t}</li>
        </ul>
        <p>{t}Physical Wellness includes living an active lifestyle, participating in regular physical activity, eating nutritious foods, and practicing proper self-care.{/t}</p>
        <p class="forum">{t}On the Forum, post ome ideas for maintaining physical wellness?{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
        <ul>
          <li>{t}Getting regular physical exams, including dental and eye{/t}</li>
          <li>{t}Maintaining current immunizations{/t}</li>
          <li>{t}Eating balanced, nutritious meals{/t}</li>
          <li>{t}Getting regular exercise{/t}</li>
          <li>{t}Joining a health club{/t}</li>
          <li>{t}Limiting or avoiding alcohol and tobacco{/t}</li>
        </ul>
        <p class="forum">{t}Can you think of other ways to maintain physical wellness? How can you help older adult friends or relatives incorporate physical wellness into their lives? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Aging Well{/t}</h2>
        <hr />
        <p>{t}Social Wellness is promoted through creating and maintaining relationships with others through talking and sharing interests.{/t}</p>
        <p class="forum">{t}What are ways to promote social wellness? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
        <ul>
          <li>{t}Church groups{/t}</li>
          <li>{t}Neighborhood networks{/t}</li>
          <li>{t}Meals, gatherings, or outings with friends{/t}</li>
          <li>{t}Clubs to expand your social network{/t}</li>
          <li>{t}Classes to meet people with similar interests{/t}</li>
          <li>{t}Volunteering{/t}</li>
        </ul>
        <p class="forum">{t}Do you know of activities to promote social wellness that currently exist in your community? Are there ways to promote participation by older friends/relatives? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
        <p>{t}Emotional Wellness refers to successfully understanding, managing, and expressing personal feelings. Here are some ways to foster emotional wellness:{/t}</p>
        <ul>
          <li>{t}Recognize that your emotions affect your body{/t}</li>
          <li>{t}Express needs, feelings, and opinions appropriately{/t}</li>
          <li>{t}Use humor to lighten negative thoughts or situations{/t}</li>
          <li>{t}Keep a diary to express your thoughts and how they made you feel{/t}</li>
          <li>{t}Talk to trusted friends or family members and practice open communication to relieve stress{/t}</li>
          <li>{t}Build self-esteem by respecting and taking care of yourself{/t}</li>
        </ul>
        <p class="forum">{t}What are some ways to help older friends/relatives cope with change and improve emotional wellness? What are some ways you may better manage your own emotional wellness? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Aging Well{/t}</h2>
        <hr />
        <p>{t}Spiritual Wellness builds on personal values to find meaning and purpose in life and discover a peaceful harmony with the world. While faith means different things to different people, spiritual wellness means having hope, guidance, and purpose to help us understand ourselves better. Some methods of achieving spiritual wellness include:{/t}</p>
        <ul>
          <li>{t}Embracing personal beliefs, morals, and/or religion{/t}</li>
          <li>{t}Develop connections with ourselves and others{/t}</li>
          <li>{t}Develop a philosophy of life{/t}</li>
          <li>{t}Explore teachings that appeal to you{/t}</li>
          <li>{t}Practice relaxation techniques such as meditation or yoga{/t}</li>
        </ul>
        <p class="forum">{t}What are some ways you can explore spiritual wellness? Post your response to the Forum{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}">
        <p>{t}Vocational Wellness encompasses experiencing personal growth and satisfaction from service to others and learning or improving skills through occupational and other life experiences. While most people equate vocation with paid work, there are many options for pursuing vocational wellness other than employment. How about:{/t}</p>
        <ul>
          <li>{t}Volunteering{/t}</li>
          <li>{t}Mentoring{/t}</li>
          <li>{t}Babysitting{/t}</li>
          <li>{t}Caregiving{/t}</li>
          <li>{t}Resident Committees{/t}</li>
          <li>{t}Seasonal work (e.g., tax preparation){/t}</li>
        </ul>
        <p class="forum">{t}What are some other ways you can use your own skills to pursue vocational wellness? What about for older friends/relatives? Post your response to the Forum{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Aging Well{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/200571474-004.png'); ?>" alt="{t}Image{/t}">
        <p>{t}Intellectual Wellness promotes expansion of personal knowledge through learning opportunities, creative pursuits, and stimulating discussions with others. There are numerous ways of pursuing intellectual wellness, many of which may intersect with other wellness categories. How about:{/t}</p>
        <ul>
          <li>{t}Joining clubs that explore areas of interest to you{/t}</li>
          <li>{t}Taking classes on subjects that interest you{/t}</li>
          <li>{t}Pursuing creative hobbies{/t}</li>
          <li>{t}Attending plays or musical performances{/t}</li>
          <li>{t}Reading books, newspapers, magazines{/t}</li>
          <li>{t}Participating in <i>“mental aerobics”</i> (art, puzzles, sensory stimulation techniques) to strengthen, improve, and maintain mental and memory capabilities{/t}</li>
        </ul>
        <p class="forum">{t}You can probably think of many other ways to promote intellectual wellness. How can you implement those ideas to stimulate intellectual wellness for your older friends/relatives?{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Aging Well{/t}</h2>
        <hr />
        <h4>{t}Lifelong Learning{/t}</h4>
        <p>{t}New learning by older adults should be linked to experiences or activities they are familiar with or have enjoyed, particularly those with a social component. Here are some key facts about older adults and lifelong learning:{/t}</p>
        <ul>
          <li>{t}Older people can learn new information, and new skills.{/t}</li>
          <li>{t}Sometimes older people feel less confidence in learning new things, but often this is because they haven’t been in a classroom in a long time, or because they are aware of the stereotype and fall into a self-fulfilling prophesy.{/t}</li>
          <li>{t}Perhaps the best-documented loss in aging is that it takes longer to understand and think about what is being learned. This just means that learning situations for older people should be self-paced without time pressure.{/t}</li>
          <li>{t}For older learners, active, participatory learning may be more beneficial (and enjoyable) than traditional, lecture-based learning.{/t}</li>
          <li>{t}Older learners already know more than when they were young. This can be an advantage if they are given the opportunity to reflect on new information to see how it integrates with what they already know.{/t}</li>
          <li>{t}A supportive learning environment, with positive feedback and encouragement, is beneficial, provided that older learners are treated like adults.{/t}</li>
        </ul>
        <p class="forum">{t}How can you apply these lifelong learning strategies to foster wellness? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Aging Well{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/71261154.png'); ?>" alt="{t}Image{/t}">
        <h4>{t}Creativity{/t}</h4>
        <p>{t}Creativity is defined as the skill of producing a work of thought or imagination.{/t}</p>
        <p>{t}In his book, <a href="http://www.amazon.com/Creative-Age-Gene-D-Cohen/dp/0380800713" target="_blank">The Creative Age: Awakening Human Potential in the Second Half of Life (2000), Gene D. Cohen, MD, PhD,</a> provided striking evidence that the human potential for creativity continues well into old age.{/t}</p>
        <p class="forum">{t}So, what are some ways to encourage creativity among older friends/relatives? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}Forum Icon{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Aging Well{/t}</h2>
        <hr />
        <p>{t}Here are some excerpts from a creative energy workshop.{/t}</p>
        <p>{t}You may want to try out this workshop with your older friends, relatives, or even yourself. Sometimes, we all need to revisit our creative side!{/t}</p>
        <p>{t}Begin by thinking about your interests and desires. This may include goals you want to achieve, projects you want to implement, or dreams you want to make real. By going through this exercise, you will begin to realize inner strengths you already have that will help you achieve your potential.{/t}</p>
        <ol>
          <li>{t}Do you wish to build on what you have already done, or do you wish to take your work to a higher level?{/t}
            <ul>
              <li>{t}What do you need to do to grow?{/t} </li>
              <li>{t}Do you know others who do related work and whose achievements you want to  mirror? They may be agreeable to become your coach or mentor!{/t} </li>
              <li>{t}Search for new resources that will help you achieve your goals. Network with others  who may be of help to you.{/t} </li>
              <li>{t}Look for inspiration around you. Seek out success stories.{/t} </li>
            </ul>
          </li>
          <li>{t}Do you want to change direction in your work or activities?{/t}
            <ul>
              <li>{t}Look to strengths or interests you have that are untapped.{/t} </li>
              <li>{t}Start exploring the new area. You do not need to make a commitment yet.{/t} </li>
              <li>{t}Experiment just as if you were vacationing to a new area or testing new recipes.{/t} </li>
              <li>{t}Empower yourself. Be confident that you can learn and growth in a new area.{/t} </li>
              <li>{t}Guess what – you are not the first to make a change. If others can, so can you!{/t} </li>
            </ul>
          </li>
          <li>{t}Time to test your capacity for starting creativity.{/t}
            <ul>
              <li>{t}Continuously putting off something new needs to end.{/t} </li>
              <li>{t}Look at ordinary experiences as new opportunities for self-discovery.{/t}
            </ul>
          </li>
          <li>{t}Consider collaborative creativity.{/t}
            <ul>
              <li>{t}Look for others who may be interested in starting a new project with you.{/t} </li>
              <li>{t}Consider volunteering in your community for a project as a way to meet new contacts and expand your experiences.{/t} </li>
            </ul>
          </li>
          <li>{t}Is your circle of friends intergenerational?{/t}
            <ul>
              <li>{t}Look at ways to bring intergenerational activities into your life. You will be surprised at the variety of perceptions about the same topics.{/t} </li>
              <li>{t}Spend more time with your older relatives and friends to learn about their history. Along with strengthening family ties, you may learn something new about your older  relatives and friends!{/t} </li>
            </ul>
          </li>
          <li>{t}Are you seeking a sense of personal satisfaction or purpose?{/t}
            <ul>
              <li>{t}Recognize the power of small changes.{/t} </li>
              <li>{t}Purposively change your language to “positive speak”. For example, a “problem” can become an “opportunity” or “challenge”. You will notice that your positive tone will gradually influence others in the same directions!{/t} </li>
            </ul>
          </li>
          <li>{t}Do you want to focus on public creativity?{/t}
            <ul>
              <li>{t}Look for ways you may become a volunteer or activist for your community.{/t} </li>
              <li>{t}Consider that many of your skills or knowledge are already valuable assets to your community. Seek ways to share those skills or knowledge.{/t} </li>
            </ul>
          </li>
          <li>{t}Are you now asking, “Am I really creative enough?”{/t}
            <ul>
              <li>{t}Everyone has more potential than they know.{/t} </li>
              <li>{t}Creativity does not need to be something grand or dramatic.{/t} </li>
              <li>{t}Creativity takes many forms and can be as simple as a pleasant social interaction where two friends explore something new about each other or their mutual interests{/t} </li>
            </ul>
        </ol>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-4-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Aging Well{/t}</h2>
        <hr />
        <h4>{t}Technology and the Future of Caregiving{/t}</h4>
        <p>{t}The way we care for older adults today cannot scale to meet the looming age wave, and before long we’ll face a fullblown national crisis. We have an obligation to our parents—indeed to the next generation of older adults—to ensure they get the best possible care and that they receive it in a place they want to call home.{/t}</p>
        <p>{t}New technology solutions offer great promise to improve quality of care while reducing healthcare costs. Technology already has transformed our lives—from email to MP3s and from online shopping to cell phones. It is time now for technology to transform the experience of aging.{/t}</p>
        <p>{t}Fortunately, exciting new technologies coming in the next 5 to 10 years offer the potential to dramatically improve the quality of care we can provide. Watch this video to learn the possibilities!{/t}</p>
        <iframe width="420" height="315" src="http://www.youtube.com/embed/SBH9dkCZsXQ?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a> </div>
    </div>
  </div>
  <div id="lesson-5">
    <div id="lesson-5-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Finances &amp; Legal Issues{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/147041673.png'); ?>" alt="{t}image{/t}">
        <p>{t}This module contains four main sections:{/t}</p>
        <ul>
          <li>{t}Financial Planning Issues and Key Topics for Caregivers{/t}</li>
          <li>{t}Understanding Key Aspects of Medicare{/t}</li>
          <li>{t}Understanding Key Aspects of Medicaid{/t}</li>
          <li>{t}Legal Issues for Caregivers{/t}</li>
        </ul>
        <p>{t}As a caregiver, you will need to evaluate the long-term care needs of your loved one. In making this evaluation, it is important to consider financial options. Long-term financial planning is important for everyone, but it is essential when you are coping with the expense of chronic illnesses such as Alzheimer's or Dementia.{/t}</p>
        <p class="forum">{t}Do you have a long-term financial plan in-place for the person you are careing for?</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
    <div id="lesson-5-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Financial Planning Issues and Key Topics for Caregivers{/t}</h2>
        <hr />
        <h5>{t}Developing a Plan{/t}</h5>
        <p>{t}For the security of the caregiver and the patient, long-term financial planning is very important for all parties involved. Planning ahead is essential. Long-term financial planning is very important for the security of the caregiver and the patient. If you wish to handle your loved one's finances, you must receive written authorization to do so. This authorization can be obtained through documents such as a power of attorney.{/t}</p>
        <p>{t}When considering a financial plan, you may contact professional financial managers and/or medical lawyers who deal with financial planning for people facing chronic or progressive illnesses. Consider an attorney who practices the specialty of <i>“elder law.”</i> {/t}<a href="http://www.naela.org" target="_blank">The National Academy of Elder Law Attorneys (NAELA)</a>{t} is a professional organization that publishes an <i>“Experience Registry”</i> of members who specialize in various aspects of elder law.{/t}</p>
        <p>{t}You also may want to talk to a social worker and investigate other resources, such as those available on the Internet. Ask your loved one's doctor for a referral, or speak with a national association or support group to find reputable professionals in your region.{/t}</p>
        <h5>{t}Understanding Medical Coverage{/t}</h5>
        <ul class="bulletlist">
          <li>{t}If your loved one is insured, either through his or her employer or retirement policy, read all of the policies pertaining to chronic/progressive illnesses. If you are unsure about the language or terms, contact the personnel department or your financial planner.{/t}</li>
          <li>{t}If your loved one is unemployed and does not have coverage, look for the highest level of affordable coverage.{/t}</li>
          <li>{t}If your loved one is 65 or over, he or she qualifies for Medicare. This insurance can be supplemented with a <i>"<a href="http://www.medicare.gov/find-a-plan/questions/medigap-home.aspx?AspxAutoDetectCookieSupport=1" target="_blank">Medigap</a>"</i> policy available through a private insurer. Many states also have prescription assistance/reimbursement programs for low-income senior citizens.{/t}</li>
          <li>{t}If your loved one is disabled but does not qualify for Social Security, he or she may be eligible to receive a form of Medicare for the disabled.{/t}</li>
          <li>{t}If your loved one cannot get insurance and his or her income is low, he or she may qualify for Medicaid, a government <i>"safety net"</i> program that pays for medical costs that exceed a person's ability to pay.{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Financial Planning Issues and Key Topics for Caregivers{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/93054723.png'); ?>" alt="{t}image{/t}">
        <h5>{t}Investigating Long- and Short-Term Disability Insurance{/t}</h5>
        <p>{t}If your loved one is employed, have him check to see if his employer has private disability insurance. He or she should contact his employer's human resources to investigate eligibility, the cost of enrolling, and how much of his/her salary it will cover.{/t}</p>
        <p>{t}If your loved one is not working, he or she may want to apply for Social Security. If they do not qualify for Social Security, state-run disability programs may be considered.{/t}</p>
        <p>{t}If their total income is below a certain level, he or she may qualify for federally subsidized Supplemental Security Income (SSI). If an individual collects SSI, he or she is a candidate for Medicaid regardless of age.{/t}</p>
        <h4>{t}Activity 1 - Financial Planning Issues &amp; Key Topics for Caregivers{/t}</h4>
        <p class="forum">{t}Post a response to the Forum the includes your loved-one's plan and what it consist of. If there is no plan in-place, use the Internet to research where would you find a template or where would you look to know where to start. Include the coverage options, Coverage of skilled nursing care facilities, and coverage of home care in your posting.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Key Aspects of Medicare{/t}</h2>
        <hr />
        <p>{t}<a href="http://www.medicare.gov" target="_blank">Medicare</a> is a federal health insurance program providing healthcare benefits to Americans 65 and older, as well as to some disabled individuals under age 65, and people of any age with permanent kidney failure requiring dialysis or kidney transplant. Eligibility for Medicare is linked to Social Security and railroad retirement benefits.{/t}</p>
        <p>{t}Medicare has co-payments and deductibles. A deductible is an initial amount the patient is responsible for paying before Medicare coverage begins. A co-payment is a percentage of the amount of covered expense the patient is required to pay.{/t}</p>
        <h4>{t}What Are Medicare's Coverage Options?{/t}</h4>
        <p>{t}Medicare has several parts:{/t}</p>
        <h5>{t}Part A Medicare covers hospital bills and includes:{/t}</h5>
        <ul>
          <li>{t}Inpatient hospital care{/t}</li>
          <li>{t}Skilled nursing facility care (not custodial or long-term care){/t}</li>
          <li>{t}Home health services, including a visiting nurse, or a physical, occupational, or speech therapist{/t}</li>
          <li>{t}Blood that you receive at a hospital or skilled nursing facility during a covered stay{/t}</li>
          <li>{t}Medical supplies{/t}</li>
          <li>{t}Hospice services{/t}</li>
          <li>{t}Mental health care given in a hospital{/t}</li>
        </ul>
        <h5>{t}Part B Medicare deals with doctors' bills and includes:{/t}</h5>
        <ul>
          <li>{t}Doctor charges (not routine physical exams){/t}</li>
          <li>{t}Medically necessary ambulance services{/t}</li>
          <li>{t}Physical, speech, and occupational therapy{/t}</li>
          <li>{t}Home health care services (physician certification is necessary){/t}</li>
          <li>{t}Medical supplies and equipment such as wheelchairs, hospital beds, oxygen, and walkers{/t}</li>
          <li>{t}Transfusion of blood and blood components provided on an outpatient basis{/t}</li>
          <li>{t}Outpatient medical/surgical supplies and services{/t}</li>
          <li>{t}Outpatient mental health{/t}</li>
          <li>{t}Part B Medicare benefits require payment of a monthly premium. A patient must also be entitled to Part A benefits in order to receive Part B benefits.{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Key Aspects of Medicare{/t}</h2>
        <hr />
        <h5>{t}Part C is the Medicare Advantage Plans:{/t}</h5>
        <ul>
          <li>{t}Part C refers to Medicare Advantage, which are managed care insurance plans you can buy from private insurers to replace your traditional Medicare coverage.{/t}</li>
          <li>{t}They include Medicare HMOs, Medicare PPOs, Medicare Special Needs Plans, and Medicare Private Fee-for-Service Plans.{/t}</li>
        </ul>
        <h5>{t}Part D is the Prescription Insurance Plan:{/t}</h5>
        <ul>
          <li>{t}Part D, as of January 2006, covers prescription drugs.{/t}</li>
          <li> {t}Depending on your income, you pay a monthly premium and part of the prescription cost.{/t} </li>
        </ul>
        <h5>{t}Medicare Coverage of Skilled Nursing Care Facilities{/t}</h5>
        <p>{t}If nursing home care becomes necessary, your loved one may be eligible for Medicare. In order to receive care in a skilled nursing home under Medicare:{/t}</p>
        <ul>
          <li>{t}Most patients' HMO plans require them to have had a three-day hospital stay prior to admission into the skilled nursing facility. There are exceptions, however, and the patient's insurance provider should be consulted to determine whether these restrictions apply.{/t}</li>
          <li>{t}The patient must meet specific criteria to receive treatment. The patient's doctor or nurse will help him or her to determine if the criteria are met.{/t}</li>
          <li>{t}The patient must be admitted into the skilled nursing facility within 30 days of discharge from the hospital.{/t}</li>
          <li>{t}The patient must enter the skilled nursing facility for treatment of the same condition for which he or she was hospitalized.{/t}</li>
          <li>{t}The patient must require daily skilled care.{/t}</li>
          <li>{t}The condition must be one that can be improved.{/t}</li>
          <li>{t}The facility must be Medicare-certified.{/t}</li>
          <li>{t}The patient's doctor must write a care plan. The care plan must be carried out by the skilled nursing facility. (Once the skilled needs are met, Medicare will no longer pay for services.){/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Key Aspects of Medicare{/t}</h2>
        <hr />
        <h5>{t}Medicare Coverage of Home Care{/t}</h5>
        <p>{t}In order to receive home care under Medicare:{/t}</p>
        <ul>
          <li>{t}The patient must be homebound.{/t}</li>
          <li>{t}The doctor must certify a plan of care.{/t}</li>
          <li>{t}Care must be needed on an intermittent (not continuous) basis.{/t}</li>
          <li>{t}Care cannot exceed 35 hours per week or 8 hours per day.{/t}</li>
          <li>{t}Physical or speech therapy must be provided on a "necessary and reasonable" basis. There are no restrictions on the number of days or hours per week of these therapies.{/t}</li>
          <li>{t}If a person qualifies for home health care, he or she is entitled to a home health aide to provide some personal care.{/t}</li>
        </ul>
        <h4>{t}Activity 2 - Discuss Medicare{/t}</h4>
        <p class="forum">{t}Please locate three websites that you find that have relevant, updated information on Medicare in your area, and post your findings to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}">
        <h5>{t}Medicare Coverage for Prescription Drugs (Medicare Part D){/t}</h5>
        <p>{t}Medicare prescription drug coverage is insurance that covers both brand-name and generic prescription drugs at participating pharmacies. Medicare prescription drug coverage provides protection for people who have very high drug costs or from unexpected prescription drug bills in the future.{/t}</p>
        <p>{t}Everyone with Medicare is eligible for this coverage, regardless of income and resources, health status, or current prescription expenses. Someone may sign up when one is first eligible for Medicare (three months before the month one turns age 65 until three months after turning age 65). If one gets Medicare due to a disability, he or she can join from three months before to three months after the 25th month of cash disability payments. If someone does not sign up when first eligible, a penalty may be assessed. There may be a annual open enrollment period each year.{/t}</p>
        <p>{t}The decision about Medicare prescription drug coverage depends on the kind of health care coverage one now has. There are two ways to get Medicare prescription drug coverage. One can join a Medicare prescription drug plan or one can join a Medicare Advantage Plan or other Medicare Health Plan that offers drug coverage. Whatever plan chosen, Medicare drug coverage will help cover brand-name and generic drugs at pharmacies that are convenient.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Key Aspects of Medicare{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/149163902.png'); ?>" alt="{t}image{/t}">
        <p>{t}Like other insurance, there is a monthly premium, which varies by plan, and a yearly deductible. One will also pay a part of the cost of prescriptions, including a copayment or coinsurance. Costs will vary depending on which drug plan is chosen. Some plans may offer more coverage and additional drugs for a higher monthly premium. If someone has limited income and resources, and qualify for extra help, one may not have to pay a premium or deductible. To get more information about the extra help, please visit the <a href="http://www.socialsecurity.gov/" target="_blank">Social Security webpage</a>.{/t}</p>
        <p>{t}Medicare prescription drug coverage provides greater peace of mind by protecting older adults from unexpected drug expenses. Even if someone does not use a lot of prescription drugs now, he or she should still consider joining. As we age, most people need prescription drugs to stay healthy. For most people, joining now means protection from unexpected prescription drug bills in the future.{/t}</p>
        <p>{t}There is extra financial help for people with limited income and resources. If someone qualifies for extra help, Medicare will pay for almost all prescription drug costs. One can apply or get more information about the extra help by visiting the Social Security webpage.{/t}</p>
        <h5>
        Medicare Prescription Drug Plan Finder
        <h5>
        <p>{t}Medicare has a valuable <a href="https://www.medicare.gov/find-a-plan/questions/home.aspx?AspxAutoDetectCookieSupport=1" target="_blank">interactive tool</a> that allows you to narrow your search for a Medicare prescription drug plan based on your personal preferences such as cost, drugs covered and participating pharmacies.{/t}</p>
        <p class="forum">{t}Did you find this interactive tool valuable? Post your feedback to the Forum?{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 5 Slide 8 -->
    
    <div id="lesson-5-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Key Aspects of Medicare (continued){/t}</h2>
        <hr />
        <h5>{t}Medicare Coverage of Hospice{/t}</h5>
        <p>{t}Hospice is the philosophy and practice of caring for those at their end-of-life. Hospice care focuses on enhancing the quality of life for those final months, weeks, or days of life.{/t}</p>
        <p>{t}There are more than 2,200 hospice organizations across the country. Most provide home care services and respite care for family caregivers. The hospice team consists of physicians, nurses, home health aides, social workers, counselors, nutritionists, speech and physical therapists, clergy, and volunteers who focus on the needs of the dying person and the family. Hospice staffs is usually available on a 24-hour basis. Hospice may be provided in the older adult’s home, a senior living or long-term care community, or in special hospice units in some hospitals or nursing homes if more extensive medical care to control pain or other symptoms is needed to provide peace and comfort.{/t}</p>
        <p>{t}The goal of hospice is not to cure or rehabilitate. Nor is it to hasten death. Rather, hospice care focuses on supportive comfort care, aiming at relieving pain, nausea, dizziness, or constipation.{/t}</p>
        <p>{t}For the caregiver, it is important to choose a hospice agency that is certified by Medicare to provide hospice care. Almost all hospice services are covered by Medicare as long as the agency is certified.{/t}</p>
        <p>{t}Hospice care is given in <i>“periods of care.”</i> For example, initial hospice care usually begins with two 90-day periods (6 months total). After than period, if the hospice medical director determines the person still would benefit from hospice, they would be “recertified” for additional 60-day periods. Recertification continues every 60-days. If the hospice medical director deems the person is doing well and does not need hospice, the care would revert back to the original Medicare coverage. If later, the person again needs hospice, the medical director can recertify the person to return to hospice care.{/t}</p>
        <p>{t}The following is a resource from Medicare regarding explanation of the <a href="http://www.medicare.gov/pubs/pdf/02154.pdf" target="_blank">Medicare Hospice Benefit.</a>{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Key Aspects of Medicaid{/t}</h2>
        <hr />
        <p>{t}Medicaid is a joint federal-state health insurance program providing medical assistance primarily to low-income Americans who have limited resources. It is also available to people under 65 if they are blind or disabled. The purpose of Medicaid is to provide preventive, therapeutic, and remedial health services and supplies that are essential to attain an optimum level of well-being.{/t}</p>
        <h4>{t}How Do People Receive Medicaid Benefits?{/t}</h4>
        <p>{t}There are two ways to receive Medicaid:{/t}</p>
        <ul>
          <li>{t}Supplemental Security Income (SSI) -- People who receive a cash grant under SSI and Aid to Dependent Children are automatically eligible for Medicaid benefits.{/t}</li>
          <li>{t}Medicaid <i>&quot;spend-down&quot;</i> -- This is similar to a deductible or a co-payment that a patient must 
            pay every month. Once the patient meets his &quot;spend-down&quot; amount, the patient is eligible for Medicaid for the remainder of the month.{/t}</li>
        </ul>
        <h5>{t}Who Is Eligible for Medicaid?{/t}</h5>
        <p>{t}Medicaid eligibility requirements depend on financial need, low income, and minimal assets. In determining Medicaid eligibility, officials do not review rent, car payments, or food costs. Officials only review medical expenses, which include:{/t}</p>
        <ul>
          <li>{t}Care from hospitals, doctors, clinics, nurses, dentists, podiatrists, and chiropractors{/t} </li>
          <li>{t}Medications{/t} </li>
          <li>{t}Medical supplies and equipment{/t} </li>
          <li>{t}Health insurance premiums{/t} </li>
          <li>{t}Transportation to get medical care{/t} </li>
        </ul>
        <p>{t}The four eligibility tests required to receive Medicaid include:{/t}</p>
        <ul>
          <li>{t}<b>Categorical</b> -- A patient must be age 65, blind, or disabled.{/t} </li>
          <li>{t}<b>Non-financial</b> -- A patient must be a U.S. citizen and a state resident. A patient also must have a Social Security number.{/t} </li>
          <li>{t}<b>Financial</b> -- A patient's total gross income, personal assets, and property will be evaluated and must meet a certain standard. This amount varies from state to state.{/t} </li>
          <li>{t}<b>Procedural</b> -- A patient must complete and sign an application and have a personal interview with a Medicaid official.{/t} </li>
        </ul>
        <p>{t}Each eligible Medicaid recipient receives a monthly Medical Identification card. The card is valid for one month only.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Understanding Key Aspects of Medicaid (continued){/t}</h2>
        <hr />
        <h5>{t}Medicaid Coverage{/t}</h5>
        <p>{t}Medicaid coverage varies from state to state. For specific coverage guidelines, contact your state's Department of Human Services. Generally, Medicaid benefits include:{/t}</p>
        <ul>
          <li>{t}<b>Transportation</b> -- This may include ambulance services when other means of transportation are detrimental to the patient's health or may include transportation to and from the hospital at time of admission or discharge when required by the patient's condition. Transportation also may cover trips to and from a hospital, outpatient clinic, doctor's office, or other facility when the doctor certifies the need for this service.{/t}</li>
          <li>{t}<b>Ambulatory Centers</b> -- Ambulatory health care centers are private corporations or public agencies that are not part of a hospital. They provide preventive, diagnostic, therapeutic, and rehabilitative services under the direction of a physician. Ambulatory services covered by Medicaid include dental, pharmaceutical, diagnostic, and vision care.{/t}</li>
          <li>{t}<b>Hospital Services</b> -- These services include inpatient hospital care up to 60 days for an illness. Private hospital rooms are covered only when the illness requires the patient to be isolated for his or her own health or the health of others. Outpatient preventive, therapeutic, and rehabilitative services also are covered. So are professional, laboratory and radiology services.{/t}</li>
          <li>{t}<b>Medical Supplies and Medications</b> -- These include general medical supplies (when prescribed by a physician), as well as medications prescribed by a physician, dentist, or podiatrist. Durable medical equipment (such as hospital beds, wheelchairs, side rails, oxygen administration apparatus, and special safety aids, etc.) also is covered.{/t}</li>
          <li>{t}<b>Home Health Care</b> -- These services include those provided by a visiting nurse, home health aide, or physical therapist.{/t}</li>
          <li>{t}<b>Skilled Nursing Facilities</b> -- Skilled nursing facilities and intermediate care facilities (providing short-term care for a patient whose condition is stable or reversible) are covered through Medicaid with a doctor's authorization.{/t}</li>
        </ul>
        <h4>{t}Activity 3 - Discuss Medicaid{/t}</h4>
        <p class="forum">{t}Email your course Facilitator and explain the major differences between Medicare and Medicaid as you see it and if you understand it.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('empower/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Legal Issues for Caregivers{/t}</h2>
        <hr />
        <p>{t}As a caregiver, you should begin making legal preparations soon after your loved one has been diagnosed with a serious illness. People with Alzheimer's disease and other long-term illnesses may have the capacity to manage their own legal and financial affairs right now. But as these diseases advance, they will need to rely on others to act in their best interests. This transition is never easy. However, advance planning allows people with a long-term disease and their families to make decisions together for what may come.{/t}
        <h5>{t}Legal Documents for Caregivers{/t}</h5>
        <p>{t}Clearly written legal documents that outline your loved one's wishes and decisions are essential for caregivers. These documents can authorize another person to make healthcare and financial decisions, including plans for long-term care. If the person being cared for has the legal capacity -- the level of mental functioning necessary to sign official documents -- he or she should actively participate in legal planning.{/t}</p>
        <p>{t}To give your loved one the best care possible, obtain legal advice and services from an attorney. If the person you are caring for is age 65 or older, consider hiring an attorney who practices elder law, a specialized area of law focusing on issues that typically affect the elderly. As you plan for the future, ask the attorney about the following documents (more detailed information is provided in the module <i>“Long-term Care Planning and Advanced Directives")</i>.{/t}</p>
        <h5>{t}Power of attorney{/t}</h5>
        <p>{t}This document gives a person (the principal) an opportunity to authorize an agent (usually a trusted family member or friend) to make legal decisions when he or she is no longer competent. There is no standard power of attorney; thus, each one must be geared toward an individual's situation. It is important for the caregiver to be very familiar with the terms of power of attorney because they spell out what authority the caregiver does and does not have. The agent should make multiple copies of the document and give one to each company with which the principal does business.{/t}</p>
        <h5>{t}Durable power of attorney for health care (also known as health care proxy){/t}</h5>
        <p>{t}This document appoints an agent to make all decisions regarding health care, including choices regarding health care providers, medical treatment, and, in the later stages of the disease, end- of-life decisions. This means that the agent may authorize or refuse any medical treatment for the principal. This power only goes into effect once the principal is unable to make decisions for himself and is activated by the principal's attending physician.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Legal Issues for Caregivers{/t}</h2>
        <hr />
        <h5>{t}Living will{/t}</h5>
        <p>{t}A living will allows the person to state -- in advance -- what kind of medical care he or she desires to receive and what life-support procedures he or she would like to withhold. This document is used if a person becomes terminally ill and unable to make his wishes known or if he becomes permanently unconscious. A terminal illness is defined as one from which a person's doctor believes there is no chance of recovery. Living wills can also be used if a person becomes permanently unconscious. To be considered permanently unconscious, two physicians must determine that the patient has no reasonable possibility of regaining consciousness or decision-making ability. Laws on living wills vary from state to state.{/t}</p>
        <h5>{t}Living trust{/t}</h5>
        <p>{t}This document enables a person (called a grantor or trustor) to create a trust and appoint a trustee to carefully invest and manage trust assets once the grantor is no longer able to manage finances. A person can appoint another individual or a financial institution to be the trustee.{/t}</p>
        <h5>{t}Will{/t}</h5>
        <p>{t}A will is a document created by an individual that names an executor (the person who will manage the estate) and beneficiaries (those who will receive the estate at the time of the person's death).{/t}</p>
        <p>{t}If you cannot afford an attorney, legal forms can be accessed through resources including books and the Internet. Legal issues may be discussed with a social worker or clergy free of charge.{/t}</p>
        <h5>{t}Guardian/Conservator{/t}</h5>
        <p>{t}A caregiver of an individual who no longer has the legal capacity to execute powers of attorney or trusts may have to become that individual's guardian or conservator. A guardian has the legal authority to make decisions about the lifestyle and well-being of another person. The decisions a guardian may make include where a person may live, what care and medical treatment will be provided, and what religious and educational activities will be made available. A conservator has legal authority to manage another person's financial affairs.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-5-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('empower/134189923.png'); ?>" alt="{t}image{/t}">
        <h4>{t}Thank You!{/t}</h4>
        <p>{t}We have really enjoyed getting to know you. Best wishes as you carry on in the future!{/t}</p>
        <h4 style="text-align:center;">{t}Certificates of Completion{/t}</h4>
        <a href="<?php echo $this->getImagesUrl('empower/CourseCompletionCertificate.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('msml/ArtworkCertificate.png'); ?>" alt="image"></a>
        <h4>{t}Evaluation (optional){/t}</h4>
        <p>{t}Please complete the Post-Course Evaluation. It is acceissble via the course page, in the sidebar.{/t}</p>
        <p>{t}Your feedback is greatly appreciated, and will help us to better serve family members in the future. We ask that you complete it before you exit the course. You do not have to include your name on the evaluation. It is completely confidential.{/t}</p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Course{/t}</a></div>
    </div>
    
    <!-- need this final div here to close lesson-5 --> 
  </div>
  
  <!-- need this final div to close the course --> 
</div>
