<?php $this->breadcrumbs = array('{t}Account Activation Email?{/t}'); ?>

<div class="small-masthead"
     style="background-image: url(<?php echo $this->getImagesUrl('header-resendactivation.png'); ?>);">
    <h1 class="bottom">{t} Account Activation Email? {/t}</h1>
</div>
<div id="sidebar">
    <div class="box-sidebar one">
        <h3>{t}Did you know?{/t}</h3>

        <p style="font-weight: bold; text-align: center;">{t}Pew Internet &amp; American Life Project: Family Caregivers
            Online{/t}</p>

        <p>
            {t}Women are slightly more likely than men to be caring for a loved one, as are adults ages 50-64, compared
            with other age groups.{/t}
        </p>

        <p><img class="block center" src="<?php echo $this->getImagesUrl('93061617sidebar1.png'); ?>"
                alt="EAP Assocation Logo"></p>

        <p>
            <a href="http://www.pewinternet.org/Reports/2012/Caregivers-online/Main-Report.aspx?view=all"
               target="_blank"> {t}Caregivers in the U.S.{/t} </a>
        </p>
    </div>
</div>
<div class="column-wide">
    <h2 class="flowers">{t} Account Activation Email {/t}</h2>

    <p>{t}Please complete the form below to have your activation email sent to you again. You must already be registered
        to receive this email. {/t}</p>

    <div class="box-white">
        <?php echo $this->renderPartial('forms/username_form', $models); ?>
    </div>
    <p>
        {t}Please click{/t} <strong><?php echo CHtml::link('{t}here{/t}', $this->createUrl('register')); ?> </strong>
        {t}if you still need to register.{/t}
    </p>
</div>
