<!DOCTYPE html>
<html lang="en-gb" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <link rel="preload" href="<?= vite()->file(
        "assets/fonts/scotchtext-roman.woff2"
    ) ?>" as="font" type="font/woff2" crossorigin>
    <?= vite()->css("assets/styles/app.css") ?>

    <link rel="manifest" href="/app.webmanifest" type="application/manifest+json">
    <link rel="shortcut icon" href="/assets/icons/app.ico" type="image/ico">
    <link rel="apple-touch-icon" href="/assets/icons/app.png" type="image/png">
    <link rel="mask-icon" href="/assets/icons/app.svg" color="<?= $site->background_color() ?>">
    <link rel="canonical" href="<?= $page->url() ?>">
    <?php if (
        isset($alternate)
    ): ?><link rel="alternate" href="<?= $alternate ?>" type="application/vnd.geo+json"><?php endif; ?>

    <?= vite()->js("assets/scripts/app.js", ["async" => true]) ?>

    <meta name="apple-mobile-web-app-title" content="<?= $site->title_short() ?>">
    <meta name="referrer" content="origin">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="<?= $site->theme_color() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:title" content="<?= Str::unhtml(kti($page->title())) ?>">
<?php if (!$page->desc()->empty()): ?>
    <meta property="og:description" content="<?= kti($page->desc()) ?>">
<?php else: ?>
    <meta property="og:description" content="<?= kti($site->desc()) ?>">
<?php endif; ?>
<?php if ($image = $page->image("cover.jpg")): ?>
    <meta property="og:image" content="<?= $image->crop(640, 360)->url() ?>">
<?php else: ?>
    <meta property="og:image" content="<?= url("/assets/icons/app.jpg") ?>">
<?php endif; ?>

    <title><?= e(
        !$page->isHomePage(),
        kti($page->title()) . " - " . $site->title(),
        kti($page->title())
    ) ?></title>
</head>

<body<?= isset($class) ? ' class="' . $class . '"' : null ?>>
    <?php snippet("skip-link"); ?>
    <?php snippet("banner"); ?>
    <?php snippet("navigation"); ?>
    <?php snippet("search"); ?>

    <main class="c-page c-page--<?= $page->template() ?>" id="main">
