<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "Starting Your HTML5 Project on the Right Foot (and Keeping It There)"; ?>
<? $section = "article"; ?>
<? $traverse = true; ?>
<? $theme = "year-2013"; ?>
<? if( !$ajax ) : ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>
<? inc('partial','menu') ?>

	<main class="main" role="main">
		<article class="article day-01">
			<header class="article_header">
				<h1 class="article_title p-name"><a href="/pages/YYYY/article/">Starting Your <abbr>HTML5</abbr> Project on the Right Foot (and Keeping It There)</a></h1>
				<a class="article_byline" href="#author">
					<span class="avatar"><img src="http://media.24ways.org/authors/drewmclellan280.jpg" width="160" height="160" alt="Drew McLellan"/></span>
					by Drew McLellen
				</a>
			</header>
<? endif ?>

			<section class="section" id="comments">
				<header class="section_header">
					<h1 class="section_title">11 Comments</h1>
				</header>
				<div class="section_main">
					<p>Comments are ordered by helpfulness, as indicated by you. Help us pick out the gems and discourage asshattery by voting on notable comments.</p>
					<p>Got something to add? You can leave a comment below.</p>

					<ol class="list list-comments">
						<li class="list_item">
<?						  inc('partial','summary-comment-unhelpful') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-comment-helpful') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-comment-helpful') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-comment-helpful') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-comment-helpful') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-comment-helpful') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-comment-helpful') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-comment-helpful') ?>
						</li>
					</ol>
				</div>
			</section>

			<form id="comment-form" method="post">
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
						<p class="field-buttons">
							<input type="hidden" name="parentID" id="parentID" value="289"/>
							<input type="hidden" name="parentTitle" id="parentTitle" value="HTML5 Video Bumpers"/>
							<input class="button button-submit" type="submit" name="submitComment" id="submitComment" value="Submit"/>
						</p>
					</div>
				</fieldset><!--/.section-->
			</form>

<? if( !$ajax ) : ?>
		</article><!--/.article-->
	</main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>
<? endif ?>