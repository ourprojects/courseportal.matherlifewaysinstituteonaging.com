<?php

$this->breadcrumbs = array(t('Courses') => $this->createUrl('course/'), t($course->title));
$clientScript = Yii::app()->getClientScript();
$clientScript->registerCssFile($this->getStylesUrl('course.css'));

foreach (array(
             '.lesson-1',
             '.lesson-2',
             '.lesson-3',
             '.activityLog') as $lesson) {
    $this->widget('ext.fancybox.EFancyBox', array('id' => $lesson, 'config' => array('width' => '1000px', 'height' => '1000px', 'arrows' => false, 'autoSize' => false, 'mouseWheel' => false)));
}
?>

<div class="small-masthead"
     style="background-image: url(<?php echo $this->getImagesUrl('spencer/126945521r.jpeg'); ?>);">
    <h1 class="bottom">
        <?php echo t($course->title); ?>
    </h1>
</div>

<div id="sidebar">
    <div class="box-sidebar one">
        <h3>Activity Log</h3>

        <p>Please click the button below to access your personal Activity Log.</p>

        <p>
            <?php
            echo CHtml::button('Activity Log', array('onclick' => '$("#activityLog").dialog("open")', 'class' => 'button'));
            ?>
        </p>
        <?php
        $this->beginWidget('zii.widgets.jui.CJuiDialog', array('id' => 'activityLog', 'options' => array('title' => 'Activity Log', 'autoOpen' => false, 'modal' => true, 'width' => 720, 'maxWidth' => 720, 'maxHeight' => 1000),));
        $this->widget(
            'course.widgets.SpencerPowell.ActivityLogWidget',
            array('id' => 'spencerPowell')
        );
        $this->endWidget('zii.widgets.jui.CJuiDialog');
        ?>
    </div>
    <div class="box-sidebar one">
        <h3>Course Evaluations</h3>

        <p>Please click the button below to access the pre-course and post-course surveys. Participation is anonymous.
            Please complete each survey at the appropriate time.</p>

        <p>
            <a href="https://survey.vovici.com/se.ashx?s=4C32B0216020938B" target="_blank" class="button">Pre-Course
                Survey</a>
        </p>

        <p>
            <a href="https://survey.vovici.com/se.ashx?s=4C32B0216020938B" target="_blank" class="button">Post-Course
                Survey</a>
        </p>
    </div>
    <div class="box-sidebar one">
        <h3>Certificate of Completion</h3>

        <p>You must complete the first four Modules before accessing your Certificate of Completion. Click the button
            below to access your certificate where you will be able to manually add your name and date.</p>

        <p>
            <a href="<?php echo $this->createDownloadUrl('spencer/CertificateOfCompletion_SpencerPowell.pdf'); ?>"
               target="_blank" class="button">Download Certificate</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('spencer/166312138.png'); ?>" id="certificate" alt="Image">
    </div>
    <div class="box-sidebar one">
        <h3>Facilitator: Sherrie All, PhD</h3>

        <p>Licensed clinical neuropsychologist specializing in brain fitness, healthy aging and cognitive enhancement.
            She is building a private practice in clinical neuropsychological assessment combined with interventions
            aimed at enhancing cognition and promoting healthy aging.</p>

        <p>
            <a href="#lesson-3-slide-1" data-fancybox-group="lesson-3" class="teal lesson-3 button">Contact
                Facilitator</a>
        </p>
        <img src="<?php echo $this->getImagesUrl('spencer/80608570.png'); ?>" alt="Facilitator" id="facilitator">
    </div>
</div>

