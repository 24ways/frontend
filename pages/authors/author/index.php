<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<!DOCTYPE html>
<html lang="en-gb">

<head>
    <title>Drew McLellan &#9670; 24 Ways</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/24ways"/>
    <link rel="stylesheet" type="text/css" href="/_css/styles.css"/>
</head>

<body>
<?  inc('partial','banner') ?>

    <main role="main">
        <header>
            <h1>Drew McLellan</h1>
        <header>
        <img src="http://media.24ways.org/authors/drewmclellan280.jpg" width="280" height="280" alt="Drew McLellan"/>
        <p class="lede">Drew McLellan is lead developer on your favourite small <span class="caps">CMS</span>, <a href="http://grabaperch.com/">Perch</a>. He is Director and Senior Developer at UK-based web development agency edgeofmyseat.com, and formerly Group Lead at the Web Standards Project. When not publishing 24 ways, Drew keeps a <a href="http://allinthehead.com/">personal site</a> covering web development issues and themes, <a href="http://flickr.com/drewm/">takes photos</a> and <a href="http://twitter.com/drewm">tweets a lot</a>.</p>

        <section id="articles">
            <h1>Articles by Drew</h1>
            <ol class="list articles">
                <li>
<?                  inc('partial','summary-article') ?>
                </li>
                <li>
<?                  inc('partial','summary-article') ?>
                </li>
                <li>
<?                  inc('partial','summary-article') ?>
                </li>
                <li>
<?                  inc('partial','summary-article') ?>
                </li>
            </ol>
        </section>
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
</body>
</html>