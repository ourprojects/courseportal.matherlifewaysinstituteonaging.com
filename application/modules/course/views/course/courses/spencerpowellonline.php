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
		'.lesson-8',
		'.activityLog') as $lesson)
{
	$this->widget(
			'ext.fancybox.EFancyBox',
			array('id' => $lesson,
					'config' => array('width' => '720px',
							'height' => '1000px',
							'arrows' => false,
							'autoSize' => false,
							'mouseWheel' => false))
	);
}
?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('spencer/126945521r.jpeg'); ?>);">
  <h1 class="bottom"> <?php echo t($course->title); ?> </h1>
</div>
<div id="sidebar">
  <div class="box-sidebar one" style="background-color: #FFF;">
    <h3>{t}Evaluations{/t}</h3>
    <br />
    <script>
		function myFunction(){
			alert("Coming Soon!");
		}
		</script>
    <p>
      <input type="button" style="width: 175px;" onclick="myFunction()" value="Pre-Course Evaluation" />
    </p>
    <p>
      <input type="button" style="width: 175px;" onclick="myFunction()" value="Post-Course Evaluation" />
    </p>
    <br />
    <img src="<?php echo $this->getImagesUrl('msml/153075496.png'); ?>" alt="image"> </div>
  <div class="box-sidebar one">
    <h3>{t}Module Activity Log{/t}</h3>
   
    <p>{t}Please click the button below to access your user Activity Log.{/t}</p>
    <div class="text-center">
      <?php
		echo CHtml::button('{t}Activity Log{/t}', array('onclick' => '$("#activityLog").dialog("open")', 'class' => 'button'));
		?>
    </div>
    <?php 
		$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
				'id' => 'activityLog',
				'options' => array(
						'title' => '{t}Activity Log{/t}',
						'autoOpen' => false,
						'modal' => true,
						'width' => 720,
						'maxWidth' => 720,
						'maxHeight' => 1000
				),
		));
		$this->widget('course.widgets.SpencerPowell.ActivityLogWidget');
		$this->endWidget('zii.widgets.jui.CJuiDialog');
		?>
  </div>
  <div class="box-sidebar one">
    <h3>{t}Certificate of Completion{/t}</h3>
    <p>{t}Complete the following Modules before accessing your Certificate of Completion:{/t}</p>
    <ol>
      <li>{t}1. Introduction{/t}</li>
      <li>{t}2. Physical Activity{/t}</li>
      <li>{t}3. Emotional{/t}</li>
      <li>{t}4. Intellectual{/t}</li>
    </ol>
    <img src="<?php echo $this->getImagesUrl('spencer/ArtworkCertificate.png'); ?>" alt="{t}Certificate of Completion{/t}"> </div>
  <div class="box-sidebar one">
    <h3>{t}SharpBrains.com{/t}</h3>
    <p> <a href="http://sharpbrains.com/blog/2007/07/23/build-your-cognitive-reserve-yaakov-stern/" target="_blank">{t}Build Your Cognitive Reserve: An Interview with Dr. Yaakov Stern{/t}</a> </p>
    <p>{t}Dr. Yaakov Stern is the Divi­sion Leader of the Cog­ni­tive Neu­ro­science Divi­sion of the Sergievsky Cen­ter, and Pro­fes­sor of Clin­i­cal Neu­ropsy­chol­ogy, at the Col­lege of Physi­cians and Sur­geons of Colum­bia Uni­ver­sity, New York.{/t}</p>
    <img src="<?php echo $this->getImagesUrl('spencer/122423200.png'); ?>" alt="{t}Certificate of Completion{/t}"> </div>
</div>

<!-- start main content -->

<div class="column-wide">
  <h2 class="flowers"> <?php echo t($course->title); ?> </h2>
  <p> <?php echo t($course->description); ?> </p>
  <p style="color: #E80000;"> {t}<strong>Disclaimer: </strong>We want to emphasize that there are still risk factors that we cannot control, so living a brain healthy lifestyle does not guarantee that you will not get dementia, just like living a heart healthy lifestyle does not guarantee you won’t have a heart attack.{/t} </p>
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
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1">{t}Introduction{/t}</a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a> </li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2">{t}Physical Activity{/t}</a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-11" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-12" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-13" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-14" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-15" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-16" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-17" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-18" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-19" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-20" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-21" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-22" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-23" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3">{t}Emotional{/t}</a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> </li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4">{t}Intellectual{/t}</a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> </li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5">{t}Nutritional{/t}</a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> </li>
    <li> <a href="#lesson-6-slide-1" data-fancybox-group="lesson-6" class="teal lesson-6">{t}Spiritual{/t}</a> <a href="#lesson-6-slide-2" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-3" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-4" data-fancybox-group="lesson-6" class="hide lesson-6"></a> <a href="#lesson-6-slide-5" data-fancybox-group="lesson-6" class="hide lesson-6"></a> </li>
    <li> 
