<?php 
$clientScript = Yii::app()->getClientScript();
$theme = Yii::app()->getTheme();
$language = Yii::app()->getLanguage();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset; ?>" />
	<meta name="language" content="<?php echo $language; ?>" />
	<link rel="shortcut icon" href="<?php echo $theme->getImagesUrl('favicon.ico'); ?>" />
	<!-- blueprint CSS framework -->
	<!--[if lt IE 8]>
	<?php echo CHtml::cssFile($theme->getStylesUrl('ie.css'), 'screen, projection'); ?>
	<![endif]-->
	<?php
	$clientScript->registerCssFile($theme->getStylesUrl('screen.css'), 'screen, projection');
	$clientScript->registerCssFile($theme->getStylesUrl('print.css'), 'print');
	$clientScript->registerCssFile($theme->getStylesUrl('form.css'));
	$clientScript->registerCssFile($theme->getStylesUrl('main.css'));
	$clientScript->registerScriptFile($theme->getScriptsUrl('main.js'), CClientScript::POS_HEAD); 
	?>
	<title>
		<?php
		$this->pageTitle = t(Yii::app()->name);

		$breadcrumbs = property_exists($this, 'breadcrumbs') ? $this->breadcrumbs : array();

		foreach(is_array($breadcrumbs) ? $breadcrumbs : array($breadcrumbs) as $label => $url)
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
	<!-- BEGIN PAGE -->
	<div id="page">
		<div id="flowersLeft" style="background-image: url('<?php echo $theme->getImagesUrl('bgleft.png'); ?>');"></div>
		<div id="flowersRight" style="background-image: url('<?php echo $theme->getImagesUrl('bgright.png'); ?>');"></div>
		<!-- BEGIN HEADER -->
		<div id="header" class="container">
			<div class="logo">
				<img src="<?php echo $theme->getImagesUrl('logo.png'); ?>" alt="{t}Logo{/t}" />
			</div>
			<div id="site-title">
				<?php echo t(Yii::app()->name); ?>
			</div>
			<div id="language-menu">
				<?php $this->widget('modules.translate.widgets.acceptedLanguage.ALSelector'); ?>
			</div>
			<?php if(Yii::app()->getUser()->checkAccess('Translate.MissingOnPage') && Yii::app()->getComponent('translate')->hasMissingTranslations()): ?>
				<div id="translate-button">
					<?php echo Yii::app()->getComponent('translate')->translateLink('{t}Missing Translations on Page{/t}', 'button'); ?>
				</div>
			<?php endif; ?>
			<div id="mainmenu">
				<?php
					$user = Yii::app()->getUser();
					$this->widget(
							'zii.widgets.CMenu',
							array('items' => array(
									array('label' => '<span id="menu-home" title="{t}Home{/t}"></span>',
											'url' => Yii::app()->createUrl('/home/index')),
									array('label' => '<span id="menu-contact" title="{t}Contact Us{/t}"></span>',
											'url' => Yii::app()->createUrl('/home/contact')),
									array('label' => '<span id="menu-register" title="{t}Register{/t}"></span>',
											'url' => Yii::app()->createUrl('/user/register'),
											'visible' => $user->getIsGuest()),
									array('label' => '<span id="menu-login" title="{t}Login{/t}"></span>',
											'url' => Yii::app()->createUrl('/user/login'),
											'visible' => $user->getIsGuest()),
									array('label' => '<span id="menu-profile" title="{t}Profile / Files{/t}"></span>',
											'url' => Yii::app()->createUrl('/user/profile'),
											'visible' => !$user->getIsGuest()),
									array('label' => '<span id="menu-forum" title="{t}Forum{/t}"></span>',
											'url' => Yii::app()->getComponent('phpBB')->getForumUrl(),
											'linkOptions' => array('target' => '_blank'),
											'visible' => !$user->getIsGuest()),
									array('label' => '<span id="menu-courses" title="{t}Courses{/t}"></span>',
											'url' => Yii::app()->createUrl('/course'),
											'visible' => !$user->getIsGuest()),
									array('label' => '<span id="menu-admin" title="{t}Admin{/t}"></span>',
											'url' => Yii::app()->createUrl('/admin'),
											'visible' => $user->checkAccess('Admin.Admin')),
									array('label' => '<span id="menu-logout" title="{t}Logout{/t}"></span>',
											'url' => Yii::app()->createUrl('/user/logout'),
											'visible' => !$user->getIsGuest())
								),
								'encodeLabel' => false
							)
					);
				?>
			</div>
		</div>
		<!-- END HEADER -->
		<!-- BEGIN CONTENT -->
		<div id="content" class="container">
			<?php
			$this->widget('zii.widgets.CBreadcrumbs',
					array_merge(
						array('links' => $breadcrumbs),
						array('homeLink' => CHtml::link('{t}Home{/t}', $this->getModule() === null ? Yii::app()->homeUrl : $this->createUrl($this->getModule()->defaultController.'/')))
					)
			);
			?>
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
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN FOOTER -->
		<div id="footer" style="background-image: url('<?php echo $theme->getImagesUrl('bg-foot.jpg'); ?>');">
			<div class="container">
				<div class="logo">
					<a href="http://www.matherlifewaysinstituteonaging.com/" target="_blank" title="{t}Mather LifeWays Institute on Aging{/t}">
						<img src="<?php echo $theme->getImagesUrl('logo-footer.jpg'); ?>" alt="{t}Logo{/t}" />
					</a>
				</div>
				<div id="icons">
					<a class="twitter" href="http://twitter.com/aginginaction" title="{t}Twitter{/t}" rel="nofollow" target="_blank"
						style="background-image: url('<?php echo $theme->getImagesUrl('icon-twitter.png'); ?>');
						-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; ">
					</a>
					<a class="linkedin" href="http://www.linkedin.com/in/kenadams60201" title="{t}LinkedIn{/t}" rel="nofollow" target="_blank"
						style="background-image: url('<?php echo $theme->getImagesUrl('icon-linkedin.png'); ?>');">
					</a>
					<a class="youtube" href="http://www.youtube.com/matherlifeways" title="{t}YouTube{/t}" rel="nofollow" target="_blank"
						style="background-image: url('<?php echo $theme->getImagesUrl('icon-youtube.png'); ?>');">
					</a>
				</div>
				<div id="copyright">
					<ul>
						<li>{t}P: (847) 492.7500 | F: (847) 492.6789{/t}</li>
						<li>{t}1603 Orrington Avenue; Suite 1800 | Evanston; IL 60201{/t}</li>
						<li>{t}&copy; Copyright 2013 Mather LifeWays&reg;{/t}</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END FOOTER -->
	</div>
	<!-- END PAGE -->
</body>
</html>