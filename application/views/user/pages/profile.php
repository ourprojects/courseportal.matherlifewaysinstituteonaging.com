<?php
$this->breadcrumbs = array('{t}Profile{/t}');
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
  <h1 class="bottom">{t}Profile{/t}</h1>
</div>
<div id="sidebar">
  <div class="box-sidebar one">
    <h3>{t}Optional Surveys{/t}</h3>
    <p> {t}Our goal is to help better educate our participants by creating a feedback system and means to better understanding the shifting needs of the field.{/t} </p>
    <ul id="surveys">
      <?php foreach($surveys as $survey): ?>
      <li> <a id="survey_link_<?php echo $survey->getId(); ?>" href="#survey_<?php echo $survey->getId(); ?>" title="<?php echo t($survey->model->title); ?>"><?php echo t($survey->model->title); ?></a>
        <?php $survey->run(); ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="box-sidebar two">
    <h3>Mather LifeWays Institute on Aging</h3>
    <p class="text-center bold"> <a href="http://www.matherlifewaysinstituteonaging.com/family-caregivers/" target="_blank">{t}Family Caregivers{/t}</a> </p>
    <p>{t}More than 40 million Americans provide care for relatives or friends with a chronic illness such as dementia, stroke, or Parkinson&rsquo;s disease. This takes an enormous physical and emotional toll on caregivers.{/t}</p>
    <p>{t}Mather LifeWays Institute on Aging provides tools and online courses to support caregivers through education, advice, and valuable insights. Preparation and self-care can lighten the load and elevate the experience of caring for a loved one, increasing the quality of life for all parties involved.{/t}</p>
    <img style="margin: 0px; padding:0px; -webkit-border-bottom-right-radius: 5px;
-webkit-border-bottom-left-radius: 5px;
border-bottom-right-radius: 5px;
border-bottom-left-radius: 5px;" src="<?php echo $this->getImagesUrl('148950191.png'); ?>" alt="Image"> </div>
</div>
<div class="column-wide">
  <h2 class="flowers">{t}Profile{/t}</h2>
  <p> {t}Please complete your profile. This information helps us track your participation and helps us compile important geographical data, so we have better information when updating course content.{/t} </p>
  <br />
  <div class="box-white"> <?php echo $this->renderPartial('forms/profile_form', $models); ?> </div>
  <div class="box-white">
    <p>{t}Your agreements{/t}</p>
    <br />
    <?php
		$agreements = Yii::app()->getUser()->getModel()->agreements;
		if(empty($agreements)):
			echo t('None');
		else:
		?>
    <ul>
      <?php foreach($agreements as $agreement): ?>
      <li> <a href="<?php echo $this->createUrl('/agreement/' . $agreement->id) ?>" target='_blank'><?php echo t($agreement->name); ?></a> </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
</div>
