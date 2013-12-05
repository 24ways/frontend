<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "Drew McLellan"; ?>
<? $section = "authors"; ?>
<? $traverse = true; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>
<? inc('partial','menu') ?>

	<main class="main" role="main">
		<section class="index">
			<header class="preface h-card">
				<h1 class="preface_title p-name">Drew McLellan</h1>
				<div class="preface_main">
					<div class="lede p-note">
						<span class="avatar"><img class="preface_image u-photo" src="http://cloud.24ways.org/authors/rachelandrew280.jpg" width="280" height="280" alt="Rachel Andrew"></span>
						<p><strong class="fn n">Rachel Andrew</strong> is a Director of edgeofmyseat.com, a UK web development consultancy and creators of the small content management system, <a href="http://grabaperch.com">Perch</a>. She is the author of a number of web design and development books including The CSS3 Anthology for SitePoint and the <a href="http://www.fivesimplesteps.com/pages/pocket-guides">CSS3 Layout Modules Pocket Guide</a> to be published by Five Simple Steps in January 2013.</p>
						<p>When not writing about business and technology on her blog at <a href="http://rachelandrew.co.uk">rachelandrew.co.uk</a> or <a href="http://lanyrd.com/profile/rachelandrew/">speaking at conferences</a>, you will usually find Rachel out for a run, as she has a London Marathon place for 2013.</p>
						<p class="photo-credit">Photo: <a href="http://duncandavidson.com/">James Duncan Davidson</a></p>
					</div>
				</div>
			</header><!--/.preface-->

			<section class="section" id="articles">
				<header class="section_header">
					<h1 class="section_title">Articles by Drew</h1>
				</header>
				<div class="section_main">
					<ul class="list list-articles">
						<li class="list_item">
<?							inc('partial','summary-article') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-article') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-article') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-article') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-article') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-article') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-article') ?>
						</li>
						<li class="list_item">
<?							inc('partial','summary-article') ?>
						</li>
					</ul><!--/.list-articles-->
				</div>
			</section><!--/.section-->
		</section><!--/.index-->
	</main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>