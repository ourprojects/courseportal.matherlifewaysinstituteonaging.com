<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->getLanguage(); ?>" lang="<?php echo Yii::app()->getLanguage(); ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset; ?>" />
	<meta name="language" content="<?php echo Yii::app()->getLanguage(); ?>" />
	<link rel="shortcut icon" href="<?php echo Yii::app()->getTheme()->getImagesUrl('favicon.ico'); ?>" />
	<!-- blueprint CSS framework -->
	<?php echo CHtml::cssFile(Yii::app()->getTheme()->getStylesUrl('screen.css'), 'screen, projection'); ?>
	<?php echo CHtml::cssFile(Yii::app()->getTheme()->getStylesUrl('print.css'), 'print'); ?>
	<!--[if lt IE 8]>
		<?php echo CHtml::cssFile(Yii::app()->getTheme()->getStylesUrl('ie.css'), 'screen, projection'); ?>
		<![endif]-->
	
	<?php echo CHtml::cssFile(Yii::app()->getTheme()->getStylesUrl('form.css')); ?>
	<?php echo CHtml::cssFile(Yii::app()->getTheme()->getStylesUrl('main.css')); ?>
	<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->getTheme()->getScriptsUrl('main.js'), CClientScript::POS_HEAD); ?>
	<title>
		<?php
		$this->pageTitle = t(Yii::app()->name);
		
		$breadcrumbs = property_exists($this, 'breadcrumbs') ? $this->breadcrumbs : array();
		
		foreach($breadcrumbs as $label => $url) 
		{
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
	<?php $this->widget('ext.LDGoogleAnalytics.LDGoogleAnalytics', Yii::app()->params['googleAnalytics']); ?>
	<div id="page">
		<div class="container">
			<div id="flowersLeft"></div>
			<div id="flowersRight"></div>
			<div id="header">
				<div id="logo">
					<img src="<?php echo Yii::app()->getTheme()->getImagesUrl('logo.png'); ?>" alt="{t}Logo{/t}" />
				</div>
				<div id="site-title"><?php echo t(Yii::app()->name); ?></div>
				<div id="language-menu"><?php $this->widget('modules.translate.widgets.acceptedLanguage.ALSelector'); ?></div>
				<?php if(!empty(MPTranslate::$messages) && Yii::app()->getUser()->getIsAdmin()): ?>
					<div id="translate-button">
						<?php echo Yii::app()->getComponent('translate')->translateLink('Missing Translations on Page', 'button'); ?>	
					</div>
				<?php endif; ?>
				<div id="mainmenu">
					<?php 
						$user = Yii::app()->getUser();
						$this->widget(
								'zii.widgets.CMenu', 
								array('items' => array(
										array('label' => '<span id="menu-home" title="'.t('Home').'"></span>',
												'url' => Yii::app()->createAbsoluteUrl('home/index')),
										array('label' => '<span id="menu-contact" title="'.t('Contact Us').'"></span>',
												'url' => Yii::app()->createAbsoluteUrl('home/contact')),
										array('label' => '<span id="menu-register" title="'.t('Register').'"></span>',
												'url' => Yii::app()->createAbsoluteUrl('user/register'),
												'visible' => $user->getIsGuest()),
										array('label' => '<span id="menu-login" title="'.t('Login').'"></span>',
												'url' => Yii::app()->createAbsoluteUrl('user/login'),
												'visible' => $user->getIsGuest()),
										array('label' => '<span id="menu-profile" title="'.t('Profile / Files').'"></span>',
												'url' => Yii::app()->createAbsoluteUrl('user/profile'),
												'visible' => !$user->getIsGuest()),
										array('label' => '<span id="menu-forum" title="'.t('Forum').'"></span>',
												'url' => Yii::app()->getComponent('phpBB')->getForumUrl(),
												'linkOptions' => array('target' => '_blank'),
												'visible' => !$user->getIsGuest()),
										array('label' => '<span id="menu-courses" title="'.t('Courses').'"></span>',
												'url' => Yii::app()->createAbsoluteUrl('course/index'),
												'visible' => !$user->getIsGuest()),
										array('label' => '<span id="menu-admin" title="'.t('Admin').'"></span>',
												'url' => Yii::app()->createAbsoluteUrl('admin/index'),
												'visible' => $user->getIsAdmin()),
										array('label' => '<span id="menu-logout" title="'.t('Logout').'"></span>',
												'url' => Yii::app()->createAbsoluteUrl('user/logout'),
												'visible' => !$user->getIsGuest())
									),
									'encodeLabel' => false
								)
						); 
					?>
				</div>
			</div>
			<!-- header -->
			<div id="content">
				<?php 
				$this->widget('zii.widgets.CBreadcrumbs', 
						array_merge(
							array('links' => $breadcrumbs), 
							$this->getModule() === null ? array() : 
								array('homeLink' => CHtml::link(t('Home'), $this->createUrl($this->getModule()->defaultController.'/')))
						)
				); 
				?>
				<!-- breadcrumbs -->
				<?php if(Yii::app()->getUser()->hasFlash('success')): ?>
						<div class="flash-success">
							<?php echo Yii::app()->getUser()->getFlash('success'); ?>
						</div>
				<?php endif; ?>		
				<?php if(Yii::app()->getUser()->hasFlash('notice')): ?>
						<div class="flash-notice">
							<?php echo Yii::app()->getUser()->getFlash('notice'); ?>
						</div>
				<?php endif; ?>
				<?php if(Yii::app()->getUser()->hasFlash('error')): ?>
						<div class="flash-error">
							<?php echo Yii::app()->getUser()->getFlash('error'); ?>
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
						<img src="<?php echo Yii::app()->getTheme()->getImagesUrl('logo-footer.jpg'); ?>" alt="{t}Logo{/t}" />
					</a>
				</div>
				<div id="footer-icons" class="icons">
					<a class="twitter" href="http://twitter.com/aginginaction" title="Twitter" rel="nofollow" target="_blank">
						Twitter
					</a>
					<a class="facebook" href="http://www.facebook.com/matherlifeways" title="Facebook" rel="nofollow" target="_blank">
						Facebook
					</a>
					<a class="pinterest" href="http://pinterest.com/" title="Pinterest" rel="nofollow" target="_blank">
						Pinterest
					</a>
					<a class="youtube" href="http://www.youtube.com/matherlifeways" title="YouTube" rel="nofollow" target="_blank">
						YouTube
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
	</div>
</body>
</html>