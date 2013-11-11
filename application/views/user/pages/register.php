<?php $this->breadcrumbs = array('{t}Register{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
    <h1 class="bottom">{t}Register{/t}</h1>
</div>
<div id="sidebar">
    <div class="box-sidebar one">
        <h3>Mather LifeWays Institute on Aging</h3>

        <p class="text-center bold">
            <a href="http://www.matherlifewaysinstituteonaging.com/family-caregivers/" target="_blank">{t}Family
                Caregivers{/t}</a>
        </p>

        <p>{t}More than 40 million Americans provide care for relatives or friends with a chronic illness such as
            dementia, stroke, or Parkinson&rsquo;s disease. This takes an enormous physical and emotional toll on
            caregivers.{/t}</p>

        <p>{t}Mather LifeWays Institute on Aging provides tools and online courses to support caregivers through
            education, advice, and valuable insights.{/t}</p>
        <img src="<?php echo $this->getImagesUrl('148950191.png'); ?>" alt="Image">
    </div>
    <div class="box-sidebar two">
        <h3>{t}Aging in Action{/t}</h3>

        <p>{t}Aging in Action is Mather LifeWays Institute on Aging's monthly e-newsletter and blog containing the
            latest research news in the field of aging.{/t}</p>
        <a href="http://twitter.com/aginginaction" target="_blank">
            <img class="block center" src="<?php echo $this->getImagesUrl('twitter-bird.png'); ?>" alt="Twitter"></a>
    </div>
</div>
<div class="column-wide">
    <p>{t}Complete the fields below to register. You will be sent a verification email to authenticate your email
        address.{/t}</p>

    <p>
        {t}If you work at one of the following organizations, you will be required to use your employee email address to
        register:{/t}
    </p>

    <p class="bold">
    <ul>
        <li>
            IBM
        </li>
        <li>
            Mather LifeWays Institute on Aging
        </li>
        <li>
            ExxonMobil (Including XTO Energy)
        </li>
        <li>
            Texas Instruments
        </li>
        <li>
            Deloitte
        </li>
        <li>
            Merck (Including Schering-Plough)
        </li>
    </ul>

    <div class="box-white">
        <?php echo $this->renderPartial('forms/register_form', $models); ?>
    </div>
    <p>
        {t} Please click{/t}
        <strong><?php echo CHtml::link('{t}here{/t}', $this->createUrl('resendActivation')); ?> </strong> {t} to request
        you activation email again. {/t}
    </p>
</div>