<div class="column-wide">
    <h2 class="flowers">Spencer Powerll Online Training (SPOT)</h2>
    <?php // echo t($course->title); ?>

    <p>
        <?php echo t($course->description); ?>
    </p>

    <p style="color: #E80000; font-size: 10pt;">
        <strong>Disclaimer: </strong>We want to emphasize that there are still risk factors that we cannot control, so
        living a brain healthy lifestyle does not guarantee that you will not get dementia, just like living a heart
        healthy lifestyle does not guarantee you won’t have a heart attack.
    </p>

    <h4>Course Topic - Introduction</h4>
    <p>
       this is a test of the new clone.
    </p>


    <h4>Agenda</h4>

    <p>
        Add link/download button for course agenda, need pdf file here
    </p>
    <h4>Objectives</h4>
    <ul>
        <?php
        foreach ($course->objectives as $objective)
            echo '<li>' . t($objective->text) . '</li>';
        ?>
    </ul>

    <table style="border: none; padding: 0px; margin-top: 15px; table-layout: fixed; border-bottom-style: solid; border-top-style: solid;">
        <tr>
            <td>
                <h4>Introduction ---</h4>
            </td>
            <td>
                <ul class="modules">
                    <li>
                        <a href="#lesson-1-slide-1" data-fancybox-group="lesson-1" class="teal lesson-1 button">Start Course</a>
                        <a href="#lesson-1-slide-2" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-3" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-4" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-5" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-6" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-7" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-8" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-9" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-10" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-11" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-12" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-13" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-14" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                        <a href="#lesson-1-slide-15" data-fancybox-group="lesson-1" class="hide lesson-1"></a>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Memory Strategy / Activity ---</h4>
            </td>

            <td>
                <ul class="modules">
                    <li>
                        <a href="#lesson-2-slide-1" data-fancybox-group="lesson-2" class="teal lesson-2 button">Improving
                            Attention</a>
                        <a href="#lesson-2-slide-2" data-fancybox-group="lesson-2" class="hide lesson-2"></a>
                        <a href="#lesson-2-slide-3" data-fancybox-group="lesson-2" class="hide lesson-2"></a>
                    </li>

                </ul>
            </td>
        </tr>
    </table>

    <h4>Resources</h4>

    <p>Please use these listed resources in the completion of this online course. Please contact your facilitator or the
        program director if you have additional resources you would like to see added here.</p>
    <ul id="resources">
        <li>
            <a href=" http://www.ncbi.nlm.nih.gov/pubmedhealth/PMH0008821/" target="_blank">PubMed Health</a>
        </li>
        <li>
            <a href="http://www.nih.gov/health/wellness/" target="_blank">National Institutes of Health</a>
        </li>
        <li>
            <a href="http://sharpbrains.com/" target="_blank">SharpBrains</a>
        </li>
    </ul>

    <h4>Optional Video - Working Caregivers</h4>

    <h5>The Sandwich Generation - by Media Storm</h5>

    <p>Filmmaker and photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers and raising two
        children when Winokurs 83-year-old father, Herbie, became too infirm to care for himself. At that moment they
        joined some twenty million other Americans who make up the sandwich generation, those who find themselves
        responsible for the care of both their children and their aging parents.</p>

    <div class="box-grey">
        <?php
        $this->widget(
            'ext.JWplayer.JWplayer',
            array(
                'id' => 'TheSandwichGeneration',
                'config' => array(
                    'image' => $this->createDownloadUrl('videos/TheSandwichGeneration/poster.jpg'),
                    'width' => '540px',
                    'height' => '400px',
                    'levels' => array(
                        array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.m4v')),
                        array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.webm')),
                        array('file' => $this->createDownloadUrl('videos/TheSandwichGeneration/video.ogv'))
                    )
                )
            )
        );
        ?>
    </div>
