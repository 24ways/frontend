<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "Starting Your HTML5 Project on the Right Foot (and Keeping It There)"; ?>
<? $section = "article"; ?>
<? $traverse = true; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main class="main" role="main">
        <article class="article">
            <header class="article_header">
                <h1 class="article_title p-name"><a href="/pages/YYYY/article/">Starting Your <abbr>HTML5</abbr> Project on the Right Foot (and Keeping It There)</a></h1>
                <a class="article_byline" href="#author">
                    <span class="avatar"><img src="http://media.24ways.org/authors/drewmclellan280.jpg" width="160" height="160" alt="Drew McLellan"/></span>
                    by Drew McLellen
                </a>
            </header>

            <section class="section" id="comments">
                <header class="section_header">
                    <h1 class="section_title">11 Comments</h1>
                </header>
                <div class="section_main">
                    <p>Comments are ordered by helpfulness, as indicated by you. Help us pick out the gems and discourage asshattery by voting on notable comments.</p>
                    <p>Got something to add? You can leave a comment below.</p>

                    <ol class="list list-comments">
                        <li class="list_item">
                            <article class="summary summary-comment" id="c00000">
                                <header class="summary_header">
                                    <h1 class="summary_title">
                                        <a class="p-name" href="http://paulrobertlloyd.com/">
                                            <span class="avatar"><img src="//www.gravatar.com/avatar/d208a4fdb8295873194546b31a0ab89f?s=96&#38;d=http%3A%2F%2Fmedia.24ways.org%2Fimg%2Fgravatar.png" width="64" height="64"/></span>
                                            Paul Robert Lloyd
                                        </a>
                                    </h1>
                                    <p class="summary_meta">
                                        <a rel="bookmark" href="#c04962" title="Permalink to this comment"><time class="dt-published" datetime="2012-12-01T12:24:48-00:00">1 December 2012</time></a>
                                    </p>
                                </header>
                                <div class="summary_main">
                                    <p>You&#8217;re an idiot! Everything you have written here is wrong!</p>
                                </div>
                                <footer class="summary_footer">
                                    <p class="summary_vote">
                                        This comment was <a href="/vote/up/c4962/">helpful</a> / <a href="/vote/down/c4962/">unhelpful</a>
                                    </p>
                                </footer>
                            </article><!--/.summary-comment-->
                        </li>
                        <li class="list_item">
<?                          inc('partial','summary-comment') ?>
                        </li>
                        <li class="list_item">
<?                          inc('partial','summary-comment') ?>
                        </li>
                        <li class="list_item">
<?                          inc('partial','summary-comment') ?>
                        </li>
                        <li class="list_item">
<?                          inc('partial','summary-comment') ?>
                        </li>
                        <li class="list_item">
<?                          inc('partial','summary-comment') ?>
                        </li>
                        <li class="list_item">
<?                          inc('partial','summary-comment') ?>
                        </li>
                        <li class="list_item">
<?                          inc('partial','summary-comment') ?>
                        </li>
                    </ol><!--/.list-comments-->
                </div>
            </section><!--/section-->

            <form id="comment" method="post">
                <fieldset class="section">
                    <legend class="section_header">
                        <span class="section_title">Impress us</span>
                    </legend>
                    <div class="section_main">
                        <p>Be friendly / use <a href="http://www.textism.com/tools/textile/">Textile</a></p>
                        <p class="field">
                            <label class="field_label label" for="commentName">Name</label>
                            <input class="field_input input" id="commentName" name="commentName" type="text" autocorrect="off" required="required"/>
                        </p>
                        <p class="field">
                            <label class="field_label label" for="commentEmail">Email</label>
                            <input class="field_input input" id="commentEmail" name="commentEmail" type="email" autocorrect="off" required="required"/>
                        </p>
                        <p class="field">
                            <label class="field_label label" for="commentURL">Website</label>
                            <input class="field_input input" id="commentURL" name="commentURL" type="url" autocorrect="off" placeholder="http://"/>
                        </p>
                        <p class="field">
                            <label class="field_label label" for="commentHTML">Message</label>
                            <textarea class="field_input input" id="commentHTML" name="commentHTML" cols="25" rows="12" required="required"></textarea>
                        </p>
                        <p>
                            <input type="hidden" name="parentID" id="parentID" value="289"/>
                            <input type="hidden" name="parentTitle" id="parentTitle" value="HTML5 Video Bumpers"/>
                            <input class="button button-submit" type="submit" name="submitComment" id="submitComment" value="Submit"/>
                        </p>
                    </div>
                </fieldset><!--/.section-->
            </form>
        </article><!--/.article-->
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>