<a href="#lesson-7-slide-1" data-fancybox-group="lesson-7" class="teal lesson-7">{t}Social{/t}</a> 
<a href="#lesson-7-slide-2" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-3" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-4" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	
<a href="#lesson-7-slide-5" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 
<a href="#lesson-7-slide-6" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 
<a href="#lesson-7-slide-7" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-8" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-9" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-10" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 
<a href="#lesson-7-slide-11" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-12" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-13" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-14" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 
<a href="#lesson-7-slide-15" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-16" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-17" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-18" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 
<a href="#lesson-7-slide-19" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-20" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-21" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 	<a href="#lesson-7-slide-22" data-fancybox-group="lesson-7" class="hide lesson-7"></a> 

    
    
    </li>
    <li> <a href="#lesson-8-slide-1" data-fancybox-group="lesson-8" class="teal lesson-8">{t}Closing{/t}</a> <a href="#lesson-8-slide-2" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-3" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-4" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-5" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-6" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-7" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-8" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-9" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-10" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-11" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-12" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-13" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-14" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-15" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-16" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-17" data-fancybox-group="lesson-8" class="hide lesson-8"></a> <a href="#lesson-8-slide-18" data-fancybox-group="lesson-8" class="hide lesson-8"></a> </li>
  </ul>
  <div class="box-white" id="resources">
    <h4>{t}Resources{/t}</h4>
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
      <li><a href="http://www.nlm.nih.gov/medlineplus/nutrition.html" target="_blank">NIH</a> (Nutrition)</li>
    </ul>
  </div>
  <div class="box-white" id="developers">
    <h4>{t}Course Contacts{/t}</h4>
    <span class="h5">{t}Content Designer:{/t}</span> <span class="name">Cate O'Brien</span>
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
        <p> {t}Welcome and thank you for your interest and participation in the <strong>Spencer Powell Brain Fitness Program</strong> online course. We are excited to have your participation and look forward to our interactions! Please contact us if you need help, have questions, or suggestions for course improvements.{/t} </p>
        <h4>{t}Course Description{/t}</h4>
        <p> {t}<strong>The Spencer Powell Brain Fitness Program</strong> is designed to promote cognitive health and healthy lifestyle changes. The course provides information on how lifestyle factors such as physical activity and cognitive engagement affect your brain and your risk for dementia. Practical strategies are suggested for maintaining memory over time. In addition, the course includes memory training such as chunking, the story method, and mnemonic techniques.{/t} </p>
        <div id="question1" class="question">
          <p style="text-align: center;"> <b>{t}Have you taken the pre-course evaluation yet?{/t}</b><br />
            <select style="text-align: center;">
              <option selected="selected" value="select">{t}Select{/t}</option>
              <option value="1">{t}Yes{/t}</option>
              <option value="0">{t}No{/t}</option>
            </select>
          </p>
          <p class="right-answer hide">{t}Great! Thank you! Please continue.{/t}</p>
          <p class="wrong-answer hide">{t}Please return to this course's home page and complete the pre-course evaluation. It is accessible via the sidebar.{/t}</p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a> </div>
    </div>
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}You Tube - The Brain Fitness Program{/t}</h2>
        <hr />
        <p>{t}This short video will provide you with a first look at some of the exciting new discoveries about neuroplasticity (the ability of the adult brain to change itself) that form the foundation of this course. You may have already seen this popular PBS special, which helped pave the way for many incredible advances, including this course, that can help you strengthen your brain and lower your risk for dementia.{/t}</p>
        <iframe style="width: 480px; height: 360px; display: block; margin: 15px auto;" src="//www.youtube.com/embed/WBSNQi4es5k?rel=0" frameborder="0" allowfullscreen></iframe>
        <h4>{t}Forum Postings{/t}</h4>
        <p>{t}You are going to be asked to participate in many Forum postings throughout each module. Similar to blogging, the Forum postings will be visible to the Facilitator and other course participants. As shown below, Forum postings will have colored font, along with the Forum icon. Some postings will already have the questions listed on the Forum, while others need to be created by you.{/t}</p>
        <p class="forum"> {t}Before you begin, please introduce yourself on the Forum to your facilitator and other participants. Click <a href="#" target="_blank">here</a> to access it. Once opened, leave it open as you will post to it throughout this course.{/t} </p>
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
          <li>{t}Overview{/t}</li>
          <li>{t}Brain Health Now and Later{/t}</li>
          <li>{t}Dementia and Cognitive Reserve{/t}</li>
          <li>{t}Brain Plasticity{/t}</li>
          <li>{t}Peak Performance{/t}</li>
          <li>{t}Introduction to Program Format{/t}</li>
          <li>{t}Memory Exercise{/t}</li>
          <li>{t}Goal Setting{/t}</li>
        </ol>
        <div id="question1" class="question">
          <p> <b>{t}Have you ever taken a online course before?{/t}</b> </p>
          <p>
            <select style="text-align: center;">
              <option selected="selected" value="select">{t}Select{/t}</option>
              <option value="1">{t}Yes{/t}</option>
              <option value="0">{t}No{/t}</option>
            </select>
          </p>
          <p class="right-answer hide">{t}Great! Please continue.{/t}</p>
          <p class="wrong-answer hide"> {t}Please visit this <a href="http://student.worldcampus.psu.edu/academic-support-resources/tips-for-being-a-successful-world-campus-student" target="_blank">website</a> for tips on being successful in a online course.{/t} </p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"> {t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Health{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/154418413.png'); ?>" alt="{t}Image{/t}">
        <p>{t}The world of brain health has exploded over the past decade with many new programs and applications emerging to help people think and perform better both now in their daily lives at work or at home and later in life as people age. Maintaining independence later in life is a concern for many people, especially older adults, but even for younger people this can be a nagging concern. Through the course of this program you will learn how investing in your brain health now can pay dividends both immediately and as you age.{/t}</p>
        <p>{t}To describe some of the key concepts underlying the field of brain health, we will start by talking a bit about how to protect brain health as you age.{/t}</p>
        <p class="forum">{t}What healthy activities do you currently engage in to specifically boost your brain health? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Dementia is not inevitable{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/161824211.png'); ?>" alt="{t}Image{/t}">
        <p>{t}Many people think that dementia is a normal part of the aging process and that losing ones memory is just part of getting older. While some cognitive skills, such as reaction time and our ability to access words at times (what we think of as “senior moments”), do decline naturally with age, “dementia” is a decline in cognitive ability beyond the normal aging process, most likely due to disease or injury.{/t}</p>
        <p>{t}Many people also think that if dementia is in their family they are destined to develop it at some point in their lives. However, brain research is showing that the way people live their lives actually seems to account for as much or more of the risk for dementia than family history. In fact for the typical late-onset form of Alzheimer’s disease, genes seem to only account for about 30% of the risk (that’s in contrast to early-onset Alzheimer’s, which occurs before age 65 and has a much stronger genetic component). The rest of that 70% is made up of some other things that we can’t control such as environmental toxins, but within that 70% area there are a lot of things that we can control.{/t}</p>
        <p> {t}This information is leading some doctors and scientists to start thinking of<strong> dementia as a preventable disease</strong>, similar to how we think of heart disease, cancer and Type II diabetes as preventable.{/t} </p>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Dementia{/t}</h2>
        <hr />
        <p> {t}People often ask, “what is the difference between Alzheimer's disease and dementia?” Before we get too far, we should clarify that Alzheimer’s disease is a TYPE of dementia. <strong>Dementia</strong> is an umbrella term used to describe any<strong> type of stable decline in cognitive abilities, severe enough to interrupt a person’s ability to function independently</strong>. Dementia describes the observable symptoms of a brain disease or injury.{/t} </p>
        <p> {t}<strong>Alzheimer’s is a disease process</strong> – a medical condition – that causes the cognitive changes that produce dementia. There are many other medical conditions that cause dementia as well.{/t} </p>
        <p>{t}The second most common disease that causes dementia is what we call cerebrovascular disease, which causes vascular dementia. This includes any type of injury to the brain caused by a problem with the brain’s blood supply, most notably a stroke. There are varying degrees of strokes, however. You may have heard of TIA’s (or Transient Ischemic Attacks) or mini strokes. The stroke process can also occur without any identifiable symptoms, causing what we call silent strokes. You will learn more about these in the next session.{/t}</p>
        <p>{t}Head trauma, Parkinson’s disease, Huntington Disease, Pick’s disease, infections such as HIV and CJD (Creutzfeldt-Jakob Disease – the human form of mad cow disease), substance abuse and environmental toxins can also cause dementia.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Risk Factors are Interactive{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/95357641.png'); ?>" alt="{t}Image{/t}">
        <p>{t}We are also learning that most people who develop dementia tend to have more than one type of risk factor and may even have more than one disease process affecting their brains. It may also be the case that one disease process, such as diabetes, may play a role in the formation of another disease process such as Alzheimer’s.{/t}</p>
        <p>{t}We know that hypertension (high blood pressure) is a common result of the pressure that diabetes puts on the vascular system. We still have a lot to learn in this area, but we mention it here because there are a lot of things that we can do to lessen the effects of many of these disease conditions on our aging brains, which may help us ward off or delay the clinical symptoms of dementia.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cognitive Reserve: Your Brain's 401K Account{/t}</h2>
        <hr />
        <p> {t}One key way that we can lower our risk for dementia is through understanding and utilizing a theory that is central to this area of science, called the <strong>Theory of Cognitive Reserve</strong>. You can think of this as your brain’s 401k or retirement account.{/t} </p>
        <p> {t}Simply put, the Theory of Cognitive Reserve is based on observations that <strong>no 2 brains respond to injury or illness in exactly the same way</strong>. There are people who can sustain a small amount of damage to their brains and lose a lot of brain function, and there are people who can sustain large amounts of damage and never develop dementia. <strong>What seems to differentiate these types of people is the amount of brain reserve that they have “stored in the bank” that can make up for the losses</strong>.{/t} </p>
        <p>{t}So when planning financially for retirement, if you have a lot invested in your retirement account, you can survive losses - such as fluctuations in the market or an unexpected expense - much better if your account is bigger than if it were smaller. This principle seems to apply to our brains too, which serves as the basis for the theory of cognitive reserve. People with high levels of Cognitive Reserve have to sustain many more losses before crossing over the threshold to having dementia than people who have lower reserve.{/t}</p>
        <p> {t}The keyword to learn from this is “Cognitive Reserve” – which is your<strong> brain’s reserve of both tissue and abilities</strong> that affects your risk for dementia. Or your Brain’s retirement account.{/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}More on Cognitive Reserve{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/153211616.png'); ?>" alt="{t}Image{/t}">
        <p>{t}A little over 10 years ago, Yaakov Stern, PhD, a neuropsychologist at Columbia University, summarized a series of important brain discoveries and proposed the theory of Cognitive Reserve. Since then, numerous studies have continued to support this theory, allowing us to now know many of the factors that can raise and lower a person’s risk for dementia.{/t}</p>
        <p> {t}One of the first discoveries leading to the theory of cognitive reserve came after scientists noticed that a group of people who had donated their brains for autopsy showed signs of advanced Alzheimer’s disease in their brains even though at the time of their death they had no clinical signs of the disease. In other words, these were people<strong> with fully intact memories who had remained quite independent, yet their brains looked exactly the same as the brains of people who had forgotten their families and could no longer care for themselves</strong>.{/t} </p>
        <p> {t}The scientists wondered if there might be something different about the way these people had lived their lives that allowed them to resist the effects of the Alzheimer’s disease pathology that had grown in their brains. It turned out that<strong> these people had been more active intellectually, socially and physically throughout their adult lives than the people in the other group</strong>.{/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Adult Brain Grows New Cells{/t}</h2>
        <hr />
        <p> {t}About 10 years after that autopsy study, another group of researchers studied the brains of people who had survived cancer through radiation treatment. It turns out that after people go through radiation treatment, some of the genetic information in their cells changes. By applying a special dye that is only attracted to cells with this new genetic data, researchers can see which cells had formed after the cancer. They applied this dye to brain tissue on autopsy and were surprised to find cells in the brain that accepted the dye. This meant that these <strong>cells had developed AFTER the radiation treatment.{/t}</strong> </p>
        <p> <strong>{t}Some of the people in this study well into their 80’s when they received the cancer treatment, so it seems that new brain cells are growing well into later life</strong>. This evidence combined with other studies since this has changed the way we think about the adult brain;<strong> now we accept that the adult brain DOES grow new brain cells</strong>!{/t} </p>
        <p> {t}Now this excitement has to be tempered a bit because<strong> brain cells do not grow at the same rate as say cells in your skin or your bones</strong>, so it is still harder for the brain to recover from injury.{/t} </p>
        <p> {t}Nevertheless, it is exciting to know that we can still grow new brain cells. This may actually be one of the<strong> mechanism by which we can learn new things as the region of the brain where these new brain cells grow – called the hippocampus – is the area responsible for forming new memories</strong>.{/t} </p>
        <p>{t}The key word to learn from this is “neurogenesis,” meaning the growth of new brain cells.{/t}</p>
        <div id="question3" class="question">
          <p style="text-align: center;"> <b>{t}"Neurogenesis” means the growth of new brain cells.{/t}</b><br />
            <select style="text-align: center;">
              <option selected="selected" value="select">{t}Select{/t}</option>
              <option value="1">{t}Yes{/t}</option>
              <option value="0">{t}No{/t}</option>
            </select>
          </p>
          <p class="right-answer hide">{t}Correct! "Neurogenesis” means the growth of new brain cells.{/t}</p>
          <p class="wrong-answer hide">{t}Please review this slide again, and ensure you understand what "neurogenesis" is before you continue.{/t}</p>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Structures Also Grow with Experience{/t}</h2>
        <hr />
        <p> <img src="<?php echo $this->getImagesUrl('spencer/120133005.png'); ?>" alt="{t}Image{/t}"> </p>
        <p> {t}In addition to discovering the growth of new brain cells, over the last couple of decades, scientist have demonstrated that<strong> brain structures can grow in adulthood, which often seems to be the result of experience, or learning new things</strong>.{/t} </p>
        <p> {t}In the late 1990’s a group of researchers started studying the brains of cab drivers in London. This is an elite group of taxi drivers who have to complete a 3-4 year apprenticeship to learn the intricate routes within the 6-square mile are of central London (see map). They literally call it <strong>“The Knowledge.” 75% of the people who start the apprenticeship drop out</strong>.{/t} </p>
        <p> {t}At first researchers noted that a<strong> region of the hippocampus responsible for spatial relations was larger in experienced drivers compared to other people</strong>. After following new recruits over time, the same researchers observed that<strong> this region actually grew in the recruits who successfully completed the program</strong>.{/t} </p>
        <p> {t}Developing such a specialized skill did come at a price, however, as other studies from the same group have shown that these taxi drivers perform worse on other tests of memory. This suggests that it is<strong> likely important to diversify your brain building activities</strong>. But the exciting part of all of this research is that it shows in a pretty clear way that the <strong>adult brain can grow – that is actually change its structure in a positive direction – through experience</strong>.{/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Cells Form New Connections{/t}</h2>
        <hr />
        <p> <img src="<?php echo $this->getImagesUrl('spencer/160382211.png'); ?>" alt="{t}Image{/t}"> </p>
        <p> {t}The adult brain also changes in another way. The brain cells you already have as well as the new ones you are growing, can also form new connections. These connections are referred to as “<strong>pathways</strong>,” and just like with your muscles,<strong> the stronger a pathway becomes, the bigger it gets</strong>.{/t} </p>
        <p> {t}The connections between brain cells, at the ends of the pathways, are called <strong>synapses</strong>, and “<strong>synaptic density</strong>”<strong> can be increased by learning new things and performing new skills</strong>.{/t} </p>
        <p> {t}<strong>Pathways and synapses can also rewire</strong>, diverting their resources to different regions following an injury.{/t} </p>
        <p> {t}All of this “<strong>malleability</strong>”<strong> in the wiring of brain cells</strong> is called <strong>“plasticity</strong>.”{/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cells that Fire Together, Wire Together{/t}</h2>
        <hr />
        <p> {t}This phenomenon was first described in the 1940’s by a scientist named Donald Hebb, and the process has since been termed Hebb’s Law, which is often <strong>paraphrased</strong> as, “<strong>cells that fire together, wire together</strong>.” So anytime you practice a new skill, the brain cells required to perform that skill will fire together, meaning they will both produce an electrical charge, which over time will change the structure of the synapse and allow the cells to be “wired together” or more likely to excite one another when one is excited.{/t} </p>
        <p> {t}The technical names for the “rewiring process” are called <strong>Long Term Potentiation (LTP)</strong> and<strong> Long Term Depression (LTD)</strong>.<strong> LTP</strong> we already understand, that<strong> cells that fire together build stronger connections</strong>.<strong> LTD</strong> explains what we call negative plasticity or the “<strong>use it or lose it</strong>” phenomenon, meaning that when cells are not firing together, when you are not practicing a particular skill, the connections become weaker over time.{/t} </p>
        <p style="text-align: center;">
          <iframe width="480" height="360" src="//www.youtube.com/embed/jSE703UokZY?rel=0" frameborder="0" allowfullscreen></iframe>
        </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Your Brain’s 401K{/t}</h2>
        <hr />
        <table style="width: 100%; margin: 15px auto; border: 3;">
          <tr style="text-align: center;">
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
        <p> {t}Now that we know that a lot of the things we do throughout our lives affects our susceptibility to dementia, we can utilize the principles of Cognitive Reserve Theory to <strong>maximize our investments in our Brain’s retirement account</strong>.{/t} </p>
        <p>{t}However, this course will help you understand the things you can do that may lower the risk for dementia or postpone cognitive decline in the hopes that you will maintain independence for as long as possible.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Peak Performance!{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/165431293.png'); ?>" alt="{t}Image{/t}">
        <p>{t}We have talked a lot about protecting your brain from dementia, but this program will also focus on helping you get the most out of your brain today, which can help you both at work and at home. You will be learning strategies to remember things better, to be more organized, to pay closer attention and to regulate your emotions.{/t}</p>
        <p>{t}Some of the strategies will come to you directly through the memory tips that you will learn in modules 2-7 and the lifestyle demonstrations we will present in each module. Other strategies will come to you indirectly as you practice the exercises included in both the course assignments and the brain training software being providing.{/t}</p>
        <p class="forum">{t} Without searching the Internet, what activities do you engage in to help you get the most out of your brain? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Program Format{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/140238058.png'); ?>" alt="{t}Image{/t}">
        <p style="font-size: 24px; text-align: center;">{t}Physical Activity{/t}</p>
        <p style="font-size: 24px; text-align: center;">{t}Social Engagement{/t}</p>
        <p style="font-size: 24px; text-align: center;">{t}Intellectual Engagement{/t}</p>
        <p style="font-size: 24px; text-align: center;">{t}Nutrition{/t}</p>
        <p style="font-size: 24px; text-align: center;">{t}Emotional Wellbeing{/t}</p>
        <p>{t}During each of the next few modules, you will learn the details of how each of these five areas of wellness affect your risk for dementia. You will learn the science supporting the connection between your brain health and each area of wellness.{/t}</p>
        <p>{t}We aim to help you identify areas of your lifestyle where you could increase your investment in your Cognitive Reserve, diversifying your “Brain Portfolio.”{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}CR Contributions Logs{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/140388847.png'); ?>" alt="{t}Image{/t}">
        <p>{t}Knowing if we are doing enough for our brains can be a challenge, so in an effort to help you take account of your brain healthy activities, we created the CR (Cognitive Reserve) Contribution Log. You would not expect to invest in your financial retirement account without keeping track of your investments would you? With this log you can get a better idea of how you’re investing in your brain health, and if you choose to increase your investment, you can monitor that too, watching your gains grow over time.{/t}</p>
        <h4>{t}How it works{/t}</h4>
        <p>{t}We are providing you with a Menu of brain healthy activities that converts your activities to CR Contribution units. The Menu is available on the main course page, in the right sidebar. It makes your activities easier to quantify, therefore making it easier to see the gains that you are making each week in Maximizing your CR Contributions.{/t}</p>
        <p>{t}The Menu is broken up into three sections, the top section are standard brain healthy activities, the second section has a list of all of the brain healthy activities that are provided at this facility, the third section includes some blank paces for you to add your own, customized brain healthy activities. The menu also has suggested domains for each activity, but the domain that you feel the activity best fits is entirely up to you. Some people think that going for a walk is purely for exercise, but others see the connection with nature as a spiritual experience. This is for you to decide.{/t}</p>
        <h4>{t}What to do:{/t}</h4>
        <p> {t}<strong>In this module, we would like for you to get started in logging your brain healthy activities. This will give you an idea of your baseline, and will help you know where you want to add when it comes time to set goals</strong>. Your Activity log can be accessed on the course home page in the right sidebar.{/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Let’s Give Ourselves a Break{/t}</h2>
        <hr />
        <p> {t}Before we get into the specifics of what you will be doing for the next few modules, let’s take a moment to give ourselves a little break. Not an actual break from the course, but rather let’s take a moment to go over some<strong> myths and misconceptions that older adults tend to have about their memories</strong>.{/t} </p>
        <p> {t}Because dementia is such a great concern among older adults, <strong>many people forget that it’s normal to forget things</strong>. You’ve been forgetting things all your life! It’s just that when you were 25 years old, you didn’t care so much because you didn’t interpret the forgetting as a signal that you may be on the path to losing your independence.{/t} </p>
        <p> {t}<strong>It is also a myth that people can remember everything</strong>. You may have heard of these “memory champions” who can remember several decks of cards just by seeing them flipped over one at a time or about people with photographic memories. Well the memory champions train like professional athletes, hours on end, day after day for months to develop their craft, but it doesn’t really seem to help them get better at much of anything else. And most of the people with photographic memories are savants whose incredible gifts are often accompanied by severe handicaps in other areas of day-to-day living.{/t} </p>
        <p> {t}So<strong> let’s all just have reasonable expectations of our memories. If you forget something, try and relax</strong>. That may even help you remember since, as you will learn in a few weeks, being upset can arrest our thinking.{/t} </p>
        <p> {t}Over the next few modules you will be working on some techniques to remember things better, and with a fair amount of effort and practice you can improve your thinking, but <strong>there is no magic bullet, no miracle cure, and no special pill to give us perfect thinking</strong>.{/t} </p>
        <p> {t}Nor is it likely that your memory is really as bad as you think. On that note, however,<strong> if you really are concerned about your thinking, we encourage you to talk with your doctor if you have not done so already</strong>.{/t} </p>
        <p class="forum">{t}Post to the Forum any other myths and misconceptions that older adults tend to have about their memories.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Memory Strategy #1{/t}</h2>
        <hr />
        <h4>{t}5 Minute Explanation – 10 Minute Practice{/t}</h4>
        <h5>{t}Memory Tip #1 - Improve Memory by Improving Attention {/t}</h5>
        <p>{t}In each module, you will learn a new strategy for improving your memory in your everyday life. Today, please focus on helping build a cognitive skill that is not “memory” per se but is essential for having a better memory.{/t}</p>
        <p> {t}In this module we are going to help you improve your memory by helping you improve your ATTENTION. The reason we are starting here is because <strong>attention is the gateway to memory</strong>. You can’t expect to remember things that you don’t see, hear, feel or otherwise experience, right? How can we expect our brains to hold onto information that doesn’t get in in the first place?{/t} </p>
        <h5>{t}What are some ways that you can improve your attention?{/t}</h5>
        <p> {t}<strong>Look up and around</strong> - Open your eyes - <strong>Simply being more aware</strong> can improve your attention. <strong>Putting in the effort</strong> to look around and making mental notes of where you parked your car or whether or not you locked the door, can do wonders for setting a good foundation for remembering things!{/t} </p>
        <p> {t}<strong>Stay</strong> “<strong>Present</strong>” - <strong>Dial down the internal chatter or the mental to-do list</strong>. In conversations, remind yourself that you will be able to come up with something to say after the person is finished talking in order to stop the mental rehearsal of your next point. This way you can really pay attention to what the other person is saying{/t} </p>
        <p> {t}<strong>Get your hearing or vision checked and corrected if needed</strong> – Do not let vanity get in the way of your brain health. Vision and hearing loss not only keep you from taking in current information, but over time it seems that they can weaken you whole brain. As we just learned today, cells that fire together, wire together, so if your brain is not getting good quality stimulation from your ears or your eyes, all of the brain circuits that process that information (including your memory circuits) have less stimulation, and therefore seem to also weaken over time.{/t} </p>
        <p class="forum">&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Improving Attention{/t}</h2>
        <hr />
        <p> {t}<strong>Manage Your Environment</strong>{/t} </p>
        <p>{t} - Reduce Distractions and Interruptions{/t}</p>
        <p> {t}<strong>Do One Thing at a Time</strong>{/t} </p>
        <p>{t} - Multi-tasking is a Myth!{/t}</p>
        <p>{t} - Multi-tasking can be toxic to the brain{/t}</p>
        <p> {t}<strong>Bribe Yourself</strong>{/t} </p>
        <p> {t}<strong>Get Plenty of Rest</strong>{/t} </p>
        <p>{t} - May need to see a sleep doctor{/t}</p>
        <p>{t} - Resting when you're awake{/t}</p>
        <p> {t}<strong>Manage your Emotions</strong>{/t} </p>
        <p>{t}You may be saying to yourself, “I’m just not good at paying attention.” “I have ADD” or “I’ve always been bad at paying attention.” Well keep in mind that the brain is plastic and very much capable of change. In fact, new research is showing that through brain exercises and through the tips that you will learn in this course, even people with attention problems caused by brain injury and people with Attention Deficit / Hyperactivity Disorder (ADD/ADHD) can improve their attention.{/t}</p>
        <p> {t}<strong>Strategies that are used to help people with attention deficits improving their attention – we list them here because they are also important for many of us.</strong>{/t} </p>
        <h5> {t}<strong>Manage your environment</strong> –{/t} </h5>
        <p>{t}Distractions and interruptions some of the biggest threats to attention.{/t}</p>
        <h5>{t}Do one thing at a time –{/t}</h5>
        <p>{t}Multi-tasking is a myth! Our brains really don’t seem to process more than one thing at a time. What may feel like multi-tasking, for example checking your email while having a conversation, really seems to just involve your brain switching rapidly back and forth between the two tasks. This inability to multitask the way we think we can is also starting to influence public policy in terms of limiting cell phone use while driving. Texting has received a lot of focus, but talking may be just a bad.{/t}</p>
        <h5>{t}Bribe yourself –{/t}</h5>
        <p>{t}Often we have trouble paying attention simply because we are not motivated to do so. Sometimes we don’t admit this and just get mad at ourselves for not being able to pay attention.{/t}</p>
        <h5>{t}Get Plenty of Rest -{/t}</h5>
        <p>{t}Feeling tired, either by not sleeping well or from mental fatigue, can limit our attention. People who do not get enough, good quality sleep perform considerably worse on tests of attention, which can have a big impact on important tasks such as driving.{/t}</p>
        <p>{t}Finally, it is also important to remember that emotions can interrupt our attention! Feeling anxious or being distracted by self-criticism or worried thoughts is often one of the biggest robbers of our attention. So learning to relax is also very important for improving attention. You will learn more about caring for your emotions and dealing with stress in the coming modules.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Attention Exercise{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/124108115.png'); ?>" alt="{t}Image{/t}">
        <p> {t}Allow 10 minutes of time for this activity. Please visit the following <a href="http://sharpbrains.com/blog/2007/10/16/brain-teasers-and-games-for-adults-our-top-50/" target="_blank">website</a> and participate in one of the 'Attention' activities.{/t} </p>
        <p class="forum">{t}Once you have completed this activity, please record your experience on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Set Some Goals for This Week{/t}</h2>
        <hr />
        <p>{t}To get the most out of this program, it is important that you set goals for yourself to practice the skills you are learning and to pave the way for developing new brain-healthy habits.{/t}</p>
        <p class="forum">{t}So take a moment to write down two goals for the coming week. One focused on your lifestyle and one focused on practicing this week’s memory strategy.{/t}</p>
        <p class="forum"> <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </p>
        <p> {t}It&rsquo;s is important that you<strong> set goals that are not too difficult or too vague</strong> – It&rsquo;s better to set a &ldquo;ridiculously simple goal&rdquo; that a you can achieve in order to feel successful than to set a lofty goal that you will feel bad about not reaching.  We want to start you on a cycle of success...{/t} </p>
        <h5>{t}Goals are most effective when they are:{/t}</h5>
        <ol>
          <li>{t}Specific with respect to:{/t}</li>
          <li>{t}Type of behavior – have people write a specific behavior (will log activities) as opposed to a vague aspiration (will try to monitor activities){/t}</li>
          <li>{t}Duration of the behavior (5 minutes, etc.){/t}</li>
          <li>{t}Frequency of behavior (4 times a week){/t}</li>
          <li>{t}Simple (ridiculously easy goals are an important place to start because small successes create momentum for bigger change){/t}</li>
          <li>{t}Feasible (same as simple){/t}</li>
        </ol>
        <h5>{t}Rewards{/t}</h5>
        <p>{t}Rewards are intended to be used each time the goal behavior is performed – not merely at the end of the week. Using the memory goal above as an example, each day a person pays close attention for 30 seconds two times in a single day, she gets to put on a spray of her favorite perfume (maybe in preparation for dinner or the next morning). She doesn’t have to wait the entire week to use her perfume. If the perfume is part of her daily routine, then she can continue this routine provided she meet her goal each day.{/t}</p>
        <h5>{t}Here are some guidelines for rewards:{/t}</h5>
        <ul>
          <li>{t}Take some time to think of a reward or ask someone for suggestions{/t}</li>
          <li>{t}Rewards should be small and feasible do not use a reward that will get in the way of other health goals, such as cookies{/t}</li>
          <li>{t}Make an agreement with yourself that you will in no way get to have the reward without FIRST having achieved your goal{/t}</li>
        </ul>
        <h5>{t}Sample Behavior Goal:{/t}</h5>
        <p>{t}Goal: Fill out activity log before bed at least 4 days in a row{/t}</p>
        <p>{t}Daily Reward: Read my favorite book before bed{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-1-slide-23" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/173262053.png'); ?>" alt="{t}image{/t}">
        <h4>{t}You Made It!{/t}</h4>
        <p>{t}Congratulations on completing this first module! You should now be comfortable with the course setup, having had this first experience.{/t}</p>
        <p class="forum">{t}Please revisit the Forum and respond to the pre-filled question that are listed under the 'Introudction' section. You can use the same thread to respond to all of these questions. Attempt to respond to these questions using the knowledge you gained from this module. Please do not use the Internet or other sources to create your responses.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a> </div>
    </div>
  </div>
  <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Physical Activity{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/200069246-001.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Module Outline{/t}</h4>
        <ul>
          <li>{t}Check-in and Review{/t}</li>
          <li>{t}Benefits of Physical Activity{/t}</li>
          <li>{t}Memory Exercise{/t}</li>
          <li>{t}Goal Setting{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a> </div>
    </div>
    <div id="lesson-2-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Check-in{/t}</h2>
        <hr />
        <ul>
          <li>{t}How did your week go?{/t}
            <ul>
              <li>{t}Did you think about anything you learned last week?{/t}</li>
              <li>{t}Did you log your activities?{/t}</li>
              <li>{t}Any questions about the CR Contribution Logs?{/t}</li>
            </ul>
          </li>
          <li>{t}What is Cognitive Reserve?{/t}
            <ul>
              <li>{t}How can knowing about this theory help you?{/t}</li>
            </ul>
          </li>
          <li>{t}What was the Memory Strategy that you learned last week?{/t}
            <ul>
              <li>{t}Did you have a chance to use it?{/t}</li>
            </ul>
          </li>
        </ul>
        <h5>{t}Last week’s memory strategy was:{/t}</h5>
        <ul>
          <li><strong>{t}Improving Attention to Improve Memory</strong>{/t}</li>
          <li>{t}Look Up and Around{/t}
            <ul>
              <li>{t}Put in the Effort{/t}</li>
            </ul>
          </li>
          <li>{t}Stay “Present”{/t}</li>
          <li>{t}Get your Hearing or Vision Checked{/t}</li>
          <li>{t}Manage Your Environment{/t}
            <ul>
              <li>{t}Reduce <strong>Distractions</strong> and <strong>Interruptions</strong> {/t}</li>
            </ul>
          </li>
          <li><strong>{t}Do</strong> One Thing at a Time{/t}
            <ul>
              <li>{t}Multi-tasking is a Myth!{/t}</li>
              <li>{t}Multi-tasking can be toxic to the brain{/t}</li>
            </ul>
          </li>
          <li>{t}Bribe yourself{/t}</li>
          <li>{t}Get Plenty of Rest{/t}
            <ul>
              <li>{t}May need to see a sleep doctor{/t}</li>
              <li>{t}Resting your when you’re awake{/t}</li>
            </ul>
          </li>
          <li>{t}Manage your Emotions{/t}</li>
        </ul>
        <p class="forum">{t}Please imagine and generate scenarios where you might memory strategies. And remember, memory strategies are most effective when they are practiced. Post your scenarios to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
    
    <div id="lesson-2-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Investing in Brain Health{/t}</h2>
        <hr />
        <p>{t}In the last module we talked about actively investing in our brain reserve (or Cognitive Reserve / Brain 401K) – Maximizing our contributions to our brain, which can help us build up a larger reserve in order to ward off dementia.{/t}</p>
        <p class="forum">{t}What activities come to mind when you think of investing in your brain reserve? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">
        <p>{t}In the last module, about the autopsy study where people had resisted the clinical effects of Alzheimer’s disease growing in their brains, there were three main lifestyle behaviors that distinguished these people from people who had lost their independence. They had been more active during their lives in a few key ways.{/t}</p>
        <p class="forum">{t}On the Forum, list the main ways they had been more active?{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">
        <p>{t}We are going to talk today about how physical activity seems to be a key component of brain health. In fact, it may be one of the best things you can do for your brain. {/t}</p>
        
        
         <div id="lesson-2-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Exercise is Linked to:{/t}</h2>
        <hr />
        
        <ul>
          <li>{t}Maintaining a Healthy Weight{/t}
            <ul>
              <li>{t}Decreased body fat{/t}</li>
              <li>{t}Increased lean body mass{/t}</li>
              <li>{t}Increased resting metabolism{/t}</li>
              <li>{t}Better digestion{/t}</li>
            </ul>
          </li>
          <li>{t}Preventing and Managing Chronic Disease{/t}
            <ul>
              <li>{t}Cardiovascular fitness (Heart, Blood Pressure, Stroke){/t}</li>
              <li>{t}Prevent and control adult onset diabetes{/t}</li>
              <li>{t}Increased insulin sensitivity{/t}</li>
            </ul>
          </li>
          <li>{t}Maintaining a Strong Body{/t}
            <ul>
              <li>{t}Increased bone density and reduced osteoporosis{/t}</li>
              <li>{t}Reversed physical frailty{/t}</li>
              <li>{t}Improved vestibular function{/t}</li>
              <li>{t}Fewer falls{/t}</li>
            </ul>
          </li>
          <li>{t}Reduced depression{/t}</li>
          <li>{t}Better quality sleep{/t}</li>
          <li>{t}AND… Delayed onset of cognitive decline!{/t}</li>
          <li>{t}AND… Better memory performance!{/t}</li>
        </ul>
        <p>Let us start off by talking about the benefits of physical activity that we already  know about.</p>
        <p class="forum">On the Forum, answer the following questions:</p>
        <ul class="forum">
          <li>Does  your exercise regularly?</li>
          <li>Have you felt or seen benefits of physical activity in yourself or others?</li>
          <li>What are some benefits of physical  activity?</li>
        </ul>
       <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">
        <p>&ldquo;Most  recently, we have learned that participation in physical activity may also help  to prevent or postpone the onset of dementia and cognitive decline.&rdquo;</p>
        <p>As  you&rsquo;ve been learning, scientists have learned that the brain stays plastic  (changeable) all the way into our later years – this means that the brain can  change in response to exercise no matter how old or young you are. (Eckmann, 2011)</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
      <div id="lesson-2-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}How does physical activity reduce  cognitive decline?{/t}</h2>
        <hr />
        
        <p>There are two proposed routes through which it seems that physical activity reduces cognitive decline.</p>

<p>The route that has been understood for some time is an indirect route, a relationship that scientists call a moderating relationship, where the effects of a third variable (in this case vascular health) explains or “moderates” the relationship between physical activity and cognitive decline. For a long time, scientists believed that the link between physical activity and cognitive performance was primarily moderated by vascular health, which remains an important moderator!!</p>


<p>But more recently evidence suggests that physical activity also seems to have a direct impact on cognitive performance, which we will discuss in a moment.</p>

<p>But first let’s get a better understanding of the impact that your vascular health on your brain performance and aging.</p>
        
        
        
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
    
    
    
    
    
       
      <div id="lesson-2-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Medical Conditions Linked to  
Cognitive Decline{/t}</h2>
        <hr />
        
        <p>High blood pressure, heart disease, diabetes, stroke, and obesity are consistently associated with cognitive decline.</p>
        <p> Research has found that:</p>
        <p>High blood pressure, high cholesterol, heart disease, diabetes and mini-strokes are all related to cognitive decline, but it appears that of all these conditions, high blood pressure may be the worst culprit!</p>
        <p>Blood pressure above or below the healthy level in middle-aged men has been associated with poor performance on cognitive tests 25 years later
          This association, however, was only found in men who did not treat their blood pressure, showing that if we do something to attend to our health problems we can help to prevent or postpone onset of cognitive decline.</p>
        <p>Stroke and diabetes consistently and reliably predicted cognitive deficits.</p>
        <p>High blood pressure and poorer health ratings were more predictive of deficits in younger old adults versus older old adults, meaning that it seems that these health conditions promote premature brain aging.</p>
        <p>High cholesterol increases the risk for heart disease, and a healthy heart is essential to having a healthy brain.</p>
        <p>Diabetes and pre-diabetes (insulin resistance) can damage the blood vessels that bring important nutrients to brain cells.</p>
        <p>As we just discussed, physical activity seems to play a role in preventing or reducing the impact of all of these medical conditions, so this is an important way that exercise protects our brains.</p>
        <p>How is it that these conditions reduce our cognitive reserve?  Well let’s look inside the brain to find out more. </p>
        
        
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
         <div id="lesson-2-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}here{/t}</h2>
        <hr />
        
        <p>Brain cells needs a constant and robust supply of blood flow to stay alive.  Unlike other most other cells in your body, neurons (brain cells) cannot store the oxygen and glucose (sugar) they need to survive.  Any interruption in blood flow for even just a few minutes can significant damage.</p>
        <p>High blood pressure, high blood sugar and high cholesterol damage can interrupt the blood supply contributing to the form of dementia we call Vascular Dementia.  Vascular dementia has many names including: cerebrovascular disease, stroke, TAI, mini-stroke, and “white dot syndrome.”</p>
        <p>The term “white dots” (also called white matter hyperintensities) comes from the way that vascular-related damage to the brain shows up on a certain type of MRI picture called a T2 weighted image.  In this type of image, the tissue for what we call “white matter tracks” normally show up as black.  White matter tracks are bundles of the connective fibers through which brain cells communicate with one another.  They are also called axon bundles.  When these tracks are damaged, they show up on T2 MRI as white instead of black, hence the name “white dot syndrome.”  You can see the white dots on this image inside the red circles.  The big white dots around the red circles are supposed to be there.          </p>
        <p>Cerebrovascular disease is a serious condition, which includes stroke, and it is the 4th leading cause of death in people over 65, more than Alzheimer’s which is #5.  Most of us are familiar with the effects of stroke and maybe even TIA’s, which are basically just short-acting strokes, but you may not be familiar with this “white dot syndrome,” which can occur without any symptoms.  The white dots form from an accumulation of little silent strokes.  The effects on thinking build up over time, in many cases leading to dementia.  White dots start forming somewhat early in adulthood, with some detected in people as young as their 30’s.  White dots are common in the brains of older adults, and a certain number of them are considered to be “age appropriate.” But since they are linked to high blood pressure, high cholesterol and diabetes, we can work to reduce or prevent them.</p>
        <p>[Trainer Tip:  Strokes occur when blood supply is lost to the brain resulting in a loss of function for a significant period of time (more than 24-hours).  TIA’s (transient ischemic attacks) or “mini-strokes” have visible symptoms of brain disruption (fainting, slurred speech, paralysis, etc), but function returns within 24-hours.]</p>
        
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
           <div id="lesson-2-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}The Formation of White Dots{/t}</h2>
        <hr />
        
        <p>These white dots form because the arteries that feed this area of the brain are very, very tiny capillaries.  Chronic high blood pressure can cause these tiny capillaries to burst, spilling blood into the area where brain cells live, which is toxic to them.</p>
        <p>OR these tiny capillaries can also “clog up” and prevent blood flow from reaching points beyond the clog, leading to tissue damage.</p>
        <p>The things that “clog up” these capillaries are directly related to high blood pressure, high blood sugar and high cholesterol.  High blood pressure and high cholesterol lead to the build up of plaque in the arteries, sort of like the gunk that fills up in a slow kitchen sink pipe.  If a piece of this plaque or an associated blood clot becomes loose & starts floating around in the blood stream, it can float freely in the larger arteries.</p>
        <p>But if the plaque floats up to these small capillaries, (Click to start animation) it will block blood flow to the tissue downstream.</p>
        <p>The same type of thing happens when blood sugar is too high.   High blood sugar causes the red blood cells to swell up, (Click to animate) and this can block off capillaries as well.  High blood sugar also damages the walls of blood vessels increasing the risk for high blood pressure.</p>
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
           <div id="lesson-2-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}How does physical activity prevent  cognitive decline?{/t}</h2>
        <hr />
        <p>In addition to protecting our vascular health and thereby our brain health, more recent evidence suggests that physical activity seems to also play a direct role in promoting cognitive performance, cognitive reserve and brain health.  
  </p>
        <ul>
          <li>Directly, physical activity has been found to influence the processes by which learning and memory occur.</li>
          <li>Animal studies have shown that aerobic exercise (a rat running on a wheel) can have a profound effect on increasing the number of new brain cells that are born.</li>
          <li>In humans physical cardiovascular exercise is linked to increase in the size of the structure responsible for forming new memories (hippocampus)
            (Click to Reveal Circle)</li>
          <li>Physical activity has been found to increase a group of proteins called nerve growth factors .  There are lots of these growth factors, but most notably:
            <ul>
              <li>Cardiovascular exercise has been linked with increased production of one called BDNF (brain-derived neurotrophin factor).  BDNF has also been found to be more abundant in people with higher cognitive abilities.</li>
              <li>Strength training has been shown to increase a different nerve growth factor called IGF-1 (insulin-like growth factor-1).</li>
              <li>These nerve growth factors help neurons and dendrites grow and thrive.  Some have even referred to these growth factors as<strong> Miracle Grow for your brain cells</strong>. </li>
            </ul>
          </li>
        </ul>
        </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
           <div id="lesson-2-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Physical Activity and  
Cognitive Reserve{/t}</h2>
        <hr />
        
        <p>For example, in a recent study, researchers put 120 healthy older adults participants on a fitness plan for 1 full year.  Half of them (60) were assigned to a moderate to high intensity <strong>aerobics class</strong> 3 times per week and the other half (60) were assigned to a <strong>stretching and toning class</strong> that also met 3 days a week.</p>
        <p>MRI brain scans were given before the program, half-way through the program (at 6 months) and at the end of the program (1 year after the first scan).</p>
        <ul>
          <li>Before the program, the groups’ brain scans were not any different.</li>
          <li>After 6 months and again after a year:
            <ul>
              <li>The aerobics training increased the volume of the hippocampus by 2%,          
                <ul>
                  <li>(2.12% over baseline at 6-months and 1.97% over baseline at 12-months)</li>
                  <li>effectively reversing age-related loss in volume by 1 to 2 years</li>
                </ul>
              </li>
              <li>Volume for the stretching control group on the other hand declined 1.4% (1.40% at 6-months and 1.43% at 12-months)</li>
            </ul>
          </li>
        </ul>
        <p>Erikson, et al, 2010 http://www.pnas.org/content/early/2011/01/25/1015950108.full.pdf</p>
        
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
    
           <div id="lesson-2-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}How much Physical Activity 
do we need?{/t}</h2>
        <hr />
        <p>One study found that those who participated in leisure-time physical activity at least twice a week in midlife (between the ages of 40 and 55), lowered their odds of developing Alzheimer’s disease by 60%.  The largest impact was in people who had a genetic predisposition to dementia (meaning that they carried the APoE-4 allele, a gene found to be linked to Alzheimer’s disease), but the effect of exercise was still significant in people without this gene meaning that everyone’s risk for dementia seemed to be lower if they exercised.</p>
        <p>Another study looked at regular exercise, which they measured by asking participants how many times a week they participated in a variety of specific types of exercise.  They found that regular exercise was associated with a reduced risk for all types of dementia 6 years later.  They also found that those who exercised 3 or more times per week had a 32% reduction in risk for dementia.  The finding was greatest among those who had poor physical functioning at the start of the study.</p>
        <p>A similar study found that those who participated in moderate or high levels of physical activity and were dementia-free at the beginning of the study had a significantly reduced risk of cognitive impairment 2 years later.</p>
        <p>It seems clear that the more physical active people are the better off they are.</p>
        <p>But you don’t have to immediately become a body builder or start training for marathons to reap the benefits of exercise. Researchers have found positive results when they analyzed physical activity, including walking.</p>
        <p>The more walking, the better, but even walking briskly 90 minutes a week (that’s only 15 minutes a day) was all that was needed to improve cognitive outcomes and increased blood flow in the brain.  That translates to about walking as little as 6-9 miles a week, which is really a just a pretty nice walk (2-3 miles), 3x/week.  That seems doable doesn’t it?          </p>
        <p>There is still much research that needs to be done in this area to understand the relationship between exercise and specific types of dementia, but from what we know so far, exercise seems to be one of the best ways to protect your brain as you age.  It has some of the best evidence supporting it in terms of helping people build the “hardware” (brain cells) aspect of cognitive reserve.</p>
        
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
    
           <div id="lesson-2-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Increasing physical activity: 
The FITT Principle{/t}</h2>
        <hr />
        
        <p>As you can see from the last couple of slides, it’s not just about how often you exercise.  The brain benefits of exercise appear to increase when you increase several different factors related to your physical activity.</p>
        <p>One group of scientists pulled together a series of research articles and reviewed them inclusively.  They found that the amount of impact that exercise had on cognition depended upon several factors including the length of the fitness-training intervention, the type of the intervention, and the duration of training sessions,  Generally, higher levels of exercise at higher intensities for longer amounts of time throughout the life course appear to be most beneficial.          </p>
        <p>Because the risk of dementia decreases with increased intensity and duration of exercise, we recommend that people who already have a habit of exercising, set goals to step it up in some way.</p>
        <p>So, when we are thinking about improving our brain health through increased physical activity, there are a few different dimensions that you can consider following the FITT Principle:</p>
        <ul>
          <li>Frequency of our workouts – how often we plan to do them, for example, will we walk every day or 4 days per week?</li>
          <li>Intensity of our workouts – for example, are we going to walk at a brisk or a leisurely pace?, the</li>
          <li>Time of our sessions – how long will we walk for each time? And, of course, the</li>
          <li>Type of our workout – will it in fact be walking, or another type of exercise such as swimming, playing tennis, lifting weights or something else. </li>
        </ul>
        </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
           <div id="lesson-2-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Types of Physical Activity{/t}</h2>
        <hr />
        
        <p>Frequency, Intensity and Time for our physical activity is pretty straightforward, but what do we mean by type?  Here are some examples of the major categories of types of physical activities.  It is important for older adults to consider doing a variety of different types of workouts because they can all be beneficial to us in different ways.</p>
        
        <p>We tend to experience the greatest benefit from endurance type exercises, however, we can’t keep up with endurance routines without maintaining our flexibility and balance.  When we were young, balance was something that came naturally to us, as we age, it is something we need to work on to maintain. Flexibility is also often over-looked in terms of its importance.  In order to maintain our range of motion to be able to do things like reaching a can on the top shelf or bending down to pick up something that we dropped we need to work on our flexibility.  Finally, maintaining our strength is another key component that will allow us to continue caring for ourselves and keeping up with our daily activities.  Strength training can also help build bone density and seems to help us generate a different type of nerve growth factor than endurance exercise.  Ideally, you should try to incorporate each one of these types of exercises into your routine.</p>

<p class="forum">Review the listed types of physical activities. What types of physical activity participants are already active in, what is their favorite?
  Have you already practices all 4 types of activities. Post your responses to the Forum.</p>
<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">
        
        
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
           <div id="lesson-2-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Making the most out of our 
daily activities{/t}</h2>
        <hr />
        
        <p>In order to help maintain brain health, it is recommended that we live a lifestyle enhanced by as much physical activity as possible.  There are a variety of ways we could easily increase the amount of activity in our daily lives, these are just a few suggestions.</p>
        <ul>
          <li>When you’re going to the store, park far away from the door in order to limit the time you waste looking for parking and to get more steps in your day.</li>
          <li>Or even, park a block away from your destination – this way you don’t have to take time out of your day for your physical activity, just leave a few minutes early – as the research showed us, every bit of activity that we do will be beneficial to us.</li>
          <li>Walk instead of drive.</li>
          <li>Walking around the block in the middle of the day is a great way to take a break from whatever you are doing and refresh yourself and to burn some extra calories and benefit our brains!</li>
          <li>Make 2 laps at the grocery store:
            <ul>
              <li>1) A Memory Lap: Make a grocery list, but don’t use the list when you shop – this is a way you exercise your memory</li>
              <li>2) Then when you’re done, check the list and take another lap to get anything you missed – this helps you get some extra steps into your day and works your memory.</li>
            </ul>
          </li>
          <li>Stairs instead of the elevator – can even take the stairs up a few flights and then switch to the elevator if going up a lot of stories.
            <ul>
              <li>Fun Fact:  One woman who worked at a desk all day, said she never got out to do much walking.  She decided that every time she had to use the restroom she would walk up then down a flight of stairs – she lost 10 pounds in 3 months!  Find fun ways to add activity to your day.</li>
            </ul>
          </li>
          <li>Plan a walking date instead of a lunch date.  Remember, plans with friends don’t always have to be over food – plan a date to get together to walk the mall, or walk along the lakefront path or a forest path.</li>
          <li>Wear Comfortable Shoes.  If you wear uncomfortable shoes you will not walk as much as you do if your shoes are comfortable – so wear comfortable shoes everyday!</li>
          <li>Wear a pedometer to help keep you conscious of the number of steps you are getting it – if it is 7pm and you realize you haven’t done much for the day you could do a few extra laps around your home or apartment just to get in that movement.
            <ul>
              <li>It is recommended that, on average, everyone should walk 10,000 steps a day (this is the national recommendation by the surgeon general – your daily goal may be less or more, but this gives us a sense of where an average American should be in order to live an enhanced physically active lifestyle).</li>
            </ul>
          </li>
          <li>Keep weights in clear view – under the coffee table, somewhere where you will see them regularly as a cue to use them.
            Lift weights during commercials or while on the phone
            <ul>
              <li>Pace while talking on the phone </li>
            </ul>
          </li>
        </ul>
        </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
           <div id="lesson-2-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Standing{/t}</h2>
        <hr />
        <p>Another thing you can do to increase your activity and help your body is to take opportunities to stand as much as possible.</p>
        
        
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
    
             <div id="lesson-2-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Memory Strategy #2 - Visualization{/t}</h2>
        <hr />
        <p>Visualization: The Roman Room Method (a.k.a. the Method of Loci).</p>
        
        <p>We use our verbal skills so much day to day that sometimes it seems as though most of us have forgotten that we also have a visual memory.  We try to remember things by “telling ourselves” to remember it (auditory or verbal) as oppose to perhaps “picturing it” (visual).  In fact, many scientists argue that our visual memories may be stronger than our verbal memories.  They draw this conclusion from some memory studies but also because “language” or verbal skills evolved so much later than our visuospatial skills.  Our visual memories may be so effective because they have been part of our brains longer as our hunter and gathering ancestors had to use them to navigate large distances to survive.</p>
        <p>Some scientists argue that our new reliance on verbal memory may be the result of having become a literate society and the wide availability of written text, so we have now grown accustom to “externalizing” our memories.  Nowadays we write so many things down, keeping calendars and datebooks, communicating by email and text message, reading stories in books and now on e-readers as opposed to memorizing stories that we keep in our heads until we have the opportunity to tell to someone else.  Thus we seem to have lost some very effective memory techniques that were relied upon by pre-literate and even early literate cultures who didn’t have wide access to books.  Remember that tales like The Odyssey were passed down almost verbatim for centuries before anyone wrote them down.  People back then had strategies for remembering the details of these epic tales.  And even after people could read, when books were scarce, they championed their ability to memorize vast texts.  Now we can read e-books or even read the internet until we are cross-eyed.  We can “bookmark” and “highlight” and write things down, so our memories are a bit weaker than our ancestors’.  We could argue that we now have other skills, like how to organize all of this information, and we are likely more efficient, but nevertheless we agonize about our “failing memories.”  So to make our memories stronger, we will practice some of the strategies used by people before words took over the world.</p>
        <p>But just because we do not overtly use visual memory skills as much anymore doesn’t mean that we no longer possess the ability to do so, especially since it seems that we are somewhat “hard wired” to benefit from using visualization to improve our memories.</p>
        <p>Let’s talk more about using “visualization” to improve our memories:</p>
        <p> One quick way to use visualization is to take mental snapshots of things such as:</p>
        <ul>
          <li>Where you placed your keys</li>
          <li>Where you parked your car</li>
          <li>The arrangement of items on your desk before you take them off to dust</li>
          <li>The contents of your refrigerator</li>
          <li>Even a list</li>
        </ul>
        <p>You can also use your visual memory to help you memorize directions somewhere.  Instead of relying on the GPS, you can challenge yourself to memorize a new or somewhat unfamiliar route.</p>
        <ul>
          <li>If the route is brand new to you, then you can visualize the road signs that you will be on the lookout for and then imagine right and left arrows for the turns.</li>
          <li>If you sort of know the area, then try visualizing the intersections where you will make each turn.</li>
        </ul>
        <p>If you try this challenge then it will probably be a good idea to put the GPS or a map in the car just in case you get yourself </p>
        
        
          </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
             <div id="lesson-2-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Memory Exercise{/t}</h2>
        <hr />
        
        <h4>Visualization: The Roman Room Method</h4>
        <p>For today’s memory exercise, you are going to learn about and practice a very powerful visualization exercise that can be used to memorize virtually anything, but it is particularly useful when it comes to memorizing lists.  This technique is called the “Method of Loci,” but it is also sometimes called the “Journey Method” or the “Roman Room Method” because it was used by ancient Romans and likely the Greeks before them.  As you learned in today’s lecture, learning and practicing this method on a regular basis can bulk up the pathways in the frontal lobes underlying this skill.</p>
        
        <p>How this works is that you use your visual memory to help you out.  You place vivid mental images of whatever it is that you are trying to remember along a pathway around a familiar location.  The easiest place to start is within a home that is solidly ingrained in your memory.  For most people this is the house they grew up in.</p>
        
        


<p>Let’s take a moment to take a good look around this familiar space.  Imagine the driveway leading up to the house, recall the look of the path leading up to the front door, imagine the entry way just inside the front door, look around the front room, walk down the hallway and recall a mental picture of each room along the way.  Take a couple of moments to complete this mental tour of this memorable home as though you were there for an open-house.  When you make it back to the front room join us back in this room, maybe you’ll need to open your eyes.</p>

<p>Now we are going to remember a shopping list for brain healthy foods by placing very large, vivid, and humorous representations of them throughout the pathway we just took through this familiar house.</p>
 Here is the shopping list of Brain Healthy Foods:
<ul>
  <li>2 bunches of salad greens</li>
  <li>1 quart of blueberries</li>
  <li>1 pound of shelled English walnuts</li>
  <li>2 pounds of fresh wild salmon</li>
  <li>A quart of low-fat Greek yogurt</li>
  <li>2 bars of dark chocolate</li>
  <li>3 bottles of red wine</li>
  </ul>
<p>Now, start off by imagining that as you’re walking up the pathway to the house, it has been neglected for some time and you have to push back large, over-grown leaves that look like salad greens or leafy lettuce that are taller than you are.  Every time you move one out of the way a new one slaps you in the face.</p>
<p>The trick here is to imagine things that are absurd, unusual, humorous and even arousing in some way.  Emotional memories are often more salient because they get an encoding boost from the emotional brain structures that live near the memory center, so try to make walking through this pathway as dramatic as a Hollywood movie.</p>
<p>So you finally make it through the overgrown salad greens and you arrive at the front porch.  Blocking your way to opening the door is a container that looks like a quart of blueberries except that the container is the size of a hot-tub and there are little kids inside smashing blueberries over each other’s heads, making a colossal mess.  
  
</p>
<p>You finally manage to get the door open and once inside the entry way, you are met by a giant shelled walnut, dressed like one of the guards at Buckingham palace, asking you to give him a pound as a fee for passing into your childhood home.  You pay the walnut and move into the living room where you see a whole, 2-pound salmon, disgusting mouth and all, laying across the vent on the back of the old television set, steaming from the heat coming off of the tube of the TV, causing it to cook a little and to stink a lot!</p>

<p>Moving down the hallway, you pass by the first room and see that inside there is another giant quart-sized-looking container of yogurt and a Greek god or goddess of your choosing, but who is skinny with “low-fat”, is taking a bath in the yogurt.  Moving farther down the hallway, you look inside a bedroom and see two giant bars of dark chocolate laid out on the bed as though they are sleeping side-by-side.  It can help your memory if these bars of chocolate grow faces and you see them wake up and look at you or something like that.  Finally you arrive in the kitchen and open up the refrigerator door to see three large bottles of red wine that also have faces and start “whining” at you, so you immediately close the door to make them stop being so annoying.</p>

<p>Now that you’ve taken your walk through your own “Roman Room,” rehearse this path a few times later today, and we will see next week how well it stuck with you. The list is in your workbook in case you need to brush up on any items, but it’s possible through this exercise in what we call “elaborated encoding” that you may not have to reference it.</p>

<p>A great resource for learning more about this and a few other methods like it is the book Moonwalking with Einstein: The Art and Science of Remembering Everything by Joshua Foer, an entertaining account of how an average journalist (Mr. Foer, himself) trains to win the U.S. Memory Championship.</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
             <div id="lesson-2-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Sample Memory Goals{/t}</h2>
        <hr />
        <p>The more Memory Palaces you have, the easier it  will be for you to use the Roman Room Technique in different  circumstances.  So spend  some time this week &ldquo;revisiting,&rdquo; (either literally or in your mind) familiar  spaces that you can use as Memory Palaces.  Then spend some time practicing this technique.   Even though it is powerful (you may be surprised at how easily you  remember the list of foods from this week) it does take some work, and as with  most things, the  more you practice them the easier they get.</p></div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
               <div id="lesson-2-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Goal Setting for Physical Activity{/t}</h2>
        <hr />
        <p>Lifestyle changes are difficult.  In order to help you do that, we are going to  help you create short and long term goals.   Goal setting has been found to be an effective way to help create  behavioral habits and maintain healthy behaviors into everyday lifestyles.</p>
        <p>Start by identifying a long term goal,  then create action steps for short-term (1-week) to help you reach your long  term goals.   Often times, long term goals are too daunting that we don&rsquo;t even know  where to begin!</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
  
         <div id="lesson-2-slide-20" class="course-slide"> 
      <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr />
        
        <p>{t}Physical Activity Helps the Brain by:{/t}</p>
        <ul>
        	<li>{t}Improves vascular health{/t}</li>
            <li>{t}Increases brain volume{/t}</li>
            <li>{t}Increases production of brain cells (neurogenesis){/t}</li>
            <li>{t}Increases production of nerve growth factors (BDNF, IGF-1){/t}</li>
        </ul>

<p>{t}White dots are silent strokes that can build up over time to cause cognitive decline (vascular dementia){/t}</p>
<p class="forum">{t}Please post your responses to the following questions on the Forum:{/t}</p>
<ul>
  <li>{t}What are some benefits of physical activity?<span class="forum">{/t}</span></li>
  <li><span class="forum">{t}</span>How does physical activity help your brain?<span class="forum">{/t}</span></li>
  <li><span class="forum">{t}</span>What are white dots?<span class="forum">{/t}</span></li>
  <li><span class="forum">{t}</span>Name 3 direct ways that physical activity seems to directly improve cognition.<span class="forum">{/t}</span></li>
  <li><span class="forum">{t}</span>What is the Memory Strategy for this week?<span class="forum">{/t}</span></li>
  <li><span class="forum">{t}</span>Are verbal memories (thoughts repeated in our heads) stronger than visual memories?<span class="forum">{/t}</span></li>
  <li><span class="forum">{t}</span>What are your goals for this week?{/t}</li>
</ul>
<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">
    
        
        
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a> </div>
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div id="lesson3">
    <div id="lesson-3-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Emotional{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Course &raquo;{/t}</a> </div>
    </div>
  </div>
  <div id="lesson-4">
    <div id="lesson-4-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Intellectual{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a> </div>
    </div>
  </div>
  <div id="lesson-5">
    <div id="lesson-5-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Nutritional{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a> </div>
    </div>
  </div>
  <div id="lesson-6">
    <div id="lesson-6-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Spiritual{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Coming Soon!{/t}</h4>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a> </div>
    </div>
  </div>
  <div id="lesson-7">
    <div id="lesson-7-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Social{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/167585366.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Module Outline{/t}</h4>
        <ul>
          <li>{t}Review/Discuss content from last week{/t}</li>
          <li>{t}Overview of Social Activity and Healthy Brains{/t}</li>
          <li>{t}Examine ways in which social activity can help our brains{/t}</li>
          <li>{t}Social activities you can do{/t}</li>
          <li>{t}Goal Setting/Wrap-up{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a> </div>
    </div>
    <div id="lesson-7-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Welcome to Module Seven!{/t}</h2>
        <hr />
        <p> <img src="<?php echo $this->getImagesUrl('spencer/120133005.png'); ?>" alt="{t}Image{/t}"> </p>
        <p>{t}In the last module we discussed the impact of spirituality on longevity and brain health.{/t}</p>
        <p class="forum">{t}How did you do with your goals from last week? Those of you who met your goals, are there any tips or pointers you could share with the class about how you went about those goals? Those of you who had trouble in the last module, was there a particular barrier that you encountered? Do you have a concrete plan for overcoming that barrier and achieving your goals for the coming week. Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-7-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}More Socially Active Adults{/t}</h2>
        <hr />
        <p> <img src="<?php echo $this->getImagesUrl('spencer/here.png'); ?>" alt="{t}Image{/t}"> </p>
        <ol>
          <li>{t}Have better cognitive function{/t}</li>
          <li>{t}Experience less cognitive decline{/t}</li>
          <li>{t}Are less likely to develop Alzheimer’s disease and other dementias{/t}</li>
          <li>{t}Are less likely to develop disabilities {/t}</li>
        </ol>
        <p>{t}Ask: How many of you would consider yourselves socially active? How many of you have heard that being socially active is good for your brain?{/t}</p>
        <p>{t}We are going to talk today about how social activities may be a key component of brain health. The great news for this module is that we are going to be talking about how doing things with other people that you consider FUN is actually good for you!{/t}</p>
        <p>{t}Scientists have shown repeatedly that social engagement, meaning participating in social activities and keeping a robust social network, is associated with many beneficial outcomes in later life in terms of preserving our memory and thinking abilities. The majority of these findings come from observational studies, in which hundreds or thousands of older persons without cognitive impairments are followed over time to see who develops problems like Alzheimer’s disease, other dementias, or declines in their cognitive function. Such studies have shown that the more socially active seniors tend to have better cognitive function and experience less cognitive decline as they age. One study showed that in over a thousand people aged 65 and older, the people in the top 10% of social activity experienced an average rate of cognitive decline that was 70% less than the 10% least socially active. More socially active people are also less likely to develop Alzheimer’s disease or other
          forms of dementia, and they are less likely to develop disabilities and loss of independence.{/t}</p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a> </div>
    </div>
    
    
    
     <div id="lesson-7-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Why is social activity good for our brains?{/t}</h2>
        <hr />
        
        <p>{t}So why do more socially active older persons experience better cognitive outcomes? What are the ways in which social activity can improve the health of our brains?{/t}</p>
        
        <p>{t}There are a number of theories as to how this could work. More than one of these factors may be at play. You will see how many of these ideas tie in with other modules in the brain health series.{/t}</p>
        
        <p>{t}Social activity can lower stress and increase our mood. Some studies have shown that social isolation is linked to higher production of stress hormones. In an earlier module you learned all about how stress and negative emotions can be very bad for our brains. Therefore, social activity may be good for us by keeping us happy.{/t}</p>
        <p>{t}Social activity can provide social roles to older people and keep people engaged in communities and groups. This can be especially important post-retirement, as many people, especially men, consider their occupation to be their primary role. Social activity can help to fill this void that some people feel.{/t}</p>
        <p>{t}Social activity can provide a sense of purpose in life, which can be very important to the health and well being of older adults. A group of studies has shown that a strong sense of purpose in life is associated with less incidence of Alzheimer’s, less disability, and a longer life.{/t}</p>
        <p>{t}Social activity can keep seniors from disengaging from life and becoming couch potatoes. Many gerontologists, scientists who study aging, focus on disengagement and have shown that seniors who disengage from others and stop leaving their homes are much more likely to enter a quick spiral downwards in terms of health and being able to care for themselves adequately.{/t}</p>
        <p>{t}Human beings are social creatures in that we thrive on cooperation and the relationships we have with other people who are close to us. Seniors who socially disengage may be missing a critical element of what it is to be human.{/t}</p>
        <p>{t}A more direct reason that staying social can be good for our brain health is because being around family and friends who care about us can be good in terms of preventative health. Loved ones can notice unhealthy symptoms and behaviors that could be early signs that something may be wrong and that it is time to see a medical professional.{/t}</p>
        <p>{t}Finally, many social activities challenge us physically and mentally. Two other modules in this class will teach you why physical activity and mentally stimulating activity is good for you. Many social activities have these same elements and can be good for our brains in multiple ways!  
          {/t}</p>
        </p>
        
        
   </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
        
        
        
    <div id="lesson-7-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Social Brain Exercise{/t}</h2>
        <hr />
        
        <p>{t}Being social also seems to be good brain exercise.  As we discussed briefly in the emotional module, people who are more socially active, have lower rates of cognitive decline.  Lower stress may be one of the reasons for this, but increased intellectual stimulation may also be another mechanism.{/t}</p>
        
        <p>{t}Let’s think for a minute about all of the brain activities that are involved in carrying on a simple conversation:{/t}</p>

<p>{t}What sort of brain skills do you think are involved?{/t}</p>


<ol>
  <li>{t}The sides of our brains (the<strong> temporal lobes</strong>) are activated in a conversation because they are responsible for processing the sensations from our ears, so any sound, and converting that into meaningful information <strong>(language</strong>).  Our <strong>word bank</strong> is also stored here, so when we go searching for what we want to say, this part is activated.  This part also <strong>forms new memories</strong>.{/t}</li>
  <li>{t}The <strong>occipital lobes</strong> at the back of the head are devoted to processing sensations that come through our eyes.  So if you are communicating face-to-face with someone, this part of the brain is active in reading important social cues such as facial expression and gestures.{/t}</li>
  <li>{t}The front of the brain <strong>(frontal lobes</strong>) is responsible for what we call “<strong>executive functions</strong>” or things a CEO would do <strong>(plan, organize, direct attention, inhibit</strong>).  This part of the brain is what makes humans unique, allowing us to interact in civil ways.  It also helps us retrieve memories.  This part of the brain is also involved in <strong>motor function</strong>, allowing us to gesture with our body, make facial expressions and even move the muscles required to talk.  Therefore this part of the brain is also very active during a simple conversation.{/t}</li>
  <li>{t}The <strong>parietal lobes</strong> (top back) are involved in maintaining our <strong>attention</strong>.{/t}</li>
</ol>
<p>{t}</p>
<p>These are brain skills involved in a simple conversation.  Now think of all of the<strong> additional brain skills</strong> involved in <strong>planning outings</strong> with a friend (planning, spatial skills required to navigate to a meeting place – e.g. new restaurant) as well as<strong> maintaining a relationship</strong> (empathy, compassion, initiation, etc.).
  {/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
        
        
        
        
        
    <div id="lesson-7-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Oxytocin the  Love Hormone{/t}</h2>
        <hr />
  <ul>
  	<li>{t}A brain chemical that promotes bonding{/t}</li>
    <li>{t}Is activated when we are around people we feel a connection with:{/t}
      <ul>
        <li>{t}Spouse or partner{/t}</li>
        <li>{t}Children{/t}</li>
        <li>{t}Close friends{/t}</li>
        <li>{t}Even Pets
          
          {t}</li>
      </ul>
    </li>
    <li>{t}Oxytocin has been shown to play a role in memory improvement and brain plasticity.{/t}</li>
</ul>

        <p>{t}Finally, a chemical called <strong>oxytocin</strong> (sometimes called the love hormone) promotes bonding and is activated when we are around people we feel a connection with (spouse or partner, children, close friends, etc.).<strong> Oxytocin has been shown to play a role in memory improvement and brain plasticity</strong>.
          {/t}</p>
        
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
        
        
        
        
    <div id="lesson-7-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}An active lifestyle{/t}</h2>
        <hr />
        <p>{t}In fact, I would encourage you all to think of engaging in a general “active lifestyle”, replete with physical, mental, and social activities. Many activities are both social and physical, including going for walks with friends, exercise groups, and dancing. Many activities are both social and mental, including playing cards and other games, taking group classes, and book clubs. And then there are activities that hit that sweet spot of social, physical, and mental activity, such as learning new dance moves with a dance partner, playing sports which require strategy such as golf, and discovering new places with friends or a tour group.{/t}</p>
        
   </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
        
        
        
        
    <div id="lesson-7-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Cognitive reserve{/t}</h2>
        <hr />
        <p>{t}How many of you have heard the term “use it or lose it”? One of the theories for why social activity is good for us is that when we are social, we are using our brains and challenging them to remember names and faces, addresses, phone numbers, language skills, and other cognitive abilities. Think for a moment about all of the different cognitive skills that you use just to carry on a simple conversation, including: auditory and visual processing, emotion perception, memory, language, working memory, needed to remember what you want to say next, planning, organizing your thoughts – basically your whole brain. In other words, being social is “exercise” for our brains. In Session 1 of this course, you learned about the concept of cognitive reserve, and there is convincing evidence that social activity may be one way that we can build up this cognitive reserve capacity. More socially active seniors may have a larger reserve to work with and more to lose cognitively before they experience problems like dementia.{/t}</p>
        
        
   </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
        
        
        
        
    <div id="lesson-7-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}A caveat…{/t}</h2>
        <hr />
    
    <p>{t}In discussing the observed link between social activity and positive cognitive outcomes, we do need to caution that as I said before, most of the evidence comes from observational studies in which people are followed over time and their levels of social activity and their cognitive function is observed. Observational studies cannot prove causality beyond a shadow of a doubt and there are many reasons that social activity may be linked to better cognitive function that is not “causal” per se.{/t}</p>

<p>{t}For example, 1) some other factor, such as personality type, socioeconomic status, or health status, may be a common cause of both a person’s social activity level and their cognitive function. Most observational studies attempt to control for these influences but may not do so perfectly. 2) It may also be that early declines in cognitive function are what leads to people disengaging socially. Observational studies attempt to deal with this problem by measuring social activities many years before cognitive problems appear to establish that changes in cognition come after social activity levels are determined, but certain neurological diseases such as Alzheimer’s are now believed to start many years before they are clinically detected. 3) As a related concept, social disengagement may be an early marker for brain disease such as Alzheimer’s that manifests years before cognitive problems.{/t}</p>

<p>{t}The most well-designed studies have attempted to address these challenges to establishing a causal role for social activity, and the preponderance of evidence supports the idea that social activity actually affects our brain health, but these concerns cannot totally be ruled out. Because of the complexity of randomizing people to years of social activity, it is very difficult to conceive of randomized controlled trials in this area. But, despite some doubts about social activity having a direct effect on our brains, given that there are very few negative effects of social activity, there is little reason to not engage!{/t}</p>
    
</div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
    
    <div id="lesson-7-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Enriched environments{/t}</h2>
        <hr />
    
    <p>{t}Despite the lack of clinical trial  evidence of a causal role  for social activity in humans, there has been a large body of animal research  showing that animals that are allowed to experience what we might consider an  analogue of social activity experience beneficial changes in their brain.  Enriched environments are lab environments that are &lsquo;enriched&rsquo; in relation to  standard laboratory cages: animals (usually mice) are placed in larger cages  with other animals and a large amount of objects and obstacles and  opportunities for exercise.{/t}</p>
    <p>{t}Unlike human studies, animal researchers can have animals  live in enriched environments and others in standard cages, and then autopsy  them to observe differences in brain biology that can be attributed to living  in the enriched environments. Scientists found that mice in enriched  environments actually grew new neurons (brain cells), had more synapses (the  connections between neurons), had more dendritic branching, meaning there are more  branches coming off of brain cells (point to picture) are connecting to other  brain cells, and neurochemical changes such as an increase in  certain chemicals that lead to brain cell development.{/t}</p>
    <p>{t}Therefore,  these animal experiments give some biological evidence that humans who are  socially active and engaged may be experiencing some of these same beneficial  changes in their brain as compared to people who socially disengage from the  world. Coupled with the observational evidence in humans, the animal evidence  helps to paint a convincing picture of social activity&rsquo;s role in keeping our  brains healthy.{/t}</p>
    
    
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
       <div id="lesson-7-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Helpful tips on how to stay socially engaged{/t}</h2>
        <hr />
        <ol>
          <li>{t}Stay socially connected so you feel like you're a part of something – workplace, clubs, network of friends, religious congregation, or volunteer group{/t}</li>
          <li>{t}Make friends and family a priority and spend time with them regularly{/t}</li>
          <li>{t}Seek out friends and family for emotional support{/t}</li>
          <li>{t}Keep working as long as you can and want to      {/t}</li>
          <li>{t}After you stop working, find something that gives you a role and a purpose and has other people relying on you{/t}</li>
          <li>{t}Put your passion into action: volunteer for a cause that is meaningful to you{/t}</li>
        </ol>
        <p><a href="http://www.beautiful-minds.com/FourDimensionsOfBrainHealth/TheSociallyConnectedMind.aspx
" target="_blank">Beautiful-Minds.com</a></p>
    <p>{t}OK, now that we have gone over the scientific evidence, let’s talk about some ways that we can stay socially active to improve our brain health. Here are some healthy tips that are adapted from this website, beautiful-minds.com. [read list and go over each point individually.{/t}</p>
    
    
  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
       <div id="lesson-7-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Quality Matters{/t}</h2>
        <hr />
    <ul>
    	<li>{t}Negative relationships can take a toll on us both emotionally and physically{/t}</li>

<li>{t}Get the most out of your socialization by surrounding yourself with positive, supportive people{/t}</li>

</ul>
    
    
  </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
       <div id="lesson-7-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Fun social activities{/t}</h2>
        <hr />
    
    <ul>
    	<li>{t}Walking groups{/t}</li>
    	<li>{t}Dancing{/t}</li>
    	<li>{t}Bowling{/t}</li>
    	<li>{t}Bridge and other card games{/t}</li>
    	<li>{t}Coffee and tea groups
    	  Dinner with friends{/t}</li>
    	<li>{t}Goup trips to museums{/t}</li>
    	<li>{t}Anything you find FUN!!{/t}</li>
    </ul>
    <p>{t}To give you some good ideas, here are some fun social activities that you can engage in. Remember, you are more likely to stay socially active if you are doing something you have a lot of fun doing, and having fun may be the key to staying happy and healthy!{/t}</p>
    
</div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
       <div id="lesson-7-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Setting goals{/t}</h2>
        <hr />
        
        <ul>
       	  <li>Identify a long term goal (Sample long term goals):
        	  <ul>
        	    <li>Volunteer for a cause</li>
        	    <li>Join a group or club</li>
        	    <li>Spend more time withfamily and friends</li>
      	    </ul>
      	  </li>
        	<li>Set a short term goal for the week (Sample short term goals): 
        	  <ul>
        	    <li>Watch one less TV show and go for a walk with friend or family member instead</li>
        	    <li>Pick up the phone and call one person you have not talked to in a while        	  </li>
        	    <li>Introduce yourself to someone you see frequently but have never met (this moduel's exercise does not count)</li>
      	    </ul>
      	    </li>
       	</ul>
    
    <p>{t}Before we leave, I would like you to set some goals for staying socially active. We can set some long term goals, which may take a little longer to get into but hopefully can last a lifetime. But we can start with some short term goals, that you can accomplish by next week.{/t}</p>
    
    
</div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
       <div id="lesson-7-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Memory Strategy #7{/t}</h2>
        <hr />
    
    <h4>{t}Memory Tip #6{/t}</h4>
    <h5>{t}Rehearsal{/t}</h5>
    <p>{t}So often it seems that people overestimate the ability of the human memory, assuming to be able to remember things after just one exposure.  Often they forget that practice makes perfect, the operative word here being “practice.”  No self-respecting ballerina would be caught dead trying to perform a routine after just seeing it once and never rehearsing!  So why do we expect our memories to work perfectly without rehearsal? {/t}</p>
      
      <p>{t}If we really want our memories to live up to the expectations that we set for them, <strong>we have to invest some time in rehearsing what we want to remember.</strong>{/t}</p>
      
      <p>{t}Here are some tips for using rehearsal to your advantage:{/t}</p>
      
<p>{t}<strong>Repeat what you want to remember to yourself a couple of times.</strong>{/t}</p>

<p>{t}Recall back to a couple of weeks ago when we discussed the concept of Working Memory.  Remember that one of the systems in working memory is the phonological loop.  This is the place where you can repeat something to yourself a few times, which will keep it in your working memory longer, allowing you more time to “work with it,” perhaps linking it, visualizing, or some other strategy.  But even just rehearsing the info to yourself a few times can give you more time to make it into a memory.{/t}</p>
      
      
     <p>{t}<strong>Repeat what you want to remember out loud a couple of times</strong>.{/t}</p>
      This is easy to do in a conversation.  Simply repeat what the other person said in the form of a question.  It may seem awkward at first, but you may do it naturally already without realizing it.  It is standard practice of conversation.  
      “The Empire State Building is at the corner of 34th street and 5th Avenue, you say?”{/t}</p>
      
     <p>{t}This is a common tip for remembering the name of someone you just met also.  The standard recommendation is to try and use their name three times in your first conversation with them.{/t}</p>
     <ul>
       <li>Repeat it when they first introduce themselves{/t}
         <ul>
           <li>“Well hi Bill Smith, it is great to meet you.”{/t}</li>
           </ul>
         </li>
       <li>Call them by name once in the course of your conversation{/t}
         <ul>
           <li>“Have you lived around here for a long time, Bill?”       {/t}</li>
         </ul>
         </li>
       <li>Call them by name again when you end the conversation.{/t}
         <ul>
           <li>“Well Bill, it was really great to meet you.  I hope to see you around soon.”{/t}</li>
         </ul>
       </li>
       </ul>
     <p><strong>{t}Quiz yourself.</strong> Getting into a solid habit of quizzing yourself could work wonders in helping you improve your memory.  For example, you park on the 5th floor of the parking garage.  You practice your skill from Session 1 and pay attention to the sign indicating what floor you are on, and you may even write it down.  But one other thing you can do is to quiz yourself on the floor number at gradually increasing intervals.{/t}</p>
     <p>{t}Quiz yourself right after looking at the number or right after writing it down, and quickly verify if you are right or wrong.{/t}</p>
     <ul>
       <li>{t}Getting it right can help your memory because you will feel good, and you may get a little burst of happy brain chemicals that can improve your memory.{/t}</li>
       <li>{t}Getting it wrong can also help your memory because the disappointment that comes with getting it wrong can often provide a more salient memory than if we were to get it right.{/t}</li>
     </ul>
     <p>{t}Then quiz yourself on your walk to the elevator.  If you didn’t write the floor down, you will know if have the right answer by looking at the floor number on the elevator.{/t}</p>
     <p>{t}Then quiz yourself about half-way to your destination.{/t}</p>
     <p>{t}Quiz yourself again later after you’ve settled into the event that you’re attending.
       And quiz yourself again any other time you think about it, perhaps when you go to the rest room or when you have a quiet moment to yourself.{/t}</p>
     <p>{t}<strong>Tell someone else all about it.</strong> The common teaching method for getting students to learn the vast amounts of information required in medical school is “see one, do one, teach one.”  That last step is an important rehearsal technique that you can use in your everyday life.  Recounting an interesting fact you heard on the news, an entertaining story of a situation you experienced or a joke that someone told you is an easy way to rehearse what you want to remember.  What will work even better in helping you repeat the story will be to rehearse the story to yourself a few times (in the same way as quizzing yourself) to polish it up before telling someone else.{/t}</p>
    
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
    
       <div id="lesson-7-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Rehearsal Exercise{/t}</h2>
        <hr />
        
        <ul>
       	  <li>{t}Repeat Things to Yourself{/t}</li>
        	<li>{t}Repeat things out loud{/t}
        	  <ul><li>{t}Repeat with questions{/t}</li>
        	    <li>{t}Repeat names 3 times{/t}</li>
      	    </ul>
      	  </li>
        	<li>{t}Quiz Yourself{/t}</li>
        	<li>{t}Tell Someone Else{/t}
        	  <ul>
        	    <li>{t}See one, do one, teach one{/t}</li>
      	    </ul>
      	  </li>
       	</ul>
    
    <p>{t}Have people pair off and spend about 5 minutes interviewing the other person, uncovering 3-4 autobiographical facts about the other person that they did not know before.  This could include the other person’s middle name, where they grew up, their occupation, somewhere they’ve traveled, etc.  Encourage people to practice the  rehearsal techniques that were just discussed.{/t}</p>
    <p>{t}After 5 minutes of interviewing, ask the group to return to their seats.{/t}</p>
    <p>{t}Have them sit quietly for a minute or two, Quizzing themselves.{/t}</p>
    <p>{t}Then ask them to share what they learned.{/t}</p>
    
    
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
       <div id="lesson-7-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}This Week&rsquo;s Goals{/t}</h2>
        <hr />
    
    <h4>{t}Goals{/t}</h4>
    <ul>
      <li>{t}   You will likely need to <strong>offer guidance in helping set goals that are not too difficult or too vague</strong> – It’s better to set a “ridiculously simple goal” that a person can achieve in order to feel success than to set a goal that they will not achieve. {/t}</li>
    </ul>
    <h5>{t}Goals need to be:{/t}</h5>
    <ul>
      <li><strong>{t}Specific</strong> with respect to:{/t}
        <ul>
          <li>{t}Type of behavior – have people write a specific behavior (will log activities) as opposed to a vague aspiration (will try to monitor activities){/t}</li>
          <li>{t}Duration of the behavior (5 minutes, etc.){/t}</li>
          <li>{t}Frequency of behavior (4 times aweek){/t}</li>
        </ul>
      </li>
      <li><strong>{t}Simple</strong> (ridiculously easy goals are an important place to start because small successes create momentum for bigger change){/t}</li>
      <li><strong>{t}Feasible</strong> (same as simple){/t}</li>
    </ul>
    <h5>{t}Rewards{/t}</h5>
<ul>
  <li>{t}Rewards are intended to be used each time the goal behavior is performed – not merely at the end of the week.  Using the memory goal above as an example, each day a person pays close attention for 30 seconds two times in a single day, she gets to put on a spray of her favorite perfume (maybe in preparation for dinner or the next morning).  She doesn’t have to wait the entire week to use her perfume.  If the perfume is part of her daily routine, then she can continue this routine provided she meet her goal each day.{/t}</li>
  </ul>
<h5>{t}Here are some guidelines for rewards:{/t}</h5>
<ul>
  <li>{t}Some people <strong>may need to take some time to think over their reward</strong>, so encourage them to come up with a reward very soon if they do not finish that in class{/t}</li>
  <li>{t}Rewards should be small and feasible & it’s a good idea not to use a reward that will get in the way of some other health goal, such as cookies{/t}</li>
  <li><strong>{t}For a reward to be effective, the person must make an agreement with themselves that they will in no way get to have the reward without FIRST having achieved their small goal</strong>{/t}</li>
</ul>
<p>{t}Please share your plan to remember your goals and rewards and how you plan to track your progress, on the Forum.{/t}</p>
<img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">
        </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    
    
       <div id="lesson-7-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Recap{/t}</h2>
        <hr />
    <p class="forum">{t}Please answer the following questions on the Forum.{/t}</p>
    <ul class="forum">
    	<li>{t}What are some benefits of social engagement?{/t}</li>
        <li>{t}What are some possible ways that social engagement helps us age better?{/t}</li>
        <li>{t}Oxytocin is sometimes called what?{/t}</li>
        <li>{t}What is the Memory Tip for this week?{/t}</li>
        <li>{t}What are some ways to practice rehearsing memories?{/t}</li>
        <li>{t}What are your goals moving forward?{/t}</li>
        </ul>
    <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">


    
    
         </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Complete Module{/t}</a> </div>
    </div>
    
    
   
     
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div id="lesson-8">
    <div id="lesson-8-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Closing{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/82399215.png'); ?>" alt="{t}Welcome!{/t}">
        <h4>{t}Welcome to the final Module!{/t}</h4>
        <p>{t}In this module, we are going to review the key points from the last seven modules of this course and help you set goals for the future. We will also go over some strategies that you can use to maintain a brain healthy lifestyle.{/t}</p>
        <h4>{t}Module Objectives{/t}</h4>
        <ul>
          <li>{t}Review content from last seven modules of the course{/t}</li>
          <li>{t}Discuss progress{/t}</li>
          <li>{t}Goal setting and strategies to maintain a brain-healthy lifestyle{/t}</li>
          <li>{t}Post-program survey{/t}</li>
        </ul>
        <p class="forum">{t}Considering the past seven modules you have completed, do you feel that you have earned a sense of accomplishment? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Start Module &raquo;{/t}</a> </div>
    </div>
    <div id="lesson-8-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Brain Health Fundamentals{/t}</h2>
        <hr />
        <ul>
          <li>{t}Dementia is not a normal part of aging{/t}</li>
          <li>{t}Genetics do not equal destiny{/t}</li>
          <li>{t}Our lifestyle affects our brain{/t}</li>
          <li>{t}It is never too late to adopt brain-healthy behaviors!{/t}</li>
        </ul>
        <p>{t}Let us review some facts which serve as the foundation for our course. First, unlike slowed reaction time or impaired hearing, dementia is not a normal part of aging. Dementia is a disease, and while it is very common among older adults, it is not something that occurs in everyone who grows to be old.{/t}</p>
        <p>{t}Next, Alzheimer’s disease is not entirely caused by genetics. Although there are deterministic genes that result in dementia, individuals with these genes represent only a small subset of those with the disease, and typically the onset of this variant of Alzheimer's disease is earlier in the lifespan, typically before age 65.{/t}</p>
        <p>{t}Risk genes on the other hand only contribute to the likelihood that someone will develop dementia.  Therefore, someone may have the risk gene and not develop dementia.{/t}</p>
        <p>{t}At the beginning of this program, we told you that genes are responsible for only about 30% of the risk of contracting late onset Alzheimer ’s disease, the most common form of dementia. Therefore, approximately 70% of what causes the disease is environmental, much of which is within our control. This is why we say that lifestyle is an important factor in brain health.{/t}</p>
        <p>{t}Fortunately, it is never too late to adopt brain healthy behaviors. Although someone with a lifetime of participation in these behaviors may fare the best, even older adult will gain from them, so it is never too late to get started!{/t}</p>
        <div id="question2" class="question">
          <p style="text-align: center;"> <b>{t}Is Alzheimer’s diseaseentirely caused by genetics?{/t}</b><br />
            <select name="select" style="text-align: center;">
              <option selected="selected" value="select">{t}Select{/t}</option>
              <option value="0">{t}Yes{/t}</option>
              <option value="1">{t}No{/t}</option>
            </select>
          </p>
          <p class="right-answer hide">{t}Correct!{/t}</p>
          <p class="wrong-answer hide">{t}Alzheimer’s disease is not entirely caused by genetics.{/t}</p>
        </div>
        <p>&nbsp;</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Key Terms{/t}</h2>
        <hr />
        <ul>
          <li>{t}Alzheimer's disease and Dementia{/t}</li>
          <li>{t}Cognitive reserve{/t}</li>
          <li>{t}Neuroplasticity{/t}</li>
        </ul>
        <h5>{t}What is the difference between Alzheimer’s disease and dementia?{/t}</h5>
        <p>{t}Dementia is an umbrella term used to describe any type of stable decline in cognitive abilities, severe enough to interrupt a person's ability to function independently. Dementia describes the observable symptoms of a brain disease or injury. Alzheimer’s disease is a TYPE of dementia.{/t}</p>
        <p>{t}Alzheimer’s is a disease process – a medical condition – that causes the cognitive changes that produce dementia.{/t}</p>
        <h5>{t}How do we define cognitive reserve?{/t}</h5>
        <p>{t}Cognitive reserve is your brain’s reserve of both tissue and abilities that affects your risk for dementia.{/t}
        <p>{t}In this course, we have compared cognitive reserve to your  brain&rsquo;s retirement account. Individuals who have a lot of Cognitive Reserve are  more able to sustain losses before showing symptoms of dementia than people who   do not have much reserve. Cognitive reserve is not just about  preventing dementia. It is also about delaying the onset of  symptoms so you can have greater quality of life for a longer time.{/t}
        <h5>{t}How can we describe neuroplasticity?{/t}</h5>
        <p>{t}The adult brain can change much more than we ever thought  possible. Adult brains can grow new neurons and existing neurons can modify and  grow new connections between each other. Brains can recover from injury better  than we ever thought before as well.  All of this malleability is referred to as  plasticity – the brain is more plastic or changeable than we ever thought  before.{/t} </p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Six areas affecting brain health{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/138024136.png'); ?>" alt="{t}image{/t}">
        <p>{t}Let us list the six areas we studied that effect brain health:{/t}</p>
        <ul>
          <li>{t}Physical activity{/t}</li>
          <li>{t}Emotional{/t}</li>
          <li>{t}Intellectual{/t}</li>
          <li>{t}Nutrition{/t}</li>
          <li>{t}Spiritual{/t}</li>
          <li>{t}Social{/t}</li>
        </ul>
        <p>{t}Throughout  the course, we have helped you learn about how behavior changes in  different areas of your life could help you build your cognitive reserve and  maintain a healthy brain.{/t}</p>
        <p style="text-align: center; font-style: italic;">{t}Quiz yourself: <em>Close  your eyes and name all six areas of a brain-healthy lifestyle</em>.{/t}</p>
        <p>{t} What  kinds of behaviors in these areas can promote brain health?    Let us review some key points from each of the areas now.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Physical Activity{/t}</h2>
        <hr />
        <h4>{t}Key points:{/t}</h4>
        <ul>
          <li>{t}Physical activity lowers your lifetime odds of developing Alzheimer's disease{/t}</li>
          <li>{t}You don’t have to run a marathon!{/t}</li>
          <li>{t}Walking as little as 6-9 miles a week reduces  the risk  of cognitive decline.{/t}</li>
        </ul>
        <p style="text-align: center; font-style: italic;">{t}What are some easy ways to increase physical activity in your daily life? Post your responses to the Forum.{/t}</p>
        <ul>
          <li>{t}Physical activity increases:{/t}
            <ul>
              <li>{t}The growth of new brain cells{/t}</li>
              <li>{t}Nerve growth factors to help new and existing brain  cells{/t}</li>
              <li>{t}The growth of new blood vessels in the brain to  nourish and oxygenate brain cells{/t}</li>
              <li>{t}Brain volume and the size of key structures in the  brain (&ldquo;Reverses 1-2 years of age related volume loss&rdquo;){/t}</li>
            </ul>
          </li>
          <li>{t}People who have a genetic predisposition to Alzheimer's d isease  may be helped the most by physical activity.{/t}</li>
          <li>{t}The degree to which physical activity helps your brain depends  on length, type and duration of training sessions (Colcombe and Krammer, 2003).{/t}</li>
        </ul>
        <p>{t}But moderate levels of physical activity are enough to reduce the risk of cognitive impairment to some degree.{/t}</p>
        <p class="forum">{t}During  this course, we have asked you to increase your physical activity. Have you  been able to do that? How so?  Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Emotional{/t}</h2>
        <hr />
        <h4>{t}Key points:{/t}</h4>
        <ul>
          <li>{t}Chronic stress is toxic  to brain  cells and can increase your risk of all types of dementia.{/t}</li>
          <li>{t}Managing stress is an important part of a brain healthy lifestyle.{/t}</li>
        </ul>
        <p style="text-align: center; font-style: italic;">{t}<em>What stress management  techniques have you found to be most effective for you? Post your responses to  the Forum.</em>{/t}</p>
        <p>{t}In this module, we learned about the physiology of stress and its effect on the body and brain. We know that chronic stress can lead to depression, which has been linked with a higher risk of Alzheimer's disease. Controlling stress is an important component in a brain healthy lifestyle. We talked about several practices, such as mindfulness meditation, that can be used to reduce stress.{/t}</p>
        <p class="forum">{t}Have you incorporated mindfulness meditation or another stress reduction practice into your life? What stress management techniques have you found to be the most effective for you? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Intellectual{/t}</h2>
        <hr />
        <h4>{t}Key points:{/t}</h4>
        <ul>
          <li>{t}Stimulating your brain can promote cognitive reserve.{/t}</li>
          <li>{t}The best way to stimulate your brain is to try new things that are really out of character for you.{/t} </li>
        </ul>
        <p>{t}In this module  you learned  how intellectual stimulation promotes cognitive reserve.  And while  doing crossword puzzles every day is generally a good thing,  it  really seems that you  may   get a bigger return on  your investment by learning something new. We also  taught  you about diversifying  your cognitive  investments.{/t}</p>
        <p class="forum">{t}What does it mean to diversify your cognitive investments? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Nutritional{/t}</h2>
        <hr />
        <h4>{t}Key points:{/t}</h4>
        <ul>
          <li>{t}The food we eat affects our brains.{/t}</li>
          <li>{t}We can incorporate brain healthy food choices into our diet.{/t} </li>
        </ul>
        <p>{t}In this module, we learned how good nutrition can benefit our brains. Perhaps most importantly, we learned how to make healthy food choices that can promote cognitive health.{/t}</p>
        <p class="forum">Can you remember what kinds of foods are healthy for your brain? Without searching the Internet, post your response to the Forum (examples foods can include: healthy salad dressing, nuts, fish, tomatoes, poultry, cruciferous vegetables, fruits, dark green leafy vegetables, foods rich in omega 3’s and anti-oxidants).</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">
        <p class="forum">{t}What  foods should we avoid because they are not good for our brain (examples can  include: high fat dairy products, red meats, organ meats, butter, fried foods,  too many sweets)?{/t} </p>
        <p class="forum">{t}Can  you share how you have been able to  incorporate  more brain-healthy foods  in  your diet? Post your responses to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Spiritual{/t}</h2>
        <hr />
        <h4>{t}Key points:{/t}</h4>
        <ul>
          <li>{t}Research has demonstrated that people who participate in spiritual practices experience various benefits to their health.{/t}</li>
          <li>{t}There are a multitude of practices that could be considered spiritual.{/t} </li>
        </ul>
        <p>{t}In this module,  you learned  different types of spiritual practices, their benefits, and how they help us.  For example, meditation, Judeo-Christian practice and other spiritual practices  have been shown to have positive health outcomes. We also learned some of the  reasons why this might be the case. These include:{/t}</p>
        <ul>
          <li>{t}social  support{/t}</li>
          <li>{t}connection  to a higher power{/t}</li>
          <li>{t}healthy  lifestyle / clean living{/t}</li>
          <li>{t}gatitude{/t}</li>
          <li>{t}hopefulness{/t}</li>
          <li>{t}optimism{/t}</li>
          <li>{t}forgiveness{/t}</li>
          <li>{t}attention  training{/t}</li>
        </ul>
        <p>{t} What  practices to you engage in to help in this area of wellness? Post  your response to the Forum (examples may include: )?{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Social{/t}</h2>
        <hr />
        <h4>{t}Key points:{/t}</h4>
        <ul>
          <li>{t}Older adults who are socially active have better cognitive function, less cognitive decline, and are less likely to develop Alzheimer's disease and other dementias.{/t}</li>
          <li>{t}Social  activity  seems to help the brain  by:{/t}
            <ul>
              <li>{t}Lowering   stress{/t}</li>
              <li>{t}Promoting  positive  mood{/t}</li>
              <li>{t}Providing   social roles and a  purpose in  life{/t}</li>
              <li>{t}Keeping    people from &lsquo;disengaging&rsquo;{/t}</li>
              <li>{t}Satisfying  a basic  human need for social  interaction{/t}</li>
              <li>{t}Providing  opportunities for  physical  activity{/t}</li>
              <li> {t}Providing an efficient  outlet for brain exercise{/t}</li>
              <li>{t}Oxytocin  (a brain chemical associated with love and bonding) is  associated with positive brain plasticity{/t}</li>
            </ul>
          </li>
        </ul>
        <p class="forum">{t}What types of social activities  do you engage in? What steps have  you taken during this course, if any, to  increase your social activity? Post your response to the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}"> </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Keeping it Up!{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/133898315.png'); ?>" alt="{t}image{/t}">
        <p>{t}So we have spent a lot of time  working with you to help you  increase your investments in your Brain 401K over the past few weeks.  For some things, you have have likely  developed enduring routines that will stand the test of time.  Sort of like an automatic withdrawal from  your paycheck that goes into you 401K account.   It&rsquo;s so much of a part of your normal routine that you hardly notice  that you&rsquo;re investing.  For example you  may have been going to exercise classes regularly for so many years that you  didn&rsquo;t really even notice that you were investing in your Brain 401K.  It&rsquo;s not painful, it&rsquo;s routine.{/t}</p>
        <p>{t}However,  if you started any new habits over the last six weeks, these habits may be new  enough to where they are vulnerable to disruptions.  This is comparable to earning overtime pay or  a bonus and having the discipline to throw a bit of that toward your 401K.  Set-backs, distractions, and competing  priorities can easily get in the way of this &ldquo;investing goal&rdquo; much like they  can get in the way of a new &ldquo;brain investment goal&rdquo; such as a new habit.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Slips &amp; Setbacks{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/160316379.png'); ?>" alt="{t}image{/t}">
        <p>{t}Slips and setbacks are very common.  So common in fact that popular thinking about  habit change has shifted away from where they were denied or suppressed to  where they are now embraced and accepted.   Not that you have to abandon your goals, but by not judging a slip, you  are more likely to get back on track with your goal.{/t}
        <p>{t}We  have a tendency to be very hard on ourselves anytime we make a slip or suffer a  setback, which may lead to us throwing in the towel.  But what researchers are finding is that it  is less about the actual slip that can cause us to abandon our new habit as it  is the way we deal with the slip.{/t}</p>
        <p>{t}If  we see the slip as a major &quot;screw-up&quot; and think that we really &quot;blew it&quot; then  we are more likely to abandon our goal.  <strong>But  if we embrace the natural tendency to lose sight of a new goal or to  temporarily fall out of a new habit, we can move forward with that goal without  having to carry around all of the emotional baggage that comes with beating  ourselves up over the slip.</strong>{/t}</p>
        <p>{t}Say  for instance, your goal is to not eat cookies except for one night a week, say  Saturday nights.  And on a Wednesday  night you forget your goal and accidentally eat a cookie.  If you think to yourself, &quot;Oh I totally blew  it!  Oh well, that rule will never  work.&quot; Then you are <strong>allowing  perfectionism to destroy your new goal or new habit.</strong>{/t}</p>
        <p>{t}If  on the other hand you say to yourself, &quot;Uh, oh, I forgot my goal.  I slipped!   Oh well, back on the horse.&quot;  Then  you are much more likely to stick with your goal.{/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}When the CEO Fails Us{/t}</h2>
        <hr />
        <ul>
          <li>{t}Willpower relies on the Logical Brain{/t}</li>
          <li>{t}The Logical Brain inhibits the “instant gratification” impulses of the Emotional Brain{/t}</li>
          <li>{t}The Logical Brain loses power from:{/t}
            <ul>
              <li>{t}Lack of Sleep{/t}</li>
              <li>{t}Illness{/t}</li>
              <li>{t}Emotions:{/t}</li>
              <li>{t}Anger{/t}
                <ul>
                  <li>{t}Guilt{/t}</li>
                  <li>{t}Stress{/t}</li>
                </ul>
              </li>
              <li>{t}Routine Disruption{/t}</li>
            </ul>
          </li>
        </ul>
        <p>{t}How does one develop this attitude? The key is COMPASSION.{/t}</p>
        <p>{t}A slip doesn’t make you a bad person. <strong>Getting angry</strong> with yourself is counter productive because <strong>it activates the limbic brain & fight or flight.  Beating yourself up just makes you defensive.  Slips are normal.</strong>{/t}</p>
        <p><strong>{t}Will power relies on the executive brain</strong>. If the CEO calls in sick, goes on vacation or loses focus, we can give up on our goals.  This is because the CEO of your brain is in charge of “keeping your eye on the prize” or fully embracing the long-term reward of your goal.  Your limbic system or emotional or primitive brain wants things NOW.{/t}</p>
        <p>{t}As you learned in the Emotion Module, a big part of your Brain CEO's job is to inhibit the primitive brain.   So most often we slip because the logical brain can’t keep the emotional brain from seeking instant gratification.  It is very common for short-term rewards to get in the way of our long-term goals because short-term rewards are more salient – more “in-your-face.”  We have to actually “think” about long-term goals, which requires an energized and effective Brian CEO.{/t}</p>
        <p>{t}For example, you may avoid getting a hearing aid because you are embarrassed.  But in the long run, getting a hearing aid may prevent you from getting dementia.  Which is more embarrassing long term?  A hearing aid or dementia?  But the long-term consequence is not at the forefront of your mind the way your current appearance is.{/t}</p>
        <p>{t}When the CEO of your brain is out sick or takes a vacation, things can get a little messy.{/t}</p>
        <p>{t}The CEO loses power from:{/t}</p>
        <ul>
          <li>{t}Lack of sleep{/t}</li>
          <li>{t}Illness{/t}</li>
          <li>{t}Emotional hijacking{/t}
            <ul>
              <li>{t}Anger{/t}</li>
              <li>{t}Guilt{/t}</li>
            </ul>
          </li>
          <li>{t}Stress{/t}</li>
          <li>{t}Interrupted routine{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Why We Slip{/t}</h2>
        <hr />
        <p>{t}Even the very act of doing something new or  even thinking of doing something new can cause our CEO to call in sick.  This is because the  brain sees change as a threat – so our  emotional brain will kick in to trip us up from time to time.{/t}</p>
        <p>{t}This  is a popular model outlines some stages of change toward a new habit. With any of the particular habits that we  have been discussing, you may fall in one of these categories.  We are hoping for at least one or two new  habits that you are in the Action stage, but it&rsquo;s possible that you may not be  there yet, and it is likely that there are other aspirations or activities that  were part of your vision, that you are in the &ldquo;Pre-contemplative&rdquo; or  &ldquo;Contemplative&rdquo; stage.{/t}</p>
        <p>{t}We  present this model here to illustrate that even though we would like to think  that the stages of change naturally progress from left to right, in fact a  person's stage of change can jump all over the place, even from moment to  moment.{/t}</p>
        <p>{t}These  are slips, and all of the things we identified on the last slide as slips can  pop us out of action into an &ldquo;earlier&rdquo; stage of change.  How temporary or permanent that slip is, is  up to you.{/t}</p>
        <p>{t}One  of the main things that pops us out of action or preparation or even  contemplation is fear.  You may not  experience a particular sensation as fear, but if you dig down and sit with the  feeling, which may feel more like &ldquo;resistance&rdquo; or discounting the benefit of  the long term reward, it may all boil down to fear, apprehension, doubt,  etc.  Thoughts like, &ldquo;I just can&rsquo;t make  to the gym, I won&rsquo;t be able to walk for as long as I want and I will feel like  a failure.&rdquo;  Or &ldquo;Oh well, I can do my  memory exercise tomorrow,&rdquo; which may really translate to, &ldquo;I don&rsquo;t really like  the antsy feeling I get when I&rsquo;m practicing my memory skills,&rdquo; and antsy may  translate to the fight-or-flight response.{/t}</p>
        <p>{t}(This is a sub-set of the stages of change that are part of what are  called the &ldquo;Transtheoretical Model&rdquo; of change proposed by Prochaska an Di Clemente, two psychological  researchers.  It is widely used,  particularly in a method of psychological treatment and coaching practice  called Motivational Interviewing (MI).   The goal of MI is to identify where a person is in the stages of change  and gently work to motivate him or her to the next step.  It actually plays on the person&rsquo;s cognitive  dissonance, which was discussed in Session 4 and was part of the exercises of  that session.  By amplifying or pointing  out discrepancies between a person&rsquo;s ideal of themselves versus their current  behavior, an uncomfortable feeling emerges, which the coach uses to guide the  person toward changing the behavior to make it more in line with the ideal  self.  You have been doing this  throughout this entire program.){/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Compassion{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/78805527.png'); ?>" alt="{t}image{/t}">
        <p>{t}So what to do about slips you ask?  Well this brings us back to compassion.{/t}</p>
        <ul>
          <li>{t}Compassion allows us to <strong>dial down the emotional brain</strong>, and helps <strong>divert resources back to the thinking brain</strong>.{/t}</li>
          <li>{t}{t}</span>Compassion allows us to <strong>tolerate &quot;sitting&quot; with the feelings that are causing us resistance</strong> so that we can:{/t}
            <ul>
              <li>Experience them fully, allowing them to “have their day in court” or “be heard,” which often makes them go away, and{/t}</li>
              <li>{t}Provide the logical brain the opportunity to label the feelings, sort through the thoughts underlying the feelings and make new, more logical decisions as opposed to abandoning the goal and going back to old habits.{/t}</li>
            </ul>
          </li>
          <li><strong>{t}If you judge your feelings, you can’t feel safe enough to sit compassionately with them, so they are never &quot;aired out&quot; –</strong> they never “see the light of day.”  Instead they sit under the surface, controlling our behaviors, sabotaging our goals.{/t}</li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Exercise in Compassion{/t}</h2>
        <hr />
        <h4>{t}5 Minute Exercise{/t}</h4>
        <p>{t}The goal here is to lead participants in spending  some time in an relaxed state, offering compassion to themselves for  set-backs.{/t}</p>
        <h5>{t}Instructions{/t}</h5>
        <p>{t}Sit  back, relax and close your eyes. Take a  few relaxing breaths and notice some of the tension leave your body.  (Pause for 30-60 seconds, looking for  observable signs that people have relaxed).{/t}</p>
        <p>{t}Spend  sometime thinking about the last time that you set a goal for yourself that you  did not meet.  (Pause)  Think about the way that you felt the moment  that you realized that you were going to fail at your goal. (Pause) You may  feel some of those feelings now.  You may  feel disappointment, anger, frustration, or sadness.  You may feel like giving up and throwing in  the towel.  You may even feel  hopeless.  (Pause 30 seconds allowing  people to feel the feelings).  It is  normal to want to escape from these uncomfortable feelings, so if you feel  yourself becoming distracted, that is fine and perfectly normal.  Try to re-engage with the feelings if you  can.  (Pause){/t}</p>
        <p>{t}Now  imagine two competing sides of yourself are arguing over this set-back.  One side is punitive and critical.  You may give that side a name like &ldquo;<strong>the  bully</strong>&rdquo; or the &ldquo;<strong>drill  sergeant</strong>.&rdquo;   Spend some time imagining this person sitting on your right side,  voicing all of the things that you are telling yourself about why your slip was  so terrible.(Pause){/t}</p>
        <p>{t}Now  spend a moment imagining the opposite of this person on your left side who  represents your primitive and impulsive side.   The one that wants instant gratification, and wants to run away form  discipline.  You may give this side a  name like &ldquo;<strong>the  hippy</strong>&rdquo; or &ldquo;<strong>the  wild child</strong>.&rdquo;   (Pause){/t}</p>
        <p>{t}Now  that you can imagine these two sides pretty clearly, spend some time offering  these two sides of yourself compassion. It can help to offer them compassion  using the following meditation:  &quot;<strong>May  you be well, may you be happy, may you be free from suffering.</strong>&quot;  (Repeat this a few times){/t}</p>
        <p>{t}Repeat  these phrases over and over to each side of yourself.  You can spend time focusing on one side and  then the other or you can switch back and forth. &ldquo;May  you be well, may you be happy, may you be free from suffering.&rdquo; (Repeat a couple of times slowly to the group if this feels comfortable){/t}</p>
        <p>{t}(Pause  1-2 minutes allowing time to meditate){/t}</p>
        <p>{t}As  you spend some time offering this phrase to each side, <strong>you may  feel yourself start to detach from each side</strong>,  literally feeling yourself pull back from identifying heavily with one or the  other or both and gaining some distance. <strong> This  distance is your new self</strong>, not  the bully or the wild child, but you are now becoming &ldquo;the  watcher.&rdquo;{/t}</p>
        <p>{t}(Pause  1-2 minutes){/t}</p>
        <p>{t}As  you are watching, and offering these two sides compassion, <strong>you  can gain some distance from the things that cause you to abandon your goals</strong>.   This will help you pick yourself up, dust yourself off and get back on  the road of working toward the ideal self you have been envisioning.  The healthy, vibrant you 5, 10, or 15 years  down the road.{/t}</p>
        <p class="forum">{t}After completing the excersise above, please share your experience on the Forum.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('intro/forum_icon.png'); ?>" alt="{t}image{/t}">
        <p>{t}(This meditation is referred to as Lovingkindness Meditation, and there is more  information about it included in the workbook.   This particular exercise is   adapted from Martha Beck, PhD and her book The  Four-day Win,  and she is credited with the terms &ldquo;wild child,&rdquo; &ldquo;dictator,&rdquo; and &ldquo;watcher&rdquo;){/t}</p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;{t}Back{/t}</a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();">{t}Next{/t}&nbsp;&raquo; </a> </div>
    </div>
    <div id="lesson-8-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers">{t}Congratulations!{/t}</h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('spencer/160382234.png'); ?>" alt="{t}image{/t}">
        <h4 style="text-align: center;">You’re on your way to a brain healthy life!</h4>
        <p>{t}Congratulations on completing the Spencer Powell Brain Fitness Course! You know have the knowledge and tools to lead a brain-healthy life. We hope that you will continue to strive to make healthy choices in each of the six areas we&rsquo;ve discussed. We are available for any questions you might have as you move forward.{/t}</p>
        <p>{t}We have really enjoyed getting to know you, and hope this course was helpful. Please post any final thoughts, questions, or concerns to the Forum before you close out this final module. Best wishes as you carry on in the future!{/t}</p>
        <h4>{t}Evaluation (optional){/t}</h4>
        <p>{t}Please complete the Post-Course Evaluation. It is accessible via the course page, in the right sidebar.{/t}</p>
        <p>{t}Your feedback is greatly appreciated, and will help us to better serve other participants in the future. We ask that you complete it before you exit this course portal. You do not have to include your name on the evaluation. It is completely confidential.{/t}</p>
        <script>
				function myFunction(){
					alert("Coming Soon!");
				}
				</script>
        <p style="text-align: center;">
          <input type="button" style="width: 175px;" onclick="myFunction()" value="Post-Course Evaluation" />
        </p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}End Course{/t}</a> </div>
    </div>
  </div>
</div>