</div>
<div id="course" class="hide">
<?php $clientScript->registerScript('question-answer-handler', "$('.course-slide .question').change(function() {" . "if($(this).find('select').val() == '1') {" . "$(this).find('.right-answer').removeClass('hide');" . "$(this).find('.wrong-answer').addClass('hide');" . "} else {" . "$(this).find('.right-answer').addClass('hide');" . "$(this).find('.wrong-answer').removeClass('hide');" . "}" . "});"); ?>
<div id="lesson-1">
<div id="lesson-1-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">Spencer Powell Brain Fitness Program online</h2>
        <hr/>
        <h4>Welcome!</h4>

        <p>
            Welcome and thank you for your interest and participation in the <strong>Spencer Powell Brain Fitness
                Program</strong> online course. We are excited to have your participation and look forward to our
            interactions! Please contact us if you need help, have questions, or suggestions for course improvements.
        </p>
        <h4>Course Description</h4>

        <p>
            <strong>Spencer Powell Online Training (SPOT)</strong> is designed to promote cognitive health and
            healthy lifestyle changes. The course provides information on how lifestyle factors such as physical
            activity and cognitive engagement affect your brain and your risk for dementia. Practical strategies are
            suggested for maintaining memory over time. In addition, the course includes memory training such as
            chunking, the story method, and mnemonic techniques.
        </p>

        <div id="question1" class="question">
            <p style="text-align: center;">
                <b>Have you taken the pre-course evaluation yet?</b> <br/>
                <select style="text-align: center;">
                    <option selected="selected" value="select">Select</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </p>
            <p class="right-answer hide">Great! Thank you! Please continue.</p>

            <p class="wrong-answer hide">
                No Problem! Please <a href="location.href('http://www.vovici.com/home_index.aspx" target="_blank">click
                    here</a> to participate.
            </p>
        </div>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start Course &raquo;</a>
    </div>
