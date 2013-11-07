<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? lesscss('/_css/less/styles.less', '/_css/styles.css'); ?>
<? $title = "2013"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main class="main" role="main">
        <header class="preface">
            <h1 class="preface_title">2013</h1>
            <div class="preface_main">
                <p class="lede"><cite>24 ways</cite> is the advent calendar for web geeks. Each day throughout December we publish a daily dose of web design and development goodness to bring you all a little Christmas cheer. <a href="/pages/about/">Learn more</a></p>
            </div>
        </header><!--/.preface-->

        <ol class="list list-articles">
            <li class="list_item">
                <article class="summary summary-article h-entry" data-href="/pages/YYYY/article/">
                    <header class="summary_header">
                        <h1 class="summary_title p-name"><a href="/pages/YYYY/article/">Ignorance Is Bliss</a></h1>
                        <time class="summary_meta dt-published" class="pubdate" datetime="2010-12-15T00:00:00-00:00">1 December 2010</time>
                    </header>
                    <div class="summary_main">
                        <p class="p-summary"><a href="http://stuffandnonsense.co.uk/">Andy Clarke</a> shares a case study highlighting the benefits of progressively enhanced web design.</p>
                    </div>
                    <footer class="summary_header">
                        <a class="p-author h-card" href="/pages/authors/firstname-lastname/"><img src="http://media.24ways.org/authors/andyclarke160.jpg" alt=""/></a>
                    </footer>
                </article><!--/.summary-article-->
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-day') ?>
            </li>
        </ol><!--/.list-articles-->
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>