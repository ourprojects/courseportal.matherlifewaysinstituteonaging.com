<?php
$this->breadcrumbs = array('{t}Profile{/t}');
$this->widget(
    'ext.fancybox.EFancyBox',
    array(
        'id' => 'a[id^="survey_link_"]',
        'config' => array(
            'width' => '95%',
            'height' => '95%',
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

<div id="single-column">
    <p>{t}Please complete your profile. This information helps us track your participation and helps us compile
        important geographical data, so we have better information when updating course content.{/t}</p>
    <br/>


        <?php echo $this->renderPartial('forms/profile_form', array('CPUser' => $CPUser, 'Avatar' => $Avatar)); ?>
   
    <div class="box-white">
        <p>{t}Your agreements{/t}</p>
        <br/>
        <?php
        $agreements = Yii::app()->getUser()->getModel()->agreements;
        if (empty($agreements)):
            echo '{t}None{/t}';
        else:
            ?>
            <ul>
                <?php foreach ($agreements as $agreement): ?>
                    <li>
                        <a href="<?php echo $this->createUrl('/agreement/' . $agreement->id) ?>"
                           target='_blank'><?php echo t($agreement->name); ?> </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>


<ul id="surveys">
<?php
    foreach (array(
                   'profile',
                   'precourse',
                   'postcourse') as $surveyName) {
        $survey = $this->createWidget(
                                      'surveyor.widgets.Survey',
                                      array(
                                            'id' => $surveyName,
                                            'options' => array(
                                                               'htmlOptions' => array('style' => 'display:none;'),
                                                               'title' => array('htmlOptions' => array('class' => 'flowers'))
                                                               )
                                            )
                                      );
        $survey->model->user_id = $CPUser->id;
        ?>

<li>
<a id="survey_link_<?php echo $survey->getId(); ?>" class="button" href="#survey_<?php echo $survey->getId(); ?>"
title="<?php echo t($survey->model->title); ?>"><?php echo t($survey->model->title); ?> </a>
<?php $survey->run(); ?>
</li>
<?php
    }
    ?>
</ul>

</div>
