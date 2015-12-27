<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
<section>
    <header>
        <h1><?= smartypants($page->title()) ?></h1>
    </header>

<? $items = $pages->find('companies')->children()->sortBy('title', 'asc'); ?>
<? if($items && $items->count()): ?>
    <? foreach($items as $item): ?>
        <? $company = $item->title(); ?>
        <? if($company == 'Isle of Wight'): ?>
            <h2><a href="/regions/england/isle-of-wight">Isle of Wight</a></h2>
        <? elseif($company == 'London'): ?>
            <h2><a href="/regions/england/london">London</a></h2>
        <? else: ?>
            <h2><a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a></h2>
        <? endif ?>
        <? $routes = $pages->find('routes')->children()->filterBy('company', "$company")->sortBy('title', 'asc'); ?>
            <ul class="listing">
            <? if($company == 'London'): ?>
                <li><a href="/regions/england/london/visitors-guide">Guide through London</a></li>
                <li><a href="/regions/england/london/places-of-amusement">Places of Amusement, &#38;c.</a></li>
                <li><a href="/regions/england/london/summary">London Summary</a></li>
            <? endif ?>
            <? foreach($routes as $route): ?>
                <? if($route->text() != ''): ?>
                    <li><a href="<?= $route->url() ?>"><?= smartypants($route->title()) ?></a></li>
                <? endif ?>
            <? endforeach ?>
            </ul>
    <? endforeach ?>
<? endif ?>
</section>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>