</div>
<div id="lesson-1-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">You Tube - The Brain Fitness Program</h2>
        <hr/>
        <p>
            This short video will provide you with a first look at some of the exciting new discoveries about
            neuroplasticity (the ability of the adult brain to change itself) that form the foundation of this course.
            You may have already seen this popular <a href="http://www.pbs.org" target="_blank">PBS</a> (Public
            Broacdcasting Service) special, which helped pave the way for many incredible advances, including this
            course, that can help you strengthen your brain and lower your risk for dementia.
        </p>
        <iframe style="width: 480px; height: 360px; display: block; margin: 15px auto;"
                src="//www.youtube.com/embed/WBSNQi4es5k?rel=0" frameborder="0" allowfullscreen></iframe>
        <!-- 'url' => PhpbbModule::getInstance()->getForumUrl(), -->
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();"> Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">Module Outline</h2>
        <hr/>
        <h4>Module One - Introduction:</h4>
        <ol>
            <li>Overview</li>
            <li>Brain Health Now and Later</li>
            <li>Dementia and Cognitive Reserve</li>
            <li>Brain Plasticity</li>
            <li>Peak Performance</li>
            <li>Introduction to Program Format</li>
            <li>Memory Exercise</li>
            <li>Goal Setting</li>
        </ol>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();"> Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-4" class="course-slide">
    <div class="content">
        <h2 class="flowers">Brain Health</h2>
        <hr/>
        <p>The world of brain health has exploded over the past decade with many new programs and applications emerging
            to help people think and perform better both now in their daily lives at work or at home and later in life
            as people age. Maintaining independence later in life is a concern for many people, especially older adults,
            but even for younger people this can be a nagging concern. Through the course of this program you will learn
            how investing in your brain health now can pay dividends both immediately and as you age.</p>

        <p>To describe some of the key concepts underlying the field of brain health, we will start by talking a bit
            about how to protect brain health as you age.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-5" class="course-slide">
    <div class="content">
        <h2 class="flowers">Dementia is not inevitable</h2>
        <hr/>
        <p>Many people think that dementia is a normal part of the aging process and that losing ones memory is just
            part of getting older. While some cognitive skills, such as reaction time and our ability to access words at
            times (what we think of as “senior moments”), do decline naturally with age, “dementia” is a decline in
            cognitive ability beyond the normal aging process, most likely due to disease or injury.</p>

        <p>Many people also think that if dementia is in their family they are destined to develop it at some point in
            their lives. However, brain research is showing that the way people live their lives actually seems to
            account for as much or more of the risk for dementia than family history. In fact for the typical late-onset
            form of Alzheimer’s disease, genes seem to only account for about 30% of the risk (that’s in contrast to
            early-onset Alzheimer’s, which occurs before age 65 and has a much stronger genetic component). The rest of
            that 70% is made up of some other things that we can’t control such as environmental toxins, but within that
            70% area there are a lot of things that we can control.</p>

        <p>
            This information is leading some doctors and scientists to start thinking of<strong> dementia as a preventable disease</strong>, similar to how we think of heart disease, cancer and Type II diabetes as
            preventable.
        </p>

        <p>&nbsp;</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-6" class="course-slide">
    <div class="content">
        <h2 class="flowers">Dementia</h2>
        <hr/>
        <p>
            People often ask, “what is the difference between Alzheimer's disease and dementia?” Before we get too far,
            we should clarify that Alzheimer’s disease is a TYPE of dementia. <strong>Dementia</strong> is an umbrella
            term used to describe any<strong> type of stable decline in cognitive abilities, severe enough to interrupt
                a person’s ability to function independently</strong>. Dementia describes the observable symptoms of a
            brain disease or injury.
        </p>

        <p>
            <strong>Alzheimer’s is a disease process</strong> – a medical condition – that causes the cognitive changes
            that produce dementia. There are many other medical conditions that cause dementia as well.
        </p>

        <p>The second most common disease that causes dementia is what we call cerebrovascular disease, which causes
            vascular dementia. This includes any type of injury to the brain caused by a problem with the brain’s blood
            supply, most notably a stroke. There are varying degrees of strokes, however. You may have heard of TIA’s
            (or Transient Ischemic Attacks) or mini strokes. The stroke process can also occur without any identifiable
            symptoms, causing what we call silent strokes. You will learn more about these in the next session.</p>

        <p>Head trauma, Parkinson’s disease, Huntington Disease, Pick’s disease, infections such as HIV and CJD
            (Creutzfeldt-Jakob Disease – the human form of mad cow disease), substance abuse and environmental toxins
            can also cause dementia.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-7" class="course-slide">
    <div class="content">
        <h2 class="flowers">Risk Factors are Interactive</h2>
        <hr/>
        <p>We are also learning that most people who develop dementia tend to have more than one type of risk factor and
            may even have more than one disease process affecting their brains. It may also be the case that one disease
            process, such as diabetes, may play a role in the formation of another disease process such as
            Alzheimer’s.</p>

        <p>We know that hypertension (high blood pressure) is a common result of the pressure that diabetes puts on the
            vascular system. We still have a lot to learn in this area, but we mention it here because there are a lot
            of things that we can do to lessen the effects of many of these disease conditions on our aging brains,
            which may help us ward off or delay the clinical symptoms of dementia.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-8" class="course-slide">
    <div class="content">
        <h2 class="flowers">Cognitive Reserve: Your Brain's 401(k) Account</h2>
        <hr/>
        <p>
            One key way that we can lower our risk for dementia is through understanding and utilizing a theory that is
            central to this area of science, called the <strong>Theory of Cognitive Reserve</strong>. You can think of
            this as your brain’s 401(k) or retirement account.
        </p>

        <p>
            Simply put, the Theory of Cognitive Reserve is based on observations that <strong>no 2 brains respond to
                injury or illness in exactly the same way</strong>. There are people who can sustain a small amount of
            damage to their brains and lose a lot of brain function, and there are people who can sustain large amounts
            of damage and never develop dementia. <strong>What seems to differentiate these types of people is the
                amount of brain reserve that they have “stored in the bank” that can make up for the losses</strong>.
        </p>

        <p>So when planning financially for retirement, if you have a lot invested in your retirement account, you can
            survive losses - such as fluctuations in the market or an unexpected expense - much better if your account
            is bigger than if it were smaller. This principle seems to apply to our brains too, which serves as the
            basis for the theory of cognitive reserve. People with high levels of Cognitive Reserve have to sustain many
            more losses before crossing over the threshold to having dementia than people who have lower reserve.</p>

        <p>
            The keyword to learn from this is “Cognitive Reserve” – which is your<strong> brain’s reserve of both tissue
                and abilities</strong> that affects your risk for dementia. Or your Brain’s retirement account.
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-9" class="course-slide">
    <div class="content">
        <h2 class="flowers">More on Cognitive Reserve</h2>
        <hr/>
        <p>A little over 10 years ago, Yaakov Stern, PhD, a neuropsychologist at Columbia University, summarized a
            series of important brain discoveries and proposed the theory of Cognitive Reserve. Since then, numerous
            studies have continued to support this theory, allowing us to now know many of the factors that can raise
            and lower a person’s risk for dementia.</p>

        <p>
            One of the first discoveries leading to the theory of cognitive reserve came after scientists noticed that a
            group of people who had donated their brains for autopsy showed signs of advanced Alzheimer’s disease in
            their brains even though at the time of their death they had no clinical signs of the disease. In other
            words, these were people<strong> with fully intact memories who had remained quite independent, yet their
                brains looked exactly the same as the brains of people who had forgotten their families and could no
                longer care for themselves</strong>.
        </p>

        <p>
            The scientists wondered if there might be something different about the way these people had lived their
            lives that allowed them to resist the effects of the Alzheimer’s disease pathology that had grown in their
            brains. It turned out that<strong> these people had been more active intellectually, socially and physically
                throughout their adult lives than the people in the other group</strong>.
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-10" class="course-slide">
    <div class="content">
        <h2 class="flowers">The Adult Brain Grows New Cells</h2>
        <hr/>
        <p>
            About 10 years after that autopsy study, another group of researchers studied the brains of people who had
            survived cancer through radiation treatment. It turns out that after people go through radiation treatment,
            some of the genetic information in their cells changes. By applying a special dye that is only attracted to
            cells with this new genetic data, researchers can see which cells had formed after the cancer. They applied
            this dye to brain tissue on autopsy and were surprised to find cells in the brain that accepted the dye.
            This meant that these <strong>cells had developed AFTER the radiation treatment.</strong>
        </p>

        <p>
            <strong>Some of the people in this study well into their 80’s when they received the cancer treatment, so it
                seems that new brain cells are growing well into later life</strong>. This evidence combined with other
            studies since this has changed the way we think about the adult brain;<strong> now we accept that the adult
                brain DOES grow new brain cells</strong>!
        </p>

        <p>
            Now this excitement has to be tempered a bit because<strong> brain cells do not grow at the same rate as say
                cells in your skin or your bones</strong>, so it is still harder for the brain to recover from injury.
        </p>

        <p>
            Nevertheless, it is exciting to know that we can still grow new brain cells. This may actually be one of the<strong>
                mechanism by which we can learn new things as the region of the brain where these new brain cells grow –
                called the hippocampus – is the area responsible for forming new memories</strong>.
        </p>

        <p>The key word to learn from this is “neurogenesis,” meaning the growth of new brain cells.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-11" class="course-slide">
    <div class="content">
        <h2 class="flowers">Brain Structures Also Grow with Experience</h2>
        <hr/>
        <p>&nbsp;</p>

        <p>
            In addition to discovering the growth of new brain cells, over the last couple of decades, scientist have
            demonstrated that<strong> brain structures can grow in adulthood, which often seems to be the result of
                experience, or learning new things</strong>.
        </p>

        <p>
            In the late 1990’s a group of researchers started studying the brains of cab drivers in London. This is an
            elite group of taxi drivers who have to complete a 3-4 year apprenticeship to learn the intricate routes
            within the 6-square mile are of central London (see map). They literally call it <strong>“The Knowledge.”
                75% of the people who start the apprenticeship drop out</strong>.
        </p>

        <p>
            At first researchers noted that a<strong> region of the hippocampus responsible for spatial relations was
                larger in experienced drivers compared to other people</strong>. After following new recruits over time,
            the same researchers observed that<strong> this region actually grew in the recruits who successfully
                completed the program</strong>.
        </p>

        <p>
            Developing such a specialized skill did come at a price, however, as other studies from the same group have
            shown that these taxi drivers perform worse on other tests of memory. This suggests that it is<strong>
                likely important to diversify your brain building activities</strong>. But the exciting part of all of
            this research is that it shows in a pretty clear way that the <strong>adult brain can grow – that is
                actually change its structure in a positive direction – through experience</strong>.
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-12" class="course-slide">
    <div class="content">
        <h2 class="flowers">Brain Cells Form New Connections</h2>
        <hr/>
        <p>&nbsp;</p>

        <p>
            The adult brain also changes in another way. The brain cells you already have as well as the new ones you
            are growing, can also form new connections. These connections are referred to as “<strong>pathways</strong>,”
            and just like with your muscles,<strong> the stronger a pathway becomes, the bigger it gets</strong>.
        </p>

        <p>
            The connections between brain cells, at the ends of the pathways, are called <strong>synapses</strong>, and
            “<strong>synaptic density</strong>”<strong> can be increased by learning new things and performing new
                skills</strong>.
        </p>

        <p>
            <strong>Pathways and synapses can also rewire</strong>, diverting their resources to different regions
            following an injury.
        </p>

        <p>
            All of this “<strong>malleability</strong>”<strong> in the wiring of brain cells</strong> is called <strong>“plasticity</strong>.”
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-13" class="course-slide">
    <div class="content">
        <h2 class="flowers">Cells that Fire Together, Wire Together</h2>
        <hr/>
        <p>
            This phenomenon was first described in the 1940’s by a scientist named Donald Hebb, and the process has
            since been termed Hebb’s Law, which is often <strong>paraphrased</strong> as, “<strong>cells that fire
                together, wire together</strong>.” So anytime you practice a new skill, the brain cells required to
            perform that skill will fire together, meaning they will both produce an electrical charge, which over time
            will change the structure of the synapse and allow the cells to be “wired together” or more likely to excite
            one another when one is excited.
        </p>

        <p>
            The technical names for the “rewiring process” are called <strong>Long Term Potentiation (LTP)</strong>
            and<strong> Long Term Depression (LTD)</strong>.<strong> LTP</strong> we already understand, that<strong>
                cells that fire together build stronger connections</strong>.<strong> LTD</strong> explains what we call
            negative plasticity or the “<strong>use it or lose it</strong>” phenomenon, meaning that when cells are not
            firing together, when you are not practicing a particular skill, the connections become weaker over time.
        </p>

        <p style="text-align: center;">
            <iframe width="480" height="360" src="//www.youtube.com/embed/jSE703UokZY?rel=0" frameborder="0"
                    allowfullscreen></iframe>
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-14" class="course-slide">
    <div class="content">
        <h2 class="flowers">Your Brain’s 401(k)</h2>
        <hr/>
        <table style="width: 100%; margin: 15px auto; border: 3;">
            <tr style="text-align: center;">
                <th>
                    <strong>Minimize Losses</strong>
                </th>
                <th>
                    <strong>Maximize Contributions</strong>
                </th>
            </tr>
            <tr>
                <td>Prevent or slow disease processes</td>
                <td>Maximize new brain cell growth</td>
            </tr>
            <tr>
                <td>Avoid brain injury</td>
                <td>Grow new connections between brain cells</td>
            </tr>
            <tr>
                <td>Reduce stress</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <p>
            Now that we know that a lot of the things we do throughout our lives affects our susceptibility to dementia,
            we can utilize the principles of Cognitive Reserve Theory to <strong>maximize our investments in our Brain’s
                retirement account</strong>.
        </p>

        <p>However, this course will help you understand the things you can do that may lower the risk for dementia or
            postpone cognitive decline in the hopes that you will maintain independence for as long as possible.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-1-slide-15" class="course-slide">
    <div class="content">
        <h2 class="flowers">Peak Performance!</h2>
        <hr/>
        <p>We have talked a lot about protecting your brain from dementia, but this program will also focus on helping
            you get the most out of your brain today, which can help you both at work and at home. You will be learning
            strategies to remember things better, to be more organized, to pay closer attention and to regulate your
            emotions.</p>

        <p>Some of the strategies will come to you directly through the memory tips that you will learn in modules 2-7
            and the lifestyle demonstrations we will present in each module. Other strategies will come to you
            indirectly as you practice the exercises included in both the course assignments and the brain training
            software being providing.</p>
    </div>
    <div class="buttons">
        <a href="#" onclick="parent.jQuery.fancybox.close();" class="button left"> Complete Module</a>
    </div>
