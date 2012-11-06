<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset; ?>" />
	<meta name="language" content="<?php echo Yii::app()->getLanguage(); ?>" />
	<!-- blueprint CSS framework -->
	<?php echo CHtml::cssFile(Yii::app()->theme->getStylesUrl('screen.css'), 'screen, projection'); ?>
	<?php echo CHtml::cssFile(Yii::app()->theme->getStylesUrl('print.css'), 'print'); ?>
	<!--[if lt IE 8]>
		<?php echo CHtml::cssFile(Yii::app()->theme->getStylesUrl('ie.css'), 'screen, projection'); ?>
		<![endif]-->
	<?php echo CHtml::cssFile(Yii::app()->theme->getStylesUrl('main.css')); ?>
	<?php echo CHtml::cssFile(Yii::app()->theme->getStylesUrl('form.css')); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->getScriptsUrl('main.js'), CClientScript::POS_HEAD); ?>
	<title>
		<?php 
		$this->pageTitle = Yii::app()->name;
		foreach($this->breadcrumbs as $label => $url) {
			if(is_string($label))
				$this->pageTitle .= " - $label";
			else if(is_string($url))
				$this->pageTitle .= " - $url";
		}
		echo CHtml::encode($this->pageTitle); 
		?>
	</title>
</head>
<body>
	<div class="container" id="page">
		<div id="header">
			<div id="logo">
				<img src="<?php echo Yii::app()->theme->getImagesUrl('logo.png'); ?>" />
			</div>
			<div id="site-title"><?php echo Yii::app()->name; ?></div>
			<div id="language-menu"><?php $this->widget('modules.translate.widgets.LanguageSelector'); ?></div>
			<?php if(!empty(MPTranslate::$messages) && !Yii::app()->user->isGuest && Yii::app()->user->group->name === 'admin'): ?>
				<div id="translate-button">
					<?php echo Yii::app()->translate->translateLink('Missing Translations on Page', 'button'); ?>	
				</div>
			<?php endif; ?>
			<div id="mainmenu">
				<?php $this->widget('zii.widgets.CMenu', $this->menuAttrs); ?>
			</div>
		</div>
		<!-- header -->
		<div id="content">
			<?php 
			$this->widget('zii.widgets.CBreadcrumbs', array(
					'links' => $this->breadcrumbs,
			)); 
			?>
			<!-- breadcrumbs -->
			<?php if(Yii::app()->user->hasFlash('success')): ?>
					<div class="flash-success">
						<?php echo Yii::app()->user->getFlash('success'); ?>
					</div>
			<?php endif; ?>		
			<?php if(Yii::app()->user->hasFlash('notice')): ?>
					<div class="flash-notice">
						<?php echo Yii::app()->user->getFlash('notice'); ?>
					</div>
			<?php endif; ?>
			<?php if(Yii::app()->user->hasFlash('error')): ?>
					<div class="flash-error">
						<?php echo Yii::app()->user->getFlash('error'); ?>
					</div>
			<?php endif; ?>
			<?php echo $content; ?>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<!-- page -->
	<div id="footer">
		<div class="container">

			<div class="logo">
				<a href="http://www.matherlifewaysinstituteonaging.com/" title="Mather LifeWays Institute on Aging">
					<img src="<?php echo Yii::app()->theme->getImagesUrl('logo-footer.jpg'); ?>" />
				</a>
			</div>
			<div id="footer-icons" class="icons">
				<a class="twitter" href="http://twitter.com/aginginaction" rel="nofollow" target="_blank">
					Twitter
				</a>
				<a class="facebook" href="http://www.facebook.com/matherlifeways" rel="nofollow" target="_blank">
					Facebook
				</a>
				<a class="pinterest" href="#" rel="nofollow" target="_blank">
					Pinterest
				</a>
				<a class="youtube" href="http://www.youtube.com/matherlifeways" rel="nofollow" target="_blank">
					Youtube
				</a>
			</div>
			<div id="copyright">
				<ul>
				<li>P: (847) 492.7500 | F: (847) 492.6789</li>
				<li>1603 Orrington Avenue; Suite 1800 | Evanston; IL 60201</li>
				<li>&copy; Copyright 2012 Mather LifeWays&reg;</li>
				</ul>
			</div>

		</div>
	</div>
	<!-- footer -->
</body>
</html>