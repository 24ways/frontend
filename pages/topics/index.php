<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "Topics"; ?>
<? $section = "topics"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main class="main" role="main">
        <section class="index">
            <header class="preface">
                <h1 class="preface_title">Topics</h1>
            </header><!--/.preface-->

<?          inc('partial','section-topic') ?>
<?          inc('partial','section-topic') ?>
<?          inc('partial','section-topic') ?>
<?          inc('partial','section-topic') ?>
<?          inc('partial','section-topic') ?>
<?          inc('partial','section-topic') ?>
        </section><!--/.index-->
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>