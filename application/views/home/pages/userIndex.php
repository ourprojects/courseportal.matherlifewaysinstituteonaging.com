<?php
$this->pageTitle = Yii::app()->name . ' - ' . t('User');

Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->getScriptsUrl() . '/jquery.quote.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScript('quotes_rotator', "$('.quotes').quote_rotator({randomize_first_quote: true});");

?>
	<div class="small-masthead" style="background-image: url(<?php echo Yii::app()->theme->getImagesUrl(); ?>/home.png);">
		<h1 class="bottom"><?php echo t('Welcome!'); ?></h1>
	</div>
	<div id="sidebar">
		<div class="box-sidebar three">
			<h3><?php echo t('Stats on Caregivers'); ?></h3>
			<ul class="quotes">
				<li><img src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/stat-one-quarter.png" /><?php echo t('<span>1/4</span> of US households has a family caregiver providing some form of care or service to a relative or friend, age 50+'); ?></li>
				<li><img src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/stat-two-thirds.png" /><?php echo t('<span>2/3</span> of these family caregivers are also working.'); ?></li>
				<li><img src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/stat-half.png" /><?php echo t('<span>50%</span> of employed caregivers work full-time/'); ?></li>
			</ul>
		</div>

		<div class="box-sidebar four">
			<h3><a href="http://feeds.feedburner.com/pewresearch/internetandtechnology" target="_blank">Pew Research</a></h3>
			<p style="text-align: center;"><img src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/pew.png" /></p>
			<p><?php echo t('As of April 2012, 53% of American adults age 65 and older use the internet or email. 
			Though these adults are still less likely than all other age groups to use the internet, 
			the latest data represent the first time that half of seniors are going online. After 
			several years of very little growth among this group, these gains are significant.'); ?></p>
			
			<!-- add image for whitepaper here, like a Adobe pdf icon or something -->
			
			<p><a href="http://pewinternet.org/~/media//Files/Reports/2012/PIP_Older_adults_and_internet_use.pdf" class="pdf">Click to view the report</a></p>
			<div class="clear"></div>
		</div>

			
		<div class="box-sidebar one">
			<h3><?php echo t('Alzheimers Assocation'); ?></h3>
			<p style="text-align: center;"><img src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/alz.png" /></p>
			<p><?php echo t('There are 10 warning signs of Alzheimers. If you or someone you know is experiencing 
			any of the signs, please see a doctor. Early diagnosis gives you a chance to seek treatment and plan for the future.'); ?></p>
			
			<!--- add image for whitepaper here, like a Adobe pdf icon or something -->						
			
			<p><a href="http://www.alz.org/national/documents/checklist_10signs.pdf" class="pdf">Click to download the handout</a></p>
			<div class="clear"></div>
					
		</div>
				
		<div class="box-sidebar two">
			<h3 class="two-line"><?php echo t('Medicare.gov<br />Tips &amp; Resources for Caregivers'); ?></h3>
			<p style="text-align: center;"><img src="<?php echo Yii::app()->theme->getImagesUrl(); ?>/medicare.png" /></p>
			<p><?php echo t('Are you familar and/or have you visited the Medicare website? 
			The handout below is a list of tips and resources for caregivers as suggested by Medicare.'); ?></p>
		
			<!-- add image for whitepaper here, like a Adobe pdf icon or something -->						
					
			<p><a href="http://www.medicare.gov/files/ask-medicare-what-medicare-covers.pdf" class="pdf">Click to download the handout</a></p>
		</div>

	</div>
	<div class="column-wide">

		<h2 class="flowers"><?php echo t('Mather LifeWays Institute on Aging'); ?></h2>
		<p><?php echo t('Through research-based programs and innovative techniques, Mather LifeWays Institute on Aging is 
		committed to advancing the field of geriatric care. Cutting-edge research lays the foundation for our solid solutions to senior care challenges, 
		including recruitment, mentorship, training, and retention.'); ?></p>
		
		<p><?php echo t('Used by individuals and entire organizations, our nationally recognized, 
		award-winning programs include training modules, online courses, toolkits, and learning modules designed to make learning fun and easy. 
		Our programs have been shown to result in measurable improvements in the quality of care provided and workforce retention.'); ?></p>
		
		<h2 class="flowers top-pad"><?php echo t('Employers and Employees'); ?></h2>
		<p><?php echo t('We are uniquely positioned to provide corporations with innovative programs and products, all 
		thoughtfully developed and tested under applied research conditions with well-respected companies and senior living organizations. With staff 
		expertise across a number of fields including gerontology, psychology, sociology, nursing, and cultural anthropology, we bring together 
		multiple perspectives to address a wide range of issues that affect the aging population.'); ?></p>
		
		<p><?php echo t('We deliver online learning and web-based modalities using the latest technologies to efficiently and cost-effectively empower professionals. 
		Digital toolkits provide one-stop training resources for human resource managers and trainers who wish to incorporate key topics for working 
		caregivers into current training programs. In addition, we are well-positioned to help conduct pilot studies that measure the impact on both 
		working caregivers and the bottom line for interested corporations.'); ?></p>

		<h2 class="flowers top-pad"><?php echo t('The Sandwich Generation - by Media Storm'); ?></h2>
		<p><?php echo t('Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers 
		and raising two children when Winokurs 83-year-old father, Herbie, became too infirm to care for himself. At that moment they joined 
		some twenty million other Americans who make up the sandwich generation, those who find themselves responsible for the care of both 
		their children and their aging parents.'); ?></p>
		
		<p><?php echo t('Authors of the book Aging in America: The Years Ahead, which chronicles the countrys 
		fastest-growing segment of the population, Winokur and Kashi decided to tell their own story as they took on the care of Winokurs 
		father. In The Sandwich Generation, they have created an honest, intimate account of their own shifting and challenging responsibilities, as well as some of their unexpected joys.'); ?></p>
		
		<div class="box-grey">
			<div id="TheSandwichGeneration">
			<?php 
			$this->widget(
					'ext.JWplayer.JWplayer',
					array(
						'target' => 'TheSandwichGeneration',
						'config' => array(
							'file' => "video.mp4",
							'image' => $this->createUrl('download').'/videos/TheSandwichGeneration/poster.jpg',
							'width' => '540px',
							'height' => '400px',
							'levels' => array(
					            array('file' => $this->createUrl('download').'/videos/TheSandwichGeneration/video.m4v'),
					            array('file' => $this->createUrl('download').'/videos/TheSandwichGeneration/video.webm'),
					            array('file' => $this->createUrl('download').'/videos/TheSandwichGeneration/video.ogv')
					        )
						)
					)
			);
			?>
			</div>
		</div>

	</div>
</div>