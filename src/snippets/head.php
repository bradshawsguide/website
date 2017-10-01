<!DOCTYPE html>
<html lang="en-gb" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
  <link rel="preload" href="/assets/fonts/linuxlibertine-regular.woff2" as="font" type="font/woff2" crossorigin/>
  <link rel="stylesheet" href="/assets/app.css"/>
  <link rel="manifest" href="/app.webmanifest" type="application/manifest+json"/>
  <link rel="shortcut icon" href="/assets/icons/app.ico" type="image/ico"/>
  <link rel="apple-touch-icon" href="/assets/icons/app.png" type="image/png"/>
  <link rel="mask-icon" href="/assets/icons/app.svg" color="<?= $site->background_color() ?>"/>
  <link rel="canonical" href="<?= $page->url() ?>"/>
  <? if(isset($alternate)): ?><link rel="alternate" href="<?= $alternate ?>" type="application/vnd.geo+json"/><? endif ?>

  <script>
    var docEl = document.documentElement;
    docEl.className = docEl.className.replace('no-js', 'has-js');
  </script>
  <script src="/assets/app.js" async></script>

  <meta charset="utf-8"/>
  <meta name="apple-mobile-web-app-title" content="<?= $site->title_short() ?>"/>
  <meta name="referrer" content="origin"/>
  <meta name="robots" content="index, follow"/>
  <meta name="theme-color" content="<?= $site->theme_color() ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta property="og:url" content="<?= $page->url() ?>"/>
  <meta property="og:title" content="<?= str::unhtml($page->title()) ?>"/>
<? if(!$page->desc()->empty()): ?>
  <meta property="og:description" content="<?= str::xml($page->desc()) ?>"/>
<? else: ?>
  <meta property="og:description" content="<?= str::xml($site->desc()) ?>"/>
<? endif ?>
<? if($image = $page->image('cover.jpg')): ?>
  <meta property="og:image" content="<?= $image()->crop(640, 360)->url() ?>"/>
  <meta name="twitter:card" content="summary_large_image"/>
<? else: ?>
  <meta property="og:image" content="<?= url('/assets/icons/app.jpg') ?>"/>
  <meta name="twitter:card" content="summary"/>
<? endif ?>
  <meta name="twitter:site" content="@bradshawsguide"/>

  <title><?= str::unhtml($page->title()) ?><? if(!$page->isHomePage()): ?> - <?= $site->title() ?><? endif ?></title>
</head>

<body<?= isset($class) ? ' class="'.$class.'"' : null; ?>>
  <? pattern('global/banner') ?>

  <main class="c-main">