</div>
<div id="lesson-2-slide-1" class="course-slide">
    <div class="content">
        <h2 class="flowers">Memory Strategy #1</h2>
        <hr/>
        <img src="<?php echo $this->getImagesUrl('spencer/dv496065a.png'); ?>" alt="image">
        <h4>5 Minute Explanation – 10 Minute Practice</h4>
        <h5>Memory Tip #1 - Improve Memory by Improving Attention </h5>

        <p>In each module, you will learn a new strategy for improving your memory in your everyday life. Today, please
            focus on helping build a cognitive skill that is not “memory” per se but is essential for having a better
            memory.</p>

        <p>
            In this module we are going to help you improve your memory by helping you improve your ATTENTION. The
            reason we are starting here is because <strong>attention is the gateway to memory</strong>. You can’t expect
            to remember things that you don’t see, hear, feel or otherwise experience, right? How can we expect our
            brains to hold onto information that doesn’t get in in the first place?
        </p>
        <h5>What are some ways that you can improve your attention?</h5>

        <p>
            <strong>Look up and around</strong> - Open your eyes - <strong>Simply being more aware</strong> can improve
            your attention. <strong>Putting in the effort</strong> to look around and making mental notes of where you
            parked your car or whether or not you locked the door, can do wonders for setting a good foundation for
            remembering things!
        </p>

        <p>
            <strong>Stay</strong> “<strong>Present</strong>” - <strong>Dial down the internal chatter or the mental
                to-do list</strong>. In conversations, remind yourself that you will be able to come up with something
            to say after the person is finished talking in order to stop the mental rehearsal of your next point. This
            way you can really pay attention to what the other person is saying
        </p>

        <p>
            <strong>Get your hearing or vision checked and corrected if needed</strong> – Do not let vanity get in the
            way of your brain health. Vision and hearing loss not only keep you from taking in current information, but
            over time it seems that they can weaken you whole brain. As we just learned today, cells that fire together,
            wire together, so if your brain is not getting good quality stimulation from your ears or your eyes, all of
            the brain circuits that process that information (including your memory circuits) have less stimulation, and
            therefore seem to also weaken over time.
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button right" onclick="$.fancybox.next();">Start &raquo;</a>
    </div>
