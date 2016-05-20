<!DOCTYPE html>
<html lang="en-gb" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8"/>

  <meta property="og:url" content="<?= $page->url() ?>"/>
  <meta property="og:title" content="<?= smartypants(html($page->title())) ?>"/>
<? if($page->text()->isNotEmpty()): ?>
  <meta property="og:description" content="<?= smartypants(excerpt($page->text(), $length=300)) ?>"/>
<? endif ?>
<? if($page->hasImages()): ?>
  <meta property="og:image" content="<?= $page->images()->first()->url() ?>"/>
  <meta name="twitter:card" content="summary_large_image"/>
<? else: ?>
  <meta name="twitter:card" content="summary"/>
<? endif ?>
  <meta name="twitter:site" content="@bradshawsguide"/>

  <meta name="referrer" content="origin"/>
  <meta name="robots" content="index, follow"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="manifest" href="<?= url('maniest.json') ?>"/>
  <link rel="shortcut icon" href="<?= url('assets/icons/icon.ico') ?>" type="image/ico"/>
  <link rel="mask-icon" href="<?= url('assets/icons/icon.svg') ?>" color="<?= $site->background_color() ?>"/>
  <link rel="apple-touch-icon" href="<?= url('assets/icons/icon.png') ?>" type="image/png"/>
<? if(!$page->isHomePage()): ?>
  <link rel="canonical" href="<?= $page->url() ?>"/>
  <? if($page->hasPrevVisible()): ?><link rel="prev" href="<?= $page->prevVisible()->url() ?>"/><? endif ?>
  <? if($page->hasNextVisible()): ?><link rel="next" href="<?= $page->nextVisible()->url() ?>"/><? endif ?>
<? endif ?>
  <link rel="stylesheet" href="<?= url('assets/app.css') ?>"/>

  <title><?= smartypants($page->title()) ?><? if(!$page->isHomePage()): ?> - <?= $site->title() ?><? endif ?></title>
</head>

<body>
  <? pattern('global/symbols') ?>
  <? pattern('global/banner') ?>

  <main class="c-main" role="main">
