<!DOCTYPE html>
<html lang="en-gb" xmlns:dct="http://purl.org/dc/terms/">
<head>
<? $lesscss = lesscss('/assets/styles/less/styles.less','/assets/styles/styles.css') ?>
    <?= css('assets/styles/styles.css') ?>
    <link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" href="<?= url('assets/images/apple-touch-icon.png') ?>"/>
    <!--link rel="apple-touch-startup-image" href="<?= url('assets/images/apple-touch-startup-image.png') ?>" media="(device-width: 320px)"/-->
    <!--link rel="apple-touch-startup-image" href="<?= url('assets/images/apple-touch-startup-image@2x.png') ?>" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)"-->
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
