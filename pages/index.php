<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? lesscss('/_css/less/styles.less', '/_css/styles.css'); ?>
<? $title = "2013"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main role="main">
        <header class="preface">
            <h1 class="preface--title">2013</h1>
            <p class="lede"><cite>24 ways</cite> is the advent calendar for web geeks. Each day throughout December we publish a daily dose of web design and development goodness to bring you all a little Christmas cheer. <a href="/pages/about/">Learn more</a></p>
        </header>

        <ol class="list articles">
            <li>
                <article class="summary summary-article h-entry" data-href="/pages/YYYY/article/">
                    <header class="summary--header">
                        <h1 class="summary--title p-name"><a href="/pages/YYYY/article/">Ignorance Is Bliss</a></h1>
                        <time class="summary--meta dt-published" class="pubdate" datetime="2010-12-15T00:00:00-00:00">1 December 2010</time>
                    </header>
                    <p class="summary--content p-summary"><a href="http://stuffandnonsense.co.uk/">Andy Clarke</a> shares a case study highlighting the benefits of progressively enhanced web design.</p>
                    <footer>
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
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
            <li>
<?              inc('partial','summary-hidden') ?>
            </li>
        </ol>
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>