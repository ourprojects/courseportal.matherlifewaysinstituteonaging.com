<?php

$clientScript = Yii::app()->getClientScript();
$clientScript->registerScriptFile($this->getScriptsUrl('jquery.quote.js'), CClientScript::POS_HEAD);
$clientScript->registerScript('quotes_rotator', "$('ul#quotes').quote_rotator({randomize_first_quote: true});");
$clientScript->registerCssFile($this->getStylesUrl('homeUser.css'));

?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('home.png'); ?>);">
    <h1 class="bottom">{t}Welcome!{/t}</h1>
</div>
<div id="sidebar">
    <div class="box-sidebar three statistics" style="padding-bottom: 25px;">
        <h3>{t}Statistics on Caregivers{/t}</h3>
        <ul id="quotes">
            <li><img src="<?php echo $this->getImagesUrl('stat-one-quarter.png'); ?>" alt="image"/> <span>1/4</span>&nbsp;{t}of
                US households has a family caregiver providing some form of care or service to a relative or friend, age
                50+{/t}
            </li>
            <li><img src="<?php echo $this->getImagesUrl('stat-two-thirds.png'); ?>" alt="image"/> <span>2/3</span>&nbsp;{t}of
                these family caregivers are also working{/t}
            </li>
            <li><img src="<?php echo $this->getImagesUrl('stat-half.png'); ?>" alt="image"/> <span>50%</span>&nbsp;{t}of
                employed caregivers work full-time{/t}
            </li>
        </ul>
    </div>

    <div class="box-sidebar one">
        <h3>{t}Resources{/t}</h3>

        <p>
            <a href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2013/08/Survey-of-Working-Caregiver-Needs-and-Resources.pdf" class="pdf" target="_blank">{t}Survey of Working Caregiver Needs and Resources{/t}</a>
            <a href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2012/03/eLearning-Maturing-Technology.pdf" class="pdf" target="_blank">{t}e-Learning: Maturing Technology Brings Balance &amp; Possibilities to Nursing Education{/t}</a>
            <a href="http://www.matherlifewaysinstituteonaging.com/wp-content/uploads/2012/03/How-eLearning-Can-Reduce-Expenses-and-Improve-Staff-Performance.pdf" class="pdf" target="_blank">{t}The Bottom Line: How e-Learning Can Reduce Expenses and Improve Staff Performance{/t}</a>
        </p>
    </div>

</div>
<div class="column-wide" style="min-height: 1000px;">
    <h2 class="flowers">{t}Employers and Employees{/t}</h2>

    <p>{t}We are uniquely positioned to provide corporations with innovative programs and products, all thoughtfully
        developed and tested under applied research conditions with well-respected companies and senior living
        organizations.{/t}</p>

    <p>{t}With staff expertise across a number of fields including gerontology, psychology, sociology, nursing, and
        cultural anthropology, we bring together multiple perspectives to address a wide range of issues that affect the
        aging population.{/t}</p>

    <p>{t}Digital toolkits provide one-stop training resources for human resource managers and trainers who wish to
        incorporate key topics for working caregivers into current training programs. In addition, we are well
        positioned to help conduct pilot studies that measure the impact on both working caregivers and the bottom line
        for interested corporations.{/t}</p>
</div>