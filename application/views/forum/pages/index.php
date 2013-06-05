<?php $this->breadcrumbs = array(t('Forum')); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-forum.png'); ?>);">
	<h1 class="bottom">{t}Forum{/t}</h1>
</div>

<div id="single-column">

	<h2 class="flowers">
			{t}Coming Soon: Testomonial Page and Forum{/t}</h2>
	<p>{t}Please visit this website at a later date. We are creating a testimonials page and forum for users and visitors.{/t}</p><br><br><br><br>
<iframe src="<?php echo Yii::app()->request->baseUrl; ?>/phpBB" height="700" width="100%"></iframe>
</div>