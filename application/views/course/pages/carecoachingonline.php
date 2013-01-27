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
    <li>
		<a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"><?php echo t('Care Coaching'); ?></a>
		<a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
		<a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
		<a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
		<a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
		<a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
        <a href="#slide-7" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-8" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-9" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-10" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-11" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-12" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-13" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-14" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
    </li>
    <li><a href="#slide-1" data-fancybox-group="open-tutorial" class="teal open-tutorial"><?php echo t('Understanding Needs and Preferences of Older Adults'); ?></a>
		<a href="#slide-2" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
		<a href="#slide-3" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
		<a href="#slide-4" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
		<a href="#slide-5" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
		<a href="#slide-6" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
        <a href="#slide-7" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-8" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-9" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-10" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-11" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-12" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-13" data-fancybox-group="open-tutorial" class="hide open-tutorial" /> 
        <a href="#slide-14" data-fancybox-group="open-tutorial" class="hide open-tutorial" />
    
    </li>
    
    
    <li><a href="#"><?php echo t('Managing Health Information and Record Keeping'); ?></a></li>
    <li><a href="#"><?php echo t('Understanding the Health Care System and Utilization by Older Adults'); ?></a></li>
    <li><a href="#"><?php echo t('Relocation and Transfers by Older Adults within the Health Care System'); ?></a></li>
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
      <h2 class="flowers"><?php echo t('Understanding Needs and Preferences of Older Adults'); ?></h2>
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
      <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
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
    <p><?php echo t('Caregiving commonly brings up feelings of burden, confusion, and guilt for caregivers. As a first step, using some key communication skills can relieve some of these concerns. Where do these feelings stem from? Burden refers to emotional response to changes and demands that occur as caregivers give help and support to the older person.'); ?></p>
    <p><?php echo t('We have developed a Caregiver Burden Assessment to help you identify aspects of your life that may or may not be impacted by caregiving at this time. Click on the following to access the tool.'); ?></p>
    <p><?php echo t('Confusion about the healthcare system and utilization of those services by older adults is a universal experience for caregivers. Later in this course, we will address important ways for you to better understand the key roles and responsibilities of care providers as well as where concise, accurate information may be found to also share with your older parents.'); ?></p>
    <p><?php echo t('Guilt is often an ongoing feeling for many caregivers. Sometimes caregivers get so focused on their frail, older parent that they feel guilty focusing on someone else – including themselves. Empower Online addresses these issues for caregivers and provides tools focused on self-care of the caregiver.'); ?></p>
    <p><?php echo t('As a first step to better communication with your older parents about their needs and preferences, it is important that you have a clear understanding of what you may know and do not know about these needs and preferences. The next exercise will help you determine your level of knowledge as well as your own feelings about your parents’ future planning.'); ?></p>
    <p class="buttons"> <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;<?php echo t('Back'); ?> </a> <a href="javascript:;" class="button right" onclick="$.fancybox.next();"><?php echo t('Next'); ?>&nbsp;&raquo; </a> </p>
  </div>
    
         <!-- need these last two divs, one is to close the tutorial id -->
	</div>
</div>
