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
				  'config' => array('width' => '90%',
									'height' => '90%',
									'arrows' => false,
									'autoSize' => false,
									'mouseWheel' => false))
	);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-courses.png'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
</div>
<div id="sidebar"> 
  
  <!-- SIDEBAR 1 -->
  
  <div class="box-sidebar one">
    <h3>Pre-Course Survey</h3>
    <br />
    <p id="surveynotify"><?php echo t('Complete the Pre-Course survey BEFORE participating. (Profile Page)'); ?></p>
    <br />
  </div>
  
  <!-- SIDEBAR 2 -->
  
  <div class="box-sidebar one">
    <h3>National Institute of Health (NIH)</h3>
    <p style="text-align:center;"><b><a href="http://trans.nih.gov/CEHP/" target="_blank"><?php echo t('Cognitive and Emotioinal Health Project: The Healthy Brain'); ?></a></b></p>
    <br />
    <img class="block-center" src="<?php echo $this->getImagesUrl('nihlogo.gif'); ?>" />
    <hr />
    <p><?php echo t('Three Institutes, the National Institute on Aging (NIA), the National Institute of Mental Health (NIMH) and the National Institute of Neurological Disorders and Stroke (NINDS), have joined efforts to launch a new trans-NIH initiative, Cognitive and Emotional Health Project: The Healthy Brain.'); ?>
    <p><?php echo t('There are now about 45 million Americans over age 60 and 117 million over age 40. Current evidence indicates that a large number of them are at substantial risk for cognitive impairment from many causes as they age. The same is true for emotional disorders.'); ?></p>
  </div>
  
  <!-- SIDEBAR 2 -->
  
  <div class="box-sidebar three">
    <h3>Pew Internet</h3>
    <p style="text-align:center;"><b><a href="http://www.pewinternet.org/Reports/2002/Vital-Decisions-A-Pew-Internet-Health-Report/Main-Report.aspx?view=all" target="_blank"><?php echo t('Main Report: The search for online medical help'); ?></a></b></p>
    <p><img class="block-center" src="<?php echo $this->getImagesUrl('pew.png'); ?>" /></p>
    <hr />
    <p><?php echo t('Vital Decisions: A Pew Internet Health Report'); ?></p>
    <p><?php echo t('Tens of millions of Americans turn to the Internet when they need help with health problems.  Health professionals are often apprehensive about the reliability of online health information and wonder how consumers can possibly find good advice in the untamed wilderness of the Internet.'); ?></p>
    <p><?php echo t('In an environment where any quack can create a credible-looking Web site and promote all manner of questionable “cures,” how can Internet users know what information will most benefit them? What signals of quality should they seek?'); ?></p>
  </div>
</div>

