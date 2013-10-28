<?
ini_set('error_reporting', -1);
ini_set('display_errors', 1);

include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/vendor/paulrobertlloyd/barebones/barebones.inc.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/vendor/leafo/lessphp/lessc.inc.php');

function lesscss($input, $output) {
    // Setup LESS compiler
    $inputFile = $_SERVER['DOCUMENT_ROOT'].$input;
    $outputFile = $_SERVER['DOCUMENT_ROOT'].$output;
    $less = new lessc;

    // Create a new cache object, and compile
    $cache = $less->cachedCompile($inputFile);
    file_put_contents($outputFile, $cache["compiled"]);

    // The next time we run, write only if it has updated
    $last_updated = $cache["updated"];
    $cache = $less->cachedCompile($cache);
    if ($cache["updated"] > $last_updated) {
        file_put_contents($outputFile, $cache["compiled"]);
    }
}