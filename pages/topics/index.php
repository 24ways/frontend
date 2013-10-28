<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? lesscss('/_css/less/styles.less', '/_css/styles.css'); ?>
<? $title = "Topics"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main role="main">
        <header class="preface">
            <h1 class="preface--title">Topics</h1>
        </header>

        <ul class="list topics">
            <li>
<?              inc('partial','summary-topic') ?>
            </li>
            <li>
<?              inc('partial','summary-topic') ?>
            </li>
            <li>
<?              inc('partial','summary-topic') ?>
            </li>
            <li>
<?              inc('partial','summary-topic') ?>
            </li>
            <li>
<?              inc('partial','summary-topic') ?>
            </li>
            <li>
<?              inc('partial','summary-topic') ?>
            </li>
        </ul>
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>