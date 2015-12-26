<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
<section>
    <header>
        <h1><?= smartypants($page->title()) ?></h1>
    </header>
<?
$items = $page->children()->sortBy('title', 'asc');
if($items && $items->count()):
?>
    <ul class="listing">
    <? foreach($items as $item): ?>
        <li><a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a></li>
    <? endforeach ?>
    </ul>
<? endif ?>
</section>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>
