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
  <h3> <a href="<?php echo $this->createUrl($course->name); ?>" title="<?php echo t($course->title); ?>"> <?php echo t($course->title); ?> </a> </h3>
  <p><?php echo t($course->description); ?></p>
  <h4><?php echo t('Objectives'); ?></h4>
  <ul>
    <?php 
  foreach($course->objectives as $objective)
  	echo '<li>' . t($objective->text) . '</li>';
  ?>
  </ul>
  <?php endforeach; ?>
  <br />
  <br />
  <h2 class="flowers"> <?php echo t('Online Education'); ?> </h2>
  <hr />
  <img src="<?php echo $this->getImagesUrl('image-nurse.png'); ?>"
		class="image-right" />
  <h3> <a href="http://mather.connectedlearning.net/home/" target="_blank"><?php echo t('Gerontology Online program'); ?> </a> </h3>
  <p> <?php echo t('Gerontology Online is a web-based continuing education program designed for health care professionals who wish to enhance their knowledge and skills in the field of aging. This program will provide employees with valuable information about gerontology, helping them to stay abreast of the latest research and practices and it is also an excellent resource for new hires, providing them with a solid foundation while saving employers time and money by reducing training hours and ensuring employees have a basic skill set upon hiring.'); ?></p>
  <p><?php echo t('This program is offered by Mather LifeWays Institute on Aging in collaboration with Rush University College of Nursing. Development was partially supported by funding from the Bureau of Health Professionals division of the Department of Health and Human Services.'); ?> </p>
  <h4> <?php echo t('Objectives'); ?> </h4>
  <ul>
    <li><?php echo t('Explore the latest in aging research'); ?></li>
    <li><?php echo t('Explore the latest educational methods'); ?></li>
    <li><?php echo t('Explore and current publications'); ?></li>
    <li><?php echo t('Explore best practices that can be integrated into practice and/or teaching'); ?></li>
    <li><?php echo t('Self-paced certificate program (6 unique, online courses) completed within one-year'); ?></li>
  </ul>
  <br />
  <br />
  <h2 class="flowers"> <?php echo t('Online Workforce Surveys & Toolkits'); ?> </h2>
  <hr />
  <h3> <a href="http://matherlifewaysinstituteonaging.com/products"> <?php echo t('Aging in the Workplace Survey'); ?> </a></h3>
  <p><?php echo t('The Aging in the Workplace toolkits and survey are designed to provide employers with strategic aging-related workforce management information. With a large percent of the 78 million boomers planning to remain in the workforce past traditional retirement age, organizations in the nonprofit, private, and public sectors will need tools and resources to make the best use of their knowledge and skills in order to increase organizational effectiveness and business performance.'); ?></p>
  <p><?php echo t('The survey covers two primary areas of focus related to age and the workplace: Retirement and The Impact of Caregiving on Work, in addition to measuring job satisfaction in the workforce.'); ?></p>
  <p><?php echo t('Employers who are well versed in matters related to aging in the workplace are better positioned to:'); ?></p>
  <ul>
    <li><?php echo t('Assess the retirement planning activities of their workforce and manage transitions due to potential labor shortages'); ?></li>
    <li><?php echo t('Support working caregivers, thereby limiting unplanned absenteeism and increasing productivity'); ?></li>
  </ul>
  <h4><?php echo t('Survey components include:'); ?></h4>
  <ul>
    <li><b><?php echo t('Retirement'); ?></b><?php echo t(': Examines employees’ knowledge of retirement policies, retirement plans, and their willingness to work beyond the typical retirement age.'); ?></li>
    <li><b><?php echo t('The Impact of Caregiving on Work'); ?></b><?php echo t(': Provides employers with an estimate of the prevalence of unpaid caregiving performed by their employees and its impact on absenteeism.'); ?> </li>
  </ul>
  <hr />
  <h3> <a href="http://matherlifewaysinstituteonaging.com/products"><?php echo t('Aging in the Workplace Toolkits'); ?> </a></h3>
  <p><?php echo t('The Aging in the Workplace toolkits and survey are designed to provide employers with strategic aging-related workforce management information. With a large percent of the 78 million boomers planning to remain in the workforce past traditional retirement age, organizations in the nonprofit, private, and public sectors will need tools and resources to make the best use of their knowledge and skills in order to increase organizational effectiveness and business performance.'); ?></p>
  <p><?php echo t('The toolkit provides valuable information and resources for human resource professionals, managers, and employed caregivers.'); ?></p>
  <h4><?php echo t('Toolkit Includes:'); ?></h4>
  <ul>
    <li><?php echo t('Tools to diagnose the prevalence of caregiving in your workplace'); ?></li>
    <li><?php echo t('Team activities to support the development of a caregiver-friendly workplace'); ?></li>
    <li><?php echo t('A list of organizational best practices in elder care policies and employee benefits'); ?></li>
    <li><?php echo t('Case studies'); ?></li>
    <li><?php echo t('Information and resources for employed caregivers'); ?></li>
    <li><?php echo t('Aging in the Workplace Survey*'); ?> </li>
  </ul>
  <hr />
  <h3><a href="http://matherlifewaysinstituteonaging.com/products"> <?php echo t('Making Sense of Memory Loss Class Leader Toolkit'); ?> </a> </h3>
  <p><?php echo t('Making Sense of Memory Loss is a five-part training program for professionals interested in educating families and staff about caring for persons with memory loss in regards to its causes and treatments, as well as effective ways of coping now and in the future. In light of the growing trend toward earlier diagnosis of Alzheimer\'s Disease and related dementias, Making Sense of Memory Loss is for anyone who cares for someone in the early stages of memory loss, whether or not that the person has received a diagnosis.'); ?></p>
  <p><?php echo t('Developed by the Alzheimer’s Association—Greater Illinois Chapter and Mather LifeWays Institute on Aging, this evidence-based training program covers these topics:'); ?></p>
  <ul>
    <li><?php echo t('Memory loss and related symptoms'); ?></li>
    <li><?php echo t('Improving communication'); ?></li>
    <li><?php echo t('Making decisions'); ?></li>
    <li><?php echo t('Planning for the future'); ?></li>
    <li><?php echo t('Coping and caring strategies'); ?></li>
  </ul>
</div>
