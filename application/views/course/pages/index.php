<?php $this->breadcrumbs = array(t('Courses')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-courses.png'); ?>);">
  <h1 class="bottom"> <?php echo t('Courses, Surveys, &amp; Toolkits'); ?> </h1>
</div>
<div id="single-column">
  <h2 class="flowers"> <?php echo t('Online Workforce Support'); ?> </h2>
  <p> <?php echo t('To help individual caregivers transition into their new role, be better prepared to 
				manage their loved one\'s needs, and learn how to effectively practice self-care, Mather LifeWays Institute on Aging has developed
	online programs that are designed to educate caregivers while fitting into any schedule.'); ?> </p>
  
  <hr />
  <?php foreach($courses as $course): 
  
  	// The following 2 if statements are a BAD HACK!!! Need to find a better way here.
  	if($course->name === 'introtocaregivingonline')
		echo CHtml::image($this->getImagesUrl('image-hands.png'), t('hands'), array('class' => 'image-right'));
  	elseif($course->name === 'carecoachingonline')
  		echo CHtml::image($this->getImagesUrl('image-grocery.png'), t('groceries'), array('class' => 'image-right'));
  ?>
  <h3>
  	<a href="<?php echo $this->createUrl($course->name); ?>" title="<?php echo t($course->title); ?>">
  		<?php echo t($course->title); ?>
  	</a>
  </h3>
  <p><?php echo t($course->description); ?></p>
  <h4><?php echo t('Objectives'); ?></h4>
  <ul>
  <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  <hr />
  <?php endforeach; ?>
<br /><br />


  <h2 class="flowers"> <?php echo t('Online Education'); ?> </h2>
  <hr />
  <img src="<?php echo $this->getImagesUrl('image-nurse.png'); ?>"
		class="image-right" />
  <h3> <a href="http://mather.connectedlearning.net/home/" target="_blank"><?php echo t('Gerontology Online program'); ?> </a> </h3>
  <p> <?php echo t('Gerontology Online is a web-based continuing education program designed for health care professionals who wish to enhance their knowledge and skills in the field of aging. This program will provide employees with valuable information about gerontology, helping them to stay abreast of the latest research and practices and it is also an excellent resource for new hires, providing them with a solid foundation while saving employers time and money by reducing training hours and ensuring employees have a basic skill set upon hiring.'); ?></p>
  
  <p><?php echo t('This program is offered by Mather LifeWays Institute on Aging in collaboration with Rush University College of Nursing. Development was partially supported by funding from the Bureau of Health Professionals division of the Department of Health and Human Services.'); ?> </p>
  <p> <?php echo t('Objectives'); ?> </p>
  <ul>
    <li><?php echo t('Explore the latest in aging research'); ?></li>
    <li><?php echo t('Explore the latest educational methods'); ?></li>
    <li><?php echo t('Explore and current publications'); ?></li>
    <li><?php echo t('Explore best practices that can be integrated into practice and/or teaching'); ?></li>
    <li><?php echo t('Self-paced certificate program (6 unique, online courses) completed within one-year'); ?></li>
  </ul>
  <hr />
  <h3> <a href="<?php echo $this->createUrl('#'); ?>"> <?php echo t('Spencer Powell Brain Fitness Program '); ?> </a><?php echo t(' - Coming Summer 2013'); ?> </h3>
  <p> <?php echo t('The Spencer Powell Brain Fitness Program is designed to promote cognitive health and healthy lifestyle changes.  The course provides information on how lifestyle factors such as physical activity and cognitive engagement affect your brain and your risk for dementia. Practical strategies are suggested for maintaining memory over time. In addition, the course includes memory training such as chunking, the story method, and mnemonic techniques.'); ?> </p>
  <p> <?php echo t('Objectives'); ?> </p>
  <ul>
    <li><?php echo t('Increase participants’ knowledge of “brain healthy” behaviors.'); ?></li>
    <li><?php echo t('Improve self-rated memory and mindfulness/attention'); ?></li>
    <li><?php echo t('Increase participants’ knowledge of memory techniques useful in everyday tasks and activities.'); ?></li>
  </ul>
<br /><br />
  <h2 class="flowers"> <?php echo t('Online Workforce Surveys'); ?> </h2>
  <hr />
    <h3> <a href="<?php echo $this->createUrl('#'); ?>"> <?php echo t('Aging in the Workplace '); ?> </a><?php echo t(' - Coming Summer 2013'); ?> </h3>
    <p><?php echo t('The Aging in the Workplace toolkits and survey are designed to provide employers with strategic aging-related workforce management information. With a large percent of the 78 million boomers planning to remain in the workforce past traditional retirement age, organizations in the nonprofit, private, and public sectors will need tools and resources to make the best use of their knowledge and skills in order to increase organizational effectiveness and business performance.'); ?></p>
    
    
    <br /><br />
    <h2 class="flowers"> <?php echo t('Toolkits'); ?> </h2>
  
    <hr />
    <h3> <a href="<?php echo $this->createUrl('#'); ?>"> <?php echo t('Aging in the Workplace '); ?> </a><?php echo t(' - Coming Summer 2013'); ?> </h3>
    <p><?php echo t('The Aging in the Workplace toolkits and survey are designed to provide employers with strategic aging-related workforce management information. With a large percent of the 78 million boomers planning to remain in the workforce past traditional retirement age, organizations in the nonprofit, private, and public sectors will need tools and resources to make the best use of their knowledge and skills in order to increase organizational effectiveness and business performance.'); ?></p>
    <p><?php echo t('The toolkit provides valuable information and resources for human resource professionals, managers, and employed caregivers.'); ?></p>
    <p><?php echo t('Toolkit Includes:'); ?></p>
    <ul>
    <li><?php echo t('Tools to diagnose the prevalence of caregiving in your workplace'); ?></li>
    <li><?php echo t('Team activities to support the development of a caregiver-friendly workplace'); ?></li>
    <li><?php echo t('A list of organizational best practices in elder care policies and employee benefits'); ?></li>
    <li><?php echo t('Case studies'); ?></li>
    <li><?php echo t('Information and resources for employed caregivers'); ?></li>
    <li><?php echo t('Aging in the Workplace Survey*'); ?> </li>
  </ul>
</div>
