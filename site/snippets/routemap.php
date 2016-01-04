<?
    $route = "- routes/".kirby()->request()->path()->last();
    $items = $pages->find('stations')->children()->filterBy('route', '*=', $route);
    if($items && $items->count()):
?>
    <section>
        <h1>Route Map</h1>
        <ol>
        <? foreach ($items as $item): ?>
            <?
            if($item->text()->isEmpty()) {
                $type = "unremarkable";
            } else {
                $type = "station";
            }

            $routes = related($item->route());

            foreach ($routes as $connection) {
                if ($connection->title() !== $page->title()) {
                    $type = "interchange";
                }
            }
            ?>
                <li class="<?= $type ?>">
                    <a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
                    <? if ($type == "interchange"): ?>
                        <ul>
                        <? foreach ($routes as $connection): ?>
                            <? if ($connection->title() !== $page->title()): ?>
                                <li>
                                    <a href="<?= $connection->url() ?>"><?= smartypants($connection->destination()) ?></a>
                                </li>
                            <? endif ?>
                        <? endforeach ?>
                        </ul>
                    <? endif ?>
                </li>
            <? endforeach ?>
        </ol>
    </section>
<? endif ?>