</div>
<div id="lesson-2-slide-2" class="course-slide">
    <div class="content">
        <h2 class="flowers">Improving Attention</h2>
        <hr/>
        <p>
            <strong>Manage Your Environment</strong>
        </p>

        <p> - Reduce Distractions and Interruptions</p>

        <p>
            <strong>Do One Thing at a Time</strong>
        </p>

        <p> - Multi-tasking is a Myth!</p>

        <p> - Multi-tasking can be toxic to the brain</p>

        <p>
            <strong>Bribe Yourself</strong>
        </p>

        <p>
            <strong>Get Plenty of Rest</strong>
        </p>

        <p> - May need to see a sleep doctor</p>

        <p> - Resting when you're awake</p>

        <p>
            <strong>Manage your Emotions</strong>
        </p>

        <p>You may be saying to yourself, “I’m just not good at paying attention.” “I have ADD” or “I’ve always been bad
            at paying attention.” Well keep in mind that the brain is plastic and very much capable of change. In fact,
            new research is showing that through brain exercises and through the tips that you will learn in this
            course, even people with attention problems caused by brain injury and people with Attention Deficit /
            Hyperactivity Disorder (ADD/ADHD) can improve their attention.</p>

        <p>
            <strong>Strategies that are used to help people with attention deficits improving their attention – we list
                them here because they are also important for many of us.</strong>
        </p>
        <h5>
            <strong>Manage your environment</strong> –
        </h5>

        <p>Distractions and interruptions some of the biggest threats to attention.</p>
        <h5>Do one thing at a time –</h5>

        <p>Multi-tasking is a myth! Our brains really don’t seem to process more than one thing at a time. What may feel
            like multi-tasking, for example checking your email while having a conversation, really seems to just
            involve your brain switching rapidly back and forth between the two tasks. This inability to multitask the
            way we think we can is also starting to influence public policy in terms of limiting cell phone use while
            driving. Texting has received a lot of focus, but talking may be just a bad.</p>
        <h5>Bribe yourself –</h5>

        <p>Often we have trouble paying attention simply because we are not motivated to do so. Sometimes we don’t admit
            this and just get mad at ourselves for not being able to pay attention.</p>
        <h5>Get Plenty of Rest -</h5>

        <p>Feeling tired, either by not sleeping well or from mental fatigue, can limit our attention. People who do not
            get enough, good quality sleep perform considerably worse on tests of attention, which can have a big impact
            on important tasks such as driving.</p>

        <p>Finally, it is also important to remember that emotions can interrupt our attention! Feeling anxious or being
            distracted by self-criticism or worried thoughts is often one of the biggest robbers of our attention. So
            learning to relax is also very important for improving attention. You will learn more about caring for your
            emotions and dealing with stress in the coming modules.</p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="$.fancybox.next();">Next&nbsp;&raquo; </a>
    </div>
