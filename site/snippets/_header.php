<!DOCTYPE html>
<html lang="en-gb" xmlns:dct="http://purl.org/dc/terms/">
<head>
<?
    // Compile and cache LESS CSS file
    function autoCompileLess($input, $output) {
        $inputFile = $_SERVER['DOCUMENT_ROOT'].$input;
        $outputFile = $_SERVER['DOCUMENT_ROOT'].$output;
        $cacheFile = $inputFile.".cache";

        if (file_exists($cacheFile)) {
            $cache = unserialize(file_get_contents($cacheFile));
        } else {
            $cache = $inputFile;
        }

        $less = new lessc;
        $newCache = $less->cachedCompile($cache);

        if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
            file_put_contents($cacheFile, serialize($newCache));
            file_put_contents($outputFile, $newCache['compiled']);
        }
    }

    autoCompileLess('/assets/styles/less/styles.less', '/assets/styles/styles.css');

    // Get modified file date
    function getFiledate($file, $format) {
        if (is_file($file)) {
            $filePath = $file;
            if (!realpath($filePath)) {
                $filePath = $_SERVER["DOCUMENT_ROOT"].$filePath;
            }
            $fileDate = filemtime($filePath);
            if ($fileDate) {
                $fileDate = date("$format",$fileDate);
                return $fileDate;
            }
            return false;
        }
        return false;
    }
?>
    <link rel="stylesheet" href="/assets/styles/styles.css?v=<?= getFiledate('assets/styles/styles.css','YmdHis'); ?>" />
    <link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" href="<?= url('assets/images/apple-touch-icon.png') ?>"/>
    <link rel="schema.dc" href="http://purl.org/dc/elements/1.1/"/>
    <link rel="license" href="<?= html($site->licenseurl) ?>"/>
    <link rel="author" href="humans.txt"/>

    <meta charset="utf-8" />
    <meta name="robots" content="index, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="application-name" content="<?= smartypants($site->shorttitle) ?>">
    <meta name="apple-mobile-web-app-title" content="<?= smartypants($site->shorttitle) ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="dc.title" content="<?= html($site->title) ?>"/>
    <meta name="dc.creator" content="<?= html($site->author) ?>"/>
    <meta name="dc.publisher" content="<?= html($site->publisher) ?>"/>
    <meta name="dc.description" content="<?= html($site->description) ?>"/>
    <title><?php if ($page->isHomePage() == false) : ?><?= html($page->title) ?> - <?php endif ?><?= smartypants($site->title) ?></title>
</head>

<body>
    <header role="banner" id="top">
        <h1><a href="<?= url() ?>">Bradshaw&#8217;s <span>Guide</span></a></h1>
        <a href="#nav">Jump to navigation</a>
        <a href="#search">Jump to search</a>
    </header><!--/@banner-->

    <main role="main" id="main">
