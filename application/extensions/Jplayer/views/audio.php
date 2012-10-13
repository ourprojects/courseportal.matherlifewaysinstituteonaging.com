<div id="<?php echo substr($target, 1); ?>" class="jp-jplayer"></div>

<div id="<?php echo substr($cssSelectorAncestor, 1); ?>" class="jp-audio">
	<div class="jp-type-single">
		<div class="<?php echo substr($cssSelector['gui'], 1); ?> jp-interface">
			<ul class="jp-controls">
				<li><a href="javascript:;" class="<?php echo substr($cssSelector['play'], 1); ?>" tabindex="1"><?php echo Yii::t(Jplayer::$componentId, 'Play'); ?></a></li>
				<li><a href="javascript:;" class="<?php echo substr($cssSelector['pause'], 1); ?>" tabindex="1"><?php echo Yii::t(Jplayer::$componentId, 'Pause'); ?></a></li>
				<li><a href="javascript:;" class="<?php echo substr($cssSelector['stop'], 1); ?>" tabindex="1"><?php echo Yii::t(Jplayer::$componentId, 'Stop'); ?></a></li>
				<li><a href="javascript:;" class="<?php echo substr($cssSelector['mute'], 1); ?>" tabindex="1" title="<?php echo Yii::t(Jplayer::$componentId, 'Mute'); ?>"><?php echo Yii::t(Jplayer::$componentId, 'Mute'); ?></a></li>
				<li><a href="javascript:;" class="<?php echo substr($cssSelector['unmute'], 1); ?>" tabindex="1" title="<?php echo Yii::t(Jplayer::$componentId, 'Unmute'); ?>"><?php echo Yii::t(Jplayer::$componentId, 'Unmute'); ?></a></li>
				<li><a href="javascript:;" class="<?php echo substr($cssSelector['volumeMax'], 1); ?>" tabindex="1" title="<?php echo Yii::t(Jplayer::$componentId, 'Max Volume'); ?>"><?php echo Yii::t(Jplayer::$componentId, 'Max Volume'); ?></a></li>
			</ul>
			<div class="jp-progress">
				<div class="<?php echo substr($cssSelector['seekBar'], 1); ?>">
					<div class="<?php echo substr($cssSelector['playBar'], 1); ?>"></div>
				</div>
			</div>
			<div class="<?php echo substr($cssSelector['volumeBar'], 1); ?>">
				<div class="<?php echo substr($cssSelector['volumeBarValue'], 1); ?>"></div>
			</div>
			<div class="<?php echo substr($cssSelector['currentTime'], 1); ?>"></div>
			<div class="<?php echo substr($cssSelector['duration'], 1); ?>"></div>
			<ul class="jp-toggles">
				<li><a href="javascript:;" class="<?php echo substr($cssSelector['repeat'], 1); ?>" tabindex="1" title="<?php echo Yii::t(Jplayer::$componentId, 'Repeat'); ?>"><?php echo Yii::t(Jplayer::$componentId, 'Repeat'); ?></a></li>
				<li><a href="javascript:;" class="<?php echo substr($cssSelector['repeatOff'], 1); ?>" tabindex="1" title="<?php echo Yii::t(Jplayer::$componentId, 'Repeat Off'); ?>"><?php echo Yii::t(Jplayer::$componentId, 'Repeat Off'); ?></a></li>
			</ul>
		</div>
		<div class="jp-title">
			<ul>
				<li></li>
			</ul>
		</div>
		<div class="<?php echo substr($cssSelector['noSolution'], 1); ?>">
			<span><?php echo Yii::t(Jplayer::$componentId, 'Update Required'); ?></span>
			<?php echo Yii::t(Jplayer::$componentId, 'To play the media you will need to either update your browser to a recent version or update your'); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo Yii::t(Jplayer::$componentId, 'Flash plugin'); ?></a>.
		</div>
	</div>
</div>