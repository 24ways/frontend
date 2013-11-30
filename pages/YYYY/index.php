<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "YYYY"; ?>
<? $section = "archives"; ?>
<? $traverse = true; ?>
<? $theme = "year-2013"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>
<? inc('partial','menu') ?>

	<main class="main" role="main">
		<section class="index">
			<header class="preface">
				<h1 class="preface_title">YYYY</h1>
				<div class="preface_main">
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat, elit nec malesuada interdum, nibh erat convallis turpis, vel mollis mi sem ac arcu.</p>
				</div>
			</header><!--/.preface-->

			<ol class="list list-articles list-articles-countdown" reversed>
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
		</section><!--/.index-->
	</main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>