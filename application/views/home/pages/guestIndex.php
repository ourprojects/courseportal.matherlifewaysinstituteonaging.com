<?php

$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('homeGuest.css'));
$clientScript->registerScriptFile($this->getScriptsUrl('jquery.cycle.all.js'), CClientScript::POS_HEAD);
$clientScript->registerScript('customers_cycle', "$('#customers').cycle();");

$fancyBoxConfig = array(
    'width' => '720px',
    'height' => '720px',
    'arrows' => false,
    'autoSize' => false,
    'mouseWheel' => false,
);

 $this->widget(
    'ext.fancybox.EFancyBox',
    array(
        'id' => 'a[id^="survey_link_"]',
        'config' => $fancyBoxConfig
    )
);

?>

<div id="home-image">
    <!-- <h1>{t}Web-based Training for Caregivers{/t}</h1> -->
</div>

<div id="sidebar">
    <div class="box-sidebar zero">
        <a href="<?php echo $this->createUrl('user/register'); ?>">{t}Register{/t} </a>
        <a href="<?php echo $this->createUrl('user/login'); ?>" class="teal">{t}Login{/t} </a>
        <a href="<?php echo $this->createUrl('home/contact'); ?>" class="teal">{t}Contact Us{/t} </a>
    </div>
    <div class="box-sidebar one">
        <h3>{t}Our Clients{/t}</h3>

        <div id="customers">
            <a href="http://www.ibm.com" target="_blank"><img
                    src="<?php echo $this->getImagesUrl('customers/ibm.png'); ?>" alt="IBM"/> </a> <a
                href="http://www.merck.com" target="_blank"><img
                    src="<?php echo $this->getImagesUrl('customers/merck.png'); ?>" alt="Merck Pharmaceuticals"/> </a>
            <a href="http://www.exxonmobil.com" target="_blank"><img
                    src="<?php echo $this->getImagesUrl('customers/exxon.png'); ?>" alt="Exxon"/> </a> <a
                href="http://matherlifeways.com/" target="_blank"><img
                    src="<?php echo $this->getImagesUrl('customers/mather.png'); ?>" alt="Mather Lifeways"/> </a>
        </div>
    </div>

    <div class="box-sidebar one">
        <h3>{t}Approved Courses{/t}</h3>
        <p style="font-weight: bold;">{t}EACC has approved certain courses for PDH credit.{/t}</p>
        <p style="text-align: center;"><b><a href="http://www.eapassn.org/files/public/EACCroster2012.pdf"
                                             target="_blank">{t}Employee Assistance Certification Commission
                    (EACC){/t}</a></b></p>
        <p>{t}Established in 1986, the EACC is the credentialing governance body responsible for upholding all
            professional standards, policies, and procedures concerning the Certified Employee Assistance Professional
            (CEAP) credential.{/t}</p>
        <p><a href="http://www.eapassn.org/" target="_blank"><img class="block center"
                                                                  src="<?php echo $this->getImagesUrl('EAPlogo.png'); ?>"
                                                                  alt="EAP Assocation Logo"></a></p>
    </div>

</div>
<div class="column-wide">
<h2 class="flowers top-pad">{t}Web-based Training for Working Caregivers{/t}</h2>

<p>{t}Mather LifeWays Institute on Aging delivers provides online training using the latest technologies to efficiently and cost-effectively empower professionals in the workplace. Our online courses have been shown to result in measurable improvements in the quality of care provided and workforce retention. Participation may yieled:{/t}</p>

