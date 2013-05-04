<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach(array(
		'.lesson-1', 
		'.lesson-2', 
		'.lesson-3', 
		'.lesson-4', 
		'.lesson-5',) as $lesson)
	$this->widget(
			'ext.fancybox.EFancyBox',
			array('id' => $lesson,
				  'config' => array('width' => '720',
									'height' => '95%',
									'arrows' => false,
									'autoSize' => false,
									'mouseWheel' => false))
	);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('154418413r.png'); ?>);">
  <h1 class="bottom"><?php echo t($course->title); ?></h1>
</div>
<div id="sidebar">
  <div class="box-sidebar one">
    <h3><?php echo t('Statistics'); ?></h3>
    <br />
    <img class="block-center" src="<?php echo $this->getImagesUrl('286x352_Grafix_1in5.png'); ?>" alt="image" />
    <p><?php echo t('One in five caregivers report having had some degree of training, but continue to seek additional resources.'); ?></p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>Alzheimer's Association</h3>
    <br />
    <p><?php echo t('10 Early Signs and Symptoms of Alzheimer\'s'); ?></p>
    <p> <a href="https://www.alz.org/alzheimers_disease_10_signs_of_alzheimers.asp" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('alz.png'); ?>" alt="image" /></a></p>
    <p><?php echo t('Memory loss that disrupts daily life may be a symptom of Alzheimer\'s or another dementia. Alzheimer\'s is a brain disease that causes a slow decline in memory, thinking and reasoning skills. There are 10 warning signs and symptoms. Every individual may experience one or more of these signs in different degrees. If you notice any of them, please see a doctor.'); ?></p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>U.S. Dept. of Health &amp; Human Srvc.</h3>
    <p><?php echo t('2011 - 2012 Alzheimer\'s Disease Progress Report'); ?></p>
    <p><a href="http://www.nia.nih.gov/alzheimers/publication/2011-2012-alzheimers-disease-progress-report" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('msml/adpr-front.png'); ?>" style="width:150px; height: 95px;" alt="image" /></a></p>
    <p><?php echo t('A summary of Alzheimer\'s disease research, infrastructure, and funding supported by the NIH.'); ?> </p>
    <br />
  </div>
</div>

<!-- start main content section here -->

