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
		'.lesson-7',
		'.lesson-8') as $lesson)
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

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('spencer/126945521r.jpeg'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
</div>
<div id="sidebar">
  <div class="box-sidebar one" style="background-color:#FFF;">
    <h3>{t}Evaluations - Coming Soon!{/t}</h3>
    <br />
    <script>
function myFunction(){
alert("Coming Soon!");
}
</script>
    <p>
      <input type="button" style="width:175px;" onclick="myFunction()" value="Pre-Course Evaluation" />
    </p>
    <p>
      <input type="button" style="width:175px;" onclick="myFunction()" value="Post-Course Evaluation" />
    </p>
    <br />
    <img src="<?php echo $this->getImagesUrl('msml/153075496.png'); ?>" alt="image"> </div>
  <div class="box-sidebar one" style="background-color:#FFF;">
    <h3>{t}Module Activity Log{/t}</h3>
    <br />
    <p>
      <input type="button" style="width:100px;" onclick="myFunction()" value="Week 1" />
      {t} - Introduction{/t} </p>
    <p>
      <input type="button" style="width:100px;" onclick="myFunction()" value="Week 2" />
      {t} - Physical Activity{/t} </p>
    <p>
      <input type="button" style="width:100px;" onclick="myFunction()" value="Week 3" />
      {t} - Emotional{/t} </p>
    <p>
      <input type="button" style="width:100px;" onclick="myFunction()" value="Week 4" />
      {t} - Intellectual{/t} </p>
    <p>
      <input type="button" style="width:100px;" onclick="myFunction()" value="Week 5" />
      {t} - Nutritional{/t} </p>
    <p>
      <input type="button" style="width:100px;" onclick="myFunction()" value="Week 6" />
      {t} - Spiritual{/t} </p>
    <p>
      <input type="button" style="width:100px;" onclick="myFunction()" value="Week 7" />
      {t} - Social{/t} </p>
    <p>
      <input type="button" style="width:100px;" onclick="myFunction()" value="Week 8" />
      {t} - Closing{/t} </p>
    <p>&nbsp;</p>
  </div>
  <div class="box-sidebar one">
    <h3>Coming Soon!</h3>
    <h5 style="text-align:center;">&nbsp;</h5>
    <p>&nbsp;</p>
    <hr />
    <p>{t}Coming Soon!{/t}</p>
  </div>
  <div class="box-sidebar one">
    <h3>Coming Soon!</h3>
    <h5 style="text-align:center;">&nbsp;</h5>
    <p>&nbsp;</p>
    <hr />
    <p>{t}Coming Soon!{/t}</p>
  </div>
</div>

<!-- start main content -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t($course->title); ?></h2>
  <p><?php echo t($course->description); ?></p>
  <p style="color:#E80000;">{t}<strong>Disclaimer: </strong>We want to emphasize that there are still risk factors that we cannot control, so living a brain healthy lifestyle does not guarantee that you will not get dementia, just like living a heart healthy lifestyle does not guarantee you won’t have a heart attack.{/t}</p>
  <h5>{t}Independent Study / One-Year Access{/t}</h5>
  <h4>{t}Objectives{/t}</h4>
  <ul>
    <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  
  <!-- course lesson list start here -->
  <h4>{t}Modules{/t}</h4>
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> {t}Introduction{/t}</a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a> </li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> {t}Physical Activity{/t}</a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-11" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-12" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-13" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-14" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-15" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-16" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-17" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-18" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-19" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-20" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-21" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-22" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-23" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> {t}Emotional{/t}</a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a></li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> {t}Intellectual{/t}</a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> {t}Nutritional{/t}</a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
    
    <li> 
    <a href="#lesson-6-slide-1" data-fancybox-group="lesson-6" class="teal lesson-6"> {t}Spiritual{/t}</a> 
    <a href="#lesson-6-slide-2" data-fancybox-group="lesson-6" class="hide lesson-6"></a> 
    <a href="#lesson-6-slide-3" data-fancybox-group="lesson-6" class="hide lesson-6"></a> 
    <a href="#lesson-6-slide-4" data-fancybox-group="lesson-6" class="hide lesson-6"></a> 
    <a href="#lesson-6-slide-5" data-fancybox-group="lesson-6" class="hide lesson-6"></a></li>
    
    <li> 
    <a href="#lesson-7-slide-1" data-fancybox-group="lesson-7" class="teal lesson-7"> {t}Social{/t}</a> 
    <a href="#lesson-7-slide-2" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 
    <a href="#lesson-7-slide-3" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 
    <a href="#lesson-7-slide-4" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 
    <a href="#lesson-7-slide-5" data-fancybox-group="lesson-7" class="hide lesson-7"></a></li>
    
    <li> 
    <a href="#lesson-8-slide-1" data-fancybox-group="lesson-8" class="teal lesson-8"> {t}Closing{/t}</a> 
    <a href="#lesson-8-slide-2" data-fancybox-group="lesson-8" class="hide lesson-8"></a> 
    <a href="#lesson-8-slide-3" data-fancybox-group="lesson-8" class="hide lesson-8"></a> 
    <a href="#lesson-8-slide-4" data-fancybox-group="lesson-8" class="hide lesson-8"></a> 
    <a href="#lesson-8-slide-5" data-fancybox-group="lesson-8" class="hide lesson-8"></a></li>
  </ul>
  <div class="box-white" id="resources">
    <h4> {t}Resources{/t}</h4>
    <p>{t}Please use these listed resources in the completion of this online course. Please contact your facilitator or the program director if you have additional resources you would like to see added here.{/t}</p>
    <ul>
      <li><a href="http://www.mindful.org/" target="_blank">Mindful - taking time for what matters</a> (Emotional, Spiritual and Closing)</li>
      <li><a href="http://www.psychologytoday.com/basics/mindfulness" target="_blank">Psychologytoday</a> (Emotional, Spiritual and Closing)</li>
      <li><a href=" http://www.ncbi.nlm.nih.gov/pubmedhealth/PMH0008821/" target="_blank">PubMed Health</a> (Introduction)</li>
      <li><a href="http://www.bis.gov.uk/foresight/our-work/projects/published-projects/mental-capital-and-wellbeing/reports-and-publications" target="_blank">Foresight</a> (Intellectual)</li>
      <li><a href="http://cognitivetherapyonline.com/" target="_blank">Cognitive Therapy Online</a> (Emotional)</li>
      <li><a href="http://www.cognitivebehavioraltherapyonline.com/index.php" target="_blank">FixMyThinking.com</a> (Emotional)</li>
      <li><a href="http://www.nih.gov/health/wellness/" target="_blank">National Institutes of Health</a> (All Modules)</li>
      <li><a href="http://sharpbrains.com/" target="_blank">SharpBrains</a> (Introduction and Intellectual)</li>
      <li><a href="http://go4life.nia.nih.gov/" target="_blank">Go4Life</a> (Physical Activity)</li>
      <li><a href="http://www.nlm.nih.gov/medlineplus/nutrition.html" target="_blank">NIH</a> (Nutitrion)</li>
    </ul>
  </div>
  <div class="box-white" id="developers">
    <h4>{t}Course Contacts{/t}</h4>
    <h5>{t}Content Designer:{/t} <span class="name">Cate O'Brien</span></h5>
    <p>{t}Ms. O’Brien has worked in a research capacity for Mather LifeWays Institute on Aging since 2005. She has been responsible for designing and overseeing large-scale multi-year evaluations for grant-funded projects relating to the field of aging. As a Project Director on grant funded research projects, she has been responsible for forging collaborations with aging services organizations nationwide, and for recruiting older adults into various studies.{/t}</p>
    <span class="h5">{t}Developer:{/t}</span> <span class="name">Jon Woodall</span>
    <p>{t}Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs.{/t}</p>
    <span class="h5">{t}Facilitator:{/t}</span> <span class="name">Sherrie All, PhD</span>
    <p>{t}Licensed clinical neuropsychologist specializing in brain fitness, healthy aging and cognitive enhancement. She is building a private practice in clinical neuropsychological assessment combined with interventions aimed at enhancing cognition and promoting healthy aging. And has specialties in Neuropsychological Assessment, Individual and Group Psychotherapy, Brain Fitness and Healthy Aging Therapy, and Coaching{/t}</p>
  </div>
</div>
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
        <h2 class="flowers">{t}Spencer Powell Brain Fitness Program online{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Welcome!{/t}</h4>
        <p>{t}Welcome and thank you for your interest and participation in the <strong>Spencer Powell Brain Fitness Program</strong> online course. We are excited to have your participation and look forward to our interactions! Please contact us if you need help, have questions, or suggestions for course improvements.{/t}</p>
        <h4>{t}Course Description{/t}</h4>
        <p>{t}<strong>The Spencer Powell Brain Fitness Program</strong> is designed to promote cognitive health and healthy lifestyle changes. The course provides information on how lifestyle factors such as physical activity and cognitive engagement affect your brain and your risk for dementia. Practical strategies are suggested for maintaining memory over time. In addition, the course includes memory training such as chunking, the story method, and mnemonic techniques.{/t}</p>
        <div id="question1" class="question">
          <p style="text-align:center;"><b>{t}Have you taken the pre-course evaluation yet?{/t}</b><br />
            <select style="text-align:center;">
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Great! Thank you! Please continue.{/t} </p>
          <p class="wrong-answer hide"> {t}Please return to this course's home page and complete the pre-course evaluation. It is accessible via the sidebar.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}YouTube - The Brain Fitness Program{/t}</h2>
        <hr />
        <h4>{t}The Brain Fitness Program on PBS{/t}</h4>
        <p>{t}This short video will provide  you with a first look at some of the exciting new discoveries about  neuroplasticity (the ability of the adult brain to change itself) that form the  foundation of this course.  You may have  already seen this popular PBS special, which helped pave the way for many  incredible advances, including this course, that can help you strengthen your  brain and lower your risk for dementia.{/t}
        </p>
        <iframe style="width:480px; height:360px; display:block; margin: 15px auto;" src="//www.youtube.com/embed/WBSNQi4es5k?rel=0" frameborder="0" allowfullscreen></iframe>
        <p class="forum">{t}Before you begin, please introduce yourself on the Forum to your facilitator and other participants. Click here to access it. Once opened, leave it open as you will post to it throughout this course.{/t}</p>
        <!-- 'url' => Yii::app()->getComponent('phpBB')->getForumUrl(), --> 
        
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"> {t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Module Outline{/t}</h2>
        <hr />
                <img src="<?php echo $this->getImagesUrl('spencer/121346445.png'); ?>" alt="{t{Image{/t}">

        <h4>{t}Module One - Introduction:{/t}</h4>
        <ol>
          <li>
            <h5>{t}Overview{/t}</h5>
          </li>
          <ul>
            <li>{t}Brain Health Now and Later{/t}</li>
            <li>{t}Dementia and Cognitive Reserve{/t}</li>
            <li>{t}Brain Plasticity{/t}</li>
            <li>{t}Peak Performance{/t}</li>
          </ul>
          <li>
            <h5>{t}Introduction to Program Format{/t}</h5>
          </li>
          <li>
            <h5>{t}Memory Exercise{/t}</h5>
          </li>
          <li>
            <h5>{t}Goal Setting{/t}</h5>
          </li>
        </ol>
        <div id="question1" class="question">
          <p style="text-align: center;"><b>{t}Have you ever taken a online course before?{/t}</b><br />
            <select style="text-align: center;">
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Great! Please continue.{/t} </p>
          <p class="wrong-answer hide"> {t}Please visit this <a href="http://student.worldcampus.psu.edu/academic-support-resources/tips-for-being-a-successful-world-campus-student" target="_blank">website</a> for tips on being successful in a online course.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"> {t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Health{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/154418413.png'); ?>" alt="{t}Image{/t}">
        <p>{t}The world of brain health has exploded over the past decade with many new programs and applications emerging to help people think and perform better both now in their daily lives at work or at home and later in life as people age.  Maintaining independence later in life is a concern for many people, especially older adults, but even for younger people this can be a nagging concern.  Through the course of this program you will learn how investing in your brain health now can pay dividends both immediately and as you age.{/t}</p>
        <p>{t}To describe some of the key concepts underlying the field of brain health, we will start by talking a bit about how to protect brain health as you age.{/t}</p>
        <p class="forum">{t}What healthy activities do you currently engage in to specifically boost your brain health? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Dementia is not inevitable{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/161824211.png'); ?>" alt="{t}Image{/t}">
        <p>{t}Many people think that dementia is a normal part of the aging process and that losing ones memory is just part of getting older. While some cognitive skills, such as reaction time and our ability to access words at times (what we think of as “senior moments”), do decline naturally with age, “dementia” is a decline in cognitive ability beyond the normal aging process, most likely due to disease or injury.{/t}</p>
        <p>{t}Many people also think that if dementia is in their family they are destined to develop it at some point in their lives.  However, brain research is showing that the way people live their lives actually seems to account for as much or more of the risk for dementia than family history. In fact for the typical late-onset form of Alzheimer’s disease, genes seem to only account for about 30% of the risk (that’s in contrast to early-onset Alzheimer’s, which occurs before age 65 and has a much stronger genetic component). The rest of that 70% is made up of some other things that we can’t control such as environmental toxins, but within that 70% area there are a lot of things that we can control.{/t}</p>
        <p>{t}This information is leading some doctors and scientists to start thinking of<strong> dementia as a preventable disease</strong>, similar to how we think of heart disease, cancer and Type II diabetes as preventable.{/t}</p>
        <p>&nbsp; </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Dementia{/t}</h2>
        <hr />
        <p>{t}People often ask, “what is the difference between Alzheimer's disease and dementia?”  Before we get too far, we should clarify that Alzheimer’s disease is a TYPE of dementia. <strong>Dementia</strong> is an umbrella term used to describe any<strong> type of stable decline in cognitive abilities, severe enough to interrupt a person’s ability to function independently</strong>. Dementia describes the observable symptoms of a brain disease or injury.{/t}</p>
        <p>{t}<strong>Alzheimer’s is a disease process</strong> – a medical condition – that causes the cognitive changes that produce dementia.  There are many other medical conditions that cause dementia as well.{/t}</p>
        <p>{t}The second most common disease that causes dementia is what we call cerebrovascular disease, which causes vascular dementia.  This includes any type of injury to the brain caused by a problem with the brain’s blood supply, most notably a stroke.  There are varying degrees of strokes, however.  You may have heard of TIA’s (or Transient Ischemic Attacks) or mini strokes.  The stroke process can also occur without any identifiable symptoms, causing what we call silent strokes.  You will learn more about these in the next session.{/t}</p>
        <p>{t}Head trauma, Parkinson’s disease, Huntington Disease, Pick’s disease, infections such as HIV and CJD (Creutzfeldt-Jakob Disease – the human form of mad cow disease), substance abuse and environmental toxins can also cause dementia.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Risk Factors are Interactive{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/95357641.png'); ?>" alt="{t}Image{/t}">
        <p>{t}We are also learning that most people who develop dementia tend to have more than one type of risk factor and may even have more than one disease process affecting their brains.  It may also be the case that one disease process, such as diabetes, may play a role in the formation of another disease process such as Alzheimer’s.{/t}</p>
        <p>{t}We know that hypertension (high blood pressure) is a common result of the pressure that diabetes puts on the vascular system.  We still have a lot to learn in this area, but we mention it here because there are a lot of things that we can do to lessen the effects of many of these disease conditions on our aging brains, which may help us ward off or delay the clinical symptoms of dementia.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cognitive Reserve: Your Brain's 401K Account{/t}</h2>
        <hr />
        <p>{t}One key way that we can lower our risk for dementia is through understanding and utilizing a theory that is central to this area of science, called the <strong>Theory of Cognitive Reserve</strong>.  You can think of this as your brain’s 401k or retirement account.{/t}</p>
        <p>{t}Simply put, the Theory of Cognitive Reserve is based on observations that <strong>no 2 brains respond to injury or illness in exactly the same way</strong>.  There are people who can sustain a small amount of damage to their brains and lose a lot of brain function, and there are people who can sustain large amounts of damage and never develop dementia. <strong>What seems to differentiate these types of people is the amount of brain reserve that they have “stored in the bank” that can make up for the losses</strong>.{/t}</p>
        <p>{t}So when planning financially for retirement, if you have a lot invested in your retirement account, you can survive losses - such as fluctuations in the market or an unexpected expense - much better if your account is bigger than if it were smaller.  This principle seems to apply to our brains too, which serves as the basis for the theory of cognitive reserve.  People with high levels of Cognitive Reserve have to sustain many more losses before crossing over the threshold to having dementia than people who have lower reserve.{/t}</p>
        <p>{t}The keyword to learn from this is “Cognitive Reserve” – which is your<strong> brain’s reserve of both tissue and abilities</strong> that affects your risk for dementia.  Or your Brain’s retirement account.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}More on Cognitive Reserve{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/153211616.png'); ?>" alt="{t}Image{/t}">
        <p>{t}A little over 10 years ago, Yakov Stern, PhD, a neuropsychologist at Columbia University, summarized a series of important brain discoveries and proposed the theory of Cognitive Reserve.  Since then, numerous studies have continued to support this theory, allowing us to now know many of the factors that can raise and lower a person’s risk for dementia.{/t}</p>
        <p>{t}One of the first discoveries leading to the theory of cognitive reserve came after scientists noticed that a group of people who had donated their brains for autopsy showed signs of advanced Alzheimer’s disease in their brains even though at the time of their death they had no clinical signs of the disease.  In other words, these were people<strong> with fully intact memories who had remained quite independent, yet their brains looked exactly the same as the brains of people who had forgotten their families and could no longer care for themselves</strong>.{/t}</p>
        <p>{t}The scientists wondered if there might be something different about the way these people had lived their lives that allowed them to resist the effects of the Alzheimer’s disease pathology that had grown in their brains.  It turned out that<strong> these people had been more active intellectually, socially and physically throughout their adult lives than the people in the other group</strong>.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Adult Brain Grows New Cells{/t}</h2>
        <hr />
        <p>{t}About 10 years after that autopsy study, another group of researchers studied the brains of people who had survived cancer through radiation treatment.  It turns out that after people go through radiation treatment, some of the genetic information in their cells changes.  By applying a special dye that is only attracted to cells with this new genetic data, researchers can see which cells had formed after the cancer.  They applied this dye to brain tissue on autopsy and were surprised to find cells in the brain that accepted the dye.  This meant that these <strong>cells had developed AFTER the radiation treatment.{/t}</strong></p>
        <p><strong>{t}Some of the people in this study well into their 80’s when they received the cancer treatment, so it seems that new brain cells are growing well into later life</strong>.  This evidence combined with other studies since this has changed the way we think about the adult brain;<strong> now we accept that the adult brain DOES grow new brain cells</strong>!{/t}</p>
        <p>{t}Now this excitement has to be tempered a bit because<strong> brain cells do not grow at the same rate as say cells in your skin or your bones</strong>, so it is still harder for the brain to recover from injury.{/t}</p>
        <p>{t}Nevertheless, it is exciting to know that we can still grow new brain cells.  This may actually be one of the<strong> mechanism by which we can learn new things as the region of the brain where these new brain cells grow – called the hippocampus – is the area responsible for forming new memories</strong>.{/t}</p>
        <p>{t}The key word to learn from this is “neurogenesis,” meaning the growth of new brain cells.{/t}</p>
        <div id="question3" class="question">
          <p style="text-align: center;"><b>{t}"Neurogenesis” means the growth of new brain cells.{/t}</b><br />
            <select style="text-align: center;">
              <option selected="selected" value="select"> {t}Select{/t} </option>
              <option value="1"> {t}Yes{/t} </option>
              <option value="0"> {t}No{/t} </option>
            </select>
          </p>
          <p class="right-answer hide"> {t}Correct! "Neurogenesis” means the growth of new brain cells.{/t} </p>
          <p class="wrong-answer hide"> {t}Please review this slide again, and ensure you understand what "neurogenesis" is before you continue.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Structures Also Grow with Experience{/t}</h2>
        <hr />
        <p><img src="<?php echo $this->getImagesUrl('spencer/120133005.png'); ?>" alt="{t}Image{/t}"></p>
        <p>{t}In addition to discovering the growth of new brain cells, over the last couple of decades, scientist have demonstrated that<strong> brain structures can grow in adulthood, which often seems to be the result of experience, or learning new things</strong>.{/t}</p>
        <p>{t}In the late 1990’s a group of researchers started studying the brains of cab drivers in London.  This is an elite group of taxi drivers who have to complete a 3-4 year apprenticeship to learn the intricate routes within the 6-square mile are of central London (see map).  They literally call it <strong>“The Knowledge.” 75% of the people who start the apprenticeship drop out</strong>.{/t}</p>
        <p>{t}At first researchers noted that a<strong> region of the hippocampus responsible for spatial relations was larger in experienced drivers compared to other people</strong>.  After following new recruits over time, the same researchers observed that<strong> this region actually grew in the recruits who successfully completed the program</strong>.{/t}</p>
        <p>{t}Developing such a specialized skill did come at a price, however, as other studies from the same group have shown that these taxi drivers perform worse on other tests of memory. This suggests that it is<strong> likely important to diversify your brain building activities</strong>. But the exciting part of all of this research is that it shows in a pretty clear way that the <strong>adult brain can grow –  that is actually change its structure in a positive direction – through experience</strong>.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Cells Form New Connections{/t}</h2>
        <hr />
        <p><img src="<?php echo $this->getImagesUrl('spencer/160382211.png'); ?>" alt="{t}Image{/t}"></p>
        <p>{t}The adult brain also changes in another way.  The brain cells you already have as well as the new ones you are growing, can also form new connections.  These connections are referred to as “<strong>pathways</strong>,” and just like with your muscles,<strong> the stronger a pathway becomes, the bigger it gets</strong>.{/t}</p>
        <p>{t}The connections between brain cells, at the ends of the pathways, are called <strong>synapses</strong>, and “<strong>synaptic density</strong>”<strong> can be increased by learning new things and performing new skills</strong>.{/t}</p>
        <p>{t}<strong>Pathways and synapses can also rewire</strong>, diverting their resources to different regions following an injury.{/t}</p>
        <p>{t}All of this “<strong>malleability</strong>”<strong> in the wiring of brain cells</strong> is called <strong>“plasticity</strong>.”{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cells that Fire Together, Wire Together{/t}</h2>
        <hr />
        
        
     
        
        
        <p>{t}This phenomenon was first described in the 1940’s by a scientist named Donald Hebb, and the process has since been termed Hebb’s Law, which is often <strong>paraphrased</strong> as, “<strong>cells that fire together, wire together</strong>.”  So anytime you practice a new skill, the brain cells required to perform that skill will fire together, meaning they will both produce an electrical charge, which over time will change the structure of the synapse and allow the cells to be “wired together” or more likely to excite one another when one is excited.{/t}</p>
        <p>{t}The technical names for the “rewiring process” are called <strong>Long Term Potentiation (LTP)</strong> and<strong> Long Term Depression (LTD)</strong>.<strong> LTP</strong> we already understand, that<strong> cells that fire together build stronger connections</strong>.<strong> LTD</strong> explains what we call negative plasticity or the “<strong>use it or lose it</strong>” phenomenon, meaning that when cells are not firing together, when you are not practicing a particular skill, the connections become weaker over time.{/t}</p>
        <p style="text-align:center;">
          <iframe width="480" height="360" src="//www.youtube.com/embed/jSE703UokZY?rel=0" frameborder="0" allowfullscreen></iframe>
        </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Your Brain’s 401K{/t}</h2>
        <hr />
        <table style="width:100%; margin: 15px auto; border:3;">
          <tr style="text-align:center;">
            <th><strong>Minimize Losses</strong></th>
            <th><strong>Maximize Contributions</strong></th>
          </tr>
          <tr>
            <td>Prevent or slow disease processes</td>
            <td>Maximize new brain cell growth</td>
          </tr>
          <tr>
            <td>Avoid brain injury</td>
            <td>Grow new connections between brain cells</td>
          </tr>
          <tr>
            <td>Reduce stress</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <p>{t}Now that we know that a lot of the things we do throughout our lives affects our susceptibility to dementia, we can utilize the principles of Cognitive Reserve Theory to <strong>maximize our investments in our Brain’s retirement account</strong>.{/t} </p>
        <p>{t}However, this course will help you understand the things you can do that may lower the risk for dementia or postpone cognitive decline in the hopes that you will maintain independence for as long as possible.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Peak Performance!{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/165431293.png'); ?>" alt="{t}Image{/t}">
        <p>{t}We have talked a lot about protecting your brain from dementia, but this program will also focus on helping you get the most out of your brain today, which can help you both at work and at home.  You will be learning strategies to remember things better, to be more organized, to pay closer attention and to regulate your emotions.{/t}</p>
        <p>{t}Some of the strategies will come to you directly through the memory tips that you will learn in modules 2-7 and the lifestyle demonstrations we will present in each module.  Other strategies will come to you indirectly as you practice the exercises included in both the course assignments and the brain training software being providing.{/t}</p>
        <p class="forum">{t}
          Without searching the Internet, what activities do you engage in to help you get the most out of your brain? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Program Format{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/140238058.png'); ?>" alt="{t}Image{/t}">
        <p style="font-size:24px; text-align:center;">{t}Physical Activity{/t}</p>
        <p style="font-size:24px; text-align:center;">{t}Social Engagement{/t}</p>
        <p style="font-size:24px; text-align:center;">{t}Intellectual Engagement{/t}</p>
        <p style="font-size:24px; text-align:center;">{t}Nutrition{/t}</p>
        <p style="font-size:24px; text-align:center;">{t}Emotional Wellbeing{/t}</p>
        <p>{t}During each of the next few modules, you will learn the details of how each of these five areas of wellness affect your risk for dementia.  You will learn the science supporting the connection between your brain health and each area of wellness.{/t}</p>
        <p>{t}We aim to help you identify areas of your lifestyle where you could increase your investment in your Cognitive Reserve, diversifying your “Brain Portfolio.”{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}CR Contributions Logs{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/140388847.png'); ?>" alt="{t}Image{/t}">
        <p>{t}Knowing if we are doing enough for our brains can be a challenge, so in an effort to help you take account of your brain healthy activities, we created the CR (Cognitive Reserve) Contribution Log.  You would not expect to invest in your financial retirement account without keeping track of your investments would you?  With this log you can get a better idea of how you’re investing in your brain health, and if you choose to increase your investment, you can monitor that too, watching your gains grow over time.{/t}</p>
        <h4>{t}How it works{/t}</h4>
        <p>{t}We are providing you with a Menu of brain healthy activities that converts your activities to CR Contribution units.  The Menu is available on the main course page, in the right sidebar.  It makes your activities easier to quantify, therefore making it easier to see the gains that you are making each week in Maximizing your CR Contributions.{/t}</p>
        <p>{t}The Menu is broken up into three sections, the top section are standard brain healthy activities, the second section has a list of all of the brain healthy activities that are provided at this facility, the third section includes some blank paces for you to add your own, customized brain healthy activities.  The menu also has suggested domains for each activity, but the domain that you feel the activity best fits is entirely up to you.  Some people think that going for a walk is purely for exercise, but others see the connection with nature as a spiritual experience.  This is for you to decide.{/t}</p>
        <h4>{t}What to do:{/t}</h4>
        <p>{t}<strong>In this module, we would like for you to get started in logging your brain healthy activities.  This will give you an idea of your baseline, and will help you know where you want to add when it comes time to set goals</strong>. Your Activity log can be accessed on the course home page in the right sidebar.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    
      <div id="lesson-1-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Let’s Give Ourselves a Break{/t}</h2>
        <hr />
        <p>{t}Before we get into the specifics of what you will be doing for the next few modules, let’s take a moment to give ourselves a little break. Not an actual break from the course, but rather let’s take a moment to go over some<strong> myths and misconceptions that older adults tend to have about their memories</strong>.{/t}</p>
        <p>{t}Because dementia is such a great concern among older adults, <strong>many people forget that it’s normal to forget things</strong>. You’ve been forgetting things all your life! It’s just that when you were 25 years old, you didn’t care so much because you didn’t interpret the forgetting as a signal that you may be on the path to losing your independence.{/t}</p>
        <p>{t}<strong>It is also a myth that people can remember everything</strong>.  You may have heard of these “memory champions” who can remember several decks of cards just by seeing them flipped over one at a time or about people with photographic memories.  Well the memory champions train like professional athletes, hours on end, day after day for months to develop their craft, but it doesn’t really seem to help them get better at much of anything else.  And most of the people with photographic memories are savants whose incredible gifts are often accompanied by severe handicaps in other areas of day-to-day living.{/t}</p>
        <p>{t}So<strong> let’s all just have reasonable expectations of our memories.  If you forget something, try and relax</strong>.  That may even help you remember since, as you will learn in a few weeks, being upset can arrest our thinking.{/t}</p>
        <p>{t}Over the next few modules you will be working on some techniques to remember things better, and with a fair amount of effort and practice you can improve your thinking, but <strong>there is no magic bullet, no miracle cure, and no special pill to give us perfect thinking</strong>.{/t}</p>
        <p>{t}Nor is it likely that your memory is really as bad as you think.  On that note, however,<strong> if you really are concerned about your thinking, we encourage you to talk with your doctor if you have not done so already</strong>.{/t}</p>
        <p class="forum">{t}Post to the Forum any other myths and misconceptions that older adults tend to have about their memories.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    
    
    
    <div id="lesson-1-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Memory Strategy #1{/t}</h2>
        <hr />
        <h4>{t}5 Minute Explanation – 10 Minute Practice{/t}</h4>
        <h5>{t}Memory Tip #1 - Improve Memory by Improving Attention {/t}</h5>
        <p>{t}In each module, you will learn a new strategy for improving your memory in your everyday life.  Today, please focus on helping build a cognitive skill that is not “memory” per se but is essential for having a better memory.{/t}</p>
        <p>{t}In this module we are going to help you improve your memory by helping you improve your ATTENTION.  The reason we are starting here is because <strong>attention is the gateway to memory</strong>. You can’t expect to remember things that you don’t see, hear, feel or otherwise experience, right?  How can we expect our brains to hold onto information that doesn’t get in in the first place?{/t}</p>
        <h5>{t}What are some ways that you can improve your attention?{/t}</h5>
        <p>{t}<strong>Look up and around</strong> - Open your eyes - <strong>Simply being more aware</strong> can improve your attention. <strong>Putting in the effort</strong> to look around and making mental notes of where you parked your car or whether or not you locked the door, can do wonders for setting a good foundation for remembering things!{/t}</p>
        <p>{t}<strong>Stay</strong> “<strong>Present</strong>” - <strong>Dial down the internal chatter or the mental to-do list</strong>.  In conversations, remind yourself that you will be able to come up with something to say after the person is finished talking in order to stop the mental rehearsal of your next point.  This way you can really pay attention to what the other person is saying{/t}</p>
        <p>{t}<strong>Get your hearing or vision checked and corrected if needed</strong> – Do not let vanity get in the way of your brain health.  Vision and hearing loss not only keep you from taking in current information, but over time it seems that they can weaken you whole brain.  As we just learned today, cells that fire together, wire together, so if your brain is not getting good quality stimulation from your ears or your eyes, all of the brain circuits that process that information (including your memory circuits) have less stimulation, and therefore seem to also weaken over time.{/t}</p>
        <p class="forum">&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr />
        <p>{t}<strong>Manage Your Environment</strong>{/t}</p>
        <p>{t} - Reduce Distractions and Interruptions{/t}</p>
        <p>{t}<strong>Do One Thing at a Time</strong>{/t}</p>
        <p>{t} - Multi-tasking is a Myth!{/t}</p>
        <p>{t} - Multi-tasking can be toxic to the brain{/t}</p>
        <p>{t}<strong>Bribe Yourself</strong>{/t}</p>
        <p>{t}<strong>Get Plenty of Rest</strong>{/t}</p>
        <p>{t} - May need to see a sleep doctor{/t}</p>
        <p>{t} - Resting when you're awake{/t}</p>
        <p>{t}<strong>Manage your Emotions</strong>{/t}</p>
        <p>{t}You may be saying to yourself, “I’m just not good at paying attention.”  “I have ADD” or “I’ve always been bad at paying attention.”  Well keep in mind that the brain is plastic and very much capable of change.  In fact, new research is showing that through brain exercises and through the tips that you will learn in this course, even people with attention problems caused by brain injury and people with Attention Deficit / Hyperactivity Disorder (ADD/ADHD) can improve their attention.{/t}</p>
        <p>{t}<strong>Strategies that are used to help people with attention deficits improving their attention – we list them here because they are also important for many of us.</strong>{/t}</p>
        <h5>{t}<strong>Manage your environment</strong> –{/t}</h5>
        <p>{t}Distractions and interruptions some of the biggest threats to attention.{/t}</p>
        <h5>{t}Do one thing at a time –{/t}</h5>
        <p>{t}Multi-tasking is a myth!  Our brains really don’t seem to process more than one thing at a time.  What may feel like multi-tasking, for example checking your email while having a conversation, really seems to just involve your brain switching rapidly back and forth between the two tasks.  This inability to multitask the way we think we can is also starting to influence public policy in terms of limiting cell phone use while driving.  Texting has received a lot of focus, but talking may be just a bad.{/t}</p>
        <h5>{t}Bribe yourself –{/t}</h5>
        <p>{t}Often we have trouble paying attention simply because we are not motivated to do so.  Sometimes we don’t admit this and just get mad at ourselves for not being able to pay attention.{/t}</p>
        <h5>{t}Get Plenty of Rest -{/t}</h5>
        <p>{t}Feeling tired, either by not sleeping well or from mental fatigue, can limit our attention. People who do not get enough, good quality sleep perform considerably worse on tests of attention, which can have a big impact on important tasks such as driving.{/t}</p>
        <p>{t}Finally, it is also important to remember that emotions can interrupt our attention!  Feeling anxious or being distracted by self-criticism or worried thoughts is often one of the biggest robbers of our attention.  So learning to relax is also very important for improving attention.  You will learn more about caring for your emotions and dealing with stress in the coming modules.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Attention Exercise{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/124108115.png'); ?>" alt="{t}Image{/t}">
        <p>{t}Allow 10 minutes of time for this activity. Please visit the following <a href="http://sharpbrains.com/blog/2007/10/16/brain-teasers-and-games-for-adults-our-top-50/" target="_blank">website</a> and participate in one of the 'Attention' activities.{/t}</p>
        <p class="forum">{t}Once you have completed this activity, please record your experience on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Set Some Goals for This Week{/t}</h2>
        <hr />
        <p>{t}To get the most out of this program, it is important that you set goals for yourself to practice the skills you are learning and to pave the way for developing new brain-healthy habits.{/t}</p>
        <p class="forum">So take a moment to write down two goals for the coming week.  One focused on your lifestyle and one focused on practicing this week’s memory strategy.{/t}</p>
        <p class="forum"><img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"></p>
        <p>{t}It&rsquo;s  is important that you<strong> set goals that are not too difficult or too vague</strong> – It&rsquo;s better to set a &ldquo;ridiculously simple goal&rdquo; that a you can achieve in  order to feel successful than to set a lofty goal that you will feel bad about  not reaching.  We want to start you on a  cycle of success...{/t}</p>
        <h5>{t}Goals are most effective when they are:{/t}
        </h5>
        <ol>
          <li>{t}Specific with respect to:{/t}</li>
          <ul>
            <li>{t}Type of behavior – have people write a specific behavior (will log activities) as opposed to a vague aspiration (will try to monitor activities){/t}</li>
            <li>{t}Duration of the behavior (5 minutes, etc.){/t}</li>
            <li>{t}Frequency of behavior (4 times a week){/t}</li>
          </ul>
          <li>{t}Simple (ridiculously easy goals are an important place to start because small successes create momentum for bigger change){/t}</li>
          <li>{t}Feasible (same as simple){/t}</li>
        </ol>
        <h5>{t}Rewards{/t}</h5>
        <p>{t}Rewards are intended to be used each time the goal behavior is performed – not merely at the end of the week.  Using the memory goal above as an example, each day a person pays close attention for 30 seconds two times in a single day, she gets to put on a spray of her favorite perfume (maybe in preparation for dinner or the next morning).  She doesn’t have to wait the entire week to use her perfume.  If the perfume is part of her daily routine, then she can continue this routine provided she meet her goal each day.{/t}</p>
        <h5>{t}Here are some guidelines for rewards:{/t}</h5>
        <ul>
          <li>{t}Take some time to think of a reward or ask someone for suggestions{/t}</li>
          <li>{t}Rewards should be small and feasible do not use a reward that will get in the way of other health goals, such as cookies{/t}</li>
          <li>{t}Make an agreement with yourself that you will in no way get to have the reward without FIRST having achieved your goal{/t}        </li>
        </ul>
        <h5>{t}Sample Behavior Goal:{/t}</h5>
        <p>{t}Goal: Fill out activity log before bed at least 4 days in a row{/t}</p>
        <p>{t}Daily Reward: Read my favorite book before bed{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-23" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr />
        <h4>{t}Forum Postings - WILL POST THESE TO FORUM AND REPLACE TEXT WITH CLOSING THOUGHTS{/t}</h4>
        <p class="forum">{t}Please answer the following questions on the Forum. You can use the same thread to respond to all of these questions. Attempt to respond to these questions using the knowledge you gained from this module. Please do not use the Internet or other sources to create your responses.{/t}</p>
        <ul class="forum">
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
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">  </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a></div>
    </div>
  </div>
  
    <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    
      <div id="lesson38">
    <div id="lesson-3-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a></div>
    </div>
    
      <div id="lesson-4">
    <div id="lesson-4-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
    
      <div id="lesson-5">
    <div id="lesson-5-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
    
      <div id="lesson-6">
    <div id="lesson-6-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
    
      <div id="lesson-7">
    <div id="lesson-7-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
  
  
  
  <div id="lesson-8">
    <div id="lesson-8-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a></div>
    </div>
    
    
  

    <div id="lesson-8-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Certificate of Completion &amp; Course Evalutation{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('intro/160382234.png'); ?>" alt="{t}image{/t}">
        <p>{t}We have really enjoyed getting to know you, and hope this course was helpful. Please post any final thoughts, questions, or concerns to the Forum before you close out this final module. Best wishes as you carry on in the future!{/t}</p>
        <h4 style="text-align:center;">{t}Certificate of Completion{/t}</h4>
        <a href="<?php echo $this->getImagesUrl('spencer/certificate.pdf'); ?>" target="_blank"><img src="<?php echo $this->getImagesUrl('intro/ArtworkCertificate.png'); ?>" alt="image"></a>
        <h4>{t}Evaluation (optional){/t}</h4>
        <p>{t}Please complete the Post-Course Evaluation. It is acceissble via the course page, in the sidebar.{/t}</p>
        <p>{t}Your feedback is greatly appreciated, and will help us to better serve other participants in the future. We ask that you
          complete it before you exit this course portal. You do not have to include your name on the evaluation. It is completely
          confidential.{/t}</p>
            <script>
function myFunction(){
alert("Coming Soon!");
}
</script>
    <p style="text-align:center;">
      <input type="button" style="width:175px;" onclick="myFunction()" value="Post-Course Evaluation" />
    </p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}End Course{/t}</a></div>
    </div>
    <!-- need to close module and course -->
  </div>
</div>
