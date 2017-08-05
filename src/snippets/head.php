<!DOCTYPE html>
<html lang="en-gb" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
  <meta charset="utf-8"/>
  <meta name="referrer" content="origin"/>
  <meta name="robots" content="index, follow"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta property="og:url" content="<?= $page->url() ?>"/>
  <meta property="og:title" content="<?= $page->title() ?>"/>
<? if(!$page->text()->empty()): ?>
  <meta property="og:description" content="<?= excerpt($page->text(), $length=300) ?>"/>
<? endif ?>
<? if($page->hasImages()): ?>
  <meta property="og:image" content="<?= $page->images()->first()->url() ?>"/>
  <meta name="twitter:card" content="summary_large_image"/>
<? else: ?>
  <meta name="twitter:card" content="summary"/>
<? endif ?>
  <meta name="twitter:site" content="@bradshawsguide"/>

  <link rel="manifest" href="/manifest.json"/>
  <link rel="shortcut icon" href="/assets/icons/icon.ico" type="image/ico"/>
  <link rel="mask-icon" href="/assets/icons/icon.svg" color="<?= $site->background_color() ?>"/>
  <link rel="apple-touch-icon" href="/assets/icons/icon.png" type="image/png"/>
  <link rel="canonical" href="<?= $page->url() ?>"/>
  <? if($page->hasPrevVisible()): ?><link rel="prev" href="<?= $page->prevVisible()->url() ?>"/><? endif ?>
  <? if($page->hasNextVisible()): ?><link rel="next" href="<?= $page->nextVisible()->url() ?>"/><? endif ?>
  <link rel="stylesheet" href="/assets/app.css"/>

  <script>
    var docEl = document.documentElement;
    docEl.className = docEl.className.replace('no-js', 'has-js');
  </script>
  <script src="/assets/app.js" async></script>

  <title><?= $page->title() ?><? if(!$page->isHomePage()): ?> - <?= $site->title() ?><? endif ?></title>
</head>

<body>
  <? pattern('global/banner') ?>

  <main class="c-main" role="main">
