<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach(array(
		'.lesson-1', 
		'.lesson-2', 
		'.lesson-3', 
		'.lesson-4', 
		'.lesson-5',
		'.lesson-6',
		'.lesson-7') as $lesson)
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

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('126945521r.jpeg'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
</div>
<div id="sidebar">
  <div class="box-sidebar one" style="background-color:#FFF;">
    <h3>{t}Survey{/t}</h3>
    <br />
    <p><a href="#">{t}Spencer Online Pre-Course Survey{/t}</a></p>
    <p><a href="#">{t}Spencer Online Post-Course Survey{/t}</a></p>
    <p><a href="#">{t}Spencer Online Post-Post Course Survey{/t}</a></p>
    <p><a href="#">{t}Spencer Online One-Year Survey{/t}</a></p>
    <br />
    <img src="<?php echo $this->getImagesUrl('msml/153075496.png'); ?>" alt="image"> </div>
  <div class="box-sidebar one">
    <h3>Sharp Brains - Market Research</h3>
    <p>{t}Tracking Brain Health Innovations: News, Research, Trech, Trends{/t}</p>
    <p><a href="http://sharpbrains.com/index.php" target="_blank"><img src="<?php echo $this->getImagesUrl('spencer/sharpbrainslogo.gif'); ?>" alt="image"></a></p>
    <hr />
    <p>{t}Sharp­Brains is an independent market research firm and think tank helping organizations and individuals navigate the emerging brain fitness and applied neuroscience field. We maintain an annual state-of-the-market report series, publish consumer guides to inform decision-making, produce an annual global and virtual professional conference.{/t}</p>
  </div>
  <div class="box-sidebar two">
    <h3>Go4Life</h3>
    <p>{t}from the National Institute on Aging at NIH{/t}</p>
    <p><a href="http://sharpbrains.com/index.php" target="_blank"><img src="<?php echo $this->getImagesUrl('spencer/litejazz_logo.png'); ?>" style="width:200; height:142;" alt="image"></a></p>
    <hr />
    <p>{t}Go4Life, an exercise and physical activity campaign from the National Institute on Aging at NIH, is designed to help you fit exercise and physical activity into your daily life. Motivating older adults to become physically active for the first time, return to exercise after a break in their routines, or build more exercise and physical activity into weekly routines are the essential elements of Go4Life.{/t}</p>
  </div>
</div>

<!-- start main content -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t($course->title); ?></h2>
  <p><?php echo t($course->description); ?></p>
  <h5>
  {t}Access - 1 year / Completion - 8 weeks (recommended){/t}
  <h4>{t}Objectives{/t}</h4>
  <ul>
    <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  
  <!-- course lesson list start here -->
  <h4>{t}Sections{/t}</h4>
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> {t}Introduction{/t}</a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a></li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> {t}Physical Activity{/t}</a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-11" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-12" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-13" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-14" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-15" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-16" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-17" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-18" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-19" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-20" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-21" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-22" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-23" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> {t}Emotional{/t}</a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a></li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> {t}Intellectual{/t}</a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> {t}Nutritional{/t}</a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> {t}Spiritual{/t}</a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> {t}Emotional{/t}</a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> {t}Closing{/t}</a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
  </ul>
  <div class="box-white" id="resources">
    <h4> {t}Resources{/t}</h4>
    <p>{t}Please use these listed resources in the completion of this online course. Please contact your instructor or the program director if you have additional resources you would like to see added here.{/t}</p>
    <ul>
      <li><a href="http://www.mindful.org/" target="_blank">mindful - taking time for what matters</a></li>
      <li><a href="http://www.psychologytoday.com/basics/mindfulness" target="_blank">Psychologytoday</a></li>
      <li><a href=" http://www.ncbi.nlm.nih.gov/pubmedhealth/PMH0008821/" target="_blank">PubMed Health</a></li>
      <li><a href="http://www.bis.gov.uk/foresight/our-work/projects/published-projects/mental-capital-and-wellbeing/reports-and-publications
" target="_blank">Foresight</a></li>
      <li><a href="http://cognitivetherapyonline.com/" target="_blank">Cognitive Therapy Online</a></li>
      <li><a href="http://www.cognitivebehavioraltherapyonline.com/index.php" target="_blank">FixMyThinking.com</a></li>
      <li><a href="http://www.nih.gov/health/wellness/" target="_blank">National Institutes of Health</a></li>
    </ul>
  </div>
  <div class="box-white" id="developers">
    <h4>{t}Facilitators &amp; Course Developers{/t}</h4>
    <h5>{t}Content Designer:{/t} <span class="name">Cate O'Brien</span></h5>
    <p>{t}Ms. O’Brien has worked in a research capacity for Mather LifeWays Institute on Aging since 2005. She has been responsible for designing and overseeing large-scale multi-year evaluations for grant-funded projects relating to the field of aging. As a Project Director on grant funded research projects, she has been responsible for forging collaborations with aging services organizations nationwide, and for recruiting older adults into various studies.{/t}</p>
    <span class="h5">{t}Course Developer:{/t}</span> <span class="name">Jon Woodall</span>
    <p>{t}Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs.{/t}</p>
    <span class="h5">{t}Course Facilitator:{/t}</span> <span class="name">Sherrie All, PhD</span></a>
    <p>{t}Licensed clinical neuropsychologist specializing in brain fitness, healthy aging and cognitive enhancement. She is building a private practice in clinical neuropsychological assessment combined with interventions aimed at enhancing cognition and promoting healthy aging. And has specialties in Neuropsychological Assessment, Individual and Group Psychotherapy, Brain Fitness and Healthy Aging Thearpy and Coaching{/t}</p>
  </div>
</div>

<!-- Lesson 1 slide #1 -->

<div id="course" class="hide">
  <div id="lesson-1">
    <div id="lesson-1-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Spencer Powell Brain Fitness Program online{/t}</h2>
        <hr />
        <h4>{t}Welcome!{/t}</h4>
        <p>{t}Welcome and thank you for your interest and participation in the Spencer Powell Brain Fitness Program online course. We are excited to have your participation and look forward to our interactions! Please contact us if you need help, have questions, or suggestions for course improvements.{/t}</p>
        <h4>{t}Course Description{/t}</h4>
        <p>{t}The Spencer Powell Brain Fitness Program is designed to promote cognitive health and healthy lifestyle changes. The course provides information on how lifestyle factors such as physical activity and cognitive engagement affect your brain and your risk for dementia. Practical strategies are suggested for maintaining memory over time. In addition, the course includes memory training such as chunking, the story method, and mnemonic techniques.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    
    <!-- Lesson 1 - slide #2 -->
    
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Section Outline{/t}</h2>
        <hr />
        <ol>
          <li>
            <h4>{t}Overview of:{/t}</h4>
          </li>
          <ul>
            <li>
              <h5>{t}Brain Health Now and Later{/t}</h5>
            </li>
            <li>
              <h5>{t}Dementia and Cognitive Reserve{/t}</h5>
            </li>
            <li>
              <h5>{t}Brain Plasticity{/t}</h5>
            </li>
            <li>
              <h5>{t}Peak Performance{/t}</h5>
            </li>
          </ul>
          <li>
            <h4>{t}Introduction to Program Format{/t}</h4>
          </li>
          <li>
            <h4>{t}Memory Exercise{/t}</h4>
          </li>
          <li>
            <h4>{t}Goal Setting{/t}</h4>
          </li>
        </ol>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"> {t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #3 -->
    
    <div id="lesson-1-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Health{/t}</h2>
        <hr />
        <p>{t}The world of brain health has exploded over the past decade with many new programs and applications emerging to help people think and perform better both now in their daily lives at work or at home and later in life as people age.  Maintaining independence later in life is a concern for many people, especially older adults, but even for younger people this can be a nagging concern.  Through the course of this program you will learn how investing in your brain health now can pay dividends both immediately and as you age.
          
          To describe some of the key concepts underlying the field of brain health, we will start by talking a bit about how to protect brain health as you age.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #4 -->
    
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Dementia is not inevitable{/t}</h2>
        <hr />
        <p>{t}Many people think that dementia is a normal part of the aging process and that losing ones memory is just part of getting older. While some cognitive skills, such as reaction time and our ability to access words at times (what we think of as “senior moments”), do decline naturally with age, “dementia” is a decline in cognitive ability beyond the normal aging process, most likely due to disease or injury.{/t}</p>
        <p>{t}Many people also think that if dementia is in their family they are destined to develop it at some point in their lives.  However, brain research is showing that the way people live their lives actually seems to account for as much or more of the risk for dementia than family history.  In fact for the typical late-onset form of Alzheimer’s disease, genes seem to only account for about 30% of the risk (that’s in contrast to early-onset Alzheimer’s, which occurs before age 65 and has a much stronger genetic component).  The rest of that 70% is made up of some other things that we can’t control such as environmental toxins, but within that 70% area there are a lot of things that we can control.{/t}</p>
        <p>{t}This information is leading some doctors and scientists to start thinking of dementia as a preventable disease, similar to how we think of heart disease, cancer and Type II diabetes as preventable.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #5 -->
    
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Dementia{/t}</h2>
        <hr />
        <p>{t}People often ask, “what is the difference between Alzheimer's disease and dementia?”  Before we get too far, we should clarify that Alzheimer’s disease is a TYPE of dementia. Dementia is an umbrella term used to describe any type of stable decline in cognitive abilities, severe enough to interrupt a person’s ability to function independently. Dementia describes the observable symptoms of a brain disease or injury.{/t}</p>
        <p>{t}Alzheimer’s is a disease process – a medical condition – that causes the cognitive changes that produce dementia.  There are many other medical conditions that cause dementia as well.{/t}</p>
        <p>{t}The second most common disease that causes dementia is what we call cerebrovascular disease, which causes vascular dementia.  This includes any type of injury to the brain caused by a problem with the brain’s blood supply, most notably a stroke.  There are varying degrees of strokes, however.  You may have heard of TIA’s (or Transient Ischemic Attacks) or mini strokes.  The stroke process can also occur without any identifiable symptoms, causing what we call silent strokes.  You will learn more about these in the next session.{/t}</p>
        <p>{t}Head trauma, Parkinson’s disease, Huntington Disease, Pick’s disease, infections such as HIV and CJD (Creutzfeldt-Jakob Disease – the human form of mad cow disease), substance abuse and environmental toxins can also cause dementia.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('SpencerLesson1Slides/SpencerLesson1Slide5.png'); ?>" width="500px" height="243px" alt="image"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #6 -->
    
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Risk Factors are Interactive{/t}</h2>
        <hr />
        <p>{t}We are also learning that most people who develop dementia tend to have more than one type of risk factor and may even have more than one disease process affecting their brains.  It may also be the case that one disease process, such as diabetes, may play a role in the formation of another disease process such as Alzheimer’s.  We know that hypertension (high blood pressure) is a common result of the pressure that diabetes puts on the vascular system.  We still have a lot to learn in this area, but we mention it here because there are a lot of things that we can do to lessen the effects of many of these disease conditions on our aging brains, which may help us ward off or delay the clinical symptoms of dementia.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #7 -->
    
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cognitive Reserve: Your Brain's 401K Account{/t}</h2>
        <hr />
        <p>{t}One key way that we can lower our risk for dementia is through understanding and utilizing a theory that is central to this area of science, called the Theory of Cognitive Reserve.  You can think of this as your brain’s 401k or retirement account.{/t}</p>
        <p>{t}Simply put, the Theory of Cognitive Reserve is based on observations that no 2 brains respond to injury or illness in exactly the same way.  There are people who can sustain a small amount of damage to their brains and lose a lot of brain function, and there are people who can sustain large amounts of damage and never develop dementia.  What seems to differentiate these types of people is the amount of brain reserve that they have “stored in the bank” that can make up for the losses.{/t}</p>
        <p>{t}So when planning financially for retirement, if you have a lot invested in your retirement account, you can survive losses - such as fluctuations in the market or an unexpected expense - much better if your account is bigger than if it were smaller.  This principle seems to apply to our brains too, which serves as the basis for the theory of cognitive reserve.  People with high levels of Cognitive Reserve have to sustain many more losses before crossing over the threshold to having dementia than people who have lower reserve.{/t}</p>
        <p>{t}The keyword to learn from this is “Cognitive Reserve” – which is your brain’s reserve of both tissue and abilities that affects your risk for dementia.  Or your Brain’s retirement account.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #8 -->
    
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cognitive Reserve{/t}</h2>
        <hr />
        <p>{t}A little over 10 years ago, Yakov Stern, PhD, a neuropsychologist at Columbia University, summarized a series of important brain discoveries and proposed the theory of Cognitive Reserve.  Since then, numerous studies have continued to support this theory, allowing us to now know many of the factors that can raise and lower a person’s risk for dementia.{/t}</p>
        <p>{t}One of the first discoveries leading to the theory of cognitive reserve came after scientists noticed that a group of people who had donated their brains for autopsy showed signs of advanced Alzheimer’s disease in their brains even though at the time of their death they had no clinical signs of the disease.  In other words, these were people with fully intact memories who had remained quite independent, yet their brains looked exactly the same as the brains of people who had forgotten their families and could no longer care for themselves.{/t}</p>
        <p>{t}The scientists wondered if there might be something different about the way these people had lived their lives that allowed them to resist the effects of the Alzheimer’s disease pathology that had grown in their brains.  It turned out that these people had been more active intellectually, socially and physically throughout their adult lives than the people in the other group.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #9 -->
    
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Adult Brain Grows New Cells{/t}</h2>
        <hr />
        <p>{t}About 10 years after that autopsy study, another group of researchers studied the brains of people who had survived cancer through radiation treatment.  It turns out that after people go through radiation treatment, some of the genetic information in their cells changes.  By applying a special dye that is only attracted to cells with this new genetic data, researchers can see which cells had formed after the cancer.  They applied this dye to brain tissue on autopsy and were surprised to find cells in the brain that accepted the dye.  This meant that these cells had developed AFTER the radiation treatment.  Some of the people in this study well into their 80’s when they received the cancer treatment, so it seems that new brain cells are growing well into later life.  This evidence combined with other studies since this has changed the way we think about the adult brain; now we accept that the adult brain DOES grow new brain cells!{/t}</p>
        <p>{t}Now this excitement has to be tempered a bit because brain cells do not grow at the same rate as say cells in your skin or your bones, so it is still harder for the brain to recover from injury.{/t}</p>
        <p>{t}Nevertheless, it is exciting to know that we can still grow new brain cells.  This may actually be one of the mechanism by which we can learn new things as the region of the brain where these new brain cells grow – called the hippocampus – is the area responsible for forming new memories.{/t}</p>
        <p>{t}The key word to learn from this is “neurogenesis,” meaning the growth of new brain cells.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #10 -->
    
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Structures Also Grow with Experience{/t}</h2>
        <hr />
        <p>{t}In addition to discovering the growth of new brain cells, over the last couple of decades, scientist have demonstrated that brain structures can grow in adulthood, which often seems to be the result of experience, or learning new things.{/t}</p>
        <p>{t}In the late 1990’s a group of researchers started studying the brains of cab drivers in London.  This is an elite group of taxi drivers who have to complete a 3-4 year apprenticeship to learn the intricate routes within the 6-square mile are of central London (see map).  They literally call it “The Knowledge.”  75% of the people who start the apprenticeship drop out.  At first researchers noted that a region of the hippocampus responsible for spatial relations was larger in experienced drivers compared to other people.  After following new recruits over time, the same researchers observed that this region actually grew in the recruits who successfully completed the program.{/t}</p>
        <p>{t}Developing such a specialized skill did come at a price, however, as other studies from the same group have shown that these taxi drivers perform worse on other tests of memory. This suggests that it is likely important to diversify your brain building activities. But the exciting part of all of this research is that it shows in a pretty clear way that the adult brain can grow –  that is actually change its structure in a positive direction – through experience.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #11 -->
    
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Cells Form New Connections{/t}</h2>
        <hr />
        <p>{t}The adult brain also changes in another way.  The brain cells you already have as well as the new ones you are growing, can also form new connections.  These connections are referred to as “pathways,” and just like with your muscles, the stronger a pathway becomes, the bigger it gets.{/t}</p>
        <p>{t}The connections between brain cells, at the ends of the pathways, are called synapses, and “synaptic density” can be increased by learning new things and performing new skills.{/t}</p>
        <p>{t}Pathways and synapses can also rewire, diverting their resources to different regions following an injury.{/t}</p>
        <p>{t}All of this “malleability” in the wiring of brain cells is called “plasticity.”{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #12 -->
    
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cells that Fire Together, Wire Together{/t}</h2>
        <hr />
        <p>{t}This phenomenon was first described in the 1940’s by a scientist named Donald Hebb, and the process has since been termed Hebb’s Law, which is often paraphrased as, “cells that fire together, wire together.”  So anytime you practice a new skill, the brain cells required to perform that skill will fire together, meaning they will both produce an electrical charge, which over time will change the structure of the synapse and allow the cells to be “wired together” or more likely to excite one another when one is excited.{/t}</p>
        <p>{t}The technical names for the “rewiring process” are called Long Term Potentiation (LTP) and Long Term Depression (LTD).  LTP we already understand, that cells that fire together build stronger connections.  LTD explains what we call negative plasticity or the “use it or lose it” phenomenon, meaning that when cells are not firing together, when you are not practicing a particular skill, the connections become weaker over time.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #13 -->
    
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Your Brain’s 401K{/t}</h2>
        <hr />
        <p>{t}Now that we know that a lot of the things we do throughout our lives affects our susceptibility to dementia, we can utilize the principles of Cognitive Reserve Theory to maximize our investments in our Brain’s retirement account.{/t}</p>
        <p>{t}Disclaimer!!!  We want to emphasize that there are still risk factors that we cannot control, so living a brain healthy lifestyle does not guarantee that you will not get dementia, just like living a heart healthy lifestyle doesn’t guarantee you won’t have a heart attack.{/t}</p>
        <p>{t}However, this program will help you understand the things you can do that may lower the risk for dementia or postpone cognitive decline in the hopes that you will maintain independence for as long as possible.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #14 -->
    
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Peak Performance!{/t}</h2>
        <hr />
        <p>{t}We’ve talked a lot today about protecting your brain from dementia, but this program will also focus on helping you get the most out of your brain today, which can help you both at work and at home.  You will be learning strategies to remember things better, to be more organized, to pay closer attention and to regulate your emotions.  Some of the strategies will come to you directly through the memory tips that you will learn in sessions 2-7 and the lifestyle demonstrations we will present each week.  Other strategies will come to you indirectly as you practice the exercises included in both the program homework assignments and the brain training software we are providing.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #15 -->
    
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Let’s Give Ourselves a Break{/t}</h2>
        <hr />
        <p>{t}Before we get into the specifics of what you will be doing for the next few weeks, let’s take a moment to give ourselves a little break. Not an actual break from the session, but rather let’s take a moment to go over some myths and misconceptions that older adults tend to have about their memories.{/t}</p>
        <p>{t}Because dementia is such a great concern among older adults, many people forget that it’s normal to forget things. You’ve been forgetting things all your life! It’s just that when you were 25 years old, you didn’t care so much because you didn’t interpret the forgetting as a signal that you may be on the path to losing your independence.{/t}</p>
        <p>{t}It is also a myth that people can remember everything.  You may have heard of these “memory champions” who can remember several decks of cards just by seeing them flipped over one at a time or about people with photographic memories.  Well the memory champions train like professional athletes, hours on end, day after day for months to develop their craft, but it doesn’t really seem to help them get better at much of anything else.  And most of the people with photographic memories are savants whose incredible gifts are often accompanied by severe handicaps in other areas of day-to-day living.{/t}</p>
        <p>{t}So let’s all just have reasonable expectations of our memories.  If you forget something, try and relax.  That may even help you remember since, as you will learn in a few weeks, being upset can arrest our thinking.{/t}</p>
        <p>{t}Over the next few weeks you will be working on some techniques to remember things better, and with a fair amount of effort and practice you can improve your thinking, but there is no magic bullet, no miracle cure, and no special pill to give us perfect thinking.{/t}</p>
        <p>{t}Nor is it likely that your memory is really as bad as you think.  On that note, however, if you really are concerned about your thinking, we encourage you to talk with your doctor if you have not done so already.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #16 -->
    
    <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Program Format{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('SpencerLesson1Slides/SpencerLesson1Slide15.png'); ?>" width="500px" height="276px" alt="image">
        <p>{t}During each of the next few weeks, you will learn the details of how each of these five areas of wellness affect your risk for dementia.  You will learn the science supporting the connection between your brain health and each area of wellness.{/t}</p>
        <p>{t}We aim to help you identify areas of your lifestyle where you could increase your investment in your Cognitive Reserve, diversifying your “Brain Portfolio.”{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #17 -->
    
    <div id="lesson-1-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}CR Contributions Logs{/t}</h2>
        <hr />
        <p>{t}Knowing if we are doing enough for our brains can be a challenge, so in an effort to help you take account of your brain healthy activities, we created the CR (Cognitive Reserve) Contribution Log.  You would not expect to invest in your financial retirement account without keeping track of your investments would you?  With this log you can get a better idea of how you’re investing in your brain health, and if you choose to increase your investment, you can monitor that too, watching your gains grow over time.{/t}</p>
        
        <!-- this content is on a handout, need to create form-fillable .pdf

How it works
We also provided you with a Menu of brain healthy activities that converts your activities to CR Contribution units.  The Menu is at the end of your workbook.  It makes your activities easier to quantify, therefore making it easier to see the gains that you are making each week in Maximizing your CR Contributions.  

The Menu is broken up into three sections, the top section are standard brain healthy activities, the second section has a list of all of the brain healthy activities that are provided at this facility, the third section includes some blank paces for you to add your own, customized brain healthy activities.  The menu also has suggested domains for each activity, but the domain that you feel the activity best fits is entirely up to you.  Some people think that going for a walk is purely for exercise, but others see the connection with nature as a spiritual experience.  This is for you to decide.

What to do:
This week we would like for you to get started in logging your brain healthy activities.  This will give you an idea of your baseline, and will help you know where you want to add when it comes time to set goals.
'); ?></p>

--> 
        
        <!-- need screen shot of form-fillable .pdf as image here --> 
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #18 -->
    
    <div id="lesson-1-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Memory Strategy #1{/t}</h2>
        <hr />
        <h4>{t}5 Minute Explanation – 10 Minute Practice{/t}</h4>
        <h5>{t}Memory Tip #1 - Improve Memory by Improving Attention {/t}</h5>
        <p>{t}In each section, you will learn a new strategy for improving your memory in your everyday life.  Today, please focus on helping build a cognitive skill that is not “memory” per se but is essential for having a better memory.{/t}</p>
        <p>{t}Today we are going to help you improve your memory by helping you improve your ATTENTION.  The reason we are starting here is because attention is the gateway to memory. You can’t expect to remember things that you don’t see, hear, feel or otherwise experience, right?  How can we expect our brains to hold onto information that doesn’t get in in the first place?{/t}</p>
        <p>{t}What are some ways that you can improve your attention?{/t}</p>
        
        <!-- *content removed for online course, need to find handout online or create .pdf with examples, also need to add forum response here

[Lead a brief, positive and validating discussion on ways to pay better attention – click to reveal suggestions on the slide to fill in any gaps].

 
Look up and around - Open your eyes - Simply being more aware can improve your attention.  Putting in the effort to look around and making mental notes of where you parked your car or whether or not you locked the door, can do wonders for setting a good foundation for remembering things!
 
Stay “Present” - Dial down the internal chatter or the mental to-do list.  In conversations, remind yourself that you will be able to come up with something to say after the person is finished talking in order to stop the mental rehearsal of your next point.  This way you can really pay attention to what the other person is saying

Get your hearing or vision checked and corrected if needed – Do not let vanity get in the way of your brain health.  Vision and hearing loss not only keep you from taking in current information, but over time it seems that they can weaken you whole brain.  As we just learned today, cells that fire together, wire together, so if your brain is not getting good quality stimulation from your ears or your eyes, all of the brain circuits that process that information (including your memory circuits) have less stimulation, and therefore seem to also weaken over time.

--> 
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #19 -->
    
    <div id="lesson-1-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr />
        <p>{t}You may be saying to yourself, “I’m just not good at paying attention.”  “I have ADD” or “I’ve always been bad at paying attention.”  Well keep in mind that the brain is plastic and very much capable of change.  In fact, new research is showing that through brain exercises and through the tips that you will learn in this class, even people with attention problems caused by brain injury and people with Attention Deficit / Hyperactivity Disorder (ADD/ADHD) can improve their attention.{/t}</p>
        <p>{t}This handout list some strategies that are used to help people with attention deficits improving their attention – we list them here because they are also important for many of us.{/t}</p>
        
        <!-- add handout to slide here, create .pdf
 
Manage your environment – Distractions and interruptions some of the biggest threats to attention.  In today’s world we are surrounded by so many sources of stimulation including the TV, computer, cell phone, radio, etc. Taking steps to manage these distractions and interruptions can be very helpful in improving attention and thereby improving memory.
 
Do one thing at a time – 
Multi-tasking is a myth!  Our brains really don’t seem to process more than one thing at a time.  What may feel like multi-tasking, for example checking your email while having a conversation, really seems to just involve your brain switching rapidly back and forth between the two tasks.  Studies even in young people suggest that this type of processing reduces performance by almost a full IQ category (10-15 points, say from average to low average), which for some people is about the same as being high on marijuana.  This inability to multitask the way we think we can is also starting to influence public policy in terms of limiting cell phone use while driving.  Texting has received a lot of focus, but talking may be just a bad.
  
In addition to not being very efficient, multi-tasking is now viewed by some brain researchers as being toxic for your brain.  All of the rapid attention switching can be fatiguing and even stressful, which can lead to an increase in the release of stress hormones.  As you will learn in the Emotional Module, chronic exposure to stress hormones is toxic to brain cells, so doing one thing at a time may also help you preserve your cognitive reserve in addition to enhancing your attention and memory.
 
Bribe yourself – 
Often we have trouble paying attention simply because we are not motivated to do so.  Sometimes we don’t admit this and just get mad at ourselves for not being able to pay attention.  But surely you can think of examples where you had trouble concentrating simply because there was something else you would much rather be doing.  So increase your motivation to pay attention by creating some sort of reward (or bribe).  
 
Psychological researchers are discovering that attention can be improved through both external and internal motivators, and you can exact some control over these motivators by “bribing yourself to pay attention.”  
 
An old psychological principle called the “Premack Principle” is something you can use to increase your motivation in a lot of areas and in this case your attention.  Simply put, the Premak Principle involves setting a rule that you have to earn something that is highly rewarding by doing something that in itself is not highly rewarding.  Say for instance one of your goals to increase your brain fitness is to read the newspaper every morning, but you have a really hard time motivating yourself to sit down and pay attention to it.  On the other hand, you really like taking a shower in the morning & rarely miss that.  You can use the Premack Principle to set the condition that you have to “earn” your shower by really attending to the newspaper for 15 minutes.
 
Get Plenty of Rest - Feeling tired, either by not sleeping well or from mental fatigue, can limit our attention. People who do not get enough, good quality sleep perform considerably worse on tests of attention, which can have a big impact on important tasks such as driving.  Too little sleep has also been linked with a higher risk for stroke and a lower life expectancy.  Even if you sleep enough hours, if you snore or have to wake frequently to go to the restroom or nap during the day, the quality of your sleep may be limiting your attention or affecting your health.  Seeing a  sleep specialist could pay large dividends for your brain health.

Resting your brain doesn’t just involve sleep.  Our brains get tired from too much attention, so just like our muscles, they need time to recover.  This means that learning to “turn your brain off” or taking little “attention breaks” can also help your attention.  Many of the techniques that you will learn over the next few weeks will teach you strategies for resting your brain even when you are awake, which may to be just as important as getting enough sleep.
 
Finally, it is also important to remember that emotions can interrupt our attention!  Feeling anxious or being distracted by self-criticism or worried thoughts is often one of the biggest robbers of our attention.  So learning to relax is also very important for improving attention.  You will learn more about caring for your emotions and dealing with stress in the coming weeks.

--> 
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #20 -->
    
    <div id="lesson-1-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Attention Exercise{/t}</h2>
        <hr />
        <p>{t}Allow 10 minutes of time for this activity{/t}</p>
        <p>{t}Once you have completed this activity, please record your experince on the Forum{/t}</p>
        
        <!--

Pair off with a partner and move away from other people in the group
One partner turns away from the screen
The other reads the following number strings  at a pace of one digit per second
The person who goes second just reads the number strings in the reverse order (e.g.: Start with “4” on the first one – 493)

The goal here is to have people experience using some of the attention techniques that were just discussed.  Chiefly those will include:  
-listening
-staying focused
-making the effort
-avoiding distractions.  

After the first couple of trials, take some steps to provide additional technique practice by:
interrupt the participants and ask them to either move closer together or speak to each other more loudly, to experience the impact of distractions and interruptions.  
Ask people to use different strategies on each trial such as:
-closing their eyes versus looking around the room or looking at the speaker
-tapping their leg along with the numbers

After about 10-15 minutes of practice, have participants talk briefly about their experience, noting the techniques that they used to pay better attention.
'); ?></p>


--> 
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 slide #21 -->
    
    <div id="lesson-1-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}This Week's Goals Steps{/t}</h2>
        <hr />
        <p>{t}Allow 5 minutes for this activity{/t}</p>
        <p>{t}Ensure that you record a goal and a reward on your handout.{/t}</p>
        
        <!-- need to create .pdf hadnout of this info below 

Goals
  You will likely need to offer guidance in helping set goals that are not too difficult or too vague – It’s better to set a “ridiculously simple goal” that a person can achieve in order to feel success than to set a goal that they will not achieve.
  Goals need to be:
  Specific with respect to: 
  Type of behavior – have people write a specific behavior (will log activities) as opposed to a vague aspiration (will try to monitor activities)
  Duration of the behavior (5 minutes, etc.)
  Frequency of behavior (4 times a week)
  Simple (ridiculously easy goals are an important place to start because small successes create momentum for bigger change)
  Feasible (same as simple)

Rewards
 Rewards are intended to be used each time the goal behavior is performed – not merely at the end of the week.  Using the memory goal above as an example, each day a person pays close attention for 30 seconds two times in a single day, she gets to put on a spray of her favorite perfume (maybe in preparation for dinner or the next morning).  She doesn’t have to wait the entire week to use her perfume.  If the perfume is part of her daily routine, then she can continue this routine provided she meet her goal each day.
 Here are some guidelines for rewards:
  Some people may need to take some time to think over their reward, so encourage them to come up with a reward very soon if they do not finish that in class
  Rewards should be small and feasible & it’s a good idea not to use a reward that will get in the way of some other health goal, such as cookies
  For a reward to be effective, the person must make an agreement with themselves that they will in no way get to have the reward without FIRST having achieved their small goal
  
  -->
        
        <p>{t}Please discuss how you plan to remember your goals and rewards and how you plan to track your progress on the Forum.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 slide #22 -->
    
    <div id="lesson-1-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr />
        <h4>{t}Forum Postings{/t}</h4>
        <p>{t}Please answer the following questions on the Forum. You can use the same thread to response to all of these questions.{/t}</p>
        <p>{t}Attempt to respond to these questions using the knowledge you gained from this Section. Please do not use the Internet or other sources to create your responses.{/t}</p>
        <ul>
          <li>{t}Alzheimer’s disease is caused by what?{/t}</li>
          <li>{t}What is cognitive reserve?{/t}</li>
          <li>{t}What is brain plasticity?{/t}</li>
          <li>{t}Do adult brains grow new brain cells?{/t}</li>
          <li>{t}Can brain pathways re-organize?{/t}</li>
          <li>{t}What is the term for the brain’s ability to change throughout life?{/t}</li>
          <li>{t}How will we be working to maximize contributions to our cognitive reserve?{/t}</li>
          <li>{t}Does a good memory depend on good attention?{/t}</li>
          <li>{t}How can you improve your attention?{/t}</li>
          <li>{t}Is multi-tasking more efficient than doing one thing at a time?{/t}</li>
          <li>{t}What are your goals for this week?{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Lesson{/t}</a></div>
    </div>
    
    <!-- this div is needed to close the  lesson --> 
  </div>
  
  <!-- Lesson 2 slide #1 -->
  
  <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Spencer Powell Brain Fitness Program online{/t}</h2>
        <hr />
        <h4>{t}Section 2{/t}</h4>
        <p>{t}test{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    
    <!-- Lesson 2 slide #2 -->
    
    <div id="lesson-2-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Section Outline{/t}</h2>
        <hr />
        <ol>
          <li>
            <h4>Check-in and Review</h4>
          </li>
          <li>
            <h4>Benefits of Physical Activity</h4>
          </li>
          <li>
            <h4>Memory Exercise</h4>
          </li>
          <li>
            <h4>Goal Setting</h4>
          </li>
        </ol>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"> {t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 2 slide #3 -->
    
    <div id="lesson-2-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Check-in{/t}</h2>
        <hr />
        <ul>
          <li>{t}How did your week go?{/t}</li>
          <li>{t}Did you think about anything you learned last week?{/t}</li>
          <li>{t}Did you log your activities?{/t}</li>
          <li>{t}Any questions about the CR Contribution Logs?{/t}</li>
          <li>{t}What is Cognitive Reserve?{/t}</li>
          <li>{t}How can knowing about this theory help you?{/t}</li>
          <li>{t}What was the Memory Strategy that you learned last week?{/t}</li>
          <li>{t}Did you have a chance to use it?{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"> {t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 2 slide #23 -->
    
    <div id="lesson-2-slide-23" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr />
        <h4>{t}Forum Postings{/t}</h4>
        <p>{t}Please answer the following questions on the Forum. You can use the same thread to response to all of these questions.{/t}</p>
        <p>{t}Attempt to respond to these questions using the knowledge you gained from this Section. Please do not use the Internet or other sources to create your responses.{/t}</p>
        <ul>
          <li>{t}What are some benefits of physical activity?{/t}</li>
          <li>{t}How does physical activity help your brain?{/t}</li>
          <li>{t}What are white dots?{/t}</li>
          <li>{t}Name 3 direct ways that physical activity seems to directly improve cognition.{/t}</li>
          <li>{t}What is the Memory Strategy for this week?{/t}</li>
          <li>{t}What are your goals for this week?{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Lesson{/t}</a></div>
    </div>
    
    <!-- this div is needed to close the  lesson --> 
  </div>
  
  <!-- need this final div to close the full course --> 
</div>
