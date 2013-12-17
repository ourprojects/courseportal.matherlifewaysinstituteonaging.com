<?php $this->breadcrumbs = array('{t}Online Courses - Work/Life Balance{/t}'); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-courses.png'); ?>);">
	<h1 class="bottom">{t}Online Courses - Work/Life Balance{/t}</h1>
</div>
<div id="single-column">
	<h2 class="flowers">{t}Online Courses - Work/Life Balance{/t}</h2>
	<p>{t}To help individual caregivers transition into their role, be better prepared to manage their care recipients needs, and learn how to effectively practice self-care, Mather LifeWays Institute on Aging has developed online programs that are designed to educate caregivers while fitting into any schedule.{/t}</p>
	<hr />

	<h3>
		<?php echo CHtml::link(t($course->title), $this->createUrl($course->name)); ?>
	</h3>
	<p>
		<?php echo t($course->description); ?>
	</p>
	<h4>{t}Objectives{/t}</h4>
	<ul>
		<?php 
		foreach($course->objectives as $objective)
			echo '<li>' . t($objective->text) . '</li>';
		?>
	</ul>
<?php endforeach ?>
	<hr />
</div>
