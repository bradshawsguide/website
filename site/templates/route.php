<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('page/parent', array('parent' => $page->company())); ?>

<? if($page->text()->isNotEmpty()): ?>
    <?= kirbytext($page->text()) ?>
<? endif ?>

<?
$route = "- routes/".kirby()->request()->path()->last();
$items = $pages->find('stations')->children()->filterBy('route', '*=', $route);
if (isset($items)):
?>
    <section role="complementary">
        <h1>Route Map</h1>
        <ol>
        <? foreach ($items as $item): ?>
            <? if ($item->text() == ''): ?>
                <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
            <? else:
                $routes = related($item->route());
                $type = 'station';
                foreach ($routes as $connection) {
                    if ($connection->title() !== $page->title()) {
                        $type = 'interchange';
                    }
                }
            ?>
                <li class="<?= $type ?>">
                    <a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
                    <? if ($type == 'interchange'): ?>
                        <ul>
                    <? endif ?>
                    <? foreach ($routes as $connection): ?>
                        <? if ($connection->title() !== $page->title()): ?>
                            <li><a href="<?= $connection->url() ?>"><?= smartypants($connection->destination()) ?></a></li>
                        <? endif ?>
                    <? endforeach ?>
                    <? if ($type == 'interchange'): ?>
                        </ul>
                    <? endif ?>
                </li>
            <? endif ?>
        <? endforeach ?>
        </ol>
    </section>
<? endif ?>

<? if ($page->related()->isNotEmpty()): ?>
    <section>
        <h1>Related Links</h1>
        <?= kirbytext($page->related()) ?>
    </section>
<? endif ?>

    <? snippet('shorturl') ?>
</article>
<? snippet('_footer') ?>
