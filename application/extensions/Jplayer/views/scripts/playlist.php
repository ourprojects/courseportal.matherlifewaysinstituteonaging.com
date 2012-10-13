<?php 
// @ TODO support all options
echo "new jPlayerPlaylist({
		jPlayer: '$target',
		cssSelectorAncestor: '#jp_container_$id'
	}, ".CJavaScript::encode($files).", {
		supplied: '{$config['supplied']},
		swfPath: '{$config['swfPath']}',
	});";
?>