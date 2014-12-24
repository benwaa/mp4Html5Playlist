<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>My Playlist</title>
	<script type="text/javascript" src="js/build/jquery.js"></script>
	<script type="text/javascript" src="js/build/mediaelement-and-player.min.js"></script>
	<script type="text/javascript" src="js/playlist/mep-feature-playlist.js"></script>
	<link type="text/css" rel="stylesheet" href="js/build/mediaelementplayer.css" />
	<link type="text/css" rel="stylesheet" href="js/playlist/mep-feature-playlist.css" />
	<script>
	$(function(){
		$('video,audio').mediaelementplayer({
			loop: true,
			shuffle: true,
			playlist: true,
			audioHeight: 30,
			playlistposition: 'side',
			features: ['playlistfeature', 'prevtrack', 'playpause', 'nexttrack', 'loop', 
			'shuffle', 'playlist', 'current', 'progress', 'duration', 'volume', 'fullscreen'],
			keyActions: []
		});
	});
	</script>
</head>
<body>
	<div id="mediawrapper">
		<video id="MyPlaylist" type="video/mp4" controls="controls">
			<?php
				$dir="videos/";
				foreach (glob("{$dir}*.{mp4}", GLOB_BRACE) as $filename) {
					$pathParts = pathinfo($filename);
					//print_r($pathParts);
					echo sprintf('<Source src="%s" title="%s"></Source>',$filename, $pathParts['filename']);
				}
			?>
		</video>
	</div>
</body>
</html>