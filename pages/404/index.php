<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "About"; ?>
<? $section = "about"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main class="main" role="main">
        <article class="article">
            <header class="preface">
                <h1 class="preface_title">404</h1>
            </header><!--/.preface-->

            <section class="section" id="sectionname">
                <header class="section_header">
                    <h1 class="section_title">Page not found</h1>
                </header>
                <div class="section_main">
                    <p class="lede">Sorry, but we can&#8217;t find that page.</p>
                    <p>The page you requested wasn&#8217;t found in the location specified. You may have an incorrect <abbr title="Uniform Resouce Locator">URL</abbr>, or the file could have been moved or renamed.</p>
                    <p>If you&#8217;re having problems finding a particular page, try searching the site or return to the homepage.</p>
                </div>
            </section><!--/.section-->

            <form id="comment" method="post">
                <fieldset class="section">
                    <legend class="section_header">
                        <span class="section_title">Search 24 Ways</span>
                    </legend>
                    <div class="section_main">
                        <p class="search field">
                            <label class="search_label field_label label" for="q">Search</label>
                            <input class="search_input field_input input" type="search" name="q" placeholder="e.g. CSS, Design, Research&#8230;"/>
                            <input class="search_button field_button button" type="submit" value="Search"/>
                        </p>
                    </div>
                </fieldset><!--/.section-->
            </form>
        </article><!--/.article-->
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>