<?php
$this->breadcrumbs = array(t('Profile & Surveys')); 
$this->widget(
		'ext.fancybox.EFancyBox',
		array(
				'id' => 'a[id^="survey_link_"]',
				'config' => array(
						'width' => '80%',
						'height' => '70%',
						'arrows' => false,
						'autoSize' => false,
						'mouseWheel' => false,
				)
		)
);
?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
  <h1 class="bottom"><?php echo t('Profile &amp; Surveys'); ?></h1>
</div>

<!-- Start sidebar here -->

<div id="sidebar"> 
  
  <!-- sidebar #1 here -->
  
  <div class="box-sidebar one">
    <h3><?php echo t('Surveys'); ?></h3>
    <br />
    <p> <img style="float:right; margin:15px;" width="48" height="57" src="<?php echo $this->getImagesUrl('survey_icon2.png'); ?>" alt="" /> <?php echo t('Our surveys are designed to help us obtain information that help with decision-making. Our goal is to help better educate our participants by creating a client touch-point, a feedback system, and means to better understanding the shifting needs of the field.'); ?></p>
    <hr />
    <ul>
      <?php 
  	foreach($surveys as $survey): ?>
      <li> <a id="survey_link_<?php echo $survey->getId(); ?>" href="#survey_<?php echo $survey->getId(); ?>" title="<?php echo $survey->model->title; ?>"><?php echo $survey->model->title; ?></a>
        <?php $survey->run(); ?>
      </li>
      <br />
      <?php endforeach; ?>
    </ul>
    <br />
  </div>
  
  <!-- sidebar #2 here -->
  <div class="box-sidebar one">
    <h3><?php echo t('Collection of Metadata'); ?></h3>
    <p><?php echo t('Metadata - Metadata is data about data. Metadata describes how and when and by whom a particular set of data was collected, and how the data is formatted. Metadata is essential for understanding information stored in our database and has become increasingly important in our XML-based Web applications.'); ?></p>
    <p><?php echo t('Metadata (metacontent describing the details we collect) are defined as the data providing information about one or more aspects of the data, such as:'); ?></p>
    <ul>
      <li><?php echo t('* Means of creation of the data'); ?></li>
      <li><?php echo t('* Purpose of the data'); ?></li>
      <li><?php echo t('* Time and date of creation'); ?></li>
      <li><?php echo t('* Creator or author of the data'); ?></li>
      <li><?php echo t('* Location on a computer network where the data were created'); ?></li>
      <li><?php echo t('* Standards used'); ?></li>
    </ul>
    <p><?php echo t('The information you provide us, via your profile, is used for research purposes only. We do not sell, distribute, or use your information for any other purpose than helping make these online courses better.'); ?></p>
  </div>
  <!-- sidebar #3 here --> 
  
</div>
<div class="column-wide">
  <h2 class="flowers"><?php echo t('Profile'); ?></h2>
  <p><?php echo t('Please complete your profile. This information helps us track your participation and helps us compile important geographical data, so we have better information when updating course content.'); ?></p>
  <br />
  <div class="box-white">
	<?php echo $this->renderPartial('forms/profile_form', $models); ?>
  </div>
  <div class="box-white">
  	<p><?php echo t('Your agreements');?></p>
  	<br />
  	<?php 
  	$agreements = Yii::app()->getUser()->getModel()->agreements;
  	if(empty($agreements))
  	{
  		echo t('None');
  	}
  	else 
	{
	  	foreach($agreements as $agreement)
	  		echo CHtml::link(t($agreement->name), $this->createUrl('/agreement/' . $agreement->id), array('target' => '_blank'));
	}
  	?>
  </div>
</div>