</div>
<div id="lesson-2-slide-3" class="course-slide">
    <div class="content">
        <h2 class="flowers">Attention Exercise</h2>
        <hr/>
        <p>
            Allow 10 minutes of time for this activity. Please visit the following <a
                href="http://sharpbrains.com/blog/2007/10/16/brain-teasers-and-games-for-adults-our-top-50/"
                target="_blank">website</a> and participate in one of the 'Attention' activities.
        </p>
    </div>
    <div class="buttons">
        <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
            href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">Exit</a>
    </div>
</div>


<div id="lesson-3">
    <div id="lesson-3-slide-1" class="course-slide">
        <div class="content">
            <h2 class="flowers">Contact Facilitator</h2>
            <hr/>
            <p>Please complete the form below to contact your facilitator.</p>

            <!--
            <div class="box-white">
                <?php /*
                $this->widget(
                    'ext.LDContactUsWidget.LDContactUsWidget',
                    array(
                        'captcha' => array(
                            'class' => 'ext.LDContactUsWidget.components.CUReCaptcha',
                            'config' => array(
                                'publicKey' => Yii::app()->params['reCaptcha']['publicKey'],
                                'privateKey' => Yii::app()->params['reCaptcha']['privateKey'],
                                'useAjax' => true
                            )
                        ),
                        'options' => array(
                            'htmlOptions' => array('class' => 'form')
                        )
                    )
                );
            */    ?>
            </div>
-->
        </div>
        <div class="buttons">
            <a href="javascript:;" class="button left" onclick="$.fancybox.prev();">&laquo;&nbsp;Back</a><a
                href="javascript:;" class="button right" onclick="parent.jQuery.fancybox.close();">Exit</a>
        </div>
    </div>
</div>
</div>