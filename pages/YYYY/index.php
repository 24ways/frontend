<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? lesscss('/_css/less/styles.less', '/_css/styles.css'); ?>
<? $title = "YYYY"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main role="main">
        <header class="preface">
            <h1 class="preface--title">YYYY</h1>
            <div class="preface--content">
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat, elit nec malesuada interdum, nibh erat convallis turpis, vel mollis mi sem ac arcu.</p>
            </div>
        </header><!--/.preface-->

        <ol class="list list-articles">
            <li>
                <article class="summary summary-article h-entry" data-href="/pages/YYYY/article/">
                    <header class="summary--header">
                        <h1 class="summary--title p-name"><a href="/pages/YYYY/article/">Ignorance Is Bliss</a></h1>
                        <time class="summary--meta dt-published" class="pubdate" datetime="2010-12-15T00:00:00-00:00">1 December 2010</time>
                    </header>
                    <div class="summary--main">
                        <p class="p-summary"><a href="http://stuffandnonsense.co.uk/">Andy Clarke</a> shares a case study highlighting the benefits of progressively enhanced web design.</p>
                    </div>
                    <footer class="summary--header">
                        <a class="p-author h-card" href="/pages/authors/firstname-lastname/"><img src="http://media.24ways.org/authors/andyclarke160.jpg" alt=""/></a>
                    </footer>
                </article>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
            <li>
<?              inc('partial','summary-article') ?>
            </li>
        </ol><!--/.list-articles-->
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>