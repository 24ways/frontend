<!DOCTYPE html>
<html lang="en-gb">

<head>
    <title><?= $GLOBALS['title'] ?> &#9670; 24 Ways</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/24ways"/>
    <link rel="stylesheet" type="text/css" href="/_css/styles.css"/>
    <script>
        var enhanced = function() {
            if (document.querySelector && window.addEventListener) {
                return true;
            } else {
                return false;
            }
        };
        if (enhanced()===true) {
            document.documentElement.className += ' enhanced';
        }
    </script>
</head>

<body>