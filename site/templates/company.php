<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

<? if($page->text()->isNotEmpty()): ?>
    <?= kirbytext($page->text()) ?>
<? endif ?>

<section>
    <h1>Routes Operated</h1>
    <?
    $company2 = $page->title();
    $items2 = $pages->find('routes')->children()->filterBy('company', "$company2")->sortBy('title', 'asc');
    ?>
    <ul>
    <? foreach($items2 AS $item2): ?>
        <li><a href="<?= $item2->url() ?>"><?= smartypants($item2->title()) ?></a></li>
    <? endforeach ?>
    </ul>
</section>

<section>
    <h1>Stations Served</h1>
    <?
    $company = kirby()->request()->path(2);
    $alphabetise = alphabetise($pages->find('stations')->children()->filterBy('company', '*=', "$company")->sortBy('title', 'asc'));
    ?>
    <? foreach($alphabetise as $letter => $items): ?>
        <h2><?= str::upper($letter) ?></h2>
        <ul>
        <? foreach($items as $item): ?>
            <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
        <? endforeach ?>
        </ul>
    <? endforeach ?>
</section>

    <? snippet('page/section-related') ?>

    <? snippet('shorturl') ?>
</article>

<? snippet('_footer') ?>
