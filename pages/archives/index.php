<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? lesscss('/_css/less/styles.less', '/_css/styles.css'); ?>
<? $title = "Archives"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main role="main">
        <header class="preface">
            <h1 class="preface--title">Archives</h1>
        </header><!--/.preface-->

<?      inc('partial','section-year') ?>
<?      inc('partial','section-year') ?>
<?      inc('partial','section-year') ?>
<?      inc('partial','section-year') ?>
<?      inc('partial','section-year') ?>
<?      inc('partial','section-year') ?>
<?      inc('partial','section-year') ?>
<?      inc('partial','section-year') ?>
<?      inc('partial','section-year') ?>
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>