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
									'height' => '720',
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
    <img class="block-center" src="<?php echo $this->getImagesUrl('286x352_Grafix_1in5.png'); ?>" />
    <p><?php echo t('One in five caregivers report having had some degree of training, but continue to seek additional resources.'); ?></p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>Alzheimer's Association</h3>
    <br />
    <p><?php echo t('10 Early Signs and Symptoms of Alzheimer\'s'); ?></p>
    <p> <a href="https://www.alz.org/alzheimers_disease_10_signs_of_alzheimers.asp" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('alz.png'); ?>" /></a></p>
    <p><?php echo t('Memory loss that disrupts daily life may be a symptom of Alzheimer\'s or another dementia. Alzheimer\'s is a brain disease that causes a slow decline in memory, thinking and reasoning skills. There are 10 warning signs and symptoms. Every individual may experience one or more of these signs in different degrees. If you notice any of them, please see a doctor.'); ?></p>
    <br />
  </div>
  <div class="box-sidebar one">
    <h3>U.S. Dept. of Health &amp; Human Srvc.</h3>
    <p><?php echo t('2011 - 2012 Alzheimer\'s Disease Progress Report'); ?></p>
    <p><a href="http://www.nia.nih.gov/alzheimers/publication/2011-2012-alzheimers-disease-progress-report" target="_blank"><img class="block-center" src="<?php echo $this->getImagesUrl('adpr-front.png'); ?>" /></a></p>
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
    <li> 
    <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1"> <?php echo t('Overview of Memory Loss'); ?></a> 
    <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a> 
    <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-16" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-17" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-18" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-19" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-20" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-21" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-22" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-23" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-24" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-25" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
    <a href="#lesson-1-slide-26" data-fancybox-group="lesson-1" class="hide lesson-1"></a>


    
    
    
    </li>
    
    
    
    
    <li> <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2"> <?php echo t('Communication Strategies'); ?></a> <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-4" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-5" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-6" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-7" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-8" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-9" data-fancybox-group="lesson-2" class="hide lesson-2"></a> <a href="#lesson-2-slide-10" data-fancybox-group="lesson-2" class="hide lesson-2"></a></li>
    <li> <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3"> <?php echo t('Making Decisions'); ?></a> <a href="#lesson-3-slide-2" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-3" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-4" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-5" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-6" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-7" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-8" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-9" data-fancybox-group="lesson-3" class="hide lesson-3"></a> <a href="#lesson-3-slide-10" data-fancybox-group="lesson-3" class="hide lesson-3"></a></li>
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
<div id="lesson-1">
  <div id="lesson-1-slide-1" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Overview of Memory Loss and Related Symptoms'); ?></h2>
      <hr />
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
</div>
<div id="lesson-1-slide-2" class="course-slide">
  <div class="content">
    <h2 class="flowers"><?php echo t('Welcome!'); ?></h2>
    <hr />
    <p><?php echo t('Welcome to the first lesson of MSML Online. We want to encourage everyone to participate via the Forum/Blog. However, at the same time we wish to protect everyone’s privacy. Therefore, we ask that confidentiality be maintained. Simply put, whatever is said here must stay here.'); ?></p>
    <h4><?php echo t('Introductions'); ?></h4>
    <p><?php echo t('We will begin by asking you to say something about who you are and what brings you here. Please answer these questions on the Forum/Blog:'); ?></p>
    <ul>
      <li><?php echo t('What is your name?'); ?></li>
      <li><?php echo t('What is your relationship with the person who is experiencing memory loss?'); ?></li>
      <li><?php echo t('How long have you noticed the problem with memory or thinking?'); ?></li>
      <li><?php echo t('What is the name of the medical condition or diagnosis, if known, that accounts for the problem?'); ?></li>
    </ul>
  </div>
  <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
</div>


<div id="lesson-1-slide-3" class="course-slide">
  <div class="content">
    <h2 class="flowers">Media Storm</h2>
    <hr />
    
    <p><?php echo t('Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two children when Winokur\'s 83-year-old father, Herbie, became too infirm to care for himself.'); ?></p>
    
    <br /><br />

