<?
    include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php');
    
    // Compile LESS CSS
    lesscss('/_assets/css/less/styles.less', '/_assets/css/styles.css');

    // Build out URI to reload from form dropdown
    $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    
    if (isset($_POST['uri']) && isset($_POST['section'])) {
        $pageURL .= $_POST[uri].$_POST[section];
        header("Location: $pageURL");
    }
?>
<!DOCTYPE html>
<html lang="en-gb">

<head>
    <title>Pattern Primer - Barebones</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/_css/styles.css" type="text/css"/>
    <style>
        body {
            padding: 4em 0 80em;
        }
        .bb-banner {
            background: rgba(0,0,0,0.75);
            box-shadow: 0 2px 0 rgba(0,0,0,0.25);
            padding: 0.5em;
            position: fixed;
            z-index: 99;
            left: 0;
            right: 0;
            top: 0;
        }
        .bb-banner h1 {
            color: #fff;
            font-size: 0.875em;
            line-height: 1.1429;
            letter-spacing: 0;
            margin: 0;
        }
        #pattern {
            position: absolute;
            right: 0;
            top: 0;
            }
            #pattern::after {
                color: #fff;
                content: "\25BE";
                width: 1em;
                position: absolute;
                right: 0.5em;
                top: 0.5em;
            }
        #pattern-select {
            -webkit-appearance: button;
            color: #fff;
            font-size: 0.75em;
            line-height: 1.3334;
            border: 0;
            border-left: 1px solid rgba(0,0,0,0.75);
            box-shadow: inset 1px 0 0 rgba(255,255,255,0.25);
            border-radius: 0;
            padding: 0.6667em 2em 0.6667em 1em;
            background-color: rgba(0,0,0,0.25);
        }
        .section-title {
            font-size: 1.5em;
            font-weight: 400;
            margin: 2em 0 0;
            padding: 1.6667em 0 0;
            box-shadow: 0 -2px 0 rgba(0,0,0,0.75);
        }
        .pattern {
            padding: 2em 0 0;
            position: relative;
        }
        .pattern-title::after {
            content: "Show markup and usage";
            font-size: 0.75rem;
            font-weight: normal;
            margin-left: 1em;
            opacity: 0.66;
            }
            .pattern-title:hover::after {
                opacity: 1;
            }
        .pattern-title a[rel="bookmark"] {
            font-weight: normal;
            line-height: 2em;
            text-align: center;
            width: 2em;
            border: 0;
            position: absolute;
            right: 0;
            top: 2em;
            }
            .pattern-title a[rel="bookmark"]:hover {
                background-color: rgba(0,0,0,0.1);
            }
        .pattern-primer {
            background-color: rgba(0,0,0,0.1);
            padding: 0.25em 0.5em;
            margin: 0 0 1em;
            clear: both;
        }
        .pattern-markup {
            margin: 0.5em 0;
            display: block;
        }
        .pattern-code {
            font-size: 0.75em;
            line-height: 1.3334;
            width: 100%;
        }
        .pattern-usage {
            font-size: 0.75rem;
            line-height: 1.3333em;
        }
    </style>
</head>

<body>
<? if(isset($_GET["url"])) : ?>
<?  include($patternsPath.$_GET["url"]) ?>
<? else : ?>
    <header role="banner" class="bb-banner" id="top">
        <h1>Pattern Primer</h1>
        
        <form action="" method="post" id="pattern">
            <select name="section" id="pattern-select">
                <option value="">Jump to section&#8230;</option>
<?              displayOptions($patternsPath); ?>
            </select>
            <input type="hidden" name="uri" value="<?= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
            <button type="submit" id="pattern-submit">Go</button>
        </form>
    </header><!--/@banner-->

    <main class="main" role="main">
<?      displayPatterns($patternsPath); ?>
    </main><!--@main-->
<? endif ?>
</body>
<script>
    (function (document, undefined) {
        // Add js class to body
        document.getElementsByTagName('body')[0].className += ' js';

        // Pattern selector
        document.getElementById('pattern-submit').style.display = 'none';
        document.getElementById('pattern-select').onchange = function() {
            //document.location=this.options[this.selectedIndex].value;
            var val = this.value;
            if (val !== "") {
                window.location = val;
            }
        }
    })(document);
</script>
</html>