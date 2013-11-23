<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "2013"; ?>
<? $section = "home"; ?>
<? $theme = "year-2013"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>
<? inc('partial','menu') ?>

	<main class="main" role="main">
		<section class="index">
			<header class="preface">
				<h1 class="preface_title">2013</h1>
				<div class="preface_main">
					<p class="lede"><cite>24 ways</cite> is the advent calendar for web geeks. Each day throughout December we publish a daily dose of web design and development goodness to bring you all a little Christmas cheer. <a href="/pages/about/">Learn more</a></p>
				</div>
			</header><!--/.preface-->

			<ol class="list list-articles">
				<li class="list_item">
<?				  inc('partial','summary-article') ?>
				</li>
				<li class="list_item">
<?				  inc('partial','summary-article') ?>
				</li>
				<li class="list_item">
<?				  inc('partial','summary-article') ?>
				</li>
				<li class="list_item">
<?				  inc('partial','summary-article') ?>
				</li>
				<li class="list_item">
<?				  inc('partial','summary-article') ?>
				</li>
				<li class="list_item">
<?				  inc('partial','summary-article') ?>
				</li>
			</ol><!--/.list-articles-->
		</section>
	</main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>