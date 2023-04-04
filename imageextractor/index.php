<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ImageAbstractor</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>

<body>

	<?php
		require 'vendor/autoload.php';		
		use League\ColorExtractor\Color;
		use League\ColorExtractor\ColorExtractor;
		use League\ColorExtractor\Palette;

	?>

	<header class="masthead">
		<div class="site-branding">
			<h1 class="site-title">ImageAbstractor</h1>
			<p class="site-description">Pull the most dominant colors from an image.</p>
		</div><!-- .site-title -->
	</header><!-- .masthead -->

	<section class="the-grid">

		<ul class="colors">

			<?php

				$palette = Palette::fromFilename('images/bricks.jpg');

				foreach($palette as $color => $count) {
					// colors are represented by integers
					echo Color::fromIntToHex($color), ': ', $count, "\n";
				}

			?>

		</ul>

	</section><!-- .the-grid -->

</body>

</html>

