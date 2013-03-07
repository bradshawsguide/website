<!DOCTYPE html>
<html lang="en-gb">
<head>
    <title><?php if ($page->isHomePage() == false) : ?><?= smartypants($page->title()) ?> - <?php endif ?><?= smartypants($site->title()) ?></title>
    <meta charset="utf-8" />
    <meta name="description" content="<?= html($site->description()) ?>"/>
    <meta name="keywords" content="<?= html($site->keywords()) ?>"/>
    <meta name="robots" content="index, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="application-name" content="<?= smartypants($site->shorttitle()) ?>">
    <meta name="apple-mobile-web-app-title" content="<?= smartypants($site->shorttitle()) ?>">

    <link rel="apple-touch-icon-precomposed" href="<?= url('assets/images/apple-touch-icon.png') ?>"/>
    <link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Playfair+Display+SC:400,900">
    <? $lesscss = lesscss('/assets/styles/less/styles.less','/assets/styles/styles.css') ?>
<?= css('assets/styles/styles.css') ?>
</head>

<body>
