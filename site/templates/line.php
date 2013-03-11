<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <section class="container">
            <header>
                <hgroup>
                    <h1><?= smartypants($page->title().' '.$page->type()) ?></h1>
                    <h2><a href="/companies/<?= preg_replace('/-railway$/', '', str::urlify($page->company())) ?>"><?= smartypants($page->company()) ?></a></h2>
                </hgroup>
            </header>

            <? if ($page->text() != ''): ?>
            <div role="article">
                <?= kirbytext($page->text()) ?>
            </div><!--/@article-->
            <? endif ?>

            <section role="complementary">
                <h1>Route Map</h1>
                <?
                    $line = "- lines/".$site->uri->path(2);
                    $items = $pages->find('stations')->children()->filterBy('line', '*=', $line);
                ?>
                <ol class="line">
                <? foreach($items as $item): ?>
                    <? if ($item->text() == ''): ?>
                        <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
                    <? else: ?>
                        <?
                            $lines = related($item->line());
                            $type = 'station';
                            foreach($lines as $connection) {
                                if ($connection->title() !== $page->title()) {
                                    $type = 'interchange';
                                }
                            }
                        ?>
                        <li class="<?= $type ?>">
                            <a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
                            <? if ($type == 'interchange'):?><ul><? endif ?>
                            <? foreach($lines as $connection): ?>
                                <? if ($connection->title() !== $page->title()):?>
                                    <li><a href="<?= $connection->url() ?>"><?= smartypants($connection->title().' '.$connection->type()) ?></a></li>
                                <? endif ?>
                            <? endforeach ?>
                            <? if ($type == 'interchange'):?></ul><? endif ?>
                        </li>
                    <? endif ?>
                <? endforeach ?>
                </ol>
            </section><!--/@complementary-->
        </section>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>