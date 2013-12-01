<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "About"; ?>
<? $section = "about"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>
<? inc('partial','menu') ?>

	<main class="main" role="main">
		<article>
			<header class="preface">
				<h1 class="preface_title">About 24 ways</h1>
			</header><!--/.preface-->

			<section class="section" id="sectionname">
				<header class="section_header">
					<h1 class="section_title">Background</h1>
				</header>
				<div class="section_main">
					<p class="lede"><cite>24 ways</cite> is the advent calendar for web geeks. For twenty-four days each December we publish a daily dose of web design and development goodness to bring you all a little Christmas cheer.</p>
					<p>Back in December 2005, Drew McLellan set up what he called &#8220;<a href="http://allinthehead.com/retro/275/24-ways-in-24-days">a festive blog</a>&#8221; with a new article each day written by experts sharing their knowledge. Articles present ideas, techniques or experiences that you can take and apply to your own work. Code snippets, advice about business and clients, workflow and workshopping, design inspiration: 24 ways has it all.</p>
					<p>With over one hundred authors and almost two hundred articles, 24 ways is very proud to have become an annual fixture in the calendars of web geeks. Since 2005, 24 ways has always combined learning and sharing, both vital aspects of the continued strength of the web community. As Drew wrote, <q>There&#8217;s a lot of fun to be had in learning something that will impress those you work with &#8211; especially if then you can share what you know to everyone&#8217;s benefit.</q></p>
					<p>Next year (2014) will see 24 ways reach its tenth year. There will be cake.</p>
				</div>
			</section><!--/.section-->

			<section class="section" id="sectionname">
				<header class="section_header">
					<h1 class="section_title">Credits</h1>
				</header>
				<div class="section_main">
					<ul>
						<li>
							<cite>24 ways</cite> is brought to you by:
<?						  inc('partial','promo') ?>
						</li>
						<li>Produced by <a href="http://allinthehead.com/">Drew McLellan</a>, <a href="http://suda.co.uk/">Brian Suda</a>, <a href="http://maban.co.uk/">Anna Debenham</a> and <a href="http://fullcreammilk.co.uk/">Owen Gregory</a>.</li>
						<li>Designed by <a href="http://paulrobertlloyd.com/">Paul Robert Lloyd</a>.</li>
						<li>Possible only with the help and dedication of <a href="/pages/authors/">our authors</a>.</li>
					</ul>
				</div>
			</section><!--/.section-->

			<section class="section" id="colophon">
				<header class="section_header">
					<h1 class="section_title">Colophon</h1>
				</header>
				<div class="section_main">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat, elit nec malesuada interdum, nibh erat convallis turpis, vel mollis mi sem ac arcu.</p>
					<ul>
						<li>Hosted by <a href="http://www.memset.com/">Memset</a> <a href="http://www.memset.com/dedicated-servers/">Dedicated Servers</a>.</li>
						<li>Type set in <a href="http://www.latofonts.com/lato-free-fonts/">Lato</a> (by Łukasz Dziedzic) and <a href="http://ebensorkin.wordpress.com">Merriweather</a> (by Eben Sorkin) and served via <a href="http://www.google.com/fonts">Google Fonts</a>.</li>
						<li><a href="http://www.webalys.com/minicons/">Minicons</a> by Vincent Le Miogn.</li>
						<li><a href="https://github.com/leaverou/prism/">prism.js</a> by Lea Verou.</li>
						<li><a href="https://github.com/filamentgroup/Ajax-Include-Pattern/">AjaxInclude</a> by Filament Group.
					</ul>
				</div>
			</section><!--/.section-->
		</article><!--/.article-->
	</main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>