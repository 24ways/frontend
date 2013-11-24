<?
	lesscss('/_assets/css/less/styles.less', '/_assets/css/styles.css'); // Compile LESS CSS
?>
<!DOCTYPE html>
<html lang="en-gb">

<head>
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	
	<script>
		// Cut the mustard
		if (document.querySelector && window.addEventListener) {
			document.documentElement.className += ' js-enhanced';
			var enhanced = true;
		} else {
			var enhanced = false;
		}

		// Dectect support for SVG
		if(document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1")) {
			document.documentElement.className += ' svg';
		}
	</script>
<!--[if lt IE 9]>
	<script src="/_assets/js/html5shiv.min.js"></script>
<![endif]-->

	<link rel="stylesheet" type="text/css" href="/_assets/css/styles.css"/>
	<link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/24ways"/>
	<link rel="icon" href="/_assets/icons/favicon.png" type="image/png"/>
	<link rel="apple-touch-icon-precomposed" href="/_assets/icons/apple-touch-icon.png"/>
	<link rel="author" href="/humans.txt"/>

	<meta charset="utf-8"/>
	<meta name="robots" content="index, follow"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="application-name" content="24 ways">
	<meta name="apple-mobile-web-app-title" content="24 ways"/>
	<meta name="twitter:site" content="@24ways">
	<meta name="twitter:title" content="<?= $GLOBALS['title'] ?>"/>
	<meta name="twitter:description" content="<?= $GLOBALS['description'] ?>"/>
	<meta name="twitter:creator" content="@authorname">
	<meta name="twitter:card" content="summary">

	<title><?= $GLOBALS['title'] ?> &#9670; 24 ways</title>
</head>

<body<? if(isset($GLOBALS['theme'])): ?> class="<?= $GLOBALS['theme']; ?>"<? endif ?>>
