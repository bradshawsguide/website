<!DOCTYPE html>
<html lang="en-gb">
<head>
<?
    // Specify a character set in HTTP header
    header("Content-Type: text/html; charset=UTF-8");

    // Specify an expires value in header
    $seconds_to_cache = 7200; // 120 minutes
    $ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
    header("Expires: $ts");
    header("Pragma: cache");
    header("Cache-Control: max-age=$seconds_to_cache");

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
    <script>
        // Add a script element as a child of the body
        function downloadJSAtOnload() {
            var element = document.createElement("script");
            element.src = "<?= url('/assets/scripts/scripts.'.getFiledate('assets/scripts/scripts.min.js','YmdHis').'.min.js') ?>";
            document.body.appendChild(element);
        }

        // Check for browser support of event handling capability
        if (window.addEventListener) {
            window.addEventListener("load", downloadJSAtOnload, false);
        } else if (window.attachEvent) {
            window.attachEvent("onload", downloadJSAtOnload);
        } else {
            window.onload = downloadJSAtOnload;
        }
    </script>

    <link rel="stylesheet" href="<?= url('/assets/styles/styles.'.getFiledate('assets/styles/styles.min.css','YmdHis').'.min.css') ?>" />
    <link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" href="<?= url('assets/images/apple-touch-icon.png') ?>"/>
    <link rel="license" href="<?= html($site->licenseurl()) ?>"/>
    <link rel="author" href="<?= url('humans.txt') ?>"/>

    <meta charset="utf-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="application-name" content="<?= smartypants($site->shorttitle()) ?>">
    <meta name="apple-mobile-web-app-title" content="<?= smartypants($site->shorttitle()) ?>">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@bradshawsguide">
    <meta name="twitter:creator" content="@bradshawsguide">
    <meta name="twitter:title" content="<?= smartypants(html($page->title())) ?>"/>
<? if($page->text()->isNotEmpty()): ?>
    <meta name="twitter:description" content="<?= smartypants(truncate(excerpt($page->text(), $length=300), 200)) ?>"/>
<? endif ?>
<? if($page->hasImages()): ?>
    <meta name="twitter:image:src" content="http://bradshawsguide.org<?= $page->images()->first()->url() ?>">
<? endif ?>

    <title><?php if(!$page->isHomePage()): ?><?= smartypants(html($page->title())) ?> - <?php endif ?><?= smartypants(html($site->title())) ?></title>
</head>

<body>
    <header role="banner" id="top">
        <h1><a href="<?= url() ?>">Bradshaw&#8217;s <span>Guide</span></a></h1>
        <a href="#nav">Jump to navigation</a>
        <a href="#search">Jump to search</a>
    </header><!--/@banner-->

    <main role="main" id="main">