<div class="column-wide">
  <h2 class="flowers"><?php echo t($course->title); ?></h2>
  <p><?php echo t($course->description); ?></p>
  <h5><?php echo t('Access - 1 year / Completion - 8 weeks (recommended)'); ?></h5>
  <h4><?php echo t('Objectives'); ?></h4>
  <ul>
    <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  <h4><?php echo t('Course Lessons'); ?></h4>
  <h5><a href="#"><?php echo t('Pre-Course Survey'); ?></a></h5>
  <ul>
    <li> <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> <?php echo t('Overview of Memory Loss'); ?></a> <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a> <a href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1"></a> </li>
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> <?php echo t('Communication Strategies'); ?></a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-11" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-12" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-13" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-14" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-15" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-16" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-17" data-fancybox-group="lesson-2" class="hide lesson-2"></a> </li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> <?php echo t('Making Decisions'); ?></a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-11" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-12" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-13" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-14" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-15" data-fancybox-group="lesson-3" class="hide lesson-3"></a> </li>
    <li> <a href="#lesson-4-slide-1" data-fancybox-group="lesson-4" class="teal lesson-4"> <?php echo t('Planning for the Future'); ?></a> <a href="#lesson-4-slide-2" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-3" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-4" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-5" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-6" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-7" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-8" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-9" data-fancybox-group="lesson-4" class="hide lesson-4"></a> <a href="#lesson-4-slide-10" data-fancybox-group="lesson-4" class="hide lesson-4"></a></li>
    <li> <a href="#lesson-5-slide-1" data-fancybox-group="lesson-5" class="teal lesson-5"> <?php echo t('Effective Ways of Coping'); ?></a> <a href="#lesson-5-slide-2" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-3" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-4" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-5" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-6" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-7" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-8" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-9" data-fancybox-group="lesson-5" class="hide lesson-5"></a> <a href="#lesson-5-slide-10" data-fancybox-group="lesson-5" class="hide lesson-5"></a></li>
  </ul>
  <h5><a href="#"><?php echo t('Post-Course Survey'); ?></a></h5>
  <h4> <?php echo t('Resources'); ?></h4>
  <p><?php echo t('Please use these listed resources in the completion of this online course. Pleaes contact your instructor or the program director if you have additional resources you would like to see added here.'); ?></p>
  <p><a href="http://www.alz.org" target="_blank">Alzheimer's Association</a></p>
  <p><a href="http://www.nih.gov" target="_blank">National Intitute on Health (NIH)</a></p>
  <p><a href="http://pewinternet.org" target="_blank">Pew Internet &amp; American Life Project</a></p>
  <br />
  <br />
  <div class="box-white">
    <div id="developers">
      <h4><?php echo t('Facilitators &amp; Course Developers'); ?></h4>
      <h5><?php echo t('Content Designer:'); ?></h5>
      <p><a href="http://matherlifewaysinstituteonaging.com" target="_blank">Mather LifeWays Institute on Aging</a><br />
        <?php echo t('Through research-based programs and innovative techniques, Mather LifeWays Institute on Aging is committed to advancing the field of geriatric care. Cutting-edge research lays the foundation for our solid solutions to senior care challenges, including recruitment, mentorship, training, and retention. Used by individuals and entire organizations, our nationally recognized, award-winning programs include training modules, online courses, toolkits, and learning modules designed to make learning fun and easy. Our programs have been shown to result in measurable improvements in the quality of care provided and workforce retention.'); ?></p>
      <p><a href="http://www.alz.org/illinois/" target="_blank">Greater Illinois Chapter | Alzheimer's Association</a><br />
        <?php echo t('The Alzheimer’s Association, Greater Illinois Chapter serves 68 counties in Illinois with offices in Bloomington, Carbondale, Chicago, Joliet, Rockford and Springfield. Since 1980, the Chapter has provided reliable information and care consultation; created supportive services for families; increased funding for dementia research; and influenced public policy changes. Today, the Greater Illinois Chapter serves the more than a half million Illinois residents affected by Alzheimer’s disease throughout our chapter area, including 210,000 people with the disease.'); ?></p>
      <h5><?php echo t('Course Developer: '); ?><a href="mailto:jwoodall@matherlifeways.com">Jon Woodall</a></h5>
      <p><?php echo t('Mr. Woodall is responsible for all MLIA corporate workforce wellness programs related to design, implementation, publication, and evaluation. Additionally, he seeks new grant funding to support or extend current grants related to corporate workforce wellness programs. '); ?> </p>
      <h5><?php echo t('Facilitator: '); ?><a href="mailto:eziegemeier@yahoo.com">Ellen Ziegemeier</a></h5>
      <p><?php echo t('Ms. Ziegemeier has been facilitating online courses for Mather LifeWays Institute on Aging since 2004. She earned her Masters in Anthropology, and has worked locally and abroad -  Latin America and South America for various aging services. She is fluent in English and Spanish, and has a strong passion for caregiver training. '); ?> </p>
    </div>
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
        <h2 class="flowers"><?php echo t('Overview of Memory Loss and Related Symptoms'); ?></h2>
        <hr />
        <img src="<?php echo $this->getImagesUrl('msml/154418413.png'); ?>" alt="image" style="margin: 0 auto 0 auto;">
        <p><?php echo t('We are delighted that you are interested in MSML Online. This five-lesson course is intended to help family members of someone in the early stages of memory loss to meet the challenges they face now and in the future. Research evaluation has shown that participation in this course increases family members’ knowledge and improves coping skills with respect to their relatives’ memory and behavior changes.'); ?></p>
        <p><?php echo t('Lesson Objectives:'); ?></p>
        <ul>
          <li><?php echo t('To introduce participants and give an overview of the course.');?></li>
          <li><?php echo t('To explain major medical causes of memory loss.'); ?></li>
          <li><?php echo t('To ensure that a medical evaluation is done to explore reasons for memory loss.'); ?></li>
          <li><?php echo t('To explain symptoms of Alzheimer’s disease and related dementias.'); ?></li>
          <li><?php echo t('To describe current and proposed medical treatments.'); ?></li>
          <li><?php echo t('To describe research efforts to treat or prevent memory loss.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <div id="lesson-1-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Welcome!'); ?></h2>
        <hr />
        <p><?php echo t('Welcome to the first lesson of MSML Online. We want to encourage everyone to participate via the Forum/Blog. However, at the same time we wish to protect everyone’s privacy. Therefore, we ask that confidentiality be maintained. Simply put, whatever is said here must stay here.'); ?></p>
        <h4><?php echo t('Introductions'); ?></h4>
        <p class="forum">
        <p><?php echo t('We will begin by asking you to say something about who you are and what brings you here. Please answer these questions on the Forum/Blog:'); ?></p>
        <ul>
          <li><?php echo t('What is your name?'); ?></li>
          <li><?php echo t('What is your relationship with the person who is experiencing memory loss?'); ?></li>
          <li><?php echo t('How long have you noticed the problem with memory or thinking?'); ?></li>
          <li><?php echo t('What is the name of the medical condition or diagnosis, if known, that accounts for the problem?'); ?></li>
        </ul>
        </p>
        <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image" style="width:250px; height:186px;">
        
        
        </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers">Media Storm</h2>
        <hr />
        <p><?php echo t('Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur\'s 83-year-old father, Herbie, became too infirm to care for himself.'); ?></p>
        <div style="width:400px;">
          <div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ce9beaabc886268&w=400&h=340&amp;lang=none"></script></div>
          <div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">Millions of middle-aged Americans are caring for their children as well as their aging parents. When filmmaker-photographer pair Julie Winokur and Ed Kashi took in Winokur's 83-year-old father, they decided to document their own story. See the project at <a href="http://mediastorm.com/publication/the-sandwich-generation" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/the-sandwich-generation</a></div>
        </div>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Who We Are - Name / Relationship / How Long Ago Problem was Noted? / Diagnosis?'); ?></h2>
        <hr />
        <h4><?php echo t('Goals of the course'); ?></h4>
        <p><?php echo t('This five-week series of lessons is intended to help you meet the current challenges of caring for someone in the early stages of memory loss. This condition is usually due to a medical condition such as Alzheimer’s disease or a related dementia. Therefore, this first session focuses on medical reasons for memory loss and its treatments. If your relative has not had a thorough medical evaluation yet, we hope this information will encourage you to seek one right away. This first lesson is also intended to give you other medical information whereas the remaining lessons will provide other types of information and guidance for coping with your relative’s memory loss.'); ?></p>
        <p><?php echo t('Memory loss and other signs of mental decline have profound effects on the lives of individuals and families. Nevertheless, we are convinced that a good quality of life can still be maintained for all concerned by learning to make changes in lifestyle and outlook. For many family members, this involves a change in relationships and priorities. At times the demands may seem overwhelming. This course is aimed at helping you make decisions about how and when to make changes in your lifestyle, both now and in the future.'); ?></p>
        <p><?php echo t('In writing the content for these classes, the developers spent many years talking to countless people with memory loss and their family members. They believe that there is no single way of coping successfully. Everyone must find ways that suit their own particular needs or situation, but it can be done. Those who have met the challenges of memory loss have taught us about the need for flexibility, patience, humor, faith, and friendship. Such qualities are developed over time. It is our sincere hope that a solid understanding of memory loss in the early stages will assist you in this process.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('AGENDA - Making Sense of Memory Loss Online'); ?></h2>
        <hr />
        <p><?php echo t('The agenda for the five lessons includes these general topics. We strongly encourage you to complete all five lessons as the information of each class flows into the next one. In this first lesson, an overview of memory loss and a host of brain diseases known as dementias will be given. Again, this information is mainly medical in nature.'); ?></p>
        <p><?php echo t('Lesson number two covers communication skills that will help you and others in caring for your relative. Lesson number three prepares you for the major decisions that will need to be made as memory loss progresses such as when to stop driving and health and financial decisions. In lesson number four, planning for the future is the focus.'); ?></p>
        <p><?php echo t('Finally, in lesson number five we will talk about how to keep your relative engaged in meaningful activities and the need to take steps to care for yourself. It is our belief that if you take good care of yourself, your relative with memory loss will be better off too.'); ?></p>
        <p><?php echo t('To make sure that we address your questions, please tell us what questions you have. We may not be able to answer all of these questions immediately, but as the course goes along, we will refer back to your questions to make sure we respond to them. Feel free to ask more questions as we go along or jot down notes for future reference.'); ?></p>
        <p><?php echo t('In this first lesson, we will address the following questions:'); ?></p>
        <ul>
          <li><?php echo t('What causes memory loss?'); ?></li>
          <li><?php echo t('How are brain diseases diagnosed?'); ?></li>
          <li><?php echo t('What are the symptoms and stages of Alzheimer\'s disease?'); ?></li>
          <li><?php echo t('How is memory loss treated?'); ?></li>
          <li><?php echo t('What is being done in the area of medical research?'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Definition of Dementia'); ?></h2>
        <hr />
        
        <img src="<?php echo $this->getImagesUrl('msml/135095760.png'); ?>" alt="image" style="margin:0 auto 0 auto;">
        <ul>
        	<li><?php echo t('Deterioration of at least two brain functions, including memory.'); ?></li>
            <li><?php echo t('A syndrome, not a diagnosis.'); ?></li>
            <li><?php echo t('In the past, referred to as senility or “hardening of the arteries.”'); ?></li>
         </ul>
        <p><?php echo t('Dementia refers to an acquired and progressive loss of mental functions due to a brain disorder. Memory loss is typically the first symptom shown by someone with dementia. This is not a normal part of the aging process, even though the vast majority of persons who experience a dementia are over 65 years of age. A medical diagnosis is required to determine the underlying cause or causes of symptoms. In the past, terms like “senility” and “hardening of the arteries” were commonly used to describe dementia but do not accurately explain the disease process at work.'); ?></p>
        
          <div id="question1" class="question">
        <p><b><?php echo t('Is Dementia a syndrome, or diagnosis?'); ?></b>
          <select>
            <option selected="selected" value="select"> <?php echo t('Select'); ?> </option>
            <option value="1"> <?php echo t('Syndrome'); ?> </option>
            <option value="0"> <?php echo t('Diagnosis') ?> </option>
          </select>
        </p>
        <p class="right-answer hide"> <?php echo t("Dementia is a syndrome."); ?> </p>
        <p class="wrong-answer hide"> <?php echo t("Dementia is a syndrome, NOT a diagnosis."); ?> </p>
      </div>
        
        
        
        
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Brain Functions'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Memory'); ?></li>
          <li><?php echo t('Orientation'); ?></li>
          <li><?php echo t('Language'); ?></li>
          <li><?php echo t('Judgment'); ?></li>
          <li><?php echo t('Perception'); ?></li>
          <li><?php echo t('Attention'); ?></li>
          <li><?php echo t('Ability to perform tasks in sequence'); ?></li>
        </ul>
        <p><?php echo t('Dementia typically unfolds gradually over a period of many years but it can begin suddenly or unexpectedly in rare cases. It affects some or all of these brain functions. Search the Web for examples and greater explanations on these topics.'); ?></p>
        <p class="forum"><?php echo t('On the Forum, comment on if you ever forget a name or forget an appointment or get lost, and what did it feel like at the time?'); ?></p>
        <p><?php echo t('Imagine how difficult it would be to experience this type of problem on a regular basis. We will address the experience of living dementia during the next section.'); ?></p>
          <img src="<?php echo $this->getImagesUrl('msml/forum_icon.png'); ?>" alt="image" style="width:250px; height:186px; margin-left:auto; margin-right:auto;">
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Dementia'); ?></h2>
        <hr />
        <table style="width:100%;">
          <tr>
            <th><h5><?php echo t('Reversible Dementias'); ?></h5></th>
            <th><h5><?php echo t('Irreversible Dementias'); ?></h5></th>
          </tr>
          <tr>
            <td><ul>
                <li><?php echo t('Toxic Effects of Medications'); ?></li>
                <li><?php echo t('Infections'); ?></li>
                <li><?php echo t('Metabolic disorders'); ?></li>
                <li><?php echo t('Major depression'); ?></li>
                <li><?php echo t('Brain tumors'); ?></li>
              </ul></td>
            <td><ul>
                <li><?php echo t('Alzheimer’s Disease'); ?></li>
                <li><?php echo t('Multi-infarct/Vascular'); ?></li>
                <li><?php echo t('Parkinson’s Disease'); ?></li>
                <li><?php echo t('Lewy Body Disease'); ?></li>
                <li><?php echo t('Over 50 rare types'); ?></li>
              </ul></td>
          </tr>
        </table>
        <p><?php echo t('As you can see, dementia is an umbrella term that includes reversible and irreversible conditions. Search the Web for examples and greater explanations on these topics.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Medical Evaluation of Dementia'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('History from the individual and relative or friend'); ?></li>
          <li><?php echo t('Mental status test'); ?></li>
          <li><?php echo t('Clinical exam'); ?></li>
          <li><?php echo t('Blood work'); ?></li>
          <li><?php echo t('Brain scan'); ?></li>
          <li><?php echo t('Only if indicated: Psychological testing, HIV test, Brain biopsy, PET scan, Lumbar puncture, EEG'); ?></li>
        </ul>
        <p><?php echo t('A medical evaluation is always needed to clarify the diagnosis so that both reversible and irreversible conditions can be identified, treated, and understood by all concerned.'); ?></p>
        <p><?php echo t('Basic elements of a medical evaluation by a doctor consist of the following: an accurate history of the symptoms, a brief mental status test, a physical examination, blood tests (Complete Blood Count, Chemistry profile, thyroid function, syphilis serology, Vitamin B12, and Folate) and brain imaging though either a CT scan or MRI scan.'); ?></p>
        <p><?php echo t('Sometimes additional tests are ordered for the sake of thoroughness in diagnosing the exact type of dementia. There is no single test, such as a blood test, available to diagnose AD, as is the case with diabetes, for example. However, when other disorders have been ruled out and common symptoms of AD such as progressive loss of memory have been documented, there is a high probability for obtaining an accurate diagnosis by an experienced physician.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Criteria for Probable Alzheimer’s Disease'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Dementia is evident without other disorders to account it.'); ?></li>
          <li><?php echo t('Deficits in at least two areas of cognition.'); ?></li>
          <li><?php echo t('Progressive worsening of recent memory and other functions.'); ?></li>
        </ul>
        <p><?php echo t('Criteria have been established to guide physicians in making the diagnosis. In most cases, these criteria are useful to differentiate between AD and other types of dementia. Any doubts about the accuracy of the diagnosis should be checked by a second opinion from a medical specialist such as a neurologist. Most people who experience progressive loss of memory have AD. Therefore, the major focus of the rest of today’s class will be on this particular condition.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Prevalence of Alzheimer’s Disease by Age'); ?></h2>
        <hr />
        <p><?php echo t('Download and read the 2011 Alzheimer’s Disease Facts and Figures Report from The Alzheimer\'s Association website.'); ?></p>
        <a href="http://www.alz.org/downloads/facts_figures_2011.pdf" target="_blank"><img src="<?php echo $this->getImagesUrl('pdf-icon.png'); ?>" alt="pdf icon"></a>
        <p><?php echo t('How many Americans have AD today? How many people in your state are estimated to have AD? Can you guess how many people are expected to have AD 40 years from now?'); ?></p>
        <p><?php echo t('Based on projections of the older population in the coming decades, it is expected that the numbers of Americans with AD will grow dramatically.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Dr. Alois Alzheimer'); ?></h2>
        <hr />
        <p><?php echo t('Alzheimer\'s disease was first described in 1906 by Dr. Alois Alzheimer, a German neurologist and pathologist. He was the first scientist to describe the symptoms in a female patient and connect them to damaged areas in her brain. Following her death, Dr. Alzheimer performed an autopsy and found shrinkage of the brain as well as tiny abnormalities he referred to as tangles and amyloid plaques. Search the Web for facts and a picture of Dr. Alois Alzheimer.'); ?></p>
        <p><?php echo t('Experts today agree that what is called “early stage” AD is probably the result of many years of the disease slowly developing in the brain. In the late 1990s, researchers began to identify “mild cognitive impairment” or “MCI” as a very early sign of AD in many people. Persons with this condition show evidence of recent memory loss on formal testing but show no other brain impairments such as disorientation. Recent studies indicate that about half of people with MCI develop early stage AD within 5 years and most of them develop AD within 10 years. In other words, in addition to memory loss, another brain function will begin to show signs of deterioration.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Stages of AD'); ?></h2>
        <hr />
        <h5><?php echo t('Early Stage'); ?></h5>
        <p><?php echo t('AD is slowly progressive and may last three to twenty years. The rate of progression varies from person to person. The disease tends to advance according to stages of severity but people can remain in the early stages for five years or longer. AD unfolds in subtle ways, not unlike normal absent-mindedness, except with daily regularity. Early stage symptoms may not be noticed until the affected person or family realizes that a pattern has developed. Something may occur that makes symptoms more evident, such as an acute illness.'); ?></p>
        <p><?php echo t('Based on your experience, do any of these early stage symptoms or signs look familiar to you? What were the first signs you noticed in your relative? Please record your responses on the Forum.'); ?></p>
        <p><?php echo t('Forgetting appointments, misplacing things, difficulty managing a checkbook, word finding problems, and loss of initiative are typical changes at this stage. Symptoms may be inconsistent, with "good days" and "bad days" making life unpredictable for all concerned. One’s ability to manage self-care tasks is still intact at this point but reminders and supervision are needed with activities of daily living (ADLs) such as cooking, shopping, and paying bills.'); ?></p>
        <p><?php echo t('After searching the Internet, describe the remaining stages of AD, in detail, on the Forum:'); ?></p>
        <ul>
          <li>
            <h5><?php echo t('Middle Stage'); ?></h5>
          </li>
          <li>
            <h5><?php echo t('Late Stage'); ?></h5>
          </li>
          <li>
            <h5><?php echo t('Final Stage'); ?></h5>
          </li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Changes in the Brain'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Key chemicals malfunction, disrupting communication among cells'); ?> </li>
          <li><?php echo t('Tiny abnormalities form: plaques &amp; tangles'); ?> </li>
          <li><?php echo t('Communication between nerve cells is disrupted'); ?> </li>
          <li><?php echo t('Brain cells die and brain shrinks'); ?></li>
        </ul>
        <p><?php echo t('Most people think of the nervous system as the body’s electrical wiring. This is correct up to a point. Nerve cells transmit impulses much like wires transmit electricity. But unlike wires, which are connected at all times, brain cells do not touch one another. They have microscopic gaps between them called synapses. Nerve impulses must jump these gaps along the way and communicate with other brain cells. They do it with the help of chemicals called neurotransmitters. In AD, many brain chemicals are either insufficient or overabundant for reasons that are not well understood.'); ?></p>
        <p><?php echo t('The tangles and plaques formed by AD represent the death of cells throughout the brain. The brain shrinks in size, losing as much as one-third of its weight. Tangles consist of abnormal collections of twisted threads found within brain cells. Plaques consist of an abnormal deposit of a protein between brain cells called amyloid.'); ?></p>
        <p><?php echo t('Although most changes due to the disease can only be seen at the microscopic level, in advanced cases of the disease, some abnormalities can be seen with the naked eye.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers">Media Storm</h2>
        <hr />
        <p><?php echo t('MediaStorm is an award-winning interactive design and video production studio that works with top visual storytellers, interactive designers and global organizations to create cinematic narratives that speak to the heart of the human condition.'); ?></p>
        <br />
        <br />
        <div style="width:400px;">
          <div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ccd9bb6ef492263&w=400&h=340&amp;lang=none"></script></div>
          <div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">With humor as well as unflinching honesty, <i>It Ain't Television... It's Brain Surgery</i> is Ray Farkas's first-person account of his own brain surgery, which he underwent in hopes of reducing the debilitating symptoms of Parkinson's Disease. See the project at <a href="http://mediastorm.com/publication/it-aint-television-its-brain-surgery" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/it-aint-television-its-brain-surgery</a></div>
        </div>
        <br />
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Definite Risk Factors for Alzheimer\'s Disease'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Increasing age'); ?> </li>
          <li><?php echo t('Heart disease'); ?> </li>
          <li><?php echo t('Diabetes'); ?> </li>
          <li><?php echo t('Down Syndrome'); ?> </li>
          <li><?php echo t('Race'); ?> </li>
          <li><?php echo t('Family history; genetics'); ?></li>
        </ul>
        <p><?php echo t('Circumstances that put one at risk for diseases are referred to as risk factors. For example, inhaling tobacco smoke is known to increase one’s risk of getting lung and heart diseases. High blood pressure, high cholesterol levels, and obesity significantly increase one’s chances for heart disease. Identification of these risk factors has led to  advances in prevention, treatments, and cures.'); ?></p>
        <p><?php echo t('After searching the Internet, post other factors that are not already listed, on the Forum.'); ?></p>
        <p><?php echo t('It should be kept in mind that many conditions such as stroke, diabetes, cancer, and heart disease also tend to run in families. However, just because one’s parent had a certain disease does not mean that his or her children are destined to get it too. Other factors such as environmental risks must be considered.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Possible Risk Factors for AD'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Environmental toxins'); ?></li>
          <li><?php echo t('Low formal education &amp; low occupational attainment'); ?> </li>
          <li><?php echo t('Previous head trauma'); ?> </li>
          <li><?php echo t('Cerebrovascular disease'); ?> </li>
          <li><?php echo t('Dietary factors'); ?></li>
        </ul>
        <p><?php echo t('Possible risk factors are those suspected of being linked somehow to AD, but the    linkage has not been proven. Weak or strong associations with AD may be attributed to  a complex number of factors still unidentified.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-18" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Strategies for Medical Treatment'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Prevention of disease'); ?> </li>
          <li><?php echo t('Delay onset'); ?> </li>
          <li><?php echo t('Slow rate of progression'); ?> </li>
          <li><?php echo t('Treat primary symptoms (cognitive)'); ?> </li>
          <li><?php echo t('Treat secondary symptoms (behavioral)'); ?></li>
        </ul>
        <p><?php echo t('After searching the Internet, list other strategies for medical treatment on the Forum'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('FDA Approved Treatments'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('ARICEPT (donepezil)'); ?></li>
          <li><?php echo t('EXELON (rivastigmine)'); ?></li>
          <li><?php echo t('RAZADYNE (galantamine)'); ?></li>
          <li><?php echo t('NAMENDA (memantine)'); ?></li>
        </ul>
        <p><?php echo t('Tacrine or Cognex was the first drug approved by the Food and Drug Administration (FDA) for treating AD but it fell out of favor due to its adverse side effects. In 1996, the FDA approved the drug known as Aricept or donepezil, followed by Exelon or rivastigmine and then Reminyl, known by the generic name of galantamine. All of these prescription drugs attempt to replace a deficient brain chemical. Research studies showed that almost half of persons taking these drugs slightly improved or stabilized their memory loss over a period of several months. Thus, these drugs may have the effect of slowing down the progression of the disease in some cases. Possible side effects include nausea, vomiting, and diarrhea.'); ?></p>
        <p><?php echo t('There has not yet been a head-to-head study to show which of these drugs is superior to the rest. Some people will react well to Aricept whereas others will react well to Razadyne or Exelon. Some people choose to stop taking one drug if there appears to be no benefit and instead try another one. There is evidence that this strategy works for some people. It should be cautioned that no improvement is observed in many cases. At best, improvement is mild and the progression of the disease may be slowed a bit.'); ?></p>
        <p><?php echo t('In 2003, the FDA approved the first drug for the treatment of moderate to severe Alzheimer\'s disease. Namenda, also known by its generic name, memantine, is the first of a new class of medications for AD distinct from the above noted drugs. The drug has not been tested among persons in the early stages of AD. It is possible to take Namenda in combination with one of these other drugs but side effects such as dizziness must be monitored. A doctor should oversee how and when any of these drugs are used.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Participating in Research'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Experimental medications'); ?> </li>
          <li><?php echo t('Adventurous attitude required'); ?> </li>
          <li><?php echo t('Criteria for inclusion and exclusion'); ?> </li>
          <li><?php echo t('Informed consent'); ?> </li>
          <li><?php echo t('Other types of research studies'); ?> </li>
          <li><a href="http://www.clinicaltrials.gov/" target="_blank">www.ClinicalTrials.gov</a></li>
        </ul>
        <p><?php echo t('All of the medications just mentioned underwent a rigorous testing process for many  years prior to approval by the U.S. FDA. Testing first  takes place with animals and then a small number of people to ensure safety and  potential effectiveness. The next phase involves a large number of human subjects to determine whether or not a medication is effective. Volunteers are always needed to  participate in this effort.'); ?></p>
        <p><?php echo t('An adventurous attitude is required since it is not known if these experimental drugs are  truly effective—that is the purpose of the research. Most such drug studies require close cooperation among volunteers, their families and medical staff. In spite of one\'s willingness to participate in a given study, there is always a strict set of inclusion and exclusion criteria so that most people do not qualify for a variety of reasons.  All eligible participants in any research study must sign a consent form that spells out the risks and benefits of participation. Apart from drug studies, researchers conduct a wide variety of studies into the nature of AD and its treatment or prevention. Again, all such studies are subject to informed consent so that the rights of participants are  protected.'); ?></p>
        <p><?php echo t('If interested in exploring participation in drug studies or other research studies in the  local area, visit the Alzheimer\'s Disease Education and Referral Center '); ?><a href="http://www.nia.nih.gov/Alzheimers/ResearchInformation/ClinicalTrials/" target="_blank"><?php echo t('website'); ?></a>.</p>
        <p><?php echo t('Many research studies now in progress are aiming to prevent or slow down the  progression of AD. As mentioned earlier, some people exhibit persistent forgetfulness  but lack any other symptoms of AD. They are referred to as having, “Mild Cognitive  Impairment” and many of them develop additional symptoms of AD over time. Many  drug trials today are aiming to preventing “full blown” AD in such persons.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Potential Treatments/ Prevention'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Anti-Inflammatory Drugs'); ?></li>
          <li><?php echo t('Antioxidant Agents'); ?> </li>
          <li><?php echo t('Statin drugs'); ?> </li>
          <li><?php echo t('Alternative Medicine'); ?> </li>
          <li><?php echo t('A Vaccine?'); ?></li>
        </ul>
        <p><?php echo t('Many other drugs are in various stages of testing. Meanwhile, several other approaches  to treating and preventing AD are under investigation.'); ?></p>
        <p><?php echo t('After searching the Internet, list other potential treatments and preventions on the Forum'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Other Ways to Reduce Risk?'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Physical Exercise'); ?> </li>
          <li><?php echo t('“Use It or Lose It”'); ?> </li>
          <li><?php echo t('Diet'); ?></li>
        </ul>
        <p><?php echo t('After searching the Internet, list other ways to reduce risk on the Forum'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-23" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Air Chamber Cure for Reagan\'s Alzheimer\'s!'); ?></h2>
        <hr />
        <p><?php echo t('This is a <a href="http://books.google.com/books?id=9_EDAAAAMBAJ&pg=PA3&lpg=PA3&dq=%22Air+Chamber+Cure+for+Reagan%E2%80%99s+Alzheimer%E2%80%99s!%22&source=bl&ots=45LsmPZfRl&sig=eDj68E8i5G76vpCUD2Bx8GIy0Ow&hl=en&ei=J0qnTqbAE6KMiAK89NHhDQ&sa=X&oi=book_result&ct=result&resnum=1&ved=0CCwQ6AEwAA#v=onepage&q=%22Air%20Chamber%20Cure%20for%20Reagan%E2%80%99s%20Alzheimer%E2%80%99s!%22&f=false" target="_blank">clipping</a> from a national tabloid. Like so many other headlines in those  newspapers, this one is not really true. There are many things advertised as potential cures or treatment for AD that have no scientific basis. One must be careful to scrutinize  these claims and not waste time and money on the equivalent of snake oil. At times,  there are reputable people selling phony potions. The bottom line here is: Buyer  Beware! Be sure to consult with your physician before trying any new treatment.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-24" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Directions for Research'); ?></h2>
        <hr />
        <p><?php echo t('Despite huge increases in research funding over the past two decades aimed at finding  the root causes of AD and other brain diseases, scientific progress usually occurs at a  slow pace. Yet there is reason to hope for breakthroughs as thousands of researchers  worldwide are working in several major areas:'); ?></p>
        <h5><?php echo t('Further identify risk factors and underlying causes'); ?></h5>
        <p><?php echo t('Until the causes of AD and the risk factors that can be modified are identified, means of    preventing and treating it will remain difficult. Numerous studies are examining this key    area of research. The United States is the world leader in all areas of AD research.'); ?></p>
        <h5><?php echo t('Improve diagnostic tools for accurate and early detection'); ?></h5>
        <p><?php echo t('Pinpointing biological markers for AD and finding other ways of detecting the disease as early as possible have enormous implications for prevention, diagnosis, and treatment.'); ?></p>
        <h5><?php echo t('Develop better treatments'); ?></h5>
        <p><?php echo t('More effective drugs for treating AD include cholinesterase inhibitors as well as new approaches to treating its symptoms.'); ?></p>
        <h5><?php echo t('Improve approaches to care'); ?></h5>
        <p><?php echo t('There are non-medical approaches that promote the well-being of persons with memory  loss. For example, the therapeutic uses of music and physical exercise are not yet fully  known but researchers are examining them.'); ?></p>
        <h5><?php echo t('Reduce distress of families'); ?></h5>
        <p><?php echo t('Families provide the bulk of care to people with memory loss. The role of providing care  to a disabled relative is filled with risks to one’s psychological, social, and financial wellbeing.  Social research is focusing on ways to reduce the negative outcomes associated with caring for a relative with memory loss.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-25" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Good Sources of Information'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Speaking Our Minds: Personal Reflections from Individuals with     Alzheimer’s by Lisa Snyder. Baltimore: Health Professions Press, 2009.'); ?></li>
          <li><?php echo t('A Dignified Life by David Troxel &amp; Virginia Bell. Deerfield Beach, FL:     Health Communications, 2002.'); ?></li>
          <li><?php echo t('<a href="http://www.ahrq.gov/clinic/alzcons.htm" target="_blank">Early Alzheimer’s Disease: Patient and Family Guide</a>, Consumer Version, Rockville, MD: U.S. Department of Health and Human Services.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-1-slide-26" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Closing'); ?></h2>
        <hr />
        <p><?php echo t('Before closing, we want to note that this first lesson is the most technical in nature.  Although there were not many opportunities for sharing your ideas, the remaining four  lessons will offer plenty of time for your input. Facts about the medical causes and  treatments for memory loss are important. However, we will spend the remaining lessons  talking about how to cope with the practical, day-to-day challenges of living with someone with memory loss.'); ?></p>
        <p><?php echo t('Finally, we wish to introduce the book, <a href="http://www.amazon.com/Alzheimers-Early-Stages-Friends-Caregivers/dp/0897933974" target="_blank">Alzheimer’s Early Stages: First steps for family,  friends and caregivers. The</a> book was written by one of the  developers of this course. It is a useful companion guide to the material we cover in  these classes. For example, chapters 1 to 4 cover the information shared today in  greater detail. We highly recommend that you purchase it today and read those first 4  chapters. We will be recommending other chapters in the weeks ahead that reinforce  key points covered in these lessons.'); ?></p>
      </div>
      <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
    </div>
  </div>
  <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Communication Strategies'); ?></h2>
        <hr />
        <p><?php echo t('Objectives:'); ?></p>
        <ul>
          <li><?php echo t('To give an overview of communication changes typical in early memory loss.'); ?></li>
          <li><?php echo t('To familiarize participants with general principles for maintaining communication with a person experiencing early memory loss.'); ?></li>
          <li><?php echo t('To describe several ways to encourage verbal expression.'); ?></li>
          <li><?php echo t('To review common communication pitfalls, and how to avoid them.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <div id="lesson-2-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Welcome Back!'); ?></h2>
        <hr />
        <p><?php echo t('Welcome to the second lesson of MSML Online. One of the more frustrating and difficult aspects of memory loss is that the person\'s ability to communicate may be compromised. In this class, we will discuss how to adapt to these changes. We will cover these general topics and get into specifics along the way:'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
  </div>
  <div id="lesson-2-slide-3" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Agenda for Lesson 2'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Communication changes in early stages of memory loss'); ?></li>
        <li><?php echo t('General principles for enhancing communication'); ?></li>
        <li><?php echo t('Ways to encourage verbal expression'); ?></li>
        <li><?php echo t('Avoiding communication pitfalls'); ?></li>
      </ul>
      <p><?php echo t('"What we see depends upon where we sit." - This quote speaks to the fact that your perception is crucial in making necessary accommodations to the challenges of caring for someone with memory loss. It also speaks to the fact that your relative often sees things in a much different way than you do. This is important to remember as we discuss the memory changes your family member may be experiencing and how this may affect his/her ability to communicate.'); ?></p>
      <img src="here" alt="image">
      <p><?php echo t('Do you see the old woman or the young woman in this drawing? Can you see both women?'); ?></p>
      <p><?php echo t('Some people can only see one or the other but both are right! This drawing illustrates the fact that different people can see the same reality but in different ways. This may hold true in your situation as well. You and the person with memory loss may be experiencing the same reality but in different ways. For example, your relative may not be as upset with the changes in memory and communication as you might be. You can easily remember your relative as a completely capable individual whereas he or she may have slowly adapted to the changes in memory and thinking over time. It is typical for that person to lack insight into all of the changes that have taken place.');?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-4" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('The Person\'s Level of Awareness'); ?></h2>
      <hr />
      <h4><?php echo t('Role of Denial'); ?></h4>
      <p><?php echo t('Denial is a term familiar to most of us. It refers to the human tendency to deny that a painful reality is occurring despite the hard times at hand. It seems reasonable to assume that anyone with memory loss would downplay or deny the presence or the severity of his/her problem. However, it appears that denial is less of an issue than we might expect. Instead of denying the presence or severity of symptoms, persons with memory loss have varying degrees of insight or awareness into their difficulties.');?></p>
      <p><?php echo t('Some people with AD, for example, have little or no awareness, while others may have much awareness. Still others may have awareness now and then but do not dwell upon the implications of their disease. Scientists are just beginning to understand how damage to certain parts of the brain is associated with personal insight or awareness. The damage to the brain itself may be responsible for these "degrees" of awareness. ');?></p>
      <h4><?php echo t('No awareness'); ?></h4>
      <p><?php echo t('Some persons seem to forget that they are forgetful. They have no appreciation of their limitations. They reject offers of help by others since they do not perceive any need. Getting their cooperation with respect to any need for care or oversight is virtually impossible in light of their resistance. They are not in a state of "denial." They simply lack insight due to impairment in the brain.');?></p>
      <h4><?php echo t('Partial awareness'); ?></h4>
      <p><?php echo t('Most people with memory loss have some awareness into their deficits, especially whenthey are put in demanding situations that tax their memory and thinking. On the other hand, they may not dwell on their problems. The experience of "living in the moment" is often their outlook.');?></p>
      <h4><?php echo t('Much awareness'); ?></h4>
      <p><?php echo t('Those who have a high degree of awareness appear to be the ones most prone to suffering from reactive depression. They may grieve over their past losses and worry about the future in ways that we can not understand. Fortunately, only a minority of people with memory loss seems acutely aware of the true nature of their impairments.');?></p>
      <p><?php echo t('Understanding where your family member is in terms of awareness of his/her situation can be helpful as you think about communication and how it has been affected by their memory loss. There may be some communication issues that are very distressing to you but that do not particularly upset your family member. Likewise, there may be some communication issues that are problematic for your family member but that you do not consider problematic.');?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-5" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('What is Communication?'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Sending and receiving messages'); ?></li>
        <li><?php echo t('Speaking and listening'); ?></li>
        <li><?php echo t('Reading and writing'); ?></li>
        <li><?php echo t('Gestures, facial expression, body language'); ?></li>
      </ul>
      <h4><?php echo t('Communication'); ?></h4>
      <p><?php echo t('Communication is the exchange of information, ideas and emotions. It is how we convey our thoughts, wishes, and feelings. In order for communication to occur, the message needs to be not only sent, but received. We need to not only hear but to also understand the message – otherwise, communication has not really occurred. We have all had experiences where we thought we made ourselves clear, only to find that the other person interpreted the message differently than we intended! (Search the Web for excercises in Communication) ');?></p>
      <p><?php echo t('Communication is complicated! It involves not just speaking our minds, but also listening to the other person. As your exercises teach, it entails speaking, listening, and watching others for cues.');?></p>
      <p><?php echo t('Listening is not as easy as it seems. To truly listen, we need to be completely attentive to the other person. Often, we may think we are listening to the other person when we are actually distracted. Maybe we aree distracted by something else that we are doing, like driving a car or trying to decide which kind of soup to buy at the grocery store. Maybe we are distracted because we are thinking about something else while the person is talking, or because we are busy thinking about what our response to the person will be. It is hard to truly listen – and it takes practice. (Search the Web for excercises in Listening)');?></p>
      <p><?php echo t('Reading and writing are forms of communication. Some of us respond better to messages that are received in writing than we do to verbal messages. Some of us may find that it helps us to write things down as a way of thinking them through. Sometimes we have trouble communicating because our preferred way of communicating may not be the other person\'s. For example, maybe you like to write notes or send e-mails to someone who prefers to talk face-to-face or over the telephone. So we need to be sensitive to how we communicate, to make sure we communicate is appropriately.');?></p>
      <p><?php echo t('Body language is another important component of communication. Gestures, facial expressions and body posture are often just as important in communication (if not more important) as are the words we use to express an idea.');?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-6" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Types of Memory'); ?></h2>
      <hr />
      <p><?php echo t('There are many kinds of memory. Understanding them and how they work can help us to understand some of the communication challenges faced by persons with dementia.'); ?></p>
      <ul>
        <li><?php echo t('Sensory memory'); ?></li>
        <li><?php echo t('Working memory'); ?></li>
        <li><?php echo t('Short-term memory'); ?></li>
        <li><?php echo t('Long term or remote memory'); ?></li>
        <li><?php echo t('Episodic memory'); ?></li>
        <li><?php echo t('Procedural memory'); ?></li>
      </ul>
      <p><?php echo t('Search the Web for examples and greater explanations of these topics.'); ?></p>
      <p><?php echo t('It is important to understand the different types of memory, so that we can see how impairment in these may affect one\'s ability to communicate. Note that people with early stage memory loss tend to have more problems with working and short term memory than with long term, episodic and procedural memory. When having a conversation with someone with memory loss, it is important to remember that they may have difficulty recalling recent events or may need more time to retrieve the information. Next, we are going to look at some of the changes that may occur with communication as memory becomes impaired.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-7" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Changes in Communication'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Word finding'); ?></li>
        <li><?php echo t('Comprehending'); ?></li>
        <li><?php echo t('Digressing and repeating'); ?></li>
        <li><?php echo t('Reading and writing'); ?></li>
        <li><?php echo t('Difficulty understanding abstract concepts'); ?></li>
      </ul>
      <p><?php echo t('Word finding refers to that "tip of the tongue" phenomenon that we all experience from time to time. We know what we want to say but just cannot find the word right away. People who have memory loss experience this phenomenon to a degree that it interferes with their ability to communicate.'); ?></p>
      <p><?php echo t('Comprehension often becomes impaired. The person may have a difficult time tracking conversations or following instructions that have more than one step to them. The person with memory loss is more likely to digress during conversations – jumping from the original topic to another, related one. Once the person digresses, they may have a difficult time remembering the original topic of conversation; they may get "off track" easily. Because of changes in memory, it is also common for the person with memory loss to repeat himself/herself because he or she may forget what has already been said.'); ?></p>
      <p><?php echo t('Reading and writing may be affected. The person may have difficulty in understanding written material, or may not be able to communicate clearly in writing.'); ?></p>
      <p><?php echo t('People with memory loss often have difficulty with abstract concepts. Many people have trouble with talking on the telephone since the person may rely more on body language and facial expressions of others when communicating. The person may have a difficult time comprehending the conversation, may not remember to whom he is speaking or and may not recall the conversation later.'); ?></p>
      <p><?php echo t('Has anyone started to notice communication challenges with your relative?'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-8" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Other Factors That May Affect Communication'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('More distracted by noise, motion'); ?></li>
        <li><?php echo t('Fear of making mistakes'); ?></li>
        <li><?php echo t('Attention problem that may appear to be hearing loss'); ?></li>
      </ul>
      <h4><?php echo t('More distracted by noise, motion:'); ?></h4>
      <p><?php echo t('As memory becomes impaired, the person with memory loss may find that he has to concentrate very hard in order to follow conversations. Anything that interferes with the ability to concentrate – noise, movement, etc. – may make it even more difficult for the person.'); ?></p>
      <p><?php echo ('If you want to have a conversation with a person with memory loss and you sense that he becomes easily distracted, what could you do?'); ?></p>
      <h4><?php echo t('Fear of making mistakes:'); ?></h4>
      <p><?php echo t('Has anyone here had the experience of burning something on the stove or the oven?'); ?></p>
      <p><?php echo ('If you do something wrong like that, others tend to write it off to having a bad day or being distracted, right? But if a person with memory loss does the same thing, it is looked at differently – and the person may no longer be allowed to cook. The stakes are much higher, so the fear of making mistakes is greater. You may need to adjust to this by giving the person with memory loss more time to do things, and be as patient as possible.'); ?></p>
      <p><?php echo t('Attention problem that may appear to be hearing loss: People who are distracted or who have difficulty concentrating may sometimes miss bits and pieces of a conversation. This may sometimes make it seem as though the person has a hearing problem when in fact this is not the case. On the other hand, do not rule out hearing loss as a possible issue if the person is having problems hearing when the conversation is happening in a place with few distractions.'); ?></p>
      <h4><?php echo t('So, what can we do to help overcome these challenges?'); ?></h4>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-9" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Communication Tips'); ?></h2>
      <hr />
      <p><?php echo t('These tips may help us to remove some barriers to good communication.'); ?></p>
      <h4><?php echo t('Eliminate distractions'); ?></h4>
      <p><?php echo t('Think about a time when you have tried to carry on a conversation in a noisy place. It is hard to concentrate on what another person is saying when you are also trying hard simply to hear them through the noise. Because people with memory loss have a difficult time filtering out distractions, it is a good idea to make sure that the surroundings are quiet and calm before you have a conversation. Distractions in the environment, such as the television or radio, loud conversations, or competing activities may take the person\'s attention away from you. So it is a good idea to move to a quieter, calmer area to have a conversation with a person with memory loss.'); ?></p>
      <h4><?php echo t('Gain the person\'s attention.'); ?></h4>
      <p><?php echo t('This may seem obvious, but we do not always do this. Think about times when you have had one sided conversations with family or friends whose attention was divided between what you were saying and what they were doing – watching a game on TV, reading the newspaper, concentrating on driving, etc. Or perhaps you have been in the situation where you were busy with a task and were not able to give someone else your undivided attention. This is even more important when having a conversation with a person with memory loss, who can be easily distracted.'); ?></p>
      <h4><?php echo t('Give reassurance.'); ?></h4>
      <p><?php echo t('Sometimes the person with memory loss may feel embarrassed at his communication problems. He may get lost in the middle of a conversation, not be able to remember the word he is looking for, or have a difficult time comprehending what you are telling him. As frustrating as this may be for you, it is even more frustrating for the person experiencing the problems. At times like these, reassurances like, "I know this must be hard for you" or even a statement like "I am not sure what you are trying to say, but please know that I will help you any way I can" may help to calm the person and make them feel that you do understand him, even if you do not understand his words at that moment.'); ?></p>
      <h4><?php echo t('Be a patient and active listener.'); ?></h4>
      <p><?php echo t('Listen carefully to what the person has to say, even if her comments seem to be confused. Allow the person time to speak. It may take a little longer for the person to collect her thoughts, but the extra time is worth it if the person feels that you care about what she has to say. Active listening takes practice. It means taking the time to really listen to what the other person has to say. This means listening not just to the words that the person says, but to the feelings that she expresses. It also means being alert as to the person\'s body language, facial expression, and nonverbal forms of communication.'); ?></p>
      <h4><?php echo t('Be an astute observer.'); ?></h4>
      <p><?php echo t('We can look for nonverbal cues, body language, or gestures to assist us in understanding what the person is feeling. The person who is fidgety and keeps looking at her watch may be saying, "I want to leave now," "How much longer will this take?" "I do not want to miss my television program," or even, "I really need to go to the bathroom!"'); ?></p>
      <h4><?php echo t('Avoid challenging or correcting mistakes.'); ?></h4>
      <p><?php echo t('No one likes to be corrected, particularly in front of other people. This reaction on our part may lead to embarrassment or anger in the other person.'); ?></p>
      <h4><?php echo t('Maintain a sense of humor.'); ?></h4>
      <p><?php echo t('This can be tricky! You want to be able to enjoy the humor in a situation without making the person with memory loss think you are laughing at him. But we can laugh together at some of the silly misunderstandings that we have, or at the situations in which we find ourselves. Memory loss is not funny, and many of the things that we experience as family or friends of people with memory loss can be very difficult. But there is still life after memory loss, and even laughter. Your sense of humor can help to keep you, and your family member, sane through this difficult journey.'); ?></p>
      <p><?php echo t('Does anyone have an example or a story to share? (If not, give a personal example.)'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-10" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Elements of Nonverbal Communication'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Tone of voice'); ?></li>
        <li><?php echo t('Body language'); ?></li>
        <li><?php echo t('Facial expressions'); ?></li>
        <li><?php echo t('Gestures'); ?></li>
      </ul>
      <p><?php echo t('"It is often not what you say, but how you say it." As we discussed at the beginning of the lesson, nonverbal communication refers to the things that we do in addition to what we say. The most basic of these are tone of voice, body language, and facial expressions We are all familiar with the saying, "it is not what you say, but also how you say it." We have all had experiences where we were put off by a person\'s tone of voice or facial expression, even if what they said was not really all that offensive. Nonverbal communication can be very important when having conversation with people with memory loss. We are going to take a little time to discuss this, because it is so important.'); ?></p>
      <h4><?php echo t('Nonverbal Communication'); ?></h4>
      <ul>
        <li><?php echo t('Can you think of times when someone’s nonverbal communication spoke louder than their words?'); ?></li>
        <li><?php echo t('Do you know anyone who “talks with their hands” or whose face is very expressive?'); ?></li>
        <li><?php echo t('What are some ways that nonverbal communication both enhances and detracts from conversations?'); ?></li>
        <li><?php echo t('Has anyone in the group had an experience in which someone’s nonverbal communication either hindered the conversation or helped the conversation?'); ?></li>
      </ul>
      <p><?php echo t('Nonverbal communication becomes especially important when having a conversation with someone with memory loss. A calm tone of voice can reassure a person who is frustrated or anxious. It can also help to keep us calm. Our own anxiety and anger escalates when our voices get louder, and of course the person to whom we are talking becomes upset as well. As hard as it can be to do, keeping your voice tone calm, low, and reassuring can help to keep situations from getting out of control.'); ?></p>
      <p><?php echo t('Body language and facial expressions are other concerns. If your words are calm but your body language is tense or your facial expression does not match what you are saying, the message will be mixed. The person with memory loss may react not to what you are saying, but perhaps at the look on your face or your body language.'); ?></p>
      <p><?php echo t('As an example of all of the above, think of a time when you talked to someone that you knew was not telling the truth. Their words may have been convincing, but somehow you knew something was not right. How did you know this? What gave them away? The saying, "It is not what you say, but how you say it" is important to remember in all forms of communication, but especially when talking to someone with memory loss.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-11" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Encouraging Verbal Expression'); ?></h2>
      <hr />
      <h4><?php echo t('Encouraging Verbal Expression'); ?></h4>
      <p><?php echo t('Communication is difficult, and especially so when you are dealing with memory loss.'); ?></p>
      <h4><?php echo t('Allow circumlocution'); ?></h4>
      <p><?php echo t('Circumlocution refers to "talking around" or "talking in circles." People with memory loss sometimes "talk around" a subject before they are able to pinpoint it. Though this may seem annoying to us at times, for the person with memory loss it is actually a useful coping tool. Avoid rushing the person to the point, and allow them time to do this. It will help them to get their thoughts out, and will also serve to give you extra cues as to their thoughts or needs.'); ?></p>
      <h4><?php echo t('Allow time for processing'); ?></h4>
      <p><?php echo t('A person who is experiencing memory loss may have trouble following a conversation, particularly a conversation between several people. In these cases, her reaction time may be delayed while she tries to "catch up" with what is being said. If the person has been asked a question, allow her a little extra time to give a response. If she seems to be confused about how she is to respond, then you can either restate the question or narrow the possible answers – "Mom, Joe asked how you haveve been feeling" or "Mom, Joe wants to know if you are over your cold?"'); ?></p>
      <h4><?php echo ('Keep conversations on track'); ?></h4>
      <p><?php echo t('If the conversation gets too far off track, use gentle reminders to get the person back to the main point: "We did have a good time at Mary\'s birthday party. Joe was just asking how you are feeling today?" Remember, some circumlocution is helpful, but if the person gets too far off track, the train of thought may be lost entirely.'); ?></p>
      <h4><?php echo t('Enable ventilation'); ?></h4>
      <p><?php echo t('Memory loss, and the communication problems that go along with it, can be very frustrating. Sometimes, we want so much to make our family members feel comfortable that we may not listen to them as well as we could. It is hard to let the person really "let off steam" about their anger and sadness and frustration over what is happening to them, because it is hard for us to hear, too. But it can be very helpful to allow this to happen, and to just listen. This can be hard – but it can ultimately bring you and your family member even closer by letting him know that you are there despite the memory loss, and that you are willing to "hang in there" with him in the future.'); ?></p>
      <h4><?php echo t('Offer limited choices if needed'); ?></h4>
      <p><?php echo t('Sometimes people with memory loss have trouble answering open-ended questions. Open-ended questions can be hard because there are so many choices to make in order to answer the question. Giving limited choices may make it easier for the person to answer. For example, "What is your favorite color?" is an open-ended question. Let us think about all of the choices that we actually make when we answer this question. First of all, we need to remember the meaning of the word "color." Then, we need to remember what it means to have a "favorite" color. Next, we need to think of the whole palette of colors until we come to the one we like the best, and we need to identify its name. So actually, this can be a more complex process than you might imagine at first glance. What seems like a simple question, in fact, has many layers of decisions and things to think through in order to answer it correctly.'); ?></p>
      <h4><?php echo t('How can we simplify this question?'); ?></h4>
      <p><?php echo t('If the person seems to be struggling with this question, we can give limited choices. "Which color do you like better? Blue, yellow or red?" Since we are naming the primary colors, it helps to narrow what color the person has to choose from. Maybe the person really likes red – then we have narrowed it down well. But if the person likes orange, they may say, "it is like red but lighter" and we can guess from there. So offering limited choices and giving the person a chance to get more detailed from there may be a good strategy.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-12" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Elements of Nonverbal Communication'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Tone of voice'); ?></li>
        <li><?php echo t('Body language'); ?></li>
        <li><?php echo t('Facial expressions'); ?></li>
        <li><?php echo t('Gestures'); ?></li>
      </ul>
      <p><?php echo t('"It is often not what you say, but how you say it." As we discussed at the beginning of the lesson, nonverbal communication refers to the things that we do in addition to what we say. The most basic of these are tone of voice, body language, and facial expressions We are all familiar with the saying, "it is not what you say, but also how you say it." We have all had experiences where we were put off by a person\'s tone of voice or facial expression, even if what they said was not really all that offensive. Nonverbal communication can be very important when having conversation with people with memory loss. We are going to take a little time to discuss this, because it is so important.'); ?></p>
      <h4><?php echo t('Nonverbal Communication'); ?></h4>
      <ul>
        <li><?php echo t('Can you think of times when someone’s nonverbal communication spoke louder than their words?'); ?></li>
        <li><?php echo t('Do you know anyone who “talks with their hands” or whose face is very expressive?'); ?></li>
        <li><?php echo t('What are some ways that nonverbal communication both enhances and detracts from conversations?'); ?></li>
        <li><?php echo t('Has anyone in the group had an experience in which someone’s nonverbal communication either hindered the conversation or helped the conversation?'); ?></li>
      </ul>
      <p><?php echo t('Nonverbal communication becomes especially important when having a conversation with someone with memory loss. A calm tone of voice can reassure a person who is frustrated or anxious. It can also help to keep us calm. Our own anxiety and anger escalates when our voices get louder, and of course the person to whom we are talking becomes upset as well. As hard as it can be to do, keeping your voice tone calm, low, and reassuring can help to keep situations from getting out of control.'); ?></p>
      <p><?php echo t('Body language and facial expressions are other concerns. If your words are calm but your body language is tense or your facial expression does not match what you are saying, the message will be mixed. The person with memory loss may react not to what you are saying, but perhaps at the look on your face or your body language.'); ?></p>
      <p><?php echo t('As an example of all of the above, think of a time when you talked to someone that you knew was not telling the truth. Their words may have been convincing, but somehow you knew something was not right. How did you know this? What gave them away? The saying, "It is not what you say, but how you say it" is important to remember in all forms of communication, but especially when talking to someone with memory loss.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-13" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Encouraging Verbal Expression'); ?></h2>
      <hr />
      <p><?php echo t('Communication is difficult, and especially so when you are dealing with memory loss.'); ?></p>
      <h4><?php echo t('Allow circumlocution'); ?></h4>
      <p><?php echo t('Circumlocution refers to "talking around" or "talking in circles." People with memory loss sometimes "talk around" a subject before they are able to pinpoint it. Though this may seem annoying to us at times, for the person with memory loss it is actually a useful coping tool. Avoid rushing the person to the point, and allow them time to do this. It will help them to get their thoughts out, and will also serve to give you extra cues as to their thoughts or needs.'); ?></p>
      <h4><?php echo t('Allow time for processing'); ?></h4>
      <p><?php echo t('A person who is experiencing memory loss may have trouble following a conversation, particularly a conversation between several people. In these cases, her reaction time may be delayed while she tries to "catch up" with what is being said. If the person has been asked a question, allow her a little extra time to give a response. If she seems to be confused about how she is to respond, then you can either restate the question or narrow the possible answers – "Mom, Joe asked how you have been feeling" or "Mom, Joe wants to know if you are over your cold?"'); ?></p>
      <h4><?php echo t('Keep conversations on track'); ?></h4>
      <p><?php echo t('If the conversation gets too far off track, use gentle reminders to get the person back to the main point: "We did have a good time at Mary\'s birthday party. Joe was just asking how you are feeling today?" Remember, some circumlocution is helpful, but if the person gets too far off track, the train of thought may be lost entirely.'); ?></p>
      <h4><?php echo t('Enable ventilation'); ?></h4>
      <p><?php echo t('Memory loss, and the communication problems that go along with it, can be very frustrating. Sometimes, we want so much to make our family members feel comfortable that we may not listen to them as well as we could. It is hard to let the person really "let off steam" about their anger and sadness and frustration over what is happening to them, because it is hard for us to hear, too. But it can be very helpful to allow this to happen, and to just listen. This can be hard – but it can ultimately bring you and your family member even closer by letting him know that you are there despite the memory loss, and that you are willing to "hang in there" with him in the future.'); ?></p>
      <h4><?php echo t('Offer limited choices if needed'); ?></h4>
      <p><?php echo t('Sometimes people with memory loss have trouble answering open-ended questions. Open-ended questions can be hard because there are so many choices to make in order to answer the question. Giving limited choices may make it easier for the person to answer. For example, "What is your favorite color?" is an open-ended question. Let us think about all of the choices that we actually make when we answer this question. First of all, we need to remember the meaning of the word "color." Then, we need to remember what it means to have a "favorite" color. Next, we need to think of the whole palette of colors until we come to the one we like the best, and we need to identify its name. So actually, this can be a more complex process than you might imagine at first glance. What seems like a simple question, in fact, has many layers of decisions and things to think through in order to answer it correctly.'); ?></p>
      <h4><?php echo t('How can we simplify this question?'); ?></h4>
      <p><?php echo t('If the person seems to be struggling with this question, we can give limited choices. "Which color do you like better? Blue, yellow or red?" Since we are naming the primary colors, it helps to narrow what color the person has to choose from. Maybe the person really likes red – then we have narrowed it down well. But if the person likes orange, they may say, "it is like red but lighter" and we can guess from there. So offering limited choices and giving the person a chance to get more detailed from there may be a good strategy.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-14" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Avoid These Common Pitfalls…'); ?></h2>
      <hr />
      <h4><?php echo t('Arguing'); ?></h4>
      <p><?php echo t('It is hard to win an argument with someone who is experiencing memory loss, because his or her view of things may be very different from yours. Let us say that your Aunt Mae can not remember having gone to a restaurant the day before, and is upset over the doggie bag in the refrigerator because she claims, "I did not put that there, and I am not going to eat someone else\'s leftovers!"'); ?></p>
      <p><?php echo t('Our natural inclination is to set things right and use facts to prove our point. But if the person truly does not remember the experience of going to the restaurant, no amount of facts will change their mind. It won\'t help to pull out the calendar to show Aunt Mae that she wrote down "6 pm - dinner at Andy\'s Restaurant with Susan" or showing her the receipt, or even showing her a matchbook from the restaurant. Aunt Mae does not remember the experience – for her it simply never happened.'); ?></p>
      <p><?php echo t('So arguing with her that it did is just going to frustrate the both of you. Before arguing about something like this, you need to stand back and ask yourself, "Is this really worth it?" If a person\'s safety is at stake, the answer might be "yes." But in a situation like this one, it may be better to just say, "Well, then, I will just take this out of your refrigerator then." You will have avoided a needless argument.'); ?></p>
      <h4><?php echo t('Giving orders'); ?></h4>
      <p><?php echo t('No one likes to be told what to do – especially by our spouses or other family members. There is a world of difference between "Joe! Will you take out the trash already?" and "Joe, I would really appreciate it if you would take out the trash."'); ?></p>
      <p><?php echo t('Sometimes, people with memory loss do not respond to our requests the way we would like because the task seems too difficult. We will talk about this more in Section 5, but breaking tasks down into smaller steps may be the key. Maybe Joe does not take out the trash because he can not remember all of the steps involved in this task. He used to be in charge of recycling and separating everything and now he gets confused by all of the containers. As a result, he now avoids having anything to do with the trash. If you sense this is the problem, you may need to give Joe a smaller task to accomplish. For instance, just ask him to stack the newspapers and put them in the recycling bin rather than being responsible for separating and carrying out all of the trash.'); ?></p>
      <h4><?php echo t('Oversimplifying'); ?></h4>
      <p><?php echo t('The goal is to simplify only if needed, and without being condescending. In other words, simplify only when necessary and do not "dumb down." People with early memory loss may be very sensitive to the feeling that they are being treated as a child, or disrespectfully.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-15" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Share What You Know with Others'); ?></h2>
      <hr />
      <ul>
        <li><?php echo t('Presume that others do not know the extent of the difficulties'); ?></li>
        <li><?php echo t('Provide information about communication tips'); ?></li>
        <li><?php echo t('Model and give feedback'); ?></li>
      </ul>
      <p><?php echo t('Last but not least, make sure that you share this information with your friends and other family members. Friends and other family members may not understand the extent of the difficulties you and your loved one are facing. Do not be afraid to let them know about what is going on. They may be able to better support you and your family member if they understand the situation, and they are more likely to get involved if they are informed about what is happening.'); ?></p>
      <p><?php echo t('Do not assume that everyone will automatically know how to deal with your family member\'s memory loss. They will not. Presume that they do not know and teach them what you have learned. Some people may be uncomfortable or may react in an unusual way. So provide information for your family and friends about what works and what does not. Give them tips on how to communicate with your family member. Model what works so that they can learn from you. Give them feedback about how they are doing, especially when they are doing a good job. Tell them about Alzheimer\'s Association\'s educational programs and support groups so that they can learn more if they prefer. Give them a brochure or book to read.'); ?></p>
      <p><?php echo t('Above all, do not give up, and do not allow yourself to get too frustrated. You will occasionally lose patience with your family member. No one is perfect. Learn to forgive yourself for your bad days or bad moments just as you forgive your family member for hers. Here are some resources that may assist you in understanding what a person with memory loss is experiencing, and how you may be able to assist them.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-16" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Good Sources of Information'); ?></h2>
      <hr />
      <p><?php echo t('Coping with Communication Challenges in Alzheimer’s Disease by Marie T. Rau, San Diego, CA: Singular Publishing Company, 1993.'); ?></p>
      <p><?php echo t('My Journey into Alzheimer’s Disease by Robert Davis. Carol Stream, lL: Tyndale House Publishers, 1989.'); ?></p>
      <p><?php echo t('Steps to Enhancing Communication: Interacting with Persons with Alzheimer’s Disease (brochure) available through the Alzheimer’s Association.'); ?></p>
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-2-slide-17" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Closing'); ?></h2>
      <hr />
      <p><?php echo t('In this lesson, we have learned:'); ?></p>
      <ul>
        <li><?php echo t('Typical communication changes experienced by persons with early memory loss,'); ?></li>
        <li><?php echo t('General principles for enhancing communication with a person experiencing early memory loss,'); ?></li>
        <li><?php echo t('Ways to encourage verbal expression, and'); ?></li>
        <li><?php echo t('How to avoid communication pitfalls.'); ?></li>
      </ul>
      <p><?php echo t('For more ideas about communication strategies, please refer to chapters 5 and 8 of the book, Alzheimer’s Early Stages. Chapter 5 is especially helpful in understanding the communication challenges faced by persons with memory loss. If possible, read these chapters during the coming week.'); ?></p>
    </div>
    <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
  </div>
  <div id="lesson-3">
    <div id="lesson-3-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Making Decisions'); ?></h2>
        <hr />
        <p><?php echo t('Lesson Objectives:'); ?></p>
        <ul>
          <li><?php echo t('Understand the shifting balance of power in the relationship,'); ?></li>
          <li><?php echo t('Address practical issues in everyday life such as driving a car, handling health & financial decisions or managing household tasks,'); ?></li>
          <li><?php echo t('Share the diagnosis and involved others in helping out.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
    <div id="lesson-3-slide-2" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Welcome Back!'); ?></h2>
        <hr />
        <p><?php echo t('Welcome to the third lesson of MSML Online.'); ?></p>
        <p><?php echo t('Before you begin, please email your Instructor or post to the Forum/Blog any questions or comments related to last week\'s lesson on Communication.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Making Decisions'); ?></h2>
        <hr />
        <p><?php echo t('"Not to decide is to decide."'); ?></p>
        <p><?php echo t('In this lesson, we go into depth about the changes that occur in the relationship between you and your relative as a result of memory loss. Your role gradually must change so that you become the chief decision-maker in the relationship. '); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-3" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Shifting the Balance of Power'); ?></h2>
        <hr />
        <h4><?php echo t('Preserve independence and meet dependence'); ?></h4>
        <p><?php echo t('When you begin to recognize the limits of your relative\'s memory and thinking abilities, you become better equipped to address his or her needs in practical decisions such as driving a car, handling money, and the like. These decisions require your active involvement. Helping someone to make such decisions may seem uncomfortable at first, especially if he or she does not recognize limits with memory and thinking. Unfortunately, he or she no longer has the capacity to be fully self-sufficient although many abilities remain intact. The balance of power must begin to shift in the relationship with the person with memory loss. You must decide how and when to keep a delicate balance between honoring that person\'s need for independence versus the legitimate need for dependence. This requires much tact and patience in making decisions.'); ?></p>
        <h4><?php echo t('Let us consider the following example:'); ?></h4>
        <p><?php echo t('Your 81-year-old mother has Alzheimer\'s disease and lives alone in her home. You are now responsible for managing her finances after you found out that her bills were months overdue. She is upset because she feels you are trying to control her life. She says to you one day: "You make all the decisions because you think you know what\'s best for me. I am not a child just because I ca not do what I used to do."'); ?></p>
        <p><?php echo t('How might you address her complaint? (Take about 5 minutes to arrive at a solution that would be satisfactory to both parties).'); ?></p>
        <h4><?php echo t('Making decisions – alone or together'); ?></h4>
        <p><?php echo t('Instead of involving someone with memory loss in every decision and run the risk of causing confusion, it is best to narrow the choices. For example, if a big decision is looming such as a move, it would be chaotic to involve the person with memory loss at each step in the process. However, it would be appropriate to involve the person at key points along the way like picking out furniture to keep or discard.'); ?></p>
        <h4><?php echo t('Quietly take the lead as if a great dancer'); ?></h4>
        <p><?php echo t('One way to visualize the lead role you must now take is to consider a couple engaged in ballroom dancing. Although the man takes the lead, the woman who is his partner is actively responding to his cues and steps. This is done in a spirit of cooperation but it requires that each person accepts an agreed upon role. You must now learn how to take the lead in the relationship but to the extent possible seek the cooperation of the other person.'); ?></p>
        <p><?php echo t('Cartoon of young and old woman with the latter saying:'); ?></p>
        <p><?php echo t('"Honey, I have been through two world wars, the Great Depression, taught 3,297 children, administered four elementary schools and outlived every one of the people I worked with. I am 89 years old and you are telling me it is bedtime?"'); ?></p>
        <p><?php echo t('These two people are clearly not in harmony. This scene typifies the universal need for control over one\'s destiny and how things can go wrong if that need is challenged. There is no reason to argue about anything as long as you take the right approach. Keep in mind that although the behavior of people with memory loss may appear childlike at times, adults are not children and should be respected as adults. Each person has a long personal history and is accustomed to making choices independently. To the extent possible, choices must be given so that conflicts can be prevented.'); ?></p>
        <p><?php echo t('How might this particular scenario have been played out differently? (Take a few minutes for ideas and use your imagination and flexibility.)'); ?></p>
        <p><?php echo t('Now let us turn to handling some practical issues…'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-4" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Driving a Car - Continue or Stop?'); ?></h2>
        <hr />
        <p><?php echo t('Driving a car is not only a means of getting around but is also a symbol of personal independence. AD often impairs brain functions that affect driving ability but sometimes those functions are spared so that driving may continue without difficulty for awhile.'); ?></p>
        <h4><?php echo t('Mixed results of research studies thus far'); ?></h4>
        <p><?php echo t('Results of research on the effects of AD on driving performance are not completely clear. However, virtually all studies conclude that as person becomes more impaired over time, there is a greater risk for traffic accidents.'); ?></p>
        <h4><?php echo t('No clear markers for risks'); ?></h4>
        <p><?php echo t('There is no definitive cognitive test or driving test yet available to accurately measure one\'s risk of impaired driving ability. However, you may be the best judge of one\'s ability to drive safely. One simple question you might ask yourself is this: Given what you know about the driving skills of the person with memory loss, would you feel comfortable letting a young child ride alone in the car with him or her?'); ?></p>
        <h4><?php echo t('No specific public policy in most states'); ?></h4>
        <p><?php echo t('In the state of California, every person who drives a car who is diagnosed with AD must be reported by the diagnosing physician to the state for a reassessment of driving skills. Drivers in California who reach the middle or late stage of the disease are not allowed to have their licenses renewed. In other states, however, there is no specific public policy governing AD and driving. Most states address the issue of medical problems that may impair driving ability in order to protect personal and public safety. Physicians and other authorities are usually entitled under state laws to take action if there is a serious concern about a driver\'s ability to safely operate a vehicle.'); ?></p>
        <p><?php echo t('If there are specific policies in your state pertaining to driving and disability, please share/post them on this Lesson\'s Forum.'); ?></p>
        <h4><?php echo t('Personal freedom versus public safety'); ?></h4>
        <p><?php echo t('Weighing one\'s desire to drive a motor vehicle against the public\'s need for safe drivers appears to be the crux of the issue. How this dilemma is resolved remains a private matter in most states.'); ?></p>
        <h4><?php echo t('Voluntary versus involuntary means'); ?></h4>
        <p><?php echo t('Fortunately, most people with AD discontinue driving on their own for the sake of safety or will bend to the wishes of others to quit driving voluntarily. By all means, a physician should take the lead in addressing this issue in order to spare the family the hassles that often ensue. After all, the decisions to stop driving stems from the medical problem of AD or a related dementia and therefore, a physician is best suited to address the practical implications of the disease including driving. You should communicate your concerns in advance of a visit to the physician’s office.'); ?></p>
        <p><?php echo t('A number of rehabilitation centers have specially trained staff members, usually occupational therapists, who can assess one’s driving capacity through a series of tests. Such testing may cost $250-400 but may be worthwhile to get a professional opinion about one’s driving capacity. A physician might recommend this course of action before a decision is reached.'); ?></p>
        <p><?php echo t('The privilege of driving is so terribly important for some people that taking away it away may harm the self-esteem of the person affected by this decision. It is important to consider alternative means of transportation in order to minimize the impact of this decision. Does your local area have bus transportation for seniors? Is your family prepared to take on the “chauffer” role?'); ?></p>
        <p><?php echo t('If persuasion alone is insufficient to keep an unsafe driver off the road, then taking action through the state department of motor vehicles to revoke one’s license may be the only alternative. Others undesirable options are to disable the car or get rid of it altogether.'); ?></p>
        <p><?php echo t('Please share a story about how they have addressed the issue of driving in their family.'); ?></p>
        <p><?php echo t('“When I die, I want to go peacefully, like my grandfather did, in his sleep; not screaming like the other passengers in his car.”'); ?></p>
        <p><?php echo t('This humorous quote illustrates the serious consequences of unsafe driving. It is better to err on the side of safety when considering whether or not a person with memory loss should continue driving. Again, the issue of personal freedom versus public safety must be carefully weighed when it comes to driving a car.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-5" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Handling Health &amp; Financial Decisions'); ?></h2>
        <hr />
        <h4><?php echo t('Capacity exists unless given up voluntarily'); ?></h4>
        <p><?php echo t('Making personal decisions over one’s health and financial affairs is a personal right that is threatened by memory loss. Assessing when and how to intervene is difficult unless the person with memory loss gives up this authority on a voluntary basis.'); ?></p>
        <h4><?php echo t('Personal freedom versus risks'); ?></h4>
        <p><?php echo t('As memory loss advances over time, the risks of continuing to manage one’s own affairs will become more obvious to others but in the early stage there may legitimate differences of opinion about the person’s ability to handle these affairs alone.'); ?></p>
        <p><?php echo t('Nevertheless, due to the person’s impaired memory and judgment, someone else must be in a position of monitoring risks. Otherwise, problems such as failing to pay important bills may emerge, as the previous example shows.'); ?></p>
        <h4><?php echo t('Mismanagement of finances & medical compliance'); ?></h4>
        <p><?php echo t('What are some of the risks? Persons with memory loss can lose track of money or stop paying bills. They may also be at risk of exploitation by others. In regards to medications, they can forget about taking their pills or take them more often than prescribed. Problems with taking or not taking medications can lead to health crises.'); ?></p>
        <p><?php echo t('It is fairly easy to assess if some one with memory loss is having trouble with their finances or their medication IF he or she is open to scrutiny. It’s important to raise these issues in a delicate manner in order to maintain trust and enlist the person’s cooperation.'); ?></p>
        <p><?php echo t('Does anyone have a story to share on this topic? If time permits.'); ?></p>
        <h4><?php echo t('Means to share or give up authority'); ?></h4>
        <p><?php echo t('At the next class, we will discuss legal steps such as Powers of Attorney in order to ensure that someone is responsible for handling financial and health care decisions.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Handling Other Household and Personal Tasks'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Over-learned tasks are preserved'); ?></li>
          <li><?php echo t('Difficulty with new & unfamiliar tasks'); ?></li>
          <li><?php echo t('Following a sequence of steps'); ?></li>
        </ul>
        <p><?php echo t('Generally, the ability to handle personal care tasks such as bathing and dressing is intact in the early stages. Such things have been done so often that they tend to be done almost automatically but some instances of forgetting these basic things may occur from time to time. More complex tasks such as cooking a meal or fixing an appliance in need of a repair are often problematic, however anything requiring a prescribed sequence of steps for completion may be disrupted due to memory loss. Thus, the person with memory loss tends to avoid doing new or unfamiliar tasks that require learning or memory beyond their capacity to be successful.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-6" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Traveling'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Unfamiliar places, people & schedule may increase confusion'); ?></li>
          <li><?php echo t('May also be an enjoyable time together'); ?></li>
          <li><?php echo t('Weigh risks & benefits for all concerned'); ?></li>
          <li><?php echo t('Take necessary precautions'); ?></li>
        </ul>
        <p><?php echo t('Like anything unfamiliar, traveling to new or different places may be more stressful than in the past for someone with memory loss but should not be ruled out altogether. However, traveling alone is too risky and increases the chance of becoming lost or confused. With proper planning and guidance, traveling with a relative or a friend may be an enjoyable activity. Precautions should be taken to minimize the chance of becoming lost while traveling.'); ?></p>
        <p><?php echo t('What are some steps that might be taken to prevent or minimize confusion? With proper planning, how might you handle a crisis such as the person with memory loss getting lost while away from home?'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-7" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Marital Intimacy'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Impact varies on persons & couples'); ?></li>
          <li><?php echo t('Physiological & psychological consequences'); ?></li>
          <li><?php echo t('Patterns of behavior may change over time'); ?></li>
          <li><?php echo t('Possible need for assessment & intervention'); ?></li>
        </ul>
        <p><?php echo t('Intimacy and sexuality are important issues for couples in which one partner is affected by memory loss. These important aspects of a relationship invariably change due to memory loss. The partner with memory loss slowly loses the capacity for shared closeness. Likewise, sexual functioning diminishes or ceases altogether. In rare cases, the sexual interest of the person with memory loss increases.'); ?></p>
        <p><?php echo t('The well partner usually experiences a diminished sexual interest due to the changes of providing care although the need for non-sexual intimacy may remain strong. Couples and individuals need to know that changes in this realm of the relationship are normal. Specific situations may call for further assessment and problem solving. There is no reason for embarrassment. Please let us know of you are having any special problems in this regard.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-8" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Challenges for Families'); ?></h2>
        <hr />
        <p><?php echo t('Although major responsibility of caring for a loved one with memory loss often falls on the shoulders of just one person, other family members may live in the local vicinity or at a distance and have their own personal reactions to the situation. Families are sometimes faced with these challenges:'); ?></p>
        <h4><?php echo t('History re-emerges, for better or worse'); ?></h4>
        <p><?php echo t('Each family has its own unique history of grappling with past problems. Some families may have worked well together in the past while other families may have lacked cooperation among their members. Some family members may get along well while others may disagree and share bad feelings toward each other. How a family responds to the needs of a loved one with memory loss and the primary person who provides care depends in large part on the family’s past experience.'); ?></p>
        <h4><?php echo t('Uneven division of labor among members'); ?></h4>
        <p><?php echo t('As already noted, most responsibilities of caring for someone are usually assumed by one family member. Traditionally, this has meant a spouse, a daughter or daughter-in-law. This person’s role is vital to the well-being of the person with memory loss. However, enormous sacrifices are usually made by the primary helper, in terms of time and effort. It is essential for everyone in the family to recognize the primary helper’s key role and to share in the responsibilities to the extent possible. Some family members will initiate action or gladly accept assigned duties whereas others might refuse to help.'); ?></p>
        <h4><?php echo t('Roles are often unclear'); ?></h4>
        <p><?php echo t('In the early stages of memory loss, each family member’s role and responsibilities may not be easy to identify. The person with memory loss may not seem to need help or readily accept anyone’s help. Likewise, the primary helper may be reluctant to call upon anyone’s assistance. As soon as possible, it is important to identify the needs of both the person with memory loss and the primary helper, keeping in mind that needs change over time with the advance of the disease. It is often useful to hold a family meeting for the sake of identifying these needs and giving everyone an opportunity to respond.'); ?></p>
        <h4><?php echo t('Different levels of acceptance / denial'); ?></h4>
        <p><?php echo t('Each member of a family accepts or denies the diagnosis of AD or a related dementia at a different pace. Those closest to the person with memory loss usually are the first to notice the subtle changes due to the disease and slowly come to terms with the resulting disabilities. Conversely, those who have casual contact, at holiday gatherings, for example, may not see the changes in memory and thinking that are noticeable on a daily basis.'); ?></p>
        <p><?php echo t('Again, a family meeting to discuss the diagnosis and its implications is often useful to clarify the facts of each situation. In order to put aside personal agendas that may exist within a family, having a third party involved in such a meeting may be useful. A physician, nurse, psychologist or social worker may be helpful in resenting the medical facts and facilitating a plan of action on behalf of the person with memory loss and the primary helper. Getting everyone “on the same page” is a first step toward enabling a family to better understand the situation and garnering each member’s support.'); ?></p>
        <p><?php echo t('Has anyone here been involved in a family meeting? Would you like to share the details?'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-9" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Telling Others: Pros and Cons'); ?></h2>
        <hr />
        <h4><?php echo t('Pros'); ?></h4>
        <ul>
          <li><?php echo t('Educate others about the nature of disease'); ?></li>
          <li><?php echo t('Create opportunities for others to help'); ?></li>
          <li><?php echo t('Put everyone concerned at ease'); ?></li>
        </ul>
        <h4><?php echo t('Cons'); ?></h4>
        <ul>
          <li><?php echo t('“What they don’t know won’t hurt them”'); ?></li>
          <li><?php echo t('Negative stereotypes associated with Alzheimer’s disease'); ?></li>
          <li><?php echo t('Risk of social isolation'); ?></li>
        </ul>
        <p><?php echo t('Another issue related to autonomy is how and when the diagnosis of AD or another form of dementia is conveyed to other people. This is a highly personal decision. Some people are reluctant to share the news with others while others are quite open about it. However, disclosing the diagnosis will become necessary as symptoms become more obvious over time. Most people figure things out anyway, long before the news is shared.'); ?></p>
        <p><?php echo t('Let us talk about good reasons for sharing the diagnosis. What are some reasons to list on the pro-side?'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-10" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Recognizing Reactions of Others'); ?></h2>
        <hr />
        <h4><?php echo t('Rally your supporters'); ?></h4>
        <p><?php echo t('Caring for someone with memory loss requires practical help and moral support from others on a regular basis. You are fortunate if you have family members and friends who can fill this need. These helpers may be instrumental in preserving your physical and mental health. Most people delay asking for help or do not take advantages of opportunities for help when offered. Now is the time to rally your supporters!'); ?></p>
        <h4><?php echo t('Accept hibernators'); ?></h4>
        <p><?php echo t('On the other hand, there are people in your life whose absence from the scene may surprise and disappoint you. You need to be prepared for dealing with those who are not helpful. Your own well-being is too important to be derailed by them. We refer to such people as "hibernators." Hibernators are those people who might be expected to be of service but excuse themselves from helping out in any meaningful capacity. Like bears in winter, they cannot handle the bad weather and retreat into the privacy and security of their own lives. For whatever reasons, they cannot or will not play a supportive role.'); ?></p>
        <p><?php echo t('Trying to engage hibernators seldom succeeds despite your repeated efforts. Much time and energy can be wasted persuading them to get involved. It is difficult to understand them and avoid harsh judgment. However, bitterness and resentment can become self-destructive. It may not be possible to forgive hibernators for their lack of help yet it is essential to forget that they can be counted on. Appreciating the efforts of those who are still involved instead of remaining disappointed over those who are not involved will contribute to your well-being.'); ?></p>
        <h4><?php echo t('Enlighten armchair quarterbacks'); ?></h4>
        <p><?php echo t('Can anyone here define the term, “armchair quarterback?”'); ?></p>
        <p><?php echo t('An armchair quarterback is someone who sits at home watching a football game on television and second-guesses the players or coach after a play has occurred. It is easy to call the shots from a distance instead of playing in the actual game. Armchair quarterbacks may think that they know how to play the game but this illusion stems from lack of experience. So it is with family members and friends who think that they know all about caring for someone with memory loss and offer unsolicited advice or criticism. Since their knowledge is based on theory instead of real world experience, most of what they have to say tends to fall on deaf ears.'); ?></p>
        <p><?php echo t('Some armchair quarterbacks may care enough to change their ways and become active helpers. They should be invited to "get into the game." They need encouragement as well as some concrete directions on how to get directly involved in the providing truly valuable help. Opportunities to experience caring for someone with memory loss, for an entire weekend, for example, may be an awakening for them. If an armchair quarterback seems unwilling to give up the role of self-appointed expert, it is probably best to set limits on their unwanted advice or avoid them as much as possible. It may simply be too stressful for you to withstand their meddling.'); ?></p>
        <p><?php echo t('You need to surround yourself with others who can enable you to maintain a positive attitude. Dealings with hibernators and armchair quarterbacks are draining. You need to eliminate or minimize their influence and focus your attention on those important people who enable you to remain healthy and happy. These relationships are essential for coping over the long haul.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-11" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Getting Others Involved'); ?></h2>
        <hr />
        <p><?php echo t('So, how do you get others involved? You do this by:'); ?></p>
        <ul>
          <li><?php echo t('Explaining the facts of the disease;'); ?></li>
          <li><?php echo t('Inform them of how the disease is affecting you and the person you love;'); ?></li>
          <li><?php echo t('Identify the types of help needed;'); ?></li>
          <li><?php echo t('Show appreciation for the concern and help provided;'); ?></li>
          <li><?php echo t('And develop new relationships by attending support groups, finding others who can relate with your situation and be a positive force in your life.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-12" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Major Milestones'); ?></h2>
        <hr />
        <p><?php echo t('Based on our experience with family members and friends of people with memory loss, we have identified six major milestones that indicate if someone is coping well. These milestones may not be reached within a month or even a year. Everyone moves along the road to acceptance at a different pace and in a unique way. These statements appear to be signs of healthy coping:'); ?></p>
        <h4><?php echo t('The relationship has changed -- I now lead it.'); ?></h4>
        <p><?php echo t('This statement reflects an understanding that your relationship with a memory-impaired person has been changed by a medical condition. He or she can no longer be completely self-sufficient and you have a right to protect the person’s well-being by offering leadership. Good leadership appreciates the deficits of the other person and enables one’s remaining capacities to be used as often as possible.'); ?></p>
        <h4><?php echo t('I must change, not the person with the disease.'); ?></h4>
        <p><?php echo t('Customary ways of listening to and talking with a memory-impaired person must give way to new ways of communicating. There is a basic understanding that you cannot control the person’s memory loss so you will have to make the necessary adaptations to fit the person’s needs. Just as you would not expect someone with broken legs to walk unaided, you supply the memory, thinking and other intellectual skills whenever needed.'); ?></p>
        <h4><?php echo t('I can learn how to cope effectively.'); ?></h4>
        <p><?php echo t('Knowledge, skill, and virtues such as patience and understanding can be practiced and learned so that you and the person with memory loss can enjoy a good quality of life.'); ?></p>
        <h4><?php echo t('I have limits and mistakes will be made.'); ?></h4>
        <p><?php echo t('You cannot provide for all of the person’s need at all times nor can you carry out this role perfectly. You can learn from your mistakes and apply the lessons to the future.'); ?></p>
        <h4><?php echo t('My own well-being is important too.'); ?></h4>
        <p><?php echo t('Although you spend lots of time caring for the needs of the person with memory loss, your own well-being must be attended too as well. In fact, the well-being of the person you care for is directly tied to your own well-being. If you are not in good shape, then the person you care for will suffer the consequences.'); ?></p>
        <h4><?php echo t('I must reach out and accept the help of others.'); ?></h4>
        <p><?php echo t('Consequently, you need to seek out help, take time off, and replenish your energy. Someone else may not be a perfect substitute but others can be taught and trusted to provide temporary assistance. An important milestone is reached when you have put a plan in place to do something on a regular basis that you find enjoyable apart from the person with memory loss.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Good Sources of Information'); ?></h2>
        <hr />
        <ul>
          <li><?php echo t('Dancing on Quicksand: A Gift of Friendship in the Age of Alzheimer’s by Marilyn Mitchell. Boulder, CO: Johnson Books, 2002.'); ?></li>
          <li><?php echo t('Learning To Speak Alzheimer’s by Joanne Koenig Coste, New York: Houghton Miflin Co., 2003.'); ?></li>
          <li><?php echo t('The Majesty of Your Loving: A Couple\'s Journey through Alzheimer\'s by Olivia Hoblitzelle. Lyndonville, VT: Green Mountain Books, 2008.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
    <div id="lesson-3-slide-13" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Closing'); ?></h2>
        <hr />
        <p><?php echo t('We have just finished lesson three.'); ?></p>
        <p><?php echo t('Are there any questions about this lesson?'); ?></p>
        <p><?php echo t('Chapters 6 and 7 in the book, Alzheimer’s Early Stages, relate to this class. Please read those chapters for more information about the issues we covered today. The next lesson will focus on Planning for the Future.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
    </div>
  </div>
  <div id="lesson-4">
    <div id="lesson-4-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Planning for the Future'); ?></h2>
        <hr />
        <p><?php echo t('Lesson Objectives:'); ?></p>
        <p><?php echo t('To familiarize participants with effective ways for communicating with health care professionals.'); ?></p>
        <ul>
          <li><?php echo t('To provide an overview on advance directives and legal planning.'); ?></li>
          <li><?php echo t('To explain the difference between Medicare and Medicaid.'); ?></li>
          <li><?php echo t('To explain respite options, including community-based programs and services.'); ?></li>
          <li><?php echo t('To discuss the impact of a move on an individual with memory loss, highlighting types of residential care. '); ?></li>
        </ul>
        <p><?php echo t('Welcome Back!'); ?></p>
        <p><?php echo t('Welcome to the fourth lesson of MSML Online. The title of this lesson is “Planning for the Future.” In our previous lessones we have touched on changes that will impact the person experiencing memory loss, as well as challenges to those providing care: family members, friends and professionals.'); ?></p>
        <p><?php echo t('We have a great deal of information to cover in this lesson. To best utilize time, be sure that your information needs and questions are addressed, please message the Forum/Blog if you are interested in learning more about:'); ?></p>
        <ul>
          <li><?php echo t('strategies to effectively communicate with health care professionals,'); ?></li>
          <li><?php echo t('advanced directives and legal planning,'); ?></li>
          <li><?php echo t('Medicare and Medicaid,'); ?></li>
          <li><?php echo t('respite options including community-based programs and services,'); ?></li>
          <li><?php echo t('impact of a move on an individual with memory loss,'); ?></li>
          <li><?php echo t('residential care options, including how to decide/choose residential care.'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
  </div>
  <div id="lesson-5">
    <div id="lesson-5-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Effective Ways of Coping and Caring'); ?></h2>
        <hr />
        <p><?php echo t('Lesson Objectives:'); ?></p>
        <ul>
          <li><?php echo t('To discuss the importance of “doing things,”'); ?></li>
          <li><?php echo t('To consider the impact that the environment can have on participation in activities and tasks for a person experiencing memory loss,'); ?></li>
          <li><?php echo t('To learn how to analyze and adapt tasks and activities, and'); ?></li>
          <li><?php echo t('To review key points of the Making Sense of Memory Loss program.'); ?></li>
        </ul>
        <p><?php echo t('Welcome!');?></p>
        <p><?php echo t('Welcome to the final lesson of MSML Online.'); ?></p>
        <p><?php echo t('Effective Ways of Coping and Caring'); ?></p>
        <p><?php echo t('In this lesson, we will focus on effective ways of coping and caring. We’ll first learn about one of the most effective ways of coping and that is activity. In its purest form, “activity” means “doing.” In particular, for the first half of the lesson we will:'); ?></p>
        <ul>
          <li><?php echo t('Discuss the importance of “doing”'); ?></li>
          <li><?php echo t('Consider the importance of activities and tasks among persons with memory loss'); ?></li>
          <li><?php echo t('Learn how to analyze and adapt tasks'); ?></li>
        </ul>
        <p><?php echo t('Recognize the importance of “doing” in your life and in the life of your family member.'); ?></p>
        <p><?php echo t('Think about when you meet someone new. What do you talk about? The first thing you do is probably to exchange names and a few pleasantries. As the conversation continues, however, you probably begin to talk about what you do – your occupation, your hobbies and interests. What we do is important to us, and helps other people understand us.'); ?></p>
        <p><?php echo t('Think of your own life. What things do you enjoy doing?'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
  </div>
  
  <!-- close course --> 
</div>