<!-- Start main content here -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t($course->title); ?></h2>
  <p><?php echo t($course->description); ?></p>
  <h4><?php echo t('Objectives'); ?></h4>
  <ul>
    <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  <h4><?php echo t('Course Lessons'); ?></h4>
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> <?php echo t('Overview of Brain Health'); ?> </a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> </li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> <?php echo t('Coming Soon'); ?> </a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> <?php echo t('Coming Soon'); ?> </a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> </li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> <?php echo t('Coming Soon'); ?> </a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> </li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> <?php echo t('Coming Soon'); ?> </a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> </li>
  </ul>
  <br />
  <br />
  <div class="box-white">
    <h4><?php echo t('Length'); ?></h4>
    <p><?php echo t('* Participant Access - 1 Year'); ?><br />
      <?php echo t('* Recommended Completion - 8 Weeks'); ?><br />
      <?php echo t('* Weekly Commitment - 1 Lesson @ 2 to 3 Hours'); ?></p>
  </div>
  <div class="box-white">
    <h4> <?php echo t('Resources'); ?></h4>
    <p><?php echo t('Please use these listed resources in the completion of this online course. Pleaes contact your instructor or the program director if you have additional resources you would like to see added here.'); ?></p>
    <p><a href="http://www.alz.org" target="_blank">Alzheimer's Association</a></p>
    <p><a href="http://www.nih.gov" target="_blank">National Intitute on Health (NIH)</a></p>
    <p><a href="http://www.webmd.com" target="_blank">WebMD website</a></p>
  </div>
  <div class="box-white">
    <h4><?php echo t('Facilitators &amp; Course Developers'); ?></h4>
    <h5><?php echo t('Content Designer: '); ?><a href="mailto:cobrien@matherlifeways.com"><?php echo t('Cate O\'Brien'); ?></a></h5>
    <p><?php echo t('Ms. O’Brien has worked in a research capacity for Mather LifeWays Institute on Aging since 2005. She has been responsible for designing and overseeing large-scale multi-year evaluations for grant-funded projects relating to the field of aging. As a Project Director on grant funded research projects, she has been responsible for forging collaborations with aging services organizations nationwide, and for recruiting older adults into various studies.'); ?></p>
    <h5><?php echo t('Course Developer: '); ?><a href="mailto:jwoodall@matherlifeways.com"><?php echo t('Jon Woodall'); ?></a></h5>
    <p><?php echo t('Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs. '); ?></p>
    <h5><?php echo t('Course Facilitator: '); ?><a href="mailto:sall@cogwellness.com"><?php echo t('Sherrie All, PhD'); ?></a></h5>
    <p><?php echo t('Licensed clinical neuropsychologist specializing in brain fitness, healthy aging and cognitive enhancement. She is building a private practice in clinical neuropsychological assessment combined with interventions aimed at enhancing cognition and promoting healthy aging. And has specialties in Neuropsychological Assessment, Individual and Group Psychotherapy, Brain Fitness and Healthy Aging Thearpy and Coaching'); ?></p>
  </div>
</div>

