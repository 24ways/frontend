<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? lesscss('/_css/less/styles.less', '/_css/styles.css'); ?>
<? $title = "About"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main class="main" role="main">
        <header class="preface">
            <h1 class="preface_title">About 24 Ways</h1>
        </header><!--/.preface-->

        <section class="section" id="sectionname">
            <header class="section_header">
                <h1 class="section_title">Section heading</h1>
            </header>
            <div class="section_main">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat, elit nec malesuada interdum, nibh erat convallis turpis, vel mollis mi sem ac arcu.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat, elit nec malesuada interdum, nibh erat convallis turpis, vel mollis mi sem ac arcu.</p>
                <ul>
                    <li><cite>24 ways</cite> is brought to you by <a href="http://grabaperch.com/?ref=24w01">Perch CMS</a>.</li>
                    <li>Produced by <a href="http://allinthehead.com/">Drew McLellan</a>, <a href="http://suda.co.uk/">Brian Suda</a>, <a href="http://maban.co.uk/">Anna Debenham</a> and <a href="http://fullcreammilk.co.uk/">Owen Gregory</a>.</li>
                    <li>Design delivered by <a href="http://paulrobertlloyd.com/">Paul Robert Lloyd</a>.</li>
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
                </ul>
            </div>
        </section><!--/.section-->
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>