<div style="width:400px;"><div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ce9beaabc886268&w=400&h=340&amp;lang=none"></script></div><div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">Millions of middle-aged Americans are caring for their children as well as their aging parents. When filmmaker-photographer pair Julie Winokur and Ed Kashi took in Winokur's 83-year-old father, they decided to document their own story. See the project at <a href="http://mediastorm.com/publication/the-sandwich-generation" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/the-sandwich-generation</a></div></div>


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
    <p><?php echo t('Deterioration of at least two brain functions, including memory.'); ?></p>
    <p><?php echo t('A syndrome, not a diagnosis.'); ?></p>
    <p><?php echo t('In the past, referred to as senility or “hardening of the arteries.”'); ?></p>
    <p><?php echo t('Dementia refers to an acquired and progressive loss of mental functions due to a brain disorder. Memory loss is typically the first symptom shown by someone with dementia. This is not a normal part of the aging process, even though the vast majority of persons who experience a dementia are over 65 years of age. A medical diagnosis is required to determine the underlying cause or causes of symptoms. In the past, terms like “senility” and “hardening of the arteries” were commonly used to describe dementia but do not accurately explain the disease process at work.'); ?></p>
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
    <p><?php echo t('Did you ever forget a name or forget an appointment or get lost? What did it feel like at the time?'); ?></p>
    <p><?php echo t('Imagine how difficult it would be to experience this type of problem on a regular basis. We will address the experience of living dementia during the next section.'); ?></p>
  </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
  
  
  
  
  
  <div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
      <h2 class="flowers"><?php echo t('Dementia'); ?></h2>
      <hr />
      <h5><?php echo t('Reversible Dementias'); ?></h5>
      <ul>
        <li><?php echo t('Toxic Effects of Medications'); ?></li>
        <li><?php echo t('Infections'); ?></li>
        <li><?php echo t('Metabolic disorders'); ?></li>
        <li><?php echo t('Major depression'); ?></li>
        <li><?php echo t('Brain tumors'); ?></li>
      </ul>
    
        <h5><?php echo t('Irreversible Dementias'); ?></h5>
          <ul>
        <li><?php echo t('Alzheimer’s Disease'); ?></li>
        <li><?php echo t('Multi-infarct/Vascular'); ?></li>
        <li><?php echo t('Parkinson’s Disease'); ?></li>
        <li><?php echo t('Lewy Body Disease'); ?></li>
        <li><?php echo t('Over 50 rare types'); ?></li>
      </ul>
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
        	<li><h5><?php echo t('Middle Stage'); ?></h5></li>
            <li><h5><?php echo t('Late Stage'); ?></h5></li>
            <li><h5><?php echo t('Final Stage'); ?></h5></li>
         </ul>

                </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
  
  <div id="lesson-1-slide-14" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Changes in the Brain'); ?></h2>
        <hr />
        
      <ul>
      <li><?php echo t('Key chemicals malfunction, disrupting communication among cells'); ?>
      </li>
      <li><?php echo t('Tiny abnormalities form: plaques &amp; tangles'); ?>
      </li>
      <li><?php echo t('Communication between nerve cells is disrupted'); ?>
      </li>
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
        <br /><br />
        
       <div style="width:400px;"><div style="height:340px;"><script type="text/javascript" src="http://mediastorm.com/player/embed.php?id=e5178ccd9bb6ef492263&w=400&h=340&amp;lang=none"></script></div><div style="padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#999999; background-color:#000000;">With humor as well as unflinching honesty, <i>It Ain't Television... It's Brain Surgery</i> is Ray Farkas's first-person account of his own brain surgery, which he underwent in hopes of reducing the debilitating symptoms of Parkinson's Disease. See the project at <a href="http://mediastorm.com/publication/it-aint-television-its-brain-surgery" target="_blank" style="color:#0083c5;">http://mediastorm.com/publication/it-aint-television-its-brain-surgery</a></div></div>
        <br />
        
        
        
        
                                </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
  
    <div id="lesson-1-slide-15" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Definite Risk Factors for Alzheimer\'s Disease'); ?></h2>
        <hr />
        
         <ul>
      <li><?php echo t('Increasing age'); ?>
      </li>
      <li><?php echo t('Heart disease'); ?>
      </li>
      <li><?php echo t('Diabetes'); ?>
      </li>
      <li><?php echo t('Down Syndrome'); ?>
      </li>
      <li><?php echo t('Race'); ?>
      </li>
      <li><?php echo t('Family history; genetics'); ?></li>
    </ul>
    
    <p><?php echo t('Circumstances that put one at risk for diseases are referred to as risk factors. For example, inhaling tobacco smoke is known to increase one’s risk of getting lung and heart diseases. High blood pressure, high cholesterol levels, and obesity significantly increase one’s chances for heart disease. Identification of these risk factors has led to  advances in prevention, treatments, and cures.'); ?></p>
    
    <p><?php echo t('After searching the Internet, post other factors that are not already listed, on the Forum.'); ?></p>
    <p><?php echo t('It should be kept in mind that many conditions such as stroke, diabetes, cancer, and heart disease also tend to run in families. However, just because one’s parent had a certain disease does not mean that his or her children are destined to get it too. Other factors such as environmental risks must be considered.'); ?></p>
       
                      </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
   <div id="lesson-1-slide-16" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Possible Risk Factors for AD'); ?></h2>
        <hr />
        
         <ul>
      <li><?php echo t('Environmental toxins'); ?></li>
      </li>
      <li><?php echo t('Low formal education &amp; low occupational attainment'); ?>
      </li>
      <li><?php echo t('Previous head trauma'); ?>
      </li>
      <li><?php echo t('Cerebrovascular disease'); ?>
      </li>
      <li><?php echo t('Dietary factors'); ?></li>
    </ul>
    <p><?php echo t('Possible risk factors are those suspected of being linked somehow to AD, but the    linkage has not been proven. Weak or strong associations with AD may be attributed to  a complex number of factors still unidentified.'); ?></p>
       
    </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
  
   
   <div id="lesson-1-slide-17" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Strategies for Medical Treatment'); ?></h2>
        <hr />
        
         <ul>
      <li><?php echo t('Prevention of disease'); ?>
      </li>
      <li><?php echo t('Delay onset'); ?>
      </li>
      <li><?php echo t('Slow rate of progression'); ?>
      </li>
      <li><?php echo t('Treat primary symptoms (cognitive)'); ?>
      </li>
      <li><?php echo t('Treat secondary symptoms (behavioral)'); ?></li>
    </ul>
    
    <p><?php echo t('After searching the Internet, list other strategies for medical treatment on the Forum'); ?></p>
        
  
          </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
   <div id="lesson-1-slide-18" class="course-slide">
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
  
  
   <div id="lesson-1-slide-19" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Participating in Research'); ?></h2>
        <hr />
        
         <ul>
      <li><?php echo t('Experimental medications'); ?>
      </li>
      <li><?php echo t('Adventurous attitude required'); ?>
      </li>
      <li><?php echo t('Criteria for inclusion and exclusion'); ?>
      </li>
      <li><?php echo t('Informed consent'); ?>
      </li>
      <li><?php echo t('Other types of research studies'); ?>
      </li>
      <li><a href="http://www.clinicaltrials.gov/" target="_blank">www.ClinicalTrials.gov</a></li>
    </ul>
    <p><?php echo t('All of the medications just mentioned underwent a rigorous testing process for many  years prior to approval by the U.S. FDA. Testing first  takes place with animals and then a small number of people to ensure safety and  potential effectiveness. The next phase involves a large number of human subjects to determine whether or not a medication is effective. Volunteers are always needed to  participate in this effort.'); ?></p>
    
    <p><?php echo t('An adventurous attitude is required since it is not known if these experimental drugs are  truly effective—that is the purpose of the research. Most such drug studies require close cooperation among volunteers, their families and medical staff. In spite of one\'s willingness to participate in a given study, there is always a strict set of inclusion and exclusion criteria so that most people do not qualify for a variety of reasons.  All eligible participants in any research study must sign a consent form that spells out the risks and benefits of participation. Apart from drug studies, researchers conduct a wide variety of studies into the nature of AD and its treatment or prevention. Again, all such studies are subject to informed consent so that the rights of participants are  protected.'); ?></p>
    
    <p><?php echo t('If interested in exploring participation in drug studies or other research studies in the  local area, visit the Alzheimer\'s Disease Education and Referral Center '); ?><a href="http://www.nia.nih.gov/Alzheimers/ResearchInformation/ClinicalTrials/" target="_blank"><?php echo t('website'); ?></a>.</p>
    
    <p><?php echo t('Many research studies now in progress are aiming to prevent or slow down the  progression of AD. As mentioned earlier, some people exhibit persistent forgetfulness  but lack any other symptoms of AD. They are referred to as having, “Mild Cognitive  Impairment” and many of them develop additional symptoms of AD over time. Many  drug trials today are aiming to preventing “full blown” AD in such persons.'); ?></p>

                      </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
  
  <div id="lesson-1-slide-20" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Potential Treatments/ Prevention'); ?></h2>
        <hr />
        
         <ul>
      <li><?php echo t('Anti-Inflammatory Drugs'); ?></li>
      <li><?php echo t('Antioxidant Agents'); ?>
      </li>
      <li><?php echo t('Statin drugs'); ?>
      </li>
      <li><?php echo t('Alternative Medicine'); ?>
      </li>
      <li><?php echo t('A Vaccine?'); ?></li>
    </ul>
    <p><?php echo t('Many other drugs are in various stages of testing. Meanwhile, several other approaches  to treating and preventing AD are under investigation.'); ?></p>
    
    <p><?php echo t('After searching the Internet, list other potential treatments and preventions on the Forum'); ?></p>
        
                 </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
   <div id="lesson-1-slide-21" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Other Ways to Reduce Risk?'); ?></h2>
        <hr />
        
          <ul>
      <li><?php echo t('Physical Exercise'); ?>
      </li>
      <li><?php echo t('“Use It or Lose It”'); ?>
      </li>
      <li><?php echo t('Diet'); ?></li>
    </ul>
        
            <p><?php echo t('After searching the Internet, list other ways to reduce risk on the Forum'); ?></p>
        
        
                        </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  <div id="lesson-1-slide-22" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Air Chamber Cure for Reagan\'s Alzheimer\'s!'); ?></h2>
        <hr />
        
           <p><?php echo t('This is a <a href="http://books.google.com/books?id=9_EDAAAAMBAJ&pg=PA3&lpg=PA3&dq=%22Air+Chamber+Cure+for+Reagan%E2%80%99s+Alzheimer%E2%80%99s!%22&source=bl&ots=45LsmPZfRl&sig=eDj68E8i5G76vpCUD2Bx8GIy0Ow&hl=en&ei=J0qnTqbAE6KMiAK89NHhDQ&sa=X&oi=book_result&ct=result&resnum=1&ved=0CCwQ6AEwAA#v=onepage&q=%22Air%20Chamber%20Cure%20for%20Reagan%E2%80%99s%20Alzheimer%E2%80%99s!%22&f=false" target="_blank">clipping</a> from a national tabloid. Like so many other headlines in those  newspapers, this one is not really true. There are many things advertised as potential cures or treatment for AD that have no scientific basis. One must be careful to scrutinize  these claims and not waste time and money on the equivalent of snake oil. At times,  there are reputable people selling phony potions. The bottom line here is: Buyer  Beware! Be sure to consult with your physician before trying any new treatment.'); ?></p>
        </div>
    <div class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></div>
  </div>
  
       <div id="lesson-1-slide-23" class="course-slide">
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
  
    <div id="lesson-1-slide-24" class="course-slide">
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
        
        
        
          <div id="lesson-1-slide-25" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Closing'); ?></h2>
        <hr />
        
          <p><?php echo t('Before closing, we want to note that this first lesson is the most technical in nature.  Although there were not many opportunities for sharing your ideas, the remaining four  lessons will offer plenty of time for your input. Facts about the medical causes and  treatments for memory loss are important. However, we will spend the remaining lessons  talking about how to cope with the practical, day-to-day challenges of living with someone with memory loss.'); ?></p>
          
          <p><?php echo t('Finally, we wish to introduce the book, <a href="http://www.amazon.com/Alzheimers-Early-Stages-Friends-Caregivers/dp/0897933974" target="_blank">Alzheimer’s Early Stages: First steps for family,  friends and caregivers. The</a> book was written by one of the  developers of this course. It is a useful companion guide to the material we cover in  these classes. For example, chapters 1 to 4 cover the information shared today in  greater detail. We highly recommend that you purchase it today and read those first 4  chapters. We will be recommending other chapters in the weeks ahead that reinforce  key points covered in these lessons.'); ?></p>
        
        </div>
    <div class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> <?php echo t('Complete Lesson'); ?></a></div>
      </div>
  
  
  
  
  <div id="lesson-2">
    <div id="lesson-2-slide-1" class="course-slide">
      <div class="content">
        <h2 class="flowers"><?php echo t('Communication Strategies'); ?></h2>
        <hr />
        <p><?php echo t('Lesson Objectives:'); ?></p>
        <ul>
          <li><?php echo t('To give an overview of communication changes typical in early memory loss.'); ?></li>
          <li><?php echo t('To familiarize participants with general principles for maintaining communication with a person experiencing early memory loss.'); ?></li>
          <li><?php echo t('To describe several ways to encourage verbal expression.'); ?></li>
          <li><?php echo t('To review common communication pitfalls, and how to avoid them.'); ?></li>
        </ul>
        <p><?php echo t('Welcome Back!'); ?></p>
        <p><?php echo t('Welcome to the second lesson of MSML Online. One of the more frustrating and difficult aspects of memory loss is that the person\'s ability to communicate may be compromised. In this class, we will discuss how to adapt to these changes. We will cover these general topics and get into specifics along the way:'); ?></p>
        <p><?php echo t('Agenda for Lesson 2'); ?></p>
        <ul>
          <li><?php echo t('Communication changes in early stages of memory loss'); ?></li>
          <li><?php echo t('General principles for enhancing communication'); ?></li>
          <li><?php echo t('Ways to encourage verbal expression'); ?></li>
          <li><?php echo t('Avoiding communication pitfalls'); ?></li>
        </ul>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
    </div>
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
        <p><?php echo t('Welcome Back!'); ?></p>
        <p><?php echo t('Welcome to the third lesson of MSML Online.'); ?></p>
        <p><?php echo t('Before you begin, please email your Instructor or post to the Forum/Blog any questions or comments related to last week\'s lesson on Communication.'); ?></p>
      </div>
      <div class="buttons"> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?></a></div>
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
  <!-- final div needed to close course --> 
</div>
