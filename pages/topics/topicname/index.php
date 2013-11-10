<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "Design"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main class="main" role="main">
        <header class="preface">
            <h1 class="preface_title">Design</h1>
            <div class="preface_main">
                <p class="lede">Visual communication, art direction. Web layouts and typography. Graphic design, interface design, user experience design, illustration, photography, artwork. Creative, strategic, and technical approaches to crafting great interfaces. Visual styles, influences, and trends.</p>
                <img class="preface_image" src="http://dummyimage.com/280x280/333/666.png" width="280" height="280" alt="Drew McLellan"/>
            </div>
        </header><!--/.preface-->

        <ol class="list list-articles">
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
<?              inc('partial','summary-article') ?>
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
<?              inc('partial','summary-article') ?>
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
<?              inc('partial','summary-article') ?>
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
<?              inc('partial','summary-article') ?>
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
<?              inc('partial','summary-article') ?>
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
<?              inc('partial','summary-article') ?>
            </li>
        </ol><!--/.list--articles-->
        <a class="button button-more" href="?page=2">Show me another 24 ways</a>

        <footer class="main_footer">
            <nav class="nav nav-prevnext">
                <h1 class="hidden">Browse topics</h1>
                <a class="nav_item nav_prev" rel="prev" href="/pages/topics/topicname/" title="[Previous Topic Name]">Previous topic</a>
                <a class="nav_item nav_next" rel="next" href="/pages/topics/topicname/" title="[Next Topic Name]">Next topic</a>
            </nav><!--/.nav-prevnext-->
        </footer>
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>