<!DOCTYPE html>
<html lang="en-gb" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">

    <?= vite()->css("assets/styles/app.css") ?>

    <link href="/app.webmanifest" rel="manifest" type="application/manifest+json">
    <link href="/assets/icons/app.ico" rel="shortcut icon" type="image/ico">
    <link href="/assets/icons/app.png" rel="apple-touch-icon" type="image/png">
    <link href="/assets/icons/app.svg" rel="mask-icon" color="<?= $site->background_color() ?>">
    <link href="<?= $page->url() ?>" rel="canonical">
    <?php if (
        isset($alternate)
    ): ?><link href="<?= $alternate ?>" rel="alternate" type="application/vnd.geo+json"><?php endif; ?>

    <?= vite()->js("assets/scripts/app.js", ["async" => true]) ?>

    <meta name="referrer" content="origin">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:title" content="<?= kti($page->title()) ?>">
    <meta property="og:description" content="<?= kti(
        $page->desc()->isNotEmpty() ? $page->desc() : $site->desc()
    ) ?>">
<?php if ($image = $page->image("cover.jpg")): ?>
    <meta property="og:image" content="<?= $image
        ->thumb("opengraph")
        ->url() ?>">
<?php else: ?>
    <meta property="og:image" content="<?= url("/assets/icons/app.jpg") ?>">
<?php endif; ?>

    <title><?= e(
        !$page->isHomePage(),
        kti($page->title()) . " - " . $site->title(),
        kti($page->title())
    ) ?></title>
</head>

<body data-template="<?= $page->template() ?>">
    <?php snippet("skip-link"); ?>
    <?php snippet("banner"); ?>
    <?php snippet("navigation"); ?>
    <?php snippet("search"); ?>

    <main id="main">
