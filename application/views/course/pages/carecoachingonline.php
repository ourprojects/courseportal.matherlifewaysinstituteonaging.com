<?php

$this->breadcrumbs = array(t('Courses'));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => '.open-tutorial',
				'config' => array(
						'width' => '1024px',
						'height' => '768px',
						'arrows' => false,
						'autoSize' => false,
						'mouseWheel' => false,
							
				)
		)
);

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-courses.png'); ?>);" />
<h1 class="bottom"><?php echo t('Care Coaching Online'); ?></h1>
</div>

<!-- Start sidebar here -->
<div id="sidebar">
  <div class="box-sidebar one"> 
    
    <!-- sidebar #1 here -->
    <h3><?php echo t('Working Caregivers in America'); ?></h3>
    <img class="block-center" src="<?php echo $this->getImagesUrl('286x366_Grafix_69pc.png'); ?>" />
    <p><?php echo t('69% of working caregivers report having to rearrange their work schedule, decrease their hours, or take an 
	unpaid leave of absence to meet their care-giving responsibilities.'); ?></p>
  </div>
  
  <!-- sidebar #2 here -->
  
  <div class="box-sidebar two">
    <h3><?php echo t('Magnitude - Informal Caregivers'); ?></h3>
    <p><a href="http://www.caregiver.org/caregiver/jsp/home.jsp" target="_blank">FAMILY CAREGIVER ALLIANCE</a><br />
      <?php echo t('National Center on Caregiving (USA)'); ?></p>
    <p class="title">65.7 million</p>
    <p><?php echo t('caregivers make up 29% of the U.S. adult population providing care to someone who is ill, disabled or aged'); ?></p>
    <hr />
    <p class="title">52 million</p>
    <p><?php echo t('caregivers provide care to adults (aged 18+) with a disability or illness'); ?></p>
    <hr />
    <p class="title">14.9 million</p>
    <p><?php echo t('care for someone who has Alzheimer\'s disease or other dementia'); ?></p>
  </div>
</div>

<!-- Start main content here -->

<div class="column-wide">
<h2 class="flowers"><?php echo t('CARE Coaching Online'); ?></h2>
<p><?php echo t('CARE: Communicate, Advocate, Relate, Encourage'); ?></p>
<p><?php echo t('--Balancing work and family caregiver responsibilities'); ?></p>
<p><?php echo t('CARE Coaching Online provides working caregivers with essential tools, knowledge, and skills to effectively deal with the variety of issues arising from caring for their aging parents, relatives, or loved ones. Developed by Mather LifeWays Institute on Aging, CARE Coaching Online improves working caregivers abilities to communicate, advocate, relate, and encourage their older parents or loved ones in making future plans.'); ?></p>
<h2><?php echo t('Objectives'); ?></h2>
<ul>
  <li><?php echo t('Identify, understand, and support needs and preferences of older adults'); ?></li>
  <li><?php echo t('Manage health information and record keeping'); ?></li>
  <li><?php echo t('Understand aspects of the health care system and utilization by older adults'); ?></li>
  <li><?php echo t('Better prepare for potential relocation of older adults'); ?></li>
  <li><?php echo t('Promote the safety of older relatives and friends in caring for themselves'); ?></li>
</ul>
<h2><?php echo t('Course Lessons'); ?></h2>

<!-- Bullet points start here for course lessons, hyperlinks to FancyBox -->

<ul>
  <li> <a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"><?php echo t('Care Coaching'); ?></a> <a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-7" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-8" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-9" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-10" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-11" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-12" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-13" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-14" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> </li>
  <li><a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"><?php echo t('Understanding Needs and Preferences of Older Adults'); ?></a> <a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-7" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-8" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-9" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> </li>
  <li><a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"><?php echo t('Managing Health Information and Record Keeping'); ?></a> <a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-7" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-8" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-9" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-10" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-11" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> <a href="#slide-12" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> </li>
  
  <li><a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"><?php echo t('Understanding the Health Care System and Utilization by Older Adults'); ?></a> 
  <a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-7" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-8" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-9" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-10" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  </li>
  
    <li><a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"><?php echo t('Relocation and Transfers by Older Adults within the Health Care System'); ?></a> 
  <a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-7" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-8" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-9" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  <a href="#slide-10" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
  </li>
  
  <li><a href="#"><?php echo t('Promoting Safety of Older Relatives and Friends in Caring for Themselves'); ?></a></li>
  <li><a href="#"><?php echo t('Supporting Personal Choice and Preferences of Older Adults in Health and Care Decision Making'); ?></a></li>
</ul>

<!-- Start Course content here for FancyBox --> 

<!-- Lesson #1 - Care Coaching starts here --> 
<!-- slide #1 -->

<div id="tutorial">
  <div id="slide-1" class="slide">
    <h2 class="flowers"><?php echo t('CARE Coaching - Topics'); ?></h2>
    <hr />
    <p><?php echo t('What’s CARE Coaching all about?'); ?><br />
      <?php echo t('CARE Coaching involves a method to help you as a caregiver think differently about a caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and actions.'); ?></p>
    <p><?php echo t('Self-Coaching: It all starts with me!'); ?><br />
      <?php echo t('Self-coaching shifts the approach from the cycling negative “internal dialogue” to help you focus on what’s important to you right now and how you may accomplish that goal.'); ?></p>
    <p><?php echo t('Activity – Self-Awareness Survey'); ?><br />
      <?php echo t('This activity invites you to explore and live several questions. Your responses should open up more self-awareness of what is important to you in your life.'); ?></p>
    <p><?php echo t('Creating the Environment for Self-Coaching'); ?><br />
      <?php echo t('The principle behind self-coaching (and CARE Coaching for that matter!) is the revelation of solutions already inherent in each person.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button right"
				onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #2 -->
  
  <div id="slide-2" class="slide">
    <h2 class="flowers"><?php echo t('CARE Coaching - Topics (continued)'); ?></h2>
    <hr />
    <p><?php echo t('Video – 5 Steps to Self-Coaching'); ?><br />
      <?php echo t('Serving as an introduction to self-coaching exercises, this video outlines a simple self-coaching process can be used over and over again whenever you need it.'); ?></p>
    <p><?php echo t('Activity – Principles of Success'); ?><br />
      <?php echo t('This activity focuses on assessing your awareness of ten principles of success and your rating of how you presently live according to them.'); ?></p>
    <p><?php echo t('Self-Coaching Exercise – The Power of Journaling'); ?><br />
      <?php echo t('Journaling is one powerful technique to refocus the negative into positive affirmations. With consistent practice, this method can help create a more positive outlook in our own lives as well as create more positive interactions with others.'); ?></p>
    <p><?php echo t('Self-Coaching Exercise – Focus on the Goal'); ?><br />
      <?php echo t('How do we identify the goal? The goal answers the question, “What do you want that’s really important to you?” This exercise allows you to practice writing goals.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #3 -->
  
  <div id="slide-3" class="slide">
    <h2 class="flowers"><?php echo t('What’s CARE Coaching all about?'); ?></h2>
    <hr />
    <p><?php echo t('You are probably familiar with the term “coaching” from many aspects of our daily lives. As a parent or sibling, you may be involved in coaching little league or some other sport. Usually this form of coaching involves teams. The role of the coach is to motivate, set ground rules, and draw out the best in each player for the good of the team.'); ?></p>
    <p><?php echo t('In the work environment, coaching may also involve the work team or individual. Coaching the work team may involve looking at ways to turn barriers into opportunities for the good of the team and company. An organization may bring in a professional coach to build sustainable, high-performance work teams and thus build the company’s competitive advantage over other organizations. At the individual level, a coach may focus on leadership development showing the company’s commitment to build a strong base of effective leaders.'); ?></p>
    <p><?php echo t('As a current or future caregiver, you may be feeling as if you are in a “reversed role” to an elderly parent, other relative, or friend. When we are young, we look up to parents or others as a “coach” in many respects. Though it may have been difficult at times for all of us growing up, the effective parent “coach” had the following skill set:'); ?></p>
    <ul>
      <li><?php echo t('They respected us, so we listened to them.'); ?></li>
      <li><?php echo t('They listened to us, so we felt understood.'); ?></li>
      <li><?php echo t('They appreciated us, so we felt supported.'); ?></li>
    </ul>
    <p><?php echo t('They supported us when we tried new things, so we grew more responsible.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #4 -->
  
  <div id="slide-4" class="slide">
    <h2 class="flowers"><?php echo t('What’s CARE Coaching all about? (continued)'); ?></h2>
    <hr />
    <p><?php echo t('As our parents age, they may suffer declining physical or cognitive health and thus have greater need for our help and understanding, and so we may become their “coach” in life. That is easier said than done in many cases! Regardless of their age, our parents always see themselves in that role in our relationship with them. We also tend to go back into old habits, communication styles, or reactions when dealing with our parents. How do you deal with a situation where your father begins to have minor car accidents or “forgets” the way home? Talking with a parent about giving up the car keys is probably one of the most challenging situations we may face as a caregiver.'); ?></p>
    <p><?php echo t('CARE Coaching involves a method to help you as a caregiver think differently about a caregiving situation so you may better prepare and feel confident about your caregiving responsibilities and actions. Learning what is important to older parents – and learning how to draw that out – often bringing to light new information about what is important to them in terms of their own health and care. CARE Coaching will provide your tools, resources, and experiences targeted towards strengthening your caregiving abilities to Communicate, Advocate, Relate, and Encourage older parents or other loved ones. Throughout this course, we will highlight these terms and provide examples and activities to help you on this journey.'); ?></p>
    <p><?php echo t('In this course, we’ll usually talk about “older parents,” but we realize that caregivers may be involved in caring for older siblings, other relatives, friends, or neighbors. For the purposes of this course, we will use “older parents” as our “short-hand” descriptor of any older adult that you may be caring for! Before we can start coaching others, let’s consider our skills related to coaching ourselves!'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #5 -->
  
  <div id="slide-5" class="slide">
    <h2 class="flowers"><?php echo t('Self-Coaching: It all starts with me!'); ?></h2>
    <hr />
    <p><?php echo t('In this case, it is alright to say “it is all about me!” There is quite a bit of information published about “self-coaching.” Think about the fact that we each represent a unique individual surrounded by a myriad of things going on inside and outside of ourselves. We constantly have an “internal dialogue” going on that no one else can hear. As a caregiver, that “internal dialogue” may be reliving negative experiences:'); ?></p>
    <ul>
      <li><?php echo t('“If only my mother listened to me and moved in with us years ago, she would not have fallen, broken her hip, and wound up in that terrible nursing home!”'); ?></li>
      <li><?php echo t('“I just can not take on more responsibility for my dad\’s care. I already work 50 to 60 hours a week and have family responsibilities. But if I do not, who will?”'); ?></li>
      <li><?php echo t('“How am I going to bring up the issue of long-term care planning with my parents? They always shut me off when I bring up questions about their finances.”'); ?></li>
    </ul>
    <p><?php echo t('Going over and over these types of thoughts and questions in our minds does not get to problem solving. Self-coaching shifts the approach from the cycling negative “internal dialogue” to help you focus on what’s important to you right now and how you may accomplish that goal. Say this to yourself:'); ?></p>
    <ul>
      <li><?php echo t('I am going to accomplish something.'); ?></li>
      <li><?php echo t('I am going to figure it out.'); ?></li>
      <li><?php echo t('I am going to do my best thinking, because I want to get to what’s important.'); ?></li>
    </ul>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #6 -->
  
  <div id="slide-6" class="slide">
    <h2 class="flowers"><?php echo t('Self-Coaching: It all starts with me! (continued)'); ?></h2>
    <hr />
    <p><?php echo t('Now, say this out loud:'); ?></p>
    <ul>
      <li><?php echo t('I am going to accomplish something.'); ?></li>
      <li><?php echo t('I am going to figure it out.'); ?></li>
      <li><?php echo t('I am going to do my best thinking, because I want to get to what is important.'); ?></li>
    </ul>
    <p><?php echo t('This is just a simple exercise in positive self-talk. Our internal voice and thoughts have the capability to create our reality, and so it is our daily challenge to move aside the negative, cyclical thinking and focus on positive steps we may take to move forward. Focusing on the many skills you already have inside of yourself not only will benefit your own health, success, and self-esteem, but will be of great aide to your caregiving responsibilities.'); ?></p>
    <p><?php echo t('Let us first assess where you currently are related to your readiness and awareness for self-coaching, and then we will move into some self-coaching exercises that you may continue as often as you feel it would be helpful to you.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #7 -->
  
  <div id="slide-7" class="slide">
    <h2 class="flowers"><?php echo t('Activity – Self-Awareness Survey'); ?></h2>
    <hr />
    <p><?php echo t('This activity invites you to explore and live several questions. Your responses should open up more self-awareness of what is important to you in your life.'); ?></p>
    <p>insert button for activity here</p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #8 -->
  
  <div id="slide-8" class="slide">
    <h2 class="flowers"><?php echo t('Creating the Environment for Self-Coaching'); ?></h2>
    <hr />
    <p><?php echo t('The principle behind self-coaching (and CARE Coaching for that matter!) is the revelation of solutions already inherent in each person. For those who may be fortunate to experience an external coach, their role is to facilitate the experience and create an environment for the person being coached to do their best thinking.'); ?></p>
    <p><?php echo t('Self-coaching can work in the same way for many individuals who commit some time and effort into the process. We have included several exercises throughout this course that will help you practice coaching skills that will be valuable when coaching yourself or communicating in your caregiving role with older parents.'); ?></p>
    <p><?php echo t('What is necessary to create an effective self-coaching experience?'); ?></p>
    <ol>
      <li><?php echo t('You are aware of the need for change and are prepared to accept that you cannot blame others or circumstances of a situation. In other words, you are willing to be open to choices and you are willing to make those choices. It would be most like stepping outside of your situation and viewing it as impartially as possible.'); ?></li>
      <li><?php echo t('You are prepared to ask yourself some difficult questions and not avoid answering them. Imagine that you are in some tough discussions with your father and siblings about dad’s lack of caring for himself living alone. Dad has grown more isolated day by day. When visiting one day, you are shocked to find empty food containers and spoiled food in the refrigerator. There is a stack of unpaid bills on the kitchen counter next to a jar of various pills mixed together. You bring this up with your siblings, but their reaction is, “Dad is fine. He wants to stay in his house, and it’s not our place to kick him out!” Your dad says, “I just haven’t gotten around to some things…and I’d thank you to stay out of my business!”'); ?></li>
      <li><?php echo t('Are your prepared to ask yourself some key questions like…”Am I an effective caregiver? Why do I think that I am not getting the response I need from my dad or siblings? What response should I expect? Why do I believe that I should expect it? Is it realistic and upon what observations do I base the perception?”'); ?></li>
      <li><?php echo t('Most importantly, “When I think about being a good caregiver, what’s important to me?”'); ?></li>
    </ol>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #9 -->
  
  <div id="slide-9" class="slide">
    <h2 class="flowers"><?php echo t('Creating the Environment for Self-Coaching (continued)'); ?></h2>
    <hr />
    <ol>
      <li><?php echo t('You accept that through self-coaching, you are going to persist until you identify a solution and set of actions that you will then commit to implementing. It may take some time to achieve results, but you need to stick to your goal.'); ?></li>
      <li><?php echo t('Be willing to “let it go.” We’ve all been in the situation where something just nags at us. Things always seem worse when we pay too much attention to them. If I feel anxious, overwhelmed, or depressed and focus on those feelings, I become it. By letting go, I turn away from it. I don’t feed those problems any longer. It is sort of like flipping to another television channel. You may not be able to stop a thought from “percolating” in your mind, but you can say “no!” to thoughts that result in anxiety or depression. We always have choices. In this case, we have the choice not be become a victim of negative thoughts or insecurities.'); ?></li>
      <li><?php echo t('Set a time frame for the self-coaching session. The focus of self-coaching is to identify your goal, commit to your actions, and then move on to do something else. Sometimes your best thinking goes on when you do move onto something else and then come back to your goal.'); ?></li>
    </ol>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #10 -->
  
  <div id="slide-10" class="slide">
    <h2 class="flowers"><?php echo t('Video – 5 Steps to Self-Coaching'); ?></h2>
    <hr />
    <p><?php echo t('View the Seven Step Breakthrough Process with Life Coach by Rebekah Simpson. This video is a new way for you to experience a self-coaching session in the comfort of your own home. Serving as an introduction to self-coaching exercises, this video outlines a simple self-coaching process can be used over and over again whenever you need it.'); ?></p>
    <p><?php echo t('Life Coach Self-Coaching 7 Step Breakthrough'); ?></p>
    <p>
      <iframe width="420" height="315" src="http://www.youtube.com/embed/a3QihYtaCR0" frameborder="0" allowfullscreen></iframe>
    </p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #11 -->
  
  <div id="slide-11" class="slide">
    <h2 class="flowers"><?php echo t('Activity – Principles of Success'); ?></h2>
    <hr />
    <p><?php echo t('This activity focuses on assessing your awareness of ten principles of success and your rating of how you presently live according to them.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #12 -->
  
  <div id="slide-12" class="slide">
    <h2 class="flowers"><?php echo t('Self-Coaching Exercises – The Power of Journaling'); ?></h2>
    <hr />
    <p><?php echo t('Journaling is one powerful technique to refocus the negative into positive affirmations. With consistent practice, this method can help create a more positive outlook in our own lives as well as create more positive interactions with others. Journaling facilitates positive self-talk. Positive self-talk has been demonstrated to build one’s self-esteem and self-confidence across a variety of situations.'); ?></p>
    <p><?php echo t('Journaling requires a time commitment to have an impact on one’s self-confidence. We recommend that you commit 30 days to this exercise to see a difference. Because journaling is a private experience, you can create your own unique experience!'); ?></p>
    <ol>
      <li><?php echo t('Begin with getting yourself an inexpensive notebook or journal for your entries.'); ?></li>
      <li><?php echo t('Make daily entries about your accomplishments – no matter how big or small. They may be accomplishments in relation to either work or your personal life.'); ?></li>
      <li><?php echo t('Answer these questions:'); ?></li>
      <li><?php echo t('What makes me unique?'); ?></li>
      <li><?php echo t('In what areas of my life do I appear most satisfied or content?'); ?></li>
      <li><?php echo t('In which areas do I appear to be struggling or unfulfilled?'); ?></li>
      <li><?php echo t('What are my strengths? (look back at your “Principles of Success” ratings for ideas)'); ?></li>
      <li><?php echo t('How have these strengths helped me in the past?'); ?></li>
      <li><?php echo t('How do these strengths now help me?'); ?></li>
      <li><?php echo t('Review your journal entries of recent accomplishments to connect with your values and talents.'); ?></li>
      <li><?php echo t('What can you truly brag about?'); ?></li>
      <li><?php echo t('What do your successes say about you?'); ?></li>
      <li><?php echo t('Create a personal “bragging” statement. Be authentic and positive in your statement. Print out the statement and keep it visible so that you can refer to it often.'); ?></li>
      <li><?php echo t('Recite it out loud daily, saying, “This is me….This is what makes me special.”'); ?></li>
    </ol>
    </p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #13 -->
  <div id="slide-13" class="slide">
    <h2 class="flowers"><?php echo t('Self-Coaching Exercises – Focus on the Goal'); ?></h2>
    <hr />
    <p><?php echo t('Which of these sound like goals to you?'); ?></p>
    <ul>
      <li><?php echo t('I want to lose 30 pounds.'); ?></li>
      <li><?php echo t('I want to get better at negotiating.'); ?></li>
      <li><?php echo t('I want to get my mother to start considering her long-term care options.'); ?></li>
    </ul>
    <p><?php echo t('None of these are goals – these are strategies towards goals.  Strategies are important, as they focus on the “how to get to” goals. It is easy to focus on strategies rather than goals because strategies seem to focus on actions.'); ?></p>
    <p><?php echo t('How do we identify the goal?  The goal answers the question: “What do you want that is really important to you?”'); ?></p>
    <p><?php echo t('Another way to differentiate between setting goals and identifying strategies is to look at differences between goal setting and problem solving. Here are some different terms that describe the two:'); ?></p>
    <table>
      <tr>
        <td>Goal Setting</td>
        <td>Identifying Strategies</td>
      </tr>
      <tr>
        <td>Proactive</td>
        <td>Reactive</td>
      </tr>
      <tr>
        <td>Finding what is possible</td>
        <td>Finding what is wrong</td>
      </tr>
      <tr>
        <td>Developing</td>
        <td>Fixing</td>
      </tr>
      <tr>
        <td>Identifying priorities</td>
        <td>Addressing crises</td>
      </tr>
      <tr>
        <td>Dynamic</td>
        <td>Static</td>
      </tr>
      <tr>
        <td>Working with the whole</td>
        <td>Working with parts</td>
      </tr>
    </table>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #1 - Care Coaching starts here --> 
  <!-- slide #14 -->
  
  <div id="slide-14" class="slide">
    <h2 class="flowers"><?php echo t('Self-Coaching Exercises – Focus on the Goal (continued'); ?></h2>
    <hr />
    <p><?php echo t('Think of goal setting in terms of NOUNS:'); ?></p>
    <ul>
      <li><?php echo t('“I want more confidence dealing with my parents.”'); ?></li>
      <li><?php echo t('“I want a more positive attitude about my caregiving responsibilities.”'); ?></li>
      <li><?php echo t('“I want better health for myself.”'); ?></li>
    </ul>
    <p><?php echo t('Compare these to strategies which are usually stated in terms of VERBS:'); ?></p>
    <ul>
      <li><?php echo t('I want to lose 30 pounds.'); ?></li>
      <li><?php echo t('I want to get better at negotiating.'); ?></li>
      <li><?php echo t('I want to get my mother to start considering her long-term care options.'); ?></li>
    </ul>
    <p><?php echo t('For this exercise, look back at your responses to the two activities in this module.  In the Self-Awareness Survey, you explored what is important to you in your life.  In the Principles of Success activity, you rated yourself against these principles. Based on these results, develop three statements of goals for yourself. Remember that goals should be stated in terms of nouns.  Goals also answer the question, “What do you want that’s really important to you?”'); ?></p>
    <p class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();"
				class="button left"> <?php echo t('Complete Lesson'); ?> </a> </p>
  </div>
</div>

<!-- Lesson #2 - Understanding Needs and Preferences of Older Adults starts here --> 
<!-- slide #1 -->

<div id="tutorial">
  <div id="slide-1" class="slide">
    <h2 class="flowers"><?php echo t('Understanding Needs and Preferences of Older Adults - Topics'); ?></h2>
    <hr />
    <p><?php echo t('CARE Coaching: Communicating'); ?><br />
      <?php echo t('Communicating in CARE Coaching is all about choice. Caregiving commonly brings up feelings of burden, confusion, and guilt for caregivers. Communicating is the first component of CARE Coaching. As a first step, using some key communication skills can relieve some of these concerns.'); ?>
    <p><?php echo t('Exercise – Understanding Your Parents Needs and Preferences'); ?><br />
      <?php echo t('This exercise is designed to help you determine what you know and do not know about your parents needs and preferences. Determining this now will help you on the road of communicating more openly about your parents’ future wishes.'); ?></p>
    <p><?php echo t('Where to Start "The Talk"!'); ?><br />
      <?php echo t('How do you start to talk to your older parents about the future? What fears do you have about bringing up this topic with them?'); ?></p>
    <p><?php echo t('Go to the Online Topic Forum'); ?><br />
      <?php echo t('So that we can share stories, ideas, questions, and issues among participants throughout the course, we have an online topic forum. This forum is for you the caregiver, so feel free to participate in the discussions, add new topics, and share information for others to learn from!'); ?></p>
    <p><?php echo t('A Framework to Start "The Talk"'); ?><br />
      <?php echo t('A framework has been developed to help you getting the conversations going. Overall, start small while your parents are still healthy and can fully participate in the discussions about their lives and health without undue pressure.'); ?></p>
    <p><?php echo t('Activity - Practice "The Talk"'); ?><br />
      <?php echo t('Some caregivers feel that practice sessions are valuable to "test out" the conversations in other situations. Here are some practice activities for you to try out.'); ?></p>
    <p><?php echo t('CARE Coaching: Advocating'); ?><br />
      <?php echo t('The second component of CARE Coaching is advocating. You are on the same team as your parents and want to collaborate with them as a partner in their best future.'); ?></p>
      
 <p class="buttons"> <a href="javascript:;" class="button right"
				onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a> </p>    
  </div>
  
  <!-- Lesson #2 - Understanding Needs and Preferences of Older Adults --> 
  <!-- slide #2 -->
  
  <div id="slide-2" class="slide">
    <h2 class="flowers"><?php echo t('CARE Coaching: Communicating'); ?></h2>
    <hr />
    <p><?php echo t('Does this scenario sound familiar? You are in a restaurant having dinner with your older parents. Your mother has some memory problems which means she takes quite a long time to figure out what to order. The waiter is standing over your table, and your father gets frustrated waiting for her to order. He says, “Helen, just order the chicken. You like the chicken!” She says, “I guess I’ll have the chicken.”'); ?></p>
    <p><?php echo t('After the waiter leaves (and in front of your mother), he says, “She takes too long to order. She’s distracted with other things going on. She can’t figure it out, so it’s easy for her if I just tell her, and all she has to do is repeat it.” Your mother subsequently doesn’t say much through the rest of the evening. The mood around the table is not much better.'); ?></p>
    <p><?php echo t('Communicating in CARE Coaching is all about choice. Your father’s response is based on his own perceptions and feelings about what’s going on with your mother rather than supporting her remaining potential to make choices. Perhaps her memory problems do interfere with her capacity to make choices, but being able to “modify” the situation can maximize Helen’s remaining capacities.'); ?></p>
    <p><?php echo t('Here’s an example:'); ?></p>
    <p><?php echo t('Back at the restaurant, the waiter is ready to take the order. You say, “Mom, this restaurant is really well known for their delicious chicken and fish dishes, just the way you like them. What do you have a taste for today – chicken or fish?” Your mother says, “Well, I just don’t know. I had
chicken for lunch today. So I think I’d like to try their fish!”'); ?></p>
    <p><?php echo t('So what is different in the two approaches? In your approach, you are taking a CARE Coaching approach by asking a version of “What do you want?” through your conversation. Taking into consideration your mother’s limitations, you have supported her remaining abilities to participate in daily life activities.'); ?></p>
    <p><?php echo t('You may not yet be in a “caregiving” role for your older parents or other loved ones (or you may not consider what you now do for them as “caregiving”), but this course is designed to help you think about the future. People may find themselves “plunged” into the caregiving role at a time in life when they themselves are facing challenges such as mid-career transitions, their own health issues, or before retirement. Additionally, they may be contending with raising their own children simultaneously.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #2 - Understanding Needs and Preferences of Older Adults --> 
  <!-- slide #3 -->
  
  <div id="slide-3" class="slide">
    <h2 class="flowers"><?php echo t('CARE Coaching: Communicating (continued'); ?></h2>
    <hr />
    <p><?php echo t('Caregiving commonly brings up feelings of burden, confusion, and guilt for caregivers. As a first step, using some key communication skills can relieve some of these concerns. Where do these feelings stem from? Burden refers to emotional response to changes and demands that occur as caregivers give help and support to the older person.'); ?></p>
    <p><?php echo t('We have developed a Caregiver Burden Assessment to help you identify aspects of your life that may or may not be impacted by caregiving at this time. Click on the following to access the tool.'); ?></p>
    <p>button here</p>
    <p><?php echo t('Confusion about the healthcare system and utilization of those services by older adults is a universal experience for caregivers. Later in this course, we will address important ways for you to better understand the key roles and responsibilities of care providers as well as where concise, accurate information may be found to also share with your older parents.'); ?></p>
    <p><?php echo t('Guilt is often an ongoing feeling for many caregivers. Sometimes caregivers get so focused on their frail, older parent that they feel guilty focusing on someone else – including themselves. Empower Online addresses these issues for caregivers and provides tools focused on self-care of the caregiver.'); ?></p>
    <p><?php echo t('As a first step to better communication with your older parents about their needs and preferences, it is important that you have a clear understanding of what you may know and do not know about these needs and preferences. The next exercise will help you determine your level of knowledge as well as your own feelings about your parents’ future planning.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #2 - Understanding Needs and Preferences of Older Adults --> 
  <!-- slide #4 -->
  
  <div id="slide-4" class="slide">
    <h2 class="flowers"><?php echo t('Exercise – Understanding Your Parents\' Needs and Preferences'); ?></h2>
    <hr />
    <p><?php echo t('This exercise is designed to help you determine what you know and do not know about your parents needs and preferences. Determining this now will help you on the road of communicating more openly about your parents’ future wishes to reduce your experience of burden, confusion, and guilt as a caregiver. Everyone has a different level of knowledge when it comes to the following information, so do not feel overwhelmed if you do not recall or have not addressed some of these areas with your parents.'); ?></p>
    <p>button here</p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #2 - Understanding Needs and Preferences of Older Adults --> 
  <!-- slide #5 -->
  
  <div id="slide-5" class="slide">
    <h2 class="flowers"><?php echo t('Where to Start "The Talk"!'); ?></h2>
    <hr />
    <p><?php echo t('Do not feel anxious if you had a number of "blanks" when working through the previous exercise - it is not a reflection on "bad" caregiving. Your parents have been independent through these many years and may not have felt the need to share much of these matters with "the kids."'); ?> </p>
    <p><?php echo t('How do you start to talk to your older parents about the future? What fears do you have about bringing up this topic with them? So that we can share stories, ideas, questions, and issues among participants throughout the course, we have an online topic forum. This forum is for you the caregiver, so feel free to participate in the discussions, add new topics, and share information for others to learn from!'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #2 - Understanding Needs and Preferences of Older Adults --> 
  <!-- slide #6 -->
  
  <div id="slide-6" class="slide">
    <h2 class="flowers"><?php echo t('A Framework to Start "The Talk"'); ?></h2>
    <hr />
    <p><?php echo t('A framework has been developed to help you getting the conversations going. Overall, start small while your parents are still healthy and can fully participate in the discussions about their lives and health without undue pressure. Think of this paced way to communicate as "TEMPO." This acronym stands for:'); ?></p>
    <ul>
      <li><?php echo t('Timing'); ?></li>
      <li><?php echo t('Experience'); ?></li>
      <li><?php echo t('Motivation'); ?></li>
      <li><?php echo t('Place'); ?></li>
      <li><?php echo t('Outcome'); ?></li>
    </ul>
    <p><?php echo t('Timing - Plan to set aside time for conversations with your parents. Be respectful and ask them when would be the best time for them to have these conversations. In turn, make sure you have time to listen. No ringing cell phones at this time! Above all, be patient. Your parents may feel uncomfortable at first with the idea of these conversations and may want to put them off for some time.'); ?></p>
    <p><?php echo t('Experience - A good approach to bringing up these difficult topics is to relate it to your experiences. Some openers sound like this:'); ?></p>
    <p><?php echo t('"Dad, I just came from my attorney\'s office. We finished updating my will. I was wondering when the last time you took a look at yours?"'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #2 - Understanding Needs and Preferences of Older Adults --> 
  <!-- slide #7 -->
  
  <div id="slide-7" class="slide">
    <h2 class="flowers"><?php echo t('A Framework to Start "The Talk (continued'); ?></h2>
    <hr />
    <p><?php echo t('"Mom, a colleague of mine at work just had an unfortunate experience. His father had a sudden heart attack, and it took a long time before they could notify him because his dad did not have any emergency contact information in place. Can we go over how your information is organized particularly since my office recently moved and I have new phone numbers?"'); ?></p>
    <p><?php echo t('"It is really gotten to be a challenge driving out there. I am on the road all day and see quite a few bad drivers, especially those on their cell phones. I am concerned about how you are feelings about driving these days."'); ?></p>
    <p><?php echo t('Motivation - Be clear about your motive for having the conversation. The motivating factors should be related to safety, quality of life, and well-being - both theirs and yours. Their best interests are prime consideration, but your life and the lives of your family also matters.'); ?></p>
    <p><?php echo t('Place - The place where these conversations take place needs to be a "safe space" as your parents would define that. It may not necessarily be in their home. Some of these topics are sensitive and so one parent may feel more comfortable taking the lead in the conversations.'); ?></p>
    <p><?php echo t('Outcome - One conversation is not going to address all the important topics that need to be discussed. The initial conversations may be laying the groundwork for you to better understand your parents’ feelings. Not only do you want to get information, but you also want to share information.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #2 - Understanding Needs and Preferences of Older Adults --> 
  <!-- slide #8 -->
  
  <div id="slide-8" class="slide">
    <h2 class="flowers"><?php echo t('Activity - Practice "The Talk"'); ?></h2>
    <hr />
    <p><?php echo t('Some caregivers feel that practice sessions are valuable to "test out" the conversations in other situations. Here are some practice activities for you to try out.'); ?></p>
    <p>button here for download</p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
  
  <!-- Lesson #2 - Understanding Needs and Preferences of Older Adults --> 
  <!-- slide #9 -->
  
  <div id="slide-9" class="slide">
    <h2 class="flowers"><?php echo t('CARE Coaching: Advocating'); ?></h2>
    <hr />
    <p><?php echo t('It’s time to bring up the second component of CARE Coaching – that of advocating. We are talking about advocating in a caring sense – that of supporting another – rather than in the legal sense – that of defending another.'); ?></p>
    <p><?php echo t('Caregivers often view their parents as “stubborn” or “resistant” to their help:'); ?></p>
    <p><?php echo t('“I just can’t get them to listen to me!”'); ?></p>
    <p><?php echo t('“They just won’t talk to me about their problem, even though I’ve got the answer!”'); ?></p>
    <p><?php echo t('“They never take my advice – even though it’s for their own good!”'); ?></p>
    <p><?php echo t('Sounds like some things your parents may have said to you growing up? In these situations, the caregiver is thinking more like the parent, and we remember from our early experiences hearing these – how much did they work when your parents were saying these words to you?'); ?></p>
    <p><?php echo t('Consider this comparison:'); ?></p>
    <ul>
      <li><?php echo t('In the role of PARENT – you are in charge, make the rules, and set the agenda. Negotiating is unnecessary. You are a “teller of information.”'); ?></li>
      <li><?php echo t('In the role of PARTNER – you have a common goal, mutual interests, and work towards collaborating on common goals. You are a “listener for information.”'); ?></li>
    </ul>
    <p><?php echo t('You may need to reassure them that you are on the same team and you want to be a partner in their best future. Your goal is to collaborate with them to uphold their needs, beliefs, and values. It is not your intention to switch to a “parenting” role so as not to diminish their independence.'); ?></p>
    <p><?php echo t('Self-Coaching Hint: As reinforcement, you need to make sure your intentions are clear. You are not trying to subtly coerce them or manipulate them in some way. You intend to make every action and word worthy of trust. Practice holding that intention in your mind and heart, and it will make a difference in how you listen and influence what you say!'); ?></p>
    <p class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();"
				class="button left"> <?php echo t('Complete Lesson'); ?> </a> </p>
  </div>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #1 -->

<div id="tutorial">
<div id="slide-1" class="slide">
  <h2 class="flowers"><?php echo t('Managing Health Information and Record Keeping - Topics'); ?></h2>
  <hr />
  <p><?php echo t('What’s a Personal Health Record?'); ?><br />
    <?php echo t('Personal Health Records (PHR) have become an easy-to-use tools to help manage health information in a single place. Having a PHR can help provide more complete information to health care providers or other family members.'); ?></p>
  <p><?php echo t('Video – What People Say about Personal Health Records'); ?><br />
    <?php echo t('View a brief video on what people say about their experiences with Personal Health Records.'); ?></p>
  <p><?php echo t('How to Choose a Personal Health Record'); ?><br />
    <?php echo t('Choosing a Personal Health Record (PHR) is really a matter of personal choice. A PHR is controlled by the individual and can be shared with others including family members, caregivers, and health care providers.'); ?></p>
  <p><?php echo t('Types of PHRs'); ?><br />
    <?php echo t('PHRs may be kept as hard copy on paper or electronically on one’s computer or on the Internet through a service provider. In considering what form may be most suitable, you should consider things like accessibility, convenience, and ease of updating.'); ?></p>
    
 <p class="buttons"> <a href="javascript:;" class="button right"
				onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a> </p></div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #2 -->

<div id="slide-2" class="slide">
  <h2 class="flowers"><?php echo t('Managing Health Information and Record Keeping - Topics (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Activity – Reviewing Internet-Based PHR Tools – My Family Health Portrait'); ?><br />
    <?php echo t('My Family Health Portrait is a web-based program developed from the U.S. Department of Health and Human Services, Family History Initiative. This initiative is designed to encourage families to learn more about their family health history.'); ?></p>
  <p><?php echo t('Activity – Reviewing Internet-Based PHR Tools – Google Health'); ?><br />
    <?php echo t('Google Health is a free, secure web-based program to store and manage health information in a central place. Information is accessible anywhere and at anytime.'); ?></p>
  <p><?php echo t('Activity – Reviewing Internet-Based PHR Tools - ProfileMD'); ?><br />
    <?php echo t('ProfileMD is a freeware PHR that allows immediate access to medical health history and information via your smartphone or PDA.'); ?></p>
  <p><?php echo t('Exercise – CARE Coaching and Selecting PHRs'); ?><br />
    <?php echo t('Asking the right questions is key to determine which PHR product is right for you and your family. Review the previously described internet-based tools, My Family Health Profile and ProfileMD, and complete the self-learning exercise.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #3 -->

<div id="slide-3" class="slide">
  <h2 class="flowers"><?php echo t('What is a Personal Health Record?'); ?></h2>
  <hr />
  <p><?php echo t('In the previous section, you had the opportunity to complete the Exercise – Understanding Your Parents Needs and Preferences. In that exercise, we asked you to document some basics about what you know about your parents medical and health conditions.'); ?></p>
  <p><?php echo t('Information like: the name and phone numbers of physicians, lists of their medical conditions and past surgeries, current lists of medications, allergies, and reactions to certain drugs or foods, advanced directives, physical functioning level, cognition, and diet requirements are basic questions asked in the emergency room – and unfortunately – usually repeated by every physician or surgeon you may see during a hospital stay!'); ?></p>
  <p><?php echo t('It is often difficult to keep all this information straight, particularly in an emergency situation.'); ?></p>
  <p><?php echo t('To address this problem, Personal Health Records (PHR) have become an easy-to- use tools to help manage health information in a single place. Having a PHR can help provide more complete information to health care providers or other family members. Unnecessary procedures or tests may be avoided if they have been documented in a PHR. Additionally, critical information about ones health in an emergency situation would easily be accessed.'); ?></p>
  <p><?php echo t('You will learn about several different types of PHRs and have the chance to test some of these out for your own use or for your older parents.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #4 -->

<div id="slide-4" class="slide">
  <h2 class="flowers"><?php echo t('Video – What People Say about Personal Health Records'); ?></h2>
  <hr />
  <p><?php echo t('Vimeo is a respectful community of creative people who are passionate about sharing the videos they make.'); ?></p>
  <p>
    <iframe src="http://player.vimeo.com/video/5001493?title=0&amp;byline=0&amp;portrait=0" width="400" height="270" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
  </p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #5 -->

<div id="slide-5" class="slide">
  <h2 class="flowers"><?php echo t('Video – What People Say about Personal Health Records'); ?></h2>
  <hr />
  <p><?php echo t('Vimeo is a respectful community of creative people who are passionate about sharing the videos they make.'); ?></p>
  <p><a href="http://vimeo.com/5001493">PHR Video</a> from <a href="http://vimeo.com/ahima">AHIMA</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #6 -->

<div id="slide-6" class="slide">
<h2 class="flowers"><?php echo t('How to Choose a Personal Health Record'); ?></h2>
<hr />
<p><?php echo t('Choosing a Personal Health Record (PHR) is really a matter of personal choice. A PHR is controlled by the individual and can be shared with others including family members, caregivers, and health care providers. This is different from a health care provider’s electronic or paper health records which are controlled by the provider. One can get access to one’s own health records from a provider, but family members do not have access without your permission.'); ?></p>
<p><?php echo t('This can be challenging in the caregiving situation if you as the caregiver do not have permission to access your parents’ health records, and you may need to provide information to a health care provider in an emergency situation. If one of your parents was hospitalized and unable to speak for himself or herself, did you know that the hospital cannot legally provide any information to you as a child without previous permission of your parent?'); ?></p>
<p><?php echo t('Ideally, a PHR contains a fairly complete summary of one’s medical and health history based on data from a number of sources. PHRs are available from a number of sources:'); ?></p>
<ul>
<li><?php echo t('From health insurance plans for members'); ?></li>
<li><?php echo t('By health care providers for their patients'); ?></li>
<li><?php echo t('From various vendors who have security in place to receive and store personal information'); ?>
  </p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #7 -->

<div id="slide-7" class="slide">
  <h2 class="flowers"><?php echo t('Types of PHRs'); ?></h2>
  <hr />
  <p><?php echo t('PHRs may be kept as hardcopy on paper or electronically on one’s computer or on the Internet through a service provider. In considering what form may be most suitable, you should consider things like accessibility, convenience, and ease of updating.'); ?></p>
  <p><?php echo t('Paper versions can range from a formal document to a file folder with information from health care providers, insurance companies and hospitals. This is at least a good starting point for most people to get a snapshot of one’s health history. The difficulties come in when trying to keep all the information current as well as having emergency access to the information.'); ?></p>
  <p><?php echo t('The greatest risk of keeping health information on paper can easily be understood when considering the saga of Hurricane Katrina. The risks of keeping health information on paper were fully exposed when hundreds of thousands of evacuees sought care in new medical communities across the country. Evacuees lacked even the most basic personal health information, such as their medications and dosages. Most of their paper records were destroyed in the muck of hurricane-caused flooding, and many medical practices and hospitals were shut down for weeks, perhaps forever. Out of necessity, a program called'); ?> <a href="http://www.katrinahealth.org" target="_blank">KatrinaHealth</a> <?php echo t('was created to rapidly develop electronic health records for those displaced by the hurricane. Since then, the American Association of Family Practitioners (AAFP) has collaborated with the city of New Orleans and Intel, among others, to provide digital PHRs to every New Orleans resident who wants one, and to transfer these to medical practices and hospitals in the displaced residents\' current location for follow-up care.'); ?></p>
  <p><a href="http://www.ahima.org/" target="_blank">The American Health Information Management Association (AHIMA)</a> <?php echo t('created a PHR form that is available on their website.'); ?></p>
  <p><?php echo t('Software versions of PHRs are stored on personal computers. Information is inputted directly into electronic forms or by scanning documents from health care providers. A hardcopy can then be easily printed. The user controls access to the information. The major drawback is the lack of accessibility in case of an emergency unless one carries a copy of the records on a flash drive or on a data card. Most software versions of PHRs are available at a cost to consumers.'); ?></p>
  <p><?php echo t('Internet versions of PHRs are very new having just been developed over the past 1-2 years. Through the web, consumers may access their private PHR accounts by connecting to the Internet and logging in with their username and password. Information may easily be updated, and consumers may elect to share information with specific individuals of their choosing. The major advantage is the access and availability of information in emergency situations – all one needs is Internet connection and logon information.'); ?></p>
  <p><?php echo t('If you are looking at an internet-based PHR, it is very important that the provider describes security and privacy standards that are in place to protect the information being stored. We will look at a few examples in the next section.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #8 -->

<div id="slide-8" class="slide">
  <h2 class="flowers"><?php echo t('Activity – Reviewing Internet-Based PHR Tools'); ?></h2>
  <hr />
  <p><?php echo t('My Family Health Portrait'); ?></p>
  <p><?php echo t('My Family Health Portrait is a web-based program developed from the U.S. Department of Health and Human Services, Family History Initiative. This initiative is designed to encourage families to learn more about their family health history. Because health providers have long understood that common illnesses can run in families (like high blood pressure, diabetes, and heart disease – to name a few), tracing illnesses experienced by your parents, grandparents, and other blood relatives may help your physician predict disorders to which you may be at risk and take preventive action.'); ?></p>
  <p><?php echo t('My Family Health Portrait website helps users organize family history information, save it to their own computer, and print a hard copy to take to the physician’s visit. Additionally, users may grant permission for other family members to view information on their website.'); ?></p>
  <p><?php echo t('Read the section, “Learn More About My Family Health Portrait” to answer the following questions.'); ?></p>
  <ul>
    <li><?php echo t('*Why is completing a family health history important?'); ?></li>
    <li><?php echo t('*What is done to assure that my information is private that I enter in My Family Health Portrait?'); ?></li>
    <li><?php echo t('*What does it mean that this tool is EHR (Electronic Health Record) ready? How does this benefit me?'); ?></li>
    <li><?php echo t('*What is “clinical decision support”? How does it benefit me?'); ?></li>
  </ul>
  </p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #9 -->

<div id="slide-9" class="slide">
  <h2 class="flowers"><?php echo t('Activity – Reviewing Internet-Based PHR Tools'); ?></h2>
  <hr />
  <p><?php echo t('Google Health - Google offers a free, secure web-based program to store and manage health information in a central place. Information is accessible anywhere and at anytime. In addition to health information, test results, x-rays, and other scans may be easily uploaded into your PHR. You may also keep track of test results and laboratory values visually to see how you progress over time. Finally, you may print a wallet card to carry your health profile with you.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #10 -->

<div id="slide-10" class="slide">
  <h2 class="flowers"><?php echo t('Video – Introduction to Google Health'); ?></h2>
  <hr />
  <p>
    <iframe width="640" height="360" src="http://www.youtube.com/embed/yNe6-p4G7Ik?rel=0" frameborder="0" allowfullscreen></iframe>
  </p>
  <p><?php echo t('To summarize aspects of Google Health:'); ?></p>
  <ul>
    <li><?php echo t('Store and manage all health information securely.'); ?></li>
    <li><?php echo t('Create and save a health profile and link to numerous resources to learn more about symptoms, causes, and treatments.'); ?></li>
    <li><?php echo t('Import medical record files and prescription history through links with partners such as hospitals, labs, pharmacies, and insurance companies.'); ?></li>
    <li><?php echo t('Track your medical history to keep your physician updated.'); ?></li>
    <li><?php echo t('Learn how medications may interact through an integrated program that checks for potential problems between drugs.'); ?></li>
    <li><?php echo t('Select those with whom you want to share key medical information.'); ?></li>
  </ul>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #11 -->

<div id="slide-11" class="slide">
  <h2 class="flowers"><?php echo t('Activity – Reviewing Internet-Based PHR Tools'); ?></h2>
  <hr />
  <p><?php echo t('ProfileMD'); ?></p>
  <p><?php echo t('The final PHR tool we will review is one of the latest Internet-based programs designed for Smartphones or PalmOS PDA (personal digital assistant). ProfileMD is a freeware PHR that allows immediate access to medical health history and information via your smartphone or PDA. Search the Web and download the software to your computer and sync with your handheld device.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #3 - Managing Health Information and Record Keeping --> 
<!-- slide #12 -->

<div id="slide-12" class="slide">
  <h2 class="flowers"><?php echo t('Exercise – CARE Coaching and Selecting PHRs'); ?></h2>
  <hr />
  <p><?php echo t('Asking the right questions is key to determine which PHR product is right for you and your family. This exercise is designed to help you determine exactly that. Review the previously described internet-based tools, My Family Health Profile and ProfileMD, and respond to the following questions.'); ?></p>
  <p>down laod acvitity button here</p>
  <p class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();"
				class="button left"> <?php echo t('Complete Lesson'); ?> </a> </p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #1 -->

<div id="slide-1" class="slide">
  <h2 class="flowers"><?php echo t('Understanding the Health Care System and Utilization by Older Adults'); ?></h2>
  <hr />
  <p><?php echo t('Navigating the Health Care System'); ?><br />
    <?php echo t('The goal for any patient in the health care system should be to optimize your chances of achieving a good outcome when health care is needed. Taking charge of one’s health care is key.'); ?></p>
  <p><?php echo t('CARE Coaching: Relating'); ?><br />
    <?php echo t('The third component of CARE Coaching is that of relating. The most important factor in the patient-doctor relationship is communicating or relating.'); ?></p>
  <p><?php echo t('Video – How to Communicate with the Physician'); ?><br />
    <?php echo t('Dr. Lori Whittaker, a family physician in Seattle, shares tips and advice for how to speak up for yourself when you are at the doctor\'s office.'); ?></p>
  <p><?php echo t('Helping Older Parents Talk to Medical Professionals about Health Care'); ?><br />
    <?php echo t('Older adults may especially loath to question physicians because they were raised in a generation where doctors were considered to be above reproach. In planning for your discussions with your older parents and their physicians, remember that as their caregiver, you have an obligation to understand your parents’ medical care.'); ?></p>
 <p class="buttons"> <a href="javascript:;" class="button right"
				onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a> </p></div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #2 -->

<div id="slide-2" class="slide">
  <h2 class="flowers"><?php echo t('Understanding the Health Care System and Utilization by Older Adults (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Exercise – How are You with PowerPhrases?'); ?><br />
    <?php echo t('Test your skills at PowerPhrases!'); ?></p>
  <p><?php echo t('Activity – Practicing PowerPhrases with Your Health Provider'); ?><br />
    <?php echo t('Now that you have assessed your PowerPhrase skill level, we will now focus on PowerPhrases related to your health care provider to ensure a positive visit. By planning specific phrases to use in advance of the appointment, the patient can impact the outcome of the visit.'); ?></p>
  <p><?php echo t('Learning What You Need to Know About the Health Care System'); ?><br />
    <?php echo t('Learning what you need to know about the health care system can seem a daunting task. We break down some of the core components that are key for you to understand as caregivers for older parents.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #3 -->

<div id="slide-3" class="slide">
  <h2 class="flowers"><?php echo t('Navigating the Health Care System'); ?></h2>
  <hr />
  <p><?php echo t('Talk to anyone today about the state of health care and you will probably get an earful of complaints, “horror” stories, and head shaking. Complaints run the gamut of problems with insurance companies and Medicare, doctors who don’t spend enough time with patients, and quick hospital discharges. Here are common issues voiced by older adult patients:'); ?></p>
  <ul>
    <li><?php echo t('They cannot get an accurate diagnosis, understand they need treatment, and need someone to help them find physicians, or get tests, that can help them.'); ?></li>
    <li><?php echo t('They are seeing too many specialists who are not coordinating their care. They need someone who will take a look at their reams of medical records to help them sort out their treatment.'); ?></li>
    <li><?php echo t('They are having trouble with their insurer, who isn’t paying as promised, or who is denying them care.'); ?></li>
    <li><?php echo t('They have received doctor or hospital bills that they cannot sort out or decipher. They believe they have been billed for services they did not receive. They have read that up to 80% of hospital bills are incorrect, and they want someone to help them negotiate with whoever has billed them.'); ?></li>
  </ul>
  <p><?php echo t('Some of our parents may fondly remember the days when doctors took time with their patients or even came to the home for a visit! We may not be able to “fix” all the problems with the health care system, but what we can do is focus on two things:'); ?></p>
  <ul>
    <li><?php echo t('Learning to communicate effectively with health care providers – particularly with physicians – to manage relationships with providers, and'); ?></li>
    <li><?php echo t('Becoming empowered with knowledge to better understanding health care and roles of providers'); ?></li>
  </ul>
  <p><?php echo t('Particularly for many older adults, the experience of the patient-doctor relationship is really what’s missing in much of today’s health care experience. We can use CARE Coaching techniques to help build that relationship.'); ?></p>
  <p><?php echo t('The goal for any patient in the health care system should be to optimize your chances of achieving a good outcome when health care is needed. Taking charge of one’s health care is key. For older parents who may not be used to or feel comfortable “taking charge of their health care,” this may be a difficult concept for them. We’ll look at some CARE Coaching techniques to help your parents feel comfortable being in charge.'); ?></p>
  <p><?php echo t('This section will also reinforce your important role as “advocate” that we introduced in Lesson 2. So let’s begin with that all important “patient-doctor” relationship.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #4 -->

<div id="slide-4" class="slide">
  <h2 class="flowers"><?php echo t('CARE Coaching: Relating'); ?></h2>
  <hr />
  <p><?php echo t('Over the years, the patient-doctor relationship has been defined, though rules of ethics and rules of law, as a fiduciary one, as a relationship founded in trust. When a patient seeks out a physician’s help, and the physician agrees to give that help, a special covenant is made. The patient agrees to take the physician into confidence, to reveal intimate information related to one’s health. The physician, in turn, agrees to honor that trust, and to become the patient’s advocate in all health-related matters.'); ?></p>
  <p><?php echo t('As a caregiver, you are probably stepping into a situation where your older parents already are seeing one or more physicians for various ailments. Stepping into those relationships can often make you feel like the “third wheel” initially. We are not suggesting that you go to every office visit with your older parents, but in the future, your caregiving role may include and require this so that you may best advocate for you parents.'); ?></p>
  <p><?php echo t('This brings us to the third component of CARE Coaching, that of relating. The most important factor in the patient-doctor relationship is communicating or relating. It fairly obvious that if a patient cannot communicate well with his or her physician, that’s a problem. How do you know that your older parents’ doctor is relating? Here are some questions to asking your parents:'); ?></p>
  <ul>
    <li><?php echo t('Is your doctor listening to what you are saying?'); ?></li>
    <li><?php echo t('Does your doctor show understanding about your concerns by responding meaningfully to them?'); ?></li>
    <li><?php echo t('When your doctor explains medical issues to you, are they made to be understandable?'); ?></li>
    <li><?php echo t('Is your doctor patient with you and willing to draw out questions you may have?'); ?></li>
  </ul>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #5 -->

<div id="slide-5" class="slide">
  <h2 class="flowers"><?php echo t('Video – How to Communicate with the Physician'); ?></h2>
  <hr />
  <p><?php echo t('Have you ever left a doctor\'s appoinment feeling that your questions were not answered? Or not sure what you were supposed to do next? Do not worry, you are not alone. Dr. Lori Whittaker, a family physician in Seattle, shares tips and advice for how to speak up for yourself when you are at the doctor\'s office. Good communication is a two way street, and it is up to you to make sure you get the treatment and the information you need to stay healthy. '); ?>
  <p>
    <iframe width="480" height="360" src="http://www.youtube.com/embed/rEt8xfQ9z1U?rel=0" frameborder="0" allowfullscreen></iframe>
  </p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #6 -->

<div id="slide-6" class="slide">
  <h2 class="flowers"><?php echo t('Helping Older Parents Talk to Medical Professionals about Health Care'); ?></h2>
  <hr />
  <p><?php echo t('Occasionally, it may be feel intimidating to speak to physicians for one reason or another. At times, the actions of the doctor may appear that he or she has little time to spend with us. At other times, we may feel “inadequate” in our knowledge and use of “medical terms,” feeling like we speak a different language than physicians.'); ?></p>
  <p><?php echo t('Older adults may especially loath to question physicians because they were raised in a generation where doctors were considered to be above reproach. Many of today’s generation of health care professionals encourage questions and want their patients to play a role in their health care.'); ?></p>
  <p><?php echo t('In planning for your discussions with your older parents and their physicians, remember that as their caregiver, you have an obligation to understand your parents’ medical care.'); ?></p>
  <p><?php echo t('Another important consideration for you as the caregiver to understand relates to patient privacy requirements and rights. If you are not the medical guardian (or power of attorney) for your parents, they must give consent for you to get information about their health care.'); ?></p>
  <p><?php echo t('On the other hand, if you are the medical guardian of your parents and they are either too young, too old or too sick to speak about their medical history themselves, it is perfectly reasonable for you to take that role with health care professionals. Remember to be especially diplomatic with older adults who may take offense at being “spoken for.” Try to work out who will be the chief medical historian and speaker before you enter the doctor’s office.'); ?></p>
  <p><?php echo t('The next exercise will coach you through learning to use “PowerPhrases” – short, specific expressions that get results by saying what it means and meaning what it says. By planning some specific phrases to use in advance of a doctor’s appointment, older adults find that they can impact the outcome of the interaction.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #7 -->

<div id="slide-7" class="slide">
  <h2 class="flowers"><?php echo t('Exercise – How are You with PowerPhrases?'); ?></h2>
  <hr />
  <p><?php echo t('How familiar does this sound? George has been waiting in the exam room for his physician to come in for over 50 minutes. He has counted the floor and ceiling tiles at least six times and needs to use the bathroom out in the hall, but is unwilling to get up with just the examining gown to cover him.'); ?></p>
  <p><?php echo t('When George’s physician entered, he seemed rush and distracted. He glanced at George’s file and talked rapidly throughout the brief exam. George has several questions that he wanted to discuss that were very personal. Because the physician seemed so rushed, George was not comfortable asking his questions.'); ?></p>
  <p><?php echo t('The physician told George that his blood pressure was high and he was going to give him a prescription for something (he didn’t say what!). The physician walked out. A few minutes later, a nurse walked in and handed George a prescription telling him that he may get dressed now. George figured that he would just have to ask his pharmacist the questions.'); ?></p>
  <p><?php echo t('Given the pressures of managed care, it is common for physicians to space appointments 15 minutes apart. The need for expediency can result in communication breakdowns that may result in inadequate care or serious consequences.'); ?></p>
  <p><?php echo t('A “PowerPhrase” is a short, specific expression that gets results by saying what it means and meaning what it says (without being mean!). By planning specific phrases to use prior to an appointment, the results can be much more favorable to the patient. Let’s do an exercise to see your current “PowerPhrase” skill level. '); ?></p>
  <p>button here</p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #8 -->

<div id="slide-8" class="slide">
  <h2 class="flowers"><?php echo t('Activity – Practicing PowerPhrases with Your Health Provider'); ?></h2>
  <hr />
  <p><?php echo t('Now that you have assessed your PowerPhrase skill level, we will now focus on PowerPhrases related to your health care provider to ensure a positive visit. By planning specific phrases to use in advance of the appointment, the patient can impact the outcome of the visit. You may find these helpful not only for your older parents, but also for your own use when visiting your doctor.'); ?></p>
  <p><?php echo t('Here is another typical scenario. You are visiting your mother one Sunday afternoon. You notice that she appears to be limping and favoring one side when she walks. You say, “Mom, I noticed you are limping. Are you having some difficulty walking?” She says, “Yes, my left shin is very painful. It’s been like this for about a week.” You ask to see her shin and you notice that there is redness and swelling. She tells you that she will be seeing her doctor this Thursday. You offer to accompany her, and she agrees.'); ?></p>
  <p><?php echo t('On Thursday, you take her to her appointment and accompany her to the exam room. Dr. Palmer enters and asks your mom how she is feeling. Your mom replies, “Fine, thank you.” Dr. Palmer reviews the laboratory results and says, “Your iron level is a bit low. I’ll give you a B12 injection and you’ll feel as good as new!” “Thank you, doctor,” replies your mom. With that the doctor exits to see his next patient.'); ?></p>
  <p><?php echo t('What just happened here? Unfortunately for many older adults, this is a typical office visit. Without some preplanning for the visit and selection of PowerPhrases, that potentially serious problems may go unaddressed.'); ?></p>
  <p><?php echo t('Think of PowerPhrases as the means to tell the doctor exactly what he or she needs to know. You or your older parent should not leave the visit until all your questions are answered.'); ?></p>
  <p>download button here</p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #9 -->

<div id="slide-9" class="slide">
  <h2 class="flowers"><?php echo t('Activity – Practicing PowerPhrases with Your Health Provider (continued'); ?></h2>
  <hr />
  <p><?php echo t('Here are some starter PowerPhrases to be used in response to the doctor’s opening question “How are you doing?”:'); ?></p>
  <ul>
    <li><?php echo t('“I have a pain in my…..that started about……”'); ?></li>
    <li><?php echo t('“My symptoms are….”'); ?></li>
  </ul>
  <p><?php echo t('With these simple prompts, the doctor can begin the exam with the understanding of “what brought you here today.” It is important that your older parent brings a list of pertinent information to readily provide the doctor with details that may be important. It is also an opportunity to learn more about potential issues that may arise, say from drug interactions. Some PowerPhrases include:'); ?></p>
  <p><?php echo t('“These are the medications I am currently taking…..” “These are the vitamins and herbs I take….Which of these may interact with my medications?” “What does this drug do?”'); ?></p>
  <p><?php echo t('At times, you or your older parent may feel rushed. It is essential that you or your older parent feels comfortable saying so to the doctor. This one may take practice! Some PowerPhrases are:'); ?></p>
  <ul>
    <li><?php echo t('“I am aware that you are busy. However, I am feeling rushed and I need to be sure that my questions are answered. Please give me the time I need.”'); ?></li>
    <li><?php echo t('“I’m not comfortable with how fast you are talking. I need you to slow down and help me understand.”'); ?></li>
    <li><?php echo t('“I understand that you are busy. However, I want to make sure you understand my symptoms and that I learn everything you can teach me about my condition and care.”'); ?></li>
  </ul>
  <p><?php echo t('For this activity, you will prepare for the doctor’s visit and practice PowerPhrases. You may want to practice with your older parent or you may role play with your spouse, relative, or friend.'); ?></p>
  <p><?php echo t('Self-Coaching Hint: Be assertive but not aggressive in communicating with your parent’s doctors. Most doctors and other health care professionals today want to ask questions and be asked about health care issues by their patients.'); ?></p>
  
  <p>download button here></p>
  
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

<!-- Lesson #4 - Understanding the Health Care System and Utilization by Older Adults --> 
<!-- slide #10 -->

<div id="slide-10" class="slide">
  <h2 class="flowers"><?php echo t('Learning What You Need to Know About the Health Care System'); ?></h2>
  <hr />
  <p><?php echo t('Learning What You Need to Know About the Health Care System'); ?></p>
  <p><?php echo t('Learning what you need to know about the health care system can seem a daunting task. We break down some of the core components that are key for you to understand as caregivers for older parents. This information is not meant to be comprehensive, but provides you a starting point to better understand the complexities that are today’s health care system.'); ?></p>
  <ul>
    <li><?php echo t('People (add hyperlink)'); ?></li>
    <li><?php echo t('Places (add hyperlink)'); ?></li>
    <li><?php echo t('Things and More Things (add hyperlink)'); ?></li>
  </ul>
  <p>download button here </p>
  <p class="buttons"> <a href="#" onclick="parent.jQuery.fancybox.close();"
				class="button left"> <?php echo t('Complete Lesson'); ?></a></p>
</div>

<!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System --> 
<!-- slide #1 -->

<div id="slide-1" class="slide">
  <h2 class="flowers"><?php echo t('Relocation and Transfers by Older Adults within the Health Care System - Topics'); ?></h2>
  <hr />
  <p><?php echo t('“I Think It’s Time We Sell the House.”'); ?><br />
  <p><?php echo t('In Section 2, we focused on a framework and experiences in communicating effectively with your older parents. Probably the one area that is most challenging to discuss with older parents deals with their ability to continue to live independently in their own home or apartment.'); ?></p>
  <p><?php echo t('CARE Coaching: Encouraging'); ?><br />
    <?php echo t('The fourth and final component of CARE Coaching is that of encouraging. The decision to move to a retirement community is often a difficult one for older adults and families alike. Changes in health or other factors typically drive this decision, but being proactive and understanding how to make educated choices is key.'); ?></p>
  <p><?php echo t('Activity – Relocating Scenarios'); ?><br />
    <?php echo t('How can I convince my older parents to move to a retirement community? Here are two scenarios for you to respond to.'); ?></p>
  <p><?php echo t('General Indicators When It May be Time to Consider Moving'); ?><br />
    <?php echo t('Although each situation is going to be very different, often medical conditions or mental awareness change warrant considering a move to a place where help with activities of daily living is available. In other cases, older adults may begin to find that tasks like cooking, housekeeping, shoveling snow, mowing the lawn, and taking care of home repairs have become a burden. Here are some general indicators to consider.'); ?></p>
  <p><?php echo t('Understanding the Options: From Staying at Home to Retirement Living'); ?><br />
    <?php echo t('Major life changes are seldom easy particularly when it comes to considering moving out of one’s home with all its memories. Our aging population and growing consumer expectations for choice and quality in care for older adults have sparked an increasing number of options for older adults and their families. We will look at some of those choices in this next section.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button right"
				onclick="$.fancybox.next();"><?php echo t('Start Course &raquo;'); ?> </a> </p>
</div>
                
  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #2 -->
  
  <div id="slide-2" class="slide">
  <h2 class="flowers"><?php echo t('Relocation and Transfers by Older Adults within the Health Care System - Topics (continued)'); ?></h2>
  <hr />
  <p><?php echo t('“Aging in Place” - Planning for the Future'); ?><br />
  <?php echo t('“Aging in place” is a term often used to describe an older adult’s ability to stay in one location over the course of one’s life even as their medical and personal needs change over time. That may refer to living in a senior living community that provides services and care across the aging continuum or it may refer to continuing to live in one’s home and have services and care brought in by outside health care agencies.'); ?></p>
  <p><?php echo t('What are Other Options for my Older Parents?'); ?><br />
  <?php echo t('Understanding all of one’s options is important in making a big decision such as relocating. The more preplanning that can occur as well as understanding all options is key. Let’s look at some additional options for older adults.'); ?></p>
  <p><?php echo t('Exercise – Visiting a Senior Living Community'); ?><br />
  <?php echo t('The best way to understand senior living communities is to actually visit one in your area. We have developed the following checklist that you may print and take with you on your visit. We recommend visiting a CCRC so that you may get an idea of the different levels of services and care that are available to residents.'); ?></p>
  <p><?php echo t('Long Distance Caregiving'); ?><br />
  <?php echo t('With many grown children seeking new career opportunities or needing to relocate due to their job away from their parents and the home in which they were raised, long distance caregiving has grown as an issue in our society. Here are some fast facts.'); ?></p>
  <p><?php echo t('Activity – CARE Coaching through Long Distance Caregiving') ?><br />
  <?php echo t('Read the following scenario and then respond to the CARE coaching questions. We provide some initial “openers” for CARE coaching questions for you to more fully develop your own questions.'); ?></p>
  
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
  </div>
  
  
  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #3 -->
  
  <div id="slide-3" class="slide">
    <h2 class="flowers"><?php echo t('“I Think It’s Time We Sell the House.”'); ?></h2>
    <hr />
    <p><?php echo t('In Section 2, we focused on a framework and experiences in communicating effectively with your older parents. Probably the one area that is most challenging to discuss with older parents deals with their ability to continue to live independently in their own home or apartment.'); ?></p>
    <p><?php echo t('In the “perfect world,” your parents call you one day and say, “Your father and I were talking today about how difficult it is for us to keep up the house. All the housework, lawn upkeep, snow shoveling. So we’ve decided to sell the house and move to that new retirement community in the next town.”'); ?></p>
    <p><?php echo t('Your response, “Whew! Thanks mom and dad for making this decision!”'); ?></p>
    <p><?php echo t('In reality, the discussion of potential relocation can be challenging – not just with your parents, but siblings and other relatives may have different viewpoints. Additionally, there are so many more choices in senior living options today even compared to ten years ago. We address some of those options in this section.'); ?></p>
    <p><?php echo t('Probably more important than the question, “Where will they live?” is the question, “How will they live?” For their quality of life to be enhanced, discussion questions must extend beyond health and safety issues (although these are important as well!). These are some of the types of questions to explore with your older parents:'); ?></p>
    <ul>
      <li><?php echo t('How do you want to live?'); ?></li>
      <li><?php echo t('What’s most important to you?'); ?></li>
      <li><?php echo t('What do you enjoy?'); ?></li>
      <li><?php echo t('What do you hope for?'); ?></li>
      <li><?php echo t('What gives you the greatest pleasure?'); ?></li>
      <li><?php echo t('What do you want more of in your lives?'); ?></li>
      <li><?php echo t('What gives meaning to your lives?'); ?></li>
      <li><?php echo t('What give you joy in your lives?'); ?></li>
    </ul>
    <p><?php echo t('Watch the following brief video to introduce yourself to senior living options.'); ?></p>
    
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
  </div>

  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System --> 
  <!-- slide #4 -->

  <div id="slide-4" class="slide">
  <h2 class="flowers"><?php echo t('Video – Learn about Senior Living'); ?></h2>
  <hr />
  <p>
      <iframe width="640" height="360" src="http://www.youtube.com/embed/qZctOf7pHlo?rel=0" frameborder="0" allowfullscreen></iframe>
    </p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
        
  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #5 -->
  
   <div id="slide-5" class="slide">
  <h2 class="flowers"><?php echo t('CARE Coaching: Encouraging'); ?></h2>
  <hr />
  <p><?php echo t('tThe fourth and final component of CARE Coaching is that of encouraging. The decision to move to a retirement community is often a difficult one for older adults and families alike. Changes in health or other factors typically drive this decision, but being proactive and understanding how to make educated choices is key.'); ?></p>
  <p><?php echo t('Encouraging our older parents can take many forms. Primarily, we want to encourage them to be as independent as possible for as long as possible. Sometimes an older person experiences changes in health or mental awareness that is very gradual and that is “under the radar” of their children or friends. Older persons may learn effective “cues” to help them remember important events or when to pay bills. It may be as simple as keeping a calendar or written lists of when the past visits occurred with their doctors. We should encourage those “cues” that are effective in promoting independence.'); ?></p>
  <p><?php echo t('Sometimes older adults may not realize the range of options open to them if living alone seems to be challenging in some respects. Encouraging may take the form of providing accurate information about possible options for living arrangements. It is not uncommon today for adult children to be making the first visit to a retirement community to gain a better understanding of what services, programs, and amenities are being offered prior to a visit by their older parents.'); ?></p>
  <p><?php echo t('When the decision to move is made by your parents, encouraging their transition is important. Some retirement communities now offer “short stays” for prospective residents. This may be a way to introduce your parents to the new environment, while still being able to return home before making the move permanent.'); ?></p>
  <p><?php echo t('Engaging your parents in the process of choosing what furniture, household items, and personal treasures to take to their new home is important. Encouraging them to “personalize” their new home will make the transition easier. There are services available (senior move managers) across the country that focus specifically on helping older adults “downsize” from large family homes to smaller spaces. They can do everything from coordinating the entire move, packing and unpacking the home, and arranging for sales, consignment, or donation of items that would not be part of the move. Learn more about senior move managers at the professional association’s website (www.nasmm.org).'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #6 -->
  
  <div id="slide-6" class="slide">
  <h2 class="flowers"><?php echo t('Activity – Relocating Scenarios'); ?></h2>
  <hr />
  <p><?php echo t('How can I convince my older parents to move to a retirement community? Here are two scenarios for you to respond to.'); ?></p>
  <p>button here for download</p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
  
  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #7 -->
  
  <div id="slide-7" class="slide">
  <h2 class="flowers"><?php echo t('General Indicators When It May be Time to Consider Moving'); ?></h2>
  <hr />
  <p><?php echo t('Although each situation is going to be very different, often medical conditions or mental awareness change warrant considering a move to a place where help with activities of daily living is available. In other cases, older adults may begin to find that tasks like cooking, housekeeping, shoveling snow, mowing the lawn, and taking care of home repairs have become a burden. Some general indicators to consider:'); ?></p>
  <p><?php echo t('Is your older parent experiencing significant weight loss? - Cooking for one can often be a chore especially for an older adult. When you eat alone, you eat less. Well-balanced meals can often be inconvenient to prepare.'); ?>
    <p><?php echo t('Does your older parent experience mood changes, depression, or isolation? - As we get older, we tend to isolate ourselves and depression may set in. Older adults do not always experience depression in the same ways as younger adults. Older adults tend to have physical symptoms with depression, and so depression is often difficult to diagnose. Many older adults (and their health providers unfortunately!) believe that depression is just part of getting older!'); ?></p>
  <p><?php echo t('Do you or your older parent have concerns about safety? - A two-story home can be difficult for many people with mobility problems particularly if the bedrooms, bathrooms, and laundry are on the second floor. On average, about one-third of all older adults have a fall each year most often in their own home.'); ?></p>
  <p><?php echo t('Do you or your older parent have concerns about security issues? - Unfortunately, criminals prey on older adults. It is not uncommon to hear about cases where older adults are taken advantage of in their home by unscrupulous vendors or even prey to home invaders who may harm the older adult in addition to robbing the home.'); ?></p>
  <p><?php echo t('Does your older parent need help with daily tasks? - Many retirement communities offer assisted living for residents to “age in place.” Personalized plans of care are designed to help with dressing, grooming, bathing, and medications.'); ?></p>
  <p><?php echo t('One last question to consider is, “Will moving be any easier next spring, next year, five or even ten years down the road?” In just about every case, the answer is “no.”'); ?></p>
  
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
  
  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #8 -->
  
  <div id="slide-8" class="slide">
  <h2 class="flowers"><?php echo t('Understanding the Options: From Staying at Home to Retirement Living'); ?></h2>
  <hr />
  <p><?php echo t('Major life changes are seldom easy particularly when it comes to considering moving out of one’s home with all its memories. In past years, older parents had two options – either struggle to stay in one’s home, often one spouse caring for the other, or else resort to expensive (and frequently inadequate) nursing home care. The stress on the caregiving spouse can also have negative effects on his or her health and well-being.'); ?></p>
  <p><?php echo t('Our aging population and growing consumer expectations for choice and quality in care for older adults have sparked an increasing number of options for older adults and their families. We will look at some of those choices in this next section.'); ?></p>
  <p><?php echo t('Retirement living has many names and faces. The “industry” typically refers to “retirement living” as “senior living.” Retirement communities are referred to as “senior living communities.” There is basically three levels of care in senior living:'); ?></p>
  <ul>
      <li><?php echo t('Independent Living'); ?></li>
      <li><?php echo t('Assisted Living'); ?></li>
      <li><?php echo t('Long-Term Care/Nursing Homes'); ?></li>
    </ul>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
  
  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #9 -->
  
  <div id="slide-9" class="slide">
  <h2 class="flowers"><?php echo t('Understanding the Options: From Staying at Home to Retirement Living (continued)'); ?></h2>
  <hr />
  <p><?php echo t('Independent living communities provide services, programs, and amenities to older adults who are able to function relatively independently in their homes. Services and programs often focus on supporting independence and wellness among residents. Independent living communities generally consists of homes, condominiums, town houses, apartments, and/or mobile and motor homes where residents maintain an independent lifestyle. Some communities offer only minimal services such as building and grounds maintenance, and security. The residential units may be rented on a monthly basis or owned as condominiums or cooperatives. Basically they are no different from other residential enclaves except that there is an age restriction (over 55) or an age target. Depending on the community, residents are often able to bring in home care services or personal assistants for periods of time after an illness episode or hospitalization to aid in recuperation.'); ?></p>
  <p><?php echo t('Assisted living communities provide care for seniors who need some help with activities of daily living yet wish to remain as independent as possible. A middle ground between independent living and nursing homes, assisted living communities aim to foster as much autonomy as the resident is capable of. Most communities offer 24-hour supervision and an array of support services, with more privacy, space, and dignity than many nursing homes at lower costs.'); ?></p>
  <p><?php echo t('There are approximately 33,000 assisted living communities operating in the U.S. today. The number of residents living in a facility can range from several to 300, with the most common size being between 25 and 120 residents. Assisted living staff helps residents with daily personal care including bathing, dressing, eating, grooming, and getting around. Medical care is limited, but families may contract for some medical needs such as medication administration or home health care. Assisted living communities focus on what is termed a “social model” of care (e.g., promoting social engagement and supporting individual care needs).'); ?></p>
  <p><?php echo t('To understand more about assisted living – levels of care, caring for loved ones with dementia, how to pay for one, and how to evaluate one – search the Web and download the “ Gilbert Buide - Assisted Living Evaluation and Moving Kit.”'); ?></p>
  <p><?php echo t('Watch the following brief video to learn more about assisted living.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
  
  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #10 -->
  
  <div id="slide-10" class="slide">
  <h2 class="flowers"><?php echo t('Video – Learn about Assisted Living'); ?></h2>
  <hr />
  <p>
      <iframe width="480" height="360" src="http://www.youtube.com/embed/1h0CtiAybLc?rel=0" frameborder="0" allowfullscreen></iframe>
    </p>
  <p><?php echo t('Long-term care communities, or nursing homes, may be independent or part of a senior continuing care community, providing medical and nursing care. Residents may be there temporarily for a period of rehabilitation, or may be there for long-term care. State regulations define the services that nursing homes may provide. Registered Nurses who help provide 24-hour care to people who can no longer care for themselves due to physical, emotional, or mental conditions. A physician supervises each resident’s care and a nurse or other medical professional is almost always on the premises. Most nursing homes have two basic types of services: skilled medical care and custodial care. Nursing homes offer an array of services, in addition to the basic skilled nursing care and the custodial care. They provide a room, all meals, some social activities, personal care, 24-hour nursing supervision and access to medical services when needed.'); ?></p>
  <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>

  <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #11 -->
  
    <div id="slide-11" class="slide">
  <h2 class="flowers"><?php echo t('“Aging in Place” - Planning for the Future'); ?></h2>
  <hr />
  
  
  
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
  
    <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #12 -->
  
    <div id="slide-12" class="slide">
  <h2 class="flowers"><?php echo t('Video – Learn about Assisted Living'); ?></h2>
  <hr />
  
  
  
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
  
    <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #13 -->
  
    <div id="slide-13" class="slide">
  <h2 class="flowers"><?php echo t('Video – Learn about Assisted Living'); ?></h2>
  <hr />
  
  
  
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
  
    <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #14 -->
  
    <div id="slide-14" class="slide">
  <h2 class="flowers"><?php echo t('Video – Learn about Assisted Living'); ?></h2>
  <hr />
  
  
  
  
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>
  
    <!-- Lesson #5 - Relocation and Transfers by Older Adults within the Health Care System -->
  <!-- slide #15 -->
 
    <div id="slide-15" class="slide">
  <h2 class="flowers"><?php echo t('Video – Learn about Assisted Living'); ?></h2>
  <hr />
  
  
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?></a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a></p>
</div>


  
  <!-- need these last two divs, one is to close the tutorial id -->
</div>
</div>
