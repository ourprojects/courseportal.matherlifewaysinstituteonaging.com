<?php $this->breadcrumbs = array('{t}Activation Failed{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('121280814.png'); ?>);">
    <h1 class="bottom">{t}Activation Failure{/t}</h1>
</div>

<div id="sidebar">
    <div class="box-sidebar two">
        <h3>Mather LifeWays Institute on Aging</h3>

        <p class="text-center bold">
            <a href="http://www.matherlifewaysinstituteonaging.com/family-caregivers/" target="_blank">{t}Family
                Caregivers{/t}</a>
        </p>

        <p>{t}More than 40 million Americans provide care for relatives or friends with a chronic illness such as
            dementia, stroke, or Parkinson&rsquo;s disease. This takes an enormous physical and emotional toll on
            caregivers.{/t}</p>

        <p>{t}Mather LifeWays Institute on Aging provides tools and online courses to support caregivers through
            education, advice, and valuable insights. Preparation and self-care can lighten the load and elevate the
            experience of caring for a loved one, increasing the quality of life for all parties involved.{/t}</p>
        <img
            style="margin: 0px; padding: 0px; -webkit-border-bottom-right-radius: 5px; -webkit-border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px;"
            src="<?php echo $this->getImagesUrl('148950191.png'); ?>" alt="Image">
    </div>
</div>

<div class="column-wide">
    <p class="header">{t}Oops! An error occurred while trying to activate your account.{/t}</p>

    <p class="header">
        {t}Please contact us by clicking{/t}&nbsp;
        <?php echo CHtml::link('{t}here{/t}', $this->createUrl('home/contact')); ?>
        &nbsp;{t}if you need assistance completing the registration process.{/t}
    </p>
</div>