<!-- Lesson 1 - slide #1 -->

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
        <h2 class="flowers"><?php echo t('Spencer Powell Brain Fitness Program online'); ?></h2>
        <hr />
        <h4><?php echo t('THANK YOU!'); ?></h4>
        <p><?php echo t('Welcome and thank you for your interest and participation in the Spencer Powell Brain Fitness Program online course. We are excited to have your participation and look forward to our interactions! Please contact us if you need help, have questions, or suggestions for course improvements.'); ?></p>
        
        <p><?php echo t(' text here '); ?></p>
        
        <h5><?php echo t('Before we get started...'); ?></h5>
        
        <p><?php echo t('To the best of your ability, and without searching the Internet, please answer the following quetions. There are no wrong answers, and your feedback is anonoymous.'); ?></p>
        
        <div id="question1" class="question">
          <p><?php echo t('Are you prepared to take this online course?'); ?>
            <select>
              <option selected="selected" value="select"> <?php echo t('Select'); ?> </option>
              <option value="1"> <?php echo t('Yes'); ?> </option>
              <option value="0"> <?php echo t('No') ?> </option>
            </select>
          </p>
          <p class="right-answer hide" style="color:#000;"> <?php echo t('Great! Please begin. Good luck!'); ?> </p>
          <p class="wrong-answer hide"> <?php echo t('Please search the web for best practices in participating in a online course.'); ?> </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    
    <!-- Lesson 1 - slide #2 -->
    
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Overview of Brain Health'); ?></h2>
        <hr />
        <h2><?php echo t('Lesson Objectives'); ?></h2>
        <ul>
          <li><?php echo t('Overview of - '); ?></li>
          <ol>
            <li><?php echo t('Brain Health Now and Later'); ?></li>
            <li><?php echo t('Dementia and Cognitive Reserve'); ?></li>
            <li><?php echo t('Brain Plasticity'); ?></li>
            <li><?php echo t('Peak Performance'); ?></li>
          </ol>
          <li><?php echo t('Introduction to Program Format'); ?></li>
          <li><?php echo t('Memory Exercise'); ?></li>
          <li><?php echo t('Goal Setting'); ?></li>
        </ul>
        <h2><?php echo t('Brain Health new and Later'); ?></h2>
        <p><?php echo t('The world of brain health has exploded over the past decade with many new programs and applications emerging to help people think and perform better both now in their daily lives at work or at home and later in life as people age.  Maintaining independence later in life is a concern for many people, especially older adults, but even for younger people this can be a nagging concern.  Through the course of this program you will learn how investing in your brain health now can pay dividends both immediately and as you age.'); ?></p>
        <p><?php echo t('To describe some of the key concepts underlying the field of brain health, we will start by talking a bit about how to protect brain health as you age.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"> <?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #3 -->
    
    <div id="lesson-1-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Dementia and Cognitive Reserve'); ?></h2>
        <hr />
        <p><?php echo t('Many people think that dementia is a normal part of the aging process and that losing ones memory is just part of getting older. While some cognitive skills, such as reaction time and our ability to access words at times (what we think of as “senior moments”), do decline naturally with age, “dementia” is a decline in cognitive ability beyond the normal aging process, most likely due to disease or injury.'); ?></p>
        <p><?php echo t('Many people also think that if dementia is in their family they are destined to develop it at some point in their lives.  However, brain research is showing that the way people live their lives actually seems to account for as much or more of the risk for dementia than family history.  In fact for the typical late-onset form of Alzheimer’s disease, genes seem to only account for about 30% of the risk (that’s in contrast to early-onset Alzheimer’s, which occurs before age 65 and has a much stronger genetic component).  The rest of that 70% is made up of some other things that we can’t control such as environmental toxins, but within that 70% area there are a lot of things that we can control.'); ?></p>
        <p><?php echo t('This information is leading some doctors and scientists to start thinking of dementia as a preventable disease, similar to how we think of heart disease, cancer and Type II diabetes as preventable.
'); ?></p>
        <img src="<?php echo $this->getImagesUrl('DementiaNotInevitableImage.png'); ?>" width="400px" height="268px" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #4 -->
    
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Dementia'); ?></h2>
        <hr />
        <p><?php echo t('People often ask, “what is the difference between Alzheimer’s disease and dementia?”  Before we get too far, we should clarify that Alzheimer’s disease is a TYPE of dementia.  Dementia is an umbrella term used to describe any type of stable decline in cognitive abilities, severe enough to interrupt a person’s ability to function independently.  Dementia describes the observable symptoms of a brain disease or injury.'); ?></p>
        <p><?php echo t('Alzheimer’s is a disease process – a medical condition – that causes the cognitive changes that produce dementia.  There are many other medical conditions that cause dementia as well.'); ?></p>
        <p><?php echo t('The second most common disease that causes dementia is what we call cerebrovascular disease, which causes vascular dementia.  This includes any type of injury to the brain caused by a problem with the brain’s blood supply, most notably a stroke.  There are varying degrees of strokes, however.  You may have heard of TIA’s (or Transient Ischemic Attacks) or mini strokes.  The stroke process can also occur without any identifiable symptoms, causing what we call silent strokes.  You will learn more about these in the next session.'); ?></p>
        <p><?php echo t('Head trauma, Parkinson’s disease, Huntington Disease, Pick’s disease, infections such as HIV and CJD (Creutzfeldt-Jakob Disease – the human form of mad cow disease), substance abuse and environmental toxins can also cause dementia.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('SpencerLesson1Slides/SpencerLesson1Slide5.png'); ?>" width="500px" height="243px" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #5 -->
    
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Risk Factors are Interactive'); ?></h2>
        <hr />
        <p><?php echo t('We are also learning that most people who develop dementia tend to have more than one type of risk factor and may even have more than one disease process affecting their brains.  It may also be the case that one disease process, such as diabetes, may play a role in the formation of another disease process such as Alzheimer’s.  We know that hypertension (high blood pressure) is a common result of the pressure that diabetes puts on the vascular system.  We still have a lot to learn in this area, but we mention it here because there are a lot of things that we can do to lessen the effects of many of these disease conditions on our aging brains, which may help us ward off or delay the clinical symptoms of dementia.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('SpencerLesson1Slides/SpencerLesson1Slide6.png'); ?>" width="500px" height="276px" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #6 -->
    
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Cognitive Reserve:Your Brain’s 401K Account'); ?></h2>
        <hr />
        <p><?php echo t('One key way that we can lower our risk for dementia is through understanding and utilizing a theory that is central to this area of science, called the Theory of Cognitive Reserve.  You can think of this as your brain’s 401k or retirement account.'); ?></p>
        <p><?php echo t('Simply put, the Theory of Cognitive Reserve is based on observations that no 2 brains respond to injury or illness in exactly the same way.  There are people who can sustain a small amount of damage to their brains and lose a lot of brain function, and there are people who can sustain large amounts of damage and never develop dementia.  What seems to differentiate these types of people is the amount of brain reserve that they have “stored in the bank” that can make up for the losses.'); ?></p>
        <p><?php echo t('So when planning financially for retirement, if you have a lot invested in your retirement account, you can survive losses - such as fluctuations in the market or an unexpected expense - much better if your account is bigger than if it were smaller.  This principle seems to apply to our brains too, which serves as the basis for the theory of cognitive reserve.  People with high levels of Cognitive Reserve have to sustain many more losses before crossing over the threshold to having dementia than people who have lower reserve.'); ?></p>
        <p><?php echo t('The keyword to learn from this is “Cognitive Reserve” – which is your brain’s reserve of both tissue and abilities that affects your risk for dementia.  Or your Brain’s retirement account.
'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #7 -->
    
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Cognitive Reserve'); ?></h2>
        <hr />
        <p><?php echo t('A little over 10 years ago, Yakov Stern, PhD, a neuropsychologist at Columbia University, summarized a series of important brain discoveries and proposed the theory of Cognitive Reserve.  Since then, numerous studies have continued to support this theory, allowing us to now know many of the factors that can raise and lower a person’s risk for dementia.'); ?></p>
        <p><?php echo t('One of the first discoveries leading to the theory of cognitive reserve came after scientists noticed that a group of people who had donated their brains for autopsy showed signs of advanced Alzheimer’s disease in their brains even though at the time of their death they had no clinical signs of the disease.  In other words, these were people with fully intact memories who had remained quite independent, yet their brains looked exactly the same as the brains of people who had forgotten their families and could no longer care for themselves.'); ?></p>
        <p><?php echo t('The scientists wondered if there might be something different about the way these people had lived their lives that allowed them to resist the effects of the Alzheimer’s disease pathology that had grown in their brains.  It turned out that these people had been more active intellectually, socially and physically throughout their adult lives than the people in the other group.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #8 -->
    
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('The Adult Brain Grows New Cells'); ?></h2>
        <hr />
        <p><?php echo t('About 10 years after that autopsy study, another group of researchers studied the brains of people who had survived cancer through radiation treatment.  It turns out that after people go through radiation treatment, some of the genetic information in their cells changes.  By applying a special dye that is only attracted to cells with this new genetic data, researchers can see which cells had formed after the cancer.  They applied this dye to brain tissue on autopsy and were surprised to find cells in the brain that accepted the dye.  This meant that these cells had developed AFTER the radiation treatment.  Some of the people in this study well into their 80’s when they received the cancer treatment, so it seems that new brain cells are growing well into later life.  This evidence combined with other studies since this has changed the way we think about the adult brain; now we accept that the adult brain DOES grow new brain cells!'); ?></p>
        <p><?php echo t('Now this excitement has to be tempered a bit because brain cells do not grow at the same rate as say cells in your skin or your bones, so it is still harder for the brain to recover from injury.'); ?></p>
        <p><?php echo t('Nevertheless, it is exciting to know that we can still grow new brain cells.  This may actually be one of the mechanism by which we can learn new things as the region of the brain where these new brain cells grow – called the hippocampus – is the area responsible for forming new memories.'); ?></p>
        <p><?php echo t('The key word to learn from this is “neurogenesis,” meaning the growth of new brain cells.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #9 -->
    
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Brain Structures Also Grow with Experience'); ?></h2>
        <hr />
        <p><?php echo t('In addition to discovering the growth of new brain cells, over the last couple of decades, scientist have demonstrated that brain structures can grow in adulthood, which often seems to be the result of experience, or learning new things.'); ?></p>
        <p><?php echo t('In the late 1990’s a group of researchers started studying the brains of cab drivers in London.  This is an elite group of taxi drivers who have to complete a 3-4 year apprenticeship to learn the intricate routes within the 6-square mile are of central London (see map).  They literally call it “The Knowledge.”  75% of the people who start the apprenticeship drop out.  At first researchers noted that a region of the hippocampus responsible for spatial relations was larger in experienced drivers compared to other people.  After following new recruits over time, the same researchers observed that this region actually grew in the recruits who successfully completed the program.'); ?></p>
        <p><?php echo t('Developing such a specialized skill did come at a price, however, as other studies from the same group have shown that these taxi drivers perform worse on other tests of memory. This suggests that it is likely important to diversify your brain building activities. But the exciting part of all of this research is that it shows in a pretty clear way that the adult brain can grow –  that is actually change its structure in a positive direction – through experience.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #10 -->
    
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Brain Cells Form New Connections'); ?></h2>
        <hr />
        <p><?php echo t('The adult brain also changes in another way.  The brain cells you already have as well as the new ones you are growing, can also form new connections.  These connections are referred to as “pathways,” and just like with your muscles, the stronger a pathway becomes, the bigger it gets.'); ?></p>
        <p><?php echo t('The connections between brain cells, at the ends of the pathways, are called synapses, and “synaptic density” can be increased by learning new things and performing new skills.'); ?></p>
        <p><?php echo t('Pathways and synapses can also rewire, diverting their resources to different regions following an injury.'); ?></p>
        <p><?php echo t('All of this “malleability” in the wiring of brain cells is called “plasticity.”'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #11 -->
    
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Cells that Fire Together, Wire Together'); ?></h2>
        <hr />
        <p><?php echo t('This phenomenon was first described in the 1940’s by a scientist named Donald Hebb, and the process has since been termed Hebb’s Law, which is often paraphrased as, “cells that fire together, wire together.”  So anytime you practice a new skill, the brain cells required to perform that skill will fire together, meaning they will both produce an electrical charge, which over time will change the structure of the synapse and allow the cells to be “wired together” or more likely to excite one another when one is excited.'); ?></p>
        <p><?php echo t('The technical names for the “rewiring process” are called Long Term Potentiation (LTP) and Long Term Depression (LTD).  LTP we already understand, that cells that fire together build stronger connections.  LTD explains what we call negative plasticity or the “use it or lose it” phenomenon, meaning that when cells are not firing together, when you are not practicing a particular skill, the connections become weaker over time.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #12 -->
    
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Your Brain’s 401K'); ?></h2>
        <hr />
        <p><?php echo t('Now that we know that a lot of the things we do throughout our lives affects our susceptibility to dementia, we can utilize the principles of Cognitive Reserve Theory to maximize our investments in our Brain’s retirement account.'); ?></p>
        <p><?php echo t('Disclaimer!!!  We want to emphasize that there are still risk factors that we cannot control, so living a brain healthy lifestyle does not guarantee that you will not get dementia, just like living a heart healthy lifestyle doesn’t guarantee you won’t have a heart attack.'); ?></p>
        <p><?php echo t('However, this program will help you understand the things you can do that may lower the risk for dementia or postpone cognitive decline in the hopes that you will maintain independence for as long as possible.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #13 -->
    
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Peak Performance!'); ?></h2>
        <hr />
        <p><?php echo t('We’ve talked a lot today about protecting your brain from dementia, but this program will also focus on helping you get the most out of your brain today, which can help you both at work and at home.  You will be learning strategies to remember things better, to be more organized, to pay closer attention and to regulate your emotions.  Some of the strategies will come to you directly through the memory tips that you will learn in sessions 2-7 and the lifestyle demonstrations we will present each week.  Other strategies will come to you indirectly as you practice the exercises included in both the program homework assignments and the brain training software we are providing.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('SpencerLesson1Slides/SpencerLesson1Slide14.png'); ?>" width="500px" height="276px" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #14 -->
    
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Let’s Give Ourselves a Break'); ?></h2>
        <hr />
        <p><?php echo t('Before we get into the specifics of what you will be doing for the next few weeks, let’s take a moment to give ourselves a little break. Not an actual break from the session, but rather let’s take a moment to go over some myths and misconceptions that older adults tend to have about their memories.'); ?></p>
        <p><?php echo t('Because dementia is such a great concern among older adults, many people forget that it’s normal to forget things. You’ve been forgetting things all your life! It’s just that when you were 25 years old, you didn’t care so much because you didn’t interpret the forgetting as a signal that you may be on the path to losing your independence.'); ?></p>
        <p><?php echo t('It is also a myth that people can remember everything.  You may have heard of these “memory champions” who can remember several decks of cards just by seeing them flipped over one at a time or about people with photographic memories.  Well the memory champions train like professional athletes, hours on end, day after day for months to develop their craft, but it doesn’t really seem to help them get better at much of anything else.  And most of the people with photographic memories are savants whose incredible gifts are often accompanied by severe handicaps in other areas of day-to-day living.'); ?></p>
        <p><?php echo t('So let’s all just have reasonable expectations of our memories.  If you forget something, try and relax.  That may even help you remember since, as you will learn in a few weeks, being upset can arrest our thinking.'); ?></p>
        <p><?php echo t('Over the next few weeks you will be working on some techniques to remember things better, and with a fair amount of effort and practice you can improve your thinking, but there is no magic bullet, no miracle cure, and no special pill to give us perfect thinking.'); ?></p>
        <p><?php echo t('Nor is it likely that your memory is really as bad as you think.  On that note, however, if you really are concerned about your thinking, we encourage you to talk with your doctor if you have not done so already.'); ?></p>
        <img src="<?php echo $this->getImagesUrl('SpencerLesson1Slides/SpencerLesson1Slide15.png'); ?>" width="500px" height="276px" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #15 -->
    
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Program Format'); ?></h2>
        <hr />
        <p><?php echo t('During each of the next few weeks, you will learn the details of how each of these five areas of wellness affect your risk for dementia.  You will learn the science supporting the connection between your brain health and each area of wellness.'); ?></p>
        <p><?php echo t('We aim to help you identify areas of your lifestyle where you could increase your investment in your Cognitive Reserve, diversifying your “Brain Portfolio.”'); ?></p>
        <img src="<?php echo $this->getImagesUrl('SpencerLesson1Slides/SpencerLesson1Slide15.png'); ?>" width="500px" height="276px" /> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #16 -->
    
    <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Memory Strategy Exercise'); ?></h2>
        <hr />
        <p><?php echo t('text here'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    
    <!-- Lesson 1 - slide #17 -->
    
    <div id="lesson-1-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Setting Goals'); ?></h2>
        <hr />
        <p><?php echo t('text here'); ?></p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
    </div>
    
    <!-- this div is needed to close the final lesson --> 
  </div>
  
  <!-- need this final div to close the full course --> 
</div>
