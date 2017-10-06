<html>
	<head>
		<title>Youtube Video Feed Example</title>
	</head>
	<body>
		<section id="page-content" class="">
		<?php

		foreach ($xmlFeed->entry as $entry) {

		?>
			<article class="col-xs-12 archive-video">   
					
					<a href="<?php echo $videoLink = $entry->link->attributes()['href']; ?>" target="_blank" />
						<img src="<?php echo $thumbnailAttributes = $entry->children('media', true)->group->thumbnail->attributes()['url']; ?>" alt="<?php echo $entry->children('media', true)->group->title; ?>" />
					</a>
					<div class="video-info">
						<h2>
							<a href="<?php echo $videoLink = $entry->link->attributes()['href']; ?>" class="video-link" target="_blank" /><?php echo $entry->children('media', true)->group->title; ?></a>
						</h2>
						<?php echo $entry->children('media', true)->group->description; ?>
					</div>
			</article>

		<?php } ?>
		</section>
	<body>
<html>