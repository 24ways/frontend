<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? lesscss('/_css/less/styles.less', '/_css/styles.css'); ?>
<? $title = "Drew McLellan"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main role="main">
        <header class="preface">
            <h1 class="preface--title">Drew McLellan</h1>
            <div class="preface--main">
                <p class="lede">Drew McLellan is lead developer on your favourite small <span class="caps">CMS</span>, <a href="http://grabaperch.com/">Perch</a>. He is Director and Senior Developer at UK-based web development agency edgeofmyseat.com, and formerly Group Lead at the Web Standards Project. When not publishing 24 ways, Drew keeps a <a href="http://allinthehead.com/">personal site</a> covering web development issues and themes, <a href="http://flickr.com/drewm/">takes photos</a> and <a href="http://twitter.com/drewm">tweets a lot</a>.</p>
                <img src="http://media.24ways.org/authors/drewmclellan280.jpg" width="280" height="280" alt="Drew McLellan"/>
            </div>
        </header><!--/.preface-->

        <section class="section" id="articles">
            <h1 class="section--title">Articles by Drew</h1>
            <ol class="list list-articles">
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
            </ol><!--/.list-articles-->
        </section>
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>