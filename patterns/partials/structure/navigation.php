    <nav class="navigation" role="navigation" id="menu">
        <h1 class="hidden">Browse 24 ways</h1>
<?      if (isset($GLOBALS['traverse'])): ?>
        <div class="nav nav-traverse">
<?          if ($GLOBALS['section'] == "archives"): ?>
            <a class="nav_item nav_prev" rel="prev" href="/pages/YYYY/" title="[YYYY-1]" data-icon="&#xe601;">Previous year</a>
            <a class="nav_item nav_next" rel="next" href="/pages/YYYY/" title="[YYYY+1]" data-icon="&#xe602;">Next year</a>
<?          endif ?>
<?          if ($GLOBALS['section'] == "authors"): ?>
            <a class="nav_item nav_prev" rel="prev" href="/pages/authors/authorname/" title="[Previous Author Name]" data-icon="&#xe601;">Previous author</a>
            <a class="nav_item nav_next" rel="next" href="/pages/authors/authorname/" title="[Next Author Name]" data-icon="&#xe602;">Next author</a>
<?          endif ?>
<?          if ($GLOBALS['section'] == "topics"): ?>
            <a class="nav_item nav_prev" rel="prev" href="/pages/topics/topicname/" title="[Previous Topic Name]" data-icon="&#xe601;">Previous topic</a>
            <a class="nav_item nav_next" rel="next" href="/pages/topics/topicname/" title="[Next Topic Name]" data-icon="&#xe602;">Next topic</a>
<?          endif ?>
<?          if ($GLOBALS['section'] == "article"): ?>
            <a class="nav_item nav_prev" rel="prev" href="/pages/YYYY/article/" title="[Previous Article Title]" data-icon="&#xe601;">Previous article</a>
            <a class="nav_item nav_next" rel="next" href="/pages/YYYY/article/" title="[Next Article Title]" data-icon="&#xe602;">Next article</a>
<?          endif ?>
        </div><!--/.nav-traverse-->
<?      endif ?>

        <ul class="nav nav-topics">
            <li class="nav_item"><a href="/pages/topics/topicname" data-icon="&#xe604;">Business</a></li>
            <li class="nav_item"><a href="/pages/topics/topicname" data-icon="&#xe605;">Code</a></li>
            <li class="nav_item"><a href="/pages/topics/topicname" data-icon="&#xe606;">Content</a></li>
            <li class="nav_item"><a href="/pages/topics/topicname" data-icon="&#xe607;">Design</a></li>
            <li class="nav_item"><a href="/pages/topics/topicname" data-icon="&#xe608;">Process</a></li>
            <li class="nav_item"><a href="/pages/topics/topicname" data-icon="&#xe609;">UX</a></li>
        </ul><!--/.nav-topics-->

        <form class="search" role="search" id="search" action="/pages/search/">
            <fieldset class="field-search">
                <label class="field_label label" for="q">Search</label>
                <input class="field_input input" type="search" name="q" placeholder="e.g. CSS, Design, Research&#8230;"/>
                <input class="field_button button" type="submit" value="Search"/>
            </fieldset>
        </form><!--/.search-->

        <ul class="nav nav-site">
            <li class="nav_item<? if ($GLOBALS['section'] == "archives"): ?> is-active<? endif ?>"><a href="/pages/archives/">Archives</a></li>
            <li class="nav_item<? if ($GLOBALS['section'] == "topics"): ?> is-active<? endif ?>"><a href="/pages/topics/">Topics</a></li>
            <li class="nav_item<? if ($GLOBALS['section'] == "authors"): ?> is-active<? endif ?>"><a href="/pages/authors/">Authors</a></li>
            <li class="nav_item<? if ($GLOBALS['section'] == "about"): ?> is-active<? endif ?>"><a href="/pages/about/">About</a></li>
        </ul><!--/.nav-site-->

        <a class="nav nav-top" href="#top" data-icon="&#xe603;">Return to the top of this page</a>
    </nav><!--/@navigation-->
