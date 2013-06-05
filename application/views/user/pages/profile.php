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
  <h1 class="bottom">{t}Profile &amp; Surveys{/t}</h1>
</div>

<!-- Start sidebar here -->

<div id="sidebar"> 
  
  <!-- sidebar #1 here -->
  
  <div class="box-sidebar one">
    <h3>{t}Surveys{/t}</h3>
    <br />
    <p> {t}Our surveys are designed to help us obtain information that help with decision-making. Our goal is to help better educate our participants by creating a client touch-point, a feedback system, and means to better understanding the shifting needs of the field.{/t}</p>
    <hr />
    <ul id="surveys">
      <?php 
  	foreach($surveys as $survey): ?>
      <li> <a id="survey_link_<?php echo $survey->getId(); ?>" href="#survey_<?php echo $survey->getId(); ?>" title="<?php echo t($survey->model->title); ?>"><?php echo t($survey->model->title); ?></a>
        <?php $survey->run(); ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <br />
  </div>
  
  <!-- sidebar #2 here -->
  <div class="box-sidebar one">
    <h3>{t}Metadata{/t}</h3>
    <p>{t}Metadata - Metadata is data about data. Metadata describes how and when and by whom a particular set of data was collected, and how the data is formatted. Metadata is essential for understanding information stored in our database and has become increasingly important in our XML-based Web applications.{/t}</p>
    <p>{t}Metadata (metacontent describing the details we collect) are defined as the data providing information about one or more aspects of the data, such as:{/t}</p>
    <ul>
      <li>{t}* Means of creation of the data{/t}</li>
      <li>{t}* Purpose of the data{/t}</li>
      <li>{t}* Time and date of creation{/t}</li>
      <li>{t}* Creator or author of the data{/t}</li>
      <li>{t}* Location on a computer network where the data were created{/t}</li>
      <li>{t}* Standards used{/t}</li>
    </ul>
    <p>{t}The information you provide us, via your profile, is used for research purposes only. We do not sell, distribute, or use your information for any other purpose than helping make these online courses better.{/t}</p>
  </div>
  <!-- sidebar #3 here --> 
  
</div>
<div class="column-wide">
  <h2 class="flowers">{t}Profile{/t}</h2>
  <p>{t}Please complete your profile. This information helps us track your participation and helps us compile important geographical data, so we have better information when updating course content.{/t}</p>
  <br />
  <div class="box-white">
	<?php echo $this->renderPartial('forms/profile_form', $models); ?>
  </div>
  <div class="box-white">
  	<p>{t}Your agreements{/t}</p>
  	<br />
  	<?php 
  	$agreements = Yii::app()->getUser()->getModel()->agreements;
  	if(empty($agreements)): 
  		echo t('None');
  	else:?>
  	<ul>
  		<?php foreach($agreements as $agreement): ?>
  		<li>
  			<a href="<?php echo $this->createUrl('/agreement/' . $agreement->id) ?>" target='_blank'><?php echo t($agreement->name); ?></a>
  		</li>
  		<?php endforeach; ?>
  	</ul>
  	<?php
	endif; 
	?>
  </div>
</div>