<ul>
<li>{t}Increased employee morale due to greater self-efficacy;{/t}</li>
<li>{t}Improved employee to employer, and employee to family relations; and{/t}</li>
<li>{t}Reduced employee absenteeism which leads to increased productivity.{/t}</li>
</ul>

    <h2 class="flowers top-pad">{t}Health status of your working caregivers{/t}</h2>

    <p>{t}Please choose one of the surveys below to take. Depending on your position, employer or employee, submit this
        voluntary survey and view aggregate feedback from all previous users.{/t}</p>

    <!-- add in input boxes for name,title, corporation, email, (optional, but no note) -->
    <?php
    $hrEmployerSurvey = $this->createWidget(
        'surveyor.widgets.Survey',
        array(
            'id' => 'hrEmployer',
            'options' => array(
                'htmlOptions' => array('style' => 'display:none;'),
                'title' => array('htmlOptions' => array('class' => 'flowers'))
            ),
        )
    );
    $caregiverSurvey = $this->createWidget(
        'surveyor.widgets.Survey',
        array(
            'id' => 'caregiver',
            'options' => array(
                'htmlOptions' => array('style' => 'display:none;'),
                'title' => array('htmlOptions' => array('class' => 'flowers'))
            ),
        )
    );
    ?>
    <p>
        <a id="survey_link_<?php echo $hrEmployerSurvey->getId(); ?>"
           href="#survey_<?php echo $hrEmployerSurvey->getId(); ?>" class="button"
           title="<?php echo $hrEmployerSurvey->model->title; ?>"><?php echo $hrEmployerSurvey->model->title; ?></a>
        <a id="survey_link_<?php echo $caregiverSurvey->getId(); ?>"
           href="#survey_<?php echo $caregiverSurvey->getId(); ?>" class="button"
           title="<?php echo $caregiverSurvey->model->title; ?>"><?php echo $caregiverSurvey->model->title; ?></a>
    </p>
    <?php
    $hrEmployerSurvey->run();
    $caregiverSurvey->run();
    ?>

    <h2 class="flowers top-pad">{t}A Closer Look - Lives of Caregivers{/t}</h2>

    <p style="padding-bottom: 25px;">{t}Join us in looking at the incredible lives of several, unique caregivers, as
        they recall their experience and emotion. Capturing various age groups and ethnicities, you will quickly relate
        to the situation these caregivers were in. (English){/t}</p>

    <div class="box-grey">
        <?php
        $this->widget(
            'ext.JWplayer.JWplayer',
            array(
                'id' => 'MatherCaregivers',
                'config' => array(
                    'image' => $this->createDownloadUrl('videos/MatherCaregivers/poster.jpg'),
                    'width' => '540px',
                    'height' => '305px',
                    'levels' => array(
                        array('file' => $this->createDownloadUrl('videos/MatherCaregivers/video.m4v')),
                        array('file' => $this->createDownloadUrl('videos/MatherCaregivers/video.webm')),
                        array('file' => $this->createDownloadUrl('videos/MatherCaregivers/video.ogv'))
                    )
                )
            )
        );
        ?>
    </div>
    <?php
    $this->createWidget(
        'surveyor.widgets.Survey',
        array(
            'id' => 'workingCaregiver',
            'options' => array(
                'htmlOptions' => array('class' => 'none'),
                'title' => array('htmlOptions' => array('class' => 'flowers')),
            )
        )
    )->run();
    ?>
</div>
<div id="bottom-logos">
    <h4>{t}Partners{/t}</h4>
    <a href="http://www.rushu.rush.edu" id="rush">Rush University (Chicago)</a> <a href="http://www.alz.org/" id="aa"
                                                                                   target="_blank">Alzheimer's
        Asssociation</a> <a href="http://wfd.com/" id="wfd" target="_blank">WFD</a> <a
        href="http://gladerfilmworks.com/" id="glader" target="_blank">Glader Filmworks</a> <a
        href="http://www.mediastorm.com/" id="mediastorm" target="_blank">Mediastorm</a> <a
        href="http://www.rosalynncarter.org/" id="rciLogo" target="_blank">Rosayln Carter Institute</a>
</div>

<!--  start tutorial course here -->

<div id="tutorial" class="hide">

    <div id="slide-1" class="course-slide">
        <div class="content">
            <h2 class="flowers">{t}Under Construction{/t}</h2>
            <hr/>
            <h4>{t}Please check back later today. Thank you!{/t}</h4>

            <p>
                {t}We are currently revising this content. Please check back later today.{/t}
            </p>

        </div>
        <div class="buttons">
            <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> {t}Close{/t} </a>
        </div>
    </div>
</div>
