<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? lesscss('/_css/less/styles.less', '/_css/styles.css'); ?>
<? $title = "Drew McLellan"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main role="main">
        <header class="preface h-card">
            <h1 class="preface--title p-name">Drew McLellan</h1>
            <div class="preface--main">
                <p class="lede p-note">Drew McLellan is lead developer on your favourite small <span class="caps">CMS</span>, <a href="http://grabaperch.com/">Perch</a>. He is Director and Senior Developer at UK-based web development agency edgeofmyseat.com, and formerly Group Lead at the Web Standards Project. When not publishing 24 ways, Drew keeps a <a class="u-url" href="http://allinthehead.com/">personal site</a> covering web development issues and themes, <a href="http://flickr.com/drewm/">takes photos</a> and <a href="http://twitter.com/drewm">tweets a lot</a>.</p>
                <img class="preface--image u-photo" src="http://media.24ways.org/authors/drewmclellan280.jpg" width="280" height="280" alt="Drew McLellan"/>
            </div>
        </header><!--/.preface-->

        <section class="section" id="articles">
            <header class="section--header">
                <h1 class="section--title">Articles by Drew</h1>
            </header>
            <div class="section--main">
                <ul class="list list-articles">
                    <li class="list--item">
<?                      inc('partial','summary-article') ?>
                    </li>
                    <li class="list--item">
<?                      inc('partial','summary-article') ?>
                    </li>
                    <li class="list--item">
<?                      inc('partial','summary-article') ?>
                    </li>
                    <li class="list--item">
<?                      inc('partial','summary-article') ?>
                    </li>
                </ul><!--/.list-authors-->
            </div>
        </section><!--/.section-->
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>