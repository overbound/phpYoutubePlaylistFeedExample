<?php	
	$xmlFeed=simplexml_load_file('https://www.youtube.com/feeds/videos.xml?playlist_id=PL1mm1FfX5EHRJj-JaovbTWZR9nXjobuOZ')
	or die("Cannot load YouTube video feed, please try again later.");
	
	include("templates/VideoTemplate.php");

?>