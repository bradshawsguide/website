<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => $page->title())); ?>
<?
$items = $page->children()->sortBy('title', 'asc');
if($items && $items->count()):
?>
    <ul>
    <? foreach($items as $item): ?>
        <li>
            <a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
        </li>
    <? endforeach ?>
    </ul>
<? endif ?>
</section>

<? snippet('_footer') ?>
