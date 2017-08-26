<!DOCTYPE html>
<html lang="en-gb" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
  <link rel="preload" href="/assets/fonts/linuxlibertine-regular.woff2" as="font" type="font/woff2" crossorigin/>
  <link rel="stylesheet" href="/assets/app.css"/>
  <link rel="manifest" href="/manifest.json"/>
  <link rel="shortcut icon" href="/assets/icons/icon.ico" type="image/ico"/>
  <link rel="apple-touch-icon" href="/assets/icons/icon.png" type="image/png"/>
  <link rel="mask-icon" href="/assets/icons/icon.svg" color="<?= $site->background_color() ?>"/>
  <link rel="canonical" href="<?= $page->url() ?>"/>
  <? if(isset($alternate)): ?><link rel="alternate" href="<?= $alternate ?>" type="application/vnd.geo+json"/><? endif ?>
  <? if($page->hasPrevVisible()): ?><link rel="prev" href="<?= $page->prevVisible()->url() ?>"/><? endif ?>
  <? if($page->hasNextVisible()): ?><link rel="next" href="<?= $page->nextVisible()->url() ?>"/><? endif ?>

  <script>
    var docEl = document.documentElement;
    docEl.className = docEl.className.replace('no-js', 'has-js');
  </script>
  <script src="/assets/app.js" async></script>

  <meta charset="utf-8"/>
  <meta name="referrer" content="origin"/>
  <meta name="robots" content="index, follow"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta property="og:url" content="<?= $page->url() ?>"/>
  <meta property="og:title" content="<?= str::unhtml($page->title()) ?>"/>
<? if(!$page->desc()->empty()): ?>
  <meta property="og:description" content="<?= $page->desc() ?>"/>
<? else: ?>
  <meta property="og:description" content="<?= $site->desc() ?>"/>
<? endif ?>
<? if($page->hasImages()): ?>
  <meta property="og:image" content="<?= $page->image()->crop(640, 360)->url() ?>"/>
  <meta name="twitter:card" content="summary_large_image"/>
<? else: ?>
  <meta property="og:image" content="<?= url('/assets/icons/icon.png') ?>"/>
  <meta name="twitter:card" content="summary"/>
<? endif ?>
  <meta name="twitter:site" content="@bradshawsguide"/>

  <title><?= str::unhtml($page->title()) ?><? if(!$page->isHomePage()): ?> - <?= $site->title() ?><? endif ?></title>
</head>

<body<?= isset($class) ? ' class="'.$class.'"' : null; ?>>
  <? pattern('global/banner') ?>

  <main class="c-main">
